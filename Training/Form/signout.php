<?php
session_start();

unset($_SESSION['email']);     // unsetting the email value from session which is set during login in verify_user.php    
unset($_SESSION['login']);      // used to not redirect direct to login page from home page in home_page.php
unset($_SESSION['user_role']);   // Used to store user role in session in verify_user.php

// setcookie ("email",$email,time() -360000, "/");
// setcookie ("password",$password,time() -360000, "/");
session_destroy();
header("location:index.php");
?>
