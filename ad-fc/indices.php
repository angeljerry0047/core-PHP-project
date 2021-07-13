<?php
   header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
   header ("Cache-Control: no-cache, must-revalidate"); 
   header ("Pragma: no-cache");                         

//   include "lib_dbConnect.php";
//   unset ($user);
//   session_register ('user');

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
<TITLE> US Economic Indices</TITLE>

<STYLE TYPE="TEXT/CSS">
<!--

A { text-decoration: none }


A {color:#003366; font-family: Helvetica, Arial; font-size: 14px; text-decoration: none;}
A:hover {color:#FF6600; font-family: Helvetica, Arial; font-size: 12px; text-decoration: underline;}

td {font-family: Helvetica, Arial; font-size: 14px;}
.linkcell { padding-left: 10px; font-family: Helvetica, Arial; font-size: 14px;}
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

linkset[0]='<div class="menuitems"><a href="calendar.php">Calendar</a></div>';
linkset[0]+='<div class="menuitems"><a href="margin.php">Margin</a></div>';
linkset[0]+='<div class="menuitems"><a href="fin_news.php">Financial News</a></div>';
linkset[0]+='<div class="menuitems"><a href="futures_news.php">Futures News</a></div>';
linkset[0]+='<div class="menuitems"><a href="cftccotreports.php">Commitments of traders report</a></div>';
linkset[0]+='<div class="menuitems"><a href="usda.php">USDA Reports</a></div>';
linkset[0]+='<div class="menuitems"><a href="futures_charts.php">Futures Charts</a></div>';
linkset[0]+='<div class="menuitems"><a href="forex_charts.php">Forex Charts</a></div>';
linkset[0]+='<div class="menuitems"><a href="open.php">Opening Call</a></div>';

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
   <!--  <TR> 
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
    </TR>-->
    <TR> 
      <TD COLSPAN=8 height="23" width="982"> <IMG SRC="images/top_bar.gif" WIDTH="100%" ALT=""></TD>
    </TR>
    <TR> 
      <TD width="1" ROWSPAN=3 valign="top"> <p align="right"> </TD>
      <TD width="145" valign="middle"> 
        <p align="center"><img src="images/adfc-white.png" width="150" height="215"> 
      </TD>
      <TD COLSPAN=5 height="177" width="100%"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="662" height="177">
          <img src="images/adfc-banner.jpg" width="100%">
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
            <td valign="top" height="31"><div align="justify"><strong><font size="3" color="#003366">US 
                Economic Indices</font><br>
                <br>
                NAPM: National  
                Association of Purchasing Managers </strong></div> 
              <p align="justify"> &nbsp;&nbsp;&nbsp;&nbsp; Importance (A-C): This release merits an A-.    
                <br>
              &nbsp;&nbsp;&nbsp;&nbsp; Source: National Association of Purchasing Managers. <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Release Time: 10:00 ET on the first business day of the month    
                for the prior month. <br>   
                The NAPM report is a national survey of purchasing managers which    
                covers such indicators as new orders, production, employment,    
                inventories, delivery times, prices, export orders, and import    
                orders. Diffusion indexes are produced for each of these categories,    
                with a reading over 50%   
                indicating expansion relative to the prior month, and a sub-50%    
                reading indicating contraction. <br>   
                The total index is calculated based on a weighted average of the    
                following five sub-indexes, with weights in parentheses: new orders    
                (30%), production (25%), employment (20%), deliveries (15%), and    
                inventories (10%). <br>   
                The NAPM is one of the first comprehensive economic releases of    
                the month, typically preceding the employment report. Though it    
                covers only the manufacturing sector, it can often provide accurate    
                hints regarding the tone of subsequent releases. During periods    
                of inflation concerns, the   
                prices paid and vendor deliveries indexes often determine the    
                bond market's reaction to the report. </p>   
              <p align="justify"><b>Initial Claims</b></p> 
              <p align="justify"> &nbsp;&nbsp;&nbsp;&nbsp; Importance (A-F): This release merits a C+.    
                <br>
              &nbsp;&nbsp;&nbsp;&nbsp; Source: The Employment and Training Administration of the Department    
                of Labor. <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Release Time: 8:30 ET each Thursday (data for week ended prior    
                Saturday). <br>
                Initial jobless claims measure the number of filings for state    
                jobless benefits. This report provides a timely, but often misleading,    
                indicator of the direction of the economy, with increases (decreases)    
                in claims potential signalling slowing (accelerating) job growth.    
                On a week-to-week basis, claims are quite volatile, and many analysts    
                therefore track a four week moving average to get a better sense    
                of the underlying trend. It typically takes a sustained move of    
                at least 30K in claims to signal a meaningful change in job growth.    
                <br>
                There are two other statistics in this report -- the number of    
                people receiving state benefits and the insured unemployment rate;    
                neither is watched closely by the market. Some analysts track    
                the number of people receiving state benefits from month to month    
                as a guide for job growth, though   
                this series has a poor track record in predicting the monthly    
                employment report. The insured unemployment rate changes little    
                on a weekly basis and is never a factor for the market.</p>   
              <p align="justify"><b>Leading Indicators</b></p> 
              <p align="justify"> &nbsp;&nbsp;&nbsp;&nbsp; Importance (A-C): This release merits an D-.    
                <br>
              &nbsp;&nbsp;&nbsp;&nbsp; Source: The Conference Board. <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Release Time: 8:30 ET around the first few business days of the    
                month for two months   
                prior. <br>
                The Leading Indicators report is, for the most part, a compendium    
                of previously announced economic indicators: new orders, jobless    
                claims, money supply, average workweek, building permits, and    
                stock prices. Therefore, the report is extremely predictable and    
                of very little interest to   
                the market. Though this series does have some predictive qualities,    
                it is a common criticism that it has predicted &quot;nine of the    
                last six&quot; recessions. <br>   
                The Commerce Department recently privatized the leading indicators    
                series. The collection and publishing of these data is now done    
                by the non-profit Conference Board, which also produces the consumer    
                confidence index.</p>   
              <p align="justify"><b>M2</b></p>
              <p align="justify"> &nbsp;&nbsp;&nbsp;&nbsp; Importance (A-C): This release merits a D. <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Source: Federal Reserve Board. <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Release Time: Every Thursday at 16:30 ET, data for the week ended    
                two Mondays prior. <br>   
                Money supply figures, and M1 specifically, once were the most    
                important release to watch in the Treasury market, as the Fed    
                directly targetted M1 growth in the early 1980s. The focus on    
                money supply has long since been abandoned, however. To the extent    
                that money supply is still monitored   
                by the market, M2 is the favored monetary aggregate. The Fed still    
                targets both M2 and M3 in a rhetorical sense, but these targets    
                mean little when it comes to policy decisions. If the Fed misses    
                its target, it is more likely to change the target than it is    
                to change policy. With M2 velocity behaving   
                more predictably since 1994, however, some Federal Reserve policy    
                makers are once again keeping an eye on M2. Intermediate and long    
                term trends should therefore be noted, but volatile weekly swings    
                are of little consequence to the market. </p>   
              <p align="justify"><b>Personal Income and Consumption</b></p> 
              <p align="justify"> &nbsp;&nbsp;&nbsp;&nbsp; Importance (A-F): This release merits a C+.    
                <br>
              &nbsp;&nbsp;&nbsp;&nbsp; Source: The Bureau of Economic Analysis of the Department of Commerce.    
                <br>
              &nbsp;&nbsp;&nbsp;&nbsp; Release Time: 8:30 ET around the first business day of the month    
                (data for two months   
                prior). <br>
                Personal income measures income from all sources. The largest    
                component of total income is wages and salaries, a figure which    
                can be estimated using payrolls and earnings data from the employment    
                report. Beyond that, there are many other categories of income,    
                including rental income, government   
                subsidy payments, interest income, and dividend income. Personal    
                income is a decent indicator of future consumer demand, but it    
                is not perfect. Recessions usually occur when consumers stop spending,    
                which then drives down income growth. Looking solely at income    
                growth, one may   
                therefore miss the turning point when consumers stop spending.    
                <br>
                The income report also includes a section covering personal consumption    
                expenditures, also known as PCE. PCE is comprised of three categories:    
                durables, nondurables, and services. The retail sales report will    
                provide a good read on durable and nondurable consumption, while    
                service purchases   
                tend to grow at a fairly steady pace, making this a relatively    
                predictable report, and ranking it well below retail sales in    
                terms of market importance.</p>   
              <p align="justify"><b>PPI: Producer Price Index</b></p> 
              <p align="justify"> &nbsp;&nbsp;&nbsp;&nbsp; Importance (A-C): This release merits a B-.    
                <br>
              &nbsp;&nbsp;&nbsp;&nbsp; Source: Bureau of Labor statistics, U.S. Department of Labor.    
                <br>
              &nbsp;&nbsp;&nbsp;&nbsp; Release Time: Around the 11th of each month at 8:30 ET for the    
                prior month. <br>   
                The Producer Price Index measures prices of goods at the wholesale    
                level. There are three broad subcategories within PPI: crude,    
                intermediate, and finished. The market tracks the finished goods    
                index most closely, as it represents prices for goods that are    
                ready for sale to the end user. Goods   
                prices at the crude and intermediate stages of production often    
                provide an indication of coming (dis)inflationary pressures, but    
                the closer you get to crude goods, the more that these prices    
                track commodity prices which are already available in traded indexes    
                such as the CRB (Commodity   
                Research Bureau). </p>   
              <p align="justify">At all stages of production, the market places  
                more emphasis on the index excluding food and energy, referred  
                to as the core rate. Food and energy prices tend to be quite volatile  
                and obscure trends in the underlying inflation rate. Though the  
                market reaction is determined by the month/month 
                changes, year/year changes are also noted by analysts. The index  
                is not revised on a monthly basis, but annual revisions to seasonal  
                adjustment factors can produce small adjustments to past releases.</p> 
              <p align="justify"><b>Retail Sales</b></p> 
              <p align="justify"> &nbsp;&nbsp;&nbsp;&nbsp; Importance (A-F): This release merits an A-.    
                <br>
              &nbsp;&nbsp;&nbsp;&nbsp; Source: The Census Bureau of the Department of Commerce. <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Release Time: 8:30 ET around the 13th of the month (data for one    
                month prior). <br>   
                The retail sales report is a measure of the total receipts of    
                retail stores. The changes in retail sales are widely followed    
                as the most timely indicator of broad consumer spending patterns.    
                Retail sales are often viewed ex-autos, as auto sales can move    
                sharply from month-to-month. It is also important to keep an eye    
                on the gas and food components, where changes in sales are often    
                a result of price changes rather than shifting consumer demand.    
                <br>
                Retail sales can be quite volatile and the advance reports are    
                subject to rather large revisions. Retail sales do not include    
                spending on services, which makes up over half of total consumption.    
                Total personal consumption is not available until the personal    
                income and consumption reports are released, typically two weeks    
                after retail sales. </p>   
              <p align="justify"><b>Treasury Budget</b></p> 
              <p align="justify"> &nbsp;&nbsp;&nbsp;&nbsp; Importance (A-F): This release merits a D. <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Source: U.S. Treasury Department. <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Release Time: 14:00 ET, about the third week of the month for    
                the prior month. <br>   
                The monthly Treasury budget data follow strong seasonal patterns    
                which produce huge month-to-month fluctuations in the deficit.    
                These fluctuations tell us little about long term budget trends.    
                To the extent that the market analyses the monthly Treasury data,    
                the focus is on year/year changes in receipts and outlays, since    
                the data are not seasonally adjusted. Only in April, the most    
                important month for tax inflows to the Treasury, does the market    
                pay any attention to this report.<br>   
                The data can be predicted with reasonable accuracy by using daily    
                data in the Daily Treasury Statement.</p>   
              <p align="justify"> <b>International Trade</b></p> 
              <p align="justify"> &nbsp;&nbsp;&nbsp;&nbsp; Importance (A-F): This release merits a C+.    
                <br>
              &nbsp;&nbsp;&nbsp;&nbsp; Source: The Census Bureau and the Bureau of Economic Analysis    
                of the Department of   
                Commerce. <br>
              &nbsp;&nbsp;&nbsp;&nbsp; Release Time: 8:30 ET around the 20th of the month (data for two    
                months prior). <br>   
                The trade report is most widely watched for trends in the overall    
                trade balance. But trends in both exports and imports of goods    
                and services bear watching as well. The export data in particular    
                are important to watch for indications that a strengthening competitive    
                position at home and/or strengthening economies overseas are boosting    
                U.S. growth. Imports provide an indication of domestic demand,    
                but given the severe lag of this report relative to other consumption    
                indicators, it is not particularly valuable for this purpose.    
                <br>
                The volatility in the monthly trade balance can play an important    
                role in GDP forecasts. Net exports are a relatively volatile component    
                of GDP, and the trade report provides the only early clues to    
                the net export performance each quarter.</p>   
              <p align="justify"><b>Productivity and Costs</b></p> 
              <p align="justify"> &nbsp;&nbsp;&nbsp;&nbsp; Importance (A-F): This release merits a D+.    
                <br>
              &nbsp;&nbsp;&nbsp;&nbsp; Source: The Bureau of Labor Statistics of the Department of Labor.    
                <br>
              &nbsp;&nbsp;&nbsp;&nbsp; Release Time: 8:30 ET around the 7th of the second month of the    
                quarter (data for quarter prior). <br>   
                Nonfarm productivity and costs provide measures of the productivity    
                of workers and the costs associated with producing a unit of output.    
                During times of inflationary concern, the unit labor cost index    
                in this report can move the market. If productivity is falling,    
                unit labor costs may be rising   
                faster than hourly earnings and other labor cost measures. Because    
                productivity can be quite volatile from one quarter to the next    
                and because the previously released GDP report will give a good    
                indication of productivity growth, this report seldom has a significant    
                impact on the market. <br>   
                In addition to the preliminary report, a revision to the productivity    
                data is released in the third month of each quarter. As with the    
                preliminary report, the GDP data released prior to the productivity    
                data provide a clear indication of the direction of the productivity    
                revision.</p>
              <p align="justify"><b>New Home Sales</b></p> 
              <p align="justify"> &nbsp;&nbsp;&nbsp;&nbsp; Importance (A-F): This release merits a C+.    
                <br>
              &nbsp;&nbsp;&nbsp;&nbsp; Source: The Census Bureau of the Department of Commerce. <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Release Time: 10:00 ET around the last business day of the month    
                (data for month prior). <br>   
                The report indicates the level of new privately owned one-family    
                houses sold and for sale. New home sales usually have a lagged    
                reaction to changing mortgage rates. They also tend to be stronger    
                early in the business cycle when pent-up demand is strong, and    
                they fade later in the cycle as the   
                demand for housing is sated. In addition to home sales, the market    
                monitors the number of homes for sale relative to the current    
                sales pace. As this inventory measure falls (rises), housing starts    
                tend to rise (fall). Finally, the median home price provides an    
                indication of inflation in the housing sector,   
                though only year/year changes provide any meaningful information.    
                <br>
                The home sales report is quite volatile and subject to huge revisions,    
                making any one month's reading very unreliable. The report rarely    
                prompts a market reaction. The market prefers the existing home    
                sales report, which has a sample data pool four times as large    
                and is released earlier in the month.</p>   
              <p align="justify"><b>Wholesale Trade</b></p> 
              <p align="justify"> &nbsp;&nbsp;&nbsp;&nbsp; Importance (A-F): This release merits a D-.    
                <br>
              &nbsp;&nbsp;&nbsp;&nbsp; Source: The Census Bureau of the Department of Commerce. <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Release Time: 10:00 ET around the fifth business day of the month    
                (data for two months   
                prior). <br>
                The wholesale trade report includes sales and inventory statistics    
                from the second stage of the   
                manufacturing process. The sales figures say close to nothing    
                about personal consumption and   
                therefore do not move the market.<br>   
              Wholesale inventories sometimes swing enough    
                to change the aggregate inventory profile (aggregate inventory    
                is the sum of inventory at the manufacturing, wholesale, and retail    
                levels), which may affect the GDP outlook. In that event they    
                can elicit a small market reaction. More often than not, however,    
                this release goes unnoticed except by market economists. </p>   
              <p align="justify"><b>Weekly Chain Store Sales</b></p> 
              <p align="justify"> &nbsp;&nbsp;&nbsp;&nbsp; Importance (A-F): Both of these releases merit    
                a D+. <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Source: Bank of Tokyo-Mitsubishi and LJR Redbook <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Release Time: Mitsubishi: 9:00 ET each Tuesday (data for week    
                ended prior Saturday);<br>   
                Redbook: 14:55 ET each Tuesday (data in the form of a running    
                monthly total for the week ended prior Saturday).<br>   
                Note that the release times for these private surveys are the    
                official embargo times. The releases are provided to subscribers    
                much earlier and typically leaked to the rest of the market long    
                before these official release times. Mitsubishi is typically leaked    
                by 8:00 ET, and the Redbook survey is usually   
                known in the market by 14:15 ET. <br>   
                The Mitsubishi chain-store sales index is based on a representative    
                sample of nine large retailers and measures sales on a weekly    
                basis. The index is relatively volatile from week to week and    
                therefore has little to say about broader consumption patterns.    
                Mitsubishi also produces a monthly measure of sales, which does    
                a better job of predicting a few pieces of the retail sales report    
                (particularly the general merchandise and apparel components).    
                <br>
                The LJR Redbook survey tracks 15 retail stores every week to determine    
                the changes in sales. The report is month to date where: the first    
                week of the month is compared to the previous month; the second    
                week compares the first two weeks of the month to the previous    
                month, and so on. The Redbook survey has a somewhat better track    
                record for predicting chain store sales in the monthly retail    
                sales report.</p>   
              <p align="justify"><b>Auto and Truck Sales</b></p> 
              <p align="justify"> &nbsp;&nbsp;&nbsp;&nbsp; Importance (A-F): This release merits a C-.    
                <br>
              &nbsp;&nbsp;&nbsp;&nbsp; Source: Individual auto manufacturers, seasonal factors by the    
                Commerce Department. <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Release Time: Varies by auto maker from the first business day    
                to the third business day of the month (data for month prior).<br>   
                Auto and Truck Sales measure the monthly sales of all domestically    
                produced vehicles. They are considered an important indicator    
                of consumer demand, accounting for roughly 25% of total retail    
                sales. Demand for big ticket items such as autos and trucks tends    
                to be interest rate sensitive,   
                making the motor vehicle sector a leading indicator of business    
                cycles. <br>
                Each auto maker reports sales individually. The reports are typically    
                released over the course of the first three business days of the    
                month. Using the individual reports, a total annual sales pace    
                can be calculated after applying Commerce Department seasonal    
                factors. It is this annual sales pace that   
                the market refers to when discussing auto and truck sales for    
                the month.</p>   
              <p align="justify"><b>Business Inventories</b></p> 
              <p align="justify"> &nbsp;&nbsp;&nbsp;&nbsp; Importance (A-F): This release merits a C-.    
                <br>
              &nbsp;&nbsp;&nbsp;&nbsp; Source: The Census Bureau of the Department of Commerce. <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Release Time: 08:30 ET around the 15th of the month (data for    
                two months prior). <br>   
                The business inventories report includes sales and inventory statistics    
                from all three stages of the manufacturing process (manufacturing,    
                wholesale, and retail). But by the time it is released all three    
                of its sales components and two of its inventory components have    
                already been reported. Because retail inventory is the only new    
                piece of information it contains, the market usually ignores the    
                business inventories report. <br>   
                However, sometimes retail inventories swing enough to change the    
                aggregate inventory profile. This may affect the GDP outlook.    
                When it does, the report can elicit a small market reaction. <br>   
                The aggregate sales figures are dated and they say little about    
                personal consumption. They are actually a good coincident indicator,    
                but the market is far more interested in forward-looking statistics.   
                The inventory-to-sales (I/S) ratio measures the number of months    
                it would take to deplete existing inventory at current sales rates.    
                A relatively low (high) I/S ratio may mean that manufacturers    
                will have to build up (draw down) inventory levels. Depending    
                on the strength of final demand and the   
                degree to which recent inventory changes have been intended or    
                unintended, this can have an effect on the industrial production    
                outlook. Note that this information is much more useful to market    
                economists than it is to other market participants.</p>   
              <p align="justify"><b>Construction Spending</b></p> 
              <p align="justify"> &nbsp;&nbsp;&nbsp;&nbsp; Importance (A-F): This release merits a D. <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Source: The Census Bureau of the Department of Commerce. <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Release Time: 10:00 ET on the first business day of the month    
                (data for two months prior).<br>   
                The construction spending report is broken down between residential,    
                non-residential, and public expenditures on new construction.    
                The monthly changes are both volatile and subject to huge revisions,    
                so this report rarely has any market impact. Only trends extending    
                over three months or more can be viewed as significant. <br>   
                The spending figures are in both nominal and real (inflation adjusted)    
                dollars. The real figures for residential and nonresidential spending    
                are used by economists to forecast the investment component of    
                quarterly GDP. The annualized percent changes between the quarterly    
                averages of these two components match up well with residential    
                investment and commercial structure changes in the GDP accounts.    
              </p>
              <p align="justify"><b>Consumer Confidence</b></p> 
              <p align="justify">Conference Board Consumer Confidence<br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Importance (A-F): This release merits a B-. <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Source: The Conference Board. <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Release Time: 10:00 ET on the last Tuesday of the month (data    
                for current month). <br>   
                The Conference Board conducts a monthly survey of 5000 households    
                to ascertain the level of consumer confidence. The report can    
                occasionally be helpful in predicting sudden shifts in consumption    
                patterns, though most small changes in the index are just noise.    
                Only index changes of at least five points should be considered    
                significant. The index consists of two subindexes consumers' appraisal    
                of current conditions and their expectations for the future. Expectations    
                make up 60% of the total index, with current conditions accounting    
                for the other 40%. The expectations index is typically seen as    
                having better leading indicator qualities than the current conditions    
                index. </p>
              <p align="justify"><b>University of Michigan Consumer Sentiment Index</b></p> 
              <p align="justify"> &nbsp;&nbsp;&nbsp;&nbsp; Importance (A-F): This release merits a B-.    
                <br>
              &nbsp;&nbsp;&nbsp;&nbsp; Source: The University of Michigan. <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Release Time: Preliminary: 10:00 ET on the second Friday of the    
                month (data for current month); Final: 10:00 ET on the fourth    
                Friday of the month (data for current month).<br>   
                The Michigan index is almost identical to the Conference Board    
                index, though there are two monthly releases, a preliminary and    
                final reading. Like the Conference Board index, it has two subindexes    
                - expectations and current conditions. The expectations index    
                is a component of the Conference   
                Board's Leading Indicators index. </p>   
              <p align="justify"><b>Consumer Credit</b></p>
              <p align="justify"> &nbsp;&nbsp;&nbsp;&nbsp; Importance (A-F): This release merits a D-.    
                <br>
              &nbsp;&nbsp;&nbsp;&nbsp; Source: Federal Reserve. <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Release Time: 15:00 ET on the fifth business day of the month    
                (data for two months prior).<br>   
                This monthly measure of consumer debt is volatile and subject    
                to massive revisions. It is also released well after every other    
                consumer spending indicator, including weekly chain store sales,    
                auto sales, consumer confidence, retail sales, and personal consumption.    
                For these reasons, the market almost never reacts to the consumer    
                credit report. <br>   
                Consumer credit is broken down into three categories: auto, revolving    
                (ie, credit card), and other. Since we already have indications    
                on total consumer spending well before this release, there is    
                little to be gained from learning what portion of spending was    
                financed through acquisition of debt.<br>   
                Periods of strong spending can be accompanied by relatively weak    
                credit growth and vice versa, so this measure fails even as a    
                coincident or lagging indicator.</p>   
              <p align="justify"><b>CPI: Consumer Price Index</b></p> 
              <p align="justify"> &nbsp;&nbsp;&nbsp;&nbsp; Importance (A-F): This release merits a B+.    
                <br>
              &nbsp;&nbsp;&nbsp;&nbsp; Source: Bureau of Labor statistics, U.S. Department of Labor.    
                <br>
              &nbsp;&nbsp;&nbsp;&nbsp; Release Time: 8:30 ET, about the 13th of each month for the prior    
                month. <br>
                The Consumer Price Index is a measure of the price level of a    
                fixed market basket of goods and services purchased by consumers.    
                CPI is the most widely cited inflation indicator, and it is used    
                to calculate cost of living adjustments for government programs    
                and it is the basis of COLAs for many   
                private labor agreements as well. It has been criticized for overstating    
                inflation, because it does not adjust for substitution effects    
                and because the fixed basket does not reflect price changes in    
                new technology goods which are often declining in price. Despite    
                these criticisms, it remains the   
                benchmark inflation index. <br>   
                CPI can be greatly influenced in any given month by a movement    
                in volatile food and energy prices. Therefore, it is important    
                to look at CPI excluding food and energy, commonly called the    
                &quot;core rate&quot; of inflation. Within the core rate, some    
                of the more volatile and closely watched components are   
                apparel, tobacco, airfares, and new cars. In addition to tracking    
                the month/month changes in core CPI, the year/year change in core    
                CPI is seen by most economists as the best measure of the underlying    
                inflation rate.</p>   
              <p align="justify"><b>
                Durable Goods Orders</b></p> 
              <p align="justify"> &nbsp;&nbsp;&nbsp;&nbsp; Importance (A-F): This release merits a B. <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Source: The Census Bureau of the Department of Commerce. <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Release Time: 8:30 ET around the 26th of the month (data for month    
                prior). <br>
                The durable orders release measures the dollar volume of orders,    
                shipments, and unfilled orders of durable goods (defined as goods    
                whose intended lifespan is three years or more). Orders are considered    
                a leading indicator of manufacturing activity, and the market    
                often moves on this report despite the volatility and large revisions    
                that make it a less than perfect indicator. These problems can    
                be minimized by looking at the breakdown of orders. The total    
                number is often skewed by huge increases in aircraft and defense    
                orders. An increase based solely on strength in one sector tends    
                to be discounted, while the market is more impressed with broadbased    
                increases in orders. <br>   
                Also notable in this report is the narrow category of nondefense    
                capital goods. These goods mirror the GDP category producers'    
                durable equipment (PDE) -- the largest component of business investment.    
                Shipments of nondefense capital goods are a good proxy for PDE    
                in the current quarter,   
                while nondefense capital goods orders provide an indication of    
                PDE growth in the quarters ahead. </p>   
              <p align="justify"><b>Employment Cost Index</b></p> 
              <p align="justify"> &nbsp;&nbsp;&nbsp;&nbsp; Importance (A-F): This release merits a B+.    
                <br>
              &nbsp;&nbsp;&nbsp;&nbsp; Source: U.S. Department of Labor, Bureau of Labor Statistics <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Release Time: 8:30 ET, near the end of the first month of the    
                quarter for the prior quarter. <br>   
                Since the employment cost index was mentioned by Fed Chairman    
                Greenspan in July 1996, it has risen into the upper echelon of    
                economic reports in the eyes of the bond market. Its lagging nature    
                still leaves it as a less timely indicator of employment cost    
                trends than the monthly hourly earnings data in the employment    
                report. But the ECI does add something to this picture: an adjustment    
                for shifting employment between industries, and a look at benefit    
                costs. These additions are interesting, but typically do not alter    
                the view of the employment cost picture which was left by hourly    
                earnings.<br>
                ECI will be much less closely watched during periods when wage    
                inflation is not a serious market concern. <br>   
                The market focusses on the quarter/quarter and year/year changes    
                in each of three categories: total employment costs, wages and    
                salaries, and benefit costs. The figures are sometimes skewed    
                by large year-end bonuses in the financial industry; analysts    
                often exclude the sales commission   
                component of wages and salaries to adjust for this factor.</p>   
              <p align="justify"><b>The Employment Report</b></p> 
              <p align="justify"> &nbsp;&nbsp;&nbsp;&nbsp; Importance (A-F): This release merits an A.    
                <br>
              &nbsp;&nbsp;&nbsp;&nbsp; Source: Bureau of Labor Statistics, U.S. Department of Labor.    
                <br>
              &nbsp;&nbsp;&nbsp;&nbsp; Release Time: First Friday of the month at 8:30 ET for the prior    
                month <br>
                The employment report is actually two separate reports which are    
                the results of two separate surveys. The household survey is a    
                survey of roughly 60,000 households. This survey produces the    
                unemployment rate. The establishment survey is a survey of 375,000    
                businesses. This survey produces the nonfarm payrolls, average    
                workweek, and average hourly earnings figures, to name a   
                few. Both surveys cover the payroll period which includes the    
                12th of each month. The reports both measure employment levels,    
                just from different angles. Due to the vastly different size of    
                the survey samples (the establishment survey not only surveys    
                more businesses, but each   
                business employs many individuals), the measures of employment    
                may differ markedly from month to month. The household survey    
                is used only for the unemployment measure - the market focusses    
                primarily on the more comprehensive establishment survey. Together,    
                these two surveys make up   
                the employment report, the most timely and broad indicator of    
                economic activity released each month. <br>   
                Total payrolls are broken down into sectors such as manufacturing,    
                mining, construction, services, and government. The markets follows    
                these components closely as indicators of the trends in sectors    
                of the economy; the manufacturing sector is watched the most closely    
                as it often leads the   
                business cycle. The data also include breakdowns of hours worked,    
                overtime, and average hourly earnings. <br>   
                The average workweek (also known as hours worked) is important    
                for two reasons. First, it is a critical determinant of such monthly    
                indicators as industrial production and personal income. Second,    
                it is considered a useful indicator of labor market conditions:    
                a rising workweek early in the   
                business cycle may be the first indication that employers are    
                preparing to boost their payrolls, while late in the cycle a rising    
                workweek may indicate that employers are having difficulty finding    
                qualified applicants for open positions. Average earnings are    
                closely followed as an indicator of potential   
                inflation. Like the price of any good or service, the price of    
                labor reacts to an overly accommodative monetary policy. If the    
                price of labor is rising sharply, it may be an indication that    
                too much money is chasing too few goods, or in this case employees.    
              </p>
              <p align="justify"><b>Existing Home Sales</b></p> 
              <p align="justify"> &nbsp;&nbsp;&nbsp;&nbsp; Importance (A-F): This release merits a C. <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Source: The National Association of Realtors. <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Release Time: 10:00 ET around the 25th of the month (data for    
                month prior). <br>   
                The name speaks for itself - this report provides a measure of    
                the level of sales of existing home sales. The report is considered    
                a decent indicator of activity in the housing sector. Housing    
                starts precede this report each month, but starts are a supply    
                rather than demand-side indicator. Existing   
                home sales precede the other key demand-side indicator of housing    
                - new home sales – thus boosting the visibility of this report.    
                Sales are highly dependent on mortgage rates, and will tend to    
                react with a few months lag to changes in rates. Sales are also    
                determined by the level of pent-up   
                demand for housing - immediately after a recession, sales are    
                typically quite strong due to the demand which accumulated through    
                the recession. <br>   
                The survey sample for existing home sales is larger than that    
                of new home sales, making it somewhat less susceptible to large    
                revisions. Both reports can see huge month-to-month swings in    
                winter, when bad weather can significantly affect sales. <br>   
                Aside from total sales, two other indicators are worth watching    
                in this report -- the inventory of homes for sale and the median    
                price. The inventory of homes for sale at the current sales pace    
                is the inventory/sales ratio of the housing sector. For example,    
                a 5.0 figure for inventory/sales indicates   
                that the supply of homes for sale would be depleted within five    
                months at the current sales pace.<br>   
                The lower this figure goes, the greater the need for new housing    
                starts. The year/year change in the median price provides a good    
                indication of inflation in home prices.</p>   
              <p align="justify"><b>Factory Orders</b></p> 
              <p align="justify"> &nbsp;&nbsp;&nbsp;&nbsp; Importance (A-F): This release merits a D+.    
                <br>
              &nbsp;&nbsp;&nbsp;&nbsp; Source: The Census Bureau of the Department of Commerce. <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Release Time: 10:00 ET around the first business day of the month    
                (data for two months prior). <br>   
                Factory orders consist of the earlier announced durable goods    
                report plus non-durable goods orders. The report is very predictable    
                with nondurables the only new component. Nondurables consist of    
                such items as food and tobacco products which grow at a fairly    
                consistent monthly rate, so that market forecasts for this report    
                are far more accurate than for the durable orders report. In addition    
                to seeing nondurables for the first time, the market also watches    
                for revisions to the durable orders data, which can be significant.    
                At present, durable goods orders sum to about 54% of total   
                orders. <br>
                The final piece of new information in this report is factory inventories    
                -- the first glimpse at the inventory picture each month (wholesales    
                inventories are typically released a week later, with retail inventories    
                released a few days after wholesale inventories). Though the inventory    
                figure is not a market-mover, economists use this number to help    
                forecast inventories in the quarterly GDP report. </p>   
              <p align="justify"><b>GDP: Gross Domestic Product</b></p> 
              <p align="justify"> &nbsp;&nbsp;&nbsp;&nbsp; With both Importance (A-F): This release merits    
                a B. <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Source: Bureau of Economic Analysis, U.S. Department of Commerce.    
                <br>
              &nbsp;&nbsp;&nbsp;&nbsp; Release Time: Third or fourth week of the month at 8:30 ET for    
                the prior quarter, with subsequent revisions released in the second    
                and third months of the quarter. Gross Domestic Product (GDP)    
                is the the broadest measure of economic activity. Annualized quarterly    
                percent changes in GDP reflect the growth rate of total economic    
                output. The figures can be quite volatile from quarter to quarter.    
                Inventory and net export swings in particular can produce   
                significant volatility in GDP. The final sales figure, which excludes    
                inventories, can sometimes be helpful in identifying underlying    
                growth trends as inventories represent unsold goods, and a large    
                inventory increase will boost GDP but might be indicative of weakness    
                rather than strength. The broad components of GDP are: consumption,    
                investment, net exports, government purchases, and inventories.    
                Consumption is by far the largest component, totalling roughly    
                2/3rds of GDP. <br>   
                In addition to the GDP figures, there are GDP deflators, which    
                measure the change in prices in total GDP and for each component.    
                Though the consumer price index is a more closely watched inflation    
                indicator, the GDP deflator is another key inflation measure.    
                Unlike CPI, it has the advantage of not being a fixed basket of    
                goods and services, so that changes in consumption patterns or    
                the introduction of new goods and services will be reflected in    
                the deflator. GDP and the deflator, the market tends to focus    
                on the quarter/quarter change. Year/year changes are also cited    
                frequently, though they do not provide the most timely indications    
                of economic activity or inflation. The bond market often reacts    
                to GDP, though the price moves are typically small, as much of    
                the GDP data is easily predicted using monthly economic releases    
                such as personal consumption, durable goods shipments, construction    
                spending, international trade, and inventories. <br>   
                Quarterly GDP reports are broken down into three announcements:    
                advance, preliminary, and final. After the final revision, GDP    
                is not revised again until the annual benchmark revisions each    
                July.<br>
                These revisions can be quite large and usually affect the past    
                five years of data.</p>   
              <p align="justify"><b>Housing Starts and Building Permits</b></p> 
              <p align="justify"> &nbsp;&nbsp;&nbsp;&nbsp; Importance (A-F): This release merits a B-.    
                <br>
              &nbsp;&nbsp;&nbsp;&nbsp; Source: The Census Bureau of the Department of Commerce <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Release Time: 8:30 ET around the 16th of the month (data for one    
                month prior). <br>   
                Housing Starts are a measure of the number of residential units    
                on which construction is begun each month. A start in construction    
                is defined as the beginning of excavation of the foundation for    
                the building and is comprised primarily of residential housing.    
                Building permits are permits taken out in   
                order to allow excavation. An increase in building permits and    
                starts usually occurs a few months after a reduction in mortgage    
                rates. Permits lead starts, but permits are not required in all    
                regions of the country, and the level of permits therefore tends    
                to be less than the level of starts over time. <br>   
                The monthly national report is broken down by region: Northeast,    
                Midwest, South, and West.Briefing recommends analyzing the regional    
                data because they are subject to a high degree of volatility.    
                The high volatility can be attributed to weather changes and/or    
                natural disasters. For example, an unexpectedly high level of    
                rain in South could delay housing starts for the region.</p>   
              <p align="justify"><b>Industrial Production</b></p> 
              <p align="justify"> &nbsp;&nbsp;&nbsp;&nbsp; Importance (A-F): This release merits a B-.    
                <br>
              &nbsp;&nbsp;&nbsp;&nbsp; Source: Federal Reserve. <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Release Time: 9:15 ET around the 15th of the month (data for month    
                prior). <br>
                The index of Industrial Production is a fixed-weight measure of    
                the physical output of the nation's factories, mines, and utilities.    
                Manufacturing production, the largest component of the total,    
                can be accurately predicted using total manufacturing hours worked    
                from the employment report. One of   
                the bigger wildcards in this report is utility production, which    
                can be quite volatile due to swings in the weather. Severe hot    
                or cold spells can boost production as increased heating/cooling    
                needs drive utility production up. <br>   
                In addition to production, this monthly report also provides a    
                measure of capacity utilization. Though the rate of capacity utilization    
                is seen as a critical gauge of the slack available in the economy,    
                the market does not completely trust this measure. Capacity is    
                very difficult to measure, and the Fed essentially assumes that    
                growth in capacity in any given year follows a straight line.    
                One can therefore predict the capacity utilization rate quite    
                accurately based on the assumption for production growth. The    
                85% mark is seen as a key barrier over which inflationary pressures    
                are generated, but given revisions to these data and the difficulties    
                with capacity measurement, the 85% mark should be viewed cautiously.    
                It would be appropriate to look for corroborating inflation indications    
                from commodity prices and vendor deliveries.</p>   
              <p align="justify"><b>
                Regional Manufacturing Surveys</b></p> 
              <p align="justify"> &nbsp;&nbsp;&nbsp;&nbsp; Importance (A-C): The Philadelphia Fed Index    
                and Chicago PMI merit a B; the rest merit a D. <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Source: Varies - Purchasing managers' organizations and Federal    
                Reserve banks. <br>   
              &nbsp;&nbsp;&nbsp;&nbsp; Release Time: Varies. Philadelphia Fed at 10 ET on the third Thursday    
                of the month for the current month. Chicago PMI on the last business    
                day of the month for the current month.<br>   
                There are many regional manufacturing surveys, and they tend to    
                be ranked in order of timeliness and the importance of the region.    
                The Philadelphia Fed's survey is first each month, actually coming    
                out during the third week of the month for which it is reporting.    
                Several smaller surveys are then   
                released before the Chicago purchasing managers' report on the    
                last day of each month. A few,such as the Atlanta and Richmond    
                Fed surveys, are released after the NAPM and are of little value.<br>   
                The purchasing managers' reports are measured like the national    
                NAPM - 50% marks the breakeven line between an expanding and contracting    
                manufacturing sector. For the Philadelphia and Atlanta Fed indexes,    
                0 is the breakeven mark. </p>   
              <p align="justify">These surveys can be of some help in forecasting 
                the national NAPM - particularly the Philadelphia and Chicago 
                surveys which are more closely watched due to their timeliness 
                and the fact that these regions represent a reasonable cross section 
                of national manufacturing activities.</p></td>
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