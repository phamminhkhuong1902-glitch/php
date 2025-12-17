<?php
$file=fopen("vidu.txt","r");
$noidung=fread($file,10);
echo "File đọc 10 byte:$noidung"
?>