<html>
    <body>
        <?php include "connection.php";?>

        <form method ="post" action = "<?php $_SERVER['PHP_SELF'];?>">
            Enter your First name : <input type="text" name="fname"> <br>
            Enter your Last name : <input type="text" name="lname"> <br>
            Enter your Email name : <input type="text" name="email"> <br>
            <input type = "submit" value = "submit" name= "submit">
        </form>

        <?php
            if(isset($_POST['fname']))
            {
                $first_name =  $_REQUEST['fname'];
                $last_name = $_REQUEST['lname'];
                $email = $_REQUEST['email'];
                $sql_insert= "INSERT INTO employe_info VALUES (' ','$first_name','$last_name', '$email','')";
                $sql_view = "SELECT id, firstname, lastname, email FROM employe_info";
                mysqli_query($conn, $sql_insert);
                $result = mysqli_query($conn, $sql_view);  

                if (mysqli_num_rows($result) > 0){
                    while($row=mysqli_fetch_assoc($result))
                    {
                        echo "<b>Id: </b> " . $row["id"]. "  <b> Name: </b>  " . $row["firstname"]. " " . $row["lastname"]. "  <b>Email </b>  " .$row["email"]. "<br>";
                    }
                }
                else{
                    echo "Error ". mysqli_error($conn);
                }
                
                mysqli_close($conn);
                }                 
        ?>
    </body>
</html>