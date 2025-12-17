<?php
function giaithua($n){
    $gt=1;
    for ($i=1;$i<=$n;$i++) { 
        $gt*=$i;
    }
    return $gt;
}
function tinhtong($n){
    $tong=0;
    for($i=1;$i<=$n;$i++){
        $tong+=giaithua($i);
    }
    return $tong;
}
$n=5;
echo "Cho n:$n!";
$gt=giaithua($n);
echo "<br>Giai thừa của $n:$gt";
$tong=tinhtong($n);
echo "<br>Tổng 1!+2!+...+$n! =".$tong;
?>