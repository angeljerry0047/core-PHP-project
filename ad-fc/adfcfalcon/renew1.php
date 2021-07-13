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
  $id=isset($_REQUEST['id'])?$_REQUEST['id']:"";
	 
	 $userid=isset($_REQUEST['userid'])?$_REQUEST['userid']:"";
		$_SESSION['signup_userid']=$userid;
		
	 $row=mysql_fetch_object(mysql_query("select * from `one_way_admin_setup` where id='1'"));
	$setup=$row->setup;
    
	  $row=mysql_fetch_object(mysql_query("select * from `one_way_user_group` where user_id='$id'"));
	$group_id=$row->group_id;
 
		
/////////

/////////////////
	if(isset($_POST['submit']))
	{
		//$pay=$_POST['rb2'];
		
		/////get package Details
    $pay=$_POST['rb2'];
			 $package=isset($_POST['rb1'])?$_POST['rb1']:"";
			 $_SESSION['package']=$package;
			
			
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
	
		
		$userid=isset($_REQUEST['userid'])?$_REQUEST['userid']:"";
		$_SESSION['signup_userid']=$userid;

		//$pass=isset($_POST['pass'])?$_POST['pass']:"";
		//$_SESSION['signup_pass']=$pass;
		
		
		$ip=$_SERVER['REMOTE_ADDR'];
			
		$_SESSION['signup_ip']=$ip;
		
		/*____________________________________________________________________*/
		$sql="select * from one_way_user where user_id='".$userid."'";
		$record=mysql_query($sql) or die(mysql_error());
		if(mysql_num_rows($record)==0)
		{
			$_SESSION['msg']="Access denied. Incorrect User Name or password!";
		}
		else
		{
		
		            $_SESSION['renew']="True";
		
		            $r=mysql_fetch_object($record);
					
		            $_SESSION['name']=$r->name;
					$_SESSION['language']=$r->language;
					$_SESSION['account']=$r->name;
					
					$_SESSION['uid']=$r->id;
					
		            
					$_SESSION['email']=$r->email_id;
					
					$date=date('Y-m-d',mktime(date('H')+7,date('i')+1,date('s')));
					$date1=date('Y-m-d',mktime(date('H')+7,date('i')+1,date('s'),date('m')+$duration,date('d'),date('Y')));
					   
					 $d=$r->date1;   
                    
					if($date>$d)
					{
					   	$_SESSION['signup_date']=$date;
				        $_SESSION['signup_date1']=$date1;
					}
					 else  
					{   
					
				
				     	$date1=date('Y-m-d',mktime(0,0,0,substr($d,5,2)+$duration,substr($d,8,2),substr($d,0,4)));
						
						//$date1=substr($d,8,2)."b".substr($d,5,2)."b".substr($d,0,4);
						$_SESSION['signup_date']=$r->date;
					   	 $_SESSION['signup_date1']=$date1;
		            }
		
		
                                  header("Location:pay.php");
					           exit();
		                  /*  if($pay=="check")
							{
								 $checkdate=$_POST['checkdate'];
								 $checkno=$_POST['checkno'];
								 $checkbank=$_POST['checkbank'];
								 $checkamount=$_POST['checkamount'];
								 $checkpayable=$_POST['checkpayable'];
								 $status='pending';
								// $pay=$_POST['rb2'];
								
								$SQL1="INSERT INTO `one_way_paymentdetails` (`userid` ,`date` ,`tranid` ,`amount`,`bank` ,`place` ,`orderid` ,`type`)VALUES ('".$_SESSION['uid']."', '$checkdate', '$checkno','$checkamount', '$checkbank', '$checkpayable', '0', 'Check')";
						mysql_query($SQL1);
								
								header("Location:return_renew.php");
								
					             exit();
								
								
								
							}*/
							
								
							
		
					
						 
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
  <td height="20" align="center" valign="middle" class="normal_text style2" style="background-color:#FFFFFF;">Subscription renewal form</td>
</tr>
<tr>
  <td height="20" align="center" valign="middle" class="normal_text" style="background-color:#FFFFFF; color:#FF0000">&nbsp;<?php echo $_SESSION['msg']; $_SESSION['msg']="";?></td>
</tr>
<tr>
<td align="center" valign="top" class="normal_text" style="background-color:#FFFFFF;">
<form name="ff" method="post" action="<?php echo basename(__FILE__);?>" onsubmit="return check()" enctype="multipart/form-data">
  <input type="hidden" name="action" value="<?php echo $action;?>" />
  <input type="hidden" name="game_id" value="<?php echo $game_id;?>" />
  <table align="center" width="100%" border="0" bgcolor="#FFFFFF">
  <tr>
    <td class="normal_text" align="center">User Name :</td>
    <td colspan="3" align="left"><input type="text" readonly="" value="<?php echo $userid; ?>" name="userid"></td></tr>
	
<!--<tr><td width="47%" class="normal_text" colspan="2" align="center">Date :</td>
<td width="53%"><input name="date" type="text" id="date" value="<?php echo $date; ?>" size="30">
<img src="popcal/recurrcal.gif" width="27" height="21" style="cursor:pointer"  onclick="popUpCalendar(date,date,'yyyy-mm-dd');" /> </td>
</tr>-->
<input type="hidden" value="10" name="muser">
<input type="hidden" name="status" value="demo">
<input type="hidden" name="parent" value="1">
<input type="hidden" name="createdby" value="1">


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
    <td class="normal_text" align="center" valign="top">Terms and Service:</td>
    <td width="404" align="left">
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
  <td  align="center" class="normal_text">Please Select Package Type : </td>
  <td colspan="4"  class="normal_text" align="left" style="padding-left:2px; padding-top:5px; font-size:12px">
  <select name="rb1" id="parent" >
	 
        
      <?php
	///$parent=mysql_query("select * from `one_way_package` where amount<>0 and group_id='$group_id' order by caption");
	
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
	</select>   </td>
</tr>

 


<tr>
<td colspan="5" align="left" class="normal_text" style="padding-top:5px; font-size:14px">
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
<tr><td colspan="5" align="center" class="normal_text" style="padding-left:82px; padding-top:5px; font-size:14px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>

<tr>
  <td colspan="5" align="center" style="padding-left:60px; padding-top:15px;"><input type="submit"  style="background:#9999FF" name="submit" class="butt1" value="I read and I accept the terms , continue the registration" />
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