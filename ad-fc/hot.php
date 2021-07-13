<?php

  header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
  header ("Cache-Control: no-cache, must-revalidate"); 
  header ("Pragma: no-cache");                         

  error_reporting(0);

  $fb = @fread(@fopen('hot.txt', "r"), 102400);

  $fb = str_replace ('"', "'", $fb);
  $fb = str_replace ("\r\n", "\\r\\n", $fb);
  $fb = str_replace ("\n", "\\n", $fb);
  $fb = str_replace ("\r", "\\r", $fb);
  
  //echo "document.write(\"{$fb}\");";

  fwrite (fopen("hot.html", "w"), "document.write(\"{$fb}\");");

  $stamp = time();
  Header ("Location: hot.html?{$stamp}");

?>