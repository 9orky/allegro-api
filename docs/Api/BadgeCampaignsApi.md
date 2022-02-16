# Swagger\Client\BadgeCampaignsApi

All URIs are relative to *https://api.{environment}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**badgeApplicationsGetAll**](BadgeCampaignsApi.md#badgeapplicationsgetall) | **GET** /sale/badge-applications | Get a list of badge applications
[**badgeApplicationsGetOne**](BadgeCampaignsApi.md#badgeapplicationsgetone) | **GET** /sale/badge-applications/{applicationId} | Get a badge application details
[**badgeCampaignsGetAll**](BadgeCampaignsApi.md#badgecampaignsgetall) | **GET** /sale/badge-campaigns | Get a list of available badge campaigns
[**badgeOperationsGetOne**](BadgeCampaignsApi.md#badgeoperationsgetone) | **GET** /sale/badge-operations/{operationId} | Get badge operation details
[**getBadges**](BadgeCampaignsApi.md#getbadges) | **GET** /sale/badges | Get a list of badges
[**patchBadge**](BadgeCampaignsApi.md#patchbadge) | **PATCH** /sale/badges/offers/{offerId}/campaigns/{campaignId} | Update campaign badge for the given offer
[**postBadges**](BadgeCampaignsApi.md#postbadges) | **POST** /sale/badges | Apply for badge in selected offer

# **badgeApplicationsGetAll**
> \Swagger\Client\Model\BadgeApplications badgeApplicationsGetAll($campaign_id, $offer_id, $offset, $limit)

Get a list of badge applications

Use this resource to get a list of badge applications. Read more: <a href=\"../../badge/#4-pobierz-swoje-zgłoszenia\" target=\"_blank\">PL</a> / <a href=\"../../en/badge/#4-retrieve-all-campaign-applications\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BadgeCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = "campaign_id_example"; // string | Campaign ID.
$offer_id = "offer_id_example"; // string | Offer ID.
$offset = 56; // int | Offset.
$limit = 50; // int | The maximum number of applications returned in the response.

try {
    $result = $apiInstance->badgeApplicationsGetAll($campaign_id, $offer_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BadgeCampaignsApi->badgeApplicationsGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| Campaign ID. | [optional]
 **offer_id** | **string**| Offer ID. | [optional]
 **offset** | **int**| Offset. | [optional]
 **limit** | **int**| The maximum number of applications returned in the response. | [optional] [default to 50]

### Return type

[**\Swagger\Client\Model\BadgeApplications**](../Model/BadgeApplications.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **badgeApplicationsGetOne**
> \Swagger\Client\Model\BadgeApplication badgeApplicationsGetOne($application_id)

Get a badge application details

Use this resource to get a badge application details. Read more: <a href=\"../../badge/#3-pobierz-dane-zgłoszenie\" target=\"_blank\">PL</a> / <a href=\"../../en/badge/#3-retrieve-campaign-application\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BadgeCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = "application_id_example"; // string | Badge application ID.

try {
    $result = $apiInstance->badgeApplicationsGetOne($application_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BadgeCampaignsApi->badgeApplicationsGetOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **string**| Badge application ID. |

### Return type

[**\Swagger\Client\Model\BadgeApplication**](../Model/BadgeApplication.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **badgeCampaignsGetAll**
> \Swagger\Client\Model\GetBadgeCampaignsList badgeCampaignsGetAll()

Get a list of available badge campaigns

Badge campaigns are another way to promote your offers. You can apply for a badge, which - depending on a type - will be displayed on your offer page of on the list of offers. First - use this resource to get a list of all available badge campaigns at the moment, then use *POST /sale/badges* to apply for badge. Read more: <a href=\"../../badge/#1-lista-dostępnych-kampanii\" target=\"_blank\">PL</a> / <a href=\"../../en/badge/#1-list-of-available-campaigns\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BadgeCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->badgeCampaignsGetAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BadgeCampaignsApi->badgeCampaignsGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GetBadgeCampaignsList**](../Model/GetBadgeCampaignsList.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **badgeOperationsGetOne**
> \Swagger\Client\Model\BadgeOperation badgeOperationsGetOne($operation_id)

Get badge operation details

Use this resource to get badge operation details. Read more: <a href=\"../../badge/#sprawdzenie-statusu-operacji\" target=\"_blank\">PL</a> / <a href=\"../../en/badge/#check-operation-status\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BadgeCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$operation_id = "operation_id_example"; // string | Badge operation ID.

try {
    $result = $apiInstance->badgeOperationsGetOne($operation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BadgeCampaignsApi->badgeOperationsGetOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **operation_id** | **string**| Badge operation ID. |

### Return type

[**\Swagger\Client\Model\BadgeOperation**](../Model/BadgeOperation.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBadges**
> \Swagger\Client\Model\BadgesList getBadges($offer_id, $offset, $limit)

Get a list of badges

Use this resource to get a list of badges in authorized seller's offers. Read more: <a href=\"../../badge/#5-kampanie-przypisane-do-ofert\" target=\"_blank\">PL</a> / <a href=\"../../en/badge/#5-check-badges-assigned-to-offers\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BadgeCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = "offer_id_example"; // string | Offer ID.
$offset = 56; // int | Offset.
$limit = 50; // int | The maximum number of badges returned in the response.

try {
    $result = $apiInstance->getBadges($offer_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BadgeCampaignsApi->getBadges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Offer ID. | [optional]
 **offset** | **int**| Offset. | [optional]
 **limit** | **int**| The maximum number of badges returned in the response. | [optional] [default to 50]

### Return type

[**\Swagger\Client\Model\BadgesList**](../Model/BadgesList.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchBadge**
> \Swagger\Client\Model\InlineResponse202 patchBadge($offer_id, $campaign_id, $body)

Update campaign badge for the given offer

This resource allows you to update a campaign badge for the given offer. You can use *Location* provided in header of the response to track your update status. Read more: Update offer price in a campaign: <a href=\"../../badge/#zmiana-ceny-oferty-w-kampanii\" target=\"_blank\">PL</a> / <a href=\"../../en/badge/#change-price-of-the-offer-in-a-campaign\" target=\"_blank\">EN</a>. Finish marking an offer in a campaign: <a href=\"../../badge/#zakończenie-oznaczenia-oferty-w-kampanii\" target=\"_blank\">PL</a> / <a href=\"../../en/badge/#finish-marking-an-offer-in-a-campaign\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BadgeCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = "offer_id_example"; // string | Offer ID.
$campaign_id = "campaign_id_example"; // string | Campaign ID.
$body = new \Swagger\Client\Model\BadgePatchRequest(); // \Swagger\Client\Model\BadgePatchRequest | 

try {
    $result = $apiInstance->patchBadge($offer_id, $campaign_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BadgeCampaignsApi->patchBadge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Offer ID. |
 **campaign_id** | **string**| Campaign ID. |
 **body** | [**\Swagger\Client\Model\BadgePatchRequest**](../Model/BadgePatchRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postBadges**
> \Swagger\Client\Model\BadgeApplication postBadges($body)

Apply for badge in selected offer

This resource allows you to apply for a badge. Most badges involve additional fee charged. Your badge application will be verified and you will be notified about the verification status via e-mail. You can use *Location* provided in header of the response to track your application status. Application will be removed after 30 days when status of the application was changed form PROCESSED or DECLINED. Fees will be charged in accordance with Annex No. 1 to the   <a href=\"https://allegro.pl/regulaminy/regulamin-strefy-okazji-9dGVAPB69In\"     target=\"_blank\">Daily deals zone terms and conditions</a>.  By using this resource you agree to the   <a href=\"https://allegro.pl/regulaminy/regulamin-strefy-okazji-9dGVAPB69In\"     target=\"_blank\">Daily deals zone terms and conditions</a> or   <a href=\"https://allegro.pl/regulaminy/regulamin-programu-bonusowego-prowizja-nawet-0-5-0KPkAE7wkcv\"     target=\"_blank\">Commission discount terms and conditions</a>. Read more: <a href=\"../../badge/#2-zgłoś-ofertę-do-kampanii\" target=\"_blank\">PL</a> / <a href=\"../../en/badge/#2-submit-offer-to-a-campaign\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\BadgeCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BadgeApplicationRequest(); // \Swagger\Client\Model\BadgeApplicationRequest | 

try {
    $result = $apiInstance->postBadges($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BadgeCampaignsApi->postBadges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BadgeApplicationRequest**](../Model/BadgeApplicationRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\BadgeApplication**](../Model/BadgeApplication.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

