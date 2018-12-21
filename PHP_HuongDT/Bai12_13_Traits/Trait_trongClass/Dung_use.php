<?php

    // Nhúng 2 file chứa trait
    include 'SetGetName.php';
    include 'SetGetAge.php';
    //use namespace
    use SetGetAge\SetGetAge;

    //khai báo class ConNguoi
    class ConNguoi
    {
        private $name;
        private $age;
        //gọi trait SetGetName
        use SetGetName;
        //gọi trait SetGetAge
        use SetGetAge;
    }
    //Khởi tạo đối tượng

    $connguoi = new ConNguoi();
    //set name
    $connguoi->setName("Lê Thị Thùy Linh");
    //getName
    echo $connguoi->getName();
    echo "<br>";
    //set age
    $connguoi->setAge(21);
    echo $connguoi->getAge();
    //Kết quả
    //Lê Thị Thùy Linh
    //21
