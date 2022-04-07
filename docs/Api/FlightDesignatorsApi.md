# Swagger\Client\FlightDesignatorsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**flightsCreateFlightDesignator**](FlightDesignatorsApi.md#flightscreateflightdesignator) | **POST** /flights/designator | Create Flight Designation
[**flightsDeleteFlightDesignator**](FlightDesignatorsApi.md#flightsdeleteflightdesignator) | **DELETE** /flights/designator | Delete Flight Designation
[**flightsGetFlightDesignator**](FlightDesignatorsApi.md#flightsgetflightdesignator) | **GET** /flights/designator/{carrierCode}/{flightNumber}/{revision} | Get Flight Designation
[**flightsUpdateFlightDesignator**](FlightDesignatorsApi.md#flightsupdateflightdesignator) | **PUT** /flights/designator | Update Flight Designation

# **flightsCreateFlightDesignator**
> object flightsCreateFlightDesignator($body)

Create Flight Designation

Creates a flight designator record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FlightDesignatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\FlightsFlightDesignator(); // \Swagger\Client\Model\FlightsFlightDesignator | 

try {
    $result = $apiInstance->flightsCreateFlightDesignator($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightDesignatorsApi->flightsCreateFlightDesignator: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FlightsFlightDesignator**](../Model/FlightsFlightDesignator.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **flightsDeleteFlightDesignator**
> object flightsDeleteFlightDesignator($body)

Delete Flight Designation

Deletes a flight designator record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FlightDesignatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\FlightsFlightDesignatorRequest(); // \Swagger\Client\Model\FlightsFlightDesignatorRequest | 

try {
    $result = $apiInstance->flightsDeleteFlightDesignator($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightDesignatorsApi->flightsDeleteFlightDesignator: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FlightsFlightDesignatorRequest**](../Model/FlightsFlightDesignatorRequest.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **flightsGetFlightDesignator**
> \Swagger\Client\Model\FlightsFlightDesignator flightsGetFlightDesignator($carrier_code, $flight_number, $revision)

Get Flight Designation

Retrieves a flight designator record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FlightDesignatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$carrier_code = "carrier_code_example"; // string | The IATA or ICAO carrier code for the flight.
$flight_number = "flight_number_example"; // string | The flight number.
$revision = 789; // int | Revision. Each designator record requires a version number.

try {
    $result = $apiInstance->flightsGetFlightDesignator($carrier_code, $flight_number, $revision);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightDesignatorsApi->flightsGetFlightDesignator: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_code** | **string**| The IATA or ICAO carrier code for the flight. |
 **flight_number** | **string**| The flight number. |
 **revision** | **int**| Revision. Each designator record requires a version number. |

### Return type

[**\Swagger\Client\Model\FlightsFlightDesignator**](../Model/FlightsFlightDesignator.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **flightsUpdateFlightDesignator**
> \Swagger\Client\Model\FlightsFlightDesignator flightsUpdateFlightDesignator($body)

Update Flight Designation

Updates a flight designator record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FlightDesignatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\FlightsFlightDesignator(); // \Swagger\Client\Model\FlightsFlightDesignator | 

try {
    $result = $apiInstance->flightsUpdateFlightDesignator($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightDesignatorsApi->flightsUpdateFlightDesignator: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FlightsFlightDesignator**](../Model/FlightsFlightDesignator.md)|  |

### Return type

[**\Swagger\Client\Model\FlightsFlightDesignator**](../Model/FlightsFlightDesignator.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

