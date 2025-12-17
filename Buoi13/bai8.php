<?php
    $file=fopen("vidu.txt","a");
    $ndghi="MSSV:2430140001";
    $slghi = fwrite($file,$ndghi);
    if($slghi>0){
        echo "Ghi thành công";
        echo "File ghi được $slghi byte"
    }
    else{
        echo "Ghi thất bại";
    }
    fclose($file);
?>