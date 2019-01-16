<?php
class Connguoi{
    private $name;
    public function  __set($key, $value)
    {
       die('Phương thức __set() được gọi');
    }
    public function getName(){
        echo $this->name;
    }
}

$connguoi = new ConNguoi();
//gọi thuộc tính được phép truy cập
$connguoi->name = 'Lê Thị Thùy Linh';
$connguoi->getName();

//Lê Thị Thùy Linh
echo '<br>';
$connguoi->age = 22;
//Phương thức __set() được gọi