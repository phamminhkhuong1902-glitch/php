<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=10;
    echo"Cho a= $a <br>";
    $a=$a+5;
    echo "a tăng 5 đơn vị:$a <br> ";
    $a+=5;
    echo "a tăng thêm 5 đơn vị:$a <hr>";
    $b=5;
    $c=($a>$b)?"A1":"A2";
    echo "$c";
    ?>
</body>
</html>