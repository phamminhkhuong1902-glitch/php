<?php
$file=fopen("vidu.txt","r");
while(!feof($file)){
    $noidung = fgets($file);
    echo $noidung ."<br>";
}

?>