<?php
    session_start();
    echo "Tên:".$_SESSION["name"];
    echo "<br>Mật khẩu:".$_SESSION["matkhau"];

?>