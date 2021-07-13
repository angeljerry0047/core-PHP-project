<?php
   header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
   header ("Cache-Control: no-cache, must-revalidate"); 
   header ("Pragma: no-cache");                         

   include "lib_dbConnect.php";

   //unset ($user);
   //session_register ('user');
   //$user = $_SESSION['user'];

   if (!$user["logon"] || !$user["admin"])
   {
       echo "<script language='JavaScript'><!--\r\n top.location.href='admin_login.php'; \r\n--></script>";
       exit;
   }

   //if (empty($dir))
   //    $dir ="rtl";
   //
   //if ($dir=="rtl") 
   //    $dirName = "To English";
   //else
   //    $dirName = "To Arabic";
    if ($action=="send" && !empty($txt))
   {
        //phpinfo();
        //$txt = stripslashes ($txt);
        $txt = str_replace ("\\", "", $txt);
        $txt = str_replace ("'", "''", $txt);
        $stamp = mktime (date("G")+8,date("i"),date("s"),date("m")  ,date("d"),date("Y"));
        $sql = "insert into finance_chat (message, stamp) values ('$txt', '$stamp')";
        //echo $sql;
        @mysql_query( "$sql" ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (admin_main.php '3').<br>");
   }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ar" lang="ar" dir="rtl"-->
<html dir="rtl">
<head>
<script>
<!--
function doCheck()
{
   var myDoc;
   myDoc = document.chat;
   //alert (myDoc.txt.value);
   //alert (escape(myDoc.txt.value));
   myDoc.txt.value = escape(myDoc.txt.value);
   return true;
}
-->
</script>
<!--meta http-equiv="Content-Type" content="text/html; charset=windows-1256" -->
<meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8">
</head>
<form action='admin_text.php' name=chat method=post accept-charset='utf-8' enctype='application/x-www-form-urlencoded' onsubmit='return doCheck();'>
   <input type=hidden name=action value='send'>
   <input type=hidden name='dir' value='<?php echo $dir;?>'>
   Send Chat Message<br>
   <textarea name='txt' rows=10 cols=60 charset='utf-8' dir='rtl'></textarea><br>
   <input type=submit value='Send'>
   <input type=button value='To English' name='lang' onclick="javascript:if (document.chat.txt.dir=='ltr') {document.chat.txt.dir='rtl';document.chat.lang.value='To English';} else {document.chat.txt.dir='ltr'; document.chat.lang.value='To Arabic';}">
   </form>

</body>

</html>
