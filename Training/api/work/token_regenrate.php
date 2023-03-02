<?php
// //header('Access-Control-Allow-Origin:*');
// //header('Access-Control-Allow-Credentials:true');
// //header('Access-Control-Allow-Methods:PUT');
// //header('Access-Control-Allow-Headers:*');
// //header('Content-Type:application/json');

 
// //include 'vendor\firebase\php-jwt\src\BeforeValidException.php';
// //include 'vendor\firebase\php-jwt\src\CachedKeySet.php';
// //include 'vendor\firebase\php-jwt\src\JWK.php';
// //include 'vendor\firebase\php-jwt\src\JWT.php';
// //include 'vendor\firebase\php-jwt\src\Key.php';
// //include 'vendor\firebase\php-jwt\src\SignatureInvalidException.php';
//  //use Firebase\JWT\JWT;
//  //use Firebase\JWT\Key;

// include 'connection.php';
// $id =$expir['id'];

// $sql= "SELECT * FROM register_user WHERE email='$email'";
//  $result =mysqli_query($conn, $sql);
//  $num_row =mysqli_num_rows($result);
//  $row =mysqli_fetch_assoc($result);

//    if($num_row>=1){
     
//       $key ="mykey12";
//       $payload= array("id"=>$row['id'], "expire"=>time()+120);
    
//     if($payload){
        
//         $jwt_token =JWT::encode($payload,$key,'HS256');
//         // $myarray['name'] = $row['name'];
//         // $myarray['email'] = $row['email'];
//         $myarray['jwt_token'] = $jwt_token;
//         $sql_insert_token ="UPDATE register_user SET token ='$jwt_token' Where email='$email'";
//         mysqli_query($conn, $sql_insert_token);
//          echo json_encode(array('message'=>'Your new token is','Data'=>$myarray));
//       }
        
//       else{
//         echo json_encode(array('message'=>'you are not registered','status'=>false));
//            }   
//     }
?>


<?php
// include 'connection.php';
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

$id =$access_token["id"];       // user id from register_user table

// $sql= "SELECT * FROM generate_token WHERE user_id='$id'";     // already run in validate_token.php
// $result =mysqli_query($conn, $sql);
// $num_row =mysqli_num_rows($result);
// $row =mysqli_fetch_assoc($result);
$refresh_token =$row["refresh_token"];
$key ="mykey12";

  // if($num_row>=1){
        if(!empty($refresh_token))
        {
          $decode_refresh_token =JWT::decode($refresh_token,new Key($key, 'HS256'));
          $refresh_token =get_object_vars( $decode_refresh_token );
          $user_id_refresh_token =$refresh_token['id'];
          // $refresh_token_time =$refresh_token['expire'];
          // $time =time();
           if($user_id_refresh_token == $id){ 
            // if($refresh_token['expire'] < time()){

                  $payload= array("id"=>$id, "expire"=>time()+120);
                  $payload_refresh =array("id"=>$id, "expire"=>time()+1200);

                if($payload){

                    $jwt_token =JWT::encode($payload,$key,'HS256');
                    $jwt_refresh_token =JWT::encode($payload_refresh,$key,'HS256');
                    // $myarray['name'] = $row['name'];
                    // $myarray['email'] = $row['email'];
                    $myarray['jwt_token'] = $jwt_token;
                    $sql_insert_token ="UPDATE generate_token SET access_token ='$jwt_token', refresh_token ='$jwt_refresh_token' Where user_id='$id'";
                    if(mysqli_query($conn, $sql_insert_token)){
                      echo json_encode(array('message'=>'Your new token is','Data'=>$myarray));
                    }
                  } 
                  else{
                    echo json_encode(array('message'=>'you are not registered','status'=>false));
                  }  
              }
           }
        // }
        else{
          echo json_encode(array('message'=>'you refresh token is not set','status'=>false));
        }   
  //  }
  //  else{
  //   echo json_encode(array('message'=>'your token is not generated','status'=>false));
  // }

?>

      