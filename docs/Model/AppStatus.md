# # AppStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**partner_id** | **string** | Your Partner ID displayed in the [Developer Dashboard](https://developer.mastercard.com/account/log-in) |
**pre_app_id** | **string** | Identifier to track the application registration from the App Registration and Get App Registration Status APIs |
**note** | **string** | A note on the registration. Typically used to indicate reasons for rejected apps. | [optional]
**application_id** | **string** | &#x60;applicationId&#x60; value returned from the Get App Registration Status API and the partner assign the customers to. This cannot be changed once set. Only applicable in cases of partners with multiple registered applications. If the partner only has one app, this can usually be omitted. This field is populated after the app is in a status approved. | [optional]
**app_name** | **string** | The name of the application assigned to the customer |
**submitted_date** | **int** | A date in Unix epoch time (in seconds). See: [Handling Epoch Dates and Times](https://developer.mastercard.com/open-banking-us/documentation/codes-and-formats/). |
**modified_date** | **int** | A date in Unix epoch time (in seconds). See: [Handling Epoch Dates and Times](https://developer.mastercard.com/open-banking-us/documentation/codes-and-formats/). |
**status** | **string** | The status of an app registration request. \&quot;A\&quot; means approved. \&quot;P\&quot; means pending which is the status when initially submitted or when the app is modified and awaiting approval. \&quot;R\&quot; means rejected. If it is rejected there will be a note with the rejected reason. |
**scopes** | **string** | Indicates scopes of data accessible to the app | [optional]
**institution_details** | [**\OpenAPI\Client\Model\AppFinancialInstitutionStatus[]**](AppFinancialInstitutionStatus.md) | A list of the registration status for each FI for the application | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
