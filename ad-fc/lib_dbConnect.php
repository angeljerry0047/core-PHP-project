<?php
ini_set('register_globals', true);// turn register_globals on
if ( !in_array( strtolower( ini_get( 'magic_quotes_gpc' ) ), array( '1', 'on' ) ) )
{
    $_POST = array_map( 'addslashes', $_POST );
    $_GET = array_map( 'addslashes', $_GET );
    $_COOKIE = array_map( 'addslashes', $_COOKIE );
}
// Library for database connect

   include "vars.php";

   ini_set("SMTP", "127.0.0.1");
   $connection = mysql_connect($dbHost, $dbUsername, $dbUserPasswd)
       or $pError .= "Could not connect to database, try again later.<br>";

   @mysql_select_db($dbName);

   foreach ($_GET as $key=>$val)
   {
        $$key = $val;
   }
   foreach ($_POST as $key=>$val)
   {
        $$key = $val;
   }

   session_start();
   unset ($user);
   session_register ('user');
   $user = $_SESSION['user'];

function SaveError ($Error)
{

    global $debug;
    global $pUID;
    global $pError;

    $pError .= $Error;

    $stamp = time();
    $Error = str_replace ("<br>", "\r\n", $Error);
    $date = strftime ("%Y-%m-%d %T", $stamp);
    $ErrorText = "$date ($pUID). " . $Error;
    $fp = @fopen ("error.log", "a");
    @fputs ($fp, $ErrorText);
    @fclose ($fp);

}

function SendEmail ($to, $subject, $body, $from)
{

    $header = "From: {$from}\n";
    //$header .= "Content-Type: text/html; charset=iso-8859-1\n";

    @mail($to,$subject,$body,$header);
/*
    $uri  = "";
    $uri .= "?from=" . urlencode($from);
    $uri .= "&to=" . urlencode($to);
    $uri .= "&subject=" . urlencode($subject);
    $uri .= "&body=" . urlencode($body);

    $file = fopen ("http://www.ad-fc.net/sendemail.asp{$uri}", "r");
    if ($file) {
        while (!feof ($file)) {
           $line .= fgets ($file, 1024);
        }
    }
    fclose($file);

    if ($line == "Email has been sent")
        return true;
    else
        return false;
*/

}


?>
