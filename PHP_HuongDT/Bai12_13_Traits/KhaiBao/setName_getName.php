<?php
    trait SetGetName{
        //private $name;
        public function setName($name){
            $this->name = $name;
        }
        public function getName(){
            return $this->name;
        }
    }
    // với Trait bạn cũng hoàn toàn sử dụng được namespace