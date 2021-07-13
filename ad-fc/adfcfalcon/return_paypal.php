<?php
ob_start();
session_start();					
include_once('config.php');
include_once('includes/functions.php');
include("class.phpmailer.php");
//include('includes/session.php');
$url=basename(__FILE__)."?".(isset($_SERVER['QUERY_STRING'])?$_SERVER['QUERY_STRING']:'cc=cc');

//print_r($_SESSION);


   //-----------------SQL------------//  
  
  if($_SESSION['renew']=="True")
  {
   
		   $sql1="select * from `one_way_user` where `user_id`='company' and `id`='1'";
		   $res1=mysql_query($sql1);
		   $row1=mysql_fetch_array($res1);
		   $xx1=$row1['email_id'];
  
  
            $userid=$_SESSION['signup_userid'];
			$date=$_SESSION['signup_date'];
			
			$date1=$_SESSION['signup_date1'];
		    $edate=$date1;
			$language=$_SESSION['language'];
			
			$group_id= $_SESSION['group'];
			
			
			
			 $row=mysql_fetch_object(mysql_query("select * from one_way_user where user_id='".$userid."'"));
	         $password=$row->password;
			
			
			
		    $sql="update`one_way_user` set  `date`='$date',`date1`='$date1' where user_id='".$userid."'";
		    $res=mysql_query($sql) or die(mysql_error());
			    
		    $name=$_SESSION['name'];
		
		    if(isset($name))
			{      
				  
				     $Subject1 ="Subscription has been Renewed Successfully";

					
                   $e=$_SESSION['signup_date1'];
                   $edate=substr($e,8,2)."-".substr($e,5,2)."-".substr($e,0,4);				   
				   $TemplateMessage="<br><br>-------------------------------------------------------------------------------------------------------------------------------------------";
					$TemplateMessage.="<br><br>Welcome to ADFC Falcon";
					 
					$TemplateMessage.="<br><br>Dear ".$_SESSION['name'];
					$TemplateMessage.="<br><br>Thank you for renewing your subscription of ADFC Falcon service";
					$TemplateMessage.="<br><br>Your subscription period to ADFC Falcon service will expire ".$edate;
					$TemplateMessage.="<br><br>your package details is ".$_SESSION['caption'];
					$TemplateMessage.="<br><br>your username and password are:";
					 
					$TemplateMessage.="<br><br>username :".$userid;
					$TemplateMessage.="<br>password:".$password;
					 
					
					   
					    if($language=="english")
						 $TemplateMessage.="<br><br>To start ADFC Falcon , please <a href='http:/www.ad-fc.net/adfcfalcon/ADFCFalcon-English.exe'>click here</a> to download the application";
					   else
						 $TemplateMessage.="<br><br>To start ADFC Falcon , please <a href='http://www.ad-fc.net/adfcfalcon/ADFCFalcon-Arabic.exe'>click here</a> to download the application";
					 
if($account_type=="Reseller")
 $TemplateMessage.="<br><br>To access your administration panel, please <a href='http://www.ad-fc.net/adfcfalcon/reseller/'>click here</a> .";
						$TemplateMessage.="<br><br>for ADFC Falcon installtion, <a href='http://www.ad-fc.net/adfcfalcon/installation.htm'>Click here</a>";	
					$TemplateMessage.="<br><br>Regards";
					 
					$TemplateMessage.="<br><br>ADFC Falcon team";
				;	
					$TemplateMessage.="<br><br>-------------------------------------------------------------------------------------------------------------------------------------------";


				   
				   
				   	$sendto = $_SESSION['email'];
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
  else
  {
		  
		  
		   
		   $name=$_SESSION['signup_name'];
		   $fname=$_SESSION['signup_fname'];
		   $userid=$_SESSION['signup_userid'];
		   
		   
		   
		   $date=$_SESSION['signup_date'];
		   $date1=$_SESSION['signup_date1'];
		   
		   $group_id=$_SESSION['group'];
		   
		   
		   $phoneno=$_SESSION['signup_phone'];
		   $street=$_SESSION['signup_street'];
		   $city=$_SESSION['signup_city'];
		   $province=$_SESSION['signup_province'];
		   $country=$_SESSION['signup_country'];
		   $password=$_SESSION['signup_pass'];
		   $email=$_SESSION['signup_email'];
		   $account=$_SESSION['signup_account'];
		   $parent=$_SESSION['signup_parent'];
		   $language=$_SESSION['signup_language'];
		   $muser=$_SESSION['signup_muser'];
		   $hname=$_SESSION['signup_hname'];
		   $credit=$_SESSION['signup_cnumber'];
		   $created_by=$_SESSION['signup_creatid'];
		   $status='active';
		   $ip=$_SESSION['signup_ip'];
		   
		    $group_id=$_SESSION['group'];
		///   echo $language;
		   
		   $package=$_SESSION['package'];
		   
		 
		   
		   
		   $sql1="select * from `one_way_user` where `user_id`='company' and `id`='1'";
		 $res1=mysql_query($sql1);
		 $row1=mysql_fetch_array($res1);
		 $xx1=$row1['email_id'];
		   
		 $sql="INSERT INTO `one_way_user` (`name`,`user_id`,`password`,`account_type`,`parent_id`,`language`,`max_no_of_user`,	`credit_card_no`,`card_holder_name`,`email_id`,`status`,`created_by`,`family_name`,`phone`,`street`,`city`,`province`,`country`,`ipaddress`,`date`,`date1`) VALUES ('$name','$userid','$password','$account','$parent','$language','$muser','$credit','$hname','$email','$status','$created_by','$fname','$phoneno','$street','$city','$province','$country','$ip','$date','$date1')";
		 
		 
		 
		 $sql1="select * from one_way_user where user_id='$userid'";
	     $record=mysql_query($sql1) or die(mysql_error());
	     if(mysql_num_rows($record)==0)
	     {
		        $res=mysql_query($sql) or die(mysql_error());
		 
	         	$uid=mysql_insert_id();
						
				
				$account_type=$account;
		
						  
				$sql="insert into `one_way_user_group` (`user_id`,`group_id`) VALUES ('$uid','$group_id')";
				$res=mysql_query($sql);
	    
		 
		          	  $account_type=$account;
 
// $id=mysql_insert_id(); 
 /*$sql2="update printing_billing set `status`='1' where `billing_id`='$orderid'";
 $res2=mysql_query($sql2)  or die(mysql_error());

 $sql22="insert into `print_tbl_orderdetails` (`orderid`,`fid`,`pid`,`psid`,`ptid`,`bid`) values ('$id','$fid1','$pid1','$psid1','$ptid1','$bid1') ";
$res22=mysql_query($sql22) or die(mysql_error());
*/
            if(isset($name))
			{      
				  
				     $Subject1 ="-------Registration Successfull-----";

					
					$e=$_SESSION['signup_date1'];
					$edate=substr($e,8,2)."-".substr($e,5,2)."-".substr($e,0,4);				   
				   $TemplateMessage="<br><br>-------------------------------------------------------------------------------------------------------------------------------------------";
					$TemplateMessage.="<br><br>Welcome to ADFC Falcon";
					 
					$TemplateMessage.="<br><br>Dear ".$name;
					$TemplateMessage.="<br><br>Thank you for your subscription to ADFC Falcon service";
					$TemplateMessage.="<br><br>Your subscription period to ADFC Falcon service will expire ".$edate;
					$TemplateMessage.="<br><br>your package details is ".$_SESSION['caption'];
					$TemplateMessage.="<br><br>your username and password are:";
					 
					$TemplateMessage.="<br><br>username :".$userid;
					$TemplateMessage.="<br>password:".$password;
					 
					 
					
					   
					    if($language=="english")
						 $TemplateMessage.="<br><br>To start ADFC Falcon , please <a href='http://www.ad-fc.net/adfcfalcon/ADFCFalcon-English.exe'>click here</a> to download the application";
					   else
						 $TemplateMessage.="<br><br>To start ADFC Falcon , please <a href='http://www.ad-fc.net/adfcfalcon/ADFCFalcon-Arabic.exe'>click here</a> to download the application";
					 
if($account_type=="Reseller")
 $TemplateMessage.="<br><br>To access your administration panel, please <a href='http://www.ad-fc.net/adfcfalcon/reseller/'>click here</a> .";
						$TemplateMessage.="<br><br>for ADFC Falcon installtion, <a href='http://www.ad-fc.net/adfcfalcon/installation.htm'>Click here</a>";	
					$TemplateMessage.="<br><br>Regards";
					 
					$TemplateMessage.="<br><br>ADFC Falcon team";

					$TemplateMessage.="<br><br>
					-------------------------------------------------------------------------------------------------------------------------------------------";


				   
				   
				   
				   
				
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
					
				//header("location:login.php");
			}
			
	}
	
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADFC Falcon</title>
<link href="includes/style.css" rel="stylesheet" type="text/css" />
<script src="bannerad3.js" type="text/javascript"></script>
</head>
<body bgcolor="#9999FF">
<body>
	
	<table width="1000" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td align="center" style="background-image:url(images/bg_rpt.gif); background-repeat:repeat-y; background-color:#9999FF">
			<table width="780" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
				<!--head start -->
				<tr>
				  <td height="80" align="left" valign="top" style="background-color:#9999FF;">&nbsp;</td>
				</tr>
				<!--head end -->
				<!--body start -->
	 			 <tr>
					<td align="left" valign="top" style="background-color:#9999FF">
					  <form name="reg" action="return_paypal.php" enctype="multipart/form-data" method="post">
						<table align="center" width="700" border="0" cellspacing="0" cellpadding="0" bgcolor="#E4F6FA">
							<tr>
		             <td width="9" height="27" align="left" valign="top">&nbsp;</td>
                                  	<td width="493" height="100" align="centre" style="background-image:url(images/bar_rpt.jpg); background-repeat:repeat-x; font-size:14px; color:#FFFFFF; font-weight:bold;">&nbsp;</td>
                                    <td height="27" width="198" align="right" valign="top"></td>
						  <tr>					  		                  </tr>


											  <tr>
											    <td height="300" colspan="3" align="center" valign="top"><span style="background-image:url(images/bar_rpt.jpg); background-repeat:repeat-x; font-size:14px; color:#000000; font-weight:bold;"><?php echo "Thanking You :: ";echo $_SESSION['name']."[".$userid."]";
												
  if($_SESSION['renew']=="True")
 	echo"<br> Your subscription has been renewed Sucessfully<br>And your username and Password have been send to your Email Address"; 
  else	
	echo"<br> Your Registration has been Completed<br>And your username and Password have been send to your Email Address"; 

  	

?></span><br><br>

<?php

   if($language=="english")
     echo "<br>To start ADFC Falcon , please <a href='http://www.ad-fc.net/adfcfalcon/ADFCFalcon-English.exe'>click here</a> to download the application";
   else
     echo "<br>To start ADFC Falcon , please <a href='http://www.ad-fc.net/adfcfalcon/ADFCFalcon-Arabic.exe'>click here</a> to download the application";

 ?>
<br/>
<br/></td>
											  </tr>
											
											
              </table> 
					  </form> </td>
							 
							</tr><!--footer start -->
				<tr>
					<td style="background-color:#9999FF" height="80"></td>
				</tr>
				<!--footer start -->
					  </table></td>
	  			</tr>
				<!--body end -->
				
				
			</table>
	
	
</body>
</html>
