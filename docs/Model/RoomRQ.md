# RoomRQ

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** |  | 
**name** | **string** |  | 
**hotel_code** | **string** |  | 
**provider_hotel_code** | **string** |  | 
**provider** | **string** |  | 
**total_price** | **double** | Sum from price breakdown, tax breakdown and room/person supplement when IsMandatory is true and ChargeType is &#39;Addition&#39; | 
**currency** | **string** |  | 
**meal** | [**\Swagger\Client\Model\Meal**](Meal.md) | Same meal as one received in HotelAvailability request for this room | 
**tokens** | [**\Swagger\Client\Model\Token[]**](Token.md) | Token list received in HotelAvailability request | 
**occupancy** | [**\Swagger\Client\Model\Occupancy**](Occupancy.md) | Same Occupancy sent in HotelAvailability request | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


