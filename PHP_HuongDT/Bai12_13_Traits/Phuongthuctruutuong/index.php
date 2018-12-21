<?php
    //Khai báo trait Name
    trait Name{
        //Khai báo thuộc tính name
        private $name = "Lê Thị Thùy Linh";

        //định nghãi phương thức getName
        abstract public function getName();
    }

    //Khai Báo class Connguoi
    class ConNguoi{
        //Gọi trait Name
        use Name;
        //Khai báo và định nghĩa lại phương thức getName

        public function getName()
        {
            return $this->name;
        }
    }
    // khởi tọa class ConNguoi
    $connguoi = new ConNguoi();
    //getName
    echo $connguoi->getName();
    //Kết Quả: Lê Thị Thùy Linh