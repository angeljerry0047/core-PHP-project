<?php
ob_start();
session_start();
include_once('config.php');
include_once('includes/functions.php');
include("class.phpmailer.php");

 




/*// multiple recipients
$to  = 'dibakartest@ad-fc.net' . ', '; // note the comma
$to .= 'dibakartest@ad-fc.net';

// subject
$subject = 'Testing';

// message
$message = '
<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
  <p>Here are the birthdays upcoming in August!</p>
  <table>
    <tr>
      <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
    </tr>
    <tr>
      <td>Joe</td><td>3rd</td><td>August</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: Dibakar Test <dibakartest@ad-fc.net> Dibakar Nandi <dibakar.nandi@yahoo.in>' . "\r\n";
$headers .= 'From: ADFC FALCON<adfcfalcon@ad-fc.net>' . "\r\n";
$headers .= 'Cc: dibakar.nandi@yahoo.in' . "\r\n";
$headers .= 'Bcc: dibakar@dreamztech.com' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);


echo "Done";*/




				$Subject1 ="ADFC Falcon Account Information";

					$TemplateMessage.="<br>------------------------------------------------------------------------------------------------------------";
					$TemplateMessage.="<br><br>Email Testing ";
					 
					$TemplateMessage.="<br><br>Dear ".$name;
					
					$TemplateMessage.="<br><br>As per your request, please find below your unsername and password";
					 
					$TemplateMessage.="<br><br>username :".$user_id;
					$TemplateMessage.="<br><br>password:".$password;
				  
				  
				  $TemplateMessage.="<br><br>Regards";
 
					$TemplateMessage.="<br><br>ADFC Falcon team";
					$TemplateMessage.="<br><br>-------------------------------------------------------------------------------------------------------------";
 
				  
				  
					$mail1 = new PHPMailer;

					 $mail1->IsSMTP();                                      // set mailer to use SMTP
					 $mail1->Host = "mail.ad-fc.net";  // specify main and backup server
					 $mail1->SMTPAuth = true;     // turn on SMTP authentication
					 $mail1->Username = "adfcfalcon@ad-fc.net";  // SMTP username
					$mail1->Password = "falcon2018$"; // SMTP password
				 
				//    $mail1->AddCustomHeader('Return-Path: ' . 'dibakartest@ad-fc.net'); 
				 
				 
					$mail1->FromName = "ADFC Falcon";

					$mail1->From    = "adfcfalcon@ad-fc.net";

					$mail1->Subject = $Subject1;

					$mail1->Body    = stripslashes($TemplateMessage);

					$mail1->AltBody = stripslashes($TemplateMessage);

					$mail1->IsHTML(true);

					$mail1->AddAddress("dibakar.nandi@yahoo.in","dibakar.nandi@yahoo.in");
					//$mail1->AddAddress("amit215115@yahoo.co.in","amit215115@yahoo.co.in");
					//$mail1->AddAddress("dibakar@dreamztech.com","amit215115@yahoo.co.in");

				     $mail1->Send();
					 
					 $mail1->AddAddress("dibakar@dreamztech.com","dibakar@dreamztech.com");
					//$mail1->AddAddress("amit215115@yahoo.co.in","amit215115@yahoo.co.in");
					//$mail1->AddAddress("dibakar@dreamztech.com","amit215115@yahoo.co.in");

				     $mail1->Send();
					 
					 $mail1->AddAddress("dibakartest@ad-fc.net","dibakartest@adfincorp.com");
					//$mail1->AddAddress("amit215115@yahoo.co.in","amit215115@yahoo.co.in");
					//$mail1->AddAddress("dibakar@dreamztech.com","amit215115@yahoo.co.in");

				     $mail1->Send();
					 
					 
				echo "Done3 445";	 
		
				
				
				
				
		
$to      = 'dibakar.nandi@yahoo.in';
$subject = 'the subject';
$message = 'hello';

$headers .= "From: <dibakartest@ad-fc.net>\n";
$headers .= "X-Sender: <dibakartest@ad-fc.net>\n";
$headers .= "X-Mailer: PHP\n"; // mailer
$headers .= "Return-Path: <dibakartest@ad-fc.net>\n"; // Return path for errors 


/*$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'Return-Path: <dibakartest@ad-fc.net>' . "\r\n";
$headers .= 'To: dibakar.nandi@yahoo.in' . "\r\n";
$headers .= 'From: dibakartest@ad-fc.net' . "\r\n" .
    'Reply-To: dibakartest@ad-fc.net' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();*/


//send the email
$mail_sent = @mail( $to, $subject, $message, $headers );

//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 
echo $mail_sent ? "Mail sent" : "Mail failed";
				$to = "dibakar.nandi@yahoo.in";
		/*		$subject = "Hi!";
				$body = "Hi,\n\nHow are you?";
				if (mail($to, $subject, $body)) {
				  echo("<p>Message successfully sent!</p>");
				 } else {
				  echo("<p>Message delivery failed...</p>");
				 }
*/


/*


				$to = "dibakartest@ad-fc.net";
				$subject = "Hi!";
				$body = "Hi,\n\nHow are you?";
				if (mail($to, $subject, $body)) {
				  echo("<p>Message successfully sent!</p>");
				 } else {
				  echo("<p>Message delivery failed...</p>");
				 }

//define the receiver of the email
$to = 'dibakar.nandi@yahoo.in';

//define the subject of the email
$subject = 'Test email'; 

//define the message to be sent. Each line should be separated with \n
$message = "Hello World!\n\nThis is my first mail."; 

//define the headers we want passed. Note that they are separated with \r\n
$headers = "From: dibakartest@ad-fc.net\r\nReply-To: dibakar.nandi@yahoo.in'";

//send the email
$mail_sent = @mail( $to, $subject, $message, $headers );

//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 
echo $mail_sent ? "Mail sent" : "Mail failed";

*/


			
?>
