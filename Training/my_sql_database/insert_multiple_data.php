<html>
    <body>
        <?php include "connection.php";?>

        <h1>Enter multiple data in fields using comma and the number of value should be equal in all the field</h1>
        <form method ="post" action = "<?php $_SERVER['PHP_SELF'];?>">
            Enter your First name (enter comma after each fname): <input type="text" name="fname"> <br>
            Enter your Last name (enter comma after each lname): <input type="text" name="lname"> <br>
            Enter your Email name (enter comma after each email):: <input type="text" name="email"> <br>
            <input type = "submit" value = "submit" name= "submit">
        </form>

        <?php
            if(isset($_POST['fname']))
            {   // exploding string field to array 
                $arr_fname = explode(",",$_POST['fname']);
                $arr_lname = explode(",",$_POST['lname']);
                $arr_email = explode(",",$_POST['email']);
                $total_value = count($arr_fname);
                
                // inserting each array value to data using loop
                for($i=0; $i<$total_value ; $i++)
                {
                    $sql_insert= "INSERT INTO employe_info VALUES (' ', '$arr_fname[$i]', '$arr_lname[$i]', '$arr_email[$i]', ' ')";
                    mysqli_query($conn, $sql_insert);
                }

                // displaying all the data inside table
                $sql_view = "SELECT id, firstname, lastname, email FROM employe_info";
                $result = mysqli_query($conn, $sql_view);  
                if (mysqli_num_rows($result) > 0)
                {
                    while($row=mysqli_fetch_assoc($result))
                    {
                        echo "<b>Id: </b> " . $row["id"]. "  <b> Name: </b>  " . $row["firstname"]. " " . $row["lastname"]. "  <b>Email </b>  " .$row["email"]. "<br>";
                    }
                }
                else{
                    echo "Error ". mysqli_error($conn);
                }

                // closing connection
                mysqli_close($conn);
            }                 
        ?>
    </body>
</html>