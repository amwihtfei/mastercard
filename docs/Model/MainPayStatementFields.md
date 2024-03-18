# # MainPayStatementFields

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pay_date** | **int** | Pay date for the pay period |
**start_date** | **int** | Start date for the pay period | [optional]
**end_date** | **int** | End date for the pay period | [optional]
**pay_period_hours** | **float** | Sum of all hours worked each week for the pay period | [optional]
**pay_frequency** | **string** | The current pay frequency, or how often a regular pay check is   distributed:  * &#x60;Daily&#x60;  * &#x60;Weekly&#x60;  * &#x60;Bi-Weekly&#x60;  * &#x60;Semi-Monthly&#x60;  * &#x60;Monthly&#x60;  * &#x60;Quarterly&#x60;  * &#x60;Semi-Annual&#x60;  * &#x60;Annual&#x60;  * &#x60;Every 2.6 wks&#x60;  * &#x60;Every 4 wks&#x60;  * &#x60;Every 5.2 wks&#x60;  * &#x60;Other&#x60; | [optional]
**pay_type** | **string** | Current pay type:  * &#x60;Salary&#x60;  * &#x60;Hourly&#x60;  * &#x60;Daily&#x60; | [optional]
**gross_pay_amount** | **float** | Gross pay amount for the pay period |
**gross_pay_amount_ytd** | **float** | Year to date (YTD) gross pay amount at the time of payment | [optional]
**net_pay_amount** | **float** | Net pay amount for a pay period | [optional]
**net_pay_amount_ytd** | **float** | Year to date (YTD) net pay amount at the time of payment | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
