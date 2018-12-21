<?php
    function getRole($role){
        return $role();
    }

    echo getRole(function (){
        return "Lê Thị Thùy Linh";
    });