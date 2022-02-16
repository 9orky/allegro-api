<?php
/**
 * CheckoutFormStatus
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
use \Swagger\Client\ObjectSerializer;

/**
 * CheckoutFormStatus Class Doc Comment
 *
 * @category Class
 * @description Describes status of the form delivery and purchase options based on payment and purchase status. * &#x60;BOUGHT&#x60; - purchase without checkout form filled in * &#x60;FILLED_IN&#x60; - checkout form filled in but payment is not completed yet so data could still change * &#x60;READY_FOR_PROCESSING&#x60; - payment completed. Purchase is ready for processing. * &#x60;CANCELLED&#x60; - purchase cancelled by buyer.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CheckoutFormStatus
{
    /**
     * Possible values of this enum
     */
    const BOUGHT = 'BOUGHT';
const FILLED_IN = 'FILLED_IN';
const READY_FOR_PROCESSING = 'READY_FOR_PROCESSING';
const CANCELLED = 'CANCELLED';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BOUGHT,
self::FILLED_IN,
self::READY_FOR_PROCESSING,
self::CANCELLED,        ];
    }
}