<?php
class Connguoi{
    private $name;
    public function  __set($key, $value)
    {
        //Kiểm tra xem trong class có tồn tại thuộc tính hay không
        if(property_exists($this, $key)){
            //Tiến hành gán giá tri
            $this->$key = $value;
        }else{
            die('Không tồn tại thuộc tính');
        }
    }
    public function getName(){
        echo $this->name;
    }
}

$connguoi = new ConNguoi();
$connguoi->name = 'Lê Thị Thùy Linh';
$connguoi->getName();

//Lê Thị Thùy Linh
echo '<br>';
$connguoi->age = 22;
//Không tồn tại thuộc tính