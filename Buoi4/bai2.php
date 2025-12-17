<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
    $a=2;
    $b=3;
    $c=4;
    $s1=($a**2)+($b**2);
    $s2=($a**2)-($b**2);
    echo"Cho a:$a <br> ";
    echo"Cho b:$b <br>";
    echo"Cho c:$c <br>";
    if($a%2==0){
        echo "<br>$a là số chẵn";
    }else{
        echo "<br>$a là số lẽ";
    }
    if($b%2==0){
        echo "<br>$b là số chẵn";
    }else{
        echo "<br>$b là số lẽ";
    }
    if(($a+$b)>$c){
        echo "<br>S1=$s1";
    }else{
        echo "<br>S2=$s2";
    }
 ?>
</body>
</html>