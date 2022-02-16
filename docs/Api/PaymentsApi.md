# Swagger\Client\PaymentsApi

All URIs are relative to *https://api.{environment}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPaymentsOperationHistory**](PaymentsApi.md#getpaymentsoperationhistory) | **GET** /payments/payment-operations | Payment operations history
[**getRefundedPayments**](PaymentsApi.md#getrefundedpayments) | **GET** /payments/refunds | Get a list of refunded payments
[**initiateRefund**](PaymentsApi.md#initiaterefund) | **POST** /payments/refunds | Initiate a refund of a payment

# **getPaymentsOperationHistory**
> \Swagger\Client\Model\PaymentOperations getPaymentsOperationHistory($wallet_type, $wallet_payment_operator, $payment_id, $participant_login, $occurred_at_gte, $occurred_at_lte, $group, $limit, $offset)

Payment operations history

Use this endpoint to get the list of the seller payment operations. Read more: <a href=\"../../charges/#historia-operacji-płatniczych\" target=\"_blank\">PL</a> / <a href=\"../../en/charges/#payment-operations\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wallet_type = "AVAILABLE"; // string | Type of the wallet: * AVAILABLE - operations available for payout. * WAITING - operations temporarily suspended for payout.
$wallet_payment_operator = "wallet_payment_operator_example"; // string | Payment operator: * PAYU - operations processed by PAYU operator. * P24 - operations processed by PRZELEWY24 operator.
$payment_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The payment ID.
$participant_login = "participant_login_example"; // string | Login of the participant. In case of REFUND_INCREASE operation this is the login of the seller, in other cases, of the buyer.
$occurred_at_gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The minimum date and time of operation occurrence in ISO 8601 format.
$occurred_at_lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The maximum date and time of operation occurrence in ISO 8601 format.
$group = array("group_example"); // string[] | Group of operation types: * INCOME - CONTRIBUTION, SURCHARGE, CORRECTION, DEDUCTION_INCREASE, COMPENSATION. * OUTCOME - PAYOUT, PAYOUT_CANCEL, DEDUCTION_CHARGE. * REFUND - REFUND_CHARGE, REFUND_CANCEL, REFUND_INCREASE, CORRECTION. * BLOCKADES - BLOCKADE, BLOCKADE_RELEASE.
$limit = 50; // int | Number of returned operations.
$offset = 0; // int | Index of the first returned payment operation from all search results.

try {
    $result = $apiInstance->getPaymentsOperationHistory($wallet_type, $wallet_payment_operator, $payment_id, $participant_login, $occurred_at_gte, $occurred_at_lte, $group, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getPaymentsOperationHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wallet_type** | **string**| Type of the wallet: * AVAILABLE - operations available for payout. * WAITING - operations temporarily suspended for payout. | [optional] [default to AVAILABLE]
 **wallet_payment_operator** | **string**| Payment operator: * PAYU - operations processed by PAYU operator. * P24 - operations processed by PRZELEWY24 operator. | [optional]
 **payment_id** | [**string**](../Model/.md)| The payment ID. | [optional]
 **participant_login** | **string**| Login of the participant. In case of REFUND_INCREASE operation this is the login of the seller, in other cases, of the buyer. | [optional]
 **occurred_at_gte** | **\DateTime**| The minimum date and time of operation occurrence in ISO 8601 format. | [optional]
 **occurred_at_lte** | **\DateTime**| The maximum date and time of operation occurrence in ISO 8601 format. | [optional]
 **group** | [**string[]**](../Model/string.md)| Group of operation types: * INCOME - CONTRIBUTION, SURCHARGE, CORRECTION, DEDUCTION_INCREASE, COMPENSATION. * OUTCOME - PAYOUT, PAYOUT_CANCEL, DEDUCTION_CHARGE. * REFUND - REFUND_CHARGE, REFUND_CANCEL, REFUND_INCREASE, CORRECTION. * BLOCKADES - BLOCKADE, BLOCKADE_RELEASE. | [optional]
 **limit** | **int**| Number of returned operations. | [optional] [default to 50]
 **offset** | **int**| Index of the first returned payment operation from all search results. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\PaymentOperations**](../Model/PaymentOperations.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRefundedPayments**
> \Swagger\Client\Model\InlineResponse2002 getRefundedPayments($limit, $offset, $id, $payment_id, $occurred_at_gte, $occurred_at_lte, $status)

Get a list of refunded payments

Get a list of refunded payments. Read more: <a href=\"../../orders/#jak-pobrać-listę-zwrotów-płatności\" target=\"_blank\">PL</a> / <a href=\"../../en/orders/#how-to-retrieve-a-list-of-refunded-payment\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int | Number of returned operations.
$offset = 0; // int | Index of the first returned payment operation from all search results.
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | ID of the refund.
$payment_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | ID of the payment.
$occurred_at_gte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Minimum date and time when the refund occurred provided in ISO 8601 format.
$occurred_at_lte = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Maximum date and time when the refund occurred provided in ISO 8601 format.
$status = array("status_example"); // string[] | Current status of payment refund.

try {
    $result = $apiInstance->getRefundedPayments($limit, $offset, $id, $payment_id, $occurred_at_gte, $occurred_at_lte, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getRefundedPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Number of returned operations. | [optional] [default to 50]
 **offset** | **int**| Index of the first returned payment operation from all search results. | [optional] [default to 0]
 **id** | [**string**](../Model/.md)| ID of the refund. | [optional]
 **payment_id** | [**string**](../Model/.md)| ID of the payment. | [optional]
 **occurred_at_gte** | **\DateTime**| Minimum date and time when the refund occurred provided in ISO 8601 format. | [optional]
 **occurred_at_lte** | **\DateTime**| Maximum date and time when the refund occurred provided in ISO 8601 format. | [optional]
 **status** | [**string[]**](../Model/string.md)| Current status of payment refund. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **initiateRefund**
> \Swagger\Client\Model\RefundDetails initiateRefund($body)

Initiate a refund of a payment

Use this endpoint to initiate a refund of a payment. Read more: <a href=\"../../orders/#jak-wykonać-zwrot-płatności\" target=\"_blank\">PL</a> / <a href=\"../../en/orders/#how-to-refund-a-payment\" target=\"_blank\">EN</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: bearer-token-for-user
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\InitializeRefund(); // \Swagger\Client\Model\InitializeRefund | 

try {
    $result = $apiInstance->initiateRefund($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->initiateRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\InitializeRefund**](../Model/InitializeRefund.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\RefundDetails**](../Model/RefundDetails.md)

### Authorization

[bearer-token-for-user](../../README.md#bearer-token-for-user)

### HTTP request headers

 - **Content-Type**: application/vnd.allegro.public.v1+json
 - **Accept**: application/vnd.allegro.public.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

