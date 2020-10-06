<?php 
     class Abc{
         private $name;

        
        public function hello(){
            echo "Hello ".$this->name;
        }

         public function __set($property,$value){
            
            if(property_exists($this, $property)){
                $this->$property=$value;
            }else{
                echo "This ($property) is not available.";
            }
         }

     }

    $test=new Abc();

    $test->name="Monoget";

    $test->hello();
?>