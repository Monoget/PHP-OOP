<?php
class PrivateClass{
    private $name;

    public function __construct($n){
        $this->name=$n;
    }

    private function prshow(){
        echo "Your name: ".$this->name."<br>";
    }
}


class ProtectedClass{
    protected $name;

    public function __construct($n){
        $this->name=$n;
    }

    protected function ptshow(){
        echo "Your name: ".$this->name."<br>";
    }
}


class PublicClass extends ProtectedClass{

    public function pbshow(){
        echo "Your name: ".$this->name."<br>";
    }
}

$publicClassObg1=new PublicClass("Monoget");
$publicClassObg1->pbshow();
?>