# # VOETransactionsReportIncomeStream

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Income stream ID |
**name** | **string** | A human-readable name based on the &#x60;normalizedPayee&#x60; name of the transactions for this income stream |
**status** | **string** | Possible values: \&quot;ACTIVE\&quot;, \&quot;INACTIVE\&quot; |
**estimate_inclusion** | **string** | Possible values: \&quot;HIGH\&quot;, \&quot;MODERATE\&quot;, \&quot;LOW\&quot;, \&quot;NO\&quot; |
**confidence** | **int** | Level of confidence that the deposit stream represents income (example: 85%) |
**cadence** | [**\OpenAPI\Client\Model\CadenceDetails**](CadenceDetails.md) |  |
**days_since_last_transaction** | **int** | The number of days since the last credit transaction for the particular income stream |
**next_expected_transaction_date** | **int** | The next expected credit transaction date for the particular income stream, based on the cadence |
**income_stream_months** | **int** | The number of months the income transactions are observed | [optional]
**transactions** | [**\OpenAPI\Client\Model\ReportTransaction[]**](ReportTransaction.md) | A list of transaction records |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
