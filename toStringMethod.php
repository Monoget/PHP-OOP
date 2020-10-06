<?php 
    class Abc{
        public function __toString(){
            return "You can't object as string ".get_Class($this);
        }
    }

    $test = new Abc();
    echo $test;
?>