<?php
/**
 * CategoryParameterOptions
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
 * CategoryParameterOptions Class Doc Comment
 *
 * @category Class
 * @description A list of the different options which can be used with this parameter.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CategoryParameterOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CategoryParameterOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'variants_allowed' => 'bool',
'variants_equal' => 'bool',
'ambiguous_value_id' => 'string',
'depends_on_parameter_id' => 'string',
'required_depends_on_value_ids' => 'string[]',
'display_depends_on_value_ids' => 'string[]',
'describes_product' => 'bool',
'custom_values_enabled' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'variants_allowed' => null,
'variants_equal' => null,
'ambiguous_value_id' => null,
'depends_on_parameter_id' => null,
'required_depends_on_value_ids' => null,
'display_depends_on_value_ids' => null,
'describes_product' => null,
'custom_values_enabled' => null    ];

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
        'variants_allowed' => 'variantsAllowed',
'variants_equal' => 'variantsEqual',
'ambiguous_value_id' => 'ambiguousValueId',
'depends_on_parameter_id' => 'dependsOnParameterId',
'required_depends_on_value_ids' => 'requiredDependsOnValueIds',
'display_depends_on_value_ids' => 'displayDependsOnValueIds',
'describes_product' => 'describesProduct',
'custom_values_enabled' => 'customValuesEnabled'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'variants_allowed' => 'setVariantsAllowed',
'variants_equal' => 'setVariantsEqual',
'ambiguous_value_id' => 'setAmbiguousValueId',
'depends_on_parameter_id' => 'setDependsOnParameterId',
'required_depends_on_value_ids' => 'setRequiredDependsOnValueIds',
'display_depends_on_value_ids' => 'setDisplayDependsOnValueIds',
'describes_product' => 'setDescribesProduct',
'custom_values_enabled' => 'setCustomValuesEnabled'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'variants_allowed' => 'getVariantsAllowed',
'variants_equal' => 'getVariantsEqual',
'ambiguous_value_id' => 'getAmbiguousValueId',
'depends_on_parameter_id' => 'getDependsOnParameterId',
'required_depends_on_value_ids' => 'getRequiredDependsOnValueIds',
'display_depends_on_value_ids' => 'getDisplayDependsOnValueIds',
'describes_product' => 'getDescribesProduct',
'custom_values_enabled' => 'getCustomValuesEnabled'    ];

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
        $this->container['variants_allowed'] = isset($data['variants_allowed']) ? $data['variants_allowed'] : null;
        $this->container['variants_equal'] = isset($data['variants_equal']) ? $data['variants_equal'] : null;
        $this->container['ambiguous_value_id'] = isset($data['ambiguous_value_id']) ? $data['ambiguous_value_id'] : null;
        $this->container['depends_on_parameter_id'] = isset($data['depends_on_parameter_id']) ? $data['depends_on_parameter_id'] : null;
        $this->container['required_depends_on_value_ids'] = isset($data['required_depends_on_value_ids']) ? $data['required_depends_on_value_ids'] : null;
        $this->container['display_depends_on_value_ids'] = isset($data['display_depends_on_value_ids']) ? $data['display_depends_on_value_ids'] : null;
        $this->container['describes_product'] = isset($data['describes_product']) ? $data['describes_product'] : null;
        $this->container['custom_values_enabled'] = isset($data['custom_values_enabled']) ? $data['custom_values_enabled'] : null;
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
     * Gets variants_allowed
     *
     * @return bool
     */
    public function getVariantsAllowed()
    {
        return $this->container['variants_allowed'];
    }

    /**
     * Sets variants_allowed
     *
     * @param bool $variants_allowed Parameters with this option enabled can be used for offer variants creation.
     *
     * @return $this
     */
    public function setVariantsAllowed($variants_allowed)
    {
        $this->container['variants_allowed'] = $variants_allowed;

        return $this;
    }

    /**
     * Gets variants_equal
     *
     * @return bool
     */
    public function getVariantsEqual()
    {
        return $this->container['variants_equal'];
    }

    /**
     * Sets variants_equal
     *
     * @param bool $variants_equal All offer variants must have the same values in parameters with this option enabled.
     *
     * @return $this
     */
    public function setVariantsEqual($variants_equal)
    {
        $this->container['variants_equal'] = $variants_equal;

        return $this;
    }

    /**
     * Gets ambiguous_value_id
     *
     * @return string
     */
    public function getAmbiguousValueId()
    {
        return $this->container['ambiguous_value_id'];
    }

    /**
     * Sets ambiguous_value_id
     *
     * @param string $ambiguous_value_id Indicates what value in the dictionary is defined as an ambiguous one. Only parameters with dictionaries might have this option defined.
     *
     * @return $this
     */
    public function setAmbiguousValueId($ambiguous_value_id)
    {
        $this->container['ambiguous_value_id'] = $ambiguous_value_id;

        return $this;
    }

    /**
     * Gets depends_on_parameter_id
     *
     * @return string
     */
    public function getDependsOnParameterId()
    {
        return $this->container['depends_on_parameter_id'];
    }

    /**
     * Sets depends_on_parameter_id
     *
     * @param string $depends_on_parameter_id Indicates whether this parameter's behaviour depends on another parameter's values: - allowed values (only for dictionary parameters; see: `dictionary[].dependsOnValueIds`), - optionality (see: `requiredDependsOnValueIds`), - visibility (see: `displayDependsOnValueIds`).
     *
     * @return $this
     */
    public function setDependsOnParameterId($depends_on_parameter_id)
    {
        $this->container['depends_on_parameter_id'] = $depends_on_parameter_id;

        return $this;
    }

    /**
     * Gets required_depends_on_value_ids
     *
     * @return string[]
     */
    public function getRequiredDependsOnValueIds()
    {
        return $this->container['required_depends_on_value_ids'];
    }

    /**
     * Sets required_depends_on_value_ids
     *
     * @param string[] $required_depends_on_value_ids Indicates whether this parameter's optionality depends on another parameter's values.  This parameter is required if `require` is `true` and either: - this field is `null` **or** - the parameter that this parameter depends on (see: `dependsOnParameterId`) has set any value ID from this array.  Otherwise this parameter is optional.
     *
     * @return $this
     */
    public function setRequiredDependsOnValueIds($required_depends_on_value_ids)
    {
        $this->container['required_depends_on_value_ids'] = $required_depends_on_value_ids;

        return $this;
    }

    /**
     * Gets display_depends_on_value_ids
     *
     * @return string[]
     */
    public function getDisplayDependsOnValueIds()
    {
        return $this->container['display_depends_on_value_ids'];
    }

    /**
     * Sets display_depends_on_value_ids
     *
     * @param string[] $display_depends_on_value_ids Indicates whether this parameter's visibility depends on another parameter's values.  This parameter is visible if and only if: - this field is `null` **or** - the parameter that this parameter depends on (see: `dependsOnParameterId`) has set any value ID from this array.  Otherwise this parameter will not be displayed anywhere. Setting a value of a hidden parameter is permitted, nonetheless.
     *
     * @return $this
     */
    public function setDisplayDependsOnValueIds($display_depends_on_value_ids)
    {
        $this->container['display_depends_on_value_ids'] = $display_depends_on_value_ids;

        return $this;
    }

    /**
     * Gets describes_product
     *
     * @return bool
     */
    public function getDescribesProduct()
    {
        return $this->container['describes_product'];
    }

    /**
     * Sets describes_product
     *
     * @param bool $describes_product Indicates if parameter is used to define products.
     *
     * @return $this
     */
    public function setDescribesProduct($describes_product)
    {
        $this->container['describes_product'] = $describes_product;

        return $this;
    }

    /**
     * Gets custom_values_enabled
     *
     * @return bool
     */
    public function getCustomValuesEnabled()
    {
        return $this->container['custom_values_enabled'];
    }

    /**
     * Sets custom_values_enabled
     *
     * @param bool $custom_values_enabled Indicates if a custom value can be added to a parameter with an ambiguous value.
     *
     * @return $this
     */
    public function setCustomValuesEnabled($custom_values_enabled)
    {
        $this->container['custom_values_enabled'] = $custom_values_enabled;

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