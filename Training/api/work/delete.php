<?php
// header('Access-Control-Allow-Origin:*');
// header('Access-Control-Allow-Credentials:true');
// header('Access-Control-Allow-Methods:DELETE');
// header('Access-Control-Allow-Headers:*');
// header('Content-Type:application/json');
// include 'connection.php';
include 'validate_token.php';
$data =json_decode(file_get_contents("php://input"), true);
if(isset($data['id'])){

$id =$data['id'];

$sql= "DELETE FROM basic_info WHERE id = '$id'";
//    $result =mysqli_query($conn, $sql);

   if(mysqli_query($conn, $sql)){
    //    $output =mysqli_fetch_all($result, MYSQLI_ASSOC);
    //    echo json_encode($output);
    echo json_encode(array('message'=>'data Deleted sucessfully','status'=>true));
 
   }else
   {
       echo json_encode(array('message'=>'not found','status'=>false));
   }
 }
?>