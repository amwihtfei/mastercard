<?php
/**
 * PrequalificationReportAssetSummary
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
 * PrequalificationReportAssetSummary Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PrequalificationReportAssetSummary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PrequalificationReportAssetSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'available_balance' => 'float',
        'current_balance' => 'float',
        'two_month_average' => 'float',
        'six_month_average' => 'float',
        'beginning_balance' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'available_balance' => null,
        'current_balance' => null,
        'two_month_average' => null,
        'six_month_average' => null,
        'beginning_balance' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type' => false,
        'available_balance' => false,
        'current_balance' => false,
        'two_month_average' => false,
        'six_month_average' => false,
        'beginning_balance' => false
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
        'type' => 'type',
        'available_balance' => 'availableBalance',
        'current_balance' => 'currentBalance',
        'two_month_average' => 'twoMonthAverage',
        'six_month_average' => 'sixMonthAverage',
        'beginning_balance' => 'beginningBalance'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'available_balance' => 'setAvailableBalance',
        'current_balance' => 'setCurrentBalance',
        'two_month_average' => 'setTwoMonthAverage',
        'six_month_average' => 'setSixMonthAverage',
        'beginning_balance' => 'setBeginningBalance'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'available_balance' => 'getAvailableBalance',
        'current_balance' => 'getCurrentBalance',
        'two_month_average' => 'getTwoMonthAverage',
        'six_month_average' => 'getSixMonthAverage',
        'beginning_balance' => 'getBeginningBalance'
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('available_balance', $data ?? [], null);
        $this->setIfExists('current_balance', $data ?? [], null);
        $this->setIfExists('two_month_average', $data ?? [], null);
        $this->setIfExists('six_month_average', $data ?? [], null);
        $this->setIfExists('beginning_balance', $data ?? [], null);
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

        if ($this->container['current_balance'] === null) {
            $invalidProperties[] = "'current_balance' can't be null";
        }
        if ($this->container['two_month_average'] === null) {
            $invalidProperties[] = "'two_month_average' can't be null";
        }
        if ($this->container['beginning_balance'] === null) {
            $invalidProperties[] = "'beginning_balance' can't be null";
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
     * @param string|null $type The asset type: \"checking\", \"savings\", \"moneyMarket\", \"cd\", \"investment\"
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
     * Gets current_balance
     *
     * @return float
     */
    public function getCurrentBalance()
    {
        return $this->container['current_balance'];
    }

    /**
     * Sets current_balance
     *
     * @param float $current_balance The current balance of the account
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
     * Gets two_month_average
     *
     * @return float
     */
    public function getTwoMonthAverage()
    {
        return $this->container['two_month_average'];
    }

    /**
     * Sets two_month_average
     *
     * @param float $two_month_average The two month average daily balance of the account
     *
     * @return self
     */
    public function setTwoMonthAverage($two_month_average)
    {
        if (is_null($two_month_average)) {
            throw new \InvalidArgumentException('non-nullable two_month_average cannot be null');
        }
        $this->container['two_month_average'] = $two_month_average;

        return $this;
    }

    /**
     * Gets six_month_average
     *
     * @return float|null
     */
    public function getSixMonthAverage()
    {
        return $this->container['six_month_average'];
    }

    /**
     * Sets six_month_average
     *
     * @param float|null $six_month_average The six month average daily balance of the account
     *
     * @return self
     */
    public function setSixMonthAverage($six_month_average)
    {
        if (is_null($six_month_average)) {
            throw new \InvalidArgumentException('non-nullable six_month_average cannot be null');
        }
        $this->container['six_month_average'] = $six_month_average;

        return $this;
    }

    /**
     * Gets beginning_balance
     *
     * @return float
     */
    public function getBeginningBalance()
    {
        return $this->container['beginning_balance'];
    }

    /**
     * Sets beginning_balance
     *
     * @param float $beginning_balance The beginning balance of the account per the time period of the report
     *
     * @return self
     */
    public function setBeginningBalance($beginning_balance)
    {
        if (is_null($beginning_balance)) {
            throw new \InvalidArgumentException('non-nullable beginning_balance cannot be null');
        }
        $this->container['beginning_balance'] = $beginning_balance;

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


