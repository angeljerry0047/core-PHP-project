<?php
	ob_start();		
	session_start();			
	include_once('config.php');
	include_once('includes/functions.php');
	$url=basename(__FILE__)."?".(isset($_SERVER['QUERY_STRING'])?$_SERVER['QUERY_STRING']:'cc=cc');
	$game_id=isset($_REQUEST['game_id'])?$_REQUEST['game_id']:'';	
	$action=isset($_REQUEST['action'])?$_REQUEST['action']:'add';	
	
	$target_path="user/";
	//-----------------------Input checking------------------
		
	if($action!='add' && $action!='edit' && $action!='delete')
		error('Wrong input');
	if($action=='edit' && $game_id=="")
		error('Wrong input');
	//-----------------------/Input checking------------------
    $row=mysql_fetch_object(mysql_query("select * from `one_way_admin_setup` where id='1'"));
	$setup=$row->setup;
     
/////////
	


/////////////////
	if(isset($_POST['submit']))
	{
		 		
	 	$pay=$_POST['rb2'];
		$mode=$_POST['rb0'];
		/////get package Details
     // echo  $mode=$_POST['rb0'];

	
	     if($mode=="trial")
	     {
		 	 $package=isset($_POST['rb11'])?$_POST['rb11']:"";
			 $_SESSION['package']=$package;
		 }
		 else
		 {
		 	 $package=isset($_POST['rb12'])?$_POST['rb12']:"";
			 $_SESSION['package']=$package;
		 
		 }
		  	
			
			if($package!="" )
			{
				  $sql="select * from `one_way_package` where `id`=".$package;
				  $res=mysql_query($sql);
				  $row=mysql_fetch_object($res);
				  $duration=$row->duration;
				  $amount=$row->amount;
				  $packaged=$row->caption;
				  
				  $_SESSION['group']=$packaged=$row->group_id;
				  $_SESSION['amount']=$amount;
				  $_SESSION['packaged']=$packaged;
				  $_SESSION['caption']=$row->caption;
				  
				  
				  if($row->amount==0)
				  {
				  	$mode="trial";
					$group_id=$packaged=$row->group_id;
				  }
				  
		   }

		///end of package details
		
		$name=isset($_POST['name'])?$_POST['name']:"";
		$_SESSION['signup_name']=$name;
		
		//$date=isset($_POST['date'])?$_POST['date']:"";
		$_SESSION['signup_date']=$date;
		//$date1=isset($_POST['date1'])?$_POST['date1']:"";
		$_SESSION['signup_date1']=$date1;
		
		$fname=isset($_POST['fname'])?$_POST['fname']:"";
		$_SESSION['signup_fname']=$fname;
		$userid=isset($_POST['userid'])?$_POST['userid']:"";
		$_SESSION['signup_userid']=$userid;
		$phone=isset($_POST['phone'])?$_POST['phone']:"";
		$_SESSION['signup_phone']=$phone;
		$street=isset($_POST['street'])?$_POST['street']:"";
		$_SESSION['signup_street']=$street;
		$city=isset($_POST['city'])?$_POST['city']:"";
		$_SESSION['signup_city']=$city;
		$province=isset($_POST['province'])?$_POST['province']:"";
		$_SESSION['signup_province']=$province;
		$country=isset($_POST['country'])?$_POST['country']:"";
		$_SESSION['signup_country']=$country;
		$pass=isset($_POST['pass'])?$_POST['pass']:"";
		$_SESSION['signup_pass']=$pass;
		$email=isset($_POST['email'])?$_POST['email']:"";
		$_SESSION['signup_email']=$email;
		$account=isset($_POST['account'])?$_POST['account']:"";
		$_SESSION['signup_account']=$account;
		$parent=isset($_POST['parent'])?$_POST['parent']:"";
		$_SESSION['signup_parent']=$parent;
		$language=isset($_POST['language'])?$_POST['language']:"";
		$_SESSION['signup_language']=$language;
		$muser=isset($_POST['muser'])?$_POST['muser']:"";
		$_SESSION['signup_muser']=$muser;
		$cnumber=isset($_POST['cnumber'])?$_POST['cnumber']:"";
		$_SESSION['signup_cnumber']=$cnumber;
		$hname=isset($_POST['hname'])?$_POST['hname']:"";
		$_SESSION['signup_hname']=$hname;
		$creatid=isset($_POST['createdby'])?$_POST['createdby']:"";	
		$_SESSION['signup_creatid']=$creatid;
		
		$ip=$_SERVER['REMOTE_ADDR'];
		
		
		$_SESSION['signup_ip']=$ip;

		/*____________________________________________________________________*/
		
		 if(mysql_num_rows(mysql_query("select * from `one_way_user` where `user_id`='$userid' "))!=0)
		
			//$_SESSION['msg']=message("This User is already exist. Please choose another.",2);
			$_SESSION['msg']="This User is already exist. Please choose another.";
			
		else if (mysql_num_rows(mysql_query("select * from `one_way_user` where `email_id`='$email'"))!=0)
		
			//$_SESSION['msg']=message("This Email ID is already exist. Please choose another Email ID.",2);
			$_SESSION['msg']="This Email ID is already exist. Please choose another Email ID.";
		else
		{	
		
		
		
				if($mode=="trial")
				{
					 $sql="select * from `one_way_admin_setup` where `id`='1'";
					 $res=mysql_query($sql);
					 $row=mysql_fetch_array($res);
					  $trial_period=$row['trial_period'];
					  if($row['trial_active']=="auto")
					  		  $status='trial';
					  else
					  		  $status='pending trial';
					  $date=date('Y-m-d',mktime(date('H')+7,date('i')+1,date('s')));
					  $date1=date('Y-m-d',mktime(date('H')+7,date('i')+1,date('s'),date('m'),date('d')+$trial_period,date('Y')));
				
			
						
					
				}
				else
				{
				
				
					
				
					
					$date=date('Y-m-d',mktime(date('H')+7,date('i')+1,date('s')));
					$date1=date('Y-m-d',mktime(date('H')+7,date('i')+1,date('s'),date('m')+$duration,date('d'),date('Y')));
					   
					 $_SESSION['signup_date']=$date;
					 $_SESSION['signup_date1']=$date1;
					
				}
				
				if($mode!="trial")
				{
						 /*if($pay=="check")
							{
								 $checkdate=$_POST['checkdate'];
								 $checkno=$_POST['checkno'];
								 $checkbank=$_POST['checkbank'];
								 $checkamount=$_POST['checkamount'];
								 $checkpayable=$_POST['checkpayable'];
								 $status='pending';
								// $pay=$_POST['rb2'];
							}
							if($pay=="paypal")
							{*/
								header("Location:pay.php");
								exit();
						/*	}	*/	 
				}
				
					if(mysql_num_rows(mysql_query("select * from `one_way_user` where `user_id`='$userid' "))!=0)
					
						//$_SESSION['msg']=message("This User is already exist. Please choose another.",2);
						$_SESSION['msg']="This User is already exist. Please choose another.";
					
					else if(mysql_num_rows(mysql_query("select * from `one_way_user` where `ipaddress`='$ip' and (`status`='trial' or `status`='pending trial')"))!=0)
					
						//$_SESSION['msg']=message("Sorry you cannot regsiter for more than one free trial",2);
						$_SESSION['msg']="Sorry you cannot regsiter for more than one free trial";
					
					else if(mysql_num_rows(mysql_query("select * from `one_way_user` where `email_id`='$email'"))!=0)
					
						//$_SESSION['msg']=message("This Email ID is already exist. Please choose another Email ID.",2);
						$_SESSION['msg']="This Email ID is already exist. Please choose another Email ID.";
					
					else
						{
					
			 			$sql="INSERT INTO `one_way_user` (`name`,`user_id`,`password`,`address`,`account_type`,`parent_id`,`language`,`max_no_of_user`,	`credit_card_no`,`card_holder_name`,`email_id`,`status`,`created_by`,`family_name`,`phone`,`street`,`city`,`province`,`country`,`ipaddress`,`cheque_number`,`cheque_date`,`payable_at`,`amount`,`bank_name`,`date`,`date1`) VALUES ('$name','$userid','$pass','$address','$account','$parent','$language','$muser','$cnumber','$hname','$email','$status','$creatid','$fname','$phone','$street','$city','$province','$country','$ip','$checkno','$checkdate','$checkpayable','$checkamount','$checkbank','$date','$date1')";
						
						
						
						
						$res=mysql_query($sql) or die(mysql_error());
						$item_id=mysql_insert_id();
						
						
						$uid=mysql_insert_id();
						
						$sql="insert into `one_way_user_group`(`user_id`,`group_id`) VALUES ('$uid','$group_id')";
 						$res=mysql_query($sql);
						
						
						if($pay=="check")
						{
						 	$SQL1="INSERT INTO `one_way_paymentdetails` (`userid` ,`date` ,`tranid` ,`amount`,`bank` ,`place` ,`orderid` ,`type`)VALUES ('$item_id', '$checkdate', '$checkno','$checkamount', '$checkbank', '$checkpayable', '0', 'Check')";
							 mysql_query($SQL1);
						}
						if(mysql_affected_rows()>0)
						{
						
							//$_SESSION['msg']=message(" Please Enter Another User.",3);
							$_SESSION['msg']=" Please Enter Another User.";
								if($status=='trial' || $pay=="check")
								{
									
									header("Location:owm_trial_mail.php?uid=".$userid."&stat=".$status);
									//header('Location:login.php');
								}
								if($status=='pending trial' || $pay=="check")
								{
									
									header("Location:owm_pending_trial.php?uid=".$userid."&stat=".$status);
									//header('Location:login.php');
								}
							
						}
						else
//							$_SESSION['msg']=message("Sorry, some problem occured. Please try again.",2);
							$_SESSION['msg']="Sorry, some problem occured. Please try again.";
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
<style type="text/css">
<!--
.style4 {
	color: #FF0000;
	font-size: 18px;
}
-->
</style>
</head>
<?php /*include_once("includes/header.php");*/?>
<script language="javascript">
function other()
{

	if(document.getElementById('city').value=='1')
	{
		document.getElementById('divcity').style.display="block";
	}
	else
	{
		document.getElementById('divcity').style.display="none";
	}
}
</script>
<script language="javascript">
function test2()    
{  
//alert("ok"); 
var string = document.ff.zip.value;  
  //alert(string);
 	if(string.length>7 )
	{
	  alert("Please Enter The valid Zip Code(must be within 7 Characters)");
       	    document.ff.zip.value="";
            document.ff.zip.focus();
			return false;
	}
  
  }  
</script>

		

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


<style type="text/css">
<!--
.style2 {font-size: 18px}
-->
</style>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
 <tr>
 <td height="100" bgcolor="#9999FF" class="bold_text" align="center" >ADFC Falcon</td>
 </tr>
  <tr>
    <td bgcolor="#9999FF">
	<table width="710" border="0" align="center" cellpadding="0" cellspacing="0">

<input type="hidden" name="game_id" value="<?php echo $game_id;?>" />
<input type="hidden" name="creatid" value="<?php echo $creatid;?>" />
<input type="hidden" name="action" value="<?php echo $action;?>" />

<tr>
  <td width="707" height="20" align="center" valign="middle" class="normal_text" style="background-color: #FFFFFF;">&nbsp;</td>
</tr>
<tr>
  <td height="20" align="center" valign="middle" class="normal_text style2" style="background-color:#FFFFFF;">User's registration form</td>
</tr>
<tr>
  <td height="20" align="center" valign="middle" class="normal_text" style="background-color:#FFFFFF;">&nbsp;<?php echo $_SESSION['msg']; $_SESSION['msg']="";?></td>
</tr>
<tr>
<td align="center" valign="top" class="normal_text" style="background-color:#FFFFFF;">
<form name="ff" method="post" action="<?php echo basename(__FILE__);?>" onsubmit="return check()" enctype="multipart/form-data">
  <input type="hidden" name="action" value="<?php echo $action;?>" />
  <input type="hidden" name="game_id" value="<?php echo $game_id;?>" />
  <table align="center" width="100%" border="0" bgcolor="#FFFFFF">
  <tr>
    <td class="normal_text" colspan="2" align="center">Name:</td>
    <td colspan="3" align="left"><input type="text" value="<?php echo $name; ?>" name="name"></td></tr>
	<tr>
    <td class="normal_text" colspan="2" align="center">Family Name:</td>
    <td width="404" align="left" ><input type="text" value="<?php echo $fname; ?>" name="fname"></td></tr>
  <tr>
    <td class="normal_text" colspan="2" align="center">User ID:</td>
    <td colspan="3" align="left" ><input type="text" value="<?php echo $userid; ?>" name="userid"></td></tr>
  <tr>
    <td class="normal_text" colspan="2" align="center">&nbsp;Password:</td>
    <td colspan="3"  align="left"><input type="password"s value="<?php echo $pass; ?>" name="pass"></td></tr>
 <tr>
   <td class="normal_text" colspan="2" align="center">Re-Enter Password:</td>
   <td colspan="3"  align="left"><input type="password" value="<?php echo $repass; ?>" name="repass" onblur="return validate2();"></td></tr>
 
<tr>
  <td class="normal_text" colspan="2" align="center">Email ID :</td>
  <td colspan="3"  align="left"><input type="text" value="<?php echo $email; ?>" name="email"  onchange="return validate1(this.value);"></td></tr>
 <tr>
   <td class="normal_text" colspan="2" align="center">Account Type :</td>
   <td colspan="3"  align="left"><select name="account">

<!--<option value="Company" <?php if($account=="Company") { echo "selected";}?>>Company</option>
<option value="Reseller"  <?php if($account=="Reseller") { echo "selected";}?>>Reseller</option>-->
<option value="Retailer" <?php if($account=="Retailer") { echo "selected";}?>>Retailer</option>
</select></td>
 </tr>
    
 <tr>
   <td class="normal_text" colspan="2" align="center">Language:</td>
   <td colspan="3"  align="left">
   <select name="language">

	<?php if($setup=="Both"){?>
		<option value="0">Please Select</option>
		<option value="english" <?php if($language=="english") { echo "selected";}?>>English</option>
		<option value="arabic"  <?php if($language=="arabic") { echo "selected";}?>>Arabic</option>
	<?php } ?>
	<?php if($setup=="English"){?>
		<option value="english" <?php if($language=="english") { echo "selected";}?>>English</option>
	<?php } ?>
	<?php if($setup=="Arabic"){?>
		<option value="arabic"  <?php if($language=="arabic") { echo "selected";}?>>Arabic</option>
	<?php } ?>
	</select>   </td></tr>
<!--<tr><td width="47%" class="normal_text" colspan="2" align="center">Date :</td>
<td width="53%"><input name="date" type="text" id="date" value="<?php echo $date; ?>" size="30">
<img src="popcal/recurrcal.gif" width="27" height="21" style="cursor:pointer"  onclick="popUpCalendar(date,date,'yyyy-mm-dd');" /> </td>
</tr>-->
<input type="hidden" value="10" name="muser">
<input type="hidden" name="status" value="demo">
<input type="hidden" name="parent" value="1">
<input type="hidden" name="createdby" value="1">
	


<tr>
    <td class="normal_text" colspan="2" align="center">Phone Number:</td>
    <td width="404"  align="left"><input type="text" value="<?php echo $phone; ?>" name="phone" onKeyup="isInteger(this.value)"/></td>
</tr>
	<tr>
    <td class="normal_text" colspan="2" align="center">Street Address:</td>
    <td width="404"  align="left"><input type="text" value="<?php echo $street; ?>" name="street" /></td>
	</tr>
<tr>
    <td class="normal_text" colspan="2" align="center">City:</td>
    <td width="404"  align="left"><input type="text" value="<?php echo $city; ?>" name="city"></td>
</tr>
<tr>
    <td class="normal_text" colspan="2" align="center">Province:</td>
    <td width="404"  align="left"><input type="text" value="<?php echo $province; ?>" name="province"></td>
</tr>
<tr>
    <td class="normal_text" colspan="2" align="center">Country:</td>
    <td width="404"  align="left"><select name="country" id="country">
      <?php if($action!='edit'){?>
      <option value="0" selected="selected">-- SELECT --</option>
      <?php } ?>
      <?php
	$parent=mysql_query("select * from `one_way_country` order by name");
	while($Rsparent=mysql_fetch_object($parent))
	{
	?>
      <option value="<?php echo $Rsparent->name;?>" <?php if($country==$Rsparent->name) echo "selected"?>><?php echo $Rsparent-> 
	name;?></option>
      <?php
	}
	?>
    </select></td>
</tr>


<!--<tr>
    <td class="normal_text" colspan="2" align="center">Valid From:</td>
    <td width="176"><input name="date" type="text" id="date" value="<?php echo $date; ?>" size="28"></td>
    <td width="31"><img src="popcal/recurrcal.gif" width="27" height="21" style="cursor:pointer"  onclick="popUpCalendar(date,date,'yyyy-mm-dd');" /></td>
    <td width="155">&nbsp;</td>
</tr>
<tr>
    <td class="normal_text" colspan="2" align="center">Valid Upto:</td>
    <td width="176"><input name="date1" type="text" id="date1" value="<?php echo $date1; ?>" size="28"></td>
    <td width="31"><img src="popcal/recurrcal.gif" width="27" height="21" style="cursor:pointer"  onclick="popUpCalendar(date1,date1,'yyyy-mm-dd');" /></td>
    <td width="155">&nbsp;</td>
</tr>
-->


<tr>
    <td class="normal_text" colspan="2" align="center" valign="top">Terms and Service:</td>
    <td width="404"  align="left">
	<textarea name="terms" cols="60" rows="20" readonly="readonly" >
	<?php
			$sql="select * from `one_way_admin_setup` where `id`='1'";
			$res=mysql_query($sql);
			$row=mysql_fetch_array($res);
			echo $row['terms'];
	?>
	</textarea></td>
</tr>
<tr>
  <td  align="center" class="normal_text" style="padding-left:82px; padding-top:5px; font-size:12px;" colspan="6">
   
   <input name="rb0" type="radio" value="trial" checked onclick="selectpackagediv('show');"/>&nbsp;Trial (Free) 
   <input name="rb0" type="radio" value="payment"  onclick="selectpackagediv('hide');"/>&nbsp;Credit Card Payment   </td>
</tr>
<tr>
  
   <td colspan="2"  align="center" class="normal_text">Please Select Package Type : </td>
			  <td colspan="4"  class="normal_text" align="left" style="padding-left:2px; padding-top:5px; font-size:12px">
  <div id="trialp" width=100 style="display:block;" >
  <select name="rb11" id="parent">
	         
    <?php
	//$parent=mysql_query("select * from `one_way_package`  where amount=0  order by caption");
	$q="select a.id,a.caption,a.duration,a.amount,b.name from one_way_package a,one_way_group b where a.caption<>'' and a.group_id=b.id and a.amount=0 order by `caption` ASC";
				$parent=mysql_query($q);
	while($Rsparent=mysql_fetch_object($parent))
	{
	?>
      <option value="<?php echo $Rsparent->id;?>" <?php if($group==$Rsparent->id) echo "selected"?>><?php echo $Rsparent-> 
	caption;?></option>
      <?php
	}
	?>
	</select>   
	</div>
    <div id="paymentp" width=100 style="display:none;">
			
			  <select name="rb12" id="parent">
						 
				<?php
				
				//$parent=mysql_query("select * from `one_way_package` where amount <>0 order by caption");
				$q="select a.id,a.caption,a.duration,a.amount,b.name from one_way_package a,one_way_group b where a.caption<>'' and a.group_id=b.id and a.amount<>0 order by `caption` ASC";
				$parent=mysql_query($q);
				
				while($Rsparent=mysql_fetch_object($parent))
				{
				?>
				  <option value="<?php echo $Rsparent->id;?>" <?php if($group==$Rsparent->id) echo "selected"?>><?php echo $Rsparent-> 
				caption;?></option>
				  <?php
				}
				?>
				</select>   
				</div>	</td>
</tr>


<tr>
  <td  align="center" class="normal_text" style="padding-left:82px; padding-top:5px; font-size:12px;" colspan="6">
   <div id="payment" width=100 style="display:none;">
   <input name="rb2" type="radio" value="check"  onclick="selectcheckdiv('show');"/>&nbsp;Order Transfer Through cheque 
   <input name="rb2" type="radio" value="paypal" checked onclick="selectcheckdiv('hide');"/>&nbsp;Payment Registration   </div>      </td>
</tr>

<tr>
<td colspan="6" align="left" class="normal_text" style="padding-top:5px; font-size:14px">
<div id="check"  style="display:none;" align="center"> 
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="normal_text" align="right" style="padding:5px 0 5px 5px;">Check Date:</td>
	<td width="10"></td>
    <td><input name="checkdate" type="text" id="checkdate" value="<?php echo $checkdate; ?>" size="15">
	<img src="popcal/recurrcal.gif" width="27" height="21" style="cursor:pointer"  onclick="popUpCalendar(checkdate,checkdate,'yyyy-mm-dd');" /></td>
  </tr>
  <tr>
    <td class="normal_text" align="right" style="padding:5px 0 5px 5px;">Check No:</td>
	<td width="10"></td>
    <td><input type="text"  size="15" name='checkno'/></td>
  </tr>
  <tr>
    <td class="normal_text" align="right" style="padding:5px 0 5px 5px;">Check Amount:</td>
	<td width="10"></td>
    <td><input size="15" type="text" name='checkamount'/></td>
  </tr>
  <tr>
    <td class="normal_text" align="right" style="padding:5px 0 5px 5px;">Bank Name:</td>
	<td width="10"></td>
    <td> <input type="text" size='15' name='checkbank'/></td>
  </tr>
  <tr>
    <td class="normal_text" align="right" style="padding:5px 0 5px 5px;">Payable At   :</td>
	<td width="10"></td>
    <td> <input type="text" size='15' name='checkpayable'/></td>
  </tr>
</table>
</div></td>
</tr>


<tr>
  <td colspan="6" align="center" ><span class="style4">For hotmail and yahoo emails , please check your spam or junk emails in case you didn't receive confirmation email from ADFC Falcon or add @ad-fc.net to safe senders</span></td>
</tr>


<tr>
  <td colspan="6" align="center" style="padding-left:60px; padding-top:15px;"><input type="submit"  style="background:#9999FF" name="submit" class="butt1" value="I read and I accept the terms , continue the registration" />
    <br />
    <br /><input type="button"  style="background:#9999FF" name="submit2" class="butt1" value="I read and I don't accept the terms, exit the registration" onClick="javascript: location.href='start.php';"/></td>
</tr>
</table>
</form> </td>
 <td width="1" height="752"></td>
</tr>
</table>
	</td>
  </tr>
    <tr>
 <td height="80" bgcolor="#9999FF"></td></tr>
  <tr> 
</table>

         
          
          
          </td>
        </tr>
</table></td>
</tr>

</table>

<?php include("includes/footer.php");?>
<script language="javascript">

 function valButton(btn) 
 {
    var cnt = -1;
    for (var i=btn.length-1; i > -1; i--) {
        if (btn[i].checked)
		 {
		 	cnt = i; 
			i = -1;
		 }
 }
    if (cnt > -1) 
	return btn[cnt].value;
    else return null;
	
}
                  

function unionshow()
{
	
	if(document.getElementById('base').value=='1')
	{
		document.getElementById('ushow').style.display="block";
	}
	else
	{
		document.getElementById('ushow').style.display="none";
	}
} 
function selectpaymentdiv(com)
{		
   

 
    if(com.value=="trial")
    {
	
		document.getElementById('payment').style.display="none";
		document.getElementById('check').style.display="none";
	}
	else
	{
	
		document.getElementById('payment').style.display="block";
		
	}
	
	
}


function selectpackagediv(vi)
{		
	
	if(vi=='show')
	{
		document.getElementById('trialp').style.display="block";
		document.getElementById('paymentp').style.display="none";
		
		
	}
	else
	{
		document.getElementById('trialp').style.display="none";
		document.getElementById('paymentp').style.display="block";

	}
	
		
}


function selectcheckdiv(vi)
{		
	
	if(vi=='show')
	{
		document.getElementById('check').style.display="block";
	}
	else
	{
		document.getElementById('check').style.display="none";
	
	}
	
		
}
function otherstate()
	{
	
	if(document.getElementById('state').value=='1')
	{
		document.getElementById('divstate').style.display="block";
	}
	else
	{
		document.getElementById('divstate').style.display="none";
	}
	}
	

</script>
<script language=javascript>
function isInteger(s)
{
      var i;
	s = s.toString();
      for (i = 0; i < s.length; i++)
      {
         var c = s.charAt(i);
         if (isNaN(c)) 
	   {
		alert("Given value is not a number");
		document.ff.phone.value="";
		return false;
	   }
      }
      return true;
}
</script>
<script language="javascript">

function validate1(str)
{
str=document.ff.email.value;

var at="@"
var dot="."
var lat=str.indexOf(at)
var lstr=str.length
var ldot=str.indexOf(dot)
if (str.indexOf(at)==-1)
{
   alert("Invalid Email Address");
    document.ff.email.value="";
  document.ff.email.focus();
   return false;
}

if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr)
{
     alert("Invalid Email Address");
 document.ff.email.value="";
  document.ff.email.focus();
   return false;
}


if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr)
{
   alert("Invalid Email Address");
   document.ff.email.value="";
  document.ff.email.focus();
     return false;
}

if (str.indexOf(at,(lat+1))!=-1)
 {
      alert("Invalid Email Address");
  document.ff.email.value="";
  document.ff.email.focus();
     return false;
 }

 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot)
 {
      alert("Invalid Email Address");
  document.ff.email.value="";
  document.ff.email.focus();
     return false;
 }

 if (str.indexOf(dot,(lat+2))==-1)
 {
    alert("Invalid Email Address");
	document.ff.email.value="";
  	document.ff.email.focus();
    return false;
 }

 if (str.indexOf(" ")!=-1)
 {
    alert("Invalid Email Address");
	document.ff.email.value="";
  	document.ff.email.focus();
    return false;
 }
 
}


</script>

<script language="javascript">
			function validate2()
			{
				if(document.ff.pass.value!=document.ff.repass.value)
					{
			
						alert("password mismatch");
						document.ff.pass.value="";
						document.ff.repass.value="";
						document.ff.pass.focus();
						return false;
			
					}
			
			
			}



</script>


<script language="javascript">
		
				function check()
				{
					if(document.ff.name.value=="")
					{
						alert("please enter your Name");
						return false;
					}
					else if(document.ff.userid.value=="")
					{
						alert("please enter your Userid");
						return false;
					}
					else if(document.ff.pass.value=="")
					{
						alert("please enter your Password");
						return false;
					}
					else if(document.ff.pass.value != document.ff.repass.value)
					{
						alert("please enter same Password");
						return false;
					}
					
					else if(document.ff.email.value=="")
					{
						alert("please enter your Email-ID");
						return false;
					}
					else if(document.ff.account.value=="0")
					{
						alert("please enter your Account Type");
						return false;
					}
					
					else if(document.ff.language.value=="0")
					{
						alert("please select Language");
						return false;
					}
					else if(document.ff.country.value=="")
					{
						alert("please enter Country");
						return false;
					}
					
					
					
				}
				
		</script>
		
	
</body>
</html>