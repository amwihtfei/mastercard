# OpenAPI\Client\InstitutionsApi

All URIs are relative to https://api.finicity.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCertifiedInstitutions()**](InstitutionsApi.md#getCertifiedInstitutions) | **GET** /institution/v2/certifiedInstitutions | Get Certified Institutions |
| [**getCertifiedInstitutionsWithRSSD()**](InstitutionsApi.md#getCertifiedInstitutionsWithRSSD) | **GET** /institution/v2/certifiedInstitutions/rssd | Get Certified Institutions With RSSD |
| [**getInstitution()**](InstitutionsApi.md#getInstitution) | **GET** /institution/v2/institutions/{institutionId} | Get Institution by ID |
| [**getInstitutionBranding()**](InstitutionsApi.md#getInstitutionBranding) | **GET** /institution/v2/institutions/{institutionId}/branding | Get Institution Branding by ID |
| [**getInstitutions()**](InstitutionsApi.md#getInstitutions) | **GET** /institution/v2/institutions | Get Institutions |


## `getCertifiedInstitutions()`

```php
getCertifiedInstitutions($search, $start, $limit, $type, $supported_countries): \OpenAPI\Client\Model\CertifiedInstitutions
```

Get Certified Institutions

Search for financial institutions by certified product.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\InstitutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = finbank; // string | Search term (financial institution `name` field). Leave empty for all FIs.
$start = 1; // int | Index of the page of results to return
$limit = 1; // int | Maximum number of results per page
$type = voa; // string | A product type: \"transAgg\", \"ach\", \"stateAgg\", \"voi\", \"voa\", \"aha\", \"availBalance\", \"accountOwner\"
$supported_countries = us; // string[] | A list of country codes, '*' for all countries.

try {
    $result = $apiInstance->getCertifiedInstitutions($search, $start, $limit, $type, $supported_countries);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionsApi->getCertifiedInstitutions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**| Search term (financial institution &#x60;name&#x60; field). Leave empty for all FIs. | [optional] |
| **start** | **int**| Index of the page of results to return | [optional] [default to 1] |
| **limit** | **int**| Maximum number of results per page | [optional] [default to 25] |
| **type** | **string**| A product type: \&quot;transAgg\&quot;, \&quot;ach\&quot;, \&quot;stateAgg\&quot;, \&quot;voi\&quot;, \&quot;voa\&quot;, \&quot;aha\&quot;, \&quot;availBalance\&quot;, \&quot;accountOwner\&quot; | [optional] |
| **supported_countries** | [**string[]**](../Model/string.md)| A list of country codes, &#39;*&#39; for all countries. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CertifiedInstitutions**](../Model/CertifiedInstitutions.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCertifiedInstitutionsWithRSSD()`

```php
getCertifiedInstitutionsWithRSSD($search, $start, $limit, $type, $supported_countries): \OpenAPI\Client\Model\CertifiedInstitutions
```

Get Certified Institutions With RSSD

Search for certified financial institutions w/RSSD.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\InstitutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = finbank; // string | Search term (financial institution `name` field). Leave empty for all FIs.
$start = 1; // int | Index of the page of results to return
$limit = 1; // int | Maximum number of results per page
$type = voa; // string | A product type: \"transAgg\", \"ach\", \"stateAgg\", \"voi\", \"voa\", \"aha\", \"availBalance\", \"accountOwner\"
$supported_countries = us; // string[] | A list of country codes, '*' for all countries.

try {
    $result = $apiInstance->getCertifiedInstitutionsWithRSSD($search, $start, $limit, $type, $supported_countries);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionsApi->getCertifiedInstitutionsWithRSSD: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**| Search term (financial institution &#x60;name&#x60; field). Leave empty for all FIs. | [optional] |
| **start** | **int**| Index of the page of results to return | [optional] [default to 1] |
| **limit** | **int**| Maximum number of results per page | [optional] [default to 25] |
| **type** | **string**| A product type: \&quot;transAgg\&quot;, \&quot;ach\&quot;, \&quot;stateAgg\&quot;, \&quot;voi\&quot;, \&quot;voa\&quot;, \&quot;aha\&quot;, \&quot;availBalance\&quot;, \&quot;accountOwner\&quot; | [optional] |
| **supported_countries** | [**string[]**](../Model/string.md)| A list of country codes, &#39;*&#39; for all countries. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CertifiedInstitutions**](../Model/CertifiedInstitutions.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInstitution()`

```php
getInstitution($institution_id): \OpenAPI\Client\Model\InstitutionWrapper
```

Get Institution by ID

Get financial institution details by ID.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\InstitutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$institution_id = 4222; // int | The institution ID

try {
    $result = $apiInstance->getInstitution($institution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionsApi->getInstitution: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **institution_id** | **int**| The institution ID | |

### Return type

[**\OpenAPI\Client\Model\InstitutionWrapper**](../Model/InstitutionWrapper.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInstitutionBranding()`

```php
getInstitutionBranding($institution_id): \OpenAPI\Client\Model\BrandingWrapper
```

Get Institution Branding by ID

Return the branding information for a financial institution.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\InstitutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$institution_id = 4222; // int | The institution ID

try {
    $result = $apiInstance->getInstitutionBranding($institution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionsApi->getInstitutionBranding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **institution_id** | **int**| The institution ID | |

### Return type

[**\OpenAPI\Client\Model\BrandingWrapper**](../Model/BrandingWrapper.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInstitutions()`

```php
getInstitutions($search, $start, $limit, $type, $supported_countries): \OpenAPI\Client\Model\Institutions
```

Get Institutions

Search for financial institutions.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\InstitutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = finbank; // string | Search term (financial institution `name` field). Leave empty for all FIs.
$start = 1; // int | Index of the page of results to return
$limit = 1; // int | Maximum number of results per page
$type = voa; // string | A product type: \"transAgg\", \"ach\", \"stateAgg\", \"voi\", \"voa\", \"aha\", \"availBalance\", \"accountOwner\"
$supported_countries = us; // string[] | A list of country codes, '*' for all countries.

try {
    $result = $apiInstance->getInstitutions($search, $start, $limit, $type, $supported_countries);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstitutionsApi->getInstitutions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**| Search term (financial institution &#x60;name&#x60; field). Leave empty for all FIs. | [optional] |
| **start** | **int**| Index of the page of results to return | [optional] [default to 1] |
| **limit** | **int**| Maximum number of results per page | [optional] [default to 25] |
| **type** | **string**| A product type: \&quot;transAgg\&quot;, \&quot;ach\&quot;, \&quot;stateAgg\&quot;, \&quot;voi\&quot;, \&quot;voa\&quot;, \&quot;aha\&quot;, \&quot;availBalance\&quot;, \&quot;accountOwner\&quot; | [optional] |
| **supported_countries** | [**string[]**](../Model/string.md)| A list of country codes, &#39;*&#39; for all countries. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Institutions**](../Model/Institutions.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
