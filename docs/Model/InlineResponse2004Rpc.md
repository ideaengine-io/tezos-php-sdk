# # InlineResponse2004Rpc

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**listen_addrs** | [**\IdeaEngine\TezosSDK\Model\Unistring[]**](Unistring.md) | Hosts to listen to. If the port is not specified, the default port 8732 will be assumed. | [optional]
**listen_addr** | [**OneOfUnistring**](OneOfUnistring.md) | Legacy value: Host to listen to | [optional]
**cors_origin** | [**\IdeaEngine\TezosSDK\Model\Unistring[]**](Unistring.md) | Cross Origin Resource Sharing parameters, see https://en.wikipedia.org/wiki/Cross-origin_resource_sharing. | [optional]
**cors_headers** | [**\IdeaEngine\TezosSDK\Model\Unistring[]**](Unistring.md) | Cross Origin Resource Sharing parameters, see https://en.wikipedia.org/wiki/Cross-origin_resource_sharing. | [optional]
**crt** | [**OneOfUnistring**](OneOfUnistring.md) | Certificate file (necessary when TLS is used). | [optional]
**key** | [**OneOfUnistring**](OneOfUnistring.md) | Key file (necessary when TLS is used). | [optional]
**acl** | [**OneOfObjectObject[]**](OneOfObjectObject.md) | A list of RPC ACLs for specific listening addresses. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
