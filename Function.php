<?php
declare(strict_types=1); // for using the type safety in php if we use that the we have to
//specify the data type in php [ inside the method parameter  ]
function add_Two(int $one ,int $two){
    return $one+$two;
}
echo add_Two(5,4);
?>