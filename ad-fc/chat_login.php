<?php

   header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
   header ("Cache-Control: no-cache, must-revalidate"); 
   header ("Pragma: no-cache");                         

   include "lib_dbConnect.php";

   //unset ($user);
   //session_register ('user');

   if ($user ["logon"])
   {
       Header ("Location: chat_main.php");
       exit;
   }

   if ($action=="login")
   {
       $err = false;
       if (empty($username) || empty($ppw))
       {
          $bad1 = "Username or Password is incorrect!";
          $err = true;
       }
        //print_r($username.'='.$ppw);
       $sql = "select * from finance_users where username='$username' and ppw='$ppw' and advisory='yes' and is_blocked<>'yes' ";
       $result = @mysql_query( $sql );
        if( $result){
        //print_r('works');
            $row = mysql_fetch_array( $result );
            if ($row['username']!=$username || $row['ppw']!=$ppw)
            {
              $bad1 = "Username or Password is incorrect";
              $err = true;
            }

            $trialExpire = mktime (0,0,0,date("m")  ,date("d")-intval($row['expire']),date("Y"));
            if ($trialExpire>intval($row['stamp']) && $row['type']=='trial')
            {
              $bad1 = "Your Trial Period has been Expired";
              $err = true;
              @mysql_query( "update finance_users set is_blocked='yes' where username='$username'" ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (login.php '1').<br>");  
            }

            $update = time();
            $updateCheck = $update - 1000;
            if (intval($row['lastupdate']) > $updateCheck)
            {
              $bad1 = "Same user already logged on";
              $err = true;
            }

            if (!$err)
            {
              $time = time();
              $user ["id"]       = $row['id'];
              $user ["logon"]    = true;
              $user ["time"]     = $update;
              $user ["email"]    = $row['email'];

              $time = time();
              $sesID = session_id();
              $sql = "update finance_users set lastupdate='$time', session='$sesID' where id='{$user["id"]}'";
              @mysql_query( $sql ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (chat_login.php '1').<br>");  


              $_SESSION['user'] = $user;

              Header ("Location: chat_main.php");
              exit;
            }
        }else{
            SaveError ("Can't get query ". mysql_errno().": ".mysql_error()."(chat_login.php '1').<br>");  
            
        }
   }

   $Body = @fread(@fopen("template.html", "r") , 50000);
   $skin_len = strlen ($Body);

   $pos = strpos ($Body, "<%CONTENT%>");
   $top = substr ($Body, 0, $pos);
   echo $top;

   $inBody = "<form action='chat_login.php' method=post><input type='hidden' name='action' value='login'>
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
                          <input type='text' name='username' size='50' maxlength='50' >
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
                      <tr> 
                        <td>&nbsp;</td>
                        <td><a href='chat_forgot.php'>Restore Password</a></td>
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