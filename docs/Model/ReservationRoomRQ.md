# ReservationRoomRQ

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** |  | 
**name** | **string** |  | 
**hotel_code** | **string** |  | 
**provider_hotel_code** | **string** |  | 
**provider** | **string** |  | 
**total_reservation_price** | **double** | Requested price for this reservation. In some cases if the provider price will change during booking flow we won&#39;t make the reservation. | 
**currency** | **string** |  | 
**meal** | [**\Swagger\Client\Model\Meal**](Meal.md) |  | [optional] 
**tokens** | [**\Swagger\Client\Model\Token[]**](Token.md) | Tokens received in HotelAvailability or Checkrates (should be the same) | 
**occupancy** | [**\Swagger\Client\Model\Occupancy**](Occupancy.md) | Occupancy for this room | 
**guest** | [**\Swagger\Client\Model\Guest**](Guest.md) | Main guest name for this room | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


