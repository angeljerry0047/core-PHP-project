<?php

   header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
   header ("Cache-Control: no-cache, must-revalidate"); 
   header ("Pragma: no-cache");                         

   include "lib_dbConnect.php";

   //unset ($user);
   //session_register ('user');

   if ($user['logon']!=true)
   {
       echo "<script language='JavaScript'><!--\r\n top.location.href='chat_login.php'; \r\n--></script>";
       exit;
   
   }


   $beep = "<BGSOUND AUTOSTART='FALSE' HIDDEN='TRUE' name='Beep' id='Beep'>";

   $inBody = "
<!--html xmlns='http://www.w3.org/1999/xhtml' xml:lang='ar' lang='ar' dir='ltr'-->
<html>
<head>
<meta HTTP-EQUIV='content-type' CONTENT='text/html; charset=UTF-8'>
<!--META HTTP-EQUIV=REFRESH CONTENT=30;URL='chat_messages.php?last={$lastID}'-->
<SCRIPT><!--
     var ayAudio = new Array();
     ayAudio[0] = 'ding.wav';
//-->
</SCRIPT>
</head>
<body>
<a href='chat_logout.php'><font style='font-size=18px'><b>exit</b></font></a>
{$beep}
";

   //$date = date("F j, Y, G:i");
   //echo $date;

   $xtime = mktime (date("G")+8,date("i"),date("s"),date("m")  ,date("d"),date("Y"));
   $date = date("F j, Y", $xtime);

   $header = "<h1><p align=center><span id='date'></span>&nbsp;<span id='time'>$date</span></p></h1>\r\n";
   $inBody .= $header;

   $inBody .= "<span id='txt'>\r\n{$vars}\r\n</span>";

   $time = time();
   $sql = "update finance_users set lastupdate='$time' where id='{$user["id"]}'";
   @mysql_query( $sql ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (chat_login.php '1').<br>");
   
   $inBody .= "<script language='JavaScript'><!--\r\n top.frames[\"uploadFrame\"].location.href='chat_upload.php?id=0';\r\n--></script>";
   $inBody .= "</body></html>";
   echo $inBody;

   exit;
?>