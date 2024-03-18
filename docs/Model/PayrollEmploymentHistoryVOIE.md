# # PayrollEmploymentHistoryVOIE

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**as_of_date** | **int** | The last time the payroll data was updated in the payroll provider&#39;s system |
**employment_id** | **string** | This is a Mastercard assigned ID to the employment record. It remains consistent for that employment record, even if the report is refreshed. It can be used to limit the employment records that are returned in the report. | [optional]
**employer_name** | **string** | Name of the employer as stated by the employer in the payroll system |
**payroll_source** | **string** | The name of the payroll source where the data was retrieved |
**employee** | [**\OpenAPI\Client\Model\PayrollEmployeeRecord**](PayrollEmployeeRecord.md) |  |
**employment** | [**\OpenAPI\Client\Model\PayrollEmploymentRecord**](PayrollEmploymentRecord.md) |  |
**income** | [**\OpenAPI\Client\Model\PayrollVOIEIncomeRecord**](PayrollVOIEIncomeRecord.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
