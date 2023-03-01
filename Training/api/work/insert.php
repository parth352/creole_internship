<?php
header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-type,Access-Control-Allow-Methods');

// include 'connection.php';
// $data =json_decode(file_get_contents("php://input"), true);

include 'validate_token.php';

$name = $_POST['name'];
$email = $_POST['email'];
$address =$_POST['address'];
$phone =$_POST['phone'];
$filename  =$_FILES['image']["name"];



$sql= "INSERT INTO basic_info(name,email,address,phone_number,image) VALUES('$name','$email','$address','$phone','$filename')";
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