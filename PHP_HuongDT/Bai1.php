<?php
    function getPersonnel(){
        $name = 'Lê Thị Thùy Linh';
        $age = 21;
        return $name . '-' . $age;
    }
?>

<?php
    class Personnel{
        private $name = "Nguyễn Văn Quang";
        private $age = "23";

        public function getPersonnel(){
            return $this->name . "-" . $this->age;
        }
    }


?>

