<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="" method="post">
        VCT XỬ LÝ MẢNG <br>
        Nhập số phần tử: <input type="text" name="txtspt" value="<?php if(isset($_POST["txtspt"])) echo $_POST["txtspt"]  ?>"> <br>
        Nhập giá trị: <input type="text" name="txtgt" value="<?php if(isset($_POST["txtgt"])) echo $_POST["txtgt"]  ?>"> 
        <input type="submit" value="Xử lý">
    </form> 

         <?php
    if(isset($_POST["txtspt"]) && isset($_POST["txtgt"])){
        $spt=$_POST["txtspt"];
        $giatri=$_POST["txtgt"];
        $mangA=[];
        $mangB=[];
        for ($i=1; $i<=$spt ;$i++) { 
            $snn=rand(0,20);
            $mangA[]=$snn;
            $mangB[]=$snn;
        }
        echo ("<hr> 1)");
        echo ("<br>Mảng A tạo ngẫu nhiên gồm $spt từ 0 đến 10: ");
        echo implode(",",$mangA);
        echo ("<br>Mảng B tạo ngẫu nhiên gồm $spt từ 0 đến 10: ");
        echo implode(",",$mangB);
        echo ("<hr> 2)");
        echo "<br>Mảng A cho thêm $giatri vào cuối mảng:";
        array_push($mangA,$giatri);
        echo implode(",",$mangA);
        $mangC=array_merge($mangA,$mangB);
        echo ("<hr> 3)");
        echo ("<br>Ghép 2 mảng A và B:");
        echo implode(",",$mangC);
        echo ("<hr> 4)");
         function sochan($mangB){
            return $mangB % 2 == 0;
         }
         $sochan=array_filter($mangB,"sochan");
         echo ("<br>Mảng B chẵn :");
         echo implode(",",$sochan);

    }
    ?> 
</body>
</html>