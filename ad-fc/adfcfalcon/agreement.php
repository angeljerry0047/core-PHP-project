<?php

include("config.php");

?> 


<?php 
            $l=$_REQUEST['l']; 
            $sql="select * from `one_way_admin_setup` where `id`='1'";
			$res=mysql_query($sql);
			$row=mysql_fetch_array($res);
			if($l=="arb")
				echo $row['aterms'];
			else
			    echo $row['terms'];
			
				
	
	mysql_close($link);
?>