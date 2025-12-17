    <?php
    $chuoi1="thietKEweb";
    $chuoi2="thiet";
    echo"Cho chuỗi 1:".$chuoi1;
    echo"<br>Cho chuỗi 2:".$chuoi2;
    $chuoi3=strlen($chuoi1);
    echo "<br>Độ dài chuỗi 1:".$chuoi3;
    $chuoi4=substr($chuoi1,5,2);
    echo "<br>Tách chuỗi 1 từ vị trí 5 lấy 2 ký tự:".$chuoi4;
    $chuoi5=strtolower($chuoi1);
    echo "<br>Chuyển chuỗi 1 thành chữ thường:".$chuoi5;
    $chuoi6=strtoupper($chuoi2);
    echo "<br>Chuyển chuỗi 2 thành chữ hao:".$chuoi6;
    $chuoi7=str_replace("web","dohoa",$chuoi1);
    echo "<br>Thay tu web thành do hoa chuỗi 1:".$chuoi7;
    echo "<br>So sánh chuỗi:";
    if(strcmp($chuoi1,$chuoi2)>0){
        echo "<br>Chuỗi 1 > chuỗi 2";
    }elseif(strcmp($chuoi1,$chuoi2)==0){
        echo "<br>Chuỗi 1 = chuỗi 2";
    }else{
        echo "<br>Chuỗi 1 < chuỗi 2";
    }
    ?>