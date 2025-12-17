<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="" method="post">
        VCT xử lý chuỗi sau: <br>
        Nhập chuỗi s1 <input type="text" name="txts1" id="" value="<?php if(isset($_POST['txts1'])) echo $_POST['txts1']?>"> <br>
        Nhập chuỗi s2 <input type="text" name="txts2" id="" value="<?php if(isset($_POST['txts2'])) echo $_POST['txts2']?>"> <br>
        <input type="submit" value="Xử lý" name="btn_xuly">
    </form>
    <?php
    if(isset($_POST['btn_xuly'])){
        $s1=$_POST['txts1'];
        $s2=$_POST['txts2'];
        echo "Cho chuỗi s1:$s1";
        echo "<br>Cho chuỗi s2:$s2";
        echo "<br>Chuỗi s1 chuyển thành chữ thường:".strtolower($s1);
        echo "<br>Chuỗi s1 chuyển thành chữ hoa:".strtoupper($s2);
        echo "<br>Số ký tự chuỗi s1:".strlen($s1);
        echo "<br>Số ký tự chuỗi s2:".strlen($s2);
        echo "<br>Nối chuỗi s1 và s2:".implode(" ",[$s1,$s2]);
        $s3=base64_encode($s1);
        echo "<br> Mã hoá chuỗi s1:".$s3;
        echo "<br> Giải mã chuỗi s1:".base64_decode($s3);
    }
    ?>  
</body>
</html>

