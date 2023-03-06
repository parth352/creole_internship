<link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.min.css">
<?php
session_start();
$email= $_SESSION['email'];

include 'connection.php';
$sql_email= "SELECT * FROM user_list WHERE email ='$email' ";
$result = mysqli_query($conn, $sql_email);
if($row=mysqli_fetch_assoc($result))
{
  $id        =$row["id"];
  $name      =$row["name"];
  $email     =$row["email"];
  $mo_number =$row["mo_number"];
  $image     =$row['image'];
  $address   =$row["address"];
  $image     =$row["image"];
}

require_once __DIR__ . '/dompdf/vendor/autoload.php';
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$html ='
<body>
<h1 class="text-primary" style="color:#0d6efd;">Edit Profile</h1>
<hr>   
              <!-- left column -->

                <img src="image/'.$id.'/'.$id.'.jpg" style="height:150px; weidth:150px; margin-top:60px; margin-left:30px;" > 
             
              
              <!-- edit form column -->
              <div style="margin-bottom:80px; float:right; width:70%;">
              <div >
                <h3 style="color:red;">Personal info</h3>
                
                
                  <div class="form-group">
                    <label class="col-lg-3 control-label">name:</label>
                    <div class="col-lg-8">
                      <input class="form-control" type="text" name ="name" id="name" value="'.$name.'">
                    </div>
                  </div>
              
                  <div class="form-group">
                    <label class="col-lg-3 control-label">mo_number:</label>
                    <div class="col-lg-8">
                      <input class="form-control" type="text" name="mo_number" id="mo_number" value="'.$mo_number.'">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-3 control-label">Email:</label>
                    <div class="col-lg-8">
                      <input class="form-control" type="text" name="email" id="email" value="'.$email.'">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-3 control-label">address:</label> 
                    <div>
                      <textarea rows="2" cols="2" class="form-control" name="address" id="address">'.$address.'</textarea>
                    </div>
                  </div>
                  
          </div>
          </div>
  </body>
';

$dompdf->set_option('isRemoteEnabled',TRUE);
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
ob_end_clean();
$dompdf->stream('newfile', array('Attachment'=>0));
?>
