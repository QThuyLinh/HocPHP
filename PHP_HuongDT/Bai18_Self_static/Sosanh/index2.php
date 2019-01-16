<?php

class ConNguoi
{
    protected static $name = 'ConNguoi';

    public function getName()
    {
        echo self::$name;
        echo '<br>';
        echo static::$name;
    }
}

class NguoiLon extends ConNguoi
{
    protected static $name = 'NguoiLon';
}

// NguoiLon::getName();
$a = new NguoiLon();
$a->getName();