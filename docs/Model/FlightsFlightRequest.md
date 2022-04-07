# FlightsFlightRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**carrier_code** | **string** | The 2 character IATA code or 3 character ICAO code. | [optional] 
**flight_number** | **string** | The flight number. | [optional] 
**departure_date** | [**\Swagger\Client\Model\IoDate**](IoDate.md) |  | [optional] 
**boarding_point** | **string** | The IATA airport code for the boarding point of the flight. Only required for direct flights with stops where the boarding point is after the first port and segment is not provided. | [optional] 
**deplaning_point** | **string** | The IATA airport code for the destination of the flight. Only required for direct flights with stops where the flight ends before the final port. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

