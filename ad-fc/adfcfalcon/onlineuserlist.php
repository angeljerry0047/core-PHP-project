<?php

include("config.php");

?>
<style type="text/css">
<!--
.style1 {
   color: #FF0000;
   font-size: 16px;
}
.style2 {
   color: #336600;
   font-size: 16px;
}

-->
</style>

<?php 


   $mode=$_GET['m'];

   if($mode="" || $mode=="0")
      $strSQL = "SELECT * FROM one_way_user where id<>1 and islogin='1' order by islogin desc,user_id ";
   else
        $strSQL = "SELECT * FROM one_way_user where id<>1 and islogin='0' order by islogin desc,user_id ";
	//echo $strSQL;

    $objRS = mysql_query ($strSQL); //returns data from slaves

   $userlist="userlist";
   
   echo "<html><body bgcolor=\"#FFFFFF\" text=\"#000000\" leftmargin=\"5\" topmargin=\"5\" marginwidth=\"5\" marginheight=\"5\"><table border=0 width='100%'>";
   while ($row = mysql_fetch_object($objRS)) 
   {  
    
	    if($row->islogin=="1")
		{
	 //$userlist=$userlist."#".$row['user_id'];
	           echo "<tr><td width='60' ><span class='style2'>".$row->user_id."</span></td></tr>";
	    }	
		else
	    {
	 //$userlist=$userlist."#".$row['user_id'];
	           echo "<tr><td width='60' ><span class='style1'>".$row->user_id."</span></td></tr>";
	    }			   
	}   
	  echo "</table></body></html>";

    $SQL = "update one_way_user set islogin=0 where id!=1";
    mysql_query ($SQL); 

	mysql_close($link);
?>