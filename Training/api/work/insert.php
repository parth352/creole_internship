<?php
header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-type,Access-Control-Allow-Methods');

// include 'connection.php';
// $data =json_decode(file_get_contents("php://input"), true);

include 'validate_token.php';


if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["address"]) || empty($_POST["phone"])){
    $response = array(
        "type" => "error",
        "status" => false,
        "message" => "please fill all the field."
    );
    echo json_encode($response);
    exit();
}

if (!isset($_POST["image"])) {
    // echo jason_encode("hello");
    // Get Image Dimension
    $fileinfo = @getimagesize($_FILES["image"]["tmp_name"]);
    
    $allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg"
    );
    // Get image file extension
    $file_extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
    
    // Validate file input to check if is not empty
    if (! file_exists($_FILES["image"]["tmp_name"])) {
        $response = array(
            "type" => "error",
            "status" => false,
            "message" => "Choose image file to upload."
        );
        echo json_encode($response);
        exit();
    }    // Validate file input to check if is with valid extension
    else if (! in_array($file_extension, $allowed_image_extension)) {
        $response = array(
            "type" => "error",
            "status" => false,
            "message" => "Upload valid images. Only PNG and JPEG are allowed."
        );
        echo json_encode($response);
        exit();
        
    }    // Validate image file size
    else if (($_FILES["image"]["size"] > 2000000)) {
        $response = array(
            "type" => "error",
            "status" => false,
            "message" => "Image size exceeds 2MB"
        );
        echo json_encode($response);
        exit();
    }  
}

$name = $_POST['name'];
$email = $_POST['email'];
$address =$_POST['address'];
$phone =$_POST['phone'];
$filename  =$_FILES['image']["name"];

if(strlen($phone)<10)
{
    $response = array(
        "type" => "error",
        "status" => false,
        "message" => "length of mobile is not valid"
    );
    echo json_encode($response);
    exit();

}

      $sql_filter= "SELECT * FROM basic_info WHERE email='$email'";           // finding duplicate email
      $result =mysqli_query($conn, $sql_filter);
      $num_row =mysqli_num_rows($result);
    //   $row =mysqli_fetch_assoc($result);
    if($num_row>=1){
        $response = array(
            "type" => "error",
            "status" => false,
            "message" => "you are already registered"
        );
        echo json_encode($response);
        exit();
    }


$sql= "INSERT INTO basic_info(name,email,address,phone_number,image) VALUES('$name','$email','$address','$phone','$filename')";
//    $result =mysqli_query($conn, $sql);

   if(mysqli_query($conn, $sql)){
    //    $output =mysqli_fetch_all($result, MYSQLI_ASSOC);
    //    echo json_encode($output);
    echo json_encode(array('message'=>'data inserted sucessfully','status'=>true));
 
   }else
   {
       echo json_encode(array('message'=>'data not found','status'=>true));
   }


?>