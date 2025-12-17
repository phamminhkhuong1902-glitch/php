<?php
$file=fopen("vidu.txt","r");
if(!feof($file)){
    $noidung = fgets($file);
    echo $noidung ."<br>";
}

?>