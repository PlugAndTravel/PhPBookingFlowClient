# RoomRS

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Unique code that identifies the room | 
**name** | **string** |  | 
**hotel_code** | **string** |  | 
**provider_hotel_code** | **string** |  | 
**provider** | **string** |  | 
**tokens** | [**\Swagger\Client\Model\Token[]**](Token.md) |  | 
**occupancy** | [**\Swagger\Client\Model\Occupancy**](Occupancy.md) |  | 
**price_changed** | **bool** | Indicates if the room has the same price as requested one or price has changed | 
**new_price** | [**\Swagger\Client\Model\Price**](Price.md) | New price, if price has changed | 
**currency** | **string** |  | 
**is_non_refubdable** | **bool** | Indicates explicitly if the reservation can be refunded or not after booking | 
**cancellation_policies** | [**\Swagger\Client\Model\CancellationPolicy[]**](CancellationPolicy.md) |  | 
**room_supplements** | [**\Swagger\Client\Model\RoomSupplement[]**](RoomSupplement.md) | Is an extra service per room such as:  Disney tickets, airport transfer an so on. | [optional] 
**person_supplements** | [**\Swagger\Client\Model\PersonSupplement[]**](PersonSupplement.md) | Is an extra service per person such as:  Disney tickets, airport transfer an so on. | [optional] 
**room_taxes** | [**\Swagger\Client\Model\RoomTax[]**](RoomTax.md) |  | [optional] 
**essential_informations** | **string[]** |  | [optional] 
**meal** | [**\Swagger\Client\Model\Meal**](Meal.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


