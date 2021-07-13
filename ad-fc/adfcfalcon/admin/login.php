<?php
ob_start();
session_start();
include_once('config.php');
include_once('includes/functions.php');
$status=$_GET['status'];

if($status=="")
   $status=$_SESSION['msg'];
   
$date=date('Y-m-d',mktime(date('H')+7,date('i')+1,date('s')));
//$sports=isset($_POST['sports'])?$_POST['sports']:"";
if(isset($_SESSION['member_id']) && $_SESSION['member_id']!='')
{
	header('Location: home.php');
	exit();
}
if(isset($_POST['in_login_uid']))
{
	$sql="select * from one_way_user where user_id='".$_POST['in_login_uid']."' and password='".$_POST['in_login_password'].	
	"'";
	$record=mysql_query($sql) or die(mysql_error());
	if(mysql_num_rows($record)==0)
	{
		$status="Access denied. Incorrect login or password!";
	}
	else
	{
		
		
		   $row=mysql_fetch_object($record);
		
		   if($row->account_type=="Company")
		   {
				$_SESSION['user_id']=$row->user_id;
				$_SESSION['user_name']=$row->name." ".$row->family_name;
				$_SESSION['logged_in']="ABCD";	
				$_SESSION['id']=$row->id;	
				$_SESSION['type']=$row->account_type;
				//i$_SESSION['pid']=$row->parent_id;	
				$_SESSION['msg']="";
				header('Location: home.php');
				$_SESSION['COLOR']=$row->color;
				
				exit();
		  }
		  else
		  {
		       header('Location:login.php?status=Invalid%20User%20Name%20Or%20Password');
	           exit();
		  }
	}
	header('Location:login.php?status=Invalid%20User%20Name%20Or%20Password');
	exit();
}

?>

<html>
<head>
<title>Welcome to ADFC Falcon</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="includes/style.css" rel="stylesheet" type="text/css">
<script language="javascript" type="text/javascript" src="../includes/validator.js"></script>
<script>
/*function validate()
{
	if(!validate_text(document.ff.in_login_uid,1,"Please enter the Username"))
	
		return false;
		
	if(!validate_text(document.ff.in_login_password,1,"Please enter the Password"))
	
		return false;
	
	return true;
}*/
//-->

function validate()
{
	if(document.ff.in_login_uid.value=="")
	{
		alert("Username should not be blank");
		return false;
	}
	if(document.ff.in_login_password.value=="")
	{
		alert("Password should not be blank");
		return false;
	}

}
function check(string)
 {
 	
    var Chars = "0123456789";
   // var string=document.product_details.quentity.value;
  if(string.length < 100)
	{
    	for (var i = 0; i < string.length; i++)
    	{
       
       		if (Chars.indexOf(string.charAt(i)) == -1)
       		{
            alert("Please Provide Only Numeric values");
       	    document.ff.productprice.focus();
               document.ff.productprice.value="";
            return false;
       		}
    	}
	}
}
</script>
<script language="javascript">
	document.ff.in_login_uid.focus();
	function msg()
	{
		alert("Your Password will send to your Email Address");
		return true;
	}
</script>
</head>

<body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0">
<table width="100%"  height="100% "border="0" cellspacing="0" cellpadding="0">
  

  <tr >
    <td  align="center" valign="middle">
     
	
	   <table width="448"  border="0" align="center"  cellpadding="0" cellspacing="0">
 
  <tr>
    <td align="center" valign="middle" bgcolor="#6396FC">&nbsp;</td>
    <td height="25" align="center" valign="middle" bgcolor="#6396FC" style="color:#FFFFFF; font-size:32px;">
	  ADFC Falcon	  </td>
    <td align="center" valign="middle" bgcolor="#6396FC">&nbsp;</td>
  </tr>
  <tr>
    <td height="7" colspan="3" align="center" valign="middle"  bgcolor="#FFFFFF"></td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#6396FC">&nbsp;</td>
    <td height="25" align="center" valign="middle" bgcolor="#6396FC">
  <font color="#FFFFFF"><?php echo $status;?></font></td>
    <td align="center" valign="middle" bgcolor="#6396FC" width="4%">&nbsp;</td>
  </tr>
  
  <tr>
    <td  bgcolor="#6396FC">&nbsp;</td>
    <td>
	<table width="100%"  border="0" align="center" cellpadding="2" cellspacing="2">
          <form name="ff" action="<?php echo basename(__FILE__);?>" method="post" onSubmit="return validate();" >
            
            <tr>
              <td colspan="2" align="right" class="normal_text"  >&nbsp;</td>
              <td align="left">&nbsp;</td>
              </tr>
            <tr>
              <td colspan="2" align="right" class="normal_text" >Enter Username:</td>
              <td width="49%" align="left"><input name="in_login_uid" type="text" class="form_input" id="in_login_uid"/></td>
              </tr>
            
            <tr>
              <td colspan="2" align="right" class="normal_text">Enter Password:</td>
              <td align="left"><input name="in_login_password" type="password" class="form_input" id="in_login_password"/></td>
              </tr>
            <tr>
              <td width="39%" class="form_field"></td>
              <td width="12%"></td>
              <td align="right"></td>
              </tr>
            <tr>
				<td colspan="2" class="form_field" align="right">&nbsp;</td>
				<td align="left"><span class="form_field">
				  <input name="submit" type="submit" class="butt" style="background:#6396FC" id="submit" value="Login">
				</span></td>
              </tr>
            <tr>
              <td colspan="3" height="22" align="center"><a href="forgetpassword.php">Forgot Username or Password ?</a>  </td>
			  </tr>
          </form>
    </table>	</td>
    <td  bgcolor="#6396FC" width="4%">&nbsp;</td>
  </tr>
  <tr>
    <td width="4%"  bgcolor="#6396FC">&nbsp;</td>
    <td  bgcolor="#6396FC"></td>
    <td width="4%"  bgcolor="#6396FC">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4"  bgcolor="#6396FC">	</td>
  </tr>
</table>
    </td>    
  </tr>
  
</table>
<p><br>
</p>
<p>&nbsp;</p>
<p><br>
</p>

</body>
</html>
