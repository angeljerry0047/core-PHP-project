<?php

   header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
   header ("Cache-Control: no-cache, must-revalidate"); 
   header ("Pragma: no-cache");                         

   include "lib_dbConnect.php";

   //unset ($user);
   //session_register ('user');

   if ($action=='restore')
   {
      if (empty($email))
      {
          $bad1 = "Bad Email";
          $err = true;
      }

      $sql = "select * from finance_users where email='$email'";
      //echo $sql;
      $result = @mysql_query( $sql ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (login.php '1').<br>");  
      $row = mysql_fetch_array( $result );
      if (mysql_num_rows($result) == 0 )
      {
          $bad1 = "User's data not found";
          $err = true;
      }

      if (!$err)
      {

          $ppw = $row['ppw'];
          $send = "
Hello,

Someone, probably you, asked us to send this information to you.

Don't worry, your login and password can only be sent to your email address of record; nowhere else!

Your login and password to the chat area is:

LOGIN    - {$row['username']}
PASSWORD - $ppw

Remember your password is case-sensitive. So you must enter exactly the way it appears here.
Thank you for using our service.


";

          @SendEmail("{$row['email']}", "Restore Password Email", "$send", "adaoud@ad-fc.net");
          $bad1 = "Your logon information was successfully sended by email";
      }
   }


   $Body = @fread(@fopen("template.html", "r") , 50000);
   $skin_len = strlen ($Body);

   $pos = strpos ($Body, "<%CONTENT%>");
   $top = substr ($Body, 0, $pos);
   echo $top;

   $inBody = "<form action='forgot.php' method=post><input type='hidden' name='action' value='restore'>
                <table width='400' border='0' cellspacing='1' cellpadding='1' align='center'>
                <tr bgcolor='#666666'> 
                  <td>
                    <table width='100%' border='0' cellspacing='1' cellpadding='5' height='78' class=copy2 bgcolor='#f5f5f5'>
                      <tr align='center'> 
                        <td colspan='2'>Restore Password<br><font color='red'><b>$bad1</b></font></td>
                      </tr>
                      <tr> 
                        <td align='right'>Email:</td>
                        <td> 
                          <input type='text' name='email' size='50' maxlength='50' >
                        </td>
                      </tr>
                      <tr> 
                        <td>&nbsp;</td>
                        <td> 
                          <input type='submit' name='Submit' value='Restore' class=button>
                        </td>
                      </tr>
                      <tr> 
                        <td>&nbsp;</td>
                        <td><a href='login.php'>Login</a></td>
                      </tr>
                      <tr> 
                        <td>&nbsp;</td>
                        <td><a href='register.php'>New User? Please Register</a></td>
                      </tr>
                    </table>
                  </td>
                </tr>
                </table></form><br>
            ";  

   echo $inBody;


   $footer = substr ($Body, $pos+11, $skin_len-$pos-11);
   echo $footer;
?>