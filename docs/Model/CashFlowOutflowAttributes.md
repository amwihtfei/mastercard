# # CashFlowOutflowAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**average_withdrawal_by_month_for_the_report_time_period** | [**\OpenAPI\Client\Model\ObbDateRangeAndAmount[]**](ObbDateRangeAndAmount.md) | Average value of withdrawals during periods in the report | [optional]
**count_withdrawals_by_month_for_the_report_time_period** | [**\OpenAPI\Client\Model\ObbDateRangeAndCount[]**](ObbDateRangeAndCount.md) | Count of all withdrawals during periods in the report |
**historic_count_of_withdrawal_transactions** | **int** | Count of ALL withdrawals over entire known history of the account (may exceed requested length of report) |
**historic_sum_of_withdrawals** | **float** | Sum of ALL withdrawals over entire known history of the account (may exceed requested length of report) | [optional]
**maximum_withdrawal_by_month_for_the_report_time_period** | [**\OpenAPI\Client\Model\ObbDateRangeAndAmount[]**](ObbDateRangeAndAmount.md) | Maximum withdrawal value for different periods in the report |
**minimum_withdrawal_by_month_for_the_report_time_period** | [**\OpenAPI\Client\Model\ObbDateRangeAndAmount[]**](ObbDateRangeAndAmount.md) | Minimum withdrawal value for different periods in the report |
**sum_withdrawals_by_month_for_the_report_time_period** | [**\OpenAPI\Client\Model\ObbDateRangeAndAmount[]**](ObbDateRangeAndAmount.md) | Sum of all withdrawals during periods in the report |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
