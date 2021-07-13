<?php 
include_once('session.php');

$color=$_SESSION['COLOR'];
$h=18;
$type=$_SESSION['type'];
?>


<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td colspan="2"  class="normal_text_white" bgcolor="<?php echo $color?>"><b>User Manager </b></td>
  </tr>
   <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td width="15" align="center"><img src="images/sqr.gif" height="9" width="9" border="0" /></td>
    <td><a href="owm_add_user.php">Add User </a></td>
  </tr>
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td width="15" align="center"><img src="images/sqr.gif" height="9" width="9" border="0" /></td>
    <td><a href="own_list_user.php">Active List User </a></td>
  </tr>
  <?php if($type=='Company'){?>
   <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td width="15" align="center"><img src="images/sqr.gif" height="9" width="9" border="0" /></td>
    <td><a href="own_list_trial_user.php">Trial User List</a></td>
  </tr>
  
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td width="15" align="center"><img src="images/sqr.gif" height="9" width="9" border="0" /></td>
    <td><a href="own_list_pending_user.php">Pending User List</a></td>
  </tr>
  <?php }?> 	
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td width="15" align="center"><img src="images/sqr.gif" height="9" width="9" border="0" /></td>
    <td><a href="own_list_inactive_user.php">Inactive User List</a></td>
  </tr>
  
</table>
<br />
<?php 
	
	if($type=='Company')
	{
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
  <td colspan="2" bgcolor="<?php echo $color?>"  class="normal_text_white"><strong>Product Manager </strong></td>
  </tr>
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td  width="15"  align="center"><img src="images/sqr.gif" height="9" width="9" border="0" /></td>
    <td><a href="owm_add_product.php">Add Product</a></td>
  </tr>
   <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td  width="15"  align="center"><img src="images/sqr.gif" height="9" width="9" border="0" /></td>
    <td><a href="own_list_product.php">List Product</a></td>
  </tr>
  
</table>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
 
   <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
  <td colspan="2" bgcolor="<?php echo $color?>"  class="normal_text_white"><strong>Product Group Manager </strong></td>
  </tr>
 
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td width="15" align="center"><img src="images/sqr.gif" height="9" width="9" border="0" /></td>
    <td><a href="owm_add_group.php">Add Group</a></td>
  </tr>
   <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td  width="15"  align="center"><img src="images/sqr.gif" height="9" width="9" border="0" /></td>
    <td><a href="own_list_group.php">List Group</a></td>
  </tr>
  
</table>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td colspan="2" bgcolor="<?php echo $color?>"  class="normal_text_white"><strong>Message Manager </strong></td>
  </tr>
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td  width="15" align="center"><img src="images/sqr.gif" height="9" width="9" border="0" />&nbsp;</td>
    <td ><a href="own_list_message.php">View Message</a></td>
  </tr>
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td  width="15"  align="center"><img src="images/sqr.gif" height="9" width="9" border="0" />&nbsp;</td>
    <td  >
<a onClick="window.open(this.href,'', 'width=700,height=450,top=80,left=20,toolbar=no,scrollbars=no,menubar=no,location=no,status=no,resizable=no');return false;" target="new" style="color: #3366CC" href="owm_send_msg.php">Send Message</a>
  </td>
  </tr>
  
</table>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td colspan="2" bgcolor="<?php echo $color?>"  class="normal_text_white"><strong>Setting Manager: </strong></td>
  </tr>
 
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td  width="15"  align="center"><img src="images/sqr.gif" height="9" width="9" border="0" />&nbsp;</td>
	
	    <td ><a href="own_add_setup.php?game_id=1">Edit Setup</a></td>
  </tr>
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td  width="15"  align="center"><img src="images/sqr.gif" height="9" width="9" border="0" />&nbsp;</td>
	
	    <td ><a href="changepassword.php">Change Password</a></td>
  </tr>
</table>
<!--<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td colspan="2" bgcolor="#663300"  class="normal_text_white"><strong>News Manager </strong></td>
  </tr>
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td width="15 "align="center"><img src="images/sqr.gif" height="9" width="9" border="0" />&nbsp;</td>
    <td><a href="massive_addnews.php">Add News</a></td>
  </tr>
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td width="15" align="center"><img src="images/sqr.gif" height="9" width="9" border="0" /></td>
    <td><a href="massive_listnews.php"> List News</a></td>
  </tr>
</table>-->
<br/>
<?php
	
		}
else
		{	
			

?>
<!--<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td colspan="2" bgcolor="#9999FF"  class="normal_text_white"><strong>Message Manager </strong></td>
  </tr>
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td width="15 "align="center"><img src="images/sqr.gif" height="9" width="9" border="0" />&nbsp;</td>
    <td><a href="own_list_message.php">View Message</a></td>
  </tr>
  
</table>-->
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td colspan="2" bgcolor="<?php echo $color?>"  class="normal_text_white"><strong>Setting Manager: </strong></td>
  </tr>
 
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td  width="15"  align="center"><img src="images/sqr.gif" height="9" width="9" border="0" />&nbsp;</td>
	
	    <td ><a href="own_add_user_setup.php">Edit Setup</a></td>
  </tr>
  
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td  width="15"  align="center"><img src="images/sqr.gif" height="9" width="9" border="0" />&nbsp;</td>
	
	    <td ><a href="changepassword.php">Change Password</a></td>
  </tr>
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td width="15" align="center"><img src="images/sqr.gif" height="9" width="9" border="0" /></td>
	<td><a href="login.php">Logout</a></td>	
  </tr>
  
</table>
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#FFFFFF" height="<?php echo $h;?>">
    <td colspan="2" bgcolor="<?php echo $color?>" class="normal_text_white" height="100">&nbsp;</td>
  </tr>
 </table> 
 
<?php
		}
?>



