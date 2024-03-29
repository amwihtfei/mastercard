<?php
/**
 * CashFlowMonthlyCashFlowDebitSummaries
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
 * CashFlowMonthlyCashFlowDebitSummaries Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CashFlowMonthlyCashFlowDebitSummaries implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CashFlowMonthlyCashFlowDebitSummaries';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'month' => 'int',
        'number_of_debits' => 'string',
        'total_debits_amount' => 'float',
        'largest_debit' => 'float',
        'number_of_debits_less_transfers' => 'string',
        'total_debits_amount_less_transfers' => 'float',
        'average_debit_amount' => 'float'
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
        'number_of_debits' => null,
        'total_debits_amount' => null,
        'largest_debit' => null,
        'number_of_debits_less_transfers' => null,
        'total_debits_amount_less_transfers' => null,
        'average_debit_amount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'month' => false,
        'number_of_debits' => false,
        'total_debits_amount' => false,
        'largest_debit' => false,
        'number_of_debits_less_transfers' => false,
        'total_debits_amount_less_transfers' => false,
        'average_debit_amount' => false
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
        'number_of_debits' => 'numberOfDebits',
        'total_debits_amount' => 'totalDebitsAmount',
        'largest_debit' => 'largestDebit',
        'number_of_debits_less_transfers' => 'numberOfDebitsLessTransfers',
        'total_debits_amount_less_transfers' => 'totalDebitsAmountLessTransfers',
        'average_debit_amount' => 'averageDebitAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'month' => 'setMonth',
        'number_of_debits' => 'setNumberOfDebits',
        'total_debits_amount' => 'setTotalDebitsAmount',
        'largest_debit' => 'setLargestDebit',
        'number_of_debits_less_transfers' => 'setNumberOfDebitsLessTransfers',
        'total_debits_amount_less_transfers' => 'setTotalDebitsAmountLessTransfers',
        'average_debit_amount' => 'setAverageDebitAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'month' => 'getMonth',
        'number_of_debits' => 'getNumberOfDebits',
        'total_debits_amount' => 'getTotalDebitsAmount',
        'largest_debit' => 'getLargestDebit',
        'number_of_debits_less_transfers' => 'getNumberOfDebitsLessTransfers',
        'total_debits_amount_less_transfers' => 'getTotalDebitsAmountLessTransfers',
        'average_debit_amount' => 'getAverageDebitAmount'
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
        $this->setIfExists('number_of_debits', $data ?? [], null);
        $this->setIfExists('total_debits_amount', $data ?? [], null);
        $this->setIfExists('largest_debit', $data ?? [], null);
        $this->setIfExists('number_of_debits_less_transfers', $data ?? [], null);
        $this->setIfExists('total_debits_amount_less_transfers', $data ?? [], null);
        $this->setIfExists('average_debit_amount', $data ?? [], null);
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
        if ($this->container['number_of_debits'] === null) {
            $invalidProperties[] = "'number_of_debits' can't be null";
        }
        if ($this->container['total_debits_amount'] === null) {
            $invalidProperties[] = "'total_debits_amount' can't be null";
        }
        if ($this->container['largest_debit'] === null) {
            $invalidProperties[] = "'largest_debit' can't be null";
        }
        if ($this->container['number_of_debits_less_transfers'] === null) {
            $invalidProperties[] = "'number_of_debits_less_transfers' can't be null";
        }
        if ($this->container['total_debits_amount_less_transfers'] === null) {
            $invalidProperties[] = "'total_debits_amount_less_transfers' can't be null";
        }
        if ($this->container['average_debit_amount'] === null) {
            $invalidProperties[] = "'average_debit_amount' can't be null";
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
     * Gets number_of_debits
     *
     * @return string
     */
    public function getNumberOfDebits()
    {
        return $this->container['number_of_debits'];
    }

    /**
     * Sets number_of_debits
     *
     * @param string $number_of_debits Number of Debits by month across all accounts
     *
     * @return self
     */
    public function setNumberOfDebits($number_of_debits)
    {
        if (is_null($number_of_debits)) {
            throw new \InvalidArgumentException('non-nullable number_of_debits cannot be null');
        }
        $this->container['number_of_debits'] = $number_of_debits;

        return $this;
    }

    /**
     * Gets total_debits_amount
     *
     * @return float
     */
    public function getTotalDebitsAmount()
    {
        return $this->container['total_debits_amount'];
    }

    /**
     * Sets total_debits_amount
     *
     * @param float $total_debits_amount Total Amount of Debits by month across all accounts
     *
     * @return self
     */
    public function setTotalDebitsAmount($total_debits_amount)
    {
        if (is_null($total_debits_amount)) {
            throw new \InvalidArgumentException('non-nullable total_debits_amount cannot be null');
        }
        $this->container['total_debits_amount'] = $total_debits_amount;

        return $this;
    }

    /**
     * Gets largest_debit
     *
     * @return float
     */
    public function getLargestDebit()
    {
        return $this->container['largest_debit'];
    }

    /**
     * Sets largest_debit
     *
     * @param float $largest_debit Largest Debit by month
     *
     * @return self
     */
    public function setLargestDebit($largest_debit)
    {
        if (is_null($largest_debit)) {
            throw new \InvalidArgumentException('non-nullable largest_debit cannot be null');
        }
        $this->container['largest_debit'] = $largest_debit;

        return $this;
    }

    /**
     * Gets number_of_debits_less_transfers
     *
     * @return string
     */
    public function getNumberOfDebitsLessTransfers()
    {
        return $this->container['number_of_debits_less_transfers'];
    }

    /**
     * Sets number_of_debits_less_transfers
     *
     * @param string $number_of_debits_less_transfers Number of Debits by month (less transfers)
     *
     * @return self
     */
    public function setNumberOfDebitsLessTransfers($number_of_debits_less_transfers)
    {
        if (is_null($number_of_debits_less_transfers)) {
            throw new \InvalidArgumentException('non-nullable number_of_debits_less_transfers cannot be null');
        }
        $this->container['number_of_debits_less_transfers'] = $number_of_debits_less_transfers;

        return $this;
    }

    /**
     * Gets total_debits_amount_less_transfers
     *
     * @return float
     */
    public function getTotalDebitsAmountLessTransfers()
    {
        return $this->container['total_debits_amount_less_transfers'];
    }

    /**
     * Sets total_debits_amount_less_transfers
     *
     * @param float $total_debits_amount_less_transfers Total amount of debits by month (less transfers)
     *
     * @return self
     */
    public function setTotalDebitsAmountLessTransfers($total_debits_amount_less_transfers)
    {
        if (is_null($total_debits_amount_less_transfers)) {
            throw new \InvalidArgumentException('non-nullable total_debits_amount_less_transfers cannot be null');
        }
        $this->container['total_debits_amount_less_transfers'] = $total_debits_amount_less_transfers;

        return $this;
    }

    /**
     * Gets average_debit_amount
     *
     * @return float
     */
    public function getAverageDebitAmount()
    {
        return $this->container['average_debit_amount'];
    }

    /**
     * Sets average_debit_amount
     *
     * @param float $average_debit_amount The average debit amount
     *
     * @return self
     */
    public function setAverageDebitAmount($average_debit_amount)
    {
        if (is_null($average_debit_amount)) {
            throw new \InvalidArgumentException('non-nullable average_debit_amount cannot be null');
        }
        $this->container['average_debit_amount'] = $average_debit_amount;

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


