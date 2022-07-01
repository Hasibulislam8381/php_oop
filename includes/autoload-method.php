<?php
spl_autoload_register(function ($class)
{
    require "classes/" . $class . ".php";
});

    $obj1 = new first();
    $obj1 = new f4();
    $obj2 = new second();


?>