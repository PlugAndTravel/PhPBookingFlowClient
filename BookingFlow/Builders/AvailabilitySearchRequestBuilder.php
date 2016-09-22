<?php

/**
 * AvailabilitySearchCreator short summary.
 *
 * AvailabilitySearchCreator description.
 *
 * @version 1.0
 * @author marius
 */
class AvailabilitySearchRequestBuilder
{
    public static function build($booking_flow_id, $check_in, $check_out)
    {
        $availability_request = new Swagger\Client\Model\HotelAvailabilityRQ();
        
        $availability_request->setCheckIn($check_in);
        $availability_request->setCheckOut($check_out);

        $availability_request->setFlowTrackingId($booking_flow_id);
        $availability_request->setCurrency("EUR");
        $availability_request->setCountryOfResidence("RO");
        $availability_request->setDestinationCode(6958); //Paris
        $occupancy = new Swagger\Client\Model\Occupancy();
        $occupancy->setAdults(2);
        $occupancy->setChildren(0);
        $availability_request->setOccupancies(array($occupancy));
        return $availability_request;
    }
}