<?
    class Base{
        public $name="Parent";

        public function calc($a, $b){
            return $a*$b;
        }
    }


    class Child extends Base{
        public $name="Child";

        public function calc($a, $b){
            return $a+$b;
        }
    }

    
    $obj1=new Base();
    echo $obj1->name."<br>";
    echo $obj1->calc(4,5)."<br>";

    $obj2=new Child();
    echo $obj2->name."<br>";
    echo $obj2->calc(4,5)."<br>";
?>