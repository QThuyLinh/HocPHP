<?php
    $scope = "Lê Thị Thùy Linh";

    $name = function () use ($scope){
        return $scope;
    };

    echo $name();
    //Kết quả : Lê Thị Thùy Linh