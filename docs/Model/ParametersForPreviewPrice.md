# ParametersForPreviewPrice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | [**\Swagger\Client\Model\Category**](Category.md) |  | 
**condition** | **string** | Offer condition, if is new, used or other. | [optional] 
**duration** | **string** |  | [optional] 
**has_any_quantity** | **bool** |  | [optional] 
**number_of_big_photos** | **int** | If set, minimum value 0 | [optional] 
**number_of_photos** | **int** | If set, minimum value 0 | [optional] 
**quantity** | **int** | Quantity of items to be sold. If set, minimum value 1 | [optional] 
**shop** | **bool** | Deprecated. Value &#x27;true&#x27; sets the &#x27;offer.type&#x27; field to &#x27;shop&#x27;, value &#x27;false&#x27; to &#x27;offer&#x27;. This field is ignored if &#x27;offer.type&#x27; field is set. | [optional] 
**sold_quantity** | **int** | Quantity of sold items. Relates to commission success fee. If set, minimum value 1 | [optional] 
**type** | **string** | Offer type. &#x27;type&#x27; or &#x27;shop&#x27; fields must be provided. Takes precedence over &#x27;shop&#x27; field. Note: if type &#x3D; &#x27;advertisement&#x27; then either &#x27;quantity&#x27; or &#x27;soldQuantity&#x27; field must be set. | [optional] 
**unit_price** | **float** |  | 
**bold** | **bool** |  | [optional] 
**highlight** | **bool** |  | [optional] 
**department_page** | **bool** |  | [optional] 
**emphasized** | **bool** |  | [optional] 
**emphasized_highlight_bold_package** | **bool** |  | [optional] 
**multi_variant** | **bool** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

