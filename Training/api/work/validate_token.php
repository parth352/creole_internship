<?php

    header('Access-Control-Allow-Origin:*');
    header('Access-Control-Allow-Credentials:true');
    header('Access-Control-Allow-Methods:POST');
    header('Access-Control-Allow-Headers:*');
    header('Content-Type:application/json');

    include 'connection.php';
    // include 'vendor\firebase\php-jwt\src\BeforeValidException.php';
    // include 'vendor\firebase\php-jwt\src\CachedKeySet.php';
    // include 'vendor\firebase\php-jwt\src\JWK.php';
    // include 'vendor\firebase\php-jwt\src\JWT.php';
    // include 'vendor\firebase\php-jwt\src\Key.php';
    // include 'vendor\firebase\php-jwt\src\SignatureInvalidException.php';
    require __DIR__ . '/vendor/autoload.php';
    use Firebase\JWT\JWT;
    use Firebase\JWT\Key;

    $headers =getallheaders();
    $authcode =trim($headers['Authorization']);
    $token =substr($authcode,7);


    // $name =$_POST['name'];
    // $email =$_POST['email'];

    $key ="mykey12";

    try{
        $decode_token =JWT::decode($token,new Key($key, 'HS256'));
        $access_token =get_object_vars( $decode_token );
        $user_id =$access_token['id'];

        $sql_filter_token ="SELECT * FROM generate_token WHERE access_token='$token'";
        $result =mysqli_query($conn, $sql_filter_token);
        $num_row =mysqli_num_rows($result);
        $row =mysqli_fetch_assoc($result);


        if($num_row>=1){
            if($row['access_token']==$token){

                if($access_token['expire'] < time()){
                    $message =" Your token is expired Acess Denied";
                    echo json_encode($message);
                    // include 'token_regenrate.php';        // this code is for regeneration of code   
                    exit();
                }
                else{
                    // $message =['msg'=>'Access Granted','status'=>200,'Data'=>$decode_token];
                    $message =['msg'=>'Access Granted','status'=>true];
                    echo json_encode($message);
                }
            }
            else{
                $message =['msg'=>'Token does not match','status'=>false];
                echo json_encode($message);
                exit();
            } 
        }
        else{
            $message =['msg'=>'Token not found in database','status'=>false];
            echo json_encode($message);
            exit();
        } 
    }     
        // else{
        //     $message =['msg'=>'Access Granted','status'=>200,'Data'=>$decode_token];
        //     echo json_encode($message);
        // }
    // }
    catch (Exception $e){
        $message =['msg'=>'Token does not match ','status'=>false,'error_msg'=>$e->getMessage()];
        echo json_encode($message);
        exit();
    }

?>