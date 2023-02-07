<?php include 'connection.php';?>

<?php
// create Database
    $sql= "CREATE DATABASE demo_db";
    if(mysqli_query($conn,$sql))
    {
        echo "your database created successfully";
    }
    else
    {
        echo "error in creating Database ". mysqli_error($conn);
    }

    mysqli_close($conn);  // this is used to close your database connection
?>