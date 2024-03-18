# # CreatedCustomer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A customer ID. See Add Customer API for how to create a customer ID. |
**username** | **string** | The customer&#39;s username, assigned by the partner (a unique identifier), following these rules: minimum 6 characters maximum 255 characters any mix of uppercase, lowercase, numeric, and non-alphabet special characters ! @ . # $ % &amp; * _ - + the use of email in this field is discouraged it is recommended to use a unique non-email identifier. Use of special characters may result in an error (e.g. í, ü, etc.). Usernames are unique. A username used in Test Drive can&#39;t be reused in other plans. |
**created_date** | **int** | A date in Unix epoch time (in seconds). See: [Handling Epoch Dates and Times](https://developer.mastercard.com/open-banking-us/documentation/codes-and-formats/). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
