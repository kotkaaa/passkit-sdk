# Swagger\Client\BoardingPassesApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**flightsCreateBoardingPass**](BoardingPassesApi.md#flightscreateboardingpass) | **POST** /flights/boardingPass | Create Boarding Pass
[**flightsDeleteBoardingPass**](BoardingPassesApi.md#flightsdeleteboardingpass) | **DELETE** /flights/boardingRecord | Delete Boarding Pass
[**flightsGetBoardingPass**](BoardingPassesApi.md#flightsgetboardingpass) | **POST** /flights/pass | Get Boarding Pass
[**flightsGetBoardingPassRecord**](BoardingPassesApi.md#flightsgetboardingpassrecord) | **POST** /flights/boardingRecord | Get Boarding Pass Record
[**flightsUpdateBoardingPass**](BoardingPassesApi.md#flightsupdateboardingpass) | **PUT** /flights/boardingRecord | Update Boarding Pass

# **flightsCreateBoardingPass**
> \Swagger\Client\Model\FlightsBoardingPassesResponse flightsCreateBoardingPass($body)

Create Boarding Pass

Creates a boarding pass record. If flight record for the date does not yet exist, it will be created using the Flight Designation defaults. Returns a pass id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardingPassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\FlightsBoardingPassRecord(); // \Swagger\Client\Model\FlightsBoardingPassRecord | 

try {
    $result = $apiInstance->flightsCreateBoardingPass($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardingPassesApi->flightsCreateBoardingPass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FlightsBoardingPassRecord**](../Model/FlightsBoardingPassRecord.md)|  |

### Return type

[**\Swagger\Client\Model\FlightsBoardingPassesResponse**](../Model/FlightsBoardingPassesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **flightsDeleteBoardingPass**
> object flightsDeleteBoardingPass($body)

Delete Boarding Pass

Deletes a boarding pass record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardingPassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\FlightsBoardingPassRecordRequest(); // \Swagger\Client\Model\FlightsBoardingPassRecordRequest | 

try {
    $result = $apiInstance->flightsDeleteBoardingPass($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardingPassesApi->flightsDeleteBoardingPass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FlightsBoardingPassRecordRequest**](../Model/FlightsBoardingPassRecordRequest.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **flightsGetBoardingPass**
> \Swagger\Client\Model\FlightsBoardingPassesResponse flightsGetBoardingPass($body)

Get Boarding Pass

Retrieves digital boarding pass(es) in the requested format based on the index provided. Supply only one of ticketNumber, index, pnr or passId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardingPassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\FlightsBoardingPassRequest(); // \Swagger\Client\Model\FlightsBoardingPassRequest | 

try {
    $result = $apiInstance->flightsGetBoardingPass($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardingPassesApi->flightsGetBoardingPass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FlightsBoardingPassRequest**](../Model/FlightsBoardingPassRequest.md)|  |

### Return type

[**\Swagger\Client\Model\FlightsBoardingPassesResponse**](../Model/FlightsBoardingPassesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **flightsGetBoardingPassRecord**
> \Swagger\Client\Model\FlightsBoardingPassRecord flightsGetBoardingPassRecord($body)

Get Boarding Pass Record

Retrieves a boarding pass record. One of ticketNumber, index or passId must be provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardingPassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\FlightsBoardingPassRecordRequest(); // \Swagger\Client\Model\FlightsBoardingPassRecordRequest | 

try {
    $result = $apiInstance->flightsGetBoardingPassRecord($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardingPassesApi->flightsGetBoardingPassRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FlightsBoardingPassRecordRequest**](../Model/FlightsBoardingPassRecordRequest.md)|  |

### Return type

[**\Swagger\Client\Model\FlightsBoardingPassRecord**](../Model/FlightsBoardingPassRecord.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **flightsUpdateBoardingPass**
> \Swagger\Client\Model\FlightsBoardingPassRecord flightsUpdateBoardingPass($body)

Update Boarding Pass

Updates a boarding pass record. Either ticketNumber and ticketLeg or carrier, flight number, flightDate, boardingPoint and sequenceNumber must be provided. All other fields are optional.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\BoardingPassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\FlightsBoardingPassRecord(); // \Swagger\Client\Model\FlightsBoardingPassRecord | 

try {
    $result = $apiInstance->flightsUpdateBoardingPass($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardingPassesApi->flightsUpdateBoardingPass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FlightsBoardingPassRecord**](../Model/FlightsBoardingPassRecord.md)|  |

### Return type

[**\Swagger\Client\Model\FlightsBoardingPassRecord**](../Model/FlightsBoardingPassRecord.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

