<?php
    class Hocsinh{
        var $ten;
        var $tuoi;
        var $diem;
        public function __construct($ten,$tuoi,$diem){
            $this->ten=$ten;
            $this->tuoi=$tuoi;
            $this->diem=$diem;
        }
        function ThongtinHS(){
            echo "Thông tin học sinh <br>";
            echo "Tên học sinh:".$this->ten."<br>";
            echo "Tuổi học sinh:".$this->tuoi."<br>";
            echo "Điểm học sinh:".$this->ten."<hr>";
        }
        function ThongtinHS1(){
            echo "Thông tin học sinh <br>";
            echo "Tên học sinh:".$this->ten."<br>";
            echo "Điểm học sinh:".$this->ten;
        }
    }
    $khuong=new Hocsinh("Minh Khương",21,8.0);
    $khuong->ten="Phạm Minh Khương";
    $khuong->tuoi=21;
    $khuong->diem=9.0;
    $khuong->ThongtinHS();
    $khuong->ThongtinHS1();

?>