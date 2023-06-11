<?php
class Search extends Controller
{
    public function __construct()
    {
        $this->ProductModel = $this->model('ProductModel');
        $this->CategoryModel = $this->model('CategoryModel');
    }

    public function index()
    {
        $prod = $this->ProductModel->getProductList();
        $number = 1;
        $category_list = $this->CategoryModel->getCategoryList();

        // //goi va show du lieu ra view
        $this->view('shop', ['prod' => $prod, 'number' => $number, 'cate' => $category_list]);
    }

    public function search($number)
    {
        //Cắt chuỗi cho $price
        $price = explode("-", $_POST['price']);

        //Từ khóa mặc định là trống nếu không được nhập vào
        $keyword = '';
        if (isset($_POST['keyword'])) {
            $keyword = $_POST['keyword'];
        }

        //Category mặc định là tất cả nếu người dùng không chọn cái nào
        $cateList = array();
        if (isset($_POST['category'])) {
            $cateList = $_POST['category'];
        } else {
            $cate = $this->CategoryModel->getCategoryList();
            foreach ($cate as $value) {
                array_push($cateList, $value['cate_id']);
            }
        }

        $from = ($number - 1) * 9;
        $page = $this->ProductModel->countPage($price[0], $price[1], $cateList, $keyword);
        $prod = $this->ProductModel->searchProduct($price[0], $price[1], $cateList, $keyword, $from);
        $cate = $this->CategoryModel->getCategoryList();

        if (isset($prod)) {
            $this->view('shop_sub', ['prod' => $prod, 'cate' => $cate, 'page' => $page, 'number' => $number]);
        } else {
            echo "Product is not exists";
        }
    }
}
