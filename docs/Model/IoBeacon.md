# IoBeacon

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**uuid** | **string** | A valid UUID that is being broadcast from your beacon. | 
**name** | **string** |  | [optional] 
**major** | **int** | Major indicator. | [optional] 
**minor** | **int** | Minor indicator. | [optional] 
**lock_screen_message** | **string** | Message to be displayed on lock screen when user is in proximity of the beacon (iOS only). | 
**localized_lock_screen_message** | [**\Swagger\Client\Model\IoLocalizedString**](IoLocalizedString.md) |  | [optional] 
**position** | **int** | Beacons will be added in order of their position, from lowest to highest. Position can be any value, E.g. 3 Beacons with positions 30, 10, 20 would be added 10 first, 20 second and 30 third.  If no position is provided and the number of beacons exceeds 10, there is no guarantee which beacon(s) would be excluded from the pass. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

