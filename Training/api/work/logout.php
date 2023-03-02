<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Credentials:true');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:*');
header('Content-Type:application/json');

// include 'connection.php';
include 'validate_token.php';

$sql= "SELECT * FROM generate_token WHERE user_id ='$user_id'";
    $result =mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){
        $sql_logout ="DELETE FROM generate_token WHERE user_id ='$user_id'";
        if(mysqli_query($conn, $sql_logout)){
            echo json_encode(array('message'=>'you are sucessfully logout'));
        }
        // $output =mysqli_fetch_all($result, MYSQLI_ASSOC);
        // echo json_encode($output);
    }else
    {
        echo json_encode(array('message'=>'you are not login first login'));
    }

?>