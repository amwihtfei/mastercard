<?php
/**
 * ObbAnalyticsReport
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
 * ObbAnalyticsReport Class Doc Comment
 *
 * @category Class
 * @description Cash Flow Analytics, Balance Analytics, and Payment History report data as JSON
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ObbAnalyticsReport implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ObbAnalyticsReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_results' => '\OpenAPI\Client\Model\BalanceAnalyticsAccountResult[]',
        'business_id' => 'int',
        'business_summary' => '\OpenAPI\Client\Model\BalanceAnalyticsBusinessSummary',
        'customer_id' => 'int',
        'report_header' => '\OpenAPI\Client\Model\ObbReportHeader',
        'requester_name' => 'string',
        'title' => 'string',
        'total_revenue' => 'float',
        'account_ids' => 'int[]',
        'analytics' => '\OpenAPI\Client\Model\PaymentHistoryAnalytics'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_results' => null,
        'business_id' => null,
        'business_summary' => null,
        'customer_id' => 'int64',
        'report_header' => null,
        'requester_name' => null,
        'title' => null,
        'total_revenue' => null,
        'account_ids' => 'int64',
        'analytics' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account_results' => false,
        'business_id' => false,
        'business_summary' => false,
        'customer_id' => false,
        'report_header' => false,
        'requester_name' => false,
        'title' => false,
        'total_revenue' => false,
        'account_ids' => false,
        'analytics' => false
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
        'account_results' => 'accountResults',
        'business_id' => 'businessId',
        'business_summary' => 'businessSummary',
        'customer_id' => 'customerId',
        'report_header' => 'reportHeader',
        'requester_name' => 'requesterName',
        'title' => 'title',
        'total_revenue' => 'totalRevenue',
        'account_ids' => 'accountIds',
        'analytics' => 'analytics'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_results' => 'setAccountResults',
        'business_id' => 'setBusinessId',
        'business_summary' => 'setBusinessSummary',
        'customer_id' => 'setCustomerId',
        'report_header' => 'setReportHeader',
        'requester_name' => 'setRequesterName',
        'title' => 'setTitle',
        'total_revenue' => 'setTotalRevenue',
        'account_ids' => 'setAccountIds',
        'analytics' => 'setAnalytics'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_results' => 'getAccountResults',
        'business_id' => 'getBusinessId',
        'business_summary' => 'getBusinessSummary',
        'customer_id' => 'getCustomerId',
        'report_header' => 'getReportHeader',
        'requester_name' => 'getRequesterName',
        'title' => 'getTitle',
        'total_revenue' => 'getTotalRevenue',
        'account_ids' => 'getAccountIds',
        'analytics' => 'getAnalytics'
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
        $this->setIfExists('account_results', $data ?? [], null);
        $this->setIfExists('business_id', $data ?? [], null);
        $this->setIfExists('business_summary', $data ?? [], null);
        $this->setIfExists('customer_id', $data ?? [], null);
        $this->setIfExists('report_header', $data ?? [], null);
        $this->setIfExists('requester_name', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('total_revenue', $data ?? [], null);
        $this->setIfExists('account_ids', $data ?? [], null);
        $this->setIfExists('analytics', $data ?? [], null);
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

        if ($this->container['customer_id'] === null) {
            $invalidProperties[] = "'customer_id' can't be null";
        }
        if ($this->container['report_header'] === null) {
            $invalidProperties[] = "'report_header' can't be null";
        }
        if (!is_null($this->container['requester_name']) && (mb_strlen($this->container['requester_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'requester_name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['requester_name']) && (mb_strlen($this->container['requester_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'requester_name', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
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
     * Gets account_results
     *
     * @return \OpenAPI\Client\Model\BalanceAnalyticsAccountResult[]|null
     */
    public function getAccountResults()
    {
        return $this->container['account_results'];
    }

    /**
     * Sets account_results
     *
     * @param \OpenAPI\Client\Model\BalanceAnalyticsAccountResult[]|null $account_results Balance results per account
     *
     * @return self
     */
    public function setAccountResults($account_results)
    {
        if (is_null($account_results)) {
            throw new \InvalidArgumentException('non-nullable account_results cannot be null');
        }
        $this->container['account_results'] = $account_results;

        return $this;
    }

    /**
     * Gets business_id
     *
     * @return int|null
     */
    public function getBusinessId()
    {
        return $this->container['business_id'];
    }

    /**
     * Sets business_id
     *
     * @param int|null $business_id Business ID
     *
     * @return self
     */
    public function setBusinessId($business_id)
    {
        if (is_null($business_id)) {
            throw new \InvalidArgumentException('non-nullable business_id cannot be null');
        }
        $this->container['business_id'] = $business_id;

        return $this;
    }

    /**
     * Gets business_summary
     *
     * @return \OpenAPI\Client\Model\BalanceAnalyticsBusinessSummary|null
     */
    public function getBusinessSummary()
    {
        return $this->container['business_summary'];
    }

    /**
     * Sets business_summary
     *
     * @param \OpenAPI\Client\Model\BalanceAnalyticsBusinessSummary|null $business_summary business_summary
     *
     * @return self
     */
    public function setBusinessSummary($business_summary)
    {
        if (is_null($business_summary)) {
            throw new \InvalidArgumentException('non-nullable business_summary cannot be null');
        }
        $this->container['business_summary'] = $business_summary;

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
     * Gets report_header
     *
     * @return \OpenAPI\Client\Model\ObbReportHeader
     */
    public function getReportHeader()
    {
        return $this->container['report_header'];
    }

    /**
     * Sets report_header
     *
     * @param \OpenAPI\Client\Model\ObbReportHeader $report_header Customer and report metadata
     *
     * @return self
     */
    public function setReportHeader($report_header)
    {
        if (is_null($report_header)) {
            throw new \InvalidArgumentException('non-nullable report_header cannot be null');
        }
        $this->container['report_header'] = $report_header;

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
     * @param string|null $requester_name Name of requester
     *
     * @return self
     */
    public function setRequesterName($requester_name)
    {
        if (is_null($requester_name)) {
            throw new \InvalidArgumentException('non-nullable requester_name cannot be null');
        }
        if ((mb_strlen($requester_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $requester_name when calling ObbAnalyticsReport., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($requester_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $requester_name when calling ObbAnalyticsReport., must be bigger than or equal to 0.');
        }

        $this->container['requester_name'] = $requester_name;

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
     * Gets total_revenue
     *
     * @return float|null
     */
    public function getTotalRevenue()
    {
        return $this->container['total_revenue'];
    }

    /**
     * Sets total_revenue
     *
     * @param float|null $total_revenue The total revenue
     *
     * @return self
     */
    public function setTotalRevenue($total_revenue)
    {
        if (is_null($total_revenue)) {
            throw new \InvalidArgumentException('non-nullable total_revenue cannot be null');
        }
        $this->container['total_revenue'] = $total_revenue;

        return $this;
    }

    /**
     * Gets account_ids
     *
     * @return int[]|null
     */
    public function getAccountIds()
    {
        return $this->container['account_ids'];
    }

    /**
     * Sets account_ids
     *
     * @param int[]|null $account_ids List of account IDs included in the report
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
     * Gets analytics
     *
     * @return \OpenAPI\Client\Model\PaymentHistoryAnalytics|null
     */
    public function getAnalytics()
    {
        return $this->container['analytics'];
    }

    /**
     * Sets analytics
     *
     * @param \OpenAPI\Client\Model\PaymentHistoryAnalytics|null $analytics analytics
     *
     * @return self
     */
    public function setAnalytics($analytics)
    {
        if (is_null($analytics)) {
            throw new \InvalidArgumentException('non-nullable analytics cannot be null');
        }
        $this->container['analytics'] = $analytics;

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


