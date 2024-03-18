# # PrequalificationReportAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the account | [optional]
**number** | **string** | The account number from the institution (all digits except the last four are obfuscated) | [optional]
**owner_name** | **string** | The name of the account owner. If no owner information is available, this field won&#39;t appear in the report. | [optional]
**owner_address** | **string** | The mailing address of the account owner. If no owner information is available, this field won&#39;t appear in the report. | [optional]
**name** | **string** | The account name from the institution | [optional]
**type** | **string** | One of the values from account types | [optional]
**aggregation_status_code** | **int** | The status of the most recent aggregation attempt | [optional]
**balance** | **float** | The cleared balance of the account as-of &#x60;balanceDate&#x60; | [optional]
**balance_date** | **int** | A timestamp of the balance | [optional]
**available_balance** | **float** | Available balance | [optional]
**average_monthly_balance** | **float** | The average monthly balance of the account | [optional]
**tot_number_insufficient_funds_fee_debit_tx_account** | **int** | The count for the total number of insufficient funds transactions, based on the &#x60;fromDate&#x60; of the report | [optional]
**tot_number_insufficient_funds_fee_debit_tx_over6_months_account** | **int** | The total number of  insufficient funds fees for the account over six months | [optional]
**tot_number_days_since_most_recent_insufficient_funds_fee_debit_tx_account** | **int** | The total number of days since the most recent insufficient funds fee for the account | [optional]
**transactions** | [**\OpenAPI\Client\Model\ReportTransaction[]**](ReportTransaction.md) | a list of transaction records | [optional]
**asset** | [**\OpenAPI\Client\Model\PrequalificationReportAssetSummary**](PrequalificationReportAssetSummary.md) |  | [optional]
**details** | [**\OpenAPI\Client\Model\AccountDetails**](AccountDetails.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
