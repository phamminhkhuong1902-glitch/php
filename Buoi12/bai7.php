<?php
$file=fopen("vidu.txt","a");
    $ghi="MSSV:243014001";
    $slghi= fwrite($file,$ghi);
    echo "Nội dung ghi $slghi";

?>