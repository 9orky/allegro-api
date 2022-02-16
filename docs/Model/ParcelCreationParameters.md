# ParcelCreationParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_id** | **int** | Delivery service id. | 
**receiver** | [**\Swagger\Client\Model\Receiver**](Receiver.md) |  | 
**pickup** | [**\Swagger\Client\Model\Pickup**](Pickup.md) |  | 
**items** | [**\Swagger\Client\Model\ParcelItemDetails[]**](ParcelItemDetails.md) | Parcel items details. | 
**type** | **string** | Value will be applied to type for all items. If item will have type value assigned - validation will check if all types have the same value. | [optional] 
**label** | [**\Swagger\Client\Model\ParcelCreationParametersLabel**](ParcelCreationParametersLabel.md) |  | [optional] 
**additional_services** | [**\Swagger\Client\Model\ParcelAdditionalServices**](ParcelAdditionalServices.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

