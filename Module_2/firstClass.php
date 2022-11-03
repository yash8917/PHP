<?php

class firstClass
{
 public $exam="Hello PhP ";
 public $text ="Jet brains";

}
$object = new firstClass;
$object_2 = new firstClass;
var_dump($object);
echo "<br>";
var_dump($object_2);
echo $object->exam = "IntelliJ","<br>";
echo $object->text ="Class Files","<br>";
echo $object->exam, "<br>";
echo $object->text;
