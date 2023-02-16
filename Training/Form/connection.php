<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name= "form_data";

    // Create connection with yoour databse server
    $conn = mysqli_connect($servername, $username, $password, $db_name);

    // Check connection is successful or not
    if (!$conn) 
    {
    die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    echo "<br>"; 
   
?>


