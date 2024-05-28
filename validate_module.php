<?php
    require_once "module.php";

    // Kiểm tra tính hợp lệ độ dài (độ dài từ 8 đến 30 kí tự)
    // Trả về giá trị true nếu độ dài của $up nằm trong khoảng từ 8 đến 30
    function validateLenUP($up) {
        return strlen($up) >= 8 && strlen($up) <= 30;
    }

    // Kiểm tra tính hợp lệ của email. Email phải có dạng abc@xyz.com
    function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) != false ? true : false;
    }

    // Kiểm tra tên của username đã tồn tại trong CSDL hay chưa?
    function existsUsername($link, $username) {
        $result = chayTruyVanTraVeDL($link, "SELECT COUNT(*) FROM tbl_users WHERE username='" . mysqli_real_escape_string($link, $username) . "'");
        $row = mysqli_fetch_row($result);
        mysqli_free_result($result);
        return $row[0] > 0;
    }
?>
