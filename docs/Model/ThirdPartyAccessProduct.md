# # ThirdPartyAccessProduct

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product** | **string** | Third party access token can be generated for the following product types:   * \&quot;moneyTransferDetails\&quot;: Retrieve account details for money transfer  * \&quot;availableBalance\&quot;: Retrieves the latest cached available and cleared     account balances for an account.  * \&quot;availableBalanceLive\&quot;: Retrieves the available and cleared account balances live from the financial institution  * \&quot;accountOwner\&quot;: Retrieves names and addresses of the account owner from a financial institution.  * \&quot;paymentIndicator\&quot;: Get the Payment Success Indicator response, scoring the likelihood of payment settlement  * \&quot;paymentFeedback\&quot;: Create feedback loop for Payment Success Indicator (PSI) and/or Payment Routing Optimizer (PRO)  * \&quot;paymentRouting\&quot;: Product recommends the best rail to use as well as the best time to initiate the payment |
**payor_id** | **string** | The Finicity Partner ID who should be billed when the Requester requests data from Finicity. If no value specified, then the Recipient will be billed. | [optional]
**max_calls** | **int** | Max number of calls to the consented product (consented API) | [optional]
**account_id** | **string** | An account ID |
**access_period** | [**\OpenAPI\Client\Model\ThirdPartyAccessPeriod**](ThirdPartyAccessPeriod.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
