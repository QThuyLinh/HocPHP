<?php
    class Bar{
        public function  __construct()
        {
            echo "Class Bar được khởi tạo";
        }
        public function __destruct()
        {
            echo "Class Bar được hủy";
        }
    }
    class Foo extends Bar{
        public function __construct()
        {
            echo "Class Foo được khởi tạo";
        }
        public  function __destruct()
        {
           echo "Class Foo được hủy";
        }
    }
    $foo = new Foo();
//Kết quả: Class Foo được khởi tạo
//kết quả: Class Foo được hủy