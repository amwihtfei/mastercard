# # BalanceAndCashFlowAnalyticsReportConstraints

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_ids** | **int[]** | The list of account IDs to include in the report. If omitted, all accounts on record for the customer will be used. | [optional]
**length_of_report** | **int** | Number of days to search for transactions. Must be one of 30, 90, 180, 270, 365, or 730. If omitted, defaults to 2 years from current time at which the request was received (730 days). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
