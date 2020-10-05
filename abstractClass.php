<?
    abstract class ParentClass{
        public $name;
        abstract protected function calc($a, $b);
    }

    class ChildClass extends ParentClass{
        public function calc($a, $b){
            echo $a+$b;
        }
    }

    
    $obj1=new ChildClass();
    echo $obj1->calc(4,5)."<br>";
?>