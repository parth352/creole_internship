<?php 
    include "connection.php";
    error_reporting(0);

    $sql_view = "SELECT * FROM user_list";
    $result = mysqli_query($conn, $sql_view); 

    if (mysqli_num_rows($result) > 0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            //  $image ="<img height="40" width="40" src="data:image;base64,'.base64_encode($rows['image']).'">";
            // echo "<b>Id: </b> " . $row["id"]. "  <b> Name: </b>  " . $row["firstname"]. " " . $row["lastname"]. "  <b>Email </b>  " .$row["email"]. "<br>";
            echo '<tr>
        <th scope="row" style ="padding-top:27px;">' .$row["id"].'</th>
        <td style ="padding-top:27px;">'.$row["name"].'</td>
        <td style ="padding-top:27px;">'.$row["email"].'</td>
        <td style ="padding-top:27px;">'.$row["mo_number"].'</td>
        <td style ="padding-top:27px;">'.$row["address"].'</td>
        <td> <img class="img" height="60" width="60" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/> </td>
        <td> <a href="update_list.php" ><button  class="btn btn-secondary" style ="margin-bottom:15px;" > Update </button></a> </td>
        <td> <button class="btn btn-secondary"> Delete </button> </td>
        </tr>';
        }
    }
    else
    {
        echo "Error ". mysqli_error($conn);
    }
    mysqli_close($conn);
?>
