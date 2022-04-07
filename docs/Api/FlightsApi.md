# Swagger\Client\FlightsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**flightsCreateFlight**](FlightsApi.md#flightscreateflight) | **POST** /flights/flight | Create Flight
[**flightsDeleteFlight**](FlightsApi.md#flightsdeleteflight) | **DELETE** /flights/flight | Delete Flight
[**flightsGetFlight**](FlightsApi.md#flightsgetflight) | **GET** /flights/flight/{carrierCode}/{flightNumber}/{departureDate.year}/{departureDate.month}/{departureDate.day}/{boardingPoint}/{deplaningPoint} | Get Flight
[**flightsUpdateFlight**](FlightsApi.md#flightsupdateflight) | **PUT** /flights/flight | Update Flight Number

# **flightsCreateFlight**
> object flightsCreateFlight($body)

Create Flight

Creates a flight record.  Note that this method will often not be used, since new flight records can be automatically created.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FlightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\FlightsFlight(); // \Swagger\Client\Model\FlightsFlight | 

try {
    $result = $apiInstance->flightsCreateFlight($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightsApi->flightsCreateFlight: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FlightsFlight**](../Model/FlightsFlight.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **flightsDeleteFlight**
> object flightsDeleteFlight($body)

Delete Flight

Deletes a flight record. Note that a deleted flight record may be automatically recreated, unless the [active] flag on the Flight Number record is set to false

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FlightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\FlightsFlightRequest(); // \Swagger\Client\Model\FlightsFlightRequest | 

try {
    $result = $apiInstance->flightsDeleteFlight($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightsApi->flightsDeleteFlight: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FlightsFlightRequest**](../Model/FlightsFlightRequest.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **flightsGetFlight**
> \Swagger\Client\Model\FlightsFlight flightsGetFlight($carrier_code, $flight_number, $departure_date_year, $departure_date_month, $departure_date_day, $boarding_point, $deplaning_point)

Get Flight

Retrieves a flight record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FlightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$carrier_code = "carrier_code_example"; // string | The 2 character IATA code or 3 character ICAO code.
$flight_number = "flight_number_example"; // string | The flight number.
$departure_date_year = 56; // int | Year.
$departure_date_month = 56; // int | Month.
$departure_date_day = 56; // int | Day.
$boarding_point = "boarding_point_example"; // string | The IATA airport code for the boarding point of the flight. Only required for direct flights with stops where the boarding point is after the first port and segment is not provided.
$deplaning_point = "deplaning_point_example"; // string | The IATA airport code for the destination of the flight. Only required for direct flights with stops where the flight ends before the final port.

try {
    $result = $apiInstance->flightsGetFlight($carrier_code, $flight_number, $departure_date_year, $departure_date_month, $departure_date_day, $boarding_point, $deplaning_point);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightsApi->flightsGetFlight: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_code** | **string**| The 2 character IATA code or 3 character ICAO code. |
 **flight_number** | **string**| The flight number. |
 **departure_date_year** | **int**| Year. |
 **departure_date_month** | **int**| Month. |
 **departure_date_day** | **int**| Day. |
 **boarding_point** | **string**| The IATA airport code for the boarding point of the flight. Only required for direct flights with stops where the boarding point is after the first port and segment is not provided. |
 **deplaning_point** | **string**| The IATA airport code for the destination of the flight. Only required for direct flights with stops where the flight ends before the final port. |

### Return type

[**\Swagger\Client\Model\FlightsFlight**](../Model/FlightsFlight.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **flightsUpdateFlight**
> \Swagger\Client\Model\FlightsFlight flightsUpdateFlight($body)

Update Flight Number

Updates a flight number record.  Note that if the flight number is subscribed to automatic flight alerts, this method may not be required and that changes made may be overwritten by automatic updates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FlightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\FlightsFlight(); // \Swagger\Client\Model\FlightsFlight | 

try {
    $result = $apiInstance->flightsUpdateFlight($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlightsApi->flightsUpdateFlight: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FlightsFlight**](../Model/FlightsFlight.md)|  |

### Return type

[**\Swagger\Client\Model\FlightsFlight**](../Model/FlightsFlight.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

