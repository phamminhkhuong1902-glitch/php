<?php
$so=array(5,10,20,25);
echo"Mảng ban đầu:";
print_r($so);
echo "<br>Mảng thêm 30 vào cuối: ";
array_push($so,30);
print_r($so);
array_pop($so);
echo "<br>Mảng xoá 30 ở cuối: ";
print_r($so);
echo "<br>Mảng thêm 20 vào đầu: ";
array_unshift($so,20);
print_r($so);
echo "<br>Mảng trích xuất: ";
$so1=array_slice($so,1,3);
print_r($so1);
echo "<br>Kiểm tra số 20 trong mảng: ";
if (in_array(20,$so)==true) {
    echo "Tìm thấy";
}else{
    echo "Không tìm thấy";
}
?>