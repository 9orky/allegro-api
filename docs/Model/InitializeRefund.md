# InitializeRefund

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment** | [**\Swagger\Client\Model\RefundPayment**](RefundPayment.md) |  | 
**reason** | **string** | Reason for a payment refund. | 
**line_items** | [**\Swagger\Client\Model\RefundLineItem[]**](RefundLineItem.md) | List of order&#x27;s line items which can be refunded. | [optional] 
**delivery** | [**\Swagger\Client\Model\InitializeRefundDelivery**](InitializeRefundDelivery.md) |  | [optional] 
**overpaid** | [**\Swagger\Client\Model\InitializeRefundOverpaid**](InitializeRefundOverpaid.md) |  | [optional] 
**surcharges** | [**\Swagger\Client\Model\PaymentsSurcharge[]**](PaymentsSurcharge.md) | List of surcharges for payment which can be refunded. | [optional] 
**additional_services** | [**\Swagger\Client\Model\InitializeRefundAdditionalServices**](InitializeRefundAdditionalServices.md) |  | [optional] 
**seller_comment** | **string** | Sellers optional justification for refund. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

