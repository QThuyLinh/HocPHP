<?php

trait Name
{
    private $name = 'Lê Thị Thùy Linh';

    private function getName()
    {
        return $this->name;
    }
}
class ConNguoi
{
    use Name {
    //thay đổi visibitily thành public
    getName as public;
    }
}

$connguoi = new ConNguoi();
echo $connguoi->getName();
//Kết Quả: Lê Thị Thùy Linh