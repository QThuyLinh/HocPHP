<?php
    abstract class Dongvat{
        protected $name;

        abstract protected function getName();
    }
    /*
     * //class này sai vì chưa định nghĩa lại phương thức abstracs getName
    class ConTrau extends Dongvat
    {
        //
    }
     */

    //class này đúng vì đã định nghĩa lại đầy đủ các phương thức abstract
    class ConBo extends Dongvat{
        public function getName()
        {
            return $this->name;
        }
    }

