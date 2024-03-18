# # ReportInstitutionAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the account |
**owner_name** | **string** | The name(s) of the account owner(s). This field is optional. If no owner information is available, this field will not appear in the report. | [optional]
**owner_address** | **string** | The mailing address of the account owner(s). This field is optional. If no owner information is available, this field will not appear in the report. | [optional]
**name** | **string** | The account name from the institution |
**number** | **string** | The account number from the institution (all digits except the last four are obfuscated) |
**type** | **string** | One of the values from account types |
**aggregation_status_code** | **int** | The status of the most recent aggregation attempt |
**current_balance** | **float** | Current balance of the account | [optional]
**available_balance** | **float** | The available balance for the account | [optional]
**balance_date** | **int** | A timestamp showing when the balance was captured | [optional]
**transactions** | [**\OpenAPI\Client\Model\ReportTransactionNewTxBased[]**](ReportTransactionNewTxBased.md) | a list of transaction records |
**details** | [**\OpenAPI\Client\Model\AccountDetailsTxBased**](AccountDetailsTxBased.md) |  | [optional]
**account_analytics** | [**\OpenAPI\Client\Model\AccountAnalytics**](AccountAnalytics.md) |  | [optional]
**cash_flow_balance** | [**\OpenAPI\Client\Model\CashFlowCashFlowBalance**](CashFlowCashFlowBalance.md) |  | [optional]
**cash_flow_credit** | [**\OpenAPI\Client\Model\CashFlowCashFlowCredit**](CashFlowCashFlowCredit.md) |  | [optional]
**cash_flow_debit** | [**\OpenAPI\Client\Model\CashFlowCashFlowDebit**](CashFlowCashFlowDebit.md) |  | [optional]
**cash_flow_characteristic** | [**\OpenAPI\Client\Model\CashFlowCashFlowCharacteristic**](CashFlowCashFlowCharacteristic.md) |  | [optional]
**balance** | **float** | The cleared balance of the account as-of &#x60;balanceDate&#x60; | [optional]
**average_monthly_balance** | **float** | The average monthly balance of this account | [optional]
**tot_number_insufficient_funds_fee_debit_tx_account** | **int** | The count for the total number of insufficient funds transactions, based on the &#x60;fromDate&#x60; of the report. | [optional]
**tot_number_insufficient_funds_fee_debit_tx_over6_months_account** | **int** | The total number of  insufficient funds fees for the account over six months | [optional]
**tot_number_days_since_most_recent_insufficient_funds_fee_debit_tx_account** | **int** | The number of days since the most recent insufficient funds transaction, based on the &#x60;fromDate&#x60; of the report. | [optional]
**asset** | [**\OpenAPI\Client\Model\PrequalificationReportAssetSummary**](PrequalificationReportAssetSummary.md) |  | [optional]
**tot_number_insufficient_funds_fee_debit_tx_over2_months_account** | **int** | The count for the total number of insufficient funds transactions for the last two months, based on the &#x60;fromDate&#x60; of the report. | [optional]
**position** | [**\OpenAPI\Client\Model\ReportAccountPosition**](ReportAccountPosition.md) |  | [optional]
**income_streams** | [**\OpenAPI\Client\Model\VOIETXVerifyReportIncomeStream[]**](VOIETXVerifyReportIncomeStream.md) | A list of income stream records | [optional]
**beginning_balance** | **float** | Beginning balance of account per the time period in the report | [optional]
**misc_deposits** | [**\OpenAPI\Client\Model\ReportTransaction[]**](ReportTransaction.md) | A list of miscellaneous deposits | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
