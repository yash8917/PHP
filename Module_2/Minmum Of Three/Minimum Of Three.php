<?php
$num1=$_POST["n1"];
$num2=$_POST["n2"];
$num3=$_POST["n3"];
$min =($num1<$num2?$num1:$num2);
$min =($min<$num3)?$min : $num3;
echo $min;
?>
