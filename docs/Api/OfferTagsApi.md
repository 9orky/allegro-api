# Swagger\Client\OfferTagsApi

All URIs are relative to *https://api.{environment}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assignTagToOfferPOST**](OfferTagsApi.md#assigntagtoofferpost) | **POST** /sale/offers/{offerId}/tags | Assign tags to an offer
[**createTagPOST1**](OfferTagsApi.md#createtagpost1) | **POST** /sale/offer-tags | Create a tag
[**deleteTagUsingDELETE**](OfferTagsApi.md#deletetagusingdelete) | **DELETE** /sale/offer-tags/{tagId} | Delete a tag
[**listAssignedOfferTagsGET**](OfferTagsApi.md#listassignedoffertagsget) | **GET** /sale/offers/{offerId}/tags | Get tags assigned to an offer
[**listSellerTagsGET1**](OfferTagsApi.md#listsellertagsget1) | **GET** /sale/offer-tags | Get the user&#x27;s tags
[**updateTagPUT**](OfferTagsApi.md#updatetagput) | **PUT** /sale/offer-tags/{tagId} | Modify a tag

# **assignTagToOfferPOST**
> assignTagToOfferPOST($body, $offer_id)

Assign tags to an offer

Use this resource to assign a tag to offer. Read more: <a href=\"../../news/2018-09-24-tagi-zalaczniki/#PrzypiszTagiDoOferty\" target=\"_blank\">PL</a> / <a href=\"../../en/news/2018-09-24-tagi-zalaczniki/#PrzypiszTagiDoOferty\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TagIdsRequest(); // \Swagger\Client\Model\TagIdsRequest | request
$offer_id = "offer_id_example"; // string | Offer identifier.

try {
    $apiInstance->assignTagToOfferPOST($body, $offer_id);
} catch (Exception $e) {
    echo 'Exception when calling OfferTagsApi->assignTagToOfferPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TagIdsRequest**](../Model/TagIdsRequest.md)| request |
 **offer_id** | **string**| Offer identifier. |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTagPOST1**
> \Swagger\Client\Model\TagId createTagPOST1($body)

Create a tag

Use this resource to create a new tag. Read more: <a href=\"../../news/2018-09-24-tagi-zalaczniki/#DodajDoKonta\" target=\"_blank\">PL</a> / <a href=\"../../en/news/2018-09-24-tagi-zalaczniki/#DodajDoKonta\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TagRequest(); // \Swagger\Client\Model\TagRequest | request

try {
    $result = $apiInstance->createTagPOST1($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferTagsApi->createTagPOST1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TagRequest**](../Model/TagRequest.md)| request |

### Return type

[**\Swagger\Client\Model\TagId**](../Model/TagId.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTagUsingDELETE**
> deleteTagUsingDELETE($tag_id)

Delete a tag

Use this resource to delete the tag. Read more: <a href=\"../../news/2018-09-24-tagi-zalaczniki/#UsunTagZKonta\" target=\"_blank\">PL</a> / <a href=\"../../en/news/2018-09-24-tagi-zalaczniki/#UsunTagZKonta\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = "tag_id_example"; // string | Tag identifier.

try {
    $apiInstance->deleteTagUsingDELETE($tag_id);
} catch (Exception $e) {
    echo 'Exception when calling OfferTagsApi->deleteTagUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **string**| Tag identifier. |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAssignedOfferTagsGET**
> \Swagger\Client\Model\TagListResponse listAssignedOfferTagsGET($offer_id)

Get tags assigned to an offer

Use this resource to get a list of tags assigned to offer. Read more: <a href=\"../../news/2018-09-24-tagi-zalaczniki/#PobierzTagiZOferty\" target=\"_blank\">PL</a> / <a href=\"../../en/news/2018-09-24-tagi-zalaczniki/#PobierzTagiZOferty\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = "offer_id_example"; // string | Offer identifier.

try {
    $result = $apiInstance->listAssignedOfferTagsGET($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferTagsApi->listAssignedOfferTagsGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Offer identifier. |

### Return type

[**\Swagger\Client\Model\TagListResponse**](../Model/TagListResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSellerTagsGET1**
> \Swagger\Client\Model\TagListResponse listSellerTagsGET1($limit, $offset)

Get the user's tags

Use this resource to get a list of tags defined by the specified user (Defaults: limit = 100, offset = 0). Read more: <a href=\"../../news/2018-09-24-tagi-zalaczniki/#PobierzTagi\" target=\"_blank\">PL</a> / <a href=\"../../en/news/2018-09-24-tagi-zalaczniki/#PobierzTagi\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 1000; // int | The limit of elements in the response.
$offset = 0; // int | The offset of elements in the response.

try {
    $result = $apiInstance->listSellerTagsGET1($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferTagsApi->listSellerTagsGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The limit of elements in the response. | [optional] [default to 1000]
 **offset** | **int**| The offset of elements in the response. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\TagListResponse**](../Model/TagListResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTagPUT**
> updateTagPUT($body, $tag_id)

Modify a tag

Use this resource to update a tag. Read more: <a href=\"../../news/2018-09-24-tagi-zalaczniki/#ZmienNazwe\" target=\"_blank\">PL</a> / <a href=\"../../en/news/2018-09-24-tagi-zalaczniki/#ZmienNazwe\" target=\"_blank\">EN</a>. This resource is rate limited to 1 milion offer changes per hour.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TagRequest(); // \Swagger\Client\Model\TagRequest | request
$tag_id = "tag_id_example"; // string | Tag identifier.

try {
    $apiInstance->updateTagPUT($body, $tag_id);
} catch (Exception $e) {
    echo 'Exception when calling OfferTagsApi->updateTagPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TagRequest**](../Model/TagRequest.md)| request |
 **tag_id** | **string**| Tag identifier. |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

