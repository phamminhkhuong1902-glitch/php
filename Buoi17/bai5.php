<?php
    class Sinhvien{
        var $hoten;
        var $lop;
        var $diemmon1;
        var $diemmon2;

        public function __construct($hoten,$lop,$diemmon1,$diemmon2){
            $this->hoten=$hoten;
            $this->lop=$lop;
            $this->diemmon1=$diemmon1;
            $this->diemmon2=$diemmon2;
        }
        function trungbinh(){
            return ($this->diemmon1+$this->diemmon2)/2;
        }
        function ketqua(){
            if($this->trungbinh()>=5){
                echo "Đạt";
            }
            else{
                echo "Không đạt";
            }
        }
        function xeploai(){
            if($this->trungbinh()>=8){
                echo "Giỏi";
            }
            elseif($this->trungbinh()<8 and $this->trungbinh()>=7 ){
                echo "Khá";
            }
            elseif($this->trungbinh()<7 and $this->trungbinh()>=5){
                echo "TB";
            }
            else{
                echo "Yếu";
            }
        }
        function Thongtinsv(){
            echo "Thông tin sinh viên <br>";
            echo "Tên sinh viên:".$this->hoten."<br>";
            echo "Lớp:".$this->lop."<br>";
            echo "Điểm môn 1:".$this->diemmon1."<br>";
            echo "Điểm môn 2:".$this->diemmon2."<hr>";
        }
        function Thongtinsv1(){
            echo "Thông tin sinh viên <br>";
            echo "Điểm trung bình:".$this->trungbinh()."<br>";
            echo "Kết quả:";
            echo $this->ketqua();
            echo "<br>Xếp loại:";
            echo $this->xeploai();
             
        }
    }
    $sv=new Sinhvien("2430140001","24CDTKW01",7.5,9.0);
    $sv->Thongtinsv();
    $sv->Thongtinsv1();

?>