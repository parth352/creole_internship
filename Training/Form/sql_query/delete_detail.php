<?php
    require "connection.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM user_list WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: ../home_page.php");
        session_start();
        $_SESSION['delete']= "Your data is deleted";
    }
    else{
        echo "Error : ".mysqli_error();
    }
?>