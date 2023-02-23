<?php
//   session_start(); session is already started in nav_bar_signout
  $email= $_SESSION['email'];

  include 'connection.php';
  $sql_email= "SELECT * FROM login_data WHERE email ='$email' ";
  $result = mysqli_query($conn, $sql_email);
  if($row=mysqli_fetch_assoc($result))
  {
    $name =$row["name"];
    $email =$row["email"];
  }
?>