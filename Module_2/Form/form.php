<?php
if(isset($_POST['save'])){

    $name=$_POST['name'];
    $email=$_POST['mail'];
    $password=$_POST['password'];
$connection=mysqli_connect('localhost',"root","","form");

if($connection == false){
    echo "Connection is not Established";
    exit();
}

    $insert_query="INSERT INTO formtable(UName,Email,Password) VALUES ('$name','$email','$password')";

    if(mysqli_query($connection , $insert_query)){
    echo "You are Registered.";
    header("refresh: 5 , url=form.html");
    }
}
if(isset($_POST['display'])){
    $connection=mysqli_connect('localhost',"root","","form");

    if($connection == false){
        echo "Connection is not Established";
        exit();
    }
    $sql="SELECT Id,UName,Email,Password FROM formtable";
    $result=mysqli_query($connection , $sql);
    if(mysqli_num_rows($result)>0)
    {
        echo "<table border='1'>
	 <tr>
	 <th>Id</th>
	 <th>Username</th>
	 <th>Email</th>
	 <th>Password</th>
	 </tr>";

	 while($row=mysqli_fetch_array($result))
     {
//         echo "<tr><form action=secm.php method=post>";
         echo "<td><input type=text name=id readonly value='".$row['Id']."'></td> ";
         echo "<td><input type=text name=username value='".$row['UName']."'></td> ";
         echo "<td><input type=text name=email value='".$row['Email']."'></td> ";
         echo "<td><input type=text name=password value='".$row['Password']."'></td> ";

         echo "</form></tr>";
     }
}
    else
    {
        echo "No rows found";
    }
}


