# # InlineResponse2004P2pLimits

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**connection_timeout** | [**OneOfInteger**](OneOfInteger.md) | Delay acceptable when initiating a connection to a new peer, in seconds. | [optional]
**authentication_timeout** | [**OneOfInteger**](OneOfInteger.md) | Delay granted to a peer to perform authentication, in seconds. | [optional]
**min_connections** | **int** | Strict minimum number of connections (triggers an urgent maintenance). | [optional]
**expected_connections** | **int** | Targeted number of connections to reach when bootstrapping / maintaining. | [optional]
**max_connections** | **int** | Maximum number of connections (exceeding peers are disconnected). | [optional]
**backlog** | **int** | Number above which pending incoming connections are immediately rejected. | [optional]
**max_incoming_connections** | **int** | Number above which pending incoming connections are immediately rejected. | [optional]
**max_download_speed** | **int** | Max download speeds in KiB/s. | [optional]
**max_upload_speed** | **int** | Max upload speeds in KiB/s. | [optional]
**swap_linger** | **int** | A span of time, as seen by the local computer. | [optional]
**binary_chunks_size** | **int** |  | [optional]
**read_buffer_size** | **int** | Size of the buffer passed to read(2). | [optional]
**read_queue_size** | **int** |  | [optional]
**write_queue_size** | **int** |  | [optional]
**incoming_app_message_queue_size** | **int** |  | [optional]
**incoming_message_queue_size** | **int** |  | [optional]
**outgoing_message_queue_size** | **int** |  | [optional]
**max_known_points** | [**OneOfIntegerInteger[]**](OneOfIntegerInteger.md) |  | [optional]
**max_known_peer_ids** | [**OneOfIntegerInteger[]**](OneOfIntegerInteger.md) | The max and target size for the known address table. | [optional]
**peer_greylist_size** | **int** | The number of peer_ids kept in the peer_id greylist. | [optional]
**ip_greylist_size_in_kilobytes** | **int** | The size of the IP address greylist (in kilobytes). | [optional]
**ip_greylist_cleanup_delay** | [**OneOfInteger**](OneOfInteger.md) | The time an IP address is kept in the greylist. | [optional]
**greylist_timeout** | [**OneOfInteger**](OneOfInteger.md) | GC delay for the greylists tables, in seconds. | [optional]
**maintenance_idle_time** | [**OneOfInteger**](OneOfInteger.md) | How long to wait at most, in seconds, before running a maintenance loop. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
