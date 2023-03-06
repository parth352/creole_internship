<?php
include 'connection.php';

//  if(isset($_POST["import"])){
    function file_get_contents_curl($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
    
        $data = curl_exec($ch);
        curl_close($ch);
    
        return $data;
    }

    $filename =$_FILES["file"]["tmp_name"];

    if($_FILES["file"]["size"]>0){
        $file =fopen($filename, "r");

        while(($column =fgetcsv($file, 1000, ",")) !== FALSE){
           
            if(empty($column[1]) || empty($column[2]) || empty($column[3]) || empty($column[4]) || empty($column[5]))
            {
                // echo "column field is not set";
                continue;
            }
               
            

            $sql = "INSERT INTO user_list (name,email,mo_number,address,image)VALUES ('".$column[1]."','".$column[2]."','".$column[3]."','".$column[4]."','".$column[5]."')";
            $result= mysqli_query($conn, $sql);

            $find_id_sql="SELECT * FROM user_list WHERE id=(SELECT LAST_INSERT_ID());";
            $response= mysqli_query($conn, $find_id_sql);
            $row = mysqli_fetch_assoc($response);
            $id = $row['id'];

            mkdir('../image/' . $id);                                       
            $folder    ="../image/".$id.'/'.$id.'.jpg';                      // moving file to following path
            // move_uploaded_file($tempname, $folder);

            $data = file_get_contents_curl($column[5]);
            // $image_location = '../image/'.$column[5];
        
            file_put_contents( $folder, $data );
            // echo "File downloaded!";
        }
        if(!empty($result)){
            header("Location: ../home_page.php");
           }
           else{
            header("Location: ../home_page.php");
           }
      
    }
    else{
        header("Location: ../home_page.php");
      
    }
//  }
?>