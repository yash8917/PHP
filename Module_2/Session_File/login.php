<?php
$username=$_POST['uname'];
$pwd=$_POST['password'];
session_start();
if(isset($_SESSION['user'])){
    echo "hello"."<h3 align =right style='color:red'> $_SESSION[user]<h3>";
    echo "here  you are scrolling home page";
    echo '<a href =product.php>Click here for navigate to product</a>';
    echo '<br> <a href= logout.php><input type=submit name = logout value logout></a>';
}
else{
    if(($username ==$_POST['uname']) and $pwd == $_POST['pwd']){
        $_SESSION['user']=$username;
        echo "<script>location.href = 'home.php'<script>";
    }else{
        echo "<script>alert('invalid username and password')</script>";
    }
}