# CheckoutFormAddWaybillRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**carrier_id** | **string** | Supported carriers are available via &lt;a href&#x3D;\&quot;#operation/getOrdersCarriersUsingGET\&quot; target&#x3D;\&quot;_blank\&quot;&gt;shipping carriers resource&lt;/a&gt;. | 
**waybill** | **string** | Waybill number (parcel tracking number). Cannot be empty and must be no longer than 64 characters. It can contain any word character (equal to [a-zA-Z0-9_]) and special characters: parentheses and hyphen-minus. | 
**carrier_name** | **string** | Carrier name to be provided only if carrierId is OTHER, otherwise it’s ignored. Must be no longer than 30 characters. | [optional] 
**line_items** | [**\Swagger\Client\Model\CheckoutFormAddWaybillRequestLineItems[]**](CheckoutFormAddWaybillRequestLineItems.md) | List of order line items. They must be from the order specified in the path parameter. When list is not provided or it is empty it means that every item from an order is included in shipment. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

