# Swagger\Client\AvailabilityApi

All URIs are relative to *http://demo-interface.plugandtravel.com/Booking/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getHotelAvailability**](AvailabilityApi.md#getHotelAvailability) | **GET** /api/HotelAvailability | Method used to get hotel availability and prices


# **getHotelAvailability**
> \Swagger\Client\Model\HotelAvailabilityRS getHotelAvailability($hotel_availability_rq, $user_name, $access_token)

Method used to get hotel availability and prices

Use this method to get a list of hotels prices and availability for your searched criteria (Checkin, Ckeckout, Destination and Occupancy)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: AccessToken
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('AccessToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AccessToken', 'Bearer');

$api_instance = new Swagger\Client\Api\AvailabilityApi();
$hotel_availability_rq = "hotel_availability_rq_example"; // string | HotelAvailabilityRQ json/xml encode
$user_name = "Demo"; // string | User Name
$access_token = "access_token_example"; // string | Access Token

try {
    $result = $api_instance->getHotelAvailability($hotel_availability_rq, $user_name, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityApi->getHotelAvailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hotel_availability_rq** | **string**| HotelAvailabilityRQ json/xml encode |
 **user_name** | **string**| User Name | [default to Demo]
 **access_token** | **string**| Access Token |

### Return type

[**\Swagger\Client\Model\HotelAvailabilityRS**](../Model/HotelAvailabilityRS.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

