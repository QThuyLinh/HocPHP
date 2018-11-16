<?php
    //Toán từ điều kiện
    $n = 12;
    $result = ($n >= 0) ? "Số dương" :  "Số âm" ;
    echo $result; echo "<br>";

    $n1 = -12;
    $result1 = ($n1 >= 0) ? "Số dương" :  "Số âm" ;
    echo $result1; echo "<br>";

    $n2 = 12;
    $result2 = ($n1 > 0) ? "Số dương" :  ($n2 < 0) ? "Số âm" : "Số dương" ;
    echo $result2; echo "<br>";

    $n2 = -12;
    $result2 = ($n1 > 0) ? "Số dương" :  ($n2 < 0) ? "Số âm" : "Số dương" ;
    echo $result2; echo "<br>";

    $n3 = 12;
    $result3 = ($n3 > 0) ? "Số dương" :  (($n3 < 0) ? "Số âm" : "Số 0") ;
    echo $result3; echo "<br>";

    $n4 = 0;
    $result4 = ($n4 > 0) ? "Số dương" :  (($n4 < 0) ? "Số âm" : "Số 0") ;
    echo $result4; echo "<br>";





?>