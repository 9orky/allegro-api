<?php
/**
 * InitializeRefund
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
 * InitializeRefund Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InitializeRefund implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InitializeRefund';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'payment' => '\Swagger\Client\Model\RefundPayment',
'reason' => 'string',
'line_items' => '\Swagger\Client\Model\RefundLineItem[]',
'delivery' => '\Swagger\Client\Model\InitializeRefundDelivery',
'overpaid' => '\Swagger\Client\Model\InitializeRefundOverpaid',
'surcharges' => '\Swagger\Client\Model\PaymentsSurcharge[]',
'additional_services' => '\Swagger\Client\Model\InitializeRefundAdditionalServices',
'seller_comment' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'payment' => null,
'reason' => null,
'line_items' => null,
'delivery' => null,
'overpaid' => null,
'surcharges' => null,
'additional_services' => null,
'seller_comment' => null    ];

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
        'payment' => 'payment',
'reason' => 'reason',
'line_items' => 'lineItems',
'delivery' => 'delivery',
'overpaid' => 'overpaid',
'surcharges' => 'surcharges',
'additional_services' => 'additionalServices',
'seller_comment' => 'sellerComment'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment' => 'setPayment',
'reason' => 'setReason',
'line_items' => 'setLineItems',
'delivery' => 'setDelivery',
'overpaid' => 'setOverpaid',
'surcharges' => 'setSurcharges',
'additional_services' => 'setAdditionalServices',
'seller_comment' => 'setSellerComment'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment' => 'getPayment',
'reason' => 'getReason',
'line_items' => 'getLineItems',
'delivery' => 'getDelivery',
'overpaid' => 'getOverpaid',
'surcharges' => 'getSurcharges',
'additional_services' => 'getAdditionalServices',
'seller_comment' => 'getSellerComment'    ];

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

    const REASON_REFUND = 'REFUND';
const REASON_COMPLAINT = 'COMPLAINT';
const REASON_PRODUCT_NOT_AVAILABLE = 'PRODUCT_NOT_AVAILABLE';
const REASON_PAID_VALUE_TOO_LOW = 'PAID_VALUE_TOO_LOW';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReasonAllowableValues()
    {
        return [
            self::REASON_REFUND,
self::REASON_COMPLAINT,
self::REASON_PRODUCT_NOT_AVAILABLE,
self::REASON_PAID_VALUE_TOO_LOW,        ];
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
        $this->container['payment'] = isset($data['payment']) ? $data['payment'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['line_items'] = isset($data['line_items']) ? $data['line_items'] : null;
        $this->container['delivery'] = isset($data['delivery']) ? $data['delivery'] : null;
        $this->container['overpaid'] = isset($data['overpaid']) ? $data['overpaid'] : null;
        $this->container['surcharges'] = isset($data['surcharges']) ? $data['surcharges'] : null;
        $this->container['additional_services'] = isset($data['additional_services']) ? $data['additional_services'] : null;
        $this->container['seller_comment'] = isset($data['seller_comment']) ? $data['seller_comment'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['payment'] === null) {
            $invalidProperties[] = "'payment' can't be null";
        }
        if ($this->container['reason'] === null) {
            $invalidProperties[] = "'reason' can't be null";
        }
        $allowedValues = $this->getReasonAllowableValues();
        if (!is_null($this->container['reason']) && !in_array($this->container['reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'reason', must be one of '%s'",
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
     * Gets payment
     *
     * @return \Swagger\Client\Model\RefundPayment
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \Swagger\Client\Model\RefundPayment $payment payment
     *
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason Reason for a payment refund.
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $allowedValues = $this->getReasonAllowableValues();
        if (!in_array($reason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reason', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \Swagger\Client\Model\RefundLineItem[]
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \Swagger\Client\Model\RefundLineItem[] $line_items List of order's line items which can be refunded.
     *
     * @return $this
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets delivery
     *
     * @return \Swagger\Client\Model\InitializeRefundDelivery
     */
    public function getDelivery()
    {
        return $this->container['delivery'];
    }

    /**
     * Sets delivery
     *
     * @param \Swagger\Client\Model\InitializeRefundDelivery $delivery delivery
     *
     * @return $this
     */
    public function setDelivery($delivery)
    {
        $this->container['delivery'] = $delivery;

        return $this;
    }

    /**
     * Gets overpaid
     *
     * @return \Swagger\Client\Model\InitializeRefundOverpaid
     */
    public function getOverpaid()
    {
        return $this->container['overpaid'];
    }

    /**
     * Sets overpaid
     *
     * @param \Swagger\Client\Model\InitializeRefundOverpaid $overpaid overpaid
     *
     * @return $this
     */
    public function setOverpaid($overpaid)
    {
        $this->container['overpaid'] = $overpaid;

        return $this;
    }

    /**
     * Gets surcharges
     *
     * @return \Swagger\Client\Model\PaymentsSurcharge[]
     */
    public function getSurcharges()
    {
        return $this->container['surcharges'];
    }

    /**
     * Sets surcharges
     *
     * @param \Swagger\Client\Model\PaymentsSurcharge[] $surcharges List of surcharges for payment which can be refunded.
     *
     * @return $this
     */
    public function setSurcharges($surcharges)
    {
        $this->container['surcharges'] = $surcharges;

        return $this;
    }

    /**
     * Gets additional_services
     *
     * @return \Swagger\Client\Model\InitializeRefundAdditionalServices
     */
    public function getAdditionalServices()
    {
        return $this->container['additional_services'];
    }

    /**
     * Sets additional_services
     *
     * @param \Swagger\Client\Model\InitializeRefundAdditionalServices $additional_services additional_services
     *
     * @return $this
     */
    public function setAdditionalServices($additional_services)
    {
        $this->container['additional_services'] = $additional_services;

        return $this;
    }

    /**
     * Gets seller_comment
     *
     * @return string
     */
    public function getSellerComment()
    {
        return $this->container['seller_comment'];
    }

    /**
     * Sets seller_comment
     *
     * @param string $seller_comment Sellers optional justification for refund.
     *
     * @return $this
     */
    public function setSellerComment($seller_comment)
    {
        $this->container['seller_comment'] = $seller_comment;

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
