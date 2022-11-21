<?php
$cookie_name =$_COOKIE['user'];
$cookie_value = $_COOKIE['Anvesh'];
// set the value
setcookie($cookie_name , $cookie_value , time()+ 3600 ,"/","amazon.com", false);
?>
<html>
<body>
<?php
if(!$_COOKIE['user']){
    echo " Cookie is not set";
}else {
    echo $_COOKIE[$cookie_value];
}

// Delete the cookie

setcookie($cookie_name,"",time() - 3600 ,"/");

?>

</body>
</html>
