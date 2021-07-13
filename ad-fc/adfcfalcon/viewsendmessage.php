<?php

include("config.php");

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

   $last_id=$_REQUEST['lastid'];
   $userid=$_REQUEST['uid'];
   $productid=$_REQUEST['pid'];
   $date=date('d-m-Y',mktime(date('H')+7,date('i')+1,date('s')));
   $time=$_REQUEST['t'];	 
   
   $ls=$_REQUEST['s'];
   $le=$_REQUEST['e'];  
   
	// echo $userid;
	 
	 
if($productid=="")
	$strSQL = "SELECT `id`,`date`,`time`,message,product,language  FROM one_way_send_message where `id` > ".$last_id." and `date`='".$date."' and `from_user_id`=".$userid." and `time`<>'".$time."' group by message order by id asc limit 0,4";
else
   	$strSQL = "SELECT id,`date`,`time`,message,product,language FROM one_way_send_message where `id` > ".$last_id." and `date`='".$date."' and `from_user_id`=".$userid." and product='".$productid."' and `time`<>'".$time."'  group by message order by id asc limit 0,4";

//echo $strSQL;
	//echo $strSQL;
//id 	from_user_id 	to_user_id 	message 	date 	time 	product_id
    $objRS = mysql_query ($strSQL); //returns data from slaves

   $userlist="messagelist";
   while ($row = mysql_fetch_array($objRS)) 
   {  
    
	 $userlist=$userlist."#".$row['id']."~".$row['date']."~".$row['time']."~".$row['message']."~".$row['product']."~".$row['language'];
	  $lastid=$row['id'];
	}   
	echo $userlist;
	
	$SQL = "update one_way_message set viewed=1 WHERE viewed=0 and `to_user_id`=".$userid;
    mysql_query ($SQL); 
	
	$SQL = "update one_way_user set islogin=1 WHERE id='".$userid."'";
    mysql_query ($SQL); 
	  
	mysql_close($link);
?>
</body>
</html>