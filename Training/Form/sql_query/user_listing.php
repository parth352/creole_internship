<?php 
    // session is already started in nav_bar_signout.php

    // if(!isset($_SESSION['user_role'])){
?>
    <!-- <script>
        $(document).ready(function(){                          /* This is used to hide button if user is not admin */
            $(".hide_button").hide();
        });
    </script> -->
<?php
    // }
    // include "connection.php";
    
    // // error_reporting(0);
    
    // $sql_view  ="SELECT * FROM user_list";
    // $result    =mysqli_query($conn, $sql_view); 

    // if (mysqli_num_rows($result) > 0)
    // {
    //     while($row=mysqli_fetch_assoc($result))
    //     {
    //         //  $image ="<img height="40" width="40" src="data:image;base64,'.base64_encode($rows['image']).'">";
    //     echo '<tr>
    //     <th scope="row" style ="padding-top:27px; color: red;">' .$row["id"].'</th>
    //     <td style ="padding-top:27px;">'.$row["name"].'</td>
    //     <td style ="padding-top:27px;">'.$row["email"].'</td>
    //     <td style ="padding-top:27px;">'.$row["mo_number"].'</td>
    //     <td style ="padding-top:27px;">'.$row["address"].'</td>
    //     <td> <img class="img" height="60" width="60" src="image/'. $row["id"] .'/' .$row['image'] .'"/> </td>
    //     <td class="hide_button"><a href = "update_list.php?id='.$row["id"].'" style="color:white; text-decoration:none;"><button class="btn btn-secondary" >Edit</button></a></td>
    //     <td class="hide_button"> <a href = "sql_query/delete_detail.php?id='.$row["id"].'" style="color:white; text-decoration:none;"><button class="btn btn-secondary">Delete</button></a></td>
    //     </tr>';
    //     }
    // }
    // else
    // {
    //     echo "Error ". mysqli_error($conn);
    // }
    // mysqli_close($conn);
?>



<?php 
    // session is already started in nav_bar_signout.php
    if(!isset($_SESSION['user_role'])){
?>
    <script>
        $(document).ready(function(){                          /* This is used to hide button if user is not admin */
            $(".hide_button").hide();
        });
    </script>
<?php
    }
    include "connection.php";
    
    // error_reporting(0);
    
    $sql_view  ="SELECT * FROM user_list";
    $result    =mysqli_query($conn, $sql_view); 

    if (mysqli_num_rows($result) > 0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            //  $image ="<img height="40" width="40" src="data:image;base64,'.base64_encode($rows['image']).'">";
        echo '<tr>
        <th scope="row" style ="padding-top:27px; color: red;">' .$row["id"].'</th>
        <td style ="padding-top:27px;">'.$row["name"].'</td>
        <td style ="padding-top:27px;">'.$row["email"].'</td>
        <td style ="padding-top:27px;">'.$row["mo_number"].'</td>
        <td style ="padding-top:27px;">'.$row["address"].'</td>
        <td> <img class="img" height="60" width="60" src="image/'. $row["id"] .'/' .$row['id'] .'.jpg"/> </td>
        <td class="hide_button"><a href = "update_list.php?id='.$row["id"].'" style="color:white; text-decoration:none;"><button class="btn btn-secondary" >Edit</button></a></td>
        <td class="hide_button"> <a href = "sql_query/delete_detail.php?id='.$row["id"].'" style="color:white; text-decoration:none;"><button class="btn btn-secondary">Delete</button></a></td>
        </tr>';
        }
    }
    else
    {
        echo "Error ". mysqli_error($conn);
    }
    mysqli_close($conn);
?>