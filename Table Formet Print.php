<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th ,td{
            padding:3px;
            spacing:0px;
        }

    </style>
</head>
<body>



<?php

echo "<table style=' border-collapse: collapse'>";

for($i=1 ; $i<=10 ; $i++){
    echo "<tr>";
    for($j=1 ; $j<=10 ;$j++){
        echo "<td style='border: 2px solid black'> " ,$i." * ".$j." = ".$i*$j,"</td>";
    }
    echo "</tr><br>";
}
"echo </table>"
 ?>
</body>
</html>