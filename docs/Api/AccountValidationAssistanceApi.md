# OpenAPI\Client\AccountValidationAssistanceApi

All URIs are relative to https://api.finicity.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getMicroDepositsDetails()**](AccountValidationAssistanceApi.md#getMicroDepositsDetails) | **GET** /microentry/v1/customers/{customerId}/accounts/{accountId} | Get Micro Entries Details |
| [**initiateMicroAmountDeposits()**](AccountValidationAssistanceApi.md#initiateMicroAmountDeposits) | **POST** /microentry/v1/customers/{customerId} | Initiate Micro Entries |
| [**verifyMicroAmountDeposits()**](AccountValidationAssistanceApi.md#verifyMicroAmountDeposits) | **POST** /microentry/v1/customers/{customerId}/accounts/{accountId}/amounts | Verify Micro Entries |


## `getMicroDepositsDetails()`

```php
getMicroDepositsDetails($customer_id, $account_id): \OpenAPI\Client\Model\MicroDepositDetails
```

Get Micro Entries Details

Fetch the micro entries details. `customerId` and `accountId` are the identifiers of the customer and account receiving the micro entries.    _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\AccountValidationAssistanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$account_id = 5011648377; // string | The account ID

try {
    $result = $apiInstance->getMicroDepositsDetails($customer_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountValidationAssistanceApi->getMicroDepositsDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **account_id** | **string**| The account ID | |

### Return type

[**\OpenAPI\Client\Model\MicroDepositDetails**](../Model/MicroDepositDetails.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `initiateMicroAmountDeposits()`

```php
initiateMicroAmountDeposits($customer_id, $micro_deposit_initiation): \OpenAPI\Client\Model\InitiatedMicroDeposit
```

Initiate Micro Entries

Initiate the micro entries to customer's account.  Two random micro amounts less than a dollar each will be deposited to provided customer's account.    _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\AccountValidationAssistanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$micro_deposit_initiation = new \OpenAPI\Client\Model\MicroDepositInitiation(); // \OpenAPI\Client\Model\MicroDepositInitiation

try {
    $result = $apiInstance->initiateMicroAmountDeposits($customer_id, $micro_deposit_initiation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountValidationAssistanceApi->initiateMicroAmountDeposits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **micro_deposit_initiation** | [**\OpenAPI\Client\Model\MicroDepositInitiation**](../Model/MicroDepositInitiation.md)|  | |

### Return type

[**\OpenAPI\Client\Model\InitiatedMicroDeposit**](../Model/InitiatedMicroDeposit.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyMicroAmountDeposits()`

```php
verifyMicroAmountDeposits($customer_id, $account_id, $micro_deposit_verification): \OpenAPI\Client\Model\VerifiedMicroDeposit
```

Verify Micro Entries

Verify the micro entries as received by customer in customer's account. Customer needs to verify the micro amounts received in customer's account. `customerId` and `accountId` are the identifiers of the customer and account  receiving the micro entries.    _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\AccountValidationAssistanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$account_id = 5011648377; // string | The account ID
$micro_deposit_verification = new \OpenAPI\Client\Model\MicroDepositVerification(); // \OpenAPI\Client\Model\MicroDepositVerification

try {
    $result = $apiInstance->verifyMicroAmountDeposits($customer_id, $account_id, $micro_deposit_verification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountValidationAssistanceApi->verifyMicroAmountDeposits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **account_id** | **string**| The account ID | |
| **micro_deposit_verification** | [**\OpenAPI\Client\Model\MicroDepositVerification**](../Model/MicroDepositVerification.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VerifiedMicroDeposit**](../Model/VerifiedMicroDeposit.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
