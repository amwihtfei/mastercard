# # VOAReportAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the account | [optional]
**number** | **string** | The account number from the institution (all digits except the last four are obfuscated) | [optional]
**owner_name** | **string** | The name(s) of the account owner(s). This field is optional. If no owner information is available, this field will not appear in the report. | [optional]
**owner_address** | **string** | The mailing address of the account owner(s). This field is optional. If no owner information is available, this field will not appear in the report. | [optional]
**name** | **string** | The account name from the institution | [optional]
**type** | **string** | One of the values from account types | [optional]
**available_balance** | **float** | The available balance for the account | [optional]
**aggregation_status_code** | **int** | The status of the most recent aggregation attempt | [optional]
**balance** | **float** | The cleared balance of the account as-of balanceDate | [optional]
**balance_date** | **int** | A timestamp showing when the balance was captured | [optional]
**average_monthly_balance** | **float** | The average monthly balance of this account | [optional]
**tot_number_insufficient_funds_fee_debit_tx_account** | **int** | The count for the total number of insufficient funds transactions, based on the &#x60;fromDate&#x60; of the report. | [optional]
**tot_number_insufficient_funds_fee_debit_tx_over2_months_account** | **int** | The count for the total number of insufficient funds transactions for the last two months, based on the &#x60;fromDate&#x60; of the report. | [optional]
**tot_number_days_since_most_recent_insufficient_funds_fee_debit_tx_account** | **int** | The number of days since the most recent insufficient funds transaction, based on the &#x60;fromDate&#x60; of the report. | [optional]
**transactions** | [**\OpenAPI\Client\Model\ReportTransactionNewTxBased[]**](ReportTransactionNewTxBased.md) | a list of transaction records | [optional]
**details** | [**\OpenAPI\Client\Model\AccountDetailsTxBased**](AccountDetailsTxBased.md) |  | [optional]
**position** | [**\OpenAPI\Client\Model\ReportAccountPosition**](ReportAccountPosition.md) |  | [optional]
**asset** | [**\OpenAPI\Client\Model\PrequalificationReportAssetSummary**](PrequalificationReportAssetSummary.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
