<?php
    class Xehoi{
        var $tenxe;
        var $gia;
        var $hang;
        public function __construct($tenxe,$gia,$hang){
            $this->tenxe=$tenxe;
            $this->gia=$gia;
            $this->hang=$hang;
        }
        function Thongtinxe(){
            echo "Thông tin xe hơi <br>";
            echo "Tên xe:".$this->tenxe."<br>";
            echo "Giá:".$this->gia."<hr>";
           
        }
        function Thongtinxe1(){
            echo "Thông tin xe hơi <br>";
            echo "Tên xe:".$this->tenxe."<br>";
             echo "Giá:".$this->gia."<br>";
             echo "Hãng:".$this->hang;
        }
    }
    $xe=new Xehoi("Xe Honda",2000000,"Honda");
    $xe->Thongtinxe();
    $xe->Thongtinxe1();

?>