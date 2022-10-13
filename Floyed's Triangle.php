<?php
//$num=0;
echo "<table style=' border-collapse: collapse' >";

$val=1;
for ($i=1;$i<10;$i++){
    echo "<tr>";
    for($k=1; $k <=$i ; $k++){

        echo " <td style='border: 2px solid black'><b>"."$val</b></td>";
        $val++;
    }echo '</tr>';
}echo '</table>'

?>