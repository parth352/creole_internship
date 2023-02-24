<html lang="en" >  
<head>  
    <meta charset="UTF-8">    
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <!-- <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script> -->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.min.css">
    <script src ="Resources\jquery.min.js"> </script>
    <link rel="stylesheet" href ="css/style.css">
    <script src ="Resources/jquery.validate.min.js"> </script>
    <script src ="Resources\additional-methods.min.js"> </script>
    <script src="js\update_user_profile.js"></script>

    <style>
        body{margin-top:20px;}
      .avatar{
          width:200px;
          height:200px;
          }		
    </style>
</head>

<body>
  <?php 
    include  "nav_bar_signout.php";
    include "sql_query/view_profile_user.php";

        // if(!isset($_POST["name"]) && !isset($_POST["email"]) && !isset($_POST["mo_number"]) && !isset($_POST["address"])){

        //         $message= "please enter all field";
        //     }
        //     else{
        //         $name    = $_POST["name"];
        //         $email    = $_POST["email"];
        //         $address    = $_POST["address"];
              
        //         $name_length = strlen($name);
        //         $address_length =strlen($address);
        //         $email_length   =strlen($email);
                
        //         if($name_length <=3 || $address_length <=5 || $email_length <=3 )
        //         {
        //                 $message= "please enter proper field";
        //         }
        //     }
  ?>

  <div class="container bootstrap snippets bootdey">
      <h1 class="text-primary">Edit Profile</h1>
        <hr>

        <form class="form-horizontal" id= "view_profile" name="view_profile" method="post" action="" enctype="multipart/form-data">
          <div class="row">
              <!-- left column -->
              <div class="col-md-3">
                <div class="text-center">
                  <img src="image/<?php if(isset($image) && isset($id)){echo $id."/".$image;}?>" class="avatar img-circle img-thumbnail" alt="avatar">
                  <h6>Upload a different photo...</h6>
                  <input type="file" class="form-control" name="uploadfile" id="uploadfile" value="image/<?php if(isset($image)){echo $image;}?>">
                </div>
              </div>
              
              <!-- edit form column -->
              <div class="col-md-9 personal-info">
                <h3>Personal info</h3>
                
                
                  <div class="form-group">
                    <label class="col-lg-3 control-label">name:</label>
                    <div class="col-lg-8">
                      <input class="form-control" type="text" name ="name" id="name" value="<?php if(isset($name)) {echo $name;}?>">
                    </div>
                  </div>
              
                  <div class="form-group">
                    <label class="col-lg-3 control-label">mo_number:</label>
                    <div class="col-lg-8">
                      <input class="form-control" type="number" name="mo_number" id="mo_number" value="<?php if(isset($mo_number)) {echo $mo_number;}?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-3 control-label">Email:</label>
                    <div class="col-lg-8">
                      <input class="form-control" type="text" name="email" id="email" value="<?php if(isset($email)) {echo $email;}?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-3 control-label">address:</label> 
                    <div class="col-lg-8">
                      <textarea rows="2" cols="2" class="form-control" name="address" id="address"><?php if(isset($address)) {echo $address;}?></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block" name ="submit" id="submit"> Update </button>
            </div>
          </form>
          <p id="p" style="color:red; font-size:15px; font-variant:small-caps; "> <?php// if(isset($message)){echo $message;}?></p>  

        </div>
    </div>
  </div>
  <hr>
</body>
</html>  