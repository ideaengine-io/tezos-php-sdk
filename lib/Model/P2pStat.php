<?php
/**
 * P2pStat
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
 * P2pStat Class Doc Comment
 *
 * @category Class
 * @description Statistics about the p2p network.
 * @package  IdeaEngine\TezosSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class P2pStat implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'p2p_stat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'total_sent' => 'string',
        'total_recv' => 'string',
        'current_inflow' => 'int',
        'current_outflow' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'total_sent' => null,
        'total_recv' => null,
        'current_inflow' => null,
        'current_outflow' => null
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
        'total_sent' => 'total_sent',
        'total_recv' => 'total_recv',
        'current_inflow' => 'current_inflow',
        'current_outflow' => 'current_outflow'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_sent' => 'setTotalSent',
        'total_recv' => 'setTotalRecv',
        'current_inflow' => 'setCurrentInflow',
        'current_outflow' => 'setCurrentOutflow'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_sent' => 'getTotalSent',
        'total_recv' => 'getTotalRecv',
        'current_inflow' => 'getCurrentInflow',
        'current_outflow' => 'getCurrentOutflow'
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
        $this->container['total_sent'] = $data['total_sent'] ?? null;
        $this->container['total_recv'] = $data['total_recv'] ?? null;
        $this->container['current_inflow'] = $data['current_inflow'] ?? null;
        $this->container['current_outflow'] = $data['current_outflow'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['total_sent'] === null) {
            $invalidProperties[] = "'total_sent' can't be null";
        }
        if ($this->container['total_recv'] === null) {
            $invalidProperties[] = "'total_recv' can't be null";
        }
        if ($this->container['current_inflow'] === null) {
            $invalidProperties[] = "'current_inflow' can't be null";
        }
        if (($this->container['current_inflow'] > 1073741823)) {
            $invalidProperties[] = "invalid value for 'current_inflow', must be smaller than or equal to 1073741823.";
        }

        if (($this->container['current_inflow'] < -1073741824)) {
            $invalidProperties[] = "invalid value for 'current_inflow', must be bigger than or equal to -1073741824.";
        }

        if ($this->container['current_outflow'] === null) {
            $invalidProperties[] = "'current_outflow' can't be null";
        }
        if (($this->container['current_outflow'] > 1073741823)) {
            $invalidProperties[] = "invalid value for 'current_outflow', must be smaller than or equal to 1073741823.";
        }

        if (($this->container['current_outflow'] < -1073741824)) {
            $invalidProperties[] = "invalid value for 'current_outflow', must be bigger than or equal to -1073741824.";
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
     * Gets total_sent
     *
     * @return string
     */
    public function getTotalSent()
    {
        return $this->container['total_sent'];
    }

    /**
     * Sets total_sent
     *
     * @param string $total_sent Decimal representation of 64 bit integers
     *
     * @return self
     */
    public function setTotalSent($total_sent)
    {
        $this->container['total_sent'] = $total_sent;

        return $this;
    }

    /**
     * Gets total_recv
     *
     * @return string
     */
    public function getTotalRecv()
    {
        return $this->container['total_recv'];
    }

    /**
     * Sets total_recv
     *
     * @param string $total_recv Decimal representation of 64 bit integers
     *
     * @return self
     */
    public function setTotalRecv($total_recv)
    {
        $this->container['total_recv'] = $total_recv;

        return $this;
    }

    /**
     * Gets current_inflow
     *
     * @return int
     */
    public function getCurrentInflow()
    {
        return $this->container['current_inflow'];
    }

    /**
     * Sets current_inflow
     *
     * @param int $current_inflow current_inflow
     *
     * @return self
     */
    public function setCurrentInflow($current_inflow)
    {

        if (($current_inflow > 1073741823)) {
            throw new \InvalidArgumentException('invalid value for $current_inflow when calling P2pStat., must be smaller than or equal to 1073741823.');
        }
        if (($current_inflow < -1073741824)) {
            throw new \InvalidArgumentException('invalid value for $current_inflow when calling P2pStat., must be bigger than or equal to -1073741824.');
        }

        $this->container['current_inflow'] = $current_inflow;

        return $this;
    }

    /**
     * Gets current_outflow
     *
     * @return int
     */
    public function getCurrentOutflow()
    {
        return $this->container['current_outflow'];
    }

    /**
     * Sets current_outflow
     *
     * @param int $current_outflow current_outflow
     *
     * @return self
     */
    public function setCurrentOutflow($current_outflow)
    {

        if (($current_outflow > 1073741823)) {
            throw new \InvalidArgumentException('invalid value for $current_outflow when calling P2pStat., must be smaller than or equal to 1073741823.');
        }
        if (($current_outflow < -1073741824)) {
            throw new \InvalidArgumentException('invalid value for $current_outflow when calling P2pStat., must be bigger than or equal to -1073741824.');
        }

        $this->container['current_outflow'] = $current_outflow;

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


