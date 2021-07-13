<?php
ob_start();
ob_start();

include("config.php");
include("class.phpmailer.php");
?> 


 <?php  $dt=date('d-m-Y',mktime(date('H')+7,date('i')+1,date('s')));
     $row=mysql_fetch_object(mysql_query("select * from `one_way_admin_setup` where id='1'"));
		$dt1=$row->alert;

  ?>

<script language="JavaScript1.2" type="text/javascript" src="popcal/popcalendar.js"></script>
 <p></p>
 <p>&nbsp;</p>
 <form action="alert2.php" method="post">
 <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
  <td colspan="4" align="center"><font color="#FF0000" size="+2">Send Alert For Current Date </font></td>
</tr>
<tr>
  <td colspan="4" align="center">&nbsp;</td>
</tr>
<tr>

		<td colspan="4" align="center"><a href="alert1.php">Send Alert
  <?php if($dt1==$dt) echo " (Off)"; else echo " (On)"; ?>
 </a></td></tr>
<tr>

		<td colspan="4">&nbsp;&nbsp;</td></tr>

<tr>
  <td colspan="4" align="center"><font color="#FF0000" size="+2">Send Alert For Particular Date </font></td>
</tr>
<tr>

		<td colspan="4">&nbsp;&nbsp;</td></tr>
	<tr><td width="43%" align="right" ><b><font color="#000000" size="4">Select Date</font></b></td>
  	<td width="19%" align="center" ><input name="date1" id="date1" type="text" value="" /></td>
  	<td width="4%" align="left" ><img src="popcal/recurrcal.gif" width="27" height="21" style="cursor:pointer" onClick="popUpCalendar(date1,date1,'yyyy-mm-dd');" /></td>
   <td width="34%" align="left" ><input type="submit" name="submit" id="submit" class="butt1" value="submit" /></td>
</tr></table>



</form>
<table width="100%">
<tr><td align='center'> <font color="#003399" size="+2">Sended Alert List</font></td>
</tr>
<?php	$strSQL = "SELECT * FROM one_way_alert order by `date` asc";

//echo $strSQL;
	//echo $strSQL;
//id 	from_user_id 	to_user_id 	message 	date 	time 	product_id
    $objRS = mysql_query ($strSQL); //returns data from slaves

 while ($row = mysql_fetch_array($objRS)) 
   {  
    
	echo "<tr><td align='center'>".$row['date']."</td></tr>";
	} 
	?>
  

</table>