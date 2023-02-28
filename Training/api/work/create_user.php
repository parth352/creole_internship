<?php
    header('Content-type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-type,Access-Control-Allow-Methods');

    include 'connection.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password =$_POST['password'];

    // $sql_filter = "SELECT * FROM register_user WHERE email= '$email'";
    $sql= "INSERT INTO register_user(name,email,password) VALUES('$name','$email','$password')";
    
       if(mysqli_query($conn, $sql)){
        //    $output =mysqli_fetch_all($result, MYSQLI_ASSOC);
        //    echo json_encode($output);
        // echo json_encode(array('message'=>'data inserted sucessfully','status'=>true));
            echo "registered sucessfully";
       }
       else
            {
                echo 'something went wrong please try agin later';
            }

?>