<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Đăng Nhập</title>
    </head>

    <body>

        <?php require_once "menu.php"; ?>

        <form action="xulydangnhap.php" method="post">
            <h3 style="text-align:center; color: white; background:#025E6A; padding: 5px;">Đăng Nhập</h3>

            <div class="frm_row">
                <div class="cls_caption">Tên tài khoản:</div>
                <div class="cls_input"><input type="text" name="username" /></div>
            </div>
            <br style="clear:both;" />

            <div class="frm_row">
                <div class="cls_caption">Mật khẩu:</div>
                <div class="cls_input"><input type="password" name="password" /></div>
            </div>
            <br style="clear:both;" />

            <div class="img_row">
                <input type="submit" value="Đăng Nhập" />
                <input type="reset" value="Xóa Form" />
            </div>
            <br style="clear:both;" />
        </form>

        <?php require_once "msg.php"; ?>

    </body>
</html>
