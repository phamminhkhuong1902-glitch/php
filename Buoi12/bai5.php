<?php
$file=fopen("vidu.txt","r");
$noidung=fread($file,filesize("vidu.txt"));
echo "File đọc toàn bộ nội dung:$noidung";
?>