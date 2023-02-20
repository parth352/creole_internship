<?php
    if(!empty($_POST['email']) && !empty($_POST['password'])){

    include 'connection.php';
    session_start();
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $remember_me =$_POST['remember_me'];
    
    if(!empty($remember_me)){
        setcookie ("email",$email,time()+ 360000, "/");
        setcookie ("password",$_POST['password'],time()+ 360000, "/");
    }

    $sql = "SELECT * FROM login_data where pass = '$password'  AND email = '$email'";
    $response = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($response);

    if($row==1){
    $resp['status'] = true;
        echo json_encode($resp);
        exit;
    }
    else{
        $resp['msg'] = "Invalid email or password please register if not";
        $resp['status'] = false;
        echo json_encode($resp);
        exit;
    }
    }
    else{
        $resp['msg'] = "please fill all the fields";
        $resp['status'] = false;
        echo json_encode($resp);
    }



    // if(!empty($_POST['email']) && !empty($_POST['password'])){

    //     include 'connection.php';
    //     session_start();
    //     $email = $_POST['email'];
    //     $password = md5($_POST['password']);
    //     $remember_me =$_POST['remember_me'];
        
    //     if($remember_me != 'none'){
    //         setcookie ("email",$email,time()+ 360000, "/");
    //         setcookie ("password",$_POST['password'],time()+ 360000, "/");
    //     }
    
    //     $sql = "SELECT * FROM login_data where pass = '$password'  AND email = '$email'";
    //     $response = mysqli_query($conn, $sql);
    //     $row = mysqli_num_rows($response);
    
    //     if ($row === 1) {
    //         $s=1;
    //         echo $s;
    //      } else {
    //          echo "Login failed. Invalid username or password.";
    //      }
    //     }
    //     else{
    //         $resp['msg'] = "please fill all the fields";
    //         $resp['status'] = false;
    //         echo json_encode($resp);
    //     }
?>