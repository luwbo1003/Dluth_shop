<?php
class Manage extends Controller
{
    public function __construct()
    {
        $this->ProductModel = $this->model('ProductModel');
        $this->CategoryModel = $this->model('CategoryModel');
        $this->DescriptionModel = $this->model('DescriptionModel');
        $this->UserModel = $this->model('UserModel');
        $this->CustomerModel = $this->model('CustomerModel');
        $this->StaffModel = $this->model('StaffModel');
        $this->OrderModel = $this->model('OrderModel');
        $this->OrderDetailModel = $this->model('OrderDetailModel');
    }

    public function index()
    {
        if ($_SESSION['user_type'] == 0) {
        }
    }

    public function showEdit($id)
    { {
            if ($_SESSION['user_type'] == 0) {
                if (isset($_POST['editEmployee'])) {
                    $emp = $this->StaffModel->getStaffByUserId($id);
                    $this->view('m_editpage', ['emp' => $emp]);
                } else if (isset($_POST['editProduct'])) {
                    $prod = $this->ProductModel->getProduct($id);
                    $des = $this->DescriptionModel->getDes($id);
                    $category_list = $this->CategoryModel->getCategoryList();
                    $this->view('m_editpage', ['prod' => $prod, 'category_list' => $category_list, 'des' => $des]);
                } else if (isset($_POST['editCategory'])) {
                    $cate = $this->CategoryModel->getCategory($id);
                    $this->view('m_editpage', ['cate' => $cate]);
                } else if (isset($_POST['editCustomer'])) {
                    $cus = $this->CustomerModel->getCustomerByUserId($id);
                    $this->view('m_editpage', ['cus' => $cus]);
                }
            }
        }
    }


    // Product Management

    public function product()
    {
        if ($_SESSION['user_type'] == 0) {
            $category_list = $this->CategoryModel->getCategoryList();
            $number = 1;
            $this->view('m_product', ['category_list' => $category_list, 'number' => $number]);
        }
    }

    public function search($number)
    {
        $keyword = '';
        if (isset($_POST['keyword'])) {
            $keyword = $_POST['keyword'];
        }

        $cateArray = array();

        $cateList = array();
        if ($_POST['category'] == 'all') {
            $cateList = $this->CategoryModel->getCategoryIdList();
        } else {
            $cateArray['cate_id'] = $_POST['category'];
            array_push($cateList, $cateArray);
        }

        $from = ($number - 1) * 6;
        $page = $this->ProductModel->countPageProductAdmin($keyword, $cateList);

        $category_name = array();
        $prodList = $this->ProductModel->searchProductAdmin($keyword, $cateList, $from);
        if (isset($prodList)) {
            foreach ($prodList as $value) {
                $cate = $this->CategoryModel->getCategory($value['cate_id']);
                array_push($category_name, $cate);
            }
            $this->view('m_product_sub', ['prod' => $prodList, 'page' => $page, 'category' => $category_name, 'number' => $number]);
        }
    }

    public function addProduct()
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['addProduct'])) { //????
                $pro_name = $_POST['pro_name'];
                $pro_price = $_POST['pro_price'];
                $pro_quantity = $_POST['prod_quantity'];
                $category_id = $_POST['category'];
                $brand_des = $_POST['brand'];
                $maintance_des = $_POST['maintenance'];

                $size = $_POST['size'];
                $material = $_POST['material'];
                $detail_1 = $_POST['detail_1'];
                $detail_2 = $_POST['detail_2'];
                $origin = $_POST['origin'];

                $prodResult = $this->ProductModel->addProduct($pro_name, $pro_quantity, $pro_price, $category_id, $brand_des, $maintance_des);
                if ($prodResult) {
                    $this->DescriptionModel->addDes($size, $material, $detail_1, $detail_2, $origin);
                    $pro_id = $this->ProductModel->getProductId();
                    $pro_img_id = "img" . $pro_id;
                    $this->ProductModel->addDesIdProduct($pro_id, $pro_id);
                    $this->uploadPicture($pro_id, $pro_img_id);
                    header('location:' . URLROOT . '/Manage/product');
                }
            }
        }
    }

    public function editProduct()
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['editProduct'])) {

                switch ($_POST['editProduct']) {
                    case 'edit':
                        $this->ProductModel->editProduct($_POST['pro_id'], $_POST['pro_name'], $_POST['prod_quantity'], $_POST['category'], $_POST['pro_price'], $_POST['brand'], $_POST['maintenance']);
                        $this->DescriptionModel->editDescription($_POST['pro_id'], $_POST['size'], $_POST['material'], $_POST['detail_1'], $_POST['detail_2'], $_POST['origin']);
                        header('location:' . URLROOT . '/Manage/product');
                        break;

                    case 'cancel':
                        header('location:' . URLROOT . '/Manage/product');
                        break;

                    default:
                        break;
                }
            }
        }
    }

    public function deleteProduct($id)
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['deleteProduct'])) {
                $this->ProductModel->deleteProduct($id);
                header('location:' . URLROOT . '/Manage/product');
            }
        }
    }

    public function uploadPicture($pro_id, $pro_img_id)
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['addProduct'])) {
                $filename = $_FILES['fileToUpload']['name'];
                $s = explode(".", $filename);
                $this->ProductModel->addImageId($pro_id, $pro_img_id . "." . $s[1]);
                move_uploaded_file($_FILES['fileToUpload']['tmp_name'], APPROOT . "/public/images/" . $pro_img_id . "." . $s[1]);
            }
        }
    }

    // Category Management

    public function category()
    {
        if ($_SESSION['user_type'] == 0) {
            $number = 1;
            $this->view('m_category', ['number' => $number]);
        }
    }

    public function searchCategory($number)
    {
        $keyword = '';
        if (isset($_POST['keyword'])) {
            $keyword = $_POST['keyword'];
        }

        $from = ($number - 1) * 6;
        $page = $this->CategoryModel->countPageCategoryAdmin($keyword);

        $category_list = $this->CategoryModel->searchCategoryAdmin($keyword, $from);
        $count_prod = array();
        if (isset($category_list)) {
            foreach ($category_list as $value) {
                $id = $value['cate_id'];
                $count = $this->CategoryModel->countProdPerCate($id);
                array_push($count_prod, $count);
            }

            $this->view('m_category_sub', ['count_prod' => $count_prod, 'category_list' => $category_list, 'number' => $number, 'page' => $page]);
        }
    }

    public function addCategory()
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['addCategory'])) {
                $name = $_POST['category'];
                $check = $this->CategoryModel->duplicateCategory($name);
                if ($name == $check) {
                    $this->CategoryModel->editStatusCategory($name);
                    header('location:' . URLROOT . '/Manage/category');
                } else {
                    $this->CategoryModel->addCategory($name);
                    header('location:' . URLROOT . '/Manage/category');
                }
            }
        }
    }

    public function editCategory()
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['editCategory'])) {
                switch ($_POST['editCategory']) {
                    case 'edit':
                        $this->CategoryModel->editCategory($_POST['cate_id'], $_POST['cate_name']);
                        header('location:' . URLROOT . '/Manage/category');
                        break;

                    case 'cancel':
                        header('location:' . URLROOT . '/Manage/category');
                        break;

                    default:
                        break;
                }
            }
        }
    }

    public function deleteCategory($id)
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['deleteCategory'])) {
                $this->CategoryModel->deleteCategory($id);
                header('location:' . URLROOT . '/Manage/category');
            }
        }
    }

    public function searchByCategory()
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['category'])) {
                if ($_POST['category'] == "all") {
                } else {
                    $prod = $this->ProductModel->getProductByCategory($_POST['category']);
                    $cate_name = array();
                    $image = array();
                    $category_list = $this->CategoryModel->getCategoryList();
                    foreach ($prod as $value) {
                        $cate = $this->CategoryModel->getCategory($value['category_id']);
                        $img = $this->ImageModel->getImage($value['pro_image_id'])[0];
                        array_push($image, $img);
                        array_push($cate_name, $cate);
                    }

                    $this->view('m_product', ['prod' => $prod, 'category' => $cate_name, 'image' => $image, 'category_list' => $category_list]);
                }
            }
        }
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // Staff Management

    public function Staff()
    {
        if ($_SESSION['user_type'] == 0) {
            $number = 1;
            $this->view("m_staff", ['number' => $number]);
        }
    }

    public function searchStaff($number)
    {
        $keyword = '';
        if (isset($_POST['keyword'])) {
            $keyword = $_POST['keyword'];
        }

        $from = ($number - 1) * 6;
        $page = $this->StaffModel->countPageStaffAdmin($keyword);

        $emp = $this->StaffModel->searchStaffAdmin($keyword, $from);
        if (isset($emp)) {
            $this->view('m_staff_sub', ['emp' => $emp, 'number' => $number, 'page' => $page]);
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
        // Check if password is correct
        if ($_POST['passwordInput1'] != $_POST['passwordInput2']) {
            return true;
        }
    }

    public function addStaff()
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['addStaff'])) {
                if ($this->validateEmail()) {
                } else if ($this->validatePassword()) {
                } else {
                    $userResult = $this->UserModel->addUser($_POST['emailInput'], md5($_POST['passwordInput1']), 0);
                    if ($userResult) {
                        $user_id = $this->UserModel->getUserId($_POST['emailInput'])[0]['user_id'];
                        $StaffResult = $this->StaffModel->addStaff($user_id, $_POST['firstNameInput'], $_POST['lastNameInput'], $_POST['phone'], $_POST['address']);
                        if ($StaffResult) {
                            header('location:' . URLROOT . '/Manage/Staff');
                        }
                    }
                }
            }
        }
    }

    public function editProfile()
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['editProfile'])) {
                switch ($_POST['editProfile']) {
                    case 'edit':
                        $this->UserModel->changeEmail($_POST['user_id'], $_POST['emailInput']);
                        $this->StaffModel->editStaff($_POST['user_id'], $_POST['firstNameInput'], $_POST['lastNameInput'], $_POST['phone'], $_POST['address']);
                        header('location:' . URLROOT . '/Manage/Staff');
                        break;

                    case 'cancel':
                        header('location:' . URLROOT . '/Manage/Staff');
                        break;

                    default:
                        break;
                }
            }
        }
    }

    public function editAccount()
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['editAccount'])) {
                switch ($_POST['editAccount']) {
                    case 'edit':
                        if ($this->validatePassword()) {
                        } else {
                            $this->UserModel->changePassword($_POST['user_id'], md5($_POST['passwordInput1']));
                            header('location:' . URLROOT . '/Manage/Staff');
                        }
                        break;

                    case 'cancel':
                        header('location:' . URLROOT . '/Manage/Staff');
                        break;

                    default:
                        break;
                }
            }
        }
    }

    public function deleteStaff($id)
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['deleteStaff'])) {
                $this->StaffModel->deleteStaff($id);
                $this->UserModel->deleteUser($id);
                header('location:' . URLROOT . '/Manage/Staff');
            }
        }
    }

    // Customer Management
    public function customer()
    {
        if ($_SESSION['user_type'] == 0) {
            $number = 1;
            $this->view("m_customer", ['number' => $number]);
        }
    }

    public function searchCustomer($number)
    {
        $keyword = '';
        if (isset($_POST['keyword'])) {
            $keyword = $_POST['keyword'];
        }

        $from = ($number - 1) * 6;
        $page = $this->CustomerModel->countPageCustomerAdmin($keyword);

        $cus = $this->CustomerModel->searchCustomerAdmin($keyword, $from);
        if (isset($cus)) {
            $this->view('m_customer_sub', ['cus' => $cus, 'number' => $number, 'page' => $page]);
        }
    }

    public function editCustomer()
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['editCustomer'])) {
                switch ($_POST['editCustomer']) {
                    case 'edit':
                        $this->CustomerModel->editCustomer($_POST['user_id'], $_POST['firstNameInput'], $_POST['lastNameInput'], $_POST['birthday'], $_POST['phone'], $_POST['address'], $_POST['city']);
                        $this->UserModel->changeEmail($_POST['user_id'], $_POST['emailInput']);
                        header('location:' . URLROOT . '/Manage/customer');
                        break;

                    case 'cancel':
                        header('location:' . URLROOT . '/Manage/customer');
                        break;

                    default:
                        break;
                }
            }
        }
    }

    public function deleteCustomer($id)
    {
        if ($_SESSION['user_type'] == 0) {
            if (isset($_POST['deleteCustomer'])) {
                $cus = $this->CustomerModel->deleteCustomer($id);
                $user = $this->UserModel->deleteUser($id);
                header('location:' . URLROOT . '/Manage/customer');
            }
        }
    }

    // Order Management
    public function order()
    {
        if ($_SESSION['user_type'] == 0) {
            $number = 1;
            $this->view("m_order", ['number' => $number]);
        }
    }

    public function viewOrderDetails($order_id)
    {
        if ($_SESSION['user_type'] == 0) {
            $order = $this->OrderModel->getOrderById($order_id);
            $order_details = $this->OrderDetailModel->getOrderDetailsList($order_id);
            $this->view('m_order_details', ['order' => $order, 'order_details' => $order_details]);
        }
    }

    public function approveOrder($order_id)
    {
        if ($_SESSION['user_type'] == 0) {
            $order = $this->OrderModel->approveOrder($order_id);
            if ($order) {
                header('location:' . URLROOT . '/Manage/order');
            }
        }
    }

    public function searchOrder($number)
    {
        if ($_SESSION['user_type'] == 0) {
            $keyword = '';
            if (isset($_POST['keyword'])) {
                $keyword = $_POST['keyword'];
            }

            $from = ($number - 1) * 6;
            $page = $this->OrderModel->countPageOrderAdmin($keyword);

            $order = $this->OrderModel->searchOrderAdmin($keyword, $from);
            if (isset($order)) {
                $this->view('m_order_sub', ['order' => $order, 'number' => $number, 'page' => $page]);
            }
        }
    }
}
