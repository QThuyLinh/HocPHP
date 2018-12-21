<?php

    // Khai báo class ConNguoi
    class ConNguoi
    {
        public static $name = 'ConNguoi';

        public function setName($name)
        {
            $this->name = $name;
        }

        public function echoName()
        {
            echo $this->name;
        }
    }

    //Khởi tạo class
    $nguoilon = new ConNguoi();
    //echoName
    $nguoilon->echoName();
    //Kết Quả : Undefined property: NguoiLon::$name
    echo $nguoilon->name;
    //Kết Quả: Undefined property: NguoiLon::$name