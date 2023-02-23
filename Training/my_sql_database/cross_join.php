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

    echo "<h1> This is example of cross join Returns all the records from both the tables</h1>";
     $sql = "SELECT *
            FROM employe_info
            CROSS JOIN order_info ON order_info.employe_id=employe_info.employe_id;";  // cross join will return result as same inner join because there is relationship given between two tables
    $result = $conn->query($sql);
    //display data on web page
    while($row = mysqli_fetch_array($result))
    {
        echo "<b>employe_name : </b> " . $row["employe_name"]. "  <b> employe id: </b>  " . $row["employe_id"]. "  <b> employe_position: </b>" . $row["employe_position"]."  <b> employe_address: </b>" . $row["employe_address"]. "  <b> order_id: </b>" . $row["order_id"]."  <b>order_name : </b>" . $row["order_name"]."<br>";
        echo "<br />";  
    } 

    mysqli_close($conn);

?>