<?php
session_start();
include 'connection.php';
  


$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM login_data where pass = '$password'  AND email = '$email'";
$response = mysqli_query($conn, $sql);
$row = mysqli_num_rows($response);
if($row==1){
   $resp['status'] = true;
    echo json_encode($resp);
    exit;
}
else{
    $resp['msg'] = "Invalid email or password please register if not";
    $resp['status'] = false;
    echo json_encode($resp);
    exit;
    }


    ?>