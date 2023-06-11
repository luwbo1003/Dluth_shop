<?php
class ProductModel
{
    public function __contruct()
    {
    }

    public function getProductList()
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_product join tbl_category WHERE tbl_product.cate_id = tbl_category.cate_id and tbl_product.status = b'1' AND tbl_category.status = b'1'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function getProduct($id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * from tbl_product where prod_id = '$id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function getProductId()
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT prod_id from tbl_product where img_link is NULL OR prod_detail_id is NULL");
        $data = $result[0]['prod_id'];
        giaiPhongBoNho($link, $result);
        return $data;
    }

    // public function getCategoryId($id)
    // {
    //     $link = null;
    //     taoKetNoi($link);
    //     $result = chayTruyVanTraVeDL($link, "SELECT category_id from tbl_product where pro_id = '$id'");
    //     $data = $result[0]['category_id'];
    //     giaiPhongBoNho($link, $result);
    //     return $data;
    // }

    public function getDesId($id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT prod_detail_id from tbl_product where prod_id = '$id'");
        $data = $result[0]['prod_detail_id'];
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function getProductByCategory($category)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_product WHERE STATUS = b'1' AND cate_id = '$category'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function getProductByName($name)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_product WHERE STATUS = b'1' AND prod_name LIKE '%$name%'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function addProduct($name, $quantity, $price, $category_id, $brand_des, $maintance_des)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "INSERT INTO tbl_product (prod_name, prod_quantity, prod_price, cate_id, brand_des, maintance_des,  STATUS) 
                                                    VALUES ('$name', '$quantity', '$price', '$category_id','$brand_des','$maintance_des', b'1')");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteProduct($id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "UPDATE tbl_product SET STATUS = b'0' WHERE prod_id = '$id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    public function addDesIdProduct($id, $pro_des_id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "UPDATE tbl_product SET prod_detail_id = '$pro_des_id' WHERE prod_id = '$id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    public function addImageId($id, $img_link)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "UPDATE tbl_product SET img_link = '$img_link' WHERE prod_id = '$id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    public function editProduct($id, $pro_name, $pro_quantity, $category_id, $pro_price, $brand_des, $maintance_des)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "UPDATE tbl_product SET prod_name = '$pro_name', prod_quantity = '$pro_quantity', cate_id = '$category_id',
                                                                        prod_price = '$pro_price', brand_des = '$brand_des' , maintance_des = '$maintance_des' WHERE prod_id = '$id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    public function countPageProductAdmin($name, $cateList)
    {
        $category = '(';
        foreach ($cateList as $key => $value) {
            if ($key == count($cateList) - 1) {
                $category .= $value['cate_id'] . ')';
            } else {
                $category .= $value['cate_id'] . ",";
            }
        }
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT count(*) FROM tbl_product WHERE STATUS = b'1' AND prod_name LIKE '%$name%' AND cate_id in $category");
        $total = ceil($result[0]['count(*)'] / 6);
        giaiPhongBoNho($link, $result);
        return $total;
    }

    public function searchProductAdmin($name, $cateList, $from)
    {
        $category = '(';
        foreach ($cateList as $key => $value) {
            if ($key == count($cateList) - 1) {
                $category .= $value['cate_id'] . ')';
            } else {
                $category .= $value['cate_id'] . ",";
            }
        }
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_product WHERE STATUS = b'1' AND prod_name LIKE '%$name%' AND cate_id in $category LIMIT $from, 6");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function searchProduct($price1, $price2, $cateList, $name, $from)
    {
        $category = '(';
        foreach ($cateList as $key => $value) {
            if ($key == count($cateList) - 1) {
                $category .= $value . ')';
            } else {
                $category .= $value . ",";
            }
        }

        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_product WHERE STATUS = b'1' AND prod_name LIKE '%$name%' AND cate_id in $category AND prod_price BETWEEN '$price1' AND '$price2' LIMIT $from, 9");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function countPage($price1, $price2, $cateList, $name)
    {
        $category = '(';
        foreach ($cateList as $key => $value) {
            if ($key == count($cateList) - 1) {
                $category .= $value . ')';
            } else {
                $category .= $value . ",";
            }
        }

        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT count(*) FROM tbl_product WHERE STATUS = b'1' AND prod_name LIKE '%$name%' AND cate_id in $category AND prod_price BETWEEN '$price1' AND '$price2'");
        $total = ceil($result[0]['count(*)'] / 9);
        giaiPhongBoNho($link, $result);
        return $total;
    }

    public function getQuantity($id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT prod_quantity FROM tbl_product WHERE prod_id = '$id'");
        $data = $result[0]['prod_quantity'];
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function reduceQuantity($id, $prod_quantity)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "UPDATE tbl_product SET prod_quantity = '$prod_quantity' WHERE prod_id = '$id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }
}
