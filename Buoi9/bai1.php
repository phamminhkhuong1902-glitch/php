    <?php
    function chuvi($dai,$rong){
        $chuvi=($dai+$rong)*2;
        return $chuvi;
    }
    function dientich($dai,$rong){
        $dientich=$dai*$rong;
        return $dientich;
    }
    $dai=10;
    $rong=5;
    echo "Cho chiều dài:$dai,cho chiều rộng:$rong";
    $cv=chuvi($dai,$rong);
    echo "<br>Chu vi:$cv";
    $dt=dientich($dai,$rong);
    echo "<br>Diện tích:$dt";
    ?>