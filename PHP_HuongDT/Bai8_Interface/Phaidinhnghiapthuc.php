<?php
    interface Dongvat{
        public function getName();
    }
/*
//Class này đúng vì đã khai báo và định nghĩa lại phương thức getName
//trong interface

    class ConTrau implements Dongvat{
        private $name;
        public function getName()
        {
            return $this->name;
        }
    }

//Class này sai vì chưa khai báo và định nghĩa lại phương thức getName
//trong interface
    class ConBo implements DongVat
    {
        private $name;

        public function setName($name)
        {
            $this->name = $name;
        }
    }

*/