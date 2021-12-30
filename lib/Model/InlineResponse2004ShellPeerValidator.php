<?php
/**
 * InlineResponse2004ShellPeerValidator
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
 * InlineResponse2004ShellPeerValidator Class Doc Comment
 *
 * @category Class
 * @package  IdeaEngine\TezosSDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse2004ShellPeerValidator implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_4_shell_peer_validator';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'block_header_request_timeout' => 'int',
        'block_operations_request_timeout' => 'int',
        'protocol_request_timeout' => 'int',
        'new_head_request_timeout' => 'int',
        'worker_backlog_size' => 'int',
        'worker_backlog_level' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'block_header_request_timeout' => null,
        'block_operations_request_timeout' => null,
        'protocol_request_timeout' => null,
        'new_head_request_timeout' => null,
        'worker_backlog_size' => null,
        'worker_backlog_level' => null
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
        'block_header_request_timeout' => 'block_header_request_timeout',
        'block_operations_request_timeout' => 'block_operations_request_timeout',
        'protocol_request_timeout' => 'protocol_request_timeout',
        'new_head_request_timeout' => 'new_head_request_timeout',
        'worker_backlog_size' => 'worker_backlog_size',
        'worker_backlog_level' => 'worker_backlog_level'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'block_header_request_timeout' => 'setBlockHeaderRequestTimeout',
        'block_operations_request_timeout' => 'setBlockOperationsRequestTimeout',
        'protocol_request_timeout' => 'setProtocolRequestTimeout',
        'new_head_request_timeout' => 'setNewHeadRequestTimeout',
        'worker_backlog_size' => 'setWorkerBacklogSize',
        'worker_backlog_level' => 'setWorkerBacklogLevel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'block_header_request_timeout' => 'getBlockHeaderRequestTimeout',
        'block_operations_request_timeout' => 'getBlockOperationsRequestTimeout',
        'protocol_request_timeout' => 'getProtocolRequestTimeout',
        'new_head_request_timeout' => 'getNewHeadRequestTimeout',
        'worker_backlog_size' => 'getWorkerBacklogSize',
        'worker_backlog_level' => 'getWorkerBacklogLevel'
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

    const WORKER_BACKLOG_LEVEL_INFO = 'info';
    const WORKER_BACKLOG_LEVEL_DEBUG = 'debug';
    const WORKER_BACKLOG_LEVEL_ERROR = 'error';
    const WORKER_BACKLOG_LEVEL_FATAL = 'fatal';
    const WORKER_BACKLOG_LEVEL_WARNING = 'warning';
    const WORKER_BACKLOG_LEVEL_NOTICE = 'notice';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWorkerBacklogLevelAllowableValues()
    {
        return [
            self::WORKER_BACKLOG_LEVEL_INFO,
            self::WORKER_BACKLOG_LEVEL_DEBUG,
            self::WORKER_BACKLOG_LEVEL_ERROR,
            self::WORKER_BACKLOG_LEVEL_FATAL,
            self::WORKER_BACKLOG_LEVEL_WARNING,
            self::WORKER_BACKLOG_LEVEL_NOTICE,
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
        $this->container['block_header_request_timeout'] = $data['block_header_request_timeout'] ?? null;
        $this->container['block_operations_request_timeout'] = $data['block_operations_request_timeout'] ?? null;
        $this->container['protocol_request_timeout'] = $data['protocol_request_timeout'] ?? null;
        $this->container['new_head_request_timeout'] = $data['new_head_request_timeout'] ?? null;
        $this->container['worker_backlog_size'] = $data['worker_backlog_size'] ?? null;
        $this->container['worker_backlog_level'] = $data['worker_backlog_level'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['worker_backlog_size']) && ($this->container['worker_backlog_size'] > 65535)) {
            $invalidProperties[] = "invalid value for 'worker_backlog_size', must be smaller than or equal to 65535.";
        }

        if (!is_null($this->container['worker_backlog_size']) && ($this->container['worker_backlog_size'] < 0)) {
            $invalidProperties[] = "invalid value for 'worker_backlog_size', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getWorkerBacklogLevelAllowableValues();
        if (!is_null($this->container['worker_backlog_level']) && !in_array($this->container['worker_backlog_level'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'worker_backlog_level', must be one of '%s'",
                $this->container['worker_backlog_level'],
                implode("', '", $allowedValues)
            );
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
     * Gets block_header_request_timeout
     *
     * @return int|null
     */
    public function getBlockHeaderRequestTimeout()
    {
        return $this->container['block_header_request_timeout'];
    }

    /**
     * Sets block_header_request_timeout
     *
     * @param int|null $block_header_request_timeout A span of time, as seen by the local computer.
     *
     * @return self
     */
    public function setBlockHeaderRequestTimeout($block_header_request_timeout)
    {
        $this->container['block_header_request_timeout'] = $block_header_request_timeout;

        return $this;
    }

    /**
     * Gets block_operations_request_timeout
     *
     * @return int|null
     */
    public function getBlockOperationsRequestTimeout()
    {
        return $this->container['block_operations_request_timeout'];
    }

    /**
     * Sets block_operations_request_timeout
     *
     * @param int|null $block_operations_request_timeout A span of time, as seen by the local computer.
     *
     * @return self
     */
    public function setBlockOperationsRequestTimeout($block_operations_request_timeout)
    {
        $this->container['block_operations_request_timeout'] = $block_operations_request_timeout;

        return $this;
    }

    /**
     * Gets protocol_request_timeout
     *
     * @return int|null
     */
    public function getProtocolRequestTimeout()
    {
        return $this->container['protocol_request_timeout'];
    }

    /**
     * Sets protocol_request_timeout
     *
     * @param int|null $protocol_request_timeout A span of time, as seen by the local computer.
     *
     * @return self
     */
    public function setProtocolRequestTimeout($protocol_request_timeout)
    {
        $this->container['protocol_request_timeout'] = $protocol_request_timeout;

        return $this;
    }

    /**
     * Gets new_head_request_timeout
     *
     * @return int|null
     */
    public function getNewHeadRequestTimeout()
    {
        return $this->container['new_head_request_timeout'];
    }

    /**
     * Sets new_head_request_timeout
     *
     * @param int|null $new_head_request_timeout A span of time, as seen by the local computer.
     *
     * @return self
     */
    public function setNewHeadRequestTimeout($new_head_request_timeout)
    {
        $this->container['new_head_request_timeout'] = $new_head_request_timeout;

        return $this;
    }

    /**
     * Gets worker_backlog_size
     *
     * @return int|null
     */
    public function getWorkerBacklogSize()
    {
        return $this->container['worker_backlog_size'];
    }

    /**
     * Sets worker_backlog_size
     *
     * @param int|null $worker_backlog_size worker_backlog_size
     *
     * @return self
     */
    public function setWorkerBacklogSize($worker_backlog_size)
    {

        if (!is_null($worker_backlog_size) && ($worker_backlog_size > 65535)) {
            throw new \InvalidArgumentException('invalid value for $worker_backlog_size when calling InlineResponse2004ShellPeerValidator., must be smaller than or equal to 65535.');
        }
        if (!is_null($worker_backlog_size) && ($worker_backlog_size < 0)) {
            throw new \InvalidArgumentException('invalid value for $worker_backlog_size when calling InlineResponse2004ShellPeerValidator., must be bigger than or equal to 0.');
        }

        $this->container['worker_backlog_size'] = $worker_backlog_size;

        return $this;
    }

    /**
     * Gets worker_backlog_level
     *
     * @return string|null
     */
    public function getWorkerBacklogLevel()
    {
        return $this->container['worker_backlog_level'];
    }

    /**
     * Sets worker_backlog_level
     *
     * @param string|null $worker_backlog_level worker_backlog_level
     *
     * @return self
     */
    public function setWorkerBacklogLevel($worker_backlog_level)
    {
        $allowedValues = $this->getWorkerBacklogLevelAllowableValues();
        if (!is_null($worker_backlog_level) && !in_array($worker_backlog_level, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'worker_backlog_level', must be one of '%s'",
                    $worker_backlog_level,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['worker_backlog_level'] = $worker_backlog_level;

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

