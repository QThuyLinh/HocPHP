<?php
//trait SetGetName
    trait SetGetName
    {
        public function setName($name)
        {
            $this->name = $name;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getAll()
        {
            return $this->getName();
        }

    }

//trait SetGetAge
    trait SetGetAge
    {
        public function setAge($age)
        {
            $this->age = $age;
        }

        public function getAge()
        {
            return $this->age;
        }

        public function getAll()
        {
            return $this->getAge();
        }
    }
//Sai
/*
class ConNguoi
{
    private $name;
    private $age;
    //gọi trait
    use SetGetName, SetGetAge;
}
//chương trình báo lỗi.
//Fatal error: Trait method getAll has not been applied,
//because there are collisions with other trait methods on ConNguoi
*/

//Đúng
//override lại phương thức trùng tên đó ở trong class sử dụng
 /*   class ConNguoi
    {
        private $name;
        private $age;
        //gọi trait
        use SetGetName, SetGetAge;

        public function getAll()
        {
            return $this->getName();
        }
    }
*/

 //dùng insteadof để xét độ ưu tiên cho phương thức bạn muốn sử dụng
    class ConNguoi
    {
        private $name;
        private $age;
        //gọi trait
        use SetGetName, SetGetAge {
            //ưu tiên sử dụng phương thức getall của trait SetGetAge
            SetGetAge::getAll insteadof SetGetName;
        }
    }