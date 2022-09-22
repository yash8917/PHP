<?php
$val_1=$_POST["n1"];
$val_2=$_POST["n2"];
// $task=$_POST["task"];
if(isset($_POST['add'])){
 echo $val_1 + $val_2;
}
if(isset($_POST['sub'])){
 echo $val_1 -$val_2;
}
if(isset($_POST['mul'])){
 echo $val_1 * $val_2;
}
if(isset($_POST['div'])){
 echo $val_1 / $val_2;
}
if(isset($_POST['mod'])){
 echo $val_1 % $val_2;
}

