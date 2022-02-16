# Swagger\Client\BatchOfferModificationApi

All URIs are relative to *https://api.{environment}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGeneralReportUsingGET**](BatchOfferModificationApi.md#getgeneralreportusingget) | **GET** /sale/offer-modification-commands/{commandId} | Modification command summary
[**getPriceModificationCommandStatusUsingGET**](BatchOfferModificationApi.md#getpricemodificationcommandstatususingget) | **GET** /sale/offer-price-change-commands/{commandId} | Change price command summary
[**getPriceModificationCommandTasksStatusesUsingGET**](BatchOfferModificationApi.md#getpricemodificationcommandtasksstatusesusingget) | **GET** /sale/offer-price-change-commands/{commandId}/tasks | Change price command detailed report
[**getQuantityModificationCommandStatusUsingGET**](BatchOfferModificationApi.md#getquantitymodificationcommandstatususingget) | **GET** /sale/offer-quantity-change-commands/{commandId} | Change quantity command summary
[**getQuantityModificationCommandTasksStatusesUsingGET**](BatchOfferModificationApi.md#getquantitymodificationcommandtasksstatusesusingget) | **GET** /sale/offer-quantity-change-commands/{commandId}/tasks | Change quantity command detailed report
[**getTasksUsingGET**](BatchOfferModificationApi.md#gettasksusingget) | **GET** /sale/offer-modification-commands/{commandId}/tasks | Modification command detailed report
[**modificationCommandUsingPUT**](BatchOfferModificationApi.md#modificationcommandusingput) | **PUT** /sale/offer-modification-commands/{commandId} | Batch offer modification
[**priceModificationCommandUsingPUT**](BatchOfferModificationApi.md#pricemodificationcommandusingput) | **PUT** /sale/offer-price-change-commands/{commandId} | Batch offer price modification
[**quantityModificationCommandUsingPUT**](BatchOfferModificationApi.md#quantitymodificationcommandusingput) | **PUT** /sale/offer-quantity-change-commands/{commandId} | Batch offer quantity modification

# **getGeneralReportUsingGET**
> \Swagger\Client\Model\GeneralReport getGeneralReportUsingGET($command_id)

Modification command summary

Use this resource to find out how many offers were edited within one {commandId}. You will receive a summary with a number of successfully edited offers. Read more: <a href=\"../../news/2018-04-19-news_grupowa_edycja_ofert_update/#2\" target=\"_blank\">PL</a> / <a href=\"../../en/news/2018-04-19-news_grupowa_edycja_ofert_update/#2\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = "command_id_example"; // string | Command identifier.

try {
    $result = $apiInstance->getGeneralReportUsingGET($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->getGeneralReportUsingGET: ', $e->getMessage(), PHP_EOL;
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

# **getPriceModificationCommandStatusUsingGET**
> \Swagger\Client\Model\GeneralReport getPriceModificationCommandStatusUsingGET($command_id)

Change price command summary

Returns status and summary of particular command execution. Read more: <a href=\"../../my_offers/#cena\" target=\"_blank\">PL</a> / <a href=\"../../en/my_offers/#price\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = "command_id_example"; // string | Command identifier.

try {
    $result = $apiInstance->getPriceModificationCommandStatusUsingGET($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->getPriceModificationCommandStatusUsingGET: ', $e->getMessage(), PHP_EOL;
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

# **getPriceModificationCommandTasksStatusesUsingGET**
> \Swagger\Client\Model\TaskReport getPriceModificationCommandTasksStatusesUsingGET($command_id, $limit, $offset)

Change price command detailed report

Defaults: limit = 100, offset = 0. Read more: <a href=\"../../my_offers/#cena\" target=\"_blank\">PL</a> / <a href=\"../../en/my_offers/#price\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = "command_id_example"; // string | Command identifier.
$limit = 100; // int | The limit of elements in the response.
$offset = 0; // int | The offset of elements in the response.

try {
    $result = $apiInstance->getPriceModificationCommandTasksStatusesUsingGET($command_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->getPriceModificationCommandTasksStatusesUsingGET: ', $e->getMessage(), PHP_EOL;
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

# **getQuantityModificationCommandStatusUsingGET**
> \Swagger\Client\Model\GeneralReport getQuantityModificationCommandStatusUsingGET($command_id)

Change quantity command summary

Returns status and summary of the command. Read more: <a href=\"../../my_offers/#liczba-przedmiotów\" target=\"_blank\">PL</a> / <a href=\"../../en/my_offers/#quantity\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = "command_id_example"; // string | Command identifier.

try {
    $result = $apiInstance->getQuantityModificationCommandStatusUsingGET($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->getQuantityModificationCommandStatusUsingGET: ', $e->getMessage(), PHP_EOL;
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

# **getQuantityModificationCommandTasksStatusesUsingGET**
> \Swagger\Client\Model\TaskReport getQuantityModificationCommandTasksStatusesUsingGET($command_id, $limit, $offset)

Change quantity command detailed report

Defaults: limit = 100, offset = 0. Read more: <a href=\"../../my_offers/#liczba-przedmiotów\" target=\"_blank\">PL</a> / <a href=\"../../en/my_offers/#quantity\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = "command_id_example"; // string | Command identifier.
$limit = 100; // int | The limit of elements in the response.
$offset = 0; // int | The offset of elements in the response.

try {
    $result = $apiInstance->getQuantityModificationCommandTasksStatusesUsingGET($command_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->getQuantityModificationCommandTasksStatusesUsingGET: ', $e->getMessage(), PHP_EOL;
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

# **getTasksUsingGET**
> \Swagger\Client\Model\TaskReport getTasksUsingGET($command_id, $limit, $offset)

Modification command detailed report

Use this resource to retrieve a detailed summary of changes introduced within one {commandId} (defaults: limit = 100, offset = 0). Read more: <a href=\"../../news/2018-04-19-news_grupowa_edycja_ofert_update/#3\" target=\"_blank\">PL</a> / <a href=\"../../en/news/2018-04-19-news_grupowa_edycja_ofert_update/#3\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = "command_id_example"; // string | Command identifier.
$limit = 100; // int | The limit of elements in the response.
$offset = 0; // int | The offset of elements in the response.

try {
    $result = $apiInstance->getTasksUsingGET($command_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->getTasksUsingGET: ', $e->getMessage(), PHP_EOL;
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

# **modificationCommandUsingPUT**
> \Swagger\Client\Model\GeneralReport modificationCommandUsingPUT($body, $command_id)

Batch offer modification

Use this resource to modify multiple offers at once. Read more: <a href=\"../../news/2018-04-19-news_grupowa_edycja_ofert_update/#1\" target=\"_blank\">PL</a> / <a href=\"../../en/news/2018-04-19-news_grupowa_edycja_ofert_update/#1\" target=\"_blank\">EN</a>. This resource is rate limited to 1 milion offer changes per hour.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OfferChangeCommand(); // \Swagger\Client\Model\OfferChangeCommand | offerChangeCommandDto
$command_id = "command_id_example"; // string | Command identifier.

try {
    $result = $apiInstance->modificationCommandUsingPUT($body, $command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->modificationCommandUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OfferChangeCommand**](../Model/OfferChangeCommand.md)| offerChangeCommandDto |
 **command_id** | **string**| Command identifier. |

### Return type

[**\Swagger\Client\Model\GeneralReport**](../Model/GeneralReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **priceModificationCommandUsingPUT**
> \Swagger\Client\Model\GeneralReport priceModificationCommandUsingPUT($body, $command_id)

Batch offer price modification

Change price of offers. Read more: <a href=\"../../my_offers/#cena\" target=\"_blank\">PL</a> / <a href=\"../../en/my_offers/#price\" target=\"_blank\">EN</a>. This resource is rate limited to 1 milion offer changes per hour.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OfferPriceChangeCommand(); // \Swagger\Client\Model\OfferPriceChangeCommand | offerPriceChangeCommandDto
$command_id = "command_id_example"; // string | Command identifier.

try {
    $result = $apiInstance->priceModificationCommandUsingPUT($body, $command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->priceModificationCommandUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OfferPriceChangeCommand**](../Model/OfferPriceChangeCommand.md)| offerPriceChangeCommandDto |
 **command_id** | **string**| Command identifier. |

### Return type

[**\Swagger\Client\Model\GeneralReport**](../Model/GeneralReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quantityModificationCommandUsingPUT**
> \Swagger\Client\Model\GeneralReport quantityModificationCommandUsingPUT($body, $command_id)

Batch offer quantity modification

Change quantity of multiple offers. Read more: <a href=\"../../my_offers/#liczba-przedmiotów\" target=\"_blank\">PL</a> / <a href=\"../../en/my_offers/#quantity\" target=\"_blank\">EN</a>. This resource is rate limited to 1 milion offer changes per hour.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BatchOfferModificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OfferQuantityChangeCommand(); // \Swagger\Client\Model\OfferQuantityChangeCommand | offerQuantityChangeCommandDto
$command_id = "command_id_example"; // string | Command identifier.

try {
    $result = $apiInstance->quantityModificationCommandUsingPUT($body, $command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchOfferModificationApi->quantityModificationCommandUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OfferQuantityChangeCommand**](../Model/OfferQuantityChangeCommand.md)| offerQuantityChangeCommandDto |
 **command_id** | **string**| Command identifier. |

### Return type

[**\Swagger\Client\Model\GeneralReport**](../Model/GeneralReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

