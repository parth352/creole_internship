<!-- This is for php validation -->
<?php
if($_SERVER['REQUEST_METHOD']==="POST"){

    $fname    = trim($_POST["fname"]);
    $lname    = trim($_POST["lname"]);
    $email    = trim($_POST["email"]);
    $password = trim($_POST["password"]);

  if($fname ==" " || $fname!=ucfirst($fname)) {
      $fname_err ="first letter of first name should be capital"; 
  }
  elseif($lname!=ucfirst($lname)){
      $lname_err ="first letter of last name should be capital";
  }
  elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
      $email_err ="email address is not valid";
  }
  elseif(!preg_match('/^([a-zA-Z0-9@*#]{8,15})$/', $password)){
      $password_err ="Password is not correct follow global format for password"; 
  }
  else{
    echo "Success";
    //final code will execute here.
  }
}
?>

<html>  
  <head>      
    <link rel ="stylesheet" type ="text/css" href ="style.css">
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
    <script src ="jquery.validate.min.js"> </script>
    <script src ="additional-methods.min.js"></script>   <!-- additional library for accept/creditcard/phone etc validation -->
    <script src ="validation.js"></script>
  </head>

<body>
  <center>  
    <h4> jQuery & php Validation Form Example </h4>  
    <form id ="basic-form" name ="basic-form" method ="post" action ="">  
    <p>  
      <label for= "fname"> First Name <span> (required, at least 8 characters) </span> </label>  
      <input id ="fame" name ="fname" type ="text" value ="" required>
      <?php if (isset($fname_err)) { echo "<p class='message'>" .$fname_err. "</p>" ;}?>
    </p>  
    <p>  
      <label for ="lname"> Last Name <span> </span> </label>  
      <input type ="text" id ="lname" name ="lname" required>
    <?php if(isset($lname_err)) {echo "<p class='message'>" .$lname_err. "</p>" ;}?> 
    </p>   
    <p>  
      <label for="email"> E-Mail <span> (required) </span> </label>  
      <input id="email" type="email" name="email" required>
      <?php if(isset($email_err)) {echo "<p class='message'>" .$email_err. "</p>" ;}?>  
    </p>  
    <p>  
      <label for="password"> Password </label>  
      <input type="password" name="password" id="password" required >
      <?php if(isset($password_err)) {echo "<p class='message'>" .$password_err. "</p>" ;}?>
    <br>
      <label for ="password"> re_Password </label>
      <input type ="password" name="re_password" id="re_password" required >  
    </p>
    <p> 
      <label for ="file"> File </label>
      <input type="file" id="file" name ="file" required></input>
    </p> 
    <p> 
      <label for ="credit_card"> Credit_card (eg: 374245455400126): </label>
      <input type ="text" id ="credit_card" name ="credit_card" required></input>
    </p> 
    <p> 
    <br> 
      <input class ="submit" type ="submit" value ="SUBMIT" name ="submit"></input> 
      <input class ="reset"  type ="reset" id ="reset" naame ="reset"></input> 
    </p>
    
    <div id ="info"></div>
      
  
    </form>  
  </center>  
</body>  
</html>  