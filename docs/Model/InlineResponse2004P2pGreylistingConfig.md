# # InlineResponse2004P2pGreylistingConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**factor** | **int** | The factor by which the reconnection delay is increased when a peer that was previously disconnected is disconnected again. This value should be set to 1 for a linear back-off and to &gt;1 for an exponential back-off. | [optional]
**initial_delay** | [**OneOfInteger**](OneOfInteger.md) | The span of time a peer is disconnected for when it is first disconnected. | [optional]
**disconnection_delay** | [**OneOfInteger**](OneOfInteger.md) | The span of time a peer is disconnected for when it is disconnected as the result of an error. | [optional]
**increase_cap** | [**OneOfInteger**](OneOfInteger.md) | The maximum amount by which the reconnection is extended. This limits the rate of the exponential back-off, which eventually becomes linear when it reaches this limit. This limit is set to avoid reaching the End-of-Time when repeatedly reconnection a peer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
