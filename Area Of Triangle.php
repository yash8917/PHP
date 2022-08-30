<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Areaa ofTriangle</title>
</head>
<body>
    <?php
    $side1=3.5;
    $side2=4;
    $side3=2;
    $perimeter=($side1+$side2+$side3)/2;
    $area =sqrt($perimeter*($perimeter-$side1)*($perimeter-$side2)*($perimeter-$side3));
    echo "The Area of the given triangle is: " ,$area; 
    ?>
</body>
</html>