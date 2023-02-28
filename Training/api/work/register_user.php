<?php
    header('Content-type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-type,Access-Control-Allow-Methods');

    include 'connection.php';
    $name = $_POST['name'];
    $email = $_POST['email'];

   
        //    $output =mysqli_fetch_all($result, MYSQLI_ASSOC);
        //    echo json_encode($output);
        // echo json_encode(array('message'=>'data inserted sucessfully','status'=>true));

    $sql_find_id ="SELECT * FROM register_user WHERE email ='$email' AND name= '$name'";
    $result= mysqli_query($conn, $sql_find_id);
    if($row =mysqli_fetch_assoc($result)){
        $id = $row['id'];   
    }   
    else
    {
        echo 'user not registered';
        exit();
    }

    // Include the file
    require 'generate_token.php';

    // Define a key
    const KEY = 'thisismykey';

    // Generate token
    $token = Token::Sign(['id' => "$id"], KEY, 60*5);   // expiry time is for 5 minute

    if(isset($token)){
        $sql_insert_token= "UPDATE register_user SET token='$token' WHERE id ='$id'";
        if(mysqli_query($conn, $sql_insert_token)){
        echo 'Token generated: ' . $token;
        }
    }

    // Vefity token
    // $payload = Token::Verify($token, KEY);
    // print_r($payload);

?>