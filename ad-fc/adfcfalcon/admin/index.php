<?php
session_start();
$_SESSION['msg']="";
header('Location: login.php');
?>