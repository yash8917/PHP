<?php
//$num=0;
echo "<table style=' border-collapse: collapse' >";
for ($i=0;$i<10;$i++){
    echo "<tr>";
    for($k=1; $k <=$i ; $k++){

        echo " <td style='border: 2px solid black'><b>"."$k</b></td>";
    }echo '</tr>';
}echo '</table>'

?>