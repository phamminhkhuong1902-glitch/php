<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Tên:".$_SESSION["name"];
    echo "<br>Lớp:".$_SESSION["lop"];
    echo "<br>Mật khẩu:".$_SESSION["matkhau"];

?>
</body>
</html>