<?php
class ConNguoi{
    private $name;
    public function setName($name = 'Con Nguoi'){
        $this->name = $name;
        //Trả về đối tượng hiện tại
        return $this; // Nếu bỏ - chương trình báo lỗi

    }
    public function getName(){
        return $this->name;
    }

}
//Khởi tạo Class
$connguoi = new ConNguoi();
//gọi nhiều phương thức trên cùng 1 dòng
echo $connguoi->setName('Lê Thị Thùy Linh')->setName('Linh Kun')->getName();
//Kết quả: Linh Kun