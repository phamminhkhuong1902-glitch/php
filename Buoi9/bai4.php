<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Họ tên <input type="text" name="txt_hoten" id=""> <br>
        Mật khẩu <input type="password" name="txt_pass" id=""> <br>
        <input type="submit" value="Gửi">
    </form>

    <?php
    if(isset($_POST['txt_hoten'])){
        $hoten=$_POST['txt_hoten'];
        echo "Họ tên của bạn:$hoten";
    }
    if(isset($_POST['txt_pass'])){
        $password=$_POST['txt_pass'];
        echo "<br>Mật khẩu của bạn:$password";
    }
    ?>
</body>
</html>