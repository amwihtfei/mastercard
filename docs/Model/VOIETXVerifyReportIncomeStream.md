# # VOIETXVerifyReportIncomeStream

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Finicity&#39;s income stream ID |
**name** | **string** | A human-readable name based on the &#x60;normalizedPayee&#x60; name of the transactions for this income stream |
**status** | **string** | Possible values: \&quot;ACTIVE\&quot;, \&quot;INACTIVE\&quot; |
**confidence** | **int** | Level of confidence that the deposit stream represents income (example: 85%) |
**cadence** | [**\OpenAPI\Client\Model\CadenceDetails**](CadenceDetails.md) |  |
**net_monthly** | [**\OpenAPI\Client\Model\NetMonthly[]**](NetMonthly.md) | A list of net monthly records. One instance for each complete calendar month in the report. | [optional]
**net_annual** | **float** | Sum of all values in &#x60;netMonthlyIncome&#x60; over the previous 12 months | [optional]
**projected_net_annual** | **float** | Projected net income over the next 12 months, across all income streams, based on &#x60;netAnnualIncome&#x60; | [optional]
**estimated_gross_annual** | **float** | Before-tax gross annual income (estimated from &#x60;netAnnual&#x60;) across all income stream in the past 12 months | [optional]
**projected_gross_annual** | **float** | Projected gross income over the next 12 months, across all active income streams, based on &#x60;projectedNetAnnual&#x60; | [optional]
**average_monthly_income_net** | **float** | Monthly average amount over the previous 24 months | [optional]
**income_stream_months** | **int** | The number of months the income transactions are observed | [optional]
**transactions** | [**\OpenAPI\Client\Model\ReportTransaction[]**](ReportTransaction.md) | A list of transaction records |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
