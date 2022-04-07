# FlightsBoardingPassesForBookingRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pnr** | **string** | The master PNR for the booking. | 
**ticket_leg** | **int** | Optional. The leg of the ticket. Typically for a return ticket, the outbound leg will be 1 and the return leg will be 2. | [optional] 
**boarding_point** | **string** | Required if no ticket leg. The 3 letter IATA code or 4 letter ICAO code of the passenger boarding point. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

