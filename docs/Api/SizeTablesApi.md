# Swagger\Client\SizeTablesApi

All URIs are relative to *https://api.{environment}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTableUsingPOST**](SizeTablesApi.md#createtableusingpost) | **POST** /sale/size-tables | Create a size table
[**getTableUsingGET**](SizeTablesApi.md#gettableusingget) | **GET** /sale/size-tables/{tableId} | Get a size table
[**getTablesTemplatesUsingGET**](SizeTablesApi.md#gettablestemplatesusingget) | **GET** /sale/size-tables-templates | Get the size tables templates
[**getTablesUsingGET**](SizeTablesApi.md#gettablesusingget) | **GET** /sale/size-tables | Get the user&#x27;s size tables
[**modifyTableUsingPUT**](SizeTablesApi.md#modifytableusingput) | **PUT** /sale/size-tables/{tableId} | Update a size table

# **createTableUsingPOST**
> \Swagger\Client\Model\PublicTableDto createTableUsingPOST($body)

Create a size table

Use this resource to create size table. Read more: <a href=\"../../sale/#tabele-rozmiarów\" target=\"_blank\">PL</a> / <a href=\"../../en/sale/#size-tables\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SizeTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SizeTablePostRequest(); // \Swagger\Client\Model\SizeTablePostRequest | Size table details

try {
    $result = $apiInstance->createTableUsingPOST($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SizeTablesApi->createTableUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SizeTablePostRequest**](../Model/SizeTablePostRequest.md)| Size table details |

### Return type

[**\Swagger\Client\Model\PublicTableDto**](../Model/PublicTableDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTableUsingGET**
> \Swagger\Client\Model\PublicTableDto getTableUsingGET($table_id)

Get a size table

Use this resource to get selected size table. Read more: <a href=\"../../sale/#tabele-rozmiarów\" target=\"_blank\">PL</a> / <a href=\"../../en/sale/#size-tables\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SizeTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$table_id = "table_id_example"; // string | Table identifier.

try {
    $result = $apiInstance->getTableUsingGET($table_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SizeTablesApi->getTableUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **table_id** | **string**| Table identifier. |

### Return type

[**\Swagger\Client\Model\PublicTableDto**](../Model/PublicTableDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTablesTemplatesUsingGET**
> \Swagger\Client\Model\SizeTableTemplatesResponse getTablesTemplatesUsingGET()

Get the size tables templates

Use this resource to get all size tables templates. Read more: <a href=\"../../sale/#tabele-rozmiarów\" target=\"_blank\">PL</a> / <a href=\"../../en/sale/#size-tables\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SizeTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTablesTemplatesUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SizeTablesApi->getTablesTemplatesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SizeTableTemplatesResponse**](../Model/SizeTableTemplatesResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTablesUsingGET**
> \Swagger\Client\Model\PublicTablesDto getTablesUsingGET()

Get the user's size tables

Use this resource to get all size tables assigned to a seller account. Read more: <a href=\"../../sale/#tabele-rozmiarów\" target=\"_blank\">PL</a> / <a href=\"../../en/sale/#size-tables\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SizeTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTablesUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SizeTablesApi->getTablesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PublicTablesDto**](../Model/PublicTablesDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyTableUsingPUT**
> \Swagger\Client\Model\PublicTableDto modifyTableUsingPUT($body, $table_id)

Update a size table

Use this resource to update selected size table. Read more: <a href=\"../../sale/#tabele-rozmiarów\" target=\"_blank\">PL</a> / <a href=\"../../en/sale/#size-tables\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\SizeTablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SizeTablePutRequest(); // \Swagger\Client\Model\SizeTablePutRequest | Size table details
$table_id = "table_id_example"; // string | Table identifier.

try {
    $result = $apiInstance->modifyTableUsingPUT($body, $table_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SizeTablesApi->modifyTableUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SizeTablePutRequest**](../Model/SizeTablePutRequest.md)| Size table details |
 **table_id** | **string**| Table identifier. |

### Return type

[**\Swagger\Client\Model\PublicTableDto**](../Model/PublicTableDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

