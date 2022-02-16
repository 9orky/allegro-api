# Swagger\Client\ImagesAndAttachmentsApi

All URIs are relative to *https://api.{environment}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOfferAttachmentUsingPOST**](ImagesAndAttachmentsApi.md#createofferattachmentusingpost) | **POST** /sale/offer-attachments | Create an offer attachment
[**uploadOfferAttachmentUsingPUT**](ImagesAndAttachmentsApi.md#uploadofferattachmentusingput) | **PUT** /sale/offer-attachments/{attachmentId} | Upload an offer attachment
[**uploadOfferImageUsingPOST**](ImagesAndAttachmentsApi.md#uploadofferimageusingpost) | **POST** /sale/images | Upload an offer image

# **createOfferAttachmentUsingPOST**
> \Swagger\Client\Model\OfferAttachment createOfferAttachmentUsingPOST($body)

Create an offer attachment

You can attach pdf, jpeg or png files to your offers. We will present them under the offer description in the Additional information section. You can attach up to 9 files to one offer – one per each type from the list:   * Guide (MANUAL)   * Special offer terms (SPECIAL_OFFER_RULES)   * Competition terms (COMPETITION_RULES)   * Book excerpt (BOOK_EXCERPT)   * Manual (USER_MANUAL)   * Installation manual (INSTALLATION_INSTRUCTIONS)   * Game manual (GAME_INSTRUCTIONS)   * Energy label (ENERGY_LABEL)   * Product information sheet (PRODUCT_INFORMATION_SHEET)  Uploading attachments flow:   1. Create an attachment object to receive an upload URL (*POST /sale/offer-attachments*),   2. Use the upload URL to submit the file (*PUT /sale/offer-attachments/{attachmentId}*),   3. Add attachments to the offer (*PUT /sale/offers/{offerId}*).  Read more: <a href=\"../../sale/#załączniki\" target=\"_blank\">PL</a> / <a href=\"../../en/sale/#attachments\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ImagesAndAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OfferAttachmentRequest(); // \Swagger\Client\Model\OfferAttachmentRequest | offer attachment

try {
    $result = $apiInstance->createOfferAttachmentUsingPOST($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesAndAttachmentsApi->createOfferAttachmentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OfferAttachmentRequest**](../Model/OfferAttachmentRequest.md)| offer attachment |

### Return type

[**\Swagger\Client\Model\OfferAttachment**](../Model/OfferAttachment.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadOfferAttachmentUsingPUT**
> uploadOfferAttachmentUsingPUT($attachment_id, $body)

Upload an offer attachment

Upload an offer attachment. This operation should be used after creating an offer attachment with *POST /sale/offer-attachments* **Important!** You can find the URL address to upload the file to our server in the *Location* response header of *POST /sale/offer-attachments*. The URL is unique and one-time. As its format may change in time, you should always use the address from the header. Do not compose the address on your own. Read more: <a href=\"../../sale/#załączniki\" target=\"_blank\">PL</a> / <a href=\"../../en/sale/#attachments\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ImagesAndAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of the attachment.
$body = new \Swagger\Client\Model\Object(); // Object | 

try {
    $apiInstance->uploadOfferAttachmentUsingPUT($attachment_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ImagesAndAttachmentsApi->uploadOfferAttachmentUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | [**string**](../Model/.md)| The ID of the attachment. |
 **body** | **Object**|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/pdf, image/jpeg, image/png
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadOfferImageUsingPOST**
> \Swagger\Client\Model\OfferImageUploadResponse uploadOfferImageUsingPOST($body)

Upload an offer image

Upload image to our servers. You can choose from two upload options:   * \\- provide a link and we will download an image for you   * \\- send an image as binary data  **Important!** Remember to use dedicated domain for upload, i.e.   * \\- https://upload.allegro.pl for Production   * \\- https://upload.allegro.pl.allegrosandbox.pl for Sandbox  Read more: <a href=\"../../sale/#5-zdjęcia\" target=\"_blank\">PL</a> / <a href=\"../../en/sale/#5-images\" target=\"_blank\">EN</a>. More information about rules for photos in an offer's gallery and description you will find <a href=\"https://allegro.pl/dla-sprzedajacych/nowe-zasady-dla-zdjec-w-galerii-i-w-opisie-YLlAAa2oXf7\" target=\"_blank\">here</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ImagesAndAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OfferImageLinkUploadRequest(); // \Swagger\Client\Model\OfferImageLinkUploadRequest | 

try {
    $result = $apiInstance->uploadOfferImageUsingPOST($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesAndAttachmentsApi->uploadOfferImageUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OfferImageLinkUploadRequest**](../Model/OfferImageLinkUploadRequest.md)|  |

### Return type

[**\Swagger\Client\Model\OfferImageUploadResponse**](../Model/OfferImageUploadResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json, image/jpeg, image/png, image/webp
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadOfferImageUsingPOST**
> \Swagger\Client\Model\OfferImageUploadResponse uploadOfferImageUsingPOST($body)

Upload an offer image

Upload image to our servers. You can choose from two upload options:   * \\- provide a link and we will download an image for you   * \\- send an image as binary data  **Important!** Remember to use dedicated domain for upload, i.e.   * \\- https://upload.allegro.pl for Production   * \\- https://upload.allegro.pl.allegrosandbox.pl for Sandbox  Read more: <a href=\"../../sale/#5-zdjęcia\" target=\"_blank\">PL</a> / <a href=\"../../en/sale/#5-images\" target=\"_blank\">EN</a>. More information about rules for photos in an offer's gallery and description you will find <a href=\"https://allegro.pl/dla-sprzedajacych/nowe-zasady-dla-zdjec-w-galerii-i-w-opisie-YLlAAa2oXf7\" target=\"_blank\">here</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ImagesAndAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\OfferImageLinkUploadRequest(); // \Swagger\Client\Model\OfferImageLinkUploadRequest | 

try {
    $result = $apiInstance->uploadOfferImageUsingPOST($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesAndAttachmentsApi->uploadOfferImageUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OfferImageLinkUploadRequest**](../Model/OfferImageLinkUploadRequest.md)|  |

### Return type

[**\Swagger\Client\Model\OfferImageUploadResponse**](../Model/OfferImageUploadResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json, image/jpeg, image/png, image/webp
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

