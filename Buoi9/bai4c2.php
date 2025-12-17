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
    if(isset($_POST['txt_hoten']) && isset($_POST['txt_pass'])){
        $hoten=$_POST['txt_hoten'];
        $password=$_POST['txt_pass'];
        echo "Họ tên của bạn:$hoten";
        echo "<br>Mật khẩu của bạn:$password";
    }
    ?>
    <form action="" method="post">
        Nhập a <input type="text" name="txta" id=""> <br>
         Nhập b <input type="text" name="txtb" id=""> <br>
        <input type="submit" value="Xử lý">
    </form>
    <?php
    if(isset($_POST['txta']) && isset($_POST['txtb'])){
        $a=$_POST['txta'];
        $b=$_POST['txtb'];
        $tong=$a+$b;
        echo "Tổng a và b:$tong";
    }
    ?>
</body>
</html>