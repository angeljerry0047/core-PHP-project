<?php

   header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
   header ("Cache-Control: no-cache, must-revalidate"); 
   header ("Pragma: no-cache");                         

   include "lib_dbConnect.php";

   //unset ($user);
   //session_register ('user');

   $stamp = time() - 1001;
   @mysql_query( "update finance_users set lastupdate='$stamp', session='' where id='{$user ["id"]}' limit 1" ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (admin_main.php '3').<br>");   

   $user ["id"]       = -1;
   $user ["logon"]    = false;
   $user ["time"]     = "";

   $_SESSION['user'] = $user;

   echo "<script language='JavaScript'><!--\r\n top.location.href='chat_login.php'; \r\n--></script>";
   exit;
?>
