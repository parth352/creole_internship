<html>
    <body>
        <?php include "connection.php";?>

        <h1>This example shows where condition</h1>
        <form method ="post" action = "<?php $_SERVER['PHP_SELF'];?>">
            Enter your Last name : <input type="text" name="lname"> <br>
            <input type = "submit" value = "submit" name= "submit">
        </form>

        <?php
        if(!isset($POST['lname']))
        {
            $last_name = $_REQUEST['lname'];
            $sql = "SELECT id, firstname, lastname FROM employe_info WHERE lastname='$last_name'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0)
            {
                while($row=mysqli_fetch_assoc($result))
                {
                    echo "<b>Id: </b> " . $row["id"]. "  <b> Name: </b>  " . $row["firstname"]. " " . $row["lastname"] . "<br>";
                }
            }
            else
            {
                echo "Error there is no data with this last name ". mysqli_error($conn);
            }
            mysqli_close($conn);
        }
        ?>
    </body>
</html>