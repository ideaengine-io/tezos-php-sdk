# # InlineResponse2004Log

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**output** | [**OneOfUnistring**](OneOfUnistring.md) | Output for the logging function. Either &#39;stdout&#39;, &#39;stderr&#39; or the name of a log file . | [optional]
**level** | **string** | Verbosity level: one of &#39;fatal&#39;, &#39;error&#39;, &#39;warn&#39;,&#39;notice&#39;, &#39;info&#39;, &#39;debug&#39;. | [optional]
**rules** | [**OneOfUnistring**](OneOfUnistring.md) | Fine-grained logging instructions. Same format as described in &#x60;tezos-node run --help&#x60;, DEBUG section. In the example below, sections &#39;p2p&#39; and all sections starting by &#39;client&#39; will have their messages logged up to the debug level, whereas the rest of log sections will be logged up to the notice level. | [optional]
**template** | [**OneOfUnistring**](OneOfUnistring.md) | Format for the log file, see https://github.com/ocsigen/lwt_log/blob/1.1.1/src/core/lwt_log_core.mli#L229. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
