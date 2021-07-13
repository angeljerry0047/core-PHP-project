<?php
session_start();
$_SESSION['msg']="";
header('Location: start.php');
exit();
?>