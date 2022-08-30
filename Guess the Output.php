<?php
echo "Pridict the Output.!!<br>";
//  to create the new line use br tag
$val =28;
echo var_dump($val);


$res =(String)$val;
echo var_dump($res);


$res =(float)$val;
echo var_dump($res);


$res =(bool)$val;
echo var_dump($res);


$res =(array)$val;
echo "<br>";
echo var_dump($res);    //Output -> array(1) { [0]=> int(28) }


$res = (object)$val;
echo "<br>";
echo var_dump($res);    //object(stdClass)#1 (1) { ["scalar"]=> int(28) }


echo "<br>------------------------------------------------";
echo "<br>";
$res ="2";
echo var_dump($res + $val);


$res = "d";
echo "<br>";
// echo var_dump($val + $res);     //Warning: A non-numeric value encountered 


$res ="d4";
// echo var_dump($val +$res);  //A non-numeric value encountered


echo "<br> this is the float example<br>";
$v =2.05;
$r=(string)$v;
echo var_dump($r);


$r=(array)$v;
echo var_dump($r);  //array(1) { [0]=> float(2.05) }

// --------------------------------------------------------


echo "<br> This is the String Example.<br>";


$s="Hello";
$st=(int)$s;
echo var_dump($st);


echo "<br>";
$s="0.00";
$st=(bool)$s;
echo var_dump($st); // true


$s="0";
$st = (bool)$s;
echo var_dump($st);

// ------------------------------------------


$va=NULL;
$re=(int)$va;
echo  var_dump($re);    //int(0)


$re =(float)$va;
echo var_dump($re);     //float(0)


$re=(array)$va;
echo var_dump($re);     //array(0) { }
?>