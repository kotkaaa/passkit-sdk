# IoPerson

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**surname** | **string** | Surname / Family name. | [optional] 
**forename** | **string** | Forename / Given name. | [optional] 
**other_names** | **string[]** | Other names. | [optional] 
**salutation** | **string** | Salutation or title. | [optional] 
**suffix** | **string** | Suffix. For multiple suffixes, separate with spaces. | [optional] 
**display_name** | **string** | If required, a string representing the user&#x27;s preferred designation. | [optional] 
**gender** | [**\Swagger\Client\Model\IoGender**](IoGender.md) |  | [optional] 
**date_of_birth** | [**\Swagger\Client\Model\IoDate**](IoDate.md) |  | [optional] 
**email_address** | **string** | Email address. | [optional] 
**mobile_number** | **string** | Telephone number. Enter in the format +{countryCode}{telephoneNumber} with no commas, spaces or other delimiters. | [optional] 
**external_id** | **string** | External id. Not editable. | [optional] 
**external_ids** | **map[string,string]** | Ids used for integration purpose. Key is enum of ConfigurationType (e.g. WEBHOOK, DB_MYSQL, ZOHO). Not Writable. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

