<?php
/**
 * InlineResponse20013
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
 * InlineResponse20013 Class Doc Comment
 *
 * @category Class
 * @package  IdeaEngine\TezosSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse20013 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_13';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'chain_id' => '\IdeaEngine\TezosSDK\Model\ChainId',
        'status' => 'OneOfObjectObjectObjectObjectObject',
        'information' => '\IdeaEngine\TezosSDK\Model\WorkersChainValidatorsInformation',
        'pipelines' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'chain_id' => null,
        'status' => null,
        'information' => null,
        'pipelines' => null
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
        'chain_id' => 'chain_id',
        'status' => 'status',
        'information' => 'information',
        'pipelines' => 'pipelines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'chain_id' => 'setChainId',
        'status' => 'setStatus',
        'information' => 'setInformation',
        'pipelines' => 'setPipelines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'chain_id' => 'getChainId',
        'status' => 'getStatus',
        'information' => 'getInformation',
        'pipelines' => 'getPipelines'
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
        $this->container['chain_id'] = $data['chain_id'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['information'] = $data['information'] ?? null;
        $this->container['pipelines'] = $data['pipelines'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['chain_id'] === null) {
            $invalidProperties[] = "'chain_id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['information'] === null) {
            $invalidProperties[] = "'information' can't be null";
        }
        if ($this->container['pipelines'] === null) {
            $invalidProperties[] = "'pipelines' can't be null";
        }
        if (($this->container['pipelines'] > 32767)) {
            $invalidProperties[] = "invalid value for 'pipelines', must be smaller than or equal to 32767.";
        }

        if (($this->container['pipelines'] < -32768)) {
            $invalidProperties[] = "invalid value for 'pipelines', must be bigger than or equal to -32768.";
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
     * Gets chain_id
     *
     * @return \IdeaEngine\TezosSDK\Model\ChainId
     */
    public function getChainId()
    {
        return $this->container['chain_id'];
    }

    /**
     * Sets chain_id
     *
     * @param \IdeaEngine\TezosSDK\Model\ChainId $chain_id chain_id
     *
     * @return self
     */
    public function setChainId($chain_id)
    {
        $this->container['chain_id'] = $chain_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return OneOfObjectObjectObjectObjectObject
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param OneOfObjectObjectObjectObjectObject $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets information
     *
     * @return \IdeaEngine\TezosSDK\Model\WorkersChainValidatorsInformation
     */
    public function getInformation()
    {
        return $this->container['information'];
    }

    /**
     * Sets information
     *
     * @param \IdeaEngine\TezosSDK\Model\WorkersChainValidatorsInformation $information information
     *
     * @return self
     */
    public function setInformation($information)
    {
        $this->container['information'] = $information;

        return $this;
    }

    /**
     * Gets pipelines
     *
     * @return int
     */
    public function getPipelines()
    {
        return $this->container['pipelines'];
    }

    /**
     * Sets pipelines
     *
     * @param int $pipelines pipelines
     *
     * @return self
     */
    public function setPipelines($pipelines)
    {

        if (($pipelines > 32767)) {
            throw new \InvalidArgumentException('invalid value for $pipelines when calling InlineResponse20013., must be smaller than or equal to 32767.');
        }
        if (($pipelines < -32768)) {
            throw new \InvalidArgumentException('invalid value for $pipelines when calling InlineResponse20013., must be bigger than or equal to -32768.');
        }

        $this->container['pipelines'] = $pipelines;

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


