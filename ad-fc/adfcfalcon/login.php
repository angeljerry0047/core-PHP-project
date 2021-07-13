<?php

include("config.php");

?> 


<?php 

    //echo $_SERVER['REMOTE_ADDR'];

    $user=$_REQUEST['user'];
	$pwd=$_REQUEST['pwd'];
	
    $strSQL = "SELECT a.id,a.password,b.image,a.account_type,a.image,a.islogin,a.date1,b.date1 FROM one_way_user a,one_way_user b WHERE a.user_id='".$user."' and a.parent_id=b.id and a.status<>'inactive' and  a.status<>'pending' and  a.status<>'pending trial' and b.status<>'inactive' and  b.status<>'pending' and  b.status<>'pending trial' ";
	 //echo $strSQL;

    $objRS = mysql_query ($strSQL); //returns data from slaves
	
     $date=date('d-m-Y',mktime(date('H')+7,date('i')+1,date('s')));
	 $time=date('H:i:s',mktime(date('H')+7,date('i')+1,date('s')));
	 $lastlogin=$date." - ".$time;
	 $date1=date('Y-m-d',mktime(date('H')+7,date('i')+1,date('s')));
	
   while ($row = mysql_fetch_array($objRS, MYSQL_NUM)) 
   {  
    //echo $pwd;
	if($pwd==$row[1])
	{
	  if($row[5]!="1" || $row[0]=="1")
	  {
		  if(($row[6]>=$date1 || $row[6]=="") && ($row[7]>=$date1 || $row[7]==""))
		  {
		  	  
			  if($row[3]=="Reseller")
				echo $row[0]."#".$row[4];
			  else
				echo $row[0]."#".$row[2];
			  $SQL = "update one_way_user set islogin=1,lastlogin='".$lastlogin."' WHERE user_id='".$user."'";
		  }
		  else
		  {
		  		 echo "EXPIRE";
		  }
	  }
	  else
	  {
	      echo "REJECT";
	  }
      mysql_query ($SQL); 
	  
	}
	else
	   echo "CANCEL ";
	}   
	
	mysql_close($link);
?>