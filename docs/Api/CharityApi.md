# Swagger\Client\CharityApi

All URIs are relative to *https://api.{environment}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchFundraisingCampaigns**](CharityApi.md#searchfundraisingcampaigns) | **GET** /charity/fundraising-campaigns | Search fundraising campaigns

# **searchFundraisingCampaigns**
> \Swagger\Client\Model\FundraisingCampaigns searchFundraisingCampaigns($limit, $phrase)

Search fundraising campaigns

Use this resource to search fundraising campaigns. Read more: <a href=\"../../news/#charity\" target=\"_blank\">PL</a> / <a href=\"../../en/news/#charity\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CharityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Maximum number of returned results.
$phrase = "phrase_example"; // string | Fundraising campaign name or it's Organization name prefix to search for.

try {
    $result = $apiInstance->searchFundraisingCampaigns($limit, $phrase);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharityApi->searchFundraisingCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum number of returned results. |
 **phrase** | **string**| Fundraising campaign name or it&#x27;s Organization name prefix to search for. |

### Return type

[**\Swagger\Client\Model\FundraisingCampaigns**](../Model/FundraisingCampaigns.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.beta.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

