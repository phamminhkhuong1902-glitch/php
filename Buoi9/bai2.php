    <?php
    function bangcuuchuong_for($so){
        echo "<br>Bảng cửu chương $so dùng for <br>";
        for ($i=1; $i <=10 ; $i++) { 
            echo "$so x $i=".$so*$i."<br>";
        }
    }
    function bangcuuchuong_while($so){
        echo "<<hr>>Bảng cửu chương $so dùng while <br>";
        $i=1;
        while( $i <=10) {
            echo "$so x $i=".$so*$i."<br>";
            $i++;
        }
    }
    function bangcuuchuong_dowhile($so){
        echo "<hr>Bảng cửu chương $so dùng do while <br>";
        $i=1;
        do{
            echo "$so x $i=".$so*$i."<br>";
            $i++;
        }while( $i <=10);
    }
    function tong($n){
        $tong=0;
        for ($i=1; $i <=$n ; $i++) { 
             $tong+=$n;
        }
        return $tong;
    }
    function tongchan($n){
        $tong=0;
        for ($i=0;$i<=$n;$i++) { 
           if($i%2==0){
            $tong+=$i;
           }
        }
        return $tong;
    }
    $so=2;
    bangcuuchuong_for($so);
    bangcuuchuong_while($so);
    bangcuuchuong_dowhile($so);
    $n=10;
    echo "<hr>Cho n=$n";
    echo "<br>S=1+2+3+...+$n =";
    $kq=tong($n);
    echo $kq;
    echo "<br>S=2+4+6+...+$n =";
    $kq1=tongchan($n);
    echo $kq1;
    ?>