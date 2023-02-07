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
    //UNION method
    echo "<h1> This is example of Union which is used to return only distinct values by default from both the table  into single table </h1>";
    $sql = "SELECT employe_id FROM employe_info UNION SELECT employe_id from order_info";
    $result = $conn->query($sql);

    //display data on web page
    while($row = mysqli_fetch_array($result))
    {
    echo "<b>employe_id : </b> " . $row["employe_id"];
    echo "<br>";  
    } 

    // UNION ALL method
    echo "<h1> This is example of Union ALL which is used to return ALL the values from both the table  into single table </h1>";
    $sql1 = "SELECT employe_id FROM employe_info UNION ALL SELECT employe_id from order_info";
    $result = $conn->query($sql1);

    //display data on web page
    while($row = mysqli_fetch_array($result))
    {
    echo "<b>employe_id : </b> " . $row["employe_id"];
    echo "<br>";  
    } 

    mysqli_close($conn);

?>