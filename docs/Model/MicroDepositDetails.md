# # MicroDepositDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | The following values may be returned in the field of a status:  * \&quot;Pending\&quot; : Micro entries not yet deposited to customer&#39;s account * \&quot;Completed\&quot;: Micro entries deposited to customer&#39;s account * \&quot;Verified\&quot;: Micro entries got successfully verified * \&quot;Rejected\&quot;: Micro entries got rejected due to some reason * \&quot;Returned\&quot;: Micro entries got returned back * \&quot;Failed\&quot;: Micro entries got failed due to some reason * \&quot;Expired\&quot;: Micro entries got expired as they remains unverified for certain defined days | [optional]
**status_description** | **string** | Micro entries status description | [optional]
**creation_date** | **string** | A date-time without time zone | [optional]
**routing_number** | **string** | Routing number of receiving bank | [optional]
**account_number_last4** | **string** | The last 4 digits of the ACH account number | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
