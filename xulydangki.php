<?php
    session_start();

    require_once "module.php";
    require_once "validate_module.php";
    require_once "users_module.php";

    $link = NULL;
    taoKetNoi($link);

    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password2']) && isset($_POST['email'])) {

        $valid = $_POST['password'] == $_POST['password2']; // kiểm tra hai ô nhập mật khẩu có giống nhau không
        $valid = $valid && validateLenUP($_POST['username']); // username phải lớn hơn 8 và nhỏ hơn 30 kí tự
        $valid = $valid && validateLenUP($_POST['password']); // password phải lớn hơn 8 và nhỏ hơn 30 kí tự
        $valid = $valid && validateEmail($_POST['email']); // email phải đúng định dạng chuẩn abc@xyz.com

        if ($valid) { // nếu các điều kiện của dữ liệu nhập vào thỏa mãn
            if (existsUsername($link, $_POST["username"])) { // nếu username đã tồn tại trong CSDL
                giaiPhongBoNho($link, true);
                header("Location: dangki.php?msg=duplicate&username=" . $_POST['username'] . "&email=" . $_POST['email']);
            } else { // nếu username chưa tồn tại thì mới cho phép dùng username đó để đăng kí
                dangki($link, $_POST["username"], $_POST["password"], $_POST["email"]);
                giaiPhongBoNho($link, true);
                header("Location: dangki.php?msg=done");
            }
        } else { // nếu các điều kiện của dữ liệu nhập vào không thỏa mãn
            giaiPhongBoNho($link, true);
            header("Location: dangki.php?msg=unvalid-data&username=" . $_POST['username'] . "&email=" . $_POST['email']);
        }
    }
?>
