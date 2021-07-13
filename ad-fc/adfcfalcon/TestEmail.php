<html>
<head>
<title>Untitled Document5</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>


<?php

require_once('class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch

$mail->IsSMTP(); // telling the class to use SMTP

try {
  $mail->Host       = "ssl://mail.ad-fc.net"; // SMTP server
    $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  //$mail->Host       = "mail.ad-fc.net"; // sets the SMTP server
  //$mail->Port       = 26;                    // set the SMTP port for the GMAIL server
  $mail->Username   = "adfcfalcon@ad-fc.net"; // SMTP account username
  $mail->Password   = "falcon2018$";        // SMTP account password
  $mail->AddReplyTo('Rabih.Kallassy@indevcogroup.com', 'Rabih Kallassy');
  $mail->AddAddress('Rabih.Kallassy@indevcogroup.com', 'Rabih Kallassy');
  $mail->SetFrom('adfcfalcon@ad-fc.net', 'First Last');
  //$mail->AddReplyTo('adfcfalcon@ad-fc.net', 'First Last');
  $mail->Subject = 'PHPMailer Test Subject via mail(), advanced';
  //$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
  $mail->Body='Hello World How Are You Today';
  //$mail->MsgHTML(file_get_contents('contents.html'));
  $mail->AddAttachment('start_images/sign_up.gif');      // attachment
  $mail->AddAttachment('start_images/access_reseller.gif'); // attachment /**/
  $mail->Send(); /**/
  echo "Message Sent OK</p>\n";
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}

?>
</body>
</html>
