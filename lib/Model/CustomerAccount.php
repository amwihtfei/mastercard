<?php
/**
 * CustomerAccount
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Open Banking
 *
 * OpenAPI specification for Finicity APIs.  Open Banking solutions in the US are provided by Finicity, a Mastercard company.
 *
 * The version of the OpenAPI document: 1.16.1
 * Contact: apisupport@mastercard.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * CustomerAccount Class Doc Comment
 *
 * @category Class
 * @description An account represents a bank account such as a checking or savings that the customer has added via the Connect interface.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomerAccount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'number' => 'string',
        'account_number_display' => 'string',
        'real_account_number_last4' => 'string',
        'name' => 'string',
        'balance' => 'float',
        'type' => 'string',
        'aggregation_status_code' => 'int',
        'status' => 'string',
        'customer_id' => 'string',
        'institution_id' => 'string',
        'balance_date' => 'int',
        'aggregation_success_date' => 'int',
        'aggregation_attempt_date' => 'int',
        'created_date' => 'int',
        'last_updated_date' => 'int',
        'market_segment' => 'string',
        'currency' => 'string',
        'last_transaction_date' => 'int',
        'oldest_transaction_date' => 'int',
        'institution_login_id' => 'int',
        'detail' => '\OpenAPI\Client\Model\CustomerAccountDetail',
        'position' => '\OpenAPI\Client\Model\CustomerAccountPosition[]',
        'display_position' => 'int',
        'parent_account' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'number' => null,
        'account_number_display' => null,
        'real_account_number_last4' => null,
        'name' => null,
        'balance' => null,
        'type' => null,
        'aggregation_status_code' => null,
        'status' => null,
        'customer_id' => null,
        'institution_id' => null,
        'balance_date' => 'int64',
        'aggregation_success_date' => 'int64',
        'aggregation_attempt_date' => 'int64',
        'created_date' => 'int64',
        'last_updated_date' => 'int64',
        'market_segment' => null,
        'currency' => null,
        'last_transaction_date' => 'int64',
        'oldest_transaction_date' => 'int64',
        'institution_login_id' => 'int64',
        'detail' => null,
        'position' => null,
        'display_position' => 'int32',
        'parent_account' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'number' => false,
        'account_number_display' => false,
        'real_account_number_last4' => false,
        'name' => false,
        'balance' => false,
        'type' => false,
        'aggregation_status_code' => false,
        'status' => false,
        'customer_id' => false,
        'institution_id' => false,
        'balance_date' => false,
        'aggregation_success_date' => false,
        'aggregation_attempt_date' => false,
        'created_date' => false,
        'last_updated_date' => false,
        'market_segment' => false,
        'currency' => false,
        'last_transaction_date' => false,
        'oldest_transaction_date' => false,
        'institution_login_id' => false,
        'detail' => false,
        'position' => false,
        'display_position' => false,
        'parent_account' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'number' => 'number',
        'account_number_display' => 'accountNumberDisplay',
        'real_account_number_last4' => 'realAccountNumberLast4',
        'name' => 'name',
        'balance' => 'balance',
        'type' => 'type',
        'aggregation_status_code' => 'aggregationStatusCode',
        'status' => 'status',
        'customer_id' => 'customerId',
        'institution_id' => 'institutionId',
        'balance_date' => 'balanceDate',
        'aggregation_success_date' => 'aggregationSuccessDate',
        'aggregation_attempt_date' => 'aggregationAttemptDate',
        'created_date' => 'createdDate',
        'last_updated_date' => 'lastUpdatedDate',
        'market_segment' => 'marketSegment',
        'currency' => 'currency',
        'last_transaction_date' => 'lastTransactionDate',
        'oldest_transaction_date' => 'oldestTransactionDate',
        'institution_login_id' => 'institutionLoginId',
        'detail' => 'detail',
        'position' => 'position',
        'display_position' => 'displayPosition',
        'parent_account' => 'parentAccount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'number' => 'setNumber',
        'account_number_display' => 'setAccountNumberDisplay',
        'real_account_number_last4' => 'setRealAccountNumberLast4',
        'name' => 'setName',
        'balance' => 'setBalance',
        'type' => 'setType',
        'aggregation_status_code' => 'setAggregationStatusCode',
        'status' => 'setStatus',
        'customer_id' => 'setCustomerId',
        'institution_id' => 'setInstitutionId',
        'balance_date' => 'setBalanceDate',
        'aggregation_success_date' => 'setAggregationSuccessDate',
        'aggregation_attempt_date' => 'setAggregationAttemptDate',
        'created_date' => 'setCreatedDate',
        'last_updated_date' => 'setLastUpdatedDate',
        'market_segment' => 'setMarketSegment',
        'currency' => 'setCurrency',
        'last_transaction_date' => 'setLastTransactionDate',
        'oldest_transaction_date' => 'setOldestTransactionDate',
        'institution_login_id' => 'setInstitutionLoginId',
        'detail' => 'setDetail',
        'position' => 'setPosition',
        'display_position' => 'setDisplayPosition',
        'parent_account' => 'setParentAccount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'number' => 'getNumber',
        'account_number_display' => 'getAccountNumberDisplay',
        'real_account_number_last4' => 'getRealAccountNumberLast4',
        'name' => 'getName',
        'balance' => 'getBalance',
        'type' => 'getType',
        'aggregation_status_code' => 'getAggregationStatusCode',
        'status' => 'getStatus',
        'customer_id' => 'getCustomerId',
        'institution_id' => 'getInstitutionId',
        'balance_date' => 'getBalanceDate',
        'aggregation_success_date' => 'getAggregationSuccessDate',
        'aggregation_attempt_date' => 'getAggregationAttemptDate',
        'created_date' => 'getCreatedDate',
        'last_updated_date' => 'getLastUpdatedDate',
        'market_segment' => 'getMarketSegment',
        'currency' => 'getCurrency',
        'last_transaction_date' => 'getLastTransactionDate',
        'oldest_transaction_date' => 'getOldestTransactionDate',
        'institution_login_id' => 'getInstitutionLoginId',
        'detail' => 'getDetail',
        'position' => 'getPosition',
        'display_position' => 'getDisplayPosition',
        'parent_account' => 'getParentAccount'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('account_number_display', $data ?? [], null);
        $this->setIfExists('real_account_number_last4', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('balance', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('aggregation_status_code', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('customer_id', $data ?? [], null);
        $this->setIfExists('institution_id', $data ?? [], null);
        $this->setIfExists('balance_date', $data ?? [], null);
        $this->setIfExists('aggregation_success_date', $data ?? [], null);
        $this->setIfExists('aggregation_attempt_date', $data ?? [], null);
        $this->setIfExists('created_date', $data ?? [], null);
        $this->setIfExists('last_updated_date', $data ?? [], null);
        $this->setIfExists('market_segment', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('last_transaction_date', $data ?? [], null);
        $this->setIfExists('oldest_transaction_date', $data ?? [], null);
        $this->setIfExists('institution_login_id', $data ?? [], null);
        $this->setIfExists('detail', $data ?? [], null);
        $this->setIfExists('position', $data ?? [], null);
        $this->setIfExists('display_position', $data ?? [], null);
        $this->setIfExists('parent_account', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if ($this->container['account_number_display'] === null) {
            $invalidProperties[] = "'account_number_display' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['customer_id'] === null) {
            $invalidProperties[] = "'customer_id' can't be null";
        }
        if ($this->container['institution_id'] === null) {
            $invalidProperties[] = "'institution_id' can't be null";
        }
        if ($this->container['created_date'] === null) {
            $invalidProperties[] = "'created_date' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['institution_login_id'] === null) {
            $invalidProperties[] = "'institution_login_id' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id An account ID
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     * @deprecated
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number The account number from the institution
     *
     * @return self
     * @deprecated
     */
    public function setNumber($number)
    {
        if (is_null($number)) {
            throw new \InvalidArgumentException('non-nullable number cannot be null');
        }
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets account_number_display
     *
     * @return string
     */
    public function getAccountNumberDisplay()
    {
        return $this->container['account_number_display'];
    }

    /**
     * Sets account_number_display
     *
     * @param string $account_number_display The account number from a financial institution in truncated format:    * Last four digits: \"1234\"    * Last four digits with suffix: \"1234-9\"    * Full value for string accounts: \"john@gmail.com\" example: '1234-9'
     *
     * @return self
     */
    public function setAccountNumberDisplay($account_number_display)
    {
        if (is_null($account_number_display)) {
            throw new \InvalidArgumentException('non-nullable account_number_display cannot be null');
        }
        $this->container['account_number_display'] = $account_number_display;

        return $this;
    }

    /**
     * Gets real_account_number_last4
     *
     * @return string|null
     */
    public function getRealAccountNumberLast4()
    {
        return $this->container['real_account_number_last4'];
    }

    /**
     * Sets real_account_number_last4
     *
     * @param string|null $real_account_number_last4 The last 4 digits of the ACH account number
     *
     * @return self
     */
    public function setRealAccountNumberLast4($real_account_number_last4)
    {
        if (is_null($real_account_number_last4)) {
            throw new \InvalidArgumentException('non-nullable real_account_number_last4 cannot be null');
        }
        $this->container['real_account_number_last4'] = $real_account_number_last4;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The account name from the institution
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return float|null
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param float|null $balance The cleared balance of the account as of `balanceDate`
     *
     * @return self
     */
    public function setBalance($balance)
    {
        if (is_null($balance)) {
            throw new \InvalidArgumentException('non-nullable balance cannot be null');
        }
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The list of supported account types. * \"checking\": Standard checking * \"savings\": Standard savings * \"cd\": Certificates of deposit * \"moneyMarket\": Money Market * \"creditCard\": Standard credit cards * \"lineOfCredit\": Home equity, line of credit * \"investment\": Generic investment (no details) * \"investmentTaxDeferred\": Generic tax-advantaged investment (no details) * \"employeeStockPurchasePlan\": ESPP, Employee Stock Ownership Plans (ESOP), Stock Purchase Plans * \"ira\": Individual Retirement Account (not Rollover or Roth) * \"401k\": 401K Plan * \"roth\": Roth IRA, Roth 401K * \"403b\": 403B Plan * \"529plan\": 529 Plan (True value is 529) * \"rollover\": Rollover IRA * \"ugma\": Uniform Gifts to Minors Act * \"utma\": Uniform Transfers to Minors Act * \"keogh\": Keogh Plan * \"457plan\": 457 Plan (True value is 457) * \"401a\": 401A Plan * \"brokerageAccount\": Brokerage Account * \"educationSavings\": Education Savings Account that is not a 529 * \"healthSavingsAccount\": HSA (Health Savings Accounts) * \"pension\": Pension * \"profitSharingPlan\": Profit Sharing Plan * \"roth401k\": Roth 401K * \"sepIRA\": Simplified Employee Pension IRA * \"simpleIRA\": Simple IRA * \"thriftSavingsPlan\": Thrift Savings Plan * \"variableAnnuity\": Variable Annuity * \"cryptocurrency\": Cryptocurrency Wallet, Cryptocurrency Account * \"mortgage\": Standard Mortgages * \"loan\": Auto loans, equity loans, other loans * \"studentLoan\": Student Loan * \"studentLoanGroup\": Student Loan Group * \"studentLoanAccount\": Student Loan Account
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets aggregation_status_code
     *
     * @return int|null
     */
    public function getAggregationStatusCode()
    {
        return $this->container['aggregation_status_code'];
    }

    /**
     * Sets aggregation_status_code
     *
     * @param int|null $aggregation_status_code The status of the most recent aggregation attempt (see [Aggregation Status Codes](https://developer.mastercard.com/open-banking-us/documentation/products/manage/account-aggregation/#aggregation-status-codes)). Won't be present until you have run your first aggregation for the account.
     *
     * @return self
     */
    public function setAggregationStatusCode($aggregation_status_code)
    {
        if (is_null($aggregation_status_code)) {
            throw new \InvalidArgumentException('non-nullable aggregation_status_code cannot be null');
        }
        $this->container['aggregation_status_code'] = $aggregation_status_code;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status \"pending\" during account discovery, always \"active\" following   successful account activation
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string $customer_id A customer ID. See Add Customer API for how to create a customer ID.
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        if (is_null($customer_id)) {
            throw new \InvalidArgumentException('non-nullable customer_id cannot be null');
        }
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets institution_id
     *
     * @return string
     */
    public function getInstitutionId()
    {
        return $this->container['institution_id'];
    }

    /**
     * Sets institution_id
     *
     * @param string $institution_id The ID of a financial institution
     *
     * @return self
     */
    public function setInstitutionId($institution_id)
    {
        if (is_null($institution_id)) {
            throw new \InvalidArgumentException('non-nullable institution_id cannot be null');
        }
        $this->container['institution_id'] = $institution_id;

        return $this;
    }

    /**
     * Gets balance_date
     *
     * @return int|null
     */
    public function getBalanceDate()
    {
        return $this->container['balance_date'];
    }

    /**
     * Sets balance_date
     *
     * @param int|null $balance_date A timestamp showing when the balance was captured. A date in Unix epoch time (in seconds). See: [Handling Epoch Dates and Times](https://developer.mastercard.com/open-banking-us/documentation/codes-and-formats/).
     *
     * @return self
     */
    public function setBalanceDate($balance_date)
    {
        if (is_null($balance_date)) {
            throw new \InvalidArgumentException('non-nullable balance_date cannot be null');
        }
        $this->container['balance_date'] = $balance_date;

        return $this;
    }

    /**
     * Gets aggregation_success_date
     *
     * @return int|null
     */
    public function getAggregationSuccessDate()
    {
        return $this->container['aggregation_success_date'];
    }

    /**
     * Sets aggregation_success_date
     *
     * @param int|null $aggregation_success_date A timestamp showing the last successful aggregation of the account. This will not be present until you have run your first aggregation for the account. A date in Unix epoch time (in seconds). See: [Handling Epoch Dates and Times](https://developer.mastercard.com/open-banking-us/documentation/codes-and-formats/).
     *
     * @return self
     */
    public function setAggregationSuccessDate($aggregation_success_date)
    {
        if (is_null($aggregation_success_date)) {
            throw new \InvalidArgumentException('non-nullable aggregation_success_date cannot be null');
        }
        $this->container['aggregation_success_date'] = $aggregation_success_date;

        return $this;
    }

    /**
     * Gets aggregation_attempt_date
     *
     * @return int|null
     */
    public function getAggregationAttemptDate()
    {
        return $this->container['aggregation_attempt_date'];
    }

    /**
     * Sets aggregation_attempt_date
     *
     * @param int|null $aggregation_attempt_date A timestamp showing the last aggregation attempt, whether successful or not. This will not be present until you have run your first aggregation for the account. A date in Unix epoch time (in seconds). See: [Handling Epoch Dates and Times](https://developer.mastercard.com/open-banking-us/documentation/codes-and-formats/).
     *
     * @return self
     */
    public function setAggregationAttemptDate($aggregation_attempt_date)
    {
        if (is_null($aggregation_attempt_date)) {
            throw new \InvalidArgumentException('non-nullable aggregation_attempt_date cannot be null');
        }
        $this->container['aggregation_attempt_date'] = $aggregation_attempt_date;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return int
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param int $created_date A timestamp showing when the account was added to the system. A date in Unix epoch time (in seconds). See: [Handling Epoch Dates and Times](https://developer.mastercard.com/open-banking-us/documentation/codes-and-formats/).
     *
     * @return self
     */
    public function setCreatedDate($created_date)
    {
        if (is_null($created_date)) {
            throw new \InvalidArgumentException('non-nullable created_date cannot be null');
        }
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets last_updated_date
     *
     * @return int|null
     */
    public function getLastUpdatedDate()
    {
        return $this->container['last_updated_date'];
    }

    /**
     * Sets last_updated_date
     *
     * @param int|null $last_updated_date A timestamp showing when the account was last modified to the system. A date in Unix epoch time (in seconds). See: [Handling Epoch Dates and Times](https://developer.mastercard.com/open-banking-us/documentation/codes-and-formats/).
     *
     * @return self
     */
    public function setLastUpdatedDate($last_updated_date)
    {
        if (is_null($last_updated_date)) {
            throw new \InvalidArgumentException('non-nullable last_updated_date cannot be null');
        }
        $this->container['last_updated_date'] = $last_updated_date;

        return $this;
    }

    /**
     * Gets market_segment
     *
     * @return string|null
     */
    public function getMarketSegment()
    {
        return $this->container['market_segment'];
    }

    /**
     * Sets market_segment
     *
     * @param string|null $market_segment The market segment of the account. Possible values: personal, business
     *
     * @return self
     */
    public function setMarketSegment($market_segment)
    {
        if (is_null($market_segment)) {
            throw new \InvalidArgumentException('non-nullable market_segment cannot be null');
        }
        $this->container['market_segment'] = $market_segment;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency A currency code
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets last_transaction_date
     *
     * @return int|null
     */
    public function getLastTransactionDate()
    {
        return $this->container['last_transaction_date'];
    }

    /**
     * Sets last_transaction_date
     *
     * @param int|null $last_transaction_date The date of the latest transaction on the account. This will not be present until you have run your first aggregation for the account. A date in Unix epoch time (in seconds). See: [Handling Epoch Dates and Times](https://developer.mastercard.com/open-banking-us/documentation/codes-and-formats/).
     *
     * @return self
     */
    public function setLastTransactionDate($last_transaction_date)
    {
        if (is_null($last_transaction_date)) {
            throw new \InvalidArgumentException('non-nullable last_transaction_date cannot be null');
        }
        $this->container['last_transaction_date'] = $last_transaction_date;

        return $this;
    }

    /**
     * Gets oldest_transaction_date
     *
     * @return int|null
     */
    public function getOldestTransactionDate()
    {
        return $this->container['oldest_transaction_date'];
    }

    /**
     * Sets oldest_transaction_date
     *
     * @param int|null $oldest_transaction_date The date of the oldest transaction in the transactions for the account. A date in Unix epoch time (in seconds). See: [Handling Epoch Dates and Times](https://developer.mastercard.com/open-banking-us/documentation/codes-and-formats/).
     *
     * @return self
     */
    public function setOldestTransactionDate($oldest_transaction_date)
    {
        if (is_null($oldest_transaction_date)) {
            throw new \InvalidArgumentException('non-nullable oldest_transaction_date cannot be null');
        }
        $this->container['oldest_transaction_date'] = $oldest_transaction_date;

        return $this;
    }

    /**
     * Gets institution_login_id
     *
     * @return int
     */
    public function getInstitutionLoginId()
    {
        return $this->container['institution_login_id'];
    }

    /**
     * Sets institution_login_id
     *
     * @param int $institution_login_id An institution login ID (from the account record), represented as a number
     *
     * @return self
     */
    public function setInstitutionLoginId($institution_login_id)
    {
        if (is_null($institution_login_id)) {
            throw new \InvalidArgumentException('non-nullable institution_login_id cannot be null');
        }
        $this->container['institution_login_id'] = $institution_login_id;

        return $this;
    }

    /**
     * Gets detail
     *
     * @return \OpenAPI\Client\Model\CustomerAccountDetail|null
     */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
     * Sets detail
     *
     * @param \OpenAPI\Client\Model\CustomerAccountDetail|null $detail detail
     *
     * @return self
     */
    public function setDetail($detail)
    {
        if (is_null($detail)) {
            throw new \InvalidArgumentException('non-nullable detail cannot be null');
        }
        $this->container['detail'] = $detail;

        return $this;
    }

    /**
     * Gets position
     *
     * @return \OpenAPI\Client\Model\CustomerAccountPosition[]|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param \OpenAPI\Client\Model\CustomerAccountPosition[]|null $position Investment holdings
     *
     * @return self
     */
    public function setPosition($position)
    {
        if (is_null($position)) {
            throw new \InvalidArgumentException('non-nullable position cannot be null');
        }
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets display_position
     *
     * @return int|null
     */
    public function getDisplayPosition()
    {
        return $this->container['display_position'];
    }

    /**
     * Sets display_position
     *
     * @param int|null $display_position Display position of the account at the financial institution, \"1\"     being the top listed account
     *
     * @return self
     */
    public function setDisplayPosition($display_position)
    {
        if (is_null($display_position)) {
            throw new \InvalidArgumentException('non-nullable display_position cannot be null');
        }
        $this->container['display_position'] = $display_position;

        return $this;
    }

    /**
     * Gets parent_account
     *
     * @return string|null
     */
    public function getParentAccount()
    {
        return $this->container['parent_account'];
    }

    /**
     * Sets parent_account
     *
     * @param string|null $parent_account The assigned account ID for the account one level higher in the student loan account hierarchy
     *
     * @return self
     */
    public function setParentAccount($parent_account)
    {
        if (is_null($parent_account)) {
            throw new \InvalidArgumentException('non-nullable parent_account cannot be null');
        }
        $this->container['parent_account'] = $parent_account;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

