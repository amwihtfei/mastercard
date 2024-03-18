# # VOIReportAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the account | [optional]
**number** | **string** | The account number from the institution (all digits except the last four are obfuscated) | [optional]
**owner_name** | **string** | The name(s) of the account owner(s). This field is optional. If no owner information is available, this field will not appear in the report. | [optional]
**owner_address** | **string** | The mailing address of the account owner(s). This field is optional. If no owner information is available, this field will not appear in the report. | [optional]
**name** | **string** | The account name from the institution | [optional]
**type** | **string** | One of the values from account types | [optional]
**aggregation_status_code** | **int** | The status of the most recent aggregation attempt | [optional]
**income_streams** | [**\OpenAPI\Client\Model\VOIReportIncomeStream[]**](VOIReportIncomeStream.md) | A list of income stream records | [optional]
**balance** | **float** | The cleared balance of the account as-of &#x60;balanceDate&#x60; | [optional]
**average_monthly_balance** | **float** | The average monthly balance of this account | [optional]
**transactions** | [**\OpenAPI\Client\Model\ReportTransaction[]**](ReportTransaction.md) | a list of transaction records | [optional]
**available_balance** | **float** | The available balance for the account | [optional]
**current_balance** | **float** | Current balance of the account | [optional]
**beginning_balance** | **float** | Beginning balance of account per the time period in the report | [optional]
**misc_deposits** | [**\OpenAPI\Client\Model\ReportTransaction[]**](ReportTransaction.md) | A list of miscellaneous deposits | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
