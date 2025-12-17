<?php
    $file=fopen("vidu.txt","a");
    $kq=copy("vidu.txt","vidu1.txt");
    if($kq){
        echo "Sao chép thành công";
    }
    else{
        echo "Sao chép thất bại";
    }
    fclose($file);
?>