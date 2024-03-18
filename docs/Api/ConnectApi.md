# OpenAPI\Client\ConnectApi

All URIs are relative to https://api.finicity.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**generateConnectUrl()**](ConnectApi.md#generateConnectUrl) | **POST** /connect/v2/generate | Generate Connect URL |
| [**generateFixConnectUrl()**](ConnectApi.md#generateFixConnectUrl) | **POST** /connect/v2/generate/fix | Generate Fix Connect URL |
| [**generateJointBorrowerConnectUrl()**](ConnectApi.md#generateJointBorrowerConnectUrl) | **POST** /connect/v2/generate/jointBorrower | Generate Connect URL - Joint Borrower |
| [**generateLiteConnectUrl()**](ConnectApi.md#generateLiteConnectUrl) | **POST** /connect/v2/generate/lite | Generate Lite Connect URL |
| [**sendConnectEmail()**](ConnectApi.md#sendConnectEmail) | **POST** /connect/v2/send/email | Send Connect Email |
| [**sendJointBorrowerConnectEmail()**](ConnectApi.md#sendJointBorrowerConnectEmail) | **POST** /connect/v2/send/email/jointBorrower | Send Connect Email - Joint Borrower |
| [**verifyMicroEntryMicrodeposit()**](ConnectApi.md#verifyMicroEntryMicrodeposit) | **POST** /connect/v2/generate/microentry/verify | Account Validation Assistant User verification of microdeposits |


## `generateConnectUrl()`

```php
generateConnectUrl($connect_parameters): \OpenAPI\Client\Model\ConnectUrl
```

Generate Connect URL

Generate a Connect 2.0 URL link to add within your own applications.  Optional Parameters: * `experience`: Configure different customer experiences per Connect session by changing the brand, color, logo, icon, the type of credit decisioning report to generate after the session ends, and more. * `language`: By default, the Connect application is in English. You don't need to pass  this parameter unless you want to translate Connect into one of our supported languages.    * Spanish (United States)   * French (Canada)   MVS Developers: You can pre-populate the consumer's SSN on the Find employment records page at the beginning of the MVS payroll app. Pass the SSN value for the consumer in the body of the request call.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$connect_parameters = new \OpenAPI\Client\Model\ConnectParameters(); // \OpenAPI\Client\Model\ConnectParameters

try {
    $result = $apiInstance->generateConnectUrl($connect_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->generateConnectUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **connect_parameters** | [**\OpenAPI\Client\Model\ConnectParameters**](../Model/ConnectParameters.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ConnectUrl**](../Model/ConnectUrl.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateFixConnectUrl()`

```php
generateFixConnectUrl($fix_connect_parameters): \OpenAPI\Client\Model\ConnectUrl
```

Generate Fix Connect URL

Use the Connect Fix API when the following conditions occur: * The connection to the user's financial institution is lost * The user's credentials were updated (for any number of reasons) * The user's MFA challenge has expired  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fix_connect_parameters = new \OpenAPI\Client\Model\FixConnectParameters(); // \OpenAPI\Client\Model\FixConnectParameters

try {
    $result = $apiInstance->generateFixConnectUrl($fix_connect_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->generateFixConnectUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fix_connect_parameters** | [**\OpenAPI\Client\Model\FixConnectParameters**](../Model/FixConnectParameters.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ConnectUrl**](../Model/ConnectUrl.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateJointBorrowerConnectUrl()`

```php
generateJointBorrowerConnectUrl($connect_joint_borrower_parameters): \OpenAPI\Client\Model\ConnectUrl
```

Generate Connect URL - Joint Borrower

Same as Connect Full (`POST /connect/v2/generate`) but for joint borrowers.  MVS prompts both the primary and joint borrower to enter each of their financial, payroll, and paystub information in the same Connect session.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$connect_joint_borrower_parameters = new \OpenAPI\Client\Model\ConnectJointBorrowerParameters(); // \OpenAPI\Client\Model\ConnectJointBorrowerParameters

try {
    $result = $apiInstance->generateJointBorrowerConnectUrl($connect_joint_borrower_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->generateJointBorrowerConnectUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **connect_joint_borrower_parameters** | [**\OpenAPI\Client\Model\ConnectJointBorrowerParameters**](../Model/ConnectJointBorrowerParameters.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ConnectUrl**](../Model/ConnectUrl.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateLiteConnectUrl()`

```php
generateLiteConnectUrl($lite_connect_parameters): \OpenAPI\Client\Model\ConnectUrl
```

Generate Lite Connect URL

Connect Lite is a variation of Connect Full (`POST /connect/v2/generate`), which has a limited set of features. * Sign in, user's credentials, and Multi-Factor Authentication (MFA) * No user account management  The Connect Web SDK isn't a requirement when using Connect lite. However, if you want to use the SDK events, routes, and user events, then you must integrate with the Connect Web SDK.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lite_connect_parameters = new \OpenAPI\Client\Model\LiteConnectParameters(); // \OpenAPI\Client\Model\LiteConnectParameters

try {
    $result = $apiInstance->generateLiteConnectUrl($lite_connect_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->generateLiteConnectUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lite_connect_parameters** | [**\OpenAPI\Client\Model\LiteConnectParameters**](../Model/LiteConnectParameters.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ConnectUrl**](../Model/ConnectUrl.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendConnectEmail()`

```php
sendConnectEmail($connect_email_parameters): \OpenAPI\Client\Model\ConnectEmailUrl
```

Send Connect Email

Same as Connect Full (`POST /connect/v2/generate`) but send a Connect email to a consumer.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$connect_email_parameters = new \OpenAPI\Client\Model\ConnectEmailParameters(); // \OpenAPI\Client\Model\ConnectEmailParameters

try {
    $result = $apiInstance->sendConnectEmail($connect_email_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->sendConnectEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **connect_email_parameters** | [**\OpenAPI\Client\Model\ConnectEmailParameters**](../Model/ConnectEmailParameters.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ConnectEmailUrl**](../Model/ConnectEmailUrl.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendJointBorrowerConnectEmail()`

```php
sendJointBorrowerConnectEmail($connect_joint_borrower_email_parameters): \OpenAPI\Client\Model\ConnectEmailUrl
```

Send Connect Email - Joint Borrower

Same as Connect Joint Borrower (`POST /connect/v2/generate/jointBorrower`) but send a Connect email  to at least one of the joint borrower's email addresses.   When the consumer opens the email, MVS prompts both the primary and joint borrower to enter each of their financial, payroll, and paystub information in the same Connect session.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$connect_joint_borrower_email_parameters = new \OpenAPI\Client\Model\ConnectJointBorrowerEmailParameters(); // \OpenAPI\Client\Model\ConnectJointBorrowerEmailParameters

try {
    $result = $apiInstance->sendJointBorrowerConnectEmail($connect_joint_borrower_email_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->sendJointBorrowerConnectEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **connect_joint_borrower_email_parameters** | [**\OpenAPI\Client\Model\ConnectJointBorrowerEmailParameters**](../Model/ConnectJointBorrowerEmailParameters.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ConnectEmailUrl**](../Model/ConnectEmailUrl.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyMicroEntryMicrodeposit()`

```php
verifyMicroEntryMicrodeposit($micro_entry_verify_request_parameter): \OpenAPI\Client\Model\ConnectUrl
```

Account Validation Assistant User verification of microdeposits

The UI re-engages the consumer to enter two microdeposit amounts found in their account and validates them.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\ConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$micro_entry_verify_request_parameter = new \OpenAPI\Client\Model\MicroEntryVerifyRequestParameter(); // \OpenAPI\Client\Model\MicroEntryVerifyRequestParameter

try {
    $result = $apiInstance->verifyMicroEntryMicrodeposit($micro_entry_verify_request_parameter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectApi->verifyMicroEntryMicrodeposit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **micro_entry_verify_request_parameter** | [**\OpenAPI\Client\Model\MicroEntryVerifyRequestParameter**](../Model/MicroEntryVerifyRequestParameter.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ConnectUrl**](../Model/ConnectUrl.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
