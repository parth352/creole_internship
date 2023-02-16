<html lang="en" >  
<head>  
    <meta charset="UTF-8">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
    <link rel="stylesheet" href ="style.css">
    <script src ="Resources/jquery.validate.min.js"> </script>

    <script>
        $(document).ready (function () {  
            $("#signup_form").validate ({
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
        });  
    </script>
</head>

<?php
    include 'connection.php';

    if($_SERVER['REQUEST_METHOD']==="POST"){

        $f_name    = trim($_POST["f_name"]);
        $email    = trim($_POST["email"]);
        $password = md5($_POST['password']);

        $sql_insert= "INSERT INTO login_data VALUES (' ','$email','$password', '$f_name') ";
    
        $result_insert =mysqli_query($conn, $sql_insert);

            if ($result_insert){
                header("Location:index.php");
            }
        }
    
?> 

<body>

<div class="pt-5">  
  <div class="global-container">  
    <div class="card login-form">  
    <div class="card-body">  
        <h3 class="card-title text-center"> SignUp Form </h3>  
        <div class="card-text">  
            <form id= "signup_form" name="signup_form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
                <div class="form-group">  
                    <label for="f_name"> Your Name </label>  
                    <input type="text" class="form-control form-control-sm" id="f_name" aria-describedby="nameHelp" name="f_name" required>    
                </div>  
                <div class="form-group">  
                    <label for="email"> Your Email </label>  
                    <input type="email" class="form-control form-control-sm" id="email1" aria-describedby="emailHelp" name="email" required>  
                    <?php if(isset($email_err)) {echo "<p class='message'>" .$email_err. "</p>" ;}?>  
                </div>  
                <div class="form-group">  
                    <label for="password">Your Password </label>  
                    <input type="password" class="form-control form-control-sm" id="password" name ="password" required>  
                    <?php if(isset($password_err)) {echo "<p class='message'>" .$password_err. "</p>" ;}?>
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