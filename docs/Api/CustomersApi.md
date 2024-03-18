# OpenAPI\Client\CustomersApi

All URIs are relative to https://api.finicity.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addCustomer()**](CustomersApi.md#addCustomer) | **POST** /aggregation/v2/customers/active | Add Customer |
| [**addTestingCustomer()**](CustomersApi.md#addTestingCustomer) | **POST** /aggregation/v2/customers/testing | Add Testing Customer |
| [**deleteCustomer()**](CustomersApi.md#deleteCustomer) | **DELETE** /aggregation/v1/customers/{customerId} | Delete Customer by ID |
| [**getCustomer()**](CustomersApi.md#getCustomer) | **GET** /aggregation/v1/customers/{customerId} | Get Customer by ID |
| [**getCustomerWithAppData()**](CustomersApi.md#getCustomerWithAppData) | **GET** /aggregation/v1/customers/{customerId}/application | Get Customer With App Data by ID |
| [**getCustomers()**](CustomersApi.md#getCustomers) | **GET** /aggregation/v1/customers | Get Customers |
| [**modifyCustomer()**](CustomersApi.md#modifyCustomer) | **PUT** /aggregation/v1/customers/{customerId} | Modify Customer by ID |


## `addCustomer()`

```php
addCustomer($new_customer): \OpenAPI\Client\Model\CreatedCustomer
```

Add Customer

Enroll an active customer, which is the actual owner of one or more real-world accounts. This is a billable customer.  Active customers must use the \"FinBank Billable\" profiles for testing purposes.   _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_customer = new \OpenAPI\Client\Model\NewCustomer(); // \OpenAPI\Client\Model\NewCustomer

try {
    $result = $apiInstance->addCustomer($new_customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->addCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_customer** | [**\OpenAPI\Client\Model\NewCustomer**](../Model/NewCustomer.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreatedCustomer**](../Model/CreatedCustomer.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addTestingCustomer()`

```php
addTestingCustomer($new_customer): \OpenAPI\Client\Model\CreatedCustomer
```

Add Testing Customer

Enroll a testing customer (Test Drive accounts).  For using testing customers with FinBank OAuth, you must register a test application with your systems engineer or account manager. Then, use that testing `applicationId` when creating testing customers.  Testing Customers can access FinBank profiles (except \"FinBank Billable\" profiles), and cannot access live financial institutions.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_customer = new \OpenAPI\Client\Model\NewCustomer(); // \OpenAPI\Client\Model\NewCustomer

try {
    $result = $apiInstance->addTestingCustomer($new_customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->addTestingCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_customer** | [**\OpenAPI\Client\Model\NewCustomer**](../Model/NewCustomer.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreatedCustomer**](../Model/CreatedCustomer.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomer()`

```php
deleteCustomer($customer_id)
```

Delete Customer by ID

Completely remove a customer from the system. This will remove the customer and all associated accounts and transactions.  ⚠️ Use this service carefully! It will not pause for confirmation before performing the operation!  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID

try {
    $apiInstance->deleteCustomer($customer_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->deleteCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |

### Return type

void (empty response body)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomer()`

```php
getCustomer($customer_id): \OpenAPI\Client\Model\Customer
```

Get Customer by ID

Retrieve a customer by ID.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID

try {
    $result = $apiInstance->getCustomer($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |

### Return type

[**\OpenAPI\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerWithAppData()`

```php
getCustomerWithAppData($customer_id): \OpenAPI\Client\Model\CustomerWithAppData
```

Get Customer With App Data by ID

Retrieve a customer along with additional details about the OAuth application.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID

try {
    $result = $apiInstance->getCustomerWithAppData($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomerWithAppData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |

### Return type

[**\OpenAPI\Client\Model\CustomerWithAppData**](../Model/CustomerWithAppData.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomers()`

```php
getCustomers($username, $type, $search, $start, $limit): \OpenAPI\Client\Model\Customers
```

Get Customers

Find all customers enrolled by the current partner, where the search text is found in the customer's username or any combination of `firstName` and `lastName` fields. If no search text is provided, all customers will be returned.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = customerusername1; // string | Username for exact match (will return 0 or 1 record)
$type = active; // string | \"testing\" or \"active\" to return only customers of that type, or leave empty to return all customers
$search = Search Value; // string | The text you wish to match. Leave this empty if you wish to return all customers. Must be URL-encoded (see: [Handling Spaces in Queries](https://developer.mastercard.com/open-banking-us/documentation/codes-and-formats/)).
$start = 1; // int | Index of the page of results to return
$limit = 1; // int | Maximum number of results per page

try {
    $result = $apiInstance->getCustomers($username, $type, $search, $start, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| Username for exact match (will return 0 or 1 record) | [optional] |
| **type** | **string**| \&quot;testing\&quot; or \&quot;active\&quot; to return only customers of that type, or leave empty to return all customers | [optional] |
| **search** | **string**| The text you wish to match. Leave this empty if you wish to return all customers. Must be URL-encoded (see: [Handling Spaces in Queries](https://developer.mastercard.com/open-banking-us/documentation/codes-and-formats/)). | [optional] |
| **start** | **int**| Index of the page of results to return | [optional] [default to 1] |
| **limit** | **int**| Maximum number of results per page | [optional] [default to 25] |

### Return type

[**\OpenAPI\Client\Model\Customers**](../Model/Customers.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyCustomer()`

```php
modifyCustomer($customer_id, $customer_update)
```

Modify Customer by ID

Modify an enrolled customer by ID.  You must specify either `firstName`, `lastName`, or both in the request.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$customer_update = new \OpenAPI\Client\Model\CustomerUpdate(); // \OpenAPI\Client\Model\CustomerUpdate

try {
    $apiInstance->modifyCustomer($customer_id, $customer_update);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->modifyCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **customer_update** | [**\OpenAPI\Client\Model\CustomerUpdate**](../Model/CustomerUpdate.md)|  | |

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
