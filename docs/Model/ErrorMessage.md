# # ErrorMessage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **object** | An error code (can be returned as a number or a string). Useful links: [Common API Status Codes](https://developer.mastercard.com/open-banking-us/documentation/codes-and-formats/#common-api-status-codes), [Aggregation Status Codes](https://developer.mastercard.com/open-banking-us/documentation/products/manage/account-aggregation/#aggregation-status-codes). |
**status** | **string** | A status code | [optional]
**title** | **string** | A title for the error | [optional]
**level** | **string** | An error level | [optional]
**message** | **string** | An error message | [optional]
**user_message** | **string** | Some more details about the error | [optional]
**asset_id** | **string** | An asset ID. Generated by Connect or by using the Store Customer Pay Statement API. | [optional]
**account_id** | **string** | An account ID | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
