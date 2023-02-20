<?php
session_start();

function profile($username, $password){
    if(isset($username) && isset($password)){
        return;
    }else{
        header('location: login.php');
        exit();
    }
    }
    profile($_SESSION['username'], $_SESSION['password']);
?>