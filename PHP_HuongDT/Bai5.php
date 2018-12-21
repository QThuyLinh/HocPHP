<?php
    class Hinh{
        protected function tinhDienTich(){

        }
    }
    class HinhVuong extends Hinh{
        private $canh;

        public function setCanh($canh){
            $this->canh = $canh;
        }

        public function getCanh(){
            return $this->canh;
        }

        //Xử lý diện tích của hình vuông
        public function tinhDienTich()
        {
            return pow($this->canh, 4);
        }
    }
    class HinhTron extends Hinh{
        private $bankinh;

        public function setBanKinh($bankinh){
            $this->bankinh = $bankinh;
        }

        public function getBanKinh(){
            return $this->bankinh;
        }

        //Xử lý diện tích của hình tròn
        public function tinhDienTich()
        {
            return (pow($this->bankinh, 2) * pi());
        }
    }

    $hinhvuong = new  HinhVuong();
    $hinhvuong->setCanh(4);
    echo $hinhvuong->tinhDienTich();
    echo "-----------------------";
    $hinhtron = new HinhTron();
    $hinhtron->setBanKinh(4);
    echo $hinhtron->tinhDienTich();

