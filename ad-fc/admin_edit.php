<?php

   header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
   header ("Cache-Control: no-cache, must-revalidate"); 
   header ("Pragma: no-cache");                         

   include "lib_dbConnect.php";

   //unset ($user);
   //session_register ('user');

   if (!$user["logon"] || !$user["admin"])
   {
        Header ("Location: admin_login.php");
        exit;
   }

   if (empty($id))
   {
        Header ("Location: admin_main.php");
        exit;
   }

   if ($action=='register')
   {
  
      if (empty($useremail) || !preg_match("/[\w\d\-\.]+@[\w\d\-]+(\.[\w\d\-]+)+/", $useremail) )
      {
          $bad1 = "Bad Email<br>";
          $err  = true;
      }

      if ($ppw!=$ppw2 && !empty($ppw))
      {
          $bad1 = "Passwords not match<br>";
          $err  = true;

      }

      if (!$err)
      {

          if (!empty($ppw))
          {
              $updateppw = ", ppw='$ppw' ";
              $updateppw2 = "PASSWORD - $ppw";
          }

          $sql = "update finance_users set email='{$useremail}' {$updateppw} , address='$address', phone='$phone', fname='$fname', lname='$lname', expire='$expire' where id='{$id}'";
          $result = @mysql_query( $sql ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (register.php '1').<br>");  

          Header ("Location: admin_main.php");
          exit;
      }

  }



   $Body = @fread(@fopen("template.html", "r") , 50000);
   $skin_len = strlen ($Body);

   $pos = strpos ($Body, "<%CONTENT%>");
   $top = substr ($Body, 0, $pos);
   echo $top;

   $sql = "select * from finance_users where id='{$id}'";
   $result = @mysql_query( "$sql" ) or SaveError ("Can't get query ". mysql_errno().": ".mysql_error()." (admin_main.php '3').<br>");   
   $row = @mysql_fetch_array( $result );

   $inBody = "<form action='admin_edit.php' method=post><input type='hidden' name='action' value='register'><input type='hidden' name='id' value='{$id}'>
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
                          <input type='text' name='fname' size='30' maxlength='100' value='{$row['fname']}'>
                        </td>
                      </tr>
                      <tr> 
                        <td align='right'>Last Name<font color='red'>*</font>:</td>
                        <td> 
                          <input type='text' name='lname' size='30' maxlength='100' value='{$row['lname']}'>
                        </td>
                      </tr>
                      <tr> 
                        <td align='right'>Email<font color='red'>*</font>:</td>
                        <td> 
                          <input type='text' name='useremail' size='50' maxlength='200' value='{$row['email']}'>
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
                        <td align='right'>Address:</td>
                        <td> 
                          <input type='text' name='address' size='50' maxlength='250' value='{$row['address']}'>
                        </td>
                      </tr>
                      <tr> 
                        <td align='right'>Phone:</td>
                        <td> 
                          <input type='text' name='phone' size='30' maxlength='50' value='{$row['phone']}'>
                        </td>
                      </tr>
                      <tr> 
                        <td align='right'>Trial Expire:</td>
                        <td> 
                          <input type='text' name='expire' size='10' maxlength='50' value='{$row['expire']}'>
                        </td>
                      </tr>
                      <tr> 
                        <td>&nbsp;</td>
                        <td> 
                          <input type='submit' name='Submit' value='Update' class=button>
                        </td>
                      </tr>
                      <tr> 
                        <td>&nbsp;</td>
                        <td><a href='chat_forgot.php'>Forgot Password</a></td>
                      </tr>
                      <tr> 
                        <td>&nbsp;</td>
                        <td><a href='admin_main.php'>Back</a></td>
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