  <?php

    class ParentClass{
        public static $name="Monoget";

        public function show(){
            echo static::$name;
            echo self::$name;
        }
    }

    class ChildClass extends ParentClass{
        public static $name=" Saha ";
    }

    $obj1=new ChildClass();

    $obj1->show();
 ?>