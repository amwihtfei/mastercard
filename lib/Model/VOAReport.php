<?php
/**
 * VOAReport
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
 * VOAReport Class Doc Comment
 *
 * @category Class
 * @description A VOA report
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VOAReport implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VOAReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'customer_type' => 'string',
        'customer_id' => 'int',
        'request_id' => 'string',
        'requester_name' => 'string',
        'created_date' => 'int',
        'title' => 'string',
        'consumer_id' => 'string',
        'consumer_ssn' => 'string',
        'type' => 'string',
        'status' => 'string',
        'errors' => '\OpenAPI\Client\Model\ErrorMessage[]',
        'portfolio_id' => 'string',
        'start_date' => 'int',
        'end_date' => 'int',
        'days' => 'int',
        'seasoned' => 'bool',
        'consolidated_available_balance' => 'float',
        'institutions' => '\OpenAPI\Client\Model\ReportInstitution[]',
        'assets' => '\OpenAPI\Client\Model\PrequalificationReportAssetSummary'
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
        'customer_type' => null,
        'customer_id' => 'int64',
        'request_id' => null,
        'requester_name' => null,
        'created_date' => 'int64',
        'title' => null,
        'consumer_id' => null,
        'consumer_ssn' => null,
        'type' => null,
        'status' => null,
        'errors' => null,
        'portfolio_id' => null,
        'start_date' => 'int64',
        'end_date' => 'int64',
        'days' => null,
        'seasoned' => null,
        'consolidated_available_balance' => null,
        'institutions' => null,
        'assets' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'customer_type' => false,
        'customer_id' => false,
        'request_id' => false,
        'requester_name' => false,
        'created_date' => false,
        'title' => false,
        'consumer_id' => false,
        'consumer_ssn' => false,
        'type' => false,
        'status' => false,
        'errors' => false,
        'portfolio_id' => false,
        'start_date' => false,
        'end_date' => false,
        'days' => false,
        'seasoned' => false,
        'consolidated_available_balance' => false,
        'institutions' => false,
        'assets' => false
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
        'customer_type' => 'customerType',
        'customer_id' => 'customerId',
        'request_id' => 'requestId',
        'requester_name' => 'requesterName',
        'created_date' => 'createdDate',
        'title' => 'title',
        'consumer_id' => 'consumerId',
        'consumer_ssn' => 'consumerSsn',
        'type' => 'type',
        'status' => 'status',
        'errors' => 'errors',
        'portfolio_id' => 'portfolioId',
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'days' => 'days',
        'seasoned' => 'seasoned',
        'consolidated_available_balance' => 'consolidatedAvailableBalance',
        'institutions' => 'institutions',
        'assets' => 'assets'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'customer_type' => 'setCustomerType',
        'customer_id' => 'setCustomerId',
        'request_id' => 'setRequestId',
        'requester_name' => 'setRequesterName',
        'created_date' => 'setCreatedDate',
        'title' => 'setTitle',
        'consumer_id' => 'setConsumerId',
        'consumer_ssn' => 'setConsumerSsn',
        'type' => 'setType',
        'status' => 'setStatus',
        'errors' => 'setErrors',
        'portfolio_id' => 'setPortfolioId',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'days' => 'setDays',
        'seasoned' => 'setSeasoned',
        'consolidated_available_balance' => 'setConsolidatedAvailableBalance',
        'institutions' => 'setInstitutions',
        'assets' => 'setAssets'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'customer_type' => 'getCustomerType',
        'customer_id' => 'getCustomerId',
        'request_id' => 'getRequestId',
        'requester_name' => 'getRequesterName',
        'created_date' => 'getCreatedDate',
        'title' => 'getTitle',
        'consumer_id' => 'getConsumerId',
        'consumer_ssn' => 'getConsumerSsn',
        'type' => 'getType',
        'status' => 'getStatus',
        'errors' => 'getErrors',
        'portfolio_id' => 'getPortfolioId',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'days' => 'getDays',
        'seasoned' => 'getSeasoned',
        'consolidated_available_balance' => 'getConsolidatedAvailableBalance',
        'institutions' => 'getInstitutions',
        'assets' => 'getAssets'
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
        $this->setIfExists('customer_type', $data ?? [], null);
        $this->setIfExists('customer_id', $data ?? [], null);
        $this->setIfExists('request_id', $data ?? [], null);
        $this->setIfExists('requester_name', $data ?? [], null);
        $this->setIfExists('created_date', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('consumer_id', $data ?? [], null);
        $this->setIfExists('consumer_ssn', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('errors', $data ?? [], null);
        $this->setIfExists('portfolio_id', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('days', $data ?? [], null);
        $this->setIfExists('seasoned', $data ?? [], null);
        $this->setIfExists('consolidated_available_balance', $data ?? [], null);
        $this->setIfExists('institutions', $data ?? [], null);
        $this->setIfExists('assets', $data ?? [], null);
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
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id A report ID
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
     * Gets customer_type
     *
     * @return string|null
     */
    public function getCustomerType()
    {
        return $this->container['customer_type'];
    }

    /**
     * Sets customer_type
     *
     * @param string|null $customer_type The type of customer (\"active\" or \"testing\" or \"\" for all types)
     *
     * @return self
     */
    public function setCustomerType($customer_type)
    {
        if (is_null($customer_type)) {
            throw new \InvalidArgumentException('non-nullable customer_type cannot be null');
        }
        $this->container['customer_type'] = $customer_type;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return int|null
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param int|null $customer_id A customer ID represented as a number. See Add Customer API for how to create a customer ID.
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        if (is_null($customer_id)) {
            throw new \InvalidArgumentException('non-nullable customer_id cannot be null');
        }
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets request_id
     *
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param string|null $request_id Finicity indicator to track all activity associated with this report
     *
     * @return self
     */
    public function setRequestId($request_id)
    {
        if (is_null($request_id)) {
            throw new \InvalidArgumentException('non-nullable request_id cannot be null');
        }
        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets requester_name
     *
     * @return string|null
     */
    public function getRequesterName()
    {
        return $this->container['requester_name'];
    }

    /**
     * Sets requester_name
     *
     * @param string|null $requester_name Name of a Finicity partner
     *
     * @return self
     */
    public function setRequesterName($requester_name)
    {
        if (is_null($requester_name)) {
            throw new \InvalidArgumentException('non-nullable requester_name cannot be null');
        }
        $this->container['requester_name'] = $requester_name;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return int|null
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param int|null $created_date A date in Unix epoch time (in seconds). See: [Handling Epoch Dates and Times](https://developer.mastercard.com/open-banking-us/documentation/codes-and-formats/). Note: If the report is retrieved on a day other than the day it was generated, on the header of the PDF version of the report there will be a \"Retrieved Date\" populated.
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
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Title of the report
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets consumer_id
     *
     * @return string|null
     */
    public function getConsumerId()
    {
        return $this->container['consumer_id'];
    }

    /**
     * Sets consumer_id
     *
     * @param string|null $consumer_id A consumer ID. See Create Consumer API for how to create a consumer ID.
     *
     * @return self
     */
    public function setConsumerId($consumer_id)
    {
        if (is_null($consumer_id)) {
            throw new \InvalidArgumentException('non-nullable consumer_id cannot be null');
        }
        $this->container['consumer_id'] = $consumer_id;

        return $this;
    }

    /**
     * Gets consumer_ssn
     *
     * @return string|null
     */
    public function getConsumerSsn()
    {
        return $this->container['consumer_ssn'];
    }

    /**
     * Sets consumer_ssn
     *
     * @param string|null $consumer_ssn Last 4 digits of a SSN
     *
     * @return self
     */
    public function setConsumerSsn($consumer_ssn)
    {
        if (is_null($consumer_ssn)) {
            throw new \InvalidArgumentException('non-nullable consumer_ssn cannot be null');
        }
        $this->container['consumer_ssn'] = $consumer_ssn;

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
     * @param string|null $type A report type. Possible values:  * `voi`   * `voa`   * `voaHistory`   * `history`   * `voieTxVerify`   * `voieWithReport`   * `voieWithInterview`   * `paystatement`   * `preQualVoa`   * `assetSummary`   * `voie`   * `transactions`   * `statement`   * `voiePayroll`   * `voeTransactions`   * `voePayroll`   * `cfrp`   * `cfrb`  * `barpcra`  * `barpnoncra`  * `barbcra`  * `barbftc`  * `barbnoncra`
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
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status A report generation status. Possible values:  * `inProgress`  * `success`  * `failure`
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return \OpenAPI\Client\Model\ErrorMessage[]|null
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \OpenAPI\Client\Model\ErrorMessage[]|null $errors In case errors occurred during the report generation
     *
     * @return self
     */
    public function setErrors($errors)
    {
        if (is_null($errors)) {
            throw new \InvalidArgumentException('non-nullable errors cannot be null');
        }
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets portfolio_id
     *
     * @return string|null
     */
    public function getPortfolioId()
    {
        return $this->container['portfolio_id'];
    }

    /**
     * Sets portfolio_id
     *
     * @param string|null $portfolio_id A unique identifier that will be consistent across all reports created for the same customer
     *
     * @return self
     */
    public function setPortfolioId($portfolio_id)
    {
        if (is_null($portfolio_id)) {
            throw new \InvalidArgumentException('non-nullable portfolio_id cannot be null');
        }
        $this->container['portfolio_id'] = $portfolio_id;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return int|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param int|null $start_date The `postedDate` of the earliest transaction analyzed for the report. A date in Unix epoch time (in seconds). See: [Handling Epoch Dates and Times](https://developer.mastercard.com/open-banking-us/documentation/codes-and-formats/).
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        if (is_null($start_date)) {
            throw new \InvalidArgumentException('non-nullable start_date cannot be null');
        }
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return int|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param int|null $end_date The `postedDate` of the latest transaction analyzed for the report. A date in Unix epoch time (in seconds). See: [Handling Epoch Dates and Times](https://developer.mastercard.com/open-banking-us/documentation/codes-and-formats/).
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        if (is_null($end_date)) {
            throw new \InvalidArgumentException('non-nullable end_date cannot be null');
        }
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets days
     *
     * @return int|null
     */
    public function getDays()
    {
        return $this->container['days'];
    }

    /**
     * Sets days
     *
     * @param int|null $days Number of days covered by the report
     *
     * @return self
     */
    public function setDays($days)
    {
        if (is_null($days)) {
            throw new \InvalidArgumentException('non-nullable days cannot be null');
        }
        $this->container['days'] = $days;

        return $this;
    }

    /**
     * Gets seasoned
     *
     * @return bool|null
     */
    public function getSeasoned()
    {
        return $this->container['seasoned'];
    }

    /**
     * Sets seasoned
     *
     * @param bool|null $seasoned \"true\" if the report covers more than 180 days
     *
     * @return self
     */
    public function setSeasoned($seasoned)
    {
        if (is_null($seasoned)) {
            throw new \InvalidArgumentException('non-nullable seasoned cannot be null');
        }
        $this->container['seasoned'] = $seasoned;

        return $this;
    }

    /**
     * Gets consolidated_available_balance
     *
     * @return float|null
     */
    public function getConsolidatedAvailableBalance()
    {
        return $this->container['consolidated_available_balance'];
    }

    /**
     * Sets consolidated_available_balance
     *
     * @param float|null $consolidated_available_balance The sum of available balance for all of the accounts included in the report
     *
     * @return self
     */
    public function setConsolidatedAvailableBalance($consolidated_available_balance)
    {
        if (is_null($consolidated_available_balance)) {
            throw new \InvalidArgumentException('non-nullable consolidated_available_balance cannot be null');
        }
        $this->container['consolidated_available_balance'] = $consolidated_available_balance;

        return $this;
    }

    /**
     * Gets institutions
     *
     * @return \OpenAPI\Client\Model\ReportInstitution[]|null
     */
    public function getInstitutions()
    {
        return $this->container['institutions'];
    }

    /**
     * Sets institutions
     *
     * @param \OpenAPI\Client\Model\ReportInstitution[]|null $institutions A list of institution records
     *
     * @return self
     */
    public function setInstitutions($institutions)
    {
        if (is_null($institutions)) {
            throw new \InvalidArgumentException('non-nullable institutions cannot be null');
        }
        $this->container['institutions'] = $institutions;

        return $this;
    }

    /**
     * Gets assets
     *
     * @return \OpenAPI\Client\Model\PrequalificationReportAssetSummary|null
     */
    public function getAssets()
    {
        return $this->container['assets'];
    }

    /**
     * Sets assets
     *
     * @param \OpenAPI\Client\Model\PrequalificationReportAssetSummary|null $assets assets
     *
     * @return self
     */
    public function setAssets($assets)
    {
        if (is_null($assets)) {
            throw new \InvalidArgumentException('non-nullable assets cannot be null');
        }
        $this->container['assets'] = $assets;

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


