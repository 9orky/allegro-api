# Swagger\Client\BlacklistManagementApi

All URIs are relative to *https://api.{environment}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**doAddToBlackList**](BlacklistManagementApi.md#doaddtoblacklist) | **POST** /sale/blacklisted-users | Add a users to the blacklist
[**doRemoveFromBlackList**](BlacklistManagementApi.md#doremovefromblacklist) | **DELETE** /sale/blacklisted-users/{excludedUserId} | Remove users from the blacklist

# **doAddToBlackList**
> \Swagger\Client\Model\BlackListResponse doAddToBlackList($body)

Add a users to the blacklist

Use this resource to add new users to the blacklist on given account. At least one of id or login is required. Read more: <a href=\"../../account/#4-moi-nieaktywni-kupujący\" target=\"_blank\">PL</a> / <a href=\"../../en/account/#4-blacklist\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BlacklistManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BlacklistRequest(); // \Swagger\Client\Model\BlacklistRequest | request

try {
    $result = $apiInstance->doAddToBlackList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistManagementApi->doAddToBlackList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BlacklistRequest**](../Model/BlacklistRequest.md)| request |

### Return type

[**\Swagger\Client\Model\BlackListResponse**](../Model/BlackListResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **doRemoveFromBlackList**
> doRemoveFromBlackList($excluded_user_id)

Remove users from the blacklist

Use this resource to remove users from the blacklist on given account. Read more: <a href=\"../../account/#4-moi-nieaktywni-kupujący\" target=\"_blank\">PL</a> / <a href=\"../../en/account/#4-blacklist\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BlacklistManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$excluded_user_id = 789; // int | Remove users from the blacklist.

try {
    $apiInstance->doRemoveFromBlackList($excluded_user_id);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistManagementApi->doRemoveFromBlackList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **excluded_user_id** | **int**| Remove users from the blacklist. |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

