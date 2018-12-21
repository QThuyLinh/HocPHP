<?php
// Khi không khái báo static
    class ConNguoi{
        private $name = "amonymouse";

        public  function setName($name){
            $this->name = $name;
        }
         public function getName(){
            return $this->name;
         }
    }
    //Khởi tạo đối tượng con người
    $chuBlog = new ConNguoi();
    //setname cho đối tượng
    $chuBlog->setName("Lê Thị Thùy Linh");
    //in ra name của đối tượng
    echo $chuBlog->getName();
    //Kết quả: Lê Thị thùy Linh

    //Khởi tạo cho đối tượng con người
    $nguoixem = new ConNguoi();
    echo "<br>";
    //Hiển thị ra tên người xem
   echo $nguoixem->getName();
   //kết quả: amonymouse
echo "<br>";
//Khai báo static
    class ConNguoi1{
        private static  $name = "amonymouse";

        public  function setName($name){
           self::$name = $name;
        }
        public function getName(){
            return self::$name;
        }
    }
    //Khởi tạo đối tượng con người
    $chuBlog1 = new ConNguoi1();
    //setname cho đối tượng
    $chuBlog1->setName("Lê Thị Thùy Linh");
    //in ra name của đối tượng
    echo $chuBlog1->getName();
    //Kết quả: Lê Thị thùy Linh

    //Khởi tạo cho đối tượng con người
    $nguoixem1 = new ConNguoi1();
    echo "<br>";
    //Hiển thị ra tên người xem
    echo $nguoixem1->getName();
    //kết quả: Lê thị Thùy Linh