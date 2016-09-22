# Swagger\Client\ReservationApi

All URIs are relative to *http://demo-interface.plugandtravel.com/Booking/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**book**](ReservationApi.md#book) | **POST** /api/Reservation/Book | Method used to create a reservation
[**cancel**](ReservationApi.md#cancel) | **POST** /api/Reservation/Cancel/{reservationId} | Method used to cancel a reservation
[**getReservation**](ReservationApi.md#getReservation) | **GET** /api/Reservation/{reservationId} | Method used to retrieve a reservation


# **book**
> \Swagger\Client\Model\ReservationRS book($reservation_rq, $user_name, $access_token)

Method used to create a reservation

Use this method to create a reservation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: AccessToken
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('AccessToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AccessToken', 'Bearer');

$api_instance = new Swagger\Client\Api\ReservationApi();
$reservation_rq = new \Swagger\Client\Model\ReservationRQ(); // \Swagger\Client\Model\ReservationRQ | 
$user_name = "Demo"; // string | User Name
$access_token = "access_token_example"; // string | Access Token

try {
    $result = $api_instance->book($reservation_rq, $user_name, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationApi->book: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reservation_rq** | [**\Swagger\Client\Model\ReservationRQ**](../Model/\Swagger\Client\Model\ReservationRQ.md)|  |
 **user_name** | **string**| User Name | [default to Demo]
 **access_token** | **string**| Access Token |

### Return type

[**\Swagger\Client\Model\ReservationRS**](../Model/ReservationRS.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancel**
> \Swagger\Client\Model\ReservationRS cancel($reservation_id, $user_name, $access_token)

Method used to cancel a reservation

Method used to cancel using reservation id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: AccessToken
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('AccessToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AccessToken', 'Bearer');

$api_instance = new Swagger\Client\Api\ReservationApi();
$reservation_id = 56; // int | 
$user_name = "Demo"; // string | User Name
$access_token = "access_token_example"; // string | Access Token

try {
    $result = $api_instance->cancel($reservation_id, $user_name, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationApi->cancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reservation_id** | **int**|  |
 **user_name** | **string**| User Name | [default to Demo]
 **access_token** | **string**| Access Token |

### Return type

[**\Swagger\Client\Model\ReservationRS**](../Model/ReservationRS.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReservation**
> \Swagger\Client\Model\ReservationRS getReservation($reservation_id, $user_name, $access_token)

Method used to retrieve a reservation

Method used to retrieve a reservation using reservation id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: AccessToken
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('AccessToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AccessToken', 'Bearer');

$api_instance = new Swagger\Client\Api\ReservationApi();
$reservation_id = 56; // int | 
$user_name = "Demo"; // string | User Name
$access_token = "access_token_example"; // string | Access Token

try {
    $result = $api_instance->getReservation($reservation_id, $user_name, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationApi->getReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reservation_id** | **int**|  |
 **user_name** | **string**| User Name | [default to Demo]
 **access_token** | **string**| Access Token |

### Return type

[**\Swagger\Client\Model\ReservationRS**](../Model/ReservationRS.md)

### Authorization

[AccessToken](../../README.md#AccessToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

