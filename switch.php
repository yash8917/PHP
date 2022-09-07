<?php

$val1=3;
$val2=5;
$val3=1;
switch ($val1 > $val2 && $val1>$val3){
    case 1: echo "$val1 is greater";break;
    case 0: switch ($val2 > $val3){
        case 1: echo "$val2 is greater";break;
        case 0: echo "$val3 is greater";break;
    }
}
?>