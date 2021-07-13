<?php
ob_start();
session_start();
include_once('includes/config.php');
include_once('includes/functions.php');
include("class.phpmailer.php");
 
$id=$_REQUEST['uid'];
$stat=$_REQUEST['stat'];

 $sql="select * from `one_way_user` where user_id='$id' and status='$stat'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);

  $xx=$row['email_id'];
  $admin_id=$row['user_id'];
  $name=$row['name'];
  $admin_pass=$row['password'];
  $edate=$row['date1'];
  $userid=$row['user_id'];
  $language=$row['language'];
  $account_type=$row['account_type'];
  
   
  
 $sql1="select * from `one_way_user` where `user_id`='company' and `id`='1'";
 $res1=mysql_query($sql1);
 $row1=mysql_fetch_array($res1);
 $xx1=$row1['email_id'];





?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>One Way Messenger</title>
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
											    <td height="300" colspan="3" align="center" valign="top"><span style="background-image:url(images/bar_rpt.jpg); background-repeat:repeat-x; font-size:14px; color:#000000; font-weight:bold;"><?php echo 
			"Thank you :".$name."<br> Your trial regsitration is completed and need to be activated, please check your email.";
?></span><br><br>

<br>

<br></td>
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
