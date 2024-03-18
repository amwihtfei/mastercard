<?php
/**
 * LoanPaymentDetailsLoan
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
 * LoanPaymentDetailsLoan Class Doc Comment
 *
 * @category Class
 * @description Loan details
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LoanPaymentDetailsLoan implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LoanPaymentDetailsLoan';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'string',
        'loan_number' => 'string',
        'loan_payment_number' => 'string',
        'loan_payment_address' => 'string',
        'loan_future_payoff_amount' => 'float',
        'loan_future_payoff_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_id' => null,
        'loan_number' => null,
        'loan_payment_number' => null,
        'loan_payment_address' => null,
        'loan_future_payoff_amount' => null,
        'loan_future_payoff_date' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account_id' => false,
        'loan_number' => false,
        'loan_payment_number' => false,
        'loan_payment_address' => false,
        'loan_future_payoff_amount' => false,
        'loan_future_payoff_date' => false
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
        'account_id' => 'accountId',
        'loan_number' => 'loanNumber',
        'loan_payment_number' => 'loanPaymentNumber',
        'loan_payment_address' => 'loanPaymentAddress',
        'loan_future_payoff_amount' => 'loanFuturePayoffAmount',
        'loan_future_payoff_date' => 'loanFuturePayoffDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'loan_number' => 'setLoanNumber',
        'loan_payment_number' => 'setLoanPaymentNumber',
        'loan_payment_address' => 'setLoanPaymentAddress',
        'loan_future_payoff_amount' => 'setLoanFuturePayoffAmount',
        'loan_future_payoff_date' => 'setLoanFuturePayoffDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'loan_number' => 'getLoanNumber',
        'loan_payment_number' => 'getLoanPaymentNumber',
        'loan_payment_address' => 'getLoanPaymentAddress',
        'loan_future_payoff_amount' => 'getLoanFuturePayoffAmount',
        'loan_future_payoff_date' => 'getLoanFuturePayoffDate'
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
        $this->setIfExists('account_id', $data ?? [], null);
        $this->setIfExists('loan_number', $data ?? [], null);
        $this->setIfExists('loan_payment_number', $data ?? [], null);
        $this->setIfExists('loan_payment_address', $data ?? [], null);
        $this->setIfExists('loan_future_payoff_amount', $data ?? [], null);
        $this->setIfExists('loan_future_payoff_date', $data ?? [], null);
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

        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if ($this->container['loan_number'] === null) {
            $invalidProperties[] = "'loan_number' can't be null";
        }
        if ($this->container['loan_payment_number'] === null) {
            $invalidProperties[] = "'loan_payment_number' can't be null";
        }
        if ($this->container['loan_payment_address'] === null) {
            $invalidProperties[] = "'loan_payment_address' can't be null";
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
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id An account ID
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        if (is_null($account_id)) {
            throw new \InvalidArgumentException('non-nullable account_id cannot be null');
        }
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets loan_number
     *
     * @return string
     */
    public function getLoanNumber()
    {
        return $this->container['loan_number'];
    }

    /**
     * Sets loan_number
     *
     * @param string $loan_number Institution's ID of the Student Loan
     *
     * @return self
     */
    public function setLoanNumber($loan_number)
    {
        if (is_null($loan_number)) {
            throw new \InvalidArgumentException('non-nullable loan_number cannot be null');
        }
        $this->container['loan_number'] = $loan_number;

        return $this;
    }

    /**
     * Gets loan_payment_number
     *
     * @return string
     */
    public function getLoanPaymentNumber()
    {
        return $this->container['loan_payment_number'];
    }

    /**
     * Sets loan_payment_number
     *
     * @param string $loan_payment_number The payment number given by the institution. This number is typically for manual payments. This is not an ACH payment number.
     *
     * @return self
     */
    public function setLoanPaymentNumber($loan_payment_number)
    {
        if (is_null($loan_payment_number)) {
            throw new \InvalidArgumentException('non-nullable loan_payment_number cannot be null');
        }
        $this->container['loan_payment_number'] = $loan_payment_number;

        return $this;
    }

    /**
     * Gets loan_payment_address
     *
     * @return string
     */
    public function getLoanPaymentAddress()
    {
        return $this->container['loan_payment_address'];
    }

    /**
     * Sets loan_payment_address
     *
     * @param string $loan_payment_address The payment address to which send manual payments should be sent
     *
     * @return self
     */
    public function setLoanPaymentAddress($loan_payment_address)
    {
        if (is_null($loan_payment_address)) {
            throw new \InvalidArgumentException('non-nullable loan_payment_address cannot be null');
        }
        $this->container['loan_payment_address'] = $loan_payment_address;

        return $this;
    }

    /**
     * Gets loan_future_payoff_amount
     *
     * @return float|null
     */
    public function getLoanFuturePayoffAmount()
    {
        return $this->container['loan_future_payoff_amount'];
    }

    /**
     * Sets loan_future_payoff_amount
     *
     * @param float|null $loan_future_payoff_amount The payoff amount for the loan
     *
     * @return self
     */
    public function setLoanFuturePayoffAmount($loan_future_payoff_amount)
    {
        if (is_null($loan_future_payoff_amount)) {
            throw new \InvalidArgumentException('non-nullable loan_future_payoff_amount cannot be null');
        }
        $this->container['loan_future_payoff_amount'] = $loan_future_payoff_amount;

        return $this;
    }

    /**
     * Gets loan_future_payoff_date
     *
     * @return \DateTime|null
     */
    public function getLoanFuturePayoffDate()
    {
        return $this->container['loan_future_payoff_date'];
    }

    /**
     * Sets loan_future_payoff_date
     *
     * @param \DateTime|null $loan_future_payoff_date The date to which the \"Future Payoff Amount\" applies
     *
     * @return self
     */
    public function setLoanFuturePayoffDate($loan_future_payoff_date)
    {
        if (is_null($loan_future_payoff_date)) {
            throw new \InvalidArgumentException('non-nullable loan_future_payoff_date cannot be null');
        }
        $this->container['loan_future_payoff_date'] = $loan_future_payoff_date;

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


