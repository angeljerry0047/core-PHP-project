<?php
ob_start();					
include('includes/session.php');
 $color=$_SESSION['COLOR'];

$url=basename(__FILE__)."?".(isset($_SERVER['QUERY_STRING'])?$_SERVER['QUERY_STRING']:'cc=cc');
$game_id=isset($_REQUEST['game_id'])?$_REQUEST['game_id']:'';	
$action=isset($_REQUEST['action'])?$_REQUEST['action']:'add';	

$color=$_SESSION['COLOR'];
//-----------------------Input checking------------------

$color1=isset($_POST['color'])?$_POST['color']:"";
//-----------------------/Input checking------------------



if(isset($_POST['submit']))
{
	//echo $creatid;
		
	$color=isset($_POST['color'])?$_POST['color']:"";
	
	
//------------------------------------------------ADD--------------------------------------------------//
			
	if($action=='edit')		//------------------EDIT--------------------
	{
			
			   $sql="update `one_way_user` set `color`='".$color1."' where `id`='".$_SESSION['id']."'";
				mysql_query($sql) or die(mysql_error());
								
				
				$_SESSION['msg']=message(" Setup Update Sccessful. ",3);
				$_SESSION['COLOR']=$color1;
				//header('Location:home.php');
				//exit();
	}
	
}
	elseif($action=='edit')
	{
		$row=mysql_fetch_object(mysql_query("select * from `one_way_admin_setup` where id='1'"));
		$trial_period=$row->trial_period;
		$day=($trial_period % 30);
		$month=floor($trial_period / 30);
		$terms=$row->terms;
		
	}
	
?>


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
function select_color(fieldId)
{
	
	document.getElementById('color').style.background =fieldId;
	document.getElementById('color').style.color =fieldId;
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
<table  style="border: 1px solid <?php echo $color?>;background:#FFFFFF;"cellpadding="0" cellspacing="0" border="0" width="99%" align="right" >

<tr>
<td width="707" height="57" class="body_title_style" bgcolor="<?php echo $color?>"><?php echo $action=='edit'?"Edit":"Add";?> SetUp </td>
</tr>
<tr>
  <td height="20" align="center" valign="middle" class="normal_text">&nbsp;<?php echo $_SESSION['msg']; $_SESSION['msg']="";?></td>
</tr>
<td height="22"><tr>
<td align="center" valign="top" class="normal_text">
<form name="ff" method="post" action="<?php echo basename(__FILE__);?>" onsubmit="return check()" enctype="multipart/form-data">
<input type="hidden" name="game_id" value="<?php echo $game_id;?>" />
<input type="hidden" name="action" value="edit" />
  <table align="center" width="100%" border="0">
  <tr>
    <td class="normal_text" align="center" valign="top">Background Color : </td>
    <td width="21%" height="29" align="left" valign="top" class="normal_text"><input type='text' id='color' name='color' style="background:<?php echo $color?>;color:<?php echo $color?>" value="<?php echo $color?>" /></td>
    <td width="39%" valign="top">
<input type="button" name="bt" class="butt1" onclick="select_color('#00ff00');"   style="background:#00ff00" value="" />
<input type="button" name="bt" class="butt1" onclick="select_color('#ff0000');"   style="background:#ff0000" value="" />
<input type="button" name="bt" class="butt1" onclick="select_color('#0000ff');"   style="background:#0000ff" value="" />
<input type="button" name="bt" class="butt1" onclick="select_color('#993CF3');"   style="background:#993CF3 " value="" />
<input type="button" name="bt" class="butt1" onclick="select_color('#FF6F60');"   style="background:#FF6F60" value="" />
<input type="button" name="bt" class="butt1" onclick="select_color('#009C9C');"   style="background:#009C9C  " value="" />
<input type="button" name="bt" class="butt1" onclick="select_color('#FF6F00');"   style="background:#FF6F00 " value="" />
<input type="button" name="bt" class="butt1" onclick="select_color('#CC3399');"   style="background:#CC3399" value="" />
<input type="button" name="bt" class="butt1" onclick="select_color('#009000');"  style="background:#009000  " value="" />
<input type="button" name="bt" class="butt1" onclick="select_color('#F99CF9');"   style="background:#F99CF9 " value="" />
<input type="button" name="bt" class="butt1" onclick="select_color('#9FCC9F');"   style="background:#9FCC9F" value="" />
<input type="button" name="bt" class="butt1" onclick="select_color('#6396FC');"   style="background:#6396FC" value="" />
<input type="button" name="bt" class="butt1" onclick="select_color('#33CC99');"   style="background:#33CC99" value="" />
<input type="button" name="bt" class="butt1" onclick="select_color('#000000');"   style="background:#000000" value="" /></td>
  </tr>


<tr>
<td colspan="4" align="center" style="padding-right:85px;"><input type="submit" name="submit" class="butt1"   style="background:<?php echo $color?>" value="Update" /></td>
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