<?php
session_start();

unset($_SESSION['email']);
unset($_SESSION['password']);
setcookie ("email",$email,time() -360000, "/");
setcookie ("password",$password,time() -360000, "/");

session_destroy();
header("location:index.php");
?>