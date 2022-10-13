<?php
$val =ord("#");
echo $val ;
switch ($val >= 48 && $val <= 57 ) {
    case 1:
        echo "<br>";
        echo "Enter Value is Numeric";
        break;
    case 0:
        switch ($val >= 65 && $val <= 90) {
            case 1:
                echo "<br>";
                echo "giver character is Caps Alphabetic";
                break;
            case 0:
                switch ($val >= 97 && $val <= 122) {
                    case 1:
                        echo "<br>";
                        echo"giver char is small alpha";
                        break;
                    case 0:
                        switch ($val >= 255) {
                            case 1:
                                echo "<br>";
                                echo "<br>out of limit";
                                break;
                        }
                }
        }break;
//    default: echo " char is a Spacial Charater";

}
?>

