<?php
    $file=fopen("File1.txt","r");
    $kq=copy("File1.txt","File2.txt");
    
?>

<?php
   $file=fopen("File2.txt","a");
   $ndghi=" vào buổi chiều";
   $slghi=fwrite($file,$ndghi);
?>