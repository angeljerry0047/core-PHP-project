<?php

include("config.php");

?> 


<?php 


   $userid=$_GET['uid'];

//echo "dibakar nandi";


	$strSQL = "SELECT a.product_id,b.name,a.color,a.font,a.size,a.style,a.sound FROM one_way_product_setup a,one_way_product b where `user_id`='".$userid."' and a.product_id=b.id";

//echo $strSQL;
	//echo $strSQL;
//id 	from_user_id 	to_user_id 	message 	date 	time 	product_id
    $objRS = mysql_query ($strSQL); //returns data from slaves

   $userlist="prosuctsetup";
   
   while ($row = mysql_fetch_row($objRS)) 
   {  
    
	 $userlist=$userlist."~".$row[0]."#".$row[1]."#".$row[2]."#".$row[3]."#".$row[4]."#".$row[5]."#".$row[6];;
	 
	}  
	echo $userlist;
	
	mysql_close($link);
?>