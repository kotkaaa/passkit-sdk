# FlightsFlight

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**carrier_code** | **string** | The IATA or ICAO carrier code for the flight. In the case of a code-share, this should be the carrier code that you wish to present to the customer. This could be the marketing code, or the operating airline code. A carrier record for this code must exist. | 
**flight_number** | **string** | The flight number. | 
**boarding_point** | **string** | The IATA airport code of the boarding point. Only required is segment is not provided. | 
**deplaning_point** | **string** | The IATA airport code of the deplaning point. | 
**departure_date** | [**\Swagger\Client\Model\IoDate**](IoDate.md) |  | 
**departure_terminal** | **string** | Departure Terminal. | [optional] 
**arrival_terminal** | **string** | Arrival Terminal. | [optional] 
**departure_gate** | **string** | Departure Gate. | [optional] 
**arrival_gate** | **string** | Arrival Gate. | [optional] 
**scheduled_departure_time** | [**\Swagger\Client\Model\IoLocalDateTime**](IoLocalDateTime.md) |  | 
**estimated_departure_time** | [**\Swagger\Client\Model\IoLocalDateTime**](IoLocalDateTime.md) |  | [optional] 
**boarding_time** | [**\Swagger\Client\Model\IoLocalDateTime**](IoLocalDateTime.md) |  | [optional] 
**gate_closing_time** | [**\Swagger\Client\Model\IoLocalDateTime**](IoLocalDateTime.md) |  | [optional] 
**scheduled_arrival_time** | [**\Swagger\Client\Model\IoLocalDateTime**](IoLocalDateTime.md) |  | [optional] 
**estimated_arrival_time** | [**\Swagger\Client\Model\IoLocalDateTime**](IoLocalDateTime.md) |  | [optional] 
**operating_carrier_code** | **string** | If the flight is operated by a carrier other than the carrierCode supplied, provide the IATA or ICAO carrier code for the operating carrier.  A carrier record must exist. | [optional] 
**operating_flight_number** | **string** | If the flight is operated by a carrier other than the carrierCode supplied, provide the flight number for the operating carrier. | [optional] 
**code_share_flight_numbers** | **string[]** | If the flight has code shares, then enter the carrier code and flight number. If there is an operating carrier, then do not include this in the list. Code share carriers will not be validated. | [optional] 
**pass_template_id** | **string** | The pass template id. | 
**baggage_belt** | **string** | The baggage belt at the destination. | [optional] 
**auto_invalidate_after** | **int** | Minutes after estimated or scheduled arrival to automatically invalidate the pass. Enter a value of 9999999 or greater if the pass should not auto invalidate. Default is 48 hours. | [optional] [default to 2880]
**auto_invalidate_cancelled_passes** | **bool** | Deprecated: Use InvalidateCancelledPasses. | [optional] 
**location_messages** | [**\Swagger\Client\Model\IoGPSLocation[]**](IoGPSLocation.md) | A list of up to 10 GPS locations where this boarding pass should be presented on the lock-screen. Values here will override the designated defaults. | [optional] 
**beacon_messages** | [**\Swagger\Client\Model\IoBeacon[]**](IoBeacon.md) | A list of up to 10 Beacon UUIDs that should trigger the boarding pass to be presented on the lock-screen. Values here will override the designated defaults. | [optional] 
**links** | [**\Swagger\Client\Model\IoLink[]**](IoLink.md) | A list of links to be appended to the end of each boarding pass. | [optional] 
**suspend_automatic_updates** | **bool** | Suspend automatic updates to all boarding passes for this flight. | [optional] 
**boarding_policy** | [**\Swagger\Client\Model\FlightsBoardingPolicy**](FlightsBoardingPolicy.md) |  | [optional] 
**seating_policy** | [**\Swagger\Client\Model\FlightsSeatClassPolicy**](FlightsSeatClassPolicy.md) |  | [optional] 
**status** | [**\Swagger\Client\Model\FlightsFlightStatus**](FlightsFlightStatus.md) |  | [optional] 
**conditional_items** | **bool** | If PassKit are generating barcodes, include conditional items. Default false. | [optional] 
**barcode_additional_data** | **string** | If PassKit are generating barcodes, default airline use data (IATA item 4). This can be overwritten at the flight and boarding pass level. | [optional] 
**metrics** | [**\Swagger\Client\Model\IoMetrics**](IoMetrics.md) |  | [optional] 
**create_method** | [**\Swagger\Client\Model\FlightsFlightCreateMode**](FlightsFlightCreateMode.md) |  | [optional] 
**designator_id** | **string** | For automatically created flights, shows the ID of the designator that bootstrapped the flight record. | [optional] 
**invalidate_cancelled_passes** | [**\Swagger\Client\Model\IoToggle**](IoToggle.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

