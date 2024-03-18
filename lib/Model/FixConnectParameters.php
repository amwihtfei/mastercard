<?php
/**
 * FixConnectParameters
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
 * FixConnectParameters Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FixConnectParameters implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FixConnectParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'language' => 'string',
        'partner_id' => 'string',
        'customer_id' => 'string',
        'institution_login_id' => 'string',
        'redirect_uri' => 'string',
        'webhook' => 'string',
        'webhook_content_type' => 'string',
        'webhook_data' => 'object',
        'webhook_headers' => 'object',
        'experience' => 'string',
        'single_use_url' => 'bool',
        'is_web_view' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'language' => null,
        'partner_id' => null,
        'customer_id' => null,
        'institution_login_id' => null,
        'redirect_uri' => null,
        'webhook' => null,
        'webhook_content_type' => null,
        'webhook_data' => null,
        'webhook_headers' => null,
        'experience' => null,
        'single_use_url' => null,
        'is_web_view' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'language' => false,
        'partner_id' => false,
        'customer_id' => false,
        'institution_login_id' => false,
        'redirect_uri' => false,
        'webhook' => false,
        'webhook_content_type' => false,
        'webhook_data' => false,
        'webhook_headers' => false,
        'experience' => false,
        'single_use_url' => false,
        'is_web_view' => false
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
        'language' => 'language',
        'partner_id' => 'partnerId',
        'customer_id' => 'customerId',
        'institution_login_id' => 'institutionLoginId',
        'redirect_uri' => 'redirectUri',
        'webhook' => 'webhook',
        'webhook_content_type' => 'webhookContentType',
        'webhook_data' => 'webhookData',
        'webhook_headers' => 'webhookHeaders',
        'experience' => 'experience',
        'single_use_url' => 'singleUseUrl',
        'is_web_view' => 'isWebView'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'language' => 'setLanguage',
        'partner_id' => 'setPartnerId',
        'customer_id' => 'setCustomerId',
        'institution_login_id' => 'setInstitutionLoginId',
        'redirect_uri' => 'setRedirectUri',
        'webhook' => 'setWebhook',
        'webhook_content_type' => 'setWebhookContentType',
        'webhook_data' => 'setWebhookData',
        'webhook_headers' => 'setWebhookHeaders',
        'experience' => 'setExperience',
        'single_use_url' => 'setSingleUseUrl',
        'is_web_view' => 'setIsWebView'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'language' => 'getLanguage',
        'partner_id' => 'getPartnerId',
        'customer_id' => 'getCustomerId',
        'institution_login_id' => 'getInstitutionLoginId',
        'redirect_uri' => 'getRedirectUri',
        'webhook' => 'getWebhook',
        'webhook_content_type' => 'getWebhookContentType',
        'webhook_data' => 'getWebhookData',
        'webhook_headers' => 'getWebhookHeaders',
        'experience' => 'getExperience',
        'single_use_url' => 'getSingleUseUrl',
        'is_web_view' => 'getIsWebView'
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
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('partner_id', $data ?? [], null);
        $this->setIfExists('customer_id', $data ?? [], null);
        $this->setIfExists('institution_login_id', $data ?? [], null);
        $this->setIfExists('redirect_uri', $data ?? [], null);
        $this->setIfExists('webhook', $data ?? [], null);
        $this->setIfExists('webhook_content_type', $data ?? [], 'application/json');
        $this->setIfExists('webhook_data', $data ?? [], null);
        $this->setIfExists('webhook_headers', $data ?? [], null);
        $this->setIfExists('experience', $data ?? [], null);
        $this->setIfExists('single_use_url', $data ?? [], null);
        $this->setIfExists('is_web_view', $data ?? [], null);
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

        if ($this->container['partner_id'] === null) {
            $invalidProperties[] = "'partner_id' can't be null";
        }
        if ($this->container['customer_id'] === null) {
            $invalidProperties[] = "'customer_id' can't be null";
        }
        if ($this->container['institution_login_id'] === null) {
            $invalidProperties[] = "'institution_login_id' can't be null";
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
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language By default, the Connect application is in English. You don't need to pass this parameter unless you want to translate Connect into one of our supported languages.  * Spanish (United States): `es` * French (Canada): `fr`
     *
     * @return self
     */
    public function setLanguage($language)
    {
        if (is_null($language)) {
            throw new \InvalidArgumentException('non-nullable language cannot be null');
        }
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets partner_id
     *
     * @return string
     */
    public function getPartnerId()
    {
        return $this->container['partner_id'];
    }

    /**
     * Sets partner_id
     *
     * @param string $partner_id Your Partner ID displayed in the [Developer Dashboard](https://developer.mastercard.com/account/log-in)
     *
     * @return self
     */
    public function setPartnerId($partner_id)
    {
        if (is_null($partner_id)) {
            throw new \InvalidArgumentException('non-nullable partner_id cannot be null');
        }
        $this->container['partner_id'] = $partner_id;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string $customer_id A customer ID. See Add Customer API for how to create a customer ID.
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
     * Gets institution_login_id
     *
     * @return string
     */
    public function getInstitutionLoginId()
    {
        return $this->container['institution_login_id'];
    }

    /**
     * Sets institution_login_id
     *
     * @param string $institution_login_id An institution login ID (from the account record)
     *
     * @return self
     */
    public function setInstitutionLoginId($institution_login_id)
    {
        if (is_null($institution_login_id)) {
            throw new \InvalidArgumentException('non-nullable institution_login_id cannot be null');
        }
        $this->container['institution_login_id'] = $institution_login_id;

        return $this;
    }

    /**
     * Gets redirect_uri
     *
     * @return string|null
     */
    public function getRedirectUri()
    {
        return $this->container['redirect_uri'];
    }

    /**
     * Sets redirect_uri
     *
     * @param string|null $redirect_uri The URL that customers will be redirected to after completing Finicity Connect. Required unless Connect is embedded inside our application (iframe).
     *
     * @return self
     */
    public function setRedirectUri($redirect_uri)
    {
        if (is_null($redirect_uri)) {
            throw new \InvalidArgumentException('non-nullable redirect_uri cannot be null');
        }
        $this->container['redirect_uri'] = $redirect_uri;

        return $this;
    }

    /**
     * Gets webhook
     *
     * @return string|null
     */
    public function getWebhook()
    {
        return $this->container['webhook'];
    }

    /**
     * Sets webhook
     *
     * @param string|null $webhook The publicly available URL you want to be notified with events as the user progresses through the application. See [Connect Webhook Event](https://developer.mastercard.com/open-banking-us/documentation/webhooks/webhooks-connect/) for event details.
     *
     * @return self
     */
    public function setWebhook($webhook)
    {
        if (is_null($webhook)) {
            throw new \InvalidArgumentException('non-nullable webhook cannot be null');
        }
        $this->container['webhook'] = $webhook;

        return $this;
    }

    /**
     * Gets webhook_content_type
     *
     * @return string|null
     */
    public function getWebhookContentType()
    {
        return $this->container['webhook_content_type'];
    }

    /**
     * Sets webhook_content_type
     *
     * @param string|null $webhook_content_type The content type the webhook events will be sent in. Supported types: \"application/json\" and \"application/xml\".
     *
     * @return self
     */
    public function setWebhookContentType($webhook_content_type)
    {
        if (is_null($webhook_content_type)) {
            throw new \InvalidArgumentException('non-nullable webhook_content_type cannot be null');
        }
        $this->container['webhook_content_type'] = $webhook_content_type;

        return $this;
    }

    /**
     * Gets webhook_data
     *
     * @return object|null
     */
    public function getWebhookData()
    {
        return $this->container['webhook_data'];
    }

    /**
     * Sets webhook_data
     *
     * @param object|null $webhook_data Allows additional identifiable information to be inserted into the payload of connect webhook events. See: [Custom Webhooks](https://developer.mastercard.com/open-banking-us/documentation/webhooks/webhooks-custom/).
     *
     * @return self
     */
    public function setWebhookData($webhook_data)
    {
        if (is_null($webhook_data)) {
            throw new \InvalidArgumentException('non-nullable webhook_data cannot be null');
        }
        $this->container['webhook_data'] = $webhook_data;

        return $this;
    }

    /**
     * Gets webhook_headers
     *
     * @return object|null
     */
    public function getWebhookHeaders()
    {
        return $this->container['webhook_headers'];
    }

    /**
     * Sets webhook_headers
     *
     * @param object|null $webhook_headers Allows additional identifiable information to be included as headers of connect webhook event. See: [Custom Webhooks](https://developer.mastercard.com/open-banking-us/documentation/webhooks/webhooks-custom/).
     *
     * @return self
     */
    public function setWebhookHeaders($webhook_headers)
    {
        if (is_null($webhook_headers)) {
            throw new \InvalidArgumentException('non-nullable webhook_headers cannot be null');
        }
        $this->container['webhook_headers'] = $webhook_headers;

        return $this;
    }

    /**
     * Gets experience
     *
     * @return string|null
     */
    public function getExperience()
    {
        return $this->container['experience'];
    }

    /**
     * Sets experience
     *
     * @param string|null $experience The `experience` field allows you to customize: * Brand: color and logo * Icon: displayed on the \"Share your data\" page  * Popular institutions: displayed on the Bank Search page  * Report: the credit decisioning report to send when Connect completes.  * MVS modules: financial, payroll, paystub  Note: the Finicity sales engineers (SE) help you set up a default experience for your company when you migrate to Connect 2.0. For each additional experience you create thereafter, they'll give you a unique ID. See [Generate Connect URL](https://developer.mastercard.com/open-banking-us/documentation/connect/generate-2-connect-url-apis/).  Experience values options:  * \"default\": your default experience (must be defined)  * GUID: the code for a different experience * Not defined: If you don't pass the experience parameter, then Connect's out of the box default experience (add accounts but no branding) is used, and the MVS modules will not run.
     *
     * @return self
     */
    public function setExperience($experience)
    {
        if (is_null($experience)) {
            throw new \InvalidArgumentException('non-nullable experience cannot be null');
        }
        $this->container['experience'] = $experience;

        return $this;
    }

    /**
     * Gets single_use_url
     *
     * @return bool|null
     */
    public function getSingleUseUrl()
    {
        return $this->container['single_use_url'];
    }

    /**
     * Sets single_use_url
     *
     * @param bool|null $single_use_url \"true\": The URL link expires after a Connect session successfully completes.  Note: when the `singleUseUrl` and the `experience` parameters are passed in the same call, the `singleUseUrl` value overrides the `singleUseUrl` value configured in the `experience` parameter.
     *
     * @return self
     */
    public function setSingleUseUrl($single_use_url)
    {
        if (is_null($single_use_url)) {
            throw new \InvalidArgumentException('non-nullable single_use_url cannot be null');
        }
        $this->container['single_use_url'] = $single_use_url;

        return $this;
    }

    /**
     * Gets is_web_view
     *
     * @return bool|null
     */
    public function getIsWebView()
    {
        return $this->container['is_web_view'];
    }

    /**
     * Sets is_web_view
     *
     * @param bool|null $is_web_view \"true\": Indicates that the Connect Session will be displayed within a WebView. Note: when the `isWebView` parameter is `true` the `redirectUri` parameter is required.
     *
     * @return self
     */
    public function setIsWebView($is_web_view)
    {
        if (is_null($is_web_view)) {
            throw new \InvalidArgumentException('non-nullable is_web_view cannot be null');
        }
        $this->container['is_web_view'] = $is_web_view;

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


