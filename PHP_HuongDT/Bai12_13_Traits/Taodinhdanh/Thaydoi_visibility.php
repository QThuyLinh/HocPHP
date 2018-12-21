<?php

trait Name
{
    private $name = 'Lê Thị Thùy Linh';

    public function getName()
    {
        return $this->name;
    }
}

class ConNguoi
{
    use Name {
        //Định danh mới cho getName
        getName as public doName;
    }
}

$connguoi = new ConNguoi();

echo $connguoi->doName();
//Kết Quả: Lê Thị Thùy Linh