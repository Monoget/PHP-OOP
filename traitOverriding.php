<?php 
    trait Hello{
        public function sayHello(){
            echo "Hello everyone trait<br>";
        }

        private function sayHelloPrivate(){
            echo "Hello everyone trait<br>";
        }
    }


    trait Hi{
        public function sayHello(){
            echo "Hi everyone trait<br>";
        }
    }


    class Base{
        use Hello, Hi{
            Hello::sayHello insteadOf Hi;
            Hi::sayHello as sayHi;
        }
    }


    class Base2{
        use Hello{
            Hello::sayHelloPrivate as public newHello;
        }
    }

    class Child extends Base{
        use Hello;
        public function sayHello(){
            echo "Hello everyone child<br>";
        }
    }

    $obj1=new Base();

    $obj1->sayHello();

    $obj1->sayHi();


    $obj2=new Base2();

    $obj2->newHello();
?>