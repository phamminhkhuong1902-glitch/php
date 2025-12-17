<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
    $toan=7;
    $ly=9;
    $hoa=8;
    $dtb=($toan+$ly+$hoa)/3;
    echo"Cho điểm toán:$toan <br> ";
    echo"Cho điểm lý:$ly <br>";
    echo"Cho điểm hoá:$hoa <br>";
    echo "Điểm trung bình=$dtb <br>";
    if($dtb>=8){
        echo "Xếp loại:Giỏi";
    }elseif($dtb>=7 && $dtb<8){
        echo "Xếp loại:Khá";
    }elseif($dtb>=5 && $dtb<7){
        echo "Xếp loại:Trung bình";
    }else{
        echo "Xếp loại:Yếu";
    }
 ?>
</body>
</html>