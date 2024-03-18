# # LoanPaymentDetailsGroup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | An account ID |
**group_number** | **string** | Institution&#39;s ID of the Student Loan Group |
**group_payment_number** | **string** | The payment number given by the institution. This number is typically for manual payments. This is not an ACH payment number. |
**group_payment_address** | **string** | The payment address to which send manual payments should be sent |
**group_future_payoff_amount** | **float** | The payoff amount for the group | [optional]
**group_future_payoff_date** | **\DateTime** | The date to which the \&quot;Future Payoff Amount\&quot; applies | [optional]
**group_loan_detail** | [**\OpenAPI\Client\Model\LoanPaymentDetailsLoan[]**](LoanPaymentDetailsLoan.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
