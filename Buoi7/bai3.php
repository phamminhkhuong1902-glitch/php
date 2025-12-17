<?php
     $s1='Lap trinh';
     $s2="PHP";
     echo "<br>Chuỗi 1:$s1";
     echo "<br>Chuỗi 2:$s2";
     echo "<br>Chiều dài chuỗi 1:".strlen($s1);
     echo "<br>Chiều dài chuỗi 2:".strlen($s2);
?>
<?php
     $s1='Lap trinh';
     $s2="PHP";
     echo "<br>Chuỗi 1:$s1";
     echo "<br>Chuỗi 2:$s2";
     echo "<br>Chiều dài chuỗi 1:".strlen($s1);
     echo "<br>Chiều dài chuỗi 2:".strlen($s2);
     $s3=implode(" ",[$s1,$s2]);
     echo "<br>Nối chuỗi 1 và 2:".$s3;
?>
<?php
     $s1='Lap trinh';
     $s2="PHP";
     echo "<br>Chuỗi 1:$s1";
     echo "<br>Chuỗi 2:$s2";
     echo "<br>Chiều dài chuỗi 1:".strlen($s1);
     echo "<br>Chiều dài chuỗi 2:".strlen($s2);
     $s4=substr($s1,0,3);
     echo "<br>Lấy 3 ký tự đầu tiên:".$s4;
?>
<?php
     $s1='Lap trinh';
     echo "<br>Chuỗi 1:$s1";
     echo "<br>Chiều dài chuỗi 1:".strlen($s1);
     echo "<br>Vị trí chữ Lap:".strpos($s1,"Lap");
     echo "<br>Vị trí chữ Lap:".strpos($s1,"trinh");
?>
<?php
     $s1='Lap trinh web';
     echo "<br>Chuỗi 1:$s1";
     echo "<br>Chiều dài chuỗi 1:".strlen($s1);
     echo "<br>Chuỗi 1 thay web thành php:".str_replace("web","php",$s1,);
?> 
<?php
     $s1='Lap trinh';
     $s2="Lap";
     echo "<br>Chuỗi 1:$s1";
     echo "<br>Chuỗi 2:$s2";
     echo "<br>So sánh chuỗi:";
     if(strcmp($s1,$s2)>0){
        echo "Chuỗi 1 > chuỗi 2";
     }elseif(strcmp($s1,$s2)<0){
        echo "Chuỗi 1 < chuỗi 2";
     }else{
        echo "Chuỗi 1 = chuỗi 2";
     }
?> 