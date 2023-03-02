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
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

// $data =json_decode(file_get_contents("php://input"), true);
// if(isset($data['email'])  && isset($data['password'])){

$email = $_POST['email'];
$password =$_POST['password'];

$sql= "SELECT * FROM register_user WHERE email='$email'";
 $result =mysqli_query($conn, $sql);
 $num_row =mysqli_num_rows($result);
 $row =mysqli_fetch_assoc($result);
 $id = $row["id"];
 $name =$row["name"];
 $email =$row["email"];
 $pass =$row["password"];

   if($num_row>=1){
     
      $key ="mykey12";
      $payload= array("id"=>$row['id'], "expire"=>time()+120);
      $payload_refresh =array("id"=>$row['id'], "expire"=>time()+12000);
    
      if($password==$row['password']){
        
        $jwt_token =JWT::encode($payload,$key,'HS256');
        $jwt_refresh_token =JWT::encode($payload_refresh,$key,'HS256');
        $myarray['name'] = $row['name'];
        $myarray['email'] = $row['email'];
        $myarray['jwt_token'] = $jwt_token;
        
        // $sql_insert_token ="UPDATE register_user SET token ='$jwt_token' Where email='$email' AND password='$password'";
        // mysqli_query($conn, $sql_insert_token);

        $sql_insert_acess_refresh_token= "INSERT INTO generate_token(user_id,name,email,pass,access_token,refresh_token) VALUES('$id','$name','$email','$pass','$jwt_token','$jwt_refresh_token')";
        mysqli_query($conn, $sql_insert_acess_refresh_token);

        echo json_encode(array('message'=>'login sucessfully','status'=>true ,'Data'=>$myarray));
      }
        
      else{
        echo json_encode(array('message'=>'you are not registered','status'=>false));
           }   
    }
//  }
?>

      