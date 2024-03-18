# OpenAPI\Client\AccountsSimpleApi

All URIs are relative to https://api.finicity.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCustomerAccountSimple()**](AccountsSimpleApi.md#getCustomerAccountSimple) | **GET** /aggregation/v1/customers/{customerId}/accounts/{accountId}/simple | Get Customer Account by ID (Simple) |
| [**getCustomerAccountsByInstitutionLoginSimple()**](AccountsSimpleApi.md#getCustomerAccountsByInstitutionLoginSimple) | **GET** /aggregation/v1/customers/{customerId}/institutionLogins/{institutionLoginId}/accounts/simple | Get Customer Accounts by Institution Login ID (Simple) |
| [**getCustomerAccountsByInstitutionSimple()**](AccountsSimpleApi.md#getCustomerAccountsByInstitutionSimple) | **GET** /aggregation/v1/customers/{customerId}/institutions/{institutionId}/accounts/simple | Get Customer Accounts by Institution ID (Simple) |
| [**getCustomerAccountsSimple()**](AccountsSimpleApi.md#getCustomerAccountsSimple) | **GET** /aggregation/v1/customers/{customerId}/accounts/simple | Get Customer Accounts (Simple) |


## `getCustomerAccountSimple()`

```php
getCustomerAccountSimple($customer_id, $account_id): \OpenAPI\Client\Model\CustomerAccountSimple
```

Get Customer Account by ID (Simple)

This API is a lighter version of Get Customer Accounts by ID, returning only basic information of a customer account.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\AccountsSimpleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$account_id = 5011648377; // string | The account ID

try {
    $result = $apiInstance->getCustomerAccountSimple($customer_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsSimpleApi->getCustomerAccountSimple: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **account_id** | **string**| The account ID | |

### Return type

[**\OpenAPI\Client\Model\CustomerAccountSimple**](../Model/CustomerAccountSimple.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerAccountsByInstitutionLoginSimple()`

```php
getCustomerAccountsByInstitutionLoginSimple($customer_id, $institution_login_id): \OpenAPI\Client\Model\CustomerAccountsSimple
```

Get Customer Accounts by Institution Login ID (Simple)

This API is a lighter version of Get Customer Accounts by Institution Login ID, returning only basic information of all active accounts owned by the given customer at the given institution login ID.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\AccountsSimpleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$institution_login_id = 1007302745; // string | The institution login ID

try {
    $result = $apiInstance->getCustomerAccountsByInstitutionLoginSimple($customer_id, $institution_login_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsSimpleApi->getCustomerAccountsByInstitutionLoginSimple: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **institution_login_id** | **string**| The institution login ID | |

### Return type

[**\OpenAPI\Client\Model\CustomerAccountsSimple**](../Model/CustomerAccountsSimple.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerAccountsByInstitutionSimple()`

```php
getCustomerAccountsByInstitutionSimple($customer_id, $institution_id): \OpenAPI\Client\Model\CustomerAccountsSimple
```

Get Customer Accounts by Institution ID (Simple)

This API is a lighter version of Get Customer Accounts by Institution ID, returning only basic information of active accounts owned by the given customer at the given institution.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\AccountsSimpleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$institution_id = 4222; // int | The institution ID

try {
    $result = $apiInstance->getCustomerAccountsByInstitutionSimple($customer_id, $institution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsSimpleApi->getCustomerAccountsByInstitutionSimple: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **institution_id** | **int**| The institution ID | |

### Return type

[**\OpenAPI\Client\Model\CustomerAccountsSimple**](../Model/CustomerAccountsSimple.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerAccountsSimple()`

```php
getCustomerAccountsSimple($customer_id): \OpenAPI\Client\Model\CustomerAccountsSimple
```

Get Customer Accounts (Simple)

This API is a lighter version of Get Customer Accounts, returning only basic information of all active customer accounts.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\AccountsSimpleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID

try {
    $result = $apiInstance->getCustomerAccountsSimple($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsSimpleApi->getCustomerAccountsSimple: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |

### Return type

[**\OpenAPI\Client\Model\CustomerAccountsSimple**](../Model/CustomerAccountsSimple.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
