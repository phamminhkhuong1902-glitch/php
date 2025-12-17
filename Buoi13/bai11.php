<?php
    $file=fopen("vidu.txt","a");
    $kq=unlink("vidu1.txt");
    if($kq){
        echo "Xoá thành công";
    }
    else{
        echo "Xoá thất bại";
    }
    fclose($file);
?>