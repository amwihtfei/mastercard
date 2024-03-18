# # ObbAnalyticsReport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_results** | [**\OpenAPI\Client\Model\BalanceAnalyticsAccountResult[]**](BalanceAnalyticsAccountResult.md) | Balance results per account | [optional]
**business_id** | **int** | Business ID | [optional]
**business_summary** | [**\OpenAPI\Client\Model\BalanceAnalyticsBusinessSummary**](BalanceAnalyticsBusinessSummary.md) |  | [optional]
**customer_id** | **int** | A customer ID represented as a number. See Add Customer API for how to create a customer ID. |
**report_header** | [**\OpenAPI\Client\Model\ObbReportHeader**](ObbReportHeader.md) | Customer and report metadata |
**requester_name** | **string** | Name of requester | [optional]
**title** | **string** | Title of the report |
**total_revenue** | **float** | The total revenue | [optional]
**account_ids** | **int[]** | List of account IDs included in the report | [optional]
**analytics** | [**\OpenAPI\Client\Model\PaymentHistoryAnalytics**](PaymentHistoryAnalytics.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
