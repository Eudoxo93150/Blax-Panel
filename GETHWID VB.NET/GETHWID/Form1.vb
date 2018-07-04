Imports System.Management
Imports InjectionLibrary
Imports JLibrary.PortableExecutable

Public Class Form1

    Private Sub Form1_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
        TextBox1.Text = GetHWID()
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
