<?php

   header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
   header ("Cache-Control: no-cache, must-revalidate"); 
   header ("Pragma: no-cache");                         

   include "lib_dbConnect.php";

   //unset ($user);
   //session_register ('user');

   if ($action=='register')
   {
  
      if (empty($useremail) || !preg_match("/[\w\d\-\.]+@[\w\d\-]+(\.[\w\d\-]+)+/", $useremail) )
      {
          $bad1 .= "Bad Email<br>";
          $err  = true;
      }

      if (empty($fname))
      {
          $bad1 .= "Bad First Name<br>";
          $err  = true;
      }

      if (empty($lname))
      {
          $bad1 .= "Bad Last Name<br>";
          $err  = true;
      }

      if (empty($address))
      {
          $bad1 .= "Bad Address<br>";
          $err  = true;
      }

      if (empty($phone))
      {
          $bad1 .= "Bad Phone Number<br>";
          $err  = true;
      }

      $sql = "select email from finance_users where email='$useremail'";
      $result = @mysql_query( $sql ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (register.php '1').<br>");  
      if (mysql_num_rows($result) > 0 )
      {
          $bad1 .= "Email Already Exists<br>";
          $err  = true;
      }

      if (empty($ppw) || empty($ppw2))
      {
          $bad1 .= "Password is empty<br>";
          $err  = true;

      }

      if ($ppw!=$ppw2)
      {
          $bad1 .= "Passwords not match<br>";
          $err  = true;

      }

      if (!$err)
      {
          $time = time();

          $username=substr($fname,0,1);
          $username.=$lname;
          $username=strtolower($username);
          $sql = "insert into finance_users (username, email, ppw, fname, lname, address, phone, stamp) values ('$username', '$useremail', '$ppw', '$fname', '$lname', '$address', '$phone', '$time')";
          $result = @mysql_query( $sql ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (register.php '1').<br>");  
          $id = mysql_insert_id ();

          if (!empty($id))
          {
             $send = "
Hello,
New user trial request:
LOGIN    - $username
NAME     - $fname $lname
EMAIL    - $useremail
Thanks
";

             @SendEmail($useremail,              "New Registration", "$send", "register@ad-fc.net");
             @SendEmail('adaoud@ad-fc.net', "ADFC trial period Request", "$send", "adaoud@ad-fc.net");

             //$time = time();
             //$user ["id"]       = $id;
             //$user ["logon"]    = true;
             //$user ["time"]     = $time;
             //$user ["email"]    = $useremail;

             //$time = time();
             //$sql = "update finance_users set lastupdate='$time' where id='{$user["id"]}'";
             //@mysql_query( $sql ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (login.php '1').<br>");  

             Header ("Location: thanks.html");
             exit;

          }
      }

  }



   $Body = @fread(@fopen("template.html", "r") , 50000);
   $skin_len = strlen ($Body);

   $pos = strpos ($Body, "<%CONTENT%>");
   $top = substr ($Body, 0, $pos);
   echo $top;

   $inBody = "<form action='register.php' method=post><input type='hidden' name='action' value='register'>
                <table width='429' border='0' cellspacing='1' cellpadding='1' align='center'>
                <tr bgcolor='#b4b4b4'> 
                  <td width='429' bgcolor='#666666' > 
                    <table width='100%' border='0' cellspacing='1' cellpadding='5' height='78' bgcolor='#f5f5f5' class=copy2>
                      <tr align='center'> 
                        <td colspan='2'>Register New Member<br>
                          <font color='red'><b>$bad1</b></font>
                          <font color='red'>*</font> - Required Fields</td>
                      </tr>
                      <tr> 
                        <td align='right'>First Name<font color='red'>*</font>:</td>
                        <td> 
                          <input type='text' name='fname' size='30' maxlength='100' value='$fname'>
                        </td>
                      </tr>
                      <tr> 
                        <td align='right'>Last Name<font color='red'>*</font>:</td>
                        <td> 
                          <input type='text' name='lname' size='30' maxlength='100' value='$lname'>
                        </td>
                      </tr>
                      <tr> 
                        <td align='right'>Email<font color='red'>*</font>:</td>
                        <td> 
                          <input type='text' name='useremail' size='50' maxlength='200' value='$useremail'>
                        </td>
                      </tr>
                      <tr> 
                        <td align='right'>Password<font color='red'>*</font>:</td>
                        <td> 
                          <input type='password' name='ppw' size='30' maxlength='50'>
                        </td>
                      </tr>
                      <tr>
                        <td align='right'>Password Again<font color='red'>*</font>:</td>
                        <td>
                          <input type='password' name='ppw2' size='30' maxlength='50'>
                        </td>
                      </tr>
                      <tr> 
                        <td align='right'>Address<font color='red'>*</font></td>
                        <td> 
                          <input type='text' name='address' size='50' maxlength='250' value='$address'>
                        </td>
                      </tr>
                      <tr> 
                        <td align='right'>Phone<font color='red'>*</font></td>
                        <td> 
                          <input type='text' name='phone' size='30' maxlength='50' value='$phone'>
                        </td>
                      </tr>
                      <tr> 
                        <td>&nbsp;</td>
                        <td> 
                          <input type='submit' name='Submit' value='Register' class=button>
                        </td>
                      </tr>
                      <tr> 
                        <td>&nbsp;</td>
                        <td><a href='login.php'>Login</a></td>
                      </tr>
                      <tr> 
                        <td>&nbsp;</td>
                        <td><a href='forgot.php'>Forgot Password</a></td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
              </form><br>
            ";  

   echo $inBody;


   $footer = substr ($Body, $pos+11, $skin_len-$pos-11);
   echo $footer;
?>