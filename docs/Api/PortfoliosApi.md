# OpenAPI\Client\PortfoliosApi

All URIs are relative to https://api.finicity.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPortfolioByConsumer()**](PortfoliosApi.md#getPortfolioByConsumer) | **GET** /decisioning/v1/consumers/{consumerId}/portfolios/{portfolioId} | Get Portfolio by Consumer |
| [**getPortfolioByCustomer()**](PortfoliosApi.md#getPortfolioByCustomer) | **GET** /decisioning/v1/customers/{customerId}/portfolios/{portfolioId} | Get Portfolio by Customer |


## `getPortfolioByConsumer()`

```php
getPortfolioByConsumer($consumer_id, $portfolio_id): \OpenAPI\Client\Model\PortfolioWithConsumerSummary
```

Get Portfolio by Consumer

Return a portfolio of most recently generated reports for each report type for a given consumer. If there are multiple reports that were generated for a report type (VOA, VOI, etc.), only the most recently generated report for the type will be returned.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\PortfoliosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consumer_id = 0bf46322c167b562e6cbed9d40e19a4c; // string | The consumer ID
$portfolio_id = y4zsgccj4xpw-6-port; // string | A portfolio ID with the portfolio version number. Using the portfolio number without a version number will return the most recently generated reports.

try {
    $result = $apiInstance->getPortfolioByConsumer($consumer_id, $portfolio_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortfoliosApi->getPortfolioByConsumer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **consumer_id** | **string**| The consumer ID | |
| **portfolio_id** | **string**| A portfolio ID with the portfolio version number. Using the portfolio number without a version number will return the most recently generated reports. | |

### Return type

[**\OpenAPI\Client\Model\PortfolioWithConsumerSummary**](../Model/PortfolioWithConsumerSummary.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPortfolioByCustomer()`

```php
getPortfolioByCustomer($customer_id, $portfolio_id): \OpenAPI\Client\Model\PortfolioSummary
```

Get Portfolio by Customer

Return a portfolio of most recently generated reports for each report type for the given customer. If there are multiple reports that were generated for a report type (VOA, VOI, etc.), only the most recently generated report for the type will be returned.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\PortfoliosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$portfolio_id = y4zsgccj4xpw-6-port; // string | A portfolio ID with the portfolio version number. Using the portfolio number without a version number will return the most recently generated reports.

try {
    $result = $apiInstance->getPortfolioByCustomer($customer_id, $portfolio_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortfoliosApi->getPortfolioByCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **portfolio_id** | **string**| A portfolio ID with the portfolio version number. Using the portfolio number without a version number will return the most recently generated reports. | |

### Return type

[**\OpenAPI\Client\Model\PortfolioSummary**](../Model/PortfolioSummary.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
