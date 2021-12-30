# TezosSDK

Tezos client RPC API.


## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/ideaengine-io/tezos-php-sdk.git"
    }
  ],
  "require": {
    "ideaengine-io/tezos-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/TezosSDK/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**chainsChainIdBlocksGet**](docs/Api/DefaultApi.md#chainschainidblocksget) | **GET** /chains/{chain_id}/blocks | 
*DefaultApi* | [**chainsChainIdChainIdGet**](docs/Api/DefaultApi.md#chainschainidchainidget) | **GET** /chains/{chain_id}/chain_id | 
*DefaultApi* | [**chainsChainIdCheckpointGet**](docs/Api/DefaultApi.md#chainschainidcheckpointget) | **GET** /chains/{chain_id}/checkpoint | 
*DefaultApi* | [**chainsChainIdInvalidBlocksBlockHashDelete**](docs/Api/DefaultApi.md#chainschainidinvalidblocksblockhashdelete) | **DELETE** /chains/{chain_id}/invalid_blocks/{block_hash} | 
*DefaultApi* | [**chainsChainIdInvalidBlocksBlockHashGet**](docs/Api/DefaultApi.md#chainschainidinvalidblocksblockhashget) | **GET** /chains/{chain_id}/invalid_blocks/{block_hash} | 
*DefaultApi* | [**chainsChainIdInvalidBlocksGet**](docs/Api/DefaultApi.md#chainschainidinvalidblocksget) | **GET** /chains/{chain_id}/invalid_blocks | 
*DefaultApi* | [**chainsChainIdIsBootstrappedGet**](docs/Api/DefaultApi.md#chainschainidisbootstrappedget) | **GET** /chains/{chain_id}/is_bootstrapped | 
*DefaultApi* | [**chainsChainIdLevelsCabooseGet**](docs/Api/DefaultApi.md#chainschainidlevelscabooseget) | **GET** /chains/{chain_id}/levels/caboose | 
*DefaultApi* | [**chainsChainIdLevelsCheckpointGet**](docs/Api/DefaultApi.md#chainschainidlevelscheckpointget) | **GET** /chains/{chain_id}/levels/checkpoint | 
*DefaultApi* | [**chainsChainIdLevelsSavepointGet**](docs/Api/DefaultApi.md#chainschainidlevelssavepointget) | **GET** /chains/{chain_id}/levels/savepoint | 
*DefaultApi* | [**chainsChainIdPatch**](docs/Api/DefaultApi.md#chainschainidpatch) | **PATCH** /chains/{chain_id} | 
*DefaultApi* | [**configGet**](docs/Api/DefaultApi.md#configget) | **GET** /config | 
*DefaultApi* | [**configHistoryModeGet**](docs/Api/DefaultApi.md#confighistorymodeget) | **GET** /config/history_mode | 
*DefaultApi* | [**configNetworkUserActivatedProtocolOverridesGet**](docs/Api/DefaultApi.md#confignetworkuseractivatedprotocoloverridesget) | **GET** /config/network/user_activated_protocol_overrides | 
*DefaultApi* | [**configNetworkUserActivatedUpgradesGet**](docs/Api/DefaultApi.md#confignetworkuseractivatedupgradesget) | **GET** /config/network/user_activated_upgrades | 
*DefaultApi* | [**errorsGet**](docs/Api/DefaultApi.md#errorsget) | **GET** /errors | 
*DefaultApi* | [**fetchProtocolProtocolHashGet**](docs/Api/DefaultApi.md#fetchprotocolprotocolhashget) | **GET** /fetch_protocol/{Protocol_hash} | 
*DefaultApi* | [**injectionBlockPost**](docs/Api/DefaultApi.md#injectionblockpost) | **POST** /injection/block | 
*DefaultApi* | [**injectionOperationPost**](docs/Api/DefaultApi.md#injectionoperationpost) | **POST** /injection/operation | 
*DefaultApi* | [**injectionProtocolPost**](docs/Api/DefaultApi.md#injectionprotocolpost) | **POST** /injection/protocol | 
*DefaultApi* | [**monitorActiveChainsGet**](docs/Api/DefaultApi.md#monitoractivechainsget) | **GET** /monitor/active_chains | 
*DefaultApi* | [**monitorBootstrappedGet**](docs/Api/DefaultApi.md#monitorbootstrappedget) | **GET** /monitor/bootstrapped | 
*DefaultApi* | [**monitorCommitHashGet**](docs/Api/DefaultApi.md#monitorcommithashget) | **GET** /monitor/commit_hash | 
*DefaultApi* | [**monitorHeadsChainIdGet**](docs/Api/DefaultApi.md#monitorheadschainidget) | **GET** /monitor/heads/{chain_id} | 
*DefaultApi* | [**monitorProtocolsGet**](docs/Api/DefaultApi.md#monitorprotocolsget) | **GET** /monitor/protocols | 
*DefaultApi* | [**monitorValidBlocksGet**](docs/Api/DefaultApi.md#monitorvalidblocksget) | **GET** /monitor/valid_blocks | 
*DefaultApi* | [**networkConnectionsGet**](docs/Api/DefaultApi.md#networkconnectionsget) | **GET** /network/connections | 
*DefaultApi* | [**networkConnectionsPeerIdDelete**](docs/Api/DefaultApi.md#networkconnectionspeeriddelete) | **DELETE** /network/connections/{peer_id} | 
*DefaultApi* | [**networkConnectionsPeerIdGet**](docs/Api/DefaultApi.md#networkconnectionspeeridget) | **GET** /network/connections/{peer_id} | 
*DefaultApi* | [**networkGreylistClearGet**](docs/Api/DefaultApi.md#networkgreylistclearget) | **GET** /network/greylist/clear | 
*DefaultApi* | [**networkGreylistDelete**](docs/Api/DefaultApi.md#networkgreylistdelete) | **DELETE** /network/greylist | 
*DefaultApi* | [**networkGreylistIpsGet**](docs/Api/DefaultApi.md#networkgreylistipsget) | **GET** /network/greylist/ips | 
*DefaultApi* | [**networkGreylistPeersGet**](docs/Api/DefaultApi.md#networkgreylistpeersget) | **GET** /network/greylist/peers | 
*DefaultApi* | [**networkLogGet**](docs/Api/DefaultApi.md#networklogget) | **GET** /network/log | 
*DefaultApi* | [**networkPeersGet**](docs/Api/DefaultApi.md#networkpeersget) | **GET** /network/peers | 
*DefaultApi* | [**networkPeersPeerIdBanGet**](docs/Api/DefaultApi.md#networkpeerspeeridbanget) | **GET** /network/peers/{peer_id}/ban | 
*DefaultApi* | [**networkPeersPeerIdBannedGet**](docs/Api/DefaultApi.md#networkpeerspeeridbannedget) | **GET** /network/peers/{peer_id}/banned | 
*DefaultApi* | [**networkPeersPeerIdGet**](docs/Api/DefaultApi.md#networkpeerspeeridget) | **GET** /network/peers/{peer_id} | 
*DefaultApi* | [**networkPeersPeerIdLogGet**](docs/Api/DefaultApi.md#networkpeerspeeridlogget) | **GET** /network/peers/{peer_id}/log | 
*DefaultApi* | [**networkPeersPeerIdPatch**](docs/Api/DefaultApi.md#networkpeerspeeridpatch) | **PATCH** /network/peers/{peer_id} | 
*DefaultApi* | [**networkPeersPeerIdTrustGet**](docs/Api/DefaultApi.md#networkpeerspeeridtrustget) | **GET** /network/peers/{peer_id}/trust | 
*DefaultApi* | [**networkPeersPeerIdUnbanGet**](docs/Api/DefaultApi.md#networkpeerspeeridunbanget) | **GET** /network/peers/{peer_id}/unban | 
*DefaultApi* | [**networkPeersPeerIdUntrustGet**](docs/Api/DefaultApi.md#networkpeerspeeriduntrustget) | **GET** /network/peers/{peer_id}/untrust | 
*DefaultApi* | [**networkPointsGet**](docs/Api/DefaultApi.md#networkpointsget) | **GET** /network/points | 
*DefaultApi* | [**networkPointsPointBanGet**](docs/Api/DefaultApi.md#networkpointspointbanget) | **GET** /network/points/{point}/ban | 
*DefaultApi* | [**networkPointsPointBannedGet**](docs/Api/DefaultApi.md#networkpointspointbannedget) | **GET** /network/points/{point}/banned | 
*DefaultApi* | [**networkPointsPointGet**](docs/Api/DefaultApi.md#networkpointspointget) | **GET** /network/points/{point} | 
*DefaultApi* | [**networkPointsPointLogGet**](docs/Api/DefaultApi.md#networkpointspointlogget) | **GET** /network/points/{point}/log | 
*DefaultApi* | [**networkPointsPointPatch**](docs/Api/DefaultApi.md#networkpointspointpatch) | **PATCH** /network/points/{point} | 
*DefaultApi* | [**networkPointsPointPut**](docs/Api/DefaultApi.md#networkpointspointput) | **PUT** /network/points/{point} | 
*DefaultApi* | [**networkPointsPointTrustGet**](docs/Api/DefaultApi.md#networkpointspointtrustget) | **GET** /network/points/{point}/trust | 
*DefaultApi* | [**networkPointsPointUnbanGet**](docs/Api/DefaultApi.md#networkpointspointunbanget) | **GET** /network/points/{point}/unban | 
*DefaultApi* | [**networkPointsPointUntrustGet**](docs/Api/DefaultApi.md#networkpointspointuntrustget) | **GET** /network/points/{point}/untrust | 
*DefaultApi* | [**networkSelfGet**](docs/Api/DefaultApi.md#networkselfget) | **GET** /network/self | 
*DefaultApi* | [**networkStatGet**](docs/Api/DefaultApi.md#networkstatget) | **GET** /network/stat | 
*DefaultApi* | [**networkVersionGet**](docs/Api/DefaultApi.md#networkversionget) | **GET** /network/version | 
*DefaultApi* | [**networkVersionsGet**](docs/Api/DefaultApi.md#networkversionsget) | **GET** /network/versions | 
*DefaultApi* | [**protocolsGet**](docs/Api/DefaultApi.md#protocolsget) | **GET** /protocols | 
*DefaultApi* | [**protocolsProtocolHashEnvironmentGet**](docs/Api/DefaultApi.md#protocolsprotocolhashenvironmentget) | **GET** /protocols/{Protocol_hash}/environment | 
*DefaultApi* | [**protocolsProtocolHashGet**](docs/Api/DefaultApi.md#protocolsprotocolhashget) | **GET** /protocols/{Protocol_hash} | 
*DefaultApi* | [**statsGcGet**](docs/Api/DefaultApi.md#statsgcget) | **GET** /stats/gc | 
*DefaultApi* | [**statsMemoryGet**](docs/Api/DefaultApi.md#statsmemoryget) | **GET** /stats/memory | 
*DefaultApi* | [**versionGet**](docs/Api/DefaultApi.md#versionget) | **GET** /version | 
*DefaultApi* | [**workersBlockValidatorGet**](docs/Api/DefaultApi.md#workersblockvalidatorget) | **GET** /workers/block_validator | 
*DefaultApi* | [**workersChainValidatorsChainIdDdbGet**](docs/Api/DefaultApi.md#workerschainvalidatorschainidddbget) | **GET** /workers/chain_validators/{chain_id}/ddb | 
*DefaultApi* | [**workersChainValidatorsChainIdGet**](docs/Api/DefaultApi.md#workerschainvalidatorschainidget) | **GET** /workers/chain_validators/{chain_id} | 
*DefaultApi* | [**workersChainValidatorsChainIdPeersValidatorsGet**](docs/Api/DefaultApi.md#workerschainvalidatorschainidpeersvalidatorsget) | **GET** /workers/chain_validators/{chain_id}/peers_validators | 
*DefaultApi* | [**workersChainValidatorsChainIdPeersValidatorsPeerIdGet**](docs/Api/DefaultApi.md#workerschainvalidatorschainidpeersvalidatorspeeridget) | **GET** /workers/chain_validators/{chain_id}/peers_validators/{peer_id} | 
*DefaultApi* | [**workersChainValidatorsGet**](docs/Api/DefaultApi.md#workerschainvalidatorsget) | **GET** /workers/chain_validators | 
*DefaultApi* | [**workersPrevalidatorsChainIdGet**](docs/Api/DefaultApi.md#workersprevalidatorschainidget) | **GET** /workers/prevalidators/{chain_id} | 
*DefaultApi* | [**workersPrevalidatorsGet**](docs/Api/DefaultApi.md#workersprevalidatorsget) | **GET** /workers/prevalidators | 

## Models

- [Accepted](docs/Model/Accepted.md)
- [AcceptingRequest](docs/Model/AcceptingRequest.md)
- [AdvertiseReceived](docs/Model/AdvertiseReceived.md)
- [AdvertiseSent](docs/Model/AdvertiseSent.md)
- [Archive](docs/Model/Archive.md)
- [AuthenticationFailed](docs/Model/AuthenticationFailed.md)
- [BlockHash](docs/Model/BlockHash.md)
- [BlockHeader](docs/Model/BlockHeader.md)
- [BlockHeader1](docs/Model/BlockHeader1.md)
- [BootstrapReceived](docs/Model/BootstrapReceived.md)
- [BootstrapSent](docs/Model/BootstrapSent.md)
- [ChainId](docs/Model/ChainId.md)
- [ChainStatus](docs/Model/ChainStatus.md)
- [ChainUpdate](docs/Model/ChainUpdate.md)
- [ConnectionEstablished](docs/Model/ConnectionEstablished.md)
- [ContextHash](docs/Model/ContextHash.md)
- [CryptoBoxPublicKeyHash](docs/Model/CryptoBoxPublicKeyHash.md)
- [Disconnected](docs/Model/Disconnected.md)
- [Disconnection](docs/Model/Disconnection.md)
- [DistributedDbVersionName](docs/Model/DistributedDbVersionName.md)
- [ExternalDisconnection](docs/Model/ExternalDisconnection.md)
- [Full](docs/Model/Full.md)
- [FullAlias](docs/Model/FullAlias.md)
- [FullFull](docs/Model/FullFull.md)
- [GcPeerIds](docs/Model/GcPeerIds.md)
- [GcPoints](docs/Model/GcPoints.md)
- [HistoryMode](docs/Model/HistoryMode.md)
- [IncomingConnection](docs/Model/IncomingConnection.md)
- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [InlineObject2](docs/Model/InlineObject2.md)
- [InlineObject3](docs/Model/InlineObject3.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [InlineResponse20010](docs/Model/InlineResponse20010.md)
- [InlineResponse20011](docs/Model/InlineResponse20011.md)
- [InlineResponse20011Version](docs/Model/InlineResponse20011Version.md)
- [InlineResponse20012](docs/Model/InlineResponse20012.md)
- [InlineResponse20012Backlog](docs/Model/InlineResponse20012Backlog.md)
- [InlineResponse20012CurrentRequest](docs/Model/InlineResponse20012CurrentRequest.md)
- [InlineResponse20012PendingRequests](docs/Model/InlineResponse20012PendingRequests.md)
- [InlineResponse20013](docs/Model/InlineResponse20013.md)
- [InlineResponse20014](docs/Model/InlineResponse20014.md)
- [InlineResponse20014Backlog](docs/Model/InlineResponse20014Backlog.md)
- [InlineResponse20014CurrentRequest](docs/Model/InlineResponse20014CurrentRequest.md)
- [InlineResponse20014PendingRequests](docs/Model/InlineResponse20014PendingRequests.md)
- [InlineResponse20015](docs/Model/InlineResponse20015.md)
- [InlineResponse20015OperationDb](docs/Model/InlineResponse20015OperationDb.md)
- [InlineResponse20016](docs/Model/InlineResponse20016.md)
- [InlineResponse20017](docs/Model/InlineResponse20017.md)
- [InlineResponse20017Backlog](docs/Model/InlineResponse20017Backlog.md)
- [InlineResponse20017CurrentRequest](docs/Model/InlineResponse20017CurrentRequest.md)
- [InlineResponse20017PendingRequests](docs/Model/InlineResponse20017PendingRequests.md)
- [InlineResponse20018](docs/Model/InlineResponse20018.md)
- [InlineResponse20018Backlog](docs/Model/InlineResponse20018Backlog.md)
- [InlineResponse20018CurrentRequest](docs/Model/InlineResponse20018CurrentRequest.md)
- [InlineResponse20018PendingRequests](docs/Model/InlineResponse20018PendingRequests.md)
- [InlineResponse2002](docs/Model/InlineResponse2002.md)
- [InlineResponse2003](docs/Model/InlineResponse2003.md)
- [InlineResponse2004](docs/Model/InlineResponse2004.md)
- [InlineResponse2004InternalEvents](docs/Model/InlineResponse2004InternalEvents.md)
- [InlineResponse2004Log](docs/Model/InlineResponse2004Log.md)
- [InlineResponse2004P2p](docs/Model/InlineResponse2004P2p.md)
- [InlineResponse2004P2pGreylistingConfig](docs/Model/InlineResponse2004P2pGreylistingConfig.md)
- [InlineResponse2004P2pLimits](docs/Model/InlineResponse2004P2pLimits.md)
- [InlineResponse2004Rpc](docs/Model/InlineResponse2004Rpc.md)
- [InlineResponse2004Shell](docs/Model/InlineResponse2004Shell.md)
- [InlineResponse2004ShellBlockValidator](docs/Model/InlineResponse2004ShellBlockValidator.md)
- [InlineResponse2004ShellPeerValidator](docs/Model/InlineResponse2004ShellPeerValidator.md)
- [InlineResponse2004ShellPrevalidator](docs/Model/InlineResponse2004ShellPrevalidator.md)
- [InlineResponse2005](docs/Model/InlineResponse2005.md)
- [InlineResponse2006](docs/Model/InlineResponse2006.md)
- [InlineResponse2007](docs/Model/InlineResponse2007.md)
- [InlineResponse2008](docs/Model/InlineResponse2008.md)
- [InlineResponse2009](docs/Model/InlineResponse2009.md)
- [InlineResponse2009PeerMetadata](docs/Model/InlineResponse2009PeerMetadata.md)
- [InlineResponse2009PeerMetadataAdvertisements](docs/Model/InlineResponse2009PeerMetadataAdvertisements.md)
- [InlineResponse2009PeerMetadataAdvertisementsSent](docs/Model/InlineResponse2009PeerMetadataAdvertisementsSent.md)
- [InlineResponse2009PeerMetadataPrevalidatorResults](docs/Model/InlineResponse2009PeerMetadataPrevalidatorResults.md)
- [InlineResponse2009PeerMetadataRequests](docs/Model/InlineResponse2009PeerMetadataRequests.md)
- [InlineResponse2009PeerMetadataResponses](docs/Model/InlineResponse2009PeerMetadataResponses.md)
- [InlineResponse2009PeerMetadataUnadvertised](docs/Model/InlineResponse2009PeerMetadataUnadvertised.md)
- [Mempool](docs/Model/Mempool.md)
- [NetworkConnectionsLocalMetadata](docs/Model/NetworkConnectionsLocalMetadata.md)
- [NetworkVersion](docs/Model/NetworkVersion.md)
- [NewPeer](docs/Model/NewPeer.md)
- [NewPoint](docs/Model/NewPoint.md)
- [Operation](docs/Model/Operation.md)
- [OperationHash](docs/Model/OperationHash.md)
- [OperationListListHash](docs/Model/OperationListListHash.md)
- [OutgoingConnection](docs/Model/OutgoingConnection.md)
- [P2pAddress](docs/Model/P2pAddress.md)
- [P2pConnectionId](docs/Model/P2pConnectionId.md)
- [P2pConnectionPoolEvent](docs/Model/P2pConnectionPoolEvent.md)
- [P2pPeerPoolEvent](docs/Model/P2pPeerPoolEvent.md)
- [P2pPeerState](docs/Model/P2pPeerState.md)
- [P2pPointId](docs/Model/P2pPointId.md)
- [P2pPointInfo](docs/Model/P2pPointInfo.md)
- [P2pPointState](docs/Model/P2pPointState.md)
- [P2pStat](docs/Model/P2pStat.md)
- [Protocol](docs/Model/Protocol.md)
- [ProtocolComponents](docs/Model/ProtocolComponents.md)
- [ProtocolHash](docs/Model/ProtocolHash.md)
- [RejectingRequest](docs/Model/RejectingRequest.md)
- [RequestRejected](docs/Model/RequestRejected.md)
- [Requested](docs/Model/Requested.md)
- [Rolling](docs/Model/Rolling.md)
- [RollingAlias](docs/Model/RollingAlias.md)
- [Running](docs/Model/Running.md)
- [SwapAckReceived](docs/Model/SwapAckReceived.md)
- [SwapAckSent](docs/Model/SwapAckSent.md)
- [SwapFailure](docs/Model/SwapFailure.md)
- [SwapRequestIgnored](docs/Model/SwapRequestIgnored.md)
- [SwapRequestReceived](docs/Model/SwapRequestReceived.md)
- [SwapRequestSent](docs/Model/SwapRequestSent.md)
- [SwapSuccess](docs/Model/SwapSuccess.md)
- [TimestampProtocol](docs/Model/TimestampProtocol.md)
- [TimestampRfc](docs/Model/TimestampRfc.md)
- [TimestampSystem](docs/Model/TimestampSystem.md)
- [TooFewConnections](docs/Model/TooFewConnections.md)
- [TooManyConnections](docs/Model/TooManyConnections.md)
- [Unistring](docs/Model/Unistring.md)
- [UnistringOneOf](docs/Model/UnistringOneOf.md)
- [WorkersChainValidatorsChainIdPeersValidatorsPipelines](docs/Model/WorkersChainValidatorsChainIdPeersValidatorsPipelines.md)
- [WorkersChainValidatorsInformation](docs/Model/WorkersChainValidatorsInformation.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `11.0`
    - Package version: `0.0.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
