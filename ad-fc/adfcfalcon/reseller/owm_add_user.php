<?php
ob_start();					
include('includes/session.php');
include("class.phpmailer.php");
//$type=$_SESSION['type'];
$url=basename(__FILE__)."?".(isset($_SERVER['QUERY_STRING'])?$_SERVER['QUERY_STRING']:'cc=cc');
$game_id=isset($_REQUEST['game_id'])?$_REQUEST['game_id']:'';	
$action=isset($_REQUEST['action'])?$_REQUEST['action']:'add';	
$creatid=$_SESSION['id'];
$t=$_REQUEST['t'];
//echo $t;
if($t=="")
{
   header('Location: home.php');
  exit();
}


 $sql1="select * from `one_way_user` where `user_id`='company' and `id`='1'";
 $res1=mysql_query($sql1);
 $row1=mysql_fetch_array($res1);
 $xx1=$row1['email_id'];

$target_path="user/";
//-----------------------Input checking------------------
if($action!='add' && $action!='edit' && $action!='delete')
	error('Wrong input');
if($action=='edit' && $game_id=="")
	error('Wrong input');
//-----------------------/Input checking------------------
$date=date('Y-m-d',mktime(date('H')+7,date('i')+1,date('s')));

$color=$_SESSION['COLOR'];
$show="yes";

if($action=='edit')		
{

    $u=$_REQUEST['u'];
	
	if($u=="")
	{
	 //  echo $u;
	   header('Location: home.php');
	   exit();
	}  

    $pg=$_REQUEST['pg'];
	
	if($pg=="")
	{
	 //  echo $pg;
	    header('Location: home.php');
	   exit();
	}  
	

}
if(isset($_POST['submit']))
{
	//echo $creatid;
	$name1=isset($_POST['name'])?$_POST['name']:"";
	$date=isset($_POST['date'])?$_POST['date']:"";
	$date1=isset($_POST['date1'])?$_POST['date1']:"";
	
	
	$fname=isset($_POST['fname'])?$_POST['fname']:"";
	$userid=isset($_POST['userid'])?$_POST['userid']:"";
	$phone=isset($_POST['phone'])?$_POST['phone']:"";
	$street=isset($_POST['street'])?$_POST['street']:"";
	$city=isset($_POST['city'])?$_POST['city']:"";
	$province=isset($_POST['province'])?$_POST['province']:"";
	$country=isset($_POST['country'])?$_POST['country']:"";
	$pass=isset($_POST['pass'])?$_POST['pass']:"";
	$email=isset($_POST['email'])?$_POST['email']:"";
	$account=isset($_POST['account'])?$_POST['account']:"";
	$parent=isset($_POST['parent'])?$_POST['parent']:"";
	$language=isset($_POST['language'])?$_POST['language']:"";
	$muser=isset($_POST['muser'])?$_POST['muser']:"";
	$cnumber=isset($_POST['cnumber'])?$_POST['cnumber']:"";
	$hname=isset($_POST['hname'])?$_POST['hname']:"";
	$status=isset($_POST['status'])?$_POST['status']:"";
	$parentId=isset($_POST['parent'])?$_POST['parent']:"";	
		//------------------ADD--------------------//
		
	if($action=='add')	
		{
		
		if(mysql_num_rows(mysql_query("select * from `one_way_user` where `user_id`='$userid'"))!=0)
			$_SESSION['msg']=message("This User is already exist. Please choose another one.",2);
		else if(mysql_num_rows(mysql_query("select * from `one_way_user` where `email_id`='$email'"))!=0)
			$_SESSION['msg']=message("This Email ID is already exist. Please choose another Email ID.",2);
		else
			{
		
				 $sql="INSERT INTO `one_way_user` 	(`name`,`user_id`,`password`,`address`,`account_type`,`parent_id`,`language`,`max_no_of_user`,`credit_card_no`,`card_holder_name`,`email_id`,`status`,`created_by`,`family_name`,`phone`,`street`,`city`,`province`,`country`,`date`,`date1`)VALUES ('$name1','$userid','$pass','$address','$account','$parent','$language','$muser','$cnumber','$hname','$email','$status','$creatid','$fname','$phone','$street','$city','$province','$country','$date','$date1')";
	
	            
						 $e=$date1;
					$edate=substr($e,8,2)."-".substr($e,5,2)."-".substr($e,0,4);
					
					$Subject1 ="ADFC Falcon Account Information ";
					
					$TemplateMessage="<br>------------------------------------------------------------------------------------------------------------";
					$TemplateMessage.="<br><br>Welcome to ADFC Falcon";
					 
					$TemplateMessage.="<br><br>Dear ".$name1;
				
					if($status=="trial")
					$TemplateMessage.="<br><br>Your free trial period for ADFC Falcon service will expire ".$edate;
					else
					$TemplateMessage.="<br><br>Your Account has ben Added successfully and service will expire ".$edate;
					
					$TemplateMessage.="<br><br>your username and password are:";
					 
					$TemplateMessage.="<br><br>username :".$userid;
					$TemplateMessage.="<br><br>password:".$pass;
					 
					 
					if($account=="Reseller")
					    $TemplateMessage.="<br><br>Maximum Number Of Users :".$muser;
					 
					
					   if($language=="english")
						 $TemplateMessage.="<br><br>To start ADFC Falcon , please <a href='http://www.ad-fc.net/adfcfalcon/ADFCFalcon-English.exe'>click here</a> to download the application";
					   else
						 $TemplateMessage.="<br><br>To start ADFC Falcon , please <a href='http://www.ad-fc.net/adfcfalcon/ADFCFalcon-Arabic.exe'>click here</a> to download the application";
					
					if($account=="Reseller")
					
 $TemplateMessage.="<br><br>To access your administration panel, please <a href='http://www.ad-fc.net/adfcfalcon/reseller/'>click here</a> .";
					
		
					
						$TemplateMessage.="<br><br>for ADFC Falcon installtion, <a href='http://www.ad-fc.net/adfcfalcon/installation.htm'>Click here</a>"	;
					$TemplateMessage.="<br><br>Regards";
					 
					$TemplateMessage.="<br><br>ADFC Falcon team";
			
					$TemplateMessage.="<br><br>------------------------------------------------------------------------------------------------------------"; 


				  
					 $sendto = $email;
					$subject = $Subject1;
					$message = stripslashes($TemplateMessage);;
					$header = "From: adfcfalcon@".$_SERVER["SERVER_NAME"]."\n";
					$header .= "Content-Type: text/html; charset=iso-8859-1\n";
					
					$message = stripslashes($TemplateMessage);;
					$subject=$Subject1;
					// Send
					
					//ini_set("sendmail_from","adfcfalcon@".$_SERVER["SERVER_NAME"]);
					
					if (mail($sendto,$subject,$message,$header))
					{
					 echo 'Mail sent!';
					} else
					{
					 echo 'Error! Mail was not sent.';
					};
					
					
					$sendto = $xx1;
					$subject = $Subject1;
					$message = stripslashes($TemplateMessage);;
					$header = "From: adfcfalcon@".$_SERVER["SERVER_NAME"]."\n";
					$header .= "Content-Type: text/html; charset=iso-8859-1\n";
					
					$message = stripslashes($TemplateMessage);;
					$subject=$Subject1;
					// Send
					
					//ini_set("sendmail_from","adfcfalcon@".$_SERVER["SERVER_NAME"]);
					
					if (mail($sendto,$subject,$message,$header))
					{
					 echo 'Mail sent!';
					} else
					{
					 echo 'Error! Mail was not sent.';
					};		
					
	
	
	
				$res=mysql_query($sql) or die(mysql_error());
				$item_id=mysql_insert_id();
				if(mysql_affected_rows()>0)
					{
			
						if(isset($_FILES['f1']['name']) && $_FILES['f1']['name']!="")
						{
					
							$small_w = 100;//397;
							$small_h = 100;//145;			
							$userfile_name = $_FILES['f1']['name'];
							$userfile_tmp = $_FILES['f1']['tmp_name'];
							$userfile_size = $_FILES['f1']['size'];
							$userfile_type = $_FILES['f1']['type'];
							//$targetpath="up/";			
							
							$imgname=explode(".",$userfile_name);

							if($imgname[1]!="jpg" && $imgname[1]!="jpej" && $imgname[1]!="gif" && $imgname[1]!="png" && $imgname[1]!="bmp")
							{
							    $_SESSION['msg']=message("Chose a valid Image Format JPG,JPEG,BMP,GIF,PNG" ,2);
								
							} 
							else
							{
									$img_name=$userid.".".$imgname[1];
									//$img_name ="evt".$item_id ."_".$userfile_name; //original path
									$img=$target_path.$img_name;
									//$img_small_path =$target_path."thumb/".$img_name;
												 
									move_uploaded_file($userfile_tmp, $img); //image upload
									
									$sizes = getimagesize($img);
									$small_w=$sizes[0];
									$small_h=$sizes[1];
									
									if($sizes[0]>220 && $sizes[0]>=$sizes[1])
									{    
									     $small_w = 220;
									     $small_h = 220/($sizes[0]/$sizes[1]);
									
									}
    	
		
								  	if($sizes[1]>220  && $sizes[1]>=$sizes[0])
									{    
									     $small_h = 220;
									     $small_w = 220/($sizes[1]/$sizes[0]);
									}
									
									
									/*if($sizes[0] > $sizes[1])
									{
										$small_w = 100;
										$small_h = intval(100 * ($sizes[1]/$sizes[0]));
									}
									if($sizes[1] > $sizes[0])
									{
										$small_h = 100;
										$small_w = intval(100 * ($sizes[0]/$sizes[1]));
										
									}
									if($sizes[1] == $sizes[0])
									{
										$small_h = 100;
										$small_w = 100;
										
									}	*/		
									
									$dest3 = imagecreatetruecolor($small_w,$small_h)	or die('Problem In Creating image');
									
										switch($sizes[2])
										{
											case 1:
												$src = imagecreatefromgif($img) or die('Problem In opening Source Image');
												break;
											case 2:
												$src = imagecreatefromjpeg($img) or die('Problem In opening Source Image');
												break;
											case 3:
												$src = imagecreatefrompng($img) or die('Problem In opening Source Image');
												break;
										}
										
										if(function_exists('imagecopyresampled'))
										{
											
											imagecopyresampled($dest3,$src,0,0,0,0,$small_w,$small_h,imagesx($src),imagesy($src)) 
													or die('Problem In resizing');
										}
										
										
										imagejpeg($dest3,$img,90) or die('Problem In saving');
										imagedestroy($dest3);
										
										mysql_query("update `one_way_user` set image= '".$img_name."' where id='".$item_id."'");
										$_SESSION['msg']=message(" One User has been added successfully",3);
										//header('Location:owm_add_user.php');
										//header('Location:'.$pg.'?t='.$t.'&u='.$u);
										//exit();
										header('Location:own_list_user_group.php?game_id='.$item_id);
							}
				}
				else
				{
//					header('Location:owm_add_user.php');
                         // header('Location:'.$pg.'?t='.$t.'&u='.$u);
									//	exit();
									header('Location:own_list_user_group.php?game_id='.$item_id);	
				}
			
				
				
				
			}
			else
				$_SESSION['msg']=message("Sorry, some problem occured. Please try again.",2);
		
		}	
	}	
			
		//------------------EDIT--------------------	
			
	elseif($action=='edit')		
	{
		
	
		
	 $sql="update `one_way_user` set `name`='$name1' 	,`user_id`='$userid',`password`='$pass',`address`='$address',`account_type`='$account',`parent_id`='$parent',`language`='$language',`max_no_of_user`='$muser',`credit_card_no`='$cnumber',`card_holder_name`='$hname',`status`='$status',`email_id`='$email',`family_name`='$fname',`phone`='$phone',`street`='$street',`city`='$city',`province`='$province',`country`='$country',`date`='$date',`date1`='$date1',`created_by`='".$_SESSION['id']."' where `id`='$game_id'";



			mysql_query($sql) or die(mysql_error());
			$mysql_affected_rows+=mysql_affected_rows();
			
				 $e=$date1;
					$edate=substr($e,8,2)."-".substr($e,5,2)."-".substr($e,0,4);
					
					$Subject1 ="ADFC Falcon Account Information ";
					
					$TemplateMessage.="<br>------------------------------------------------------------------------------------------------------------";
					$TemplateMessage.="<br><br>Welcome to ADFC Falcon";
					 
					$TemplateMessage.="<br><br>Dear ".$name1;
					
					 $TemplateMessage.="<br><br>Your account has been Renewed successfully and service will expire ".$edate;
					
					$TemplateMessage.="<br><br>your username and password are:";
					 
					
					 
					$TemplateMessage.="<br><br>username :".$userid;
					$TemplateMessage.="<br><br>password:".$pass;
					 
					 
					if($account=="Reseller")
					    $TemplateMessage.="<br><br>Maximum Number Of users :".$muser;
					 
					
					   if($language=="english")
						 $TemplateMessage.="<br><br>To start ADFC Falcon , please <a href='http://www.ad-fc.net/adfcfalcon/ADFCFalcon-English.exe'>click here</a> to download the application";
					   else
						 $TemplateMessage.="<br><br>To start ADFC Falcon , please <a href='http://www.ad-fc.net/adfcfalcon/ADFCFalcon-Arabic.exe'>click here</a> to download the application";
					
					if($account=="Reseller")
					
 $TemplateMessage.="<br><br>To access your administration panel, please <a href='http://www.ad-fc.net/adfcfalcon/reseller/'>click here</a> .";
					
			$TemplateMessage.="<br><br>for ADFC Falcon installtion, <a href='http://www.ad-fc.net/adfcfalcon/installation.htm'>Click here</a>";	
					
					
					$TemplateMessage.="<br><br>Regards";
					 
					$TemplateMessage.="<br><br>ADFC Falcon team";
	
					$TemplateMessage.="<br><br>------------------------------------------------------------------------------------------------------------"; 


				  
					 $sendto = $email;
					$subject = $Subject1;
					$message = stripslashes($TemplateMessage);;
					$header = "From: adfcfalcon@".$_SERVER["SERVER_NAME"]."\n";
					$header .= "Content-Type: text/html; charset=iso-8859-1\n";
					
					$message = stripslashes($TemplateMessage);;
					$subject=$Subject1;
					// Send
					
					//ini_set("sendmail_from","adfcfalcon@".$_SERVER["SERVER_NAME"]);
					
					if (mail($sendto,$subject,$message,$header))
					{
					 echo 'Mail sent!';
					} else
					{
					 echo 'Error! Mail was not sent.';
					};
					 
					 
					
					 $sendto = $xx1;
					$subject = $Subject1;
					$message = stripslashes($TemplateMessage);;
					$header = "From: adfcfalcon@".$_SERVER["SERVER_NAME"]."\n";
					$header .= "Content-Type: text/html; charset=iso-8859-1\n";
					
					$message = stripslashes($TemplateMessage);;
					$subject=$Subject1;
					// Send
					
					//ini_set("sendmail_from","adfcfalcon@".$_SERVER["SERVER_NAME"]);
					
					if (mail($sendto,$subject,$message,$header))
					{
					 echo 'Mail sent!';
					} else
					{
					 echo 'Error! Mail was not sent.';
					};
					 
			
			
			
			
			
			if(isset($_FILES['f1']['name']) && $_FILES['f1']['name']!="")
				{
					
					$small_w = 145;
					$small_h = 90;			
					$userfile_name = $_FILES['f1']['name'];
					$userfile_tmp = $_FILES['f1']['tmp_name'];
					$userfile_size = $_FILES['f1']['size'];
					$userfile_type = $_FILES['f1']['type'];
								
					$imgname=explode(".",$userfile_name);
					if($imgname[1]!="jpg" && $imgname[1]!="jpej" && $imgname[1]!="gif" && $imgname[1]!="png" && $imgname[1]!="bmp")
					{
							    $_SESSION['msg']=message("Chose a valid Image Format JPG,JPEG,BMP,GIF or PNG" ,2);
					
					} 
					else
					{
							$img_name=$userid.".".$imgname[1];
							//$img_name ="event".$event_id ."_".$userfile_name; //original path
							$img=$target_path.$img_name;
							//$img_small_path =$target_path."thumb/".$img_name;
										 
							move_uploaded_file($userfile_tmp, $img); //image upload
							
							$sizes = getimagesize($img);
								$small_w=$sizes[0];
								$small_h=$sizes[1];
									
								if($sizes[0]>220 && $sizes[0]>=$sizes[1])
									{    
									     $small_w = 220;
									     $small_h = 220/($sizes[0]/$sizes[1]);
									
									}
    	
		
								  	if($sizes[1]>220  && $sizes[1]>=$sizes[0])
									{    
									     $small_h = 220;
									     $small_w = 220/($sizes[1]/$sizes[0]);
									}
							
							$dest3 = imagecreatetruecolor($small_w,$small_h)	or die('Problem In Creating image');
							
								switch($sizes[2])
								{
									case 1:
										$src = imagecreatefromgif($img) or die('Problem In opening Source Image');
										break;
									case 2:
										$src = imagecreatefromjpeg($img) or die('Problem In opening Source Image');
										break;
									case 3:
										$src = imagecreatefrompng($img) or die('Problem In opening Source Image');
										break;
								}
								
								if(function_exists('imagecopyresampled'))
								{
									
									imagecopyresampled($dest3,$src,0,0,0,0,$small_w,$small_h,imagesx($src),imagesy($src)) 
											or die('Problem In resizing');
								}
								
								
								imagejpeg($dest3,$img,90)	or die('Problem In saving');
								imagedestroy($dest3);
								
								$r="update `one_way_user` set `image`= '".$img_name."' where id='".$game_id."'";
								  $red=mysql_query($r) or die(mysql_error());
								
							    //echo 'Location:own_list_user.php&t='.$t.'&u=$u';
								header('Location:'.$pg.'?t='.$t.'&u='.$u);
								exit();
								
						} 
						 
				}
                else
				{                 
								header('Location:'.$pg.'?t='.$t.'&u='.$u);
								exit();
				}  
  			
			
					
				
		}
	
}

elseif($action=='edit')
{
	$row=mysql_fetch_object(mysql_query("select * from `one_way_user` where id='$game_id'"));
	$name1=$row->name;
	$userid=$row->user_id;
	$pass=$row->password;
	$address=$row->address;
	$email=$row->email_id;
	$account=$row->account_type;
	$parent=$row->parent_id;
	
	$parentId=$row->parent_id;;
	$language=$row->language;
	$muser=$row->max_no_of_user;
	$cnumber=$row->credit_card_no;
	$hname=$row->card_holder_name;
	$status=$row->status;
	
	$created_by=$row->created_by;
	
	$fname=$row->family_name;
	$phone=$row->phone;
	$street=$row->street;
	$city=$row->city;
	$province=$row->province;
	$country=$row->country;
	$date=$row->date;
	$date1=$row->date1;
		
   $image=$row->image;		
			 
}
else
{
	$firstname="";
	$lastname="";
	
	
}



?>

<LINK href="../index_files/ab_ie_global.css" type=text/css rel=StyleSheet>
<link href="includes/style.css" rel="stylesheet" type="text/css" />
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
<br />

<table  style="border: 1px solid <?php echo $color?>;background:#FFFFFF;"cellpadding="0" cellspacing="0" border="0" width="99%" align="right" >

<input type="hidden" name="game_id" value="<?php echo $game_id;?>" />
<input type="hidden" name="creatid" value="<?php echo $creatid;?>" />
<input type="hidden" name="action" value="<?php echo $action;?>" />
<tr>
<td width="707" height="57" class="body_title_style"  bgcolor="<?php echo $color?>"><?php echo $action=='edit'?"Edit":"Add";?> <?php echo $t=='reseller'?" Reseller ":" Retailer ";?> User </td>
</tr>
<tr>
  <td height="20" align="center" valign="middle"  style="color:#FF0000" >&nbsp;<?php echo $_SESSION['msg']; $_SESSION['msg']="";?></td>
</tr>
<td height="22"><tr>
<td align="right" valign="top" class="normal_text">

<?php  if($show=="yes")
{ 
?>
<form name="ff" method="post" action="<?php echo basename(__FILE__);?>" onsubmit="return check()" enctype="multipart/form-data">
  <input type="hidden" name="action" value="<?php echo $action;?>" />
  <input type="hidden" name="game_id" value="<?php echo $game_id;?>" />
  <input type="hidden" name="t" value="<?php echo $t;?>" />
    <input type="hidden" name="u" value="<?php echo $u;?>" />
	  <input type="hidden" name="pg" value="<?php echo $pg;?>" />
  <table align="right" width="100%" border="0">
  <tr>
    <td class="normal_text" colspan="2" align="right"> <?php
   		echo $t=='reseller'?"Name :":"First Name :";
   ?></td>
    <td width="50%"><input type="text" value="<?php echo $name1; ?>" name="name" /></td></tr>
	 <?php
   		if($t!='reseller') 
   				{
   ?>
   	
	<tr>
    <td class="normal_text" colspan="2" align="right">Family Name:</td>
    <td width="50%"><input type="text" value="<?php echo $fname; ?>" name="fname"></td></tr>
	 <?php	}   ?>
   	
  <tr>
    <td class="normal_text" colspan="2" align="right">User ID:</td>
    <td width="50%"><input type="text" value="<?php echo $userid;  ?>" <?php if($action=='edit') { echo "readonly"; }?>  name="userid"></td></tr>
  <tr>
    <td class="normal_text" colspan="2" align="right">&nbsp;Password:</td>
    <td width="50%"><input type="password"s value="<?php echo $pass; ?>" name="pass"></td></tr>
 <tr>
   <td class="normal_text" colspan="2" align="right">Re-Enter Password:</td>
   <td width="50%"><input type="password" value="<?php echo $pass; ?>" name="repass" onblur="return validate2();"></td></tr>
 
<tr>
  <td class="normal_text" colspan="2" align="right">Email ID :</td>
  <td width="50%"><input type="text" value="<?php echo $email; ?>" <?php if($action=='edit') { echo "readonly"; }?> name="email" onchange="return validate1(this.value);"></td></tr>
 <tr>
   <td class="normal_text" colspan="2" align="right">Account Type :</td>
   <td width="50%">
   <?php
   		if($t=='reseller') 
   				{
   ?>
   	
	<select name="account">
	<option value="Reseller" selected="selected">Reseller</option>
	</select>
		<?php
				}
		else
				{
							
		?>
			<select name="account">
			<option value="Retailer" selected="selected">Retailer</option>
			</select>
		
		 <?php
				}
		 ?></td>
 </tr>
    <tr>
   <td class="normal_text" colspan="2" align="right">
    <?php
   		echo $t=='reseller'?"Company User ID :":"Rerseller User ID :";
   ?>   </td>
   <td width="50%">
     <?php if($t!='reseller') 
	 {?>
	 
	 <select name="parent" id="parent">
	 
      <option value="0" selected="selected">Select Parent ID</option>
      <?php
	$parent=mysql_query("select * from `one_way_user` where `status`='active' and ( account_type='Reseller' or account_type='Company')");
	while($Rsparent=mysql_fetch_object($parent))
	{
	?>
      <option value="<?php echo $Rsparent->id;?>" <?php if($parentId==$Rsparent->id) echo "selected"?>><?php echo $Rsparent-> 
	user_id;?></option>
      <?php
	}
	?>
    </select>
	<?php }
	else
	{?>
	
	 <select name="parent" id="parent">
	 
      <option value="<?php echo $_SESSION['id']; ?>" selected="selected"><?php echo $_SESSION['user_id']; ?></option>
	 </select>
	  <?php
	}
	?>	</td>
    </tr>
 <tr>
   <td class="normal_text" colspan="2" align="right">Language:</td>
   <td width="50%">
   <select name="language">
	<option value="0">Please Select</option>
	<option value="english" <?php if($language=="english") { echo "selected";}?>>English</option>
	<option value="arabic"  <?php if($language=="arabic") { echo "selected";}?>>Arabic</option>
	</select>   </td></tr>
<!--<tr><td width="47%" class="normal_text" colspan="2" align="right">Date :</td>
<td width="53%"><input name="date" type="text" id="date" value="<?php echo $date; ?>" size="30">
<img src="popcal/recurrcal.gif" width="27" height="21" style="cursor:pointer"  onclick="popUpCalendar(date,date,'yyyy-mm-dd');" /> </td>
</tr>-->
	<?php
		if($t=='reseller') 
		{
	?>
<tr><td class="normal_text" colspan="2" align="right">Max No Of User:</td>
<td width="50%"><input type="text" value="<?php echo $muser; ?>" name="muser"></td></tr>
	
	
	<tr>
    <td class="normal_text" colspan="2" align="right">Credit card Number:</td>
    <td width="50%"><input type="text" value="<?php echo $cnumber; ?>" name="cnumber"></td>
	</tr>
	<tr>
    <td class="normal_text" colspan="2" align="right">Card Holder Name:</td>
    <td width="50%"><input type="text" value="<?php echo $hname; ?>" name="hname"></td>
	</tr>
	<?php
		}
	?>
	<tr>
    <td class="normal_text" colspan="2" align="right">Phone Number:</td>
    <td width="50%"><input type="text" value="<?php echo $phone; ?>" name="phone" onKeyup="isInteger(this.value)"/></td>
</tr>
	<tr>
    <td class="normal_text" colspan="2" align="right">Street Address:</td>
    <td width="50%"><input type="text" value="<?php echo $street; ?>" name="street" /></td>
	</tr>
<tr>
    <td class="normal_text" colspan="2" align="right">City:</td>
    <td width="50%"><input type="text" value="<?php echo $city; ?>" name="city"></td>
</tr>
<tr>
    <td class="normal_text" colspan="2" align="right">Province:</td>
    <td width="50%"><input type="text" value="<?php echo $province; ?>" name="province"></td>
</tr>
<tr>
    <td class="normal_text" colspan="2" align="right">Country:</td>
    <td width="50%"><select name="country" id="country">
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

		<tr>
			<td class="normal_text" colspan="2" align="right">Valid From:</td>
			<td width="50%"><input name="date" type="text" id="date" value="<?php echo $date; ?>" size="28">
			  <img src="popcal/recurrcal.gif" width="27" height="18" style="cursor:pointer"  onclick="popUpCalendar(date,date,'yyyy-mm-dd');" /></td>
		</tr>
		<tr>
			<td class="normal_text" colspan="2" align="right">Valid Upto:</td>
			<td width="50%"><input name="date1" type="text" id="date1" value="<?php echo $date1; ?>" size="28">
			  <img src="popcal/recurrcal.gif" width="27" height="18" style="cursor:pointer"  onclick="popUpCalendar(date1,date1,'yyyy-mm-dd');" /></td>
		</tr>
		<?php
   		if($t=='reseller') 
   				{
       ?>
		<tr>
		  <td colspan="2" align="right" class="normal_text">&nbsp;</td>
		  <td height="27" colspan="4"><img src="user/<?php echo $image ?>" /></td>
		  </tr>
		<tr>
			<td colspan="2" align="right" class="normal_text">Logo:</td>
			<td height="27" colspan="4"><input type="file" name="f1" size="25" style="border:1px solid #CBCED4; padding-left: 4; padding-right: 4; padding-top: 1; padding-bottom: 1" tabindex="12" >    </td>
		</tr>
     <?php } ?>
<tr>
   <td class="normal_text" colspan="2" align="right">Status :</td>
   <td width="50%"><select name="status" id="status">
<option value="0">Please Select</option>
<option value="active" <?php if($status=="active") { echo "selected";}?>>Active</option>
<option value="inactive" <?php if($status=="inactive") { echo "selected";}?>>Inactive</option>

<option value="trial" <?php if($status=="trial") { echo "selected";}?>>Trial</option>
<option value="pending trial" <?php if($status=="pending trial") { echo "selected";}?>>Pending Trial</option>
<option value="pending" <?php if($status=="pending") { echo "selected";}?>>Pending</option>
</select></td>
    </tr>
<input type="hidden" name="x" value="<?php echo $painting_image?>">
<tr>
  <td class="normal_text" colspan="2" align="right"></td>
  <td align="left" style="padding-left:30px;">&nbsp;</td>
</tr>
<tr>
<td class="normal_text" colspan="2" align="right"></td>
<td align="left" style="padding-left:30px;"><input type="submit" name="submit" class="butt1"  style="background:<?php echo $color?>"  value="submit" /></td>
</tr>
<tr>
  <td class="normal_text" colspan="2" align="right"></td>
  <td align="left" style="padding-left:30px;">&nbsp;</td>
</tr>
</table>

</form> 
<?php 
} 
?>   
             
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

<!-------------------------Email validation------------------------------------------>

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
		        var mode='<?php echo $action?>';
				var type='<?php echo $t?>';
			//	alert(mode);
				function check()
				{
					if(document.ff.name.value=="")
					{
						alert("Please enter your name");
						return false;
					}
					if(type!="reseller")
						if(document.ff.fname.value=="")
						{
							alert("Please enter your family name");
							return false;
						}
					
					if(document.ff.userid.value=="")
					{
						alert("Please enter your userid");
						return false;
					}
					
					if(document.ff.pass.value=="")
					{
						alert("Please enter your password");
						return false;
					}
					
					if(document.ff.pass.value != document.ff.repass.value)
					{
						alert("Please enter same password");
						document.ff.pass.focus();
						return false;
					}
					
					if(document.ff.email.value=="")
					{
						alert("Please enter your email");
						return false;
					}
					
					if(document.ff.account.value=="0")
					{
						alert("Please Select your Account Type");
						return false;
					}
					
					if(document.ff.parent.value=="0")
					{
						alert("Please select Parent ID");
						return false;
					}
					
					if(document.ff.language.value=="0")
					{
						alert("Please select language");
						return false;
					}
					
					if(type=="reseller")
					{	
					    if(document.ff.muser.value=="" && document.ff.account.value=="Reseller")
						{
							alert("Please Enter The Maximum Number Of User");
							return false;
						}
						
						if(document.ff.phone.value=="" && document.ff.account.value=="Reseller")
						{
							alert("Please Enter The Phone No");
							return false;
						}
						
						if(document.ff.street.value=="" && document.ff.account.value=="Reseller")
						{
							alert("Please Enter The Street Address ");
							return false;
						}
						
						if(document.ff.city.value=="" && document.ff.account.value=="Reseller")
						{
							alert("Please Enter The City Name");
							return false;
						}
						
						if(document.ff.province.value=="" && document.ff.account.value=="Reseller")
						{
							alert("Please Enter The Province Name");
							return false;
						}
						
					}	
					
					if(document.ff.country.value=="0")
					{
						alert("Please select Country");
						return false;
					}
					
					
						if(document.ff.date.value=="")
						{
							alert("Please enter valid from date");
							return false;
						}
						
						if(document.ff.date1.value=="")
						{
							alert("Please enter valid upto date");
							return false;
						}
						
						if(document.ff.date.value > document.ff.date1.value)
						{
							alert("Please enter valid date duration");
							return false;
						}
						
						if(document.ff.f1.value=="" && document.ff.account.value=="Reseller" && mode=='add')
						{
							alert("Please Add the Picture");
							return false;
						}
						
					
					
					
					if(document.ff.status.value=="0")
					{
						alert("Please select your status");
						return false;
					}	
				}
				</script>
