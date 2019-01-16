<?php
//Khai báo hàm autoload
function __autoload($className){
    //Kiểm tra xem file có tồn tại hay không
    if(file_exists($className. '.php')){
        //Nếu tồn tại thì chúng ta nhúng file vào
        include_once $className . '.php';
    }
}
//Khởi tạo 2 file class
$nguoilon = new NguoiLon();
echo '<br>';
$trecon = new TreCon();