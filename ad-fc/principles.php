<?php
   header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
   header ("Cache-Control: no-cache, must-revalidate"); 
   header ("Pragma: no-cache");                         

//   include "lib_dbConnect.php";
//   unset ($user);
//   session_register ('user');
//
//   if ($user['logon']!=true)
//   {
//       Header ("Location: login.php");
//       echo "<script language='JavaScript'><!--\r\n top.location.href='login.php'; \r\n--></script>";
//       exit;
//   
//   }

?>
<HTML>
<HEAD>
<TITLE>Elliott Waves Principles</TITLE>

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

/*linkset[0]='<div class="menuitems"><a href="calendar.php">Calendar</a></div>';
linkset[0]+='<div class="menuitems"><a href="margin.php">Margin</a></div>';
linkset[0]+='<div class="menuitems"><a href="fin_news.php">Financial News</a></div>';
linkset[0]+='<div class="menuitems"><a href="futures_news.php">Futures News</a></div>';
linkset[0]+='<div class="menuitems"><a href="cftccotreports.php">Commitments of traders report</a></div>';
linkset[0]+='<div class="menuitems"><a href="usda.php">USDA Reports</a></div>';
linkset[0]+='<div class="menuitems"><a href="futures_charts.php">Futures Charts</a></div>';
linkset[0]+='<div class="menuitems"><a href="forex_charts.php">Forex Charts</a></div>';
linkset[0]+='<div class="menuitems"><a href="open.php">Opening Call</a></div>';*/
linkset[0]='<div class="menuitems"><a href="cftccotreports.php">Commitments of traders report</a></div>';
linkset[0]+='<div class="menuitems"><a href="forex_charts.php">Forex Charts</a></div>';

linkset[1]='<div class="menuitems"><a href="afcs.html">Active Futures Contrcats Specifications</a></div>';
linkset[1]+='<div class="menuitems"><a href="fnltd.html">First Notice and Last Trading Day</a></div>';
linkset[1]+='<div class="menuitems"><a href="uf.html">Understandind futures</a></div>';
linkset[1]+='<div class="menuitems"><a href="os.html">Options Strategies</a></div>';
linkset[1]+='<div class="menuitems"><a href="ot.html">Order Types</a></div>';
linkset[1]+='<div class="menuitems"><a href="oae.html">Orders Accepted by exchanges</a></div>';
linkset[1]+='<div class="menuitems"><a href="ff.html">Financial Futures</a></div>';
linkset[1]+='<div class="menuitems"><a href="cf.html">Commodities Futures</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://www.eia.doe.gov/pub/oil_gas/petroleum/analysis_publications/oil_market_basics/default.htm" target="_blank">Oil Market Basics</a></div>';
linkset[1]+='<div class="menuitems"><a href="indices.php">US Economic indices</a></div>';
linkset[1]+='<div class="menuitems"><a href="principles.php">Elliott Waves Principles</a></div>';
linkset[1]+='<div class="menuitems"><a href="cfg.html">Commodity Futures Glossary</a></div>';


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
    <!--<TR> 
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
    </TR-->
    <TABLE WIDTH=985 BORDER=0 CELLPADDING=0 CELLSPACING=0>
    <TR> 
      <TD COLSPAN=8 height="23" width="982"> <IMG SRC="images/top_bar.gif" WIDTH="100%" ALT=""></TD>
    </TR>
    <TR> 
      <TD width="1" ROWSPAN=3 valign="top"> <p align="right"> </TD>
      <TD width="145" valign="middle"> 
        <p align="center"><img src="images/adfc-white.png" width="150" height="215"> 
      </TD>
      <TD COLSPAN=5 height="177" width="100%"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="662" height="177">
          <img src="images/adfc-banner.jpg" width="100%" />
      </TD>
   <!--   <TD width="178" valign="middle"> <img src="images/adfc-white.png" width="" height="90"></TD> -->
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
      <TD width="654" height="451" valign="top" bgcolor="F8FBFE"> 
        <table width="100%" border="0" cellspacing="2" cellpadding="2" height="65">
          <tr> 
            <td valign="top" height="31"><div align="justify"><font size="4"><strong><font color="#003366">Elliott
                Waves theory</font></strong></font><b><font size="4"><span style="color: black; mso-spacerun: yes">&nbsp;&nbsp;</span></font><span style="font-size:18.0pt;color:black"><span style="mso-spacerun: yes">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span><o:p>
                </o:p>
                </span></b>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="color: black">Basic
                Theory&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></b><span style="color: black"><span style="mso-spacerun:
yes">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">According
                to physical law: &quot;Every action creates an equal and
                opposite reaction&quot;. The same goes for the financial
                markets. A price movement up or down must be followed by a
                contrary movement, as the saying goes: &quot;What goes up must
                come down&quot;( and vice versa).</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">Price
                movements can be divided into trends on the one hand and
                corrections or sideways movements on the other hand. Trends show
                the main direction of prices, while corrections move against the
                trend. In Elliott terminology these are called Impulsive waves
                and Corrective waves.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">The
                Impulse wave formation has five distinct price movements, three
                in the direction of the trend (I, III, and V) and two against
                the trend ( II and IV). </span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black"><!--[if gte vml 1]><v:shapetype
 id="_x0000_t75" coordsize="21600,21600" o:spt="75" o:preferrelative="t"
 path="m@4@5l@4@11@9@11@9@5xe" filled="f" stroked="f">
 <v:stroke joinstyle="miter"/>
 <v:formulas>
  <v:f eqn="if lineDrawn pixelLineWidth 0"/>
  <v:f eqn="sum @0 1 0"/>
  <v:f eqn="sum 0 0 @1"/>
  <v:f eqn="prod @2 1 2"/>
  <v:f eqn="prod @3 21600 pixelWidth"/>
  <v:f eqn="prod @3 21600 pixelHeight"/>
  <v:f eqn="sum @0 0 1"/>
  <v:f eqn="prod @6 1 2"/>
  <v:f eqn="prod @7 21600 pixelWidth"/>
  <v:f eqn="sum @8 21600 0"/>
  <v:f eqn="prod @7 21600 pixelHeight"/>
  <v:f eqn="sum @10 21600 0"/>
 </v:formulas>
 <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
 <o:lock v:ext="edit" aspectratio="t"/>
</v:shapetype><v:shape id="_x0000_i1025" type="#_x0000_t75" alt="" style='width:155.25pt;
 height:93.75pt'>
 <v:imagedata src="images/princi48.gif"
  o:href="http://www.prognosis.nl/principle/Image63.gif"/>
</v:shape><![endif]-->
                <img src="images/princi48.gif" v:shapes="_x0000_i1025" width="207" height="125"></span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">Obviously
                the three waves in the direction of the trend are impulses and
                therefore these waves also have five waves. The waves against
                the trend are corrections and are composed of three waves.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black"><!--[if gte vml 1]><v:shape
 id="_x0000_i1026" type="#_x0000_t75" alt="" style='width:160.5pt;height:96pt'>
 <v:imagedata src="images/princi49.gif"
  o:href="http://www.prognosis.nl/principle/Image64.gif"/>
</v:shape><![endif]-->
                <img src="images/princi49.gif" v:shapes="_x0000_i1026" width="214" height="128"></span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">The
                corrective wave formation normally has three, in some cases five
                or more distinct price movements, two in the direction of the
                main correction ( A and C) and one against it (B). Wave 2 and 4
                in the above picture are corrections. These waves have the
                following structure:</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black"><!--[if gte vml 1]><v:shape
 id="_x0000_i1027" type="#_x0000_t75" alt="" style='width:151.5pt;height:104.25pt'>
 <v:imagedata src="images/princi50.gif"
  o:href="http://www.prognosis.nl/principle/Image65.gif"/>
</v:shape><![endif]-->
                <img src="images/princi50.gif" v:shapes="_x0000_i1027" width="202" height="139"></span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">Note
                that these waves A and C go in the direction of the shorter term
                trend, and therefore are impulsive and composed of five waves,
                which is shown in the picture above.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">An
                impulse wave formation followed by a corrective wave, form an
                Elliott wave degree, consisting of trend and counter trend.
                Although the patterns pictured above are bullish, the same
                applies for bear markets, where the main trend is down.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">The
                following example shows the difference between a trend (impulse
                wave) and a correction (sideways price movement with overlapping
                waves). It also shows that larger trends consists of (a lot of )
                smaller trends and corrections, but the result is always the
                same.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">Very
                important in understanding the Elliott Wave Principle is the
                basic concept that wave structures of the largest degree are
                composed of smaller sub waves, which are in turn composed of
                even smaller sub waves, and so on, which all have more or less
                the same structure ( impulsive or corrective) like the larger
                wave they belong to.<br>
                Elliott distinguished nine wave degrees ranging from two
                centuries to hourly.</span><span style="color: black">&nbsp;<o:p>
                </o:p>
                </span></font></p>
                <table border="1" cellspacing="1" cellpadding="0" width="432" style="width:324.0pt;
 mso-cellspacing:.7pt">
                  <tr>
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt">
                      <p class="MsoNormal" align="right" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:right"><b><font size="2"><span style="font-family: Arial; color: black">Wave
                      degree</span></font></b><font size="2"><span style="color: black">
                      <o:p>
                      </o:p>
                      </span></font></p>
                    </td>
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt">
                      <p class="MsoNormal" align="center" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center"><font size="2"><b><span style="font-family: Arial; color: black">Trend</span></b><span style="color: black">
                      <o:p>
                      </o:p>
                      </span></font></p>
                    </td>
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt">
                      <p class="MsoNormal" align="center" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center"><font size="2"><b><span style="font-family: Arial; color: black">Correction</span></b><span style="color: black">
                      <o:p>
                      </o:p>
                      </span></font></p>
                    </td>
                  </tr>
                  <tr style="height:7.5pt">
                    <td colspan="3" style="padding:.75pt .75pt .75pt .75pt;height:7.5pt">
                      <p class="MsoNormal"><font size="2">&nbsp;<span style="mso-bidi-font-size: 12.0pt; color: black"><o:p>
                      </o:p>
                      </span></font></p>
                    </td>
                  </tr>
                  <tr style="height:18.0pt">
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt;
  height:18.0pt">
                      <p class="MsoNormal" align="right" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:right"><font size="2"><span style="font-family: Arial; color: black">Grand
                      Supercycle</span><span style="color: black"> <o:p>
                      </o:p>
                      </span></font></p>
                    </td>
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt;
  height:18.0pt">
                      <p class="MsoNormal" align="center" style="text-align:center"><span style="color: black"><font size="2"><!--[if gte vml 1]><v:shape id="_x0000_i1028"
   type="#_x0000_t75" alt="" style='width:21pt;height:21pt'>
   <v:imagedata src="images/princi51.gif"
    o:href="http://www.prognosis.nl/principle/w1.gif"/>
  </v:shape><![endif]-->
                      <img src="images/princi51.gif" v:shapes="_x0000_i1028" width="28" height="28"><o:p>
                      </o:p>
                      </font></span></p>
                    </td>
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt;
  height:18.0pt">
                      <p class="MsoNormal" align="center" style="text-align:center"><span style="color: black"><font size="2"><!--[if gte vml 1]><v:shape id="_x0000_i1029"
   type="#_x0000_t75" alt="" style='width:21pt;height:21pt'>
   <v:imagedata src="images/princi52.gif"
    o:href="http://www.prognosis.nl/principle/w2.gif"/>
  </v:shape><![endif]-->
                      <img src="images/princi52.gif" v:shapes="_x0000_i1029" width="28" height="28"><o:p>
                      </o:p>
                      </font></span></p>
                    </td>
                  </tr>
                  <tr>
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt">
                      <p class="MsoNormal" align="right" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:right"><font size="2"><span style="font-family: Arial; color: black">Supercycle</span><span style="color: black">
                      <o:p>
                      </o:p>
                      </span></font></p>
                    </td>
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt">
                      <p class="MsoNormal" align="center" style="text-align:center"><span style="color: black"><font size="2"><!--[if gte vml 1]><v:shape id="_x0000_i1030"
   type="#_x0000_t75" alt="" style='width:16.5pt;height:21pt'>
   <v:imagedata src="images/princi53.gif"
    o:href="http://www.prognosis.nl/principle/w3.gif"/>
  </v:shape><![endif]-->
                      <img src="images/princi53.gif" v:shapes="_x0000_i1030" width="22" height="28"><o:p>
                      </o:p>
                      </font></span></p>
                    </td>
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt">
                      <p class="MsoNormal" align="center" style="text-align:center"><span style="color: black"><font size="2"><!--[if gte vml 1]><v:shape id="_x0000_i1031"
   type="#_x0000_t75" alt="" style='width:23.25pt;height:21pt'>
   <v:imagedata src="images/princi54.gif"
    o:href="http://www.prognosis.nl/principle/w4.gif"/>
  </v:shape><![endif]-->
                      <img src="images/princi54.gif" v:shapes="_x0000_i1031" width="31" height="28"><o:p>
                      </o:p>
                      </font></span></p>
                    </td>
                  </tr>
                  <tr>
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt">
                      <p class="MsoNormal" align="right" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:right"><font size="2"><span style="font-family: Arial; color: black">Cycle</span><span style="color: black">
                      <o:p>
                      </o:p>
                      </span></font></p>
                    </td>
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt">
                      <p class="MsoNormal" align="center" style="text-align:center"><span style="color: black"><font size="2"><!--[if gte vml 1]><v:shape id="_x0000_i1032"
   type="#_x0000_t75" alt="" style='width:5.25pt;height:21pt'>
   <v:imagedata src="images/princi55.gif"
    o:href="http://www.prognosis.nl/principle/w5.gif"/>
  </v:shape><![endif]-->
                      <img src="images/princi55.gif" v:shapes="_x0000_i1032" width="7" height="28"><o:p>
                      </o:p>
                      </font></span></p>
                    </td>
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt">
                      <p class="MsoNormal" align="center" style="text-align:center"><span style="color: black"><font size="2"><!--[if gte vml 1]><v:shape id="_x0000_i1033"
   type="#_x0000_t75" alt="" style='width:12pt;height:21pt'>
   <v:imagedata src="images/princi56.gif"
    o:href="http://www.prognosis.nl/principle/w6.gif"/>
  </v:shape><![endif]-->
                      <img src="images/princi56.gif" v:shapes="_x0000_i1033" width="16" height="28"><o:p>
                      </o:p>
                      </font></span></p>
                    </td>
                  </tr>
                  <tr>
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt">
                      <p class="MsoNormal" align="right" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:right"><font size="2"><span style="font-family: Arial; color: black">Primary</span><span style="color: black">
                      <o:p>
                      </o:p>
                      </span></font></p>
                    </td>
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt">
                      <p class="MsoNormal" align="center" style="text-align:center"><span style="color: black"><font size="2"><!--[if gte vml 1]><v:shape id="_x0000_i1034"
   type="#_x0000_t75" alt="" style='width:17.25pt;height:21pt'>
   <v:imagedata src="images/princi57.gif"
    o:href="http://www.prognosis.nl/principle/w7.gif"/>
  </v:shape><![endif]-->
                      <img src="images/princi57.gif" v:shapes="_x0000_i1034" width="23" height="28"><o:p>
                      </o:p>
                      </font></span></p>
                    </td>
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt">
                      <p class="MsoNormal" align="center" style="text-align:center"><span style="color: black"><font size="2"><!--[if gte vml 1]><v:shape id="_x0000_i1035"
   type="#_x0000_t75" alt="" style='width:19.5pt;height:21pt'>
   <v:imagedata src="images/princi58.gif"
    o:href="http://www.prognosis.nl/principle/w8.gif"/>
  </v:shape><![endif]-->
                      <img src="images/princi58.gif" v:shapes="_x0000_i1035" width="26" height="28"><o:p>
                      </o:p>
                      </font></span></p>
                    </td>
                  </tr>
                  <tr>
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt">
                      <p class="MsoNormal" align="right" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:right"><font size="2"><span style="font-family: Arial; color: black">Intermediate</span><span style="color: black">
                      <o:p>
                      </o:p>
                      </span></font></p>
                    </td>
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt">
                      <p class="MsoNormal" align="center" style="text-align:center"><span style="color: black"><font size="2"><!--[if gte vml 1]><v:shape id="_x0000_i1036"
   type="#_x0000_t75" alt="" style='width:18.75pt;height:21pt'>
   <v:imagedata src="images/princi59.gif"
    o:href="http://www.prognosis.nl/principle/w9.gif"/>
  </v:shape><![endif]-->
                      <img src="images/princi59.gif" v:shapes="_x0000_i1036" width="25" height="28"><o:p>
                      </o:p>
                      </font></span></p>
                    </td>
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt">
                      <p class="MsoNormal" align="center" style="text-align:center"><span style="color: black"><font size="2"><!--[if gte vml 1]><v:shape id="_x0000_i1037"
   type="#_x0000_t75" alt="" style='width:18.75pt;height:21pt'>
   <v:imagedata src="images/princi60.gif"
    o:href="http://www.prognosis.nl/principle/w10.gif"/>
  </v:shape><![endif]-->
                      <img src="images/princi60.gif" v:shapes="_x0000_i1037" width="25" height="28"><o:p>
                      </o:p>
                      </font></span></p>
                    </td>
                  </tr>
                  <tr>
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt">
                      <p class="MsoNormal" align="right" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:right"><font size="2"><span style="font-family: Arial; color: black">Minor</span><span style="color: black">
                      <o:p>
                      </o:p>
                      </span></font></p>
                    </td>
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt">
                      <p class="MsoNormal" align="center" style="text-align:center"><span style="color: black"><font size="2"><!--[if gte vml 1]><v:shape id="_x0000_i1038"
   type="#_x0000_t75" alt="" style='width:5.25pt;height:21pt'>
   <v:imagedata src="images/princi61.gif"
    o:href="http://www.prognosis.nl/principle/w11.gif"/>
  </v:shape><![endif]-->
                      <img src="images/princi61.gif" v:shapes="_x0000_i1038" width="7" height="28"><o:p>
                      </o:p>
                      </font></span></p>
                    </td>
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt">
                      <p class="MsoNormal" align="center" style="text-align:center"><span style="color: black"><font size="2"><!--[if gte vml 1]><v:shape id="_x0000_i1039"
   type="#_x0000_t75" alt="" style='width:12.75pt;height:21pt'>
   <v:imagedata src="images/princi62.gif"
    o:href="http://www.prognosis.nl/principle/w12.gif"/>
  </v:shape><![endif]-->
                      <img src="images/princi62.gif" v:shapes="_x0000_i1039" width="17" height="28"><o:p>
                      </o:p>
                      </font></span></p>
                    </td>
                  </tr>
                  <tr>
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt">
                      <p class="MsoNormal" align="right" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:right"><font size="2"><span style="font-family: Arial; color: black">Minute</span><span style="color: black">
                      <o:p>
                      </o:p>
                      </span></font></p>
                    </td>
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt">
                      <p class="MsoNormal" align="center" style="text-align:center"><span style="color: black"><font size="2"><!--[if gte vml 1]><v:shape id="_x0000_i1040"
   type="#_x0000_t75" alt="" style='width:4.5pt;height:21pt'>
   <v:imagedata src="images/princi63.gif"
    o:href="http://www.prognosis.nl/principle/w13.gif"/>
  </v:shape><![endif]-->
                      <img src="images/princi63.gif" v:shapes="_x0000_i1040" width="6" height="28"><o:p>
                      </o:p>
                      </font></span></p>
                    </td>
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt">
                      <p class="MsoNormal" align="center" style="text-align:center"><span style="color: black"><font size="2"><!--[if gte vml 1]><v:shape id="_x0000_i1041"
   type="#_x0000_t75" alt="" style='width:7.5pt;height:21pt'>
   <v:imagedata src="images/princi64.gif"
    o:href="http://www.prognosis.nl/principle/w14.gif"/>
  </v:shape><![endif]-->
                      <img src="images/princi64.gif" v:shapes="_x0000_i1041" width="10" height="28"><o:p>
                      </o:p>
                      </font></span></p>
                    </td>
                  </tr>
                  <tr>
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt">
                      <p class="MsoNormal" align="right" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:right"><font size="2"><span style="font-family: Arial; color: black">Minuette</span><span style="color: black">
                      <o:p>
                      </o:p>
                      </span></font></p>
                    </td>
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt">
                      <p class="MsoNormal" align="center" style="text-align:center"><span style="color: black"><font size="2"><!--[if gte vml 1]><v:shape id="_x0000_i1042"
   type="#_x0000_t75" alt="" style='width:6pt;height:21pt'>
   <v:imagedata src="images/princi65.gif"
    o:href="http://www.prognosis.nl/principle/w15.gif"/>
  </v:shape><![endif]-->
                      <img src="images/princi65.gif" v:shapes="_x0000_i1042" width="8" height="28"><o:p>
                      </o:p>
                      </font></span></p>
                    </td>
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt">
                      <p class="MsoNormal" align="center" style="text-align:center"><span style="color: black"><font size="2"><!--[if gte vml 1]><v:shape id="_x0000_i1043"
   type="#_x0000_t75" alt="" style='width:7.5pt;height:21pt'>
   <v:imagedata src="images/princi66.gif"
    o:href="http://www.prognosis.nl/principle/w16.gif"/>
  </v:shape><![endif]-->
                      <img src="images/princi66.gif" v:shapes="_x0000_i1043" width="10" height="28"><o:p>
                      </o:p>
                      </font></span></p>
                    </td>
                  </tr>
                  <tr>
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt">
                      <p class="MsoNormal" align="right" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:right"><font size="2"><span style="font-family: Arial; color: black">Sub
                      minuette</span><span style="color: black"> <o:p>
                      </o:p>
                      </span></font></p>
                    </td>
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt">
                      <p class="MsoNormal" align="center" style="text-align:center"><span style="color: black"><font size="2"><!--[if gte vml 1]><v:shape id="_x0000_i1044"
   type="#_x0000_t75" alt="" style='width:3.75pt;height:21pt'>
   <v:imagedata src="images/princi67.gif"
    o:href="http://www.prognosis.nl/principle/w17.gif"/>
  </v:shape><![endif]-->
                      <img src="images/princi67.gif" v:shapes="_x0000_i1044" width="5" height="28"><o:p>
                      </o:p>
                      </font></span></p>
                    </td>
                    <td width="33%" style="width:33.0%;padding:.75pt .75pt .75pt .75pt">
                      <p class="MsoNormal" align="center" style="text-align:center"><span style="color: black"><font size="2"><!--[if gte vml 1]><v:shape id="_x0000_i1045"
   type="#_x0000_t75" alt="" style='width:7.5pt;height:21pt'>
   <v:imagedata src="images/princi68.gif"
    o:href="http://www.prognosis.nl/principle/w18.gif"/>
  </v:shape><![endif]-->
                      <img src="images/princi68.gif" v:shapes="_x0000_i1045" width="10" height="28"><o:p>
                      </o:p>
                      </font></span></p>
                    </td>
                  </tr>
                </table>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">In
                theory the number of wave degrees are infinite, in practice you
                can spot about four more wave degrees if you examine at tick
                charts.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">This
                indicates that you can trade the investment horizon, which is
                most suited for you, from very aggressive intra day trading to
                longer term investing. The same rules and patterns apply over
                and over again. Now we will take a look at the patterns...</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><a name="classic"><b><i><span style="font-family: Arial; color: black">Classic
                Elliott Wave patterns</span></i></b></a><b><i><span style="color: black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></i></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">Below
                we have depicted all Elliott Wave patterns that are allowed
                under a <b>very strict interpretation</b> of the Elliott Wave
                Principle. Elliott detected most of these patterns, except for
                the Diagonal 2 pattern. The WXY and WXYXZ pattern have not been
                defined as such by Elliott, but he already had discovered these
                sort of combinations.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">In
                our Automatic analysis engine we use the WXY and WXYXZ also for
                Double and Triple Zigzags. This is a much more consistent way of
                labeling these patterns, since now the ABC waves in waves W and
                Y are sub waves and an unfitting Wave X has been eliminated.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">Because
                of this the Automatic analysis no longer has to search for more
                than five waves. Using the old definition of for example a
                Triple Zigzag, the search was for eleven waves, apart from
                inconsistencies this would have slowed down the analysis
                considerably.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="color: black">&nbsp;</span><b><span style="font-family: Arial; color: black">I.
                Trends</span><span style="color: black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><i><font size="2"><span style="font-family: Arial; color: black">a.
                Impulse</span></font></i></b><font size="2"><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><i><span style="font-family: Arial; color: black">Pattern</span></i></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black"><!--[if gte vml 1]><v:shape
 id="_x0000_i1046" type="#_x0000_t75" alt="" style='width:183pt;height:107.25pt'>
 <v:imagedata src="images/princi69.gif"
  o:href="http://www.prognosis.nl/principle/Image66.gif"/>
</v:shape><![endif]-->
                <img src="images/princi69.gif" v:shapes="_x0000_i1046" width="244" height="143"><!--[if gte vml 1]><v:shape id="_x0000_i1047"
 type="#_x0000_t75" alt="" style='width:190.5pt;height:114.75pt'>
 <v:imagedata src="images/princi70.gif"
  o:href="http://www.prognosis.nl/principle/Image67.gif"/>
</v:shape><![endif]-->
                <img src="images/princi70.gif" v:shapes="_x0000_i1047" width="254" height="153"></span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">Description</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">Impulses
                are always composed of five waves, labeled 1,2,3,4,5. Waves 1, 3
                and 5 are themselves each impulsive patterns and are
                approximately equal in length. Waves 2 and 4 on the contrary are
                always corrective patterns. </span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">Rules
                and guidelines</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">The
                most important rules and guidelines are:</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <ul type="disc">
                  <ul type="circle">
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l0 level2 lfo1;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      2 cannot be longer in price than wave 1, and it must not
                      go beyond the origin of wave 1.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l0 level2 lfo1;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      3 is never the shortest when compared to waves 1 and 5.</span>
                      <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l0 level2 lfo1;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      4 cannot overlap wave 1, except in diagonal triangles and
                      sometimes in wave 1 or A waves, but never in a third wave.
                      In most cases there should not be an overlap between wave
                      1 and A.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l0 level2 lfo1;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">As
                      a guideline the third wave shows the greatest momentum,
                      except when the fifth is the extended wave.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l0 level2 lfo1;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      5 must exceed the end of wave 3.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l0 level2 lfo1;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">As
                      a guideline the internal wave structure should show
                      alternation, which means different kind of corrective
                      structures in wave 2 and 4.</span> <o:p>
                      </o:p>
                      </font></li>
                  </ul>
                </ul>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">In
                which wave</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">Impulse
                patterns occur in waves 1, 3, 5 and in waves A and C of a
                correction( this correction could be a wave 2, 4 or a wave B, D,
                E or wave X).</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><span style="font-family: Arial; color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></b></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><span style="font-family: Arial; color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></b></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><font size="2"><span style="font-family: Arial; color: black">Internal
                structure</span></font></b><font size="2"><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">It
                is composed of five waves. The internal structure of these waves
                is 5-3-5-3-5. Note that the mentioned 3s are corrective waves,
                which should be composed of 5 waves in a corrective triangle.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><i><span style="font-family: Arial; color: black">b.
                Extension</span></i></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">Pattern</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black"><!--[if gte vml 1]><v:shape
 id="_x0000_i1048" type="#_x0000_t75" alt="" style='width:224.25pt;height:136.5pt;
 mso-wrap-distance-top:3pt;mso-wrap-distance-bottom:3pt'>
 <v:imagedata src="images/princi71.gif"
  o:href="http://www.prognosis.nl/principle/Image68.gif"/>
</v:shape><![endif]-->
                <img src="images/princi71.gif" vspace="4" v:shapes="_x0000_i1048" width="299" height="182"><!--[if gte vml 1]><v:shape id="_x0000_i1049"
 type="#_x0000_t75" alt="" style='width:229.5pt;height:137.25pt;
 mso-wrap-distance-top:3pt;mso-wrap-distance-bottom:3pt'>
 <v:imagedata src="images/princi72.gif"
  o:href="http://www.prognosis.nl/principle/Image69.gif"/>
</v:shape><![endif]-->
                <img src="images/princi72.gif" vspace="4" v:shapes="_x0000_i1049" width="306" height="183"></span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><font size="2"><span style="font-family: Arial; color: black">Description</span></font></b><font size="2"><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">By
                definition an extension occurs in an impulsive wave, where waves
                1, 3 or 5 can be extended, being much longer than the other
                waves. It is quite common that one of these waves will extend,
                which is normally the third wave. The two other waves then tend
                to equal each other.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">In
                our pattern definitions we call it an Extension1 if the first
                wave extends, an Extension3 if the 3<sup>rd</sup> wave extends
                and an Extension5 if the 5<sup>th</sup> wave extends.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">Rules
                and guidelines</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">The
                most important rules and guidelines concerning an extended wave
                are:</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <ul type="disc">
                  <ul type="circle">
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l10 level2 lfo2;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">It
                      is composed of 5, 9, 13 or 17 waves.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l10 level2 lfo2;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      2 cannot be longer in price length than wave 1, so it
                      should not go beyond the origin of wave 1.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l10 level2 lfo2;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      3 is never the shortest when compared to waves 1 and 5.</span>
                      <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l10 level2 lfo2;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      4 cannot overlap wave 1.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l10 level2 lfo2;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      5 exceeds the end of wave 3.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l10 level2 lfo2;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">The
                      extended wave normally shows the highest acceleration.</span>
                      <o:p>
                      </o:p>
                      </font></li>
                  </ul>
                </ul>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">In
                which wave</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">Extensions
                occur in waves 1, 3, 5, and in A and C waves, when compared to
                each other.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">Internal
                structure</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">As
                a minimum it is composed of 9 waves, though 13 or 17 waves could
                occur. So the minimal internal structure of the 9 waves is
                5-3-5-3-5-3-5-3-5. Note that the 3s mentioned are corrective
                waves, which could be composed of 5 waves in the case of a
                corrective triangle.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><i><span style="font-family: Arial; color: black">c.
                Diagonal triangle type 1</span></i></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">Pattern</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black"><!--[if gte vml 1]><v:shape
 id="_x0000_i1050" type="#_x0000_t75" alt="" style='width:201pt;height:120.75pt'>
 <v:imagedata src="images/princi73.gif"
  o:href="http://www.prognosis.nl/principle/Image70.gif"/>
</v:shape><![endif]-->
                <img src="images/princi73.gif" v:shapes="_x0000_i1050" width="268" height="161"><!--[if gte vml 1]><v:shape id="_x0000_i1051"
 type="#_x0000_t75" alt="" style='width:207pt;height:120.75pt'>
 <v:imagedata src="images/princi74.gif"
  o:href="http://www.prognosis.nl/principle/Image71.gif"/>
</v:shape><![endif]-->
                <img src="images/princi74.gif" v:shapes="_x0000_i1051" width="276" height="161"></span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><font size="2"><span style="font-family: Arial; color: black">Description</span></font></b><font size="2"><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">Diagonals
                are sort of impulsive patterns, which normally occur in terminal
                waves like a fifth or a C wave. Don’t confuse them with
                corrective triangles.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">Diagonals
                are relatively rare phenomena for large wave degrees, but they
                do occur often in lower wave degrees on intra-day charts.
                Usually Diagonal triangles are followed by a violent change in
                market direction. </span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">Rules
                and guidelines</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">The
                most important rules and guidelines are:</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <ul type="disc">
                  <ul type="circle">
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l3 level2 lfo3;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">It
                      is composed of 5 waves.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l3 level2 lfo3;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Waves
                      4 and 1 do overlap. </span><o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l3 level2 lfo3;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      4 can’t go beyond the origin of wave 3.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l3 level2 lfo3;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      3) cannot be the shortest wave.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l3 level2 lfo3;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Internally
                      all waves of the diagonal have a corrective wave
                      structure.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l3 level2 lfo3;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      1 is the longest wave and wave 5 the shortest.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l3 level2 lfo3;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">The
                      channel lines of Diagonals must converge.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l3 level2 lfo3;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">As
                      a guideline the internal wave structure should show
                      alternation, which means different kind of corrective
                      structures.</span> <o:p>
                      </o:p>
                      </font></li>
                  </ul>
                </ul>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">In
                which wave</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">Diagonal
                triangles type 1 occur in waves 5, C and sometimes in wave 1.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">Internal
                structure</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">The
                internal structure of the five waves is 3-3-3-3-3.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><i><span style="font-family: Arial; color: black">d.
                Diagonal triangle type 2</span></i></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">Pattern</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black"><!--[if gte vml 1]><v:shape
 id="_x0000_i1052" type="#_x0000_t75" alt="" style='width:207pt;height:116.25pt'>
 <v:imagedata src="images/princi75.gif"
  o:href="http://www.prognosis.nl/principle/Image72.gif"/>
</v:shape><![endif]-->
                <img src="images/princi75.gif" v:shapes="_x0000_i1052" width="276" height="155"><!--[if gte vml 1]><v:shape id="_x0000_i1053"
 type="#_x0000_t75" alt="" style='width:209.25pt;height:120pt'>
 <v:imagedata src="images/princi76.gif"
  o:href="http://www.prognosis.nl/principle/Image73.gif"/>
</v:shape><![endif]-->
                <img src="images/princi76.gif" v:shapes="_x0000_i1053" width="279" height="160"></span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">Description</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">Diagonal
                type 2 is a sort of impulsive pattern, which normally occurs in
                the first or A wave. The main difference with the Diagonal
                Triangle type 1 is the fact that <b>waves 1, 3 and 5</b> have an
                internal structure of <b>five</b> waves instead of three.
                Experience shows it can also occur in a wave 5 or C, though the
                Elliott Wave Principle does not allow this. Don’t confuse this
                with corrective triangles.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">Diagonals
                are relatively rare phenomena for large wave degrees, but they
                do occur often in lower wave degrees in intra day charts. These
                Diagonal triangles are not followed by a violent change in
                market direction, because it is not the end of a trend, except
                when it occurs in a fifth or a C wave.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">Rules
                and guidelines</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">The
                most important rules and guidelines are:</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <ul type="disc">
                  <ul type="circle">
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l7 level2 lfo4;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">It
                      is composed of 5 waves.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l7 level2 lfo4;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      4 and 1 do overlap.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l7 level2 lfo4;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      4 can’t go beyond the origin of wave 3.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l7 level2 lfo4;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      3) cannot be the shortest wave.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l7 level2 lfo4;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Internally
                      waves 1, 3 and 5 have an impulsive wave structure.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l7 level2 lfo4;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      1 is the longest wave and wave 5 the shortest.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l7 level2 lfo4;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">As
                      a guideline the internal wave structure should show
                      alternation, which means that wave 2 and 4 show a
                      different kind of corrective structure.</span> <o:p>
                      </o:p>
                      </font></li>
                  </ul>
                </ul>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">In
                which wave</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">Diagonal
                triangles type 2 occur in waves 1 and A.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">Internal
                structure</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">The
                five waves of the diagonal type 2 show an internal structure of
                5-3-5-3-5.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><i><span style="font-family: Arial; color: black">e.
                Failure or Truncated 5th</span></i></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">Pattern</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black"><!--[if gte vml 1]><v:shape
 id="_x0000_i1054" type="#_x0000_t75" alt="" style='width:192pt;height:105pt'>
 <v:imagedata src="images/princi77.gif"
  o:href="http://www.prognosis.nl/principle/Image74.gif"/>
</v:shape><![endif]-->
                <img src="images/princi77.gif" v:shapes="_x0000_i1054" width="256" height="140"><!--[if gte vml 1]><v:shape id="_x0000_i1055"
 type="#_x0000_t75" alt="" style='width:187.5pt;height:99pt'>
 <v:imagedata src="images/princi78.gif"
  o:href="http://www.prognosis.nl/principle/Image75.gif"/>
</v:shape><![endif]-->
                <img src="images/princi78.gif" v:shapes="_x0000_i1055" width="250" height="132"></span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><font size="2"><span style="font-family: Arial; color: black">Description</span></font></b><font size="2"><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">A
                failure is an impulsive pattern in which the fifth wave does not
                exceed the third wave. Fifth waves, which travel only slightly
                beyond the top of wave 3, can also be classified as a kind of
                failure. It indicates that the trend is weak and that the market
                will show acceleration in the opposite direction.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">Rules
                and guidelines</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">The
                most important rules and guidelines are:</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <ul type="disc">
                  <ul type="circle">
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l5 level2 lfo5;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      2 cannot be longer in price distance than wave 1, so it
                      should not go beyond the origin of wave 1.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l5 level2 lfo5;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      3 is never the shortest when compared to waves 1 and 5.</span>
                      <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l5 level2 lfo5;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      4 cannot overlap wave 1, except for diagonal triangles and
                      sometimes in waves 1 or A, but never in a third wave.
                      There should not be overlap between wave 1 and A.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l5 level2 lfo5;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      5 fails to go beyond the end of wave 3.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l5 level2 lfo5;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">As
                      a guideline the third wave shows the greatest momentum.</span>
                      <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l5 level2 lfo5;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">As
                      a guideline the internal wave structure should show
                      alternation, which means different kinds of corrective
                      structures.</span> <o:p>
                      </o:p>
                      </font></li>
                  </ul>
                </ul>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">In
                which wave</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">A
                failure can only occur in a fifth wave or a C wave, but normally
                not in the fifth wave of wave 3. </span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">Internal
                structure</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">It
                must be composed of five waves. </span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><a name="classic_corrections"><b><span style="font-family: Arial; color: black">II.
                Corrections</span></b></a><b><span style="color: black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><i><font size="2"><span style="font-family: Arial; color: black">a.
                Zigzag</span></font></i></b><font size="2"><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">Pattern</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black"><!--[if gte vml 1]><v:shape
 id="_x0000_i1056" type="#_x0000_t75" alt="" style='width:163.5pt;height:151.5pt'>
 <v:imagedata src="images/princi79.gif"
  o:href="http://www.prognosis.nl/principle/Image76.gif"/>
</v:shape><![endif]-->
                <img src="images/princi79.gif" v:shapes="_x0000_i1056" width="218" height="202"><!--[if gte vml 1]><v:shape id="_x0000_i1057"
 type="#_x0000_t75" alt="" style='width:162pt;height:156.75pt'>
 <v:imagedata src="images/princi80.gif"
  o:href="http://www.prognosis.nl/principle/Image77.gif"/>
</v:shape><![endif]-->
                <img src="images/princi80.gif" v:shapes="_x0000_i1057" width="216" height="209"></span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><font size="2"><span style="font-family: Arial; color: black">Description</span></font></b><font size="2"><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">A
                Zigzag is the most common corrective structure, which starts a
                sharp reversal. Often it looks like an impulsive wave, because
                of the acceleration it shows. A zigzag can extend itself into a
                double or triple zigzag, although this is not very common,
                because it lacks alternation (the same two patterns follow each
                other). Notice that the zigzag can only be the first part of a
                corrective structure.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">Rules
                and guidelines</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <ul type="disc">
                  <ul type="circle">
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l6 level2 lfo6;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">It
                      is composed of 3 waves.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l6 level2 lfo6;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Waves
                      A and C are impulses, wave B is corrective.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l6 level2 lfo6;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">The
                      B wave retraces no more then 61.8% of A.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l6 level2 lfo6;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">The
                      C wave must go beyond the end of A.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l6 level2 lfo6;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">The
                      C wave normally is at least equal to A.</span> <o:p>
                      </o:p>
                      </font></li>
                  </ul>
                </ul>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">In
                which wave</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">Most
                of the time it happens in A, X or 2. Also quite common in B
                waves as a part of a Flat, (part of) Triangles and sometimes in
                4.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">Internal
                structure</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">A
                single Zigzag is composed of 3 waves, a double of 7 waves
                separated by an X wave in the middle, a triple of 11 waves
                separated by two X waves (see pictures below). The internal
                structure of the 3 waves is 5-3-5 in a single Zigzag,
                5-3-5-3-5-3-5 in a double.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">Example
                of a <b>Double Zigzag</b></span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black"><!--[if gte vml 1]><v:shape
 id="_x0000_i1058" type="#_x0000_t75" alt="" style='width:203.25pt;height:142.5pt'>
 <v:imagedata src="images/princi81.gif"
  o:href="http://www.prognosis.nl/principle/Image78.gif"/>
</v:shape><![endif]-->
                <img src="images/princi81.gif" v:shapes="_x0000_i1058" width="271" height="190"><!--[if gte vml 1]><v:shape id="_x0000_i1059"
 type="#_x0000_t75" alt="" style='width:159pt;height:152.25pt'>
 <v:imagedata src="images/princi82.gif"
  o:href="http://www.prognosis.nl/principle/Image79.gif"/>
</v:shape><![endif]-->
                <img src="images/princi82.gif" v:shapes="_x0000_i1059" width="212" height="203"></span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p><font size="2">&nbsp;<span style="font-family:Arial">As you
                have noticed we have a more modern representation of the Double
                Zigzag using the labels WXY instead of ABCXABC. This is more
                consistent, since this way 2 zigzags of lower degree get
                connected to each other by waves of higher degree. On top if
                that, our automatic analysis needed such a consistent method of
                labeling to reach maximum performance. Instead of labeling 7
                waves (ABCXABC), the Automatic analysis needs to label only 3
                waves (WXY). According to the same method a Triple Zigzag is
                represented by WXYXZ instead of ABCXABCXABC. This way the number
                of waves was reduced to five instead of eleven.</span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><i><span style="font-family: Arial; color: black">b.
                Flat</span></i></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">Pattern</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black"><!--[if gte vml 1]><v:shape
 id="_x0000_i1060" type="#_x0000_t75" alt="" style='width:195.75pt;height:123.75pt'>
 <v:imagedata src="images/princi83.gif"
  o:href="http://www.prognosis.nl/principle/Image80.gif"/>
</v:shape><![endif]-->
                <img src="images/princi83.gif" v:shapes="_x0000_i1060" width="261" height="165"><!--[if gte vml 1]><v:shape id="_x0000_i1061"
 type="#_x0000_t75" alt="" style='width:195.75pt;height:121.5pt'>
 <v:imagedata src="images/princi84.gif"
  o:href="http://www.prognosis.nl/principle/Image81.gif"/>
</v:shape><![endif]-->
                <img src="images/princi84.gif" v:shapes="_x0000_i1061" width="261" height="162"></span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><font size="2"><span style="font-family: Arial; color: black">Description</span></font></b><font size="2"><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">Flats
                are very common forms of corrective patterns, which generally
                show a sideways direction. Waves A and B of the Flat are both
                corrective patterns. Wave C on the contrary is an impulsive
                pattern. Normally wave C will not go beyond the end of wave A.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><font size="2"><span style="font-family: Arial; color: black">Rules
                and guidelines</span></font></b><font size="2"><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <ul type="disc">
                  <ul type="circle">
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l8 level2 lfo7;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">It
                      is composed of 3 waves.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l8 level2 lfo7;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      C is an impulse, wave A and B are corrective.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l8 level2 lfo7;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      B retraces more then 61.8% of A.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l8 level2 lfo7;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      B often shows a complete retracement to the end of the
                      previous impulse wave.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l8 level2 lfo7;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      C shouldn’t go beyond the end of A.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l8 level2 lfo7;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Normally
                      wave C is at least equal to A.</span> <o:p>
                      </o:p>
                      </font></li>
                  </ul>
                </ul>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><font size="2"><span style="font-family: Arial; color: black">In
                which wave</span></font></b><font size="2"><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">It
                occurs mostly in B waves, though also quite common in 4 and 2.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><span style="font-family: Arial; color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></b></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><span style="font-family: Arial; color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></b></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><font size="2"><span style="font-family: Arial; color: black">Internal
                structure</span></font></b><font size="2"><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">As
                mentioned before a Flat consists of 3 waves. The internal
                structure of these waves is 3-3-5. Both waves A and B normally
                are Zigzags.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><i><span style="font-family: Arial; color: black">c.
                Expanded Flat or Irregular Flat</span></i></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">Pattern</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black"><!--[if gte vml 1]><v:shape
 id="_x0000_i1062" type="#_x0000_t75" alt="" style='width:182.25pt;height:146.25pt'>
 <v:imagedata src="images/princi85.gif"
  o:href="http://www.prognosis.nl/principle/Image82.gif"/>
</v:shape><![endif]-->
                <img src="images/princi85.gif" v:shapes="_x0000_i1062" width="243" height="195"><!--[if gte vml 1]><v:shape id="_x0000_i1063"
 type="#_x0000_t75" alt="" style='width:8.25pt;height:8.25pt'>
 <v:imagedata src="file:///C:/DOCUME~1/Tatyana/LOCALS~1/Temp/msoclip1/03/clip_image039.png"
  o:href="http://www.prognosis.nl/principle/Image83.gif"/>
</v:shape><![endif]-->
                <img src="images/princi86.gif" v:shapes="_x0000_i1063" width="11" height="11"><!--[if gte vml 1]><v:shape id="_x0000_i1064"
 type="#_x0000_t75" alt="" style='width:185.25pt;height:149.25pt'>
 <v:imagedata src="images/princi87.gif"
  o:href="http://www.prognosis.nl/principle/Image84.gif"/>
</v:shape><![endif]-->
                <img src="images/princi87.gif" v:shapes="_x0000_i1064" width="247" height="199"></span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><font size="2"><span style="font-family: Arial; color: black">Description</span></font></b><font size="2"><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">This
                is a common special type of Flat. Here the B wave is extended
                and goes beyond the (orthodox) end of the previous impulsive
                wave. The strength of the B wave shows that the market wants to
                go in the direction of B. Often a strong acceleration will take
                place, which starts a third wave or an extended fifth. If the C
                wave is much longer then A, the strength will be less.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">Rules
                and guidelines</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <ul type="disc">
                  <ul type="circle">
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l9 level2 lfo8;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">It
                      is composed of 3 waves.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l9 level2 lfo8;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      C is an impulse, waves A and B are corrective.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l9 level2 lfo8;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      B retraces beyond the end of the previous impulse, which
                      is the start of wave A. The C wave normally is much longer
                      then A.</span> <o:p>
                      </o:p>
                      </font></li>
                  </ul>
                </ul>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">In
                which wave</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">This
                corrective pattern can happen in 2, 4, B and X. If it happens in
                2 and C is relatively short, normally an acceleration in the
                third will take place.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><span style="font-family: Arial; color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></b></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><span style="font-family: Arial; color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></b></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><font size="2"><span style="font-family: Arial; color: black">Internal
                structure</span></font></b><font size="2"><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">It
                is composed of five waves, which have an internal structure of
                3-3-5.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><i><span style="font-family: Arial; color: black">d.
                Triangles </span></i></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><i><span style="font-family: Arial; color: black">Contracting
                Triangle:</span></i><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">Pattern</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black"><!--[if gte vml 1]><v:shape
 id="_x0000_i1065" type="#_x0000_t75" alt="" style='width:226.5pt;height:130.5pt'>
 <v:imagedata src="images/princi88.gif"
  o:href="http://www.prognosis.nl/principle/Image85.gif"/>
</v:shape><![endif]-->
                <img src="images/princi88.gif" v:shapes="_x0000_i1065" width="302" height="174"><!--[if gte vml 1]><v:shape id="_x0000_i1066"
 type="#_x0000_t75" alt="" style='width:225pt;height:129.75pt'>
 <v:imagedata src="images/princi89.gif"
  o:href="http://www.prognosis.nl/principle/Image86.gif"/>
</v:shape><![endif]-->
                <img src="images/princi89.gif" v:shapes="_x0000_i1066" width="300" height="173"></span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><font size="2"><span style="font-family: Arial; color: black">Description</span></font></b><font size="2"><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">A
                triangle is a corrective pattern, which can contract or expand.
                Furthermore it can ascend or descend. It is composed of five
                waves, each of them has a corrective nature.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">Rules
                and guidelines</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <ul type="disc">
                  <ul type="circle">
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l4 level2 lfo9;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">It
                      is composed of 5 waves.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l4 level2 lfo9;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      4 and 1 do overlap.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l4 level2 lfo9;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      4 can’t go beyond the origin of wave 3.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l4 level2 lfo9;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      3 cannot be the shortest wave.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l4 level2 lfo9;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Internally
                      all waves of the diagonal have a corrective wave
                      structure.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l4 level2 lfo9;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">In
                      a contracting Triangle, wave 1 is the longest wave and
                      wave 5 the shortest. In an expanding Triangle, wave 1 is
                      the shortest and wave 5 the longest.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l4 level2 lfo9;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Triangles
                      normally have a wedged shape, which follows from the
                      previous.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l4 level2 lfo9;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">As
                      a guideline the internal wave structure should show
                      alternation.</span> <o:p>
                      </o:p>
                      </font></li>
                  </ul>
                </ul>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><span style="font-family: Arial; color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></b></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><span style="font-family: Arial; color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></b></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><font size="2"><span style="font-family: Arial; color: black">In
                which wave</span></font></b><font size="2"><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">Triangles
                occur only in waves B, X and 4. Never in wave 2 or A.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">Internal
                structure</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">It
                is composed of five waves, of which the internal structure is
                3-3-3-3-3.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><i><font size="2"><span style="font-family: Arial; color: black">Expanding
                Triangle:</span></font></i><font size="2"><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black"><!--[if gte vml 1]><v:shape
 id="_x0000_i1067" type="#_x0000_t75" alt="" style='width:226.5pt;height:128.25pt;
 mso-wrap-distance-top:3pt;mso-wrap-distance-bottom:3pt'>
 <v:imagedata src="images/princi90.gif"
  o:href="http://www.prognosis.nl/principle/Image87.gif"/>
</v:shape><![endif]-->
                <img src="images/princi90.gif" vspace="4" v:shapes="_x0000_i1067" width="302" height="171"><!--[if gte vml 1]><v:shape id="_x0000_i1068"
 type="#_x0000_t75" alt="" style='width:226.5pt;height:128.25pt;
 mso-wrap-distance-top:3pt;mso-wrap-distance-bottom:3pt'>
 <v:imagedata src="images/princi91.gif"
  o:href="http://www.prognosis.nl/principle/Image88.gif"/>
</v:shape><![endif]-->
                <img src="images/princi91.gif" vspace="4" v:shapes="_x0000_i1068" width="302" height="171"></span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="color: black">&nbsp;</span><i><span style="font-family: Arial; color: black">Ascending
                Triangle:</span></i><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">This
                is a triangle, which slopes upwards. This pattern has been
                implemented in the <b>Modern Rules</b>.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><i><font size="2"><span style="font-family: Arial; color: black">Descending
                Triangle:</span></font></i><font size="2"><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">This
                is a triangle, which slopes downwards. This pattern has been
                implemented in the <b>Modern Rules</b>.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><i><font size="2"><span style="font-family: Arial; color: black">Running
                Triangle:</span></font></i><font size="2"><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">This
                is a triangle where the B wave exceeds the origin of wave A.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><i><span style="font-family: Arial; color: black">e.
                WXY or Combination</span></i></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">Many
                kinds of combinations are possible. Below a rather complex
                example has been depicted.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><span style="font-family: Arial; color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></b></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><font size="2"><span style="font-family: Arial; color: black">Pattern</span></font></b><font size="2"><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black"><!--[if gte vml 1]><v:shape
 id="_x0000_i1069" type="#_x0000_t75" alt="" style='width:438pt;height:151.5pt'>
 <v:imagedata src="images/princi92.gif"
  o:href="http://www.prognosis.nl/principle/Image89.gif"/>
</v:shape><![endif]-->
                <img src="images/princi92.gif" v:shapes="_x0000_i1069" width="584" height="202"></span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><font size="2"><span style="font-family: Arial; color: black">Description</span></font></b><font size="2"><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">A
                Combination combines several types of corrections. These
                corrections are labeled as WXY and WXYXZ if it is even more
                complex. It starts for example with a Zigzag (wave W), then an
                intermediate X wave, then a Flat (wave Y) and so on. A so-called
                double or triple three is also a Combination, but this pattern
                combines Flats separated by X waves.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">Rules
                and guidelines</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <ul type="disc">
                  <ul type="circle">
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l2 level2 lfo10;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">All
                      types of corrective patterns can combine to form a bigger
                      corrective pattern.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l2 level2 lfo10;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">The
                      rules and guidelines, as mentioned for other corrective
                      patterns apply.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l2 level2 lfo10;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">A
                      triangle in a Combination should normally occur at the
                      end.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l2 level2 lfo10;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Corrective
                      patterns in a Combination normally show alternation.</span>
                      <o:p>
                      </o:p>
                      </font></li>
                  </ul>
                </ul>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">In
                which wave</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">Generally
                a Combination occurs mostly in B, X and 4, it is less common in
                A and rare in 2.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">Internal
                structure</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">For
                example a Zigzag, followed by a Flat, followed by a Triangle has
                the following internal structure: </span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">5-3-5(Zigzag)-5-3-5(X)-3-3-5(Flat)-3-3-3-3-3(Triangle).</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><i><span style="font-family: Arial; color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></i></b></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><i><span style="font-family: Arial; color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></i></b></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><i><font size="2"><span style="font-family: Arial; color: black">f.
                Running Flat</span></font></i></b><font size="2"><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">Pattern</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black"><!--[if gte vml 1]><v:shape
 id="_x0000_i1070" type="#_x0000_t75" alt="" style='width:166.5pt;height:146.25pt'>
 <v:imagedata src="images/princi93.gif"
  o:href="http://www.prognosis.nl/principle/Image90.gif"/>
</v:shape><![endif]-->
                <img src="images/princi93.gif" v:shapes="_x0000_i1070" width="222" height="195"><!--[if gte vml 1]><v:shape id="_x0000_i1071"
 type="#_x0000_t75" alt="" style='width:172.5pt;height:135pt'>
 <v:imagedata src="images/princi94.gif"
  o:href="http://www.prognosis.nl/principle/Image91.gif"/>
</v:shape><![endif]-->
                <img src="images/princi94.gif" v:shapes="_x0000_i1071" width="230" height="180"></span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="color: black"><font size="2">&nbsp;<o:p>
                </o:p>
                </font></span></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><b><font size="2"><span style="font-family: Arial; color: black">Description</span></font></b><font size="2"><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">The
                Running correction is a rare special form of a failure. This
                pattern is a kind of Flat, with an elongated B wave and a very
                small C wave. According to theory wave C should be so short that
                it doesn’t get to the price territory of wave A. </span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><span style="font-family: Arial; color: black">Instead
                of a running correction this could in theory be an extension in
                an impulsive wave, where the wave has subdivided in two (or
                more) 1,2 combinations. If the B is a clear three wave, then it
                is a Running correction, otherwise an extension. In practice
                there will not be any difference in market direction: in both
                scenarios the market will explode in the direction of the B
                wave. For the sake of correctness we have included this pattern,
                it has been implemented in the <b>Classic Rules</b>, not in the <b>Modern
                Rules</b>.</span><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">Rules
                and guidelines</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <ul type="disc">
                  <ul type="circle">
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l1 level2 lfo11;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">The
                      B wave must be composed of three waves.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l1 level2 lfo11;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">The
                      C wave must be composed of five waves.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l1 level2 lfo11;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      C must be very short and normally will not reach the price
                      territory of A.</span> <o:p>
                      </o:p>
                      </font></li>
                    <li class="MsoNormal" style="color:black;mso-margin-top-alt:auto;mso-margin-bottom-alt:
      auto;mso-list:l1 level2 lfo11;tab-stops:list 72.0pt"><font size="2"><span style="font-family: Arial">Wave
                      C must not retrace more than 100% of wave B but more than
                      60% of wave A.</span> <o:p>
                      </o:p>
                      </font></li>
                  </ul>
                </ul>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><font size="2"><b><span style="font-family: Arial; color: black">In
                which wave</span></b><span style="color: black"><o:p>
                </o:p>
                </span></font></p>
                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto"><span style="font-family: Arial; color: black"><font size="2">Most
                of the time it should occur in wave 2 or B.</font></span>&nbsp;<o:p>
                </o:p>
              </div> 
            </td>
          </tr>
        </table>
      </TD>
      <TD width="3" height="451" background="images/line2.gif"> <IMG SRC="images/line2.gif" width=3 height=238 ALT=""></TD>
      <TD valign="top" height="451" width="1" >&nbsp; </TD>
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