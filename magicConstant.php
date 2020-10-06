<?php
namespace myNameSppace;


trait MyTrait{
    public function getTrait(){
        echo "Trait name: ".__TRAIT__."<br>";
    }
}



echo "Line Number : ".__LINE__."<br>";
echo "File name : ".__FILE__."<br>";
echo "DIR name : ".__DIR__."<br>";

function testFunction(){
        echo "Function name : ".__FUNCTION__."<br>";
}
testFunction();



class MyClass{
    use MyTrait;
    public function myTestFunction(){
        echo "Method name : ".__METHOD__."<br>";
        echo "Class name : ".__CLASS__."<br>";
        echo "Namespace name : ".__NAMESPACE__."<br>";
    }
}


$obj=new MyClass();

$obj->myTestFunction();
$obj->getTrait();
?>