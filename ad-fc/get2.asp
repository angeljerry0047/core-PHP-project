<%
//Set xml = CreateObject("Microsoft.XMLHTTP") 
Set xml = CreateObject("Msxml2.XMLHTTP") 
sRemoteURL = "http://charts.futuresource.com/cis/fscom?cont=sp1%21&period=V&varminutes=15&size=150x150&bartype=AREA&bardensity=MEDIUM&headerbackground=(221,221,221)&headerforeground=(102,102,102)&headerdatacolor=(0,1,125)&studyheaderbackground=(221,221,221)&showextendednames=true&random=3156"
xml.Open "GET", sRemoteURL, False 
xml.Send 
sResponse = xml.responseHTML 

Response.BinaryWrite sResponse
%>