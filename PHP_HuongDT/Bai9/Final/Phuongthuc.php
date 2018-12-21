<?php
// Khai báo 1 phương thức final
    class ClassName{
        final public function methodName(){

        }
    }
//khai báo lớp con người có phương thức getSoChan() là final.
    class ConNguoi{
        private $soChan = 2;

        final public function getSoChan(){
            return$this->soChan;
        }
    }
//không thể override lại phương thức final
   /* class NguoiLon extends ConNguoi{
        public function getSoChan(){

        }
    } */