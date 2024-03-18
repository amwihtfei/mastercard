# # CashFlowInflowAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**average_deposit_by_month_for_the_report_time_period** | [**\OpenAPI\Client\Model\ObbDateRangeAndAmount[]**](ObbDateRangeAndAmount.md) | Average value of deposits during periods in the report | [optional]
**count_deposits_by_month_for_the_report_time_period** | [**\OpenAPI\Client\Model\ObbDateRangeAndCount[]**](ObbDateRangeAndCount.md) | Count of all deposits during periods in the report |
**historic_count_of_deposit_transactions** | **int** | Count of ALL deposits over entire known history of the account (may exceed requested length of report) |
**historic_sum_of_deposits** | **float** | Sum of ALL deposits over entire known history of the account (may exceed requested length of report) | [optional]
**maximum_deposit_by_month_for_the_report_time_period** | [**\OpenAPI\Client\Model\ObbDateRangeAndAmount[]**](ObbDateRangeAndAmount.md) | Maximum deposit value for different periods in the report |
**minimum_deposit_by_month_for_the_report_time_period** | [**\OpenAPI\Client\Model\ObbDateRangeAndAmount[]**](ObbDateRangeAndAmount.md) | Minimum deposit value for different periods in the report |
**sum_deposits_by_month_for_the_report_time_period** | [**\OpenAPI\Client\Model\ObbDateRangeAndAmount[]**](ObbDateRangeAndAmount.md) | Sum of all deposits during periods in the report |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
