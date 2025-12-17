<?php
$M=array(1,2,3,6,20,12);
echo"Mảng ban đầu:";
print_r($M);
array_pop($M);
echo "<br>Mảng xoá phần tử ở cuối";
print_r($M);
echo "<br>Mảng thêm 5 10 15 ở cuối";
array_push($M,5,10,15);
print_r($M);
echo "<br>Tổng mảng:";
$tong=array_sum($M);
echo $tong;
$N=array_slice($M,1,3);
echo "<br>Mảng trích xuất từ N:";
print_r($N);
array_unshift($M,5);
echo "<br>Mảng thêm phần tử 5 ở đầu: ";
print_r($M);
echo "<br>Kiểm tra số 20 trong mảng: ";
if (in_array(2,$M)==true){
    echo "Tìm thấy trong mảng M";
}else{
    echo "Không tìm thấy";
}
if (in_array(2,$N)==true){
    echo "Tìm thấy trong mảng N";
}else{
    echo "Không tìm thấy";
}
$K=array_merge($M,$N);
echo "<br>Mảng gộp từ M và N: ";
print_r($K);
?>
<?php
     $s1="tinhocCOBAN";
     $s2="LAP";
     echo "<br>Chuỗi 1:$s1";
     echo "<br>Chuỗi 2:$s2";
     echo "<br>Chiều dài chuỗi 1:".strlen($s1);
     echo "<br>Chiều dài chuỗi 2:".strlen($s2);
     $s3=strtolower($s1);
     echo $s3
?>