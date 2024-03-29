<?php
/**
 * PayrollEmploymentRecord
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
 * PayrollEmploymentRecord Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PayrollEmploymentRecord implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayrollEmploymentRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'employer_name' => 'string',
        'legal_entity_id' => 'string',
        'original_hire_date' => 'int',
        'latest_hire_date' => 'int',
        'latest_pay_period_end_date' => 'int',
        'latest_pay_date' => 'int',
        'days_since_last_pay' => 'int',
        'number_pay_cadence_without_pay' => 'int',
        'employment_end_date' => 'int',
        'employment_duration' => 'string',
        'employer_address' => '\OpenAPI\Client\Model\PayrollEmployerAddress[]',
        'employment_status_code' => 'string',
        'employment_status_name' => 'string',
        'derived_employment_status' => 'bool',
        'work_level_code' => 'string',
        'work_level_name' => 'string',
        'work_level_status' => 'string',
        'position_title' => 'string',
        'position_duration' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'employer_name' => null,
        'legal_entity_id' => null,
        'original_hire_date' => 'int64',
        'latest_hire_date' => 'int64',
        'latest_pay_period_end_date' => 'int64',
        'latest_pay_date' => 'int64',
        'days_since_last_pay' => 'int32',
        'number_pay_cadence_without_pay' => 'int32',
        'employment_end_date' => 'int64',
        'employment_duration' => null,
        'employer_address' => null,
        'employment_status_code' => null,
        'employment_status_name' => null,
        'derived_employment_status' => null,
        'work_level_code' => null,
        'work_level_name' => null,
        'work_level_status' => null,
        'position_title' => null,
        'position_duration' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'employer_name' => false,
        'legal_entity_id' => false,
        'original_hire_date' => false,
        'latest_hire_date' => false,
        'latest_pay_period_end_date' => false,
        'latest_pay_date' => false,
        'days_since_last_pay' => false,
        'number_pay_cadence_without_pay' => false,
        'employment_end_date' => false,
        'employment_duration' => false,
        'employer_address' => false,
        'employment_status_code' => false,
        'employment_status_name' => false,
        'derived_employment_status' => false,
        'work_level_code' => false,
        'work_level_name' => false,
        'work_level_status' => false,
        'position_title' => false,
        'position_duration' => false
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
        'employer_name' => 'employerName',
        'legal_entity_id' => 'legalEntityId',
        'original_hire_date' => 'originalHireDate',
        'latest_hire_date' => 'latestHireDate',
        'latest_pay_period_end_date' => 'latestPayPeriodEndDate',
        'latest_pay_date' => 'latestPayDate',
        'days_since_last_pay' => 'daysSinceLastPay',
        'number_pay_cadence_without_pay' => 'numberPayCadenceWithoutPay',
        'employment_end_date' => 'employmentEndDate',
        'employment_duration' => 'employmentDuration',
        'employer_address' => 'employerAddress',
        'employment_status_code' => 'employmentStatusCode',
        'employment_status_name' => 'employmentStatusName',
        'derived_employment_status' => 'derivedEmploymentStatus',
        'work_level_code' => 'workLevelCode',
        'work_level_name' => 'workLevelName',
        'work_level_status' => 'workLevelStatus',
        'position_title' => 'positionTitle',
        'position_duration' => 'positionDuration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employer_name' => 'setEmployerName',
        'legal_entity_id' => 'setLegalEntityId',
        'original_hire_date' => 'setOriginalHireDate',
        'latest_hire_date' => 'setLatestHireDate',
        'latest_pay_period_end_date' => 'setLatestPayPeriodEndDate',
        'latest_pay_date' => 'setLatestPayDate',
        'days_since_last_pay' => 'setDaysSinceLastPay',
        'number_pay_cadence_without_pay' => 'setNumberPayCadenceWithoutPay',
        'employment_end_date' => 'setEmploymentEndDate',
        'employment_duration' => 'setEmploymentDuration',
        'employer_address' => 'setEmployerAddress',
        'employment_status_code' => 'setEmploymentStatusCode',
        'employment_status_name' => 'setEmploymentStatusName',
        'derived_employment_status' => 'setDerivedEmploymentStatus',
        'work_level_code' => 'setWorkLevelCode',
        'work_level_name' => 'setWorkLevelName',
        'work_level_status' => 'setWorkLevelStatus',
        'position_title' => 'setPositionTitle',
        'position_duration' => 'setPositionDuration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employer_name' => 'getEmployerName',
        'legal_entity_id' => 'getLegalEntityId',
        'original_hire_date' => 'getOriginalHireDate',
        'latest_hire_date' => 'getLatestHireDate',
        'latest_pay_period_end_date' => 'getLatestPayPeriodEndDate',
        'latest_pay_date' => 'getLatestPayDate',
        'days_since_last_pay' => 'getDaysSinceLastPay',
        'number_pay_cadence_without_pay' => 'getNumberPayCadenceWithoutPay',
        'employment_end_date' => 'getEmploymentEndDate',
        'employment_duration' => 'getEmploymentDuration',
        'employer_address' => 'getEmployerAddress',
        'employment_status_code' => 'getEmploymentStatusCode',
        'employment_status_name' => 'getEmploymentStatusName',
        'derived_employment_status' => 'getDerivedEmploymentStatus',
        'work_level_code' => 'getWorkLevelCode',
        'work_level_name' => 'getWorkLevelName',
        'work_level_status' => 'getWorkLevelStatus',
        'position_title' => 'getPositionTitle',
        'position_duration' => 'getPositionDuration'
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
        $this->setIfExists('employer_name', $data ?? [], null);
        $this->setIfExists('legal_entity_id', $data ?? [], null);
        $this->setIfExists('original_hire_date', $data ?? [], null);
        $this->setIfExists('latest_hire_date', $data ?? [], null);
        $this->setIfExists('latest_pay_period_end_date', $data ?? [], null);
        $this->setIfExists('latest_pay_date', $data ?? [], null);
        $this->setIfExists('days_since_last_pay', $data ?? [], null);
        $this->setIfExists('number_pay_cadence_without_pay', $data ?? [], null);
        $this->setIfExists('employment_end_date', $data ?? [], null);
        $this->setIfExists('employment_duration', $data ?? [], null);
        $this->setIfExists('employer_address', $data ?? [], null);
        $this->setIfExists('employment_status_code', $data ?? [], null);
        $this->setIfExists('employment_status_name', $data ?? [], null);
        $this->setIfExists('derived_employment_status', $data ?? [], null);
        $this->setIfExists('work_level_code', $data ?? [], null);
        $this->setIfExists('work_level_name', $data ?? [], null);
        $this->setIfExists('work_level_status', $data ?? [], null);
        $this->setIfExists('position_title', $data ?? [], null);
        $this->setIfExists('position_duration', $data ?? [], null);
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

        if ($this->container['employer_name'] === null) {
            $invalidProperties[] = "'employer_name' can't be null";
        }
        if ($this->container['employment_status_code'] === null) {
            $invalidProperties[] = "'employment_status_code' can't be null";
        }
        if ($this->container['employment_status_name'] === null) {
            $invalidProperties[] = "'employment_status_name' can't be null";
        }
        if ($this->container['work_level_status'] === null) {
            $invalidProperties[] = "'work_level_status' can't be null";
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
     * Gets employer_name
     *
     * @return string
     */
    public function getEmployerName()
    {
        return $this->container['employer_name'];
    }

    /**
     * Sets employer_name
     *
     * @param string $employer_name Name of the employer as stated by the employer in the payroll system
     *
     * @return self
     */
    public function setEmployerName($employer_name)
    {
        if (is_null($employer_name)) {
            throw new \InvalidArgumentException('non-nullable employer_name cannot be null');
        }
        $this->container['employer_name'] = $employer_name;

        return $this;
    }

    /**
     * Gets legal_entity_id
     *
     * @return string|null
     */
    public function getLegalEntityId()
    {
        return $this->container['legal_entity_id'];
    }

    /**
     * Sets legal_entity_id
     *
     * @param string|null $legal_entity_id Employer identification number (EIN)
     *
     * @return self
     */
    public function setLegalEntityId($legal_entity_id)
    {
        if (is_null($legal_entity_id)) {
            throw new \InvalidArgumentException('non-nullable legal_entity_id cannot be null');
        }
        $this->container['legal_entity_id'] = $legal_entity_id;

        return $this;
    }

    /**
     * Gets original_hire_date
     *
     * @return int|null
     */
    public function getOriginalHireDate()
    {
        return $this->container['original_hire_date'];
    }

    /**
     * Sets original_hire_date
     *
     * @param int|null $original_hire_date The original hired date of an employee at the company
     *
     * @return self
     */
    public function setOriginalHireDate($original_hire_date)
    {
        if (is_null($original_hire_date)) {
            throw new \InvalidArgumentException('non-nullable original_hire_date cannot be null');
        }
        $this->container['original_hire_date'] = $original_hire_date;

        return $this;
    }

    /**
     * Gets latest_hire_date
     *
     * @return int|null
     */
    public function getLatestHireDate()
    {
        return $this->container['latest_hire_date'];
    }

    /**
     * Sets latest_hire_date
     *
     * @param int|null $latest_hire_date If an employee leaves the company and returns later, then the employer states the latest hire date at the company
     *
     * @return self
     */
    public function setLatestHireDate($latest_hire_date)
    {
        if (is_null($latest_hire_date)) {
            throw new \InvalidArgumentException('non-nullable latest_hire_date cannot be null');
        }
        $this->container['latest_hire_date'] = $latest_hire_date;

        return $this;
    }

    /**
     * Gets latest_pay_period_end_date
     *
     * @return int|null
     */
    public function getLatestPayPeriodEndDate()
    {
        return $this->container['latest_pay_period_end_date'];
    }

    /**
     * Sets latest_pay_period_end_date
     *
     * @param int|null $latest_pay_period_end_date The most recent pay period’s end date.
     *
     * @return self
     */
    public function setLatestPayPeriodEndDate($latest_pay_period_end_date)
    {
        if (is_null($latest_pay_period_end_date)) {
            throw new \InvalidArgumentException('non-nullable latest_pay_period_end_date cannot be null');
        }
        $this->container['latest_pay_period_end_date'] = $latest_pay_period_end_date;

        return $this;
    }

    /**
     * Gets latest_pay_date
     *
     * @return int|null
     */
    public function getLatestPayDate()
    {
        return $this->container['latest_pay_date'];
    }

    /**
     * Sets latest_pay_date
     *
     * @param int|null $latest_pay_date The most recent pay date from an employer
     *
     * @return self
     */
    public function setLatestPayDate($latest_pay_date)
    {
        if (is_null($latest_pay_date)) {
            throw new \InvalidArgumentException('non-nullable latest_pay_date cannot be null');
        }
        $this->container['latest_pay_date'] = $latest_pay_date;

        return $this;
    }

    /**
     * Gets days_since_last_pay
     *
     * @return int|null
     */
    public function getDaysSinceLastPay()
    {
        return $this->container['days_since_last_pay'];
    }

    /**
     * Sets days_since_last_pay
     *
     * @param int|null $days_since_last_pay The number of days since an employee was last paid
     *
     * @return self
     */
    public function setDaysSinceLastPay($days_since_last_pay)
    {
        if (is_null($days_since_last_pay)) {
            throw new \InvalidArgumentException('non-nullable days_since_last_pay cannot be null');
        }
        $this->container['days_since_last_pay'] = $days_since_last_pay;

        return $this;
    }

    /**
     * Gets number_pay_cadence_without_pay
     *
     * @return int|null
     */
    public function getNumberPayCadenceWithoutPay()
    {
        return $this->container['number_pay_cadence_without_pay'];
    }

    /**
     * Sets number_pay_cadence_without_pay
     *
     * @param int|null $number_pay_cadence_without_pay The number of pay cadences an employee has not been paid; determined by the pay frequency
     *
     * @return self
     */
    public function setNumberPayCadenceWithoutPay($number_pay_cadence_without_pay)
    {
        if (is_null($number_pay_cadence_without_pay)) {
            throw new \InvalidArgumentException('non-nullable number_pay_cadence_without_pay cannot be null');
        }
        $this->container['number_pay_cadence_without_pay'] = $number_pay_cadence_without_pay;

        return $this;
    }

    /**
     * Gets employment_end_date
     *
     * @return int|null
     */
    public function getEmploymentEndDate()
    {
        return $this->container['employment_end_date'];
    }

    /**
     * Sets employment_end_date
     *
     * @param int|null $employment_end_date The date an employee ended their employment at the company
     *
     * @return self
     */
    public function setEmploymentEndDate($employment_end_date)
    {
        if (is_null($employment_end_date)) {
            throw new \InvalidArgumentException('non-nullable employment_end_date cannot be null');
        }
        $this->container['employment_end_date'] = $employment_end_date;

        return $this;
    }

    /**
     * Gets employment_duration
     *
     * @return string|null
     */
    public function getEmploymentDuration()
    {
        return $this->container['employment_duration'];
    }

    /**
     * Sets employment_duration
     *
     * @param string|null $employment_duration The length of time an employee has been employed with that employer in ISO 8601 format (e.g. P1Y6M0D)
     *
     * @return self
     */
    public function setEmploymentDuration($employment_duration)
    {
        if (is_null($employment_duration)) {
            throw new \InvalidArgumentException('non-nullable employment_duration cannot be null');
        }
        $this->container['employment_duration'] = $employment_duration;

        return $this;
    }

    /**
     * Gets employer_address
     *
     * @return \OpenAPI\Client\Model\PayrollEmployerAddress[]|null
     */
    public function getEmployerAddress()
    {
        return $this->container['employer_address'];
    }

    /**
     * Sets employer_address
     *
     * @param \OpenAPI\Client\Model\PayrollEmployerAddress[]|null $employer_address Array of addresses
     *
     * @return self
     */
    public function setEmployerAddress($employer_address)
    {
        if (is_null($employer_address)) {
            throw new \InvalidArgumentException('non-nullable employer_address cannot be null');
        }
        $this->container['employer_address'] = $employer_address;

        return $this;
    }

    /**
     * Gets employment_status_code
     *
     * @return string
     */
    public function getEmploymentStatusCode()
    {
        return $this->container['employment_status_code'];
    }

    /**
     * Sets employment_status_code
     *
     * @param string $employment_status_code 'Status codes: `A` - Active, `NLE` - No Longer Employed, `L` - Leave, `O` - Other', `I` - Inactive, `U` - Unknown'
     *
     * @return self
     */
    public function setEmploymentStatusCode($employment_status_code)
    {
        if (is_null($employment_status_code)) {
            throw new \InvalidArgumentException('non-nullable employment_status_code cannot be null');
        }
        $this->container['employment_status_code'] = $employment_status_code;

        return $this;
    }

    /**
     * Gets employment_status_name
     *
     * @return string
     */
    public function getEmploymentStatusName()
    {
        return $this->container['employment_status_name'];
    }

    /**
     * Sets employment_status_name
     *
     * @param string $employment_status_name 'Status name: `Active`, `No Longer Employed`, `Leave` or `Other`, `Inactive`, or `Unknown`'
     *
     * @return self
     */
    public function setEmploymentStatusName($employment_status_name)
    {
        if (is_null($employment_status_name)) {
            throw new \InvalidArgumentException('non-nullable employment_status_name cannot be null');
        }
        $this->container['employment_status_name'] = $employment_status_name;

        return $this;
    }

    /**
     * Gets derived_employment_status
     *
     * @return bool|null
     */
    public function getDerivedEmploymentStatus()
    {
        return $this->container['derived_employment_status'];
    }

    /**
     * Sets derived_employment_status
     *
     * @param bool|null $derived_employment_status Describes the employment status - it will be true if it is not directly stated by the employer, and false otherwise
     *
     * @return self
     */
    public function setDerivedEmploymentStatus($derived_employment_status)
    {
        if (is_null($derived_employment_status)) {
            throw new \InvalidArgumentException('non-nullable derived_employment_status cannot be null');
        }
        $this->container['derived_employment_status'] = $derived_employment_status;

        return $this;
    }

    /**
     * Gets work_level_code
     *
     * @return string|null
     */
    public function getWorkLevelCode()
    {
        return $this->container['work_level_code'];
    }

    /**
     * Sets work_level_code
     *
     * @param string|null $work_level_code The abbreviate code for the employment level names (workLevelName) that we receive from the employer
     *
     * @return self
     */
    public function setWorkLevelCode($work_level_code)
    {
        if (is_null($work_level_code)) {
            throw new \InvalidArgumentException('non-nullable work_level_code cannot be null');
        }
        $this->container['work_level_code'] = $work_level_code;

        return $this;
    }

    /**
     * Gets work_level_name
     *
     * @return string|null
     */
    public function getWorkLevelName()
    {
        return $this->container['work_level_name'];
    }

    /**
     * Sets work_level_name
     *
     * @param string|null $work_level_name The employment level name is whatever we receive from the employer, such as full time, part time, temp, contractor, and more
     *
     * @return self
     */
    public function setWorkLevelName($work_level_name)
    {
        if (is_null($work_level_name)) {
            throw new \InvalidArgumentException('non-nullable work_level_name cannot be null');
        }
        $this->container['work_level_name'] = $work_level_name;

        return $this;
    }

    /**
     * Gets work_level_status
     *
     * @return string
     */
    public function getWorkLevelStatus()
    {
        return $this->container['work_level_status'];
    }

    /**
     * Sets work_level_status
     *
     * @param string $work_level_status The categorized work level status. Enumerations are:  * `Temporary`  * `Seasonal`  * `Retired`  * `Student`  * `Full Time`  * `Part Time`  * `Unspecified`  This is a new field, currently enabled only for testing reports. It will be added for all reports in August 2021.
     *
     * @return self
     */
    public function setWorkLevelStatus($work_level_status)
    {
        if (is_null($work_level_status)) {
            throw new \InvalidArgumentException('non-nullable work_level_status cannot be null');
        }
        $this->container['work_level_status'] = $work_level_status;

        return $this;
    }

    /**
     * Gets position_title
     *
     * @return string|null
     */
    public function getPositionTitle()
    {
        return $this->container['position_title'];
    }

    /**
     * Sets position_title
     *
     * @param string|null $position_title Employee job title
     *
     * @return self
     */
    public function setPositionTitle($position_title)
    {
        if (is_null($position_title)) {
            throw new \InvalidArgumentException('non-nullable position_title cannot be null');
        }
        $this->container['position_title'] = $position_title;

        return $this;
    }

    /**
     * Gets position_duration
     *
     * @return string|null
     */
    public function getPositionDuration()
    {
        return $this->container['position_duration'];
    }

    /**
     * Sets position_duration
     *
     * @param string|null $position_duration The length of time an employee has been employed at their current or latest position for this employment in ISO 8601 format (eg P1Y6M0D)
     *
     * @return self
     */
    public function setPositionDuration($position_duration)
    {
        if (is_null($position_duration)) {
            throw new \InvalidArgumentException('non-nullable position_duration cannot be null');
        }
        $this->container['position_duration'] = $position_duration;

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


