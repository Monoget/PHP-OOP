<?
    class Person{
        public $age, $name;

        public function __construct($n,$a){
            $this->name=$n;
            $this->age=$a;
        }


        public function show(){
            echo "Your name:".$this->name."<br>";
            echo "Your age:".$this->age."<br>";
        }
    }

    $object1=new Person("Monoget Saha",23);

    $object1->show();
?>