<?php
    class Foo{
        public function __construct()
        {
            echo 'Class Foo được khởi tạo';
        }

        public function getMessage()
        {
            echo 'Đây là class Foo';
        }

        public function __destruct()
        {
            echo 'Class Foo được hủy';
        }
    }

    $foo = new Foo();
    echo "<br>";
    //Kết quả: Class Foo được khởi tạo
    $foo->getMessage();
    //Kết quả: Đây là class foo
    //Kết quả: Class Foo được hủy