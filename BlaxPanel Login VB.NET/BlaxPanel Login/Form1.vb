Imports System.Management

Public Class Form1

    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        Dim client As New System.Net.WebClient
        Dim date_ As String = DateTime.Now.ToString("yyyy/MM/dd")
        Dim _data As String = client.DownloadString("http://localhost/BlaxPanel/handler.php?action=login&username=" + TextBox1.Text + "&password=" + TextBox2.Text + "&hwid=" + GetHWID())
        If _data = "true" Then
            MsgBox("Bienvenido")
        Else
            MsgBox("Datos Incorrectos")
        End If
    End Sub
    Dim cpuInfo As String
    Function GetHWID()
        Dim mc As New ManagementClass("win32_processor")
        Dim moc As ManagementObjectCollection = mc.GetInstances
        For Each mo As ManagementObject In moc
            If cpuInfo = "" Then
                cpuInfo = mo.Properties("processorID").Value.ToString
                Exit For
            End If
        Next
        Return cpuInfo
    End Function
End Class
