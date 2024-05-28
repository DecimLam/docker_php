<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    <style>
        body {
            font-family: Tahoma, Geneva, sans-serif;
            font-size: 13px;
        }

        h1, h2 {
            text-align: center;
        }

        #menu {
            margin-bottom: 100px;
            text-align: right;
        }
    </style>
</head>

<body>
    <?php include_once "menu.php"; ?>

    <?php
    if (!isset($_SESSION['username'])) {
        header("Location: dangki.php");
        exit(); // Thêm exit() để dừng việc thực thi mã sau khi header chuyển hướng
    }
    ?>

    <div>
        <h1>Đây là trang admin!</h1>
        <h2>Bạn chỉ vào được trang này sau khi đăng nhập!</h2>
    </div>
</body>

</html>
