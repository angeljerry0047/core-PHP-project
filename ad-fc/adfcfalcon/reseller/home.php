<?php
include('includes/session.php');

if(isset($_SERVER['QUERY_STRING']))
	$url=basename(__FILE__)."?".$_SERVER['QUERY_STRING'];
else
	$url=basename(__FILE__)."?cc=cc";
	
	
?>

<link href="includes/style.css" rel="stylesheet" type="text/css" />
<?php include_once("includes/header.php");?>
<div align="center"><?php echo $_SESSION['msg']; $_SESSION['msg']="";?>&nbsp;</div>
<table width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
<tr>
<td></td>
</tr>
<tr>
<td height="50" align="center" valign="middle" class="normal_text_bold">

Welcome to <?php echo $_SESSION['user_name']; ?> Administration </td>
</tr>
</table>
<?php include("includes/footer.php");?>
<?php exit()?>
ddddddddddddddddddddddddddddddddd