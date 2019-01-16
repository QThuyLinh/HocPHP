<?php
class Connguoi{
    private $name = "Lê Thị Thùy Linh";
    public function  __get($key)
    {
        //Kiểm tra xem trong class có tồn tại thuộc tính hay không
        if(property_exists($this, $key)){
            //Tiến hành lấy giá tri
            return $this->$key;
        }else{
            die('Không tồn tại thuộc tính');
        }
    }
    public function getName(){
        echo $this->name;
    }
}

$connguoi = new ConNguoi();
echo $connguoi->name;

//Lê Thị Thùy Linh
echo '<br>';
$connguoi->age = 22;
//Không tồn tại thuộc tính