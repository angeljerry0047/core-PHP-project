<?php
ob_start();					
include('includes/session.php');
 $color=$_SESSION['COLOR'];
$url=basename(__FILE__)."?".(isset($_SERVER['QUERY_STRING'])?$_SERVER['QUERY_STRING']:'cc=cc');
$game_id=isset($_REQUEST['game_id'])?$_REQUEST['game_id']:'';	
$action=isset($_REQUEST['action'])?$_REQUEST['action']:'add';	
$creatid=$_SESSION['id'];
$target_path="product/";
//-----------------------Input checking------------------
if($action!='add' && $action!='edit' && $action!='delete')
	error('Wrong input');
if($action=='edit' && $game_id=="")
	error('Wrong input');
//-----------------------/Input checking------------------



if(isset($_POST['submit']))
{
	//echo $creatid;
	$caption=isset($_POST['caption'])?$_POST['caption']:"";
	$duration=isset($_POST['duration'])?$_POST['duration']:"";
	$amount=isset($_POST['amount'])?$_POST['amount']:"";
	$group=isset($_POST['group'])?$_POST['group']:"";
	
	
	/*____________________________________________________________________*/
	if($action=='add')		//------------------ADD--------------------
	{
		
		if(mysql_num_rows(mysql_query("select * from `one_way_package` where `caption`='$caption'"))!=0)
		
		$_SESSION['msg']=message("Sorry, the Package is already exist. Please choose another.",2);
		
		else
			{
				$sql="INSERT INTO `one_way_package` (`caption`,`duration`,`amount`,`group_id`) VALUES ('$caption','$duration','$amount','$group')";
				
				$res=mysql_query($sql) or die(mysql_error());
				//$id=@mysql_result(mysql_query("SELECT MAX(id) FROM `emp2`"),0,0); 
 				//$resav=mysql_query($sqlav);
 	
				// $resp=mysql_query($sqlp);
			    $item_id=mysql_insert_id();
			
				$_SESSION['msg']=message("Package has been added sucessfully.",2);
				
		        header('Location:owm_add_package.php');
		}	
			//	exit();
	}		
			
			//	exit();
	elseif($action=='edit')		//------------------EDIT--------------------
	{
		
			//$name=$_FILES['f1']['name'];
			//$tmp_name=$_FILES['f1']['tmp_name'];
			//$dest="painting/".$name;
			//move_uploaded_file($tmp_name,$dest);	
		
			 $sql="update `one_way_package` set `caption`='$caption',`duration`='$duration',`amount`='$amount',`group_id`='$group' where `id`='$game_id'";
			//echo $sql;
			
				mysql_query($sql) or die(mysql_error());
				$mysql_affected_rows+=mysql_affected_rows();
							
            
			$q="select * from `one_way_package` where id='$game_id'";
			$rs=mysql_query($q);
			$row=mysql_fetch_array($rs);
			if($row['id']!=0)
			{
				$_SESSION['msg']=message("package has been updated sucessfully.",2);
				header('Location:own_list_package.php');
				//exit();
			}
			/*else
			{
				header('Location:list_painting1.php');
				//exit();
			}*/
						
				
		}
	
}

elseif($action=='edit')
{
	$row=mysql_fetch_object(mysql_query("select * from `one_way_package` where id='$game_id'"));
	$caption=$row->caption;
	$duration=$row->duration;
	$amount=$row->amount;
	$group=$row->group_id;

	
}
else
{
    $caption="";
	$duration="";
	$amount="";
	$group="";

	
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
<td width="705" height="57" class="body_title_style"   bgcolor="<?php echo $color?>"><?php echo $action=='edit'?"Edit":"Add";?> Package </td>
</tr>
<tr>
  <td height="20" align="center" valign="middle" >&nbsp;<?php echo $_SESSION['msg']; $_SESSION['msg']="";?></td>
</tr>
<td height="22"><tr>
<td align="center" valign="top" class="normal_text">
<form name="ff" method="post" action="<?php echo basename(__FILE__);?>" onsubmit="return check()" enctype="multipart/form-data">
  <input type="hidden" name="action" value="<?php echo $action;?>" />
  <input type="hidden" name="game_id" value="<?php echo $game_id;?>" />
  <table align="center" width="100%" border="0">
  <tr>
    <td class="normal_text" colspan="2" align="center">Caption :</td>
    <td><input name="caption" type="text" id="code" value="<?php echo $caption; ?>" /></td>
  </tr>
  <tr>
    <td class="normal_text" colspan="2" align="center">Duration : </td>
    <td width="62%"><input type="text" value="<?php echo $duration; ?>" name="duration" > 
    Month </td>
  </tr>
  <tr>
    <td class="normal_text" colspan="2" align="center">Amount : </td>
    <td><input name="amount" type="text" id="acode" value="<?php echo $amount; ?>"  />
      USD (0 for Free Trial Package) </td>
  </tr>
  <tr>
    <td class="normal_text" colspan="2" align="center">Group Name : </td>
    <td><select name="group" id="parent">
	 
      <option value="0" selected="selected">Select Group</option>
      <?php
	$parent=mysql_query("select * from `one_way_group` order by name");
	while($Rsparent=mysql_fetch_object($parent))
	{
	?>
      <option value="<?php echo $Rsparent->id;?>" <?php if($group==$Rsparent->id) echo "selected"?>><?php echo $Rsparent-> 
	name;?></option>
      <?php
	}
	?>
    </select></td>
  </tr>
 

  <tr>
    <td colspan="4" align="center" style="padding-left:15px;">&nbsp;</td>
  </tr>
  <tr><td colspan="4" align="center" style="padding-left:15px;"><input type="submit" name="submit" class="butt1"   style="background:<?php echo $color?>"  value="submit" /></td>
</tr>
</table>

</form>                 
 </td>
 <td width="3" height="20">
</tr>
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