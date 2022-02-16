# Swagger\Client\ContactsApi

All URIs are relative to *https://api.{environment}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createContactUsingPOST**](ContactsApi.md#createcontactusingpost) | **POST** /sale/offer-contacts | Create a new contact
[**getContactUsingGET**](ContactsApi.md#getcontactusingget) | **GET** /sale/offer-contacts/{id} | Get contact details
[**getListOfContactsUsingGET**](ContactsApi.md#getlistofcontactsusingget) | **GET** /sale/offer-contacts | Get the user&#x27;s contacts
[**modifyContactUsingPUT**](ContactsApi.md#modifycontactusingput) | **PUT** /sale/offer-contacts/{id} | Modify contact details

# **createContactUsingPOST**
> \Swagger\Client\Model\ContactResponse createContactUsingPOST($body)

Create a new contact

Use this resource to create a new contact. Read more: <a href=\"../../account/#5-dane-kontaktowe\" target=\"_blank\">PL</a> / <a href=\"../../en/account/#5-contact-data\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ContactRequest(); // \Swagger\Client\Model\ContactRequest | New contact

try {
    $result = $apiInstance->createContactUsingPOST($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createContactUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ContactRequest**](../Model/ContactRequest.md)| New contact |

### Return type

[**\Swagger\Client\Model\ContactResponse**](../Model/ContactResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactUsingGET**
> \Swagger\Client\Model\ContactResponse getContactUsingGET($id)

Get contact details

Use this resource to get contact details. Read more: <a href=\"../../account/#5-dane-kontaktowe\" target=\"_blank\">PL</a> / <a href=\"../../en/account/#5-contact-data\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Contact identifier.

try {
    $result = $apiInstance->getContactUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContactUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Contact identifier. |

### Return type

[**\Swagger\Client\Model\ContactResponse**](../Model/ContactResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListOfContactsUsingGET**
> \Swagger\Client\Model\ContactResponseList getListOfContactsUsingGET()

Get the user's contacts

Use this resource to get details of many contacts. Read more: <a href=\"../../account/#5-dane-kontaktowe\" target=\"_blank\">PL</a> / <a href=\"../../en/account/#5-contact-data\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getListOfContactsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getListOfContactsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ContactResponseList**](../Model/ContactResponseList.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyContactUsingPUT**
> \Swagger\Client\Model\ContactResponse modifyContactUsingPUT($body, $id)

Modify contact details

Use this resource to modify contact details. Read more: <a href=\"../../account/#5-dane-kontaktowe\" target=\"_blank\">PL</a> / <a href=\"../../en/account/#5-contact-data\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ContactRequest(); // \Swagger\Client\Model\ContactRequest | Contact
$id = "id_example"; // string | Contact identifier.

try {
    $result = $apiInstance->modifyContactUsingPUT($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->modifyContactUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ContactRequest**](../Model/ContactRequest.md)| Contact |
 **id** | **string**| Contact identifier. |

### Return type

[**\Swagger\Client\Model\ContactResponse**](../Model/ContactResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

