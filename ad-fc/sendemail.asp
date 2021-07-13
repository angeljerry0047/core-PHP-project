<!--METADATA TYPE="typelib" UUID="CD000000-8B95-11D1-82DB-00C04FB1625D" NAME="CDO for Windows 2000 Library" -->
<!--METADATA TYPE="typelib" UUID="00000205-0000-0010-8000-00AA006D2EA4" NAME="ADODB Type Library" -->

<%
Dim iMsg
Set iMsg = Server.CreateObject("CDO.Message")
Dim iBp
Dim Flds

Dim iConf
Set iConf = CreateObject("CDO.Configuration")
Set Flds = iConf.Fields
Flds(cdoSendUsingMethod)  = cdoSendUsingPort
'Flds(cdoSMTPServer)       = "mail.ad-fc.net"
Flds(cdoSMTPServer)       = "127.0.0.1"
Flds(cdoSMTPServerPort)   = 25
Flds(cdoSMTPAuthenticate)     = cdoAnonymous ' 0
Flds.Update

With iMsg
  Set .Configuration = iConf
    .To          = Request("to")
    .From        = Request("from")
    .Sender      = Request("from")
    .Subject     = Request("subject")
    .TextBody    = Request("body")
    .Send
End With

' Clean up variables.
Set iMsg = Nothing
Set iConf = Nothing
Set Flds = Nothing

Response.Write "Email has been sent"
%>
