<?php
session_start();
include_once('includes/config.php');
include_once('includes/functions.php');
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in']=="")
{
	header('Location: login.php');
	exit();
}
?>