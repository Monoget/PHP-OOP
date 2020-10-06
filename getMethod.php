<?php 
     class Abc{
         private $data=["name"=>"Monoget Saha","age"=>"23","salary"=>"50000"];

         public function __get($key){
             if(array_key_exists($key,$this->data)){
                 return $this->data[$key];
             }else{
                 return "This key($key) is not defined.";
             }
         }

     }

     $test=new Abc();

     echo $test->name;
?>