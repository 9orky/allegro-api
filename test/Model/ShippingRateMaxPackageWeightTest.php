<?php
/**
 * ShippingRateMaxPackageWeightTest
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
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * ShippingRateMaxPackageWeightTest Class Doc Comment
 *
 * @category    Class
 * @description Maximum weight of a package for the given delivery method (allowed only for methods with shippingRatesConstraints.maxPackageWeight.supported set to true in the delivery-methods resource). If not set, only maxQuantityPerPackage will be used to calculate the number of packages. Please note that the weight value must be the same for both related delivery methods, i.e. with &#x60;IN_ADVANCE&#x60; and &#x60;CASH_ON_DELIVERY&#x60; payment policy if both methods are in the shipping rates set.
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ShippingRateMaxPackageWeightTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "ShippingRateMaxPackageWeight"
     */
    public function testShippingRateMaxPackageWeight()
    {
    }

    /**
     * Test attribute "value"
     */
    public function testPropertyValue()
    {
    }

    /**
     * Test attribute "unit"
     */
    public function testPropertyUnit()
    {
    }
}
