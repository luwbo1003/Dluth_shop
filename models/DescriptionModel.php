<?php
class DescriptionModel
{
    public function __contruct()
    {
    }

    public function getDes($id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * from tbl_prod_detail_des where prod_detail_id = '$id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function addDes($size, $material, $detail_1, $detail_2, $origin)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "INSERT INTO tbl_prod_detail_des (size, material, detail_1, detail_2, origin) 
                                                    VALUES ('$size', '$material', '$detail_1', '$detail_2', '$origin')");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    public function editDescription($id, $size, $material, $detail_1, $detail_2, $origin)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "UPDATE tbl_prod_detail_des SET size = '$size', material = '$material', detail_1 = '$detail_1',
                                                                        detail_2 = '$detail_2', origin = '$origin' WHERE prod_detail_id = '$id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }
}
