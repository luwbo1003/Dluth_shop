<?php
class Home extends Controller
{
    public function __construct()
    {
        $this->ProductModel = $this->model('ProductModel');
        $this->CategoryModel = $this->model('CategoryModel');
        $this->DescriptionModel = $this->model('DescriptionModel');
    }

    public function index()
    {
        // goi method getproductlist
        $prod = $this->ProductModel->getProductList();
        $cate = $this->CategoryModel->getCategoryList();

        //goi va show du lieu ra view
        $this->view('index', ['prod' => $prod, 'cate' => $cate]);
    }

    public function product_single($id)
    {
        $prod = $this->ProductModel->getProduct($id);
        $des = $this->DescriptionModel->getDes($prod[0]['prod_detail_id']);
        $cate = $this->CategoryModel->getCategory($prod[0]['cate_id']);

        $this->view('product_single', ['prod' => $prod, 'des' => $des, 'cate' => $cate]);
    }

    public function about()
    {
        // goi method getproductlist
        $this->view('about', []);
    }

    public function contact()
    {
        $this->view('contact', []);
    }
}
