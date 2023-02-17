<html lang="en" >  
<head>  
    <meta charset="UTF-8">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
    <link rel="stylesheet" href ="css/style.css">
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

<script>
           $(document).ready(function(){
            $("#submit").click(function(e){
                e.preventDefault();
                var data = $('#signup_form').serialize();
                $.ajax({
                    type : "post",
                    url : "sql_query/insert_user.php",
                    data : data,
                }).done(function(response){
                    response = JSON.parse(response);
                    if(response['status']){
                        location.href = "index.php";
                    }
                    else{
                        var errorMessage = '';
                        $("#p").html((response.msg));
                        $.each(response['msg'], function(index, message) {
                            errorMessage += '<div>' + message + '</div>';
                        });
                        $("#p").html(errorMessage).css({'color':'red'});
                        $("#p").show();
                    }
                }).fail(function() {
                    alert("your ajax request is not working");
                })
            })
        }) 
        </script>
</head>



<body>

<?php include  "nav_bar.php";?>

<div class="pt-0">  
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
                <button type="submit" class="btn btn-primary btn-block" id="submit"> Register </button>
                 
                </div> 
                 
                <div class="sign-up">  
                    Do have an account? <a href="index.php"> Log in </a>  
                </div>
                <div class="sign-up">  
                    <p id="p" style="color:red; font-size:15px; font-variant:small-caps; "> </p>  
                </div>
                   
            </form>  
        </div>  
    </div>  
</div>  
</div>  
</body>  
</html>  