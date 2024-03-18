# # ReportTransactionBase2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**normalized_payee** | **string** | A normalized payee, derived from the transaction&#39;s &#x60;description&#x60; and &#x60;memo&#x60; fields | [optional]
**institution_transaction_id** | **string** | The unique identifier given by the FI for each transaction | [optional]
**category** | **string** | One of the values from Categories (assigned based on the payee name) | [optional]
**type** | **string** | One of the values from transaction types | [optional]
**security_type** | **string** | The type of investment security (VOA only) | [optional]
**symbol** | **string** | Investment symbol (VOA only) | [optional]
**commission** | **float** | A commission amount | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
