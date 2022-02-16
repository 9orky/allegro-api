# SaleProductOfferRequestV1Publication

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**duration** | [**\Swagger\Client\Model\OfferDuration**](OfferDuration.md) |  | [optional] 
**starting_at** | [**\Swagger\Client\Model\OfferStartingAt**](OfferStartingAt.md) |  | [optional] 
**status** | [**\Swagger\Client\Model\OfferStatus**](OfferStatus.md) |  | [optional] 
**republish** | **bool** | Whether to republish an offer after ending. Automatically republish offers or auctions:&lt;/br&gt; - &#x60;BUY_NOW&#x60; offer type are republished with initial stock, regardless of how many items you have sold.&lt;/br&gt; - &#x60;AUCTION&#x60; offer type are republished only if they were not concluded with purchase.&lt;/br&gt; - &#x60;ADVERTISEMENT&#x60; offer type are republished until it will be finished manually. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

