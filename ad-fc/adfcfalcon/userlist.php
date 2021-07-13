<?php

include("config.php");

?> 


<?php 





    $strSQL = "SELECT * FROM one_way_user";
	//echo $strSQL;

    $objRS = mysql_query ($strSQL); //returns data from slaves

   $userlist="userlist";
   while ($row = mysql_fetch_array($objRS)) 
   {  
    
	 $userlist=$userlist."#".$row['user_id'];
	
	}   
	echo $userlist;
	mysql_close($link);
?>