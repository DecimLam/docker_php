<?php

    session_start();

    require_once "module.php";
    require_once "users_module.php";

    $link = NULL;
    taoKetNoi($link);

    if (dangxuat()) {
        giaiPhongBoNho($link, true);
        header("Location: dangki.php");
        exit(); // Thêm exit() để dừng việc thực thi mã sau khi header chuyển hướng
    } else {
        giaiPhongBoNho($link, true);
        header("Content-type: text/html; charset=utf-8");
        echo "Không thể đăng xuất !";
        exit(); // Thêm exit() để dừng việc thực thi mã sau khi header chuyển hướng
    }
?>
