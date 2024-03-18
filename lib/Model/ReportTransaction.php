<?php
/**
 * ReportTransaction
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
 * ReportTransaction Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReportTransaction implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReportTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'amount' => 'float',
        'posted_date' => 'int',
        'description' => 'string',
        'memo' => 'string',
        'normalized_payee' => 'string',
        'institution_transaction_id' => 'string',
        'category' => 'string',
        'type' => 'string',
        'security_type' => 'string',
        'symbol' => 'string',
        'commission' => 'float'
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
        'amount' => null,
        'posted_date' => 'int64',
        'description' => null,
        'memo' => null,
        'normalized_payee' => null,
        'institution_transaction_id' => null,
        'category' => null,
        'type' => null,
        'security_type' => null,
        'symbol' => null,
        'commission' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'amount' => false,
        'posted_date' => false,
        'description' => false,
        'memo' => false,
        'normalized_payee' => false,
        'institution_transaction_id' => false,
        'category' => false,
        'type' => false,
        'security_type' => false,
        'symbol' => false,
        'commission' => false
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
        'amount' => 'amount',
        'posted_date' => 'postedDate',
        'description' => 'description',
        'memo' => 'memo',
        'normalized_payee' => 'normalizedPayee',
        'institution_transaction_id' => 'institutionTransactionId',
        'category' => 'category',
        'type' => 'type',
        'security_type' => 'securityType',
        'symbol' => 'symbol',
        'commission' => 'commission'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'amount' => 'setAmount',
        'posted_date' => 'setPostedDate',
        'description' => 'setDescription',
        'memo' => 'setMemo',
        'normalized_payee' => 'setNormalizedPayee',
        'institution_transaction_id' => 'setInstitutionTransactionId',
        'category' => 'setCategory',
        'type' => 'setType',
        'security_type' => 'setSecurityType',
        'symbol' => 'setSymbol',
        'commission' => 'setCommission'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'amount' => 'getAmount',
        'posted_date' => 'getPostedDate',
        'description' => 'getDescription',
        'memo' => 'getMemo',
        'normalized_payee' => 'getNormalizedPayee',
        'institution_transaction_id' => 'getInstitutionTransactionId',
        'category' => 'getCategory',
        'type' => 'getType',
        'security_type' => 'getSecurityType',
        'symbol' => 'getSymbol',
        'commission' => 'getCommission'
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
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('posted_date', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('memo', $data ?? [], null);
        $this->setIfExists('normalized_payee', $data ?? [], null);
        $this->setIfExists('institution_transaction_id', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('security_type', $data ?? [], null);
        $this->setIfExists('symbol', $data ?? [], null);
        $this->setIfExists('commission', $data ?? [], null);
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
        if ($this->container['posted_date'] === null) {
            $invalidProperties[] = "'posted_date' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
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
     * @param int $id A transaction ID
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
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount The total amount of the transaction. Transactions for deposits are positive values, withdrawals and debits are negative values.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets posted_date
     *
     * @return int
     */
    public function getPostedDate()
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date
     *
     * @param int $posted_date A timestamp showing when the transaction was posted or cleared by the institution
     *
     * @return self
     */
    public function setPostedDate($posted_date)
    {
        if (is_null($posted_date)) {
            throw new \InvalidArgumentException('non-nullable posted_date cannot be null');
        }
        $this->container['posted_date'] = $posted_date;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The description of the transaction, as provided by the institution (often known as `payee`). In the event that this field is left blank by the institution, Finicity will pass a value of \"No description provided by institution\". All other values are provided by the institution.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|null $memo The memo field of the transaction, as provided by the institution. The institution must provide either a description, a memo, or both. It is recommended to concatenate the two fields into a single value.
     *
     * @return self
     */
    public function setMemo($memo)
    {
        if (is_null($memo)) {
            throw new \InvalidArgumentException('non-nullable memo cannot be null');
        }
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets normalized_payee
     *
     * @return string|null
     */
    public function getNormalizedPayee()
    {
        return $this->container['normalized_payee'];
    }

    /**
     * Sets normalized_payee
     *
     * @param string|null $normalized_payee A normalized payee, derived from the transaction's `description` and `memo` fields
     *
     * @return self
     */
    public function setNormalizedPayee($normalized_payee)
    {
        if (is_null($normalized_payee)) {
            throw new \InvalidArgumentException('non-nullable normalized_payee cannot be null');
        }
        $this->container['normalized_payee'] = $normalized_payee;

        return $this;
    }

    /**
     * Gets institution_transaction_id
     *
     * @return string|null
     */
    public function getInstitutionTransactionId()
    {
        return $this->container['institution_transaction_id'];
    }

    /**
     * Sets institution_transaction_id
     *
     * @param string|null $institution_transaction_id The unique identifier given by the FI for each transaction
     *
     * @return self
     */
    public function setInstitutionTransactionId($institution_transaction_id)
    {
        if (is_null($institution_transaction_id)) {
            throw new \InvalidArgumentException('non-nullable institution_transaction_id cannot be null');
        }
        $this->container['institution_transaction_id'] = $institution_transaction_id;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category One of the values from Categories (assigned based on the payee name)
     *
     * @return self
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }
        $this->container['category'] = $category;

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
     * @param string|null $type One of the values from transaction types
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
     * Gets security_type
     *
     * @return string|null
     */
    public function getSecurityType()
    {
        return $this->container['security_type'];
    }

    /**
     * Sets security_type
     *
     * @param string|null $security_type The type of investment security (VOA only)
     *
     * @return self
     */
    public function setSecurityType($security_type)
    {
        if (is_null($security_type)) {
            throw new \InvalidArgumentException('non-nullable security_type cannot be null');
        }
        $this->container['security_type'] = $security_type;

        return $this;
    }

    /**
     * Gets symbol
     *
     * @return string|null
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     *
     * @param string|null $symbol Investment symbol (VOA only)
     *
     * @return self
     */
    public function setSymbol($symbol)
    {
        if (is_null($symbol)) {
            throw new \InvalidArgumentException('non-nullable symbol cannot be null');
        }
        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets commission
     *
     * @return float|null
     */
    public function getCommission()
    {
        return $this->container['commission'];
    }

    /**
     * Sets commission
     *
     * @param float|null $commission A commission amount
     *
     * @return self
     */
    public function setCommission($commission)
    {
        if (is_null($commission)) {
            throw new \InvalidArgumentException('non-nullable commission cannot be null');
        }
        $this->container['commission'] = $commission;

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

