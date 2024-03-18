# # PayrollVOIEIncomeRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pay_frequency** | **string** | The current pay frequency or how often a regular pay check is:  * &#x60;Daily&#x60;   * &#x60;Weekly&#x60;   * &#x60;Bi-Weekly&#x60;   * &#x60;Semi-Monthly&#x60;   * &#x60;Monthly&#x60;   * &#x60;Quarterly&#x60;   * &#x60;Semi-Annual&#x60;   * &#x60;Annual&#x60;   * &#x60;Every 2.6 wks&#x60;   * &#x60;Every 4 wks&#x60;   * &#x60;Every 5.2 wks&#x60;   * &#x60;Other&#x60; | [optional]
**pay_type** | **string** | The current pay type:  * &#x60;Salary&#x60;  * &#x60;Hourly&#x60;  * &#x60;Daily&#x60; | [optional]
**base_pay_rate** | **float** | The current base or regular pay rate. Please use in conjunction with the &#x60;basePayRateUnit&#x60; field. | [optional]
**base_pay_rate_unit** | **string** | Unit for the base pay rate:  * &#x60;Hourly&#x60;  * &#x60;Daily&#x60;  * &#x60;Weekly&#x60;  * &#x60;Bi-Weekly&#x60;  * &#x60;Semi-Monthly&#x60;  * &#x60;Monthly&#x60;  * &#x60;Quarterly&#x60;  * &#x60;Semi-Annual&#x60;  * &#x60;Annual&#x60;  * &#x60;Every 2.6 wks&#x60;  * &#x60;Every 5.2 wks&#x60;  * &#x60;Other&#x60; | [optional]
**oldest_pay_statement_available** | **string** | The date of the oldest direct pay statement available from the payroll source, as measured by the oldest &#x60;payDate&#x60; from all the pay statements delivered. | [optional]
**annual_income** | [**\OpenAPI\Client\Model\AnnualIncome[]**](AnnualIncome.md) | The annual pay for the current year, through prior year 2 (as available)  This is a mandatory field only for VOIE-payroll report type. | [optional]
**monthly_income** | [**\OpenAPI\Client\Model\MonthlyIncome**](MonthlyIncome.md) |  | [optional]
**direct_pay_statements** | [**\OpenAPI\Client\Model\DirectPayStatements[]**](DirectPayStatements.md) | An array of payment histories for each available paycheck | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
