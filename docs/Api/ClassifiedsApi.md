# Swagger\Client\ClassifiedsApi

All URIs are relative to *https://api.{environment}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assignClassifiedPackagesUsingPUT**](ClassifiedsApi.md#assignclassifiedpackagesusingput) | **PUT** /sale/offer-classifieds-packages/{offerId} | Assign packages to a classified
[**getClassifiedPackageConfigurationUsingGET**](ClassifiedsApi.md#getclassifiedpackageconfigurationusingget) | **GET** /sale/classifieds-packages/{packageId} | Get the configuration of a package
[**getClassifiedPackageConfigurationsForCategoryUsingGET**](ClassifiedsApi.md#getclassifiedpackageconfigurationsforcategoryusingget) | **GET** /sale/classifieds-packages | Get configurations of packages
[**getClassifiedPackagesUsingGET**](ClassifiedsApi.md#getclassifiedpackagesusingget) | **GET** /sale/offer-classifieds-packages/{offerId} | Get classified packages assigned to an offer

# **assignClassifiedPackagesUsingPUT**
> assignClassifiedPackagesUsingPUT($body, $offer_id)

Assign packages to a classified

Use this resource to assign classified packages to an offer. Read more: <a href=\"../../advertisement/#8-pakiet-i-opcje-dodatkowe\" target=\"_blank\">PL</a> / <a href=\"../../en/advertisement/#8-package-and-additional-options\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ClassifiedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ClassifiedPackages(); // \Swagger\Client\Model\ClassifiedPackages | Packages that should be assigned to the classified.
$offer_id = "offer_id_example"; // string | The offer ID.

try {
    $apiInstance->assignClassifiedPackagesUsingPUT($body, $offer_id);
} catch (Exception $e) {
    echo 'Exception when calling ClassifiedsApi->assignClassifiedPackagesUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ClassifiedPackages**](../Model/ClassifiedPackages.md)| Packages that should be assigned to the classified. |
 **offer_id** | **string**| The offer ID. |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClassifiedPackageConfigurationUsingGET**
> \Swagger\Client\Model\ClassifiedPackageConfig getClassifiedPackageConfigurationUsingGET($package_id)

Get the configuration of a package

Use this resource to retrieve the configuration of a classifieds package. Read more: <a href=\"../../advertisement/#lista-pakietów-i-opcji-dodatkowych\" target=\"_blank\">PL</a> / <a href=\"../../en/advertisement/#list-of-promo-options\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ClassifiedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$package_id = "package_id_example"; // string | The classifieds package ID.

try {
    $result = $apiInstance->getClassifiedPackageConfigurationUsingGET($package_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassifiedsApi->getClassifiedPackageConfigurationUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_id** | **string**| The classifieds package ID. |

### Return type

[**\Swagger\Client\Model\ClassifiedPackageConfig**](../Model/ClassifiedPackageConfig.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClassifiedPackageConfigurationsForCategoryUsingGET**
> \Swagger\Client\Model\ClassifiedPackageConfigs getClassifiedPackageConfigurationsForCategoryUsingGET($category_id)

Get configurations of packages

Use this resource to retrieve configurations of classifieds packages for a category. Read more: <a href=\"../../advertisement/#lista-pakietów-i-opcji-dodatkowych\" target=\"_blank\">PL</a> / <a href=\"../../en/advertisement/#list-of-promo-options\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ClassifiedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = "category_id_example"; // string | The category ID.

try {
    $result = $apiInstance->getClassifiedPackageConfigurationsForCategoryUsingGET($category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassifiedsApi->getClassifiedPackageConfigurationsForCategoryUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **string**| The category ID. |

### Return type

[**\Swagger\Client\Model\ClassifiedPackageConfigs**](../Model/ClassifiedPackageConfigs.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClassifiedPackagesUsingGET**
> \Swagger\Client\Model\ClassifiedResponse getClassifiedPackagesUsingGET($offer_id)

Get classified packages assigned to an offer

Use this resource to retrieve classified packages currently assigned to an offer. Read more: <a href=\"../../advertisement/#przypisane-pakiety\" target=\"_blank\">PL</a> / <a href=\"../../en/advertisement/#promo-options-assigned-to-ad\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ClassifiedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = "offer_id_example"; // string | Offer ID.

try {
    $result = $apiInstance->getClassifiedPackagesUsingGET($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassifiedsApi->getClassifiedPackagesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Offer ID. |

### Return type

[**\Swagger\Client\Model\ClassifiedResponse**](../Model/ClassifiedResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

