# Room

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Unique code that identifies the room | 
**provider_hotel_code** | **string** |  | 
**provider** | **string** |  | 
**name** | **string** |  | 
**occupancy** | [**\Swagger\Client\Model\Occupancy**](Occupancy.md) | Searched occupancy that fits this room | 
**cancellation_policies** | [**\Swagger\Client\Model\CancellationPolicy[]**](CancellationPolicy.md) | For feature use.               You can get cancellation policies using GetRates method | [optional] 
**tokens** | [**\Swagger\Client\Model\Token[]**](Token.md) | Tokens sent by providers. Must be sent in your future requests in order to make a booking | 
**price** | [**\Swagger\Client\Model\Price**](Price.md) |  | 
**room_supplements** | [**\Swagger\Client\Model\RoomSupplement[]**](RoomSupplement.md) | Is an extra service per room such as:  Disney tickets, airport transfer an so on. | [optional] 
**person_supplements** | [**\Swagger\Client\Model\PersonSupplement[]**](PersonSupplement.md) | Is an extra service per person such as:  Disney tickets, airport transfer an so on. | [optional] 
**room_taxes** | [**\Swagger\Client\Model\RoomTax[]**](RoomTax.md) |  | [optional] 
**essential_informations** | **string[]** |  | [optional] 
**meal** | [**\Swagger\Client\Model\Meal**](Meal.md) |  | [optional] 
**special_offer_name** | **string** |  | [optional] 
**is_non_refundable** | **bool** | Indicates if cancellation policy is nonrefundable.              Please note that not all providers return this on search, so it&#39;s possible that a room that is not nonrefundable in search              to apper as nonrefundable in booking flow, as we get cancellation policies from providers that don&#39;t specify in search if room is nonrefundable. | 
**currency** | **string** | Price currency | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


