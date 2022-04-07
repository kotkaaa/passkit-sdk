# Swagger\Client\CarriersApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**flightsCreateCarrier**](CarriersApi.md#flightscreatecarrier) | **POST** /flights/carrier | Create Carrier
[**flightsDeleteCarrier**](CarriersApi.md#flightsdeletecarrier) | **DELETE** /flights/carrier | Delete Carrier
[**flightsGetCarrier**](CarriersApi.md#flightsgetcarrier) | **GET** /flights/carrier/{carrierCode} | Get Carrier
[**flightsUpdateCarrier**](CarriersApi.md#flightsupdatecarrier) | **PUT** /flights/carrier | Update Carrier

# **flightsCreateCarrier**
> object flightsCreateCarrier($body)

Create Carrier

Creates a carrier record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\FlightsCarrier(); // \Swagger\Client\Model\FlightsCarrier | 

try {
    $result = $apiInstance->flightsCreateCarrier($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->flightsCreateCarrier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FlightsCarrier**](../Model/FlightsCarrier.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **flightsDeleteCarrier**
> object flightsDeleteCarrier($body)

Delete Carrier

Deletes a carrier record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\FlightsCarrierCode(); // \Swagger\Client\Model\FlightsCarrierCode | 

try {
    $result = $apiInstance->flightsDeleteCarrier($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->flightsDeleteCarrier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FlightsCarrierCode**](../Model/FlightsCarrierCode.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **flightsGetCarrier**
> \Swagger\Client\Model\FlightsCarrier flightsGetCarrier($carrier_code)

Get Carrier

Retrieves a carrier record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$carrier_code = "carrier_code_example"; // string | The IATA or ICAO carrier code.

try {
    $result = $apiInstance->flightsGetCarrier($carrier_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->flightsGetCarrier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrier_code** | **string**| The IATA or ICAO carrier code. |

### Return type

[**\Swagger\Client\Model\FlightsCarrier**](../Model/FlightsCarrier.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **flightsUpdateCarrier**
> \Swagger\Client\Model\FlightsCarrier flightsUpdateCarrier($body)

Update Carrier

Updates a carrier record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\FlightsCarrier(); // \Swagger\Client\Model\FlightsCarrier | 

try {
    $result = $apiInstance->flightsUpdateCarrier($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->flightsUpdateCarrier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FlightsCarrier**](../Model/FlightsCarrier.md)|  |

### Return type

[**\Swagger\Client\Model\FlightsCarrier**](../Model/FlightsCarrier.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

