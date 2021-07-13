<?php
ob_start();
session_start();
?>
<html>
<head>
<title>ADFC Falcon</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="includes/style.css" rel="stylesheet" type="text/css">

<body>
<center>
<table width="100%" border="0">
  <tr>
    <th colspan="3" align="center" scope="col"></th>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center"><img src="start_images/heading.gif" border="none"></td>
  </tr>
  <tr>
    <td colspan="3" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center" style="color:#FF0000;"><?php  echo $_SESSION['msg']; $_SESSION['msg']="";?></td>
  </tr>
  <tr>
    <td colspan="3" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%"  align="right"><a href="signup.php"><img src="start_images/sign_up.gif" border="none"></a>	</td>
    <td width="25"  align="center">&nbsp;</td>
    <td width="30"  align="left"><a href="ADFCFalcon-Arabic.exe"><img src="start_images/download_adfc.gif" border="none"></a>	</td>
  </tr>
  <tr>
    <td colspan="3"  align="center">&nbsp;</td>
  </tr>
  
  <tr>
    <td width="33%"  align="right"><a href="renew.php"><img src="start_images/renew_subscription.gif" border="none"></a>	</td>
    <td width="25"  align="center">&nbsp;</td>
    <td width="39%"  align="left"><a href="ADFCFalcon-English.exe"><img src="start_images/download_adfc_0.gif" border="none"></a>	</td>
  </tr>
  <tr>
    <td colspan="3"  align="center">&nbsp;</td>
  </tr>
  
  <tr>
    <td width="33%"  align="right"><a href="forgetpassword1.php"><img src="start_images/forget_uname_pass.gif" border="none"></a>	</td>
    <td width="25"  align="center">&nbsp;</td>
    <td width="39%"  align="left"><a href="reseller/login.php"><img src="start_images/access_reseller.gif" border="none"></a>	</td>
  </tr>
  <tr>
    <td colspan="3"  align="center">&nbsp;</td>
  </tr>
  
  
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center"><a href="installation.htm"><img src="start_images/how_to_install.gif" border="none"></a></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</center>
</html>