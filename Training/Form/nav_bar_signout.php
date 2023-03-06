<?php
  session_start();
  $email= $_SESSION['email'];  // this session email is from login data

  include 'connection.php';
  $sql_email= "SELECT * FROM user_list WHERE email ='$email' ";
  $result = mysqli_query($conn, $sql_email);
  if($row=mysqli_fetch_assoc($result))
  {
    $name =$row["name"];
    $image =$row["image"];
    $id    =$row["id"];
  }
?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"></script>

<nav class="navbar navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color:white; font-size:30px; font-variant:small-caps;">
      <!-- <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top"> -->
      Website
    </a>
    <div class="d-flex justify-coontent-between">
    <div class="dropdown" style="margin-right:35px; margin-bottom:10px;">
  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-right:30px; font-size:15px;">
    <!-- <img src="image\<?php //if(isset($image) && isset($id)) {echo $id."/".$image;}?>" height="40" width="40" style="border-radius:30px; margin-right:10px;" /> <?php if(isset($name)) {echo $name;}?> -->
    <img src="image\<?php if(isset($image) && isset($id)) {echo $id."/".$id.".jpg";}?>" height="40" width="40" style="border-radius:30px; margin-right:10px;" /> <?php if(isset($name)) {echo $name;}?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
    <a class="dropdown-item" href="view_profile.php" >view Profile</a>
    <a class="dropdown-item hide_button" href="create_new.php">Add User</a>
    <a class="dropdown-item" href="home_page.php">Dashboard</a>
    <a class="dropdown-item" href="signout.php">Logout</a>
    
  </div>

    </div>
    </div>
  </div>
</nav>