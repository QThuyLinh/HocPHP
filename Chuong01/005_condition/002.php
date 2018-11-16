<?php
    $numner = -11;

    if($numner >= 0 && $numner % 2 == 0)
    {
        $result =  "Số nguyên dương chẵn";
    } else if($numner >= 0 && $numner % 2 == 1)
    {
        $result =  "Số nguyên dương lẻ";
    }else if($numner < 0 && $numner % 2 == 0)
    {
        $result =  "Số nguyên âm chẵn";
    }else {
        $result =  "Số nguyên âm lẻ";
    }
    echo $result;
    //$result = ($numner % 2 == 0)? "Số lẻ" : "";
    //echo $result;
?>