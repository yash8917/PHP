<?php
//difine the role of php_self
$handler = fopen("sectionJ","w");
if(fwrite($handler , "Hello Section J \nPhp Lab room no 405")){
    echo "your content is written ";
}
fclose($handler);


$handler1=fopen("sectionJ","a");
$size= filesize("sectionJ",);

echo fread("$handler1");

copy("sectionJ","welcome");
file_exists("sectionJ");
rename("sectionJ","MySection");

unlink("sectionJ");




//---------- get the file content char by char-----------
//
//while(!fgetc($handler1)){
//
//echo fgets($handler1);
//echo "<br>";
//}
//


//while(!feof($handler1)){
//    $val = fgetc($handler1);
//    if($val == "\n") $val = '<br>';
//      echo $val;
//}
//
