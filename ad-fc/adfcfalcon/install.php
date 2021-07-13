
<?php

include("config.php");

?> 


<?php 
	header("Cache-control: private, no-cache");
	header("Expires: Mon, 26 Jun 1997 05:00:00 GMT");
	header("Pragma: no-cache");
	header ("Last-Modified: " . gmdate ("D, d M Y H:i:s") . " GMT");	
    //echo $_SERVER['REMOTE_ADDR'];

    $user=$_REQUEST['user'];
	$pwd=$_REQUEST['pwd'];
	
    $strSQL = "SELECT a.id,a.password,b.image,a.account_type,a.image,a.islogin,b.street,b.city,b.phone,a.street,a.city,a.phone,b.province,a.province,b.country,a.country FROM one_way_user a,one_way_user b WHERE a.user_id='".$user."' and a.parent_id=b.id";
	// echo $strSQL;

    $objRS = mysql_query ($strSQL); //returns data from slaves


   while ($row = mysql_fetch_array($objRS)) 
   {  
   // echo $row[1];
	if($pwd==$row[1])
	{
	 
		  if($row[3]=="Reseller")
			echo $row[0]."#".$row[4]."#".$row[9]."#".$row[10]."-".$row[13]."#".$row[15]."#".$row[11];
		  else
			//echo $row[0]."#".$row[2]."#".$row[9]."#".$row[10]."-".$row[13]."#".$row[15]."#".$row[11];
			echo $row[0]."#".$row[2]."#".$row[6]."#".$row[7]."-".$row[12]."#".$row[14]."#".$row[8];
		 	
      mysql_query ($SQL); 
	  
	}
	else
	   echo "CANCEL";
	}   
	
	mysql_close($link);
?>