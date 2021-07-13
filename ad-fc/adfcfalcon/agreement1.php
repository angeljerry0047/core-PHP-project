<?php

include("config.php");

?> 


<?php 

    $l=$_REQUEST['l']; 
    $sql="select * from `one_way_admin_setup` where `id`='1'";
			$res=mysql_query($sql);
			$row=mysql_fetch_array($res);
			if($l=="arb")
				$des=$row['aterms'];
			else
				$des=$row['terms'];
	
	mysql_close($link);
?>

	<!DOCTYPE html PUBLIC -//W3C//DTD XHTML 1.1//EN"   
http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml">   
<head>   
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
    <title>Test for UTF-8</title>   
</head>   
<body>  
<body>
<textarea name="aterms" cols="45" rows="10"  dir='rtl' style='margin: 0in 0in 0pt; direction: rtl; text-align: right;font-size:14px;' ><?php echo $des; ?></textarea>
<textarea name="aterms" cols="45" rows="10" ><?php echo $des; ?></textarea>

</body>
</html>