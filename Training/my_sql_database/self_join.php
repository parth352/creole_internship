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

    echo "<h1> This is example of self join which is regular join but the table is join with itself</h1>";
    $sql = "SELECT employe_name AS User_name , employe_address AS user_address , order_name AS orderInformation
            FROM order_info, employe_info
            WHERE employe_info.employe_id <> order_info.order_id
            ORDER BY employe_info.employe_address";
    $result = $conn->query($sql);

    //display data on web page
    while($row = mysqli_fetch_array($result))
    {
    echo "<b>User Name : </b> " . $row["User_name"]. "<b> User address: </b>" . $row["user_address"]. "  <b> order information : </b>" . $row["orderInformation"]."<br>";
    echo "<br />";  
    } 

    mysqli_close($conn);

?>