# ParcelDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parcel_id** | **string** | Id of parcel. | [optional] 
**service_id** | **int** | Delivery service id. | [optional] 
**receiver** | [**\Swagger\Client\Model\Receiver**](Receiver.md) |  | [optional] 
**pickup** | [**\Swagger\Client\Model\Pickup**](Pickup.md) |  | [optional] 
**items** | [**\Swagger\Client\Model\ParcelItemDetailsWithWaybill[]**](ParcelItemDetailsWithWaybill.md) | Parcel items details. | [optional] 
**type** | **string** | Value will be returned if all items will have the same type. | [optional] 
**label** | [**\Swagger\Client\Model\ParcelDetailsLabel**](ParcelDetailsLabel.md) |  | [optional] 
**additional_services** | [**\Swagger\Client\Model\ParcelAdditionalServices**](ParcelAdditionalServices.md) |  | [optional] 
**state** | **string** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

