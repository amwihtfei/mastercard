# # ThirdPartyAccessReceipt

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile** | **int** | Representation of the type of consent receipt | [optional]
**version** | **string** | A schema version of receipt | [optional]
**receipt_id** | **string** | This is officially the Consent Receipt ID, but is aliased as the Access Key ID. This is a unique identifier managed by Finicity that points to the contents of this JSON document. | [optional]
**customer_id** | **string** | This is recipient&#39;s customerId represented as a pseudo identifier | [optional]
**partner_id** | **string** | Your Partner ID displayed in the [Developer Dashboard](https://developer.mastercard.com/account/log-in) | [optional]
**products** | [**\OpenAPI\Client\Model\ThirdPartyAccessProduct[]**](ThirdPartyAccessProduct.md) |  | [optional]
**provenance** | [**\OpenAPI\Client\Model\ThirdPartyAccessProvenance**](ThirdPartyAccessProvenance.md) |  | [optional]
**timestamp** | **\DateTime** | A date-time with time zone | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
