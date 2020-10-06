<?php
    class Student{
        public $course;
        private $fname;
        private $lname;

        public function setName($f,$l){
            $this->fname=$f;
            $this->lname=$l;
        }

        public function __unset($property){
            unset($this->$property);
        }
    }

    $test=new Student();
    $test->setName("Monoget","Saha");

    unset($test->fname);

    print_r($test);
?>