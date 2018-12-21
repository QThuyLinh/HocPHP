<?php
    class Role{
        public $role;

        public function __construct($role)
        {
            $this->role = $role;
        }

        function getRole($role){
            return $role();
        }
    }
    //Khởi tạo class trong Role
    $role = new Role(function (){
        return "Lê Thị Thùy Linh";
    });
    //Gán data bằng thuộc tính role
    $data = $role->role;
    //hiển thị role
    echo $data();
    //Kết quả: Lê Thị Thùy Linh
    echo "<br>";
    //Gọi getRole
    echo $role->getRole(function (){
        return "Lê Thị Thùy Linh";
    });