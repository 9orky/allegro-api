<?php
/**
 * InlineResponse2001ShippingRatesConstraints
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
 * InlineResponse2001ShippingRatesConstraints Class Doc Comment
 *
 * @category Class
 * @description Rules for the delivery method, i.e. price, quantity, shipping time, etc.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2001ShippingRatesConstraints implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_1_shippingRatesConstraints';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allowed' => 'bool',
'max_quantity_per_package' => '\Swagger\Client\Model\InlineResponse2001ShippingRatesConstraintsMaxQuantityPerPackage',
'max_package_weight' => '\Swagger\Client\Model\InlineResponse2001ShippingRatesConstraintsMaxPackageWeight',
'first_item_rate' => '\Swagger\Client\Model\InlineResponse2001ShippingRatesConstraintsFirstItemRate',
'next_item_rate' => '\Swagger\Client\Model\InlineResponse2001ShippingRatesConstraintsNextItemRate',
'shipping_time' => '\Swagger\Client\Model\InlineResponse2001ShippingRatesConstraintsShippingTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allowed' => null,
'max_quantity_per_package' => null,
'max_package_weight' => null,
'first_item_rate' => null,
'next_item_rate' => null,
'shipping_time' => null    ];

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
        'allowed' => 'allowed',
'max_quantity_per_package' => 'maxQuantityPerPackage',
'max_package_weight' => 'maxPackageWeight',
'first_item_rate' => 'firstItemRate',
'next_item_rate' => 'nextItemRate',
'shipping_time' => 'shippingTime'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allowed' => 'setAllowed',
'max_quantity_per_package' => 'setMaxQuantityPerPackage',
'max_package_weight' => 'setMaxPackageWeight',
'first_item_rate' => 'setFirstItemRate',
'next_item_rate' => 'setNextItemRate',
'shipping_time' => 'setShippingTime'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allowed' => 'getAllowed',
'max_quantity_per_package' => 'getMaxQuantityPerPackage',
'max_package_weight' => 'getMaxPackageWeight',
'first_item_rate' => 'getFirstItemRate',
'next_item_rate' => 'getNextItemRate',
'shipping_time' => 'getShippingTime'    ];

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
        $this->container['allowed'] = isset($data['allowed']) ? $data['allowed'] : null;
        $this->container['max_quantity_per_package'] = isset($data['max_quantity_per_package']) ? $data['max_quantity_per_package'] : null;
        $this->container['max_package_weight'] = isset($data['max_package_weight']) ? $data['max_package_weight'] : null;
        $this->container['first_item_rate'] = isset($data['first_item_rate']) ? $data['first_item_rate'] : null;
        $this->container['next_item_rate'] = isset($data['next_item_rate']) ? $data['next_item_rate'] : null;
        $this->container['shipping_time'] = isset($data['shipping_time']) ? $data['shipping_time'] : null;
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
     * Gets allowed
     *
     * @return bool
     */
    public function getAllowed()
    {
        return $this->container['allowed'];
    }

    /**
     * Sets allowed
     *
     * @param bool $allowed Indicates whether delivery method can be used when adding or modifying shipping rates.
     *
     * @return $this
     */
    public function setAllowed($allowed)
    {
        $this->container['allowed'] = $allowed;

        return $this;
    }

    /**
     * Gets max_quantity_per_package
     *
     * @return \Swagger\Client\Model\InlineResponse2001ShippingRatesConstraintsMaxQuantityPerPackage
     */
    public function getMaxQuantityPerPackage()
    {
        return $this->container['max_quantity_per_package'];
    }

    /**
     * Sets max_quantity_per_package
     *
     * @param \Swagger\Client\Model\InlineResponse2001ShippingRatesConstraintsMaxQuantityPerPackage $max_quantity_per_package max_quantity_per_package
     *
     * @return $this
     */
    public function setMaxQuantityPerPackage($max_quantity_per_package)
    {
        $this->container['max_quantity_per_package'] = $max_quantity_per_package;

        return $this;
    }

    /**
     * Gets max_package_weight
     *
     * @return \Swagger\Client\Model\InlineResponse2001ShippingRatesConstraintsMaxPackageWeight
     */
    public function getMaxPackageWeight()
    {
        return $this->container['max_package_weight'];
    }

    /**
     * Sets max_package_weight
     *
     * @param \Swagger\Client\Model\InlineResponse2001ShippingRatesConstraintsMaxPackageWeight $max_package_weight max_package_weight
     *
     * @return $this
     */
    public function setMaxPackageWeight($max_package_weight)
    {
        $this->container['max_package_weight'] = $max_package_weight;

        return $this;
    }

    /**
     * Gets first_item_rate
     *
     * @return \Swagger\Client\Model\InlineResponse2001ShippingRatesConstraintsFirstItemRate
     */
    public function getFirstItemRate()
    {
        return $this->container['first_item_rate'];
    }

    /**
     * Sets first_item_rate
     *
     * @param \Swagger\Client\Model\InlineResponse2001ShippingRatesConstraintsFirstItemRate $first_item_rate first_item_rate
     *
     * @return $this
     */
    public function setFirstItemRate($first_item_rate)
    {
        $this->container['first_item_rate'] = $first_item_rate;

        return $this;
    }

    /**
     * Gets next_item_rate
     *
     * @return \Swagger\Client\Model\InlineResponse2001ShippingRatesConstraintsNextItemRate
     */
    public function getNextItemRate()
    {
        return $this->container['next_item_rate'];
    }

    /**
     * Sets next_item_rate
     *
     * @param \Swagger\Client\Model\InlineResponse2001ShippingRatesConstraintsNextItemRate $next_item_rate next_item_rate
     *
     * @return $this
     */
    public function setNextItemRate($next_item_rate)
    {
        $this->container['next_item_rate'] = $next_item_rate;

        return $this;
    }

    /**
     * Gets shipping_time
     *
     * @return \Swagger\Client\Model\InlineResponse2001ShippingRatesConstraintsShippingTime
     */
    public function getShippingTime()
    {
        return $this->container['shipping_time'];
    }

    /**
     * Sets shipping_time
     *
     * @param \Swagger\Client\Model\InlineResponse2001ShippingRatesConstraintsShippingTime $shipping_time shipping_time
     *
     * @return $this
     */
    public function setShippingTime($shipping_time)
    {
        $this->container['shipping_time'] = $shipping_time;

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
