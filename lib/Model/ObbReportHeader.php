<?php
/**
 * ObbReportHeader
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
 * ObbReportHeader Class Doc Comment
 *
 * @category Class
 * @description Details about the business the report is generated for and metadata about the report
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ObbReportHeader implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ObbReportHeader';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'business_address' => 'string',
        'business_city' => 'string',
        'business_name' => 'string',
        'business_state' => 'string',
        'business_zip' => 'string',
        'reference_number' => 'string',
        'report_date' => 'string',
        'report_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'business_address' => null,
        'business_city' => null,
        'business_name' => null,
        'business_state' => null,
        'business_zip' => null,
        'reference_number' => null,
        'report_date' => null,
        'report_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'business_address' => false,
        'business_city' => false,
        'business_name' => false,
        'business_state' => false,
        'business_zip' => false,
        'reference_number' => false,
        'report_date' => false,
        'report_id' => false
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
        'business_address' => 'businessAddress',
        'business_city' => 'businessCity',
        'business_name' => 'businessName',
        'business_state' => 'businessState',
        'business_zip' => 'businessZip',
        'reference_number' => 'referenceNumber',
        'report_date' => 'reportDate',
        'report_id' => 'reportId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'business_address' => 'setBusinessAddress',
        'business_city' => 'setBusinessCity',
        'business_name' => 'setBusinessName',
        'business_state' => 'setBusinessState',
        'business_zip' => 'setBusinessZip',
        'reference_number' => 'setReferenceNumber',
        'report_date' => 'setReportDate',
        'report_id' => 'setReportId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'business_address' => 'getBusinessAddress',
        'business_city' => 'getBusinessCity',
        'business_name' => 'getBusinessName',
        'business_state' => 'getBusinessState',
        'business_zip' => 'getBusinessZip',
        'reference_number' => 'getReferenceNumber',
        'report_date' => 'getReportDate',
        'report_id' => 'getReportId'
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
        $this->setIfExists('business_address', $data ?? [], null);
        $this->setIfExists('business_city', $data ?? [], null);
        $this->setIfExists('business_name', $data ?? [], null);
        $this->setIfExists('business_state', $data ?? [], null);
        $this->setIfExists('business_zip', $data ?? [], null);
        $this->setIfExists('reference_number', $data ?? [], null);
        $this->setIfExists('report_date', $data ?? [], null);
        $this->setIfExists('report_id', $data ?? [], null);
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

        if (!is_null($this->container['business_address']) && (mb_strlen($this->container['business_address']) > 255)) {
            $invalidProperties[] = "invalid value for 'business_address', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['business_address']) && (mb_strlen($this->container['business_address']) < 0)) {
            $invalidProperties[] = "invalid value for 'business_address', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['business_city']) && (mb_strlen($this->container['business_city']) > 255)) {
            $invalidProperties[] = "invalid value for 'business_city', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['business_city']) && (mb_strlen($this->container['business_city']) < 0)) {
            $invalidProperties[] = "invalid value for 'business_city', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['business_name']) && (mb_strlen($this->container['business_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'business_name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['business_name']) && (mb_strlen($this->container['business_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'business_name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['business_state']) && (mb_strlen($this->container['business_state']) > 255)) {
            $invalidProperties[] = "invalid value for 'business_state', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['business_state']) && (mb_strlen($this->container['business_state']) < 0)) {
            $invalidProperties[] = "invalid value for 'business_state', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['business_zip']) && (mb_strlen($this->container['business_zip']) > 255)) {
            $invalidProperties[] = "invalid value for 'business_zip', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['business_zip']) && (mb_strlen($this->container['business_zip']) < 0)) {
            $invalidProperties[] = "invalid value for 'business_zip', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['reference_number']) && (mb_strlen($this->container['reference_number']) > 255)) {
            $invalidProperties[] = "invalid value for 'reference_number', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['reference_number']) && (mb_strlen($this->container['reference_number']) < 0)) {
            $invalidProperties[] = "invalid value for 'reference_number', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['report_date'] === null) {
            $invalidProperties[] = "'report_date' can't be null";
        }
        if ((mb_strlen($this->container['report_date']) > 25)) {
            $invalidProperties[] = "invalid value for 'report_date', the character length must be smaller than or equal to 25.";
        }

        if ((mb_strlen($this->container['report_date']) < 25)) {
            $invalidProperties[] = "invalid value for 'report_date', the character length must be bigger than or equal to 25.";
        }

        if ($this->container['report_id'] === null) {
            $invalidProperties[] = "'report_id' can't be null";
        }
        if ((mb_strlen($this->container['report_id']) > 255)) {
            $invalidProperties[] = "invalid value for 'report_id', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['report_id']) < 0)) {
            $invalidProperties[] = "invalid value for 'report_id', the character length must be bigger than or equal to 0.";
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
     * Gets business_address
     *
     * @return string|null
     */
    public function getBusinessAddress()
    {
        return $this->container['business_address'];
    }

    /**
     * Sets business_address
     *
     * @param string|null $business_address Business address line 1
     *
     * @return self
     */
    public function setBusinessAddress($business_address)
    {
        if (is_null($business_address)) {
            throw new \InvalidArgumentException('non-nullable business_address cannot be null');
        }
        if ((mb_strlen($business_address) > 255)) {
            throw new \InvalidArgumentException('invalid length for $business_address when calling ObbReportHeader., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($business_address) < 0)) {
            throw new \InvalidArgumentException('invalid length for $business_address when calling ObbReportHeader., must be bigger than or equal to 0.');
        }

        $this->container['business_address'] = $business_address;

        return $this;
    }

    /**
     * Gets business_city
     *
     * @return string|null
     */
    public function getBusinessCity()
    {
        return $this->container['business_city'];
    }

    /**
     * Sets business_city
     *
     * @param string|null $business_city Business address city
     *
     * @return self
     */
    public function setBusinessCity($business_city)
    {
        if (is_null($business_city)) {
            throw new \InvalidArgumentException('non-nullable business_city cannot be null');
        }
        if ((mb_strlen($business_city) > 255)) {
            throw new \InvalidArgumentException('invalid length for $business_city when calling ObbReportHeader., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($business_city) < 0)) {
            throw new \InvalidArgumentException('invalid length for $business_city when calling ObbReportHeader., must be bigger than or equal to 0.');
        }

        $this->container['business_city'] = $business_city;

        return $this;
    }

    /**
     * Gets business_name
     *
     * @return string|null
     */
    public function getBusinessName()
    {
        return $this->container['business_name'];
    }

    /**
     * Sets business_name
     *
     * @param string|null $business_name Name of the business
     *
     * @return self
     */
    public function setBusinessName($business_name)
    {
        if (is_null($business_name)) {
            throw new \InvalidArgumentException('non-nullable business_name cannot be null');
        }
        if ((mb_strlen($business_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $business_name when calling ObbReportHeader., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($business_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $business_name when calling ObbReportHeader., must be bigger than or equal to 0.');
        }

        $this->container['business_name'] = $business_name;

        return $this;
    }

    /**
     * Gets business_state
     *
     * @return string|null
     */
    public function getBusinessState()
    {
        return $this->container['business_state'];
    }

    /**
     * Sets business_state
     *
     * @param string|null $business_state Business address state
     *
     * @return self
     */
    public function setBusinessState($business_state)
    {
        if (is_null($business_state)) {
            throw new \InvalidArgumentException('non-nullable business_state cannot be null');
        }
        if ((mb_strlen($business_state) > 255)) {
            throw new \InvalidArgumentException('invalid length for $business_state when calling ObbReportHeader., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($business_state) < 0)) {
            throw new \InvalidArgumentException('invalid length for $business_state when calling ObbReportHeader., must be bigger than or equal to 0.');
        }

        $this->container['business_state'] = $business_state;

        return $this;
    }

    /**
     * Gets business_zip
     *
     * @return string|null
     */
    public function getBusinessZip()
    {
        return $this->container['business_zip'];
    }

    /**
     * Sets business_zip
     *
     * @param string|null $business_zip Business address zip
     *
     * @return self
     */
    public function setBusinessZip($business_zip)
    {
        if (is_null($business_zip)) {
            throw new \InvalidArgumentException('non-nullable business_zip cannot be null');
        }
        if ((mb_strlen($business_zip) > 255)) {
            throw new \InvalidArgumentException('invalid length for $business_zip when calling ObbReportHeader., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($business_zip) < 0)) {
            throw new \InvalidArgumentException('invalid length for $business_zip when calling ObbReportHeader., must be bigger than or equal to 0.');
        }

        $this->container['business_zip'] = $business_zip;

        return $this;
    }

    /**
     * Gets reference_number
     *
     * @return string|null
     */
    public function getReferenceNumber()
    {
        return $this->container['reference_number'];
    }

    /**
     * Sets reference_number
     *
     * @param string|null $reference_number Partner-provided reference number
     *
     * @return self
     */
    public function setReferenceNumber($reference_number)
    {
        if (is_null($reference_number)) {
            throw new \InvalidArgumentException('non-nullable reference_number cannot be null');
        }
        if ((mb_strlen($reference_number) > 255)) {
            throw new \InvalidArgumentException('invalid length for $reference_number when calling ObbReportHeader., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($reference_number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $reference_number when calling ObbReportHeader., must be bigger than or equal to 0.');
        }

        $this->container['reference_number'] = $reference_number;

        return $this;
    }

    /**
     * Gets report_date
     *
     * @return string
     */
    public function getReportDate()
    {
        return $this->container['report_date'];
    }

    /**
     * Sets report_date
     *
     * @param string $report_date Date the report was requested
     *
     * @return self
     */
    public function setReportDate($report_date)
    {
        if (is_null($report_date)) {
            throw new \InvalidArgumentException('non-nullable report_date cannot be null');
        }
        if ((mb_strlen($report_date) > 25)) {
            throw new \InvalidArgumentException('invalid length for $report_date when calling ObbReportHeader., must be smaller than or equal to 25.');
        }
        if ((mb_strlen($report_date) < 25)) {
            throw new \InvalidArgumentException('invalid length for $report_date when calling ObbReportHeader., must be bigger than or equal to 25.');
        }

        $this->container['report_date'] = $report_date;

        return $this;
    }

    /**
     * Gets report_id
     *
     * @return string
     */
    public function getReportId()
    {
        return $this->container['report_id'];
    }

    /**
     * Sets report_id
     *
     * @param string $report_id Generated unique report ID
     *
     * @return self
     */
    public function setReportId($report_id)
    {
        if (is_null($report_id)) {
            throw new \InvalidArgumentException('non-nullable report_id cannot be null');
        }
        if ((mb_strlen($report_id) > 255)) {
            throw new \InvalidArgumentException('invalid length for $report_id when calling ObbReportHeader., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($report_id) < 0)) {
            throw new \InvalidArgumentException('invalid length for $report_id when calling ObbReportHeader., must be bigger than or equal to 0.');
        }

        $this->container['report_id'] = $report_id;

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


