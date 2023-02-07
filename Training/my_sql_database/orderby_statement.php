<html></html>
    <body>
        <?php include "connection.php";?>

        <h1>This example shows where condition</h1>
        <form method ="post" action = "<?php $_SERVER['PHP_SELF'];?>">
            <input type = "submit" value = "firstname" name= "submit">
            <input type = "submit" value = "lastname" name= "submit">
        </form>

        <?php
        if(!isset($POST['submit']))
        {
            $value= $_REQUEST['submit'];
            // If user select firstname button it returns ordered value by firstname
            if($value== 'firstname')
            {
                $sql = "SELECT id, firstname, lastname FROM employe_info ORDER BY firstname";
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
                    echo "Error ". mysqli_error($conn);
                }
            }
            // if user select lastname button it returns ordeered value by lastname
            if($value== 'lastname')
            {
                $sql = "SELECT id, firstname, lastname FROM employe_info ORDER BY lastname";
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
                    echo "Error ". mysqli_error($conn);
                }
            }
            mysqli_close($conn);
        }
        ?>
    </body>
</html>