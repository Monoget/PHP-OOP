  <?php

    class ParentClass{
        public static $name="Monoget";
    }

    class ChildClass extends ParentClass{

        public function __construct($n){
            parent::$name=$n;
        }

        public function show(){
            echo parent::$name;
        }
    }

    $obj1=new ChildClass("Saha ");

    $obj1->show();
 ?>