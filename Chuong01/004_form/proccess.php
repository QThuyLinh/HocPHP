<?php
    //echo $_GET["user"] . "<br>";
    //echo $_GET["password"];

    //echo $_REQUEST["user"] . "<br>";
    //echo $_REQUEST["password"];

    $userName = $_POST["user"];
    $pass = $_POST["password"];
    $result = ($userName == "admin" && $pass == "12345")? "Đăng nhập thành công" : "Đăng nhập thất bại";
    echo  $result;



 ?>
