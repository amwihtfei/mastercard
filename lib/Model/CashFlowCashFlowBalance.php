<?php
/**
 * CashFlowCashFlowBalance
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
 * CashFlowCashFlowBalance Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CashFlowCashFlowBalance implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CashFlowCashFlowBalance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'monthly_cash_flow_balances' => '\OpenAPI\Client\Model\CashFlowMonthlyCashFlowBalances[]',
        'min_daily_balance' => 'float',
        'max_daily_balance' => 'float',
        'twelve_month_average_daily_balance' => 'float',
        'six_month_average_daily_balance' => 'float',
        'two_month_average_daily_balance' => 'float',
        'twelve_month_standard_deviation_of_daily_balance' => 'string',
        'six_month_standard_deviation_of_daily_balance' => 'string',
        'two_month_standard_deviation_of_daily_balance' => 'string',
        'number_days_negative_balance' => 'string',
        'number_of_days_positive_balance' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'monthly_cash_flow_balances' => null,
        'min_daily_balance' => null,
        'max_daily_balance' => null,
        'twelve_month_average_daily_balance' => null,
        'six_month_average_daily_balance' => null,
        'two_month_average_daily_balance' => null,
        'twelve_month_standard_deviation_of_daily_balance' => null,
        'six_month_standard_deviation_of_daily_balance' => null,
        'two_month_standard_deviation_of_daily_balance' => null,
        'number_days_negative_balance' => null,
        'number_of_days_positive_balance' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'monthly_cash_flow_balances' => false,
        'min_daily_balance' => false,
        'max_daily_balance' => false,
        'twelve_month_average_daily_balance' => false,
        'six_month_average_daily_balance' => false,
        'two_month_average_daily_balance' => false,
        'twelve_month_standard_deviation_of_daily_balance' => false,
        'six_month_standard_deviation_of_daily_balance' => false,
        'two_month_standard_deviation_of_daily_balance' => false,
        'number_days_negative_balance' => false,
        'number_of_days_positive_balance' => false
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
        'monthly_cash_flow_balances' => 'monthlyCashFlowBalances',
        'min_daily_balance' => 'minDailyBalance',
        'max_daily_balance' => 'maxDailyBalance',
        'twelve_month_average_daily_balance' => 'twelveMonthAverageDailyBalance',
        'six_month_average_daily_balance' => 'sixMonthAverageDailyBalance',
        'two_month_average_daily_balance' => 'twoMonthAverageDailyBalance',
        'twelve_month_standard_deviation_of_daily_balance' => 'twelveMonthStandardDeviationOfDailyBalance',
        'six_month_standard_deviation_of_daily_balance' => 'sixMonthStandardDeviationOfDailyBalance',
        'two_month_standard_deviation_of_daily_balance' => 'twoMonthStandardDeviationOfDailyBalance',
        'number_days_negative_balance' => 'numberDaysNegativeBalance',
        'number_of_days_positive_balance' => 'numberOfDaysPositiveBalance'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'monthly_cash_flow_balances' => 'setMonthlyCashFlowBalances',
        'min_daily_balance' => 'setMinDailyBalance',
        'max_daily_balance' => 'setMaxDailyBalance',
        'twelve_month_average_daily_balance' => 'setTwelveMonthAverageDailyBalance',
        'six_month_average_daily_balance' => 'setSixMonthAverageDailyBalance',
        'two_month_average_daily_balance' => 'setTwoMonthAverageDailyBalance',
        'twelve_month_standard_deviation_of_daily_balance' => 'setTwelveMonthStandardDeviationOfDailyBalance',
        'six_month_standard_deviation_of_daily_balance' => 'setSixMonthStandardDeviationOfDailyBalance',
        'two_month_standard_deviation_of_daily_balance' => 'setTwoMonthStandardDeviationOfDailyBalance',
        'number_days_negative_balance' => 'setNumberDaysNegativeBalance',
        'number_of_days_positive_balance' => 'setNumberOfDaysPositiveBalance'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'monthly_cash_flow_balances' => 'getMonthlyCashFlowBalances',
        'min_daily_balance' => 'getMinDailyBalance',
        'max_daily_balance' => 'getMaxDailyBalance',
        'twelve_month_average_daily_balance' => 'getTwelveMonthAverageDailyBalance',
        'six_month_average_daily_balance' => 'getSixMonthAverageDailyBalance',
        'two_month_average_daily_balance' => 'getTwoMonthAverageDailyBalance',
        'twelve_month_standard_deviation_of_daily_balance' => 'getTwelveMonthStandardDeviationOfDailyBalance',
        'six_month_standard_deviation_of_daily_balance' => 'getSixMonthStandardDeviationOfDailyBalance',
        'two_month_standard_deviation_of_daily_balance' => 'getTwoMonthStandardDeviationOfDailyBalance',
        'number_days_negative_balance' => 'getNumberDaysNegativeBalance',
        'number_of_days_positive_balance' => 'getNumberOfDaysPositiveBalance'
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
        $this->setIfExists('monthly_cash_flow_balances', $data ?? [], null);
        $this->setIfExists('min_daily_balance', $data ?? [], null);
        $this->setIfExists('max_daily_balance', $data ?? [], null);
        $this->setIfExists('twelve_month_average_daily_balance', $data ?? [], null);
        $this->setIfExists('six_month_average_daily_balance', $data ?? [], null);
        $this->setIfExists('two_month_average_daily_balance', $data ?? [], null);
        $this->setIfExists('twelve_month_standard_deviation_of_daily_balance', $data ?? [], null);
        $this->setIfExists('six_month_standard_deviation_of_daily_balance', $data ?? [], null);
        $this->setIfExists('two_month_standard_deviation_of_daily_balance', $data ?? [], null);
        $this->setIfExists('number_days_negative_balance', $data ?? [], null);
        $this->setIfExists('number_of_days_positive_balance', $data ?? [], null);
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

        if ($this->container['monthly_cash_flow_balances'] === null) {
            $invalidProperties[] = "'monthly_cash_flow_balances' can't be null";
        }
        if ($this->container['min_daily_balance'] === null) {
            $invalidProperties[] = "'min_daily_balance' can't be null";
        }
        if ($this->container['max_daily_balance'] === null) {
            $invalidProperties[] = "'max_daily_balance' can't be null";
        }
        if ($this->container['twelve_month_average_daily_balance'] === null) {
            $invalidProperties[] = "'twelve_month_average_daily_balance' can't be null";
        }
        if ($this->container['six_month_average_daily_balance'] === null) {
            $invalidProperties[] = "'six_month_average_daily_balance' can't be null";
        }
        if ($this->container['two_month_average_daily_balance'] === null) {
            $invalidProperties[] = "'two_month_average_daily_balance' can't be null";
        }
        if ($this->container['twelve_month_standard_deviation_of_daily_balance'] === null) {
            $invalidProperties[] = "'twelve_month_standard_deviation_of_daily_balance' can't be null";
        }
        if ($this->container['two_month_standard_deviation_of_daily_balance'] === null) {
            $invalidProperties[] = "'two_month_standard_deviation_of_daily_balance' can't be null";
        }
        if ($this->container['number_of_days_positive_balance'] === null) {
            $invalidProperties[] = "'number_of_days_positive_balance' can't be null";
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
     * Gets monthly_cash_flow_balances
     *
     * @return \OpenAPI\Client\Model\CashFlowMonthlyCashFlowBalances[]
     */
    public function getMonthlyCashFlowBalances()
    {
        return $this->container['monthly_cash_flow_balances'];
    }

    /**
     * Sets monthly_cash_flow_balances
     *
     * @param \OpenAPI\Client\Model\CashFlowMonthlyCashFlowBalances[] $monthly_cash_flow_balances List of attributes for each month
     *
     * @return self
     */
    public function setMonthlyCashFlowBalances($monthly_cash_flow_balances)
    {
        if (is_null($monthly_cash_flow_balances)) {
            throw new \InvalidArgumentException('non-nullable monthly_cash_flow_balances cannot be null');
        }
        $this->container['monthly_cash_flow_balances'] = $monthly_cash_flow_balances;

        return $this;
    }

    /**
     * Gets min_daily_balance
     *
     * @return float
     */
    public function getMinDailyBalance()
    {
        return $this->container['min_daily_balance'];
    }

    /**
     * Sets min_daily_balance
     *
     * @param float $min_daily_balance Min daily balance across entire transaction history
     *
     * @return self
     */
    public function setMinDailyBalance($min_daily_balance)
    {
        if (is_null($min_daily_balance)) {
            throw new \InvalidArgumentException('non-nullable min_daily_balance cannot be null');
        }
        $this->container['min_daily_balance'] = $min_daily_balance;

        return $this;
    }

    /**
     * Gets max_daily_balance
     *
     * @return float
     */
    public function getMaxDailyBalance()
    {
        return $this->container['max_daily_balance'];
    }

    /**
     * Sets max_daily_balance
     *
     * @param float $max_daily_balance Max Daily Balance across entire transaction history
     *
     * @return self
     */
    public function setMaxDailyBalance($max_daily_balance)
    {
        if (is_null($max_daily_balance)) {
            throw new \InvalidArgumentException('non-nullable max_daily_balance cannot be null');
        }
        $this->container['max_daily_balance'] = $max_daily_balance;

        return $this;
    }

    /**
     * Gets twelve_month_average_daily_balance
     *
     * @return float
     */
    public function getTwelveMonthAverageDailyBalance()
    {
        return $this->container['twelve_month_average_daily_balance'];
    }

    /**
     * Sets twelve_month_average_daily_balance
     *
     * @param float $twelve_month_average_daily_balance Average Daily Balance across twelve months for the account
     *
     * @return self
     */
    public function setTwelveMonthAverageDailyBalance($twelve_month_average_daily_balance)
    {
        if (is_null($twelve_month_average_daily_balance)) {
            throw new \InvalidArgumentException('non-nullable twelve_month_average_daily_balance cannot be null');
        }
        $this->container['twelve_month_average_daily_balance'] = $twelve_month_average_daily_balance;

        return $this;
    }

    /**
     * Gets six_month_average_daily_balance
     *
     * @return float
     */
    public function getSixMonthAverageDailyBalance()
    {
        return $this->container['six_month_average_daily_balance'];
    }

    /**
     * Sets six_month_average_daily_balance
     *
     * @param float $six_month_average_daily_balance Average Daily Balance across six months for the account
     *
     * @return self
     */
    public function setSixMonthAverageDailyBalance($six_month_average_daily_balance)
    {
        if (is_null($six_month_average_daily_balance)) {
            throw new \InvalidArgumentException('non-nullable six_month_average_daily_balance cannot be null');
        }
        $this->container['six_month_average_daily_balance'] = $six_month_average_daily_balance;

        return $this;
    }

    /**
     * Gets two_month_average_daily_balance
     *
     * @return float
     */
    public function getTwoMonthAverageDailyBalance()
    {
        return $this->container['two_month_average_daily_balance'];
    }

    /**
     * Sets two_month_average_daily_balance
     *
     * @param float $two_month_average_daily_balance Average Daily Balance across two months for the account
     *
     * @return self
     */
    public function setTwoMonthAverageDailyBalance($two_month_average_daily_balance)
    {
        if (is_null($two_month_average_daily_balance)) {
            throw new \InvalidArgumentException('non-nullable two_month_average_daily_balance cannot be null');
        }
        $this->container['two_month_average_daily_balance'] = $two_month_average_daily_balance;

        return $this;
    }

    /**
     * Gets twelve_month_standard_deviation_of_daily_balance
     *
     * @return string
     */
    public function getTwelveMonthStandardDeviationOfDailyBalance()
    {
        return $this->container['twelve_month_standard_deviation_of_daily_balance'];
    }

    /**
     * Sets twelve_month_standard_deviation_of_daily_balance
     *
     * @param string $twelve_month_standard_deviation_of_daily_balance Standard Deviation of Daily Balance across twelve months for the account
     *
     * @return self
     */
    public function setTwelveMonthStandardDeviationOfDailyBalance($twelve_month_standard_deviation_of_daily_balance)
    {
        if (is_null($twelve_month_standard_deviation_of_daily_balance)) {
            throw new \InvalidArgumentException('non-nullable twelve_month_standard_deviation_of_daily_balance cannot be null');
        }
        $this->container['twelve_month_standard_deviation_of_daily_balance'] = $twelve_month_standard_deviation_of_daily_balance;

        return $this;
    }

    /**
     * Gets six_month_standard_deviation_of_daily_balance
     *
     * @return string|null
     */
    public function getSixMonthStandardDeviationOfDailyBalance()
    {
        return $this->container['six_month_standard_deviation_of_daily_balance'];
    }

    /**
     * Sets six_month_standard_deviation_of_daily_balance
     *
     * @param string|null $six_month_standard_deviation_of_daily_balance Standard Deviation of Daily Balance across six months for the account
     *
     * @return self
     */
    public function setSixMonthStandardDeviationOfDailyBalance($six_month_standard_deviation_of_daily_balance)
    {
        if (is_null($six_month_standard_deviation_of_daily_balance)) {
            throw new \InvalidArgumentException('non-nullable six_month_standard_deviation_of_daily_balance cannot be null');
        }
        $this->container['six_month_standard_deviation_of_daily_balance'] = $six_month_standard_deviation_of_daily_balance;

        return $this;
    }

    /**
     * Gets two_month_standard_deviation_of_daily_balance
     *
     * @return string
     */
    public function getTwoMonthStandardDeviationOfDailyBalance()
    {
        return $this->container['two_month_standard_deviation_of_daily_balance'];
    }

    /**
     * Sets two_month_standard_deviation_of_daily_balance
     *
     * @param string $two_month_standard_deviation_of_daily_balance Standard Deviation of Daily Balance across two months for the account
     *
     * @return self
     */
    public function setTwoMonthStandardDeviationOfDailyBalance($two_month_standard_deviation_of_daily_balance)
    {
        if (is_null($two_month_standard_deviation_of_daily_balance)) {
            throw new \InvalidArgumentException('non-nullable two_month_standard_deviation_of_daily_balance cannot be null');
        }
        $this->container['two_month_standard_deviation_of_daily_balance'] = $two_month_standard_deviation_of_daily_balance;

        return $this;
    }

    /**
     * Gets number_days_negative_balance
     *
     * @return string|null
     */
    public function getNumberDaysNegativeBalance()
    {
        return $this->container['number_days_negative_balance'];
    }

    /**
     * Sets number_days_negative_balance
     *
     * @param string|null $number_days_negative_balance Number of Days Negative Balance over entire transaction history
     *
     * @return self
     */
    public function setNumberDaysNegativeBalance($number_days_negative_balance)
    {
        if (is_null($number_days_negative_balance)) {
            throw new \InvalidArgumentException('non-nullable number_days_negative_balance cannot be null');
        }
        $this->container['number_days_negative_balance'] = $number_days_negative_balance;

        return $this;
    }

    /**
     * Gets number_of_days_positive_balance
     *
     * @return string
     */
    public function getNumberOfDaysPositiveBalance()
    {
        return $this->container['number_of_days_positive_balance'];
    }

    /**
     * Sets number_of_days_positive_balance
     *
     * @param string $number_of_days_positive_balance Number of Days positive balance over entire transaction history
     *
     * @return self
     */
    public function setNumberOfDaysPositiveBalance($number_of_days_positive_balance)
    {
        if (is_null($number_of_days_positive_balance)) {
            throw new \InvalidArgumentException('non-nullable number_of_days_positive_balance cannot be null');
        }
        $this->container['number_of_days_positive_balance'] = $number_of_days_positive_balance;

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

