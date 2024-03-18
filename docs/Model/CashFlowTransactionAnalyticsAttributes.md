# # CashFlowTransactionAnalyticsAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activity_deposits_credits_for_the_report_time_period** | [**\OpenAPI\Client\Model\CashFlowActivityDepositsCredits[]**](CashFlowActivityDepositsCredits.md) | List of all deposit transactions posted to the account during the report period |
**activity_withdrawals_debits_for_the_report_time_period** | [**\OpenAPI\Client\Model\CashFlowActivityWithdrawalsDebits[]**](CashFlowActivityWithdrawalsDebits.md) | List of all withdrawal transactions posted to the account during the report period |
**average_transaction_value_by_month_for_the_report_time_period** | [**\OpenAPI\Client\Model\ObbDateRangeAndAmount[]**](ObbDateRangeAndAmount.md) | Average value of transactions during periods in the report. Values may be positive or negative |
**historic_weeks_with_zero_transactions** | [**\OpenAPI\Client\Model\CashFlowNumWeeksZeros**](CashFlowNumWeeksZeros.md) |  | [optional]
**last_transaction_date** | [**\OpenAPI\Client\Model\CashFlowTransactionAnalyticsAttributesLastTransactionDateInner[]**](CashFlowTransactionAnalyticsAttributesLastTransactionDateInner.md) | Latest posted transaction(s) to the account. May be more than one if they share the same timestamp | [optional]
**net_cash_flow_by_month_for_the_report_time_period** | [**\OpenAPI\Client\Model\ObbDateRangeAndAmount[]**](ObbDateRangeAndAmount.md) | Net cash flow for each month during the report period | [optional]
**net_cash_flow_for_the_report_time_period** | **float** | Net cash flow during the report period (may be positive or negative) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
