<?php
$ar = [1  ,2,3,4,5];
$ar_2 =[6,7,8,9,10,11];
echo var_dump($ar + $ar_2);

echo "<br>";

$ar=[1,2,3];
$ar_2 =['4' => 98];
echo var_dump($ar + $ar_2);

echo "<br>";

$ar_2=["a" =>232];
echo var_dump($ar +$ar_2);

echo "<br>";
$ar_2=[11,22,33,"5" =>"hi" , "gla"];
echo var_dump($ar + $ar_2);


echo "<br>";

$ar_2 =[1,2,3];
echo var_dump($ar == $ar_2);    //it check the index  , value 

echo "<br>";

$ar_2=["Hello" ,20, 30];
echo var_dump($ar === $ar_2);   //it check the index  , value and datatype also


echo "<br>";

/* 

array(6) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) [5]=> int(11) }
array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [4]=> int(5) }
array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) ["a"]=> int(232) }
array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [5]=> string(2) "hi" [6]=> string(3) "gla" }
bool(true)
bool(false)

*/
?>