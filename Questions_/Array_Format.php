<?php
$str ="Our teacher is brilliant";
//echo var_dump((array)ord($str));
//print_r($str);
//$str_ar=(array)$str;

foreach (count_chars($str,1) as $i=>$val){
//    echo "there $val of " ,ord($i),"<br>";
//    var_dump((array)$val,ord($i));
    $ar=["$i"=>$val];
//   echo var_dump($ar);
print_r($ar);




}
?>