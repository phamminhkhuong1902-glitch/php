<?php
    $sobyte=filesize("vd1.txt");
    echo "Số byte:$sobyte";
    $sokb=round($sobyte/1024,2);
    $somb=round($sobyte/1024/1024,6);
    $bit=$sobyte*8;
    echo "<br>Số kb:$sokb";
    echo "<br>Số mb:$somb";
    echo "<br>Số bit:$bit";
    $giay=fileatime("vd1.txt");
    echo "<br>Số giây:$giay";
    $ngay=round($giay/(24*60*60),2);
    echo "<br>Số ngày:$ngay";
    $sngay=date("d-m-y",$giay);
    $sgio=date("d-m-y H:i:s",$giay);
    echo "<br>Số ngày:$sngay";
     echo "<br>Số ngày giờ:$sgio";
?>

