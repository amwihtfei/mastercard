# OpenAPI\Client\PayStatementsApi

All URIs are relative to https://api.finicity.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**storeCustomerPayStatement()**](PayStatementsApi.md#storeCustomerPayStatement) | **POST** /aggregation/v1/customers/{customerId}/payStatements | Store Customer Pay Statement |


## `storeCustomerPayStatement()`

```php
storeCustomerPayStatement($customer_id, $pay_statement): \OpenAPI\Client\Model\Asset
```

Store Customer Pay Statement

Upload pay statements for a customer.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\PayStatementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$pay_statement = new \OpenAPI\Client\Model\PayStatement(); // \OpenAPI\Client\Model\PayStatement

try {
    $result = $apiInstance->storeCustomerPayStatement($customer_id, $pay_statement);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayStatementsApi->storeCustomerPayStatement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **pay_statement** | [**\OpenAPI\Client\Model\PayStatement**](../Model/PayStatement.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Asset**](../Model/Asset.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
