# Swagger\Client\OfferRatingApi

All URIs are relative to *https://api.{environment}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**offerRatingGET**](OfferRatingApi.md#offerratingget) | **GET** /sale/offers/{offerId}/rating | Get offer rating

# **offerRatingGET**
> \Swagger\Client\Model\OfferRating offerRatingGET($offer_id)

Get offer rating

Use this resource to get offer rating. Read more: <a href=\"../../news/#offerRating\" target=\"_blank\">PL</a> / <a href=\"../../en/news/#offerRating\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferRatingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = "offer_id_example"; // string | Offer identifier.

try {
    $result = $apiInstance->offerRatingGET($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferRatingApi->offerRatingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Offer identifier. |

### Return type

[**\Swagger\Client\Model\OfferRating**](../Model/OfferRating.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

