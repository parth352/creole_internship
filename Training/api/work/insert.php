<?php
header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-type,Access-Control-Allow-Methods');

include 'connection.php';
// $data =json_decode(file_get_contents("php://input"), true);
$name=mysqli_real_escape_string($conn,$_POST['name']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$address=mysqli_real_escape_string($conn,$_POST['password']);

// $name = $data['sname'];
// $email = $data['semail'];
// $address =$data['saddress'];



$sql= "INSERT INTO basic_info(name,email,address) VALUES('$name','$email','$address')";
//    $result =mysqli_query($conn, $sql);

   if(mysqli_query($conn, $sql)){
    //    $output =mysqli_fetch_all($result, MYSQLI_ASSOC);
    //    echo json_encode($output);
    echo json_encode(array('message'=>'data inserted sucessfully','status'=>true));
 
   }else
   {
       echo json_encode(array('message'=>'not found'));
   }

?>