# Swagger\Client\DeliveryApi

All URIs are relative to *https://api.{environment}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createShippingRatesSetUsingPOST**](DeliveryApi.md#createshippingratessetusingpost) | **POST** /sale/shipping-rates | Create a new shipping rates set
[**getListOfDeliveryMethodsUsingGET**](DeliveryApi.md#getlistofdeliverymethodsusingget) | **GET** /sale/delivery-methods | Get the list of delivery methods
[**getListOfShippingRatestUsingGET**](DeliveryApi.md#getlistofshippingratestusingget) | **GET** /sale/shipping-rates | Get the user&#x27;s shipping rates
[**getOfferShippingRatesGET**](DeliveryApi.md#getoffershippingratesget) | **GET** /sale/offers/{offerId}/shipping-rates | [BETA] Get shipping rates assigned to an offer
[**getSaleDeliverySettings**](DeliveryApi.md#getsaledeliverysettings) | **GET** /sale/delivery-settings | Get the user&#x27;s delivery settings
[**getShippingRatesSetUsingGET**](DeliveryApi.md#getshippingratessetusingget) | **GET** /sale/shipping-rates/{id} | Get the details of a shipping rates set
[**modifyShippingRatesSetUsingPUT**](DeliveryApi.md#modifyshippingratessetusingput) | **PUT** /sale/shipping-rates/{id} | Edit a user&#x27;s shipping rates set
[**putSaleDeliverySettings**](DeliveryApi.md#putsaledeliverysettings) | **PUT** /sale/delivery-settings | Modify the user&#x27;s delivery settings

# **createShippingRatesSetUsingPOST**
> \Swagger\Client\Model\ShippingRatesSet createShippingRatesSetUsingPOST($body)

Create a new shipping rates set

Use this resource to create a new seller's shipping rates set. Read more: <a href=\"../../sale/#cennik-dostaw\" target=\"_blank\">PL</a> / <a href=\"../../en/sale/#shipping-price-list\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ShippingRatesSet(); // \Swagger\Client\Model\ShippingRatesSet | Shipping rates set

try {
    $result = $apiInstance->createShippingRatesSetUsingPOST($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryApi->createShippingRatesSetUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ShippingRatesSet**](../Model/ShippingRatesSet.md)| Shipping rates set |

### Return type

[**\Swagger\Client\Model\ShippingRatesSet**](../Model/ShippingRatesSet.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListOfDeliveryMethodsUsingGET**
> \Swagger\Client\Model\InlineResponse2001 getListOfDeliveryMethodsUsingGET()

Get the list of delivery methods

Use this resource to get a list of all delivery methods currently available on the platform, as well as those that have already been discontinued. Read more: <a href=\"../../sale/#cennik-dostaw\" target=\"_blank\">PL</a> / <a href=\"../../en/sale/#shipping-price-list\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getListOfDeliveryMethodsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryApi->getListOfDeliveryMethodsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[bearer-token-for-application](../../README.md#bearer-token-for-application), [bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListOfShippingRatestUsingGET**
> \Swagger\Client\Model\InlineResponse200 getListOfShippingRatestUsingGET()

Get the user's shipping rates

Use this resource to get a list of seller's shipping rates. Read more: <a href=\"../../sale/#cennik-dostaw\" target=\"_blank\">PL</a> / <a href=\"../../en/sale/#shipping-price-list\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getListOfShippingRatestUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryApi->getListOfShippingRatestUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOfferShippingRatesGET**
> \Swagger\Client\Model\OfferShippingRates getOfferShippingRatesGET($offer_id)

[BETA] Get shipping rates assigned to an offer

Use this resource to get the delivery methods and costs defined in the offer when there is no seller's shipping rates set attached to offer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = "offer_id_example"; // string | Offer identifier.

try {
    $result = $apiInstance->getOfferShippingRatesGET($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryApi->getOfferShippingRatesGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Offer identifier. |

### Return type

[**\Swagger\Client\Model\OfferShippingRates**](../Model/OfferShippingRates.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.beta.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSaleDeliverySettings**
> \Swagger\Client\Model\DeliverySettingsDto getSaleDeliverySettings()

Get the user's delivery settings

Use this resource to get the delivery settings declared by the seller. Read more: <a href=\"../../sale/#ustawienia-dostawy\" target=\"_blank\">PL</a> / <a href=\"../../en/sale/#delivery-settings\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSaleDeliverySettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryApi->getSaleDeliverySettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DeliverySettingsDto**](../Model/DeliverySettingsDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShippingRatesSetUsingGET**
> \Swagger\Client\Model\ShippingRatesSet getShippingRatesSetUsingGET($id)

Get the details of a shipping rates set

Use this resource to get details of the given shipping rates set. Read more: <a href=\"../../sale/#cennik-dostaw\" target=\"_blank\">PL</a> / <a href=\"../../en/sale/#shipping-price-list\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Shipping rates set identifier.

try {
    $result = $apiInstance->getShippingRatesSetUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryApi->getShippingRatesSetUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Shipping rates set identifier. |

### Return type

[**\Swagger\Client\Model\ShippingRatesSet**](../Model/ShippingRatesSet.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyShippingRatesSetUsingPUT**
> \Swagger\Client\Model\ShippingRatesSet modifyShippingRatesSetUsingPUT($body, $id)

Edit a user's shipping rates set

Use this resource to edit a new seller's shipping rates set. Read more: <a href=\"../../sale/#cennik-dostaw\" target=\"_blank\">PL</a> / <a href=\"../../en/sale/#shipping-price-list\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ShippingRatesSet(); // \Swagger\Client\Model\ShippingRatesSet | Shipping rates set
$id = "id_example"; // string | Shipping rates set identifier.

try {
    $result = $apiInstance->modifyShippingRatesSetUsingPUT($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryApi->modifyShippingRatesSetUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ShippingRatesSet**](../Model/ShippingRatesSet.md)| Shipping rates set |
 **id** | **string**| Shipping rates set identifier. |

### Return type

[**\Swagger\Client\Model\ShippingRatesSet**](../Model/ShippingRatesSet.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSaleDeliverySettings**
> \Swagger\Client\Model\DeliverySettingsDto putSaleDeliverySettings()

Modify the user's delivery settings

Use this resource to modify the delivery settings declared by the seller. Read more: <a href=\"../../sale/#ustawienia-dostawy\" target=\"_blank\">PL</a> / <a href=\"../../en/sale/#delivery-settings\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->putSaleDeliverySettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryApi->putSaleDeliverySettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DeliverySettingsDto**](../Model/DeliverySettingsDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

