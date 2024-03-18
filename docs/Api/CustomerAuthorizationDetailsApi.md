# OpenAPI\Client\CustomerAuthorizationDetailsApi

All URIs are relative to https://api.finicity.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCustomerAuthorizationDetails()**](CustomerAuthorizationDetailsApi.md#getCustomerAuthorizationDetails) | **GET** /customers/institution-logins/{institution_login_id}/authorization-details | Returns customer authorization details for the institution login identification. |


## `getCustomerAuthorizationDetails()`

```php
getCustomerAuthorizationDetails($institution_login_id): \OpenAPI\Client\Model\CustomerAuthorizationDetails
```

Returns customer authorization details for the institution login identification.

The endpoint provides customer authorization details like authorization start date, authorization end date against the requested institution login id  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\CustomerAuthorizationDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$institution_login_id = 7008461438; // int | Institution login id of the customer.

try {
    $result = $apiInstance->getCustomerAuthorizationDetails($institution_login_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAuthorizationDetailsApi->getCustomerAuthorizationDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **institution_login_id** | **int**| Institution login id of the customer. | |

### Return type

[**\OpenAPI\Client\Model\CustomerAuthorizationDetails**](../Model/CustomerAuthorizationDetails.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
