<html>
    <body>
        <?php include "connection.php";?>

        <h1>This example shows delete data from a mysql table</h1>
        <form method ="post" action = "<?php $_SERVER['PHP_SELF'];?>">
            Enter id number : <input type="number" name="id"> <br>
            <input type = "submit" value = "Delete" name= "submit">
        </form>

        <?php
            $id = $_REQUEST['id'];
            $sql = "DELETE FROM employe_info WHERE id = $id";
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