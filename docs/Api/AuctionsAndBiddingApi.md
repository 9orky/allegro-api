# Swagger\Client\AuctionsAndBiddingApi

All URIs are relative to *https://api.{environment}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBid**](AuctionsAndBiddingApi.md#getbid) | **GET** /bidding/offers/{offerId}/bid | Get current user&#x27;s bid information
[**placeBid**](AuctionsAndBiddingApi.md#placebid) | **PUT** /bidding/offers/{offerId}/bid | Place a bid in an auction

# **getBid**
> \Swagger\Client\Model\MyBidResponse getBid($offer_id)

Get current user's bid information

Get current user's bid information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AuctionsAndBiddingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = "offer_id_example"; // string | The offer ID.

try {
    $result = $apiInstance->getBid($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsAndBiddingApi->getBid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| The offer ID. |

### Return type

[**\Swagger\Client\Model\MyBidResponse**](../Model/MyBidResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **placeBid**
> \Swagger\Client\Model\MyBidResponse placeBid($offer_id, $body)

Place a bid in an auction

Place a bid in an auction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AuctionsAndBiddingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = "offer_id_example"; // string | The offer ID.
$body = new \Swagger\Client\Model\BidRequest(); // \Swagger\Client\Model\BidRequest | 

try {
    $result = $apiInstance->placeBid($offer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsAndBiddingApi->placeBid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| The offer ID. |
 **body** | [**\Swagger\Client\Model\BidRequest**](../Model/BidRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\MyBidResponse**](../Model/MyBidResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

