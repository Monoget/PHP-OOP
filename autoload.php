<?php
    function __autoload($class){
        require "autoloadClasses/".$class.".php";
    }

    $test = new Second();
?>