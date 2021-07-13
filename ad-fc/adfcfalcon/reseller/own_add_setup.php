<?php
ob_start();					
include('includes/session.php');
 $color=$_SESSION['COLOR'];

$url=basename(__FILE__)."?".(isset($_SERVER['QUERY_STRING'])?$_SERVER['QUERY_STRING']:'cc=cc');
$game_id=isset($_REQUEST['game_id'])?$_REQUEST['game_id']:'';	
$action=isset($_REQUEST['action'])?$_REQUEST['action']:'edit';	

$color=$_SESSION['COLOR'];
//-----------------------Input checking------------------

if($action!='add' && $action!='edit' && $action!='delete')
	error('Wrong input');
if($action=='edit' && $game_id=="")
	error('Wrong input');
	
//-----------------------/Input checking------------------



if(isset($_POST['submit']))
{

	$terms=isset($_POST['terms'])?$_POST['terms']:"";
        $terms=mysql_real_escape_string($terms);

	$disclaimer=isset($_POST['disclaimer'])?$_POST['disclaimer']:"";
	$disclaimer=mysql_real_escape_string($disclaimer);

	$aterms=isset($_POST['aterms'])?$_POST['aterms']:"";
        $aterms=mysql_real_escape_string($aterms);

	$adisclaimer=isset($_POST['adisclaimer'])?$_POST['adisclaimer']:"";
        $adisclaimer=mysql_real_escape_string($adisclaimer);
	
	$month=isset($_POST['month'])?$_POST['month']:"";
	$day=isset($_POST['day'])?$_POST['day']:"";
	
	$talert=isset($_POST['talert'])?$_POST['talert']:"";
	$salert=isset($_POST['salert'])?$_POST['salert']:"";
	
	$trial_period=$day;
	$color=isset($_POST['color'])?$_POST['color']:"";
	
	$street=isset($_POST['street'])?$_POST['street']:"";
        $street=mysql_real_escape_string($street);

	$city=isset($_POST['city'])?$_POST['city']:"";
        $city=mysql_real_escape_string($city);

	$province=isset($_POST['province'])?$_POST['province']:"";
        $province=mysql_real_escape_string($province);

	$country=isset($_POST['country'])?$_POST['country']:"";
        $country=mysql_real_escape_string($country);

	$phone=isset($_POST['phone'])?$_POST['phone']:"";
	$setup=isset($_POST['setup'])?$_POST['setup']:"";
        $setup=mysql_real_escape_string($setup);

	
	$email=isset($_POST['email'])?$_POST['email']:"";
	$trial_active=isset($_POST['trial_active'])?$_POST['trial_active']:"";
//------------------------------------------------ADD--------------------------------------------------//
	
		

	if($action=='edit')		//------------------EDIT--------------------
	{

			
			    $sql="update `one_way_user` set `color`='".$color."' where `id`='".$_SESSION['id']."'";
				mysql_query($sql) or die(mysql_error());
				echo "4";
				$sql="update `one_way_user` set `email_id`='".$email."',`street`='".$street."',`city`='".$city."',`province`='".$province."',`country`='".$country."',`phone`='".$phone."' where `id`=1";
				mysql_query($sql) or die(mysql_error());
				echo "5";
				
				
				$sql="update `one_way_admin_setup` set `trial_period`='$trial_period',`terms`='$terms',`aterms`='$aterms',`talert`='$talert',`salert`='$salert',`disclaimer`='$disclaimer',`adisclaimer`='$adisclaimer',`setup`='$setup',`trial_active`='$trial_active' where `id`='1'";
				mysql_query($sql) or die(mysql_error());
								
				
				
				$_SESSION['msg']=message(" Setup Updated Sccessful. ",3);
				$_SESSION['COLOR']=$color;
				header('Location:home.php');
				exit();
	}
	
}
	elseif($action=='edit')
	{

		$row=mysql_fetch_object(mysql_query("select * from `one_way_admin_setup` where id='1'"));
		$trial_period=$row->trial_period;
		$day=$row->trial_period;
		$talert=$row->talert;
		$salert=$row->salert;

			
		$aterms=$row->aterms;
		$adisclaimer=$row->adisclaimer;	
		
		$terms=$row->terms;
		$disclaimer=$row->disclaimer;
		$trial_active=$row->trial_active;
		$setup=$row->setup;
		$row=mysql_fetch_object(mysql_query("select * from `one_way_user` where id='1'"));
		$email=$row->email_id;
		$street=$row->street;
	    $city=$row->city;
	    $province=$row->province;
	    $country=$row->country;
	    $phone=$row->phone;
	    
	
	}
	//echo $setup;
?>


<link href="includes/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {font-size: 16px}
-->
</style>
<?php include_once("includes/header.php");?>
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
function select_color(fieldId)
{
	
	document.getElementById('color').style.background = fieldId;
	document.getElementById('color').style.color = fieldId;
	document.getElementById('color').value=fieldId;
	
}
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
function check()
{
	if(document.ff.name.value=="")
	{
		alert("please enter group name");
		return false;
	}
	else if(document.ff.description.value=="")
	{
		alert("please enter group description");
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
<br />

<table  style="border: 1px solid <?php echo $color?>;background:#FFFFFF;"cellpadding="0" cellspacing="0" border="0" width="99%" align="center" >

<input type="hidden" name="game_id" value="<?php echo $game_id;?>" />
<input type="hidden" name="action" value="<?php echo $action;?>" />
<tr>
<td width="100%" height="57" class="body_title_style" bgcolor="<?php echo $color?>"><?php echo $action=='edit'?"Edit":"Add";?> SetUp </td>
</tr>
<tr>
  <td height="20" align="center" valign="middle" class="normal_text">&nbsp;<?php echo $_SESSION['msg']; $_SESSION['msg']="";?></td>
</tr>
<td height="22"><tr>
<td align="center" valign="top" class="normal_text">
<form name="ff" method="post" action="<?php echo basename(__FILE__);?>" onsubmit="return check()" enctype="multipart/form-data">
  <input type="hidden" name="action" value="<?php echo $action;?>" />
  <input type="hidden" name="game_id" value="<?php echo $game_id;?>" />
  <table align="center" width="100%" border="0">
  <tr>
    <td class="normal_text" colspan="2" align="center" valign="top">Background Color : </td>
    <td width="18%" height="29" align="left" valign="top" class="normal_text"><input type='text' id='color' name='color' style="background:<?php echo $color?>;color:<?php echo $color?>" value="<?php echo $color?>" size="5" /> &nbsp;&nbsp;&nbsp;Select Color :</td>
    <td width="49%" valign="top"> 
	
<input type="button" name="bt" class="butt1" onclick="select_color('#00ff00');"   style="background:#00ff00" value="" />
<input type="button" name="bt" class="butt1" onclick="select_color('#ff0000');"   style="background:#ff0000" value="" />
<input type="button" name="bt" class="butt1" onclick="select_color('#0000ff');"   style="background:#0000ff" value="" />
<input type="button" name="bt" class="butt1" onclick="select_color('#993CF3');"   style="background:#993CF3 " value="" />
<input type="button" name="bt" class="butt1" onclick="select_color('#FF6F60');"   style="background:#FF6F60" value="" />
<input type="button" name="bt" class="butt1" onclick="select_color('#009C9C');"   style="background:#009C9C  " value="" />
<input type="button" name="bt" class="butt1" onclick="select_color('#FF6F00');"   style="background:#FF6F00 " value="" />
<input type="button" name="bt" class="butt1" onclick="select_color('#CC3399');"   style="background:#CC3399" value="" />
<input type="button" name="bt" class="butt1" onclick="select_color('#009900');"   style="background:#009900  " value="" />
<input type="button" name="bt" class="butt1" onclick="select_color('#F99CF9');"   style="background:#F99CF9 " value="" />
<input type="button" name="bt" class="butt1" onclick="select_color('#9FCC9F');"   style="background:#9FCC9F" value="" />
<input type="button" name="bt" class="butt1" onclick="select_color('#6396FC');"   style="background:#6396FC" value="" />
<input type="button" name="bt" class="butt1" onclick="select_color('#33CC99');"   style="background:#33CC99" value="" />
<input type="button" name="bt" class="butt1" onclick="select_color('#000000');"   style="background:#000000" value="" /></td>
  </tr>
  <tr>
    <td class="normal_text" colspan="2" align="center" valign="top">Trial period:</td>
    <td height="29" align="left" valign="top" ><input type='text' id='color2' name='day'  value="<?php echo $day?>" size="5" /> 
      Days </td>
    <td height="29" align="left" valign="top" class="normal_text">&nbsp;</td>
  </tr>
  <tr>
    <td class="normal_text" colspan="2" align="center" valign="top">Trial Period Alert Before : </td>
    <td height="29" align="left" valign="top" ><input type='text' id='talert' name='talert'  value="<?php echo $talert?>" size="5" />
      Days</td>
    <td height="29" align="left" valign="top" class="normal_text">&nbsp;</td>
  </tr>
  <tr>
    <td class="normal_text" colspan="2" align="center" valign="top">Subscriptions Period Alert Before : </td>
    <td height="29" align="left" valign="top" ><input type='text' id='salert' name='salert'  value="<?php echo $salert?>" size="5" /> 
      Days </td>
    <td height="29" align="left" valign="top" class="normal_text">&nbsp;</td>
  </tr>
  <tr>
 <td class="normal_text" colspan="2" align="center" valign="top">Trial Activation Option : </td>
    <td height="29" align="left" valign="top" > <select name="trial_active" id="setup">
	    	 <option value="auto" <?php if($trial_active=="auto") echo "selected"?>>Auto</option>
    		 <option value="manual" <?php if($trial_active=="manual") echo "selected"?>>Manual</option>

  
	 </select></td>
    <td height="29" align="left" valign="top" class="normal_text">&nbsp;</td>
  </tr>
  <tr>
    <td class="normal_text" colspan="2" align="center" valign="top">Language Selection Option : </td>
    <td height="29" align="left" valign="top" > <select name="setup" id="setup">
	    	 <option value="English" <?php if($setup=="English") echo "selected"?>>English</option>
    		 <option value="Arabic" <?php if($setup=="Arabic") echo "selected"?>>Arabic</option>
			 <option value="Both" <?php if($setup=="Both") echo "selected"?>>Both</option>
  
	 </select></td>
    <td height="29" align="left" valign="top" class="normal_text">&nbsp;</td>
  </tr>
  <tr>
    <td class="normal_text" colspan="2" align="center" valign="top"><span class="style1">Company Address </span></td>
    <td height="29" align="left" valign="top" >&nbsp;</td>
    <td height="29" align="left" valign="top" class="normal_text">&nbsp;</td>
  </tr>
  <tr>
    <td class="normal_text" colspan="2" align="center" valign="top">Street : </td>
    <td height="29" align="left" valign="top" ><input type='text' id='salert2' name='street'  value="<?php echo $street?>" size="25" /></td>
    <td height="29" align="left" valign="top" class="normal_text">&nbsp;</td>
  </tr>
  <tr>
    <td class="normal_text" colspan="2" align="center" valign="top">City:</td>
    <td height="29" align="left" valign="top" ><input type='text' id='salert22' name='city'  value="<?php echo $city?>" size="25" /></td>
    <td height="29" align="left" valign="top" class="normal_text">&nbsp;</td>
  </tr>
  <tr>
    <td class="normal_text" colspan="2" align="center" valign="top">Province : </td>
    <td height="29" align="left" valign="top" ><input type='text' id='salert23' name='province'  value="<?php echo $province?>" size="25" /></td>
    <td height="29" align="left" valign="top" class="normal_text">&nbsp;</td>
  </tr>
  <tr>
    <td class="normal_text" colspan="2" align="center" valign="top">Country : </td>
    <td height="29" align="left" valign="top" ><input type='text' id='salert24' name='country'  value="<?php echo $country?>" size="25" /></td>
    <td height="29" align="left" valign="top" class="normal_text">&nbsp;</td>
  </tr>
  <tr>
    <td class="normal_text" colspan="2" align="center" valign="top">Phone : </td>
    <td height="29" align="left" valign="top" ><input type='text' id='salert25' name='phone'  value="<?php echo $phone?>" size="25" /></td>
    <td height="29" align="left" valign="top" class="normal_text">&nbsp;</td>
  </tr>
  <tr>
    <td class="normal_text" colspan="2" align="center" valign="top">Email</td>
    <td height="29" align="left" valign="top" ><input type='text' id='salert25' name='email'  value="<?php echo $email?>" size="25" /></td>
    <td height="29" align="left" valign="top" class="normal_text">&nbsp;</td>
  </tr>
  <tr>
    <td class="normal_text" colspan="2" align="center" valign="top">&nbsp;</td>
    <td height="29" align="left" valign="top" >&nbsp;</td>
    <td height="29" align="left" valign="top" class="normal_text">&nbsp;</td>
  </tr>
 

<tr>
    <td height="145" colspan="2" align="center" valign="top" class="normal_text">Terms and Condition[agreement]:</td>
    <td colspan="2"><textarea name="terms" cols="53" rows="10"><?php echo $terms; ?></textarea>	</td>
</tr>
<tr>
  <td height="145" colspan="2" align="center" valign="top" class="normal_text">Arabic Terms and Condition[agreement] </td>
  <td colspan="2"><textarea name="aterms" cols="45" rows="10" dir="rtl" style="font-size:14px"><?php echo $aterms; ?></textarea></td>
</tr>

<tr>
    <td height="145" colspan="2" align="center" valign="top" class="normal_text">Disclaimer :</td>
    <td colspan="2"><textarea name="disclaimer" cols="53" rows="10"><?php echo $disclaimer ; ?></textarea>	</td>
</tr>
<tr>
  <td height="145" colspan="2" align="center" valign="top" class="normal_text">Arabic Disclaimer :</td>
  <td colspan="2"><textarea name="adisclaimer" cols="45" rows="10" dir="rtl" style="font-size:14px"><?php echo $adisclaimer ; ?></textarea></td>
</tr>
<tr>
<td colspan="5" align="center" style="padding-right:85px;"><input type="submit" name="submit" class="butt1"   style="background:<?php echo $color?>" value="Update" /></td>
</tr>
</table>

</form>                 
 </td>
 <td width="1" height="20"></tr>
 </table>
         
          
          
          </td>
        </tr>
</table></td>
</tr>

</table>

<?php include("includes/footer.php");?>
<script language="javascript">
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
<script language="javascript">
function pcheck(string)
{

var Chars = "0123456789.";
   

    for (var i = 0; i < string.length; i++)
    {
       
       if (Chars.indexOf(string.charAt(i)) == -1)
       {
           
          document.getElementById('price').value=""
         
            return false;
       }
    }
}	
</script>