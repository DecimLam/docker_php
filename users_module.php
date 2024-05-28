<?php
    require_once "module.php";

    function dangki($link, $username, $password, $email){
        chayTruyVanKhongTraVeDL($link, "INSERT INTO tbl_users VALUES(
                                                                    NULL,
                                                                    '".mysqli_real_escape_string($link, $username)."',
                                                                    '".md5($password)."',
                                                                    '".$email."'
                                                                )"
        );
    }

    function dangnhap($link, $username, $password){
        $result = chayTruyVanTraVeDL($link, "SELECT COUNT(*) FROM tbl_users WHERE username='".mysqli_real_escape_string($link, $username)."'
                                                                            AND password='".md5($password)."'");
        $row = mysqli_fetch_row($result);
        mysqli_free_result($result);
        if($row[0] > 0){
            $_SESSION['username'] = $username;
            return true;
        }
        else {
            return false;
        }
    }

    function dangxuat(){
        if(isset($_SESSION['username'])){
            unset($_SESSION['username']);
            return true;
        }
        else {
            return false;
        }
    }
?>