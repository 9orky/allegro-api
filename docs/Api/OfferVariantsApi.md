# Swagger\Client\OfferVariantsApi

All URIs are relative to *https://api.{environment}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createVariantSet**](OfferVariantsApi.md#createvariantset) | **POST** /sale/offer-variants | Create variant set
[**deleteVariantSet**](OfferVariantsApi.md#deletevariantset) | **DELETE** /sale/offer-variants/{setId} | Delete a variant set
[**getVariantSet**](OfferVariantsApi.md#getvariantset) | **GET** /sale/offer-variants/{setId} | Get a variant set
[**getVariantSets**](OfferVariantsApi.md#getvariantsets) | **GET** /sale/offer-variants | Get the user&#x27;s variant sets
[**updateVariantSet**](OfferVariantsApi.md#updatevariantset) | **PUT** /sale/offer-variants/{setId} | Update variant set

# **createVariantSet**
> \Swagger\Client\Model\VariantSetResponse createVariantSet($body)

Create variant set

Use this resource to create variant set.   A valid variant set must consist of three required elements:  - name:    - it can't be blank and must not be longer than 50 characters  - parameters:    - it should contain parameter identifiers used for offer grouping    - parameter identifiers from the offers and special `color/pattern` value (for grouping via image) are permitted    - it must contain at least one element (up to 2)  - offers:    - it must contain at least 2 offers (500 at most)    - `colorPattern` value must be set for every offer if `color/pattern` parameter is used    - `colorPattern` value can't be blank and must not be longer than 50 characters    - `colorPattern` can take arbitrary string value like `red`, `b323592c-522f-4ec1-b9ea-3764538e0ac4` (UUID), etc.    - offers having the same image should have identical `colorPattern` value    Let's assume we have 4 offers:    - offer with id 2 having an image of a red t-shirt and S as a value of parameter with id 21    - offer with id 3 having an image of a red t-shirt and M as a value of parameter with id 21    - offer with id 4 having an image of a blue t-shirt and S as a value of parameter with id 21    - offer with id 5 having an image of a blue t-shirt and M as a value of parameter with id 21    You can build a variant set by grouping offers using combination of available parameters - examples are available in <i>Request samples</i>.    More general information about variant sets can be found [here](https://allegro.pl/pomoc/faq/wielowariantowosc-jak-polaczyc-oferty-xGgaOByGgTb#dodatkowe-informacje). Read more: <a href=\"../../multi_variant_offers/#utwórz-ofertę-wielowariantową\" target=\"_blank\">PL</a> / <a href=\"../../en/multi_variant_offers/#create-a-multi-variant-offer\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferVariantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\VariantSet(); // \Swagger\Client\Model\VariantSet | 

try {
    $result = $apiInstance->createVariantSet($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferVariantsApi->createVariantSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\VariantSet**](../Model/VariantSet.md)|  |

### Return type

[**\Swagger\Client\Model\VariantSetResponse**](../Model/VariantSetResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVariantSet**
> deleteVariantSet($set_id)

Delete a variant set

Use this resource to delete variant set by id. Offers included in variant set will not be stopped or modified by this operation. Read more: <a href=\"../../multi_variant_offers/#usuń-ofertę-wielowariantową\" target=\"_blank\">PL</a> / <a href=\"../../en/multi_variant_offers/#remove-a-multi-variant-offer\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferVariantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = "set_id_example"; // string | Variant set identifier.

try {
    $apiInstance->deleteVariantSet($set_id);
} catch (Exception $e) {
    echo 'Exception when calling OfferVariantsApi->deleteVariantSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set_id** | **string**| Variant set identifier. |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVariantSet**
> \Swagger\Client\Model\VariantSetResponse getVariantSet($set_id)

Get a variant set

Use this resource to get variant set by set id. Read more: <a href=\"../../multi_variant_offers/#edytuj-ofertę-wielowariantową\" target=\"_blank\">PL</a> / <a href=\"../../en/multi_variant_offers/#update-a-multi-variant-offer\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferVariantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_id = "set_id_example"; // string | Variant set identifier.

try {
    $result = $apiInstance->getVariantSet($set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferVariantsApi->getVariantSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set_id** | **string**| Variant set identifier. |

### Return type

[**\Swagger\Client\Model\VariantSetResponse**](../Model/VariantSetResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVariantSets**
> \Swagger\Client\Model\VariantSets getVariantSets($offset, $limit, $query)

Get the user's variant sets

Use this resource to get created variant sets. The returned variant sets are ordered by name. Read more: <a href=\"../../multi_variant_offers/#pobierz-listę-ofert-wielowariantowych\" target=\"_blank\">PL</a> / <a href=\"../../en/multi_variant_offers/#retrieve-a-multi-variant-offer\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferVariantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | Index of first returned variant set.
$limit = 10; // int | Maximum number of returned variant sets.
$query = "query_example"; // string | Filter variant sets by name or offer id.

try {
    $result = $apiInstance->getVariantSets($offset, $limit, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferVariantsApi->getVariantSets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Index of first returned variant set. | [optional] [default to 0]
 **limit** | **int**| Maximum number of returned variant sets. | [optional] [default to 10]
 **query** | **string**| Filter variant sets by name or offer id. | [optional]

### Return type

[**\Swagger\Client\Model\VariantSets**](../Model/VariantSets.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVariantSet**
> \Swagger\Client\Model\VariantSetResponse updateVariantSet($body, $set_id)

Update variant set

Use this resource to edit variant set.   A valid variant set must consist of three required elements:  - name:    - it can't be blank and must not be longer than 50 characters  - parameters:    - it should contain parameter identifiers used for offer grouping    - parameter identifiers from the offers and special `color/pattern` value (for grouping via image) are permitted    - it must contain at least one element (up to 2)  - offers:    - it must contain at least 2 offers (500 at most)    - `colorPattern` value must be set for every offer if `color/pattern` parameter is used    - `colorPattern` value can't be blank and must not be longer than 50 characters    - `colorPattern` can take arbitrary string value like `red`, `b323592c-522f-4ec1-b9ea-3764538e0ac4` (UUID), etc.    - offers having the same image should have identical `colorPattern` value    Let's assume we have 4 offers:    - offer with id 2 having an image of a red t-shirt and S as a value of parameter with id 21    - offer with id 3 having an image of a red t-shirt and M as a value of parameter with id 21    - offer with id 4 having an image of a blue t-shirt and S as a value of parameter with id 21    - offer with id 5 having an image of a blue t-shirt and M as a value of parameter with id 21    You can build a variant set by grouping offers using combination of available parameters - examples are available in <i>Request samples</i>.    More general information about variant sets can be found [here](https://allegro.pl/pomoc/faq/wielowariantowosc-jak-polaczyc-oferty-xGgaOByGgTb#dodatkowe-informacje). Read more: <a href=\"../../multi_variant_offers/#edytuj-ofertę-wielowariantową\" target=\"_blank\">PL</a> / <a href=\"../../en/multi_variant_offers/#update-a-multi-variant-offer\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferVariantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\VariantSet(); // \Swagger\Client\Model\VariantSet | 
$set_id = "set_id_example"; // string | Variant set identifier.

try {
    $result = $apiInstance->updateVariantSet($body, $set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferVariantsApi->updateVariantSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\VariantSet**](../Model/VariantSet.md)|  |
 **set_id** | **string**| Variant set identifier. |

### Return type

[**\Swagger\Client\Model\VariantSetResponse**](../Model/VariantSetResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

