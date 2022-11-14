


<?php


$random=rand(00000000,99999999);
$temp=10;

if(isset($_POST['start'])){
echo $random." <br>";
$forthdigit=str_split($random,'4');
$lastdigit=$forthdigit[1]%10;

echo $forthdigit[0] . "- "."$temp"."  " . "+ ". $lastdigit ;
$temp= $temp +10;
$lastdigit*=2;
header("refresh:3 ,url:task.php");



}
if(isset($_POST['stop'])){
    header("refresh:1 , url:classQ.html");
}
?>
