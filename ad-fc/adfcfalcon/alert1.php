<?php
ob_start();
ob_start();

include("config.php");
include("class.phpmailer.php");
?> 


<?php 



		   $sql1="select * from `one_way_user` where `user_id`='company' and `id`='1'";
		   $res1=mysql_query($sql1);
		   $row1=mysql_fetch_array($res1);
		   $xx1=$row1['email_id'];

        $row=mysql_fetch_object(mysql_query("select * from `one_way_admin_setup` where id='1'"));
		$talert=$row->talert;
		$salert=$row->salert;

  $tdate=date('Y-m-d',mktime(0,0,0,date('m'), date('d')+$talert,date('Y')));
   $sdate=date('Y-m-d',mktime(0,0,0,date('m'), date('d')+$salert,date('Y')));
   
    $tdate1=date('Y-m-d',mktime(0,0,0,date('m'), date('d')+$talert,date('Y')));
   $sdate1=date('Y-m-d',mktime(0,0,0,date('m'), date('d')+$salert,date('Y')));


 $dt=date('d-m-Y',mktime(date('H')+7,date('i')+1,date('s')));
 $dt5=date('Y-m-d',mktime(date('H')+7,date('i')+1,date('s')));
 
  $sql1="update `one_way_admin_setup` set alert='".$dt."' where `id`='1'";
  $res1=mysql_query($sql1);

 $sql1="INSERT INTO  `one_way_alert` (`date`) VALUES ('".$dt5."')";
  $res1=mysql_query($sql1);
 

?>






<link href="includes/style.css" rel="stylesheet" type="text/css" />

<div align="center">&nbsp;</div>
<table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
<tr>
<td></td>
</tr>
<tr>
  <td height="50" align="center" valign="middle" class="normal_text_bold">Sending Alert </td>
</tr>
<tr>
<td height="50" align="center" valign="middle" class="normal_text_bold"><?php echo "Current Date : ".$dt." # Expiry Date : ".$tdate."  # Subscription Date : ".$sdate;  ?></td>


</tr>

<?Php 

$strSQL = "SELECT * FROM one_way_user where id<>1";
	//echo $strSQL;
    $objRS = mysql_query ($strSQL); //returns data from slaves
  
    $userlist="userlist";
   while ($row = mysql_fetch_object($objRS)) 
   {  
   $date1=$row->date1;
		    
  
         if($row->status=="trial")
		 {
                  if($tdate==$date1)
				  { 		      
				  // echo $sdate." ".$tdate." ".$date1."-T<br>";
				   
				   
		
				   
				   echo "<tr>
<td height='50' align='center' valign='middle' class='normal_text_bold'>Name : ".$row->user_id ." - Expiry Date : ".$date1." - Trial</td></tr>
";
				   
				   $Subject1 ="Trial Period is going to Expire ";

				   
			
						$TemplateMessage="<br>--------------------------------------------------------------------------------------------------------------------------------------------";
						$TemplateMessage.="<br>Welcome to ADFC Falcon";
						 
						 $e=$row->date1;
                         $edate=substr($e,8,2)."-".substr($e,5,2)."-".substr($e,0,4);
						 
						 
						$TemplateMessage.="<br><br>Dear ".$row->name;
						$TemplateMessage.="<br><br>Your free trial period for ADFC Falcon service will expire  on ".$edate;
						
						$TemplateMessage.="<br><br>your username and password are:";
						 
						$TemplateMessage.="<br><br>username :".$row->user_id;
						$TemplateMessage.="<br><br>password:".$row->password;
						 
						$TemplateMessage.="<br><br>If you would like to continue using ADFC Falcon service, please <a href='http://www.ad-fc.net/adfcfalcon/renew.php'>clikc here</a> to subscribe";
						 
						$TemplateMessage.="<br><br>Regards";
						 
						$TemplateMessage.="<br><br>ADFC Falcon team";
						$TemplateMessage.="<br><br>N.B:please use your current username and password to access";
						$TemplateMessage.="<br><br>--------------------------------------------------------------------------------------------------------------------------------------------";
						
									
									
			

					$sendto = $row->email_id;
					$subject = $Subject1;
					$message = stripslashes($TemplateMessage);;
					$header = "From: adfcfalcon@".$_SERVER["SERVER_NAME"]."\n";
					$header .= "Content-Type: text/html; charset=iso-8859-1\n";
					
					$message = stripslashes($TemplateMessage);;
					$subject=$Subject1;
					// Send
					
					//ini_set("sendmail_from","adfcfalcon@".$_SERVER["SERVER_NAME"]);
					
					if (mail($sendto,$subject,$message,$header))
					{
					 echo 'Mail sent!';
					} else
					{
					 echo 'Error! Mail was not sent.';
					};					
					
				    $sendto = $xx1;
					$subject = $Subject1;
					$message = stripslashes($TemplateMessage);;
					$header = "From: adfcfalcon@".$_SERVER["SERVER_NAME"]."\n";
					$header .= "Content-Type: text/html; charset=iso-8859-1\n";
					
					$message = stripslashes($TemplateMessage);;
					$subject=$Subject1;
					// Send
					
					//ini_set("sendmail_from","adfcfalcon@".$_SERVER["SERVER_NAME"]);
					
					if (mail($sendto,$subject,$message,$header))
					{
					 echo 'Mail sent!';
					} else
					{
					 echo 'Error! Mail was not sent.';
					};
					 
				}
		 }    
	     if($row->status=="active")
		 {
		   
			
		          if($sdate==$date1)
				  {  
				    
				 // echo $sdate." ".$tdate." ".$date1."-S<br>";
				  echo "<tr>
<td height='50' align='center' valign='middle' class='normal_text_bold'>Name : ".$row->user_id ." - Expiry Date : ".$date1." - Subscription</td></tr>
";
				   
					$Subject1 ="Your Subscription is going to Expire ";

						$TemplateMessage="<br><br>--------------------------------------------------------------------------------------------------------------------------------------------";
						$TemplateMessage.="<br><br>Welcome to ADFC Falcon";
						
						 $e=$row->date1;
                         $edate=substr($e,8,2)."-".substr($e,5,2)."-".substr($e,0,4);
						 
						$TemplateMessage.="<br><br>Dear ".$row->name;
						$TemplateMessage.="<br><br>Your subscription period for ADFC Falcon service  will expire  on ".$edate;
						
						$TemplateMessage.="<br><br>your username and password are:";
						 
						$TemplateMessage.="<br><br>username :".$row->user_id;
						$TemplateMessage.="<br><br>password:".$row->password;
						 
						$TemplateMessage.="<br><br>If you would like to continue using ADFC Falcon service, please <a href='http://www.ad-fc.net/adfcfalcon/renew.php'>clikc here</a> to subscribe";
						 
						$TemplateMessage.="<br><br>Regards";
						 
						$TemplateMessage.="<br><br>ADFC Falcon team";
						$TemplateMessage.="<br><br>N.B:please use your current username and password to access";
							$TemplateMessage.="<br><br>--------------------------------------------------------------------------------------------------------------------------------------------";
								
				

					$sendto = $row->email_id;
					$subject = $Subject1;
					$message = stripslashes($TemplateMessage);;
					$header = "From: adfcfalcon@".$_SERVER["SERVER_NAME"]."\n";
					$header .= "Content-Type: text/html; charset=iso-8859-1\n";
					
					$message = stripslashes($TemplateMessage);;
					$subject=$Subject1;
					// Send
					
					//ini_set("sendmail_from","adfcfalcon@".$_SERVER["SERVER_NAME"]);
					
					if (mail($sendto,$subject,$message,$header))
					{
					 echo 'Mail sent!';
					} else
					{
					 echo 'Error! Mail was not sent.';
					};					
					
				    $sendto = $xx1;
					$subject = $Subject1;
					$message = stripslashes($TemplateMessage);;
					$header = "From: adfcfalcon@".$_SERVER["SERVER_NAME"]."\n";
					$header .= "Content-Type: text/html; charset=iso-8859-1\n";
					
					$message = stripslashes($TemplateMessage);;
					$subject=$Subject1;
					// Send
					
					//ini_set("sendmail_from","adfcfalcon@".$_SERVER["SERVER_NAME"]);
					
					if (mail($sendto,$subject,$message,$header))
					{
					 echo 'Mail sent!';
					} else
					{
					 echo 'Error! Mail was not sent.';
					};
					
					
				}
		 
		 }  
		 
	
	}   



?>

</table>






































