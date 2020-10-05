 <?php
 
    interface Parent1{
        function sum($a,$b);
    }

    interface Parent2{
        function sub($a,$b);
    }

    class ChildClass implements Parent1, Parent2{
        public function sum($a,$b){
            return $a+$b;
        }

        public function sub($a,$b){
            return $a-$b;
        }
    }

    $obj1=new ChildClass();

    echo $obj1->sum(20,10)."<br>";
    echo $obj1->sub(20,10)."<br>";
 ?>