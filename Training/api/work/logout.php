<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Credentials:true');
header('Access-Control-Allow-Methods:DELETE');
header('Access-Control-Allow-Headers:*');
header('Content-Type:application/json');

// include 'connection.php';
include 'validate_token.php';

$sql= "SELECT * FROM generate_token WHERE access_token ='$token'";
    $result =mysqli_query($conn, $sql);
    $num_row =mysqli_num_rows($result);
    $row =mysqli_fetch_assoc($result);
    $access_token_database = $row['access_token'];
    
    if(mysqli_num_rows($result)==1){

                $sql_logout ="DELETE FROM generate_token WHERE access_token ='$token'";
                if(mysqli_query($conn, $sql_logout)){
                    echo json_encode(array('message'=>'you are sucessfully logout'));
                }
       
    }else
    {
        echo json_encode(array('message'=>'you are not login first login'));
    }

?>