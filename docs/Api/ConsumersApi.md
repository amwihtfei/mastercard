# OpenAPI\Client\ConsumersApi

All URIs are relative to https://api.finicity.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createConsumer()**](ConsumersApi.md#createConsumer) | **POST** /decisioning/v1/customers/{customerId}/consumer | Create Consumer |
| [**getConsumer()**](ConsumersApi.md#getConsumer) | **GET** /decisioning/v1/consumers/{consumerId} | Get Consumer by ID |
| [**getConsumerForCustomer()**](ConsumersApi.md#getConsumerForCustomer) | **GET** /decisioning/v1/customers/{customerId}/consumer | Get Consumer For Customer |
| [**modifyConsumer()**](ConsumersApi.md#modifyConsumer) | **PUT** /decisioning/v1/consumers/{consumerId} | Modify Consumer by ID |


## `createConsumer()`

```php
createConsumer($customer_id, $new_consumer): \OpenAPI\Client\Model\CreatedConsumer
```

Create Consumer

Create a consumer record associated with the given customer. A consumer persists as the owner of any reports that are generated, even after the original customer is deleted from the system.  A consumer must be created for the given customer before calling any of the Generate Report services.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\ConsumersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$new_consumer = new \OpenAPI\Client\Model\NewConsumer(); // \OpenAPI\Client\Model\NewConsumer

try {
    $result = $apiInstance->createConsumer($customer_id, $new_consumer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsumersApi->createConsumer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **new_consumer** | [**\OpenAPI\Client\Model\NewConsumer**](../Model/NewConsumer.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreatedConsumer**](../Model/CreatedConsumer.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConsumer()`

```php
getConsumer($consumer_id): \OpenAPI\Client\Model\Consumer
```

Get Consumer by ID

Get the details of a consumer record by consumer ID.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\ConsumersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consumer_id = 0bf46322c167b562e6cbed9d40e19a4c; // string | The consumer ID

try {
    $result = $apiInstance->getConsumer($consumer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsumersApi->getConsumer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **consumer_id** | **string**| The consumer ID | |

### Return type

[**\OpenAPI\Client\Model\Consumer**](../Model/Consumer.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConsumerForCustomer()`

```php
getConsumerForCustomer($customer_id): \OpenAPI\Client\Model\Consumer
```

Get Consumer For Customer

Get the details of a consumer record by customer ID.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\ConsumersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID

try {
    $result = $apiInstance->getConsumerForCustomer($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsumersApi->getConsumerForCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |

### Return type

[**\OpenAPI\Client\Model\Consumer**](../Model/Consumer.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyConsumer()`

```php
modifyConsumer($consumer_id, $consumer_update)
```

Modify Consumer by ID

Modify an existing consumer. All fields are required for a consumer record, but individual fields for this call are optional because fields that are not specified will be left unchanged.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\ConsumersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consumer_id = 0bf46322c167b562e6cbed9d40e19a4c; // string | The consumer ID
$consumer_update = new \OpenAPI\Client\Model\ConsumerUpdate(); // \OpenAPI\Client\Model\ConsumerUpdate

try {
    $apiInstance->modifyConsumer($consumer_id, $consumer_update);
} catch (Exception $e) {
    echo 'Exception when calling ConsumersApi->modifyConsumer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **consumer_id** | **string**| The consumer ID | |
| **consumer_update** | [**\OpenAPI\Client\Model\ConsumerUpdate**](../Model/ConsumerUpdate.md)|  | |

### Return type

void (empty response body)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
