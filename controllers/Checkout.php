<?php

use LDAP\Result;

class Checkout extends Controller
{
    public function __construct()
    {
        $this->ProductModel = $this->model('ProductModel');
        $this->UserModel = $this->model('UserModel');
        $this->CustomerModel = $this->model('CustomerModel');
        $this->OrderModel = $this->model('OrderModel');
        $this->OrderDetailModel = $this->model('OrderDetailModel');
    }

    public function index()
    {
        if (!empty($_SESSION['user_id'])) {
            if ($_SESSION['user_type'] == 1) {
                $cus = $this->CustomerModel->getCustomerByUserId($_SESSION['user_id']);
                $this->view('checkout', ['cus' => $cus]);
            }
        } else {
            $this->view('login', []);
        }
    }

    public function refreshOrderDetails()
    {
        $this->view('order_details');
    }

    public function order()
    {
        $date = date('d-m-Y H:i:s');

        $order_result = $this->OrderModel->addOrderHaveCus((int)$_SESSION['order']['cus_id'], $_SESSION['order']['firstName'], $_SESSION['order']['lastName'], $_SESSION['order']['street'], $_SESSION['order']['town'], $_SESSION['order']['phone'], $_SESSION['order']['email'], $date, $_SESSION['order']['notes']);


        if ($order_result) {
            $order_id = $this->OrderModel->getOrderId();
            for ($i = 0; $i < count($_SESSION['cart']); $i++) {
                $prod_quantity = $this->ProductModel->getQuantity($_SESSION['order']['prod_id'][$i]);
                $prod_quantity_new = $prod_quantity - $_SESSION['order']['quantity'][$i];
                $this->ProductModel->reduceQuantity($_SESSION['order']['prod_id'][$i], $prod_quantity_new);
                $this->OrderDetailModel->addOrderDetail($order_id[0]['order_id'], $_SESSION['order']['prod_id'][$i], $_SESSION['order']['prod_name'][$i], $_SESSION['order']['quantity'][$i], $_SESSION['order']['prod_price'][$i]);
            }

            if (isset($_SESSION['cart'])) {
                unset($_SESSION['cart']);
            }
            if (isset($_SESSION['order'])) {
                unset($_SESSION['order']);
            }
        }

        header('location:' . URLROOT . '/Home');
    }

    public function ordermomo()
    {
        // if (isset($_GET['partnerCode'])) {
        //     $partnerCode = $_GET['partnerCode'];
        //     if ($_GET['resultCode'] == 0) {
        //         echo ("hi");
        //     }
        //     echo ($partnerCode);
        // }

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            // $partnerCode = $_POST['partnerCode'];
            // $resultCode = $_POST['errorCode'];
            $partnerCode = $_GET['partnerCode'];
            header('Content-Type: application/json');
            echo json_encode(array('partnerCode' => $_GET['partnerCode']));
        }
    }


    public function addOrder()
    {
        if (isset($_POST['order'])) {
            $order = array(
                "cus_id" => $_POST['cus_id'],
                "firstName" => $_POST['firstNameInput'],
                "lastName" => $_POST['lastNameInput'],
                "street" => $_POST['streetInput'],
                "town" => $_POST['townInput'],
                "phone" => $_POST['phoneInput'],
                "email" => $_POST['emailInput'],
                "notes" => $_POST['notesInput'],
                "prod_id" => $_POST['prod_id'],
                "quantity" => $_POST['quantity'],
                "prod_price" => $_POST['prod_price'],
                "prod_name" => $_POST['prod_name']
            );

            $_SESSION['order'] = $order;


            if ($_POST['optradio'] == 'Momo') {
                $this->momo();
            } else {
                $this->order();
            }
        }
    }

    public function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data)
            )
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }

    public function momo()
    {
        header(
            'Content-type: text/html; charset=utf-8'
        );

        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";


        $partnerCode = 'MOMOBKUN20180529';
        $accessKey = 'klm05TvNBzhg7h7j';
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
        $orderInfo = "Thanh toán qua MoMo";
        // $amount = "10000";
        $amount = (string)((float)$_POST['total'] * 25000);
        $orderId = time() . "";
        $redirectUrl = URLROOT . '/Checkout/order';
        $ipnUrl = URLROOT . '/Checkout/order';
        $extraData = "";



        $requestId = time() . "";
        $requestType = "captureWallet";
        // $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
        //before sign HMAC SHA256 signature
        $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
        $signature = hash_hmac("sha256", $rawHash, $secretKey);
        $data = array(
            'partnerCode' => $partnerCode,
            'partnerName' => "Test",
            "storeId" => "MomoTestStore",
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'lang' => 'vi',
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature
        );
        $result = $this->execPostRequest($endpoint, json_encode($data));
        $jsonResult = json_decode($result, true);  // decode json
        //Just a example, please check more in there
        header('Location: ' . $jsonResult['payUrl']);
    }
}
