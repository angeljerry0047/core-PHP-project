<HTML>
<HEAD>
<TITLE>ADFC</TITLE>
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

var linkset=new Array();
//SPECIFY MENU SETS AND THEIR LINKS. FOLLOW SYNTAX LAID OUT

linkset[0]='<div class="menuitems"><a href="http://www.ad-fc.net/calendar.php">Calendar</a></div>';
linkset[0]+='<div class="menuitems"><a href="http://www.ad-fc.net/margin.php">Margin</a></div>';
linkset[0]+='<div class="menuitems"><a href="http://www.ad-fc.net/fin_news.php">Financial News</a></div>';
linkset[0]+='<div class="menuitems"><a href="http://www.ad-fc.net/futures_news.php">Futures News</a></div>';
linkset[0]+='<div class="menuitems"><a href="http://www.ad-fc.net/cftccotreports.php">Commitments of traders report</a></div>';
linkset[0]+='<div class="menuitems"><a href="http://www.ad-fc.net/usda.php">USDA Reports</a></div>';
linkset[0]+='<div class="menuitems"><a href="http://www.ad-fc.net/sentiment.php">Stock Markets Sentiments</a></div>';
linkset[0]+='<div class="menuitems"><a href="http://www.ad-fc.net/futures_charts.php">Futures Charts</a></div>';
linkset[0]+='<div class="menuitems"><a href="http://www.ad-fc.net/forex_charts.php">Forex Charts</a></div>';
linkset[0]+='<div class="menuitems"><a href="http://www.ad-fc.net/open.php">Opening Call</a></div>';

linkset[1]='<div class="menuitems"><a href="http://www.ad-fc.net/afcs.html">Active Futures Contrcats Specifications</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://www.ad-fc.net/fnltd.html">First Notice and Last Trading Day</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://www.ad-fc.net/uf.html">Understandind futures</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://www.ad-fc.net/os.html">Options Strategies</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://www.ad-fc.net/ot.html">Order Types</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://www.ad-fc.net/oae.html">Orders Accepted by exchanges</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://www.ad-fc.net/ff.html">Financial Futures</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://www.ad-fc.net/cf.html">Commodities Futures</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://www.eia.doe.gov/pub/oil_gas/petroleum/analysis_publications/oil_market_basics/default.htm" target="_blank">Oil Market Basics</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://www.ad-fc.net/indices.php">US Economic indices</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://www.ad-fc.net/principles.php">Elliott Waves Principles</a></div>';
linkset[1]+='<div class="menuitems"><a href="http://www.ad-fc.net/cfg.html">Commodity Futures Glossary</a></div>';

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
      <TD COLSPAN=8 height="23" width="982"> <IMG SRC="http://www.ad-fc.net/images/top_bar.gif" WIDTH="100%" HEIGHT=23 ALT=""></TD>
    </TR>
    <TR> 
      <TD width="1" ROWSPAN=3 valign="top"> <p align="right"> </TD>
      <TD width="145" valign="middle"> 
        <p align="center"><img src="http://www.ad-fc.net/images/adf.jpg" width="145" height="90"> 
      </TD>
      <TD COLSPAN=5 height="177" width="672"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="662" height="177">
          <param name="movie" value="http://www.ad-fc.net/images/movie2.swf">
          <param name="quality" value="high">
          <embed src="http://www.ad-fc.net/images/movie2.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="662" height="177"></embed></object></TD>
      <TD width="178" valign="middle"> <img src="http://www.ad-fc.net/images/manlogo3.gif" width="67" height="66" hspace="45"></TD>
    </TR>
    <TR> 
      <TD width="125" valign="top" BGCOLOR=#FFFFFF> 
        <div align="right"> 
          <table width="153" border="0" cellpadding="0" height="140" cellspacing="0">
            <tr> 
              <td valign="middle" background="http://www.ad-fc.net/images/cell_bg_home.gif" width="177" height="16"> 
                <div align="right">
                  <p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            
                  <a href="http://www.ad-fc.net/index.html"><font color="#FFFFFF">Home</font></a></div></td>
            </tr>
            <tr> 
              <td valign="middle" background="http://www.ad-fc.net/images/cell_bg_about.gif" width="143" height="16"> 
                <div align="right">
                  <p align="left"><font color="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           
                  </font><a href="http://www.ad-fc.net/about.html"><font color="#FFFFFF">About ADFC</font></a></div></td>           
            </tr>
            <tr> 
              <td valign="middle" background="http://www.ad-fc.net/images/cell_bg_clients.gif" width="143" height="17"> 
                <div align="right">
                  <p align="left"><font color="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           
                  </font><a href="#" onMouseover="showmenu(event,linkset[0])" onMouseout="delayhidemenu()"><font color="#FFFFFF">Clients Area</font></a></div></td>           
            </tr>
            <tr> 
              <td valign="middle" background="http://www.ad-fc.net/images/cell_bg_research.gif" width="143" height="14"> 
                <div align="right">
                  <p align="left"><font color="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    </font><a href="http://www.ad-fc.net/research.php"><font color="#FFFFFF">Research</font></a></div></td>
            </tr>
<tr> 
              <td valign="middle" background="images/cell_bg_research.gif" width="143" height="14"> 
                <div align="right">
                  <p align="left"><font color="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    </font><a href="trading.html"><font color="#FFFFFF">Trading</font></a></div></td>
            </tr>
            <tr> 
              <td valign="middle" background="http://www.ad-fc.net/images/cell_bg_resources.gif" width="143" height="14"> 
                <div align="right">
                  <p align="left"><font color="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    </font><a href="#" onMouseover="showmenu(event,linkset[1])" onMouseout="delayhidemenu()"><font color="#FFFFFF">Resources</font></a></div></td>
            </tr>
            <tr> 
              <td valign="middle" background="http://www.ad-fc.net/images/cell_bg_contact.gif" width="143" height="17"> 
                <p align="left"><font color="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           
                </font><a href="http://www.ad-fc.net/contact.html"><font color="#FFFFFF">Contact Us</font></a> </td>           
            </tr>
            <tr> 
              <td valign="middle" background="http://www.ad-fc.net/images/cell_bg_links.gif" width="143" height="17"> 
                <p align="left"><font color="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                  </font><a href="http://www.ad-fc.net/links.html"><font color="#FFFFFF">Links   
                  </font></a> </td>
            </tr>
          </table>
          <br>

          <table width="153" border="0" cellpadding="0" cellspacing="0">
          <tr><td align="center"><a href="http://www.ad-fc.net/chat_login.php"><img src="http://www.ad-fc.net/images/login.jpg" width="127" height="160" border="0"></a></td></tr>
          <tr><td align="center"><a href="/advisory.php"><img src="http://www.ad-fc.net/images/advisory.jpg" border="0"></a></td></tr>
          <tr><td align="center"><br><iframe name="cwindow" width=150 height=200 style="BORDER-RIGHT: #B7C7FF 1px solid; BORDER-TOP: #B7C7FF 1px solid; BORDER-LEFT: #B7C7FF 1px solid; BORDER-BOTTOM: #B7C7FF 1px solid" src="http://datafeeds.com.au/forexNews.html"></iframe><br><br></td></tr>
          <tr><td align="center">
<?php
  $time = time();
?>
<A HREF="http://www.kitco.com/connecting.html">
  <IMG SRC="http://kitconet.com/images/quotes_special.gif?<?php echo $time;?>" BORDER="2" ALT="[Most Recent Quotes from www.kitco.com]">
</A>          
          </td></tr>
          </table>

          <p align="center">&nbsp;</p>
          <p align="left">&nbsp;</p>
        </div></TD>
      <TD width="2" height="451" background="images/line1.gif"> <IMG SRC="/images/line1.gif" width=2 height=238 ALT=""></TD>
      <TD valign="top" height="451" bgcolor="F8FBFE" width="460"> 
        <table width="221" border="0" cellspacing="2" cellpadding="2" height="65">
          <tr> 
            <td valign="top" height="31" width="100%"> <div align="right">
                <table width="100%" border="0" cellspacing="0" cellpadding="1">
                  <tr>
                    <td bgcolor="#003366"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                        <tr>
                          <td><div align="right"><!-- Clock Part 1 - Put Anywhere Before Part 2 -->

<script language="JavaScript">
// Clock Script Generated By Maxx Blade's Clock v2.0
// http://www.maxxblade.co.uk/clock

function tS(){ x=new Date(); x.setTime(x.getTime()); return x; } 
function lZ(x){ return (x>9)?x:'0'+x; } 
function dT(){ if(fr==0){ fr=1; document.write('<font size=2 face=Arial><b><span id="tP">'+eval(oT)+'</span></b></font>'); } tP.innerText=eval(oT); setTimeout('dT()',1000); } 
function y4(x){ return (x<500)?x+1900:x; } 
var dN=new Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'),mN=new Array('January','February','March','April','May','June','July','August','September','October','November','December'),fr=0,oT="dN[tS().getDay()]+','+' '+mN[tS().getMonth()]+' '+tS().getDate()+','+' '+y4(tS().getYear())";
</script>

<!-- Clock Part 1 - Ends Here  -->


<!-- Clock Part 2 - This Starts/Displays Your Clock -->

<script language="JavaScript">dT();</script>

<!-- Clock Part 2 - Ends Here --></div></td>
                        </tr>
                      </table></td>
                  </tr>
                </table>
                <br>
                <APPLET NAME="Ticker2"
          CODE="Ticker.class"
          ARCHIVE="Ticker.jar"
          CODEBASE="http://java.barchart.com/ticker"
          HEIGHT="48"
          WIDTH="450"
  >
                  <PARAM NAME="panels"    VALUE="3">
                  <PARAM NAME="1:symbols"   VALUE="'Indices,$NASX:Nasdaq,$IUXX:Nasdaq100,$INX:S&P500,$NYS:NYSE:NYSE,$IUX:Russell2000,$VLA:Value Line,$CRB:CRB Index">
                  <PARAM NAME="1:scroll"    VALUE="-1, 100">
                  <PARAM NAME="1:bgcolor"   VALUE="#235789">
                  <PARAM NAME="1:fgcolor"   VALUE="#FFFFFF">
                  <PARAM NAME="1:pscolor"   VALUE="#86FF86">
                  <PARAM NAME="1:ngcolor"   VALUE="#FF3333">
                  <PARAM NAME="1:hilight"   VALUE="#FFFF00">
                  <PARAM NAME="1:font"      VALUE="Arial, Normal, 10">
                  <PARAM NAME="2:symbols"   VALUE="'Stocks,MSFT:Microsoft,IBM,QQQQ,SIEB:Siebert,TSA:Sports Authority,EBAY,YHOO:Yahoo,AA:Alcoa Inc,AXP:Amer Express,BA:Boeing,C:Citygroup,CAT:Caterpillar,DD:Du Pont,DIS:Walt Disney,EK:Eastman Kodak,GE:General Electric,GM:General Motors,HD:Home Depot,HPQ:Hewlett-packard,INTC:Intel,CSCO:Cisco,JNJ:Johnson&Johnson,JPM:JP Morgan Chase,KO:Coca Cola,MCD:Mcdonalds,MRK:Merk&CO,PG:Procter&Gamble,T:AT&T,WMT:Wal-Mart,XOM:Exxon Mobil">
                  <PARAM NAME="2:scroll"    VALUE="-1, 200">
                  <PARAM NAME="2:bgcolor"   VALUE="#D3E7FE">
                  <PARAM NAME="2:fgcolor"   VALUE="#000000">
                  <PARAM NAME="2:pscolor"   VALUE="#0A4A0A">
                  <PARAM NAME="2:ngcolor"   VALUE="#AA0000">
                  <PARAM NAME="2:hilight"   VALUE="#0000FF">
                  <PARAM NAME="2:font"      VALUE="Arial, Normal, 10">
                  <PARAM NAME="3:symbols"   VALUE="'Futures,E6Z5:Dec Euro Fx,B6Z5:Dec British Pound,J6Z5:Dec Japanes Yen,S6Z5:Dec Swiss Franc,D6Z5:Dec Canadian$,A6Z5:Dec Australian$,YMZ5:Dec Mini Dow,ESZ5:Dec Mini SP,NQZ5:Dec Mini NASDAQ,ZBZ5:Dec 30Y T.Bonds,ZNZ5:Dec 10Y T.Notes,GCZ5:Dec Gold,SIZ5:Dec Silver,PLF6:Jan Platinum,PAZ5:Dec Palladuim,HGZ5:Dec Copper,CCZ5:Dec Cocoa,KCZ5:Dec Coffee,SBh6:Mar Sugar,Sx5:November Soybean,
WZ5:Dec Wheat,CZ5:Dec Corn,BOZ5:Dec Bean Oil,CLX5:Nov Crude Oil,HOX5:Nov Heating Oil,NGX5:Nov Natural Gaz,LCZ5:Dec Live Cattle,LHZ5:Dec Lean Hogs,PBG6:Feb Pork Bellies,CTZ5:Dec Cotton,OJZ5:Dec Oranje Juice,LBF6:Jan Lumber
">
                  <PARAM NAME="3:scroll"    VALUE="-1,  50">
                  <PARAM NAME="3:bgcolor"   VALUE="#3873AD">
                  <PARAM NAME="3:fgcolor"   VALUE="#FFFFFF">
                  <PARAM NAME="3:pscolor"   VALUE="#86FF86">
                  <PARAM NAME="3:ngcolor"   VALUE="#FFDD75">
                  <PARAM NAME="3:hilight"   VALUE="#CCFFFF">
                  <PARAM NAME="3:font"      VALUE="Arial, Normal, 10">
                </APPLET>
              </div></td>
          </tr>
          <tr> 
            <td valign="top"> 
              <div align="center">
                <center>
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                  <tr>
                    <td colspan='2'>

                <table width='460' border='0' cellspacing='1' cellpadding='1' align='left' >
                <tr bgcolor='#666666'>
                  <td>
                    <table width='100%' border='0' cellspacing='1' cellpadding='4' class=blackred bgcolor='#AEE4FF'>
                    <tr>
                    <td valign='middle'>
                     <img src="http://www.ad-fc.net/images/ad2.jpg"> 
                    </td>
                    <td>
                     "Understanding the clients' needs is the key to success in any business. My 20 years of experience in the financial field serving in different positions from back office to top management allows me to clearly understand what the service you need is; whether you are an individual trader, bank, broker, money manager or financial institution. What you need is what we offer." <br><br>
                                          <div align='right'>Antoine Daoud, President&nbsp;&nbsp;&nbsp;</div>
                    </td>
                    </tr>
                    </table>
                  </td>
                </tr>
                </table>

                    </td>                     
                  </tr>

                  <tr>
                    <td colspan='2'><br>

                <table width='460' border='0' cellspacing='1' cellpadding='1' align='left' >
                <tr bgcolor='#666666'>
                  <td>
                    <table width='100%' border='0' cellspacing='1' cellpadding='4' class=blackred bgcolor='#AEE4FF'>
                    <tr>
                    <td>
                        ADFC provides futures markets clearing and advisory services for individuals, Banks, Brokers, Money managers and Financial Institutions in the Middle East and Africa. All clients' funds are held in segregated accounts with Man Financial-USA, the world leader in futures clearing. 
                    </td>
                    </tr>
                    </table>
                  </td>
                </tr>
                </table>

                    </td>                     
                  </tr>

                  <tr>
                    <td width='50%'>
                    <a href="rates.php"><img src="http://www.ad-fc.net/images/x01.gif" border="0"></a>
                    </td>                     
                    <td width='50%' align='right'><br>
                    <a href='Patsystems_JTrader_flyer.pdf'><img src="http://www.ad-fc.net/images/x02.gif" border="0"></a>
                    </td>                     
                  </tr>

                  <tr>
                    <td colspan='2'>

                    
                    
<table border=0 cellpadding=0 cellspacing=0  style='margin:5px;margin-left:0px'>
 <tr>  <td ><div class=toolBar><div class=toolTitle>Global Calendar (<span style='font-weight:bold;color:red'> downside surprise; </span><span style='font-weight:bold;color:green'> upside surprise; </span> )<a class=smlnk style='display:block;padding-top:5px;' href="http://www.forexnews.com/partners/futuresweb/GlobalCalendar.asp">Complete Calendar for Current Week</a></div></div></td> </tr>
 <tr>                                                                                                                                                                                                                                                                       
    <td valign=top><div class="outerContentBox">
    <div class="contentBox contentBoxScroll" style='width:455px;height:300;overflow-y:auto'>

    <iframe src="http://www.forexnews.com/globalcalendar/globalcalendarmainnew.asp" style='width:100%;height:280px' frameborder=0 ></iframe>
    </div></div>
    </td>
 </tr>


</td>

</tr>
</table>
                    
                    
                    
                    </td>                     
                  </tr>

                  
                  <tr>
                    <td colspan='2'><br>
                <form name='Z1' action='#' method='get' onsubmit='return false;'>
<script language='JavaScript'>
<!--
function Calc()
{
 var doc = document.Z1;
 var rg = parseFloat(doc.high.value) - parseFloat(doc.low.value);
 var close = parseFloat(doc.close.value);
 doc.s1.value = close  - 0.618*rg;
 doc.s2.value = close  - rg;
 doc.s3.value = close  - 1.618*rg;
 doc.s4.value = close  - 2.23*rg;

 doc.r1.value = close  + 0.618*rg ;
 doc.r2.value = close  + rg ;
 doc.r3.value = close  + 1.618*rg ;
 doc.r4.value = close  + 2.23*rg ;

}
-->
</script>
                <table width='460' border='0' cellspacing='1' cellpadding='1' align='left' >
                <tr bgcolor='#666666'>
                  <td>
                    <table width='100%' border='0' cellspacing='1' cellpadding='4' class=blackred bgcolor='#AEE4FF'>
                    <tr>
                    <td align='center' colspan='4'>
                    <h3>Boramor </h3>
                    Boramor calculates supports and resistances. Just enter the previous session High, Low and close for any time frame (Monthly, Weekly, Daily, Hourly...etc) and click on "calculate" bottom to get 4 resistance and 4 support levels.
                    </td>
                    </tr>
                    <tr><td>High</td><td><input type='text' name='high' size='10' tabindex='101'></td><td>&nbsp;&nbsp;</td><td nowrap>S1 <input type='text' name='s1' size='10' tabindex='-1'> R1 <input type='text' name='r1' size='10' tabindex='-1'></td></tr>
                    <tr><td>Low</td><td><input type='text' name='low' size='10' tabindex='102'></td><td>&nbsp;&nbsp;</td><td nowrap>S2 <input type='text' name='s2' size='10' tabindex='-1'> R2 <input type='text' name='r2' size='10' tabindex='-1'></td></tr>
                    <tr><td>Close</td><td><input type='text' name='close' size='10' tabindex='103'></td><td>&nbsp;&nbsp;</td><td nowrap>S3 <input type='text' name='s3' size='10'tabindex='-1'> R3 <input type='text' name='r3' size='10' tabindex='-1'></td></tr>
                    <tr><td></td><td></td><td>&nbsp;&nbsp;</td><td nowrap>S4 <input type='text' name='s4' size='10' tabindex='-1'> R4 <input type='text' name='r4' size='10' tabindex='-1'></td></tr>
                    <td align='center' colspan='4'>
                      <input type='button' value='Calculate' onclick='Calc();' tabindex='104'> &nbsp;&nbsp; <input type='button' value='Clear' onclick='document.Z1.reset();'><br>
                    </td>
                    </tr>

                    </table>
                  </td>
                </tr>
                </table>
                </form>
                    </td>                     
                  </tr>

                
                </table>
                  <p>&nbsp;</p>
                </center>
              </div>
              </td>
          </tr>
        </table></TD>
      <TD width="3" height="451" background="http://www.ad-fc.net/images/line2.gif"> 
        <IMG SRC="http://www.ad-fc.net/images/line2.gif" width=3 height=238 ALT=""></TD>
      <TD valign="top" height="451" width="198"> 
        <table width="95%" border="0" cellspacing="2" cellpadding="2">
          <tr> 
            <td valign="top" width="7%"></td>
            <td valign="top" width="93%"> </td>
          </tr>
          <tr> 
            <td valign="top" width="7%"></td>
            <td width="93%" rowspan="3" valign="top">
              <table width="87%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
                <tr>
                  <td width="100%">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#FFFFFF">
                      <tr>
                        <td width="4%">&nbsp;</td>
                        <td width="92%" height="175" valign='top'>
                        
                        
          <table width="153" border="0" cellpadding="0" cellspacing="0">
          <tr><td align="center"><a href="#"><img src="http://www.ad-fc.net/2.php" border="0"></a><br><br></td></tr>
          <tr><td align="center"><a href="#"><img src="http://www.ad-fc.net/3.php" border="0"></a><br><br></td></tr>
          <tr><td align="center"><a href="#"><img src="http://www.ad-fc.net/4.php" border="0"></a><br><br></td></tr>
          <tr><td align="center"><a href="#"><img src="http://www.ad-fc.net/5.php" border="0"></a><br><br></td></tr>
          </table>
          
                        
                        </td>
                        <td width="4%">&nbsp;</td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr> 
            <td valign="top" width="7%"></td>
          </tr>
          <tr> 
            <td valign="top" width="7%">&nbsp;</td>
            <td width="93%" valign="top"></td>
          </tr>
          <tr> 
            <td valign="top" width="7%">&nbsp;</td>
            <td width="93%" valign="top">
            

                <table width='180' border='0' cellspacing='1' cellpadding='1' align='left' >
                <tr bgcolor='#666666'>
                  <td>
                    <table width='100%' border='0' cellspacing='1' cellpadding='4' class=blackred bgcolor='#bababa'>
                    <tr>
                    <td align='center'>
                       <SPAN 
            style="FONT-SIZE: 14pt; COLOR: navy">What's Hot</SPAN>
                    </td>
                    </tr>
                    </table>
                  </td>
                </tr>
                <tr bgcolor='#666666'>
                  <td>
                    <table width='100%' border='0' cellspacing='1' cellpadding='4' class=blackred bgcolor='#FFFFFF'>
                    <tr>
                    <td>

                        <MARQUEE onmouseover=this.scrollAmount=0 onmouseout=this.scrollAmount=2; scrollAmount=2 direction="up" width="100%" height="260" name="news">

<?php

  $fb = @fread(@fopen('hot.txt', "r"), 102400);
  echo $fb;

?>

                        </MARQUEE>

                    </td>
                    </tr>
                    </table>
                  </td>
                </tr>
                </table>

           
            </td>
          </tr>
          <tr> 
            <td valign="top" width="7%">&nbsp;</td>
            <td width="93%" valign="top"><iframe src="http://www.goforex.net/worldrates.htm" frameborder="0" height=152 width=180 scrolling="no" marginwidth="0" marginheight="0"></iframe></td>
          </tr>
        </table>
      </TD>
      <TD width="2" height="451" background="http://www.ad-fc.net/images/line3.gif"> 
        <IMG SRC="http://www.ad-fc.net/images/line3.gif" width=2 height=238 ALT=""></TD>
      <TD width="178" align="center" valign="top" bgcolor="F8FBFE"> 
        <div align="left">
          <table width="100%" border="0">
            <tr> 
              <td align="center"><div align="left"><strong></strong></div></td>
            </tr>
          </table>
        </div>
        <table width="72%" border="0">
          <tr> 
            <td valign="top">
                <form name="myRedirect" action="http://mtradeprocf.manfinancial.com/processClient.cfm?CompanyID=Man&Group=JTrader" method="post" target="_blank" onsubmit="return checkAll(1);">
                <table width="139" border="0" cellpadding="3" cellspacing="0" class="borderbox">
                  <tr> 
                    <td colspan="2"> <p align="left" class="svc"><img src="http://www.ad-fc.net/images/clients.gif" width="100" height="20"></p>
                      <p align="left" class="svc"><font color="red"><b><font color="#003366">MTRADE                           
                        PRO</font></b></font></p></td>
                  </tr>
                  <tr> 
                    <td width="61"><p class="mvr">User Name:</p></td>
                    <td width="70"><input type="text" class="textbox" name="username" size="10" tabindex="0"></td>
                  </tr>
                  <tr> 
                    <td colspan="2"> <div align="center"> 
                        <input type="submit" class="textbox" name="submitButtonName" value="Log In" tabindex="1" >
                      </div></td>
                  </tr>
                </table>
              </form></td>
          </tr>
          <tr> 
            <td><div align="left"><font color="#003366">..............................................</font></div></td>
          </tr>
          <tr> 
            <td valign="top"><font color="red"><b><font color="#003366">MTRADE</font></b></font><br> 
              <form ACTION="https://mtrade4.manfinancial.com/ProcLogon.asp" METHOD="POST" NAME="formLOGON" target="_blank" onsubmit="return checkAll(2);">
                <table BORDER="0" WIDTH="136">
                  <tr> 
                    <td width="130" COLSPAN="3"  VALIGN="TOP"><table BORDER="0" cellpadding="2" WIDTH="85%">
                        <tr> 
                          
                          <td COLSPAN="3" VALIGN="middle"><font  color=#000000>User 
                            I.D.</font></td>
                          <td ALIGN="right" VALIGN="middle"><input TYPE="text" SIZE="10" NAME="userid" MAXLENGTH="15" VALUE="" class="inputbox"></td>
                        </tr>
                        <tr> 
                         
                          <td COLSPAN="3" VALIGN="middle"><font  color=#000000>Password</font></td>
                          <td ALIGN="right" VALIGN="middle"><input TYPE="password" SIZE="10" NAME="password" MAXLENGTH="15" class="inputbox"></td>
                        </tr>
                        <tr> 
                          <td height="28" COLSPAN="5" ALIGN="right" VALIGN="bottom"> 
                            <div align="center">
                              <input type=submit value="Log On" name=logon >
                            </div></td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </form></td>
          </tr>
          <tr> 
            <td><div align="left"><font color="#003366">..............................................</font></div></td>
          </tr>
          <tr> 
            <td height="119"><font color="red"><b><font color="#003366">EMIDAS 
              </font></b></font> 
              <form name="LOGON" action="https://www2.emidas.com/pwdVal.asp" method="post" target="_blank" onsubmit="return checkAll(3);">
                <table class="borderbox" border="0" cellpadding="3" cellspacing="0">
                  <tr> 
                    <td colspan="2">
</td>
                  </tr>
                  <tr> 
                    <td><p class="mvr">User I.D.</p></td>
                    <td align="right">
<input TYPE="text" SIZE="10" NAME="client_id" MAXLENGTH="15" VALUE="" >
                    </td>
                  </tr>
                  <tr> 
                    <td><p class="mvr">Password</p></td>
                    <td align="right">
<input TYPE="password" SIZE="10" id="password" name="password" MAXLENGTH="15">
                    </td>
                  </tr>
                  <tr> 
                    <td height="30" colspan="2"> <div align="center"> 
                        <input type="submit" class="textbox" name="submitButtonName" value="Log On" tabindex="1" >
                      </div></td>
                  </tr>
                </table>
                <font color="red"><b><font color="#003366"> </font></b></font></form></td>
          </tr>
        </table>
        
      </TD>
    </TR>
    <TR> 
      <TD width="125" valign="top" bgcolor="#E6F1FE">&nbsp; </TD>
      <TD COLSPAN=5 bgcolor="#E6F1FE" height="1" width="672"> <table width="119%" border="0" cellspacing="0" cellpadding="0" height="24">
          <tr> 
            <td width="81%" height="24"> <div align="center"> 
                <center>
                  <table width="315" border="0" cellspacing="2" cellpadding="2">
                    <tr> 
                      <td width="305"> <p align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#003366">Copyright 
                        2019                           
                          ADFC&nbsp;</font></p></td>                          
                    </tr>
                  </table>
                </center>
              </div></td>
            <td width="19%" height="24"> <div align="right"></div></td>                      
          </tr>
        </table></TD>
      <TD width="178"></TD>
    </TR>
    <TR> 
      <TD COLSPAN=7 height="1" width="802"> </TD>
      <TD width="178"></TD>
    </TR>
  </TABLE>
</div>
<div id="popmenu" class="menuskin" onMouseover="clearhidemenu();highlightmenu(event,'on')" onMouseout="highlightmenu(event,'off');dynamichide(event)">
</div>
</BODY>
</HTML>