<?php

require_once(__DIR__ . '\autoload.php');
require_once( 'BookingFlow\Helpers\SecretKeyEncription.php');
require_once( 'BookingFlow\Helpers\GuidGenerator.php');
require_once( 'BookingFlow\Builders\AvailabilitySearchRequestBuilder.php');
require_once( 'BookingFlow\Builders\CheckRatesRequestBuilder.php');
require_once( 'BookingFlow\Builders\BookingRequestBuilder.php');

const USERNAME = "Demo";
const SECRET_KEY = "Demo";
$check_in = Date('d-m-Y', strtotime("+10 days"));
$check_out = Date('d-m-Y', strtotime("+13 days"));

// to debug report
print Swagger\Client\Configuration::toDebugReport();
// to change temp folder path
Swagger\Client\Configuration::getDefaultConfiguration()->setTempFolderPath('/var/tmp/php/');
// to enable logging
Swagger\Client\Configuration::getDefaultConfiguration()->setDebug(true);
Swagger\Client\Configuration::getDefaultConfiguration()->setDebugFile('/var/tmp/php_debug.log');


$booking_flow_id = GuidGenerator::Generate();
try {
    //search for availability
    $availability_api_client = new Swagger\Client\Api\AvailabilityApi();
    $availability_request = AvailabilitySearchRequestBuilder::build($booking_flow_id, $check_in, $check_out);

    $serialized_availability_rq = $availability_request->__toString();
    $key = PlugAndTravel\Encrypt\SecretKeyEncription::encrypt(SECRET_KEY);

    $availability_response = $availability_api_client->getHotelAvailability($serialized_availability_rq, USERNAME, $key);

    $hotels = $availability_response->getHotels();


    // check rates
    $check_rates_api_client = new Swagger\Client\Api\CheckRatesApi();
    $check_rates_req = CheckRatesRequestBuilder ::build($booking_flow_id, $check_in, $check_out, $availability_response);
    $key = PlugAndTravel\Encrypt\SecretKeyEncription::encrypt(SECRET_KEY);
    $check_rates_rs = $check_rates_api_client->checkHotelRates($check_rates_req, USERNAME, $key);


    //book
    $booking_api_client = new Swagger\Client\Api\ReservationApi();
    $book_request = BookingRequestBuilder::build($booking_flow_id, $check_in, $check_out, $check_rates_rs);
    $key = PlugAndTravel\Encrypt\SecretKeyEncription::encrypt(SECRET_KEY);
    $book_rs = $booking_api_client->book($book_request, USERNAME, $key);

    //cancel
    $key = PlugAndTravel\Encrypt\SecretKeyEncription::encrypt(SECRET_KEY);
    $cancel_rs =  $booking_api_client->cancel($book_rs->getReservation()->getReservationRooms()[0]->getId(), USERNAME, $key);
}
catch (Swagger\Client\ApiException $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
    echo 'HTTP response headers: ', $e->getResponseHeaders(), "\n";
    echo 'HTTP response body: ', $e->getResponseBody(), "\n";
    echo 'HTTP status code: ', $e->getCode(), "\n";
}