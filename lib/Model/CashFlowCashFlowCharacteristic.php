<?php
/**
 * CashFlowCashFlowCharacteristic
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
 * CashFlowCashFlowCharacteristic Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CashFlowCashFlowCharacteristic implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CashFlowCashFlowCharacteristic';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'monthly_cash_flow_characteristics' => '\OpenAPI\Client\Model\CashFlowMonthlyCashFlowCharacteristics[]',
        'average_monthly_net' => 'float',
        'average_monthly_net_less_transfers' => 'float',
        'twelve_month_total_net' => 'float',
        'twelve_month_total_net_less_transfers' => 'float',
        'six_month_average_total_credits_less_total_debits' => 'float',
        'six_month_average_total_credits_less_total_debits_less_transfers' => 'float',
        'two_month_average_total_credits_less_total_debits' => 'float',
        'two_month_average_total_credits_less_total_debits_less_transfers' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'monthly_cash_flow_characteristics' => null,
        'average_monthly_net' => null,
        'average_monthly_net_less_transfers' => null,
        'twelve_month_total_net' => null,
        'twelve_month_total_net_less_transfers' => null,
        'six_month_average_total_credits_less_total_debits' => null,
        'six_month_average_total_credits_less_total_debits_less_transfers' => null,
        'two_month_average_total_credits_less_total_debits' => null,
        'two_month_average_total_credits_less_total_debits_less_transfers' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'monthly_cash_flow_characteristics' => false,
        'average_monthly_net' => false,
        'average_monthly_net_less_transfers' => false,
        'twelve_month_total_net' => false,
        'twelve_month_total_net_less_transfers' => false,
        'six_month_average_total_credits_less_total_debits' => false,
        'six_month_average_total_credits_less_total_debits_less_transfers' => false,
        'two_month_average_total_credits_less_total_debits' => false,
        'two_month_average_total_credits_less_total_debits_less_transfers' => false
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
        'monthly_cash_flow_characteristics' => 'monthlyCashFlowCharacteristics',
        'average_monthly_net' => 'averageMonthlyNet',
        'average_monthly_net_less_transfers' => 'averageMonthlyNetLessTransfers',
        'twelve_month_total_net' => 'twelveMonthTotalNet',
        'twelve_month_total_net_less_transfers' => 'twelveMonthTotalNetLessTransfers',
        'six_month_average_total_credits_less_total_debits' => 'sixMonthAverageTotalCreditsLessTotalDebits',
        'six_month_average_total_credits_less_total_debits_less_transfers' => 'sixMonthAverageTotalCreditsLessTotalDebitsLessTransfers',
        'two_month_average_total_credits_less_total_debits' => 'twoMonthAverageTotalCreditsLessTotalDebits',
        'two_month_average_total_credits_less_total_debits_less_transfers' => 'twoMonthAverageTotalCreditsLessTotalDebitsLessTransfers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'monthly_cash_flow_characteristics' => 'setMonthlyCashFlowCharacteristics',
        'average_monthly_net' => 'setAverageMonthlyNet',
        'average_monthly_net_less_transfers' => 'setAverageMonthlyNetLessTransfers',
        'twelve_month_total_net' => 'setTwelveMonthTotalNet',
        'twelve_month_total_net_less_transfers' => 'setTwelveMonthTotalNetLessTransfers',
        'six_month_average_total_credits_less_total_debits' => 'setSixMonthAverageTotalCreditsLessTotalDebits',
        'six_month_average_total_credits_less_total_debits_less_transfers' => 'setSixMonthAverageTotalCreditsLessTotalDebitsLessTransfers',
        'two_month_average_total_credits_less_total_debits' => 'setTwoMonthAverageTotalCreditsLessTotalDebits',
        'two_month_average_total_credits_less_total_debits_less_transfers' => 'setTwoMonthAverageTotalCreditsLessTotalDebitsLessTransfers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'monthly_cash_flow_characteristics' => 'getMonthlyCashFlowCharacteristics',
        'average_monthly_net' => 'getAverageMonthlyNet',
        'average_monthly_net_less_transfers' => 'getAverageMonthlyNetLessTransfers',
        'twelve_month_total_net' => 'getTwelveMonthTotalNet',
        'twelve_month_total_net_less_transfers' => 'getTwelveMonthTotalNetLessTransfers',
        'six_month_average_total_credits_less_total_debits' => 'getSixMonthAverageTotalCreditsLessTotalDebits',
        'six_month_average_total_credits_less_total_debits_less_transfers' => 'getSixMonthAverageTotalCreditsLessTotalDebitsLessTransfers',
        'two_month_average_total_credits_less_total_debits' => 'getTwoMonthAverageTotalCreditsLessTotalDebits',
        'two_month_average_total_credits_less_total_debits_less_transfers' => 'getTwoMonthAverageTotalCreditsLessTotalDebitsLessTransfers'
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
        $this->setIfExists('monthly_cash_flow_characteristics', $data ?? [], null);
        $this->setIfExists('average_monthly_net', $data ?? [], null);
        $this->setIfExists('average_monthly_net_less_transfers', $data ?? [], null);
        $this->setIfExists('twelve_month_total_net', $data ?? [], null);
        $this->setIfExists('twelve_month_total_net_less_transfers', $data ?? [], null);
        $this->setIfExists('six_month_average_total_credits_less_total_debits', $data ?? [], null);
        $this->setIfExists('six_month_average_total_credits_less_total_debits_less_transfers', $data ?? [], null);
        $this->setIfExists('two_month_average_total_credits_less_total_debits', $data ?? [], null);
        $this->setIfExists('two_month_average_total_credits_less_total_debits_less_transfers', $data ?? [], null);
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

        if ($this->container['monthly_cash_flow_characteristics'] === null) {
            $invalidProperties[] = "'monthly_cash_flow_characteristics' can't be null";
        }
        if ($this->container['average_monthly_net'] === null) {
            $invalidProperties[] = "'average_monthly_net' can't be null";
        }
        if ($this->container['average_monthly_net_less_transfers'] === null) {
            $invalidProperties[] = "'average_monthly_net_less_transfers' can't be null";
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
     * Gets monthly_cash_flow_characteristics
     *
     * @return \OpenAPI\Client\Model\CashFlowMonthlyCashFlowCharacteristics[]
     */
    public function getMonthlyCashFlowCharacteristics()
    {
        return $this->container['monthly_cash_flow_characteristics'];
    }

    /**
     * Sets monthly_cash_flow_characteristics
     *
     * @param \OpenAPI\Client\Model\CashFlowMonthlyCashFlowCharacteristics[] $monthly_cash_flow_characteristics List of attributes for each month
     *
     * @return self
     */
    public function setMonthlyCashFlowCharacteristics($monthly_cash_flow_characteristics)
    {
        if (is_null($monthly_cash_flow_characteristics)) {
            throw new \InvalidArgumentException('non-nullable monthly_cash_flow_characteristics cannot be null');
        }
        $this->container['monthly_cash_flow_characteristics'] = $monthly_cash_flow_characteristics;

        return $this;
    }

    /**
     * Gets average_monthly_net
     *
     * @return float
     */
    public function getAverageMonthlyNet()
    {
        return $this->container['average_monthly_net'];
    }

    /**
     * Sets average_monthly_net
     *
     * @param float $average_monthly_net Average (Total Credits - Total Debits) for the account
     *
     * @return self
     */
    public function setAverageMonthlyNet($average_monthly_net)
    {
        if (is_null($average_monthly_net)) {
            throw new \InvalidArgumentException('non-nullable average_monthly_net cannot be null');
        }
        $this->container['average_monthly_net'] = $average_monthly_net;

        return $this;
    }

    /**
     * Gets average_monthly_net_less_transfers
     *
     * @return float
     */
    public function getAverageMonthlyNetLessTransfers()
    {
        return $this->container['average_monthly_net_less_transfers'];
    }

    /**
     * Sets average_monthly_net_less_transfers
     *
     * @param float $average_monthly_net_less_transfers Average (Total Credits - Total Debits) without transfers for the account
     *
     * @return self
     */
    public function setAverageMonthlyNetLessTransfers($average_monthly_net_less_transfers)
    {
        if (is_null($average_monthly_net_less_transfers)) {
            throw new \InvalidArgumentException('non-nullable average_monthly_net_less_transfers cannot be null');
        }
        $this->container['average_monthly_net_less_transfers'] = $average_monthly_net_less_transfers;

        return $this;
    }

    /**
     * Gets twelve_month_total_net
     *
     * @return float|null
     */
    public function getTwelveMonthTotalNet()
    {
        return $this->container['twelve_month_total_net'];
    }

    /**
     * Sets twelve_month_total_net
     *
     * @param float|null $twelve_month_total_net Sum of all monthly (Total Credits - Total Debits) each month for the account
     *
     * @return self
     */
    public function setTwelveMonthTotalNet($twelve_month_total_net)
    {
        if (is_null($twelve_month_total_net)) {
            throw new \InvalidArgumentException('non-nullable twelve_month_total_net cannot be null');
        }
        $this->container['twelve_month_total_net'] = $twelve_month_total_net;

        return $this;
    }

    /**
     * Gets twelve_month_total_net_less_transfers
     *
     * @return float|null
     */
    public function getTwelveMonthTotalNetLessTransfers()
    {
        return $this->container['twelve_month_total_net_less_transfers'];
    }

    /**
     * Sets twelve_month_total_net_less_transfers
     *
     * @param float|null $twelve_month_total_net_less_transfers Sum of all monthly (Total Credits - Total Debits) without transfers for the account
     *
     * @return self
     */
    public function setTwelveMonthTotalNetLessTransfers($twelve_month_total_net_less_transfers)
    {
        if (is_null($twelve_month_total_net_less_transfers)) {
            throw new \InvalidArgumentException('non-nullable twelve_month_total_net_less_transfers cannot be null');
        }
        $this->container['twelve_month_total_net_less_transfers'] = $twelve_month_total_net_less_transfers;

        return $this;
    }

    /**
     * Gets six_month_average_total_credits_less_total_debits
     *
     * @return float|null
     */
    public function getSixMonthAverageTotalCreditsLessTotalDebits()
    {
        return $this->container['six_month_average_total_credits_less_total_debits'];
    }

    /**
     * Sets six_month_average_total_credits_less_total_debits
     *
     * @param float|null $six_month_average_total_credits_less_total_debits 6 Month Average (Total Credits - Total Debits)
     *
     * @return self
     */
    public function setSixMonthAverageTotalCreditsLessTotalDebits($six_month_average_total_credits_less_total_debits)
    {
        if (is_null($six_month_average_total_credits_less_total_debits)) {
            throw new \InvalidArgumentException('non-nullable six_month_average_total_credits_less_total_debits cannot be null');
        }
        $this->container['six_month_average_total_credits_less_total_debits'] = $six_month_average_total_credits_less_total_debits;

        return $this;
    }

    /**
     * Gets six_month_average_total_credits_less_total_debits_less_transfers
     *
     * @return float|null
     */
    public function getSixMonthAverageTotalCreditsLessTotalDebitsLessTransfers()
    {
        return $this->container['six_month_average_total_credits_less_total_debits_less_transfers'];
    }

    /**
     * Sets six_month_average_total_credits_less_total_debits_less_transfers
     *
     * @param float|null $six_month_average_total_credits_less_total_debits_less_transfers 6 Month Average (Total Credits - Total Debits) - (Without Transfers)
     *
     * @return self
     */
    public function setSixMonthAverageTotalCreditsLessTotalDebitsLessTransfers($six_month_average_total_credits_less_total_debits_less_transfers)
    {
        if (is_null($six_month_average_total_credits_less_total_debits_less_transfers)) {
            throw new \InvalidArgumentException('non-nullable six_month_average_total_credits_less_total_debits_less_transfers cannot be null');
        }
        $this->container['six_month_average_total_credits_less_total_debits_less_transfers'] = $six_month_average_total_credits_less_total_debits_less_transfers;

        return $this;
    }

    /**
     * Gets two_month_average_total_credits_less_total_debits
     *
     * @return float|null
     */
    public function getTwoMonthAverageTotalCreditsLessTotalDebits()
    {
        return $this->container['two_month_average_total_credits_less_total_debits'];
    }

    /**
     * Sets two_month_average_total_credits_less_total_debits
     *
     * @param float|null $two_month_average_total_credits_less_total_debits 2 Month Average (Total Credits - Total Debits)
     *
     * @return self
     */
    public function setTwoMonthAverageTotalCreditsLessTotalDebits($two_month_average_total_credits_less_total_debits)
    {
        if (is_null($two_month_average_total_credits_less_total_debits)) {
            throw new \InvalidArgumentException('non-nullable two_month_average_total_credits_less_total_debits cannot be null');
        }
        $this->container['two_month_average_total_credits_less_total_debits'] = $two_month_average_total_credits_less_total_debits;

        return $this;
    }

    /**
     * Gets two_month_average_total_credits_less_total_debits_less_transfers
     *
     * @return float|null
     */
    public function getTwoMonthAverageTotalCreditsLessTotalDebitsLessTransfers()
    {
        return $this->container['two_month_average_total_credits_less_total_debits_less_transfers'];
    }

    /**
     * Sets two_month_average_total_credits_less_total_debits_less_transfers
     *
     * @param float|null $two_month_average_total_credits_less_total_debits_less_transfers 2 Month Average (Total Credits - Total Debits) - (Without Transfers)
     *
     * @return self
     */
    public function setTwoMonthAverageTotalCreditsLessTotalDebitsLessTransfers($two_month_average_total_credits_less_total_debits_less_transfers)
    {
        if (is_null($two_month_average_total_credits_less_total_debits_less_transfers)) {
            throw new \InvalidArgumentException('non-nullable two_month_average_total_credits_less_total_debits_less_transfers cannot be null');
        }
        $this->container['two_month_average_total_credits_less_total_debits_less_transfers'] = $two_month_average_total_credits_less_total_debits_less_transfers;

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


