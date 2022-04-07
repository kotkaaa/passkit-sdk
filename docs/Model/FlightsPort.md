# FlightsPort

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**iata_airport_code** | **string** | The IATA code of the port. At least one of IATA or ICAO airport code is required. | 
**icao_airport_code** | **string** | The IATA code of the port. At least one of IATA or ICAO airport code is required. | [optional] 
**city_name** | **string** | The name of the city associated with the airport can be used in back/text fields. | 
**localized_city_name** | [**\Swagger\Client\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**airport_name** | **string** | The name of the airport to be displayed on the boarding pass above the airport code. | 
**localized_airport_name** | [**\Swagger\Client\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**country_code** | **string** | The ISO 3166 country code of the port. | 
**timezone** | **string** | The timezone of the airport in IANA timezone format. This is required to ensure the correct rendering of times and dates in the time local to the port. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

