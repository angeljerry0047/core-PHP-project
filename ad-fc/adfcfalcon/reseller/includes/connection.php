<?php



//$servername='98.130.0.121:3306' ;  // Replace this 'localhost' with your server name 
//$database_username='C293136_root'; // Replace this  with your username
//$database_password='R1k3alla';  // Replace this  with your password
//$database_name='C293136_one_way_messenger';  // Replace this 'db' with your database name

$servername='139.162.172.118' ;  // Replace this 'localhost' with your server name 
$database_username='adfcnet_onwwayms'; // Replace this  with your username
$database_password='_v,^Qcy.#vhf';  // Replace this  with your password
$database_name='adfcnet_one_way_messenger';  // Replace this 'db' with your database name

mysql_connect($servername,$database_username,$database_password) or mysql_error();
mysql_select_db($database_name) or mysql_error();

?>