  <?php
  header('Access-Control-Allow-Origin:*');
  header('Access-Control-Allow-Credentials:true');
  header('Access-Control-Allow-Methods:POST');
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

      $headers =getallheaders();
      $authcode =trim($headers['Authorization']);
      $refresh_token =substr($authcode,7);
      $key ="mykey12";

    try{
        $decode_refresh_token =JWT::decode($refresh_token,new Key($key, 'HS256'));
        $refresh_token_array =get_object_vars( $decode_refresh_token );
        $user_id_refresh =$refresh_token_array['id'];

        $sql= "SELECT * FROM generate_token WHERE refresh_token='$refresh_token'";
        $result =mysqli_query($conn, $sql);
        $num_row =mysqli_num_rows($result);
        $row =mysqli_fetch_assoc($result);
        if($num_row<1){
          echo json_encode(array('message'=>'your refresh token is not found in database','status'=>false));
          exit();
        }
        // $id = $row["id"];

        $access_token =$row["access_token"];
        $decode_access_token =JWT::decode($access_token,new Key($key, 'HS256'));
        $access_token_array =get_object_vars( $decode_access_token );
        $user_id_access =$access_token_array['id'];



      if($num_row==1){
            if($row['refresh_token']==$refresh_token)
            {
              // $refresh_token_time =$refresh_token['expire'];
              // $time =time();
              if( $user_id_refresh == $user_id_access){ 
                // if($refresh_token['expire'] < time()){

                      $payload= array("id"=>$user_id_access, "expire"=>time()+1200);
                      $payload_refresh =array("id"=>$user_id_access, "expire"=>time()+12000);

                    if($payload){

                        $jwt_token =JWT::encode($payload,$key,'HS256');
                        $jwt_refresh_token =JWT::encode($payload_refresh,$key,'HS256');
                        // $myarray['name'] = $row['name'];
                        // $myarray['email'] = $row['email'];
                        $myarray['jwt_access_token'] = $jwt_token;
                        $myarray['jwt_refresh_token'] =$jwt_refresh_token;

                        $date = date('Y-m-d H:i:s');
                        $sql_insert_token ="UPDATE generate_token SET access_token ='$jwt_token', refresh_token ='$jwt_refresh_token',update_time='$date' Where refresh_token='$refresh_token'";
                        if(mysqli_query($conn, $sql_insert_token)){
                          echo json_encode(array('message'=>'Your new generated token is','Data'=>$myarray));
                        }
                      } 
                      
                  }
                  else{
                    echo json_encode(array('message'=>'you are not registered','status'=>false));
                  }  
              }
            // }
            else{
              echo json_encode(array('message'=>'you refresh token does not match','status'=>false));
            }   
      }
      else{
        echo json_encode(array('message'=>'your token is not present in database','status'=>false));
      }
  }
  catch (Exception $e){
    $message =['msg'=>'Token is invalid ','status'=>false,'error_msg'=>$e->getMessage()];
    echo json_encode($message);
    exit();
  }
?>

      