<?php
    // Khai báo trait Name
    trait Name
    {
        public static function getName()
        {
            return 'Name Trait';
        }
    }

    //Khai báo class ConNguoi
    class ConNguoi
    {
        //gọi trait Name
        use Name;
    }

    // khởi tạo class ConNguoi
    $connguoi = new ConNguoi();

    //getName
    echo $connguoi->getName();
    //Kết Quả: Name Trait
    echo "<br>";
    //hoặc
    echo ConNguoi::getName();
    //Kết Quả: Name Trait