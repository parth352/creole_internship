<?php include "connection.php";?>

<?php
$sql = "INSERT INTO employe_info (firstname, lastname, email)
VALUES ('parth', 'patel', '123@gmail.com')";

if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);   // this method will return answer 0 if no new row is being inserted/updated
    echo "last inserted id : ". $last_id;
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
    mysqli_close($conn);
 ?>