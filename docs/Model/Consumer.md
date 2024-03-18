# # Consumer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A consumer ID. See Create Consumer API for how to create a consumer ID. |
**first_name** | **string** | The first name of the account holder |
**last_name** | **string** | The last name of the account holder |
**customer_id** | **int** | A customer ID represented as a number. See Add Customer API for how to create a customer ID. |
**address** | **string** | A street address |
**city** | **string** | City |
**state** | **string** | State |
**zip** | **string** | A ZIP code |
**phone** | **string** | A phone number (max length 15). |
**ssn** | **string** | Last 4 digits of a SSN |
**birthday** | [**\OpenAPI\Client\Model\Birthday**](Birthday.md) |  |
**email** | **string** | An email address |
**created_date** | **int** | A date in Unix epoch time (in seconds). See: [Handling Epoch Dates and Times](https://developer.mastercard.com/open-banking-us/documentation/codes-and-formats/). |
**suffix** | **string** | A generational or academic suffix | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
