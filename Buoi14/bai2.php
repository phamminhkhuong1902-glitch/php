<?php
    $dd="C:/xampp/htdocs/php_khuong/Buoi14/vd1.txt";
    $tentt=basename($dd);
    print ("Tin tập tin có phần mở rộng $tentt");
    $tentt1=basename($dd,".txt");
    print ("<br>Tin tập tin không phần mở rộng $tentt1");
    $tentt2=dirname("$dd");
    print ("<br>Đường dẫn tập tin:$tentt2");
?>