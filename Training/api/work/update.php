<?php
header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-type,Access-Control-Allow-Methods');


$data =json_decode(file_get_contents("php://input"), true);

$id =$data['sid'];
$name = $data['sname'];
$email = $data['semail'];
$address =$data['saddress'];

include 'connection.php';

$sql= "UPDATE basic_info SET name= '$name', email ='$email' , address= '$address' WHERE id = '$id'";
//    $result =mysqli_query($conn, $sql);

   if(mysqli_query($conn, $sql)){
    //    $output =mysqli_fetch_all($result, MYSQLI_ASSOC);
    //    echo json_encode($output);
    echo json_encode(array('message'=>'data insert sucessfully','status'=>true));
 
   }else
   {
       echo json_encode(array('message'=>'not found','status'=>false));
   }

?>