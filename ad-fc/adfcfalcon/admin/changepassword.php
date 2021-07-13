<?php
ob_start();
include_once('includes/session.php');
include('includes/connection.php');


//print_r($row);
if(isset($_REQUEST['submit']))
	{
		 //$pid=$_REQUEST['id'];
		$sql2="SELECT * FROM `one_way_user` where user_id='".$_SESSION['user_id']."'"; 
		$res=mysql_query($sql2);
		$row=mysql_fetch_array($res);
	    if($row['password']==$_REQUEST['in_password1']){
			 $in_password2=$_REQUEST['in_password2'];
			 $sql="UPDATE `one_way_user` SET `password`='$in_password2' where user_id='".$_SESSION['user_id']."'";
			 $ex=mysql_query($sql);
			 $varmsg ="Password has been changed successfully";
	    }
		else
		{
		      $varmsg ="Please Enter Correct Ole Password"; 
		
		}
	}
	


	
	

/*$return_url=(isset($_REQUEST['return_url']) && $_REQUEST['return_url']!="")?$_REQUEST['return_url']:"home.php";
if(isset($_POST['modify']))
{
	$sql="select * from  tbladmin where admin_pass='".filter($_POST['in_password1'])."'";
	
	$record=mysql_query($sql);
	
	if(mysql_num_rows($record)==0)
	{
		$_SESSION['msg']=message("Sorry, Your Old password does not match!",2);
		header('Location: '.basename(__FILE__));
		exit();
	}
	else
	{
			mysql_query("update tbladmin set admin_pass='".filter($_POST['in_password2'])."'");
			if(mysql_affected_rows()!=0)
				$_SESSION['msg']=message("Password has been successfully changed.",1);
			else
				$_SESSION['msg']=message("Sorry, nothing is updated.",4);

			header('Location: '.$return_url);
			exit();
	}
}*/

?>
 <script>
function validate()
{


	if(document.ff.in_password1.value=="")
	{
	    alert("Please Enter the old Password");
		return false;
	}

	if(document.ff.in_password2.value==""){
	     alert("Please Enter the new Password");
		return false;
    }
	
	if(document.ff.in_password3.value==""){
	     alert("Please Retype the new Password");
		return false;
    }

	if(document.ff.in_password2.value!=document.ff.in_password3.value)
	{
		alert("Retyped Password does not match the new Password");
		//
		//document.ff.in_password2.value="";
		//document.ff.in_password3.value="";
		return false;
	}
	
	return true;
}
</script>
<link href="includes/style.css" rel="stylesheet" type="text/css" />
<?php
include_once("includes/header.php");?>

<?php if($varmsg!=""){?>
<br>
<div align="center"><?php echo $varmsg ;?>&nbsp;</div>
<br>
<?php } 
else
{?>
<br />
<?php } ?>

<table  style="border: 1px solid <?php echo $color?>;background:#FFFFFF;"cellpadding="0" cellspacing="0" border="0" width="99%" align="right" >
  
    <tr> 
      <td height="25" colspan="2" class="body_title_style"   bgcolor="<?php echo $color?>">Change Password</td>
    </tr>
    <tr> 
      <td align="center" valign="top" class="normal_text"> 
	 <form name="ff" method="post" action="<?php echo basename(__FILE__);?>" onsubmit="return validate();">
 
        <table width="400" border="0" align="center" cellpadding="1" cellspacing="0">
          <tr valign="top"> 
            <td colspan="3" align="center">&nbsp;</td>
          </tr>
          <tr valign="top"> 
            <td width="152" align="left" valign="middle" class="normal_text">Old Password:</td>
            <td width="14">&nbsp;</td>
            <td width="228" valign="middle"> <input name="in_password1" type="password" id="in_password1"
			value="" />            </td>
          </tr>
          <tr valign="top">
            <td align="left" valign="middle" class="normal_text">New Password:</td>
            <td>&nbsp;</td>
            <td valign="middle"><input name="in_password2" type="password" id="in_password2" value=""/>            </td>
          </tr>
		  <tr valign="top">
            <td align="left" valign="middle" class="normal_text">Retype New Password:</td>
            <td>&nbsp;</td>
            <td valign="middle"><input name="in_password3" type="password" id="in_password3" value=""/>            </td>
          </tr>
          <!--<tr valign="top">
            <td align="left" valign="middle" class="normal_text">Confirm Password:</td>
            <td>&nbsp;</td>
          <td valign="middle"><input name="in_password3" type="password" id="in_password3" value="" />
            </td>
          </tr>-->
          <tr valign="top"> 
            <td colspan="3" align="right">&nbsp;</td>
          </tr>
          <tr align="center" valign="middle"> 
            <td align="right">&nbsp;</td>
            <td></td>
            <td align="left" valign="top">
			<input name="submit"  type="submit" class="butt" style="background:<?php echo $color?>" id="modify" value="Change Password"/></td>
          </tr>
          <tr valign="top"> 
            <td colspan="3" align="right">&nbsp;</td>
          </tr>
          <script language="javascript">
		  
	  document.ff.in_password1.focus();
	  </script>
      </table>  
	  
	  
	  </form>
	  
	  
	  
	      </td>
    </tr>

</table>



<?php include("includes/footer.php");
 $_SESSION['msg']="";
 ?>
 
 
