# Swagger\Client\PublicUserInformationApi

All URIs are relative to *https://api.{environment}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserSummaryUsingGET**](PublicUserInformationApi.md#getusersummaryusingget) | **GET** /users/{userId}/ratings-summary | Get any user&#x27;s ratings summary

# **getUserSummaryUsingGET**
> \Swagger\Client\Model\UserRatingSummaryResponse getUserSummaryUsingGET($user_id)

Get any user's ratings summary

Use this resource to receive feedback statistics. Read more: <a href=\"../../news/2017-10-09-news_informacje_o_ocenach/\" target=\"_blank\">PL</a> / <a href=\"../../en/news/2017-10-09-news_informacje_o_ocenach/\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PublicUserInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | The ID of the user.

try {
    $result = $apiInstance->getUserSummaryUsingGET($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicUserInformationApi->getUserSummaryUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The ID of the user. |

### Return type

[**\Swagger\Client\Model\UserRatingSummaryResponse**](../Model/UserRatingSummaryResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

