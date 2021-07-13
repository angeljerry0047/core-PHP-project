<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
// The message

$sendto = "rabih.kallassy@indevcogroup.com";
$subject = "php mail test";
$message = 'Test message using PHP mail()';
$header = "From: webmaster@".$_SERVER["SERVER_NAME"]."\n";
$header .= "Content-Type: text/html; charset=iso-8859-1\n";

$message = 'Test message using PHP mail()';
$subject='Test';
// Send

//ini_set("sendmail_from","webmaster@".$_SERVER["SERVER_NAME"]);

if (mail($sendto,$subject,$message,$header))
{
 echo 'Mail sent!';
} else
{
 echo 'Error! Mail was not sent.';
};

?> 

</body>
</html>
