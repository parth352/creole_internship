<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name= "my_first_database";

    // Create connection with yoour databse server
    $conn = mysqli_connect($servername, $username, $password, $db_name);

    // Check connection is successful or not
    if (!$conn) 
    {
    die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    echo "<br>"; 

    echo "<h1> This is EXISTS operator is used to test for the existence of any record in a subquery.</h1>";
     $sql = "SELECT employe_name FROM employe_info WHERE EXISTS (SELECT employe_id FROM order_info WHERE order_info.employe_id >1);";  // The EXISTS operator returns TRUE if the subquery returns one or more records.
    $result = $conn->query($sql);
    
    //display data on web page
    while($row = mysqli_fetch_array($result))
    {
        echo "<b>employe_name : </b> " . $row["employe_name"]."<br>";
        echo "<br>";  
    } 

    mysqli_close($conn);

?>