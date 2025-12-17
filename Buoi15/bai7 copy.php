<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    VCT XỬ LÝ MẢNG
    <br>
    Nhập số phần tử: <input type="text" name="txtso" value="<?php if(isset($_POST["txtso"])) echo $_POST["txtso"];  ?>">
    <br>
     <input type="submit" value="Xử lý" name="btn_xuly">
    </form>
    <?php
    if(isset($_POST["btn_xuly"])){
        $sopt=$_POST["txtso"];
        $gtmin=1;
        $gtmax=30;
        $mang=[];
        for ($i=1; $i <=$sopt ; $i++) { 
            $snn=rand($gtmin,$gtmax);
            $mang[]=$snn;
        }
        // echo "Hiển thị mảng cách 1: ";
        // print_r($mang);
        echo "<br>Hiển thị mảng cách 2: ";
        echo implode(",",$mang);
        function themxoapt($mang){
                echo "<hr>Hiển thị mảng cho thêm 2,3 vào cuối mảng: ";
                array_push($mang,2,3);
                echo implode(",",$mang);
                echo "<hr>Hiển thị mảng xoá phần tử cuối mảng: ";
                array_pop($mang);
                echo implode(",",$mang);
        }
        themxoapt($mang);
       
    }
    ?>
    
</body>
</html>