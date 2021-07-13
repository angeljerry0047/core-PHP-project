<?php 
		
		ob_start();
		session_start();
						//echo "dibakar";
						//echo $_SESSION['signup_userid'];
						//$_SESSION['signup_userid'];
						//exit();
						
						$price=$_SESSION['final_amount'];
						$account=$_SESSION['signup_account'];
						//header("Location:return_paypal.php");
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADFC Falcon</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="bannerad3.js" type="text/javascript"></script>

</head>
<body onload="JavaScript: document.fDalpay.submit();" bgcolor="#9999FF">

<body>
	
	<table width="1000" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td align="center" style="background-color:#9999FF;">
			<table width="780" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
				<!--head start -->
				<tr>
				  <td height="50" align="left" valign="top" style="background-color:#9999FF;"></td>
				</tr>
				<!--head end -->
				<!--body start -->
	 			 <tr>
					<td align="left" valign="top">
						<table width="100%" border="0" height="300" cellspacing="0" bgcolor="#FFFFFF" cellpadding="0">
							<tr>
							  <td align="center" valign="top"><span style="color:#FFFFFF; font-size:18px;">&nbsp;</span><table border="0" align="center">
<tr>
  <td align="center" height="150" valign="middle"><strong>"Transfering you to Dalpay....."</strong></td>
</tr>
<tr><td align="center"><script type="text/javascript">
var bar1= createBar(300,15,'white',1,'black','blue',85,7,3,"");
</script></td></tr>
</table>
<?
	$url='http://'.$_SERVER['HTTP_HOST'].substr($_SERVER['PHP_SELF'],0,strrpos($_SERVER['PHP_SELF'],"/"));
?>

<form name="fDalpay" action="https://secure.dalpay.is/cgi-bin/order2/processorder1.pl" method="POST" enctype="application/x-www-form-urlencoded">

					<input name="mer_id" type="hidden" value="080810">             
					<input name="mer_url_idx" type="HIDDEN" value="1">            
					<input name="num_items" type="hidden" value="1">
					<input name="item1_desc" type="hidden" size="50" value="<?php echo $_SESSION['caption'];?>">
                    <input name="item1_price" type="hidden" size="5" value="<?php echo $_SESSION['amount'];?>">
					<input name="item1_qty" type="hidden" size="2" class="input" value="1">
					<INPUT NAME="user1" TYPE="HIDDEN" VALUE="12345678">
	</form>


</td>
							 
							</tr>
					  </table></td>
	  			</tr>
				<!--body end -->
				<!--footer start -->
				
				<!--footer start -->
				
			</table>
		</td>
	  </tr>
	</table>
	
</body>
</html>
