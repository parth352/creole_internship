<?php
    if(!empty($_POST['email']) && !empty($_POST['password'])){

        include 'connection.php';
        session_start();

        $email    =$_POST['email'];
        $password =md5($_POST['password']);

        
        $_SESSION['email']=$email;

        if(!empty($_POST['remember_me'])){
            setcookie ("email",$email,time()+ 86400, "/");
            setcookie ("password",$_POST['password'],time()+ 86400, "/");
        }    
        $sql = "SELECT * FROM login_data where pass = '$password'  AND email = '$email'";
        $response = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($response);

        while($row1=mysqli_fetch_assoc($response))       // this is used to store session if user is admin
        {   
            if($row1["user_role"] == "admin"){

                $_SESSION['user_role']= "You are Admin";
            }
        }

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