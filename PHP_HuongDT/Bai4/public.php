<?php
    class Person{
        //Khai báo thuộc tính xe dạng public
        public $name;

        function setName($name){
            $this->name = $name;
        }
        function getName()
        {
            //đúng vì sử dụng trong class con
            return $this->name;
        }
    }
    //khởi tạo lớp Person
    $person = new Person();
    //tác động vào thuộc tính name
    $person->name = 'Vũ Van A';
    //tác động vào biến name qua hàm setName
    $person->setName("Lê Thị Thùy Linh");
    echo $person->getName();