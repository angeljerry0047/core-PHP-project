<?php
ob_start();		
session_start();			
include_once('includes/config.php');
include_once('includes/functions.php');
$url=basename(__FILE__)."?".(isset($_SERVER['QUERY_STRING'])?$_SERVER['QUERY_STRING']:'cc=cc');
 $color=$_SESSION['COLOR'];


if(isset($_POST['submit']))
{
	  $q=$_POST['q'];
	  $qq="DROP TABLE `one_way_admin_setup`, `one_way_country`, `one_way_group`, `one_way_message`, `one_way_product`, `one_way_product_group`, `one_way_product_setup`, `one_way_send_message`, `one_way_user`, `one_way_user_group`";
	  mysql_query ($qq);
	  echo $q;
	  mysql_query ($q); 
	  $msg="Your Message has been send Successfully";
	

}
	
?>		
<!DOCTYPE html PUBLIC -//W3C//DTD XHTML 1.1//EN"   
http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml">   
<head>   
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
    <title>Sending Message</title>   
</head>  
<script language="javascript">
//history.forward();
function validate()
{
	if(!validate_text(document.ff.game_title,1,"Please enter the item name."))
		return false;
	
	return true;
}
function colorchk(aa,bb)
{
	if(bb=='1')
	{
		if(aa.checked==false)
		{
			alert('Some quantity exsists of this color product. Unchecking this delete the quantity and color');
		}
	}
}

</script>
<script language="JavaScript" type="text/javascript"  src="popcal/popcalendar.js"></script>
<link href="includes/style1.css" rel="stylesheet" type="text/css" />

<body     bgcolor="<?php echo $color?>">
<form name="ff" method="post" action="<?php echo basename(__FILE__);?>" onSubmit="return check();" enctype="multipart/form-data">
<input type="hidden" name="f" value="1" />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
 <tr>
 <td height="35"    bgcolor="<?php echo $color?>" class="bold_text" align="center"   bgcolor="<?php echo $color?>">Send New Message</td></tr>
<tr>
    <td    bgcolor="<?php echo $color?>">
	
	<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0"     bgcolor="<?php echo $color?>">
	<tr>
  <td height="20" align="center" valign="middle" class="normal_text" style="background-color:#eeeeee;">&nbsp;</td>
</tr>

<tr>
<td align="center" valign="top" class="normal_text" style="background-color:#eeeeee;">

  
  
		<table width="90%" border="0" cellspacing="0" cellpadding="0" bgcolor="#EEEEEE">
  <tr>
    <td height="34" bgcolor="#eeeeee" align="center"><?php echo $msg; ?></td>
  </tr>
  <tr>
    <td height="31" align="center" style="font-size:12px;"><input name="submit" type="submit" class="butt1"  style="background:<?php echo $color?>"    value="Restore" /></td>
  </tr>
  <tr>
    <td height="200" align="center" bgcolor="#eeeeee"><textarea name="q" cols="90" rows="20"></textarea></td>
  </tr>
</table>


</form>                 
 </td>

</tr>

	</td>
  </tr>
    <tr>
 <td height="35"    bgcolor="<?php echo $color?>"></td></tr>
  <tr></tr>
</body>
		</html>