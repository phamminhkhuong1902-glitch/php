<?php
$file=fopen("vidu.txt","r");
if($file){
    echo "Mở file thành công";
}else{
    echo "Mở file thất bại";
}
 fclose($file);
?>