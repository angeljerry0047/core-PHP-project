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

   $sessID = session_id();
   $sql = "select * from finance_users where id='{$user['id']}' and session='$sessID' ";
   //echo $sql;
   $result = @mysql_query( "$sql" ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (upload.php '22').<br>");   
   //echo mysql_num_rows($result);
   if (mysql_num_rows($result)==0)
   {
       $stamp = time() - 1001;
       @mysql_query( "update finance_users set lastupdate='$stamp', session='' where id='{$user['id']}' limit 1" ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (admin_main.php '3').<br>");   
       $user['logon'] = false;
       echo "<script language='JavaScript'><!--\r\n top.location.href='chat_login.php'; \r\n--></script>";
       exit;
   
   }

   if (empty($id))
       $id = "0";

   $time = time();
   $sql = "update finance_users set lastupdate='$time' where id='{$user["id"]}'";
   @mysql_query( $sql ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (chat_login.php '1').<br>");  

   $stamp = mktime (date("G")+8,date("i"),date("s"),date("m")  ,date("d"),date("Y"));
   $time = mktime (0,0,0,date("m",$stamp),date("d",$stamp),date("Y",$stamp));
   $sql = "select * from finance_chat where stamp>$time and (touser='*' or touser='{$user["id"]}') and id>'$id' order by id desc";
   //echo $sql;
   $result = @mysql_query( "$sql" ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (upload.php '45').<br>");   
   echo "<script language='JavaScript'><!--\r\n";
   echo "doc=top.frames['messagesFrame'].document;\r\n";
   $lastID = "";
   while ($row = @mysql_fetch_array( $result ))
   {
          $txt         = stripslashes($row['message']);
          if (!empty($txt))
          {
             $txtBlocks   = split ("[\r\n]", $txt);
             $txt = "";
             foreach ( $txtBlocks as $block)
             {
                if (strpos($block, "%u06")===false)
                {
                     $txt .= "<div class=usertext align=left dir='ltr' ><b>$block</b></div>";
                }
                else
                {
                     $txt .= "<div class=usertext align=right dir='rtl'><b>$block</b></div>";
                }
             }
            
             $txt         = str_replace ("\r\n" , "<br>" , $txt);
             $time        = $row['stamp'];
             $time        = date ("G:i", $time);
             $vars       .= "<span class=time><b>AD-Financial $time</b></span><br>$txt<br>";
          }
          if (empty($lastID)) $lastID = "" . intval($row['id']);
          $beep = "if (doc.all.Beep) doc.all.Beep.src='ding.wav';";
   }
   if (empty($lastID)) $lastID = "{$id}";
   $vars = str_replace ("'", "\'", $vars);
   echo "if (typeof (doc.all.txt) != 'undefined') {doc.all.txt.innerHTML=unescape('$vars')+doc.all.txt.innerHTML;}\r\n";
   echo "$beep\r\n";
   echo "\r\n--></script>\r\n";


   echo "<script language='JavaScript'><!--\r\n";
   echo "setTimeout(\"this.location.href='chat_upload.php?id=$lastID'\",5000);\r\n";
   echo "\r\n--></script>";
   exit;
?>