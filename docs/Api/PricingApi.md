# Swagger\Client\PricingApi

All URIs are relative to *https://api.{environment}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**calculateFeePreviewUsingPOST**](PricingApi.md#calculatefeepreviewusingpost) | **POST** /pricing/offer-fee-preview | Calculate fee and commission for an offer
[**offerQuotesPublicUsingGET**](PricingApi.md#offerquotespublicusingget) | **GET** /pricing/offer-quotes | Get the user&#x27;s current offer quotes

# **calculateFeePreviewUsingPOST**
> \Swagger\Client\Model\FeePreviewResponse calculateFeePreviewUsingPOST($body)

Calculate fee and commission for an offer

Provides information about fee and commission for an offer. Read more: <a href=\"../../charges/#kalkulator-opłat\" target=\"_blank\">PL</a> / <a href=\"../../en/charges/#fee-calculator\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PricingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PublicOfferPreviewRequest(); // \Swagger\Client\Model\PublicOfferPreviewRequest | 

try {
    $result = $apiInstance->calculateFeePreviewUsingPOST($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricingApi->calculateFeePreviewUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PublicOfferPreviewRequest**](../Model/PublicOfferPreviewRequest.md)|  |

### Return type

[**\Swagger\Client\Model\FeePreviewResponse**](../Model/FeePreviewResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **offerQuotesPublicUsingGET**
> \Swagger\Client\Model\OfferQuotesDto offerQuotesPublicUsingGET($offer_id)

Get the user's current offer quotes

This endpoint returns current offer quotes (listing and promo fees) cycles for authenticated user and list of offers. Read more: <a href=\"../../charges/#data-naliczenia-kolejnej-opłaty\" target=\"_blank\">PL</a> / <a href=\"../../en/charges/#check-when-a-fee-is-charged\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PricingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = array("offer_id_example"); // string[] | List of offer Ids, maximum 20 values.

try {
    $result = $apiInstance->offerQuotesPublicUsingGET($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricingApi->offerQuotesPublicUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | [**string[]**](../Model/string.md)| List of offer Ids, maximum 20 values. |

### Return type

[**\Swagger\Client\Model\OfferQuotesDto**](../Model/OfferQuotesDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

