<?php
    $numner = 88;
    $n = $numner % 2;

    $resultFirst = ($numner >= 0) ? "Nguyên dương" : "Nguyên âm";
    $resultLast = ($n == 0) ? "chẵn" : "lẻ";
    $result  = $resultFirst . " " . $resultLast;
    echo $result;
    //$result = ($numner % 2 == 0)? "Số lẻ" : "";
    //echo $result;
?>