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

   if ($action=="Save")
   {
        $hot = str_replace ('\"', '"', $hot);
        @fwrite(@fopen('hot.txt', "w"), $hot);
        Header ("Location: admin_hot.php");
        
     
  
  
        exit;
   }

   $Body = @fread(@fopen("template.html", "r") , 50000);
   $skin_len = strlen ($Body);

   $pos = strpos ($Body, "<%CONTENT%>");
   $top = substr ($Body, 0, $pos);
   echo $top;

   $hot = @fread(@fopen('hot.txt', "r"), 102400);

   $inBody = "
   <table border='0'>
      <tr><td>
      <form action='admin_hot.php' method='post'>
      <input type='hidden' name='action' value='Save'>
      Edit the hot page <br>
   <!--   <textarea name='hot' cols='100' rows='20'>{$hot}</textarea>  --> <br> 
      
      
      
      <div id='sample'>
<!-- <script type='text/javascript' src='http://js.nicedit.com/nicEdit-latest.js'></script> <script type='text/javascript'> -->
<script type='text/javascript' src='http://ad-fc.net/adfincorp/nicEdit-latest.js'></script> <script type='text/javascript'> 
  
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>
 
  <textarea name='hot' cols='100' rows='20'>
       {$hot}
</textarea><br />
  
</div>



      <input type='submit' value='Save'>

      
      </td></tr>
      
      
      
      <tr>
      <td>
      
      </td>
      </tr>


<tr>
<td>
<main>
	 
	<div class='adjoined-bottom'>
		<div class='grid-container'>
			<div class='grid-width-100'>
				<div id='editor'>
				<!--	<h1>Hello world!</h1> -->
					<p>{$hot}.</p>
				</div>
			</div>
		</div>
	</div>











	
</main>

 
<script>
	initSample();
</script>
</td>
</tr>



   </table>";

   echo $inBody;

   $footer = substr ($Body, $pos+11, $skin_len-$pos-11);
   echo $footer;
?>