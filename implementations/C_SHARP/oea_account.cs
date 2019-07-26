  Public Class Balance
        Public Property symbol As String
        Public Property available As String
        Public Property inorder As String
    End Class

    Public Class Example
        Public Property makerfee As Integer
        Public Property takerfee As Integer
        Public Property trade_suspended As Boolean
        Public Property withdrawal_suspended As Boolean
        Public Property deposit_suspended As Boolean
        Public Property withdrawal_limit As String
        Public Property withdrawal_current As String
        Public Property balances As Balance()
        Public Property error As Boolean
        Public Property errormsg As String
    End Class
