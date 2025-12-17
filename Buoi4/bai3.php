<?php
$so=3;
echo "Cho so=$so";
 switch ($so) {
    case '2':
        echo "<br>Hôm nay là thứ 2";
        break;
    case '3':
        echo "<br>Hôm nay là thứ 3";
        break;
    case '4':
        echo "<br>Hôm nay là thứ 4";
        break;
    default:
        echo "<br>Số không hợp lệ vui lòng nhập lại";
        break;
 }

 $thang=6;
 echo "<hr>Cho tháng=$thang";
 switch ($thang) {
    case '1':
        echo "<br>Mùa xuân";
        break;
    case '2':
        echo "<br>Mùa xuân";
        break;
    case '3':
        echo "<br>Mùa xuân";
        break;
    case '4':
        echo "<br>Mùa hạ";
        break;
    case '5':
        echo "<br>Mùa hạ";
        break;
    case '6':
        echo "<br>Mùa hạ";
        break;
    case '7':
        echo "<br>Mùa thu";
        break;
    case '8':
        echo "<br>Mùa thu";
        break;
    case '9':
        echo "<br>Mùa thu";
        break;
    case '10':
        echo "<br>Mùa đông";
        break;
    case '11':
        echo "<br>Mùa đông";
        break;
    case '12':
        echo "<br>Mùa đông";
        break;
    default:
        echo "<br>Tháng không hợp lệ vui lòng nhập lại";
        break;
 }  $thang=8;
 echo "<hr>Cho tháng=$thang";
 switch ($thang) {
    case '1':case '2':case '3':
        echo "<br>Mùa xuân";
        break;
    case '4':case '5':case '6':
        echo "<br>Mùa hạ";
        break;   
    case '7':case '8':case '9':
        echo "<br>Mùa thu";
        break;
    case '10':case '11':case '12':
        echo "<br>Mùa đông";
        break;
    default:
        echo "<br>Tháng không hợp lệ vui lòng nhập lại";
        break;
 } 
?>