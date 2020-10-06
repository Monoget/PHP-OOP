<?php
    class Student{
        public $course="TT";
        private $fname;
        private $lname;


        public function setName($f,$l){
            $this->fname=$f;
            $this->lname=$l;
        }

        public function __sleep(){
            return array('fname', 'lname');
        }

    }

    $test=new Student();
    $test->setName("Monoget","Saha");

    $sl=serialize($test);
    echo $sl;
    ?>