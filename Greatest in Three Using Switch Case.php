<?php

$n1=2;
$n2=4;
$n3=6;
switch($n1 > $n3){
    case 0:switch ($n3>$n2){
        case 0:echo "Second number $n2 is Greater";
            break;
        case 1:echo "Thrid number $n3 is greater";
    }break;
    case 1:switch ($n1>$n2) {
        case 0:
            echo  "Second number $n2 is greater";
            break;
        case 1:
            echo  "First no $n1 is greater";
    }break;
}