# FlightsBoardingPassRecord

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Id assigned by PassKit to represent the boarding pass record. It will be used as the serial number in Apple Wallet and as the Object identifier for Google Wallet. This field is not writable. | [optional] 
**operating_carrier_pnr** | **string** | PNR code of the carrier operating the flight, independent of code-share, lease or other issues. | 
**related_pn_rs** | **string[]** | Related PNRs can be used to index the record and can be the marketing carrier PNR or a master PNR containing multiple bookings. If required, a related PNR can be followed by the two or three character designator of the carrier or CRS controlling the PNR, separated by an oblique. | [optional] 
**ticket_number** | **string** | Ticket number can optionally be prefixed by the 3 digit airline code, followed by a 10 digit ticket number.  For ticket numbers less than 10 digits, pad with zeros. | [optional] 
**ticket_leg** | **int** | The leg of the ticketed journey. For a return flight, the outbound flight would be leg 1 and the inbound flight would be leg 2.  For Direct flights, a ticketed leg includes all stops between the boarding point and deplaning point. Leg cannot be zero and ticket/leg combination cannot already exist for a &#x27;create&#x27; call. | [optional] 
**boarding_point** | **string** | 3 letter IATA code or 4 letter ICAO code of the passenger boarding point. | 
**deplaning_point** | **string** | 3 letter IATA code or 4 letter ICAO code of the passenger deplaning point. | 
**carrier_code** | **string** | The two or three character airline code of the marketing carrier. | 
**flight_number** | **string** | The flight number of the marketing character (excluding the carrier code). | 
**departure_date** | [**\Swagger\Client\Model\IoDate**](IoDate.md) |  | 
**passenger** | [**\Swagger\Client\Model\FlightsPassenger**](FlightsPassenger.md) |  | 
**class** | **string** | Free-form text that can be used to describe the ticket class, tier or cabin. E.g. \&quot;Business\&quot;, \&quot;Premium Economy\&quot;, \&quot;Club World\&quot;. | [optional] 
**compartment_code** | [**\Swagger\Client\Model\CabinCodesCompartmentCode**](CabinCodesCompartmentCode.md) |  | [optional] 
**seat_number** | **string** | The allocated seat number.  The text \&quot;ANY\&quot; or \&quot;XXX\&quot; can be used where a free seating condition exists. | [optional] 
**sequence_number** | **int** | The check in sequence number. | 
**boarding_group** | **string** | A boarding group or zone indicator. This is displayed on the pass to assist passengers and ground-staff to expedite boarding. | [optional] 
**boarding_position** | **string** | An additional field to indicate boarding priority or order. | [optional] 
**free_baggage_allowance** | **string** | 3 character string comprising the quantity, followed by the unit code (PC - piece, L - lbs, K - kgs). E.g. 2PC, 20K. | [optional] 
**carry_on_allowance** | **string** | 3 character string comprising the quantity, followed by the unit code (PC - piece, L - lbs, K - kgs). E.g. 2PC, 20K. | [optional] 
**ssr_codes** | **string[]** | An array of SSR codes. Codes should be 4 capitalized letters. Codes may be annotated. | [optional] 
**osi** | **string** | Other service information that may be relevant to the booking. | [optional] 
**remarks** | **string** | Free text booking remarks. | [optional] 
**passenger_status** | [**\Swagger\Client\Model\FlightsPassengerStatus**](FlightsPassengerStatus.md) |  | [optional] 
**conditional_items** | [**\Swagger\Client\Model\FlightsConditionalItems**](FlightsConditionalItems.md) |  | [optional] 
**barcode_payload** | **string** | Payload to be encoded in the pass barcode. If omitted, an IATA BCBP Standard (Resolution 792) barcode will be generated. | [optional] 
**security_image** | **string** | Security image id for display above the barcode on a Google Pay pass. | [optional] 
**privilege_image** | **string** | Privilege image id for display above the barcode on a Google Pay pass. | [optional] 
**footer_image** | **string** | Footer image id for display above the barcode on iOS devices. | [optional] 
**location_messages** | [**\Swagger\Client\Model\IoGPSLocation[]**](IoGPSLocation.md) | A list of up to 10 GPS locations where this boarding pass should be presented on the lock-screen. Values here will override the designation and flight values. | [optional] 
**beacon_messages** | [**\Swagger\Client\Model\IoBeacon[]**](IoBeacon.md) | A list of up to 10 Beacon UUIDs that should trigger the boarding pass to be presented on the lock-screen. Values here will override the designation and flight values. | [optional] 
**links** | [**\Swagger\Client\Model\IoLink[]**](IoLink.md) | A list of links to be appended to the end of each boarding pass. | [optional] 
**barcode_additional_data** | **string** | If PassKit are generating barcodes, airline use data (IATA item 4) to be included in the barcode. | [optional] 
**infant_pass_id** | **string** | If a passenger is travelling as an infant and the airline is not using conditional data with a passenger description of 6 (Adult With Infant), an id of the infant&#x27;s boarding pass will be recorded here. | [optional] 
**additional_data_items** | [**\Swagger\Client\Model\IoDataItems**](IoDataItems.md) |  | [optional] 
**metadata** | [**\Swagger\Client\Model\IoMetadata**](IoMetadata.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

