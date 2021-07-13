<?php
ob_start();
session_start();
include_once('config.php');
//include_once('includes/functions.php');
include("class.phpmailer.php");

 $sql1="select * from `one_way_user` where `user_id`='company' and `id`='1'";
		   $res1=mysql_query($sql1);
		   $row1=mysql_fetch_array($res1);
		   $xx1=$row1['email_id'];

if(isset($_POST['name1']))
{
	
	$name=isset($_POST['name1'])? $_POST['name1'] : ""; 
	//$email=isset($_POST['email'])? $_POST['email'] : ""; 
	
	if($name !="")
	{
	    $sql="select * from `one_way_user` where `user_id`='".$name."'";
		$record=mysql_query($sql) or die(mysql_error());
		if(mysql_num_rows($record)==0)
			{
				$_SESSION['msg']="Sorry Invalid User Name";
                 header('Location: start.php');
						exit();
				//header('Location: forgetpassword.php');
			}
		else
			{
				$row=mysql_fetch_object($record);
				$xx2=$row->email_id;
				$user_id=$row->user_id;
 				$password=$row->password;
               $name1=$row->name; 


				$Subject1 ="ADFC Falcon Account Information";

					$TemplateMessage.="<br>------------------------------------------------------------------------------------------------------------";
					$TemplateMessage.="<br><br>Welcome to ADFC Falcon";
					 
					$TemplateMessage.="<br><br>Dear ".$name1;
					
					$TemplateMessage.="<br><br>As per your request, please find below your unsername and password";
					 
					$TemplateMessage.="<br><br>username :".$user_id;
					$TemplateMessage.="<br><br>password:".$password;
				  
				  
				  $TemplateMessage.="<br><br>Regards";
 
					$TemplateMessage.="<br><br>ADFC Falcon team";
					$TemplateMessage.="<br><br>-------------------------------------------------------------------------------------------------------------";			 
					 
					$sendto = $xx2;
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
										
					
					$_SESSION['msg']=" Your password has been sent to your Email Address";
					//header('Location: start.php');
					//	exit();

			}
			//header('Location: forgetpassword.php');
	//exit();
		}	
 
}
if(isset($_POST['email']))
{
///	echo "dibakar";
	$email=isset($_POST['email'])? $_POST['email'] : ""; 
	//$email=isset($_POST['email'])? $_POST['email'] : ""; 
	
	if($email !="")
	{
	    $sql="select * from `one_way_user` where `email_id`='".$email."'";
		$record=mysql_query($sql) or die(mysql_error());
		if(mysql_num_rows($record)==0)
			{
				$_SESSION['msg']="Sorry Invalid Email ID";
			     header('Location: start.php');
						exit();
			}
		else
			{
				$row=mysql_fetch_object($record);
				$xx2=$row->email_id;
				$user_id=$row->user_id;
 				$password=$row->password;
                $name1=$row->name; 


					$Subject1 ="ADFC Falcon Account Information";

					$TemplateMessage.="<br>------------------------------------------------------------------------------------------------------------";
					$TemplateMessage.="<br><br>Welcome to ADFC Falcon";
					 
					$TemplateMessage.="<br><br>Dear ".$name1;
					
					$TemplateMessage.="<br><br>As per your request, please find below your unsername and password";
					 
					$TemplateMessage.="<br><br>username :".$user_id;
					$TemplateMessage.="<br><br>password:".$password;
				  
				  
				  $TemplateMessage.="<br><br>Regards";
 
					$TemplateMessage.="<br><br>ADFC Falcon team";
					$TemplateMessage.="<br><br>-------------------------------------------------------------------------------------------------------------";
 
				  
				  
				 
					$sendto = $xx2;
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
										
										 
					$_SESSION['msg']=" Your password has been sent to your email";
				 	//header('Location: start.php');
					//	exit();
					
			}
		}	
   // header('Location: forgetpassword.php');
	//exit();
}
?>

<html>
<head>
<title>ADFC Falcon</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="includes/style.css" rel="stylesheet" type="text/css">

<script>


function validate()
{
	if(document.ff.name.value=="" && document.ff.email.value=="")
	{
		alert("You should give either Email Id or User Name");
		return false;
	}
    return true;

}

</script>
</head>

<body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#9999FF">
    <td height="30" valign="middle" colspan="2">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="bold_text" align="center">ADFC Falcon</td>          
        </tr>
      </table></td>
  </tr>
  <tr><td colspan="2" height="4"></td></tr>
 </table>
<br><br>
<table width="448"  border="0" align="center"  cellpadding="0" cellspacing="0">
 
  <tr><td height="25" align="center" valign="middle"><p>&nbsp;</p>
    <p><font color="#FF0000"><?php echo $_SESSION['msg'];?></font></p></td></tr>
  <tr>
    <td width="80%"><table width="100%"  border="0" align="center" cellpadding="2" cellspacing="2">
          <form name="ff" action="<?php echo basename(__FILE__);?>" method="POST" onSubmit="return validate();" >
            
            <tr>
              <td align="right" class="normal_text" >&nbsp;</td>
              <td></td>
              <td align="left">&nbsp;</td>
            </tr>
            <tr>
              <td align="right" class="normal_text" >Enter Your email:</td>
              <td></td>
              <td align="left"><input name="email" type="text" class="" id="name2"/></td>
            </tr>
            <tr>
              <td align="right" class="normal_text" >&nbsp;</td>
              <td></td>
              <td align="left">OR</td>
            </tr>
            <tr>
              <td width="33%" align="right" class="normal_text" >Enter your username:</td>
              <td width="1%"></td>
              <td width="54%" align="left"><input name="name1" type="text" class="" id="name"/></td>
            </tr>
            
            <!--<tr>
              <td align="right" class="normal_text">Or Enter Email-ID: </td>
              <td></td>
              <td align="left"><input name="email" type="text" class="" id="email"/></td>
            </tr>-->
            <tr>
              <td class="form_field"></td>
              <td></td>
              <td align="right"></td>
            </tr>
            <tr>
				<td class="form_field"></td>
              <td></td>
              <td align="left">
              <input name="submit" type="submit" class="butt" id="submit" value="Send" >&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;            </td>
            </tr>
          </form>

    </table></td>
  </tr>
  <tr>
    <td colspan="2"><table cellSpacing="0" cellpadding="0" width="500" border="0" align="center" id="table1">
      
      <tr height="5">
        <td></td>
      </tr>
      <tr height="5">
        <td>
              <Br></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
