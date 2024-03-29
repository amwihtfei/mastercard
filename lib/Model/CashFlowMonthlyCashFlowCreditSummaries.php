<?php
/**
 * CashFlowMonthlyCashFlowCreditSummaries
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
 * CashFlowMonthlyCashFlowCreditSummaries Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CashFlowMonthlyCashFlowCreditSummaries implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CashFlowMonthlyCashFlowCreditSummaries';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'month' => 'int',
        'number_of_credits' => 'string',
        'total_credits_amount' => 'float',
        'largest_credit' => 'float',
        'number_of_credits_less_transfers' => 'string',
        'total_credits_amount_less_transfers' => 'float',
        'average_credit_amount' => 'float',
        'estimated_number_of_loan_deposits' => 'string',
        'estimated_loan_deposit_amount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'month' => 'int64',
        'number_of_credits' => null,
        'total_credits_amount' => null,
        'largest_credit' => null,
        'number_of_credits_less_transfers' => null,
        'total_credits_amount_less_transfers' => null,
        'average_credit_amount' => null,
        'estimated_number_of_loan_deposits' => null,
        'estimated_loan_deposit_amount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'month' => false,
        'number_of_credits' => false,
        'total_credits_amount' => false,
        'largest_credit' => false,
        'number_of_credits_less_transfers' => false,
        'total_credits_amount_less_transfers' => false,
        'average_credit_amount' => false,
        'estimated_number_of_loan_deposits' => false,
        'estimated_loan_deposit_amount' => false
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
        'month' => 'month',
        'number_of_credits' => 'numberOfCredits',
        'total_credits_amount' => 'totalCreditsAmount',
        'largest_credit' => 'largestCredit',
        'number_of_credits_less_transfers' => 'numberOfCreditsLessTransfers',
        'total_credits_amount_less_transfers' => 'totalCreditsAmountLessTransfers',
        'average_credit_amount' => 'averageCreditAmount',
        'estimated_number_of_loan_deposits' => 'estimatedNumberOfLoanDeposits',
        'estimated_loan_deposit_amount' => 'estimatedLoanDepositAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'month' => 'setMonth',
        'number_of_credits' => 'setNumberOfCredits',
        'total_credits_amount' => 'setTotalCreditsAmount',
        'largest_credit' => 'setLargestCredit',
        'number_of_credits_less_transfers' => 'setNumberOfCreditsLessTransfers',
        'total_credits_amount_less_transfers' => 'setTotalCreditsAmountLessTransfers',
        'average_credit_amount' => 'setAverageCreditAmount',
        'estimated_number_of_loan_deposits' => 'setEstimatedNumberOfLoanDeposits',
        'estimated_loan_deposit_amount' => 'setEstimatedLoanDepositAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'month' => 'getMonth',
        'number_of_credits' => 'getNumberOfCredits',
        'total_credits_amount' => 'getTotalCreditsAmount',
        'largest_credit' => 'getLargestCredit',
        'number_of_credits_less_transfers' => 'getNumberOfCreditsLessTransfers',
        'total_credits_amount_less_transfers' => 'getTotalCreditsAmountLessTransfers',
        'average_credit_amount' => 'getAverageCreditAmount',
        'estimated_number_of_loan_deposits' => 'getEstimatedNumberOfLoanDeposits',
        'estimated_loan_deposit_amount' => 'getEstimatedLoanDepositAmount'
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
        $this->setIfExists('month', $data ?? [], null);
        $this->setIfExists('number_of_credits', $data ?? [], null);
        $this->setIfExists('total_credits_amount', $data ?? [], null);
        $this->setIfExists('largest_credit', $data ?? [], null);
        $this->setIfExists('number_of_credits_less_transfers', $data ?? [], null);
        $this->setIfExists('total_credits_amount_less_transfers', $data ?? [], null);
        $this->setIfExists('average_credit_amount', $data ?? [], null);
        $this->setIfExists('estimated_number_of_loan_deposits', $data ?? [], null);
        $this->setIfExists('estimated_loan_deposit_amount', $data ?? [], null);
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

        if ($this->container['month'] === null) {
            $invalidProperties[] = "'month' can't be null";
        }
        if ($this->container['number_of_credits'] === null) {
            $invalidProperties[] = "'number_of_credits' can't be null";
        }
        if ($this->container['total_credits_amount'] === null) {
            $invalidProperties[] = "'total_credits_amount' can't be null";
        }
        if ($this->container['largest_credit'] === null) {
            $invalidProperties[] = "'largest_credit' can't be null";
        }
        if ($this->container['number_of_credits_less_transfers'] === null) {
            $invalidProperties[] = "'number_of_credits_less_transfers' can't be null";
        }
        if ($this->container['total_credits_amount_less_transfers'] === null) {
            $invalidProperties[] = "'total_credits_amount_less_transfers' can't be null";
        }
        if ($this->container['average_credit_amount'] === null) {
            $invalidProperties[] = "'average_credit_amount' can't be null";
        }
        if ($this->container['estimated_number_of_loan_deposits'] === null) {
            $invalidProperties[] = "'estimated_number_of_loan_deposits' can't be null";
        }
        if ($this->container['estimated_loan_deposit_amount'] === null) {
            $invalidProperties[] = "'estimated_loan_deposit_amount' can't be null";
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
     * Gets month
     *
     * @return int
     */
    public function getMonth()
    {
        return $this->container['month'];
    }

    /**
     * Sets month
     *
     * @param int $month One instance for each complete calendar month in the report
     *
     * @return self
     */
    public function setMonth($month)
    {
        if (is_null($month)) {
            throw new \InvalidArgumentException('non-nullable month cannot be null');
        }
        $this->container['month'] = $month;

        return $this;
    }

    /**
     * Gets number_of_credits
     *
     * @return string
     */
    public function getNumberOfCredits()
    {
        return $this->container['number_of_credits'];
    }

    /**
     * Sets number_of_credits
     *
     * @param string $number_of_credits Number of credits by month across all accounts
     *
     * @return self
     */
    public function setNumberOfCredits($number_of_credits)
    {
        if (is_null($number_of_credits)) {
            throw new \InvalidArgumentException('non-nullable number_of_credits cannot be null');
        }
        $this->container['number_of_credits'] = $number_of_credits;

        return $this;
    }

    /**
     * Gets total_credits_amount
     *
     * @return float
     */
    public function getTotalCreditsAmount()
    {
        return $this->container['total_credits_amount'];
    }

    /**
     * Sets total_credits_amount
     *
     * @param float $total_credits_amount Total amount of credits by month across all accounts
     *
     * @return self
     */
    public function setTotalCreditsAmount($total_credits_amount)
    {
        if (is_null($total_credits_amount)) {
            throw new \InvalidArgumentException('non-nullable total_credits_amount cannot be null');
        }
        $this->container['total_credits_amount'] = $total_credits_amount;

        return $this;
    }

    /**
     * Gets largest_credit
     *
     * @return float
     */
    public function getLargestCredit()
    {
        return $this->container['largest_credit'];
    }

    /**
     * Sets largest_credit
     *
     * @param float $largest_credit Largest credit by month across all accounts
     *
     * @return self
     */
    public function setLargestCredit($largest_credit)
    {
        if (is_null($largest_credit)) {
            throw new \InvalidArgumentException('non-nullable largest_credit cannot be null');
        }
        $this->container['largest_credit'] = $largest_credit;

        return $this;
    }

    /**
     * Gets number_of_credits_less_transfers
     *
     * @return string
     */
    public function getNumberOfCreditsLessTransfers()
    {
        return $this->container['number_of_credits_less_transfers'];
    }

    /**
     * Sets number_of_credits_less_transfers
     *
     * @param string $number_of_credits_less_transfers Number of credits by month (less transfers) across all accounts
     *
     * @return self
     */
    public function setNumberOfCreditsLessTransfers($number_of_credits_less_transfers)
    {
        if (is_null($number_of_credits_less_transfers)) {
            throw new \InvalidArgumentException('non-nullable number_of_credits_less_transfers cannot be null');
        }
        $this->container['number_of_credits_less_transfers'] = $number_of_credits_less_transfers;

        return $this;
    }

    /**
     * Gets total_credits_amount_less_transfers
     *
     * @return float
     */
    public function getTotalCreditsAmountLessTransfers()
    {
        return $this->container['total_credits_amount_less_transfers'];
    }

    /**
     * Sets total_credits_amount_less_transfers
     *
     * @param float $total_credits_amount_less_transfers Total amount of credits by month (less transfers) across all accounts
     *
     * @return self
     */
    public function setTotalCreditsAmountLessTransfers($total_credits_amount_less_transfers)
    {
        if (is_null($total_credits_amount_less_transfers)) {
            throw new \InvalidArgumentException('non-nullable total_credits_amount_less_transfers cannot be null');
        }
        $this->container['total_credits_amount_less_transfers'] = $total_credits_amount_less_transfers;

        return $this;
    }

    /**
     * Gets average_credit_amount
     *
     * @return float
     */
    public function getAverageCreditAmount()
    {
        return $this->container['average_credit_amount'];
    }

    /**
     * Sets average_credit_amount
     *
     * @param float $average_credit_amount The average credit amount
     *
     * @return self
     */
    public function setAverageCreditAmount($average_credit_amount)
    {
        if (is_null($average_credit_amount)) {
            throw new \InvalidArgumentException('non-nullable average_credit_amount cannot be null');
        }
        $this->container['average_credit_amount'] = $average_credit_amount;

        return $this;
    }

    /**
     * Gets estimated_number_of_loan_deposits
     *
     * @return string
     */
    public function getEstimatedNumberOfLoanDeposits()
    {
        return $this->container['estimated_number_of_loan_deposits'];
    }

    /**
     * Sets estimated_number_of_loan_deposits
     *
     * @param string $estimated_number_of_loan_deposits The estimated number of loan deposits by month
     *
     * @return self
     */
    public function setEstimatedNumberOfLoanDeposits($estimated_number_of_loan_deposits)
    {
        if (is_null($estimated_number_of_loan_deposits)) {
            throw new \InvalidArgumentException('non-nullable estimated_number_of_loan_deposits cannot be null');
        }
        $this->container['estimated_number_of_loan_deposits'] = $estimated_number_of_loan_deposits;

        return $this;
    }

    /**
     * Gets estimated_loan_deposit_amount
     *
     * @return float
     */
    public function getEstimatedLoanDepositAmount()
    {
        return $this->container['estimated_loan_deposit_amount'];
    }

    /**
     * Sets estimated_loan_deposit_amount
     *
     * @param float $estimated_loan_deposit_amount The estimated loan deposit amount by month
     *
     * @return self
     */
    public function setEstimatedLoanDepositAmount($estimated_loan_deposit_amount)
    {
        if (is_null($estimated_loan_deposit_amount)) {
            throw new \InvalidArgumentException('non-nullable estimated_loan_deposit_amount cannot be null');
        }
        $this->container['estimated_loan_deposit_amount'] = $estimated_loan_deposit_amount;

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


