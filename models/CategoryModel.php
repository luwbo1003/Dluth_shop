<?php
class CategoryModel
{
    public function __contruct()
    {
    }

    public function getCategoryList()
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_category WHERE status = b'1'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function getCategoryIdList()
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT cate_id FROM tbl_category WHERE status = b'1'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function getCategory($id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "select * from tbl_category where cate_id = '$id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function addCategory($name)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "INSERT INTO tbl_category (cate_name, status) VALUES ('$name', b'1')");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }
    public function editCategory($id, $cate_name)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "UPDATE tbl_category SET cate_name = '$cate_name' WHERE cate_id = '$id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteCategory($cate_id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "UPDATE tbl_category SET status = b'0' WHERE cate_id = '$cate_id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    public function countProdPerCate($cate_id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT COUNT(cate_id) AS 'count' FROM tbl_product WHERE cate_id = '$cate_id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }
    public function duplicateCategory($cate_name)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT cate_name FROM tbl_category WHERE cate_name like '$cate_name'");
        $data = $result[0]['cate_name'];
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function editStatusCategory($cate_name)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "UPDATE tbl_category SET status = b'1' WHERE cate_name like '$cate_name'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    public function searchCategoryAdmin($name, $from)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_category WHERE status = b'1' AND cate_name LIKE '%$name%' limit $from, 6");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function countPageCategoryAdmin($name)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT count(*) FROM tbl_category WHERE status = b'1' AND cate_name LIKE '%$name%'");
        $total = ceil($result[0]['count(*)'] / 6);
        giaiPhongBoNho($link, $result);
        return $total;
    }
}
