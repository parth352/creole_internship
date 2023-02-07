<?php include "connection.php";?>

<?php
    $sql= "CREATE TABLE employe_info (
           id int(10) AUTO_INCREMENT PRIMARY KEY,
           firstname VARCHAR(30) NOT NULL,
           lastname VARCHAR(30) NOT NULL,
           email VARCHAR(50) NOT NULL
    )";
    if(mysqli_query($conn, $sql)){
        echo "table created <br>";
    }
    else{
        echo "error in creating table";
    }

    mysqli_close($conn);
?>