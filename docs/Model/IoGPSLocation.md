# IoGPSLocation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**name** | **string** |  | [optional] 
**lat** | **double** | Latitude. | 
**lon** | **double** | Longitude. | [optional] 
**alt** | **int** | Altitude in metres. | [optional] 
**lock_screen_message** | **string** | Message to be displayed on lock screen when user is in the location (iOS only). | 
**localized_lock_screen_message** | [**\Swagger\Client\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**position** | **int** | Locations will be added in order of their position, from lowest to highest. Position can be any value, E.g. 3 Locations with positions 30, 10, 20 would be added 10 first, 20 second and 30 third.  If no position is provided and the number of locations exceeds 10, there is no guarantee which location(s) would be excluded from the pass. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

