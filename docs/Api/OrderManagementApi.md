# Swagger\Client\OrderManagementApi

All URIs are relative to *https://api.{environment}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addOrderInvoicesMetadata**](OrderManagementApi.md#addorderinvoicesmetadata) | **POST** /order/checkout-forms/{id}/invoices | Post new invoice
[**createOrderShipmentsUsingPOST**](OrderManagementApi.md#createordershipmentsusingpost) | **POST** /order/checkout-forms/{id}/shipments | Add a parcel tracking number
[**getAllegroParcelTrackingUsingGET**](OrderManagementApi.md#getallegroparceltrackingusingget) | **GET** /order/carriers/ALLEGRO/tracking | Get Allegro parcel tracking history
[**getAllegroPickupDropOffPointsGET**](OrderManagementApi.md#getallegropickupdropoffpointsget) | **GET** /order/carriers/ALLEGRO/points | Get Allegro pickup drop off points
[**getListOfOrdersUsingGET**](OrderManagementApi.md#getlistofordersusingget) | **GET** /order/checkout-forms | Get the user&#x27;s orders
[**getOrderEventsStatisticsUsingGET**](OrderManagementApi.md#getordereventsstatisticsusingget) | **GET** /order/event-stats | Get order events statistics
[**getOrderEventsUsingGET**](OrderManagementApi.md#getordereventsusingget) | **GET** /order/events | Get order events
[**getOrderInvoicesDetails**](OrderManagementApi.md#getorderinvoicesdetails) | **GET** /order/checkout-forms/{id}/invoices | Get order invoices details
[**getOrderShipmentsUsingGET**](OrderManagementApi.md#getordershipmentsusingget) | **GET** /order/checkout-forms/{id}/shipments | Get a list of parcel tracking numbers
[**getOrdersCarriersUsingGET**](OrderManagementApi.md#getorderscarriersusingget) | **GET** /order/carriers | Get a list of available shipping carriers
[**getOrdersDetailsUsingGET**](OrderManagementApi.md#getordersdetailsusingget) | **GET** /order/checkout-forms/{id} | Get an order&#x27;s details
[**setOrderFulfillmentUsingPUT**](OrderManagementApi.md#setorderfulfillmentusingput) | **PUT** /order/checkout-forms/{id}/fulfillment | Set seller order status
[**uploadOrderInvoiceFile**](OrderManagementApi.md#uploadorderinvoicefile) | **PUT** /order/checkout-forms/{id}/invoices/{invoiceId}/file | Upload invoice file

# **addOrderInvoicesMetadata**
> \Swagger\Client\Model\CheckFormsNewOrderInvoiceId addOrderInvoicesMetadata($body, $id)

Post new invoice

Use to add new invoice metadata. Before you send an invoice file, you need to initialize the invoice instance with the required parameters. Read more: <a href=\"../../orders/#jak-dodać-fakturę-do-zamówienia\" target=\"_blank\">PL</a> / <a href=\"../../en/orders/#add-an-invoice-to-the-order\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CheckFormsNewOrderInvoice(); // \Swagger\Client\Model\CheckFormsNewOrderInvoice | request
$id = "id_example"; // string | Order identifier.

try {
    $result = $apiInstance->addOrderInvoicesMetadata($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->addOrderInvoicesMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CheckFormsNewOrderInvoice**](../Model/CheckFormsNewOrderInvoice.md)| request |
 **id** | **string**| Order identifier. |

### Return type

[**\Swagger\Client\Model\CheckFormsNewOrderInvoiceId**](../Model/CheckFormsNewOrderInvoiceId.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrderShipmentsUsingPOST**
> \Swagger\Client\Model\CheckoutFormAddWaybillCreated createOrderShipmentsUsingPOST($body, $id)

Add a parcel tracking number

Add a parcel tracking number (shipment) to given order line items. Read more: <a href=\"../../orders/#jak-dodać-numer-przesyłki-do-przedmiotu-w-zamówieniu\" target=\"_blank\">PL</a> / <a href=\"../../en/orders/#add-tracking-number-to-order\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CheckoutFormAddWaybillRequest(); // \Swagger\Client\Model\CheckoutFormAddWaybillRequest | request
$id = "id_example"; // string | Order identifier.

try {
    $result = $apiInstance->createOrderShipmentsUsingPOST($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->createOrderShipmentsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CheckoutFormAddWaybillRequest**](../Model/CheckoutFormAddWaybillRequest.md)| request |
 **id** | **string**| Order identifier. |

### Return type

[**\Swagger\Client\Model\CheckoutFormAddWaybillCreated**](../Model/CheckoutFormAddWaybillCreated.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllegroParcelTrackingUsingGET**
> \Swagger\Client\Model\AllegroParcelTrackingResponse getAllegroParcelTrackingUsingGET($waybill)

Get Allegro parcel tracking history

Get tracking history for parcels sent via the Send with Allegro tool using <a href=\"#operation/getAvailableDeliveryServices\" target=\"_blank\">a delivery service</a> with carrier `ALLEGRO`. Read more: <a href=\"../../wza/#jak-pobrać-historię-statusów-przesyłek-allegro\" target=\"_blank\">PL</a> / <a href=\"../../en/wza/#how-to-retrieve-allegro-parcels-statuses-history\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waybill = array("waybill_example"); // string[] | Waybill number (parcel tracking number). Example: `waybill=ALE0000000E5D201&waybill=ALE0000000E5D202` - returns parcel tracking history for `ALE0000000E5D201` as well as `ALE0000000E5D202`.

try {
    $result = $apiInstance->getAllegroParcelTrackingUsingGET($waybill);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getAllegroParcelTrackingUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **waybill** | [**string[]**](../Model/string.md)| Waybill number (parcel tracking number). Example: &#x60;waybill&#x3D;ALE0000000E5D201&amp;waybill&#x3D;ALE0000000E5D202&#x60; - returns parcel tracking history for &#x60;ALE0000000E5D201&#x60; as well as &#x60;ALE0000000E5D202&#x60;. |

### Return type

[**\Swagger\Client\Model\AllegroParcelTrackingResponse**](../Model/AllegroParcelTrackingResponse.md)

### Authorization

[bearer-token-for-application](../../README.md#bearer-token-for-application), [bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.beta.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllegroPickupDropOffPointsGET**
> \Swagger\Client\Model\AllegroPickupDropOffPointsResponse getAllegroPickupDropOffPointsGET($if_modified_since)

Get Allegro pickup drop off points

Get a list of Allegro pickup drop off points. Read more: <a href=\"../../wza/#jak-pobra%c4%87-list%c4%99-punkt%c3%b3w-allegro\" target=\"_blank\">PL</a> / <a href=\"../../en/wza/#how-to-retrieve-list-of-allegro-pickup-drop-off-points\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$if_modified_since = "if_modified_since_example"; // string | Date of last data modification. If data has been modified after specified date, full set of data is returned. If header is not specified, full set of data is returned. Date has to be provided in HTTP-date format. Information about date (the same HTTP-date format) of last modified data is available in response - `Last-Modified`.

try {
    $result = $apiInstance->getAllegroPickupDropOffPointsGET($if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getAllegroPickupDropOffPointsGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **if_modified_since** | **string**| Date of last data modification. If data has been modified after specified date, full set of data is returned. If header is not specified, full set of data is returned. Date has to be provided in HTTP-date format. Information about date (the same HTTP-date format) of last modified data is available in response - &#x60;Last-Modified&#x60;. | [optional]

### Return type

[**\Swagger\Client\Model\AllegroPickupDropOffPointsResponse**](../Model/AllegroPickupDropOffPointsResponse.md)

### Authorization

[bearer-token-for-application](../../README.md#bearer-token-for-application), [bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListOfOrdersUsingGET**
> \Swagger\Client\Model\CheckoutForms getListOfOrdersUsingGET($offset, $limit, $status, $fulfillment_status, $fulfillment_shipment_summary_line_items_sent, $line_items_bought_at_lte, $line_items_bought_at_gte, $payment_id, $surcharges_id, $delivery_method_id, $buyer_login, $updated_at_lte, $updated_at_gte, $sort)

Get the user's orders

Use this resource to get an order list. Read more: <a href=\"../../orders/#lista-zamówień\" target=\"_blank\">PL</a> / <a href=\"../../en/orders/#order-list\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | Index of first returned checkout-form from all search results.
$limit = 100; // int | Maximum number of checkout-forms in response.
$status = "status_example"; // string | Specify status value that checkout-forms must have to be included in the output. Allowed values are:   * `BOUGHT`: purchase without checkout form filled in.   * `FILLED_IN`: checkout form filled in but payment is not completed yet so data could still change.   * `READY_FOR_PROCESSING`: payment completed. Purchase is ready for processing.   * `CANCELLED`: purchase cancelled by buyer.
$fulfillment_status = "fulfillment_status_example"; // string | Specify seller status value that checkout-forms must have to be included in the output. Allowed values are:   * `NEW`   * `PROCESSING`   * `READY_FOR_SHIPMENT`   * `READY_FOR_PICKUP`   * `SENT`   * `PICKED_UP`   * `CANCELLED`.
$fulfillment_shipment_summary_line_items_sent = "fulfillment_shipment_summary_line_items_sent_example"; // string | Specify filter for line items sending status. Allowed values are:   * `NONE`: none of line items have tracking number specified   * `SOME`: some of line items have tracking number specified   * `ALL`: all of line items have tracking number specified.
$line_items_bought_at_lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Latest line item bought date. The upper bound of date time range from which checkout forms will be taken.
$line_items_bought_at_gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Latest line item bought date. The lower bound of date time range from which checkout forms will be taken.
$payment_id = "payment_id_example"; // string | Find checkout-forms having specified payment id.
$surcharges_id = "surcharges_id_example"; // string | Find checkout-forms having specified surcharge id.
$delivery_method_id = "delivery_method_id_example"; // string | Find checkout-forms having specified delivery method id.
$buyer_login = "buyer_login_example"; // string | Find checkout-forms having specified buyer login.
$updated_at_lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Checkout form last modification date. The upper bound of date time range from which checkout forms will be taken.
$updated_at_gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Checkout form last modification date. The lower bound of date time range from which checkout forms will be taken.
$sort = "sort_example"; // string | The results' sorting order. No prefix in the value means ascending order. `-` prefix means descending order. If you don't provide the sort parameter, the list is sorted by line item boughtAt date, descending.

try {
    $result = $apiInstance->getListOfOrdersUsingGET($offset, $limit, $status, $fulfillment_status, $fulfillment_shipment_summary_line_items_sent, $line_items_bought_at_lte, $line_items_bought_at_gte, $payment_id, $surcharges_id, $delivery_method_id, $buyer_login, $updated_at_lte, $updated_at_gte, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getListOfOrdersUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Index of first returned checkout-form from all search results. | [optional] [default to 0]
 **limit** | **int**| Maximum number of checkout-forms in response. | [optional] [default to 100]
 **status** | **string**| Specify status value that checkout-forms must have to be included in the output. Allowed values are:   * &#x60;BOUGHT&#x60;: purchase without checkout form filled in.   * &#x60;FILLED_IN&#x60;: checkout form filled in but payment is not completed yet so data could still change.   * &#x60;READY_FOR_PROCESSING&#x60;: payment completed. Purchase is ready for processing.   * &#x60;CANCELLED&#x60;: purchase cancelled by buyer. | [optional]
 **fulfillment_status** | **string**| Specify seller status value that checkout-forms must have to be included in the output. Allowed values are:   * &#x60;NEW&#x60;   * &#x60;PROCESSING&#x60;   * &#x60;READY_FOR_SHIPMENT&#x60;   * &#x60;READY_FOR_PICKUP&#x60;   * &#x60;SENT&#x60;   * &#x60;PICKED_UP&#x60;   * &#x60;CANCELLED&#x60;. | [optional]
 **fulfillment_shipment_summary_line_items_sent** | **string**| Specify filter for line items sending status. Allowed values are:   * &#x60;NONE&#x60;: none of line items have tracking number specified   * &#x60;SOME&#x60;: some of line items have tracking number specified   * &#x60;ALL&#x60;: all of line items have tracking number specified. | [optional]
 **line_items_bought_at_lte** | **\DateTime**| Latest line item bought date. The upper bound of date time range from which checkout forms will be taken. | [optional]
 **line_items_bought_at_gte** | **\DateTime**| Latest line item bought date. The lower bound of date time range from which checkout forms will be taken. | [optional]
 **payment_id** | **string**| Find checkout-forms having specified payment id. | [optional]
 **surcharges_id** | **string**| Find checkout-forms having specified surcharge id. | [optional]
 **delivery_method_id** | **string**| Find checkout-forms having specified delivery method id. | [optional]
 **buyer_login** | **string**| Find checkout-forms having specified buyer login. | [optional]
 **updated_at_lte** | **\DateTime**| Checkout form last modification date. The upper bound of date time range from which checkout forms will be taken. | [optional]
 **updated_at_gte** | **\DateTime**| Checkout form last modification date. The lower bound of date time range from which checkout forms will be taken. | [optional]
 **sort** | **string**| The results&#x27; sorting order. No prefix in the value means ascending order. &#x60;-&#x60; prefix means descending order. If you don&#x27;t provide the sort parameter, the list is sorted by line item boughtAt date, descending. | [optional]

### Return type

[**\Swagger\Client\Model\CheckoutForms**](../Model/CheckoutForms.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderEventsStatisticsUsingGET**
> \Swagger\Client\Model\OrderEventStats getOrderEventsStatisticsUsingGET()

Get order events statistics

Use this resource to returns object that contains event id and occurrence date of the latest event. It gives you current starting point for reading events. Read more: <a href=\"../../orders/#jak-znaleźć-najnowsze-zdarzenie\" target=\"_blank\">PL</a> / <a href=\"../../en/orders/#how-to-find-the-newest-event\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOrderEventsStatisticsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getOrderEventsStatisticsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\OrderEventStats**](../Model/OrderEventStats.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderEventsUsingGET**
> \Swagger\Client\Model\OrderEventsList getOrderEventsUsingGET($from, $type, $limit)

Get order events

Use this resource to return events that allow you to monitor actions which clients perform, i.e. making a purchase, filling in the checkout form (FOD), finishing payment process, making a surcharge. Read more: <a href=\"../../orders/#dziennik-zdarzeń\" target=\"_blank\">PL</a> / <a href=\"../../en/orders/#event-log\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = "from_example"; // string | You can use the event ID to retrieve subsequent chunks of events.
$type = array("type_example"); // string[] | Specify array of event types for filtering. Allowed values are:   * `BOUGHT`: purchase without checkout form filled in   * `FILLED_IN`: checkout form filled in but payment is not completed yet so data could still change   * `READY_FOR_PROCESSING`: payment completed. Purchase is ready for processing   * `BUYER_CANCELLED`: purchase was cancelled by buyer   * `FULFILLMENT_STATUS_CHANGED`: fulfillment status changed   * `AUTO_CANCELLED`: purchase was cancelled automatically by Allegro.
$limit = 100; // int | The maximum number of events returned in the response.

try {
    $result = $apiInstance->getOrderEventsUsingGET($from, $type, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getOrderEventsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| You can use the event ID to retrieve subsequent chunks of events. | [optional]
 **type** | [**string[]**](../Model/string.md)| Specify array of event types for filtering. Allowed values are:   * &#x60;BOUGHT&#x60;: purchase without checkout form filled in   * &#x60;FILLED_IN&#x60;: checkout form filled in but payment is not completed yet so data could still change   * &#x60;READY_FOR_PROCESSING&#x60;: payment completed. Purchase is ready for processing   * &#x60;BUYER_CANCELLED&#x60;: purchase was cancelled by buyer   * &#x60;FULFILLMENT_STATUS_CHANGED&#x60;: fulfillment status changed   * &#x60;AUTO_CANCELLED&#x60;: purchase was cancelled automatically by Allegro. | [optional]
 **limit** | **int**| The maximum number of events returned in the response. | [optional] [default to 100]

### Return type

[**\Swagger\Client\Model\OrderEventsList**](../Model/OrderEventsList.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderInvoicesDetails**
> \Swagger\Client\Model\CheckoutFormsOrderInvoices getOrderInvoicesDetails($id)

Get order invoices details

Use to get invoices details including antivirus scan results and EPT invoice verification status. Read more: <a href=\"../../orders/#jak-pobrać-informacje-o-fakturach-dodanych-do-zamówienia\" target=\"_blank\">PL</a> / <a href=\"../../en/orders/#retrieve-information-about-invoices\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Order identifier.

try {
    $result = $apiInstance->getOrderInvoicesDetails($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getOrderInvoicesDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order identifier. |

### Return type

[**\Swagger\Client\Model\CheckoutFormsOrderInvoices**](../Model/CheckoutFormsOrderInvoices.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderShipmentsUsingGET**
> \Swagger\Client\Model\CheckoutFormOrderWaybillResponse getOrderShipmentsUsingGET($id)

Get a list of parcel tracking numbers

Get a list of parcel tracking numbers currently assigned to the order. Orders can be retrieved using REST API resource GET /order/checkout-forms. Please note that the shipment list may contain parcel tracking numbers added through other channels such as Moje Allegro or by the carrier that delivers the parcel. Read more: <a href=\"../../orders/#jak-pobrać-numery-przesyłek-dodane-do-zamówienia\" target=\"_blank\">PL</a> / <a href=\"../../en/orders/#retrieving-tracking-numbers\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Order identifier.

try {
    $result = $apiInstance->getOrderShipmentsUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getOrderShipmentsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order identifier. |

### Return type

[**\Swagger\Client\Model\CheckoutFormOrderWaybillResponse**](../Model/CheckoutFormOrderWaybillResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrdersCarriersUsingGET**
> \Swagger\Client\Model\OrdersShippingCarriersResponse getOrdersCarriersUsingGET()

Get a list of available shipping carriers

Shipping carriers are essential to provide accurate tracking experience for customers. Use this resource to get a list of all available shipping carriers.  The response of this resource can be stored in accordance with returned caching headers. Read more: <a href=\"../../news/#carriers\" target=\"_blank\">PL</a> / <a href=\"../../en/news/#carriers\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-application
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOrdersCarriersUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getOrdersCarriersUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\OrdersShippingCarriersResponse**](../Model/OrdersShippingCarriersResponse.md)

### Authorization

[bearer-token-for-application](../../README.md#bearer-token-for-application), [bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrdersDetailsUsingGET**
> \Swagger\Client\Model\CheckoutForm getOrdersDetailsUsingGET($id)

Get an order's details

Use this resource to get an order details. Read more: <a href=\"../../orders/#szczegóły-zamówienia\" target=\"_blank\">PL</a> / <a href=\"../../en/orders/#order-details\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Checkout form identifier.

try {
    $result = $apiInstance->getOrdersDetailsUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->getOrdersDetailsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Checkout form identifier. |

### Return type

[**\Swagger\Client\Model\CheckoutForm**](../Model/CheckoutForm.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setOrderFulfillmentUsingPUT**
> setOrderFulfillmentUsingPUT($body, $id, $checkout_form_revision)

Set seller order status

Use to set seller order status. Read more: <a href=\"../../orders/#zmiana-statusu-realizacji-zamówienia\" target=\"_blank\">PL</a> / <a href=\"../../en/orders/#order-fulfillment-status-changeg\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CheckoutFormFulfillment(); // \Swagger\Client\Model\CheckoutFormFulfillment | request
$id = "id_example"; // string | Order identifier.
$checkout_form_revision = "checkout_form_revision_example"; // string | Checkout form revision.

try {
    $apiInstance->setOrderFulfillmentUsingPUT($body, $id, $checkout_form_revision);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->setOrderFulfillmentUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CheckoutFormFulfillment**](../Model/CheckoutFormFulfillment.md)| request |
 **id** | **string**| Order identifier. |
 **checkout_form_revision** | **string**| Checkout form revision. | [optional]

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadOrderInvoiceFile**
> uploadOrderInvoiceFile($id, $invoice_id, $body)

Upload invoice file

Use to upload invoice file to match created invoice metadata. Read more: <a href=\"../../orders/#jak-dodać-fakturę-do-zamówienia\" target=\"_blank\">PL</a> / <a href=\"../../en/orders/#add-an-invoice-to-the-order\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Order identifier.
$invoice_id = "invoice_id_example"; // string | Invoice identifier.
$body = new \Swagger\Client\Model\Object(); // Object | 

try {
    $apiInstance->uploadOrderInvoiceFile($id, $invoice_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->uploadOrderInvoiceFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Order identifier. |
 **invoice_id** | **string**| Invoice identifier. |
 **body** | **Object**|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/pdf
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

