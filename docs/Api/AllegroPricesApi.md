# Swagger\Client\AllegroPricesApi

All URIs are relative to *https://api.{environment}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllegroPricesConsentForOffer**](AllegroPricesApi.md#getallegropricesconsentforoffer) | **GET** /sale/allegro-prices-offer-consents/{offerId} | Get the current consent value for an offer
[**getAllegroPricesEligibilityForAccount**](AllegroPricesApi.md#getallegropriceseligibilityforaccount) | **GET** /sale/allegro-prices-account-eligibility | Get the current eligibility information for the account
[**updateAllegroPricesConsentForAccount**](AllegroPricesApi.md#updateallegropricesconsentforaccount) | **PUT** /sale/allegro-prices-account-consent | Update consent value for the account
[**updateAllegroPricesConsentForOffer**](AllegroPricesApi.md#updateallegropricesconsentforoffer) | **PUT** /sale/allegro-prices-offer-consents/{offerId} | Update consent value for an offer

# **getAllegroPricesConsentForOffer**
> \Swagger\Client\Model\AllegroPricesConsentChangeResponse getAllegroPricesConsentForOffer($offer_id)

Get the current consent value for an offer

Use this resource to get the current Allegro Prices consent value for an offer. Read more: <a href=\"../../badge/#9-allegro-ceny-jak-zarządzać-zgodami-na-uczestnictwo-w-programie\" target=\"_blank\">PL</a> / <a href=\"../../en/badge/#39-allegro-prices-how-to-manage-program-participation-consents\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AllegroPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = "offer_id_example"; // string | The offer ID.

try {
    $result = $apiInstance->getAllegroPricesConsentForOffer($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllegroPricesApi->getAllegroPricesConsentForOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| The offer ID. |

### Return type

[**\Swagger\Client\Model\AllegroPricesConsentChangeResponse**](../Model/AllegroPricesConsentChangeResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllegroPricesEligibilityForAccount**
> \Swagger\Client\Model\AllegroPricesEligibilityResponse getAllegroPricesEligibilityForAccount()

Get the current eligibility information for the account

Use this resource to get the current Allegro Prices eligibility information for the account. Read more: <a href=\"../../badge/#9-allegro-ceny-jak-zarządzać-zgodami-na-uczestnictwo-w-programie\" target=\"_blank\">PL</a> / <a href=\"../../en/badge/#39-allegro-prices-how-to-manage-program-participation-consents\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AllegroPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllegroPricesEligibilityForAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllegroPricesApi->getAllegroPricesEligibilityForAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\AllegroPricesEligibilityResponse**](../Model/AllegroPricesEligibilityResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAllegroPricesConsentForAccount**
> \Swagger\Client\Model\AllegroPricesConsentChangeResponse updateAllegroPricesConsentForAccount($body)

Update consent value for the account

Use this resource to update the Allegro Prices consent value for the account. Read more: <a href=\"../../badge/#9-allegro-ceny-jak-zarządzać-zgodami-na-uczestnictwo-w-programie\" target=\"_blank\">PL</a> / <a href=\"../../en/badge/#39-allegro-prices-how-to-manage-program-participation-consents\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AllegroPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AllegroPricesChangeRequest(); // \Swagger\Client\Model\AllegroPricesChangeRequest | 

try {
    $result = $apiInstance->updateAllegroPricesConsentForAccount($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllegroPricesApi->updateAllegroPricesConsentForAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AllegroPricesChangeRequest**](../Model/AllegroPricesChangeRequest.md)|  |

### Return type

[**\Swagger\Client\Model\AllegroPricesConsentChangeResponse**](../Model/AllegroPricesConsentChangeResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAllegroPricesConsentForOffer**
> \Swagger\Client\Model\AllegroPricesConsentChangeResponse updateAllegroPricesConsentForOffer($body, $offer_id)

Update consent value for an offer

Use this resource to update Allegro Prices consent value for an offer. Read more: <a href=\"../../badge/#9-allegro-ceny-jak-zarządzać-zgodami-na-uczestnictwo-w-programie\" target=\"_blank\">PL</a> / <a href=\"../../en/badge/#39-allegro-prices-how-to-manage-program-participation-consents\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AllegroPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AllegroPricesChangeRequest(); // \Swagger\Client\Model\AllegroPricesChangeRequest | 
$offer_id = "offer_id_example"; // string | The offer ID.

try {
    $result = $apiInstance->updateAllegroPricesConsentForOffer($body, $offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllegroPricesApi->updateAllegroPricesConsentForOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AllegroPricesChangeRequest**](../Model/AllegroPricesChangeRequest.md)|  |
 **offer_id** | **string**| The offer ID. |

### Return type

[**\Swagger\Client\Model\AllegroPricesConsentChangeResponse**](../Model/AllegroPricesConsentChangeResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

