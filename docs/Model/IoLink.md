# IoLink

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Link Id. Not writable. | [optional] 
**url** | **string** | A link text. | [optional] 
**title** | **string** | Title for the link. | [optional] 
**type** | [**\Swagger\Client\Model\IoLinkType**](IoLinkType.md) |  | [optional] 
**localized_link** | [**\Swagger\Client\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**localized_title** | [**\Swagger\Client\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**usage** | [**\Swagger\Client\Model\IoUsageType[]**](IoUsageType.md) | Indicates which wallets the link should be rendered for (this allows to hide certain link on Apple Wallet, and vise versa). | [optional] 
**position** | **int** | Links will be rendered in order of their position, from lowest to highest. Position can be any value, E.g. 3 links with positions 30, 10, 20 would render 10 first, 20 second and 30 third.  If no position is provided, the order of the links cannot be guaranteed. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

