<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    VCT XỬ LÝ CHUỖI
    Nhập chuỗi: <input type="text" name="txtchuoi" value="<?php if(isset($_POST["txtchuoi"])) echo $_POST["txtchuoi"];  ?>">
    <!-- <button value="Xử lý" name="btn_xuly">gggg</button> -->
     <input type="submit" value="Xử lý" name="btn_xuly">
    </form>
    <?php
    if(isset($_POST["btn_xuly"])){
        $chuoi=$_POST["txtchuoi"];
        echo "Chuỗi thành chữ hoa:".strtoupper($chuoi);
        echo "<br>Số ký tự chuỗi :".strlen($chuoi);
    }
    ?>
    
</body>
</html>