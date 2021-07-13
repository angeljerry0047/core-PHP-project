<?php

include("config.php");

?> 


<?php 


   $userid=$_GET['uid'];
   $productid=$_GET['pid'];


	$strSQL = "SELECT * FROM one_way_product_setup where `user_id`='".$userid."' and `product_id`='".$productid."'";

//echo $strSQL;
	//echo $strSQL;
//id 	from_user_id 	to_user_id 	message 	date 	time 	product_id
    $objRS = mysql_query ($strSQL); //returns data from slaves

   $userlist="";
   while ($row = mysql_fetch_array($objRS)) 
   {  
    
	 $userlist=$row['product_id']."#".$row['color']."#".$row['font']."#".$row['size']."#".$row['style']."#".$row['sound'];
	 
	}   
	echo $userlist;
	
	mysql_close($link);
?>