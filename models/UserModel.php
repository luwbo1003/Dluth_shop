<?php
class UserModel
{
    public function __contruct()
    {
    }

    public function getUserById($user_id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT user_id FROM tbl_user WHERE user_id = '$user_id' AND status = '1'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function getUserList()
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_user WHERE status = b'1'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function getUserId($email)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT user_id FROM tbl_user WHERE email = '$email' AND status = b'1'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function getUser($email, $password)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_user 
        WHERE email = '$email' AND password = '$password' AND status = b'1'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        return $data;
    }

    public function addUser($email, $password, $user_type)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "INSERT INTO tbl_user (email, 
            password, user_type, status) VALUES ('$email', '$password', b'$user_type', b'1')");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteUser($user_id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "UPDATE tbl_user SET status = b'0' WHERE user_id = '$user_id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    public function editUser($user_id, $email, $password)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "UPDATE tbl_user SET email = '$email'
            , password = '$password' WHERE user_id = '$user_id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    public function changeEmail($user_id, $email)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "UPDATE tbl_user SET email = '$email' WHERE user_id = '$user_id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }

    public function changePassword($user_id,  $password)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL($link, "UPDATE tbl_user SET password = '$password' WHERE user_id = '$user_id'");
        $data = $result;
        giaiPhongBoNho($link, $result);
        if ($data) {
            return true;
        } else {
            return false;
        }
    }
}
