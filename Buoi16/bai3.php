<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        VCT XỬ LÝ Mảng <br>
        Nhập số phần tử: <input type="text" name="txtspt" value="<?php if(isset($_POST["txtspt"])) echo $_POST["txtspt"]  ?>"> <br>
        Nhập giá trị: <input type="text" name="txtgt" value="<?php if(isset($_POST["txtgt"])) echo $_POST["txtgt"]  ?>"> <br>
        <input type="submit" value="Xử lý">
    </form>
    
    <?php
    if(isset($_POST["txtspt"]) && isset($_POST["txtgt"])){
        $spt=$_POST["txtspt"];
        $giatri=$_POST["txtgt"];
        $mang=[];
        for ($i=1; $i<=$spt ;$i++) { 
            $snn=rand(0,20);
            $mang[]=$snn;
        }
        echo ("Mảng A tạo ngẫu nhiên gồm $spt từ 0 đến 20: ");
        echo implode(",",$mang);
        echo "<hr>Mảng A cho thêm $giatri vào cuối mảng:";
        array_push($mang,$giatri);
        echo implode(",",$mang);
        echo "<hr>Mảng A xoá phần tử vào đầu mảng:";
        array_shift($mang);
        echo implode(",",$mang);
        echo ("<hr>Tổng giá trị mảng:".array_sum($mang));
    }
    ?>
</body>
</html>