# Swagger\Client\ParcelManagementApi

All URIs are relative to *https://api.{environment}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelParcel**](ParcelManagementApi.md#cancelparcel) | **PUT** /parcel-management/parcel-cancel-commands/{commandId} | Cancel parcel
[**createNewParcel**](ParcelManagementApi.md#createnewparcel) | **PUT** /parcel-management/parcel-create-commands/{commandId} | Create a new parcel
[**getAvailableDeliveryServices**](ParcelManagementApi.md#getavailabledeliveryservices) | **GET** /parcel-management/delivery-services | Get available delivery services
[**getParcelCancellationStatus**](ParcelManagementApi.md#getparcelcancellationstatus) | **GET** /parcel-management/parcel-cancel-commands/{commandId} | Get parcel cancellation status
[**getParcelCreationStatus**](ParcelManagementApi.md#getparcelcreationstatus) | **GET** /parcel-management/parcel-create-commands/{commandId} | Get parcel creation status
[**getParcelDetails**](ParcelManagementApi.md#getparceldetails) | **GET** /parcel-management/parcels/{parcelId} | Get parcel details
[**getParcelLabel**](ParcelManagementApi.md#getparcellabel) | **GET** /parcel-management/parcels/label | Get parcel label
[**getParcelPickupStatus**](ParcelManagementApi.md#getparcelpickupstatus) | **GET** /parcel-management/parcel-pickup-request-commands/{commandId} | Get parcel pickup status
[**getParcelsPickupDateProposals**](ParcelManagementApi.md#getparcelspickupdateproposals) | **GET** /parcel-management/pickup-date-proposals | Get parcels pickup date proposals
[**getParcelsProtocol**](ParcelManagementApi.md#getparcelsprotocol) | **GET** /parcel-management/parcels/protocol | Get parcels protocol
[**requestParcelPickup**](ParcelManagementApi.md#requestparcelpickup) | **PUT** /parcel-management/parcel-pickup-request-commands/{commandId} | Request parcel pickup

# **cancelParcel**
> \Swagger\Client\Model\InlineResponse2012 cancelParcel($body, $command_id)

Cancel parcel

Use this resource to cancel parcel. Read more: <a href=\"../../wza/#jak-anulować-paczkę\" target=\"_blank\">PL</a> / <a href=\"../../en/wza/#how-to-cancel-a-parcel\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ParcelManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CancelParcelParameters(); // \Swagger\Client\Model\CancelParcelParameters | 
$command_id = "command_id_example"; // string | Command UUID.

try {
    $result = $apiInstance->cancelParcel($body, $command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelManagementApi->cancelParcel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CancelParcelParameters**](../Model/CancelParcelParameters.md)|  |
 **command_id** | **string**| Command UUID. |

### Return type

[**\Swagger\Client\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNewParcel**
> \Swagger\Client\Model\InlineResponse201 createNewParcel($body, $command_id)

Create a new parcel

Use this resource to create parcel for delivery. Read more: <a href=\"https://developer.allegro.pl/wza/#jak-utworzyć-nową-paczkę\" target=\"_blank\">PL</a> / <a href=\"https://developer.allegro.pl/en/wza/#how-to-create-a-new-parcel\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ParcelManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ParcelCreationParameters(); // \Swagger\Client\Model\ParcelCreationParameters | 
$command_id = "command_id_example"; // string | Command UUID.

try {
    $result = $apiInstance->createNewParcel($body, $command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelManagementApi->createNewParcel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ParcelCreationParameters**](../Model/ParcelCreationParameters.md)|  |
 **command_id** | **string**| Command UUID. |

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAvailableDeliveryServices**
> \Swagger\Client\Model\DeliveryServices getAvailableDeliveryServices()

Get available delivery services

Use this resource to get delivery services available for user. It returns services provided by Allegro and contracts with carriers owned by user and configured by GUI. Read more: <a href=\"../../wza/#jak-pobrać-listę-usług-dostawy\" target=\"_blank\">PL</a> / <a href=\"../../en/wza/#how-to-retrieve-a-list-of-delivery-services\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ParcelManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAvailableDeliveryServices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelManagementApi->getAvailableDeliveryServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DeliveryServices**](../Model/DeliveryServices.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParcelCancellationStatus**
> \Swagger\Client\Model\InlineResponse2006 getParcelCancellationStatus($command_id)

Get parcel cancellation status

Use this resource to get parcel cancellation status. Read more: <a href=\"../../wza/#jak-sprawdzić-status-anulowania-paczki\" target=\"_blank\">PL</a> / <a href=\"../../en/wza/#how-to-check-parcel-cancellation-status\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ParcelManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = "command_id_example"; // string | Command UUID.

try {
    $result = $apiInstance->getParcelCancellationStatus($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelManagementApi->getParcelCancellationStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| Command UUID. |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParcelCreationStatus**
> \Swagger\Client\Model\InlineResponse2004 getParcelCreationStatus($command_id)

Get parcel creation status

Use this resource to get parcel creation status. Read more: <a href=\"../../wza/#jak-sprawdzić-status-utworzenia-paczki\" target=\"_blank\">PL</a> / <a href=\"../../en/wza/#how-to-check-parcel-creation-status\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ParcelManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = "command_id_example"; // string | Command UUID.

try {
    $result = $apiInstance->getParcelCreationStatus($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelManagementApi->getParcelCreationStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| Command UUID. |

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParcelDetails**
> \Swagger\Client\Model\ParcelDetails getParcelDetails($parcel_id)

Get parcel details

Use this resource to get parcel details. Read more: <a href=\"../../wza/#jak-pobrać-szczegółowe-informacje-o-paczce\" target=\"_blank\">PL</a> / <a href=\"../../en/wza/#how-to-retrieve-parcel-details\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ParcelManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_id = "parcel_id_example"; // string | Id of parcel.

try {
    $result = $apiInstance->getParcelDetails($parcel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelManagementApi->getParcelDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_id** | **string**| Id of parcel. |

### Return type

[**\Swagger\Client\Model\ParcelDetails**](../Model/ParcelDetails.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParcelLabel**
> string getParcelLabel($parcel_id, $page_format)

Get parcel label

Use this resource to get label for created parcel. <br/>Returned content type depends on created parcel. Read more: <a href=\"../../wza/#jak-utworzyć-etykietę-na-paczkę\" target=\"_blank\">PL</a> / <a href=\"../../en/wza/#how-to-create-a-label-for-parcel\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ParcelManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_id = "parcel_id_example"; // string | Id of parcel.
$page_format = "page_format_example"; // string | Label page format. Only for PDF file.

try {
    $result = $apiInstance->getParcelLabel($parcel_id, $page_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelManagementApi->getParcelLabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_id** | **string**| Id of parcel. |
 **page_format** | **string**| Label page format. Only for PDF file. | [optional]

### Return type

**string**

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf, plain/text, application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParcelPickupStatus**
> \Swagger\Client\Model\InlineResponse2005 getParcelPickupStatus($command_id)

Get parcel pickup status

Use this resource to get parcel pickup status. Read more: <a href=\"../../wza/#jak-sprawdzić-status-zamówienia-odbioru-paczek\" target=\"_blank\">PL</a> / <a href=\"../../en/wza/#how-to-check-parcel-pickup-request-status\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ParcelManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$command_id = "command_id_example"; // string | Command UUID.

try {
    $result = $apiInstance->getParcelPickupStatus($command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelManagementApi->getParcelPickupStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **command_id** | **string**| Command UUID. |

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParcelsPickupDateProposals**
> \Swagger\Client\Model\PickupDateParcelsProposals getParcelsPickupDateProposals($parcel_id, $ready_date)

Get parcels pickup date proposals

Use this resource to get parcels pickup date proposals. Pickup takes place, when courier arrives to take parcels for shipment. Read more: <a href=\"../../wza/#jak-sprawdzić-proponowaną-datę-odbioru-paczek-przez-kuriera\" target=\"_blank\">PL</a> / <a href=\"../../en/wza/#how-to-check-pickup-date-proposals\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ParcelManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_id = array("parcel_id_example"); // string[] | Ids of parcels. Passing more than one value will search pickup dates for all of them separately. Example: `parcelId=1233&parcelId=1234` - will return pickup date proposals for parcels with ID `1233` and `1234`.
$ready_date = new \DateTime("2013-10-20"); // \DateTime | Date when parcels will be ready.

try {
    $result = $apiInstance->getParcelsPickupDateProposals($parcel_id, $ready_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelManagementApi->getParcelsPickupDateProposals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_id** | [**string[]**](../Model/string.md)| Ids of parcels. Passing more than one value will search pickup dates for all of them separately. Example: &#x60;parcelId&#x3D;1233&amp;parcelId&#x3D;1234&#x60; - will return pickup date proposals for parcels with ID &#x60;1233&#x60; and &#x60;1234&#x60;. |
 **ready_date** | **\DateTime**| Date when parcels will be ready. | [optional]

### Return type

[**\Swagger\Client\Model\PickupDateParcelsProposals**](../Model/PickupDateParcelsProposals.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParcelsProtocol**
> string getParcelsProtocol($parcel_id)

Get parcels protocol

Use this resource to get parcels protocol. Read more: <a href=\"../../wza/#jak-pobrać-protokół-nadania-przesyłek\" target=\"_blank\">PL</a> / <a href=\"../../en/wza/#how-to-retrieve-parcel-protocol\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ParcelManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parcel_id = array("parcel_id_example"); // string[] | Ids of parcels. Passing more than one value will generate protocol for all of them. Example: `parcelId=1233&parcelId=1234` - returns protocol for parcels with ID `1233` and `1234`.

try {
    $result = $apiInstance->getParcelsProtocol($parcel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelManagementApi->getParcelsProtocol: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parcel_id** | [**string[]**](../Model/string.md)| Ids of parcels. Passing more than one value will generate protocol for all of them. Example: &#x60;parcelId&#x3D;1233&amp;parcelId&#x3D;1234&#x60; - returns protocol for parcels with ID &#x60;1233&#x60; and &#x60;1234&#x60;. |

### Return type

**string**

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf, application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestParcelPickup**
> \Swagger\Client\Model\InlineResponse2011 requestParcelPickup($body, $command_id)

Request parcel pickup

Use this resource to request pickup for parcels. Read more: <a href=\"../../wza/#jak-zamówić-odbiór-paczek-przez-kuriera\" target=\"_blank\">PL</a> / <a href=\"../../en/wza/#how-to-request-parcel-pickup-by-a-courier\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ParcelManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PickupParcelParameters(); // \Swagger\Client\Model\PickupParcelParameters | 
$command_id = "command_id_example"; // string | Command UUID.

try {
    $result = $apiInstance->requestParcelPickup($body, $command_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcelManagementApi->requestParcelPickup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PickupParcelParameters**](../Model/PickupParcelParameters.md)|  |
 **command_id** | **string**| Command UUID. |

### Return type

[**\Swagger\Client\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

