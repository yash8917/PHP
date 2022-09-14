<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <style>
        body{
            align :'centre';
            background-color:'grey'
        }
    </style> -->
</head>

<body >
   <table width="700px" height = 700px border="2px" cellspacing="0px" >
    <?php
    $value = 0;
    for($row =0 ; $row < 8 ; $row++){
        echo "<tr>";
        $value=$row;
       
        for($col = 0 ; $col < 8 ; $col++){
            if($value %2 ==0){
                echo "<td  heigth= '40px', witdh='20px' bgcolor=black> ";
                $value++;
            }else{
                echo "<td  heigth= '40px', witdh='20px' bgcolor=white> ";
                $value++;
            }
        }
        
    }
    ?>
</body>
</html>