<?php 

class MyClass{
    public $var1=0, $var2="Monoget", $var3="23";

    function __construct(){

    }

    function name(){
        echo "Class Name: ".get_class($this)."<br>";
    }
}

class ChildClass extends MyClass{
    function name(){
        echo "Parent Class Name: ".get_parent_class($this)."<br>";
    }
}

$obj=new ChildClass();
$obj->name();

$objP=new MyClass();


$class_method=get_class_methods("MyClass");

$variable=get_class_vars("MyClass");
echo "<pre>";
print_r($variable);
echo "</pre>";


$object_vars=get_object_vars($objP);
echo "<pre>";
print_r($object_vars);
echo "</pre>";


class Abc{
    static public function test(){
        var_dump(get_called_class());
    }
}

class Xyz extends Abc{

}

Abc::test();
Xyz::test();

echo "<pre>";
print_r(get_declared_classes());
echo "</pre>";

echo "<pre>";
print_r(get_declared_interfaces());
echo "</pre>";


echo "<pre>";
print_r(get_declared_traits());
echo "</pre>";


class_alias("MyClass", "MC");

$mc=new MC();
?>