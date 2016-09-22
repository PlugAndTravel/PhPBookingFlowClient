<?php

/**
 * CheckRatesRequestBuilder short summary.
 *
 * CheckRatesRequestBuilder description.
 *
 * @version 1.0
 * @author marius
 */
class CheckRatesRequestBuilder
{
    public static function build($booking_flow_id, $check_in, $check_out, Swagger\Client\Model\HotelAvailabilityRS $availability_response)
    {
        $check_rates_request = new \Swagger\Client\Model\CheckHotelRatesRQ();
        $init_array = array("flow_tracking_id"=>$booking_flow_id, "check_in" => $check_in, "check_out"=> $check_out, 
                    "country_of_residence" => "RO", "room_group" => $room_group);
        $check_rates_request->__construct($init_array);
        $room_group = CheckRatesRequestBuilder::create_room_group($availability_response->getHotels()[0]);
        $check_rates_request->setRoomGroup($room_group);
        return $check_rates_request;
    }

    private static function  create_room_group(Swagger\Client\Model\Hotel $hotel)
    {
        $room_group = new Swagger\Client\Model\RoomGroupRQ();
        $booked_room_group = $hotel->getRoomGroups()[0];
        $room = $booked_room_group->getRooms()[0];
        $room_group->setCode($booked_room_group->getCode());
        $room_request_init_array = array("code"=> $room->getCode(), "name"=> $room->getName(), "hotel_code"=>$hotel->getCode(), 
                                    "provider_hotel_code"=>$room->getProviderHotelCode(), "provider"=>$room->getProvider(), 
                                    "total_price"=>array_sum ($room->getPrice()->getTotalPriceBreakdown()),"currency"=>$room->getCurrency(), 
                                    "meal"=> $room->getMeal(), "tokens" => $room->getTokens(), "occupancy" =>$room->getOccupancy());
        $room_request = new Swagger\Client\Model\RoomRQ($room_request_init_array);
        
        $room_group ->setRooms(array($room_request));
        return $room_group;
    }
}