# Swagger\Client\AirportsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**flightsCreatePort**](AirportsApi.md#flightscreateport) | **POST** /flights/airport | Create Airport
[**flightsDeletePort**](AirportsApi.md#flightsdeleteport) | **DELETE** /flights/airport | Delete Airport
[**flightsGetPort**](AirportsApi.md#flightsgetport) | **GET** /flights/airport/{airportCode} | Get Airport
[**flightsUpdatePort**](AirportsApi.md#flightsupdateport) | **PUT** /flights/airport | Update Airport

# **flightsCreatePort**
> object flightsCreatePort($body)

Create Airport

Creates an airport record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AirportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\FlightsPort(); // \Swagger\Client\Model\FlightsPort | 

try {
    $result = $apiInstance->flightsCreatePort($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirportsApi->flightsCreatePort: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FlightsPort**](../Model/FlightsPort.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **flightsDeletePort**
> object flightsDeletePort($body)

Delete Airport

Deletes a airport record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AirportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\FlightsAirportCode(); // \Swagger\Client\Model\FlightsAirportCode | 

try {
    $result = $apiInstance->flightsDeletePort($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirportsApi->flightsDeletePort: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FlightsAirportCode**](../Model/FlightsAirportCode.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **flightsGetPort**
> \Swagger\Client\Model\FlightsPort flightsGetPort($airport_code)

Get Airport

Retrieves an airport record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AirportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$airport_code = "airport_code_example"; // string | The IATA or ICAO airport code.

try {
    $result = $apiInstance->flightsGetPort($airport_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirportsApi->flightsGetPort: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **airport_code** | **string**| The IATA or ICAO airport code. |

### Return type

[**\Swagger\Client\Model\FlightsPort**](../Model/FlightsPort.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **flightsUpdatePort**
> \Swagger\Client\Model\FlightsPort flightsUpdatePort($body)

Update Airport

Updates an airport record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AirportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\FlightsPort(); // \Swagger\Client\Model\FlightsPort | 

try {
    $result = $apiInstance->flightsUpdatePort($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AirportsApi->flightsUpdatePort: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FlightsPort**](../Model/FlightsPort.md)|  |

### Return type

[**\Swagger\Client\Model\FlightsPort**](../Model/FlightsPort.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

