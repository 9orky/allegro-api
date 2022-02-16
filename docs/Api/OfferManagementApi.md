# Swagger\Client\OfferManagementApi

All URIs are relative to *https://api.{environment}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changePublicationStatusUsingPUT**](OfferManagementApi.md#changepublicationstatususingput) | **PUT** /sale/offer-publication-commands/{commandId} | Batch offer publish / unpublish
[**createChangePriceCommandUsingPUT**](OfferManagementApi.md#createchangepricecommandusingput) | **PUT** /offers/{offerId}/change-price-commands/{commandId} | Modify the Buy Now price in an offer
[**createOfferUsingPOST**](OfferManagementApi.md#createofferusingpost) | **POST** /sale/offers | Create a draft offer
[**createProductOffers**](OfferManagementApi.md#createproductoffers) | **POST** /sale/product-offers | Create offer based on product
[**deleteOfferUsingDELETE**](OfferManagementApi.md#deleteofferusingdelete) | **DELETE** /sale/offers/{offerId} | Delete a draft offer
[**editProductOffers**](OfferManagementApi.md#editproductoffers) | **PATCH** /sale/product-offers/{offerId} | Edit an offer
[**getAvailableOfferPromotionPackages**](OfferManagementApi.md#getavailableofferpromotionpackages) | **GET** /sale/offer-promotion-packages | Get all available offer promotion packages
[**getOfferPromoOptionsUsingGET**](OfferManagementApi.md#getofferpromooptionsusingget) | **GET** /sale/offers/{offerId}/promo-options | Get offer promotion packages
[**getOffersUnfilledParametersUsingGET1**](OfferManagementApi.md#getoffersunfilledparametersusingget1) | **GET** /sale/offers/unfilled-parameters | Get offers with missing parameters
[**getProductOffer**](OfferManagementApi.md#getproductoffer) | **GET** /sale/product-offers/{offerId} | Get all data of the particular product-offer
[**getProductOfferProcessingStatus**](OfferManagementApi.md#getproductofferprocessingstatus) | **GET** /sale/product-offers/{offerId}/operations/{operationId} | Check the processing status of a POST or PATCH request
[**getPromoModificationCommandDetailedResultUsingGET**](OfferManagementApi.md#getpromomodificationcommanddetailedresultusingget) | **GET** /sale/offers/promo-options-commands/{commandId}/tasks | Modification command detailed result
[**getPromoModificationCommandResultUsingGET**](OfferManagementApi.md#getpromomodificationcommandresultusingget) | **GET** /sale/offers/promo-options-commands/{commandId} | Modification command summary
[**getPublicationReportUsingGET**](OfferManagementApi.md#getpublicationreportusingget) | **GET** /sale/offer-publication-commands/{commandId} | Publish command summary
[**getPublicationTasksUsingGET**](OfferManagementApi.md#getpublicationtasksusingget) | **GET** /sale/offer-publication-commands/{commandId}/tasks | Publish command detailed report
[**modifyOfferPromoOptionsUsingPOST**](OfferManagementApi.md#modifyofferpromooptionsusingpost) | **POST** /sale/offers/{offerId}/promo-options-modification | Modify offer promotion packages
[**promoModificationCommandUsingPUT**](OfferManagementApi.md#promomodificationcommandusingput) | **PUT** /sale/offers/promo-options-commands/{commandId} | Batch offer promotion package modification
[**updateOfferUsingPUT**](OfferManagementApi.md#updateofferusingput) | **PUT** /sale/offers/{offerId} | Complete a draft offer or edit an offer

# **changePublicationStatusUsingPUT**
> \Swagger\Client\Model\GeneralReport changePublicationStatusUsingPUT($body, $command_id)

Batch offer publish / unpublish

Use this resource to modify multiple offers publication at once. Read more: <a href=\"../../sale/#13-publikacja-oferty\" target=\"_blank\">PL</a> / <a href=\"../../en/sale/#13-offer-publication\" target=\"_blank\">EN</a>. This resource is rate limited to 1000000 offer changes per hour.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PublicationChangeCommandDto(); // \Swagger\Client\Model\PublicationChangeCommandDto | publicationChangeCommandDto
$command_id = "command_id_example"; // string | Command identifier.

try {
    $result = $apiInstance->changePublicationStatusUsingPUT($body, $command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->changePublicationStatusUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PublicationChangeCommandDto**](../Model/PublicationChangeCommandDto.md)| publicationChangeCommandDto |
 **command_id** | **string**| Command identifier. |

### Return type

[**\Swagger\Client\Model\GeneralReport**](../Model/GeneralReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createChangePriceCommandUsingPUT**
> \Swagger\Client\Model\ChangePrice createChangePriceCommandUsingPUT($body, $offer_id, $command_id)

Modify the Buy Now price in an offer

Use this resource to change the Buy Now price in a single offer. Read more: <a href=\"../../news/2016-08-01-zmiana-ceny/\" target=\"_blank\">PL</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ChangePriceWithoutOutput(); // \Swagger\Client\Model\ChangePriceWithoutOutput | 
$offer_id = "offer_id_example"; // string | The offer identifier.
$command_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The unique command id generated by you.

try {
    $result = $apiInstance->createChangePriceCommandUsingPUT($body, $offer_id, $command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->createChangePriceCommandUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ChangePriceWithoutOutput**](../Model/ChangePriceWithoutOutput.md)|  |
 **offer_id** | **string**| The offer identifier. |
 **command_id** | [**string**](../Model/.md)| The unique command id generated by you. |

### Return type

[**\Swagger\Client\Model\ChangePrice**](../Model/ChangePrice.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOfferUsingPOST**
> \Swagger\Client\Model\Offer createOfferUsingPOST($body)

Create a draft offer

Use this resource to create a draft offer. Read more: <a href=\"../../sale/#1-draft-oferty\" target=\"_blank\">PL</a> / <a href=\"../../en/sale/#1-offer-draft\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Offer(); // \Swagger\Client\Model\Offer | offer

try {
    $result = $apiInstance->createOfferUsingPOST($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->createOfferUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Offer**](../Model/Offer.md)| offer |

### Return type

[**\Swagger\Client\Model\Offer**](../Model/Offer.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProductOffers**
> \Swagger\Client\Model\SaleProductOfferResponseV1 createProductOffers($body)

Create offer based on product

Use this resource to create offer based on product. Read more: <a href=\"../../product_offers/\" target=\"_blank\">PL</a> / <a href=\"../../en/product_offers/\" target=\"_blank\">EN</a>. Note that requests may be limited.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SaleProductOfferRequestV1(); // \Swagger\Client\Model\SaleProductOfferRequestV1 | 

try {
    $result = $apiInstance->createProductOffers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->createProductOffers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SaleProductOfferRequestV1**](../Model/SaleProductOfferRequestV1.md)|  |

### Return type

[**\Swagger\Client\Model\SaleProductOfferResponseV1**](../Model/SaleProductOfferResponseV1.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json, application/vnd.allegro.beta.v2+json, application/vnd.allegro.beta.v3+json
 - **Accept**: application/vnd.allegro.public.v1+json, application/vnd.allegro.beta.v2+json, application/vnd.allegro.beta.v3+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProductOffers**
> \Swagger\Client\Model\SaleProductOfferResponseV1 createProductOffers($body)

Create offer based on product

Use this resource to create offer based on product. Read more: <a href=\"../../product_offers/\" target=\"_blank\">PL</a> / <a href=\"../../en/product_offers/\" target=\"_blank\">EN</a>. Note that requests may be limited.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SaleProductOfferRequestV1(); // \Swagger\Client\Model\SaleProductOfferRequestV1 | 

try {
    $result = $apiInstance->createProductOffers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->createProductOffers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SaleProductOfferRequestV1**](../Model/SaleProductOfferRequestV1.md)|  |

### Return type

[**\Swagger\Client\Model\SaleProductOfferResponseV1**](../Model/SaleProductOfferResponseV1.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json, application/vnd.allegro.beta.v2+json, application/vnd.allegro.beta.v3+json
 - **Accept**: application/vnd.allegro.public.v1+json, application/vnd.allegro.beta.v2+json, application/vnd.allegro.beta.v3+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOfferUsingDELETE**
> deleteOfferUsingDELETE($offer_id)

Delete a draft offer

Use this resource to delete a draft offer. Read more: <a href=\"../../news/2018-10-09_draft_delete\" target=\"_blank\">PL</a> / <a href=\"../../en/news/2018-10-09_draft_delete\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = "offer_id_example"; // string | Offer identifier.

try {
    $apiInstance->deleteOfferUsingDELETE($offer_id);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->deleteOfferUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Offer identifier. |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editProductOffers**
> \Swagger\Client\Model\SaleProductOfferResponseV1 editProductOffers($body, $offer_id)

Edit an offer

Use this resource to edit offer. Read more: <a href=\"../../product_offers/#jak-edytować-ofertę\" target=\"_blank\">PL</a> / <a href=\"../../en/product_offers/#how-to-edit-an-offer\" target=\"_blank\">EN</a>. Note that requests may be limited.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SaleProductOfferPatchRequestV1(); // \Swagger\Client\Model\SaleProductOfferPatchRequestV1 | 
$offer_id = "offer_id_example"; // string | The offer identifier.

try {
    $result = $apiInstance->editProductOffers($body, $offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->editProductOffers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SaleProductOfferPatchRequestV1**](../Model/SaleProductOfferPatchRequestV1.md)|  |
 **offer_id** | **string**| The offer identifier. |

### Return type

[**\Swagger\Client\Model\SaleProductOfferResponseV1**](../Model/SaleProductOfferResponseV1.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json, application/vnd.allegro.beta.v2+json, application/vnd.allegro.beta.v3+json
 - **Accept**: application/vnd.allegro.public.v1+json, application/vnd.allegro.beta.v2+json, application/vnd.allegro.beta.v3+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editProductOffers**
> \Swagger\Client\Model\SaleProductOfferResponseV1 editProductOffers($body, $offer_id)

Edit an offer

Use this resource to edit offer. Read more: <a href=\"../../product_offers/#jak-edytować-ofertę\" target=\"_blank\">PL</a> / <a href=\"../../en/product_offers/#how-to-edit-an-offer\" target=\"_blank\">EN</a>. Note that requests may be limited.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SaleProductOfferPatchRequestV1(); // \Swagger\Client\Model\SaleProductOfferPatchRequestV1 | 
$offer_id = "offer_id_example"; // string | The offer identifier.

try {
    $result = $apiInstance->editProductOffers($body, $offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->editProductOffers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SaleProductOfferPatchRequestV1**](../Model/SaleProductOfferPatchRequestV1.md)|  |
 **offer_id** | **string**| The offer identifier. |

### Return type

[**\Swagger\Client\Model\SaleProductOfferResponseV1**](../Model/SaleProductOfferResponseV1.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json, application/vnd.allegro.beta.v2+json, application/vnd.allegro.beta.v3+json
 - **Accept**: application/vnd.allegro.public.v1+json, application/vnd.allegro.beta.v2+json, application/vnd.allegro.beta.v3+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAvailableOfferPromotionPackages**
> \Swagger\Client\Model\AvailablePromotionPackages getAvailableOfferPromotionPackages()

Get all available offer promotion packages

Use this resource to retrieve all available offer promotion packages. Read more: <a href=\"../../my_offers/#jak-pobrać-dostępne-opcje-promowania\" target=\"_blank\">PL</a> / <a href=\"../../en/my_offers/#how-to-retrieve-available-promo-options\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAvailableOfferPromotionPackages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getAvailableOfferPromotionPackages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\AvailablePromotionPackages**](../Model/AvailablePromotionPackages.md)

### Authorization

[bearer-token-for-application](../../README.md#bearer-token-for-application), [bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOfferPromoOptionsUsingGET**
> \Swagger\Client\Model\OfferPromoOptions getOfferPromoOptionsUsingGET($offer_id)

Get offer promotion packages

Use this resource to get promotion packages assigned to an offer. Read more: <a href=\"../../my_offers/#jak-pobrać-opcje-promowania-przypisane-do-oferty\" target=\"_blank\">PL</a> / <a href=\"../../en/my_offers/#how-to-retrieve-promo-options-assigned-to-an-offer\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = "offer_id_example"; // string | Offer identifier.

try {
    $result = $apiInstance->getOfferPromoOptionsUsingGET($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getOfferPromoOptionsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Offer identifier. |

### Return type

[**\Swagger\Client\Model\OfferPromoOptions**](../Model/OfferPromoOptions.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOffersUnfilledParametersUsingGET1**
> \Swagger\Client\Model\UnfilledParametersResponse getOffersUnfilledParametersUsingGET1($offer_id, $parameter_type, $offset, $limit)

Get offers with missing parameters

Use this resource to get information about required parameters or parameters scheduled to become required that are not filled in offers. Read more: <a href=\"../../my_offers/#jak-sprawdzić-nieuzupełnione-parametry-w-ofertach\" target=\"_blank\">PL</a> / <a href=\"../../en/my_offers/#how-to-check-unfilled-parameters-in-offers\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = array("offer_id_example"); // string[] | List of offer ids. If empty all offers with unfilled parameters will be returned.
$parameter_type = "parameter_type_example"; // string | Filter by parameter type.
$offset = 0; // int | The offset of elements in the response.
$limit = 100; // int | The limit of elements in the response.

try {
    $result = $apiInstance->getOffersUnfilledParametersUsingGET1($offer_id, $parameter_type, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getOffersUnfilledParametersUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | [**string[]**](../Model/string.md)| List of offer ids. If empty all offers with unfilled parameters will be returned. | [optional]
 **parameter_type** | **string**| Filter by parameter type. | [optional]
 **offset** | **int**| The offset of elements in the response. | [optional] [default to 0]
 **limit** | **int**| The limit of elements in the response. | [optional] [default to 100]

### Return type

[**\Swagger\Client\Model\UnfilledParametersResponse**](../Model/UnfilledParametersResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductOffer**
> \Swagger\Client\Model\SaleProductOfferResponseV1 getProductOffer($offer_id)

Get all data of the particular product-offer

Use this resource to retrieve all data of the particular product-offer. Read more: <a href=\"../../product_offers/#publikacja-oferty-w-asynchronicznym-api\" target=\"_blank\">PL</a> / <a href=\"../../en/product_offers/#offer-publication-in-asynchronous-api\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = "offer_id_example"; // string | Offer identifier.

try {
    $result = $apiInstance->getProductOffer($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getProductOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Offer identifier. |

### Return type

[**\Swagger\Client\Model\SaleProductOfferResponseV1**](../Model/SaleProductOfferResponseV1.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json, application/vnd.allegro.beta.v2+json, application/vnd.allegro.beta.v3+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductOfferProcessingStatus**
> \Swagger\Client\Model\SaleProductOfferStatusResponse getProductOfferProcessingStatus($offer_id, $operation_id)

Check the processing status of a POST or PATCH request

The URI for the resource given by Location header of POST /sale/product-offers and PATCH /sale/product-offers/{offerId}. Use this resource to check processing status of a POST or PATCH request. Read more: <a href=\"../../product_offers/#publikacja-oferty-w-asynchronicznym-api\" target=\"_blank\">PL</a> / <a href=\"../../en/product_offers/#offer-publication-in-asynchronous-api\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = "offer_id_example"; // string | Offer identifier.
$operation_id = "operation_id_example"; // string | Operation identifier provided in location header of POST or PATCH request.

try {
    $result = $apiInstance->getProductOfferProcessingStatus($offer_id, $operation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getProductOfferProcessingStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Offer identifier. |
 **operation_id** | **string**| Operation identifier provided in location header of POST or PATCH request. |

### Return type

[**\Swagger\Client\Model\SaleProductOfferStatusResponse**](../Model/SaleProductOfferStatusResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json, application/vnd.allegro.beta.v2+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPromoModificationCommandDetailedResultUsingGET**
> \Swagger\Client\Model\PromoModificationReport getPromoModificationCommandDetailedResultUsingGET($command_id, $limit, $offset)

Modification command detailed result

Use this resource to retrieve the result of an offer modification command. Read more: <a href=\"../../my_offers/#jak-sprawdzić-szczegółowy-raport-zadania \" target=\"_blank\">PL</a> / <a href=\"../../en/my_offers/#how-to-check-a-detailed-report-of-your-task \" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = "command_id_example"; // string | Command identifier.
$limit = 100; // int | The limit of returned items.
$offset = 0; // int | The offset of returned items.

try {
    $result = $apiInstance->getPromoModificationCommandDetailedResultUsingGET($command_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getPromoModificationCommandDetailedResultUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| Command identifier. |
 **limit** | **int**| The limit of returned items. | [optional] [default to 100]
 **offset** | **int**| The offset of returned items. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\PromoModificationReport**](../Model/PromoModificationReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPromoModificationCommandResultUsingGET**
> \Swagger\Client\Model\GeneralReport getPromoModificationCommandResultUsingGET($command_id)

Modification command summary

Use this resource to find out how many offers were edited within one {commandId}. You will receive a summary with a number of successfully edited offers and errors. Read more: <a href=\"../../my_offers/#jak-dodać-lub-edytować-opcje-promowania-na-wielu-ofertach\" target=\"_blank\">PL</a> / <a href=\"../../en/my_offers/#how-to-add-or-change-promo-options-in-multiple-offers\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = "command_id_example"; // string | Command identifier.

try {
    $result = $apiInstance->getPromoModificationCommandResultUsingGET($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getPromoModificationCommandResultUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| Command identifier. |

### Return type

[**\Swagger\Client\Model\GeneralReport**](../Model/GeneralReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublicationReportUsingGET**
> \Swagger\Client\Model\GeneralReport getPublicationReportUsingGET($command_id)

Publish command summary

Use this resource to retrieve information about the offer listing statuses. You will receive a summary with a number of correctly listed offers and errors. Read more: <a href=\"../../sale/#zestawienie-zadań\" target=\"_blank\">PL</a> / <a href=\"../../en/sale/#task-list\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = "command_id_example"; // string | Command identifier.

try {
    $result = $apiInstance->getPublicationReportUsingGET($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getPublicationReportUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| Command identifier. |

### Return type

[**\Swagger\Client\Model\GeneralReport**](../Model/GeneralReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublicationTasksUsingGET**
> \Swagger\Client\Model\TaskReport getPublicationTasksUsingGET($command_id, $limit, $offset)

Publish command detailed report

Use this resource to retrieve information about the offer statuses on the site (Defaults: limit = 100, offset = 0). Read more: <a href=\"../../sale/#informacje-o-publikacji\" target=\"_blank\">PL</a> / <a href=\"../../en/sale/#information-about-publication\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = "command_id_example"; // string | Command identifier.
$limit = 100; // int | The limit of elements in the response.
$offset = 0; // int | The offset of elements in the response.

try {
    $result = $apiInstance->getPublicationTasksUsingGET($command_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->getPublicationTasksUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| Command identifier. |
 **limit** | **int**| The limit of elements in the response. | [optional] [default to 100]
 **offset** | **int**| The offset of elements in the response. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\TaskReport**](../Model/TaskReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyOfferPromoOptionsUsingPOST**
> \Swagger\Client\Model\OfferPromoOptions modifyOfferPromoOptionsUsingPOST($body, $offer_id)

Modify offer promotion packages

Use this resource to modify offer promotion packages. Read more: <a href=\"../../my_offers/#jak-dodać-lub-zmienić-opcje-promowania-w-pojedynczej-ofercie\" target=\"_blank\">PL</a> / <a href=\"../../en/my_offers/#how-to-add-or-change-promo-options-in-a-single-offer\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PromoOptionsModifications(); // \Swagger\Client\Model\PromoOptionsModifications | request
$offer_id = "offer_id_example"; // string | Offer identifier.

try {
    $result = $apiInstance->modifyOfferPromoOptionsUsingPOST($body, $offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->modifyOfferPromoOptionsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PromoOptionsModifications**](../Model/PromoOptionsModifications.md)| request |
 **offer_id** | **string**| Offer identifier. |

### Return type

[**\Swagger\Client\Model\OfferPromoOptions**](../Model/OfferPromoOptions.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **promoModificationCommandUsingPUT**
> \Swagger\Client\Model\GeneralReport promoModificationCommandUsingPUT($body, $command_id)

Batch offer promotion package modification

Use this resource to modify promotion packages on multiple offers at once. Read more: <a href=\"../../my_offers/#jak-dodać-lub-edytować-opcje-promowania-na-wielu-ofertach\" target=\"_blank\">PL</a> / <a href=\"../../en/my_offers/#how-to-add-or-change-promo-options-in-multiple-offers\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PromoOptionsCommand(); // \Swagger\Client\Model\PromoOptionsCommand | Promo packages modification command request.
$command_id = "command_id_example"; // string | Command identifier. Must be a UUID.

try {
    $result = $apiInstance->promoModificationCommandUsingPUT($body, $command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->promoModificationCommandUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PromoOptionsCommand**](../Model/PromoOptionsCommand.md)| Promo packages modification command request. |
 **command_id** | **string**| Command identifier. Must be a UUID. |

### Return type

[**\Swagger\Client\Model\GeneralReport**](../Model/GeneralReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOfferUsingPUT**
> \Swagger\Client\Model\Offer updateOfferUsingPUT($body, $offer_id)

Complete a draft offer or edit an offer

Use this resource to complete a draft offer or edit ongoing offers. Read more: <a href=\"../../sale/#uzupełnij-draft-oferty\" target=\"_blank\">PL</a> / <a href=\"../../en/sale/#new-offer\" target=\"_blank\">EN</a>. This resource is rate limited to 10 requests per second.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Offer(); // \Swagger\Client\Model\Offer | offer
$offer_id = "offer_id_example"; // string | Offer identifier.

try {
    $result = $apiInstance->updateOfferUsingPUT($body, $offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferManagementApi->updateOfferUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Offer**](../Model/Offer.md)| offer |
 **offer_id** | **string**| Offer identifier. |

### Return type

[**\Swagger\Client\Model\Offer**](../Model/Offer.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

