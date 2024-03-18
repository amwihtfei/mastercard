<?php
/**
 * CashFlowCashFlowCreditSummary
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
 * CashFlowCashFlowCreditSummary Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CashFlowCashFlowCreditSummary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CashFlowCashFlowCreditSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'monthly_cash_flow_credit_summaries' => '\OpenAPI\Client\Model\CashFlowMonthlyCashFlowCreditSummaries[]',
        'twelve_month_credit_total' => 'float',
        'twelve_month_credit_total_less_transfers' => 'float',
        'six_month_credit_total' => 'float',
        'six_month_credit_total_less_transfers' => 'float',
        'two_month_credit_total' => 'float',
        'two_month_credit_total_less_transfers' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'monthly_cash_flow_credit_summaries' => null,
        'twelve_month_credit_total' => null,
        'twelve_month_credit_total_less_transfers' => null,
        'six_month_credit_total' => null,
        'six_month_credit_total_less_transfers' => null,
        'two_month_credit_total' => null,
        'two_month_credit_total_less_transfers' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'monthly_cash_flow_credit_summaries' => false,
        'twelve_month_credit_total' => false,
        'twelve_month_credit_total_less_transfers' => false,
        'six_month_credit_total' => false,
        'six_month_credit_total_less_transfers' => false,
        'two_month_credit_total' => false,
        'two_month_credit_total_less_transfers' => false
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
        'monthly_cash_flow_credit_summaries' => 'monthlyCashFlowCreditSummaries',
        'twelve_month_credit_total' => 'twelveMonthCreditTotal',
        'twelve_month_credit_total_less_transfers' => 'twelveMonthCreditTotalLessTransfers',
        'six_month_credit_total' => 'sixMonthCreditTotal',
        'six_month_credit_total_less_transfers' => 'sixMonthCreditTotalLessTransfers',
        'two_month_credit_total' => 'twoMonthCreditTotal',
        'two_month_credit_total_less_transfers' => 'twoMonthCreditTotalLessTransfers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'monthly_cash_flow_credit_summaries' => 'setMonthlyCashFlowCreditSummaries',
        'twelve_month_credit_total' => 'setTwelveMonthCreditTotal',
        'twelve_month_credit_total_less_transfers' => 'setTwelveMonthCreditTotalLessTransfers',
        'six_month_credit_total' => 'setSixMonthCreditTotal',
        'six_month_credit_total_less_transfers' => 'setSixMonthCreditTotalLessTransfers',
        'two_month_credit_total' => 'setTwoMonthCreditTotal',
        'two_month_credit_total_less_transfers' => 'setTwoMonthCreditTotalLessTransfers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'monthly_cash_flow_credit_summaries' => 'getMonthlyCashFlowCreditSummaries',
        'twelve_month_credit_total' => 'getTwelveMonthCreditTotal',
        'twelve_month_credit_total_less_transfers' => 'getTwelveMonthCreditTotalLessTransfers',
        'six_month_credit_total' => 'getSixMonthCreditTotal',
        'six_month_credit_total_less_transfers' => 'getSixMonthCreditTotalLessTransfers',
        'two_month_credit_total' => 'getTwoMonthCreditTotal',
        'two_month_credit_total_less_transfers' => 'getTwoMonthCreditTotalLessTransfers'
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
        $this->setIfExists('monthly_cash_flow_credit_summaries', $data ?? [], null);
        $this->setIfExists('twelve_month_credit_total', $data ?? [], null);
        $this->setIfExists('twelve_month_credit_total_less_transfers', $data ?? [], null);
        $this->setIfExists('six_month_credit_total', $data ?? [], null);
        $this->setIfExists('six_month_credit_total_less_transfers', $data ?? [], null);
        $this->setIfExists('two_month_credit_total', $data ?? [], null);
        $this->setIfExists('two_month_credit_total_less_transfers', $data ?? [], null);
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

        if ($this->container['monthly_cash_flow_credit_summaries'] === null) {
            $invalidProperties[] = "'monthly_cash_flow_credit_summaries' can't be null";
        }
        if ($this->container['twelve_month_credit_total'] === null) {
            $invalidProperties[] = "'twelve_month_credit_total' can't be null";
        }
        if ($this->container['twelve_month_credit_total_less_transfers'] === null) {
            $invalidProperties[] = "'twelve_month_credit_total_less_transfers' can't be null";
        }
        if ($this->container['six_month_credit_total'] === null) {
            $invalidProperties[] = "'six_month_credit_total' can't be null";
        }
        if ($this->container['six_month_credit_total_less_transfers'] === null) {
            $invalidProperties[] = "'six_month_credit_total_less_transfers' can't be null";
        }
        if ($this->container['two_month_credit_total'] === null) {
            $invalidProperties[] = "'two_month_credit_total' can't be null";
        }
        if ($this->container['two_month_credit_total_less_transfers'] === null) {
            $invalidProperties[] = "'two_month_credit_total_less_transfers' can't be null";
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
     * Gets monthly_cash_flow_credit_summaries
     *
     * @return \OpenAPI\Client\Model\CashFlowMonthlyCashFlowCreditSummaries[]
     */
    public function getMonthlyCashFlowCreditSummaries()
    {
        return $this->container['monthly_cash_flow_credit_summaries'];
    }

    /**
     * Sets monthly_cash_flow_credit_summaries
     *
     * @param \OpenAPI\Client\Model\CashFlowMonthlyCashFlowCreditSummaries[] $monthly_cash_flow_credit_summaries List of attributes for each month
     *
     * @return self
     */
    public function setMonthlyCashFlowCreditSummaries($monthly_cash_flow_credit_summaries)
    {
        if (is_null($monthly_cash_flow_credit_summaries)) {
            throw new \InvalidArgumentException('non-nullable monthly_cash_flow_credit_summaries cannot be null');
        }
        $this->container['monthly_cash_flow_credit_summaries'] = $monthly_cash_flow_credit_summaries;

        return $this;
    }

    /**
     * Gets twelve_month_credit_total
     *
     * @return float
     */
    public function getTwelveMonthCreditTotal()
    {
        return $this->container['twelve_month_credit_total'];
    }

    /**
     * Sets twelve_month_credit_total
     *
     * @param float $twelve_month_credit_total Sum of all credit transactions for each month for all accounts
     *
     * @return self
     */
    public function setTwelveMonthCreditTotal($twelve_month_credit_total)
    {
        if (is_null($twelve_month_credit_total)) {
            throw new \InvalidArgumentException('non-nullable twelve_month_credit_total cannot be null');
        }
        $this->container['twelve_month_credit_total'] = $twelve_month_credit_total;

        return $this;
    }

    /**
     * Gets twelve_month_credit_total_less_transfers
     *
     * @return float
     */
    public function getTwelveMonthCreditTotalLessTransfers()
    {
        return $this->container['twelve_month_credit_total_less_transfers'];
    }

    /**
     * Sets twelve_month_credit_total_less_transfers
     *
     * @param float $twelve_month_credit_total_less_transfers Sum of all monthly credit transactions without transfers for all accounts
     *
     * @return self
     */
    public function setTwelveMonthCreditTotalLessTransfers($twelve_month_credit_total_less_transfers)
    {
        if (is_null($twelve_month_credit_total_less_transfers)) {
            throw new \InvalidArgumentException('non-nullable twelve_month_credit_total_less_transfers cannot be null');
        }
        $this->container['twelve_month_credit_total_less_transfers'] = $twelve_month_credit_total_less_transfers;

        return $this;
    }

    /**
     * Gets six_month_credit_total
     *
     * @return float
     */
    public function getSixMonthCreditTotal()
    {
        return $this->container['six_month_credit_total'];
    }

    /**
     * Sets six_month_credit_total
     *
     * @param float $six_month_credit_total Six month sum of all credit transactions
     *
     * @return self
     */
    public function setSixMonthCreditTotal($six_month_credit_total)
    {
        if (is_null($six_month_credit_total)) {
            throw new \InvalidArgumentException('non-nullable six_month_credit_total cannot be null');
        }
        $this->container['six_month_credit_total'] = $six_month_credit_total;

        return $this;
    }

    /**
     * Gets six_month_credit_total_less_transfers
     *
     * @return float
     */
    public function getSixMonthCreditTotalLessTransfers()
    {
        return $this->container['six_month_credit_total_less_transfers'];
    }

    /**
     * Sets six_month_credit_total_less_transfers
     *
     * @param float $six_month_credit_total_less_transfers Six month sum of all monthly credit transactions without transfers for all accounts
     *
     * @return self
     */
    public function setSixMonthCreditTotalLessTransfers($six_month_credit_total_less_transfers)
    {
        if (is_null($six_month_credit_total_less_transfers)) {
            throw new \InvalidArgumentException('non-nullable six_month_credit_total_less_transfers cannot be null');
        }
        $this->container['six_month_credit_total_less_transfers'] = $six_month_credit_total_less_transfers;

        return $this;
    }

    /**
     * Gets two_month_credit_total
     *
     * @return float
     */
    public function getTwoMonthCreditTotal()
    {
        return $this->container['two_month_credit_total'];
    }

    /**
     * Sets two_month_credit_total
     *
     * @param float $two_month_credit_total Two month sum of all credit transactions
     *
     * @return self
     */
    public function setTwoMonthCreditTotal($two_month_credit_total)
    {
        if (is_null($two_month_credit_total)) {
            throw new \InvalidArgumentException('non-nullable two_month_credit_total cannot be null');
        }
        $this->container['two_month_credit_total'] = $two_month_credit_total;

        return $this;
    }

    /**
     * Gets two_month_credit_total_less_transfers
     *
     * @return float
     */
    public function getTwoMonthCreditTotalLessTransfers()
    {
        return $this->container['two_month_credit_total_less_transfers'];
    }

    /**
     * Sets two_month_credit_total_less_transfers
     *
     * @param float $two_month_credit_total_less_transfers Two month sum of all monthly credit transactions without transfers for all accounts
     *
     * @return self
     */
    public function setTwoMonthCreditTotalLessTransfers($two_month_credit_total_less_transfers)
    {
        if (is_null($two_month_credit_total_less_transfers)) {
            throw new \InvalidArgumentException('non-nullable two_month_credit_total_less_transfers cannot be null');
        }
        $this->container['two_month_credit_total_less_transfers'] = $two_month_credit_total_less_transfers;

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

