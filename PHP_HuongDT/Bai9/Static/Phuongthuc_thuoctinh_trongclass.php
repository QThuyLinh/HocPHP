<?php
    class ConNguoi{
        private static $name = "Lê Thị Thùy Linh";

        public static function getName(){
            //Gọi thuộc tính tĩnh
            return self::$name;
            //Hoặc
            return ConNguoi::$name;
        }

        public function showAll(){
            //Gọi phương thức tĩnh
            return self::getName();
            //Hoặc
            return ConNguoi::getName();
        }
    }