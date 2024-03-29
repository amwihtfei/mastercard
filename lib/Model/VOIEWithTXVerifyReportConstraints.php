<?php
/**
 * VOIEWithTXVerifyReportConstraints
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
 * VOIEWithTXVerifyReportConstraints Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VOIEWithTXVerifyReportConstraints implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VOIEWithTXVerifyReportConstraints';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_ids' => 'string',
        'voie_with_interview_data' => '\OpenAPI\Client\Model\VOIEWithInterviewData',
        'report_custom_fields' => '\OpenAPI\Client\Model\ReportCustomField[]',
        'from_date' => 'int',
        'income_stream_confidence_minimum' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_ids' => null,
        'voie_with_interview_data' => null,
        'report_custom_fields' => null,
        'from_date' => 'int64',
        'income_stream_confidence_minimum' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account_ids' => false,
        'voie_with_interview_data' => false,
        'report_custom_fields' => false,
        'from_date' => false,
        'income_stream_confidence_minimum' => false
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
        'account_ids' => 'accountIds',
        'voie_with_interview_data' => 'voieWithInterviewData',
        'report_custom_fields' => 'reportCustomFields',
        'from_date' => 'fromDate',
        'income_stream_confidence_minimum' => 'incomeStreamConfidenceMinimum'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_ids' => 'setAccountIds',
        'voie_with_interview_data' => 'setVoieWithInterviewData',
        'report_custom_fields' => 'setReportCustomFields',
        'from_date' => 'setFromDate',
        'income_stream_confidence_minimum' => 'setIncomeStreamConfidenceMinimum'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_ids' => 'getAccountIds',
        'voie_with_interview_data' => 'getVoieWithInterviewData',
        'report_custom_fields' => 'getReportCustomFields',
        'from_date' => 'getFromDate',
        'income_stream_confidence_minimum' => 'getIncomeStreamConfidenceMinimum'
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
        $this->setIfExists('account_ids', $data ?? [], null);
        $this->setIfExists('voie_with_interview_data', $data ?? [], null);
        $this->setIfExists('report_custom_fields', $data ?? [], null);
        $this->setIfExists('from_date', $data ?? [], null);
        $this->setIfExists('income_stream_confidence_minimum', $data ?? [], null);
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

        if ($this->container['voie_with_interview_data'] === null) {
            $invalidProperties[] = "'voie_with_interview_data' can't be null";
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
     * Gets account_ids
     *
     * @return string|null
     */
    public function getAccountIds()
    {
        return $this->container['account_ids'];
    }

    /**
     * Sets account_ids
     *
     * @param string|null $account_ids A whitespace-separated list of account IDs to be included in the report (all accounts will be included if not set)
     *
     * @return self
     */
    public function setAccountIds($account_ids)
    {
        if (is_null($account_ids)) {
            throw new \InvalidArgumentException('non-nullable account_ids cannot be null');
        }
        $this->container['account_ids'] = $account_ids;

        return $this;
    }

    /**
     * Gets voie_with_interview_data
     *
     * @return \OpenAPI\Client\Model\VOIEWithInterviewData
     */
    public function getVoieWithInterviewData()
    {
        return $this->container['voie_with_interview_data'];
    }

    /**
     * Sets voie_with_interview_data
     *
     * @param \OpenAPI\Client\Model\VOIEWithInterviewData $voie_with_interview_data voie_with_interview_data
     *
     * @return self
     */
    public function setVoieWithInterviewData($voie_with_interview_data)
    {
        if (is_null($voie_with_interview_data)) {
            throw new \InvalidArgumentException('non-nullable voie_with_interview_data cannot be null');
        }
        $this->container['voie_with_interview_data'] = $voie_with_interview_data;

        return $this;
    }

    /**
     * Gets report_custom_fields
     *
     * @return \OpenAPI\Client\Model\ReportCustomField[]|null
     */
    public function getReportCustomFields()
    {
        return $this->container['report_custom_fields'];
    }

    /**
     * Sets report_custom_fields
     *
     * @param \OpenAPI\Client\Model\ReportCustomField[]|null $report_custom_fields The `reportCustomFields` parameter is used when experiences are associated with a credit decisioning report.  Designate up to 5 custom fields that you'd like associated with the report when it's generated. Every custom field consists of three variables: `label`, `value`, and `shown`. The `shown` variable is \"true\" or \"false\". * \"true\": (default) display the custom field in the PDF report * \"false\": don't display the custom field in the PDF report  For an experience that generates multiple reports, the `reportCustomFields` parameter gets passed to all reports.  All custom fields display in the Reseller Billing API.
     *
     * @return self
     */
    public function setReportCustomFields($report_custom_fields)
    {
        if (is_null($report_custom_fields)) {
            throw new \InvalidArgumentException('non-nullable report_custom_fields cannot be null');
        }
        $this->container['report_custom_fields'] = $report_custom_fields;

        return $this;
    }

    /**
     * Gets from_date
     *
     * @return int|null
     */
    public function getFromDate()
    {
        return $this->container['from_date'];
    }

    /**
     * Sets from_date
     *
     * @param int|null $from_date A date in Unix epoch time (in seconds). See: [Handling Epoch Dates and Times](https://developer.mastercard.com/open-banking-us/documentation/codes-and-formats/).
     *
     * @return self
     */
    public function setFromDate($from_date)
    {
        if (is_null($from_date)) {
            throw new \InvalidArgumentException('non-nullable from_date cannot be null');
        }
        $this->container['from_date'] = $from_date;

        return $this;
    }

    /**
     * Gets income_stream_confidence_minimum
     *
     * @return int|null
     */
    public function getIncomeStreamConfidenceMinimum()
    {
        return $this->container['income_stream_confidence_minimum'];
    }

    /**
     * Sets income_stream_confidence_minimum
     *
     * @param int|null $income_stream_confidence_minimum Include income streams in the report, based on the income stream's confidence score. For example, Use the value 50 to include only income streams with a confidence score of 50 or higher.
     *
     * @return self
     */
    public function setIncomeStreamConfidenceMinimum($income_stream_confidence_minimum)
    {
        if (is_null($income_stream_confidence_minimum)) {
            throw new \InvalidArgumentException('non-nullable income_stream_confidence_minimum cannot be null');
        }
        $this->container['income_stream_confidence_minimum'] = $income_stream_confidence_minimum;

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


