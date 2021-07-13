<?php

   header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
   header ("Cache-Control: no-cache, must-revalidate"); 
   header ("Pragma: no-cache");                         

   include "lib_dbConnect.php";

   //unset ($user);
   //session_register ('user');


   $Body = @fread(@fopen("template.html", "r") , 50000);
   $skin_len = strlen ($Body);

   $pos = strpos ($Body, "<%CONTENT%>");
   $top = substr ($Body, 0, $pos);
   echo $top;

   $inBody = "
           <IFRAME bgcolor=#ffffff SRC='chat_messages.php' WIDTH=654 HEIGHT=350 NAME=messagesFrame SCROLLING=auto NORESIZE align=center frameborder=0 vspace=0 hspace=0 marginwidth=10 marginheight=0></IFRAME>
           <IFRAME bgcolor=#ffffff SRC='chat_upload.php?id=0' WIDTH=654 HEIGHT=20 NAME=uploadFrame SCROLLING=no NORESIZE align=center frameborder=0 vspace=0 hspace=0 marginwidth=0 marginheight=0></IFRAME>
   ";

   echo $inBody;
   
   $footer = substr ($Body, $pos+11, $skin_len-$pos-11);
   echo $footer;
?>