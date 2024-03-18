# OpenAPI\Client\TxPushApi

All URIs are relative to https://api.finicity.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTxPushTestTransaction()**](TxPushApi.md#createTxPushTestTransaction) | **POST** /aggregation/v1/customers/{customerId}/accounts/{accountId}/transactions | Create TxPush Test Transaction |
| [**deleteTxPushSubscription()**](TxPushApi.md#deleteTxPushSubscription) | **DELETE** /aggregation/v1/customers/{customerId}/subscriptions/{subscriptionId} | Delete TxPush Subscription |
| [**disableTxPushNotifications()**](TxPushApi.md#disableTxPushNotifications) | **DELETE** /aggregation/v1/customers/{customerId}/accounts/{accountId}/txpush | Disable TxPush Notifications |
| [**subscribeToTxPushNotifications()**](TxPushApi.md#subscribeToTxPushNotifications) | **POST** /aggregation/v1/customers/{customerId}/accounts/{accountId}/txpush | Subscribe to TxPush Notifications |


## `createTxPushTestTransaction()`

```php
createTxPushTestTransaction($customer_id, $account_id, $test_tx_push_transaction): \OpenAPI\Client\Model\CreatedTestTxPushTransaction
```

Create TxPush Test Transaction

Inject a transaction into the transaction list for a testing account. This allows an app to trigger TxPush notifications for the account in order to test the app's TxPush Listener service. This causes the platform to send one transaction event and one account event (showing that the account balance has changed). This service is only supported for testing accounts.  For additional details on this process, see [TxPush Listener Service](https://developer.mastercard.com/open-banking-us/documentation/products/manage/tx-push/#setting-up-the-txpush-listener-service).  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\TxPushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$account_id = 5011648377; // string | The account ID
$test_tx_push_transaction = new \OpenAPI\Client\Model\TestTxPushTransaction(); // \OpenAPI\Client\Model\TestTxPushTransaction

try {
    $result = $apiInstance->createTxPushTestTransaction($customer_id, $account_id, $test_tx_push_transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TxPushApi->createTxPushTestTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **account_id** | **string**| The account ID | |
| **test_tx_push_transaction** | [**\OpenAPI\Client\Model\TestTxPushTransaction**](../Model/TestTxPushTransaction.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreatedTestTxPushTransaction**](../Model/CreatedTestTxPushTransaction.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTxPushSubscription()`

```php
deleteTxPushSubscription($customer_id, $subscription_id)
```

Delete TxPush Subscription

Delete a specific subscription to TxPush notifications for the given account. This could be individual deleting the account or transactions events. No more events will be sent for that specific subscription.  For additional details on this process, see [TxPush Listener Service](https://developer.mastercard.com/open-banking-us/documentation/products/manage/tx-push/#setting-up-the-txpush-listener-service).  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\TxPushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$subscription_id = 17554874; // int | The subscription ID

try {
    $apiInstance->deleteTxPushSubscription($customer_id, $subscription_id);
} catch (Exception $e) {
    echo 'Exception when calling TxPushApi->deleteTxPushSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **subscription_id** | **int**| The subscription ID | |

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

## `disableTxPushNotifications()`

```php
disableTxPushNotifications($customer_id, $account_id)
```

Disable TxPush Notifications

Delete all TxPush subscriptions with their notifications for the given account. No more notifications will be sent for account or transaction events.  For additional details on this process, see [TxPush Listener Service](https://developer.mastercard.com/open-banking-us/documentation/products/manage/tx-push/#setting-up-the-txpush-listener-service).  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\TxPushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$account_id = 5011648377; // string | The account ID

try {
    $apiInstance->disableTxPushNotifications($customer_id, $account_id);
} catch (Exception $e) {
    echo 'Exception when calling TxPushApi->disableTxPushNotifications: ', $e->getMessage(), PHP_EOL;
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

## `subscribeToTxPushNotifications()`

```php
subscribeToTxPushNotifications($customer_id, $account_id, $tx_push_subscription_parameters): \OpenAPI\Client\Model\TxPushSubscriptions
```

Subscribe to TxPush Notifications

Register a client app's TxPush Listener to receive TxPush notifications related to the given account.  Each call to this service will return two records, one with class account and one with class transaction. Account events are sent when values change in the account's fields (such as `balance` or `interestRate`). Transaction events are sent whenever a new transaction is posted for the account. For institutions that do not provide TxPush services, notifications are sent as soon as Finicity finds a new transaction or new account data through regular aggregation processes.  The listener's URL must be secure (HTTPS) for any real-world account. In addition, the client's TxPush Listener will need to be verified. HTTP and HTTPS connections are only allowed on the standard ports 80 (HTTP) and 443 (HTTPS). The use of other ports will result with the call failing.  For additional details on this process, see [TxPush Listener Service](https://developer.mastercard.com/open-banking-us/documentation/products/manage/tx-push/#setting-up-the-txpush-listener-service).  _Supported regions_: ![🇺🇸](https://flagcdn.com/20x15/us.png)

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


$apiInstance = new OpenAPI\Client\Api\TxPushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 1005061234; // string | A customer ID
$account_id = 5011648377; // string | The account ID
$tx_push_subscription_parameters = new \OpenAPI\Client\Model\TxPushSubscriptionParameters(); // \OpenAPI\Client\Model\TxPushSubscriptionParameters

try {
    $result = $apiInstance->subscribeToTxPushNotifications($customer_id, $account_id, $tx_push_subscription_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TxPushApi->subscribeToTxPushNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A customer ID | |
| **account_id** | **string**| The account ID | |
| **tx_push_subscription_parameters** | [**\OpenAPI\Client\Model\TxPushSubscriptionParameters**](../Model/TxPushSubscriptionParameters.md)|  | |

### Return type

[**\OpenAPI\Client\Model\TxPushSubscriptions**](../Model/TxPushSubscriptions.md)

### Authorization

[FinicityAppToken](../../README.md#FinicityAppToken), [FinicityAppKey](../../README.md#FinicityAppKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
