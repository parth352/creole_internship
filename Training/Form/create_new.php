<html lang="en" >  
<head>  
    <meta charset="UTF-8">    
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.min.css">
    <script src ="Resources\jquery.min.js"> </script>
    <link rel="stylesheet" href ="css/style.css">
    <script src ="Resources/jquery.validate.min.js"> </script>
    <script src ="Resources\additional-methods.min.js"> </script>
    <script src="js\create_new.js"></script>
</head>
<body>
    <?php include  "nav_bar_signout.php";

    // if(!isset($_POST["name"]) && !isset($_POST["email"]) && !isset($_POST["mo_number"]) && !isset($_POST["address"])){

    //     $message= "please enter all field";
    // }
    // else{
    //     $name    = $_POST["name"];
    //     $email    = $_POST["email"];
    //     $address    = $_POST["address"];
      
    //     $name_length = strlen($name);
    //     $address_length =strlen($address);
    //     $email_length   =strlen($email);
        
    //     if($name_length <=3 || $address_length <=5 || $email_length <=3 )
    //     {
    //             $message= "please enter proper field";
    //     }
    // }
    
    ?>          

    <div class="pt-0">   
    <div class="global-container">  
        <div class="card login-form">  
        <div class="card-body">  
            <h3 class="card-title text-center"> Insert Details </h3>  
            <div class="card-text">  
                <form id= "create_new" name="create_new" method="post" action="" enctype="multipart/form-data"> 
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
                        <input type="number" class="form-control form-control-sm" id="mo_number" name ="mo_number" required>   
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
                    <button class="btn btn-primary btn-block" id="submit"> insert </button>
                    </div> 
                    <div class="sign-up">  
                        <p id="p" style="color:red; font-size:15px; font-variant:small-caps; "><?php if(isset($message)){echo $message;}?> </p>  
                    </div>
                </form>  
            </div>  
        </div>  
    </div>  
    </div>  
    </body>  
</html>  