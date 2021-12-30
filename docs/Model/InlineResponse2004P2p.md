# # InlineResponse2004P2p

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**expected_proof_of_work** | **int** | Floating point number between 0 and 256 that represents a difficulty, 24 signifies for example that at least 24 leading zeroes are expected in the hash. | [optional]
**bootstrap_peers** | [**\IdeaEngine\TezosSDK\Model\Unistring[]**](Unistring.md) | List of hosts. Tezos can connect to both IPv6 and IPv4 hosts. If the port is not specified, default port 9732 will be assumed. | [optional]
**listen_addr** | [**OneOfUnistring**](OneOfUnistring.md) | Host to listen to. If the port is not specified, the default port 9732 will be assumed. | [optional]
**discovery_addr** | [**OneOfAnyType**](OneOfAnyType.md) | Host for local peer discovery. If the port is not specified, the default port 10732 will be assumed. | [optional]
**private_mode** | **bool** | Specify if the node is in private mode or not. A node in private mode rejects incoming connections from untrusted peers and only opens outgoing connections to peers listed in &#39;bootstrap-peers&#39; or provided with &#39;--peer&#39; option. Moreover, these peers will keep the identity and the address of the private node secret. | [optional]
**limits** | [**\IdeaEngine\TezosSDK\Model\InlineResponse2004P2pLimits**](InlineResponse2004P2pLimits.md) |  | [optional]
**disable_mempool** | **bool** | If set to [true], the node will not participate in the propagation of pending operations (mempool). Default value is [false]. It can be used to decrease the memory and computation footprints of the node. | [optional]
**enable_testchain** | **bool** | If set to [true], the node will spawn a testchain during the protocol&#39;s testing voting period. Default value is [false]. It is disabled to decrease the node storage usage and computation by dropping the validation of the test network blocks. | [optional]
**greylisting_config** | [**\IdeaEngine\TezosSDK\Model\InlineResponse2004P2pGreylistingConfig**](InlineResponse2004P2pGreylistingConfig.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
