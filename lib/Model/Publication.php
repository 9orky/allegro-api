<?php
/**
 * Publication
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
 * Publication Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Publication implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Publication';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'duration' => '\Swagger\Client\Model\OfferDuration',
'ending_at' => '\Swagger\Client\Model\OfferEndingAt',
'starting_at' => '\Swagger\Client\Model\OfferStartingAt',
'status' => '\Swagger\Client\Model\OfferStatus',
'ended_by' => 'string',
'republish' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'duration' => null,
'ending_at' => null,
'starting_at' => null,
'status' => null,
'ended_by' => null,
'republish' => null    ];

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
        'duration' => 'duration',
'ending_at' => 'endingAt',
'starting_at' => 'startingAt',
'status' => 'status',
'ended_by' => 'endedBy',
'republish' => 'republish'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'duration' => 'setDuration',
'ending_at' => 'setEndingAt',
'starting_at' => 'setStartingAt',
'status' => 'setStatus',
'ended_by' => 'setEndedBy',
'republish' => 'setRepublish'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'duration' => 'getDuration',
'ending_at' => 'getEndingAt',
'starting_at' => 'getStartingAt',
'status' => 'getStatus',
'ended_by' => 'getEndedBy',
'republish' => 'getRepublish'    ];

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

    const ENDED_BY_USER = 'USER';
const ENDED_BY_ADMIN = 'ADMIN';
const ENDED_BY_EXPIRATION = 'EXPIRATION';
const ENDED_BY_EMPTY_STOCK = 'EMPTY_STOCK';
const ENDED_BY_ERROR = 'ERROR';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEndedByAllowableValues()
    {
        return [
            self::ENDED_BY_USER,
self::ENDED_BY_ADMIN,
self::ENDED_BY_EXPIRATION,
self::ENDED_BY_EMPTY_STOCK,
self::ENDED_BY_ERROR,        ];
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
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['ending_at'] = isset($data['ending_at']) ? $data['ending_at'] : null;
        $this->container['starting_at'] = isset($data['starting_at']) ? $data['starting_at'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['ended_by'] = isset($data['ended_by']) ? $data['ended_by'] : null;
        $this->container['republish'] = isset($data['republish']) ? $data['republish'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getEndedByAllowableValues();
        if (!is_null($this->container['ended_by']) && !in_array($this->container['ended_by'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'ended_by', must be one of '%s'",
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
     * Gets duration
     *
     * @return \Swagger\Client\Model\OfferDuration
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param \Swagger\Client\Model\OfferDuration $duration duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets ending_at
     *
     * @return \Swagger\Client\Model\OfferEndingAt
     */
    public function getEndingAt()
    {
        return $this->container['ending_at'];
    }

    /**
     * Sets ending_at
     *
     * @param \Swagger\Client\Model\OfferEndingAt $ending_at ending_at
     *
     * @return $this
     */
    public function setEndingAt($ending_at)
    {
        $this->container['ending_at'] = $ending_at;

        return $this;
    }

    /**
     * Gets starting_at
     *
     * @return \Swagger\Client\Model\OfferStartingAt
     */
    public function getStartingAt()
    {
        return $this->container['starting_at'];
    }

    /**
     * Sets starting_at
     *
     * @param \Swagger\Client\Model\OfferStartingAt $starting_at starting_at
     *
     * @return $this
     */
    public function setStartingAt($starting_at)
    {
        $this->container['starting_at'] = $starting_at;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Swagger\Client\Model\OfferStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Swagger\Client\Model\OfferStatus $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets ended_by
     *
     * @return string
     */
    public function getEndedBy()
    {
        return $this->container['ended_by'];
    }

    /**
     * Sets ended_by
     *
     * @param string $ended_by Indicates the reason for ending the offer:  - `USER` - offer ended by the seller.  - `ADMIN` - offer ended by an admin.  - `EXPIRATION` - offer duration had expired (valid for offers with specified duration).  - `EMPTY_STOCK` - offer ended because all available items had been sold out.  - `ERROR` - offer ended due to internal problem with offer publication. The publication command responded with    success status, but further processing failed.
     *
     * @return $this
     */
    public function setEndedBy($ended_by)
    {
        $allowedValues = $this->getEndedByAllowableValues();
        if (!is_null($ended_by) && !in_array($ended_by, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'ended_by', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ended_by'] = $ended_by;

        return $this;
    }

    /**
     * Gets republish
     *
     * @return bool
     */
    public function getRepublish()
    {
        return $this->container['republish'];
    }

    /**
     * Sets republish
     *
     * @param bool $republish Whether to republish an offer after ending. Automatically republish offers or auctions:</br> - `BUY_NOW` offer type are republished with initial stock, regardless of how many items you have sold.</br> - `AUCTION` offer type are republished only if they were not concluded with purchase.</br> - `ADVERTISEMENT` offer type are republished until it will be finished manually.
     *
     * @return $this
     */
    public function setRepublish($republish)
    {
        $this->container['republish'] = $republish;

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
