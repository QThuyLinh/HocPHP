<?php
    //Khai báo trait Name
    trait Name {
        private static $name = "Chưa xét";

        public function setName($name){
            self::$name = $name;
        }
        public function getName(){
            return self::$name;
        }
    }
    //Khai báo ConNguoi
    class ConNguoi{
        //Gọi trait Name
        use Name;
    }

    //Khai báo class NguoiLon
    class NguoiLon{
        //Gọi trait Name
        use Name;
    }
    //Khởi tạo ConNguoi
    $connguoi = new ConNguoi();
    //setName
    $connguoi->setName("Lê Thị Thùy Linh");
    //getName
    echo $connguoi->getName();
    //Kết quả: Lê Thị Thùy Linh
    echo "<br>";
    //Khởi tạo ConNguoi
    $trecon = new ConNguoi();
    //getName
    echo $trecon->getName();
    //Kết quả: Lê Thị Thùy Linh
    echo "<br>";
    //Khởi tạo NguoiLon

    $nguoilon = new NguoiLon();
    echo $nguoilon->getName();
    //Kết quả: Chưa xét

