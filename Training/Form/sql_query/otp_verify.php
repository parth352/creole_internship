<?php
    include 'connection.php';
    $otp    = $_POST["otp"];
    // $email    =($_POST["email"]);
        
    $sql_filter_otp="SELECT otp FROM reset_password where otp = '$otp'";
    $result = mysqli_query($conn, $sql_filter_otp);
    $total_otp = mysqli_num_rows($result);

    if ($total_otp === 1) {
        $resp['status'] = true;
        echo json_encode($resp);
        exit;       
        } 
    else {
        $resp['msg'] = "Your otp is incorrect";
        $resp['status'] = false;
        echo json_encode($resp);
        exit;
    }
?>
              
            
