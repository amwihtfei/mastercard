# # LoanPaymentDetailsAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | An account ID |
**account_number** | **string** | Institution&#39;s ID of the Student Loan Account |
**account_payment_number** | **string** | The payment number given by the institution. This number is typically for manual payments. This is not an ACH payment number. |
**account_payment_address** | **string** | The payment address to which send manual payments should be sent |
**account_future_payoff_amount** | **float** | The payoff amount for the account | [optional]
**account_future_payoff_date** | **\DateTime** | The date to which the \&quot;Future Payoff Amount\&quot; applies | [optional]
**group_detail** | [**\OpenAPI\Client\Model\LoanPaymentDetailsGroup[]**](LoanPaymentDetailsGroup.md) | Group details | [optional]
**loan_detail** | [**\OpenAPI\Client\Model\LoanPaymentDetailsLoan[]**](LoanPaymentDetailsLoan.md) | Loan details | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
