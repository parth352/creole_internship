<html lang="en" >  
<head>  
    <meta charset="UTF-8">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
    <link rel="stylesheet" href ="style.css">
    <script src ="Resources/jquery.validate.min.js"> </script>

    <script>
        $(document).ready (function () {  
            $("#forget_password_form").validate ({
                rules: {
                    'email':{
                        required: true,
                        email:true,
                    }
                },
                messages:{
                    'email': "Please enter Email in proper format.",
                }, 
            }); 
        });  
    </script>
</head>

<?php
    // include 'connection.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    if($_SERVER['REQUEST_METHOD']==="POST"){

        require 'PHPMailer-master\src\Exception.php';
        require 'PHPMailer-master\src\PHPMailer.php';
        require 'PHPMailer-master\src\SMTP.php';
        $otp = rand(100000,999999);
        require 'vendor\autoload.php';
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPSecure = 'ssl';
        $mail->SMTPAuth = true;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465;
        $mail->Username = '';
        $mail->Password = '';
        // $mail->setFrom('');
        $mail->addAddress('patelparthjayantilal93@gmail.com');
        $mail->Subject = 'Hello from PHPMailer!';
        $mail->Body = 'Your otp is :- '.$otp;
        //send the message, check for errors
        if (!$mail->send()) {
            echo "ERROR: " . $mail->ErrorInfo;
        } else {
            echo "SUCCESS";
        }
    }
    
?> 

<body>

<div class="pt-5">  
  <div class="global-container">  
    <div class="card login-form">  
    <div class="card-body">  
        <h3 class="card-title text-center"> Forget Password </h3>  
        <div class="card-text">  
            <form id= "forget_password_form" name="forget_password_form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
                  
                <div class="form-group">  
                    <label for="email"> Your Email </label>  
                    <input type="email" class="form-control form-control-sm" id="email1" aria-describedby="emailHelp" name="email" required>  
                    <?php if(isset($email_err)) {echo "<p class='message'>" .$email_err. "</p>" ;}?>  
                </div> 
                <div> 
                <button type="submit" class="btn btn-primary btn-block"> Register </button>
                </div> 

                <div class="sign-up">  
                    Do have an account? <a href="index.php"> Log in </a>  
                </div>  
            </form>  
        </div>  
    </div>  
</div>  
</div>  
</body>  
</html>  