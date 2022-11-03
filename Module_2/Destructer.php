<?php

class Destructer
{
    public function __construct(){
        echo "this is the constructer function". " <br>";
    }

    public function hello(){
        echo "hello php"."<br>";
    }

    //destructer calls automatic when all working is complete of the php file
    public function __destruct()
    {
        echo "this is the destruct function"."<br>";
    }

}
$obj_one= new Destructer();
$obj_one->hello();
$obj_one->__destruct(); // here we call the destruct function forcefully
