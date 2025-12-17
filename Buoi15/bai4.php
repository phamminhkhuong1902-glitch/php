<?php
    $chuoijson='{"hoten":"Khuong","lop":"24CDTKW01","sothich":["du lich","xem phim"]}';
    echo ("Chuỗi ban đầu:<br>");
    print_r ($chuoijson);
    $mangjson=json_decode($chuoijson);
    echo "<br>Chuỗi json chuyển thành mảng: ";
    print_r($mangjson);
?>