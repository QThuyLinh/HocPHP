<?php
class ConNguoi{
    private static $name = 'Connguoi';

    public static function getName(){
        echo self::$name;
        echo '<br>';
        echo static::$name;
    }
}
ConNguoi::getName();