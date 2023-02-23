<html lang="en" >  
<head>  
    <meta charset="UTF-8">    
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <!-- <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script> -->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href ="css/style.css">
    <script src ="Resources\jquery.min.js"> </script>
    <script src ="Resources/jquery.validate.min.js"> </script>
    <script src ="js/reset_password.js"> </script> 
</head>

<body>
    <?php include  "nav_bar.php";?>

    <div class="pt-0">  
    <div class="global-container">  
        <div class="card login-form">  
        <div class="card-body">  
            <h3 class="card-title text-center"> Reset Password </h3>  
            <div class="card-text">  
                <form id= "reset_password_form" name="reset_password_form" method="post" action=""> 
                    
                    <div class="form-group">  
                        <label for="reset_password"> Enter New Password </label>  
                        <input type="password" class="form-control form-control-sm" id="reset_password" aria-describedby="reset_passwordHelp" name="reset_password" minlength='8' required>  
                    </div>
                    <div> 
                    <button type="submit" class="btn btn-primary btn-block" id="submit"> Confirm </button>
                    </div> 
                    <div class="sign-up">  
                    <p id="p" style="font-size:15px; font-variant:small-caps; color:red;"> </p>  
                    </div>
                </form> 
                </form>  
            </div>  
        </div>  
    </div>  
    </div>  
    </body>  
</html>  