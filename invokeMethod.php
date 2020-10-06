<?php 

class Calculation{
    public $a, $b;

    public function __construct($a , $b){
        $this->a=$a;
        $this->b=$b;
    }

    public function sum(){
        echo $this->a+$this->b;
    }

    public function __invoke(){
        $this->sum();
    }
}


$obj=new Calculation(10,5);

$obj();

?>