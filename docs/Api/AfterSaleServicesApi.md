# Swagger\Client\AfterSaleServicesApi

All URIs are relative to *https://api.{environment}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAfterSalesServiceConditionsAttachmentUsingPOST**](AfterSaleServicesApi.md#createaftersalesserviceconditionsattachmentusingpost) | **POST** /after-sales-service-conditions/attachments | Create a warranty attachment metadata
[**createAfterSalesServiceImpliedWarrantyUsingPOST**](AfterSaleServicesApi.md#createaftersalesserviceimpliedwarrantyusingpost) | **POST** /after-sales-service-conditions/implied-warranties | Create new user&#x27;s implied warranty
[**createAfterSalesServiceReturnPolicyUsingPOST**](AfterSaleServicesApi.md#createaftersalesservicereturnpolicyusingpost) | **POST** /after-sales-service-conditions/return-policies | Create new user&#x27;s return policy
[**createAfterSalesServiceWarrantyUsingPOST**](AfterSaleServicesApi.md#createaftersalesservicewarrantyusingpost) | **POST** /after-sales-service-conditions/warranties | Create new user&#x27;s warranty
[**getAfterSalesServiceImpliedWarrantyUsingGET**](AfterSaleServicesApi.md#getaftersalesserviceimpliedwarrantyusingget) | **GET** /after-sales-service-conditions/implied-warranties/{impliedWarrantyId} | Get the user&#x27;s implied warranty
[**getAfterSalesServiceReturnPolicyUsingGET**](AfterSaleServicesApi.md#getaftersalesservicereturnpolicyusingget) | **GET** /after-sales-service-conditions/return-policies/{returnPolicyId} | Get the user&#x27;s return policy
[**getAfterSalesServiceWarrantyUsingGET**](AfterSaleServicesApi.md#getaftersalesservicewarrantyusingget) | **GET** /after-sales-service-conditions/warranties/{warrantyId} | Get the user&#x27;s warranty
[**getPublicSellerListingUsingGET**](AfterSaleServicesApi.md#getpublicsellerlistingusingget) | **GET** /after-sales-service-conditions/implied-warranties | Get the user&#x27;s implied warranties
[**getPublicSellerListingUsingGET1**](AfterSaleServicesApi.md#getpublicsellerlistingusingget1) | **GET** /after-sales-service-conditions/return-policies | Get the user&#x27;s return policies
[**getPublicSellerListingUsingGET2**](AfterSaleServicesApi.md#getpublicsellerlistingusingget2) | **GET** /after-sales-service-conditions/warranties | Get the user&#x27;s warranties
[**updateAfterSalesServiceImpliedWarrantyUsingPUT**](AfterSaleServicesApi.md#updateaftersalesserviceimpliedwarrantyusingput) | **PUT** /after-sales-service-conditions/implied-warranties/{impliedWarrantyId} | Change the user&#x27;s implied warranty
[**updateAfterSalesServiceReturnPolicyUsingPUT**](AfterSaleServicesApi.md#updateaftersalesservicereturnpolicyusingput) | **PUT** /after-sales-service-conditions/return-policies/{returnPolicyId} | Change the user&#x27;s return policy
[**updateAfterSalesServiceWarrantyUsingPUT**](AfterSaleServicesApi.md#updateaftersalesservicewarrantyusingput) | **PUT** /after-sales-service-conditions/warranties/{warrantyId} | Change the user&#x27;s warranty
[**uploadAfterSalesServiceConditionsAttachmentUsingPUT**](AfterSaleServicesApi.md#uploadaftersalesserviceconditionsattachmentusingput) | **PUT** /after-sales-service-conditions/attachments/{attachmentId} | Upload an warranty attachment

# **createAfterSalesServiceConditionsAttachmentUsingPOST**
> \Swagger\Client\Model\AfterSalesServicesAttachment createAfterSalesServiceConditionsAttachmentUsingPOST($body)

Create a warranty attachment metadata

You can attach PDF files to warranties. Uploading attachments flow:   1. Create an attachment object to receive an upload URL (*POST /after-sales-service-conditions/attachments*),   2. Use the upload URL to submit the PDF file (*PUT /after-sales-service-conditions/attachments/{attachmentId}*),   3. Create (or update) warranty with attachment (*POST /after-sales-service-conditions/warranties*).    Read more: <a href=\"../../account/#informacje-o-gwarancjach\" target=\"_blank\">PL</a> / <a href=\"../../en/account/#warranties\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AftersalesserviceconditionsAttachmentsBody(); // \Swagger\Client\Model\AftersalesserviceconditionsAttachmentsBody | After sale services attachment

try {
    $result = $apiInstance->createAfterSalesServiceConditionsAttachmentUsingPOST($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->createAfterSalesServiceConditionsAttachmentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AftersalesserviceconditionsAttachmentsBody**](../Model/AftersalesserviceconditionsAttachmentsBody.md)| After sale services attachment |

### Return type

[**\Swagger\Client\Model\AfterSalesServicesAttachment**](../Model/AfterSalesServicesAttachment.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAfterSalesServiceImpliedWarrantyUsingPOST**
> \Swagger\Client\Model\ImpliedWarrantyResponse createAfterSalesServiceImpliedWarrantyUsingPOST($body)

Create new user's implied warranty

Use this resource to create an implied warranty definition. Read more: <a href=\"../../account/#warunki-reklamacji\" target=\"_blank\">PL</a> / <a href=\"../../en/account/#complaints-policies\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ImpliedWarrantyRequest(); // \Swagger\Client\Model\ImpliedWarrantyRequest | Implied warranty

try {
    $result = $apiInstance->createAfterSalesServiceImpliedWarrantyUsingPOST($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->createAfterSalesServiceImpliedWarrantyUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ImpliedWarrantyRequest**](../Model/ImpliedWarrantyRequest.md)| Implied warranty |

### Return type

[**\Swagger\Client\Model\ImpliedWarrantyResponse**](../Model/ImpliedWarrantyResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAfterSalesServiceReturnPolicyUsingPOST**
> \Swagger\Client\Model\ReturnPolicyResponse createAfterSalesServiceReturnPolicyUsingPOST($body)

Create new user's return policy

Use this resource to create a return policy definition. Read more: <a href=\"../../account/#warunki-zwrotów\" target=\"_blank\">PL</a> / <a href=\"../../en/account/#return-policies\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ReturnPolicyRequest(); // \Swagger\Client\Model\ReturnPolicyRequest | Return Policy

try {
    $result = $apiInstance->createAfterSalesServiceReturnPolicyUsingPOST($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->createAfterSalesServiceReturnPolicyUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ReturnPolicyRequest**](../Model/ReturnPolicyRequest.md)| Return Policy |

### Return type

[**\Swagger\Client\Model\ReturnPolicyResponse**](../Model/ReturnPolicyResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAfterSalesServiceWarrantyUsingPOST**
> \Swagger\Client\Model\WarrantyResponse createAfterSalesServiceWarrantyUsingPOST($body)

Create new user's warranty

Use this resource to create a warranty definition. Read more: <a href=\"../../account/#informacje-o-gwarancjach\" target=\"_blank\">PL</a> / <a href=\"../../en/account/#warranties\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\WarrantyRequest(); // \Swagger\Client\Model\WarrantyRequest | Warranty

try {
    $result = $apiInstance->createAfterSalesServiceWarrantyUsingPOST($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->createAfterSalesServiceWarrantyUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\WarrantyRequest**](../Model/WarrantyRequest.md)| Warranty |

### Return type

[**\Swagger\Client\Model\WarrantyResponse**](../Model/WarrantyResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAfterSalesServiceImpliedWarrantyUsingGET**
> \Swagger\Client\Model\ImpliedWarrantyResponse getAfterSalesServiceImpliedWarrantyUsingGET($implied_warranty_id)

Get the user's implied warranty

Use this resource to get an implied warranty details. Read more: <a href=\"../../account/#warunki-reklamacji\" target=\"_blank\">PL</a> / <a href=\"../../en/account/#complaints-policies\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$implied_warranty_id = "implied_warranty_id_example"; // string | The ID of the implied warranty.

try {
    $result = $apiInstance->getAfterSalesServiceImpliedWarrantyUsingGET($implied_warranty_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->getAfterSalesServiceImpliedWarrantyUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **implied_warranty_id** | **string**| The ID of the implied warranty. |

### Return type

[**\Swagger\Client\Model\ImpliedWarrantyResponse**](../Model/ImpliedWarrantyResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAfterSalesServiceReturnPolicyUsingGET**
> \Swagger\Client\Model\ReturnPolicyResponse getAfterSalesServiceReturnPolicyUsingGET($return_policy_id)

Get the user's return policy

Use this resource to get a return policy details. Read more: <a href=\"../../account/#warunki-zwrotów\" target=\"_blank\">PL</a> / <a href=\"../../en/account/#return-policies\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$return_policy_id = "return_policy_id_example"; // string | The ID of the return policy.

try {
    $result = $apiInstance->getAfterSalesServiceReturnPolicyUsingGET($return_policy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->getAfterSalesServiceReturnPolicyUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **return_policy_id** | **string**| The ID of the return policy. |

### Return type

[**\Swagger\Client\Model\ReturnPolicyResponse**](../Model/ReturnPolicyResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAfterSalesServiceWarrantyUsingGET**
> \Swagger\Client\Model\WarrantyResponse getAfterSalesServiceWarrantyUsingGET($warranty_id)

Get the user's warranty

Use this resource to get a warranty details. Read more: <a href=\"../../account/#informacje-o-gwarancjach\" target=\"_blank\">PL</a> / <a href=\"../../en/account/#warranties\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warranty_id = "warranty_id_example"; // string | The ID of the warranty.

try {
    $result = $apiInstance->getAfterSalesServiceWarrantyUsingGET($warranty_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->getAfterSalesServiceWarrantyUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **warranty_id** | **string**| The ID of the warranty. |

### Return type

[**\Swagger\Client\Model\WarrantyResponse**](../Model/WarrantyResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublicSellerListingUsingGET**
> \Swagger\Client\Model\ImpliedWarrantiesListImpliedWarrantyBasic_ getPublicSellerListingUsingGET($limit, $offset)

Get the user's implied warranties

Use this resource to get seller implied warranties listing. Read more: <a href=\"../../account/#warunki-reklamacji\" target=\"_blank\">PL</a> / <a href=\"../../en/account/#complaints-policies\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 60; // int | The limit of elements in the response.
$offset = 0; // int | The offset of elements in the response.

try {
    $result = $apiInstance->getPublicSellerListingUsingGET($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->getPublicSellerListingUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The limit of elements in the response. | [optional] [default to 60]
 **offset** | **int**| The offset of elements in the response. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\ImpliedWarrantiesListImpliedWarrantyBasic_**](../Model/ImpliedWarrantiesListImpliedWarrantyBasic_.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublicSellerListingUsingGET1**
> \Swagger\Client\Model\ReturnPoliciesListReturnPolicyBasic_ getPublicSellerListingUsingGET1($limit, $offset)

Get the user's return policies

Use this resource to get seller return policies listing. Read more: <a href=\"../../account/#warunki-zwrotów\" target=\"_blank\">PL</a> / <a href=\"../../en/account/#return-policies\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 60; // int | The limit of elements in the response.
$offset = 0; // int | The offset of elements in the response.

try {
    $result = $apiInstance->getPublicSellerListingUsingGET1($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->getPublicSellerListingUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The limit of elements in the response. | [optional] [default to 60]
 **offset** | **int**| The offset of elements in the response. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\ReturnPoliciesListReturnPolicyBasic_**](../Model/ReturnPoliciesListReturnPolicyBasic_.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublicSellerListingUsingGET2**
> \Swagger\Client\Model\WarrantiesListWarrantyBasic_ getPublicSellerListingUsingGET2($limit, $offset)

Get the user's warranties

Use this resource to get seller warranties listing. Read more: <a href=\"../../account/#informacje-o-gwarancjach\" target=\"_blank\">PL</a> / <a href=\"../../en/account/#warranties\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 60; // int | The limit of elements in the response.
$offset = 0; // int | The offset of elements in the response.

try {
    $result = $apiInstance->getPublicSellerListingUsingGET2($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->getPublicSellerListingUsingGET2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The limit of elements in the response. | [optional] [default to 60]
 **offset** | **int**| The offset of elements in the response. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\WarrantiesListWarrantyBasic_**](../Model/WarrantiesListWarrantyBasic_.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAfterSalesServiceImpliedWarrantyUsingPUT**
> \Swagger\Client\Model\ImpliedWarrantyResponse updateAfterSalesServiceImpliedWarrantyUsingPUT($body, $implied_warranty_id)

Change the user's implied warranty

Use this resource to modify the implied warranty details. Read more: <a href=\"../../account/#warunki-reklamacji\" target=\"_blank\">PL</a> / <a href=\"../../en/account/#complaints-policies\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ImpliedWarrantyRequest(); // \Swagger\Client\Model\ImpliedWarrantyRequest | Implied warranty
$implied_warranty_id = "implied_warranty_id_example"; // string | The ID of the implied warranty.

try {
    $result = $apiInstance->updateAfterSalesServiceImpliedWarrantyUsingPUT($body, $implied_warranty_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->updateAfterSalesServiceImpliedWarrantyUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ImpliedWarrantyRequest**](../Model/ImpliedWarrantyRequest.md)| Implied warranty |
 **implied_warranty_id** | **string**| The ID of the implied warranty. |

### Return type

[**\Swagger\Client\Model\ImpliedWarrantyResponse**](../Model/ImpliedWarrantyResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAfterSalesServiceReturnPolicyUsingPUT**
> \Swagger\Client\Model\ReturnPolicyResponse updateAfterSalesServiceReturnPolicyUsingPUT($body, $return_policy_id)

Change the user's return policy

Use this resource to modify the return policy details. Read more: <a href=\"../../account/#warunki-zwrotów\" target=\"_blank\">PL</a> / <a href=\"../../en/account/#return-policies\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ReturnPolicyRequest(); // \Swagger\Client\Model\ReturnPolicyRequest | Return Policy
$return_policy_id = "return_policy_id_example"; // string | The ID of the return policy.

try {
    $result = $apiInstance->updateAfterSalesServiceReturnPolicyUsingPUT($body, $return_policy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->updateAfterSalesServiceReturnPolicyUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ReturnPolicyRequest**](../Model/ReturnPolicyRequest.md)| Return Policy |
 **return_policy_id** | **string**| The ID of the return policy. |

### Return type

[**\Swagger\Client\Model\ReturnPolicyResponse**](../Model/ReturnPolicyResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAfterSalesServiceWarrantyUsingPUT**
> \Swagger\Client\Model\WarrantyResponse updateAfterSalesServiceWarrantyUsingPUT($body, $warranty_id)

Change the user's warranty

Use this resource to modify the warranty details. Read more: <a href=\"../../account/#informacje-o-gwarancjach\" target=\"_blank\">PL</a> / <a href=\"../../en/account/#warranties\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\WarrantyRequest(); // \Swagger\Client\Model\WarrantyRequest | Warranty
$warranty_id = "warranty_id_example"; // string | The ID of the warranty.

try {
    $result = $apiInstance->updateAfterSalesServiceWarrantyUsingPUT($body, $warranty_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->updateAfterSalesServiceWarrantyUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\WarrantyRequest**](../Model/WarrantyRequest.md)| Warranty |
 **warranty_id** | **string**| The ID of the warranty. |

### Return type

[**\Swagger\Client\Model\WarrantyResponse**](../Model/WarrantyResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadAfterSalesServiceConditionsAttachmentUsingPUT**
> \Swagger\Client\Model\AfterSalesServicesAttachment uploadAfterSalesServiceConditionsAttachmentUsingPUT($attachment_id, $body)

Upload an warranty attachment

Upload an after sale services attachment. This operation should be used after creating an offer attachment with *POST /sale/offer-attachments* **Important!** You can find the URL address to upload the file to our server in the *Location* response header of *POST /after-sales-service-conditions/attachments*. The URL is unique and one-time. As its format may change in time, you should always use the address from the header. Do not compose the address on your own. Read more: <a href=\"../../account/#informacje-o-gwarancjach\" target=\"_blank\">PL</a> / <a href=\"../../en/account/#warranties\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AfterSaleServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = "attachment_id_example"; // string | The ID of the attachment.
$body = new \Swagger\Client\Model\Object(); // Object | 

try {
    $result = $apiInstance->uploadAfterSalesServiceConditionsAttachmentUsingPUT($attachment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AfterSaleServicesApi->uploadAfterSalesServiceConditionsAttachmentUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **string**| The ID of the attachment. |
 **body** | **Object**|  | [optional]

### Return type

[**\Swagger\Client\Model\AfterSalesServicesAttachment**](../Model/AfterSalesServicesAttachment.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/pdf
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

