<?php

/**
 * Khi chương trình sử dụng return $this thì đồng nghĩa với phương thức trả về chính đối tương đang được
 * thực thi và lúc này cách xử lý đôi tượng đó cũng được add vào đối tượng
 * Để chứng minh chúng ta dùng var_dump() dữ liệu trước và sau khi thực hiện để xem
 */
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
var_dump($connguoi);
echo '<br>';
var_dump($connguoi->setName('Lê Thị Thùy linh'));
