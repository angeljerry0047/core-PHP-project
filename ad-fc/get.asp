    <%
    Set xml = CreateObject("Microsoft.XMLHTTP") 
    sRemoteURL = "http://www.manfutures.com/resources/margins.asp"
    xml.Open "GET", sRemoteURL, False 
    xml.Send 
    sResponse = xml.responseText 

    iPosition  = instr(sResponse, "<table border=""1"" bordercolor=""#4B4B4B""")
    sResponse  = mid  (sResponse, iPosition, Len(sResponse))
    iPosition2 = instr(sResponse, "</table>")
    sResponse  = mid  (sResponse, 0, iPosition2+8)

    Response.Write sResponse
    %>