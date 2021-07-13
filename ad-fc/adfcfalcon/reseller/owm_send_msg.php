<?php
ob_start();		
session_start();			
include_once('config.php');
include_once('includes/functions.php');
$url=basename(__FILE__)."?".(isset($_SERVER['QUERY_STRING'])?$_SERVER['QUERY_STRING']:'cc=cc');
 $color=$_SESSION['COLOR'];

$product_id=$_POST['pi'];
echo "Testing ".$product_id;

echo "Testing 2 ".$_REQUEST['pi'];

if(isset($_POST['submit']))
{
	  $from=$_POST['f'];
	 //$to=$_POST['to'];
	  $message=$_POST['m'];
	 
	 $date=date('d-m-Y',mktime(date('H')+7,date('i')+1,date('s')));
	 $time=date('H:i:s',mktime(date('H')+7,date('i')+1,date('s')));	 
	$product_id=$_POST['pi'];
	echo "Testing ".$product_id;
   //$product_name=$_POST['pn'];
	 $language=$_POST['l'];
    
	 $strSQL = "INSERT INTO `one_way_send_message` ( `from_user_id` , `to_user_id` , `message` , `date` , `time` , `product` ,`language` )
VALUES ('".$from."', '1', '".$message."', '".$date."', '".$time."', '".$product_id."', '".$language."')";
   mysql_query ($strSQL); 
	
	
	
    $SQL = "SELECT distinct one_way_user_group.user_id FROM one_way_user_group,one_way_product_group where 	
   one_way_user_group.group_id=one_way_product_group.group_id and one_way_product_group.product_id=".$product_id ;
	//echo $SQL;
	//exit();
	$objRS = mysql_query ($SQL); //returns data from slaves



   while ($row = mysql_fetch_row($objRS)) 
   {  
   
   $strSQL = "INSERT INTO `one_way_message` ( `from_user_id` , `to_user_id` , `message` , `date` , `time` , `product` ,`language` )
VALUES ('".$from."', '".$row[0]."', '".$message."', '".$date."', '".$time."', '".$product_id."', '".$language."')";
  // exit();
   
  
   mysql_query($strSQL) or die(mysql_error()); 
    

	
	}   
	 
	$msg="Your Message has been send Successfully";
	//mysql_close($link);

}
	
?>		
<!DOCTYPE html PUBLIC -//W3C//DTD XHTML 1.1//EN"   
http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml">   
<head>   
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Sending Message</title>   
</head>  
<script language="javascript">
//history.forward();
function check()
{
   
   if(document.ff.pi.value==0)
   {
	   alert('Please Select A Product First');
	   return false;
   }
	 if(document.ff.m.value=="")
   {
	   alert('Please Write Somthing Before Send');
	   return false;
   }
	return true;
}


</script>
<script language="JavaScript" type="text/javascript"  src="popcal/popcalendar.js"></script>
<link href="includes/style1.css" rel="stylesheet" type="text/css" />

<body     bgcolor="#6633FF">
<form name="ff" method="post" action="<?php echo basename(__FILE__);?>" onSubmit="return check();" enctype="multipart/form-data">
<input type="hidden" name="f" value="1" />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
 <tr>
 <td height="35"    bgcolor="#6633FF" class="bold_text" align="center"   bgcolor="#6633FF">Send New Message</td></tr>
<tr>
    <td    bgcolor="#6633FF">
	
	<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0"     bgcolor="#6633FF">
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
    <td height="31" align="center" style="font-size:12px;"><strong>Select Product</strong>   &nbsp;     <label>
	  <select name="pi">
	  <option value="0">Select Product </option>
	  <?php
	  $sql="select * from one_way_product";
	  $res=mysql_query($sql);
	  while($row=mysql_fetch_object($res))
	  {
	  ?>
	 
	  <option value="<?php echo $row->id; ?>" <?php if($product_id==$row->id) {echo "selected";}?>><?php echo $row->name; ?>	  </option>
	  <?php
	  }
	  ?>
	    </select>
	  </label><strong>Select Language</strong>
		<select name="l">
		 
		  <option value="Arabic" <?php if($_POST['l']=="Arabic") {echo "selected";}?>>Arabic</option>
		  </select> 
		 &nbsp;
		 <input name="submit" type="submit" class="butt1"  style=" background:#0033FF"    value="Send Message" /></td>
  </tr>
  <tr>
    <td width="80%" height="200" align="center" bgcolor="#eeeeee"><textarea name="m" cols="60" rows="14" dir="rtl" style="font-size:18px;"></textarea></td>
  </tr>
 
</table>


</form>                 
 </td>

</tr>

	</td>
  </tr>
    <tr>
 <td height="35"    bgcolor="#6633FF"></td></tr>
  <tr></tr>
</body>
		</html>