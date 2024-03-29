<?php
/**
 * ObbDateRangeAndCount
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
 * ObbDateRangeAndCount Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ObbDateRangeAndCount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ObbDateRangeAndCount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'count' => 'int',
        'period' => 'string',
        'period_begin_date' => 'string',
        'period_end_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'count' => null,
        'period' => null,
        'period_begin_date' => null,
        'period_end_date' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'count' => false,
        'period' => false,
        'period_begin_date' => false,
        'period_end_date' => false
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
        'count' => 'count',
        'period' => 'period',
        'period_begin_date' => 'periodBeginDate',
        'period_end_date' => 'periodEndDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'count' => 'setCount',
        'period' => 'setPeriod',
        'period_begin_date' => 'setPeriodBeginDate',
        'period_end_date' => 'setPeriodEndDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'count' => 'getCount',
        'period' => 'getPeriod',
        'period_begin_date' => 'getPeriodBeginDate',
        'period_end_date' => 'getPeriodEndDate'
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
        $this->setIfExists('count', $data ?? [], null);
        $this->setIfExists('period', $data ?? [], null);
        $this->setIfExists('period_begin_date', $data ?? [], null);
        $this->setIfExists('period_end_date', $data ?? [], null);
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

        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
        }
        if ($this->container['period'] === null) {
            $invalidProperties[] = "'period' can't be null";
        }
        if ((mb_strlen($this->container['period']) > 12)) {
            $invalidProperties[] = "invalid value for 'period', the character length must be smaller than or equal to 12.";
        }

        if ((mb_strlen($this->container['period']) < 8)) {
            $invalidProperties[] = "invalid value for 'period', the character length must be bigger than or equal to 8.";
        }

        if ($this->container['period_begin_date'] === null) {
            $invalidProperties[] = "'period_begin_date' can't be null";
        }
        if ((mb_strlen($this->container['period_begin_date']) > 10)) {
            $invalidProperties[] = "invalid value for 'period_begin_date', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['period_begin_date']) < 10)) {
            $invalidProperties[] = "invalid value for 'period_begin_date', the character length must be bigger than or equal to 10.";
        }

        if ($this->container['period_end_date'] === null) {
            $invalidProperties[] = "'period_end_date' can't be null";
        }
        if ((mb_strlen($this->container['period_end_date']) > 10)) {
            $invalidProperties[] = "invalid value for 'period_end_date', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['period_end_date']) < 10)) {
            $invalidProperties[] = "invalid value for 'period_end_date', the character length must be bigger than or equal to 10.";
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
     * Gets count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int $count Count of occurrences for the given period
     *
     * @return self
     */
    public function setCount($count)
    {
        if (is_null($count)) {
            throw new \InvalidArgumentException('non-nullable count cannot be null');
        }
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets period
     *
     * @return string
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param string $period Period represented by this metric
     *
     * @return self
     */
    public function setPeriod($period)
    {
        if (is_null($period)) {
            throw new \InvalidArgumentException('non-nullable period cannot be null');
        }
        if ((mb_strlen($period) > 12)) {
            throw new \InvalidArgumentException('invalid length for $period when calling ObbDateRangeAndCount., must be smaller than or equal to 12.');
        }
        if ((mb_strlen($period) < 8)) {
            throw new \InvalidArgumentException('invalid length for $period when calling ObbDateRangeAndCount., must be bigger than or equal to 8.');
        }

        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets period_begin_date
     *
     * @return string
     */
    public function getPeriodBeginDate()
    {
        return $this->container['period_begin_date'];
    }

    /**
     * Sets period_begin_date
     *
     * @param string $period_begin_date Begin date of the period being reported
     *
     * @return self
     */
    public function setPeriodBeginDate($period_begin_date)
    {
        if (is_null($period_begin_date)) {
            throw new \InvalidArgumentException('non-nullable period_begin_date cannot be null');
        }
        if ((mb_strlen($period_begin_date) > 10)) {
            throw new \InvalidArgumentException('invalid length for $period_begin_date when calling ObbDateRangeAndCount., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($period_begin_date) < 10)) {
            throw new \InvalidArgumentException('invalid length for $period_begin_date when calling ObbDateRangeAndCount., must be bigger than or equal to 10.');
        }

        $this->container['period_begin_date'] = $period_begin_date;

        return $this;
    }

    /**
     * Gets period_end_date
     *
     * @return string
     */
    public function getPeriodEndDate()
    {
        return $this->container['period_end_date'];
    }

    /**
     * Sets period_end_date
     *
     * @param string $period_end_date End date of the period being reported
     *
     * @return self
     */
    public function setPeriodEndDate($period_end_date)
    {
        if (is_null($period_end_date)) {
            throw new \InvalidArgumentException('non-nullable period_end_date cannot be null');
        }
        if ((mb_strlen($period_end_date) > 10)) {
            throw new \InvalidArgumentException('invalid length for $period_end_date when calling ObbDateRangeAndCount., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($period_end_date) < 10)) {
            throw new \InvalidArgumentException('invalid length for $period_end_date when calling ObbDateRangeAndCount., must be bigger than or equal to 10.');
        }

        $this->container['period_end_date'] = $period_end_date;

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


