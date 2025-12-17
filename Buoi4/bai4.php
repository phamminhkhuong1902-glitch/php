<?php
for ($i=1; $i<= 10; $i++) {
    echo "$i " ;
}
echo "<hr>lặp các số lẻ<br>";
for ($i=1; $i<= 10; $i++) {
    if ($i%2==1) {
        echo "$i " ;
    }
}
echo "<hr>dùng while <br>";
$i=1;
while ($i<=10) {
    echo "$i " ;
    $i++;
}
echo "<hr>dùng while lặp các số lẻ<br>";
$i=1;
while ($i<=10) {
    if ($i%2==1) {
    echo "$i " ;
    }
    $i++;
}
echo "<hr>dùng do while lặp các số lẻ<br>";
$i=1;
 do {
    if ($i%2==1) {
    echo "$i " ;
    }
    $i++;
}while($i<=10);
$n=2;
echo "<hr>Bảng cửu chương $n dùng for <br>";
for($i=1;$i<=10;$i++){
    $kq=$i*$n;
    echo"$n x $i = $kq<br>";
}
$n=3;
echo "<hr>Bảng cửu chương $n dùng while <br>";
$i=1;
while ($i <= 10) {
    $kq=$i*$n;
    echo"$n x $i = $kq<br>";
    $i++;
}
$n=4;
echo "<hr>Bảng cửu chương $n dùng do while<br>";
$i=1;
do{
    $kq=$i*$n;
    echo"$n x $i = $kq<br>";
    $i++;
}while ($i <= 10) 
?>
