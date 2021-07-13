<?php

include("config.php");

?> 


<?php 


	  
     $uid=$_GET['u'];
	 $pid=$_GET['p'];
	 $color=$_GET['c'];
	 $font=$_GET['f'];
	 $size=$_GET['z'];
     $style=$_GET['t'];
	 $sound=$_GET['s'];


   $strSQL = "SELECT * FROM one_way_product_setup where `user_id`='".$uid."' and `product_id`='".$pid."'";
   $objRS = mysql_query ($strSQL); //returns data from slaves


   if($row = mysql_fetch_array($objRS)) 
   {  
   

			  $strSQL = "UPDATE `one_way_product_setup` SET `color`='#".$color."', `font`='".$font."', `size`='".$size."', `style`='".$style."', `sound`='".$sound."' where `user_id`='".$uid."' and `product_id`='".$pid."'";
			//echo $strSQL ;
			
			   mysql_query ($strSQL); 
   
   }
   else
   { 
  
			  $strSQL = "INSERT INTO `one_way_product_setup` ( `user_id` , `product_id` , `color` , `font` , `size` ,`style`, `sound` ) VALUES ('".$uid."', '".$pid."', '#".$color."', '".$font."', '".$size."', '".$style."', '".$sound."')";
			//echo $strSQL ;
			
			   mysql_query ($strSQL); 
    
   }
	
	 echo "OK";
	

	mysql_close($link);
?>