<?php

//Lỗi
/*
    class Person{
        //Khia báo thuộc tính name ở private
        private $name;

        //Khai báo phương thức run ở private
        private function run(){
            return "Đây là hàm run!";
        }
    }
    //Khởi tạo class
    $person = new Person();
    //Gọi phương thức name
    $person->name;
    //Sau đó các bạn chạy chương trình lên sẽ nhận được một dòng thông báo lỗi có nội dung: Fatal error: Cannot access private property Person::$name in
*/
    class Person{
        //Khia báo thuộc tính name ở private
        private $name;

        //Khai báo phương thức run ở private
        private function run(){
            return "Đây là hàm run!";
        }

        function setName($name){
            $this->name = $name;
        }

        function getName(){
            return $this->name;
        }

        function getRunMethod(){
            return $this->run();
        }
    }

    //Khởi tạo hàm class
    $person = new Person();
    //Set thuộc tính name
    $person->setName("Lê Thị thùy Linh");
    //Lấy ra thuộc tính name
    echo $person->getName(). "<br>";
    //Gọi giá trị của phương thức run
    echo $person->getRunMethod();
