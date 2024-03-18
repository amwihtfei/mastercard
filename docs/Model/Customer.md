# # Customer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A customer ID. See Add Customer API for how to create a customer ID. |
**username** | **string** | The customer&#39;s username, assigned by the partner (a unique identifier), following these rules: minimum 6 characters maximum 255 characters any mix of uppercase, lowercase, numeric, and non-alphabet special characters ! @ . # $ % &amp; * _ - + the use of email in this field is discouraged it is recommended to use a unique non-email identifier. Use of special characters may result in an error (e.g. í, ü, etc.). Usernames are unique. A username used in Test Drive can&#39;t be reused in other plans. |
**first_name** | **string** | The first name of the account holder | [optional]
**last_name** | **string** | The last name of the account holder | [optional]
**type** | **string** | The type of customer (\&quot;active\&quot; or \&quot;testing\&quot; or \&quot;\&quot; for all types) |
**created_date** | **string** | A date in Unix epoch time (in seconds). See: [Handling Epoch Dates and Times](https://developer.mastercard.com/open-banking-us/documentation/codes-and-formats/). |
**last_modified_date** | **string** | A date in Unix epoch time (in seconds). See: [Handling Epoch Dates and Times](https://developer.mastercard.com/open-banking-us/documentation/codes-and-formats/). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
