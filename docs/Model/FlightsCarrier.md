# FlightsCarrier

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**iata_carrier_code** | **string** | The IATA carrier code. If the carrier has not been issued an IATA carrier code or an ICAO carrier code, use YY. | 
**icao_carrier_code** | **string** | The ICAO carrier code. Required if an iataCarrierCode is not provided. | [optional] 
**iata_accounting_code** | **int** | The IATA accounting code / AWB prefix.  If no code has been allocated, enter zero. | [optional] 
**airline_name** | **string** | The name of the airline. This will be printed below the logo on the Google Pay pass. | 
**localized_airline_name** | [**\Swagger\Client\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**pass_type_identifier** | **string** | If the carrier will issue Apple Wallet passes, supply the certificate id (E.g. pass.com.passkitair). The certificate must have previously been uploaded. | 
**private_key_id** | **string** | If PassKit are generating the boarding pass barcode, and the barcode needs signing, the ID of the private key used to sign the barcode payload. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

