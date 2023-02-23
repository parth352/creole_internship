<?php
    if(!empty($_POST['f_name']) && !empty($_POST['email']) && !empty($_POST['password'])){

        include 'connection.php';

        $f_name    = $_POST["f_name"];
        $email    = $_POST["email"];
        $password = md5($_POST['password']);

        $sql_filter="SELECT email FROM login_data where email = '$email'";
        $result = mysqli_query($conn, $sql_filter);
        $total_email = mysqli_num_rows($result);

            if ($total_email === 0) {
                $sql_insert= "INSERT INTO login_data (email,pass,name)VALUES ('$email','$password', '$f_name') ";
                $response =mysqli_query($conn, $sql_insert);

               if($response){
                //   $resp['status'] = true;
                //    echo json_encode($resp);
                //    exit;
                echo 1;
               }
               else{
                //    $resp['msg'] = "Sorry for in convinience You are not registered";
                //    $resp['status'] = false;
                //    echo json_encode($resp);
                //    exit;
                echo 2;
                   }
            }else {
                // $resp['msg'] = "You are already registered please Login";
                // $resp['status'] = false;
                // echo json_encode($resp);
                echo 2;
              }
    }
    else{
        $resp['msg'] = "Please fill all the details";
        $resp['status'] = false;
        echo json_encode($resp);
    }  
?> 