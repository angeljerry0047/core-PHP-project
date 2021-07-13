<?php
ob_start();
include('includes/session.php');
$url=basename(__FILE__)."?".(isset($_SERVER['QUERY_STRING'])?$_SERVER['QUERY_STRING']:'cc=cc');

 
 $color=$_SESSION['COLOR'];
if(isset($_GET['action']) && $_GET['action']=='delete')
{
	$item_id=$_GET['cid'];
	$dest=$_GET['dest'];
	@unlink($dest);
	//@unlink("../uploaded/small/".$item_img);
	//@unlink("../uploaded/".$item_img);
	mysql_query("delete from `one_way_package` where id='$item_id'");
	/*mysql_query("delete from  test_tblmember where `name`='$name'");
	mysql_query("delete from test_tblmember where id='".$item_id."'");
	mysql_query("delete from test_tblmember where id='".$item_id."'");*/
	
	$_SESSION['msg']=message('One Package has been deleted sucessfully',1);
	header('Location: '.basename(__FILE__));
	exit();
}

//-----------------------------Data Manage----------------------------

if(isset($_GET['search']))
{
	$keyword=$_GET['in_keyword'];	
	$recperpage=$_GET['in_recperpage'];
}
else
{
	$keyword="";	
	$recperpage=25;
}
$start_key=isset($_GET['in_start_key'])?$_GET['in_start_key']:"";


//-----------------------------/Data Manage----------------------------
if(isset($_GET['search']))
{
	$keyword=$_GET['in_keyword'];	
	$recperpage=$_GET['in_recperpage'];
}
else
{
	$keyword="";	
	$recperpage=25;
}
$start_key=isset($_GET['in_start_key'])?$_GET['in_start_key']:"";
//-----------------------------------Generate Sql----------------------
 

$q="select a.id,a.caption,a.duration,a.amount,b.name from one_way_package a,one_way_group b where a.caption<>'' and a.group_id=b.id order by `caption` ASC";

/*if($keyword!="")
{
	$key=filter($keyword);
	$sql=$sql." and a.empname like '%$key%'";				
	
}

if($start_key!="")
	$sql=$sql." and a.empname like '$start_key%'";

$sql=$sql." order by a.empname asc";*/
//-----------------------------------/Generate Sql------------------------------

/*if($keyword!="")
{
	$key=filter($keyword);
	$sql=$sql." and a.painting_title like '%$key%'";				
	
}

if($start_key!="")
	$sql=$sql." and a.painting_title like '$start_key%'";

$sql=$sql." order by a.painting_title asc";
*/
//-----------------------------------/Pagination------------------------------
if(isset($_GET['in_page'])&& $_GET['in_page']!="")
	$page=$_GET['in_page'];
else
	$page=1;

$total_count=mysql_num_rows(mysql_query($q));
$sql=$sql." limit ".(($page-1)*$recperpage).", $recperpage";

	if($page>1)
	{
		$url_prev=stristr($url,"&in_page=".$page)==FALSE?$url."&page=".($page-1):str_replace("&in_page=".$page,"&in_page=".($page-1),$url);
		$prev="<a href='$url_prev' class='small_link'>Prev</a>";
	}
	else
		$prev="Prev";
		
	if((($page)*$recperpage)<$total_count)
	{
		$url_next=stristr($url,"&in_page=".$page)==FALSE?$url."&in_page=".($page+1):str_replace("&in_page=".$page,"&in_page=".($page+1),$url);
		$next="<a href='$url_next' class='small_link'>Next</a>";
	}
	else
		$next="Next";
		
	$page_temp=(($page)*$recperpage);
	$page_temp=$page_temp<$total_count?$page_temp:$total_count;
	$showing=" Showing ".(($page-1)*$recperpage+1)." - ".$page_temp." of ".$total_count." | ";
//-----------------------------------/Pagination------------------------------


?>
<script language="javascript">
function show()
{
	document.f.submit();
}
</script>
 <script language="javascript">
   function del(aa)
   {
      var a=confirm("Are you sure, you want to delete this item?")
      if (a)
      {
        location.href="own_list_package.php?cid="+ aa +"&action=delete"
      }  
   } 
   function inactive(aa)
   {
     var a=confirm("Are you sure, you want to Not Archive this item?")
      if (a)
      {
       location.href="own_list_product.php?cid="+ aa +"&action=inactive"
	  }
	   
	   
       
   } 
   function active(aa)
   {
   		var a=confirm("Are you sure, you want to Archive this item?")
      if (a)
      {
     
       location.href="own_list_user.php?cid="+ aa +"&action=active"
	  }
       
   }
   function viewitem(aa)
   {
    //  window.open('item_view_popup.php?item_id='+aa,'View','height=500, width=500, status=1, resizable=1, scrollbars=1')
     
   } 
   </script>
<link href="includes/style.css" rel="stylesheet" type="text/css" />
<?php include_once("includes/header.php");?>

<div align="center"><?php echo $_SESSION['msg']; $_SESSION['msg']="";?>&nbsp;</div>
<br/>
   &nbsp; <a href="owm_add_package.php">Add Package</a>
<br/>
<br />
<table  style="border: 1px solid <?php echo $color?>;background:#FFFFFF;"cellpadding="0" cellspacing="0" border="0" width="99%" align="center" >

<td>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
		 

		  <tr>
			<td align="left" class="body_title_style" bgcolor="<?php echo $color?>">Package List </td>
			<td width="170" align="right" class="body_title_style" bgcolor="<?php echo $color?>">&nbsp;<?php echo $total_count;?> Record(s) found &nbsp;</td>
		  </tr>
	  </table></td></tr>
<tr><td><table width="100%" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr class="<?php echo $flag%2==0?"alternate_color1":"alternate_color2";?>">
    <?php 
	  function display_order_url($url,$order_direction,$field)
	  {
		//$url_tmp=str_replace("&in_order_key=".$order_key,"",$url)."&in_order_key=".$field;
		if($order_direction=="desc")
			$dir="desc";
		else
			$dir="asc";
		return str_replace("&in_order_direction=".$order_direction,"",$url)."&in_order_direction=".$dir;
	  }
	  function display_order_image($order_direction,$field)
	  {
		
			if($order_direction=="asc")
				return "<img src='images/asc_order.gif' border=0>";
			elseif($order_direction=="desc")
				return "<img src='images/desc_order.gif' border=0>";
		
	  }
	  ?>
	  <td width="27%" align="center" class="light_text_bold">Caption</td>
	  <td width="16%" align="center" class="light_text_bold">Duration (Month) </td>
	  <td width="15%" align="center" class="light_text_bold">Amount(USD) </td>
	  <td width="16%" align="center" class="light_text_bold">Group</td>
	  <td width="26%" align="center" class="light_text_bold">Option</td>
  </tr>
  <?php
$record=mysql_query($q);
if(mysql_num_rows($record)==0)
{?>
  <tr>
    <td height="50" colspan="6" align="center" class="message_style">Sorry, 
      No Product Found.</td>
  </tr>
  <?php 
}
else
{
$flag=0;
	while($row=mysql_fetch_row($record))
	{
?>
  <tr class="<?php echo ++$flag%2==0?"alternate_color1":"alternate_color2";?>" onclick="javascript:location.href='#response.php?mid=<?php echo $row->color_id;?>';" onmouseover="this.className='hover_color'" onmouseout="this.className='<?php echo $flag%2==0?"alternate_color1":"alternate_color2";?>'">
   <td class="light_text"><p style="padding-left:5px;"><?php echo ($row[1]);?>&nbsp;
</p></td>
   <td class="light_text"><p style="padding-left:5px;"><?php echo ($row[2]);?>&nbsp;
</p></td>
   <td class="light_text" dir="rtl"><span style="padding-left:5px;"><?php echo ($row[3]);?>$</span></td>
   <td class="light_text" dir="rtl"><span style="padding-left:5px;"><?php echo ($row[4]);?></span></td>
   <td colspan="4" align="center" class="light_text" width="26%">&nbsp;
 <input name="button" type="button" class="butt1" style="background:<?php echo $color?>"  onclick="window.location.href='owm_add_package.php?game_id=<?php echo $row[0]; ?>&action=edit'" value="Edit" />
&nbsp;
<input name="button2" type="button" class="butt1" style="background:<?php echo $color?>"  onclick="javascript:del('<?php echo $row[0]?>')" value="Delete" />
<?php 
		}
	}
?>
</table>
    </td>
</tr>
</table>





<?php 
//---------------------Displaying jump menu and prev next---------------------------------
if ($total_count>0) {?>
<table width="100%" height="20" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="48%" align="left" valign="bottom" class="light_text_bold">
		        &nbsp;Jump to page 
        <select name="in_page" style="width:45px;" onchange="javascript:location.href='<?php echo str_replace("&in_page=".$page,"",$url);?>&in_page='+this.value;">
          <?php for($m=1; $m<=ceil($total_count/$recperpage); $m++) {?>
          <option value="<?php echo $m;?>" <?php echo $page==$m?'selected':''; ?>><?php echo $m;?></option>
          <?php }?>
        </select>
        of 
      <?php echo ceil($total_count/$recperpage)?>	  </td>
		<td width="52%" align="right" valign="bottom" class="light_text_bold">
		<?php echo " ".$showing." ".$prev." ".$next." &nbsp;";?>	  </td>
	</tr>
</table>
<?php }
//---------------------/Displaying jump menu and prev next---------------------------------

include("includes/footer.php");?>
<script language="javascript">
		 function view(aa)
   {
      window.open('view_popup1.php?id='+aa,'View','height=500, width=700, status=0, resizable=1, scrollbars=1')
     
   } 
   </script>
  