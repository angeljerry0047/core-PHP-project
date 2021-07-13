<html>
<head>
<link rel="stylesheet" href="http://www.ad-financial.com/css.css" type="text/css">
</head>
<body bgcolor=#eeeeee topmargin=0 leftmargin=0>  

<P class=MsoNormal style="MARGIN: 0cm 0cm 0pt"><SPAN 
style="LEFT: 2px; WIDTH: 150px; POSITION: absolute; TOP: 1px; HEIGHT: 42px">
<TABLE cellSpacing=0 cellPadding=0>
  <TBODY>
  <TR>
    <TD 
    style="BORDER-RIGHT: black 0.75pt solid; BORDER-TOP: black 0.75pt solid; BACKGROUND: #bababa; VERTICAL-ALIGN: top; BORDER-LEFT: black 0.75pt solid; BORDER-BOTTOM: black 0.75pt solid" 
    width=150 bgColor=#bababa height=42><SPAN 
      style="Z-INDEX: 2; POSITION: absolute; mso-ignore: vglayout">
      <TABLE cellSpacing=0 cellPadding=0 width="100%">
        <TBODY>
        <TR>
          <TD 
          style="BORDER-RIGHT: #ffffff; BORDER-TOP: #ffffff; BORDER-LEFT: #ffffff; BORDER-BOTTOM: #ffffff; BACKGROUND-COLOR: transparent">
            <DIV class=shape 
            style="PADDING-RIGHT: 7.2pt; PADDING-LEFT: 7.2pt; PADDING-BOTTOM: 3.6pt; PADDING-TOP: 3.6pt" 
            v:shape="_x0000_s1028">
            <P class=MsoNormal style="MARGIN: 0cm 0cm 0pt"><FONT 
            face="Times New Roman"><SPAN style="COLOR: white"><FONT size=2><SPAN 
            style="mso-spacerun: yes">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            </SPAN><SPAN 
            style="mso-spacerun: yes">&nbsp;&nbsp;</SPAN></FONT></SPAN><B><SPAN 
            style="FONT-SIZE: 14pt; COLOR: navy">What's 
            Hot<o:p></o:p></SPAN></B></FONT></P></DIV></TD></TR></TBODY></TABLE></SPAN><FONT 
      face="Times New Roman">&nbsp;</FONT></TD></TR></TBODY></TABLE></SPAN>
</P>

<br><br><br>

<?php

  $fb = @fread(@fopen('hot.txt', "r"), 102400);
  echo $fb;

?>
</body>
</html>