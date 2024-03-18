<?php
/**
 * AccountOwnerIdentityInsights
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
 * AccountOwnerIdentityInsights Class Doc Comment
 *
 * @category Class
 * @description List of account owner Identity Insights
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AccountOwnerIdentityInsights implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountOwnerIdentityInsights';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_email_valid' => 'bool',
        'email_first_seen_days' => 'float',
        'email_domain_creation_date' => 'string',
        'email_to_name' => 'string',
        'ip_risk' => 'float',
        'ip_risk_score' => 'float',
        'ip_last_seen_days' => 'float',
        'ip_geolocation_country_code' => 'string',
        'ip_geolocation_subdivision' => 'string',
        'ip_phone_distance' => 'float',
        'ip_address_distance' => 'float',
        'is_phone_valid' => 'bool',
        'phone_line_type' => 'string',
        'phone_carrier' => 'string',
        'phone_country_code' => 'string',
        'phone_last_seen_days' => 'float',
        'phone_email_first_seen_days' => 'float',
        'phone_to_name' => 'string',
        'phone_to_address' => 'string',
        'address_validity_level' => 'float',
        'address_to_name' => 'string',
        'identity_network_score' => 'float',
        'identity_risk_score' => 'float',
        'warnings' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'is_email_valid' => null,
        'email_first_seen_days' => null,
        'email_domain_creation_date' => null,
        'email_to_name' => null,
        'ip_risk' => null,
        'ip_risk_score' => null,
        'ip_last_seen_days' => null,
        'ip_geolocation_country_code' => null,
        'ip_geolocation_subdivision' => null,
        'ip_phone_distance' => null,
        'ip_address_distance' => null,
        'is_phone_valid' => null,
        'phone_line_type' => null,
        'phone_carrier' => null,
        'phone_country_code' => null,
        'phone_last_seen_days' => null,
        'phone_email_first_seen_days' => null,
        'phone_to_name' => null,
        'phone_to_address' => null,
        'address_validity_level' => null,
        'address_to_name' => null,
        'identity_network_score' => null,
        'identity_risk_score' => null,
        'warnings' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'is_email_valid' => false,
        'email_first_seen_days' => false,
        'email_domain_creation_date' => false,
        'email_to_name' => false,
        'ip_risk' => false,
        'ip_risk_score' => false,
        'ip_last_seen_days' => false,
        'ip_geolocation_country_code' => false,
        'ip_geolocation_subdivision' => false,
        'ip_phone_distance' => false,
        'ip_address_distance' => false,
        'is_phone_valid' => false,
        'phone_line_type' => false,
        'phone_carrier' => false,
        'phone_country_code' => false,
        'phone_last_seen_days' => false,
        'phone_email_first_seen_days' => false,
        'phone_to_name' => false,
        'phone_to_address' => false,
        'address_validity_level' => false,
        'address_to_name' => false,
        'identity_network_score' => false,
        'identity_risk_score' => false,
        'warnings' => false
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
        'is_email_valid' => 'isEmailValid',
        'email_first_seen_days' => 'emailFirstSeenDays',
        'email_domain_creation_date' => 'emailDomainCreationDate',
        'email_to_name' => 'emailToName',
        'ip_risk' => 'ipRisk',
        'ip_risk_score' => 'ipRiskScore',
        'ip_last_seen_days' => 'ipLastSeenDays',
        'ip_geolocation_country_code' => 'ipGeolocationCountryCode',
        'ip_geolocation_subdivision' => 'ipGeolocationSubdivision',
        'ip_phone_distance' => 'ipPhoneDistance',
        'ip_address_distance' => 'ipAddressDistance',
        'is_phone_valid' => 'isPhoneValid',
        'phone_line_type' => 'phoneLineType',
        'phone_carrier' => 'phoneCarrier',
        'phone_country_code' => 'phoneCountryCode',
        'phone_last_seen_days' => 'phoneLastSeenDays',
        'phone_email_first_seen_days' => 'phoneEmailFirstSeenDays',
        'phone_to_name' => 'phoneToName',
        'phone_to_address' => 'phoneToAddress',
        'address_validity_level' => 'addressValidityLevel',
        'address_to_name' => 'addressToName',
        'identity_network_score' => 'identityNetworkScore',
        'identity_risk_score' => 'identityRiskScore',
        'warnings' => 'warnings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_email_valid' => 'setIsEmailValid',
        'email_first_seen_days' => 'setEmailFirstSeenDays',
        'email_domain_creation_date' => 'setEmailDomainCreationDate',
        'email_to_name' => 'setEmailToName',
        'ip_risk' => 'setIpRisk',
        'ip_risk_score' => 'setIpRiskScore',
        'ip_last_seen_days' => 'setIpLastSeenDays',
        'ip_geolocation_country_code' => 'setIpGeolocationCountryCode',
        'ip_geolocation_subdivision' => 'setIpGeolocationSubdivision',
        'ip_phone_distance' => 'setIpPhoneDistance',
        'ip_address_distance' => 'setIpAddressDistance',
        'is_phone_valid' => 'setIsPhoneValid',
        'phone_line_type' => 'setPhoneLineType',
        'phone_carrier' => 'setPhoneCarrier',
        'phone_country_code' => 'setPhoneCountryCode',
        'phone_last_seen_days' => 'setPhoneLastSeenDays',
        'phone_email_first_seen_days' => 'setPhoneEmailFirstSeenDays',
        'phone_to_name' => 'setPhoneToName',
        'phone_to_address' => 'setPhoneToAddress',
        'address_validity_level' => 'setAddressValidityLevel',
        'address_to_name' => 'setAddressToName',
        'identity_network_score' => 'setIdentityNetworkScore',
        'identity_risk_score' => 'setIdentityRiskScore',
        'warnings' => 'setWarnings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_email_valid' => 'getIsEmailValid',
        'email_first_seen_days' => 'getEmailFirstSeenDays',
        'email_domain_creation_date' => 'getEmailDomainCreationDate',
        'email_to_name' => 'getEmailToName',
        'ip_risk' => 'getIpRisk',
        'ip_risk_score' => 'getIpRiskScore',
        'ip_last_seen_days' => 'getIpLastSeenDays',
        'ip_geolocation_country_code' => 'getIpGeolocationCountryCode',
        'ip_geolocation_subdivision' => 'getIpGeolocationSubdivision',
        'ip_phone_distance' => 'getIpPhoneDistance',
        'ip_address_distance' => 'getIpAddressDistance',
        'is_phone_valid' => 'getIsPhoneValid',
        'phone_line_type' => 'getPhoneLineType',
        'phone_carrier' => 'getPhoneCarrier',
        'phone_country_code' => 'getPhoneCountryCode',
        'phone_last_seen_days' => 'getPhoneLastSeenDays',
        'phone_email_first_seen_days' => 'getPhoneEmailFirstSeenDays',
        'phone_to_name' => 'getPhoneToName',
        'phone_to_address' => 'getPhoneToAddress',
        'address_validity_level' => 'getAddressValidityLevel',
        'address_to_name' => 'getAddressToName',
        'identity_network_score' => 'getIdentityNetworkScore',
        'identity_risk_score' => 'getIdentityRiskScore',
        'warnings' => 'getWarnings'
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
        $this->setIfExists('is_email_valid', $data ?? [], null);
        $this->setIfExists('email_first_seen_days', $data ?? [], null);
        $this->setIfExists('email_domain_creation_date', $data ?? [], null);
        $this->setIfExists('email_to_name', $data ?? [], null);
        $this->setIfExists('ip_risk', $data ?? [], null);
        $this->setIfExists('ip_risk_score', $data ?? [], null);
        $this->setIfExists('ip_last_seen_days', $data ?? [], null);
        $this->setIfExists('ip_geolocation_country_code', $data ?? [], null);
        $this->setIfExists('ip_geolocation_subdivision', $data ?? [], null);
        $this->setIfExists('ip_phone_distance', $data ?? [], null);
        $this->setIfExists('ip_address_distance', $data ?? [], null);
        $this->setIfExists('is_phone_valid', $data ?? [], null);
        $this->setIfExists('phone_line_type', $data ?? [], null);
        $this->setIfExists('phone_carrier', $data ?? [], null);
        $this->setIfExists('phone_country_code', $data ?? [], null);
        $this->setIfExists('phone_last_seen_days', $data ?? [], null);
        $this->setIfExists('phone_email_first_seen_days', $data ?? [], null);
        $this->setIfExists('phone_to_name', $data ?? [], null);
        $this->setIfExists('phone_to_address', $data ?? [], null);
        $this->setIfExists('address_validity_level', $data ?? [], null);
        $this->setIfExists('address_to_name', $data ?? [], null);
        $this->setIfExists('identity_network_score', $data ?? [], null);
        $this->setIfExists('identity_risk_score', $data ?? [], null);
        $this->setIfExists('warnings', $data ?? [], null);
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
     * Gets is_email_valid
     *
     * @return bool|null
     */
    public function getIsEmailValid()
    {
        return $this->container['is_email_valid'];
    }

    /**
     * Sets is_email_valid
     *
     * @param bool|null $is_email_valid True if the email address is valid.
     *
     * @return self
     */
    public function setIsEmailValid($is_email_valid)
    {
        if (is_null($is_email_valid)) {
            throw new \InvalidArgumentException('non-nullable is_email_valid cannot be null');
        }
        $this->container['is_email_valid'] = $is_email_valid;

        return $this;
    }

    /**
     * Gets email_first_seen_days
     *
     * @return float|null
     */
    public function getEmailFirstSeenDays()
    {
        return $this->container['email_first_seen_days'];
    }

    /**
     * Sets email_first_seen_days
     *
     * @param float|null $email_first_seen_days Count of days since the email was first observed in Ekata's Identity Network. If the email has not been observed before, first_seen_days will be 0.
     *
     * @return self
     */
    public function setEmailFirstSeenDays($email_first_seen_days)
    {
        if (is_null($email_first_seen_days)) {
            throw new \InvalidArgumentException('non-nullable email_first_seen_days cannot be null');
        }
        $this->container['email_first_seen_days'] = $email_first_seen_days;

        return $this;
    }

    /**
     * Gets email_domain_creation_date
     *
     * @return string|null
     */
    public function getEmailDomainCreationDate()
    {
        return $this->container['email_domain_creation_date'];
    }

    /**
     * Sets email_domain_creation_date
     *
     * @param string|null $email_domain_creation_date Returns a date that the email domain was created.
     *
     * @return self
     */
    public function setEmailDomainCreationDate($email_domain_creation_date)
    {
        if (is_null($email_domain_creation_date)) {
            throw new \InvalidArgumentException('non-nullable email_domain_creation_date cannot be null');
        }
        $this->container['email_domain_creation_date'] = $email_domain_creation_date;

        return $this;
    }

    /**
     * Gets email_to_name
     *
     * @return string|null
     */
    public function getEmailToName()
    {
        return $this->container['email_to_name'];
    }

    /**
     * Sets email_to_name
     *
     * @param string|null $email_to_name The match status between the input name and the queried entity. * not found * match * no-match
     *
     * @return self
     */
    public function setEmailToName($email_to_name)
    {
        if (is_null($email_to_name)) {
            throw new \InvalidArgumentException('non-nullable email_to_name cannot be null');
        }
        $this->container['email_to_name'] = $email_to_name;

        return $this;
    }

    /**
     * Gets ip_risk
     *
     * @return float|null
     */
    public function getIpRisk()
    {
        return $this->container['ip_risk'];
    }

    /**
     * Sets ip_risk
     *
     * @param float|null $ip_risk True if the IP address is considered risky, based on multiple IP data points and velocity calculations.
     *
     * @return self
     */
    public function setIpRisk($ip_risk)
    {
        if (is_null($ip_risk)) {
            throw new \InvalidArgumentException('non-nullable ip_risk cannot be null');
        }
        $this->container['ip_risk'] = $ip_risk;

        return $this;
    }

    /**
     * Gets ip_risk_score
     *
     * @return float|null
     */
    public function getIpRiskScore()
    {
        return $this->container['ip_risk_score'];
    }

    /**
     * Sets ip_risk_score
     *
     * @param float|null $ip_risk_score Comprehensive risk score associated with an IP address, with a higher score indicating a riskier IP address. A number between 0 and 1 rounded to three decimal places.
     *
     * @return self
     */
    public function setIpRiskScore($ip_risk_score)
    {
        if (is_null($ip_risk_score)) {
            throw new \InvalidArgumentException('non-nullable ip_risk_score cannot be null');
        }
        $this->container['ip_risk_score'] = $ip_risk_score;

        return $this;
    }

    /**
     * Gets ip_last_seen_days
     *
     * @return float|null
     */
    public function getIpLastSeenDays()
    {
        return $this->container['ip_last_seen_days'];
    }

    /**
     * Sets ip_last_seen_days
     *
     * @param float|null $ip_last_seen_days Count of days since the IP address was last observed in Ekata's Identity Network. If the IP address has not been observed before, IpLastSeenDays will be 0.
     *
     * @return self
     */
    public function setIpLastSeenDays($ip_last_seen_days)
    {
        if (is_null($ip_last_seen_days)) {
            throw new \InvalidArgumentException('non-nullable ip_last_seen_days cannot be null');
        }
        $this->container['ip_last_seen_days'] = $ip_last_seen_days;

        return $this;
    }

    /**
     * Gets ip_geolocation_country_code
     *
     * @return string|null
     */
    public function getIpGeolocationCountryCode()
    {
        return $this->container['ip_geolocation_country_code'];
    }

    /**
     * Sets ip_geolocation_country_code
     *
     * @param string|null $ip_geolocation_country_code The ISO-3166 alpha-2 country code associated with the geolocation of the IP address.
     *
     * @return self
     */
    public function setIpGeolocationCountryCode($ip_geolocation_country_code)
    {
        if (is_null($ip_geolocation_country_code)) {
            throw new \InvalidArgumentException('non-nullable ip_geolocation_country_code cannot be null');
        }
        $this->container['ip_geolocation_country_code'] = $ip_geolocation_country_code;

        return $this;
    }

    /**
     * Gets ip_geolocation_subdivision
     *
     * @return string|null
     */
    public function getIpGeolocationSubdivision()
    {
        return $this->container['ip_geolocation_subdivision'];
    }

    /**
     * Sets ip_geolocation_subdivision
     *
     * @param string|null $ip_geolocation_subdivision More granular detail about the IP address location.
     *
     * @return self
     */
    public function setIpGeolocationSubdivision($ip_geolocation_subdivision)
    {
        if (is_null($ip_geolocation_subdivision)) {
            throw new \InvalidArgumentException('non-nullable ip_geolocation_subdivision cannot be null');
        }
        $this->container['ip_geolocation_subdivision'] = $ip_geolocation_subdivision;

        return $this;
    }

    /**
     * Gets ip_phone_distance
     *
     * @return float|null
     */
    public function getIpPhoneDistance()
    {
        return $this->container['ip_phone_distance'];
    }

    /**
     * Sets ip_phone_distance
     *
     * @param float|null $ip_phone_distance The distance (in miles) between the IP address and the closest physical address associated with the phone number.
     *
     * @return self
     */
    public function setIpPhoneDistance($ip_phone_distance)
    {
        if (is_null($ip_phone_distance)) {
            throw new \InvalidArgumentException('non-nullable ip_phone_distance cannot be null');
        }
        $this->container['ip_phone_distance'] = $ip_phone_distance;

        return $this;
    }

    /**
     * Gets ip_address_distance
     *
     * @return float|null
     */
    public function getIpAddressDistance()
    {
        return $this->container['ip_address_distance'];
    }

    /**
     * Sets ip_address_distance
     *
     * @param float|null $ip_address_distance The distance (in miles) between the IP address and the physical address.
     *
     * @return self
     */
    public function setIpAddressDistance($ip_address_distance)
    {
        if (is_null($ip_address_distance)) {
            throw new \InvalidArgumentException('non-nullable ip_address_distance cannot be null');
        }
        $this->container['ip_address_distance'] = $ip_address_distance;

        return $this;
    }

    /**
     * Gets is_phone_valid
     *
     * @return bool|null
     */
    public function getIsPhoneValid()
    {
        return $this->container['is_phone_valid'];
    }

    /**
     * Sets is_phone_valid
     *
     * @param bool|null $is_phone_valid True if the phone number is valid.
     *
     * @return self
     */
    public function setIsPhoneValid($is_phone_valid)
    {
        if (is_null($is_phone_valid)) {
            throw new \InvalidArgumentException('non-nullable is_phone_valid cannot be null');
        }
        $this->container['is_phone_valid'] = $is_phone_valid;

        return $this;
    }

    /**
     * Gets phone_line_type
     *
     * @return string|null
     */
    public function getPhoneLineType()
    {
        return $this->container['phone_line_type'];
    }

    /**
     * Sets phone_line_type
     *
     * @param string|null $phone_line_type The line type of the phone number. * landline - traditional wired phone line. * fixed-voip - VoIP-based fixed line phones. * mobile - wireless phone line. * voicemail - voicemail-only service. * toll-free - callee pays for call. * premium - caller pays a premium for the call-e.g., 976 area code. * non-fixed-voip - Skype, for example * other - anything that does not match the previous categories.
     *
     * @return self
     */
    public function setPhoneLineType($phone_line_type)
    {
        if (is_null($phone_line_type)) {
            throw new \InvalidArgumentException('non-nullable phone_line_type cannot be null');
        }
        $this->container['phone_line_type'] = $phone_line_type;

        return $this;
    }

    /**
     * Gets phone_carrier
     *
     * @return string|null
     */
    public function getPhoneCarrier()
    {
        return $this->container['phone_carrier'];
    }

    /**
     * Sets phone_carrier
     *
     * @param string|null $phone_carrier The company that provides voice and/or data services for the phone number. Carriers are returned at the MVNO level.
     *
     * @return self
     */
    public function setPhoneCarrier($phone_carrier)
    {
        if (is_null($phone_carrier)) {
            throw new \InvalidArgumentException('non-nullable phone_carrier cannot be null');
        }
        $this->container['phone_carrier'] = $phone_carrier;

        return $this;
    }

    /**
     * Gets phone_country_code
     *
     * @return string|null
     */
    public function getPhoneCountryCode()
    {
        return $this->container['phone_country_code'];
    }

    /**
     * Sets phone_country_code
     *
     * @param string|null $phone_country_code The ISO-3166 alpha-2 country code associated with the phone number.
     *
     * @return self
     */
    public function setPhoneCountryCode($phone_country_code)
    {
        if (is_null($phone_country_code)) {
            throw new \InvalidArgumentException('non-nullable phone_country_code cannot be null');
        }
        $this->container['phone_country_code'] = $phone_country_code;

        return $this;
    }

    /**
     * Gets phone_last_seen_days
     *
     * @return float|null
     */
    public function getPhoneLastSeenDays()
    {
        return $this->container['phone_last_seen_days'];
    }

    /**
     * Sets phone_last_seen_days
     *
     * @param float|null $phone_last_seen_days Count of days since the phone was last observed in Ekata's Identity Network. If the phone has not been observed before, `phoneLastSeenDays` will be 0.
     *
     * @return self
     */
    public function setPhoneLastSeenDays($phone_last_seen_days)
    {
        if (is_null($phone_last_seen_days)) {
            throw new \InvalidArgumentException('non-nullable phone_last_seen_days cannot be null');
        }
        $this->container['phone_last_seen_days'] = $phone_last_seen_days;

        return $this;
    }

    /**
     * Gets phone_email_first_seen_days
     *
     * @return float|null
     */
    public function getPhoneEmailFirstSeenDays()
    {
        return $this->container['phone_email_first_seen_days'];
    }

    /**
     * Sets phone_email_first_seen_days
     *
     * @param float|null $phone_email_first_seen_days Count of days since the combination of phone and email was first observed in Ekata's Identity Network. If that combination has not been observed before, `phoneEmailFirstSeenDays` will be 0.
     *
     * @return self
     */
    public function setPhoneEmailFirstSeenDays($phone_email_first_seen_days)
    {
        if (is_null($phone_email_first_seen_days)) {
            throw new \InvalidArgumentException('non-nullable phone_email_first_seen_days cannot be null');
        }
        $this->container['phone_email_first_seen_days'] = $phone_email_first_seen_days;

        return $this;
    }

    /**
     * Gets phone_to_name
     *
     * @return string|null
     */
    public function getPhoneToName()
    {
        return $this->container['phone_to_name'];
    }

    /**
     * Sets phone_to_name
     *
     * @param string|null $phone_to_name The match status between the input name and the queried entity.  * not-found  * match  * no-match
     *
     * @return self
     */
    public function setPhoneToName($phone_to_name)
    {
        if (is_null($phone_to_name)) {
            throw new \InvalidArgumentException('non-nullable phone_to_name cannot be null');
        }
        $this->container['phone_to_name'] = $phone_to_name;

        return $this;
    }

    /**
     * Gets phone_to_address
     *
     * @return string|null
     */
    public function getPhoneToAddress()
    {
        return $this->container['phone_to_address'];
    }

    /**
     * Sets phone_to_address
     *
     * @param string|null $phone_to_address The match status between the input phone and the queried entity. * match - Phone location matches input address line 1, address line 2, city, state, and postal code.   * postal-match - Phone location postal code matches input address postal code.   * zip4-match - Phone location postal code zip+4 matches input address postal code zip+4.   * city-state-match - Phone location city and state matches input address city and state.  * metro-match - Phone location is in the same metro area as input address.   * country-match - Phone location country matches input address country.   * no-match - Phone location does not match input address.
     *
     * @return self
     */
    public function setPhoneToAddress($phone_to_address)
    {
        if (is_null($phone_to_address)) {
            throw new \InvalidArgumentException('non-nullable phone_to_address cannot be null');
        }
        $this->container['phone_to_address'] = $phone_to_address;

        return $this;
    }

    /**
     * Gets address_validity_level
     *
     * @return float|null
     */
    public function getAddressValidityLevel()
    {
        return $this->container['address_validity_level'];
    }

    /**
     * Sets address_validity_level
     *
     * @param float|null $address_validity_level The most granular level to which the address could be validated. Ex. If the address was only valid to the city level (but not to the house level), it would return “valid_to_city”.   * missing_address - An input address was not provided.    * invalid - The input address is not valid.    * valid - The input address is valid.    * valid_to_country - The input address could only be validated to the country level. This means the country of the input address is valid, but the other elements of the input address were unable to be confirmed as valid or invalid.    * valid_to_city - The input address was validated to the city level. This means the country, state, city, and postal code of the input address are valid, but the street, house number, and subpremise of the input address were unable to be confirmed as valid or invalid.    * valid_to_street - The input address was validated to the street level. This means the country, state, city, postal code, and street of the input address are valid, but the house number and subpremise of the input address were unable to be confirmed as valid or invalid.      * valid_to_house_number - The input address was validated to the street and house number level. This means the country, state, city, postal code, street, and house number of the input address are valid, but the subpremise of the input address was unable to be confirmed as valid or invalid.       * valid_to_house_number_missing_apt - The input address was validated to the street and house number level. This means the country, state, city, postal code, street, and house number of the input address are valid, but the subpremise of the input address was missing and thus unable to be confirmed as valid or invalid.
     *
     * @return self
     */
    public function setAddressValidityLevel($address_validity_level)
    {
        if (is_null($address_validity_level)) {
            throw new \InvalidArgumentException('non-nullable address_validity_level cannot be null');
        }
        $this->container['address_validity_level'] = $address_validity_level;

        return $this;
    }

    /**
     * Gets address_to_name
     *
     * @return string|null
     */
    public function getAddressToName()
    {
        return $this->container['address_to_name'];
    }

    /**
     * Sets address_to_name
     *
     * @param string|null $address_to_name The match status between the input name and the queried entity. * not-found * match * no-match
     *
     * @return self
     */
    public function setAddressToName($address_to_name)
    {
        if (is_null($address_to_name)) {
            throw new \InvalidArgumentException('non-nullable address_to_name cannot be null');
        }
        $this->container['address_to_name'] = $address_to_name;

        return $this;
    }

    /**
     * Gets identity_network_score
     *
     * @return float|null
     */
    public function getIdentityNetworkScore()
    {
        return $this->container['identity_network_score'];
    }

    /**
     * Sets identity_network_score
     *
     * @param float|null $identity_network_score Comprehensive network score built on behavioral insights such as velocity, popularity, volatility, and age of an attribute, with a higher score indicating a riskier account sign-up. A number between 0 and 1 rounded to three decimal places.
     *
     * @return self
     */
    public function setIdentityNetworkScore($identity_network_score)
    {
        if (is_null($identity_network_score)) {
            throw new \InvalidArgumentException('non-nullable identity_network_score cannot be null');
        }
        $this->container['identity_network_score'] = $identity_network_score;

        return $this;
    }

    /**
     * Gets identity_risk_score
     *
     * @return float|null
     */
    public function getIdentityRiskScore()
    {
        return $this->container['identity_risk_score'];
    }

    /**
     * Sets identity_risk_score
     *
     * @param float|null $identity_risk_score Comprehensive identity risk score with a higher score indicating a riskier account sign-up.
     *
     * @return self
     */
    public function setIdentityRiskScore($identity_risk_score)
    {
        if (is_null($identity_risk_score)) {
            throw new \InvalidArgumentException('non-nullable identity_risk_score cannot be null');
        }
        $this->container['identity_risk_score'] = $identity_risk_score;

        return $this;
    }

    /**
     * Gets warnings
     *
     * @return string[]|null
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param string[]|null $warnings warnings
     *
     * @return self
     */
    public function setWarnings($warnings)
    {
        if (is_null($warnings)) {
            throw new \InvalidArgumentException('non-nullable warnings cannot be null');
        }
        $this->container['warnings'] = $warnings;

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


