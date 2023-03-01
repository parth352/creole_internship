<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Credentials:true');
header('Access-Control-Allow-Methods:PUT');
header('Access-Control-Allow-Headers:*');
header('Content-Type:application/json');

// include 'connection.php';
include 'vendor\firebase\php-jwt\src\BeforeValidException.php';
include 'vendor\firebase\php-jwt\src\CachedKeySet.php';
include 'vendor\firebase\php-jwt\src\JWK.php';
include 'vendor\firebase\php-jwt\src\JWT.php';
include 'vendor\firebase\php-jwt\src\Key.php';
include 'vendor\firebase\php-jwt\src\SignatureInvalidException.php';
 use Firebase\JWT\JWT;
 use Firebase\JWT\Key;

$email =$expir['email'];

$sql= "SELECT * FROM register_user WHERE email='$email'";
 $result =mysqli_query($conn, $sql);
 $num_row =mysqli_num_rows($result);
 $row =mysqli_fetch_assoc($result);

   if($num_row>=1){
     
      $key ="mykey12";
      $payload= array("id"=>$row['id'], "name"=>$row['name'], "email"=>$row['email'], "expire"=>time()+120);
    
    if($payload){
        
        $jwt_token =JWT::encode($payload,$key,'HS256');
        // $myarray['name'] = $row['name'];
        // $myarray['email'] = $row['email'];
        $myarray['jwt_token'] = $jwt_token;
        $sql_insert_token ="UPDATE register_user SET token ='$jwt_token' Where email='$email'";
        mysqli_query($conn, $sql_insert_token);
         echo json_encode(array('message'=>'Your new token is','Data'=>$myarray));
      }
        
      else{
        echo json_encode(array('message'=>'you are not registered','status'=>false));
           }   
    }
?>

      