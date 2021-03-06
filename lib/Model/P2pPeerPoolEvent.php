<?php
/**
 * P2pPeerPoolEvent
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
 * P2pPeerPoolEvent Class Doc Comment
 *
 * @category Class
 * @description An event that may happen during maintenance of and other operations on the connection to a specific peer.
 * @package  IdeaEngine\TezosSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class P2pPeerPoolEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'p2p_peer.pool_event';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'kind' => 'string',
        'timestamp' => '\IdeaEngine\TezosSDK\Model\TimestampSystem',
        'addr' => '\IdeaEngine\TezosSDK\Model\P2pAddress',
        'port' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'kind' => null,
        'timestamp' => null,
        'addr' => null,
        'port' => null
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
        'kind' => 'kind',
        'timestamp' => 'timestamp',
        'addr' => 'addr',
        'port' => 'port'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'kind' => 'setKind',
        'timestamp' => 'setTimestamp',
        'addr' => 'setAddr',
        'port' => 'setPort'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'kind' => 'getKind',
        'timestamp' => 'getTimestamp',
        'addr' => 'getAddr',
        'port' => 'getPort'
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

    const KIND_REJECTING_REQUEST = 'rejecting_request';
    const KIND_INCOMING_REQUEST = 'incoming_request';
    const KIND_DISCONNECTION = 'disconnection';
    const KIND_EXTERNAL_DISCONNECTION = 'external_disconnection';
    const KIND_CONNECTION_ESTABLISHED = 'connection_established';
    const KIND_REQUEST_REJECTED = 'request_rejected';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKindAllowableValues()
    {
        return [
            self::KIND_REJECTING_REQUEST,
            self::KIND_INCOMING_REQUEST,
            self::KIND_DISCONNECTION,
            self::KIND_EXTERNAL_DISCONNECTION,
            self::KIND_CONNECTION_ESTABLISHED,
            self::KIND_REQUEST_REJECTED,
        ];
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
        $this->container['kind'] = $data['kind'] ?? null;
        $this->container['timestamp'] = $data['timestamp'] ?? null;
        $this->container['addr'] = $data['addr'] ?? null;
        $this->container['port'] = $data['port'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['kind'] === null) {
            $invalidProperties[] = "'kind' can't be null";
        }
        $allowedValues = $this->getKindAllowableValues();
        if (!is_null($this->container['kind']) && !in_array($this->container['kind'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'kind', must be one of '%s'",
                $this->container['kind'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if ($this->container['addr'] === null) {
            $invalidProperties[] = "'addr' can't be null";
        }
        if (!is_null($this->container['port']) && ($this->container['port'] > 65535)) {
            $invalidProperties[] = "invalid value for 'port', must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['port']) && ($this->container['port'] < 0)) {
            $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 0.";
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
     * Gets kind
     *
     * @return string
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param string $kind kind
     *
     * @return self
     */
    public function setKind($kind)
    {
        $allowedValues = $this->getKindAllowableValues();
        if (!in_array($kind, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'kind', must be one of '%s'",
                    $kind,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['kind'] = $kind;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \IdeaEngine\TezosSDK\Model\TimestampSystem
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \IdeaEngine\TezosSDK\Model\TimestampSystem $timestamp timestamp
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets addr
     *
     * @return \IdeaEngine\TezosSDK\Model\P2pAddress
     */
    public function getAddr()
    {
        return $this->container['addr'];
    }

    /**
     * Sets addr
     *
     * @param \IdeaEngine\TezosSDK\Model\P2pAddress $addr addr
     *
     * @return self
     */
    public function setAddr($addr)
    {
        $this->container['addr'] = $addr;

        return $this;
    }

    /**
     * Gets port
     *
     * @return int|null
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     *
     * @param int|null $port port
     *
     * @return self
     */
    public function setPort($port)
    {

        if (!is_null($port) && ($port > 65535)) {
            throw new \InvalidArgumentException('invalid value for $port when calling P2pPeerPoolEvent., must be smaller than or equal to 65535.');
        }
        if (!is_null($port) && ($port < 0)) {
            throw new \InvalidArgumentException('invalid value for $port when calling P2pPeerPoolEvent., must be bigger than or equal to 0.');
        }

        $this->container['port'] = $port;

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


