<?php 

trait MyTrait{
    public function myTraitMethod(){

    }
}

if(trait_exists("MyTrait")){
    echo "Trait exist<br>";
}else{
    echo "Trait not exist<br>";
}

interface MyInterface{

}

if(interface_exists("MyInterface")){
    echo "Interface exist<br>";
}else{
    echo "Interface not exist<br>";
}

class MyClass{
    public $myProperty;
    public function MyMethod(){

    }
}

if(class_exists("MyClass")){
    echo "Class exist<br>";
}else{
    echo "Class not exist<br>";
}

$obj=new MyClass();

if(method_exists($obj,"MyMethod")){
    echo "Method exist<br>";
}else{
    echo "Method not exist<br>";
}

if(property_exists($obj,"myProperty")){
    echo "Property exist<br>";
}else{
    echo "Property not exist<br>";
}

if(is_a($obj,"MyClass")){
    echo "MyClass Object exist<br>";
}else{
    echo "MyClass not exist<br>";
}



class SubClass extends MyClass{

}

$objc=new SubClass();
if(is_subclass_of($objc,"MyClass")){
    echo "Subclass Object exist<br>";
}else{
    echo "Subclass not exist<br>";
}
?>