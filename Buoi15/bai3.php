<?php
    $sv=array("hoten" =>"Khuong","lop" =>"24CDTKW01", "sothich"=>array("du lich","xem phim"));
    echo ("Mảng ban đầu:<br>");
    print_r ($sv);

    $json=json_encode($sv,JSON_PRETTY_PRINT);
    echo ("<br>$json");
?>