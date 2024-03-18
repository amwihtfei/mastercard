# OpenAPIClient-php

OpenAPI specification for Finicity APIs.

Open Banking solutions in the US are provided by Finicity, a Mastercard
company.

For more information, please visit [https://developer.mastercard.com/open-banking-us/documentation/support/](https://developer.mastercard.com/open-banking-us/documentation/support/).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api.finicity.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountValidationAssistanceApi* | [**getMicroDepositsDetails**](docs/Api/AccountValidationAssistanceApi.md#getmicrodepositsdetails) | **GET** /microentry/v1/customers/{customerId}/accounts/{accountId} | Get Micro Entries Details
*AccountValidationAssistanceApi* | [**initiateMicroAmountDeposits**](docs/Api/AccountValidationAssistanceApi.md#initiatemicroamountdeposits) | **POST** /microentry/v1/customers/{customerId} | Initiate Micro Entries
*AccountValidationAssistanceApi* | [**verifyMicroAmountDeposits**](docs/Api/AccountValidationAssistanceApi.md#verifymicroamountdeposits) | **POST** /microentry/v1/customers/{customerId}/accounts/{accountId}/amounts | Verify Micro Entries
*AccountsApi* | [**deleteCustomerAccount**](docs/Api/AccountsApi.md#deletecustomeraccount) | **DELETE** /aggregation/v1/customers/{customerId}/accounts/{accountId} | Delete Customer Account by ID
*AccountsApi* | [**deleteCustomerAccountsByInstitutionLogin**](docs/Api/AccountsApi.md#deletecustomeraccountsbyinstitutionlogin) | **DELETE** /aggregation/v1/customers/{customerId}/institutionLogins/{institutionLoginId} | Delete Customer Accounts by Institution Login ID
*AccountsApi* | [**getCustomerAccount**](docs/Api/AccountsApi.md#getcustomeraccount) | **GET** /aggregation/v2/customers/{customerId}/accounts/{accountId} | Get Customer Account by ID
*AccountsApi* | [**getCustomerAccounts**](docs/Api/AccountsApi.md#getcustomeraccounts) | **GET** /aggregation/v1/customers/{customerId}/accounts | Get Customer Accounts
*AccountsApi* | [**getCustomerAccountsByInstitution**](docs/Api/AccountsApi.md#getcustomeraccountsbyinstitution) | **GET** /aggregation/v1/customers/{customerId}/institutions/{institutionId}/accounts | Get Customer Accounts by Institution ID
*AccountsApi* | [**getCustomerAccountsByInstitutionLogin**](docs/Api/AccountsApi.md#getcustomeraccountsbyinstitutionlogin) | **GET** /aggregation/v1/customers/{customerId}/institutionLogins/{institutionLoginId}/accounts | Get Customer Accounts by Institution Login ID
*AccountsApi* | [**refreshCustomerAccounts**](docs/Api/AccountsApi.md#refreshcustomeraccounts) | **POST** /aggregation/v1/customers/{customerId}/accounts | Refresh Customer Accounts
*AccountsApi* | [**refreshCustomerAccountsByInstitutionLogin**](docs/Api/AccountsApi.md#refreshcustomeraccountsbyinstitutionlogin) | **POST** /aggregation/v1/customers/{customerId}/institutionLogins/{institutionLoginId}/accounts | Refresh Customer Accounts by Institution Login ID
*AccountsApi* | [**refreshCustomerAccountsByInstitutionLoginV2**](docs/Api/AccountsApi.md#refreshcustomeraccountsbyinstitutionloginv2) | **POST** /aggregation/v2/customers/{customerId}/institutionLogins/{institutionLoginId}/accounts | Refresh Customer Account by Institution Login ID for Data Access Tiers
*AccountsApi* | [**refreshCustomerAccountsV2**](docs/Api/AccountsApi.md#refreshcustomeraccountsv2) | **POST** /aggregation/v2/customers/{customerId}/accounts | Refresh Customer Accounts for Data Access Tiers
*AccountsSimpleApi* | [**getCustomerAccountSimple**](docs/Api/AccountsSimpleApi.md#getcustomeraccountsimple) | **GET** /aggregation/v1/customers/{customerId}/accounts/{accountId}/simple | Get Customer Account by ID (Simple)
*AccountsSimpleApi* | [**getCustomerAccountsByInstitutionLoginSimple**](docs/Api/AccountsSimpleApi.md#getcustomeraccountsbyinstitutionloginsimple) | **GET** /aggregation/v1/customers/{customerId}/institutionLogins/{institutionLoginId}/accounts/simple | Get Customer Accounts by Institution Login ID (Simple)
*AccountsSimpleApi* | [**getCustomerAccountsByInstitutionSimple**](docs/Api/AccountsSimpleApi.md#getcustomeraccountsbyinstitutionsimple) | **GET** /aggregation/v1/customers/{customerId}/institutions/{institutionId}/accounts/simple | Get Customer Accounts by Institution ID (Simple)
*AccountsSimpleApi* | [**getCustomerAccountsSimple**](docs/Api/AccountsSimpleApi.md#getcustomeraccountssimple) | **GET** /aggregation/v1/customers/{customerId}/accounts/simple | Get Customer Accounts (Simple)
*AppRegistrationApi* | [**getAppRegistrationStatus**](docs/Api/AppRegistrationApi.md#getappregistrationstatus) | **GET** /aggregation/v2/partners/applications | Get App Registration Status
*AppRegistrationApi* | [**migrateInstitutionLoginAccounts**](docs/Api/AppRegistrationApi.md#migrateinstitutionloginaccounts) | **PUT** /aggregation/v2/customers/{customerId}/institutionLogins/{institutionLoginId}/migration | Migrate Institution Login Accounts
*AppRegistrationApi* | [**modifyAppRegistration**](docs/Api/AppRegistrationApi.md#modifyappregistration) | **PUT** /aggregation/v1/partners/applications/{preAppId} | Modify App Registration
*AppRegistrationApi* | [**registerApp**](docs/Api/AppRegistrationApi.md#registerapp) | **POST** /aggregation/v1/partners/applications | Register App
*AppRegistrationApi* | [**setCustomerAppID**](docs/Api/AppRegistrationApi.md#setcustomerappid) | **PUT** /aggregation/v1/customers/{customerId}/applications/{applicationId} | Set Customer App ID
*AssetsApi* | [**getAssetByCustomerID**](docs/Api/AssetsApi.md#getassetbycustomerid) | **GET** /aggregation/v1/customers/{customerId}/assets/{assetId} | Get Asset by Customer and ID
*AuthenticationApi* | [**createToken**](docs/Api/AuthenticationApi.md#createtoken) | **POST** /aggregation/v2/partners/authentication | Create Access Token
*AuthenticationApi* | [**modifyPartnerSecret**](docs/Api/AuthenticationApi.md#modifypartnersecret) | **PUT** /aggregation/v2/partners/authentication | Modify Partner Secret
*BalanceAnalyticsApi* | [**generateBalanceAnalytics**](docs/Api/BalanceAnalyticsApi.md#generatebalanceanalytics) | **POST** /analytics/balance/v1/customer/{customerId} | Generate Balance Analytics
*BalanceAnalyticsApi* | [**generateBalanceAnalyticsFcra**](docs/Api/BalanceAnalyticsApi.md#generatebalanceanalyticsfcra) | **POST** /analytics/balance/v1/customer/{customerId}/fcra | Generate Balance Analytics - FCRA
*BalanceAnalyticsApi* | [**generateBalanceAnalyticsReport**](docs/Api/BalanceAnalyticsApi.md#generatebalanceanalyticsreport) | **POST** /decisioning/v2/customers/{customerId}/reports/balance-analytics/userTypes/{userType} | Generate Balance Analytics Report - Personal/Business
*BalanceAnalyticsApi* | [**getObbAnalyticsReport**](docs/Api/BalanceAnalyticsApi.md#getobbanalyticsreport) | **GET** /analytics/data/v1/{obb_report_id} | Get OBB Analytics Report
*BalanceAnalyticsApi* | [**getObbAnalyticsReportFcra**](docs/Api/BalanceAnalyticsApi.md#getobbanalyticsreportfcra) | **GET** /analytics/data/v1/{obb_report_id}/fcra | Get OBB Analytics Report - FCRA
*BankStatementsApi* | [**generateStatementReport**](docs/Api/BankStatementsApi.md#generatestatementreport) | **POST** /decisioning/v2/customers/{customerId}/statement | Generate Statement Report
*BankStatementsApi* | [**getCustomerAccountMultipleStatement**](docs/Api/BankStatementsApi.md#getcustomeraccountmultiplestatement) | **GET** /aggregation/v3/customers/{customerId}/accounts/{accountId}/statement | Get Customer Account Multiple Statements
*BankStatementsApi* | [**getCustomerAccountStatement**](docs/Api/BankStatementsApi.md#getcustomeraccountstatement) | **GET** /aggregation/v1/customers/{customerId}/accounts/{accountId}/statement | Get Customer Account Statement
*BusinessesAPIApi* | [**addBusinessDetails**](docs/Api/BusinessesAPIApi.md#addbusinessdetails) | **POST** /business-services/customers/{customer_id}/businesses | Create a New Business for a Customer
*BusinessesAPIApi* | [**getBusinessByCustomer**](docs/Api/BusinessesAPIApi.md#getbusinessbycustomer) | **GET** /business-services/customers/{customer_id}/businesses | Get Business for Customer
*BusinessesAPIApi* | [**getBusinessById**](docs/Api/BusinessesAPIApi.md#getbusinessbyid) | **GET** /business-services/businesses/{business_id} | Get Business by ID
*BusinessesAPIApi* | [**updateBusiness**](docs/Api/BusinessesAPIApi.md#updatebusiness) | **PUT** /business-services/businesses/{business_id} | Update Business by ID
*CashFlowApi* | [**generateCashFlowBusinessReport**](docs/Api/CashFlowApi.md#generatecashflowbusinessreport) | **POST** /decisioning/v2/customers/{customerId}/cashFlowBusiness | Generate Cash Flow Report - Business
*CashFlowApi* | [**generateCashFlowPersonalReport**](docs/Api/CashFlowApi.md#generatecashflowpersonalreport) | **POST** /decisioning/v2/customers/{customerId}/cashFlowPersonal | Generate Cash Flow Report - Personal
*CashFlowAnalyticsApi* | [**generateCashFlowAnalytics**](docs/Api/CashFlowAnalyticsApi.md#generatecashflowanalytics) | **POST** /analytics/cashflow/v1/customer/{customerId} | Generate Cash Flow Analytics
*CashFlowAnalyticsApi* | [**generateCashFlowAnalyticsFcra**](docs/Api/CashFlowAnalyticsApi.md#generatecashflowanalyticsfcra) | **POST** /analytics/cashflow/v1/customer/{customerId}/fcra | Generate Cash Flow Analytics - FCRA
*CashFlowAnalyticsApi* | [**generateCashflowAnalyticsReport**](docs/Api/CashFlowAnalyticsApi.md#generatecashflowanalyticsreport) | **POST** /decisioning/v2/customers/{customerId}/reports/cashflow-analytics/userTypes/{userType} | Generate Cashflow Analytics Report - Personal/Business
*CashFlowAnalyticsApi* | [**getObbAnalyticsReport**](docs/Api/CashFlowAnalyticsApi.md#getobbanalyticsreport) | **GET** /analytics/data/v1/{obb_report_id} | Get OBB Analytics Report
*CashFlowAnalyticsApi* | [**getObbAnalyticsReportFcra**](docs/Api/CashFlowAnalyticsApi.md#getobbanalyticsreportfcra) | **GET** /analytics/data/v1/{obb_report_id}/fcra | Get OBB Analytics Report - FCRA
*ConnectApi* | [**generateConnectUrl**](docs/Api/ConnectApi.md#generateconnecturl) | **POST** /connect/v2/generate | Generate Connect URL
*ConnectApi* | [**generateFixConnectUrl**](docs/Api/ConnectApi.md#generatefixconnecturl) | **POST** /connect/v2/generate/fix | Generate Fix Connect URL
*ConnectApi* | [**generateJointBorrowerConnectUrl**](docs/Api/ConnectApi.md#generatejointborrowerconnecturl) | **POST** /connect/v2/generate/jointBorrower | Generate Connect URL - Joint Borrower
*ConnectApi* | [**generateLiteConnectUrl**](docs/Api/ConnectApi.md#generateliteconnecturl) | **POST** /connect/v2/generate/lite | Generate Lite Connect URL
*ConnectApi* | [**sendConnectEmail**](docs/Api/ConnectApi.md#sendconnectemail) | **POST** /connect/v2/send/email | Send Connect Email
*ConnectApi* | [**sendJointBorrowerConnectEmail**](docs/Api/ConnectApi.md#sendjointborrowerconnectemail) | **POST** /connect/v2/send/email/jointBorrower | Send Connect Email - Joint Borrower
*ConnectApi* | [**verifyMicroEntryMicrodeposit**](docs/Api/ConnectApi.md#verifymicroentrymicrodeposit) | **POST** /connect/v2/generate/microentry/verify | Account Validation Assistant User verification of microdeposits
*ConsumersApi* | [**createConsumer**](docs/Api/ConsumersApi.md#createconsumer) | **POST** /decisioning/v1/customers/{customerId}/consumer | Create Consumer
*ConsumersApi* | [**getConsumer**](docs/Api/ConsumersApi.md#getconsumer) | **GET** /decisioning/v1/consumers/{consumerId} | Get Consumer by ID
*ConsumersApi* | [**getConsumerForCustomer**](docs/Api/ConsumersApi.md#getconsumerforcustomer) | **GET** /decisioning/v1/customers/{customerId}/consumer | Get Consumer For Customer
*ConsumersApi* | [**modifyConsumer**](docs/Api/ConsumersApi.md#modifyconsumer) | **PUT** /decisioning/v1/consumers/{consumerId} | Modify Consumer by ID
*CustomerAuthorizationDetailsApi* | [**getCustomerAuthorizationDetails**](docs/Api/CustomerAuthorizationDetailsApi.md#getcustomerauthorizationdetails) | **GET** /customers/institution-logins/{institution_login_id}/authorization-details | Returns customer authorization details for the institution login identification.
*CustomersApi* | [**addCustomer**](docs/Api/CustomersApi.md#addcustomer) | **POST** /aggregation/v2/customers/active | Add Customer
*CustomersApi* | [**addTestingCustomer**](docs/Api/CustomersApi.md#addtestingcustomer) | **POST** /aggregation/v2/customers/testing | Add Testing Customer
*CustomersApi* | [**deleteCustomer**](docs/Api/CustomersApi.md#deletecustomer) | **DELETE** /aggregation/v1/customers/{customerId} | Delete Customer by ID
*CustomersApi* | [**getCustomer**](docs/Api/CustomersApi.md#getcustomer) | **GET** /aggregation/v1/customers/{customerId} | Get Customer by ID
*CustomersApi* | [**getCustomerWithAppData**](docs/Api/CustomersApi.md#getcustomerwithappdata) | **GET** /aggregation/v1/customers/{customerId}/application | Get Customer With App Data by ID
*CustomersApi* | [**getCustomers**](docs/Api/CustomersApi.md#getcustomers) | **GET** /aggregation/v1/customers | Get Customers
*CustomersApi* | [**modifyCustomer**](docs/Api/CustomersApi.md#modifycustomer) | **PUT** /aggregation/v1/customers/{customerId} | Modify Customer by ID
*InstitutionsApi* | [**getCertifiedInstitutions**](docs/Api/InstitutionsApi.md#getcertifiedinstitutions) | **GET** /institution/v2/certifiedInstitutions | Get Certified Institutions
*InstitutionsApi* | [**getCertifiedInstitutionsWithRSSD**](docs/Api/InstitutionsApi.md#getcertifiedinstitutionswithrssd) | **GET** /institution/v2/certifiedInstitutions/rssd | Get Certified Institutions With RSSD
*InstitutionsApi* | [**getInstitution**](docs/Api/InstitutionsApi.md#getinstitution) | **GET** /institution/v2/institutions/{institutionId} | Get Institution by ID
*InstitutionsApi* | [**getInstitutionBranding**](docs/Api/InstitutionsApi.md#getinstitutionbranding) | **GET** /institution/v2/institutions/{institutionId}/branding | Get Institution Branding by ID
*InstitutionsApi* | [**getInstitutions**](docs/Api/InstitutionsApi.md#getinstitutions) | **GET** /institution/v2/institutions | Get Institutions
*PayStatementsApi* | [**storeCustomerPayStatement**](docs/Api/PayStatementsApi.md#storecustomerpaystatement) | **POST** /aggregation/v1/customers/{customerId}/payStatements | Store Customer Pay Statement
*PaymentHistoryApi* | [**generatePaymentHistory**](docs/Api/PaymentHistoryApi.md#generatepaymenthistory) | **POST** /analytics/payment-history/v1/customer/{customerId} | Generate Payment History
*PaymentHistoryApi* | [**generatePaymentHistoryFcra**](docs/Api/PaymentHistoryApi.md#generatepaymenthistoryfcra) | **POST** /analytics/payment-history/v1/customer/{customerId}/fcra | Generate Payment History - FCRA
*PaymentHistoryApi* | [**getObbAnalyticsReport**](docs/Api/PaymentHistoryApi.md#getobbanalyticsreport) | **GET** /analytics/data/v1/{obb_report_id} | Get OBB Analytics Report
*PaymentHistoryApi* | [**getObbAnalyticsReportFcra**](docs/Api/PaymentHistoryApi.md#getobbanalyticsreportfcra) | **GET** /analytics/data/v1/{obb_report_id}/fcra | Get OBB Analytics Report - FCRA
*PaymentsApi* | [**getAccountACHDetails**](docs/Api/PaymentsApi.md#getaccountachdetails) | **GET** /aggregation/v1/customers/{customerId}/accounts/{accountId}/details | Get Account ACH Details
*PaymentsApi* | [**getAccountOwner**](docs/Api/PaymentsApi.md#getaccountowner) | **GET** /aggregation/v1/customers/{customerId}/accounts/{accountId}/owner | Get Account Owner
*PaymentsApi* | [**getAccountOwnerDetails**](docs/Api/PaymentsApi.md#getaccountownerdetails) | **GET** /aggregation/v3/customers/{customerId}/accounts/{accountId}/owner | Get Account Owner Details
*PaymentsApi* | [**getAvailableBalance**](docs/Api/PaymentsApi.md#getavailablebalance) | **GET** /aggregation/v1/customers/{customerId}/accounts/{accountId}/availableBalance | Get Available Balance
*PaymentsApi* | [**getAvailableBalanceLive**](docs/Api/PaymentsApi.md#getavailablebalancelive) | **GET** /aggregation/v1/customers/{customerId}/accounts/{accountId}/availableBalance/live | Get Available Balance - Live
*PaymentsApi* | [**getLoanPaymentDetails**](docs/Api/PaymentsApi.md#getloanpaymentdetails) | **GET** /aggregation/v2/customers/{customerId}/accounts/{accountId}/loanDetails | Get Loan Payment Details
*PortfoliosApi* | [**getPortfolioByConsumer**](docs/Api/PortfoliosApi.md#getportfoliobyconsumer) | **GET** /decisioning/v1/consumers/{consumerId}/portfolios/{portfolioId} | Get Portfolio by Consumer
*PortfoliosApi* | [**getPortfolioByCustomer**](docs/Api/PortfoliosApi.md#getportfoliobycustomer) | **GET** /decisioning/v1/customers/{customerId}/portfolios/{portfolioId} | Get Portfolio by Customer
*ReportsApi* | [**getReportByConsumer**](docs/Api/ReportsApi.md#getreportbyconsumer) | **GET** /decisioning/v3/consumers/{consumerId}/reports/{reportId} | Get Report by Consumer and ID
*ReportsApi* | [**getReportByCustomer**](docs/Api/ReportsApi.md#getreportbycustomer) | **GET** /decisioning/v3/customers/{customerId}/reports/{reportId} | Get Report by Customer and ID
*ReportsApi* | [**getReportsByConsumerId**](docs/Api/ReportsApi.md#getreportsbyconsumerid) | **GET** /decisioning/v1/consumers/{consumerId}/reports | Get Reports by Consumer ID
*ReportsApi* | [**getReportsByCustomerId**](docs/Api/ReportsApi.md#getreportsbycustomerid) | **GET** /decisioning/v1/customers/{customerId}/reports | Get Reports by Customer ID
*ThirdPartyAccessApi* | [**generateThirdPartyAccessKey**](docs/Api/ThirdPartyAccessApi.md#generatethirdpartyaccesskey) | **POST** /aggregation/v1/partners/accessKey | Generate Third Party Access Key
*ThirdPartyAccessApi* | [**revokeThirdPartyAccessKey**](docs/Api/ThirdPartyAccessApi.md#revokethirdpartyaccesskey) | **DELETE** /aggregation/v1/partners/accessKey/{consentReceiptId} | Revoke Third Party Access
*ThirdPartyAccessApi* | [**updateThirdPartyAccessKey**](docs/Api/ThirdPartyAccessApi.md#updatethirdpartyaccesskey) | **PUT** /aggregation/v1/partners/accessKey/{consentReceiptId} | Update Third Party Access
*TransactionsApi* | [**generateTransactionsReport**](docs/Api/TransactionsApi.md#generatetransactionsreport) | **POST** /decisioning/v2/customers/{customerId}/transactions | Generate Transactions Report
*TransactionsApi* | [**getAllCustomerTransactions**](docs/Api/TransactionsApi.md#getallcustomertransactions) | **GET** /aggregation/v3/customers/{customerId}/transactions | Get All Customer Transactions
*TransactionsApi* | [**getCustomerAccountTransactions**](docs/Api/TransactionsApi.md#getcustomeraccounttransactions) | **GET** /aggregation/v4/customers/{customerId}/accounts/{accountId}/transactions | Get Customer Account Transactions
*TransactionsApi* | [**getCustomerTransaction**](docs/Api/TransactionsApi.md#getcustomertransaction) | **GET** /aggregation/v2/customers/{customerId}/transactions/{transactionId} | Get Customer Transaction by ID
*TransactionsApi* | [**loadHistoricTransactionsForCustomerAccount**](docs/Api/TransactionsApi.md#loadhistorictransactionsforcustomeraccount) | **POST** /aggregation/v1/customers/{customerId}/accounts/{accountId}/transactions/historic | Load Historic Transactions for Customer Account
*TxPushApi* | [**createTxPushTestTransaction**](docs/Api/TxPushApi.md#createtxpushtesttransaction) | **POST** /aggregation/v1/customers/{customerId}/accounts/{accountId}/transactions | Create TxPush Test Transaction
*TxPushApi* | [**deleteTxPushSubscription**](docs/Api/TxPushApi.md#deletetxpushsubscription) | **DELETE** /aggregation/v1/customers/{customerId}/subscriptions/{subscriptionId} | Delete TxPush Subscription
*TxPushApi* | [**disableTxPushNotifications**](docs/Api/TxPushApi.md#disabletxpushnotifications) | **DELETE** /aggregation/v1/customers/{customerId}/accounts/{accountId}/txpush | Disable TxPush Notifications
*TxPushApi* | [**subscribeToTxPushNotifications**](docs/Api/TxPushApi.md#subscribetotxpushnotifications) | **POST** /aggregation/v1/customers/{customerId}/accounts/{accountId}/txpush | Subscribe to TxPush Notifications
*VerifyAssetsApi* | [**generatePrequalificationCRAReport**](docs/Api/VerifyAssetsApi.md#generateprequalificationcrareport) | **POST** /decisioning/v2/customers/{customerId}/preQualVoa | Generate Prequalification (CRA) Report
*VerifyAssetsApi* | [**generatePrequalificationNonCRAReport**](docs/Api/VerifyAssetsApi.md#generateprequalificationnoncrareport) | **POST** /decisioning/v2/customers/{customerId}/assetSummary | Generate Prequalification (Non-CRA) Report
*VerifyAssetsApi* | [**generateVOAReport**](docs/Api/VerifyAssetsApi.md#generatevoareport) | **POST** /decisioning/v2/customers/{customerId}/voa | Generate VOA Report
*VerifyAssetsApi* | [**generateVOAWithIncomeReport**](docs/Api/VerifyAssetsApi.md#generatevoawithincomereport) | **POST** /decisioning/v2/customers/{customerId}/voaHistory | Generate VOA With Income Report
*VerifyIncomeAndEmploymentApi* | [**generatePayStatementReport**](docs/Api/VerifyIncomeAndEmploymentApi.md#generatepaystatementreport) | **POST** /decisioning/v2/customers/{customerId}/payStatement | Generate Pay Statement Report
*VerifyIncomeAndEmploymentApi* | [**generateVOEPayrollReport**](docs/Api/VerifyIncomeAndEmploymentApi.md#generatevoepayrollreport) | **POST** /decisioning/v2/customers/{customerId}/voePayroll | Generate VOE - Payroll Report
*VerifyIncomeAndEmploymentApi* | [**generateVOETransactionsReport**](docs/Api/VerifyIncomeAndEmploymentApi.md#generatevoetransactionsreport) | **POST** /decisioning/v2/customers/{customerId}/voeTransactions | Generate VOE - Transactions Report
*VerifyIncomeAndEmploymentApi* | [**generateVOIEPaystubReport**](docs/Api/VerifyIncomeAndEmploymentApi.md#generatevoiepaystubreport) | **POST** /decisioning/v2/customers/{customerId}/voieTxVerify/withStatement | Generate VOIE - Paystub Report
*VerifyIncomeAndEmploymentApi* | [**generateVOIEPaystubWithTXVerifyReport**](docs/Api/VerifyIncomeAndEmploymentApi.md#generatevoiepaystubwithtxverifyreport) | **POST** /decisioning/v2/customers/{customerId}/voieTxVerify/withInterview | Generate VOIE - Paystub (with TXVerify) Report
*VerifyIncomeAndEmploymentApi* | [**generateVOIReport**](docs/Api/VerifyIncomeAndEmploymentApi.md#generatevoireport) | **POST** /decisioning/v2/customers/{customerId}/voi | Generate VOI Report
*VerifyIncomeAndEmploymentApi* | [**refreshVOIEPayrollReport**](docs/Api/VerifyIncomeAndEmploymentApi.md#refreshvoiepayrollreport) | **POST** /decisioning/v2/customers/{customerId}/voiePayroll | Generate VOIE - Payroll Report

## Models

- [ACHDetails](docs/Model/ACHDetails.md)
- [AFBalanceAnalyticsReport](docs/Model/AFBalanceAnalyticsReport.md)
- [AFBusiness](docs/Model/AFBusiness.md)
- [AFBusinessAddress](docs/Model/AFBusinessAddress.md)
- [AFCashFlowAnalyticsReport](docs/Model/AFCashFlowAnalyticsReport.md)
- [AccessToken](docs/Model/AccessToken.md)
- [AccountAnalytics](docs/Model/AccountAnalytics.md)
- [AccountDetails](docs/Model/AccountDetails.md)
- [AccountDetailsTxBased](docs/Model/AccountDetailsTxBased.md)
- [AccountOwner](docs/Model/AccountOwner.md)
- [AccountOwnerAddress](docs/Model/AccountOwnerAddress.md)
- [AccountOwnerDetails](docs/Model/AccountOwnerDetails.md)
- [AccountOwnerDocumentation](docs/Model/AccountOwnerDocumentation.md)
- [AccountOwnerEmail](docs/Model/AccountOwnerEmail.md)
- [AccountOwnerHolders](docs/Model/AccountOwnerHolders.md)
- [AccountOwnerIdentityInsights](docs/Model/AccountOwnerIdentityInsights.md)
- [AccountOwnerPhone](docs/Model/AccountOwnerPhone.md)
- [AnalyticsReportAck](docs/Model/AnalyticsReportAck.md)
- [AnalyticsReportConstraints](docs/Model/AnalyticsReportConstraints.md)
- [AnalyticsReportConstraintsOut](docs/Model/AnalyticsReportConstraintsOut.md)
- [AnalyticsReportData](docs/Model/AnalyticsReportData.md)
- [AnalyticsReportsAccount](docs/Model/AnalyticsReportsAccount.md)
- [AnnualIncome](docs/Model/AnnualIncome.md)
- [AppFinancialInstitutionStatus](docs/Model/AppFinancialInstitutionStatus.md)
- [AppStatus](docs/Model/AppStatus.md)
- [AppStatuses](docs/Model/AppStatuses.md)
- [Application](docs/Model/Application.md)
- [Asset](docs/Model/Asset.md)
- [AvailableBalance](docs/Model/AvailableBalance.md)
- [BalanceAnalyticsAccountResult](docs/Model/BalanceAnalyticsAccountResult.md)
- [BalanceAnalyticsBusinessSummary](docs/Model/BalanceAnalyticsBusinessSummary.md)
- [BalanceAnalyticsMetrics](docs/Model/BalanceAnalyticsMetrics.md)
- [BalanceAnalyticsReport](docs/Model/BalanceAnalyticsReport.md)
- [BalanceAndCashFlowAnalyticsReportConstraints](docs/Model/BalanceAndCashFlowAnalyticsReportConstraints.md)
- [BaseReportAck](docs/Model/BaseReportAck.md)
- [BaseReportAckWithPortfolioId](docs/Model/BaseReportAckWithPortfolioId.md)
- [Birthday](docs/Model/Birthday.md)
- [Borrower](docs/Model/Borrower.md)
- [Branding](docs/Model/Branding.md)
- [BrandingWrapper](docs/Model/BrandingWrapper.md)
- [Business](docs/Model/Business.md)
- [BusinessDetails](docs/Model/BusinessDetails.md)
- [CadenceDetails](docs/Model/CadenceDetails.md)
- [CashFlowActivityDepositsCredits](docs/Model/CashFlowActivityDepositsCredits.md)
- [CashFlowActivityWithdrawalsDebits](docs/Model/CashFlowActivityWithdrawalsDebits.md)
- [CashFlowAnalyticsAccountResult](docs/Model/CashFlowAnalyticsAccountResult.md)
- [CashFlowAnalyticsBusinessSummary](docs/Model/CashFlowAnalyticsBusinessSummary.md)
- [CashFlowAnalyticsMetrics](docs/Model/CashFlowAnalyticsMetrics.md)
- [CashFlowAnalyticsReport](docs/Model/CashFlowAnalyticsReport.md)
- [CashFlowCashFlowBalance](docs/Model/CashFlowCashFlowBalance.md)
- [CashFlowCashFlowBalanceSummary](docs/Model/CashFlowCashFlowBalanceSummary.md)
- [CashFlowCashFlowCharacteristic](docs/Model/CashFlowCashFlowCharacteristic.md)
- [CashFlowCashFlowCharacteristicsSummary](docs/Model/CashFlowCashFlowCharacteristicsSummary.md)
- [CashFlowCashFlowCredit](docs/Model/CashFlowCashFlowCredit.md)
- [CashFlowCashFlowCreditSummary](docs/Model/CashFlowCashFlowCreditSummary.md)
- [CashFlowCashFlowDebit](docs/Model/CashFlowCashFlowDebit.md)
- [CashFlowCashFlowDebitSummary](docs/Model/CashFlowCashFlowDebitSummary.md)
- [CashFlowInflowAttributes](docs/Model/CashFlowInflowAttributes.md)
- [CashFlowInsufficientFundsFees](docs/Model/CashFlowInsufficientFundsFees.md)
- [CashFlowMonthlyCashFlowBalanceSummaries](docs/Model/CashFlowMonthlyCashFlowBalanceSummaries.md)
- [CashFlowMonthlyCashFlowBalances](docs/Model/CashFlowMonthlyCashFlowBalances.md)
- [CashFlowMonthlyCashFlowCharacteristics](docs/Model/CashFlowMonthlyCashFlowCharacteristics.md)
- [CashFlowMonthlyCashFlowCharacteristicsSummaries](docs/Model/CashFlowMonthlyCashFlowCharacteristicsSummaries.md)
- [CashFlowMonthlyCashFlowCreditSummaries](docs/Model/CashFlowMonthlyCashFlowCreditSummaries.md)
- [CashFlowMonthlyCashFlowCredits](docs/Model/CashFlowMonthlyCashFlowCredits.md)
- [CashFlowMonthlyCashFlowDebitSummaries](docs/Model/CashFlowMonthlyCashFlowDebitSummaries.md)
- [CashFlowMonthlycashflowDebits](docs/Model/CashFlowMonthlycashflowDebits.md)
- [CashFlowNegativeTriggers](docs/Model/CashFlowNegativeTriggers.md)
- [CashFlowNumWeeksZeros](docs/Model/CashFlowNumWeeksZeros.md)
- [CashFlowOutflowAttributes](docs/Model/CashFlowOutflowAttributes.md)
- [CashFlowPossibleLoanDeposits](docs/Model/CashFlowPossibleLoanDeposits.md)
- [CashFlowPossibleLoanDepositsAccount](docs/Model/CashFlowPossibleLoanDepositsAccount.md)
- [CashFlowPossibleLoanDepositsInstitutions](docs/Model/CashFlowPossibleLoanDepositsInstitutions.md)
- [CashFlowReport](docs/Model/CashFlowReport.md)
- [CashFlowReportAccount](docs/Model/CashFlowReportAccount.md)
- [CashFlowReportAck](docs/Model/CashFlowReportAck.md)
- [CashFlowReportConstraints](docs/Model/CashFlowReportConstraints.md)
- [CashFlowReportConstraintsOut](docs/Model/CashFlowReportConstraintsOut.md)
- [CashFlowTransactionAnalyticsAttributes](docs/Model/CashFlowTransactionAnalyticsAttributes.md)
- [CashFlowTransactionAnalyticsAttributesLastTransactionDateInner](docs/Model/CashFlowTransactionAnalyticsAttributesLastTransactionDateInner.md)
- [Categorization](docs/Model/Categorization.md)
- [CertifiedInstitution](docs/Model/CertifiedInstitution.md)
- [CertifiedInstitutions](docs/Model/CertifiedInstitutions.md)
- [ChildInstitution](docs/Model/ChildInstitution.md)
- [ConnectEmailParameters](docs/Model/ConnectEmailParameters.md)
- [ConnectEmailUrl](docs/Model/ConnectEmailUrl.md)
- [ConnectJointBorrowerEmailParameters](docs/Model/ConnectJointBorrowerEmailParameters.md)
- [ConnectJointBorrowerParameters](docs/Model/ConnectJointBorrowerParameters.md)
- [ConnectParameters](docs/Model/ConnectParameters.md)
- [ConnectUrl](docs/Model/ConnectUrl.md)
- [Consumer](docs/Model/Consumer.md)
- [ConsumerInfo](docs/Model/ConsumerInfo.md)
- [ConsumerUpdate](docs/Model/ConsumerUpdate.md)
- [CreatedConsumer](docs/Model/CreatedConsumer.md)
- [CreatedCustomer](docs/Model/CreatedCustomer.md)
- [CreatedTestTxPushTransaction](docs/Model/CreatedTestTxPushTransaction.md)
- [Customer](docs/Model/Customer.md)
- [CustomerAccount](docs/Model/CustomerAccount.md)
- [CustomerAccountDetail](docs/Model/CustomerAccountDetail.md)
- [CustomerAccountMultipleStatement](docs/Model/CustomerAccountMultipleStatement.md)
- [CustomerAccountMultipleStatements](docs/Model/CustomerAccountMultipleStatements.md)
- [CustomerAccountPosition](docs/Model/CustomerAccountPosition.md)
- [CustomerAccountSimple](docs/Model/CustomerAccountSimple.md)
- [CustomerAccounts](docs/Model/CustomerAccounts.md)
- [CustomerAccountsSimple](docs/Model/CustomerAccountsSimple.md)
- [CustomerAnalytics](docs/Model/CustomerAnalytics.md)
- [CustomerAuthorizationDetails](docs/Model/CustomerAuthorizationDetails.md)
- [CustomerUpdate](docs/Model/CustomerUpdate.md)
- [CustomerWithAppData](docs/Model/CustomerWithAppData.md)
- [Customers](docs/Model/Customers.md)
- [Deduction](docs/Model/Deduction.md)
- [Deductions](docs/Model/Deductions.md)
- [DirectDeposit](docs/Model/DirectDeposit.md)
- [DirectDeposits](docs/Model/DirectDeposits.md)
- [DirectPayStatements](docs/Model/DirectPayStatements.md)
- [Earnings](docs/Model/Earnings.md)
- [EmailOptions](docs/Model/EmailOptions.md)
- [Employee](docs/Model/Employee.md)
- [Employer](docs/Model/Employer.md)
- [ErrorMessage](docs/Model/ErrorMessage.md)
- [FixConnectParameters](docs/Model/FixConnectParameters.md)
- [InitiatedMicroDeposit](docs/Model/InitiatedMicroDeposit.md)
- [Institution](docs/Model/Institution.md)
- [InstitutionAddress](docs/Model/InstitutionAddress.md)
- [InstitutionWrapper](docs/Model/InstitutionWrapper.md)
- [Institutions](docs/Model/Institutions.md)
- [InsufficientFundsTransaction](docs/Model/InsufficientFundsTransaction.md)
- [LiteConnectParameters](docs/Model/LiteConnectParameters.md)
- [LoanPaymentDetails](docs/Model/LoanPaymentDetails.md)
- [LoanPaymentDetailsAccount](docs/Model/LoanPaymentDetailsAccount.md)
- [LoanPaymentDetailsGroup](docs/Model/LoanPaymentDetailsGroup.md)
- [LoanPaymentDetailsLoan](docs/Model/LoanPaymentDetailsLoan.md)
- [MainPayStatementFields](docs/Model/MainPayStatementFields.md)
- [MicroDepositDetails](docs/Model/MicroDepositDetails.md)
- [MicroDepositInitiation](docs/Model/MicroDepositInitiation.md)
- [MicroDepositVerification](docs/Model/MicroDepositVerification.md)
- [MicroDepositVerificationError](docs/Model/MicroDepositVerificationError.md)
- [MicroEntryVerifyRequestParameter](docs/Model/MicroEntryVerifyRequestParameter.md)
- [MonthlyIncome](docs/Model/MonthlyIncome.md)
- [NetMonthly](docs/Model/NetMonthly.md)
- [NewAddress](docs/Model/NewAddress.md)
- [NewBusiness](docs/Model/NewBusiness.md)
- [NewConsumer](docs/Model/NewConsumer.md)
- [NewCustomer](docs/Model/NewCustomer.md)
- [ObbAccountDetails](docs/Model/ObbAccountDetails.md)
- [ObbAccountOwner](docs/Model/ObbAccountOwner.md)
- [ObbAnalyticsReport](docs/Model/ObbAnalyticsReport.md)
- [ObbAnalyticsReportAck](docs/Model/ObbAnalyticsReportAck.md)
- [ObbAverageWeeklyBalance](docs/Model/ObbAverageWeeklyBalance.md)
- [ObbCurrentReportRequestDetails](docs/Model/ObbCurrentReportRequestDetails.md)
- [ObbDailyBalance](docs/Model/ObbDailyBalance.md)
- [ObbDataAvailability](docs/Model/ObbDataAvailability.md)
- [ObbDateRangeAndAmount](docs/Model/ObbDateRangeAndAmount.md)
- [ObbDateRangeAndCount](docs/Model/ObbDateRangeAndCount.md)
- [ObbErrorMessage](docs/Model/ObbErrorMessage.md)
- [ObbInstitution](docs/Model/ObbInstitution.md)
- [ObbNumWeeksAverageBalanceIncreasing](docs/Model/ObbNumWeeksAverageBalanceIncreasing.md)
- [ObbReportHeader](docs/Model/ObbReportHeader.md)
- [ObbWeekOfYear](docs/Model/ObbWeekOfYear.md)
- [PartnerCredentials](docs/Model/PartnerCredentials.md)
- [PartnerCredentialsWithNewSecret](docs/Model/PartnerCredentialsWithNewSecret.md)
- [PayStat](docs/Model/PayStat.md)
- [PayStatement](docs/Model/PayStatement.md)
- [PayStatementData](docs/Model/PayStatementData.md)
- [PayStatementForVoie](docs/Model/PayStatementForVoie.md)
- [PayStatementReport](docs/Model/PayStatementReport.md)
- [PayStatementReportAck](docs/Model/PayStatementReportAck.md)
- [PayStatementReportConstraints](docs/Model/PayStatementReportConstraints.md)
- [PaymentHistoryAccountSummary](docs/Model/PaymentHistoryAccountSummary.md)
- [PaymentHistoryAccountSummaryAccountOwner](docs/Model/PaymentHistoryAccountSummaryAccountOwner.md)
- [PaymentHistoryAnalytics](docs/Model/PaymentHistoryAnalytics.md)
- [PaymentHistoryCustomerMonthlySummary](docs/Model/PaymentHistoryCustomerMonthlySummary.md)
- [PaymentHistoryReport](docs/Model/PaymentHistoryReport.md)
- [PaymentHistoryTransactionsSummary](docs/Model/PaymentHistoryTransactionsSummary.md)
- [PayrollData](docs/Model/PayrollData.md)
- [PayrollDataOut](docs/Model/PayrollDataOut.md)
- [PayrollEmployeeAddress](docs/Model/PayrollEmployeeAddress.md)
- [PayrollEmployeeRecord](docs/Model/PayrollEmployeeRecord.md)
- [PayrollEmployerAddress](docs/Model/PayrollEmployerAddress.md)
- [PayrollEmploymentHistoryVOE](docs/Model/PayrollEmploymentHistoryVOE.md)
- [PayrollEmploymentHistoryVOIE](docs/Model/PayrollEmploymentHistoryVOIE.md)
- [PayrollEmploymentRecord](docs/Model/PayrollEmploymentRecord.md)
- [PayrollReportAck](docs/Model/PayrollReportAck.md)
- [PayrollReportConstraints](docs/Model/PayrollReportConstraints.md)
- [PayrollReportConstraintsOut](docs/Model/PayrollReportConstraintsOut.md)
- [PayrollVOEIncomeRecord](docs/Model/PayrollVOEIncomeRecord.md)
- [PayrollVOIEIncomeRecord](docs/Model/PayrollVOIEIncomeRecord.md)
- [PaystubMonthlyIncomeRecord](docs/Model/PaystubMonthlyIncomeRecord.md)
- [PaystubTxVerifyMonthlyIncomeRecord](docs/Model/PaystubTxVerifyMonthlyIncomeRecord.md)
- [PhoneNumberFormat](docs/Model/PhoneNumberFormat.md)
- [PortfolioConsumer](docs/Model/PortfolioConsumer.md)
- [PortfolioReport](docs/Model/PortfolioReport.md)
- [PortfolioSummary](docs/Model/PortfolioSummary.md)
- [PortfolioWithConsumerSummary](docs/Model/PortfolioWithConsumerSummary.md)
- [PrequalificationReport](docs/Model/PrequalificationReport.md)
- [PrequalificationReportAccount](docs/Model/PrequalificationReportAccount.md)
- [PrequalificationReportAck](docs/Model/PrequalificationReportAck.md)
- [PrequalificationReportAssetSummary](docs/Model/PrequalificationReportAssetSummary.md)
- [PrequalificationReportConstraints](docs/Model/PrequalificationReportConstraints.md)
- [PrequalificationReportConstraintsOut](docs/Model/PrequalificationReportConstraintsOut.md)
- [Receiver](docs/Model/Receiver.md)
- [RegisteredApplication](docs/Model/RegisteredApplication.md)
- [Report](docs/Model/Report.md)
- [ReportAccountPosition](docs/Model/ReportAccountPosition.md)
- [ReportCustomField](docs/Model/ReportCustomField.md)
- [ReportIncomeEstimate](docs/Model/ReportIncomeEstimate.md)
- [ReportIncomeStreamSummary](docs/Model/ReportIncomeStreamSummary.md)
- [ReportInstitution](docs/Model/ReportInstitution.md)
- [ReportInstitutionAccount](docs/Model/ReportInstitutionAccount.md)
- [ReportSummaries](docs/Model/ReportSummaries.md)
- [ReportSummary](docs/Model/ReportSummary.md)
- [ReportTransaction](docs/Model/ReportTransaction.md)
- [ReportTransactionBase1](docs/Model/ReportTransactionBase1.md)
- [ReportTransactionBase2](docs/Model/ReportTransactionBase2.md)
- [ReportTransactionNewTxBased](docs/Model/ReportTransactionNewTxBased.md)
- [StateAttribute](docs/Model/StateAttribute.md)
- [StatePeriod](docs/Model/StatePeriod.md)
- [StateTimeInterval](docs/Model/StateTimeInterval.md)
- [StatementData](docs/Model/StatementData.md)
- [StatementReport](docs/Model/StatementReport.md)
- [StatementReportAck](docs/Model/StatementReportAck.md)
- [StatementReportConstraints](docs/Model/StatementReportConstraints.md)
- [StreamModel](docs/Model/StreamModel.md)
- [SubscriptionRecord](docs/Model/SubscriptionRecord.md)
- [TestTxPushTransaction](docs/Model/TestTxPushTransaction.md)
- [ThirdPartyAccessKeyData](docs/Model/ThirdPartyAccessKeyData.md)
- [ThirdPartyAccessKeyReceiptData](docs/Model/ThirdPartyAccessKeyReceiptData.md)
- [ThirdPartyAccessPeriod](docs/Model/ThirdPartyAccessPeriod.md)
- [ThirdPartyAccessProduct](docs/Model/ThirdPartyAccessProduct.md)
- [ThirdPartyAccessProof](docs/Model/ThirdPartyAccessProof.md)
- [ThirdPartyAccessProvenance](docs/Model/ThirdPartyAccessProvenance.md)
- [ThirdPartyAccessReceipt](docs/Model/ThirdPartyAccessReceipt.md)
- [ThirdPartyAccessReceiptData](docs/Model/ThirdPartyAccessReceiptData.md)
- [Transaction](docs/Model/Transaction.md)
- [TransactionalAttribute](docs/Model/TransactionalAttribute.md)
- [TransactionalPeriod](docs/Model/TransactionalPeriod.md)
- [TransactionalTimeInterval](docs/Model/TransactionalTimeInterval.md)
- [Transactions](docs/Model/Transactions.md)
- [TransactionsReport](docs/Model/TransactionsReport.md)
- [TransactionsReportAccount](docs/Model/TransactionsReportAccount.md)
- [TransactionsReportAck](docs/Model/TransactionsReportAck.md)
- [TransactionsReportConstraints](docs/Model/TransactionsReportConstraints.md)
- [TransactionsReportConstraintsOut](docs/Model/TransactionsReportConstraintsOut.md)
- [TxPushSubscriptionParameters](docs/Model/TxPushSubscriptionParameters.md)
- [TxPushSubscriptions](docs/Model/TxPushSubscriptions.md)
- [TxVerifyInterview](docs/Model/TxVerifyInterview.md)
- [VOAIReportIncomeStream](docs/Model/VOAIReportIncomeStream.md)
- [VOAReport](docs/Model/VOAReport.md)
- [VOAReportAccount](docs/Model/VOAReportAccount.md)
- [VOAReportAck](docs/Model/VOAReportAck.md)
- [VOAReportConstraints](docs/Model/VOAReportConstraints.md)
- [VOAReportConstraintsOut](docs/Model/VOAReportConstraintsOut.md)
- [VOAWithIncomeReport](docs/Model/VOAWithIncomeReport.md)
- [VOAWithIncomeReportAccount](docs/Model/VOAWithIncomeReportAccount.md)
- [VOAWithIncomeReportAck](docs/Model/VOAWithIncomeReportAck.md)
- [VOAWithIncomeReportConstraints](docs/Model/VOAWithIncomeReportConstraints.md)
- [VOAWithIncomeReportConstraintsOut](docs/Model/VOAWithIncomeReportConstraintsOut.md)
- [VOEPayrollReport](docs/Model/VOEPayrollReport.md)
- [VOETransactionsReport](docs/Model/VOETransactionsReport.md)
- [VOETransactionsReportAccount](docs/Model/VOETransactionsReportAccount.md)
- [VOETransactionsReportAck](docs/Model/VOETransactionsReportAck.md)
- [VOETransactionsReportConstraints](docs/Model/VOETransactionsReportConstraints.md)
- [VOETransactionsReportConstraintsOut](docs/Model/VOETransactionsReportConstraintsOut.md)
- [VOETransactionsReportIncomeStream](docs/Model/VOETransactionsReportIncomeStream.md)
- [VOIEPayStatement](docs/Model/VOIEPayStatement.md)
- [VOIEPayrollReport](docs/Model/VOIEPayrollReport.md)
- [VOIEPaystubPayStatement](docs/Model/VOIEPaystubPayStatement.md)
- [VOIEPaystubReport](docs/Model/VOIEPaystubReport.md)
- [VOIEPaystubReportAck](docs/Model/VOIEPaystubReportAck.md)
- [VOIEPaystubWithStatementPayStatement](docs/Model/VOIEPaystubWithStatementPayStatement.md)
- [VOIEPaystubWithTXVerifyReport](docs/Model/VOIEPaystubWithTXVerifyReport.md)
- [VOIEPaystubWithTXVerifyReportAck](docs/Model/VOIEPaystubWithTXVerifyReportAck.md)
- [VOIEReportConstraints](docs/Model/VOIEReportConstraints.md)
- [VOIETXVerifyReportAccount](docs/Model/VOIETXVerifyReportAccount.md)
- [VOIETXVerifyReportIncomeStream](docs/Model/VOIETXVerifyReportIncomeStream.md)
- [VOIEWithInterviewData](docs/Model/VOIEWithInterviewData.md)
- [VOIEWithStatementData](docs/Model/VOIEWithStatementData.md)
- [VOIEWithTXVerifyReportConstraints](docs/Model/VOIEWithTXVerifyReportConstraints.md)
- [VOIEWithTXVerifyReportConstraintsOut](docs/Model/VOIEWithTXVerifyReportConstraintsOut.md)
- [VOIReport](docs/Model/VOIReport.md)
- [VOIReportAccount](docs/Model/VOIReportAccount.md)
- [VOIReportAck](docs/Model/VOIReportAck.md)
- [VOIReportConstraints](docs/Model/VOIReportConstraints.md)
- [VOIReportConstraintsOut](docs/Model/VOIReportConstraintsOut.md)
- [VOIReportIncomeStream](docs/Model/VOIReportIncomeStream.md)
- [VerifiedMicroDeposit](docs/Model/VerifiedMicroDeposit.md)

## Authorization

Authentication schemes defined for the API:
### FinicityAppKey

- **Type**: API key
- **API key parameter name**: Finicity-App-Key
- **Location**: HTTP header


### FinicityAppToken

- **Type**: API key
- **API key parameter name**: Finicity-App-Token
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

apisupport@mastercard.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.16.1`
    - Generator version: `7.4.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
