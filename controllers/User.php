<?php
class User extends Controller
{
    public function __construct()
    {
        $this->UserModel = $this->model('UserModel');
        $this->CustomerModel = $this->model('CustomerModel');
        $this->StaffModel = $this->model('StaffModel');
        $this->OrderModel = $this->model('OrderModel');
        $this->OrderDetailModel = $this->model('OrderDetailModel');
    }

    public function index()
    {
        if (!empty($_SESSION['user_id'])) {
            header('location:' . URLROOT . '/User/profile');
        } else {
            $this->view('login', []);
        }
    }

    public function profile()
    {
        if (!empty($_SESSION['user_id'])) {
            if ($_SESSION['user_type'] == 0) {
                header('location:' . URLROOT . '/Manage/product');
            } else if ($_SESSION['user_type'] == 1) {
                $cus = $this->CustomerModel->getCustomerByUserId($_SESSION['user_id']);
                $this->view('profile', ['cus' => $cus]);
            }
        }
    }

    public function history()
    {
        $cus = $this->CustomerModel->getCustomerByUserId($_SESSION['user_id']);
        $cus_id = $cus[0]['cus_id'];
        $orders = $this->OrderModel->getOrderByCusId($cus_id);

        $orderdetail = array();
        foreach ($orders as $value) {
            array_push($orderdetail, $this->OrderDetailModel->getOrderDetailsList($value['order_id']));
        }

        $total = array();
        foreach ($orderdetail as $value) {
            $total_tmp = 0;
            foreach ($value as $vl) {
                $total_tmp += (float)$vl['prod_price'] * (int)$vl['quantity'];
            }
            array_push($total, $total_tmp + 10);
        }

        $this->view('order_history', ['orders' => $orders, 'total' => $total]);
    }

    public function invoice($order_id)
    {
        $orderdetail = $this->OrderDetailModel->getOrderDetailsList($order_id);
        $order = $this->OrderModel->getOrderById($order_id);

        $total = 0;
        foreach ($orderdetail as $value) {
            $total += (float)$value['prod_price'] * (int)$value['quantity'];
        }

        $this->view('invoice', ['orderdetail' => $orderdetail, 'order' => $order, 'total' => $total]);
    }

    public function logout()
    {
        session_destroy();
        header('location:' . URLROOT . '/Home');
    }

    public function login()
    {
        if (!empty($_SESSION['user_id'])) {
            header('location:' . URLROOT . '/Home');
        } else {
            $user = $this->UserModel->getUser($_POST['emailInputLogin'], md5($_POST['passwordInput']));
            if (!empty($user)) {
                $_SESSION['user_id'] = $user[0]['user_id'];
                $_SESSION['user_type'] = $user[0]['user_type'];
                $_SESSION['user_email'] = $user[0]['email'];

                if ($_SESSION['user_type'] == 0) {
                    $staff = $this->StaffModel->getStaffByUserId($_SESSION['user_id']);
                    $_SESSION['user_name'] = $staff[0]['lastname'] . " " . $staff[0]['firstname'];
                    echo URLROOT . '/Manage/product';
                } else if ($_SESSION['user_type'] == 1) {
                    echo URLROOT . '/Home';
                }
            } else {
                echo "wrongpass";
            }
        }
    }

    public function validateEmail()
    {
        // Check if email exist
        $user = $this->UserModel->getUserList();
        foreach ($user as $value) {
            if ($value['email'] == $_POST['emailInput']) {
                return true;
            }
        }
    }

    public function validatePassword()
    {
        //Check if password is correct
        if ($_POST['passwordInput1'] != $_POST['passwordInput2']) {
            return true;
        }
    }

    public function register()
    {
        if ($this->validateEmail()) {
            echo "emailexist";
        } else if ($this->validatePassword()) {
            echo "unmatchedpass";
        } else {
            $userResult = $this->UserModel->addUser($_POST['emailInput'], md5($_POST['passwordInput1']), 1);
            if ($userResult) {
                $user_id = $this->UserModel->getUserId($_POST['emailInput'])[0]['user_id'];
                $customerResult = $this->CustomerModel->addCustomer($user_id, $_POST['firstNameInput'], $_POST['lastNameInput'], $_POST['phoneInput'], $_POST['addressInput'], $_POST['cityInput']);
                if ($customerResult) {
                    echo "success";
                }
            }
        }
    }

    public function editProfile()
    {
        if (!empty($_SESSION['user_id'])) {
            $userResult = $this->UserModel->changeEmail($_SESSION['user_id'], $_POST['emailInput']);
            if ($userResult) {
                $customerResult = $this->CustomerModel->editCustomer($_SESSION['user_id'], $_POST['firstNameInput'], $_POST['lastNameInput'], $_POST['phoneInput'], $_POST['addressInput'], $_POST['cityInput']);
                if ($customerResult) {
                    echo "changProSuc";
                }
            }
        }
    }

    public function editAccount()
    {
        if (!empty($_SESSION['user_id'])) { {
                if ($this->validatePassword()) {
                    echo "unmatchedpass";
                } else {
                    $user = $this->UserModel->getUser($_SESSION['user_email'], md5($_POST['oldPasswordInput']));
                    if (!empty($user)) {
                        $userResult = $this->UserModel->changePassword($_SESSION['user_id'], md5($_POST['passwordInput1']));
                        if ($userResult) {
                            echo "changeAccSuc";
                        }
                    } else {
                        echo "passnotexist";
                    }
                }
            }
        }
    }

    public function loadMessLogin($msg)
    {
        $this->view('mess_login', ['msg' => $msg]);
    }
}
