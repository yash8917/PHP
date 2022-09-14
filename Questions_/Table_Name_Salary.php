<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Format</title>
    <style>
        table{
            width : 500px;
            heigth :500px;
            border: 2px solid black
        }
        td{
            
            border: 2px solid black

        }
        th{
            border : 2.5px solid black;
        }
    </style>
</head>
<body>
    <h1>Salary Table</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Designation</th>
            <th>Salary</th>
            <th>Company</th>
        </tr> 
         <tr style= 'background-color:grey'>
            <td>Rocky</td>
            <td>Manager</td>
            <td>1,00,000</td>
            <td rowspan="6">IBM</td>
        </tr> 
        
        <tr>
            <td>Raj</td>
            <td>Assistant Manager</td>
            <td>50,000</td>
         
        </tr>
        
        <tr style= 'background-color:grey'>
            <td>Kartik</td>
            <td>Analysist</td>
            <td>65,000</td>
           
        </tr>
        
        <tr>
            <td>Akriti</td>
            <td>Worker</td>
            <td>20,000</td>

        </tr>
        
        <tr style= 'background-color:grey'>
            <td>Priyanshu</td>
            <td>Worker</td>
            <td>20,000</td>

        </tr>
        <tr>
            <th colspan="2">Total Ammount</th>
            <td>2,55,000</td>
        </tr>
    </table>
</body>
</html>