<?php
/**
 * DeliverySettingsDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl/about  Documentation is generated from [this](https://developer.allegro.pl/swagger.yaml) OpenAPI 3.0 specification file.
 *
 * OpenAPI spec version: latest
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.33
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * DeliverySettingsDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeliverySettingsDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DeliverySettingsDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'free_delivery' => '\Swagger\Client\Model\DeliverySettingsDtoFreeDelivery',
'abroad_free_delivery' => '\Swagger\Client\Model\DeliverySettingsDtoAbroadFreeDelivery',
'join_policy' => '\Swagger\Client\Model\DeliverySettingsDtoJoinPolicy',
'custom_cost' => '\Swagger\Client\Model\DeliverySettingsDtoCustomCost',
'updated_at' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'free_delivery' => null,
'abroad_free_delivery' => null,
'join_policy' => null,
'custom_cost' => null,
'updated_at' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'free_delivery' => 'freeDelivery',
'abroad_free_delivery' => 'abroadFreeDelivery',
'join_policy' => 'joinPolicy',
'custom_cost' => 'customCost',
'updated_at' => 'updatedAt'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'free_delivery' => 'setFreeDelivery',
'abroad_free_delivery' => 'setAbroadFreeDelivery',
'join_policy' => 'setJoinPolicy',
'custom_cost' => 'setCustomCost',
'updated_at' => 'setUpdatedAt'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'free_delivery' => 'getFreeDelivery',
'abroad_free_delivery' => 'getAbroadFreeDelivery',
'join_policy' => 'getJoinPolicy',
'custom_cost' => 'getCustomCost',
'updated_at' => 'getUpdatedAt'    ];

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
        return self::$swaggerModelName;
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
        $this->container['free_delivery'] = isset($data['free_delivery']) ? $data['free_delivery'] : null;
        $this->container['abroad_free_delivery'] = isset($data['abroad_free_delivery']) ? $data['abroad_free_delivery'] : null;
        $this->container['join_policy'] = isset($data['join_policy']) ? $data['join_policy'] : null;
        $this->container['custom_cost'] = isset($data['custom_cost']) ? $data['custom_cost'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
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
     * Gets free_delivery
     *
     * @return \Swagger\Client\Model\DeliverySettingsDtoFreeDelivery
     */
    public function getFreeDelivery()
    {
        return $this->container['free_delivery'];
    }

    /**
     * Sets free_delivery
     *
     * @param \Swagger\Client\Model\DeliverySettingsDtoFreeDelivery $free_delivery free_delivery
     *
     * @return $this
     */
    public function setFreeDelivery($free_delivery)
    {
        $this->container['free_delivery'] = $free_delivery;

        return $this;
    }

    /**
     * Gets abroad_free_delivery
     *
     * @return \Swagger\Client\Model\DeliverySettingsDtoAbroadFreeDelivery
     */
    public function getAbroadFreeDelivery()
    {
        return $this->container['abroad_free_delivery'];
    }

    /**
     * Sets abroad_free_delivery
     *
     * @param \Swagger\Client\Model\DeliverySettingsDtoAbroadFreeDelivery $abroad_free_delivery abroad_free_delivery
     *
     * @return $this
     */
    public function setAbroadFreeDelivery($abroad_free_delivery)
    {
        $this->container['abroad_free_delivery'] = $abroad_free_delivery;

        return $this;
    }

    /**
     * Gets join_policy
     *
     * @return \Swagger\Client\Model\DeliverySettingsDtoJoinPolicy
     */
    public function getJoinPolicy()
    {
        return $this->container['join_policy'];
    }

    /**
     * Sets join_policy
     *
     * @param \Swagger\Client\Model\DeliverySettingsDtoJoinPolicy $join_policy join_policy
     *
     * @return $this
     */
    public function setJoinPolicy($join_policy)
    {
        $this->container['join_policy'] = $join_policy;

        return $this;
    }

    /**
     * Gets custom_cost
     *
     * @return \Swagger\Client\Model\DeliverySettingsDtoCustomCost
     */
    public function getCustomCost()
    {
        return $this->container['custom_cost'];
    }

    /**
     * Sets custom_cost
     *
     * @param \Swagger\Client\Model\DeliverySettingsDtoCustomCost $custom_cost custom_cost
     *
     * @return $this
     */
    public function setCustomCost($custom_cost)
    {
        $this->container['custom_cost'] = $custom_cost;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string $updated_at Date and time of the last modification of the set in UTC ISO 8601 format. When updating (Put) settings the field is ignored.
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
