<html lang="en" >  
<head>  
    <meta charset="UTF-8">    
    <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.min.css">
    <script src ="Resources\jquery.min.js"> </script>
    <link rel="stylesheet" href ="css/style.css">
    <script src ="Resources/jquery.validate.min.js"> </script>
    <script src="js\forget_password.js"></script>
   
    <style>        
    .loader {
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 10px solid blue;
        border-right: 10px solid green;
        border-bottom: 10px solid red;
        border-left: 10px solid pink;
        width: 60px;
        height: 60px;
        -webkit-animation: spin 2s linear infinite;
        animation: spin 2s linear infinite;
        margin-left:110px;
        display:none;
    }
    
    @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
    }
    
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    </style>
</head>
<body>
<?php include  "nav_bar.php";?>

<div class="pt-0">  
  <div class="global-container">  
    <div class="card login-form">  
    <div class="card-body">  
        <h3 class="card-title text-center"> Forget Password </h3>  
        <div class="card-text">  
            <form id= "forget_password_form" name="forget_password_form" method="post" action=""> 
                  
                <div class="form-group">  
                    <label for="email"> Your Email </label>  
                    <input type="email" class="form-control form-control-sm" id="email" aria-describedby="emailHelp" name="email" required>
                    <?php if(isset($email_err)) {echo "<p class='message'>" .$email_err. "</p>" ;}?>  
                </div> 
                <div> 
                <button type="submit" class="btn btn-primary btn-block" id="submit"> Generate OTP </button>
                </div> 

                <div class="sign-up">  
                    Do have an account? <a href="index.php"> Log in </a>  
                </div>

                <div class="sign-up">
                <div class ="loader"></div>
                <p id="p" style="font-size:15px; font-variant:small-caps; color:red;">
                </p>  
                </div>
            </form> 
        </div>  
    </div>  
</div>  
</div>  
</body>  
</html>  