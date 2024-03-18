<?php
/**
 * CashFlowReportAccount
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
 * CashFlowReportAccount Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CashFlowReportAccount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CashFlowReportAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'owner_name' => 'string',
        'owner_address' => 'string',
        'name' => 'string',
        'number' => 'string',
        'type' => 'string',
        'aggregation_status_code' => 'int',
        'current_balance' => 'float',
        'available_balance' => 'float',
        'balance_date' => 'int',
        'transactions' => '\OpenAPI\Client\Model\ReportTransaction[]',
        'cash_flow_balance' => '\OpenAPI\Client\Model\CashFlowCashFlowBalance',
        'cash_flow_credit' => '\OpenAPI\Client\Model\CashFlowCashFlowCredit',
        'cash_flow_debit' => '\OpenAPI\Client\Model\CashFlowCashFlowDebit',
        'cash_flow_characteristic' => '\OpenAPI\Client\Model\CashFlowCashFlowCharacteristic'
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
        'owner_name' => null,
        'owner_address' => null,
        'name' => null,
        'number' => null,
        'type' => null,
        'aggregation_status_code' => null,
        'current_balance' => null,
        'available_balance' => null,
        'balance_date' => 'int64',
        'transactions' => null,
        'cash_flow_balance' => null,
        'cash_flow_credit' => null,
        'cash_flow_debit' => null,
        'cash_flow_characteristic' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'owner_name' => false,
        'owner_address' => false,
        'name' => false,
        'number' => false,
        'type' => false,
        'aggregation_status_code' => false,
        'current_balance' => false,
        'available_balance' => false,
        'balance_date' => false,
        'transactions' => false,
        'cash_flow_balance' => false,
        'cash_flow_credit' => false,
        'cash_flow_debit' => false,
        'cash_flow_characteristic' => false
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
        'owner_name' => 'ownerName',
        'owner_address' => 'ownerAddress',
        'name' => 'name',
        'number' => 'number',
        'type' => 'type',
        'aggregation_status_code' => 'aggregationStatusCode',
        'current_balance' => 'currentBalance',
        'available_balance' => 'availableBalance',
        'balance_date' => 'balanceDate',
        'transactions' => 'transactions',
        'cash_flow_balance' => 'cashFlowBalance',
        'cash_flow_credit' => 'cashFlowCredit',
        'cash_flow_debit' => 'cashFlowDebit',
        'cash_flow_characteristic' => 'cashFlowCharacteristic'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'owner_name' => 'setOwnerName',
        'owner_address' => 'setOwnerAddress',
        'name' => 'setName',
        'number' => 'setNumber',
        'type' => 'setType',
        'aggregation_status_code' => 'setAggregationStatusCode',
        'current_balance' => 'setCurrentBalance',
        'available_balance' => 'setAvailableBalance',
        'balance_date' => 'setBalanceDate',
        'transactions' => 'setTransactions',
        'cash_flow_balance' => 'setCashFlowBalance',
        'cash_flow_credit' => 'setCashFlowCredit',
        'cash_flow_debit' => 'setCashFlowDebit',
        'cash_flow_characteristic' => 'setCashFlowCharacteristic'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'owner_name' => 'getOwnerName',
        'owner_address' => 'getOwnerAddress',
        'name' => 'getName',
        'number' => 'getNumber',
        'type' => 'getType',
        'aggregation_status_code' => 'getAggregationStatusCode',
        'current_balance' => 'getCurrentBalance',
        'available_balance' => 'getAvailableBalance',
        'balance_date' => 'getBalanceDate',
        'transactions' => 'getTransactions',
        'cash_flow_balance' => 'getCashFlowBalance',
        'cash_flow_credit' => 'getCashFlowCredit',
        'cash_flow_debit' => 'getCashFlowDebit',
        'cash_flow_characteristic' => 'getCashFlowCharacteristic'
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
        $this->setIfExists('owner_name', $data ?? [], null);
        $this->setIfExists('owner_address', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('aggregation_status_code', $data ?? [], null);
        $this->setIfExists('current_balance', $data ?? [], null);
        $this->setIfExists('available_balance', $data ?? [], null);
        $this->setIfExists('balance_date', $data ?? [], null);
        $this->setIfExists('transactions', $data ?? [], null);
        $this->setIfExists('cash_flow_balance', $data ?? [], null);
        $this->setIfExists('cash_flow_credit', $data ?? [], null);
        $this->setIfExists('cash_flow_debit', $data ?? [], null);
        $this->setIfExists('cash_flow_characteristic', $data ?? [], null);
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
     * @param int|null $id Finicity account ID
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
     * @param string|null $owner_name The name(s) of the account owner(s), retrieved from the institution.
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
     * @param string|null $owner_address The mailing address of the account owner, retrieved from the institution.
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
     * @param string|null $number The account number from the institution (obfuscated)
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
     * @param string|null $type CFR: `ALL` (`checking` / `savings` / `loan` / `mortgage` / `credit card` / `CD` / `MM` / `investment`...)
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
     * @param int|null $aggregation_status_code The status of the most recent aggregation attempt for this account (non-zero means the account was not accessed successfully for this report, and additional fields for this account may not be reliable)
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
     * Gets current_balance
     *
     * @return float|null
     */
    public function getCurrentBalance()
    {
        return $this->container['current_balance'];
    }

    /**
     * Sets current_balance
     *
     * @param float|null $current_balance The cleared balance of the account as-of `balanceDate`
     *
     * @return self
     */
    public function setCurrentBalance($current_balance)
    {
        if (is_null($current_balance)) {
            throw new \InvalidArgumentException('non-nullable current_balance cannot be null');
        }
        $this->container['current_balance'] = $current_balance;

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
     * @param float|null $available_balance Available balance
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
     * @param int|null $balance_date A timestamp showing when the `balance` was captured
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
     * Gets transactions
     *
     * @return \OpenAPI\Client\Model\ReportTransaction[]|null
     */
    public function getTransactions()
    {
        return $this->container['transactions'];
    }

    /**
     * Sets transactions
     *
     * @param \OpenAPI\Client\Model\ReportTransaction[]|null $transactions a list of transaction records
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
     * Gets cash_flow_balance
     *
     * @return \OpenAPI\Client\Model\CashFlowCashFlowBalance|null
     */
    public function getCashFlowBalance()
    {
        return $this->container['cash_flow_balance'];
    }

    /**
     * Sets cash_flow_balance
     *
     * @param \OpenAPI\Client\Model\CashFlowCashFlowBalance|null $cash_flow_balance cash_flow_balance
     *
     * @return self
     */
    public function setCashFlowBalance($cash_flow_balance)
    {
        if (is_null($cash_flow_balance)) {
            throw new \InvalidArgumentException('non-nullable cash_flow_balance cannot be null');
        }
        $this->container['cash_flow_balance'] = $cash_flow_balance;

        return $this;
    }

    /**
     * Gets cash_flow_credit
     *
     * @return \OpenAPI\Client\Model\CashFlowCashFlowCredit|null
     */
    public function getCashFlowCredit()
    {
        return $this->container['cash_flow_credit'];
    }

    /**
     * Sets cash_flow_credit
     *
     * @param \OpenAPI\Client\Model\CashFlowCashFlowCredit|null $cash_flow_credit cash_flow_credit
     *
     * @return self
     */
    public function setCashFlowCredit($cash_flow_credit)
    {
        if (is_null($cash_flow_credit)) {
            throw new \InvalidArgumentException('non-nullable cash_flow_credit cannot be null');
        }
        $this->container['cash_flow_credit'] = $cash_flow_credit;

        return $this;
    }

    /**
     * Gets cash_flow_debit
     *
     * @return \OpenAPI\Client\Model\CashFlowCashFlowDebit|null
     */
    public function getCashFlowDebit()
    {
        return $this->container['cash_flow_debit'];
    }

    /**
     * Sets cash_flow_debit
     *
     * @param \OpenAPI\Client\Model\CashFlowCashFlowDebit|null $cash_flow_debit cash_flow_debit
     *
     * @return self
     */
    public function setCashFlowDebit($cash_flow_debit)
    {
        if (is_null($cash_flow_debit)) {
            throw new \InvalidArgumentException('non-nullable cash_flow_debit cannot be null');
        }
        $this->container['cash_flow_debit'] = $cash_flow_debit;

        return $this;
    }

    /**
     * Gets cash_flow_characteristic
     *
     * @return \OpenAPI\Client\Model\CashFlowCashFlowCharacteristic|null
     */
    public function getCashFlowCharacteristic()
    {
        return $this->container['cash_flow_characteristic'];
    }

    /**
     * Sets cash_flow_characteristic
     *
     * @param \OpenAPI\Client\Model\CashFlowCashFlowCharacteristic|null $cash_flow_characteristic cash_flow_characteristic
     *
     * @return self
     */
    public function setCashFlowCharacteristic($cash_flow_characteristic)
    {
        if (is_null($cash_flow_characteristic)) {
            throw new \InvalidArgumentException('non-nullable cash_flow_characteristic cannot be null');
        }
        $this->container['cash_flow_characteristic'] = $cash_flow_characteristic;

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


