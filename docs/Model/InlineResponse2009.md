# # InlineResponse2009

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**score** | **int** |  |
**trusted** | **bool** |  |
**conn_metadata** | [**\IdeaEngine\TezosSDK\Model\NetworkConnectionsLocalMetadata**](NetworkConnectionsLocalMetadata.md) |  | [optional]
**peer_metadata** | [**\IdeaEngine\TezosSDK\Model\InlineResponse2009PeerMetadata**](InlineResponse2009PeerMetadata.md) |  |
**state** | [**\IdeaEngine\TezosSDK\Model\P2pPeerState**](P2pPeerState.md) |  |
**reachable_at** | [**\IdeaEngine\TezosSDK\Model\P2pConnectionId**](P2pConnectionId.md) |  | [optional]
**stat** | [**\IdeaEngine\TezosSDK\Model\P2pStat**](P2pStat.md) |  |
**last_failed_connection** | [**OneOfP2pConnectionIdTimestampSystem[]**](OneOfP2pConnectionIdTimestampSystem.md) |  | [optional]
**last_rejected_connection** | [**OneOfP2pConnectionIdTimestampSystem[]**](OneOfP2pConnectionIdTimestampSystem.md) |  | [optional]
**last_established_connection** | [**OneOfP2pConnectionIdTimestampSystem[]**](OneOfP2pConnectionIdTimestampSystem.md) |  | [optional]
**last_disconnection** | [**OneOfP2pConnectionIdTimestampSystem[]**](OneOfP2pConnectionIdTimestampSystem.md) |  | [optional]
**last_seen** | [**OneOfP2pConnectionIdTimestampSystem[]**](OneOfP2pConnectionIdTimestampSystem.md) |  | [optional]
**last_miss** | [**OneOfP2pConnectionIdTimestampSystem[]**](OneOfP2pConnectionIdTimestampSystem.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
