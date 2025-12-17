<?php
    $a=4;
    $b=5;
    $c=3;;
    $max;
    echo "Cho a = $a <br>" ;
    echo "Cho b = $b <br>" ;
    echo "Cho c = $c <br>" ;
    if($a>$b){
        $max=$a;
         if($max>$c){
            $max=$a;
         }else{
            $max=$c;
         }    
    }else{
        $max=$b;
         if($max>$c){
            $max=$b;;
         }else{
            $max=$c;
         }
        }
        echo "Số lớn nhất $max";
    // cách 2
    echo "<hr> Cho a = $a <br>" ;
    echo "Cho b = $b <br>" ;
    echo "Cho c = $c <br>" ;
    if($a>$b && $a>$c){
        $max=$a;
    }
    if($b>$a && $b>$c){
        $max=$b;
    }
    if($c>$a && $c>$b){
        $max=$c;
    }
    echo "Số lớn nhất $max";


?>