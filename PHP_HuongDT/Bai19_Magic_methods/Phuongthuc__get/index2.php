<?php
class Connguoi{
    public $name = "Lê Thị Thùy Linh";
    private $age = 22;
    public function  __get($key)
    {
        die('Phuong thức __get() được gọi');
    }
}

$connguoi = new ConNguoi();
//Gọi thuộc tính được phép truy cập
echo $connguoi->name;

//Lê Thị Thùy Linh
echo '<br>';
//Gọi thuộc tính không được phép truy cập
$connguoi->age;
//Không tồn tại thuộc tính