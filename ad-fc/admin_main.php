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
        Header ("Location: admin_login.php");
        exit;
   }

   if ($action=="flush" && !empty($id))
   {
        $stamp = time() - 1001;
        @mysql_query( "update finance_users set lastupdate='$stamp', session='' where id='{$id}' limit 1" ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (admin_main.php '3').<br>");   
        Header ("Location: admin_main.php");
        exit;
   }

   if ($action=="remove" && !empty($id))
   {
        @mysql_query( "delete from finance_users where id='{$id}' limit 1" ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (admin_main.php '3').<br>");   
        Header ("Location: admin_main.php");
        exit;
   }

   if ($action=="maketrial" && !empty($id))
   {
        $time = time();
        @mysql_query( "update finance_users set stamp='$time' where id='{$id}' limit 1" ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (admin_main.php '3').<br>");
        @mysql_query( "update finance_users set type='trial' where id='{$id}' limit 1" ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (admin_main.php '3').<br>");   
        Header ("Location: admin_main.php");
        exit;
   }

   if ($action=="makeclient" && !empty($id))
   {
        @mysql_query( "update finance_users set type='client' where id='{$id}' limit 1" ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (admin_main.php '3').<br>");   
        @mysql_query( "update finance_users set is_blocked='no' where id='{$id}' limit 1" ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (admin_main.php '3').<br>");
        Header ("Location: admin_main.php");
        exit;
   }

   if ($action=="advis" && !empty($id))
   {
        @mysql_query( "update finance_users set advisory='yes' where id='{$id}' limit 1" ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (admin_main.php '3').<br>");
        Header ("Location: admin_main.php");
        exit;
   }

   if ($action=="unadvis" && !empty($id))
   {
        @mysql_query( "update finance_users set advisory='' where id='{$id}' limit 1" ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (admin_main.php '3').<br>");
        Header ("Location: admin_main.php");
        exit;
   }

   if ($action=="approve" && !empty($id))
   {
        @mysql_query( "update finance_users set approve='1' where id='{$id}' limit 1" ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (admin_main.php '3').<br>");

        $sql = "select * from finance_users where id='{$id}' ";
        $result = @mysql_query( "$sql" ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (admin_main.php '3').<br>");   
        $row = @mysql_fetch_array( $result );

        if ($row['type']=='trial' || $row['type']==''){        
            $trial = "trial period : {$row['expire']}";
        }
        $send = "
Thank you for submitting your request. Please Find below your trial period for ADFC research

Site:www.ad-fc.net
ID  :{$row['username']}
Psw :{$row['ppw']}
$trial

regards
 
ADFC
";
        @SendEmail("{$row['email']}",              "ADFC trial period", "$send", "register@ad-fc.net");

        Header ("Location: admin_main.php");
        exit;
   }

   if ($action=="unapprove" && !empty($id))
   {
        @mysql_query( "update finance_users set approve='0' where id='{$id}' limit 1" ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (admin_main.php '3').<br>");
        Header ("Location: admin_main.php");
        exit;
   }

   if ($action=="block" && !empty($id))
   {
        @mysql_query( "update finance_users set is_blocked='yes' where id='{$id}' limit 1" ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (admin_main.php '3').<br>");
        Header ("Location: admin_main.php");
        exit;
   }
   
   if ($action=="unblock" && !empty($id))
   {
        $time = time();
        @mysql_query( "update finance_users set stamp='$time' where id='{$id}' limit 1" ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (admin_main.php '3').<br>");
        @mysql_query( "update finance_users set is_blocked='no' where id='{$id}' limit 1" ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (admin_main.php '3').<br>");
        Header ("Location: admin_main.php");
        exit;
   }
   $Body = @fread(@fopen("template.html", "r") , 50000);
   $skin_len = strlen ($Body);

   $pos = strpos ($Body, "<%CONTENT%>");
   $top = substr ($Body, 0, $pos);
   echo $top;


   $sql = "select * from finance_users order by lastupdate desc";
   $result = @mysql_query( "$sql" ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (admin_main.php '3').<br>");   

   $date = date("F j, Y");

   $header = "<IFRAME bgcolor=#ffffff SRC='admin_text.php' WIDTH=654 HEIGHT=250 NAME=messagesFrame SCROLLING=auto NORESIZE align=center frameborder=0 vspace=0 hspace=0 marginwidth=0 marginheight=0></IFRAME>
   <a href='admin_hot.php'>Edit HOT box</a><br>
   <table border=1 width=100%>
   <tr><td align=center>id</td><td>username<br>password</td><td>email</td><td>&nbsp;type</td><td>&nbsp;connection</td><td>&nbsp;reg.date</td><td>&nbsp;action</td><td>&nbsp;approv.</td><td>&nbsp;blocked</td><td>&nbsp;advis.</td></tr>
   ";
   $inBody .= $header;

   $i=1;
   while ($row = @mysql_fetch_array( $result ))
   {
          $id          = $row['id'];
          $email       = $row['email'];
          $type        = $row['type'];
          if ($type=="trial")
              $type = "<a href='admin_main.php?action=makeclient&id={$id}'>trial</a>";
          else
              $type = "<a href='admin_main.php?action=maketrial&id={$id}'>client</a>";

          $approve        = $row['approve'];
          if ($approve=="1")
          {
              $approve  = "<a href='admin_main.php?action=unapprove&id={$id}'>Yes</a>";
              $uname    = "{$row['username']}";
          }
          else
          {
              $approve  = "<a href='admin_main.php?action=approve&id={$id}'>No</a>";
              $uname    = "<b>{$row['username']}</b>";
          }

          $advisory        = $row['advisory'];
          if ($advisory=="yes")
          {
              $advisory  = "<a href='admin_main.php?action=unadvis&id={$id}'>Yes</a>";
          }
          else
          {
              $advisory  = "<a href='admin_main.php?action=advis&id={$id}'>No</a>";
          }

          $blocked        = $row['is_blocked'];
          if ($blocked=="yes")
          {
              $blocked = "<a href='admin_main.php?action=unblock&id={$id}'>Yes</a>";
              $uname    = "<b>{$row['username']}</b>";
          }
          else
          {
              $blocked = "<a href='admin_main.php?action=block&id={$id}'>No</a>";
          }
          $lastupdate        = $row['lastupdate'];
          $updateCheck = time() - 1000;

          if ($lastupdate>$updateCheck)
              $status = "<a href='admin_main.php?action=flush&id={$id}'><b>ONLINE</b></a>";
          else
              $status = date ("F j, Y, G:i", $lastupdate);

          $reg = date ("F j, Y, G:i", $row['stamp']);

          if (empty($lastupdate))
              $status = "NEVER";


          $act = "<a href='admin_edit.php?action=edit&id={$id}'>edit</a>&nbsp;|&nbsp;<a href='admin_main.php?action=remove&id={$id}'>remove</a>";
          $vars       .= "<tr><td align=center>$i</td><td>{$uname}<br>{$row['ppw']}<td><a href='mailto:$email'>$email</a></td><td>&nbsp;{$type}</td><td>&nbsp;{$status}</td><td>&nbsp;{$reg}</td><td>&nbsp;{$act}</td><td>&nbsp;{$approve}</td><td>&nbsp;{$blocked}</td><td>&nbsp;{$advisory}</td></tr>\r\n";

          $i++;
   }

   $inBody .= $vars;
   $inBody .= "<tr><td colspan=10 align=center><a href='admin_register.php'><b>insert new</b></a></td></tr>";
   $inBody .= "</table>";
   echo $inBody;

   $footer = substr ($Body, $pos+11, $skin_len-$pos-11);
   echo $footer;
?>