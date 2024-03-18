<?php
/**
 * VOAReportAccount
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
 * VOAReportAccount Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VOAReportAccount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VOAReportAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'number' => 'string',
        'owner_name' => 'string',
        'owner_address' => 'string',
        'name' => 'string',
        'type' => 'string',
        'available_balance' => 'float',
        'aggregation_status_code' => 'int',
        'balance' => 'float',
        'balance_date' => 'int',
        'average_monthly_balance' => 'float',
        'tot_number_insufficient_funds_fee_debit_tx_account' => 'int',
        'tot_number_insufficient_funds_fee_debit_tx_over2_months_account' => 'int',
        'tot_number_days_since_most_recent_insufficient_funds_fee_debit_tx_account' => 'int',
        'transactions' => '\OpenAPI\Client\Model\ReportTransactionNewTxBased[]',
        'details' => '\OpenAPI\Client\Model\AccountDetailsTxBased',
        'position' => '\OpenAPI\Client\Model\ReportAccountPosition',
        'asset' => '\OpenAPI\Client\Model\PrequalificationReportAssetSummary'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'number' => null,
        'owner_name' => null,
        'owner_address' => null,
        'name' => null,
        'type' => null,
        'available_balance' => null,
        'aggregation_status_code' => 'int32',
        'balance' => null,
        'balance_date' => 'int64',
        'average_monthly_balance' => null,
        'tot_number_insufficient_funds_fee_debit_tx_account' => 'int64',
        'tot_number_insufficient_funds_fee_debit_tx_over2_months_account' => 'int64',
        'tot_number_days_since_most_recent_insufficient_funds_fee_debit_tx_account' => 'int64',
        'transactions' => null,
        'details' => null,
        'position' => null,
        'asset' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'number' => false,
        'owner_name' => false,
        'owner_address' => false,
        'name' => false,
        'type' => false,
        'available_balance' => false,
        'aggregation_status_code' => false,
        'balance' => false,
        'balance_date' => false,
        'average_monthly_balance' => false,
        'tot_number_insufficient_funds_fee_debit_tx_account' => false,
        'tot_number_insufficient_funds_fee_debit_tx_over2_months_account' => false,
        'tot_number_days_since_most_recent_insufficient_funds_fee_debit_tx_account' => false,
        'transactions' => false,
        'details' => false,
        'position' => false,
        'asset' => false
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
        'owner_name' => 'ownerName',
        'owner_address' => 'ownerAddress',
        'name' => 'name',
        'type' => 'type',
        'available_balance' => 'availableBalance',
        'aggregation_status_code' => 'aggregationStatusCode',
        'balance' => 'balance',
        'balance_date' => 'balanceDate',
        'average_monthly_balance' => 'averageMonthlyBalance',
        'tot_number_insufficient_funds_fee_debit_tx_account' => 'totNumberInsufficientFundsFeeDebitTxAccount',
        'tot_number_insufficient_funds_fee_debit_tx_over2_months_account' => 'totNumberInsufficientFundsFeeDebitTxOver2MonthsAccount',
        'tot_number_days_since_most_recent_insufficient_funds_fee_debit_tx_account' => 'totNumberDaysSinceMostRecentInsufficientFundsFeeDebitTxAccount',
        'transactions' => 'transactions',
        'details' => 'details',
        'position' => 'position',
        'asset' => 'asset'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'number' => 'setNumber',
        'owner_name' => 'setOwnerName',
        'owner_address' => 'setOwnerAddress',
        'name' => 'setName',
        'type' => 'setType',
        'available_balance' => 'setAvailableBalance',
        'aggregation_status_code' => 'setAggregationStatusCode',
        'balance' => 'setBalance',
        'balance_date' => 'setBalanceDate',
        'average_monthly_balance' => 'setAverageMonthlyBalance',
        'tot_number_insufficient_funds_fee_debit_tx_account' => 'setTotNumberInsufficientFundsFeeDebitTxAccount',
        'tot_number_insufficient_funds_fee_debit_tx_over2_months_account' => 'setTotNumberInsufficientFundsFeeDebitTxOver2MonthsAccount',
        'tot_number_days_since_most_recent_insufficient_funds_fee_debit_tx_account' => 'setTotNumberDaysSinceMostRecentInsufficientFundsFeeDebitTxAccount',
        'transactions' => 'setTransactions',
        'details' => 'setDetails',
        'position' => 'setPosition',
        'asset' => 'setAsset'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'number' => 'getNumber',
        'owner_name' => 'getOwnerName',
        'owner_address' => 'getOwnerAddress',
        'name' => 'getName',
        'type' => 'getType',
        'available_balance' => 'getAvailableBalance',
        'aggregation_status_code' => 'getAggregationStatusCode',
        'balance' => 'getBalance',
        'balance_date' => 'getBalanceDate',
        'average_monthly_balance' => 'getAverageMonthlyBalance',
        'tot_number_insufficient_funds_fee_debit_tx_account' => 'getTotNumberInsufficientFundsFeeDebitTxAccount',
        'tot_number_insufficient_funds_fee_debit_tx_over2_months_account' => 'getTotNumberInsufficientFundsFeeDebitTxOver2MonthsAccount',
        'tot_number_days_since_most_recent_insufficient_funds_fee_debit_tx_account' => 'getTotNumberDaysSinceMostRecentInsufficientFundsFeeDebitTxAccount',
        'transactions' => 'getTransactions',
        'details' => 'getDetails',
        'position' => 'getPosition',
        'asset' => 'getAsset'
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
        $this->setIfExists('owner_name', $data ?? [], null);
        $this->setIfExists('owner_address', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('available_balance', $data ?? [], null);
        $this->setIfExists('aggregation_status_code', $data ?? [], null);
        $this->setIfExists('balance', $data ?? [], null);
        $this->setIfExists('balance_date', $data ?? [], null);
        $this->setIfExists('average_monthly_balance', $data ?? [], null);
        $this->setIfExists('tot_number_insufficient_funds_fee_debit_tx_account', $data ?? [], null);
        $this->setIfExists('tot_number_insufficient_funds_fee_debit_tx_over2_months_account', $data ?? [], null);
        $this->setIfExists('tot_number_days_since_most_recent_insufficient_funds_fee_debit_tx_account', $data ?? [], null);
        $this->setIfExists('transactions', $data ?? [], null);
        $this->setIfExists('details', $data ?? [], null);
        $this->setIfExists('position', $data ?? [], null);
        $this->setIfExists('asset', $data ?? [], null);
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
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id The ID of the account
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
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number The account number from the institution (all digits except the last four are obfuscated)
     *
     * @return self
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
     * Gets owner_name
     *
     * @return string|null
     */
    public function getOwnerName()
    {
        return $this->container['owner_name'];
    }

    /**
     * Sets owner_name
     *
     * @param string|null $owner_name The name(s) of the account owner(s). This field is optional. If no owner information is available, this field will not appear in the report.
     *
     * @return self
     */
    public function setOwnerName($owner_name)
    {
        if (is_null($owner_name)) {
            throw new \InvalidArgumentException('non-nullable owner_name cannot be null');
        }
        $this->container['owner_name'] = $owner_name;

        return $this;
    }

    /**
     * Gets owner_address
     *
     * @return string|null
     */
    public function getOwnerAddress()
    {
        return $this->container['owner_address'];
    }

    /**
     * Sets owner_address
     *
     * @param string|null $owner_address The mailing address of the account owner(s). This field is optional. If no owner information is available, this field will not appear in the report.
     *
     * @return self
     */
    public function setOwnerAddress($owner_address)
    {
        if (is_null($owner_address)) {
            throw new \InvalidArgumentException('non-nullable owner_address cannot be null');
        }
        $this->container['owner_address'] = $owner_address;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The account name from the institution
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
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type One of the values from account types
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
     * Gets available_balance
     *
     * @return float|null
     */
    public function getAvailableBalance()
    {
        return $this->container['available_balance'];
    }

    /**
     * Sets available_balance
     *
     * @param float|null $available_balance The available balance for the account
     *
     * @return self
     */
    public function setAvailableBalance($available_balance)
    {
        if (is_null($available_balance)) {
            throw new \InvalidArgumentException('non-nullable available_balance cannot be null');
        }
        $this->container['available_balance'] = $available_balance;

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
     * @param int|null $aggregation_status_code The status of the most recent aggregation attempt
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
     * @param float|null $balance The cleared balance of the account as-of balanceDate
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
     * @param int|null $balance_date A timestamp showing when the balance was captured
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
     * Gets average_monthly_balance
     *
     * @return float|null
     */
    public function getAverageMonthlyBalance()
    {
        return $this->container['average_monthly_balance'];
    }

    /**
     * Sets average_monthly_balance
     *
     * @param float|null $average_monthly_balance The average monthly balance of this account
     *
     * @return self
     */
    public function setAverageMonthlyBalance($average_monthly_balance)
    {
        if (is_null($average_monthly_balance)) {
            throw new \InvalidArgumentException('non-nullable average_monthly_balance cannot be null');
        }
        $this->container['average_monthly_balance'] = $average_monthly_balance;

        return $this;
    }

    /**
     * Gets tot_number_insufficient_funds_fee_debit_tx_account
     *
     * @return int|null
     */
    public function getTotNumberInsufficientFundsFeeDebitTxAccount()
    {
        return $this->container['tot_number_insufficient_funds_fee_debit_tx_account'];
    }

    /**
     * Sets tot_number_insufficient_funds_fee_debit_tx_account
     *
     * @param int|null $tot_number_insufficient_funds_fee_debit_tx_account The count for the total number of insufficient funds transactions, based on the `fromDate` of the report.
     *
     * @return self
     */
    public function setTotNumberInsufficientFundsFeeDebitTxAccount($tot_number_insufficient_funds_fee_debit_tx_account)
    {
        if (is_null($tot_number_insufficient_funds_fee_debit_tx_account)) {
            throw new \InvalidArgumentException('non-nullable tot_number_insufficient_funds_fee_debit_tx_account cannot be null');
        }
        $this->container['tot_number_insufficient_funds_fee_debit_tx_account'] = $tot_number_insufficient_funds_fee_debit_tx_account;

        return $this;
    }

    /**
     * Gets tot_number_insufficient_funds_fee_debit_tx_over2_months_account
     *
     * @return int|null
     */
    public function getTotNumberInsufficientFundsFeeDebitTxOver2MonthsAccount()
    {
        return $this->container['tot_number_insufficient_funds_fee_debit_tx_over2_months_account'];
    }

    /**
     * Sets tot_number_insufficient_funds_fee_debit_tx_over2_months_account
     *
     * @param int|null $tot_number_insufficient_funds_fee_debit_tx_over2_months_account The count for the total number of insufficient funds transactions for the last two months, based on the `fromDate` of the report.
     *
     * @return self
     */
    public function setTotNumberInsufficientFundsFeeDebitTxOver2MonthsAccount($tot_number_insufficient_funds_fee_debit_tx_over2_months_account)
    {
        if (is_null($tot_number_insufficient_funds_fee_debit_tx_over2_months_account)) {
            throw new \InvalidArgumentException('non-nullable tot_number_insufficient_funds_fee_debit_tx_over2_months_account cannot be null');
        }
        $this->container['tot_number_insufficient_funds_fee_debit_tx_over2_months_account'] = $tot_number_insufficient_funds_fee_debit_tx_over2_months_account;

        return $this;
    }

    /**
     * Gets tot_number_days_since_most_recent_insufficient_funds_fee_debit_tx_account
     *
     * @return int|null
     */
    public function getTotNumberDaysSinceMostRecentInsufficientFundsFeeDebitTxAccount()
    {
        return $this->container['tot_number_days_since_most_recent_insufficient_funds_fee_debit_tx_account'];
    }

    /**
     * Sets tot_number_days_since_most_recent_insufficient_funds_fee_debit_tx_account
     *
     * @param int|null $tot_number_days_since_most_recent_insufficient_funds_fee_debit_tx_account The number of days since the most recent insufficient funds transaction, based on the `fromDate` of the report.
     *
     * @return self
     */
    public function setTotNumberDaysSinceMostRecentInsufficientFundsFeeDebitTxAccount($tot_number_days_since_most_recent_insufficient_funds_fee_debit_tx_account)
    {
        if (is_null($tot_number_days_since_most_recent_insufficient_funds_fee_debit_tx_account)) {
            throw new \InvalidArgumentException('non-nullable tot_number_days_since_most_recent_insufficient_funds_fee_debit_tx_account cannot be null');
        }
        $this->container['tot_number_days_since_most_recent_insufficient_funds_fee_debit_tx_account'] = $tot_number_days_since_most_recent_insufficient_funds_fee_debit_tx_account;

        return $this;
    }

    /**
     * Gets transactions
     *
     * @return \OpenAPI\Client\Model\ReportTransactionNewTxBased[]|null
     */
    public function getTransactions()
    {
        return $this->container['transactions'];
    }

    /**
     * Sets transactions
     *
     * @param \OpenAPI\Client\Model\ReportTransactionNewTxBased[]|null $transactions a list of transaction records
     *
     * @return self
     */
    public function setTransactions($transactions)
    {
        if (is_null($transactions)) {
            throw new \InvalidArgumentException('non-nullable transactions cannot be null');
        }
        $this->container['transactions'] = $transactions;

        return $this;
    }

    /**
     * Gets details
     *
     * @return \OpenAPI\Client\Model\AccountDetailsTxBased|null
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \OpenAPI\Client\Model\AccountDetailsTxBased|null $details details
     *
     * @return self
     */
    public function setDetails($details)
    {
        if (is_null($details)) {
            throw new \InvalidArgumentException('non-nullable details cannot be null');
        }
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets position
     *
     * @return \OpenAPI\Client\Model\ReportAccountPosition|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param \OpenAPI\Client\Model\ReportAccountPosition|null $position position
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
     * Gets asset
     *
     * @return \OpenAPI\Client\Model\PrequalificationReportAssetSummary|null
     */
    public function getAsset()
    {
        return $this->container['asset'];
    }

    /**
     * Sets asset
     *
     * @param \OpenAPI\Client\Model\PrequalificationReportAssetSummary|null $asset asset
     *
     * @return self
     */
    public function setAsset($asset)
    {
        if (is_null($asset)) {
            throw new \InvalidArgumentException('non-nullable asset cannot be null');
        }
        $this->container['asset'] = $asset;

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


