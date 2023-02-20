<?php
    session_start();
    require "conn.php";

    function check($username, $password, $conn){ 
    //checking for white space
    if(preg_match('/\s/', $username) || preg_match('/\s/', $password)){
        header('location: login.php?mode=whitespace');
        exit();
    }
    //checking if input data matches the one in database and if it does then redirecting user to profile page
        $query = "select user_nickname from users where user_nickname = '".$username."'";
        $res = $conn->query($query);
    if($res->num_rows > 0){
        $_SESSION['username'] = $username;
        $query2 = "select user_password from users where user_password = '".$password."'";
        $res2 = $conn->query($query2);
    if($res2->num_rows > 0){
        $_SESSION['password'] = $password;
        header('location: profile.php');
        exit();
    }
    }
    header('location: login.php?mode=wrong');
    exit();   
    }
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    check($username, $password, $conn);
?>