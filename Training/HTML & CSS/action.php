<html>
    <head>
    <title>Car buying form details</title>
    <style>
        form{
            background-color:lightgray ;
        }
        em{
            color:red;
        }
        </style>
    </head>

<body>
    <?php
    
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $email = $_REQUEST['email'];
    $age = $_REQUEST['age'];
    $gender = $_REQUEST['gender'];
    //$occupation = $_REQUEST['fname'];
    $address = $_REQUEST['address'];
    $d_month = $_REQUEST['d_month'];
    ?>

<form>
<fieldset>
    <legend style="color:red;">CUSTOMER DETAILS</legend>
      <ol type="1">
        <li><em>Full Name :</em> <?php echo $fname." ".$lname?></li>
        <li><em>Email :</em> <?php echo $email?></li>
        <li><em>AGE :</em> <?php echo $age?></li>
        <li><em>Gender :</em> <?php echo $gender?></li>
        <li><em>Address :</em> <?php echo $address?></li>
        <li><em>Car Delivery Month :</em> <?php echo $d_month?></li>
      </ol>
</form>
</body>
    </html>
