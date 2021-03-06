<?php
/**
 * InlineResponse20011Version
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  IdeaEngine\TezosSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Tezos RPC
 *
 * Tezos client RPC API.
 *
 * The version of the OpenAPI document: 11.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace IdeaEngine\TezosSDK\Model;

use \ArrayAccess;
use \IdeaEngine\TezosSDK\ObjectSerializer;

/**
 * InlineResponse20011Version Class Doc Comment
 *
 * @category Class
 * @package  IdeaEngine\TezosSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse20011Version implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_11_version';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'major' => 'int',
        'minor' => 'int',
        'additional_info' => 'OneOfStringObjectString'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'major' => null,
        'minor' => null,
        'additional_info' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'major' => 'major',
        'minor' => 'minor',
        'additional_info' => 'additional_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'major' => 'setMajor',
        'minor' => 'setMinor',
        'additional_info' => 'setAdditionalInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'major' => 'getMajor',
        'minor' => 'getMinor',
        'additional_info' => 'getAdditionalInfo'
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
        $this->container['major'] = $data['major'] ?? null;
        $this->container['minor'] = $data['minor'] ?? null;
        $this->container['additional_info'] = $data['additional_info'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['major'] === null) {
            $invalidProperties[] = "'major' can't be null";
        }
        if (($this->container['major'] > 1073741823)) {
            $invalidProperties[] = "invalid value for 'major', must be smaller than or equal to 1073741823.";
        }

        if (($this->container['major'] < -1073741824)) {
            $invalidProperties[] = "invalid value for 'major', must be bigger than or equal to -1073741824.";
        }

        if ($this->container['minor'] === null) {
            $invalidProperties[] = "'minor' can't be null";
        }
        if (($this->container['minor'] > 1073741823)) {
            $invalidProperties[] = "invalid value for 'minor', must be smaller than or equal to 1073741823.";
        }

        if (($this->container['minor'] < -1073741824)) {
            $invalidProperties[] = "invalid value for 'minor', must be bigger than or equal to -1073741824.";
        }

        if ($this->container['additional_info'] === null) {
            $invalidProperties[] = "'additional_info' can't be null";
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
     * Gets major
     *
     * @return int
     */
    public function getMajor()
    {
        return $this->container['major'];
    }

    /**
     * Sets major
     *
     * @param int $major major
     *
     * @return self
     */
    public function setMajor($major)
    {

        if (($major > 1073741823)) {
            throw new \InvalidArgumentException('invalid value for $major when calling InlineResponse20011Version., must be smaller than or equal to 1073741823.');
        }
        if (($major < -1073741824)) {
            throw new \InvalidArgumentException('invalid value for $major when calling InlineResponse20011Version., must be bigger than or equal to -1073741824.');
        }

        $this->container['major'] = $major;

        return $this;
    }

    /**
     * Gets minor
     *
     * @return int
     */
    public function getMinor()
    {
        return $this->container['minor'];
    }

    /**
     * Sets minor
     *
     * @param int $minor minor
     *
     * @return self
     */
    public function setMinor($minor)
    {

        if (($minor > 1073741823)) {
            throw new \InvalidArgumentException('invalid value for $minor when calling InlineResponse20011Version., must be smaller than or equal to 1073741823.');
        }
        if (($minor < -1073741824)) {
            throw new \InvalidArgumentException('invalid value for $minor when calling InlineResponse20011Version., must be bigger than or equal to -1073741824.');
        }

        $this->container['minor'] = $minor;

        return $this;
    }

    /**
     * Gets additional_info
     *
     * @return OneOfStringObjectString
     */
    public function getAdditionalInfo()
    {
        return $this->container['additional_info'];
    }

    /**
     * Sets additional_info
     *
     * @param OneOfStringObjectString $additional_info additional_info
     *
     * @return self
     */
    public function setAdditionalInfo($additional_info)
    {
        $this->container['additional_info'] = $additional_info;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


