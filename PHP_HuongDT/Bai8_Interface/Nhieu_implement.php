<?php
    interface Dongvat{
        public function getName();
    }
    interface ConTrau{
        public function checkSung();
    }
    class ConNghe implements Dongvat, ConTrau{
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