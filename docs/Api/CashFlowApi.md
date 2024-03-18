# OpenAPI\Client\CashFlowApi

All URIs are relative to https://api.finicity.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**generateCashFlowBusinessReport()**](CashFlowApi.md#generateCashFlowBusinessReport) | **POST** /decisioning/v2/customers/{customerId}/cashFlowBusiness | Generate Cash Flow Report - Business |
| [**generateCashFlowPersonalReport()**](CashFlowApi.md#generateCashFlowPersonalReport) | **POST** /decisioning/v2/customers/{customerId}/cashFlowPersonal | Generate Cash Flow Report - Personal |


## `generateCashFlowBusinessReport()`

```php
generateCashFlowBusinessReport($customer_id, $cash_flow_report_constraints, $callback_url): \OpenAPI\Client\Model\CashFlowReportAck
```

Generate Cash Flow Report - Business

Generate a Cash Flow Report (Business) report for all checking and savings under the given customer. This service retrieves up to two years of transaction history for the given account. It then uses this information to generate the CFR report. A consumer is not required to generate this report.  This report is not provided under FCRA rules, and this report is not available in the Finicity Consumer Portal for the borrower to view.  If no account type of checking or savings is found, the service will return HTTP 400 Bad Request.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: FinicityAppToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Finicity-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Finicity-App-Token', 'Bearer');

// Configure API key authorization: FinicityAppKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Finicity-App-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Finicity-App-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CashFlowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$cash_flow_report_constraints = new \OpenAPI\Client\Model\CashFlowReportConstraints(); // \OpenAPI\Client\Model\CashFlowReportConstraints
$callback_url = https://finicity-test/webhook; // string | A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code.

try {
    $result = $apiInstance->generateCashFlowBusinessReport($customer_id, $cash_flow_report_constraints, $callback_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashFlowApi->generateCashFlowBusinessReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **cash_flow_report_constraints** | [**\OpenAPI\Client\Model\CashFlowReportConstraints**](../Model/CashFlowReportConstraints.md)|  | |
| **callback_url** | **string**| A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CashFlowReportAck**](../Model/CashFlowReportAck.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateCashFlowPersonalReport()`

```php
generateCashFlowPersonalReport($customer_id, $cash_flow_report_constraints, $callback_url): \OpenAPI\Client\Model\CashFlowReportAck
```

Generate Cash Flow Report - Personal

Generate a Cash Flow Report (Personal) report for all checking and savings under the given customer. This service retrieves up to two years of transaction history for the given account. It then uses this information to generate the CFR report.  This report is provided under FCRA rules, with Finicity acting as the CRA (Consumer Reporting Agency). If an individual account is included in the report - for example, with an individual acting as an personal guarantor on the loan - then this version of the report should be used. In case of an adverse action on the loan where the decision was based on this report, then the borrower can be referred to the [Finicity Consumer Portal](https://consumer.finicityreports.com) where they can view this report and submit a dispute if they feel any information in this report is inaccurate.  Before calling this API, a consumer must be created for the given customer ID (see Consumers APIs).  If no account type of checking or savings is found, the service will return HTTP 400 Bad Request.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: FinicityAppToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Finicity-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Finicity-App-Token', 'Bearer');

// Configure API key authorization: FinicityAppKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Finicity-App-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Finicity-App-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CashFlowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$cash_flow_report_constraints = new \OpenAPI\Client\Model\CashFlowReportConstraints(); // \OpenAPI\Client\Model\CashFlowReportConstraints
$callback_url = https://finicity-test/webhook; // string | A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code.

try {
    $result = $apiInstance->generateCashFlowPersonalReport($customer_id, $cash_flow_report_constraints, $callback_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashFlowApi->generateCashFlowPersonalReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **cash_flow_report_constraints** | [**\OpenAPI\Client\Model\CashFlowReportConstraints**](../Model/CashFlowReportConstraints.md)|  | |
| **callback_url** | **string**| A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CashFlowReportAck**](../Model/CashFlowReportAck.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
