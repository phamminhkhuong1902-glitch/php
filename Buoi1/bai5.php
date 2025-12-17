<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    define("luong",50);
    $songaycong=5;
    $tienluong=luong*$songaycong;
    echo "C1:Tổng tiền lương là ";
    echo $tienluong;

    define("luong1",50);
    $songaycong=5;
    echo "<br> C2:Tổng tiền lương là " . luong1*$songaycong;

    const luong2=40;
    $songaycong=5;
    echo "<hr> Tổng tiền lương:" . luong2*$songaycong;
    ?>
</body>
</html>