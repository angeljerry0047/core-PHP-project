<?php
ob_start();					
include('includes/session.php');

$url=basename(__FILE__)."?".(isset($_SERVER['QUERY_STRING'])?$_SERVER['QUERY_STRING']:'cc=cc');
$game_id=isset($_REQUEST['game_id'])?$_REQUEST['game_id']:'';	
$action=isset($_REQUEST['action'])?$_REQUEST['action']:'add';	
$creatid=$_SESSION['id'];
$target_path="user/";
//-----------------------Input checking------------------
if($action!='add' && $action!='edit' && $action!='delete')
	error('Wrong input');
if($action=='edit' && $game_id=="")
	error('Wrong input');
//-----------------------/Input checking------------------



if(isset($_POST['submit']))
{
	echo $creatid;
	$name=isset($_POST['name'])?$_POST['name']:"";
	
	$description=isset($_POST['description'])?$_POST['description']:"";
	
	/*____________________________________________________________________*/
	if($action=='add')		//------------------ADD--------------------
	{
		
		//$name=$_FILES['f1']['name'];
		//$tmp_name=$_FILES['f1']['tmp_name'];
		//$dest="painting/".$name;
		//move_uploaded_file($tmp_name,$dest);
				echo $sql="INSERT INTO `one_way_product_group` (`name`,`details`) VALUES ('$name','$description')";
				$res=mysql_query($sql) or die(mysql_error());
				//$id=@mysql_result(mysql_query("SELECT MAX(id) FROM `emp2`"),0,0); 
 				//$resav=mysql_query($sqlav);
 	
				// $resp=mysql_query($sqlp);
			$item_id=mysql_insert_id();
			if(mysql_affected_rows()>0)
			{
			
				$_SESSION['msg']=message(" Please enter another Product.",3);
				header('Location:owm_add_product_group.php');
				exit();
				
				
			}
			else
				$_SESSION['msg']=message("Sorry, some problem occured. Please try again.",2);
		
		}	
			//	exit();
			
			
			//	exit();
	elseif($action=='edit')		//------------------EDIT--------------------
	{
		
			//$name=$_FILES['f1']['name'];
			//$tmp_name=$_FILES['f1']['tmp_name'];
			//$dest="painting/".$name;
			//move_uploaded_file($tmp_name,$dest);	
		
			 $sql="update `one_way_product_group` set `name`='$name',`details`='$description' where `id`='$game_id'";
			//echo $sql;
			
				mysql_query($sql) or die(mysql_error());
				$mysql_affected_rows+=mysql_affected_rows();
			//$_SESSION['msg'].=message(" Testimonials successfully updated.",3);
			$q="select * from `one_way_product_group` where id='$game_id'";
			$rs=mysql_query($q);
			$row=mysql_fetch_array($rs);
			if($row['id']!=0)
			{
				$_SESSION['msg']=message(" Product Update Sccessful. ",3);
				header('Location:own_list_product_group.php');
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
	$row=mysql_fetch_object(mysql_query("select * from `one_way_product_group` where id='$game_id'"));
	$name=$row->name;
	$description=$row->details;
	
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
<script>
function check()
{
	if(document.ff.title.value=="")
	{
		alert("please enter title");
		return false;
	}
	else if(document.ff.year.value=="")
	{
		alert("please enter year");
		return false;
	}
	else if(document.ff.size.value=="")
	{
		alert("please enter size");
		return false;
	}
	else if(document.ff.medium.value=="")
	{
		alert("please enter medium");
		return false;
	}
	
	else if(document.ff.price.value=="")
	{
		alert("please enter price");
		return false;
	}
	else if(document.ff.category.value=="0")
	{
		alert("please enter category");
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

<table width="710" border="0" align="center" cellpadding="0" cellspacing="0" class="onepxtable">

<input type="hidden" name="game_id" value="<?php echo $game_id;?>" />
<input type="hidden" name="action" value="<?php echo $action;?>" />
<tr>
<td width="705" height="57" class="body_title_style"><?php echo $action=='edit'?"Edit":"Add";?> Product Group </td>
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
    <td width="47%" class="normal_text" colspan="2" align="center">Name:</td>
    <td width="53%"><input type="text" value="<?php echo $name; ?>" name="name"></td></tr>
 

<tr>
    <td width="47%" class="normal_text" colspan="2" align="center">Description:</td>
    <td width="53%"><textarea name="description" cols="45" rows="10"> <?php echo $description; ?>
    				</textarea>
	</td>
</tr>
<tr><td colspan="4" align="center" style="padding-left:15px;"><input type="submit" name="submit" class="butt1" value="submit" /></td>
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