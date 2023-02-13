<?php include "connection.php";?>

<?php

            if(isset($_POST['fname']))
            {
                $first_name =  $_REQUEST['fname'];
                $last_name = $_REQUEST['lname'];
                $email = $_REQUEST['email'];
 
                $sql_insert= "INSERT INTO employe_info VALUES (' ','$first_name','$last_name', '$email','')";
                mysqli_query($conn, $sql_insert);
                mysqli_close($conn);
            }  
                  
        ?>
        