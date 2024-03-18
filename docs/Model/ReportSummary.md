# # ReportSummary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A report ID |
**request_id** | **string** | Finicity indicator to track all activity associated with this report |
**requester_name** | **string** | Name of a Finicity partner |
**created_date** | **int** | A date in Unix epoch time (in seconds). See: [Handling Epoch Dates and Times](https://developer.mastercard.com/open-banking-us/documentation/codes-and-formats/). |
**consumer_id** | **string** | A consumer ID. See Create Consumer API for how to create a consumer ID. | [optional]
**consumer_ssn** | **string** | Last 4 digits of a SSN | [optional]
**type** | **string** | A report type. Possible values:  * &#x60;voi&#x60;   * &#x60;voa&#x60;   * &#x60;voaHistory&#x60;   * &#x60;history&#x60;   * &#x60;voieTxVerify&#x60;   * &#x60;voieWithReport&#x60;   * &#x60;voieWithInterview&#x60;   * &#x60;paystatement&#x60;   * &#x60;preQualVoa&#x60;   * &#x60;assetSummary&#x60;   * &#x60;voie&#x60;   * &#x60;transactions&#x60;   * &#x60;statement&#x60;   * &#x60;voiePayroll&#x60;   * &#x60;voeTransactions&#x60;   * &#x60;voePayroll&#x60;   * &#x60;cfrp&#x60;   * &#x60;cfrb&#x60;  * &#x60;barpcra&#x60;  * &#x60;barpnoncra&#x60;  * &#x60;barbcra&#x60;  * &#x60;barbftc&#x60;  * &#x60;barbnoncra&#x60; |
**status** | **string** | A report generation status. Possible values:  * &#x60;inProgress&#x60;  * &#x60;success&#x60;  * &#x60;failure&#x60; |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
