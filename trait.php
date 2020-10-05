<?php 
    trait Hello{
        public function sayHello(){
            echo "Hello everyone <br>";
        }
        public function sayHi(){
            echo "Hi everyone <br>";
        }
    }

    trait Bye{
        public function sayBye(){
            echo "Bye everyone <br>";
        }
    }

    class Base{
        use Hello, Bye;
    }

    class Base2{
        use Hello;
    }

    $obj1=new Base();
    $obj2=new Base2();

    $obj1->sayBye();

    $obj2->sayHi();
?>