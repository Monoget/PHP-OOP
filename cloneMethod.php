<?php
    class Student{
        public $fname;
        public $lname;
        public $course;


        public function __construct($f,$l){
            $this->fname=$f;
            $this->lname=$l;
        }


        public function setCourse(Course $c){
            $this->course=$c;
        }


        public function __clone(){
            $this->course =clone $this->course;
        }
    }

    class Course{
        public $course;

        public function __construct($c){
            $this->course=$c;
        }
    }


    $st=new Student("Monoget","Saha");

    $course=new Course("Testing");

    $st->setCourse($course);

    $st2=clone $st;

    $st2->fname="Shuvo";
    $st2->lname="Saha";

    $st2->course->course="Test";
    
    echo "<pre>";
    print_r($st);
    echo "</pre><pre>";

    print_r($st2);
    echo "</pre>";
    ?>