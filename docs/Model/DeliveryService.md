# DeliveryService

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Delivery service id. | [optional] 
**service** | **string** | Discriminator of delivery service to distinguish multiple agreement types of a single carrier. | [optional] 
**name** | **string** | Delivery service name. | [optional] 
**carrier_id** | **string** | Carrier id consistent with &lt;a href&#x3D;\&quot;#operation/getOrdersCarriersUsingGET\&quot; target&#x3D;\&quot;_blank\&quot;&gt;shipping carriers resource&lt;/a&gt;. | [optional] 
**additional_services** | [**\Swagger\Client\Model\ParcelAdditionalServicesAvailability**](ParcelAdditionalServicesAvailability.md) |  | [optional] 
**owner** | **string** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

