# # PaymentHistoryReport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Title of the report |
**customer_id** | **int** | A customer ID represented as a number. See Add Customer API for how to create a customer ID. |
**account_ids** | **int[]** | List of account IDs included in the report | [optional]
**business_id** | **int** | Business ID | [optional]
**requester_name** | **string** | Name of requester | [optional]
**report_header** | [**\OpenAPI\Client\Model\ObbReportHeader**](ObbReportHeader.md) | Customer and report metadata |
**analytics** | [**\OpenAPI\Client\Model\PaymentHistoryAnalytics**](PaymentHistoryAnalytics.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
