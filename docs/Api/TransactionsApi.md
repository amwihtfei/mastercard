# OpenAPI\Client\TransactionsApi

All URIs are relative to https://api.finicity.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**generateTransactionsReport()**](TransactionsApi.md#generateTransactionsReport) | **POST** /decisioning/v2/customers/{customerId}/transactions | Generate Transactions Report |
| [**getAllCustomerTransactions()**](TransactionsApi.md#getAllCustomerTransactions) | **GET** /aggregation/v3/customers/{customerId}/transactions | Get All Customer Transactions |
| [**getCustomerAccountTransactions()**](TransactionsApi.md#getCustomerAccountTransactions) | **GET** /aggregation/v4/customers/{customerId}/accounts/{accountId}/transactions | Get Customer Account Transactions |
| [**getCustomerTransaction()**](TransactionsApi.md#getCustomerTransaction) | **GET** /aggregation/v2/customers/{customerId}/transactions/{transactionId} | Get Customer Transaction by ID |
| [**loadHistoricTransactionsForCustomerAccount()**](TransactionsApi.md#loadHistoricTransactionsForCustomerAccount) | **POST** /aggregation/v1/customers/{customerId}/accounts/{accountId}/transactions/historic | Load Historic Transactions for Customer Account |


## `generateTransactionsReport()`

```php
generateTransactionsReport($customer_id, $to_date, $transactions_report_constraints, $callback_url, $include_pending): \OpenAPI\Client\Model\TransactionsReportAck
```

Generate Transactions Report

Generate a Transaction Report for the given accounts under the given customer. This service retrieves up to 24 months of transaction history for the given customer. It then uses this information to generate the Transaction Report.  This is a premium service. A billable event will be created upon the successful generation of the Transactions Report.   Before calling this API, a consumer must be created for the given customer ID (see Consumers APIs).  There cannot be more than 24 months between `fromDate` and `toDate`.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$to_date = 1607450357; // int | A end date
$transactions_report_constraints = new \OpenAPI\Client\Model\TransactionsReportConstraints(); // \OpenAPI\Client\Model\TransactionsReportConstraints
$callback_url = https://finicity-test/webhook; // string | A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code.
$include_pending = false; // bool | If pending transactions must be included

try {
    $result = $apiInstance->generateTransactionsReport($customer_id, $to_date, $transactions_report_constraints, $callback_url, $include_pending);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->generateTransactionsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **to_date** | **int**| A end date | |
| **transactions_report_constraints** | [**\OpenAPI\Client\Model\TransactionsReportConstraints**](../Model/TransactionsReportConstraints.md)|  | |
| **callback_url** | **string**| A Report Listener URL to receive notifications. The webhook must respond to the Finicity API with a 2xx HTTP status code. | [optional] |
| **include_pending** | **bool**| If pending transactions must be included | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\TransactionsReportAck**](../Model/TransactionsReportAck.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllCustomerTransactions()`

```php
getAllCustomerTransactions($customer_id, $from_date, $to_date, $start, $limit, $sort, $include_pending): \OpenAPI\Client\Model\Transactions
```

Get All Customer Transactions

Get all transactions available for this customer within the given date range, across all accounts. This service supports paging and sorting by `transactionDate` (or `postedDate` if no transaction date is provided), with a maximum of 1000 transactions per request.  Standard consumer aggregation provides up to 180 days of transactions prior to the date each account was added to the Finicity system. To access older transactions, you must first call the service Load Historic Transactions for Account.  There is no limit for the size of the window between `fromDate` and `toDate`, however, the maximum number of transactions returned on one page is 1000.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$from_date = 1607450357; // int | A start date
$to_date = 1607450357; // int | A end date
$start = 1; // int | Index of the page of results to return
$limit = 1; // int | Maximum number of results per page
$sort = desc; // string | Date sort order: \"asc\" for ascending, \"desc\" for descending
$include_pending = false; // bool | If pending transactions must be included

try {
    $result = $apiInstance->getAllCustomerTransactions($customer_id, $from_date, $to_date, $start, $limit, $sort, $include_pending);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getAllCustomerTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **from_date** | **int**| A start date | |
| **to_date** | **int**| A end date | |
| **start** | **int**| Index of the page of results to return | [optional] [default to 1] |
| **limit** | **int**| Maximum number of results per page | [optional] [default to 25] |
| **sort** | **string**| Date sort order: \&quot;asc\&quot; for ascending, \&quot;desc\&quot; for descending | [optional] [default to &#39;desc&#39;] |
| **include_pending** | **bool**| If pending transactions must be included | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\Transactions**](../Model/Transactions.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerAccountTransactions()`

```php
getCustomerAccountTransactions($customer_id, $account_id, $from_date, $to_date, $start, $limit, $sort, $include_pending): \OpenAPI\Client\Model\Transactions
```

Get Customer Account Transactions

Get all transactions available for this customer account within the given date range. This service supports paging and sorting by `transactionDate` (or `postedDate` if no transaction date is provided), with a maximum of 1000 transactions per request.  Standard consumer aggregation provides up to 180 days of transactions prior to the date each account was added to the Finicity system. To access older transactions, you must first call the Cash Flow Verification service Load Historic Transactions for Account.  There is no limit for the size of the window between `fromDate` and `toDate`, however, the maximum number of transactions returned on one page is 1000.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$account_id = 5011648377; // string | The account ID
$from_date = 1607450357; // int | A start date
$to_date = 1607450357; // int | A end date
$start = 1; // int | Index of the page of results to return
$limit = 1; // int | Maximum number of results per page
$sort = desc; // string | Date sort order: \"asc\" for ascending, \"desc\" for descending
$include_pending = false; // bool | If pending transactions must be included

try {
    $result = $apiInstance->getCustomerAccountTransactions($customer_id, $account_id, $from_date, $to_date, $start, $limit, $sort, $include_pending);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getCustomerAccountTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **account_id** | **string**| The account ID | |
| **from_date** | **int**| A start date | |
| **to_date** | **int**| A end date | |
| **start** | **int**| Index of the page of results to return | [optional] [default to 1] |
| **limit** | **int**| Maximum number of results per page | [optional] [default to 25] |
| **sort** | **string**| Date sort order: \&quot;asc\&quot; for ascending, \&quot;desc\&quot; for descending | [optional] [default to &#39;desc&#39;] |
| **include_pending** | **bool**| If pending transactions must be included | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\Transactions**](../Model/Transactions.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerTransaction()`

```php
getCustomerTransaction($customer_id, $transaction_id): \OpenAPI\Client\Model\Transaction
```

Get Customer Transaction by ID

Get details for the given transaction.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$transaction_id = 21284820852; // int | A transaction ID

try {
    $result = $apiInstance->getCustomerTransaction($customer_id, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getCustomerTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **transaction_id** | **int**| A transaction ID | |

### Return type

[**\OpenAPI\Client\Model\Transaction**](../Model/Transaction.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loadHistoricTransactionsForCustomerAccount()`

```php
loadHistoricTransactionsForCustomerAccount($customer_id, $account_id)
```

Load Historic Transactions for Customer Account

Connect to the account's financial institution and load up to 24 months of historic transactions for the account. Length of history varies by institution.  This is a premium service. The billable event is a call to this service specifying a customer ID that has not been seen before by this service. (If this service is called multiple times with the same customer ID, to load transactions from multiple accounts, only one billable event has occurred.)  The recommended timeout setting for this request is 180 seconds in order to receive a response. However, you can terminate the connection after making the call the operation will still complete. You will have to pull the account records to check for an updated aggregation attempt date to know when the refresh is complete.  The date range sent to the institution is calculated from the account's `createdDate`. This means that calling this service a second time for the same account normally will not add any new transactions for the account. For this reason, a second call to this service for a known account ID will usually return immediately.  In a few specific scenarios, it may be desirable to force a second connection to the institution for a known account ID. Some examples are:  * The institution's policy has changed, making more transactions available * Finicity has now added a longer transaction history support for the institution * The first call encountered an error, and the resulting Aggregation Ticket has now been fixed by the Finicity Support Team  In these cases, the POST request can contain the parameter `force=true` in the request body to force the second connection.  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$account_id = 5011648377; // string | The account ID

try {
    $apiInstance->loadHistoricTransactionsForCustomerAccount($customer_id, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->loadHistoricTransactionsForCustomerAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **account_id** | **string**| The account ID | |

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
