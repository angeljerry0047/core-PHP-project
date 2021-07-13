<%
'*************************************************************************
'******* XcASPMailLib.asp Copyright 2003 XCENT    www.xcent.com **********
'*************************************************************************
'* Email Module for CDOSYS Component from Microsoft 
'*
gsSYS_EmailLib = "CDOSYS"
gsSYS_EmailLibVer = "1.0"

Sub SendEmailMessage( psTo, psFrom, psSubject, psBody)
    Dim objMail, objConf, objFlds
    Dim iTemp
    Dim sToAddress
    Dim sToName
    Dim sFromAddress
    Dim sFromName
    If Len(Trim("" & psTo)) > 0 Then
        sToAddress = GetRawEmailAddress(psTo)
        sToName = GetDisplayEmailName(psTo)
        sFromAddress = GetRawEmailAddress(psFrom)
        sFromName = GetDisplayEmailName(psFrom)
        Err.Clear
        On Error Resume Next
        Set objMail = Server.CreateObject("CDO.Message")
        If Err.Number <> 0 Then
            Response.Write "<BR><STRONG>Error:</STRONG>Could not create CDOSYS.Message object<BR>"
        Else
            Set objConf = Server.CreateObject("CDO.Configuration")
            If Err.Number <> 0 Then 
                Response.Write "<br><Strong>Error:</strong>Could not create CDOSYS.Configuration object<br>"
            Else
                Set objFlds = objConf.Fields
                objFlds.Item("http://schemas.microsoft.com/cdo/configuration/smtpserver") = gsMailHost
                objFlds.Item("http://schemas.microsoft.com/cdo/configuration/smtpserverport") = 25 'default port for email
                objFlds.Item("http://schemas.microsoft.com/cdo/configuration/sendusing") = 2 'cdoSendUsingPort
                objFlds.Update
                
                objMail.Configuration = objConf
                If Len(Trim(sFromName)) > 0 Then
                    objMail.FromName = sFromName
                Else
                    objMail.FromName = sFromAddress
                End If
                objMail.From = sFromAddress
                objMail.To = sToAddress
                objMail.Subject = "" & psSubject
                objMail.TextBody = "" & psBody
                objMail.Send
                If Err.Number <> 0 Then
                    Response.Write "<BR><STRONG>SMTPsvg Error:</STRONG>" & objMail.Response & "<BR>"
                End If
            End If
        End If
        Set objFlds = Nothing
        Set objConf = Nothing
        Set objMail = Nothing
        
        On Error Goto 0
    End If
End Sub

Function GetDisplayEmailName(pvAddress)
    Dim sAddress
    Dim lAt
    sAddress = Trim("" & pvAddress)
    If Len(sAddress) > 0 Then
        lAt = Instr(sAddress, " (")
        If lAt > 0 Then
            sAddress = Right(sAddress, Len(sAddress) - lAt)
            sAddress = Replace(sAddress, "(", "")
            sAddress = Replace(sAddress, ")", "")
            GetDisplayEmailName = Trim(sAddress)
        Else
            GetDisplayEmailName = ""
        End If
    Else
        GetDisplayEmailName = ""
    End If
End Function

Function GetRawEmailAddress(pvAddress)
    Dim sAddress
    Dim lAt
    sAddress = Trim("" & pvAddress)
    If Len(sAddress) > 0 Then
        lAt = Instr(sAddress, " (")
        If lAt > 0 Then
            sAddress = Trim(Left(sAddress, lAt))
            GetRawEmailAddress = sAddress
        Else
            GetRawEmailAddress = sAddress
        End If
    Else
        GetRawEmailAddress = ""
    End If
End Function
%>