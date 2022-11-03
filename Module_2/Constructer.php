<?php

class constructer{
    public $name ;
    public $age ;

// make a constructer it calls automatic when we make the object of that class
    function __construct($n= "No Name",$a=0){   // if user didn't set any value then this is the default data
        //to make a constructer specify the two underscore and construct keyword
        $this->name =$n;
        $this->age =$a;
    }

    //-- function
    public function show(){
        echo $this->name . " - " .$this->age ."<br>" ;

}
}
$object_one = new constructer("YG",20);
$object_two = new constructer("DK",19);
$object_one->show();
$object_two->show();
//this two lines reduce the constructer
//$object_one ->name = "YG";
//$object_one->show();