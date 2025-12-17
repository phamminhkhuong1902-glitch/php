<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Email: <input type="text" name="txtmail"> <br>
        Password: <input type="password" name="txtpass"> <br>
        <button name="btn_dn">Đăng nhập</button>
    </form>
    <?php
    if(isset($_POST['btn_dn'])){
        $email=$_POST['txtmail'];
        $password=$_POST['txtpass'];
        echo "<br>Email:$email,Password:$password";
    }
    ?>
</body>
</html>