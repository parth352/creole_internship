<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Credentials:true');
header('Access-Control-Allow-Methods:PUT');
header('Access-Control-Allow-Headers:*');
header('Content-Type:application/json');

include 'connection.php';
$data =json_decode(file_get_contents("php://input"), true);
if(isset($data['id'])  && isset($data['name']) && isset($data['email']) && isset($data['address']) && isset($data['phone_number'])){

$id =$data['id'];
$name = $data['name'];
$email = $data['email'];
$address =$data['address'];
$phone =$data['phone_number'];



$sql= "UPDATE basic_info SET name= '$name', email ='$email' , address= '$address', phone_number ='$phone' WHERE id = '$id'";
//    $result =mysqli_query($conn, $sql);

   if(mysqli_query($conn, $sql)){
    //    $output =mysqli_fetch_all($result, MYSQLI_ASSOC);
    //    echo json_encode($output);
    echo json_encode(array('message'=>'data updated sucessfully','status'=>true));
 
   }else
   {
       echo json_encode(array('message'=>'not found','status'=>false));
   }
 }
?>