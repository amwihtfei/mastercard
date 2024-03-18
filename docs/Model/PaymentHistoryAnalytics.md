# # PaymentHistoryAnalytics

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Report status | [optional]
**risk_score** | **float** | Calculated risk score | [optional]
**transaction_history** | **int** | Months of transactions | [optional]
**transactions_summary** | [**\OpenAPI\Client\Model\PaymentHistoryTransactionsSummary**](PaymentHistoryTransactionsSummary.md) |  | [optional]
**account_summaries** | [**\OpenAPI\Client\Model\PaymentHistoryAccountSummary[]**](PaymentHistoryAccountSummary.md) | Account-level summary of transactions | [optional]
**customer_summary_by_months** | [**\OpenAPI\Client\Model\PaymentHistoryCustomerMonthlySummary[]**](PaymentHistoryCustomerMonthlySummary.md) | Customer-level summary of transactions per month | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
