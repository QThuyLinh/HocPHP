<?php
//Khai báo hàm __autoload
function __autoload($clasaName){
    //Kiêm tra xem file có tồn tại hay không
    if(file_exists($clasaName . '.php')){
        //Nếu tồn tại nhúng file vào
        include_once $clasaName. '.php';
    }
}
ConNguoi::getName();