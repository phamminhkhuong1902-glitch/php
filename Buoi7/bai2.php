<?php
    $ten=array("AN","BINH","CUOnG");
    echo "Cho mảng:";
    print_r($ten);
    function tenthuong($s){
        return strtolower($s);
    }
    $tenthuong=array_map("tenthuong",$ten);
    echo "<br>Mảng chuyển thành chữ thường:";
    print_r($tenthuong);
    $so=array(2,4,6);
    echo "<br>Cho mảng số:";
    print_r($so);
    function binhphuong($n){
        return $n*$n;
    }
    $so2=array_map("binhphuong",$so);
    echo "<br>Mảng bình phương:";
    print_r($so2);
    $so3=array(1,3,5);
    $so4=array(2,4,6);
    echo "<br>Cho 2 mảng:<br>";
    print_r($so3);
    print_r($so4);
    function sosanh($n1,$n2){
        if($n1==$n2){
            return "Giống nhau";
        }else{
             return "Khác nhau";
        }
    }
    echo "<br>So sánh 2 mảng:<br>";
    $ss=array_map("sosanh",$so3,$so4);
    print_r($ss);
    $so5=array(23,45,32,67,14);
    echo "<br>Cho mảng:";
    print_r($so5);
    function kiemtra($n){
        if ($n%2==0) {
            return $n;
        }
    }
    $kt=array_filter($so5,"kiemtra");
    echo "<br>Mảng số chẵn:";
    print_r($kt);
    $so6=array(2,3,7,4,6,8);
    echo "<br>Cho mảng:";
    print_r($so6);
    function tinhtong($a,$b){
        return $a+$b;
    }
    echo "<br>Tổng của mảng:";
    $tong=array_reduce($so6,"tinhtong",0);
    print_r($tong);
?>