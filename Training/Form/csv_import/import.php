<?php
include 'connection.php';

if(isset($_POST["import"])){
    $filename =$_FILES["file"]["tmp_name"];

    if($_FILES["file"]["size"]>0){
        $file =fopen($filename, "r");

        while(($column =fgetcsv($file, 1000, ",")) !== FALSE){
           
            if(empty($column[1]) || empty($column[2]) || empty($column[3]) || empty($column[4]) || empty($column[5]))
            {
                echo "column field is not set";
                continue;
            }
            $sql = "INSERT INTO user_list (name,email,mo_number,address,image)VALUES ('".$column[1]."','".$column[2]."','".$column[3]."','".$column[4]."','".$column[5]."')";
            $result= mysqli_query($conn, $sql);
           
           if(!empty($result)){
            echo "CSV Data imported";
           }
           else{
            echo "CSV Data Not imported";
           }
        }
    }
}
?>

<form action="" method="post" name="uploadcsv" enctype="multipart/form-data">
    <div>
        <label>choose csv file</label>
        <input type="file" name="file" accept=".csv">
        <button type="submit" name="import">click me to import</button>
        
    </div>


</form>
<a href="export.php"><button>export</button></a>