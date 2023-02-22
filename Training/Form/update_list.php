<html lang="en" >  
<head>  
    <meta charset="UTF-8">    
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <!-- <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script> -->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.min.css">
    <script src ="Resources\jquery.min.js"> </script>
    <link rel="stylesheet" href ="css/style.css">
    <script src ="Resources/jquery.validate.min.js"> </script>
    <script src="js\update_list.js"></script>
</head>
<body>
    <?php include  "nav_bar_signout.php";
    ?>


    <div class="pt-0">  
    <div class="global-container">  
        <div class="card login-form">  
        <div class="card-body">  
            <h3 class="card-title text-center"> Update Your Details </h3>  
            <div class="card-text">  
                <form id= "update_detail" name="update_detail" method="post" action=""> 
                    <div class="form-group">  
                        <label for="name"><b>Name</b> </label>  
                        <input type="text" class="form-control form-control-sm" id="name" aria-describedby="nameHelp" name="name" required>    
                    </div>  
                    <div class="form-group">  
                        <label for="email"><b> Your Email</b> </label>  
                        <input type="email" class="form-control form-control-sm" id="email" aria-describedby="emailHelp" name="email" required>  
                    </div>  
                    <div class="form-group">  
                        <label for="mo_number"><b>mobile number</b> </label>  
                        <input type="tel" class="form-control form-control-sm" id="mo_number" name ="mo_number" required>   
                    </div>
                    <div class="form-group">  
                        <label for="address"><b>address</b></label>  
                        <textarea rows="4" cols="4" id="address" name="address" class="form-control form-control-sm"></textarea>  
                    </div>
                    <div class="form-group">  
                        <label for="uploadfile"><b>Profile Image</b></label>  
                        <input class="form-control form-control-sm" type="file" name="uploadfile" id="uploadfile" value="" >
                    </div> 
                    <div> 
                    <button type="submit" class="btn btn-primary btn-block" id="submit"> Update </button>
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