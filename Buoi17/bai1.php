<?php
    class Hocsinh{
        var $ten;
        var $tuoi;
        var $diem;
        function ThongtinHS(){
            echo "Thông tin học sinh <br>";
            echo "Tên học sinh:".$this->ten."<br>";
            echo "Tuổi học sinh:".$this->tuoi."<br>";
            echo "Điểm học sinh:".$this->ten;
        }
    }
    $khuong=new Hocsinh();
    $khuong->ten="Phạm Minh Khương";
    $khuong->tuoi="21";
    $khuong->diem="9.0";
    $khuong->ThongtinHS();
?>