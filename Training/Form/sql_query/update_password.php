<?php
    if(!empty($_POST['reset_password'])){
        include 'connection.php';
        session_start();
        $reset_password =md5($_POST["reset_password"]);
        $email =$_SESSION['email'];                         // retriving email value from sesiosn
            
        $sql_update_password="UPDATE login_data 
                            SET pass = '$reset_password' 
                            WHERE email = '$email'";

        $result = mysqli_query($conn, $sql_update_password);

        if ($result) {
            $resp['status'] = true;
            echo json_encode($resp);
            exit;       
            } 
        else {
            $resp['msg'] = "Your password is not updated try again";
            $resp['status'] = false;
            echo json_encode($resp);
            exit;
        }
        unset($_SESSION['email']); // unsetting the email value from session
        }
    else
    {
        $resp['msg'] = "Please fill password field";
        $resp['status'] = false;
        echo json_encode($resp);
        exit;
    }
?>
              
            
