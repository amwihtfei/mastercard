<?php
/**
 * AFBalanceAnalyticsReport
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
 * AFBalanceAnalyticsReport Class Doc Comment
 *
 * @category Class
 * @description A Balance Analytics Report
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AFBalanceAnalyticsReport implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AFBalanceAnalyticsReport';

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
        'business_details' => '\OpenAPI\Client\Model\BusinessDetails',
        'report_pin' => 'string',
        'constraints' => '\OpenAPI\Client\Model\AnalyticsReportConstraintsOut',
        'start_date' => 'int',
        'end_date' => 'int',
        'days' => 'int',
        'seasoned' => 'bool',
        'institutions' => '\OpenAPI\Client\Model\ReportInstitution[]',
        'customer_analytics' => '\OpenAPI\Client\Model\CustomerAnalytics'
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
        'business_details' => null,
        'report_pin' => null,
        'constraints' => null,
        'start_date' => 'int64',
        'end_date' => 'int64',
        'days' => null,
        'seasoned' => null,
        'institutions' => null,
        'customer_analytics' => null
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
        'business_details' => false,
        'report_pin' => false,
        'constraints' => false,
        'start_date' => false,
        'end_date' => false,
        'days' => false,
        'seasoned' => false,
        'institutions' => false,
        'customer_analytics' => false
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
        'business_details' => 'businessDetails',
        'report_pin' => 'reportPin',
        'constraints' => 'constraints',
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'days' => 'days',
        'seasoned' => 'seasoned',
        'institutions' => 'institutions',
        'customer_analytics' => 'customerAnalytics'
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
        'business_details' => 'setBusinessDetails',
        'report_pin' => 'setReportPin',
        'constraints' => 'setConstraints',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'days' => 'setDays',
        'seasoned' => 'setSeasoned',
        'institutions' => 'setInstitutions',
        'customer_analytics' => 'setCustomerAnalytics'
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
        'business_details' => 'getBusinessDetails',
        'report_pin' => 'getReportPin',
        'constraints' => 'getConstraints',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'days' => 'getDays',
        'seasoned' => 'getSeasoned',
        'institutions' => 'getInstitutions',
        'customer_analytics' => 'getCustomerAnalytics'
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
        $this->setIfExists('business_details', $data ?? [], null);
        $this->setIfExists('report_pin', $data ?? [], null);
        $this->setIfExists('constraints', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('days', $data ?? [], null);
        $this->setIfExists('seasoned', $data ?? [], null);
        $this->setIfExists('institutions', $data ?? [], null);
        $this->setIfExists('customer_analytics', $data ?? [], null);
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
        if ($this->container['customer_type'] === null) {
            $invalidProperties[] = "'customer_type' can't be null";
        }
        if ($this->container['customer_id'] === null) {
            $invalidProperties[] = "'customer_id' can't be null";
        }
        if ($this->container['request_id'] === null) {
            $invalidProperties[] = "'request_id' can't be null";
        }
        if ($this->container['requester_name'] === null) {
            $invalidProperties[] = "'requester_name' can't be null";
        }
        if ($this->container['created_date'] === null) {
            $invalidProperties[] = "'created_date' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['constraints'] === null) {
            $invalidProperties[] = "'constraints' can't be null";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id A report ID
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
     * @return string
     */
    public function getCustomerType()
    {
        return $this->container['customer_type'];
    }

    /**
     * Sets customer_type
     *
     * @param string $customer_type The type of customer (\"active\" or \"testing\" or \"\" for all types)
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
     * @return int
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param int $customer_id A customer ID represented as a number. See Add Customer API for how to create a customer ID.
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
     * @return string
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param string $request_id Finicity indicator to track all activity associated with this report
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
     * @return string
     */
    public function getRequesterName()
    {
        return $this->container['requester_name'];
    }

    /**
     * Sets requester_name
     *
     * @param string $requester_name Name of a Finicity partner
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
     * @return int
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param int $created_date A date in Unix epoch time (in seconds). See: [Handling Epoch Dates and Times](https://developer.mastercard.com/open-banking-us/documentation/codes-and-formats/). Note: If the report is retrieved on a day other than the day it was generated, on the header of the PDF version of the report there will be a \"Retrieved Date\" populated.
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
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Title of the report
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
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type A report type. Possible values:  * `voi`   * `voa`   * `voaHistory`   * `history`   * `voieTxVerify`   * `voieWithReport`   * `voieWithInterview`   * `paystatement`   * `preQualVoa`   * `assetSummary`   * `voie`   * `transactions`   * `statement`   * `voiePayroll`   * `voeTransactions`   * `voePayroll`   * `cfrp`   * `cfrb`  * `barpcra`  * `barpnoncra`  * `barbcra`  * `barbftc`  * `barbnoncra`
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
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status A report generation status. Possible values:  * `inProgress`  * `success`  * `failure`
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
     * Gets business_details
     *
     * @return \OpenAPI\Client\Model\BusinessDetails|null
     */
    public function getBusinessDetails()
    {
        return $this->container['business_details'];
    }

    /**
     * Sets business_details
     *
     * @param \OpenAPI\Client\Model\BusinessDetails|null $business_details business_details
     *
     * @return self
     */
    public function setBusinessDetails($business_details)
    {
        if (is_null($business_details)) {
            throw new \InvalidArgumentException('non-nullable business_details cannot be null');
        }
        $this->container['business_details'] = $business_details;

        return $this;
    }

    /**
     * Gets report_pin
     *
     * @return string|null
     */
    public function getReportPin()
    {
        return $this->container['report_pin'];
    }

    /**
     * Sets report_pin
     *
     * @param string|null $report_pin A unique key returned per report for consumer Portal
     *
     * @return self
     */
    public function setReportPin($report_pin)
    {
        if (is_null($report_pin)) {
            throw new \InvalidArgumentException('non-nullable report_pin cannot be null');
        }
        $this->container['report_pin'] = $report_pin;

        return $this;
    }

    /**
     * Gets constraints
     *
     * @return \OpenAPI\Client\Model\AnalyticsReportConstraintsOut
     */
    public function getConstraints()
    {
        return $this->container['constraints'];
    }

    /**
     * Sets constraints
     *
     * @param \OpenAPI\Client\Model\AnalyticsReportConstraintsOut $constraints constraints
     *
     * @return self
     */
    public function setConstraints($constraints)
    {
        if (is_null($constraints)) {
            throw new \InvalidArgumentException('non-nullable constraints cannot be null');
        }
        $this->container['constraints'] = $constraints;

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
     * @param bool|null $seasoned \"true\" if the report covers more than 365 days
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
     * @param \OpenAPI\Client\Model\ReportInstitution[]|null $institutions A list of institution records, including information about the individual accounts used in this report
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
     * Gets customer_analytics
     *
     * @return \OpenAPI\Client\Model\CustomerAnalytics|null
     */
    public function getCustomerAnalytics()
    {
        return $this->container['customer_analytics'];
    }

    /**
     * Sets customer_analytics
     *
     * @param \OpenAPI\Client\Model\CustomerAnalytics|null $customer_analytics customer_analytics
     *
     * @return self
     */
    public function setCustomerAnalytics($customer_analytics)
    {
        if (is_null($customer_analytics)) {
            throw new \InvalidArgumentException('non-nullable customer_analytics cannot be null');
        }
        $this->container['customer_analytics'] = $customer_analytics;

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


