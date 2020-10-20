<?php

session_start();

session_destroy();

unset($_SESSION['u_id']);
unset($_SESSION['user']);//seesion unset and clear all data
header("location:index.php");// redirect to main page



?>
