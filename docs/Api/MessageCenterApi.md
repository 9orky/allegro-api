# Swagger\Client\MessageCenterApi

All URIs are relative to *https://api.{environment}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeReadFlagOnThreadPUT**](MessageCenterApi.md#changereadflagonthreadput) | **PUT** /messaging/threads/{threadId}/read | Mark a particular thread as read
[**deleteMessageDELETE**](MessageCenterApi.md#deletemessagedelete) | **DELETE** /messaging/messages/{messageId} | Delete single message
[**downloadAttachmentGET**](MessageCenterApi.md#downloadattachmentget) | **GET** /messaging/message-attachments/{attachmentId} | Download attachment
[**getMessageGET**](MessageCenterApi.md#getmessageget) | **GET** /messaging/messages/{messageId} | Get single message
[**getThreadGET**](MessageCenterApi.md#getthreadget) | **GET** /messaging/threads/{threadId} | Get user thread
[**listMessagesGET**](MessageCenterApi.md#listmessagesget) | **GET** /messaging/threads/{threadId}/messages | List messages in thread
[**listThreadsGET**](MessageCenterApi.md#listthreadsget) | **GET** /messaging/threads | List user threads
[**newAttachmentDeclarationPOST**](MessageCenterApi.md#newattachmentdeclarationpost) | **POST** /messaging/message-attachments | Add attachment declaration
[**newMessageInThreadPOST**](MessageCenterApi.md#newmessageinthreadpost) | **POST** /messaging/threads/{threadId}/messages | Write a new message in thread
[**newMessagePOST**](MessageCenterApi.md#newmessagepost) | **POST** /messaging/messages | Write a new message
[**uploadAttachmentPUT**](MessageCenterApi.md#uploadattachmentput) | **PUT** /messaging/message-attachments/{attachmentId} | Upload attachment binary data

# **changeReadFlagOnThreadPUT**
> \Swagger\Client\Model\Thread changeReadFlagOnThreadPUT($body, $thread_id)

Mark a particular thread as read

Use this resource to mark thread with provided identifier as read.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ThreadReadFlag(); // \Swagger\Client\Model\ThreadReadFlag | Updated read flag
$thread_id = "thread_id_example"; // string | Identifier of thread to be marked.

try {
    $result = $apiInstance->changeReadFlagOnThreadPUT($body, $thread_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageCenterApi->changeReadFlagOnThreadPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ThreadReadFlag**](../Model/ThreadReadFlag.md)| Updated read flag |
 **thread_id** | **string**| Identifier of thread to be marked. |

### Return type

[**\Swagger\Client\Model\Thread**](../Model/Thread.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMessageDELETE**
> deleteMessageDELETE($message_id)

Delete single message

Use this resource to delete message with provided identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = "message_id_example"; // string | Identifier of the message to delete.

try {
    $apiInstance->deleteMessageDELETE($message_id);
} catch (Exception $e) {
    echo 'Exception when calling MessageCenterApi->deleteMessageDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_id** | **string**| Identifier of the message to delete. |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadAttachmentGET**
> string downloadAttachmentGET($attachment_id)

Download attachment

Use this resource to download attachment with provided identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = "attachment_id_example"; // string | Identifier of the attachment that will be downloaded.

try {
    $result = $apiInstance->downloadAttachmentGET($attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageCenterApi->downloadAttachmentGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **string**| Identifier of the attachment that will be downloaded. |

### Return type

**string**

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessageGET**
> \Swagger\Client\Model\Message getMessageGET($message_id)

Get single message

Use this resource to get message with provided identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message_id = "message_id_example"; // string | Identifier of message to be returned.

try {
    $result = $apiInstance->getMessageGET($message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageCenterApi->getMessageGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_id** | **string**| Identifier of message to be returned. |

### Return type

[**\Swagger\Client\Model\Message**](../Model/Message.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getThreadGET**
> \Swagger\Client\Model\Thread getThreadGET($thread_id)

Get user thread

Use this resource to get thread with provided identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$thread_id = "thread_id_example"; // string | Identifier of thread to get.

try {
    $result = $apiInstance->getThreadGET($thread_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageCenterApi->getThreadGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thread_id** | **string**| Identifier of thread to get. |

### Return type

[**\Swagger\Client\Model\Thread**](../Model/Thread.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMessagesGET**
> \Swagger\Client\Model\MessagesList listMessagesGET($thread_id, $limit, $offset, $before, $after)

List messages in thread

Use this resource to list messages in thread with provided identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$thread_id = "thread_id_example"; // string | Identifier of thread to get messages from.
$limit = 20; // int | The maximum number of messages returned in the response.
$offset = 0; // int | Index of the first returned message from all results.
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Message creation date before filter parameter (exclusive) - cannot be used with offset.
$after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Message creation date after filter parameter (exclusive).

try {
    $result = $apiInstance->listMessagesGET($thread_id, $limit, $offset, $before, $after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageCenterApi->listMessagesGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thread_id** | **string**| Identifier of thread to get messages from. |
 **limit** | **int**| The maximum number of messages returned in the response. | [optional] [default to 20]
 **offset** | **int**| Index of the first returned message from all results. | [optional] [default to 0]
 **before** | **\DateTime**| Message creation date before filter parameter (exclusive) - cannot be used with offset. | [optional]
 **after** | **\DateTime**| Message creation date after filter parameter (exclusive). | [optional]

### Return type

[**\Swagger\Client\Model\MessagesList**](../Model/MessagesList.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listThreadsGET**
> \Swagger\Client\Model\ThreadsList listThreadsGET($limit, $offset)

List user threads

Use this resource to get the list of user threads sorted by last message date, starting from newest.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 20; // int | The maximum number of threads returned in the response.
$offset = 0; // int | Index of the first returned thread from all results.

try {
    $result = $apiInstance->listThreadsGET($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageCenterApi->listThreadsGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| The maximum number of threads returned in the response. | [optional] [default to 20]
 **offset** | **int**| Index of the first returned thread from all results. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\ThreadsList**](../Model/ThreadsList.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newAttachmentDeclarationPOST**
> \Swagger\Client\Model\MessageAttachmentId newAttachmentDeclarationPOST($body)

Add attachment declaration

Use this resource to add attachment declaration before uploading.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\NewAttachmentDeclaration(); // \Swagger\Client\Model\NewAttachmentDeclaration | 

try {
    $result = $apiInstance->newAttachmentDeclarationPOST($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageCenterApi->newAttachmentDeclarationPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NewAttachmentDeclaration**](../Model/NewAttachmentDeclaration.md)|  |

### Return type

[**\Swagger\Client\Model\MessageAttachmentId**](../Model/MessageAttachmentId.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newMessageInThreadPOST**
> \Swagger\Client\Model\Message newMessageInThreadPOST($body, $thread_id)

Write a new message in thread

Use this resource to write new message in existing thread.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\NewMessageInThread(); // \Swagger\Client\Model\NewMessageInThread | 
$thread_id = "thread_id_example"; // string | Identifier of thread to write message to.

try {
    $result = $apiInstance->newMessageInThreadPOST($body, $thread_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageCenterApi->newMessageInThreadPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NewMessageInThread**](../Model/NewMessageInThread.md)|  |
 **thread_id** | **string**| Identifier of thread to write message to. |

### Return type

[**\Swagger\Client\Model\Message**](../Model/Message.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newMessagePOST**
> \Swagger\Client\Model\Message newMessagePOST($body)

Write a new message

Use this resource to write new message to recipient.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\NewMessage(); // \Swagger\Client\Model\NewMessage | Object representing new message.

try {
    $result = $apiInstance->newMessagePOST($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageCenterApi->newMessagePOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NewMessage**](../Model/NewMessage.md)| Object representing new message. |

### Return type

[**\Swagger\Client\Model\Message**](../Model/Message.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadAttachmentPUT**
> \Swagger\Client\Model\MessageAttachmentId uploadAttachmentPUT($body, $attachment_id)

Upload attachment binary data

Use this resource to upload attachment using identifier that was declared.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageCenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Object(); // Object | 
$attachment_id = "attachment_id_example"; // string | The identifier of attachment that will be uploaded.

try {
    $result = $apiInstance->uploadAttachmentPUT($body, $attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageCenterApi->uploadAttachmentPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **Object**|  |
 **attachment_id** | **string**| The identifier of attachment that will be uploaded. |

### Return type

[**\Swagger\Client\Model\MessageAttachmentId**](../Model/MessageAttachmentId.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: image/png, image/gif, image/bmp, image/tiff, image/jpeg, application/pdf
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

