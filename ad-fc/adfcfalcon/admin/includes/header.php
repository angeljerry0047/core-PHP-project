<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
include_once('session.php');

$color=$_SESSION['COLOR'];
?>
<head>
<title><?php echo "Welcome To ADFC Falcon";?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="javascript" type="text/javascript" src="../includes/validator.js"></script>
</head>

<body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="<?php echo $color?>">
    <td width="190" height="30" valign="middle">
	
	</td>
	<td height="30" valign="middle" >
	
      <table width="100%" height="30" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="72%" align="center" class="bold_text" style="padding-left:10px;">&nbsp;&nbsp;ADFC Falcon </td>          
          <td width="28%" align="right" class="bold_text" style="padding-left:20px;" ><span class="normal_text_bold" style="color:#ffffff"><?php echo $_SESSION['user_name']; ?>&nbsp;&nbsp;</span></td>
        </tr>
      </table></td>
  </tr>
  <tr><td colspan="2" height="4"></td></tr>
  <tr>
    <td width="190" valign="top" align="left" bgcolor="<?php echo $color?>" style="padding-left:10px; padding-right:10px;">
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  style="border: 1px solid <?php echo $color?>;background:#FFFFFF;">
	    <tr>		  
		  <td align="left" valign="top"><?php 
		  $type=$_SESSION['type'];
		  include('includes/header_links.php');?></td>
	    </tr>
		<tr>		  
		  <td align="left" valign="top" height="400"  bgcolor="<?php echo $color?>"></td>
	    </tr>
      </table>
	</td>
    <td align="center" valign="top"><table width="98%" border="0" cellspacing="0" cellpadding="0" align="center">
      <tr>
        <td>
		
		  <!-----------------------------------Body----------------------------------------->
		  		  