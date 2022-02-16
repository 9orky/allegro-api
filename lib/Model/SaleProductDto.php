<?php
/**
 * SaleProductDto
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
 * SaleProductDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SaleProductDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SaleProductDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'name' => 'string',
'category' => 'AllOfSaleProductDtoCategory',
'images' => '\Swagger\Client\Model\ImageUrl[]',
'parameters' => '\Swagger\Client\Model\ProductParameterDto[]',
'offer_requirements' => '\Swagger\Client\Model\OfferRequirements',
'compatibility_list' => '\Swagger\Client\Model\SaleProductCompatibilityList',
'tecdoc_specification' => '\Swagger\Client\Model\TecdocSpecification',
'description' => '\Swagger\Client\Model\StandardizedDescription'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'name' => null,
'category' => null,
'images' => null,
'parameters' => null,
'offer_requirements' => null,
'compatibility_list' => null,
'tecdoc_specification' => null,
'description' => null    ];

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
        'id' => 'id',
'name' => 'name',
'category' => 'category',
'images' => 'images',
'parameters' => 'parameters',
'offer_requirements' => 'offerRequirements',
'compatibility_list' => 'compatibilityList',
'tecdoc_specification' => 'tecdocSpecification',
'description' => 'description'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'category' => 'setCategory',
'images' => 'setImages',
'parameters' => 'setParameters',
'offer_requirements' => 'setOfferRequirements',
'compatibility_list' => 'setCompatibilityList',
'tecdoc_specification' => 'setTecdocSpecification',
'description' => 'setDescription'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'category' => 'getCategory',
'images' => 'getImages',
'parameters' => 'getParameters',
'offer_requirements' => 'getOfferRequirements',
'compatibility_list' => 'getCompatibilityList',
'tecdoc_specification' => 'getTecdocSpecification',
'description' => 'getDescription'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['offer_requirements'] = isset($data['offer_requirements']) ? $data['offer_requirements'] : null;
        $this->container['compatibility_list'] = isset($data['compatibility_list']) ? $data['compatibility_list'] : null;
        $this->container['tecdoc_specification'] = isset($data['tecdoc_specification']) ? $data['tecdoc_specification'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Product id.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Product name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets category
     *
     * @return AllOfSaleProductDtoCategory
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param AllOfSaleProductDtoCategory $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets images
     *
     * @return \Swagger\Client\Model\ImageUrl[]
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \Swagger\Client\Model\ImageUrl[] $images List of product images.
     *
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return \Swagger\Client\Model\ProductParameterDto[]
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param \Swagger\Client\Model\ProductParameterDto[] $parameters List of product parameters.
     *
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets offer_requirements
     *
     * @return \Swagger\Client\Model\OfferRequirements
     */
    public function getOfferRequirements()
    {
        return $this->container['offer_requirements'];
    }

    /**
     * Sets offer_requirements
     *
     * @param \Swagger\Client\Model\OfferRequirements $offer_requirements offer_requirements
     *
     * @return $this
     */
    public function setOfferRequirements($offer_requirements)
    {
        $this->container['offer_requirements'] = $offer_requirements;

        return $this;
    }

    /**
     * Gets compatibility_list
     *
     * @return \Swagger\Client\Model\SaleProductCompatibilityList
     */
    public function getCompatibilityList()
    {
        return $this->container['compatibility_list'];
    }

    /**
     * Sets compatibility_list
     *
     * @param \Swagger\Client\Model\SaleProductCompatibilityList $compatibility_list compatibility_list
     *
     * @return $this
     */
    public function setCompatibilityList($compatibility_list)
    {
        $this->container['compatibility_list'] = $compatibility_list;

        return $this;
    }

    /**
     * Gets tecdoc_specification
     *
     * @return \Swagger\Client\Model\TecdocSpecification
     */
    public function getTecdocSpecification()
    {
        return $this->container['tecdoc_specification'];
    }

    /**
     * Sets tecdoc_specification
     *
     * @param \Swagger\Client\Model\TecdocSpecification $tecdoc_specification tecdoc_specification
     *
     * @return $this
     */
    public function setTecdocSpecification($tecdoc_specification)
    {
        $this->container['tecdoc_specification'] = $tecdoc_specification;

        return $this;
    }

    /**
     * Gets description
     *
     * @return \Swagger\Client\Model\StandardizedDescription
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \Swagger\Client\Model\StandardizedDescription $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
