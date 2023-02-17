 <html lang="en" >  
<head>  
    <meta charset="UTF-8">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor\twbs\bootstrap\dist\css">
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
    <script src="Resources\jquery-3.6.3.js"></script>
    <link rel="stylesheet" href ="css/style.css">
    <script src ="Resources/jquery.validate.min.js"> </script>
    <script src ="js/login.js"> </script>

    
</head>  
 
<body>


<!-- Main User Interface code -->
<?php include  "nav_bar.php";?>     <!--This is for navigation bar-->

<div class="pt-0">  
  <div class="global-container">  
    <div class="card login-form">  
    <div class="card-body">  
        <h3 class="card-title text-center"> Login </h3>  
        <div class="card-text">  
            <form id= "login_form" name="login_form" method="post" action="">  
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
                <button type="submit" class="btn btn-primary btn-block" id ="submit"> Sign in </button>
                 
                </div> 
                 
                <div class="sign-up">  
                    Don't have an account? <a href="signup.php"> Create One </a>  
                </div>
                <p id="p" style="color:red; font-size:14px;"> </p>  
            </form>  
        </div>  
    </div>  
</div>  
</div>  
</body>  
</html>  