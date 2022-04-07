# FlightsConditionalItems

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**passenger_description** | [**\Swagger\Client\Model\FlightsPassengerDescription**](FlightsPassengerDescription.md) |  | [optional] 
**check_in_source** | [**\Swagger\Client\Model\FlightsSource**](FlightsSource.md) |  | [optional] 
**boarding_pass_issuance_source** | [**\Swagger\Client\Model\FlightsSource**](FlightsSource.md) |  | [optional] 
**boarding_pass_issue_date** | [**\Swagger\Client\Model\IoDate**](IoDate.md) |  | [optional] 
**document_type** | [**\Swagger\Client\Model\FlightsDocType**](FlightsDocType.md) |  | [optional] 
**boarding_pass_issuer** | **string** | IATA or ICAO designator of boarding pass issuer. | [optional] 
**baggage_tag_number** | **string[]** | This field allows carriers to populate baggage tag numbers and the number of consecutive bags. It contains 13 characters corresponding to the 10 digit bag tag number, as per IATA BCM specifications, Resolution 740 and 3 digits identifying the number of consecutive tags. 1: leading digit – 0 for interline tag, 1 for fall-back tag, 2 for interline rush tag. 2-4: carrier numeric code. 5-10: carrier initial tag number (leading zeros). 11-13: number of consecutive tags (allows for up to 999 tags). Up to 2 additional, non-consecutive tags can be added. | [optional] 
**selectee_indicator** | [**\Swagger\Client\Model\FlightsSelecteeIndicator**](FlightsSelecteeIndicator.md) |  | [optional] 
**international_doc_verification** | [**\Swagger\Client\Model\FlightsInternationalDocVerification**](FlightsInternationalDocVerification.md) |  | [optional] 
**idad_indicator** | [**\Swagger\Client\Model\FlightsIDADIndicator**](FlightsIDADIndicator.md) |  | [optional] 
**fast_track** | [**\Swagger\Client\Model\FlightsFastTrack**](FlightsFastTrack.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

