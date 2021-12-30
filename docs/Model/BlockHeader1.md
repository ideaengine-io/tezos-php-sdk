# # BlockHeader1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain_id** | [**\IdeaEngine\TezosSDK\Model\ChainId**](ChainId.md) |  |
**hash** | [**\IdeaEngine\TezosSDK\Model\BlockHash**](BlockHash.md) |  |
**level** | **int** |  |
**proto** | **int** |  |
**predecessor** | [**\IdeaEngine\TezosSDK\Model\BlockHash**](BlockHash.md) |  |
**timestamp** | [**\IdeaEngine\TezosSDK\Model\TimestampProtocol**](TimestampProtocol.md) |  |
**validation_pass** | **int** |  |
**operations_hash** | [**\IdeaEngine\TezosSDK\Model\OperationListListHash**](OperationListListHash.md) |  |
**fitness** | **string[]** | The fitness, or score, of a block, that allow the Tezos to decide which chain is the best. A fitness value is a list of byte sequences. They are compared as follows: shortest lists are smaller; lists of the same length are compared according to the lexicographical order. |
**context** | [**\IdeaEngine\TezosSDK\Model\ContextHash**](ContextHash.md) |  |
**protocol_data** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
