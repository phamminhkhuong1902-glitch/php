<?php
$M=rray(1,2,3,6,20,12);
echo"Mảng ban đầu:";
print_r($M)
array_pop($so);
echo "<br>Mảng xoá phần tử ở cuối";
print_r($so);
echo "<br>Mảng thêm 5 10 15 ở cuối";
array_push($so,30,40);
print_r($so);
array_shift($so);
echo "<br>Mảng xoá phần tử ở đầu: ";
print_r($so);
array_unshift($so,5);
echo "<br>Mảng thêm phần tử 5 ở đầu: ";
print_r($so);
echo "<br>Kiểm tra số 20 trong mảng: ";
if (in_array(8,$so)==true) {
    echo "Tìm thấy";
}else{
    echo "Không tìm thấy";
}

echo "<br>Tính tổng mảng: ";
$tong=array_sum($so);
echo $tong;
?>
<?php
     $s1="laptrinhPHP";
     $s2="LAP";
     echo "<br>Chuỗi 1:$s1";
     echo "<br>Chuỗi 2:$s2";
     echo "<br>Chiều dài chuỗi 1:".strlen($s1);
     echo "<br>Chiều dài chuỗi 2:".strlen($s2);
     $s3=strtolower($s1);
     echo $s3
?>