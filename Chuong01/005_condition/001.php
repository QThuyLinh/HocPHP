<?php
    $numner = 21;
    if($numner % 2 == 0)
    {
        echo "Số chẵn"; echo "<br>";
    } else{
        echo "Số lẻ"; echo "<br>";
    }
    $result = ($numner % 2 == 0)? "Số lẻ" : "";
    echo $result;
?>