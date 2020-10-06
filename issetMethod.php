<?php
    class Student{
        public $course;
        private $fname;
        private $lname;

        private $detail=["name"=>"Monoget Saha","age"=>"23"];

        public function setName($f,$l){
            $this->fname=$f;
            $this->lname=$l;
        }

        public function __isset($name){
            echo isset($this->detail[$name]);

        }
    }

    $test=new Student();
    $test->setName("Monoget","Saha");

    echo isset($test->age);
?>