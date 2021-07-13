<?php
   header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
   header ("Cache-Control: no-cache, must-revalidate"); 
   header ("Pragma: no-cache");                         

   include "lib_dbConnect.php";
   //unset ($user);
   //session_register ('user');

   if ($user['logon']!=true)
   {
       Header ("Location: login.php");
       echo "<script language='JavaScript'><!--\r\n top.location.href='login.php'; \r\n--></script>";
       exit;
   
   }
?>
<HTML>
<HEAD>
<TITLE>ADFC: Calendar</TITLE>
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



function xcTimer_event()
{
  window.status="Finance";
  window.setTimeout("xcTimer_event();", 50);
}

window.setTimeout("xcTimer_event();", 50);
window.status="Finance";
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
document.getElementById('cal').src="http://www.thectr.com/2007ecal/multi.php?req="+document.form1.information.value;
//document.getElementById('cal').src="../multi.php?req="+document.form1.information.value;
//http://www.thectr.com/cgi-bin/cal/webevent.cgi?cmd=opencal&cal=cal1,cal2,cal3,cal5&y=2006&m=01&d=01
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

linkset[0]='<div class="menuitems"><a href="http://ad-fc.net/adfincorp/calendar.php">Calendar</a></div>';
linkset[0]+='<div class="menuitems"><a href="http://ad-fc.net/adfincorp/margin.php">Margin</a></div>';
linkset[0]+='<div class="menuitems"><a href="http://ad-fc.net/adfincorp/fin_news.php">Financial News</a></div>';
linkset[0]+='<div class="menuitems"><a href="http://ad-fc.net/adfincorp/futures_news.php">Futures News</a></div>';
linkset[0]+='<div class="menuitems"><a href="http://ad-fc.net/adfincorp/cftccotreports.php">Commitments of traders report</a></div>';
linkset[0]+='<div class="menuitems"><a href="http://ad-fc.net/adfincorp/usda.php">USDA Reports</a></div>';
linkset[0]+='<div class="menuitems"><a href="http://ad-fc.net/adfincorp/futures_charts.php">Futures Charts</a></div>';
linkset[0]+='<div class="menuitems"><a href="http://ad-fc.net/adfincorp/forex_charts.php">Forex Charts</a></div>';
linkset[0]+='<div class="menuitems"><a href="http://ad-fc.net/adfincorp/open.php">Opening Call</a></div>';

linkset[1]='<div class="menuitems"><a href="http://ad-fc.net/adfincorp/afcs.html">Active Futures Contrcats Specifications</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://ad-fc.net/adfincorp/fnltd.html">First Notice and Last Trading Day</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://ad-fc.net/adfincorp/uf.html">Understandind futures</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://ad-fc.net/adfincorp/os.html">Options Strategies</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://ad-fc.net/adfincorp/ot.html">Order Types</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://ad-fc.net/adfincorp/oae.html">Orders Accepted by exchanges</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://ad-fc.net/adfincorp/ff.html">Financial Futures</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://ad-fc.net/adfincorp/cf.html">Commodities Futures</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://www.eia.doe.gov/pub/oil_gas/petroleum/analysis_publications/oil_market_basics/default.htm" target="_blank">Oil Market Basics</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://ad-fc.net/adfincorp/indices.php">US Economic indices</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://ad-fc.net/adfincorp/principles.php">Elliott Waves Principles</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://ad-fc.net/adfincorp/cfg.html">Commodity Futures Glossary</a></div>';


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
  <TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0>
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
              <td valign="middle" background="images/cell_bg_resources.gif" width="143" height="14"> 
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
        </div></TD>
      <TD width="2" height="451" background="images/line1.gif"> <IMG SRC="images/line1.gif" width=2 height=238 ALT=""></TD>
      <TD width="647" height="451" valign="top" bgcolor="F8FBFE"> 
        <table width="103%" border="0" cellspacing="2" cellpadding="2" height="65">
          <tr> 
            <td valign="top" height="31"> 
              <p align="center">&nbsp; 
              <div align="center"> 
                <center>
                  <table width="100%" border="0" align="center" cellpadding="0" height="41">
                    <tr> 
                      <td height="21" colspan="3" align="center" valign="top" bgcolor="#FFFFFF"> 
                        <form name="form1" method="post" action="" style="margin: 0px">
                          <strong><font color="#3333CC" face="Verdana, Arial, Helvetica, sans-serif">Jump              
                          to: </font></strong>              
        <select name="information" onChange="javascript:change();">
          <option value="MC" selected>Monthly Calendar</option>
          <option value="YAG">2007 &amp; 2008 Year at a Glance</option>
          <option value="CF">Conversion Factors</option>
          <option value="FCS">Futures Contract Specifications</option>
          <option value="FOS">Futures Option Specifications</option>
          <option value="IIS">Industry Information Sources</option>
          <option value="OEM">Option Expiration Months</option>
          <option value="OPG">Order Placement Guide</option>
          <option value="RLPL">Reporting Levels &amp; Position Limits</option>
          <option value="SDTL">Spot-month Daily Trading Limits</option>
        </select>
                        </form>
                      </td>
                    </tr>
                    <tr> 
                      <td colspan="3" align="center" valign="top" height="16">
                          <iframe frameborder="0" height="475" id="cal" name="cal" src="http://www.thectr.com/cgi-bin/oddcal/webevent.cgi?cmd=opencal&cal=cal1,cal2,cal3,cal5&y=2007&m=01&d=01" align="center" width=700>
                              
                          </iframe> 
                      </td>
                    </tr>
                  </table>
                  <div align="center"></div>
                </center>
              </div>
            </td>
          </tr>
        </table>
      </TD>
      <TD width="3" height="451" background="images/line2.gif"> <IMG SRC="images/line2.gif" width=3 height=238 ALT=""></TD>
      <TD valign="top" height="451" width="8" >&nbsp; </TD>
      <TD width="2" height="451">&nbsp; </TD>
      <TD align="center" valign="top" bgcolor="#FFFFFF">&nbsp; </TD>
    </TR>
    <TR> 
      <TD width="153" valign="top" bgcolor="#E6F1FE">&nbsp; </TD>
      <TD COLSPAN=5 bgcolor="#E6F1FE" height="1"> <table width="119%" border="0" cellspacing="0" cellpadding="0" height="24">
          <tr> 
            <td width="71%" height="24"> <div align="center"> 
                <center>
                  <table width="315" border="0" cellspacing="2" cellpadding="2">
                    <tr> 
                      <td width="305"> <p align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#003366">©2019                      
                          ADFC&nbsp;</font></p></td>                     
                    </tr>
                  </table>
                </center>
              </div></td>
            <td width="29%" height="24"> <div align="left"></div></td>                     
          </tr>
        </table></TD>
      <TD width="157"></TD>
    </TR>
    <TR> 
      <TD COLSPAN=7 height="1"> </TD>
      <TD width="157"></TD>
    </TR>
  </TABLE>
</div>
<div id="popmenu" class="menuskin" onMouseover="clearhidemenu();highlightmenu(event,'on')" onMouseout="highlightmenu(event,'off');dynamichide(event)">
</div>
</BODY>
</HTML>