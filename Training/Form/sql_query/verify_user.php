<?php
    if(!empty($_POST['email']) && !empty($_POST['password'])){

        include 'connection.php';
        session_start();
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        // $remember_me =$_POST['remember_me'];
        $_SESSION['email']=$email;

        if(!empty($_POST['remember_me'])){
            setcookie ("email",$email,time()+ 360000, "/");
            setcookie ("password",$_POST['password'],time()+ 360000, "/");
        }    
        $sql = "SELECT * FROM login_data where pass = '$password'  AND email = '$email'";
        $response = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($response);

        if($row===1){
        // $resp['status'] = true;
        //     echo json_encode($resp);
            echo 1;  
        }
        else{
            // $resp['msg'] = "Invalid email or password please register if not";
            // $resp['status'] = false;
            // echo json_encode($resp);
           echo 2;
        }       
    }
    else{
        $resp['msg'] = "please fill all the field";
        $resp['status'] = false;
        echo json_encode($resp);
    }       
?>