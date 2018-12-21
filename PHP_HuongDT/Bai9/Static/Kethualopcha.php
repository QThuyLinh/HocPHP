<?php
    class ConNguoi{
        private static $name = "Lê Thị Thùy Linh";

        public static function getName(){
            return ConNguoi::$name;
        }
    }

    class NguoiLom extends ConNguoi{
        public function getName(){
            parent::getName();
        }
    }