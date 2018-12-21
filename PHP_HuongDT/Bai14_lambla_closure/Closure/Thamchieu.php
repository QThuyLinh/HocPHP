<?php

    $number = 1;

    $getNextNumber = function () use (&$number) {
        return ++$number;
    };

    $getPreNumber = function () use (&$number) {
        return --$number;
    };

    echo $getNextNumber();
    //kết quả: 2
    echo "<br>";
    echo $number;
    // Kết quả: 2
    echo "<br>";
    echo $getPreNumber();
    //Kết quả: 1