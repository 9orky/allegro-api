# Swagger\Client\AdditionalServicesApi

All URIs are relative to *https://api.{environment}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAdditionalServicesGroupUsingPOST**](AdditionalServicesApi.md#createadditionalservicesgroupusingpost) | **POST** /sale/offer-additional-services/groups | Create additional services group
[**getAdditionalServicesGroupUsingGET**](AdditionalServicesApi.md#getadditionalservicesgroupusingget) | **GET** /sale/offer-additional-services/groups/{groupId} | Get the details of an additional services group
[**getListOfAdditionalServicesDefinitionsUsingGET**](AdditionalServicesApi.md#getlistofadditionalservicesdefinitionsusingget) | **GET** /sale/offer-additional-services/definitions | Get the user&#x27;s additional services definitions
[**getListOfAdditionalServicesGroupsUsingGET**](AdditionalServicesApi.md#getlistofadditionalservicesgroupsusingget) | **GET** /sale/offer-additional-services/groups | Get the user&#x27;s additional services groups
[**modifyAdditionalServicesGroupUsingPUT**](AdditionalServicesApi.md#modifyadditionalservicesgroupusingput) | **PUT** /sale/offer-additional-services/groups/{groupId} | Modify an additional services group

# **createAdditionalServicesGroupUsingPOST**
> \Swagger\Client\Model\AdditionalServicesGroupResponse createAdditionalServicesGroupUsingPOST($body)

Create additional services group

Use this resource to create a group of additional services. Read more: <a href=\"../../news/2017-10-25-news_uslugi_dodatkowe/#2\" target=\"_blank\">PL</a> / <a href=\"../../en/news/2017-10-25-news_uslugi_dodatkowe/#2\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AdditionalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AdditionalServicesGroupRequest(); // \Swagger\Client\Model\AdditionalServicesGroupRequest | Additional service group body

try {
    $result = $apiInstance->createAdditionalServicesGroupUsingPOST($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalServicesApi->createAdditionalServicesGroupUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AdditionalServicesGroupRequest**](../Model/AdditionalServicesGroupRequest.md)| Additional service group body |

### Return type

[**\Swagger\Client\Model\AdditionalServicesGroupResponse**](../Model/AdditionalServicesGroupResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAdditionalServicesGroupUsingGET**
> \Swagger\Client\Model\AdditionalServicesGroupResponse getAdditionalServicesGroupUsingGET($group_id)

Get the details of an additional services group

Use this resource to get additional services group for a given ID. Read more: <a href=\"../../news/2017-10-25-news_uslugi_dodatkowe/#5\" target=\"_blank\">PL</a> / <a href=\"../../en/news/2017-10-25-news_uslugi_dodatkowe/#5\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AdditionalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = "group_id_example"; // string | Additional Service Group ID.

try {
    $result = $apiInstance->getAdditionalServicesGroupUsingGET($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalServicesApi->getAdditionalServicesGroupUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **string**| Additional Service Group ID. |

### Return type

[**\Swagger\Client\Model\AdditionalServicesGroupResponse**](../Model/AdditionalServicesGroupResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListOfAdditionalServicesDefinitionsUsingGET**
> \Swagger\Client\Model\DefinitionsResponse getListOfAdditionalServicesDefinitionsUsingGET($offset, $limit)

Get the user's additional services definitions

Use this resource to get additional services definitions by user ID. Read more: <a href=\"../../news/2017-10-25-news_uslugi_dodatkowe/#1\" target=\"_blank\">PL</a> / <a href=\"../../en/news/2017-10-25-news_uslugi_dodatkowe/#1\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AdditionalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | The offset of elements in the response.
$limit = 100; // int | The limit of elements in the response.

try {
    $result = $apiInstance->getListOfAdditionalServicesDefinitionsUsingGET($offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalServicesApi->getListOfAdditionalServicesDefinitionsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| The offset of elements in the response. | [optional] [default to 0]
 **limit** | **int**| The limit of elements in the response. | [optional] [default to 100]

### Return type

[**\Swagger\Client\Model\DefinitionsResponse**](../Model/DefinitionsResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListOfAdditionalServicesGroupsUsingGET**
> \Swagger\Client\Model\AdditionalServicesGroups getListOfAdditionalServicesGroupsUsingGET($offset, $limit)

Get the user's additional services groups

Use this resource to retrieve a list of groups with additional services available to a given user which you may assign to offers. Read more: <a href=\"../../news/2017-10-25-news_uslugi_dodatkowe/#4\" target=\"_blank\">PL</a> / <a href=\"../../en/news/2017-10-25-news_uslugi_dodatkowe/#4\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AdditionalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | The offset of elements in the response.
$limit = 100; // int | The limit of elements in the response.

try {
    $result = $apiInstance->getListOfAdditionalServicesGroupsUsingGET($offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalServicesApi->getListOfAdditionalServicesGroupsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| The offset of elements in the response. | [optional] [default to 0]
 **limit** | **int**| The limit of elements in the response. | [optional] [default to 100]

### Return type

[**\Swagger\Client\Model\AdditionalServicesGroups**](../Model/AdditionalServicesGroups.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyAdditionalServicesGroupUsingPUT**
> \Swagger\Client\Model\AdditionalServicesGroupResponse modifyAdditionalServicesGroupUsingPUT($body, $group_id)

Modify an additional services group

Use this resource to modify existing additional service group. Read more: <a href=\"../../news/2017-10-25-news_uslugi_dodatkowe/#3\" target=\"_blank\">PL</a> / <a href=\"../../en/news/2017-10-25-news_uslugi_dodatkowe/#3\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AdditionalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AdditionalServicesGroupRequest(); // \Swagger\Client\Model\AdditionalServicesGroupRequest | Additional service group body
$group_id = "group_id_example"; // string | Additional service group ID.

try {
    $result = $apiInstance->modifyAdditionalServicesGroupUsingPUT($body, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdditionalServicesApi->modifyAdditionalServicesGroupUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AdditionalServicesGroupRequest**](../Model/AdditionalServicesGroupRequest.md)| Additional service group body |
 **group_id** | **string**| Additional service group ID. |

### Return type

[**\Swagger\Client\Model\AdditionalServicesGroupResponse**](../Model/AdditionalServicesGroupResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

