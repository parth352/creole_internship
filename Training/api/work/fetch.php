<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Credentials:true');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:*');
header('Content-Type:application/json');

// include 'connection.php';
include 'validate_token.php';

$sql= "SELECT * FROM basic_info";
    $result =mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){
        $output =mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo json_encode($output);
    }else
    {
        echo json_encode(array('message'=>'not found'));
    }

?>