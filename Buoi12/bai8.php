<?php
    $file = fopen("thongtinhs.txt","r");
    $noidung=fread($file,filesize("thongtinhs.txt"));
    echo "File đọc toàn bộ nội dung:$noidung";

    $file = fopen("thongtinhs.txt","a");
    $ghi="Nơi sinh: TPHCM";
    $slghi= fwrite($file,$ghi);
    if($slghi>=0){
        echo"Đã ghi thành công";
    }
    // echo "Nội dung ghi $slghi";
?>