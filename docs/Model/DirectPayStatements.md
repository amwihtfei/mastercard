# # DirectPayStatements

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payroll_pay_history_id** | **string** | An ID for the income and employment details for the given pay period |
**last_pay_period_indicator** | **bool** | Most recent available pay check |
**main_pay_statement_fields** | [**\OpenAPI\Client\Model\MainPayStatementFields**](MainPayStatementFields.md) |  |
**earnings** | [**\OpenAPI\Client\Model\Earnings[]**](Earnings.md) | Categorization of pay, for the pay period |
**deductions** | [**\OpenAPI\Client\Model\Deductions[]**](Deductions.md) | Deductions from the pay check | [optional]
**direct_deposits** | [**\OpenAPI\Client\Model\DirectDeposits[]**](DirectDeposits.md) | Direct deposit information for the paycheck | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
