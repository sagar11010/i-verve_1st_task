<?php

include_once 'connection.php';
session_start();

// echo $_SESSION['user'];
if(!$_SESSION['u_id']){
    header("location:index.php");
}

// fetch the username form the data base via id;

$u_id= $_SESSION['u_id'];

$select_user = "SELECT * FROM user WHERE email='$u_id' OR phone='$u_id' ";
$get_user_result = mysqli_query($con,$select_user);
$Get_user = mysqli_fetch_array($get_user_result);

$_SESSION['user'] = $Get_user['username'];
