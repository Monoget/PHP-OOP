<?php 
    class Student{
        private static function hello($fname, $lname){
            echo "Hello $fname $lname<br>";
        }

        public static function __callStatic($method, $args){
            if(method_exists(__CLASS__, $method)){
                call_user_func_array([__CLASS__,$method],$args);
            }else{
                echo "$method not exist<br>";
            }
        }
    }

    Student::hello("Monoget","Saha");
?>