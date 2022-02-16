# Offer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_services** | [**\Swagger\Client\Model\JustId**](JustId.md) |  | [optional] 
**after_sales_services** | [**\Swagger\Client\Model\AfterSalesServices**](AfterSalesServices.md) |  | [optional] 
**attachments** | [**\Swagger\Client\Model\Attachment[]**](Attachment.md) | List of offer attachments. You can attach up to 7 files to the offer – one per each attachment type as described in &lt;a href&#x3D;\&quot;/documentation/#operation/createOfferAttachmentUsingPOST\&quot; target&#x3D;\&quot;_blank\&quot;&gt;uploading offer attachments flow&lt;/a&gt;. | [optional] 
**category** | [**AllOfOfferCategory**](AllOfOfferCategory.md) |  | [optional] 
**compatibility_list** | [**\Swagger\Client\Model\CompatibilityList**](CompatibilityList.md) |  | [optional] 
**contact** | [**\Swagger\Client\Model\JustId**](JustId.md) |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Creation date: Format (ISO 8601) - yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ. Cannot be modified. | [optional] 
**custom_parameters** | [**\Swagger\Client\Model\CustomParameter[]**](CustomParameter.md) | List of custom parameters. You can add up to 4 custom parameters, each containing exactly one value. | [optional] 
**delivery** | [**\Swagger\Client\Model\DeliveryFull**](DeliveryFull.md) |  | [optional] 
**description** | [**\Swagger\Client\Model\StandardizedDescription**](StandardizedDescription.md) |  | [optional] 
**discounts** | [**\Swagger\Client\Model\Discounts**](Discounts.md) |  | [optional] 
**external** | [**\Swagger\Client\Model\ExternalId**](ExternalId.md) |  | [optional] 
**fundraising_campaign** | [**\Swagger\Client\Model\JustId**](JustId.md) |  | [optional] 
**id** | **string** |  | [optional] 
**images** | [**\Swagger\Client\Model\ImageUrl[]**](ImageUrl.md) |  | [optional] 
**location** | [**\Swagger\Client\Model\Location**](Location.md) |  | [optional] 
**name** | **string** | Name of the offer. Words used in the name field cannot be longer than 50 characters. | 
**parameters** | [**\Swagger\Client\Model\Parameter[]**](Parameter.md) |  | [optional] 
**payments** | [**\Swagger\Client\Model\Payments**](Payments.md) |  | [optional] 
**product** | [**\Swagger\Client\Model\JustId**](JustId.md) |  | [optional] 
**promotion** | [**\Swagger\Client\Model\Promotion**](Promotion.md) |  | [optional] 
**publication** | [**\Swagger\Client\Model\Publication**](Publication.md) |  | [optional] 
**selling_mode** | [**\Swagger\Client\Model\SellingModeWithNetPrice**](SellingModeWithNetPrice.md) |  | [optional] 
**tax** | [**\Swagger\Client\Model\ExtendedTax**](ExtendedTax.md) |  | [optional] 
**size_table** | [**\Swagger\Client\Model\JustId**](JustId.md) |  | [optional] 
**stock** | [**\Swagger\Client\Model\Stock**](Stock.md) |  | [optional] 
**tecdoc_specification** | [**\Swagger\Client\Model\TecdocSpecification**](TecdocSpecification.md) |  | [optional] 
**b2b** | [**\Swagger\Client\Model\B2b**](B2b.md) |  | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Last update date: Format (ISO 8601) - yyyy-MM-dd&#x27;T&#x27;HH:mm:ss.SSSZ. Cannot be modified | [optional] 
**validation** | [**\Swagger\Client\Model\Validation**](Validation.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

