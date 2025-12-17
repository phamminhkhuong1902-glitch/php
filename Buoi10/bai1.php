<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
        Nhập A <input type="text" name="txta" id="" value="<?php if(isset($_POST['txta'])) echo $_POST['txta']?>"> <br>
        Nhập B <input type="text" name="txtb" id="" value="<?php if(isset($_POST['txtb'])) echo $_POST['txtb']?>"> <br>
        <input type="submit" value="Giải">
    </form>
    <?php
    if(isset($_POST['txta']) && isset($_POST['txtb'])){
        $a=$_POST['txta'];
        $b=$_POST['txtb'];
        $tong=$a+$b;
        echo "Tổng a và b:$tong";
    }
    ?>

    <form action="" method="post">
        Nhập chiều dài: <input type="text" name="txtdai" id="" value="<?php if(isset($_POST['txtdai'])) echo $_POST['txtdai']?>"> <br>
        Nhập chiều rộng <input type="text" name="txtrong" id="" value="<?php if(isset($_POST['txtrong'])) echo $_POST['txtrong']?>"> <br>
        <input type="submit" value="Giải">
    </form>
    <?php
    if(isset($_POST['txtdai']) && isset($_POST['txtrong'])){
        $dai=$_POST['txtdai'];
        $rong=$_POST['txtrong'];
        $chuvi=($dai+$rong)*2;
        $dientich=$dai*$rong;
        echo "Chu vi:$chuvi";
        echo "<br>Diện tích:$dientich";
    }
    ?>
    <form action="" method="post">
        Nhập A: <input type="text" name="txtA" id="" value="<?php if(isset($_POST['txtA'])) echo $_POST['txtA']?>"> <br>
        Nhập B: <input type="text" name="txtB" id="" value="<?php if(isset($_POST['txtB'])) echo $_POST['txtB']?>"> <br>
        Nhập C: <input type="text" name="txtC" id="" value="<?php if(isset($_POST['txtC'])) echo $_POST['txtC']?>"> <br>
        <input type="submit" value="Giải">
    </form>
    <?php
    if(isset($_POST['txtA']) && isset($_POST['txtB']) && isset($_POST['txtC'])){
        $a=$_POST['txtA'];
        $b=$_POST['txtB'];
        $c=$_POST['txtC'];
        $delta=$b**2-4*$a*$c;
        $x=-$b/(2*$a);
        $x1=(-$b + sqrt($delta))/(2*$a);
        $x2=(-$b - sqrt($delta))/(2*$a);
        echo $delta;
        if($delta<0){
            echo "<br>Phương trình vô nghiệm";
        }elseif ($delta==0) {
           echo "<br>Phương trình có nghiệm kép";
           echo "<br>x1=x2=$x";
        }else{
            echo "<br>Phương trình có 2 nghiệm ";
            echo "<br>x1=".$x1;
            echo "<br>x2=".$x2;
        }
    }
    ?>
</body>
</html>