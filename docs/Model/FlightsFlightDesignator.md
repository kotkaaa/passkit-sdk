# FlightsFlightDesignator

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**carrier_code** | **string** | The IATA or ICAO carrier code for the flight. In the case of a code-share, this should be the carrier code that you wish to present to the customer. This could be the marketing code, or the operating airline code. A carrier record for this code must exist. | 
**flight_number** | **string** | The flight number.  Note this number must match the carrier code. | 
**valid_from** | [**\Swagger\Client\Model\IoDate**](IoDate.md) |  | [optional] 
**revision** | **int** | Multiple designators can be active at a time. Provide a revision to distinguish between versions. | 
**active** | **bool** | Setting to false will prevent further flights to be created against this flight number. Will automatically be set to false if a second designator with a validFrom date before the current date and after this designator&#x27;s validFrom date is found. | [optional] [default to true]
**schedule** | [**\Swagger\Client\Model\FlightsFlightSchedule**](FlightsFlightSchedule.md) |  | 
**operating_carrier_code** | **string** | If the flight is operated by a carrier other than the carrierCode supplied, provide the IATA or ICAO carrier code for the operating carrier.  A carrier record must exist. | [optional] 
**operating_flight_number** | **string** | If the flight is operated by a carrier other than the carrierCode supplied, provide the flight number for the operating carrier. | [optional] 
**code_share_flight_numbers** | **string[]** | If the flight has code shares, then enter the carrier code and flight number. If there is an operating carrier, then do not include this in the list.  Code share carriers will not be validated. | [optional] 
**origin** | **string** | The origin port of the flight. In the case of direct flights with multiple stops, this will represent the port where the route commences. | 
**destination** | **string** | The destination port of the flight. In the case of direct flights with multiple stops, this will represent the final port where the route terminates. | 
**transit_points** | **string[]** | In the case of multiple stops, an ordered array of transit points, commencing with the first port after the origin and ending with the penultimate port. | [optional] 
**departure_terminal** | **string** | The default terminal that the flight departs from. | [optional] 
**arrival_terminal** | **string** | The default terminal of the final destination. | [optional] 
**transit_terminals** | **string[]** | In the case of multiple stops, an ordered array of transit terminals. The length of this array should match the number of transit points. | [optional] 
**boarding_policy** | [**\Swagger\Client\Model\FlightsBoardingPolicy**](FlightsBoardingPolicy.md) |  | [optional] 
**seat_class_policy** | [**\Swagger\Client\Model\FlightsSeatClassPolicy**](FlightsSeatClassPolicy.md) |  | [optional] 
**alerts** | [**\Swagger\Client\Model\FlightsFlightAlerts[]**](FlightsFlightAlerts.md) | An array of alerts to subscribe to for the flight. Note that additional charges apply. | [optional] 
**pass_template_id** | **string** | The PassKit template id that will be used for boarding passes for this flight. It can be overwritten at the flight level. | 
**auto_invalidate_after** | **int** | Minutes after scheduled arrival time to automatically invalidate the pass. Enter a value of 9999999 or greater if the pass should not auto invalidate. Default is 48 hours. | [optional] [default to 2880]
**auto_invalidate_cancelled_passes** | **bool** | Deprecated: Use InvalidateCancelledPasses. | [optional] 
**location_messages** | [**\Swagger\Client\Model\IoGPSLocation[]**](IoGPSLocation.md) | A list of up to 10 GPS locations where this boarding pass should be presented on the lock-screen. | [optional] 
**beacon_messages** | [**\Swagger\Client\Model\IoBeacon[]**](IoBeacon.md) | A list of up to 10 Beacon UUIDs that should trigger the boarding pass to be presented on the lock-screen. | [optional] 
**default_links** | [**\Swagger\Client\Model\IoLink[]**](IoLink.md) | A list of links to be appended to the end of each boarding pass. | [optional] 
**conditional_items** | **bool** | If PassKit are generating barcodes, include conditional items. Default false. | [optional] 
**barcode_additional_data** | **string** | If PassKit are generating barcodes, default airline use data (IATA item 4). This can be overwritten at the flight and boarding pass level. | [optional] 
**invalidate_cancelled_passes** | [**\Swagger\Client\Model\IoToggle**](IoToggle.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

