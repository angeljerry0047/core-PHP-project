<?php
   header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
   header ("Cache-Control: no-cache, must-revalidate"); 
   header ("Pragma: no-cache");                         
    
   include "lib_dbConnect.php";
   //$user=&$_SESSION;
   //unset ($user);
   //session_register ('user');

   $user ["logon"]    = false;
   $user ["advisory"] = false;
   $user ["admin"]    = false;

   if ($_POST['action']=="login")
   {
        $email=$_POST['email'];
        $ppw=$_POST['ppw'];
       if ($email=="adaoud1" || $ppw=="ornella1963$")
       {
          $time = time();
          $user ["logon"]    = true;
          $user ["admin"]    = true;
          $user ["email"]    = "admin@ad-fc.net";
          $_SESSION['user']  = $user;

          //die('labi');

          Header ("Location: admin_main.php");
          exit;
       }

       if (empty($email) || empty($ppw))
       {
          $bad1 = "Email or Password is incorrect";
          $err = true;
       }
   }

   $Body = @fread(@fopen("template.html", "r") , 50000);
   $skin_len = strlen ($Body);

   $pos = strpos ($Body, "<%CONTENT%>");
   $top = substr ($Body, 0, $pos);
   echo $top;

   $inBody = "<form action='admin_login.php' method=post><input type='hidden' name='action' value='login'>
                <table width='400' border='0' cellspacing='1' cellpadding='1' align='center'>
                <tr bgcolor='#666666'> 
                  <td>
                    <table width='100%' border='0' cellspacing='1' cellpadding='5' height='78' class=copy2 bgcolor='#f5f5f5'>
                      <tr align='center'> 
                        <td colspan='2'>Login<br><font color='red'><b>$bad1</b></font></td>
                      </tr>
                      <tr> 
                        <td align='right'>Username:</td>
                        <td> 
                          <input type='text' name='email' size='50' maxlength='50'>
                        </td>
                      </tr>
                      <tr> 
                        <td align='right'>Password:</td>
                        <td> 
                          <input type='password' name='ppw' size='50' maxlength='50'>
                        </td>
                      </tr>
                      <tr> 
                        <td>&nbsp;</td>
                        <td> 
                          <input type='submit' name='Submit' value='Login' class=button>
                        </td>
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