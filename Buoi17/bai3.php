<?php
    class Sach{
        var $tensach;
        var $tacgia;
        var $nxb;
        public function __construct($tensach,$tacgia,$nxb){
            $this->tensach=$tensach;
            $this->tacgia=$tacgia;
            $this->nxb=$nxb;
        }
        function Thongtinsach(){
            echo "Thông tin sách <br>";
            echo "Tên sách:".$this->tensach."<br>";
            echo "Tác giả:".$this->tacgia."<hr>";
           
        }
        function Thongtinsach1(){
            echo "Thông tin học sinh <br>";
            echo "Tên học sinh:".$this->tensach."<br>";
             echo "Năm xuất bản:".$this->nxb;
        }
    }
    $sach=new Sach("Truyện Kiều","Nguyễn Du",1920);
    $sach->Thongtinsach();
    $sach->Thongtinsach1();

?>