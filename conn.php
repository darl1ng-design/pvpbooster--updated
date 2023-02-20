<?php
$password = '';
$username = 'root'; 
$db = 'pvpbooster'; 
$server ='localhost';

$conn = new mysqli($server, $username, $password, $db);

if($conn->connect_error){
die("failed while trying to connect to db " . $conn->connect_error);
exit();
}


?>