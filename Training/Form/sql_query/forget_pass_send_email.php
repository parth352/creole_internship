<?php
include 'connection.php';

require '..\PHPMailer-master\src\Exception.php';
require '..\PHPMailer-master\src\PHPMailer.php';
require '..\PHPMailer-master\src\SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();
require 'connection.php';

$email = $_REQUEST['email'];

$sql_filter = "SELECT email FROM login_data where email = '$email'";

$result = mysqli_query($conn, $sql_filter);

$num_row = mysqli_num_rows($result);



if($_SERVER['REQUEST_METHOD']=='POST'){

    if($num_row==1){
     try{
            $mail = new PHPMailer(true);
            $mail->isSMTP();    
            $mail->Mailer = "smtp";
            // $mail->SMTPDebug  = 2;     // it will display complete detail of message sent
            $mail->SMTPAuth   = TRUE;
            
            $mail->Port       = 587;
            $mail->Host       = "smtp.gmail.com";
            $mail->Username   = "patelparthjayantilal93@gmail.com";
            $mail->Password   = "yqovejebnlzinqia";
            $mail->SMTPOptions = array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true));
            
            $otp = rand(100000, 999999);
            $mail->IsHTML(true);
            $mail->AddAddress($email);

            $mail->Subject = "Forget Password OTP";
            // echo $otp;
            $mail->Body =$otp; 
            if(!$mail->Send()) {

                $resp['msg'] = "Failed to send email try again";
                $resp['status'] = false;
                echo json_encode($resp);
                exit;

                var_dump($mail);
            } else {

                $resp['msg'] = "Email sent sucessfully";               
                $resp['status'] = true;
                echo json_encode($resp);
                $sql_insert_otp = "INSERT INTO reset_password (email,otp) VALUES ('$email','$otp')";        // otp is stored in reset_password table
                $result =mysqli_query($conn, $sql_insert_otp);
                exit;
            }
        }
        catch (phpmailerException $e) {
            $result = $e->errorMessage();
            } 
        catch (Exception $e) {
            $result = $e->getMessage();
            }   
    }
    else{
        $resp['msg'] = "You are not registerd please register first";
        $resp['status'] = false;
        echo json_encode($resp);
        exit;
        
        // $invalid_err_message ="You are not registerd please register first";
    }
}

?>