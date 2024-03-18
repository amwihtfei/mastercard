# OpenAPI\Client\CashFlowAnalyticsApi

All URIs are relative to https://api.finicity.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**generateCashFlowAnalytics()**](CashFlowAnalyticsApi.md#generateCashFlowAnalytics) | **POST** /analytics/cashflow/v1/customer/{customerId} | Generate Cash Flow Analytics |
| [**generateCashFlowAnalyticsFcra()**](CashFlowAnalyticsApi.md#generateCashFlowAnalyticsFcra) | **POST** /analytics/cashflow/v1/customer/{customerId}/fcra | Generate Cash Flow Analytics - FCRA |
| [**generateCashflowAnalyticsReport()**](CashFlowAnalyticsApi.md#generateCashflowAnalyticsReport) | **POST** /decisioning/v2/customers/{customerId}/reports/cashflow-analytics/userTypes/{userType} | Generate Cashflow Analytics Report - Personal/Business |
| [**getObbAnalyticsReport()**](CashFlowAnalyticsApi.md#getObbAnalyticsReport) | **GET** /analytics/data/v1/{obb_report_id} | Get OBB Analytics Report |
| [**getObbAnalyticsReportFcra()**](CashFlowAnalyticsApi.md#getObbAnalyticsReportFcra) | **GET** /analytics/data/v1/{obb_report_id}/fcra | Get OBB Analytics Report - FCRA |


## `generateCashFlowAnalytics()`

```php
generateCashFlowAnalytics($customer_id, $balance_and_cash_flow_analytics_report_constraints, $reference_number): \OpenAPI\Client\Model\ObbAnalyticsReportAck
```

Generate Cash Flow Analytics

Cash Flow Analytics for Business analyzes cash flow over time to report metrics and identify behavior that may indicate risk.  Calculated metrics include: * Average transaction value by month over the requested time period * Net cash flow over the requested time period and broken down by month * Count and report of weeks in the requested time period where there   were zero transactions posted to the customer's accounts  * Minimum/maximum/average/sum/count of deposits by month * Minimum/maximum/average/sum/count of withdrawals by month * Estimated amount of deposits that can be classified as business   revenue  * Number of transactions posted incurring a non-sufficient funds (NSF)   fee, and net amount charged in NSF fees   This version of the API is intended for piloting and integration testing your application with the Cash Flow Analytics product. It does not adhere to FCRA requirements, and should not be used for production/lending purposes. See _Generate Cash Flow Analytics - FCRA_ for the FCRA compliant version of this API.  A successful call to this API will generate analytics and store a report within Finicity. The report can be retrieved via _Get Cash Flow Analytics Report_ (operation: _GetCashFlowAnalyticsReport_).  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\CashFlowAnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$balance_and_cash_flow_analytics_report_constraints = new \OpenAPI\Client\Model\BalanceAndCashFlowAnalyticsReportConstraints(); // \OpenAPI\Client\Model\BalanceAndCashFlowAnalyticsReportConstraints
$reference_number = abc123; // string | Partner-provided reference number to correlate reports.

try {
    $result = $apiInstance->generateCashFlowAnalytics($customer_id, $balance_and_cash_flow_analytics_report_constraints, $reference_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashFlowAnalyticsApi->generateCashFlowAnalytics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **balance_and_cash_flow_analytics_report_constraints** | [**\OpenAPI\Client\Model\BalanceAndCashFlowAnalyticsReportConstraints**](../Model/BalanceAndCashFlowAnalyticsReportConstraints.md)|  | |
| **reference_number** | **string**| Partner-provided reference number to correlate reports. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ObbAnalyticsReportAck**](../Model/ObbAnalyticsReportAck.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateCashFlowAnalyticsFcra()`

```php
generateCashFlowAnalyticsFcra($customer_id, $balance_and_cash_flow_analytics_report_constraints, $reference_number): \OpenAPI\Client\Model\ObbAnalyticsReportAck
```

Generate Cash Flow Analytics - FCRA

Cash Flow Analytics for Business analyzes cash flow over time to report metrics and identify behavior that may indicate risk.  Calculated metrics include: * Average transaction value by month over the requested time period * Net cash flow over the requested time period and broken down by month * Count and report of weeks in the requested time period where there   were zero transactions posted to the customer's accounts  * Minimum/maximum/average/sum/count of deposits by month * Minimum/maximum/average/sum/count of withdrawals by month * Estimated amount of deposits that can be classified as business   revenue  * Number of transactions posted incurring a non-sufficient funds (NSF)   fee, and net amount charged in NSF fees   This version of the API is intended for production use. It maintains and enforces all compliance with FCRA rules and requirements.  *Note:* this is a premium service, billable per every successful API call for non-testing customers.  A successful call to this API will generate analytics and store a report within Finicity. The report can be retrieved via _Get Cash Flow Analytics Report - FCRA_ (operation: _GetCashFlowAnalyticsReportFCRA_).  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\CashFlowAnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$balance_and_cash_flow_analytics_report_constraints = new \OpenAPI\Client\Model\BalanceAndCashFlowAnalyticsReportConstraints(); // \OpenAPI\Client\Model\BalanceAndCashFlowAnalyticsReportConstraints
$reference_number = abc123; // string | Partner-provided reference number to correlate reports.

try {
    $result = $apiInstance->generateCashFlowAnalyticsFcra($customer_id, $balance_and_cash_flow_analytics_report_constraints, $reference_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashFlowAnalyticsApi->generateCashFlowAnalyticsFcra: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **balance_and_cash_flow_analytics_report_constraints** | [**\OpenAPI\Client\Model\BalanceAndCashFlowAnalyticsReportConstraints**](../Model/BalanceAndCashFlowAnalyticsReportConstraints.md)|  | |
| **reference_number** | **string**| Partner-provided reference number to correlate reports. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ObbAnalyticsReportAck**](../Model/ObbAnalyticsReportAck.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateCashflowAnalyticsReport()`

```php
generateCashflowAnalyticsReport($customer_id, $user_type, $analytics_report_constraints, $callback_url): \OpenAPI\Client\Model\AnalyticsReportAck
```

Generate Cashflow Analytics Report - Personal/Business

Generate a Cashflow Analytics Report for a given customer. This service retrieves up to two years of transaction history from connected accounts.  Cashflow Analytics analyzes transaction over time to report metrics and identify behavior that may indicate risk.  Before calling this API, A consumer or business may need to be created for the given customer ID based on the user type (see Consumer/Business APIs).  If no account type of checking or savings is found, the service will return HTTP 400 Bad Request.  This is a premium service, billable per every successful API call for non-testing customers. A successful call to this API will generate analytics report which can be retrieved via Get Report by Customer or Get Report by Consumer.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\CashFlowAnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$user_type = personal; // string | UserType indicates if the request is for a business or personal use case, Allowed values: business/personal.
$analytics_report_constraints = new \OpenAPI\Client\Model\AnalyticsReportConstraints(); // \OpenAPI\Client\Model\AnalyticsReportConstraints
$callback_url = https://finicity-test/webhook; // string | A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code.

try {
    $result = $apiInstance->generateCashflowAnalyticsReport($customer_id, $user_type, $analytics_report_constraints, $callback_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashFlowAnalyticsApi->generateCashflowAnalyticsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **user_type** | **string**| UserType indicates if the request is for a business or personal use case, Allowed values: business/personal. | |
| **analytics_report_constraints** | [**\OpenAPI\Client\Model\AnalyticsReportConstraints**](../Model/AnalyticsReportConstraints.md)|  | |
| **callback_url** | **string**| A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AnalyticsReportAck**](../Model/AnalyticsReportAck.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getObbAnalyticsReport()`

```php
getObbAnalyticsReport($obb_report_id): \OpenAPI\Client\Model\ObbAnalyticsReport
```

Get OBB Analytics Report

Retrieve the report saved by _Generate Balance Analytics_, _Generate Cash Flow Analytics_, or _Generate Payment History_. Requires the report ID generated by the previous call.  Report data can either be retrieved as a JSON document or PDF file.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\CashFlowAnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$obb_report_id = bcab9592-e032-4e7b-b737-0380619a0573; // string | Report ID generated and returned by OBB products

try {
    $result = $apiInstance->getObbAnalyticsReport($obb_report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashFlowAnalyticsApi->getObbAnalyticsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **obb_report_id** | **string**| Report ID generated and returned by OBB products | |

### Return type

[**\OpenAPI\Client\Model\ObbAnalyticsReport**](../Model/ObbAnalyticsReport.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getObbAnalyticsReportFcra()`

```php
getObbAnalyticsReportFcra($obb_report_id, $purpose): \OpenAPI\Client\Model\ObbAnalyticsReport
```

Get OBB Analytics Report - FCRA

Retrieve the report saved by _Generate Balance Analytics - FCRA_, _Generate Cash Flow Analytics - FCRA_, or _Generate Payment History - FCRA_. Requires the report ID generated by the previous call.  Report data can either be retrieved as a JSON document or PDF file.  *Note:* this is a premium service, billable per every successful API call for non-testing customers.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\CashFlowAnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$obb_report_id = bcab9592-e032-4e7b-b737-0380619a0573; // string | Report ID generated and returned by OBB products
$purpose = 3F; // string | 2-digit code from [Permissible Purpose Codes](https://developer.mastercard.com/open-banking-us/documentation/products/lend/report-handling/permissible-purpose-codes/), specifying the reason for retrieving this report. Required for retrieving some reports.

try {
    $result = $apiInstance->getObbAnalyticsReportFcra($obb_report_id, $purpose);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CashFlowAnalyticsApi->getObbAnalyticsReportFcra: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **obb_report_id** | **string**| Report ID generated and returned by OBB products | |
| **purpose** | **string**| 2-digit code from [Permissible Purpose Codes](https://developer.mastercard.com/open-banking-us/documentation/products/lend/report-handling/permissible-purpose-codes/), specifying the reason for retrieving this report. Required for retrieving some reports. | |

### Return type

[**\OpenAPI\Client\Model\ObbAnalyticsReport**](../Model/ObbAnalyticsReport.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
