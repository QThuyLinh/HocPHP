<?php
    class Person{
        //Khia báo thuộc tính xe dạng protected
        protected $name;
    }
    class Male extends Person{
        function setName($name){
            //Đúng vì sử dụng trong class con
            $this->name = $name;
        }

        function getName(){
            //Đúng vì sử dụng trong class con
            return $this->name;
        }
    }

    //Khởi tạo lớp person
    $person = new Person();
    // Sai vì biến name có visibility  là protect nên không tác động từ ngoài class vào được
    //$person->name;
    //Khởi tạo lớp Male
    $male = new Male();
    //Tác động vào biến name qua hàm setName
    $male->setName("Lê Thị Thùy Linh");
    echo $male->getName();