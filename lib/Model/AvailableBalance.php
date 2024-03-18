<?php
/**
 * AvailableBalance
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
 * AvailableBalance Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AvailableBalance implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AvailableBalance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'real_account_number_last4' => 'string',
        'available_balance' => 'float',
        'available_balance_date' => 'int',
        'cleared_balance' => 'float',
        'cleared_balance_date' => 'int',
        'aggregation_status_code' => 'int',
        'currency' => 'string'
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
        'real_account_number_last4' => null,
        'available_balance' => null,
        'available_balance_date' => 'int64',
        'cleared_balance' => null,
        'cleared_balance_date' => 'int64',
        'aggregation_status_code' => null,
        'currency' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'real_account_number_last4' => false,
        'available_balance' => false,
        'available_balance_date' => false,
        'cleared_balance' => false,
        'cleared_balance_date' => false,
        'aggregation_status_code' => false,
        'currency' => false
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
        'real_account_number_last4' => 'realAccountNumberLast4',
        'available_balance' => 'availableBalance',
        'available_balance_date' => 'availableBalanceDate',
        'cleared_balance' => 'clearedBalance',
        'cleared_balance_date' => 'clearedBalanceDate',
        'aggregation_status_code' => 'aggregationStatusCode',
        'currency' => 'currency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'real_account_number_last4' => 'setRealAccountNumberLast4',
        'available_balance' => 'setAvailableBalance',
        'available_balance_date' => 'setAvailableBalanceDate',
        'cleared_balance' => 'setClearedBalance',
        'cleared_balance_date' => 'setClearedBalanceDate',
        'aggregation_status_code' => 'setAggregationStatusCode',
        'currency' => 'setCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'real_account_number_last4' => 'getRealAccountNumberLast4',
        'available_balance' => 'getAvailableBalance',
        'available_balance_date' => 'getAvailableBalanceDate',
        'cleared_balance' => 'getClearedBalance',
        'cleared_balance_date' => 'getClearedBalanceDate',
        'aggregation_status_code' => 'getAggregationStatusCode',
        'currency' => 'getCurrency'
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
        $this->setIfExists('real_account_number_last4', $data ?? [], null);
        $this->setIfExists('available_balance', $data ?? [], null);
        $this->setIfExists('available_balance_date', $data ?? [], null);
        $this->setIfExists('cleared_balance', $data ?? [], null);
        $this->setIfExists('cleared_balance_date', $data ?? [], null);
        $this->setIfExists('aggregation_status_code', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
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
        if ($this->container['real_account_number_last4'] === null) {
            $invalidProperties[] = "'real_account_number_last4' can't be null";
        }
        if ($this->container['available_balance'] === null) {
            $invalidProperties[] = "'available_balance' can't be null";
        }
        if ($this->container['available_balance_date'] === null) {
            $invalidProperties[] = "'available_balance_date' can't be null";
        }
        if ($this->container['cleared_balance'] === null) {
            $invalidProperties[] = "'cleared_balance' can't be null";
        }
        if ($this->container['cleared_balance_date'] === null) {
            $invalidProperties[] = "'cleared_balance_date' can't be null";
        }
        if ($this->container['aggregation_status_code'] === null) {
            $invalidProperties[] = "'aggregation_status_code' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
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
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id A customer ID represented as a number. See Add Customer API for how to create a customer ID.
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
     * Gets real_account_number_last4
     *
     * @return string
     */
    public function getRealAccountNumberLast4()
    {
        return $this->container['real_account_number_last4'];
    }

    /**
     * Sets real_account_number_last4
     *
     * @param string $real_account_number_last4 The last 4 digits of the ACH account number
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
     * Gets available_balance
     *
     * @return float
     */
    public function getAvailableBalance()
    {
        return $this->container['available_balance'];
    }

    /**
     * Sets available_balance
     *
     * @param float $available_balance The available balance of the account
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
     * Gets available_balance_date
     *
     * @return int
     */
    public function getAvailableBalanceDate()
    {
        return $this->container['available_balance_date'];
    }

    /**
     * Sets available_balance_date
     *
     * @param int $available_balance_date A date in Unix epoch time (in seconds). See: [Handling Epoch Dates and Times](https://developer.mastercard.com/open-banking-us/documentation/codes-and-formats/).
     *
     * @return self
     */
    public function setAvailableBalanceDate($available_balance_date)
    {
        if (is_null($available_balance_date)) {
            throw new \InvalidArgumentException('non-nullable available_balance_date cannot be null');
        }
        $this->container['available_balance_date'] = $available_balance_date;

        return $this;
    }

    /**
     * Gets cleared_balance
     *
     * @return float
     */
    public function getClearedBalance()
    {
        return $this->container['cleared_balance'];
    }

    /**
     * Sets cleared_balance
     *
     * @param float $cleared_balance The cleared balance of the account. Also referred as posted balance, current balance, ledger balance
     *
     * @return self
     */
    public function setClearedBalance($cleared_balance)
    {
        if (is_null($cleared_balance)) {
            throw new \InvalidArgumentException('non-nullable cleared_balance cannot be null');
        }
        $this->container['cleared_balance'] = $cleared_balance;

        return $this;
    }

    /**
     * Gets cleared_balance_date
     *
     * @return int
     */
    public function getClearedBalanceDate()
    {
        return $this->container['cleared_balance_date'];
    }

    /**
     * Sets cleared_balance_date
     *
     * @param int $cleared_balance_date A date in Unix epoch time (in seconds). See: [Handling Epoch Dates and Times](https://developer.mastercard.com/open-banking-us/documentation/codes-and-formats/).
     *
     * @return self
     */
    public function setClearedBalanceDate($cleared_balance_date)
    {
        if (is_null($cleared_balance_date)) {
            throw new \InvalidArgumentException('non-nullable cleared_balance_date cannot be null');
        }
        $this->container['cleared_balance_date'] = $cleared_balance_date;

        return $this;
    }

    /**
     * Gets aggregation_status_code
     *
     * @return int
     */
    public function getAggregationStatusCode()
    {
        return $this->container['aggregation_status_code'];
    }

    /**
     * Sets aggregation_status_code
     *
     * @param int $aggregation_status_code The status of the most recent aggregation attempt (see [Aggregation Status Codes](https://developer.mastercard.com/open-banking-us/documentation/products/manage/account-aggregation/#aggregation-status-codes)). Won't be present until you have run your first aggregation for the account.
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

