<?php
class Cart extends Controller
{

    public function __construct()
    {
        $this->ProductModel = $this->model('ProductModel');
        // $this->CategoryModel = $this->model('CategoryModel');
    }

    public function index()
    {
        $this->view('cart', []);
    }

    function refreshProductsCart()
    {
        $this->view('cart_product');
    }

    public function addToCart($prod)
    {
        $subtotal = $_POST['quantity'] * $prod[0]['prod_price'];

        $product = array(
            "prod_id" => $prod[0]['prod_id'], "prod_name" => $prod[0]['prod_name'], "img_link" => $prod[0]['img_link'], "prod_price" => $prod[0]['prod_price'],
            "prod_quantity_max" => $prod[0]['prod_quantity'], "prod_quantity_cart" => $_POST['quantity'], "subtotal" => $subtotal
        );

        if (isset($_SESSION['cart'])) {
            $cart = $_SESSION['cart'];

            if (!array_key_exists($product["prod_id"], $cart)) {
                $cart[$product["prod_id"]] = $product; //key lay theo id san pham
            } else {
                $temp = $cart[$product["prod_id"]]['prod_quantity_cart'] + $product['prod_quantity_cart'];
                if ($temp > $product['prod_quantity_max']) {
                    $cart[$product["prod_id"]]['prod_quantity_cart'] = $product['prod_quantity_max']; //dua ve max neu du
                    $cart[$product["prod_id"]]['subtotal'] = $cart[$product["prod_id"]]['prod_quantity_cart'] * $cart[$product['prod_id']]['prod_price'];
                } else {
                    $cart[$product["prod_id"]]['prod_quantity_cart'] = $temp;
                    $cart[$product["prod_id"]]['subtotal'] = $cart[$product["prod_id"]]['prod_quantity_cart'] * $cart[$product['prod_id']]['prod_price'];
                }
            }
            $_SESSION['cart'] = $cart;
            // $this->createSubtotal();
        } else {
            $cart[$product["prod_id"]] = $product;
            $_SESSION['cart'] = $cart;
            $this->createSubtotal();
        }
        $this->createSubtotal();
    }

    function addProductToCart($prod_id)
    {
        $prod = $this->ProductModel->getProduct($prod_id);

        if (isset($_POST['addToCart'])) {
            $this->addToCart($prod);
            header('location:' . URLROOT . '/Cart');
        } else if (isset($_POST['buyNow'])) {
            $this->addToCart($prod);
            header('location:' . URLROOT . '/Checkout');
        }
    }

    function deleteProduct($key)
    {
        if (isset($_SESSION['cart'])) {
            $cart = $_SESSION['cart'];
            for ($i = 0; $i < count($cart); $i++) {
                unset($cart[$key[$i]]);
            }
            $_SESSION['cart'] = $cart;
            $this->createSubtotal();
            header('location:' . URLROOT . '/Cart');
        }
    }

    function updateProduct($id)
    {
        if (isset($_SESSION['cart'])) {
            $cart = $_SESSION['cart'];
            $cart[$id]['prod_quantity_cart'] =  $_POST['quantity'];
            $cart[$id]['subtotal'] = $cart[$id]['prod_quantity_cart'] * $cart[$id]['prod_price'];
            $_SESSION['cart'] = $cart;
            $this->createSubtotal();
        }
    }

    function checkoutCart($key)
    {
        // $sum = 0;
        // $cart = $_SESSION['cart'];
        // foreach ($cart as $v)
        //     $sum += $v[$key]['prod_quantity'] * $v[$key]['prod_price'];
        // return $sum;
    }

    function emptyCart()
    {
        // if (isset($_SESSION['cart'])) {
        //     unset($_SESSION['cart']);
        // }
    }

    function createSubtotal()
    {
        if (isset($_SESSION['cart'])) {
            $subtotal = 0;
            foreach ($_SESSION['cart'] as $value) {
                $subtotal += $value['subtotal'];
            }
            $_SESSION['total'] = $subtotal;
        }
    }
}
