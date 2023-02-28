<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Credentials:true');
header('Access-Control-Allow-Methods:PUT');
header('Access-Control-Allow-Headers:*');
header('Content-Type:application/json');

include 'connection.php';
include 'vendor\firebase\php-jwt\src\BeforeValidException.php';
include 'vendor\firebase\php-jwt\src\CachedKeySet.php';
include 'vendor\firebase\php-jwt\src\JWK.php';
include 'vendor\firebase\php-jwt\src\JWT.php';
include 'vendor\firebase\php-jwt\src\Key.php';
include 'vendor\firebase\php-jwt\src\SignatureInvalidException.php';

$data =json_decode(file_get_contents("php://input"), true);
if(isset($data['email'])  && isset($data['password'])){

$email = $data['email'];
$password =$data['password'];

$sql= "SELECT * FROM register_user WHERE email='$email' AND password='$password'";
 $result =mysqli_query($conn, $sql);
 $num_row =mysqli_num_rows($result);
 $row =mysqli_fetch_assoc($result);

   if($num_row>=1){

    $verify_pass =password_verify($password, $row['password']);
    $key ="mykey12";
    $payload= array("id"=>$row['id'], "name"=>$row['name'], "email"=>$row['email']);

    if($verify_pass){
      $jwt_token =JWT::encode($payload,$key);

      $array['name'] = $row['name'];
      $array['email'] = $row['email'];
      $array['jwt_token'] = $jwt_token;
    }
    echo json_encode(array('message'=>'login sucessfully','status'=>true));
 
   }else
   {
       echo json_encode(array('message'=>'You are not registered','status'=>false));
   }
 }
?>