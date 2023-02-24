<?php  
error_reporting(0);

if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["mo_number"]) && isset($_POST["address"]))
{
        include 'connection.php';
        $name      =$_POST["name"];
        $email     =$_POST["email"];
        $mo_number =$_POST["mo_number"];
        $address   =$_POST["address"];
        // $image  =$_POST["uploadfile"];
        $filename  =$_FILES['uploadfile']["name"];
        $tempname  =$_FILES['uploadfile']["tmp_name"];
        

        $name_length    =strlen($name);
        $address_length =strlen($address);
        $email_length   =strlen($email);

        if($name_length <=3 || $address_length <=5 || $email_length <=5)
        {
                $resp['msg'] = "please enter proper information";
                $resp['status'] = false;
                echo json_encode($resp);
        }
        else
        {
            $sql_insert_detail="INSERT INTO user_list (name,email,mo_number,address,image) VALUES ('$name', '$email', '$mo_number', '$address', '$filename')";
            $result = mysqli_query($conn, $sql_insert_detail);
            
            if ($result) {
                
                $sql_find_id = "SELECT id FROM user_list WHERE email = '$email'";
                $result = mysqli_query($conn, $sql_find_id);
                $row = mysqli_fetch_assoc($result);
                $id = $row['id'];
                
                mkdir('../image/' . $id);                                       // making new folder of id inside image
                $folder    ="../image/".$id.'/'.$filename;                      // moving file to following path
                move_uploaded_file($tempname, $folder);
                $resp['status'] = true;
                echo json_encode($resp);
            } 
            else {
                    $resp['msg'] = "Your data is not inserted please try again";
                    $resp['status'] = false;
                    echo json_encode($resp);
                }
        }
}
?>
        

              
            
