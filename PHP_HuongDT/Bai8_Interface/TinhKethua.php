<?php
    interface Dongvat
    {
        public function getName();
    }
    interface ConTrau extends Dongvat{
        public  function checkSung();
    }
    class ConNghe implements ConTrau{
        private $name;
        const SUNG = false;

        public function getName()
        {
           return $this->name;
        }
        public function checkSung()
        {
            return self::SUNG;
        }
    }