<?php
/**
 * Institutions
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
 * Institutions Class Doc Comment
 *
 * @category Class
 * @description A list of financial institutions from the Get Institutions API
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Institutions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Institutions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'found' => 'int',
        'displaying' => 'int',
        'more_available' => 'bool',
        'created_date' => 'int',
        'institutions' => '\OpenAPI\Client\Model\Institution[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'found' => null,
        'displaying' => null,
        'more_available' => null,
        'created_date' => 'int64',
        'institutions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'found' => false,
        'displaying' => false,
        'more_available' => false,
        'created_date' => false,
        'institutions' => false
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
        'found' => 'found',
        'displaying' => 'displaying',
        'more_available' => 'moreAvailable',
        'created_date' => 'createdDate',
        'institutions' => 'institutions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'found' => 'setFound',
        'displaying' => 'setDisplaying',
        'more_available' => 'setMoreAvailable',
        'created_date' => 'setCreatedDate',
        'institutions' => 'setInstitutions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'found' => 'getFound',
        'displaying' => 'getDisplaying',
        'more_available' => 'getMoreAvailable',
        'created_date' => 'getCreatedDate',
        'institutions' => 'getInstitutions'
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
        $this->setIfExists('found', $data ?? [], null);
        $this->setIfExists('displaying', $data ?? [], null);
        $this->setIfExists('more_available', $data ?? [], null);
        $this->setIfExists('created_date', $data ?? [], null);
        $this->setIfExists('institutions', $data ?? [], null);
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

        if ($this->container['found'] === null) {
            $invalidProperties[] = "'found' can't be null";
        }
        if ($this->container['displaying'] === null) {
            $invalidProperties[] = "'displaying' can't be null";
        }
        if ($this->container['more_available'] === null) {
            $invalidProperties[] = "'more_available' can't be null";
        }
        if ($this->container['created_date'] === null) {
            $invalidProperties[] = "'created_date' can't be null";
        }
        if ($this->container['institutions'] === null) {
            $invalidProperties[] = "'institutions' can't be null";
        }
        if ((count($this->container['institutions']) > 1000)) {
            $invalidProperties[] = "invalid value for 'institutions', number of items must be less than or equal to 1000.";
        }

        if ((count($this->container['institutions']) < 0)) {
            $invalidProperties[] = "invalid value for 'institutions', number of items must be greater than or equal to 0.";
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
     * Gets found
     *
     * @return int
     */
    public function getFound()
    {
        return $this->container['found'];
    }

    /**
     * Sets found
     *
     * @param int $found The total number of results matching search criteria
     *
     * @return self
     */
    public function setFound($found)
    {
        if (is_null($found)) {
            throw new \InvalidArgumentException('non-nullable found cannot be null');
        }
        $this->container['found'] = $found;

        return $this;
    }

    /**
     * Gets displaying
     *
     * @return int
     */
    public function getDisplaying()
    {
        return $this->container['displaying'];
    }

    /**
     * Sets displaying
     *
     * @param int $displaying The number of results returned
     *
     * @return self
     */
    public function setDisplaying($displaying)
    {
        if (is_null($displaying)) {
            throw new \InvalidArgumentException('non-nullable displaying cannot be null');
        }
        $this->container['displaying'] = $displaying;

        return $this;
    }

    /**
     * Gets more_available
     *
     * @return bool
     */
    public function getMoreAvailable()
    {
        return $this->container['more_available'];
    }

    /**
     * Sets more_available
     *
     * @param bool $more_available If the value of `moreAvailable` is \"true\", you can retrieve the next page of results by increasing the value of the start parameter in your next request:\"...&start=6&limit=5\"
     *
     * @return self
     */
    public function setMoreAvailable($more_available)
    {
        if (is_null($more_available)) {
            throw new \InvalidArgumentException('non-nullable more_available cannot be null');
        }
        $this->container['more_available'] = $more_available;

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
     * @param int $created_date A date in Unix epoch time (in seconds). See: [Handling Epoch Dates and Times](https://developer.mastercard.com/open-banking-us/documentation/codes-and-formats/).
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
     * Gets institutions
     *
     * @return \OpenAPI\Client\Model\Institution[]
     */
    public function getInstitutions()
    {
        return $this->container['institutions'];
    }

    /**
     * Sets institutions
     *
     * @param \OpenAPI\Client\Model\Institution[] $institutions A list of institutions
     *
     * @return self
     */
    public function setInstitutions($institutions)
    {
        if (is_null($institutions)) {
            throw new \InvalidArgumentException('non-nullable institutions cannot be null');
        }

        if ((count($institutions) > 1000)) {
            throw new \InvalidArgumentException('invalid value for $institutions when calling Institutions., number of items must be less than or equal to 1000.');
        }
        if ((count($institutions) < 0)) {
            throw new \InvalidArgumentException('invalid length for $institutions when calling Institutions., number of items must be greater than or equal to 0.');
        }
        $this->container['institutions'] = $institutions;

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

