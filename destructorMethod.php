<?php
    class Abc{


        public function __construct(){
            echo "This is construct function<br>";
        }

        public function hello(){
            echo "This is hello function<br>";
        }

        public function __destruct(){
            echo "This is destruct function<br>";
        }
    }

    $test = new Abc();
    $test->hello();
?>