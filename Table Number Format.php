<?php
    echo  "<table style=' border: 2px dashed darkred'> ";
    $num = 1;
    for($val = 1; $val <=10 ; $val++) {
        echo "<tr>";
        for ($val_1 = 1 ; $val_1 <= 10 ; $val_1++){
            echo "<td style=' border: 2px solid black   '> " ,$num;'</td>';
            $num++;
        }
        echo "</tr>";
    }
    echo "</table>";

    ?>