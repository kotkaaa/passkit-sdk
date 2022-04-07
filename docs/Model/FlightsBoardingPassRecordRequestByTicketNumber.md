# FlightsBoardingPassRecordRequestByTicketNumber

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ticket_number** | **string** | Ticket number can optionally be prefixed by the 3 digit airline code, followed by a 10 digit ticket number.  For ticket numbers less than 10 digits, pad with zeros. | 
**ticket_leg** | **int** | The leg of the ticketed journey. For a return flight, the outbound flight would be leg 1 and the inbound flight would be leg 2.  For Direct flights, a ticketed leg includes all stops between the boarding point and deplaning point. Leg cannot be zero and ticket/leg combination cannot already exist for a &#x27;create&#x27; call. | [optional] 
**boarding_point** | **string** | Required if no ticket leg. The 3 letter IATA code or 4 letter ICAO code of the passenger boarding point. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

