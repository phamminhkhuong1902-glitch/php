<?php
$chuoi1="laptrinh";
echo "Cho chuỗi:".$chuoi1;
$mh1=md5($chuoi1);
echo "<br>Mã hoá chuỗi md5:".$mh1;
$mh2=sha1($chuoi1);
echo "<br>Mã hoá chuỗi sha1:".$mh2;
$mh3=base64_encode($chuoi1);
echo "<br>Mã hoá chuỗi base64:".$mh3;
$gm=base64_decode($chuoi1);
echo "<br>Giải mã chuỗi base64:".$gm;
?>