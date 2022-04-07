# IoMetadata

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | [**\Swagger\Client\Model\IoStatus**](IoStatus.md) |  | [optional] 
**lifecycle_events** | [**\Swagger\Client\Model\IoLifecycleEvents[]**](IoLifecycleEvents.md) | Events that the pass has attained. Not Writable. | [optional] 
**utm** | [**\Swagger\Client\Model\IoUTM**](IoUTM.md) |  | [optional] 
**alt_id** | **string** |  | [optional] 
**issue_ip_address** | **string** |  | [optional] 
**install_ip_address** | **string** | IP address of the device where the pass was installed on. Not Writeable. | [optional] 
**render_location** | [**\Swagger\Client\Model\IoMetaLocation**](IoMetaLocation.md) |  | [optional] 
**render_ip_address** | **string** | IP address of the device where the pass landing page was rendered on. Not Writeable. | [optional] 
**install_user_agent** | **string** | User agent provided by the Wallet Application. Not Writable. | [optional] 
**render_user_agent** | **string** | User agent where the landing page was rendered on. Not Writable. | [optional] 
**install_device_attributes** | [**\Swagger\Client\Model\IoDeviceAttributes[]**](IoDeviceAttributes.md) | User agent provided by the Wallet Application. Not Writable. | [optional] 
**render_device_attributes** | [**\Swagger\Client\Model\IoDeviceAttributes[]**](IoDeviceAttributes.md) | User agent where the landing page was rendered on. Not Writable. | [optional] 
**issue_at** | [**\DateTime**](\DateTime.md) | Date the pass record was created. Not Writable. | [optional] 
**rendered_at** | [**\DateTime**](\DateTime.md) | Date the pass was first displayed to the user to install. Not Writable. | [optional] 
**first_installed_at** | [**\DateTime**](\DateTime.md) | Date the pass was first installed in a mobile wallet. Not Writable. | [optional] 
**last_installed_at** | [**\DateTime**](\DateTime.md) | Date the pass was last installed in a mobile wallet. For Apple devices, this will update each time the device registers a new token. Not Writable. | [optional] 
**first_uninstalled_at** | [**\DateTime**](\DateTime.md) | Date the pass was first uninstalled from a mobile wallet.  For Apple devices, this represents either the time notifications were disabled, or when the pass was removed from the wallet as it is not possible to distinguish the two events. Not Writable. | [optional] 
**last_uninstalled_at** | [**\DateTime**](\DateTime.md) | Date the pass was last uninstalled from a mobile wallet. Not Writable. | [optional] 
**invalidated_at** | [**\DateTime**](\DateTime.md) | Date the pass was invalidated. Not Writable. | [optional] 
**last_updated_at** | [**\DateTime**](\DateTime.md) | Date the pass record was last updated. Can be used for segmenting passes based &#x27;last visit&#x27;, or &#x27;last-purchase&#x27;. Not Writable. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

