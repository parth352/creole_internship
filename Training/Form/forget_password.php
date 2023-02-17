<html lang="en" >  
<head>  
    <meta charset="UTF-8">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
    <link rel="stylesheet" href ="css/style.css">
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

    <script>
        $(document).ready(function(){
            $("#submit").click(function(e){
                e.preventDefault();
                var data = $('#forget_password_form').serialize();
                $.ajax({
                    type : "post",
                    url : "sql_query/forget_pass_send_email.php",
                    data : data,
                }).done(function(response){
                    response = JSON.parse(response);
                    if(response['status']){
                        location.href = "otp.php";
                        
                        // var sucess_Message = '';
                        // $("#p").html((response.msg));
                        // $.each(response['msg'], function(index, message) {
                        //     sucess_Message += '<div>' + message + '</div>';
                        // });
                        // $("#p").html(sucess_Message).css({'color':'green'});
                        // $("#p").show();
                        
                    }
                    else{
                        var error_Message = '';
                        $("#p").html((response.msg));
                        $.each(response['msg'], function(index, message) {
                            error_Message += '<div>' + message + '</div>';
                        });
                        $("#p").html(error_Message).css({'color':'red'});
                        $("#p").show();
                    }
                }).fail(function() {
                    alert("your ajax request is not working");
                })
            })

            // this is ajax for loader image

    //     $(document).ajaxStart(function(){            // from starting of ajax request start to complete it shows loading image
    //     $("#p").css("display", "block");
    //   });
    //   $(document).ajaxComplete(function(){      // ajax complete method it will return message when all the ajax request are completed.
    //     $("#p").css("display", "none");
    //   });
    //   $("#submit").click(function(){
    //     $("#p").load("your request is processing");
    //   });
       }) 
    </script>
</head>


<body>
<?php include  "nav_bar.php";?>

<div class="pt-0">  
  <div class="global-container">  
    <div class="card login-form">  
    <div class="card-body">  
        <h3 class="card-title text-center"> Forget Password </h3>  
        <div class="card-text">  
            <form id= "forget_password_form" name="forget_password_form" method="post" action="otp_verify.php"> 
                  
                <div class="form-group">  
                    <label for="email"> Your Email </label>  
                    <input type="email" class="form-control form-control-sm" id="email1" aria-describedby="emailHelp" name="email" required>
                    <?php if(isset($email_err)) {echo "<p class='message'>" .$email_err. "</p>" ;}?>  
                </div> 
                <div> 
                <button type="submit" class="btn btn-primary btn-block" id="submit"> Generate OTP </button>
                </div> 

                <div class="sign-up">  
                    Do have an account? <a href="index.php"> Log in </a>  
                </div>
                
                <div class="sign-up">  
                <p id="p" style="font-size:15px; font-variant:small-caps; color:red;">
                    <div class ="wait" style="display:none;width:69px;height:89px;border:1px solid black;position:absolute;top:50%;left:50%;padding:2px;">
                    <img src ='images/Loading_2.gif' width="64" height="64" /><br>Loading..</div>
                </p>  
                </div>
                 
            </form> 
            </form>  
        </div>  
    </div>  
</div>  
</div>  
</body>  
</html>  