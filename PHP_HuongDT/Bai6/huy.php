<?php
    class Foo{
        public function __destruct()
        {
            echo "Class Foo được hủy";
        }
    }
    $foo = new Foo();
    //kết quả: Class Foo được hủy