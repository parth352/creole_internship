<html>
    <body>
        <?php include "connection.php";?>

        <h1>This example shows update data in a table</h1>
        <form method ="post" action = "<?php $_SERVER['PHP_SELF'];?>">
            Enter first name : <input type="text" name="fname"> <br>
            Enter id number : <input type="number" name="id"> <br>
            <input type = "submit" value = "Update" name= "submit">
        </form>

        <?php
            $id = $_REQUEST['id'];
            $first_name =$_REQUEST['fname'];
            $sql = "UPDATE employe_info SET firstname = '$first_name' WHERE id =$id ";
            $sql_view = "SELECT id, firstname, lastname, email FROM employe_info";

            mysqli_query($conn, $sql);
            $result = mysqli_query($conn, $sql_view); 

            if (mysqli_num_rows($result) > 0)
            {
                while($row=mysqli_fetch_assoc($result))
                {
                    echo "<b>Id: </b> " . $row["id"]. "  <b> Name: </b>  " . $row["firstname"]. " " . $row["lastname"]. "  <b>Email </b>  " .$row["email"]. "<br>";
                }
            }
            else
            {
                echo "Error ". mysqli_error($conn);
            }
            mysqli_close($conn);
        
        ?>
    </body>
</html>