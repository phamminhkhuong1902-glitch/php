<?php
    function xinchao($ten){
        echo "Xin chào $ten";
    }
    $ten="Khuong";
    xinchao($ten);
    function tinhtong($a,$b){
        return $a+$b;
    }
    $a=3;
    $b=6;
    $tong=tinhtong($a,$b);
    echo "<br>Tổng:".$tong;
    function chuvi($dai,$rong){
        return ($dai+$rong)*2;
    }
    $dai=5;
    $rong=4;
    $cv=chuvi($dai,$rong);
    echo "<br>Chu vi:$cv";
?>