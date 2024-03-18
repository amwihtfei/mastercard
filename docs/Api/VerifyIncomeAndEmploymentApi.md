# OpenAPI\Client\VerifyIncomeAndEmploymentApi

All URIs are relative to https://api.finicity.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**generatePayStatementReport()**](VerifyIncomeAndEmploymentApi.md#generatePayStatementReport) | **POST** /decisioning/v2/customers/{customerId}/payStatement | Generate Pay Statement Report |
| [**generateVOEPayrollReport()**](VerifyIncomeAndEmploymentApi.md#generateVOEPayrollReport) | **POST** /decisioning/v2/customers/{customerId}/voePayroll | Generate VOE - Payroll Report |
| [**generateVOETransactionsReport()**](VerifyIncomeAndEmploymentApi.md#generateVOETransactionsReport) | **POST** /decisioning/v2/customers/{customerId}/voeTransactions | Generate VOE - Transactions Report |
| [**generateVOIEPaystubReport()**](VerifyIncomeAndEmploymentApi.md#generateVOIEPaystubReport) | **POST** /decisioning/v2/customers/{customerId}/voieTxVerify/withStatement | Generate VOIE - Paystub Report |
| [**generateVOIEPaystubWithTXVerifyReport()**](VerifyIncomeAndEmploymentApi.md#generateVOIEPaystubWithTXVerifyReport) | **POST** /decisioning/v2/customers/{customerId}/voieTxVerify/withInterview | Generate VOIE - Paystub (with TXVerify) Report |
| [**generateVOIReport()**](VerifyIncomeAndEmploymentApi.md#generateVOIReport) | **POST** /decisioning/v2/customers/{customerId}/voi | Generate VOI Report |
| [**refreshVOIEPayrollReport()**](VerifyIncomeAndEmploymentApi.md#refreshVOIEPayrollReport) | **POST** /decisioning/v2/customers/{customerId}/voiePayroll | Generate VOIE - Payroll Report |


## `generatePayStatementReport()`

```php
generatePayStatementReport($customer_id, $pay_statement_report_constraints, $callback_url): \OpenAPI\Client\Model\PayStatementReportAck
```

Generate Pay Statement Report

Generate Pay Statement Extraction Report for the given customer. This service accepts asset IDs of the stored pay statements to generate a Pay Statement Extraction Report.   This is a premium service. The billing rate is the variable rate for Pay Statement Extraction Report under the current subscription plan. The billable event is the successful generation of a Pay Statement Extraction Report.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\VerifyIncomeAndEmploymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$pay_statement_report_constraints = new \OpenAPI\Client\Model\PayStatementReportConstraints(); // \OpenAPI\Client\Model\PayStatementReportConstraints
$callback_url = https://finicity-test/webhook; // string | A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code.

try {
    $result = $apiInstance->generatePayStatementReport($customer_id, $pay_statement_report_constraints, $callback_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerifyIncomeAndEmploymentApi->generatePayStatementReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **pay_statement_report_constraints** | [**\OpenAPI\Client\Model\PayStatementReportConstraints**](../Model/PayStatementReportConstraints.md)|  | |
| **callback_url** | **string**| A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PayStatementReportAck**](../Model/PayStatementReportAck.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateVOEPayrollReport()`

```php
generateVOEPayrollReport($customer_id, $payroll_report_constraints, $callback_url): \OpenAPI\Client\Model\PayrollReportAck
```

Generate VOE - Payroll Report

Generate or refresh a VOE - Payroll report. Often used as a complementary report to the VOIE-Payroll report to fulfill the pre-close VOE requirements. It retrieves the customer's employment details and employment status through the payroll source without any income information.  This is a premium service. The billable event is the successful generation of a VOE - Payroll report.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\VerifyIncomeAndEmploymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$payroll_report_constraints = new \OpenAPI\Client\Model\PayrollReportConstraints(); // \OpenAPI\Client\Model\PayrollReportConstraints
$callback_url = https://finicity-test/webhook; // string | A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code.

try {
    $result = $apiInstance->generateVOEPayrollReport($customer_id, $payroll_report_constraints, $callback_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerifyIncomeAndEmploymentApi->generateVOEPayrollReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **payroll_report_constraints** | [**\OpenAPI\Client\Model\PayrollReportConstraints**](../Model/PayrollReportConstraints.md)|  | |
| **callback_url** | **string**| A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PayrollReportAck**](../Model/PayrollReportAck.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateVOETransactionsReport()`

```php
generateVOETransactionsReport($customer_id, $voe_transactions_report_constraints, $callback_url): \OpenAPI\Client\Model\VOETransactionsReportAck
```

Generate VOE - Transactions Report

Premium Service: A billable event when the API response is successful.  MVS-Direct integration developers only.  Used as a complimentary report to the VOA with Income and VOIE - Paystub (with TXVerify) reports and used to fulfill the pre-close VOE requirements.   Retrieve the latest credit transaction information from the borrower's connected bank accounts and groups them into income streams so that you can view their payment history to ensure a direct deport was made within the expected cadence. The report displays transaction descriptions without any dollar amounts so that income re-verification isn't necessary.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\VerifyIncomeAndEmploymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$voe_transactions_report_constraints = new \OpenAPI\Client\Model\VOETransactionsReportConstraints(); // \OpenAPI\Client\Model\VOETransactionsReportConstraints
$callback_url = https://finicity-test/webhook; // string | A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code.

try {
    $result = $apiInstance->generateVOETransactionsReport($customer_id, $voe_transactions_report_constraints, $callback_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerifyIncomeAndEmploymentApi->generateVOETransactionsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **voe_transactions_report_constraints** | [**\OpenAPI\Client\Model\VOETransactionsReportConstraints**](../Model/VOETransactionsReportConstraints.md)|  | |
| **callback_url** | **string**| A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code. | [optional] |

### Return type

[**\OpenAPI\Client\Model\VOETransactionsReportAck**](../Model/VOETransactionsReportAck.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateVOIEPaystubReport()`

```php
generateVOIEPaystubReport($customer_id, $voie_report_constraints, $callback_url): \OpenAPI\Client\Model\VOIEPaystubReportAck
```

Generate VOIE - Paystub Report

Generate a VOIE - Paystub report. This service uses the provided paystub(s), which are passed into the request body as asset IDs (generated using the Store Customer Pay Statement API) to generate the VOIE - Paystub report with digitized paystub details.  This is a premium service. The billing rate is the variable rate for VOIE - Paystub under the current subscription plan. The billable event is the successful generation of a VOIE - Paystub Report.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\VerifyIncomeAndEmploymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$voie_report_constraints = new \OpenAPI\Client\Model\VOIEReportConstraints(); // \OpenAPI\Client\Model\VOIEReportConstraints
$callback_url = https://finicity-test/webhook; // string | A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code.

try {
    $result = $apiInstance->generateVOIEPaystubReport($customer_id, $voie_report_constraints, $callback_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerifyIncomeAndEmploymentApi->generateVOIEPaystubReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **voie_report_constraints** | [**\OpenAPI\Client\Model\VOIEReportConstraints**](../Model/VOIEReportConstraints.md)|  | |
| **callback_url** | **string**| A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code. | [optional] |

### Return type

[**\OpenAPI\Client\Model\VOIEPaystubReportAck**](../Model/VOIEPaystubReportAck.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateVOIEPaystubWithTXVerifyReport()`

```php
generateVOIEPaystubWithTXVerifyReport($customer_id, $voie_with_tx_verify_report_constraints, $callback_url): \OpenAPI\Client\Model\VOIEPaystubWithTXVerifyReportAck
```

Generate VOIE - Paystub (with TXVerify) Report

Generate a VOIE - Paystub (with TXVerify) report for all checking and savings under the given customer. This service retrieves up to two years of transaction history for the given accounts. It then uses this information as well as the provided paystub(s), which are passed into the request body as asset IDs (generated using the Store Customer Pay Statement API) to generate the VOIE - Paystub (with TXVerify) report.  Note: if you are using this API to refresh the bank transactions, use the same asset ID from the first report. A new paystub is not required unless the paystub is too old for underwriting requirements. Using the same asset ID that was on the original report and the previously extracted details will be used to speed up report generation response time.  This is a premium service. The billing rate is the variable rate for VOIE TXVerify under the current subscription plan. The billable event is the successful generation of a VOIE TXVerify Report.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\VerifyIncomeAndEmploymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$voie_with_tx_verify_report_constraints = new \OpenAPI\Client\Model\VOIEWithTXVerifyReportConstraints(); // \OpenAPI\Client\Model\VOIEWithTXVerifyReportConstraints
$callback_url = https://finicity-test/webhook; // string | A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code.

try {
    $result = $apiInstance->generateVOIEPaystubWithTXVerifyReport($customer_id, $voie_with_tx_verify_report_constraints, $callback_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerifyIncomeAndEmploymentApi->generateVOIEPaystubWithTXVerifyReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **voie_with_tx_verify_report_constraints** | [**\OpenAPI\Client\Model\VOIEWithTXVerifyReportConstraints**](../Model/VOIEWithTXVerifyReportConstraints.md)|  | |
| **callback_url** | **string**| A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code. | [optional] |

### Return type

[**\OpenAPI\Client\Model\VOIEPaystubWithTXVerifyReportAck**](../Model/VOIEPaystubWithTXVerifyReportAck.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateVOIReport()`

```php
generateVOIReport($customer_id, $voi_report_constraints, $callback_url): \OpenAPI\Client\Model\VOIReportAck
```

Generate VOI Report

Generate a Verification of Income (VOI) report for all checking, savings, and money market accounts for the given customer. This service retrieves up to two years of transaction history for each account and uses this information to generate the VOI report.  This is a premium service. The billing rate is the variable rate for Verification of Income under the current subscription plan. The billable event is the successful generation of a VOI report.  If no account of type checking, savings, or money market is found, the service will return HTTP 400 Bad Request.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\VerifyIncomeAndEmploymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$voi_report_constraints = new \OpenAPI\Client\Model\VOIReportConstraints(); // \OpenAPI\Client\Model\VOIReportConstraints
$callback_url = https://finicity-test/webhook; // string | A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code.

try {
    $result = $apiInstance->generateVOIReport($customer_id, $voi_report_constraints, $callback_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerifyIncomeAndEmploymentApi->generateVOIReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **voi_report_constraints** | [**\OpenAPI\Client\Model\VOIReportConstraints**](../Model/VOIReportConstraints.md)|  | |
| **callback_url** | **string**| A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code. | [optional] |

### Return type

[**\OpenAPI\Client\Model\VOIReportAck**](../Model/VOIReportAck.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refreshVOIEPayrollReport()`

```php
refreshVOIEPayrollReport($customer_id, $payroll_report_constraints, $callback_url): \OpenAPI\Client\Model\PayrollReportAck
```

Generate VOIE - Payroll Report

Generate or refresh a VOIE - Payroll report. For clients using the product via a consumer permissioning experience via Connect, the original VOIE - Payroll report generates when the consumer completes the Connect experience, and this API is only used for future report refreshes without reengaging the consumer.  This is a premium service. The billable event is the successful generation of a VOIE - Payroll report.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\VerifyIncomeAndEmploymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$payroll_report_constraints = new \OpenAPI\Client\Model\PayrollReportConstraints(); // \OpenAPI\Client\Model\PayrollReportConstraints
$callback_url = https://finicity-test/webhook; // string | A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code.

try {
    $result = $apiInstance->refreshVOIEPayrollReport($customer_id, $payroll_report_constraints, $callback_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerifyIncomeAndEmploymentApi->refreshVOIEPayrollReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **payroll_report_constraints** | [**\OpenAPI\Client\Model\PayrollReportConstraints**](../Model/PayrollReportConstraints.md)|  | |
| **callback_url** | **string**| A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PayrollReportAck**](../Model/PayrollReportAck.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
