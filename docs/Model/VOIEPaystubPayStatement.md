# # VOIEPaystubPayStatement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pay_period** | **string** | The pay period of the pay statement | [optional]
**billable** | **bool** | This will display true if the pay statement is billable. If a pay statement has been digitized previously, this will display as false as it will not be billable. |
**asset_id** | **string** | The asset ID of the stored pay statement |
**pay_date** | **int** | The listed pay date for the pay statement | [optional]
**start_date** | **int** | The beginning of the pay period | [optional]
**end_date** | **int** | The end of the pay period | [optional]
**net_pay_current** | **float** | The total pay after deductions for the employee for the current pay period | [optional]
**net_pay_ytd** | **float** | The total accumulation of pay after deductions for the employee for the current pay year | [optional]
**gross_pay_current** | **float** | The total pay before deductions for the employee for the current pay period | [optional]
**gross_pay_ytd** | **float** | The total accumulation of pay before deductions for the employee for the current pay year | [optional]
**payroll_provider** | **string** | The payroll provider extracted from the pay statement | [optional]
**employer** | [**\OpenAPI\Client\Model\Employer**](Employer.md) |  |
**employee** | [**\OpenAPI\Client\Model\Employee**](Employee.md) |  |
**pay_stat** | [**\OpenAPI\Client\Model\PayStat[]**](PayStat.md) | Information pertaining to the earnings on the pay statement |
**direct_deposits** | [**\OpenAPI\Client\Model\DirectDeposit[]**](DirectDeposit.md) | Information pertaining to the direct deposits on the pay statement | [optional]
**institutions** | **string[]** | Not populated for the voieWithStatement style of paystub report. For the VOIE - Paystub (with TXVerify) reports this would include details of the financial institution accounts and income streams with matching transactions to the pay statement. |
**error_code** | **int** | Error code for the asset | [optional]
**error_message** | **string** | Error message for the asset | [optional]
**monthly_income** | [**\OpenAPI\Client\Model\PaystubMonthlyIncomeRecord**](PaystubMonthlyIncomeRecord.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
