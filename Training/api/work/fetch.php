<?php
 header('content-type: application/json');
 header('Acess-Control-Allow-Origin: *');
include 'connection.php';

$sql= "SELECT * FROM basic_info";
    $result =mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){
        $output =mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo json_encode($output);
    }else
    {
        echo json_encode(array('message'=>'not found'));
    }

?>