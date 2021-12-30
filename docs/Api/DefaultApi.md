# IdeaEngine\TezosSDK\DefaultApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**chainsChainIdBlocksGet()**](DefaultApi.md#chainsChainIdBlocksGet) | **GET** /chains/{chain_id}/blocks | 
[**chainsChainIdChainIdGet()**](DefaultApi.md#chainsChainIdChainIdGet) | **GET** /chains/{chain_id}/chain_id | 
[**chainsChainIdCheckpointGet()**](DefaultApi.md#chainsChainIdCheckpointGet) | **GET** /chains/{chain_id}/checkpoint | 
[**chainsChainIdInvalidBlocksBlockHashDelete()**](DefaultApi.md#chainsChainIdInvalidBlocksBlockHashDelete) | **DELETE** /chains/{chain_id}/invalid_blocks/{block_hash} | 
[**chainsChainIdInvalidBlocksBlockHashGet()**](DefaultApi.md#chainsChainIdInvalidBlocksBlockHashGet) | **GET** /chains/{chain_id}/invalid_blocks/{block_hash} | 
[**chainsChainIdInvalidBlocksGet()**](DefaultApi.md#chainsChainIdInvalidBlocksGet) | **GET** /chains/{chain_id}/invalid_blocks | 
[**chainsChainIdIsBootstrappedGet()**](DefaultApi.md#chainsChainIdIsBootstrappedGet) | **GET** /chains/{chain_id}/is_bootstrapped | 
[**chainsChainIdLevelsCabooseGet()**](DefaultApi.md#chainsChainIdLevelsCabooseGet) | **GET** /chains/{chain_id}/levels/caboose | 
[**chainsChainIdLevelsCheckpointGet()**](DefaultApi.md#chainsChainIdLevelsCheckpointGet) | **GET** /chains/{chain_id}/levels/checkpoint | 
[**chainsChainIdLevelsSavepointGet()**](DefaultApi.md#chainsChainIdLevelsSavepointGet) | **GET** /chains/{chain_id}/levels/savepoint | 
[**chainsChainIdPatch()**](DefaultApi.md#chainsChainIdPatch) | **PATCH** /chains/{chain_id} | 
[**configGet()**](DefaultApi.md#configGet) | **GET** /config | 
[**configHistoryModeGet()**](DefaultApi.md#configHistoryModeGet) | **GET** /config/history_mode | 
[**configNetworkUserActivatedProtocolOverridesGet()**](DefaultApi.md#configNetworkUserActivatedProtocolOverridesGet) | **GET** /config/network/user_activated_protocol_overrides | 
[**configNetworkUserActivatedUpgradesGet()**](DefaultApi.md#configNetworkUserActivatedUpgradesGet) | **GET** /config/network/user_activated_upgrades | 
[**errorsGet()**](DefaultApi.md#errorsGet) | **GET** /errors | 
[**fetchProtocolProtocolHashGet()**](DefaultApi.md#fetchProtocolProtocolHashGet) | **GET** /fetch_protocol/{Protocol_hash} | 
[**injectionBlockPost()**](DefaultApi.md#injectionBlockPost) | **POST** /injection/block | 
[**injectionOperationPost()**](DefaultApi.md#injectionOperationPost) | **POST** /injection/operation | 
[**injectionProtocolPost()**](DefaultApi.md#injectionProtocolPost) | **POST** /injection/protocol | 
[**monitorActiveChainsGet()**](DefaultApi.md#monitorActiveChainsGet) | **GET** /monitor/active_chains | 
[**monitorBootstrappedGet()**](DefaultApi.md#monitorBootstrappedGet) | **GET** /monitor/bootstrapped | 
[**monitorCommitHashGet()**](DefaultApi.md#monitorCommitHashGet) | **GET** /monitor/commit_hash | 
[**monitorHeadsChainIdGet()**](DefaultApi.md#monitorHeadsChainIdGet) | **GET** /monitor/heads/{chain_id} | 
[**monitorProtocolsGet()**](DefaultApi.md#monitorProtocolsGet) | **GET** /monitor/protocols | 
[**monitorValidBlocksGet()**](DefaultApi.md#monitorValidBlocksGet) | **GET** /monitor/valid_blocks | 
[**networkConnectionsGet()**](DefaultApi.md#networkConnectionsGet) | **GET** /network/connections | 
[**networkConnectionsPeerIdDelete()**](DefaultApi.md#networkConnectionsPeerIdDelete) | **DELETE** /network/connections/{peer_id} | 
[**networkConnectionsPeerIdGet()**](DefaultApi.md#networkConnectionsPeerIdGet) | **GET** /network/connections/{peer_id} | 
[**networkGreylistClearGet()**](DefaultApi.md#networkGreylistClearGet) | **GET** /network/greylist/clear | 
[**networkGreylistDelete()**](DefaultApi.md#networkGreylistDelete) | **DELETE** /network/greylist | 
[**networkGreylistIpsGet()**](DefaultApi.md#networkGreylistIpsGet) | **GET** /network/greylist/ips | 
[**networkGreylistPeersGet()**](DefaultApi.md#networkGreylistPeersGet) | **GET** /network/greylist/peers | 
[**networkLogGet()**](DefaultApi.md#networkLogGet) | **GET** /network/log | 
[**networkPeersGet()**](DefaultApi.md#networkPeersGet) | **GET** /network/peers | 
[**networkPeersPeerIdBanGet()**](DefaultApi.md#networkPeersPeerIdBanGet) | **GET** /network/peers/{peer_id}/ban | 
[**networkPeersPeerIdBannedGet()**](DefaultApi.md#networkPeersPeerIdBannedGet) | **GET** /network/peers/{peer_id}/banned | 
[**networkPeersPeerIdGet()**](DefaultApi.md#networkPeersPeerIdGet) | **GET** /network/peers/{peer_id} | 
[**networkPeersPeerIdLogGet()**](DefaultApi.md#networkPeersPeerIdLogGet) | **GET** /network/peers/{peer_id}/log | 
[**networkPeersPeerIdPatch()**](DefaultApi.md#networkPeersPeerIdPatch) | **PATCH** /network/peers/{peer_id} | 
[**networkPeersPeerIdTrustGet()**](DefaultApi.md#networkPeersPeerIdTrustGet) | **GET** /network/peers/{peer_id}/trust | 
[**networkPeersPeerIdUnbanGet()**](DefaultApi.md#networkPeersPeerIdUnbanGet) | **GET** /network/peers/{peer_id}/unban | 
[**networkPeersPeerIdUntrustGet()**](DefaultApi.md#networkPeersPeerIdUntrustGet) | **GET** /network/peers/{peer_id}/untrust | 
[**networkPointsGet()**](DefaultApi.md#networkPointsGet) | **GET** /network/points | 
[**networkPointsPointBanGet()**](DefaultApi.md#networkPointsPointBanGet) | **GET** /network/points/{point}/ban | 
[**networkPointsPointBannedGet()**](DefaultApi.md#networkPointsPointBannedGet) | **GET** /network/points/{point}/banned | 
[**networkPointsPointGet()**](DefaultApi.md#networkPointsPointGet) | **GET** /network/points/{point} | 
[**networkPointsPointLogGet()**](DefaultApi.md#networkPointsPointLogGet) | **GET** /network/points/{point}/log | 
[**networkPointsPointPatch()**](DefaultApi.md#networkPointsPointPatch) | **PATCH** /network/points/{point} | 
[**networkPointsPointPut()**](DefaultApi.md#networkPointsPointPut) | **PUT** /network/points/{point} | 
[**networkPointsPointTrustGet()**](DefaultApi.md#networkPointsPointTrustGet) | **GET** /network/points/{point}/trust | 
[**networkPointsPointUnbanGet()**](DefaultApi.md#networkPointsPointUnbanGet) | **GET** /network/points/{point}/unban | 
[**networkPointsPointUntrustGet()**](DefaultApi.md#networkPointsPointUntrustGet) | **GET** /network/points/{point}/untrust | 
[**networkSelfGet()**](DefaultApi.md#networkSelfGet) | **GET** /network/self | 
[**networkStatGet()**](DefaultApi.md#networkStatGet) | **GET** /network/stat | 
[**networkVersionGet()**](DefaultApi.md#networkVersionGet) | **GET** /network/version | 
[**networkVersionsGet()**](DefaultApi.md#networkVersionsGet) | **GET** /network/versions | 
[**protocolsGet()**](DefaultApi.md#protocolsGet) | **GET** /protocols | 
[**protocolsProtocolHashEnvironmentGet()**](DefaultApi.md#protocolsProtocolHashEnvironmentGet) | **GET** /protocols/{Protocol_hash}/environment | 
[**protocolsProtocolHashGet()**](DefaultApi.md#protocolsProtocolHashGet) | **GET** /protocols/{Protocol_hash} | 
[**statsGcGet()**](DefaultApi.md#statsGcGet) | **GET** /stats/gc | 
[**statsMemoryGet()**](DefaultApi.md#statsMemoryGet) | **GET** /stats/memory | 
[**versionGet()**](DefaultApi.md#versionGet) | **GET** /version | 
[**workersBlockValidatorGet()**](DefaultApi.md#workersBlockValidatorGet) | **GET** /workers/block_validator | 
[**workersChainValidatorsChainIdDdbGet()**](DefaultApi.md#workersChainValidatorsChainIdDdbGet) | **GET** /workers/chain_validators/{chain_id}/ddb | 
[**workersChainValidatorsChainIdGet()**](DefaultApi.md#workersChainValidatorsChainIdGet) | **GET** /workers/chain_validators/{chain_id} | 
[**workersChainValidatorsChainIdPeersValidatorsGet()**](DefaultApi.md#workersChainValidatorsChainIdPeersValidatorsGet) | **GET** /workers/chain_validators/{chain_id}/peers_validators | 
[**workersChainValidatorsChainIdPeersValidatorsPeerIdGet()**](DefaultApi.md#workersChainValidatorsChainIdPeersValidatorsPeerIdGet) | **GET** /workers/chain_validators/{chain_id}/peers_validators/{peer_id} | 
[**workersChainValidatorsGet()**](DefaultApi.md#workersChainValidatorsGet) | **GET** /workers/chain_validators | 
[**workersPrevalidatorsChainIdGet()**](DefaultApi.md#workersPrevalidatorsChainIdGet) | **GET** /workers/prevalidators/{chain_id} | 
[**workersPrevalidatorsGet()**](DefaultApi.md#workersPrevalidatorsGet) | **GET** /workers/prevalidators | 


## `chainsChainIdBlocksGet()`

```php
chainsChainIdBlocksGet($chain_id, $length, $head, $min_date): \IdeaEngine\TezosSDK\Model\BlockHash[][]
```



Lists block hashes from '<chain>', up to the last checkpoint, sorted with decreasing fitness. Without arguments it returns the head of the chain. Optional arguments allow to return the list of predecessors of a given block or of a set of blocks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chain_id = 'chain_id_example'; // string | A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
$length = 'length_example'; // string | The requested number of predecessors to return (per request; see next argument).
$head = 'head_example'; // string | block_hash (Base58Check-encoded) An empty argument requests blocks starting with the current head. A non empty list allows to request one or more specific fragments of the chain.
$min_date = 'min_date_example'; // string | A date in seconds from epoch When `min_date` is provided, blocks with a timestamp before `min_date` are filtered out

try {
    $result = $apiInstance->chainsChainIdBlocksGet($chain_id, $length, $head, $min_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->chainsChainIdBlocksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chain_id** | **string**| A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: &#39;main&#39;, &#39;test&#39;. |
 **length** | **string**| The requested number of predecessors to return (per request; see next argument). | [optional]
 **head** | **string**| block_hash (Base58Check-encoded) An empty argument requests blocks starting with the current head. A non empty list allows to request one or more specific fragments of the chain. | [optional]
 **min_date** | **string**| A date in seconds from epoch When &#x60;min_date&#x60; is provided, blocks with a timestamp before &#x60;min_date&#x60; are filtered out | [optional]

### Return type

**\IdeaEngine\TezosSDK\Model\BlockHash[][]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `chainsChainIdChainIdGet()`

```php
chainsChainIdChainIdGet($chain_id): \IdeaEngine\TezosSDK\Model\ChainId
```



The chain unique identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chain_id = 'chain_id_example'; // string | A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.

try {
    $result = $apiInstance->chainsChainIdChainIdGet($chain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->chainsChainIdChainIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chain_id** | **string**| A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: &#39;main&#39;, &#39;test&#39;. |

### Return type

[**\IdeaEngine\TezosSDK\Model\ChainId**](../Model/ChainId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `chainsChainIdCheckpointGet()`

```php
chainsChainIdCheckpointGet($chain_id): \IdeaEngine\TezosSDK\Model\InlineResponse200
```



DEPRECATED: use `../levels/{checkpoint, savepoint, caboose, history_mode}` instead. The current checkpoint for this chain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chain_id = 'chain_id_example'; // string | A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.

try {
    $result = $apiInstance->chainsChainIdCheckpointGet($chain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->chainsChainIdCheckpointGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chain_id** | **string**| A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: &#39;main&#39;, &#39;test&#39;. |

### Return type

[**\IdeaEngine\TezosSDK\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `chainsChainIdInvalidBlocksBlockHashDelete()`

```php
chainsChainIdInvalidBlocksBlockHashDelete($chain_id, $block_hash): object
```



Remove an invalid block for the tezos storage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chain_id = 'chain_id_example'; // string | A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
$block_hash = 'block_hash_example'; // string | block_hash (Base58Check-encoded)

try {
    $result = $apiInstance->chainsChainIdInvalidBlocksBlockHashDelete($chain_id, $block_hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->chainsChainIdInvalidBlocksBlockHashDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chain_id** | **string**| A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: &#39;main&#39;, &#39;test&#39;. |
 **block_hash** | **string**| block_hash (Base58Check-encoded) |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `chainsChainIdInvalidBlocksBlockHashGet()`

```php
chainsChainIdInvalidBlocksBlockHashGet($chain_id, $block_hash): \IdeaEngine\TezosSDK\Model\InlineResponse2001
```



The errors that appears during the block (in)validation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chain_id = 'chain_id_example'; // string | A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
$block_hash = 'block_hash_example'; // string | block_hash (Base58Check-encoded)

try {
    $result = $apiInstance->chainsChainIdInvalidBlocksBlockHashGet($chain_id, $block_hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->chainsChainIdInvalidBlocksBlockHashGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chain_id** | **string**| A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: &#39;main&#39;, &#39;test&#39;. |
 **block_hash** | **string**| block_hash (Base58Check-encoded) |

### Return type

[**\IdeaEngine\TezosSDK\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `chainsChainIdInvalidBlocksGet()`

```php
chainsChainIdInvalidBlocksGet($chain_id): \IdeaEngine\TezosSDK\Model\InlineResponse2001[]
```



Lists blocks that have been declared invalid along with the errors that led to them being declared invalid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chain_id = 'chain_id_example'; // string | A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.

try {
    $result = $apiInstance->chainsChainIdInvalidBlocksGet($chain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->chainsChainIdInvalidBlocksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chain_id** | **string**| A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: &#39;main&#39;, &#39;test&#39;. |

### Return type

[**\IdeaEngine\TezosSDK\Model\InlineResponse2001[]**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `chainsChainIdIsBootstrappedGet()`

```php
chainsChainIdIsBootstrappedGet($chain_id): \IdeaEngine\TezosSDK\Model\InlineResponse2002
```



The bootstrap status of a chain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chain_id = 'chain_id_example'; // string | A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.

try {
    $result = $apiInstance->chainsChainIdIsBootstrappedGet($chain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->chainsChainIdIsBootstrappedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chain_id** | **string**| A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: &#39;main&#39;, &#39;test&#39;. |

### Return type

[**\IdeaEngine\TezosSDK\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `chainsChainIdLevelsCabooseGet()`

```php
chainsChainIdLevelsCabooseGet($chain_id): \IdeaEngine\TezosSDK\Model\InlineResponse2003
```



The current caboose for this chain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chain_id = 'chain_id_example'; // string | A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.

try {
    $result = $apiInstance->chainsChainIdLevelsCabooseGet($chain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->chainsChainIdLevelsCabooseGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chain_id** | **string**| A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: &#39;main&#39;, &#39;test&#39;. |

### Return type

[**\IdeaEngine\TezosSDK\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `chainsChainIdLevelsCheckpointGet()`

```php
chainsChainIdLevelsCheckpointGet($chain_id): \IdeaEngine\TezosSDK\Model\InlineResponse2003
```



The current checkpoint for this chain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chain_id = 'chain_id_example'; // string | A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.

try {
    $result = $apiInstance->chainsChainIdLevelsCheckpointGet($chain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->chainsChainIdLevelsCheckpointGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chain_id** | **string**| A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: &#39;main&#39;, &#39;test&#39;. |

### Return type

[**\IdeaEngine\TezosSDK\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `chainsChainIdLevelsSavepointGet()`

```php
chainsChainIdLevelsSavepointGet($chain_id): \IdeaEngine\TezosSDK\Model\InlineResponse2003
```



The current savepoint for this chain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chain_id = 'chain_id_example'; // string | A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.

try {
    $result = $apiInstance->chainsChainIdLevelsSavepointGet($chain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->chainsChainIdLevelsSavepointGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chain_id** | **string**| A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: &#39;main&#39;, &#39;test&#39;. |

### Return type

[**\IdeaEngine\TezosSDK\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `chainsChainIdPatch()`

```php
chainsChainIdPatch($chain_id, $inline_object): mixed
```



Forcefully set the bootstrapped flag of the node

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chain_id = 'chain_id_example'; // string | A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
$inline_object = new \IdeaEngine\TezosSDK\Model\InlineObject(); // \IdeaEngine\TezosSDK\Model\InlineObject

try {
    $result = $apiInstance->chainsChainIdPatch($chain_id, $inline_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->chainsChainIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chain_id** | **string**| A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: &#39;main&#39;, &#39;test&#39;. |
 **inline_object** | [**\IdeaEngine\TezosSDK\Model\InlineObject**](../Model/InlineObject.md)|  | [optional]

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configGet()`

```php
configGet(): \IdeaEngine\TezosSDK\Model\InlineResponse2004
```



Return the runtime node configuration (this takes into account the command-line arguments and the on-disk configuration file)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->configGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->configGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\IdeaEngine\TezosSDK\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configHistoryModeGet()`

```php
configHistoryModeGet(): \IdeaEngine\TezosSDK\Model\InlineResponse2005
```



Returns the history mode of the node's underlying storage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->configHistoryModeGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->configHistoryModeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\IdeaEngine\TezosSDK\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configNetworkUserActivatedProtocolOverridesGet()`

```php
configNetworkUserActivatedProtocolOverridesGet(): object[]
```



List of protocols which replace other protocols

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->configNetworkUserActivatedProtocolOverridesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->configNetworkUserActivatedProtocolOverridesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configNetworkUserActivatedUpgradesGet()`

```php
configNetworkUserActivatedUpgradesGet(): object[]
```



List of protocols to switch to at given levels

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->configNetworkUserActivatedUpgradesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->configNetworkUserActivatedUpgradesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `errorsGet()`

```php
errorsGet(): mixed
```



Schema for all the RPC errors from the shell

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->errorsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->errorsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchProtocolProtocolHashGet()`

```php
fetchProtocolProtocolHashGet($protocol_hash): mixed
```



Fetch a protocol from the network.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$protocol_hash = 'protocol_hash_example'; // string | Protocol_hash (Base58Check-encoded)

try {
    $result = $apiInstance->fetchProtocolProtocolHashGet($protocol_hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fetchProtocolProtocolHashGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **protocol_hash** | **string**| Protocol_hash (Base58Check-encoded) |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `injectionBlockPost()`

```php
injectionBlockPost($async, $force, $chain, $inline_object1): \IdeaEngine\TezosSDK\Model\BlockHash
```



Inject a block in the node and broadcast it. The `operations` embedded in `blockHeader` might be pre-validated using a contextual RPCs from the latest block (e.g. '/blocks/head/context/preapply'). Returns the ID of the block. By default, the RPC will wait for the block to be validated before answering. If ?async is true, the function returns immediately. Otherwise, the block will be validated before the result is returned. If ?force is true, it will be injected even on non strictly increasing fitness. An optional ?chain parameter can be used to specify whether to inject on the test chain or the main chain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$async = 'async_example'; // string
$force = 'force_example'; // string
$chain = 'chain_example'; // string | A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
$inline_object1 = new \IdeaEngine\TezosSDK\Model\InlineObject1(); // \IdeaEngine\TezosSDK\Model\InlineObject1

try {
    $result = $apiInstance->injectionBlockPost($async, $force, $chain, $inline_object1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->injectionBlockPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **async** | **string**|  | [optional]
 **force** | **string**|  | [optional]
 **chain** | **string**| A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: &#39;main&#39;, &#39;test&#39;. | [optional]
 **inline_object1** | [**\IdeaEngine\TezosSDK\Model\InlineObject1**](../Model/InlineObject1.md)|  | [optional]

### Return type

[**\IdeaEngine\TezosSDK\Model\BlockHash**](../Model/BlockHash.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `injectionOperationPost()`

```php
injectionOperationPost($async, $chain, $body): \IdeaEngine\TezosSDK\Model\OperationHash
```



Inject an operation in node and broadcast it. Returns the ID of the operation. The `signedOperationContents` should be constructed using a contextual RPCs from the latest block and signed by the client. By default, the RPC will wait for the operation to be (pre-)validated before answering. See RPCs under /blocks/prevalidation for more details on the prevalidation context. If ?async is true, the function returns immediately. Otherwise, the operation will be validated before the result is returned. An optional ?chain parameter can be used to specify whether to inject on the test chain or the main chain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$async = 'async_example'; // string
$chain = 'chain_example'; // string | A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
$body = 'body_example'; // string

try {
    $result = $apiInstance->injectionOperationPost($async, $chain, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->injectionOperationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **async** | **string**|  | [optional]
 **chain** | **string**| A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: &#39;main&#39;, &#39;test&#39;. | [optional]
 **body** | **string**|  | [optional]

### Return type

[**\IdeaEngine\TezosSDK\Model\OperationHash**](../Model/OperationHash.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `injectionProtocolPost()`

```php
injectionProtocolPost($async, $protocol): \IdeaEngine\TezosSDK\Model\ProtocolHash
```



Inject a protocol in node. Returns the ID of the protocol. If ?async is true, the function returns immediately. Otherwise, the protocol will be validated before the result is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$async = 'async_example'; // string
$protocol = new \IdeaEngine\TezosSDK\Model\Protocol(); // \IdeaEngine\TezosSDK\Model\Protocol

try {
    $result = $apiInstance->injectionProtocolPost($async, $protocol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->injectionProtocolPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **async** | **string**|  | [optional]
 **protocol** | [**\IdeaEngine\TezosSDK\Model\Protocol**](../Model/Protocol.md)|  | [optional]

### Return type

[**\IdeaEngine\TezosSDK\Model\ProtocolHash**](../Model/ProtocolHash.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `monitorActiveChainsGet()`

```php
monitorActiveChainsGet(): OneOfObjectObjectObject[]
```



Monitor every chain creation and destruction. Currently active chains will be given as first elements

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->monitorActiveChainsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->monitorActiveChainsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**OneOfObjectObjectObject[]**](../Model/OneOfObjectObjectObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `monitorBootstrappedGet()`

```php
monitorBootstrappedGet(): \IdeaEngine\TezosSDK\Model\InlineResponse2006
```



Wait for the node to have synchronized its chain with a few peers (configured by the node's administrator), streaming head updates that happen during the bootstrapping process, and closing the stream at the end. If the node was already bootstrapped, returns the current head immediately.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->monitorBootstrappedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->monitorBootstrappedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\IdeaEngine\TezosSDK\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `monitorCommitHashGet()`

```php
monitorCommitHashGet(): \IdeaEngine\TezosSDK\Model\Unistring
```



DEPRECATED: use `version` instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->monitorCommitHashGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->monitorCommitHashGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\IdeaEngine\TezosSDK\Model\Unistring**](../Model/Unistring.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `monitorHeadsChainIdGet()`

```php
monitorHeadsChainIdGet($chain_id, $next_protocol): \IdeaEngine\TezosSDK\Model\BlockHeader
```



Monitor all blocks that are successfully validated by the node and selected as the new head of the given chain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chain_id = 'chain_id_example'; // string | A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
$next_protocol = 'next_protocol_example'; // string | Protocol_hash (Base58Check-encoded)

try {
    $result = $apiInstance->monitorHeadsChainIdGet($chain_id, $next_protocol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->monitorHeadsChainIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chain_id** | **string**| A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: &#39;main&#39;, &#39;test&#39;. |
 **next_protocol** | **string**| Protocol_hash (Base58Check-encoded) | [optional]

### Return type

[**\IdeaEngine\TezosSDK\Model\BlockHeader**](../Model/BlockHeader.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `monitorProtocolsGet()`

```php
monitorProtocolsGet(): \IdeaEngine\TezosSDK\Model\ProtocolHash
```



Monitor all economic protocols that are retrieved and successfully loaded and compiled by the node.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->monitorProtocolsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->monitorProtocolsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\IdeaEngine\TezosSDK\Model\ProtocolHash**](../Model/ProtocolHash.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `monitorValidBlocksGet()`

```php
monitorValidBlocksGet($protocol, $next_protocol, $chain): \IdeaEngine\TezosSDK\Model\BlockHeader1
```



Monitor all blocks that are successfully validated by the node, disregarding whether they were selected as the new head or not.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$protocol = 'protocol_example'; // string | Protocol_hash (Base58Check-encoded)
$next_protocol = 'next_protocol_example'; // string | Protocol_hash (Base58Check-encoded)
$chain = 'chain_example'; // string | A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.

try {
    $result = $apiInstance->monitorValidBlocksGet($protocol, $next_protocol, $chain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->monitorValidBlocksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **protocol** | **string**| Protocol_hash (Base58Check-encoded) | [optional]
 **next_protocol** | **string**| Protocol_hash (Base58Check-encoded) | [optional]
 **chain** | **string**| A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: &#39;main&#39;, &#39;test&#39;. | [optional]

### Return type

[**\IdeaEngine\TezosSDK\Model\BlockHeader1**](../Model/BlockHeader1.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkConnectionsGet()`

```php
networkConnectionsGet(): \IdeaEngine\TezosSDK\Model\InlineResponse2007[]
```



List the running P2P connection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->networkConnectionsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkConnectionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\IdeaEngine\TezosSDK\Model\InlineResponse2007[]**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkConnectionsPeerIdDelete()`

```php
networkConnectionsPeerIdDelete($peer_id, $wait): object
```



Forced close of the current P2P connection to the given peer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$peer_id = 'peer_id_example'; // string | A cryptographic node identity (Base58Check-encoded)
$wait = 'wait_example'; // string

try {
    $result = $apiInstance->networkConnectionsPeerIdDelete($peer_id, $wait);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkConnectionsPeerIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **peer_id** | **string**| A cryptographic node identity (Base58Check-encoded) |
 **wait** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkConnectionsPeerIdGet()`

```php
networkConnectionsPeerIdGet($peer_id): \IdeaEngine\TezosSDK\Model\InlineResponse2007
```



Details about the current P2P connection to the given peer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$peer_id = 'peer_id_example'; // string | A cryptographic node identity (Base58Check-encoded)

try {
    $result = $apiInstance->networkConnectionsPeerIdGet($peer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkConnectionsPeerIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **peer_id** | **string**| A cryptographic node identity (Base58Check-encoded) |

### Return type

[**\IdeaEngine\TezosSDK\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkGreylistClearGet()`

```php
networkGreylistClearGet(): object
```



DEPRECATED: Clear all greylists tables. This will unban all addresses and peers automatically greylisted by the system. Use DELETE `/network/greylist` instead

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->networkGreylistClearGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkGreylistClearGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkGreylistDelete()`

```php
networkGreylistDelete(): object
```



Clear all greylists tables. This will unban all addresses and peers automatically greylisted by the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->networkGreylistDelete();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkGreylistDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkGreylistIpsGet()`

```php
networkGreylistIpsGet(): \IdeaEngine\TezosSDK\Model\InlineResponse2008
```



Returns an object that contains a list of IP and the field \"not_reliable_since\".            If the field \"not_reliable_since\" is None then the list contains the currently greylisted IP addresses.            If the field \"not_reliable_since\" Contains a date, this means that the greylist has been overflowed and it is no more possible to obtain the exact list of greylisted IPs. Since the greylist of IP addresses has been design to work whatever his size, there is no security issue related to this overflow.           Reinitialize the ACL structure by calling \"delete /network/greylist\" to get back this list reliable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->networkGreylistIpsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkGreylistIpsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\IdeaEngine\TezosSDK\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkGreylistPeersGet()`

```php
networkGreylistPeersGet(): \IdeaEngine\TezosSDK\Model\CryptoBoxPublicKeyHash[]
```



List of the last greylisted peers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->networkGreylistPeersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkGreylistPeersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\IdeaEngine\TezosSDK\Model\CryptoBoxPublicKeyHash[]**](../Model/CryptoBoxPublicKeyHash.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkLogGet()`

```php
networkLogGet(): \IdeaEngine\TezosSDK\Model\P2pConnectionPoolEvent
```



Stream of all network events

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->networkLogGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkLogGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\IdeaEngine\TezosSDK\Model\P2pConnectionPoolEvent**](../Model/P2pConnectionPoolEvent.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkPeersGet()`

```php
networkPeersGet($filter): OneOfCryptoBoxPublicKeyHashObject[][]
```



List the peers the node ever met.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->networkPeersGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkPeersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**|  | [optional]

### Return type

**OneOfCryptoBoxPublicKeyHashObject[][]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkPeersPeerIdBanGet()`

```php
networkPeersPeerIdBanGet($peer_id): object
```



DEPRECATED: Blacklist the given peer and remove it from the whitelist if present. Use PATCH `network/peers/<peer_id>` instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$peer_id = 'peer_id_example'; // string | A cryptographic node identity (Base58Check-encoded)

try {
    $result = $apiInstance->networkPeersPeerIdBanGet($peer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkPeersPeerIdBanGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **peer_id** | **string**| A cryptographic node identity (Base58Check-encoded) |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkPeersPeerIdBannedGet()`

```php
networkPeersPeerIdBannedGet($peer_id): bool
```



Check if a given peer is blacklisted or greylisted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$peer_id = 'peer_id_example'; // string | A cryptographic node identity (Base58Check-encoded)

try {
    $result = $apiInstance->networkPeersPeerIdBannedGet($peer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkPeersPeerIdBannedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **peer_id** | **string**| A cryptographic node identity (Base58Check-encoded) |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkPeersPeerIdGet()`

```php
networkPeersPeerIdGet($peer_id): \IdeaEngine\TezosSDK\Model\InlineResponse2009
```



Details about a given peer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$peer_id = 'peer_id_example'; // string | A cryptographic node identity (Base58Check-encoded)

try {
    $result = $apiInstance->networkPeersPeerIdGet($peer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkPeersPeerIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **peer_id** | **string**| A cryptographic node identity (Base58Check-encoded) |

### Return type

[**\IdeaEngine\TezosSDK\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkPeersPeerIdLogGet()`

```php
networkPeersPeerIdLogGet($peer_id, $monitor): \IdeaEngine\TezosSDK\Model\P2pPeerPoolEvent[]
```



Monitor network events related to a given peer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$peer_id = 'peer_id_example'; // string | A cryptographic node identity (Base58Check-encoded)
$monitor = 'monitor_example'; // string

try {
    $result = $apiInstance->networkPeersPeerIdLogGet($peer_id, $monitor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkPeersPeerIdLogGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **peer_id** | **string**| A cryptographic node identity (Base58Check-encoded) |
 **monitor** | **string**|  | [optional]

### Return type

[**\IdeaEngine\TezosSDK\Model\P2pPeerPoolEvent[]**](../Model/P2pPeerPoolEvent.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkPeersPeerIdPatch()`

```php
networkPeersPeerIdPatch($peer_id, $inline_object2): \IdeaEngine\TezosSDK\Model\InlineResponse2009
```



Change the permissions of a given peer. With `{acl: ban}`: blacklist the given peer and remove it from the whitelist if present. With `{acl: open}`: removes the peer from the blacklist and whitelist. With `{acl: trust}`: trust the given peer permanently and remove it from the blacklist if present. The peer cannot be blocked (but its host IP still can).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$peer_id = 'peer_id_example'; // string | A cryptographic node identity (Base58Check-encoded)
$inline_object2 = new \IdeaEngine\TezosSDK\Model\InlineObject2(); // \IdeaEngine\TezosSDK\Model\InlineObject2

try {
    $result = $apiInstance->networkPeersPeerIdPatch($peer_id, $inline_object2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkPeersPeerIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **peer_id** | **string**| A cryptographic node identity (Base58Check-encoded) |
 **inline_object2** | [**\IdeaEngine\TezosSDK\Model\InlineObject2**](../Model/InlineObject2.md)|  | [optional]

### Return type

[**\IdeaEngine\TezosSDK\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkPeersPeerIdTrustGet()`

```php
networkPeersPeerIdTrustGet($peer_id): object
```



DEPRECATED: Whitelist a given peer permanently and remove it from the blacklist if present. The peer cannot be blocked (but its host IP still can). Use PATCH `network/peers/<peer_id>` instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$peer_id = 'peer_id_example'; // string | A cryptographic node identity (Base58Check-encoded)

try {
    $result = $apiInstance->networkPeersPeerIdTrustGet($peer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkPeersPeerIdTrustGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **peer_id** | **string**| A cryptographic node identity (Base58Check-encoded) |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkPeersPeerIdUnbanGet()`

```php
networkPeersPeerIdUnbanGet($peer_id): object
```



DEPRECATED: Remove the given peer from the blacklist. Use PATCH `network/peers/<peer_id>` instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$peer_id = 'peer_id_example'; // string | A cryptographic node identity (Base58Check-encoded)

try {
    $result = $apiInstance->networkPeersPeerIdUnbanGet($peer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkPeersPeerIdUnbanGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **peer_id** | **string**| A cryptographic node identity (Base58Check-encoded) |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkPeersPeerIdUntrustGet()`

```php
networkPeersPeerIdUntrustGet($peer_id): object
```



DEPRECATED: Remove a given peer from the whitelist. Use PATCH `network/peers/<peer_id>` instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$peer_id = 'peer_id_example'; // string | A cryptographic node identity (Base58Check-encoded)

try {
    $result = $apiInstance->networkPeersPeerIdUntrustGet($peer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkPeersPeerIdUntrustGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **peer_id** | **string**| A cryptographic node identity (Base58Check-encoded) |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkPointsGet()`

```php
networkPointsGet($filter): OneOfP2pPointIdP2pPointInfo[][]
```



List the pool of known `IP:port` used for establishing P2P connections.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->networkPointsGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkPointsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**|  | [optional]

### Return type

**OneOfP2pPointIdP2pPointInfo[][]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkPointsPointBanGet()`

```php
networkPointsPointBanGet($point): object
```



DEPRECATED: Blacklist the given address and remove it from the whitelist if present. Use PATCH `/network/point/<point_id>` instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$point = 'point_example'; // string | A network point (ipv4:port or [ipv6]:port).

try {
    $result = $apiInstance->networkPointsPointBanGet($point);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkPointsPointBanGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **point** | **string**| A network point (ipv4:port or [ipv6]:port). |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkPointsPointBannedGet()`

```php
networkPointsPointBannedGet($point): bool
```



Check if a given address is blacklisted or greylisted. Port component is unused.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$point = 'point_example'; // string | A network point (ipv4:port or [ipv6]:port).

try {
    $result = $apiInstance->networkPointsPointBannedGet($point);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkPointsPointBannedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **point** | **string**| A network point (ipv4:port or [ipv6]:port). |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkPointsPointGet()`

```php
networkPointsPointGet($point): \IdeaEngine\TezosSDK\Model\P2pPointInfo
```



Details about a given `IP:addr`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$point = 'point_example'; // string | A network point (ipv4:port or [ipv6]:port).

try {
    $result = $apiInstance->networkPointsPointGet($point);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkPointsPointGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **point** | **string**| A network point (ipv4:port or [ipv6]:port). |

### Return type

[**\IdeaEngine\TezosSDK\Model\P2pPointInfo**](../Model/P2pPointInfo.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkPointsPointLogGet()`

```php
networkPointsPointLogGet($point, $monitor): array[]
```



Monitor network events related to an `IP:addr`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$point = 'point_example'; // string | A network point (ipv4:port or [ipv6]:port).
$monitor = 'monitor_example'; // string

try {
    $result = $apiInstance->networkPointsPointLogGet($point, $monitor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkPointsPointLogGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **point** | **string**| A network point (ipv4:port or [ipv6]:port). |
 **monitor** | **string**|  | [optional]

### Return type

**array[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkPointsPointPatch()`

```php
networkPointsPointPatch($point, $inline_object3): \IdeaEngine\TezosSDK\Model\P2pPointInfo
```



Change the connectivity state of a given `IP:addr`. With `{acl : ban}`: blacklist the given address and remove it from the whitelist if present. With `{acl: open}`: removes an address from the blacklist and whitelist. With `{acl: trust}`: trust a given address permanently and remove it from the blacklist if present. With `{peer_id: <id>}` set the peerId of the point. Connections from this address can still be closed on authentication if the peer is greylisted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$point = 'point_example'; // string | A network point (ipv4:port or [ipv6]:port).
$inline_object3 = new \IdeaEngine\TezosSDK\Model\InlineObject3(); // \IdeaEngine\TezosSDK\Model\InlineObject3

try {
    $result = $apiInstance->networkPointsPointPatch($point, $inline_object3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkPointsPointPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **point** | **string**| A network point (ipv4:port or [ipv6]:port). |
 **inline_object3** | [**\IdeaEngine\TezosSDK\Model\InlineObject3**](../Model/InlineObject3.md)|  | [optional]

### Return type

[**\IdeaEngine\TezosSDK\Model\P2pPointInfo**](../Model/P2pPointInfo.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkPointsPointPut()`

```php
networkPointsPointPut($point, $timeout, $body): object
```



Connect to a peer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$point = 'point_example'; // string | A network point (ipv4:port or [ipv6]:port).
$timeout = 'timeout_example'; // string | A span of time in seconds
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->networkPointsPointPut($point, $timeout, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkPointsPointPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **point** | **string**| A network point (ipv4:port or [ipv6]:port). |
 **timeout** | **string**| A span of time in seconds |
 **body** | **object**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkPointsPointTrustGet()`

```php
networkPointsPointTrustGet($point): object
```



DEPRECATED: Trust a given address permanently and remove it from the blacklist if present. Connections from this address can still be closed on authentication if the peer is greylisted. Use PATCH`/network/point/<point_id>` instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$point = 'point_example'; // string | A network point (ipv4:port or [ipv6]:port).

try {
    $result = $apiInstance->networkPointsPointTrustGet($point);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkPointsPointTrustGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **point** | **string**| A network point (ipv4:port or [ipv6]:port). |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkPointsPointUnbanGet()`

```php
networkPointsPointUnbanGet($point): object
```



DEPRECATED: Remove an address from the blacklist. Use PATCH `/network/point/:peerid` instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$point = 'point_example'; // string | A network point (ipv4:port or [ipv6]:port).

try {
    $result = $apiInstance->networkPointsPointUnbanGet($point);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkPointsPointUnbanGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **point** | **string**| A network point (ipv4:port or [ipv6]:port). |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkPointsPointUntrustGet()`

```php
networkPointsPointUntrustGet($point): object
```



DEPRECATED: Remove an address from the whitelist. Use PATCH `/network/point/<point_id>` instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$point = 'point_example'; // string | A network point (ipv4:port or [ipv6]:port).

try {
    $result = $apiInstance->networkPointsPointUntrustGet($point);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkPointsPointUntrustGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **point** | **string**| A network point (ipv4:port or [ipv6]:port). |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkSelfGet()`

```php
networkSelfGet(): \IdeaEngine\TezosSDK\Model\CryptoBoxPublicKeyHash
```



Return the node's peer id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->networkSelfGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkSelfGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\IdeaEngine\TezosSDK\Model\CryptoBoxPublicKeyHash**](../Model/CryptoBoxPublicKeyHash.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkStatGet()`

```php
networkStatGet(): \IdeaEngine\TezosSDK\Model\P2pStat
```



Global network bandwidth statistics in B/s.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->networkStatGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkStatGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\IdeaEngine\TezosSDK\Model\P2pStat**](../Model/P2pStat.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkVersionGet()`

```php
networkVersionGet(): \IdeaEngine\TezosSDK\Model\NetworkVersion
```



DEPRECATED: use `version` instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->networkVersionGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkVersionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\IdeaEngine\TezosSDK\Model\NetworkVersion**](../Model/NetworkVersion.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkVersionsGet()`

```php
networkVersionsGet(): \IdeaEngine\TezosSDK\Model\NetworkVersion[]
```



DEPRECATED: use `version` instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->networkVersionsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->networkVersionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\IdeaEngine\TezosSDK\Model\NetworkVersion[]**](../Model/NetworkVersion.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `protocolsGet()`

```php
protocolsGet(): \IdeaEngine\TezosSDK\Model\ProtocolHash[]
```



(no description)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->protocolsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->protocolsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\IdeaEngine\TezosSDK\Model\ProtocolHash[]**](../Model/ProtocolHash.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `protocolsProtocolHashEnvironmentGet()`

```php
protocolsProtocolHashEnvironmentGet($protocol_hash): int
```



(no description)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$protocol_hash = 'protocol_hash_example'; // string | Protocol_hash (Base58Check-encoded)

try {
    $result = $apiInstance->protocolsProtocolHashEnvironmentGet($protocol_hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->protocolsProtocolHashEnvironmentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **protocol_hash** | **string**| Protocol_hash (Base58Check-encoded) |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `protocolsProtocolHashGet()`

```php
protocolsProtocolHashGet($protocol_hash): \IdeaEngine\TezosSDK\Model\Protocol
```



(no description)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$protocol_hash = 'protocol_hash_example'; // string | Protocol_hash (Base58Check-encoded)

try {
    $result = $apiInstance->protocolsProtocolHashGet($protocol_hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->protocolsProtocolHashGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **protocol_hash** | **string**| Protocol_hash (Base58Check-encoded) |

### Return type

[**\IdeaEngine\TezosSDK\Model\Protocol**](../Model/Protocol.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `statsGcGet()`

```php
statsGcGet(): \IdeaEngine\TezosSDK\Model\InlineResponse20010
```



Gets stats from the OCaml Garbage Collector

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->statsGcGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->statsGcGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\IdeaEngine\TezosSDK\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `statsMemoryGet()`

```php
statsMemoryGet(): OneOfObjectObject
```



Gets memory usage stats

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->statsMemoryGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->statsMemoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**OneOfObjectObject**](../Model/OneOfObjectObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `versionGet()`

```php
versionGet(): \IdeaEngine\TezosSDK\Model\InlineResponse20011
```



Get information on the node version

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->versionGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->versionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\IdeaEngine\TezosSDK\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `workersBlockValidatorGet()`

```php
workersBlockValidatorGet(): \IdeaEngine\TezosSDK\Model\InlineResponse20012
```



Introspect the state of the block_validator worker.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->workersBlockValidatorGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->workersBlockValidatorGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\IdeaEngine\TezosSDK\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `workersChainValidatorsChainIdDdbGet()`

```php
workersChainValidatorsChainIdDdbGet($chain_id): \IdeaEngine\TezosSDK\Model\InlineResponse20015
```



Introspect the state of the DDB attached to a chain validator worker.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chain_id = 'chain_id_example'; // string | A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.

try {
    $result = $apiInstance->workersChainValidatorsChainIdDdbGet($chain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->workersChainValidatorsChainIdDdbGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chain_id** | **string**| A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: &#39;main&#39;, &#39;test&#39;. |

### Return type

[**\IdeaEngine\TezosSDK\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `workersChainValidatorsChainIdGet()`

```php
workersChainValidatorsChainIdGet($chain_id): \IdeaEngine\TezosSDK\Model\InlineResponse20014
```



Introspect the state of a chain validator worker.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chain_id = 'chain_id_example'; // string | A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.

try {
    $result = $apiInstance->workersChainValidatorsChainIdGet($chain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->workersChainValidatorsChainIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chain_id** | **string**| A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: &#39;main&#39;, &#39;test&#39;. |

### Return type

[**\IdeaEngine\TezosSDK\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `workersChainValidatorsChainIdPeersValidatorsGet()`

```php
workersChainValidatorsChainIdPeersValidatorsGet($chain_id): \IdeaEngine\TezosSDK\Model\InlineResponse20016[]
```



Lists the peer validator workers and their status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chain_id = 'chain_id_example'; // string | A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.

try {
    $result = $apiInstance->workersChainValidatorsChainIdPeersValidatorsGet($chain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->workersChainValidatorsChainIdPeersValidatorsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chain_id** | **string**| A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: &#39;main&#39;, &#39;test&#39;. |

### Return type

[**\IdeaEngine\TezosSDK\Model\InlineResponse20016[]**](../Model/InlineResponse20016.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `workersChainValidatorsChainIdPeersValidatorsPeerIdGet()`

```php
workersChainValidatorsChainIdPeersValidatorsPeerIdGet($chain_id, $peer_id): \IdeaEngine\TezosSDK\Model\InlineResponse20017
```



Introspect the state of a peer validator worker.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chain_id = 'chain_id_example'; // string | A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.
$peer_id = 'peer_id_example'; // string | A cryptographic node identity (Base58Check-encoded)

try {
    $result = $apiInstance->workersChainValidatorsChainIdPeersValidatorsPeerIdGet($chain_id, $peer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->workersChainValidatorsChainIdPeersValidatorsPeerIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chain_id** | **string**| A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: &#39;main&#39;, &#39;test&#39;. |
 **peer_id** | **string**| A cryptographic node identity (Base58Check-encoded) |

### Return type

[**\IdeaEngine\TezosSDK\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `workersChainValidatorsGet()`

```php
workersChainValidatorsGet(): \IdeaEngine\TezosSDK\Model\InlineResponse20013[]
```



Lists the chain validator workers and their status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->workersChainValidatorsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->workersChainValidatorsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\IdeaEngine\TezosSDK\Model\InlineResponse20013[]**](../Model/InlineResponse20013.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `workersPrevalidatorsChainIdGet()`

```php
workersPrevalidatorsChainIdGet($chain_id): \IdeaEngine\TezosSDK\Model\InlineResponse20018
```



Introspect the state of prevalidator workers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chain_id = 'chain_id_example'; // string | A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: 'main', 'test'.

try {
    $result = $apiInstance->workersPrevalidatorsChainIdGet($chain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->workersPrevalidatorsChainIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chain_id** | **string**| A chain identifier. This is either a chain hash in Base58Check notation or a one the predefined aliases: &#39;main&#39;, &#39;test&#39;. |

### Return type

[**\IdeaEngine\TezosSDK\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `workersPrevalidatorsGet()`

```php
workersPrevalidatorsGet(): \IdeaEngine\TezosSDK\Model\InlineResponse20013[]
```



Lists the Prevalidator workers and their status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdeaEngine\TezosSDK\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->workersPrevalidatorsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->workersPrevalidatorsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\IdeaEngine\TezosSDK\Model\InlineResponse20013[]**](../Model/InlineResponse20013.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
