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

    echo "<h1> This is Group By will groups rows that have the same values into different table rows</h1>";
     $sql = "SELECT COUNT(employe_id) AS total_employe, employe_address FrOM employe_info GROUP BY employe_address";  // group by is used to combine same values of;
    $result = $conn->query($sql);
    
    //display data on web page
    while($row = mysqli_fetch_array($result))
    {
        echo "<b>Total_employe : </b> " . $row["total_employe"]. "<b> employe_address: </b>" . $row["employe_address"]."<br>";
        echo "<br>";  
    } 

    mysqli_close($conn);

?>