<?php
    header('Content-type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-type,Access-Control-Allow-Methods');

    include 'connection.php';

    if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["password"])){
        $response = array(
            "type" => "error",
            "status" => false,
            "message" => "please fill all the field."
        );
        echo json_encode($response);
        exit();
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password =$_POST['password'];

    $sql_filter= "SELECT * FROM register_user WHERE email='$email'";           // finding duplicate email
      $result =mysqli_query($conn, $sql_filter);
      $num_row =mysqli_num_rows($result);
    //   $row =mysqli_fetch_assoc($result);
    if($num_row>=1){
        $response = array(
            "type" => "error",
            "status" => false,
            "message" => "you are already registered"
        );
        echo json_encode($response);
        exit();
    }


    $name = $_POST['name'];
    $email = $_POST['email'];
    $password =$_POST['password'];

    // $sql_filter = "SELECT * FROM register_user WHERE email= '$email'";
    $sql= "INSERT INTO register_user(name,email,password) VALUES('$name','$email','$password')";
    
       if(mysqli_query($conn, $sql)){
        $response = array(
            "type" => "success",
            "status" => true,
            "message" => "registered sucessfully."
        );
        echo json_encode($response);
        exit();
       }
       else
            {
                $response = array(
                    "type" => "false",
                    "status" => false,
                    "message" => "not registered."
                );
                echo json_encode($response);
                exit();
            }

?>