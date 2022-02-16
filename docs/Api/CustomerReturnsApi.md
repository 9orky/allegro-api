# Swagger\Client\CustomerReturnsApi

All URIs are relative to *https://api.{environment}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomerReturnById**](CustomerReturnsApi.md#getcustomerreturnbyid) | **GET** /order/customer-returns/{customerReturnId} | [BETA] Get customer return by id
[**getCustomerReturns**](CustomerReturnsApi.md#getcustomerreturns) | **GET** /order/customer-returns | [BETA] Get customer returns by provided query parameters
[**rejectCustomerReturnRefund**](CustomerReturnsApi.md#rejectcustomerreturnrefund) | **POST** /order/customer-returns/{customerReturnId}/rejection | [BETA] Reject customer return refund

# **getCustomerReturnById**
> \Swagger\Client\Model\CustomerReturn getCustomerReturnById($customer_return_id)

[BETA] Get customer return by id

Use this resource to get customer returns by its identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CustomerReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return_id = "customer_return_id_example"; // string | Id of the customer return.

try {
    $result = $apiInstance->getCustomerReturnById($customer_return_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsApi->getCustomerReturnById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_return_id** | **string**| Id of the customer return. |

### Return type

[**\Swagger\Client\Model\CustomerReturn**](../Model/CustomerReturn.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.beta.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerReturns**
> \Swagger\Client\Model\CustomerReturnResponse getCustomerReturns($customer_return_id, $order_id, $items_offer_id, $items_name, $parcels_waybill, $parcels_carrier_id, $parcels_sender_phone_number, $reference_number, $from, $created_at_gte, $created_at_lte, $limit, $offset)

[BETA] Get customer returns by provided query parameters

Use this resource to get all customer returns filtered by query parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CustomerReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_return_id = "customer_return_id_example"; // string | One or more customer return id's.
$order_id = "order_id_example"; // string | One or more order id's.
$items_offer_id = "items_offer_id_example"; // string | One or more returned item offer id's.
$items_name = "items_name_example"; // string | One or more item names.
$parcels_waybill = "parcels_waybill_example"; // string | One or more waybill id's.
$parcels_carrier_id = "parcels_carrier_id_example"; // string | One or more carrier id's.
$parcels_sender_phone_number = "parcels_sender_phone_number_example"; // string | One or more phone numbers.
$reference_number = "reference_number_example"; // string | One or more reference numbers.
$from = "from_example"; // string | The ID of the last seen customer return. Customer returns created after the given customer return will be returned.
$created_at_gte = "created_at_gte_example"; // string | Date of the return in ISO 8601 format to search by greater or equal.
$created_at_lte = "created_at_lte_example"; // string | Date of the return in ISO 8601 format to search by lower or equal.
$limit = 100; // int | Limit of customer returns per page.
$offset = 0; // int | The offset of elements in the response.

try {
    $result = $apiInstance->getCustomerReturns($customer_return_id, $order_id, $items_offer_id, $items_name, $parcels_waybill, $parcels_carrier_id, $parcels_sender_phone_number, $reference_number, $from, $created_at_gte, $created_at_lte, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsApi->getCustomerReturns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_return_id** | **string**| One or more customer return id&#x27;s. | [optional]
 **order_id** | **string**| One or more order id&#x27;s. | [optional]
 **items_offer_id** | **string**| One or more returned item offer id&#x27;s. | [optional]
 **items_name** | **string**| One or more item names. | [optional]
 **parcels_waybill** | **string**| One or more waybill id&#x27;s. | [optional]
 **parcels_carrier_id** | **string**| One or more carrier id&#x27;s. | [optional]
 **parcels_sender_phone_number** | **string**| One or more phone numbers. | [optional]
 **reference_number** | **string**| One or more reference numbers. | [optional]
 **from** | **string**| The ID of the last seen customer return. Customer returns created after the given customer return will be returned. | [optional]
 **created_at_gte** | **string**| Date of the return in ISO 8601 format to search by greater or equal. | [optional]
 **created_at_lte** | **string**| Date of the return in ISO 8601 format to search by lower or equal. | [optional]
 **limit** | **int**| Limit of customer returns per page. | [optional] [default to 100]
 **offset** | **int**| The offset of elements in the response. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\CustomerReturnResponse**](../Model/CustomerReturnResponse.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.beta.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rejectCustomerReturnRefund**
> \Swagger\Client\Model\CustomerReturn rejectCustomerReturnRefund($body, $customer_return_id)

[BETA] Reject customer return refund

Use this resource to reject customer return refund with provided reason.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CustomerReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CustomerReturnRefundRejectionRequest(); // \Swagger\Client\Model\CustomerReturnRefundRejectionRequest | 
$customer_return_id = "customer_return_id_example"; // string | Id of the customer return.

try {
    $result = $apiInstance->rejectCustomerReturnRefund($body, $customer_return_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerReturnsApi->rejectCustomerReturnRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CustomerReturnRefundRejectionRequest**](../Model/CustomerReturnRefundRejectionRequest.md)|  |
 **customer_return_id** | **string**| Id of the customer return. |

### Return type

[**\Swagger\Client\Model\CustomerReturn**](../Model/CustomerReturn.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.beta.v1+json
 - **Accept**: application/vnd.allegro.beta.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

