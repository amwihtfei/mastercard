# # AnalyticsReportsAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the account |
**owner_name** | **string** | The name(s) of the account owner(s), retrieved from the institution. | [optional]
**owner_address** | **string** | The mailing address of the account owner, retrieved from the institution. | [optional]
**name** | **string** | The account name from the institution |
**number** | **string** | The account number from the institution (obfuscated) |
**type** | **string** | One of the values from account types |
**aggregation_status_code** | **int** | The status of the most recent aggregation attempt | [optional]
**current_balance** | **float** | The cleared balance of the account as-of &#x60;balanceDate&#x60; | [optional]
**available_balance** | **float** | Available balance | [optional]
**balance_date** | **int** | A timestamp showing when the &#x60;balance&#x60; was captured | [optional]
**transactions** | [**\OpenAPI\Client\Model\ReportTransaction[]**](ReportTransaction.md) | a list of transaction records |
**details** | [**\OpenAPI\Client\Model\AccountDetails**](AccountDetails.md) |  | [optional]
**account_analytics** | [**\OpenAPI\Client\Model\AccountAnalytics**](AccountAnalytics.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
