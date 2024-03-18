# OpenAPI\Client\VerifyAssetsApi

All URIs are relative to https://api.finicity.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**generatePrequalificationCRAReport()**](VerifyAssetsApi.md#generatePrequalificationCRAReport) | **POST** /decisioning/v2/customers/{customerId}/preQualVoa | Generate Prequalification (CRA) Report |
| [**generatePrequalificationNonCRAReport()**](VerifyAssetsApi.md#generatePrequalificationNonCRAReport) | **POST** /decisioning/v2/customers/{customerId}/assetSummary | Generate Prequalification (Non-CRA) Report |
| [**generateVOAReport()**](VerifyAssetsApi.md#generateVOAReport) | **POST** /decisioning/v2/customers/{customerId}/voa | Generate VOA Report |
| [**generateVOAWithIncomeReport()**](VerifyAssetsApi.md#generateVOAWithIncomeReport) | **POST** /decisioning/v2/customers/{customerId}/voaHistory | Generate VOA With Income Report |


## `generatePrequalificationCRAReport()`

```php
generatePrequalificationCRAReport($customer_id, $prequalification_report_constraints, $callback_url): \OpenAPI\Client\Model\PrequalificationReportAck
```

Generate Prequalification (CRA) Report

Retrieve all checking, savings, money market, and investment accounts for a consumer. The account, owner information, and the number of insufficient funds (NSFs) for checking accounts are also provided.  If no account of type checking, savings, money market, or investment is found, the service will return HTTP 400 Bad Request.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\VerifyAssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$prequalification_report_constraints = new \OpenAPI\Client\Model\PrequalificationReportConstraints(); // \OpenAPI\Client\Model\PrequalificationReportConstraints
$callback_url = https://finicity-test/webhook; // string | A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code.

try {
    $result = $apiInstance->generatePrequalificationCRAReport($customer_id, $prequalification_report_constraints, $callback_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerifyAssetsApi->generatePrequalificationCRAReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **prequalification_report_constraints** | [**\OpenAPI\Client\Model\PrequalificationReportConstraints**](../Model/PrequalificationReportConstraints.md)|  | |
| **callback_url** | **string**| A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PrequalificationReportAck**](../Model/PrequalificationReportAck.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generatePrequalificationNonCRAReport()`

```php
generatePrequalificationNonCRAReport($customer_id, $prequalification_report_constraints, $callback_url): \OpenAPI\Client\Model\PrequalificationReportAck
```

Generate Prequalification (Non-CRA) Report

Retrieve all checking, savings, money market, and investment accounts for a customer. The account, owner information, and the number of insufficient funds (NSFs) for checking accounts are also provided.  If no account type of checking, savings, money market, or investment is found, the service will return HTTP 400 Bad Request.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\VerifyAssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$prequalification_report_constraints = new \OpenAPI\Client\Model\PrequalificationReportConstraints(); // \OpenAPI\Client\Model\PrequalificationReportConstraints
$callback_url = https://finicity-test/webhook; // string | A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code.

try {
    $result = $apiInstance->generatePrequalificationNonCRAReport($customer_id, $prequalification_report_constraints, $callback_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerifyAssetsApi->generatePrequalificationNonCRAReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **prequalification_report_constraints** | [**\OpenAPI\Client\Model\PrequalificationReportConstraints**](../Model/PrequalificationReportConstraints.md)|  | |
| **callback_url** | **string**| A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PrequalificationReportAck**](../Model/PrequalificationReportAck.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateVOAReport()`

```php
generateVOAReport($customer_id, $voa_report_constraints, $callback_url): \OpenAPI\Client\Model\VOAReportAck
```

Generate VOA Report

Generate a Verification of Assets (VOA) report for all checking, savings, money market, and investment accounts for the given customer. This service retrieves up to twelve months of transaction history for each account and uses this information to generate the VOA report.  This is a premium service. The billing rate is the variable rate for Verification of Assets under the current subscription plan. The billable event is the successful generation of a VOA report.  Before calling this API, a consumer must be created for the given customer ID (see Consumers APIs).  If no account of type checking, savings, money market, or investment is found, the service will return HTTP 400 Bad Request.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\VerifyAssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$voa_report_constraints = new \OpenAPI\Client\Model\VOAReportConstraints(); // \OpenAPI\Client\Model\VOAReportConstraints
$callback_url = https://finicity-test/webhook; // string | A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code.

try {
    $result = $apiInstance->generateVOAReport($customer_id, $voa_report_constraints, $callback_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerifyAssetsApi->generateVOAReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **voa_report_constraints** | [**\OpenAPI\Client\Model\VOAReportConstraints**](../Model/VOAReportConstraints.md)|  | |
| **callback_url** | **string**| A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code. | [optional] |

### Return type

[**\OpenAPI\Client\Model\VOAReportAck**](../Model/VOAReportAck.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateVOAWithIncomeReport()`

```php
generateVOAWithIncomeReport($customer_id, $voa_with_income_report_constraints, $callback_url): \OpenAPI\Client\Model\VOAWithIncomeReportAck
```

Generate VOA With Income Report

Generate a Verification of Assets with Income (VOAI) report for all checking, savings, money market, and investment accounts for the given customer. This service retrieves up to 24 months of transaction history for each account and uses this information to generate the VOAI report. The report includes 1 - 6 months of all debit and credit transactions for asset verification. By default, the history is set to 61 days, however, you can change the transaction history in this section by setting the `fromDate` parameter. The report also includes up to 24 months of income credit transactions (ordered by account and confidence level) regardless of `fromDate` for income verification.  This is a premium service. The billable event is the successful generation of a VOAI report.  Before calling this API, a consumer must be created for the given customer ID (see Consumers APIs).  If no account of type checking, savings, money market, or investment is found, the service will return HTTP 400 Bad Request.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\VerifyAssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$voa_with_income_report_constraints = new \OpenAPI\Client\Model\VOAWithIncomeReportConstraints(); // \OpenAPI\Client\Model\VOAWithIncomeReportConstraints
$callback_url = https://finicity-test/webhook; // string | A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code.

try {
    $result = $apiInstance->generateVOAWithIncomeReport($customer_id, $voa_with_income_report_constraints, $callback_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerifyAssetsApi->generateVOAWithIncomeReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **voa_with_income_report_constraints** | [**\OpenAPI\Client\Model\VOAWithIncomeReportConstraints**](../Model/VOAWithIncomeReportConstraints.md)|  | |
| **callback_url** | **string**| A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code. | [optional] |

### Return type

[**\OpenAPI\Client\Model\VOAWithIncomeReportAck**](../Model/VOAWithIncomeReportAck.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
