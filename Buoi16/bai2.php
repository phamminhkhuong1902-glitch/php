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
        <input type="submit" value="Xử lý"> <hr>
    </form>
    
    <?php
    if(isset($_POST["txta"]) && isset($_POST["txtb"])){
        $chuoia=$_POST["txta"];
        $chuoib=$_POST["txtb"];
        function cau1($chuoia){
            echo ("Chuỗi A thành chữ hoa:".strtoupper($chuoia));
        }
        function cau2($chuoib){
            echo ("<br>Chuỗi B thành chữ thường:".strtolower($chuoib));
        }
        function cau3($chuoia){
            echo ("<hr>Số ký tự chuỗi A:".strlen($chuoia));
        }
        function cau4($chuoib){
            echo ("<hr>Lặp chuỗi B 3 lần:".str_repeat($chuoib,3));
        }
        function cau5($chuoib){
            echo ("<hr>Đảo ngược chuỗi B:".strrev($chuoib));
        }
        function cau6($chuoia){
            $mahoa=base64_decode($chuoia);
            echo ("<hr>Mã hoá chuỗi A:$mahoa");
            echo ("<hr>Giải mã chuỗi A:".base64_encode($mahoa));
        }
       cau1($chuoia);
       cau2($chuoib);
       cau3($chuoia);
       cau4($chuoib);
       cau5($chuoib);
       cau6($chuoia);
    }
    ?>
</body>
</html>