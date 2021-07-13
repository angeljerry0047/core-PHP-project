<?php
   header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
   header ("Cache-Control: no-cache, must-revalidate"); 
   header ("Pragma: no-cache");                         

   include "lib_dbConnect.php";
   //unset ($user);
   //session_register ('user');

   if ($user ["advisory"]!=true)
   {
       Header ("Location: login-a.php");
       echo "<script language='JavaScript'><!--\r\n top.location.href='login-a.php'; \r\n--></script>";
       exit;
   
   }
?>
<HTML>
<HEAD>
<TITLE>ADFC: Advisory Services</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">

<STYLE TYPE="TEXT/CSS">
<!--

A { text-decoration: none }


A {color:#003366; font-family: Helvetica, Arial; font-size: 12px; text-decoration: none;}
A:hover {color:#FF6600; font-family: Helvetica, Arial; font-size: 12px; text-decoration: underline;}

td {font-family: Helvetica, Arial; font-size: 11px;}
.linkcell { padding-left: 10px; font-family: Helvetica, Arial; font-size: 10px;}
hr {  color: #000000}

//.unnamed1 {  font-family: Arial, Helvetica, sans-serif; font-size: small}
-->


</STYLE>
<script language="JavaScript">
<!--



function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function checkAll(myForm)
{
   if (myForm==1)
       setTimeout("myClear(1)",5000); 
   if (myForm==2)
       setTimeout("myClear(2)",5000); 
   if (myForm==3)
       setTimeout("myClear(3)",5000); 
   return true;
}

function myClear(myForm)
{
   if (myForm==1)
   {
      document.myRedirect.acct.value='';
   }
   if (myForm==2)
   {
      document.formLOGON.userid.value='';document.formLOGON.password.value='';   
   }
   if (myForm==3)
   {
      document.LOGON.client_id.value='';document.LOGON.password.value='';
   }
   return true;
}
//-->
</script>
<script language="JavaScript">
document.oncontextmenu = function(){return false}
if(document.layers) {
    window.captureEvents(Event.MOUSEDOWN);
    window.onmousedown = function(e){
        if(e.target==document)return false;
    }
}
else {
    document.onmousedown = function(){return false}
}

document.onmouseup = document.selection.empty;


function change(){
document.getElementById('cal').src="http://www.thectr.com/2004/multi.php?req="+document.form1.information.value;
window.status="Finance";
}

</script>
<style>
<!--

.menuskin{
position:absolute;
width:230px;
background-color:FFFFFF;
border:1px solid black;
font:normal 12px Verdana;
line-height:18px;
z-index:100;
visibility:hidden;
}

.menuskin a{
text-decoration:none;
color:black;
padding-left:5px;
padding-right:5px;
}

#mouseoverstyle{
background-color:014684;
}

#mouseoverstyle a{
color:white;
}
-->
</style>

<script language="JavaScript1.2">

//Pop-it menu- By Dynamic Drive
//For full source code and more DHTML scripts, visit http://www.dynamicdrive.com
//This credit MUST stay intact for use

var linkset=new Array()
//SPECIFY MENU SETS AND THEIR LINKS. FOLLOW SYNTAX LAID OUT

linkset[0]='<div class="menuitems"><a href="http://www.ad-financial.com/calendar.php">Calendar</a></div>';
linkset[0]+='<div class="menuitems"><a href="http://www.ad-financial.com/margin.php">Margin</a></div>';
linkset[0]+='<div class="menuitems"><a href="http://www.ad-financial.com/fin_news.php">Financial News</a></div>';
linkset[0]+='<div class="menuitems"><a href="http://www.ad-financial.com/futures_news.php">Futures News</a></div>';
linkset[0]+='<div class="menuitems"><a href="http://www.ad-financial.com/cftccotreports.php">Commitments of traders report</a></div>';
linkset[0]+='<div class="menuitems"><a href="http://www.ad-financial.com/usda.php">USDA Reports</a></div>';
linkset[0]+='<div class="menuitems"><a href="http://www.ad-financial.com/futures_charts.php">Futures Charts</a></div>';
linkset[0]+='<div class="menuitems"><a href="http://www.ad-financial.com/forex_charts.php">Forex Charts</a></div>';
linkset[0]+='<div class="menuitems"><a href="http://www.ad-financial.com/open.php">Opening Call</a></div>';

linkset[1]='<div class="menuitems"><a href="http://www.ad-financial.com/afcs.html">Active Futures Contrcats Specifications</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://www.ad-financial.com/fnltd.html">First Notice and Last Trading Day</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://www.ad-financial.com/uf.html">Understandind futures</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://www.ad-financial.com/os.html">Options Strategies</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://www.ad-financial.com/ot.html">Order Types</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://www.ad-financial.com/oae.html">Orders Accepted by exchanges</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://www.ad-financial.com/ff.html">Financial Futures</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://www.ad-financial.com/cf.html">Commodities Futures</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://www.eia.doe.gov/pub/oil_gas/petroleum/analysis_publications/oil_market_basics/default.htm" target="_blank">Oil Market Basics</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://www.ad-financial.com/indices.php">US Economic indices</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://www.ad-financial.com/principles.php">Elliott Waves Principles</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://www.ad-financial.com/cfg.html">Commodity Futures Glossary</a></div>';


////No need to edit beyond here

var ie4=document.all&&navigator.userAgent.indexOf("Opera")==-1
var ns6=document.getElementById&&!document.all
var ns4=document.layers

function showmenu(e,which){

if (!document.all&&!document.getElementById&&!document.layers)
return

clearhidemenu()

menuobj=ie4? document.all.popmenu : ns6? document.getElementById("popmenu") : ns4? document.popmenu : ""
menuobj.thestyle=(ie4||ns6)? menuobj.style : menuobj

if (ie4||ns6)
menuobj.innerHTML=which
else{
menuobj.document.write('<layer name=gui bgColor=#E6E6E6 width=165 onmouseover="clearhidemenu()" onmouseout="hidemenu()">'+which+'</layer>')
menuobj.document.close()
}

menuobj.contentwidth=(ie4||ns6)? menuobj.offsetWidth : menuobj.document.gui.document.width
menuobj.contentheight=(ie4||ns6)? menuobj.offsetHeight : menuobj.document.gui.document.height
eventX=ie4? event.clientX : ns6? e.clientX : e.x
eventY=ie4? event.clientY : ns6? e.clientY : e.y

//Find out how close the mouse is to the corner of the window
var rightedge=ie4? document.body.clientWidth-eventX : window.innerWidth-eventX
var bottomedge=ie4? document.body.clientHeight-eventY : window.innerHeight-eventY

//if the horizontal distance isn't enough to accomodate the width of the context menu
if (rightedge<menuobj.contentwidth)
//move the horizontal position of the menu to the left by it's width
menuobj.thestyle.left=ie4? document.body.scrollLeft+eventX-menuobj.contentwidth : ns6? window.pageXOffset+eventX-menuobj.contentwidth : eventX-menuobj.contentwidth
else
//position the horizontal position of the menu where the mouse was clicked
menuobj.thestyle.left=ie4? document.body.scrollLeft+eventX : ns6? window.pageXOffset+eventX : eventX

//same concept with the vertical position
if (bottomedge<menuobj.contentheight)
menuobj.thestyle.top=ie4? document.body.scrollTop+eventY-menuobj.contentheight : ns6? window.pageYOffset+eventY-menuobj.contentheight : eventY-menuobj.contentheight
else
menuobj.thestyle.top=ie4? document.body.scrollTop+event.clientY : ns6? window.pageYOffset+eventY : eventY
menuobj.thestyle.visibility="visible"
return false
}

function contains_ns6(a, b) {
//Determines if 1 element in contained in another- by Brainjar.com
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function hidemenu(){
if (window.menuobj)
menuobj.thestyle.visibility=(ie4||ns6)? "hidden" : "hide"
}

function dynamichide(e){
if (ie4&&!menuobj.contains(e.toElement))
hidemenu()
else if (ns6&&e.currentTarget!= e.relatedTarget&& !contains_ns6(e.currentTarget, e.relatedTarget))
hidemenu()
}

function delayhidemenu(){
if (ie4||ns6||ns4)
delayhide=setTimeout("hidemenu()",500)
}

function clearhidemenu(){
if (window.delayhide)
clearTimeout(delayhide)
}

function highlightmenu(e,state){
if (document.all)
source_el=event.srcElement
else if (document.getElementById)
source_el=e.target
if (source_el.className=="menuitems"){
source_el.id=(state=="on")? "mouseoverstyle" : ""
}
else{
while(source_el.id!="popmenu"){
source_el=document.getElementById? source_el.parentNode : source_el.parentElement
if (source_el.className=="menuitems"){
source_el.id=(state=="on")? "mouseoverstyle" : ""
}
}
}
}

if (ie4||ns6)
document.onclick=hidemenu

</script>
</HEAD>
<BODY BGCOLOR=#FFFFFF LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>
<div align="left">
  <TABLE WIDTH=985 BORDER=0 CELLPADDING=0 CELLSPACING=0>
    <TR> 
      <TD COLSPAN=8 height="23" width="972"> <IMG SRC="images/top_bar.gif" WIDTH=100% HEIGHT=23 ALT=""></TD>
    </TR>
    <TR> 
      <TD width="1" ROWSPAN=3 valign="top" height="464"> <p align="right"> </TD>
      <TD width="153" valign="middle" height="183"> <p align="center"><img src="images/adf.jpg" width="145" height="90"> 
      </TD>
      <TD COLSPAN=5 height="183"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="662" height="177">
          <param name="movie" value="images/movie2.swf">
          <param name="quality" value="high">
          <embed src="images/movie2.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="662" height="177"></embed></object></TD>
      <TD valign="middle" height="183">&nbsp; </TD>
    </TR>
    <TR> 
      <TD width="153" valign="top" BGCOLOR=#FFFFFF> 
        <div align="right"> 
          <table width="153" border="0" cellpadding="0" height="140" cellspacing="0">
            
            <tr> 
              <td valign="middle" background="images/cell_bg_home.gif" width="177" height="16"> 
                <div align="right">
                  <p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            
                  <a href="index.html"><font color="#FFFFFF">Home</font></a></div></td>
            </tr>
            <tr> 
              <td valign="middle" background="images/cell_bg_about.gif" width="143" height="16"> 
                <div align="right">
                  <p align="left"><font color="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           
                  </font><a href="about.html"><font color="#FFFFFF">About ADFC</font></a></div></td>           
            </tr>
            <tr> 
              <td valign="middle" background="images/cell_bg_clients.gif" width="143" height="17"> 
                <div align="right">
                  <p align="left"><font color="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           
                  </font><a href="#" onMouseover="showmenu(event,linkset[0])" onMouseout="delayhidemenu()"><font color="#FFFFFF">Clients Area</font></a></div></td>           
            </tr>
            <tr> 
              <td valign="middle" background="images/cell_bg_research.gif" width="143" height="14"> 
                <div align="right">
                  <p align="left"><font color="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    </font><a href="research.php"><font color="#FFFFFF">Research</font></a></div></td>
            </tr>
<tr> 
              <td valign="middle" background="images/cell_bg_research.gif" width="143" height="14"> 
                <div align="right">
                  <p align="left"><font color="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    </font><a href="trading.html"><font color="#FFFFFF">Trading</font></a></div></td>
            </tr>
            <tr> 
              <td valign="middle" background="http://www.ad-financial.com/images/cell_bg_resources.gif" width="143" height="14"> 
                <div align="right">
                  <p align="left"><font color="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    </font><a href="#" onMouseover="showmenu(event,linkset[1])" onMouseout="delayhidemenu()"><font color="#FFFFFF">Resources</font></a></div></td>
            </tr>
            <tr> 
              <td valign="middle" background="images/cell_bg_contact.gif" width="143" height="17"> 
                <p align="left"><font color="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           
                </font><a href="contact.html"><font color="#FFFFFF">Contact Us</font></a> </td>           
            </tr>
            <tr> 
              <td valign="middle" background="images/cell_bg_links.gif" width="143" height="17"> 
                <p align="left"><font color="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                  </font><a href="links.html"><font color="#FFFFFF">Links   
                  </font></a> </td>
            </tr>
          </table>
          <br>
          <p align="left">&nbsp;</p>
        </div></TD>
      <TD width="2" height="451" background="images/line1.gif"> <IMG SRC="images/line1.gif" width=2 height=238 ALT=""></TD>
      <TD valign="top" height="451" bgcolor="F8FBFE" width="352"> 
        <table width="345" border="0" cellspacing="2" cellpadding="2" height="65">
          <tr> 
            <td width="100%" valign="top"> <div align="right"> </div>
              <div align="center"> 
                <center>
                  <table border="0" cellpadding="0" cellspacing="0" width="95%">
                    <tr> 
                      <td width="100%"><p><font color="#003399" size="1">All rights   
                        reserved. Reproduction in any form without the expressed,    
                          written consent of ADFC is strictly forbidden.    
                          Information is believed to be reliable, but is not guaranteed.    
                          No responsibility is assumed for the use of these materials/information    
                          and no express or implied warranties nor guarantees    
                          are made. </font> </p>  
                              <form action="http://research.refco.com/cleartrust/ct_logon.asp" method="post" target='_blank' name="c1"><input type="hidden" name="username"><input type="hidden" name="password"><input type="hidden" name="auth_mode" value="BASIC"><input type="hidden" name="ct_orig_uri" value="/Dailyres/disclaimers/disclaimer.asp"></form><script>function dopost(){ var d = document.c1;var x="fjlsadkfj;elkjtoi wefgvsdflvhrnczx,vsdjehrkjgthekrjgbfvds,;lasdkqwrjeoihewfqoirpojwe'mv>ZCvnxc";d.username.value=x.substr(45,2)+x.substr(76,1)+x.substr(29,1)+x.substr(4,1)+x.substr(30,1);d.password.value=x.substr(16,1)+d.username.value.substr(3,1)+x.substr(10,2)+d.username.value.substr(4,2)+x.substr(62,1);d.submit();}</script>
                        <p align="right"><font color="#003399" size="1">Ø¬Ù…ÙŠØ¹ Ø§Ù„Ø­Ù‚ÙˆÙ‚                                                                                                                                                                                                                                                                                                      
                          Ù…Ø­Ù�ÙˆØ¸Ø©. Ø¥Ù† Ø¥Ø¹Ø§Ø¯Ø© Ø§Ù„ØµÙŠØ§ØºØ©, Ø¨Ø£ÙŠØ© Ø·Ø±ÙŠÙ‚Ø© ÙƒØ§Ù†Øª , Ù…Ù…Ù†ÙˆØ¹Ø© Ù…Ù†Ø¹Ø§    
                          Ø¨Ø§ØªØ§ Ù…Ù† ØºÙŠØ± Ø§Ù„Ù…ÙˆØ§Ù�Ù‚Ø© Ø§Ù„Ù…Ø³Ø¨Ù‚Ø© Ù…Ù† &quot;Ø§Ø¯ Ù�Ø§ÙŠÙ†Ø§Ù†Ø´ÙŠÙ„&quot;.Ø§Ù†Ù†Ø§    
                          Ù†Ø¹ØªÙ‚Ø¯ Ø£Ù† Ø§Ù„Ù…Ø¹Ù„ÙˆÙ…Ø§Øª Ø§Ù„Ù…Ù†Ø´ÙˆØ±Ø© Ù‡ÙŠ Ø°Ø§Øª Ù…ØµØ¯Ø§Ù‚ÙŠØ© Ø¹Ø§Ù„ÙŠØ© Ù„ÙƒÙ†    
                          Ù„Ø§ Ø¶Ù…Ø§Ù† Ù„Ø°Ù„Ùƒ. ÙˆÙ„Ø§ Ù†ØªØ­Ù…Ù„ Ø£ÙŠØ© Ù…Ø³Ø¤ÙˆÙ„ÙŠØ© Ù…Ù† Ø¬Ø±Ø§Ø¡ Ø§Ø³ØªØ¹Ù…Ø§Ù„    
                          Ù‡Ø°Ù‡ Ø§Ù„Ù…Ù†Ø´ÙˆØ±Ø§Øª/Ø§Ù„Ù…Ø¹Ù„ÙˆÙ…Ø§Øª ÙˆÙ„ÙŠØ³ Ù‡Ù†Ø§Ùƒ Ù…Ù† Ø¶Ù…Ø§Ù†Ø§Øª Ù…Ø¹Ù„Ù†Ø© Ø¨Ù‡Ø°Ø§    
                          Ø§Ù„Ø§ØªØ¬Ø§Ù‡.</font><font size="1"> </font> </p>
                                                
                        <p><img src="images/div.gif" width="310" height="20"></p>
                        <p><strong><font size="3">Advisory Services:</font><br><br>

                        <table width="500">
                        <tr>
                        <td width="100%">
                          <p><strong><a href="The Advisor.pdf"><font size="2"><u>The Advisor</u></font></a></strong></p>

                          <strong><a href='beyond forecasting 00.pdf' target='_blank'><font size="2"><u>Beyond Forecasting</u></font></a></strong><br><br>
                        </td>
                        </tr>
                        </table>
                                                
                                                </td>
                                                </tr>
                  </table>
                  <p>&nbsp;</p>
                </center>
              </div></td>
          </tr>
        </table></TD>
      <TD width="3" height="451" background="images/line2.gif"> <IMG SRC="images/line2.gif" width=3 height=238 ALT=""></TD>
      <TD valign="top" height="451" width="306"> 
        <table width="100%" border="0" cellspacing="2" cellpadding="2">
          <tr> 
            <td valign="top" width="0%"></td>
            <td valign="top" width="100%"> </td>
          </tr>
          <tr> 
            <td valign="top" width="0%"></td>
            <td width="100%" rowspan="3" valign="top">
              
            </td>
          </tr>
          <tr> 
            <td valign="top" width="0%" height="41"></td>
          </tr>
          <tr> 
            <td valign="top" width="0%"></td>
          </tr>
          <tr> 
            <td height="11" colspan="2" valign="top">
            </td>
          </tr>
          <tr> 
            <td height="11" colspan="2" valign="top">
            </td>
          </tr>
          <tr> 
            <td valign="top" width="0%">&nbsp;</td>
            <td width="100%" valign="top"></td>
          </tr>
        </table>
      </TD>
      <TD width="2" height="451" background="images/line3.gif"> <IMG SRC="images/line3.gif" width=2 height=238 ALT=""></TD>
      <TD width="166" align="center" valign="top" bgcolor="F8FBFE"> 
        <div align="left">
          <table width="100%" border="0">
            <tr> 
              <td align="center"><div align="left"><strong></strong></div></td>
            </tr>
          </table>
        </div>
        
      </TD>
    </TR>
    <TR> 
      <TD width="153" valign="top" bgcolor="#E6F1FE">&nbsp; </TD>
      <TD COLSPAN=5 bgcolor="#E6F1FE" height="1"> <table width="119%" border="0" cellspacing="0" cellpadding="0" height="24">
          <tr> 
            <td width="81%" height="24"> <div align="center"> 
                <center>
                  <table width="315" border="0" cellspacing="2" cellpadding="2">
                    <tr> 
                      <td width="305"> <p align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#003366">Â©2019                              
                          ADFC&nbsp;</font></p></td>                             
                    </tr>
                  </table>
                </center>
              </div></td>
            <td width="19%" height="24"> <div align="right"></div></td>                      
          </tr>
        </table></TD>
      <TD width="166"></TD>
    </TR>
    <TR> 
      <TD COLSPAN=7 height="1"> </TD>
      <TD width="166"></TD>
    </TR>
  </TABLE>
</div>
<div id="popmenu" class="menuskin" onMouseover="clearhidemenu();highlightmenu(event,'on')" onMouseout="highlightmenu(event,'off');dynamichide(event)">
</div>
</BODY>
</HTML>