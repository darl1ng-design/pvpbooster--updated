<?php
require "conn.php";
   

function emptyCheck($email, $username, $license_key, $password, $conn){
    ///white space check 
    if(preg_match('/\s/', $email) || preg_match('/\s/', $username) || preg_match('/\s/', $password) || preg_match('/\s/', $license_key)){
        $status = 'whitespace'; 
        return $status;
        exit();
    }
    elseif(strlen($password) < 10){
        $status = 'short'; 
        return $status;
        exit();
    }

    //query that checke user data in database
    $query = "SELECT user_email, user_nickname, user_license_key from users where user_email = '".$email."' || user_nickname = '".$username."' || user_license_key = '".$license_key."'";
    $res = $conn->query($query);
    
    if($res->num_rows > 0){
        $status = 'taken';
        return $status;
        exit(); 
    } 
        $status = 'success';
        return $status;
        exit();
    }

$email = mysqli_real_escape_string($conn, $_POST['email']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$license_key = mysqli_real_escape_string($conn, $_POST['license-key']);

function insert($email, $username, $license_key, $password, $conn){
    //call to checking function
    $data = emptyCheck($email, $username, $license_key, $password, $conn);
    //checking for returned status from function above
    if($data == 'success'){
        $insert = "INSERT INTO users (user_email, user_nickname, user_password, user_license_key) values ('".$email."', '".$username."', '".$password."', '".$license_key."')";
        $result = $conn->query($insert);
    if($result){
        header('location:register.php?mode=success');
        exit();
    }
    }
    elseif($data == 'taken' || $data =='short' || $data == 'whitespace'){
        header("location: register.php??mode=$data");
        exit();
    }
}
insert($email, $username, $license_key, $password, $conn);

?>