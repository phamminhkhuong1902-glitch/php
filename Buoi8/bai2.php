    <?php
    $chuoi1="LAP trinh pHp";
    echo "<br>Cho chuỗi:".$chuoi1;
    echo "<br>Viết hoa chữ cái đầu chữ:".ucwords($chuoi1);
    echo "<br>Viết hoa chữ cái đầu chữ:".ucwords(strtolower($chuoi1));
    $chuoi2="A";
     echo "<br>Cho chuỗi:".$chuoi2;
    echo "<br>Chuỗi lặp lại 5 lần:".str_repeat($chuoi2,5);
    $chuoi3="laptrinh";
     echo "<br>Cho chuỗi:".$chuoi3;
    $chuoi4=strrev($chuoi3);
    echo "<br.Chuỗi đảo ngược:$chuoi4";
    ?>