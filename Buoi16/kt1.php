<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="" method="post">
        VCT XỬ LÝ CHUỖI <br>
        Nhập chuỗi A: <input type="text" name="txta" value="<?php if(isset($_POST["txta"])) echo $_POST["txta"]  ?>"> <br>
        Nhập chuỗi B: <input type="text" name="txtb" value="<?php if(isset($_POST["txtb"])) echo $_POST["txtb"]  ?>"> <br>
        Số lần: <input type="text" name="txtso" value="<?php if(isset($_POST["txtb"])) echo $_POST["txtso"]  ?>"> <br>
        <input type="submit" value="Xử lý">
    </form>
    <?php
    if(isset($_POST["txta"]) && isset($_POST["txtb"]) && isset($_POST["txtso"]) ){
        $a=$_POST["txta"];
        $b=$_POST["txtb"];
        $so=$_POST["txtso"];
        echo ("1) <br>");
        echo ("Chuỗi A thành chữ hoa:".strtoupper($a));
        echo ("<br>Chuỗi B thành chữ hoa:".strtoupper($b));
        echo ("<hr> (2) <br>");
        $chuoibnguoc=strrev($b);
        echo ("Đảo ngược chuỗi B: $chuoibnguoc");
        echo ("<br>Chuỗi B ngược lặp lại $so:".str_repeat($chuoibnguoc,$so));
        $c=implode(" ",[$a,$b]);
        echo ("<hr> (3)");
        echo ("<br> Nối chuỗi A và B : $c");
        echo ("<hr> 4)");
        if(strpos($a,$b)!==TRUE){
            echo ("<br>Tìm thấy");
        }
        else{
            echo ("<br>Không tìm thấy");
        }
    }
    ?> 
    
</body>
</html>