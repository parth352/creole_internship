<html lang="en" >  
<head>  
    <meta charset="UTF-8">    
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <!-- <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script> -->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.min.css">
    <script src ="Resources\jquery.min.js"> </script>
    <link rel="stylesheet" href ="css/style.css">
    <script src ="Resources/jquery.validate.min.js"> </script>
    <script src="js\signup.js"></script>
</head>
<body>
    <?php include  "nav_bar.php";

        // if(!isset($_POST["f_name"]) && !isset($_POST["email"]) && !isset($_POST["password"])){

        //     $message= "please enter all field";
        // }
        // else{
        //     $name    = $_POST["f_name"];
        //     $email    = $_POST["email"];
        //     $pass    = $_POST["password"];
          
        //     $name_length = strlen($name);
        //     $pass_length =strlen($pass);
        //     $email_length   =strlen($email);
            
        //     if($name_length <=3 || $pass_length < 8 || $email_length <=3 )
        //     {
        //             $message= "please enter proper field";
        //     }
        // }

    ?>

    <div class="pt-0">  
    <div class="global-container">  
        <div class="card login-form">  
        <div class="card-body">  
            <h3 class="card-title text-center"> SignUp Form </h3>  
            <div class="card-text">  
                <form id= "signup_form" name="signup_form" method="post" action=""> 
                    <div class="form-group">  
                        <label for="f_name"> Your Name </label>  
                        <input type="text" class="form-control form-control-sm" id="f_name" aria-describedby="nameHelp" name="f_name" required>    
                    </div>  
                    <div class="form-group">  
                        <label for="email"> Your Email </label>  
                        <input type="email" class="form-control form-control-sm" id="email" aria-describedby="emailHelp" name="email" required>  
                        <?php if(isset($email_err)) {echo "<p class='message'>" .$email_err. "</p>" ;}?>  
                    </div>  
                    <div class="form-group">  
                        <label for="password">Your Password </label>  
                        <input type="password" class="form-control form-control-sm" id="password" name ="password" required>  
                        <?php if(isset($password_err)) {echo "<p class='message'>" .$password_err. "</p>" ;}?>
                    </div>
                    <div> 
                    <button type="submit" class="btn btn-primary btn-block" id="submit"> Register </button>
                    </div> 
                    <div class="sign-up">  
                        Do have an account? <a href="index.php"> Log in </a>  
                    </div>
                    <div class="sign-up">  
                        <p id="p" style="color:red; font-size:15px; font-variant:small-caps; "> <?php if(isset($message)){echo $message;}?></p>  
                    </div>
                </form>  
            </div>  
        </div>  
    </div>  
    </div>  
    </body>  
</html>  