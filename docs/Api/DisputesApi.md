# Swagger\Client\DisputesApi

All URIs are relative to *https://api.{environment}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addMessageToDisputeUsingPOST**](DisputesApi.md#addmessagetodisputeusingpost) | **POST** /sale/disputes/{disputeId}/messages | Add a message to a dispute
[**createAnAttachmentUsingPOST**](DisputesApi.md#createanattachmentusingpost) | **POST** /sale/dispute-attachments | Create an attachment declaration
[**getAttachmentUsingGET**](DisputesApi.md#getattachmentusingget) | **GET** /sale/dispute-attachments/{attachmentId} | Get an attachment
[**getDisputeUsingGET**](DisputesApi.md#getdisputeusingget) | **GET** /sale/disputes/{disputeId} | Get a single dispute
[**getListOfDisputesUsingGET**](DisputesApi.md#getlistofdisputesusingget) | **GET** /sale/disputes | Get the user&#x27;s disputes
[**getMessagesFromDisputeUsingGET**](DisputesApi.md#getmessagesfromdisputeusingget) | **GET** /sale/disputes/{disputeId}/messages | Get the messages within a dispute
[**uploadDisputeAttachmentUsingPUT**](DisputesApi.md#uploaddisputeattachmentusingput) | **PUT** /sale/dispute-attachments/{attachmentId} | Upload a dispute message attachment

# **addMessageToDisputeUsingPOST**
> \Swagger\Client\Model\DisputeMessage addMessageToDisputeUsingPOST($body, $dispute_id)

Add a message to a dispute

Use this resource to post a message in certain dispute. At least one of fields: 'text', 'attachment' has to be present. Read more: <a href=\"../../dispute/#nowa-wiadomość-w-dyskusji\" target=\"_blank\">PL</a> / <a href=\"../../en/dispute/#add-a-new-message-in-the-discussion\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\MessageRequest(); // \Swagger\Client\Model\MessageRequest | Message request
$dispute_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Dispute identifier.

try {
    $result = $apiInstance->addMessageToDisputeUsingPOST($body, $dispute_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->addMessageToDisputeUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MessageRequest**](../Model/MessageRequest.md)| Message request |
 **dispute_id** | [**string**](../Model/.md)| Dispute identifier. |

### Return type

[**\Swagger\Client\Model\DisputeMessage**](../Model/DisputeMessage.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAnAttachmentUsingPOST**
> \Swagger\Client\Model\DisputeAttachmentId createAnAttachmentUsingPOST($body)

Create an attachment declaration

Use this resource to post an attachment declaration. Read more: <a href=\"../../dispute/#deklaracja-załącznika\" target=\"_blank\">PL</a> / <a href=\"../../en/dispute/#attachment-declaration\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AttachmentDeclaration(); // \Swagger\Client\Model\AttachmentDeclaration | A detailed declaration of a file to be uploaded

try {
    $result = $apiInstance->createAnAttachmentUsingPOST($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->createAnAttachmentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AttachmentDeclaration**](../Model/AttachmentDeclaration.md)| A detailed declaration of a file to be uploaded |

### Return type

[**\Swagger\Client\Model\DisputeAttachmentId**](../Model/DisputeAttachmentId.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAttachmentUsingGET**
> string getAttachmentUsingGET($attachment_id)

Get an attachment

Use this resource to get an attachment. Read more: <a href=\"../../dispute/#pobranie-załącznika\" target=\"_blank\">PL</a> / <a href=\"../../en/dispute/#attachment-related-to-the-discussion\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Attachment identifier.

try {
    $result = $apiInstance->getAttachmentUsingGET($attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->getAttachmentUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | [**string**](../Model/.md)| Attachment identifier. |

### Return type

**string**

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDisputeUsingGET**
> \Swagger\Client\Model\Dispute getDisputeUsingGET($dispute_id)

Get a single dispute

Use this resource to get a single dispute. Read more: <a href=\"../../dispute/#szczegółowe-informacje-o-dyskusji\" target=\"_blank\">PL</a> / <a href=\"../../en/dispute/#information-about-a-particular-discussion\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dispute_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Dispute identifier.

try {
    $result = $apiInstance->getDisputeUsingGET($dispute_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->getDisputeUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | [**string**](../Model/.md)| Dispute identifier. |

### Return type

[**\Swagger\Client\Model\Dispute**](../Model/Dispute.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListOfDisputesUsingGET**
> \Swagger\Client\Model\DisputeListResponse getListOfDisputesUsingGET($checkout_form_id, $limit, $offset)

Get the user's disputes

Use this resource to get the list of your disputes. Read more: <a href=\"../../dispute/#dyskusje-na-koncie\" target=\"_blank\">PL</a> / <a href=\"../../en/dispute/#all-discussions\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$checkout_form_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Checkout form identifier.
$limit = 10; // int | The maximum number of disputes in a response.
$offset = 0; // int | Index of first returned dispute.

try {
    $result = $apiInstance->getListOfDisputesUsingGET($checkout_form_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->getListOfDisputesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checkout_form_id** | [**string**](../Model/.md)| Checkout form identifier. | [optional]
 **limit** | **int**| The maximum number of disputes in a response. | [optional] [default to 10]
 **offset** | **int**| Index of first returned dispute. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\DisputeListResponse**](../Model/DisputeListResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessagesFromDisputeUsingGET**
> \Swagger\Client\Model\DisputeMessageList getMessagesFromDisputeUsingGET($dispute_id, $limit, $offset)

Get the messages within a dispute

Use this resource to get the list of messages within dispute. Read more: <a href=\"../../dispute/#wiadomości-z-dyskusji\" target=\"_blank\">PL</a> / <a href=\"../../en/dispute/#all-messages-within-a-discussion\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dispute_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Dispute identifier.
$limit = 10; // int | The maximum number of messages within dispute returned in a response.
$offset = 0; // int | Index of first returned message within dispute.

try {
    $result = $apiInstance->getMessagesFromDisputeUsingGET($dispute_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->getMessagesFromDisputeUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dispute_id** | [**string**](../Model/.md)| Dispute identifier. |
 **limit** | **int**| The maximum number of messages within dispute returned in a response. | [optional] [default to 10]
 **offset** | **int**| Index of first returned message within dispute. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\DisputeMessageList**](../Model/DisputeMessageList.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadDisputeAttachmentUsingPUT**
> uploadDisputeAttachmentUsingPUT($body, $attachment_id)

Upload a dispute message attachment

Upload a dispute message attachment. This operation should be used after creating an attachment declaration with *POST /sale/dispute-attachments* **Important!** You can find the URL address to upload the file to our server in the *Location* response header of *POST /sale/dispute-attachments*. The URL is unique and one-time. As its format may change in time, you should always use the address from the header. Do not compose the address on your own. Read more: <a href=\"../../dispute/#dodanie-załącznika\" target=\"_blank\">PL</a> / <a href=\"../../en/dispute/#adding-an-attachment\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Object(); // Object | 
$attachment_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Attachment identifier.

try {
    $apiInstance->uploadDisputeAttachmentUsingPUT($body, $attachment_id);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->uploadDisputeAttachmentUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **Object**|  |
 **attachment_id** | [**string**](../Model/.md)| Attachment identifier. |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: image/png, image/gif, image/bmp, image/tiff, image/jpeg, application/pdf
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

