<?php 
include_once('session.php');

$color=$_SESSION['COLOR'];
$h=18;
$type=$_SESSION['type'];
?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td colspan="2"  class="normal_text_white" bgcolor="<?php echo $color?>"><b>Reseller Manager </b></td>
  </tr>
   <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td width="15" align="center"><img src="images/sqr.gif" height="9" width="9" border="0" /></td>
    <td><a href="owm_add_user.php?t=reseller">Add Reseller </a></td>
  </tr>
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td width="15" align="center"><img src="images/sqr.gif" height="9" width="9" border="0" /></td>
    <td><a href="own_list_user.php?t=reseller&u=c">Active Reseller User List </a></td>
  </tr>
   <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td width="15" align="center"><img src="images/sqr.gif" height="9" width="9" border="0" /></td>
    <td><a href="own_list_trial_user.php?t=reseller&u=c">Trial Reseller User List</a></td>
  </tr>
  
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td width="15" align="center"><img src="images/sqr.gif" height="9" width="9" border="0" /></td>
    <td><a href="own_list_pending_user.php?t=reseller&u=c">Pending Reseller User List</a></td>
  </tr>

  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td width="15" align="center"><img src="images/sqr.gif" height="9" width="9" border="0" /></td>
    <td><a href="own_list_inactive_user.php?t=reseller&u=c">Inactive Reseller User List</a></td>
  </tr>
 
</table>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td colspan="2"  class="normal_text_white" bgcolor="<?php echo $color?>"><b>Retailer Manager </b></td>
  </tr>
   <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td width="15" align="center"><img src="images/sqr.gif" height="9" width="9" border="0" /></td>
    <td><a href="owm_add_user.php?t=t">Add Retailer </a></td>
  </tr>
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td width="15" align="center"><img src="images/sqr.gif" height="9" width="9" border="0" /></td>
    <td><a href="own_list_user.php?t=retailer&u=c">Active Retailer User List </a></td>
  </tr>
   <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td width="15" align="center"><img src="images/sqr.gif" height="9" width="9" border="0" /></td>
    <td><a href="own_list_trial_user.php?t=retailer&u=c">Trial Retailer User List</a></td>
  </tr>
  
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td width="15" align="center"><img src="images/sqr.gif" height="9" width="9" border="0" /></td>
    <td><a href="own_list_pending_user.php?t=retailer&u=c">Pending Retailer User List</a></td>
  </tr>

  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td width="15" align="center"><img src="images/sqr.gif" height="9" width="9" border="0" /></td>
    <td><a href="own_list_inactive_user.php?t=retailer&u=c">Inactive Retailer User List</a></td>
  </tr>
 
</table>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
  <td colspan="2" bgcolor="<?php echo $color?>"  class="normal_text_white"><strong>Product Manager </strong></td>
  </tr>
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td  width="13"  align="center"><img src="images/sqr.gif" height="9" width="9" border="0" /></td>
    <td width="940"><a href="owm_add_product.php">Add Product</a></td>
  </tr>
   <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td  width="13"  align="center"><img src="images/sqr.gif" height="9" width="9" border="0" /></td>
    <td><a href="own_list_product.php">List of Product</a></td>
  </tr>
  
</table>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
 
   <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
  <td colspan="2" bgcolor="<?php echo $color?>"  class="normal_text_white"><strong>Product Group Manager </strong></td>
  </tr>
 
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td width="17" align="center"><img src="images/sqr.gif" height="9" width="9" border="0" /></td>
    <td width="958"><a href="owm_add_group.php">Add Group</a></td>
  </tr>
   <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td  width="17"  align="center"><img src="images/sqr.gif" height="9" width="9" border="0" /></td>
    <td><a href="own_list_group.php">List of Group</a></td>
  </tr>
  
</table>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr    bgcolor="#FFFFFF" height="15">
    <td colspan="2" bgcolor="<?php echo $color?>"  class="normal_text_white"><strong>Message Manager </strong></td>
  </tr>
  <tr bgcolor="#FFFFFF" height="15">
    <td  width="13" align="center"><img src="images/sqr.gif" height="9" width="9" border="0" />&nbsp;</td>
    <td  valign="top" ><a href="own_list_message.php">View Message</a></td>
  </tr>  
<tr bgcolor="#FFFFFF" >
    <td  width="13" height="15" align="center"><img src="images/sqr.gif" height="9" width="9" border="0" />&nbsp;</td>
    <td  valign="top" ><a onClick="javascript:return confirm('Are you sure you want to clear the clients messages?');"  href="cmessage.php" >Clear Client Message</a></td>
  </tr>  
  <tr bgcolor="#FFFFFF" >
    <td  width="13" height="15" align="center"><img src="images/sqr.gif" height="9" width="9" border="0" />&nbsp;</td>
    <td valign="top" ><a onClick="javascript:return confirm('Are you sure you want to clear the Server messages?');"  href="smessage.php">Clear Server Message</a></td>
  </tr>
</table>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td colspan="2" bgcolor="<?php echo $color?>"  class="normal_text_white"><strong>Setting Manager: </strong></td>
  </tr>
  
   <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td  width="15"  align="center"><img src="images/sqr.gif" height="9" width="9" border="0" />&nbsp;</td>
	
	    <td ><a href="own_list_package.php">Manage Package</a></td>
  </tr>
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td  width="15"  align="center"><img src="images/sqr.gif" height="9" width="9" border="0" />&nbsp;</td>
	
	    <td ><a href="own_add_setup.php?game_id=1">Edit Setup</a></td>
  </tr>
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td  width="15"  align="center"><img src="images/sqr.gif" height="9" width="9" border="0" />&nbsp;</td>
	
	    <td ><a href="changepassword.php">Change Password</a></td>
  </tr>
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td  width="15"  align="center"><img src="images/sqr.gif" height="9" width="9" border="0" />&nbsp;</td>
	
	    <td ><a href="http://mysql1.mygisol.com/phpMyAdmin/index.php">Backup</a></td>
  </tr>
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td  width="15"  align="center"><img src="images/sqr.gif" height="9" width="9" border="0" />&nbsp;</td>
	
	    <td ><a href="http://mysql1.mygisol.com/phpMyAdmin/index.php">Restore</a></td>
  </tr>
   <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td  width="15"  align="center"><img src="images/sqr.gif" height="9" width="9" border="0" />&nbsp;</td>
	
	    <td ><a href="unlock.php">Unlock User</a></td>
  </tr>
  <?php  $dt=date('d-m-Y',mktime(date('H')+10,date('i')+1,date('s')));
     $row=mysql_fetch_object(mysql_query("select * from `one_way_admin_setup` where id='1'"));
		$dt1=$row->alert;

  ?>
   <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td  width="15"  align="center"><img src="images/sqr.gif" height="9" width="9" border="0" />&nbsp;</td>
	
	    <td ><a href="alert.php">Send Alert<?php if($dt1==$dt) echo " (Off)"; else echo " (On)"; ?></a></td>
  </tr>
   
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td  width="15"  align="center"><img src="images/sqr.gif" height="9" width="9" border="0" />&nbsp;</td>
	
	    <td ><a href="server.exe">Download Server Application</a></td>
  </tr>
   
   <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td width="15" align="center"><img src="images/sqr.gif" height="9" width="9" border="0" /></td>
	
         <td><a href="logout.php">Logout</a></td>	
  </tr>
</table>

<br/>




