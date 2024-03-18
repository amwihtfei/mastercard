<?php
/**
 * CashFlowMonthlyCashFlowCharacteristicsSummaries
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
 * CashFlowMonthlyCashFlowCharacteristicsSummaries Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CashFlowMonthlyCashFlowCharacteristicsSummaries implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CashFlowMonthlyCashFlowCharacteristicsSummaries';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'month' => 'int',
        'total_credits_less_total_debits' => 'float',
        'total_credits_less_total_debits_less_transfers' => 'float',
        'average_transaction_amount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'month' => 'int64',
        'total_credits_less_total_debits' => null,
        'total_credits_less_total_debits_less_transfers' => null,
        'average_transaction_amount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'month' => false,
        'total_credits_less_total_debits' => false,
        'total_credits_less_total_debits_less_transfers' => false,
        'average_transaction_amount' => false
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
        'month' => 'month',
        'total_credits_less_total_debits' => 'totalCreditsLessTotalDebits',
        'total_credits_less_total_debits_less_transfers' => 'totalCreditsLessTotalDebitsLessTransfers',
        'average_transaction_amount' => 'averageTransactionAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'month' => 'setMonth',
        'total_credits_less_total_debits' => 'setTotalCreditsLessTotalDebits',
        'total_credits_less_total_debits_less_transfers' => 'setTotalCreditsLessTotalDebitsLessTransfers',
        'average_transaction_amount' => 'setAverageTransactionAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'month' => 'getMonth',
        'total_credits_less_total_debits' => 'getTotalCreditsLessTotalDebits',
        'total_credits_less_total_debits_less_transfers' => 'getTotalCreditsLessTotalDebitsLessTransfers',
        'average_transaction_amount' => 'getAverageTransactionAmount'
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
        $this->setIfExists('month', $data ?? [], null);
        $this->setIfExists('total_credits_less_total_debits', $data ?? [], null);
        $this->setIfExists('total_credits_less_total_debits_less_transfers', $data ?? [], null);
        $this->setIfExists('average_transaction_amount', $data ?? [], null);
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

        if ($this->container['month'] === null) {
            $invalidProperties[] = "'month' can't be null";
        }
        if ($this->container['total_credits_less_total_debits'] === null) {
            $invalidProperties[] = "'total_credits_less_total_debits' can't be null";
        }
        if ($this->container['total_credits_less_total_debits_less_transfers'] === null) {
            $invalidProperties[] = "'total_credits_less_total_debits_less_transfers' can't be null";
        }
        if ($this->container['average_transaction_amount'] === null) {
            $invalidProperties[] = "'average_transaction_amount' can't be null";
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
     * Gets month
     *
     * @return int
     */
    public function getMonth()
    {
        return $this->container['month'];
    }

    /**
     * Sets month
     *
     * @param int $month One instance for each complete calendar month in the report
     *
     * @return self
     */
    public function setMonth($month)
    {
        if (is_null($month)) {
            throw new \InvalidArgumentException('non-nullable month cannot be null');
        }
        $this->container['month'] = $month;

        return $this;
    }

    /**
     * Gets total_credits_less_total_debits
     *
     * @return float
     */
    public function getTotalCreditsLessTotalDebits()
    {
        return $this->container['total_credits_less_total_debits'];
    }

    /**
     * Sets total_credits_less_total_debits
     *
     * @param float $total_credits_less_total_debits Total Credits - Total Debits by month across all accounts
     *
     * @return self
     */
    public function setTotalCreditsLessTotalDebits($total_credits_less_total_debits)
    {
        if (is_null($total_credits_less_total_debits)) {
            throw new \InvalidArgumentException('non-nullable total_credits_less_total_debits cannot be null');
        }
        $this->container['total_credits_less_total_debits'] = $total_credits_less_total_debits;

        return $this;
    }

    /**
     * Gets total_credits_less_total_debits_less_transfers
     *
     * @return float
     */
    public function getTotalCreditsLessTotalDebitsLessTransfers()
    {
        return $this->container['total_credits_less_total_debits_less_transfers'];
    }

    /**
     * Sets total_credits_less_total_debits_less_transfers
     *
     * @param float $total_credits_less_total_debits_less_transfers Total Credits - Total Debits by month (Without Transfers) across all accounts
     *
     * @return self
     */
    public function setTotalCreditsLessTotalDebitsLessTransfers($total_credits_less_total_debits_less_transfers)
    {
        if (is_null($total_credits_less_total_debits_less_transfers)) {
            throw new \InvalidArgumentException('non-nullable total_credits_less_total_debits_less_transfers cannot be null');
        }
        $this->container['total_credits_less_total_debits_less_transfers'] = $total_credits_less_total_debits_less_transfers;

        return $this;
    }

    /**
     * Gets average_transaction_amount
     *
     * @return float
     */
    public function getAverageTransactionAmount()
    {
        return $this->container['average_transaction_amount'];
    }

    /**
     * Sets average_transaction_amount
     *
     * @param float $average_transaction_amount Average transaction amount across all accounts
     *
     * @return self
     */
    public function setAverageTransactionAmount($average_transaction_amount)
    {
        if (is_null($average_transaction_amount)) {
            throw new \InvalidArgumentException('non-nullable average_transaction_amount cannot be null');
        }
        $this->container['average_transaction_amount'] = $average_transaction_amount;

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

