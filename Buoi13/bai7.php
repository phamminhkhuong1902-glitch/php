<?php
    $file=fopen("vidu.txt","r");

    $noidung = file_get_contents("vidu.txt");
    echo $noidung;
    fclose($file);
?>