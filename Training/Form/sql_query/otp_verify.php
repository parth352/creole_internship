<?php
    if(!empty($_POST['otp'])){
        
        include 'connection.php';
        $otp    = $_POST["otp"];
        $sql_filter_otp="SELECT otp FROM reset_password where otp = '$otp'";
        $result = mysqli_query($conn, $sql_filter_otp);
        $total_otp = mysqli_num_rows($result);

        if ($total_otp === 1) {
            $resp['status'] = true;
            echo json_encode($resp);  
            } 
        else {
            $resp['msg'] = "Your otp is incorrect";
            $resp['status'] = false;
            echo json_encode($resp);
        }
        $sql_rem_otp ="DELETE FROM reset_password WHERE otp =$otp";     //  this is used to remove otp once used from database
        mysqli_query($conn, $sql_rem_otp);
    }
    else{
        $resp['msg'] = "Please enter otp";
        $resp['status'] = false;
        echo json_encode($resp);
    }
?>
              
            
