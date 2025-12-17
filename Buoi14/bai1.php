<?php
    $file=fopen("vd1.txt","a");
    $kq=copy("vd1.txt","vd2.txt");
    if($kq){
        print ("Sao chép thành công");
    }
    else{
        print ("Sao chép thất bại");
    }
    fclose($file);
?>
<?php
    $file=fopen("vd2.txt","a");
    $ndghi=" làm bài tập về tập tin";
    $slghi=fwrite($file,$ndghi);
    if($slghi>0){
        print ("Nội dung đã thêm vào<br>");
    }
    else{
        print ("Nội dung chưa thêm vào");
    }
    $file1=fopen("vd2.txt","r");
    $nd=fread($file1,filesize("vd2.txt"));
    echo $nd;
    fclose($file);
?>
<?php
    
?>