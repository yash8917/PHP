<!--write a php script to showthe working of  calculator having addi , sub , divi, modulo ,mul-->

<?php

function reverse($num){
    $res=0;
    while($num >1){
        $res = $res  * 10 +$num % 10;
        $num=(int)$num/10;
    }
    return $res;
}
function square($num){
    return ($num**2);
}
function  adamNo($num)
{
    $a = square($num);
    $b = square(reverse($num));

    if ($a == reverse($b)){
       return true;
    }else{
        return false;
    }
}
$r=adamNo(14);
echo $r;
