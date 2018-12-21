<?php
//Khai báo class Connguoi
    class ConNguoi{
        public static function getStatic(){
            return "Đây là phương thức Static";
        }
        public function echoStatic(){
            echo $this->getStatic();
        }
    }
    $connguoi = new ConNguoi();
    $connguoi->echoStatic();
//Kết quả: Đây là phương thức getStatic