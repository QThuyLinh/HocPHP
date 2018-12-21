<?php
    class ConNguoi{
        //Khai báo thuộc tính động
        public $name;
        public $mat;
        public $mui;
        //Khai báo constant
        const SOCHAN = 2;

        //Khai báo phương thức
        public function an(){
            //code
        }
        public function noi($caunoi){
            //gọi phương thức trong class
            return $this->getSoChan();
        }
        public function di(){
            //code
        }
        public function getName(){
            //Gọi thuộc tính động trong class
            return $this->name;
        }
        public function getSoChan(){
            //Gọi thuộc tính constant trong class
            return self::SOCHAN;
        }

    }

    //Khởi tạo class
    $connguoi = new ConNguoi();
    //Gọi thuộc tính ngoài class và đồng thời gán giá trị mới cho thuộc tính
    $connguoi->name = "Lê Thị Thùy Linh";
    //Gọi lại để xem thay đổi
    echo $connguoi->name;
    //Gọi phương thức
    echo $connguoi->noi('Lê Thị Thùy Linh');