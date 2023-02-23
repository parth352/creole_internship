<?php  
        include 'connection.php';

        $name    = $_POST["name"];
        $email    = $_POST["email"];
        $mo_number    = $_POST["mo_number"];
        $address    = $_POST["address"];
        // $image    = $_POST["uploadfile"];
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        
        

        $sql_update_detail="UPDATE user_list 
        SET name = '$name' , email ='$email', mo_number ='$mo_number', address ='$address', image ='$filename'  
        WHERE id = '$email'";
        // $sql_filter_otp="SELECT otp FROM reset_password where otp = '$otp'";
        // $result = mysqli_query($conn, $sql_filter_otp);
        // $total_otp = mysqli_num_rows($result);

        // if ($total_otp === 1) {
        //     $resp['status'] = true;
        //     echo json_encode($resp);  
        //     } 
        // else {
        //     $resp['msg'] = "Your otp is incorrect";
        //     $resp['status'] = false;
        //     echo json_encode($resp);
        // }
        // $sql_rem_otp ="DELETE FROM reset_password WHERE otp =$otp";     //  this is used to remove otp once used from database
        // mysqli_query($conn, $sql_rem_otp);

?>
              
            
