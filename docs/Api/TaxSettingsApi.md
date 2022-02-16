# Swagger\Client\TaxSettingsApi

All URIs are relative to *https://api.{environment}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTaxSettingsForCategory**](TaxSettingsApi.md#gettaxsettingsforcategory) | **GET** /sale/tax-settings | Get all tax settings for category

# **getTaxSettingsForCategory**
> \Swagger\Client\Model\TaxSettings getTaxSettingsForCategory($category_id)

Get all tax settings for category

Use this resource to receive tax settings for given category. Based on received settings you may set VAT tax settings for your offers. Read more: <a href=\"../../sale/#ustawienia-vat\" target=\"_blank\">PL</a> / <a href=\"../../en/sale/#tax-rate\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TaxSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = "category_id_example"; // string | An identifier of a category for which all available tax settings will be returned.

try {
    $result = $apiInstance->getTaxSettingsForCategory($category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxSettingsApi->getTaxSettingsForCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **string**| An identifier of a category for which all available tax settings will be returned. |

### Return type

[**\Swagger\Client\Model\TaxSettings**](../Model/TaxSettings.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

