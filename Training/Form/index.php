 <html lang="en" >  
<head>  
    <meta charset="UTF-8">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
    <link rel="stylesheet" href ="style.css">
    <script src ="Resources/jquery.validate.min.js"> </script>
    <script>
        $(document).ready (function () {  
            $("#login_form").validate ({
                rules: {
                    'email':{
                        required: true,
                        email:true,
                    },
                    'password':{
                        required: true,
                        minlength: 8,
                    },
                },
                messages:{
                  'email': "Please enter Email in proper format.",
                  'password': "Password must be of minimum length 8",
                }, 
            });
            
            $("")
        });  
    </script>   
</head>  
 
<body>
    <!-- This is for php validation -->
<?php
    include 'connection.php';
    if($_SERVER['REQUEST_METHOD']==="POST"){        
        $email =  $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $encrypt_pass =md5($password);


        if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
        $email_err ="email address is not valid";
        }
        elseif(!preg_match('/^([a-zA-Z0-9@*#]{8,15})$/', $password)){
        $password_err ="Password is not correct follow global format for password";
        }


        $sql = "SELECT email,pass FROM login_data WHERE email='$email' AND pass='$encrypt_pass'";  // The EXISTS operator returns TRUE if the subquery returns one or more records.
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0){
            header("Location:home_page.php");
        }
        else
        {
            header("Location:index.php");
        }

        mysqli_close($conn);
    }
?>

<div class="pt-5">  
  <div class="global-container">  
    <div class="card login-form">  
    <div class="card-body">  
        <h3 class="card-title text-center"> Login Form </h3>  
        <div class="card-text">  
            <form id= "login_form" name="login_form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">  
                <div class="form-group">  
                    <label for="exampleInputEmail1"> Enter Your Email address </label>  
                    <input type="email" class="form-control form-control-sm" id="email1" aria-describedby="emailHelp" name="email" required>  
                    <?php if(isset($email_err)) {echo "<p class='message'>" .$email_err. "</p>" ;}?>  
                </div>  
                <div class="form-group">  
                    <label for="exampleInputPassword1">Enter Your Password </label>

                    <a href="forget_password.php" style="float:right;font-size:12px;"> Forgot password? </a>
                      
                    <input type="password" class="form-control form-control-sm" id="password" name ="password" required>  
                    <?php if(isset($password_err)) {echo "<p class='message'>" .$password_err. "</p>" ;}?>
                </div>
                <div> 
                <button type="submit" class="btn btn-primary btn-block"> Sign in </button>
                 
                </div> 
                 
                <div class="sign-up">  
                    Don't have an account? <a href="signup.php"> Create One </a>  
                </div>  
            </form>  
        </div>  
    </div>  
</div>  
</div>  
</body>  
</html>  