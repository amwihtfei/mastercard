# OpenAPI\Client\AppRegistrationApi

All URIs are relative to https://api.finicity.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAppRegistrationStatus()**](AppRegistrationApi.md#getAppRegistrationStatus) | **GET** /aggregation/v2/partners/applications | Get App Registration Status |
| [**migrateInstitutionLoginAccounts()**](AppRegistrationApi.md#migrateInstitutionLoginAccounts) | **PUT** /aggregation/v2/customers/{customerId}/institutionLogins/{institutionLoginId}/migration | Migrate Institution Login Accounts |
| [**modifyAppRegistration()**](AppRegistrationApi.md#modifyAppRegistration) | **PUT** /aggregation/v1/partners/applications/{preAppId} | Modify App Registration |
| [**registerApp()**](AppRegistrationApi.md#registerApp) | **POST** /aggregation/v1/partners/applications | Register App |
| [**setCustomerAppID()**](AppRegistrationApi.md#setCustomerAppID) | **PUT** /aggregation/v1/customers/{customerId}/applications/{applicationId} | Set Customer App ID |


## `getAppRegistrationStatus()`

```php
getAppRegistrationStatus($pre_app_id, $application_id, $status, $app_name, $submitted_date, $modified_date, $page, $page_size): \OpenAPI\Client\Model\AppStatuses
```

Get App Registration Status

Get the status of your application registration(s).  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\AppRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pre_app_id = 2581; // string | The application registration tracking ID
$application_id = 123456789; // string | The application ID
$status = P; // string | Look up app registration requests by status
$app_name = Awesome Budget App; // string | Look up app registration requests by app name
$submitted_date = 1607450357; // int | Look up app registration requests by the date they were submitted
$modified_date = 1607450357; // int | Look up app registration requests by the date the request was updated. This can be used to determine when a request was updated to \"A\" or \"R\".
$page = 1; // int | Index of the page of results to return
$page_size = 20; // int | Maximum number of results per page

try {
    $result = $apiInstance->getAppRegistrationStatus($pre_app_id, $application_id, $status, $app_name, $submitted_date, $modified_date, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppRegistrationApi->getAppRegistrationStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pre_app_id** | **string**| The application registration tracking ID | [optional] |
| **application_id** | **string**| The application ID | [optional] |
| **status** | **string**| Look up app registration requests by status | [optional] |
| **app_name** | **string**| Look up app registration requests by app name | [optional] |
| **submitted_date** | **int**| Look up app registration requests by the date they were submitted | [optional] |
| **modified_date** | **int**| Look up app registration requests by the date the request was updated. This can be used to determine when a request was updated to \&quot;A\&quot; or \&quot;R\&quot;. | [optional] |
| **page** | **int**| Index of the page of results to return | [optional] [default to 1] |
| **page_size** | **int**| Maximum number of results per page | [optional] [default to 1] |

### Return type

[**\OpenAPI\Client\Model\AppStatuses**](../Model/AppStatuses.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `migrateInstitutionLoginAccounts()`

```php
migrateInstitutionLoginAccounts($customer_id, $institution_login_id): \OpenAPI\Client\Model\CustomerAccounts
```

Migrate Institution Login Accounts

The `institutionLoginId` parameter uses Finicity's internal FI mapping to move accounts from the current FI legacy connection to the new OAuth FI connection.  This API returns a list of accounts for the given institution login ID.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\AppRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$institution_login_id = 1007302745; // string | The institution login ID

try {
    $result = $apiInstance->migrateInstitutionLoginAccounts($customer_id, $institution_login_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppRegistrationApi->migrateInstitutionLoginAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **institution_login_id** | **string**| The institution login ID | |

### Return type

[**\OpenAPI\Client\Model\CustomerAccounts**](../Model/CustomerAccounts.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyAppRegistration()`

```php
modifyAppRegistration($pre_app_id, $application): \OpenAPI\Client\Model\RegisteredApplication
```

Modify App Registration

Update a registered application.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\AppRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pre_app_id = 2581; // string | The application registration tracking ID
$application = new \OpenAPI\Client\Model\Application(); // \OpenAPI\Client\Model\Application

try {
    $result = $apiInstance->modifyAppRegistration($pre_app_id, $application);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppRegistrationApi->modifyAppRegistration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pre_app_id** | **string**| The application registration tracking ID | |
| **application** | [**\OpenAPI\Client\Model\Application**](../Model/Application.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RegisteredApplication**](../Model/RegisteredApplication.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `registerApp()`

```php
registerApp($application): \OpenAPI\Client\Model\RegisteredApplication
```

Register App

Register a new application to access financial institutions using OAuth connections.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\AppRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application = new \OpenAPI\Client\Model\Application(); // \OpenAPI\Client\Model\Application

try {
    $result = $apiInstance->registerApp($application);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppRegistrationApi->registerApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application** | [**\OpenAPI\Client\Model\Application**](../Model/Application.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RegisteredApplication**](../Model/RegisteredApplication.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setCustomerAppID()`

```php
setCustomerAppID($customer_id, $application_id)
```

Set Customer App ID

If you have multiple applications for a single client, and you want to register their applications to access financial institutions using OAuth connections, then use this API to assign applications to an existing customer.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\AppRegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$application_id = 123456789; // string | The application ID

try {
    $apiInstance->setCustomerAppID($customer_id, $application_id);
} catch (Exception $e) {
    echo 'Exception when calling AppRegistrationApi->setCustomerAppID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **application_id** | **string**| The application ID | |

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
