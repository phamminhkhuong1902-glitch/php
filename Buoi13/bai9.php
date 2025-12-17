<?php
    $file=fopen("vidu.txt","a");
    $ndghi="MSSV:2430140001";
    $slghi = file_put_contents("vidu.txt",$ndghi,FILE_APPEND);
    if($slghi>0){
        echo "Ghi thành công";
        echo "<br>File ghi được $slghi byte";
    }
    else{
        echo "Ghi thất bại";
    }
    fclose($file);
?>