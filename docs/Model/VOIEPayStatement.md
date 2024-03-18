# # VOIEPayStatement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pay_period** | **string** | The pay period of the pay statement | [optional]
**billable** | **bool** | Designates whether the pay statement is billable | [optional]
**asset_id** | **string** | The asset ID of the stored pay statement | [optional]
**pay_date** | **int** | The listed pay date for the pay statement | [optional]
**start_date** | **int** | The beginning of the pay period | [optional]
**end_date** | **int** | The end of the pay period | [optional]
**net_pay_current** | **float** | The total pay after deductions for the employee for the current pay period | [optional]
**net_pay_ytd** | **float** | The total accumulation of pay after deductions for the employee for the current pay year | [optional]
**gross_pay_current** | **float** | The total pay before deductions for the employee for the current pay period | [optional]
**gross_pay_ytd** | **float** | The total accumulation of pay before deductions for the employee for the current pay year | [optional]
**payroll_provider** | **string** | The company that provides the pay stub. | [optional]
**employer** | [**\OpenAPI\Client\Model\Employer**](Employer.md) |  | [optional]
**employee** | [**\OpenAPI\Client\Model\Employee**](Employee.md) |  | [optional]
**pay_stat** | [**\OpenAPI\Client\Model\PayStat[]**](PayStat.md) | Information pertaining to the earnings on the pay statement | [optional]
**deductions** | [**\OpenAPI\Client\Model\Deduction[]**](Deduction.md) | Information pertaining to deductions on the pay statement | [optional]
**direct_deposits** | [**\OpenAPI\Client\Model\DirectDeposit[]**](DirectDeposit.md) | Information pertaining to direct deposits on the pay statement | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
