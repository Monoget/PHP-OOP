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

        public function __wakeup(){
            echo "This is wake up method.";
        }

    }

    $test=new Student();
    $test->setName("Monoget","Saha");

    $sl=serialize($test);
    echo $sl;


    $usrl=unserialize($sl);
    print_r($usrl);
    ?>