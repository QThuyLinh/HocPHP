<?php
    class ParentClass{
        function getClass(){
            return 'ParentClass';
        }
    }

    class ChildClass extends ParentClass{
        var $name = "ChildClass";

        function getClass()
        {
            return "ChildClass";
        }

        function getMethod(){
            echo 'Đây là phương thức ăn của lớp ' . $this->getclass();
        }

        function getMethodParent()
        {
            echo 'Đây là phương thức ăn của lớp ' . ParentClass::getclass();
            //echo 'Đây là phương thức ăn của lớp ' . parent::getclass();
        }
    }

    $class = new  ChildClass();
    $class->getMethod();
    echo "<br>";
    //Kết quả : đây là phương thức của lớp trẻ con
    $class->getMethodParent();
    //Kết quả : đây là phương thức của lớp người lớn