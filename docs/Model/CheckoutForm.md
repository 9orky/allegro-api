# CheckoutForm

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Checkout form id | 
**message_to_seller** | **string** | Message from buyer to seller | [optional] 
**buyer** | [**\Swagger\Client\Model\CheckoutFormBuyerReference**](CheckoutFormBuyerReference.md) |  | 
**payment** | [**\Swagger\Client\Model\CheckoutFormPaymentReference**](CheckoutFormPaymentReference.md) |  | [optional] 
**status** | [**\Swagger\Client\Model\CheckoutFormStatus**](CheckoutFormStatus.md) |  | 
**fulfillment** | [**\Swagger\Client\Model\CheckoutFormFulfillment**](CheckoutFormFulfillment.md) |  | [optional] 
**delivery** | [**\Swagger\Client\Model\CheckoutFormDeliveryReference**](CheckoutFormDeliveryReference.md) |  | [optional] 
**invoice** | [**\Swagger\Client\Model\CheckoutFormInvoiceInfo**](CheckoutFormInvoiceInfo.md) |  | [optional] 
**line_items** | [**\Swagger\Client\Model\CheckoutFormLineItem[]**](CheckoutFormLineItem.md) |  | 
**surcharges** | [**\Swagger\Client\Model\CheckoutFormPaymentReference[]**](CheckoutFormPaymentReference.md) |  | 
**discounts** | [**\Swagger\Client\Model\CheckoutFormDiscount[]**](CheckoutFormDiscount.md) |  | 
**summary** | [**\Swagger\Client\Model\CheckoutFormSummary**](CheckoutFormSummary.md) |  | 
**updated_at** | **string** | Provided in [ISO 8601 format](https://en.wikipedia.org/wiki/ISO_8601). | [optional] 
**revision** | **string** | Checkout form revision | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

