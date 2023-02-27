<?php
     if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mo_number']) && !empty($_POST['address'])){

        session_start();
        $login_session_email =$_SESSION['email'];
        include 'connection.php';

        $sql_find_id ="SELECT * FROM user_list WHERE email ='$login_session_email' ";
        $res =mysqli_query($conn, $sql_find_id);
        $row=mysqli_fetch_assoc($res);
            $id = $row['id'];                                       // getting id for storing and updating image
        

        $name      =$_POST["name"];
        $email     =$_POST["email"];
        $mo_number =$_POST["mo_number"];
        $address   =$_POST["address"];
        // $image     =$_POST["uploadfile"];
        $filename  =$_FILES['uploadfile']["name"];
        $tempname  =$_FILES['uploadfile']["tmp_name"];
        $folder    ="../image/".$id."/".$filename;
        
        $sql_email_update ="UPDATE login_data SET name ='$name', email ='$email' WHERE email ='$login_session_email' ";
        $sql_update_user_profile="UPDATE user_list SET name ='$name', email ='$email', mo_number ='$mo_number', address ='$address', image ='$filename' WHERE email ='$login_session_email' ";
        mysqli_query($conn, $sql_email_update);
        $result = mysqli_query($conn, $sql_update_user_profile);
                    
        if ($result) {    
            move_uploaded_file($tempname, $folder);
            unset($_SESSION['email']);   // unsetting the old email value from session  
            $_SESSION['email'] = $_POST["email"]; // setting new session after updating email
            $resp['status'] = true;
            echo json_encode($resp);  
        } 
        else {
            $resp['msg'] = "Your data is not updated please try again";
            $resp['status'] = false;
            echo json_encode($resp);
        }
    }       
        

?>
              
            
