# FlightsInfant

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**infant_details** | [**\Swagger\Client\Model\IoPerson**](IoPerson.md) |  | [optional] 
**identity_details** | [**\Swagger\Client\Model\FlightsIdentityDetails**](FlightsIdentityDetails.md) |  | [optional] 
**barcode_payload** | **string** | The barcode payload to be rendered on the infant boarding pass. If not provided, an IATA barcode will be compiled, based on the adult boarding pass barcode data. | [optional] 
**conditional_items** | [**\Swagger\Client\Model\FlightsConditionalItems**](FlightsConditionalItems.md) |  | [optional] 
**barcode_additional_data** | **string** | Optional additional barcode data. If PassKit are generating barcodes, airline use data (IATA item 4) to be included in the infant barcode. | [optional] 
**security_image** | **string** | Security image id for display above the barcode on a Google Pay pass. | [optional] 
**privilege_image** | **string** | Privilege image id for display above the barcode on a Google Pay pass. | [optional] 
**footer_image** | **string** | Footer image id for display above the barcode on iOS devices. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

