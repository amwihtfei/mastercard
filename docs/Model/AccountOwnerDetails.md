# # AccountOwnerDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**relationship** | **string** | The type of relationship to the account:   * \&quot;AUTHORIZED_USER\&quot;    * \&quot;BUSINESS\&quot;     * \&quot;FOR_BENEFIT_OF_PRIMARY\&quot;    * \&quot;FOR_BENEFIT_OF_PRIMARY_JOINT_RESTRICTED\&quot;    * \&quot;FOR_BENEFIT_OF_SECONDARY\&quot;  * \&quot;FOR_BENEFIT_OF_SECONDARY_JOINT_RESTRICTED\&quot;  * \&quot;FOR_BENEFIT_OF_SOLE_OWNER_RESTRICTED\&quot;  * \&quot;POWER_OF_ATTORNEY\&quot;  * \&quot;PRIMARY_JOINT_TENANTS\&quot;  * \&quot;PRIMARY\&quot;  * \&quot;PRIMARY_BORROWER\&quot;  * \&quot;PRIMARY_JOINT\&quot;  * \&quot;SECONDARY\&quot;  * \&quot;SECONDARY_JOINT_TENANTS\&quot;  * \&quot;SECONDARY_BORROWER\&quot;  * \&quot;SECONDARY_JOINT\&quot;  * \&quot;SOLE_OWNER\&quot;  * \&quot;TRUSTEE\&quot;  * \&quot;UNIFORM_TRANSFER_TO_MINOR\&quot; | [optional]
**owner_name** | **string** | The full name of the account owner. Multiple account owners are returned in one string per the source data from the institution. |
**first_name** | **string** | The first name of the account holder | [optional]
**middle_name** | **string** | The middle name of the account holder | [optional]
**last_name** | **string** | The last name of the account holder | [optional]
**suffix** | **string** | A generational or academic suffix | [optional]
**name_classification** | **string** | The classification of the account holder: * \&quot;person / personal / home\&quot; * \&quot;business\&quot; * \&quot;other\&quot; | [optional]
**name_classificationconfidencescore** | **float** | The confidence score 0-100 of the name classification. | [optional]
**addresses** | [**\OpenAPI\Client\Model\AccountOwnerAddress[]**](AccountOwnerAddress.md) | List of addresses |
**emails** | [**\OpenAPI\Client\Model\AccountOwnerEmail[]**](AccountOwnerEmail.md) | List of emails | [optional]
**phones** | [**\OpenAPI\Client\Model\AccountOwnerPhone[]**](AccountOwnerPhone.md) | List of phones | [optional]
**documentations** | [**\OpenAPI\Client\Model\AccountOwnerDocumentation[]**](AccountOwnerDocumentation.md) | List of account owner documentation | [optional]
**identity_insights** | [**\OpenAPI\Client\Model\AccountOwnerIdentityInsights**](AccountOwnerIdentityInsights.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
