# PersonSupplement

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique number that identifies the supplement | 
**name** | **string** | Name of this supplement, such as Resort Fee, Gala Dinner or Cleaning Charge. | 
**is_mandatory** | **bool** | Specifies whether a Supplement is mandatory or optional.              If it is mandatory, then it must be paid in order to book the room | 
**charge_type** | [**\Swagger\Client\Model\ChargeType**](ChargeType.md) | Specifies how the charge is paid | 
**price** | **double** | Supplement charge per adult | 
**age_group** | [**\Swagger\Client\Model\SupplementAge[]**](SupplementAge.md) | Describes the different prices for each age group | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


