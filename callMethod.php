<?php 
     class Student{
         private $first_name, $last_name;

        
        private function setName($fname, $lname){
            $this->first_name=$fname;
            $this->last_name=$lname;
        }


        public function __call($method, $args){

            if(method_exists($this, $method)){
                call_user_func_array([$this,$method],$args);
            }else{
                echo "$method not exist<br>";
            }

        }

     }

    $test=new Student();

    $test->setName("Monoget","Saha");

    print_r($test);
?>