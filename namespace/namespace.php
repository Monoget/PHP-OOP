<?php 
    require "first.php";
    require "second.php";

    use \first\v1\comand as first, \second\v1\cmd as second;

    $testobj=new first\Test();
    $testobj2=new second\Test();
?>