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


	  
     $from=$_GET['f'];

	 $message=$_GET['m'];
	 
	 $date=date('d-m-Y',mktime(date('H')+7,date('i')+1,date('s')));
	 $time=date('H:i:s',mktime(date('H')+7,date('i')+1,date('s')));
	 
	$product_id=$_GET['pi'];
   $product_name=$_GET['pn'];
$language=$_GET['l'];
    
	 $strSQL = "INSERT INTO `one_way_send_message` ( `from_user_id` , `to_user_id` , `message` , `date` , `time` , `product` ,`language` )
VALUES ('".$from."', '1', '".$message."', '".$date."', '".$time."', '".$product_id."', '".$language."')";
   mysql_query ($strSQL); 
		//echo ($strSQL);
	
   $SQL = "SELECT distinct one_way_user_group.user_id FROM one_way_user_group,one_way_product_group where one_way_user_group.group_id=one_way_product_group.group_id and one_way_product_group.product_id=".$product_id ;
	
	$objRS = mysql_query ($SQL); //returns data from slaves
    //echo ($strSQL);

   while ($row = mysql_fetch_array($objRS)) 
   {  
	//echo $row[0];
  $strSQL = "INSERT INTO `one_way_message` ( `from_user_id` , `to_user_id` , `message` , `date` , `time` , `product` ,`language` )
VALUES ('".$from."', '".$row[0]."', '".$message."', '".$date."', '".$time."', '".$product_id."', '".$language."')";
   mysql_query ($strSQL); 
    

	
	}   
	 echo "OK";
	//returns data from slaves

	mysql_close($link);
	
?>
</body>   
</html>  