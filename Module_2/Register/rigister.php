<?php
$name=$_POST['username'];
$password=$_POST['password'];

$connection=mysqli_connect("localhost","root","","form");
//procedural

if(!$connection){
    echo "Connection is not established";
    exit(); // also handle the message but can't handle the multiple
    // or we can write - die(); if we write the die it will also handle the message die("Unable to established").error();
    // error give the reason of why established the connection
}
$insert_query="INSERT INTO registration(username,password)VALUES('$name','$password')";
if(mysqli_query($connection ,$insert_query)){
    echo "Registration  is Established";
}


// header("refresh: 5 , url=secm.html")
// header("location:secm.html")