<?php
$ar =[1,2,3,4,8,9,10];
$ar2 = [];
$result = range($ar[0] ,max($ar));
array_diff($result , $ar);
echo $ar2 , $ar2;