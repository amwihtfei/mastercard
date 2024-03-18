# # ObbAccountDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_number_display** | **string** | The account number from a financial institution in truncated format | [optional]
**account_owner** | [**\OpenAPI\Client\Model\ObbAccountOwner**](ObbAccountOwner.md) |  |
**aggregation_attempt_date** | **string** | A timestamp showing the last aggregation attempt. This will not be present until you have run your first aggregation for the account. | [optional]
**aggregation_status_code** | **int** | The status of the most recent aggregation attempt. This will not be present until you have run your first aggregation for the account | [optional]
**aggregation_success_date** | **string** | A timestamp showing the last successful aggregation of the account. This will not be present until you have run your first aggregation for the account. | [optional]
**currency** | **string** | The currency of the account | [optional]
**current_balance** | **float** | Current reported balance of the account | [optional]
**id** | **int** | An account ID represented as a number |
**institution** | [**\OpenAPI\Client\Model\ObbInstitution**](ObbInstitution.md) |  |
**institution_login_id** | **int** | An institution login ID (from the account record), represented as a number | [optional]
**name** | **string** | The account name from the institution | [optional]
**real_account_number_last4** | **int** | The last 4 digits of the ACH account number | [optional]
**status** | **string** | pending during account discovery, always active following successful account activation | [optional]
**type** | **string** | Account type, e.g. checking/saving | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
