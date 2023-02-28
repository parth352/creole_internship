<?php
header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-type,Access-Control-Allow-Methods');

$headers =getallheaders();
$authcode =trim($headers['Authorization']);
$token =substr($authcode,7);

include 'connection.php';
$name =$_POST['name'];
$email =$_POST['email'];

require 'generate_token.php';
const KEY = 'thisismykey';


// Vefity token
$payload = Token::Verify($token, KEY);
print_r($payload);


?>