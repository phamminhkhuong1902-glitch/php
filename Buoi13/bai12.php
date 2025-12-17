<?php
    $file=fopen("vidu.txt","a");
    $kq=file_exists("vidu.txt");
    if($kq){
        echo "<br>File tồn tại";
    }
    else{
        echo "<br>File không tồn tại";
    }
    $kq1=is_readable("vidu.txt");
    if($kq1){
        echo "<br>File có thể đọc";
    }
    else{
        echo "<br>File không thể đọc";
    }
    $kq2=is_writable("vidu.txt");
    if($kq2){
        echo "<br>File có thể ghi";
    }
    else{
        echo "<br>File không thể ghi";
    }
    fclose($file);
?>