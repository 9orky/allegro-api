# Swagger\Client\InformationAboutUserApi

All URIs are relative to *https://api.{environment}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAdditionalEmailUsingPOST**](InformationAboutUserApi.md#addadditionalemailusingpost) | **POST** /account/additional-emails | Add a new additional email address to user&#x27;s account
[**answerUserRatingUsingPUT**](InformationAboutUserApi.md#answeruserratingusingput) | **PUT** /sale/user-ratings/{ratingId}/answer | Answer for user&#x27;s rating
[**deleteAdditionalEmailUsingDELETE**](InformationAboutUserApi.md#deleteadditionalemailusingdelete) | **DELETE** /account/additional-emails/{emailId} | Delete an additional email address
[**getAdditionalEmailUsingGET**](InformationAboutUserApi.md#getadditionalemailusingget) | **GET** /account/additional-emails/{emailId} | Get information about a particular additional email
[**getListOfAdditionalEmailsUsingGET**](InformationAboutUserApi.md#getlistofadditionalemailsusingget) | **GET** /account/additional-emails | Get user&#x27;s additional emails
[**getSellerSmartClassificationGET**](InformationAboutUserApi.md#getsellersmartclassificationget) | **GET** /sale/smart | Get Smart! seller classification report
[**getUserRatingsUsingGET**](InformationAboutUserApi.md#getuserratingsusingget) | **GET** /sale/user-ratings | Get the user&#x27;s ratings
[**meGET**](InformationAboutUserApi.md#meget) | **GET** /me | Get basic information about user
[**userRatingRemovalUsingPUT**](InformationAboutUserApi.md#userratingremovalusingput) | **PUT** /sale/user-ratings/{ratingId}/removal | Request removal of user&#x27;s rating

# **addAdditionalEmailUsingPOST**
> \Swagger\Client\Model\AdditionalEmail addAdditionalEmailUsingPOST($body)

Add a new additional email address to user's account

Use this resource to add a new additional email address to account. Read more: <a href=\"../../account/#6-adresy-mailowe\" target=\"_blank\">PL</a> / <a href=\"../../en/account/#6-email-addresses\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InformationAboutUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AdditionalEmailRequest(); // \Swagger\Client\Model\AdditionalEmailRequest | request

try {
    $result = $apiInstance->addAdditionalEmailUsingPOST($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InformationAboutUserApi->addAdditionalEmailUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AdditionalEmailRequest**](../Model/AdditionalEmailRequest.md)| request |

### Return type

[**\Swagger\Client\Model\AdditionalEmail**](../Model/AdditionalEmail.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **answerUserRatingUsingPUT**
> \Swagger\Client\Model\Answer answerUserRatingUsingPUT($body, $rating_id)

Answer for user's rating

Use this resource to answer for received rating. Read more: <a href=\"../../account/#2-ocena-sprzedaży\" target=\"_blank\">PL</a> / <a href=\"../../en/account/#2-user-s-ratings\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InformationAboutUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UserRatingAnswerRequest(); // \Swagger\Client\Model\UserRatingAnswerRequest | User rating answer request.
$rating_id = "rating_id_example"; // string | ID of the rating.

try {
    $result = $apiInstance->answerUserRatingUsingPUT($body, $rating_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InformationAboutUserApi->answerUserRatingUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UserRatingAnswerRequest**](../Model/UserRatingAnswerRequest.md)| User rating answer request. |
 **rating_id** | **string**| ID of the rating. |

### Return type

[**\Swagger\Client\Model\Answer**](../Model/Answer.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAdditionalEmailUsingDELETE**
> deleteAdditionalEmailUsingDELETE($email_id)

Delete an additional email address

Use this resource to delete one of additional emails. Read more: <a href=\"../../account/#6-adresy-mailowe\" target=\"_blank\">PL</a> / <a href=\"../../en/account/#6-email-addresses\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InformationAboutUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_id = "email_id_example"; // string | Id of the additional email to be deleted.

try {
    $apiInstance->deleteAdditionalEmailUsingDELETE($email_id);
} catch (Exception $e) {
    echo 'Exception when calling InformationAboutUserApi->deleteAdditionalEmailUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | **string**| Id of the additional email to be deleted. |

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAdditionalEmailUsingGET**
> \Swagger\Client\Model\AdditionalEmail getAdditionalEmailUsingGET($email_id)

Get information about a particular additional email

Use this resource to retrieve a single additional email. Read more: <a href=\"../../account/#6-adresy-mailowe\" target=\"_blank\">PL</a> / <a href=\"../../en/account/#6-email-addresses\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InformationAboutUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_id = "email_id_example"; // string | Id of the additional email.

try {
    $result = $apiInstance->getAdditionalEmailUsingGET($email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InformationAboutUserApi->getAdditionalEmailUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_id** | **string**| Id of the additional email. |

### Return type

[**\Swagger\Client\Model\AdditionalEmail**](../Model/AdditionalEmail.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListOfAdditionalEmailsUsingGET**
> \Swagger\Client\Model\AdditionalEmailsResponse getListOfAdditionalEmailsUsingGET()

Get user's additional emails

Use this resource to get a list of all additional email addresses assigned to account. Read more: <a href=\"../../account/#6-adresy-mailowe\" target=\"_blank\">PL</a> / <a href=\"../../en/account/#6-email-addresses\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InformationAboutUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getListOfAdditionalEmailsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InformationAboutUserApi->getListOfAdditionalEmailsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\AdditionalEmailsResponse**](../Model/AdditionalEmailsResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSellerSmartClassificationGET**
> \Swagger\Client\Model\SmartSellerClassificationReport getSellerSmartClassificationGET()

Get Smart! seller classification report

Use this resource to get a full Smart! seller classification report. To learn more about Smart! seller requirements, see our knowledge base article: [PL](https://allegro.pl/pomoc/dla-sprzedajacych/informacje-dla-sprzedajacych/co-zrobic-aby-moje-oferty-byly-oznaczone-ikona-allegro-smart-lDkP8VbKncV) / [EN](https://allegro.pl/help/for-sellers/allegro-smart-for-sellers/how-can-i-make-my-offers-be-marked-with-the-allegro-smart-badge-rKD1RV30jFM).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InformationAboutUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSellerSmartClassificationGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InformationAboutUserApi->getSellerSmartClassificationGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SmartSellerClassificationReport**](../Model/SmartSellerClassificationReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserRatingsUsingGET**
> \Swagger\Client\Model\UserRatingListResponse getUserRatingsUsingGET($recommended, $offset, $limit)

Get the user's ratings

Use this resource to receive your sales score. Read more: <a href=\"../../account/#2-ocena-sprzedaży\" target=\"_blank\">PL</a> / <a href=\"../../en/account/#2-user-s-ratings\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InformationAboutUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recommended = "recommended_example"; // string | Filter by recommended.
$offset = 0; // int | The offset of elements in the response.
$limit = 20; // int | The limit of elements in the response.

try {
    $result = $apiInstance->getUserRatingsUsingGET($recommended, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InformationAboutUserApi->getUserRatingsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recommended** | **string**| Filter by recommended. | [optional]
 **offset** | **int**| The offset of elements in the response. | [optional] [default to 0]
 **limit** | **int**| The limit of elements in the response. | [optional] [default to 20]

### Return type

[**\Swagger\Client\Model\UserRatingListResponse**](../Model/UserRatingListResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **meGET**
> \Swagger\Client\Model\MeResponse meGET()

Get basic information about user

Use this resource when you need basic information about authenticated user. Read more: <a href=\"../../account/#1-informacje-o-użytkowniku\" target=\"_blank\">PL</a> / <a href=\"../../en/account/#1-information-about-user\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InformationAboutUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->meGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InformationAboutUserApi->meGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\MeResponse**](../Model/MeResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userRatingRemovalUsingPUT**
> \Swagger\Client\Model\Removal userRatingRemovalUsingPUT($body, $rating_id)

Request removal of user's rating

Use this resource to request removal of received rating. Read more: <a href=\"../../account/#2-ocena-sprzedaży\" target=\"_blank\">PL</a> / <a href=\"../../en/account/#2-user-s-ratings\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InformationAboutUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UserRatingRemovalRequest(); // \Swagger\Client\Model\UserRatingRemovalRequest | User rating removal request.
$rating_id = "rating_id_example"; // string | ID of the rating.

try {
    $result = $apiInstance->userRatingRemovalUsingPUT($body, $rating_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InformationAboutUserApi->userRatingRemovalUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UserRatingRemovalRequest**](../Model/UserRatingRemovalRequest.md)| User rating removal request. |
 **rating_id** | **string**| ID of the rating. |

### Return type

[**\Swagger\Client\Model\Removal**](../Model/Removal.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

