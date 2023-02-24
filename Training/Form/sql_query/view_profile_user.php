<?php
//   session_start(); session is already started in nav_bar_signout
  $email= $_SESSION['email'];

  include 'connection.php';
  $sql_email= "SELECT * FROM user_list WHERE email ='$email' ";
  $result = mysqli_query($conn, $sql_email);
  if($row=mysqli_fetch_assoc($result))
  {
    $name      =$row["name"];
    $email     =$row["email"];
    $mo_number =$row["mo_number"];
    $image     =$row["image"];
    $address   =$row["address"];
    $image     =$row["image"];
  }
?>