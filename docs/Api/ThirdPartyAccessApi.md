# OpenAPI\Client\ThirdPartyAccessApi

All URIs are relative to https://api.finicity.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**generateThirdPartyAccessKey()**](ThirdPartyAccessApi.md#generateThirdPartyAccessKey) | **POST** /aggregation/v1/partners/accessKey | Generate Third Party Access Key |
| [**revokeThirdPartyAccessKey()**](ThirdPartyAccessApi.md#revokeThirdPartyAccessKey) | **DELETE** /aggregation/v1/partners/accessKey/{consentReceiptId} | Revoke Third Party Access |
| [**updateThirdPartyAccessKey()**](ThirdPartyAccessApi.md#updateThirdPartyAccessKey) | **PUT** /aggregation/v1/partners/accessKey/{consentReceiptId} | Update Third Party Access |


## `generateThirdPartyAccessKey()`

```php
generateThirdPartyAccessKey($third_party_access_key_data): \OpenAPI\Client\Model\ThirdPartyAccessKeyReceiptData
```

Generate Third Party Access Key

Generate access key for third party partners. A partner can provide access to third party partners with this access key.

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


$apiInstance = new OpenAPI\Client\Api\ThirdPartyAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$third_party_access_key_data = new \OpenAPI\Client\Model\ThirdPartyAccessKeyData(); // \OpenAPI\Client\Model\ThirdPartyAccessKeyData

try {
    $result = $apiInstance->generateThirdPartyAccessKey($third_party_access_key_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThirdPartyAccessApi->generateThirdPartyAccessKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **third_party_access_key_data** | [**\OpenAPI\Client\Model\ThirdPartyAccessKeyData**](../Model/ThirdPartyAccessKeyData.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ThirdPartyAccessKeyReceiptData**](../Model/ThirdPartyAccessKeyReceiptData.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokeThirdPartyAccessKey()`

```php
revokeThirdPartyAccessKey($consent_receipt_id)
```

Revoke Third Party Access

Revoke access of third party partners

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


$apiInstance = new OpenAPI\Client\Api\ThirdPartyAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent_receipt_id = cr_4pfI3r1X8aOHrDDwrwC01NHFxOXlT1; // string | Third party access key receipt ID

try {
    $apiInstance->revokeThirdPartyAccessKey($consent_receipt_id);
} catch (Exception $e) {
    echo 'Exception when calling ThirdPartyAccessApi->revokeThirdPartyAccessKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **consent_receipt_id** | **string**| Third party access key receipt ID | |

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

## `updateThirdPartyAccessKey()`

```php
updateThirdPartyAccessKey($consent_receipt_id, $third_party_access_key_data): \OpenAPI\Client\Model\ThirdPartyAccessKeyReceiptData
```

Update Third Party Access

Update access for third party partners

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


$apiInstance = new OpenAPI\Client\Api\ThirdPartyAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consent_receipt_id = cr_4pfI3r1X8aOHrDDwrwC01NHFxOXlT1; // string | Third party access key receipt ID
$third_party_access_key_data = new \OpenAPI\Client\Model\ThirdPartyAccessKeyData(); // \OpenAPI\Client\Model\ThirdPartyAccessKeyData

try {
    $result = $apiInstance->updateThirdPartyAccessKey($consent_receipt_id, $third_party_access_key_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThirdPartyAccessApi->updateThirdPartyAccessKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **consent_receipt_id** | **string**| Third party access key receipt ID | |
| **third_party_access_key_data** | [**\OpenAPI\Client\Model\ThirdPartyAccessKeyData**](../Model/ThirdPartyAccessKeyData.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ThirdPartyAccessKeyReceiptData**](../Model/ThirdPartyAccessKeyReceiptData.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
