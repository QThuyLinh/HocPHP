<?php
/*
//Không thể khai báo một phương thức abstract trong class bình thường
    class People{
        abstract public function getA();
    }

//Trong abstract class thuộc tính không được khai báo với từ khóa abstract
    class People{
        //sai
        abstract public $name;
        //đúng
        public $name;
    }
//  Không thể khai khởi tạo một abstract class
    abstract class  People{
        //đúng
        public $name;
    }
    $people = new People();

*/