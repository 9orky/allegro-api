# Swagger\Client\UsersOfferInformationApi

All URIs are relative to *https://api.{environment}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOfferEvents**](UsersOfferInformationApi.md#getofferevents) | **GET** /sale/offer-events | Get events about the seller&#x27;s offers
[**getOfferSmartClassificationGET**](UsersOfferInformationApi.md#getoffersmartclassificationget) | **GET** /sale/offers/{offerId}/smart | Get Smart! classification report of the particular offer
[**getOfferUsingGET**](UsersOfferInformationApi.md#getofferusingget) | **GET** /sale/offers/{offerId} | Get all fields of the particular offer
[**searchOffersUsingGET**](UsersOfferInformationApi.md#searchoffersusingget) | **GET** /sale/offers | Get seller&#x27;s offers

# **getOfferEvents**
> \Swagger\Client\Model\SellerOfferEventsResponse getOfferEvents($from, $limit, $type)

Get events about the seller's offers

Use this endpoint to get events concerning changes in the authorized seller's offers. At present we support the following events:   - OFFER_ACTIVATED - offer is visible on site and available for purchase, occurs when offer status changes from ACTIVATING to ACTIVE.   - OFFER_CHANGED - occurs when offer's fields has been changed e.g. description or photos.   - OFFER_ENDED - offer is no longer available for purchase, occurs when offer status changes from ACTIVE to ENDED.   - OFFER_STOCK_CHANGED - stock in an offer was changed either via purchase or by seller.   - OFFER_PRICE_CHANGED - occurs when price in an offer was changed.   - OFFER_ARCHIVED - offer is no longer available on listing and has been archived.   - OFFER_BID_PLACED - bid was placed on the offer   - OFFER_BID_CANCELED - bid for offer was canceled  Returned events may occur by actions made via browser or API. The resource allows you to get events concerning active offers and offers scheduled for activation (status ACTIVE and ACTIVATING). Returned events do not concern offers in INACTIVE and ENDED status (the exception is OFFER_ARCHIVED event). External id is returned for all event types except OFFER_BID_PLACED and OFFER_BID_CANCELED. Please note that one change may result in more than one event. Read more: <a href=\"../../my_offers/#dziennik-zdarzeń-w-ofertach-sprzedawcy\" target=\"_blank\">PL</a> / <a href=\"../../en/my_offers/#event-journal-concerning-changes-in-seller-s-offers\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersOfferInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | The ID of the last seen event. Events that occured after the given event will be returned.
$limit = 100; // int | The number of events that will be returned in the response.
$type = array("type_example"); // string[] | The types of events that will be returned in the response. All types of events are returned by default.

try {
    $result = $apiInstance->getOfferEvents($from, $limit, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersOfferInformationApi->getOfferEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| The ID of the last seen event. Events that occured after the given event will be returned. | [optional]
 **limit** | **int**| The number of events that will be returned in the response. | [optional] [default to 100]
 **type** | [**string[]**](../Model/string.md)| The types of events that will be returned in the response. All types of events are returned by default. | [optional]

### Return type

[**\Swagger\Client\Model\SellerOfferEventsResponse**](../Model/SellerOfferEventsResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOfferSmartClassificationGET**
> \Swagger\Client\Model\SmartOfferClassificationReport getOfferSmartClassificationGET($offer_id)

Get Smart! classification report of the particular offer

Use this resource to get a full Smart! offer classification report of one of your offers. Please keep in mind you have to meet Smart! seller conditions first - for more details, use *GET /sale/smart*. To learn more about Smart! offer requirements, see our knowledge base article: [PL](https://allegro.pl/pomoc/dla-sprzedajacych/informacje-dla-sprzedajacych/co-zrobic-aby-moje-oferty-byly-oznaczone-ikona-allegro-smart-lDkP8VbKncV) / [EN](https://allegro.pl/help/for-sellers/allegro-smart-for-sellers/how-can-i-make-my-offers-be-marked-with-the-allegro-smart-badge-rKD1RV30jFM).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersOfferInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = "offer_id_example"; // string | Offer identifier.

try {
    $result = $apiInstance->getOfferSmartClassificationGET($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersOfferInformationApi->getOfferSmartClassificationGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Offer identifier. |

### Return type

[**\Swagger\Client\Model\SmartOfferClassificationReport**](../Model/SmartOfferClassificationReport.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOfferUsingGET**
> \Swagger\Client\Model\Offer getOfferUsingGET($offer_id)

Get all fields of the particular offer

Use this resource to retrieve all fields of the particular offer. Read more: <a href=\"../../sale/#14-jak-wystawić-podobną-ofertę\" target=\"_blank\">PL</a> / <a href=\"../../en/sale/#14-how-to-list-a-similar-offer\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersOfferInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = "offer_id_example"; // string | Offer identifier.

try {
    $result = $apiInstance->getOfferUsingGET($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersOfferInformationApi->getOfferUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Offer identifier. |

### Return type

[**\Swagger\Client\Model\Offer**](../Model/Offer.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchOffersUsingGET**
> \Swagger\Client\Model\OffersSearchResultDto searchOffersUsingGET($offer_id, $name, $selling_mode_price_amount_gte, $selling_mode_price_amount_lte, $publication_status, $selling_mode_format, $external_id, $delivery_shipping_rates_id, $delivery_shipping_rates_id_empty, $sort, $limit, $offset, $category_id, $product_id_empty, $productization_required, $b2b_buyable_only_by_business)

Get seller's offers

Use this resource to get the list of the seller's offers. You can use different query parameters to filter the list. Read more: <a href=\"../../my_offers/#jak-pobrać-moje-oferty-w-rest-api\" target=\"_blank\">PL</a> / <a href=\"../../en/my_offers/#list-of-offers\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UsersOfferInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = "offer_id_example"; // string | Offer ID.
$name = "name_example"; // string | The text to search in the offer title.
$selling_mode_price_amount_gte = 1.2; // float | The lower threshold of price.
$selling_mode_price_amount_lte = 1.2; // float | The upper threshold of price.
$publication_status = array("publication_status_example"); // string[] | The publication status of the offer. Passing more than one value will search for offers with any of the given statuses. By default all statuses are included. Example: `publication.status=INACTIVE&publication.status=ACTIVE` - returns offers with status `INACTIVE` or `ACTIVE`.
$selling_mode_format = array("selling_mode_format_example"); // string[] | The offer's selling format. Passing more than one value will search for offers with any of the given formats. By default all formats are included. Example: `sellingMode.format=BUY_NOW&sellingMode.format=ADVERTISEMENT` - returns offers with with format `BUY_NOW` or `ADVERTISEMENT`.
$external_id = array("external_id_example"); // string[] | The ID from the client's external system. Passing more than one value will search for offers with any of the given IDs. By default no ID is included. Example: `external.id=1233&external.id=1234` - returns offers with ID `1233` or `1234`. Single ID length shouldn't exceed 100 characters.
$delivery_shipping_rates_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The ID of shipping rates. Returns offers with given shipping rates ID.
$delivery_shipping_rates_id_empty = true; // bool | Allow to filter offers by existence of shipping rates ID.
$sort = "sort_example"; // string | The results' sorting order. No prefix in the value means ascending order. `-` prefix means descending order. If you don't provide the sort parameter, the list is sorted by offer creation time, descending.
$limit = 20; // int | The maximum number of offers returned in the response.
$offset = 56; // int | Index of the first returned offer from all search results. Maximum sum of offset and limit is 10 000 000.
$category_id = "category_id_example"; // string | The identifier of the category, where you want to search for offers.
$product_id_empty = true; // bool | Allow to filter offers by existence of product ID.
$productization_required = true; // bool | Allow to filter offers from categories where productization is required.
$b2b_buyable_only_by_business = true; // bool | Allow to filter business offers.

try {
    $result = $apiInstance->searchOffersUsingGET($offer_id, $name, $selling_mode_price_amount_gte, $selling_mode_price_amount_lte, $publication_status, $selling_mode_format, $external_id, $delivery_shipping_rates_id, $delivery_shipping_rates_id_empty, $sort, $limit, $offset, $category_id, $product_id_empty, $productization_required, $b2b_buyable_only_by_business);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersOfferInformationApi->searchOffersUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| Offer ID. | [optional]
 **name** | **string**| The text to search in the offer title. | [optional]
 **selling_mode_price_amount_gte** | **float**| The lower threshold of price. | [optional]
 **selling_mode_price_amount_lte** | **float**| The upper threshold of price. | [optional]
 **publication_status** | [**string[]**](../Model/string.md)| The publication status of the offer. Passing more than one value will search for offers with any of the given statuses. By default all statuses are included. Example: &#x60;publication.status&#x3D;INACTIVE&amp;publication.status&#x3D;ACTIVE&#x60; - returns offers with status &#x60;INACTIVE&#x60; or &#x60;ACTIVE&#x60;. | [optional]
 **selling_mode_format** | [**string[]**](../Model/string.md)| The offer&#x27;s selling format. Passing more than one value will search for offers with any of the given formats. By default all formats are included. Example: &#x60;sellingMode.format&#x3D;BUY_NOW&amp;sellingMode.format&#x3D;ADVERTISEMENT&#x60; - returns offers with with format &#x60;BUY_NOW&#x60; or &#x60;ADVERTISEMENT&#x60;. | [optional]
 **external_id** | [**string[]**](../Model/string.md)| The ID from the client&#x27;s external system. Passing more than one value will search for offers with any of the given IDs. By default no ID is included. Example: &#x60;external.id&#x3D;1233&amp;external.id&#x3D;1234&#x60; - returns offers with ID &#x60;1233&#x60; or &#x60;1234&#x60;. Single ID length shouldn&#x27;t exceed 100 characters. | [optional]
 **delivery_shipping_rates_id** | [**string**](../Model/.md)| The ID of shipping rates. Returns offers with given shipping rates ID. | [optional]
 **delivery_shipping_rates_id_empty** | **bool**| Allow to filter offers by existence of shipping rates ID. | [optional]
 **sort** | **string**| The results&#x27; sorting order. No prefix in the value means ascending order. &#x60;-&#x60; prefix means descending order. If you don&#x27;t provide the sort parameter, the list is sorted by offer creation time, descending. | [optional]
 **limit** | **int**| The maximum number of offers returned in the response. | [optional] [default to 20]
 **offset** | **int**| Index of the first returned offer from all search results. Maximum sum of offset and limit is 10 000 000. | [optional]
 **category_id** | **string**| The identifier of the category, where you want to search for offers. | [optional]
 **product_id_empty** | **bool**| Allow to filter offers by existence of product ID. | [optional]
 **productization_required** | **bool**| Allow to filter offers from categories where productization is required. | [optional]
 **b2b_buyable_only_by_business** | **bool**| Allow to filter business offers. | [optional]

### Return type

[**\Swagger\Client\Model\OffersSearchResultDto**](../Model/OffersSearchResultDto.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

