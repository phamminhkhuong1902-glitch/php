<?php
$so=-5;
echo "Cho số:$so";
echo "<br>Trị tuyệt đối của $so:".abs($so);
$a=3;$b=7;$c=1;
echo "<br>Cho a:$a";
echo "<br>Cho b:$b";
echo "<br>Cho c:$c";
echo "<hr>Số lớn nhât:".max($a,$b,$c);
echo "<br>Số nhỏ nhât:".min($a,$b,$c);
$so1=9;
echo "<hr>Căn bậc 2 của $so1:".sqrt($so1);
$coso=3;
$mu=2;
echo "<hr>$coso<sup>$mu</sup>:".pow($coso,$mu);
$so2=9.45786;
echo"<hr>Làm tròn 2 số:".round($so2,2);
$c=0;
$d=100;
echo "<hr>Ngẫu nhiên từ 0 đến 100:".rand($c,$d);
?>