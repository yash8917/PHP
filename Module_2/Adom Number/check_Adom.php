<?php
function reverse($num){
    $res=0;
    while($num >0){
        $res = $res *10 +$num %10;
        $num=$num/10;
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
        echo " True";
    }else{
        echo "false";
    }
}
adamNo(12);