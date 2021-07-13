<?php

include("config.php");

?> 


<?php 



    $user=$_REQUEST['user'];
	$pwd=$_REQUEST['pwd'];
	
    $strSQL = "SELECT * FROM one_way_user WHERE user_id='".$user."'";
	  //echo $strSQL;

    $objRS = mysql_query ($strSQL); //returns data from slaves


   while ($row = mysql_fetch_array($objRS)) 
   {  
    
	if($pwd==$row['password'])
	{
	  echo "OK";
	  $SQL = "update one_way_user set islogin=0 WHERE user_id='".$user."'";
      mysql_query ($SQL); 
	  
	}
	else
	   echo "CANCEL";
	}   
	
	mysql_close($link);
?>