<?php

//$handel=fopen("first123.txt" , 'w+') ;
$handel=fopen("first123.txt" , 'r+');
// 8 types of mode  --> x ,x+ ] creating,w ,w+ ] writing , r, r+ ] reading , a ] append , a+ ] edit
echo fwrite($handel , "hello_Gla_University");
echo "<br>";
//echo fread($handel ,7);
echo filesize("first123.txt");

