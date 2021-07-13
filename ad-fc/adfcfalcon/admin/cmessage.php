<?php
ob_start();					
include('includes/session.php');
include_once('includes/config.php');
?> 

	<!DOCTYPE html PUBLIC -//W3C//DTD XHTML 1.1//EN"   
http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml">   
<head>   
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
    <title>Test for UTF-8</title>   
</head>   
<body>
<?php 

 
   	$strSQL = "truncate table one_way_message";

    mysql_query ($strSQL); 
	
	$_SESSION['msg']=message(" All Client Messages Are Cleared Successfully.",3);
	header('Location:home.php');
				exit();

?>
</body>
</html>