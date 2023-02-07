
        <?php include "connection.php";?>

        <!-- <h1>MIN/MAX function in sql</h1> -->

        <?php
                $sql = "SELECT  MAX(firstname) as biggest_name FROM employe_info";
                $result = $conn->query($sql);
                //display data on web page
                while($row = mysqli_fetch_array($result)){
                    echo "biggest name :". $row['biggest_name'];
                    echo "<br />";  
                } 
                
                $sql1 = "SELECT  MIN(firstname) as smallest_name FROM employe_info";
                $result = $conn->query($sql1);
                //display data on web page
                while($row = mysqli_fetch_array($result)){
                    echo "Smallest name :". $row['smallest_name'];
                    echo "<br />";  
                }  
        ?>
