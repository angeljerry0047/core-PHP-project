<?php
//include('includes/session.php');
include('includes/functions.php');
include('includes/config.php');
session_start();
session_destroy();
$_SESSION['msg']=message("You have successfully logged out.",1);
header('Location: login.php');
?>