<?php
class StaffModel
{
    public function __contruct()
    {
    }

    public function getEmpList()
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_staff WHERE STATUS = b'1'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function getStaffByUserId($user_id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_staff JOIN tbl_user ON tbl_staff.user_id = tbl_user.user_id WHERE tbl_staff.user_id = '$user_id' AND tbl_staff.status = b'1'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function addStaff($user_id, $firstname, $lastname, $phone, $address)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "INSERT INTO tbl_staff (user_id, firstname, lastname, phone, address, status) VALUES ('$user_id','$firstname','$lastname', '$phone', '$address', b'1')");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }
    public function editStaff($user_id, $firstname, $lastname, $phone, $address)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "UPDATE tbl_staff SET firstname = '$firstname', lastname = '$lastname', phone = '$phone', address = '$address' WHERE user_id = '$user_id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }
    public function deleteStaff($user_id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "UPDATE tbl_staff SET status = b'0' WHERE user_id = '$user_id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    public function searchStaffAdmin($name, $from)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_staff WHERE STATUS = b'1' AND firstname LIKE '%$name%' limit $from, 6");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function countPageStaffAdmin($name)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT count(*) FROM tbl_staff WHERE STATUS = b'1' AND firstname LIKE '%$name%'");
        $total = ceil($result[0]['count(*)'] / 6);
        giaiPhongBoNho($link, $result);
        return $total;
    }
}
