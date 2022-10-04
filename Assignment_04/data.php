<?php
$str_1=$_POST["str_md5"];
echo md5($str_1);
echo "<br>";
$str_2=$_POST["str_numfor"];
echo number_format($str_2,"3",":","-");
echo "<br>";
$str_3=$_POST["str_ord"];
echo ord($str_3);
echo "<br>";
$str_4 =$_POST["str_rtrim"];
echo rtrim($str_4,"y .")


?>