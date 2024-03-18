# # ReportTransactionBase1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | A transaction ID |
**amount** | **float** | The total amount of the transaction. Transactions for deposits are positive values, withdrawals and debits are negative values. | [optional]
**posted_date** | **int** | A timestamp showing when the transaction was posted or cleared by the institution |
**description** | **string** | The description of the transaction, as provided by the institution (often known as &#x60;payee&#x60;). In the event that this field is left blank by the institution, Finicity will pass a value of \&quot;No description provided by institution\&quot;. All other values are provided by the institution. |
**memo** | **string** | The memo field of the transaction, as provided by the institution. The institution must provide either a description, a memo, or both. It is recommended to concatenate the two fields into a single value. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
