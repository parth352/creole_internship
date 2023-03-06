<?php  
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mo_number']) && !empty($_POST['address'])){ 

        include 'connection.php';
        $id        =$_POST["hidden"];
        $name      =$_POST["name"];
        $email     =$_POST["email"];
        $mo_number =$_POST["mo_number"];
        $address   =$_POST["address"];
        // $image  =$_POST["uploadfile"];
        $filename  =$_FILES['uploadfile']["name"];
        $tempname  =$_FILES['uploadfile']["tmp_name"];
        // $folder    ="../image/".$id."/".$filename;
        $folder    ="../image/".$id."/".$id.".jpg";
        
        $sql_update_detail="UPDATE user_list SET name ='$name', email ='$email', mo_number ='$mo_number', address ='$address', image ='$filename' WHERE id ='$id' ";
        $result = mysqli_query($conn, $sql_update_detail);
                
        if ($result) {
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
    else{
        $resp['msg'] = "Please fill all the field";
        $resp['status'] = false;
        echo json_encode($resp);
        exit;
    }               
?>
              
            
