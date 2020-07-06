<?php
// This file was auto-generated from sdk-root/src/data/kinesisanalyticsv2/2018-05-23/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'          => '2018-05-23',
		'endpointPrefix'      => 'kinesisanalytics',
		'jsonVersion'         => '1.1',
		'protocol'            => 'json',
		'serviceAbbreviation' => 'Kinesis Analytics V2',
		'serviceFullName'     => 'Amazon Kinesis Analytics',
		'serviceId'           => 'Kinesis Analytics V2',
		'signatureVersion'    => 'v4',
		'signingName'         => 'kinesisanalytics',
		'targetPrefix'        => 'KinesisAnalytics_20180523',
		'uid'                 => 'kinesisanalyticsv2-2018-05-23',
	],
	'operations' => [
		'AddApplicationCloudWatchLoggingOption'         => [
			'name'   => 'AddApplicationCloudWatchLoggingOption',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AddApplicationCloudWatchLoggingOptionRequest', ],
			'output' => [ 'shape' => 'AddApplicationCloudWatchLoggingOptionResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'InvalidArgumentException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'InvalidApplicationConfigurationException', ],
			],
		],
		'AddApplicationInput'                           => [
			'name'   => 'AddApplicationInput',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AddApplicationInputRequest', ],
			'output' => [ 'shape' => 'AddApplicationInputResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'InvalidArgumentException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'CodeValidationException', ],
				[ 'shape' => 'InvalidRequestException', ],
			],
		],
		'AddApplicationInputProcessingConfiguration'    => [
			'name'   => 'AddApplicationInputProcessingConfiguration',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AddApplicationInputProcessingConfigurationRequest', ],
			'output' => [ 'shape' => 'AddApplicationInputProcessingConfigurationResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'InvalidArgumentException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'InvalidRequestException', ],
			],
		],
		'AddApplicationOutput'                          => [
			'name'   => 'AddApplicationOutput',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AddApplicationOutputRequest', ],
			'output' => [ 'shape' => 'AddApplicationOutputResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'InvalidArgumentException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'InvalidRequestException', ],
			],
		],
		'AddApplicationReferenceDataSource'             => [
			'name'   => 'AddApplicationReferenceDataSource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AddApplicationReferenceDataSourceRequest', ],
			'output' => [ 'shape' => 'AddApplicationReferenceDataSourceResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'InvalidArgumentException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'InvalidRequestException', ],
			],
		],
		'CreateApplication'                             => [
			'name'   => 'CreateApplication',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateApplicationRequest', ],
			'output' => [ 'shape' => 'CreateApplicationResponse', ],
			'errors' => [
				[ 'shape' => 'CodeValidationException', ],
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'InvalidArgumentException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'TooManyTagsException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
			],
		],
		'CreateApplicationSnapshot'                     => [
			'name'   => 'CreateApplicationSnapshot',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateApplicationSnapshotRequest', ],
			'output' => [ 'shape' => 'CreateApplicationSnapshotResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'InvalidArgumentException', ],
				[ 'shape' => 'UnsupportedOperationException', ],
				[ 'shape' => 'InvalidRequestException', ],
			],
		],
		'DeleteApplication'                             => [
			'name'   => 'DeleteApplication',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteApplicationRequest', ],
			'output' => [ 'shape' => 'DeleteApplicationResponse', ],
			'errors' => [
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'InvalidArgumentException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'InvalidApplicationConfigurationException', ],
			],
		],
		'DeleteApplicationCloudWatchLoggingOption'      => [
			'name'   => 'DeleteApplicationCloudWatchLoggingOption',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteApplicationCloudWatchLoggingOptionRequest', ],
			'output' => [ 'shape' => 'DeleteApplicationCloudWatchLoggingOptionResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'InvalidArgumentException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'InvalidApplicationConfigurationException', ],
			],
		],
		'DeleteApplicationInputProcessingConfiguration' => [
			'name'   => 'DeleteApplicationInputProcessingConfiguration',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteApplicationInputProcessingConfigurationRequest', ],
			'output' => [ 'shape' => 'DeleteApplicationInputProcessingConfigurationResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'InvalidArgumentException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'InvalidRequestException', ],
			],
		],
		'DeleteApplicationOutput'                       => [
			'name'   => 'DeleteApplicationOutput',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteApplicationOutputRequest', ],
			'output' => [ 'shape' => 'DeleteApplicationOutputResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'InvalidArgumentException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'InvalidRequestException', ],
			],
		],
		'DeleteApplicationReferenceDataSource'          => [
			'name'   => 'DeleteApplicationReferenceDataSource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteApplicationReferenceDataSourceRequest', ],
			'output' => [ 'shape' => 'DeleteApplicationReferenceDataSourceResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'InvalidArgumentException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'InvalidRequestException', ],
			],
		],
		'DeleteApplicationSnapshot'                     => [
			'name'   => 'DeleteApplicationSnapshot',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteApplicationSnapshotRequest', ],
			'output' => [ 'shape' => 'DeleteApplicationSnapshotResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'InvalidArgumentException', ],
				[ 'shape' => 'UnsupportedOperationException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'DescribeApplication'                           => [
			'name'   => 'DescribeApplication',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeApplicationRequest', ],
			'output' => [ 'shape' => 'DescribeApplicationResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidArgumentException', ],
				[ 'shape' => 'InvalidRequestException', ],
			],
		],
		'DescribeApplicationSnapshot'                   => [
			'name'   => 'DescribeApplicationSnapshot',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeApplicationSnapshotRequest', ],
			'output' => [ 'shape' => 'DescribeApplicationSnapshotResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidArgumentException', ],
				[ 'shape' => 'UnsupportedOperationException', ],
			],
		],
		'DiscoverInputSchema'                           => [
			'name'   => 'DiscoverInputSchema',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DiscoverInputSchemaRequest', ],
			'output' => [ 'shape' => 'DiscoverInputSchemaResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidArgumentException', ],
				[ 'shape' => 'UnableToDetectSchemaException', ],
				[ 'shape' => 'ResourceProvisionedThroughputExceededException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'InvalidRequestException', ],
			],
		],
		'ListApplicationSnapshots'                      => [
			'name'   => 'ListApplicationSnapshots',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListApplicationSnapshotsRequest', ],
			'output' => [ 'shape' => 'ListApplicationSnapshotsResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidArgumentException', ],
				[ 'shape' => 'UnsupportedOperationException', ],
			],
		],
		'ListApplications'                              => [
			'name'   => 'ListApplications',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListApplicationsRequest', ],
			'output' => [ 'shape' => 'ListApplicationsResponse', ],
			'errors' => [ [ 'shape' => 'InvalidRequestException', ], ],
		],
		'ListTagsForResource'                           => [
			'name'   => 'ListTagsForResource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListTagsForResourceRequest', ],
			'output' => [ 'shape' => 'ListTagsForResourceResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidArgumentException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
			],
		],
		'StartApplication'                              => [
			'name'   => 'StartApplication',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'StartApplicationRequest', ],
			'output' => [ 'shape' => 'StartApplicationResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'InvalidArgumentException', ],
				[ 'shape' => 'InvalidApplicationConfigurationException', ],
				[ 'shape' => 'InvalidRequestException', ],
			],
		],
		'StopApplication'                               => [
			'name'   => 'StopApplication',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'StopApplicationRequest', ],
			'output' => [ 'shape' => 'StopApplicationResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'InvalidArgumentException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'InvalidApplicationConfigurationException', ],
			],
		],
		'TagResource'                                   => [
			'name'   => 'TagResource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'TagResourceRequest', ],
			'output' => [ 'shape' => 'TagResourceResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'TooManyTagsException', ],
				[ 'shape' => 'InvalidArgumentException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
			],
		],
		'UntagResource'                                 => [
			'name'   => 'UntagResource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UntagResourceRequest', ],
			'output' => [ 'shape' => 'UntagResourceResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'TooManyTagsException', ],
				[ 'shape' => 'InvalidArgumentException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
			],
		],
		'UpdateApplication'                             => [
			'name'   => 'UpdateApplication',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateApplicationRequest', ],
			'output' => [ 'shape' => 'UpdateApplicationResponse', ],
			'errors' => [
				[ 'shape' => 'CodeValidationException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'InvalidArgumentException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'InvalidRequestException', ],
				[ 'shape' => 'InvalidApplicationConfigurationException', ],
			],
		],
	],
	'shapes'     => [
		'AddApplicationCloudWatchLoggingOptionRequest'          => [
			'type'     => 'structure',
			'required' => [
				'ApplicationName',
				'CurrentApplicationVersionId',
				'CloudWatchLoggingOption',
			],
			'members'  => [
				'ApplicationName'             => [ 'shape' => 'ApplicationName', ],
				'CurrentApplicationVersionId' => [ 'shape' => 'ApplicationVersionId', ],
				'CloudWatchLoggingOption'     => [ 'shape' => 'CloudWatchLoggingOption', ],
			],
		],
		'AddApplicationCloudWatchLoggingOptionResponse'         => [
			'type'    => 'structure',
			'members' => [
				'ApplicationARN'                      => [ 'shape' => 'ResourceARN', ],
				'ApplicationVersionId'                => [ 'shape' => 'ApplicationVersionId', ],
				'CloudWatchLoggingOptionDescriptions' => [ 'shape' => 'CloudWatchLoggingOptionDescriptions', ],
			],
		],
		'AddApplicationInputProcessingConfigurationRequest'     => [
			'type'     => 'structure',
			'required' => [
				'ApplicationName',
				'CurrentApplicationVersionId',
				'InputId',
				'InputProcessingConfiguration',
			],
			'members'  => [
				'ApplicationName'              => [ 'shape' => 'ApplicationName', ],
				'CurrentApplicationVersionId'  => [ 'shape' => 'ApplicationVersionId', ],
				'InputId'                      => [ 'shape' => 'Id', ],
				'InputProcessingConfiguration' => [ 'shape' => 'InputProcessingConfiguration', ],
			],
		],
		'AddApplicationInputProcessingConfigurationResponse'    => [
			'type'    => 'structure',
			'members' => [
				'ApplicationARN'                          => [ 'shape' => 'ResourceARN', ],
				'ApplicationVersionId'                    => [ 'shape' => 'ApplicationVersionId', ],
				'InputId'                                 => [ 'shape' => 'Id', ],
				'InputProcessingConfigurationDescription' => [ 'shape' => 'InputProcessingConfigurationDescription', ],
			],
		],
		'AddApplicationInputRequest'                            => [
			'type'     => 'structure',
			'required' => [
				'ApplicationName',
				'CurrentApplicationVersionId',
				'Input',
			],
			'members'  => [
				'ApplicationName'             => [ 'shape' => 'ApplicationName', ],
				'CurrentApplicationVersionId' => [ 'shape' => 'ApplicationVersionId', ],
				'Input'                       => [ 'shape' => 'Input', ],
			],
		],
		'AddApplicationInputResponse'                           => [
			'type'    => 'structure',
			'members' => [
				'ApplicationARN'       => [ 'shape' => 'ResourceARN', ],
				'ApplicationVersionId' => [ 'shape' => 'ApplicationVersionId', ],
				'InputDescriptions'    => [ 'shape' => 'InputDescriptions', ],
			],
		],
		'AddApplicationOutputRequest'                           => [
			'type'     => 'structure',
			'required' => [
				'ApplicationName',
				'CurrentApplicationVersionId',
				'Output',
			],
			'members'  => [
				'ApplicationName'             => [ 'shape' => 'ApplicationName', ],
				'CurrentApplicationVersionId' => [ 'shape' => 'ApplicationVersionId', ],
				'Output'                      => [ 'shape' => 'Output', ],
			],
		],
		'AddApplicationOutputResponse'                          => [
			'type'    => 'structure',
			'members' => [
				'ApplicationARN'       => [ 'shape' => 'ResourceARN', ],
				'ApplicationVersionId' => [ 'shape' => 'ApplicationVersionId', ],
				'OutputDescriptions'   => [ 'shape' => 'OutputDescriptions', ],
			],
		],
		'AddApplicationReferenceDataSourceRequest'              => [
			'type'     => 'structure',
			'required' => [
				'ApplicationName',
				'CurrentApplicationVersionId',
				'ReferenceDataSource',
			],
			'members'  => [
				'ApplicationName'             => [ 'shape' => 'ApplicationName', ],
				'CurrentApplicationVersionId' => [ 'shape' => 'ApplicationVersionId', ],
				'ReferenceDataSource'         => [ 'shape' => 'ReferenceDataSource', ],
			],
		],
		'AddApplicationReferenceDataSourceResponse'             => [
			'type'    => 'structure',
			'members' => [
				'ApplicationARN'                  => [ 'shape' => 'ResourceARN', ],
				'ApplicationVersionId'            => [ 'shape' => 'ApplicationVersionId', ],
				'ReferenceDataSourceDescriptions' => [ 'shape' => 'ReferenceDataSourceDescriptions', ],
			],
		],
		'ApplicationCodeConfiguration'                          => [
			'type'     => 'structure',
			'required' => [ 'CodeContentType', ],
			'members'  => [
				'CodeContent'     => [ 'shape' => 'CodeContent', ],
				'CodeContentType' => [ 'shape' => 'CodeContentType', ],
			],
		],
		'ApplicationCodeConfigurationDescription'               => [
			'type'     => 'structure',
			'required' => [ 'CodeContentType', ],
			'members'  => [
				'CodeContentType'        => [ 'shape' => 'CodeContentType', ],
				'CodeContentDescription' => [ 'shape' => 'CodeContentDescription', ],
			],
		],
		'ApplicationCodeConfigurationUpdate'                    => [
			'type'    => 'structure',
			'members' => [
				'CodeContentTypeUpdate' => [ 'shape' => 'CodeContentType', ],
				'CodeContentUpdate'     => [ 'shape' => 'CodeContentUpdate', ],
			],
		],
		'ApplicationConfiguration'                              => [
			'type'     => 'structure',
			'required' => [ 'ApplicationCodeConfiguration', ],
			'members'  => [
				'SqlApplicationConfiguration'      => [ 'shape' => 'SqlApplicationConfiguration', ],
				'FlinkApplicationConfiguration'    => [ 'shape' => 'FlinkApplicationConfiguration', ],
				'EnvironmentProperties'            => [ 'shape' => 'EnvironmentProperties', ],
				'ApplicationCodeConfiguration'     => [ 'shape' => 'ApplicationCodeConfiguration', ],
				'ApplicationSnapshotConfiguration' => [ 'shape' => 'ApplicationSnapshotConfiguration', ],
			],
		],
		'ApplicationConfigurationDescription'                   => [
			'type'    => 'structure',
			'members' => [
				'SqlApplicationConfigurationDescription'      => [ 'shape' => 'SqlApplicationConfigurationDescription', ],
				'ApplicationCodeConfigurationDescription'     => [ 'shape' => 'ApplicationCodeConfigurationDescription', ],
				'RunConfigurationDescription'                 => [ 'shape' => 'RunConfigurationDescription', ],
				'FlinkApplicationConfigurationDescription'    => [ 'shape' => 'FlinkApplicationConfigurationDescription', ],
				'EnvironmentPropertyDescriptions'             => [ 'shape' => 'EnvironmentPropertyDescriptions', ],
				'ApplicationSnapshotConfigurationDescription' => [ 'shape' => 'ApplicationSnapshotConfigurationDescription', ],
			],
		],
		'ApplicationConfigurationUpdate'                        => [
			'type'    => 'structure',
			'members' => [
				'SqlApplicationConfigurationUpdate'      => [ 'shape' => 'SqlApplicationConfigurationUpdate', ],
				'ApplicationCodeConfigurationUpdate'     => [ 'shape' => 'ApplicationCodeConfigurationUpdate', ],
				'FlinkApplicationConfigurationUpdate'    => [ 'shape' => 'FlinkApplicationConfigurationUpdate', ],
				'EnvironmentPropertyUpdates'             => [ 'shape' => 'EnvironmentPropertyUpdates', ],
				'ApplicationSnapshotConfigurationUpdate' => [ 'shape' => 'ApplicationSnapshotConfigurationUpdate', ],
			],
		],
		'ApplicationDescription'                                => [ 'type' => 'string', 'max' => 1024, 'min' => 0, ],
		'ApplicationDetail'                                     => [
			'type'     => 'structure',
			'required' => [
				'ApplicationARN',
				'ApplicationName',
				'RuntimeEnvironment',
				'ApplicationStatus',
				'ApplicationVersionId',
			],
			'members'  => [
				'ApplicationARN'                      => [ 'shape' => 'ResourceARN', ],
				'ApplicationDescription'              => [ 'shape' => 'ApplicationDescription', ],
				'ApplicationName'                     => [ 'shape' => 'ApplicationName', ],
				'RuntimeEnvironment'                  => [ 'shape' => 'RuntimeEnvironment', ],
				'ServiceExecutionRole'                => [ 'shape' => 'RoleARN', ],
				'ApplicationStatus'                   => [ 'shape' => 'ApplicationStatus', ],
				'ApplicationVersionId'                => [ 'shape' => 'ApplicationVersionId', ],
				'CreateTimestamp'                     => [ 'shape' => 'Timestamp', ],
				'LastUpdateTimestamp'                 => [ 'shape' => 'Timestamp', ],
				'ApplicationConfigurationDescription' => [ 'shape' => 'ApplicationConfigurationDescription', ],
				'CloudWatchLoggingOptionDescriptions' => [ 'shape' => 'CloudWatchLoggingOptionDescriptions', ],
			],
		],
		'ApplicationName'                                       => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[a-zA-Z0-9_.-]+',
		],
		'ApplicationRestoreConfiguration'                       => [
			'type'     => 'structure',
			'required' => [ 'ApplicationRestoreType', ],
			'members'  => [
				'ApplicationRestoreType' => [ 'shape' => 'ApplicationRestoreType', ],
				'SnapshotName'           => [ 'shape' => 'SnapshotName', ],
			],
		],
		'ApplicationRestoreType'                                => [
			'type' => 'string',
			'enum' => [
				'SKIP_RESTORE_FROM_SNAPSHOT',
				'RESTORE_FROM_LATEST_SNAPSHOT',
				'RESTORE_FROM_CUSTOM_SNAPSHOT',
			],
		],
		'ApplicationSnapshotConfiguration'                      => [
			'type'     => 'structure',
			'required' => [ 'SnapshotsEnabled', ],
			'members'  => [ 'SnapshotsEnabled' => [ 'shape' => 'BooleanObject', ], ],
		],
		'ApplicationSnapshotConfigurationDescription'           => [
			'type'     => 'structure',
			'required' => [ 'SnapshotsEnabled', ],
			'members'  => [ 'SnapshotsEnabled' => [ 'shape' => 'BooleanObject', ], ],
		],
		'ApplicationSnapshotConfigurationUpdate'                => [
			'type'     => 'structure',
			'required' => [ 'SnapshotsEnabledUpdate', ],
			'members'  => [ 'SnapshotsEnabledUpdate' => [ 'shape' => 'BooleanObject', ], ],
		],
		'ApplicationStatus'                                     => [
			'type' => 'string',
			'enum' => [
				'DELETING',
				'STARTING',
				'STOPPING',
				'READY',
				'RUNNING',
				'UPDATING',
			],
		],
		'ApplicationSummaries'                                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ApplicationSummary', ],
		],
		'ApplicationSummary'                                    => [
			'type'     => 'structure',
			'required' => [
				'ApplicationName',
				'ApplicationARN',
				'ApplicationStatus',
				'ApplicationVersionId',
				'RuntimeEnvironment',
			],
			'members'  => [
				'ApplicationName'      => [ 'shape' => 'ApplicationName', ],
				'ApplicationARN'       => [ 'shape' => 'ResourceARN', ],
				'ApplicationStatus'    => [ 'shape' => 'ApplicationStatus', ],
				'ApplicationVersionId' => [ 'shape' => 'ApplicationVersionId', ],
				'RuntimeEnvironment'   => [ 'shape' => 'RuntimeEnvironment', ],
			],
		],
		'ApplicationVersionId'                                  => [
			'type' => 'long',
			'max'  => 999999999,
			'min'  => 1,
		],
		'BooleanObject'                                         => [ 'type' => 'boolean', ],
		'BucketARN'                                             => [
			'type'    => 'string',
			'max'     => 2048,
			'min'     => 1,
			'pattern' => 'arn:.*',
		],
		'CSVMappingParameters'                                  => [
			'type'     => 'structure',
			'required' => [
				'RecordRowDelimiter',
				'RecordColumnDelimiter',
			],
			'members'  => [
				'RecordRowDelimiter'    => [ 'shape' => 'RecordRowDelimiter', ],
				'RecordColumnDelimiter' => [ 'shape' => 'RecordColumnDelimiter', ],
			],
		],
		'CheckpointConfiguration'                               => [
			'type'     => 'structure',
			'required' => [ 'ConfigurationType', ],
			'members'  => [
				'ConfigurationType'          => [ 'shape' => 'ConfigurationType', ],
				'CheckpointingEnabled'       => [ 'shape' => 'BooleanObject', ],
				'CheckpointInterval'         => [ 'shape' => 'CheckpointInterval', ],
				'MinPauseBetweenCheckpoints' => [ 'shape' => 'MinPauseBetweenCheckpoints', ],
			],
		],
		'CheckpointConfigurationDescription'                    => [
			'type'    => 'structure',
			'members' => [
				'ConfigurationType'          => [ 'shape' => 'ConfigurationType', ],
				'CheckpointingEnabled'       => [ 'shape' => 'BooleanObject', ],
				'CheckpointInterval'         => [ 'shape' => 'CheckpointInterval', ],
				'MinPauseBetweenCheckpoints' => [ 'shape' => 'MinPauseBetweenCheckpoints', ],
			],
		],
		'CheckpointConfigurationUpdate'                         => [
			'type'    => 'structure',
			'members' => [
				'ConfigurationTypeUpdate'          => [ 'shape' => 'ConfigurationType', ],
				'CheckpointingEnabledUpdate'       => [ 'shape' => 'BooleanObject', ],
				'CheckpointIntervalUpdate'         => [ 'shape' => 'CheckpointInterval', ],
				'MinPauseBetweenCheckpointsUpdate' => [ 'shape' => 'MinPauseBetweenCheckpoints', ],
			],
		],
		'CheckpointInterval'                                    => [ 'type' => 'long', 'min' => 0, ],
		'CloudWatchLoggingOption'                               => [
			'type'     => 'structure',
			'required' => [ 'LogStreamARN', ],
			'members'  => [ 'LogStreamARN' => [ 'shape' => 'LogStreamARN', ], ],
		],
		'CloudWatchLoggingOptionDescription'                    => [
			'type'     => 'structure',
			'required' => [ 'LogStreamARN', ],
			'members'  => [
				'CloudWatchLoggingOptionId' => [ 'shape' => 'Id', ],
				'LogStreamARN'              => [ 'shape' => 'LogStreamARN', ],
				'RoleARN'                   => [ 'shape' => 'RoleARN', ],
			],
		],
		'CloudWatchLoggingOptionDescriptions'                   => [
			'type'   => 'list',
			'member' => [ 'shape' => 'CloudWatchLoggingOptionDescription', ],
		],
		'CloudWatchLoggingOptionUpdate'                         => [
			'type'     => 'structure',
			'required' => [ 'CloudWatchLoggingOptionId', ],
			'members'  => [
				'CloudWatchLoggingOptionId' => [ 'shape' => 'Id', ],
				'LogStreamARNUpdate'        => [ 'shape' => 'LogStreamARN', ],
			],
		],
		'CloudWatchLoggingOptionUpdates'                        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'CloudWatchLoggingOptionUpdate', ],
		],
		'CloudWatchLoggingOptions'                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'CloudWatchLoggingOption', ],
		],
		'CodeContent'                                           => [
			'type'    => 'structure',
			'members' => [
				'TextContent'       => [ 'shape' => 'TextContent', ],
				'ZipFileContent'    => [ 'shape' => 'ZipFileContent', ],
				'S3ContentLocation' => [ 'shape' => 'S3ContentLocation', ],
			],
		],
		'CodeContentDescription'                                => [
			'type'    => 'structure',
			'members' => [
				'TextContent'                          => [ 'shape' => 'TextContent', ],
				'CodeMD5'                              => [ 'shape' => 'CodeMD5', ],
				'CodeSize'                             => [ 'shape' => 'CodeSize', ],
				'S3ApplicationCodeLocationDescription' => [ 'shape' => 'S3ApplicationCodeLocationDescription', ],
			],
		],
		'CodeContentType'                                       => [
			'type' => 'string',
			'enum' => [ 'PLAINTEXT', 'ZIPFILE', ],
		],
		'CodeContentUpdate'                                     => [
			'type'    => 'structure',
			'members' => [
				'TextContentUpdate'       => [ 'shape' => 'TextContent', ],
				'ZipFileContentUpdate'    => [ 'shape' => 'ZipFileContent', ],
				'S3ContentLocationUpdate' => [ 'shape' => 'S3ContentLocationUpdate', ],
			],
		],
		'CodeMD5'                                               => [ 'type' => 'string', 'max' => 128, 'min' => 128, ],
		'CodeSize'                                              => [ 'type' => 'long', 'max' => 52428800, 'min' => 0, ],
		'CodeValidationException'                               => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'ConcurrentModificationException'                       => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'ConfigurationType'                                     => [
			'type' => 'string',
			'enum' => [ 'DEFAULT', 'CUSTOM', ],
		],
		'CreateApplicationRequest'                              => [
			'type'     => 'structure',
			'required' => [
				'ApplicationName',
				'RuntimeEnvironment',
				'ServiceExecutionRole',
			],
			'members'  => [
				'ApplicationName'          => [ 'shape' => 'ApplicationName', ],
				'ApplicationDescription'   => [ 'shape' => 'ApplicationDescription', ],
				'RuntimeEnvironment'       => [ 'shape' => 'RuntimeEnvironment', ],
				'ServiceExecutionRole'     => [ 'shape' => 'RoleARN', ],
				'ApplicationConfiguration' => [ 'shape' => 'ApplicationConfiguration', ],
				'CloudWatchLoggingOptions' => [ 'shape' => 'CloudWatchLoggingOptions', ],
				'Tags'                     => [ 'shape' => 'Tags', ],
			],
		],
		'CreateApplicationResponse'                             => [
			'type'     => 'structure',
			'required' => [ 'ApplicationDetail', ],
			'members'  => [ 'ApplicationDetail' => [ 'shape' => 'ApplicationDetail', ], ],
		],
		'CreateApplicationSnapshotRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'ApplicationName', 'SnapshotName', ],
			'members'  => [
				'ApplicationName' => [ 'shape' => 'ApplicationName', ],
				'SnapshotName'    => [ 'shape' => 'SnapshotName', ],
			],
		],
		'CreateApplicationSnapshotResponse'                     => [ 'type' => 'structure', 'members' => [], ],
		'DeleteApplicationCloudWatchLoggingOptionRequest'       => [
			'type'     => 'structure',
			'required' => [
				'ApplicationName',
				'CurrentApplicationVersionId',
				'CloudWatchLoggingOptionId',
			],
			'members'  => [
				'ApplicationName'             => [ 'shape' => 'ApplicationName', ],
				'CurrentApplicationVersionId' => [ 'shape' => 'ApplicationVersionId', ],
				'CloudWatchLoggingOptionId'   => [ 'shape' => 'Id', ],
			],
		],
		'DeleteApplicationCloudWatchLoggingOptionResponse'      => [
			'type'    => 'structure',
			'members' => [
				'ApplicationARN'                      => [ 'shape' => 'ResourceARN', ],
				'ApplicationVersionId'                => [ 'shape' => 'ApplicationVersionId', ],
				'CloudWatchLoggingOptionDescriptions' => [ 'shape' => 'CloudWatchLoggingOptionDescriptions', ],
			],
		],
		'DeleteApplicationInputProcessingConfigurationRequest'  => [
			'type'     => 'structure',
			'required' => [
				'ApplicationName',
				'CurrentApplicationVersionId',
				'InputId',
			],
			'members'  => [
				'ApplicationName'             => [ 'shape' => 'ApplicationName', ],
				'CurrentApplicationVersionId' => [ 'shape' => 'ApplicationVersionId', ],
				'InputId'                     => [ 'shape' => 'Id', ],
			],
		],
		'DeleteApplicationInputProcessingConfigurationResponse' => [
			'type'    => 'structure',
			'members' => [
				'ApplicationARN'       => [ 'shape' => 'ResourceARN', ],
				'ApplicationVersionId' => [ 'shape' => 'ApplicationVersionId', ],
			],
		],
		'DeleteApplicationOutputRequest'                        => [
			'type'     => 'structure',
			'required' => [
				'ApplicationName',
				'CurrentApplicationVersionId',
				'OutputId',
			],
			'members'  => [
				'ApplicationName'             => [ 'shape' => 'ApplicationName', ],
				'CurrentApplicationVersionId' => [ 'shape' => 'ApplicationVersionId', ],
				'OutputId'                    => [ 'shape' => 'Id', ],
			],
		],
		'DeleteApplicationOutputResponse'                       => [
			'type'    => 'structure',
			'members' => [
				'ApplicationARN'       => [ 'shape' => 'ResourceARN', ],
				'ApplicationVersionId' => [ 'shape' => 'ApplicationVersionId', ],
			],
		],
		'DeleteApplicationReferenceDataSourceRequest'           => [
			'type'     => 'structure',
			'required' => [
				'ApplicationName',
				'CurrentApplicationVersionId',
				'ReferenceId',
			],
			'members'  => [
				'ApplicationName'             => [ 'shape' => 'ApplicationName', ],
				'CurrentApplicationVersionId' => [ 'shape' => 'ApplicationVersionId', ],
				'ReferenceId'                 => [ 'shape' => 'Id', ],
			],
		],
		'DeleteApplicationReferenceDataSourceResponse'          => [
			'type'    => 'structure',
			'members' => [
				'ApplicationARN'       => [ 'shape' => 'ResourceARN', ],
				'ApplicationVersionId' => [ 'shape' => 'ApplicationVersionId', ],
			],
		],
		'DeleteApplicationRequest'                              => [
			'type'     => 'structure',
			'required' => [
				'ApplicationName',
				'CreateTimestamp',
			],
			'members'  => [
				'ApplicationName' => [ 'shape' => 'ApplicationName', ],
				'CreateTimestamp' => [ 'shape' => 'Timestamp', ],
			],
		],
		'DeleteApplicationResponse'                             => [ 'type' => 'structure', 'members' => [], ],
		'DeleteApplicationSnapshotRequest'                      => [
			'type'     => 'structure',
			'required' => [
				'ApplicationName',
				'SnapshotName',
				'SnapshotCreationTimestamp',
			],
			'members'  => [
				'ApplicationName'           => [ 'shape' => 'ApplicationName', ],
				'SnapshotName'              => [ 'shape' => 'SnapshotName', ],
				'SnapshotCreationTimestamp' => [ 'shape' => 'Timestamp', ],
			],
		],
		'DeleteApplicationSnapshotResponse'                     => [ 'type' => 'structure', 'members' => [], ],
		'DescribeApplicationRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'ApplicationName', ],
			'members'  => [
				'ApplicationName'          => [ 'shape' => 'ApplicationName', ],
				'IncludeAdditionalDetails' => [ 'shape' => 'BooleanObject', ],
			],
		],
		'DescribeApplicationResponse'                           => [
			'type'     => 'structure',
			'required' => [ 'ApplicationDetail', ],
			'members'  => [ 'ApplicationDetail' => [ 'shape' => 'ApplicationDetail', ], ],
		],
		'DescribeApplicationSnapshotRequest'                    => [
			'type'     => 'structure',
			'required' => [
				'ApplicationName',
				'SnapshotName',
			],
			'members'  => [
				'ApplicationName' => [ 'shape' => 'ApplicationName', ],
				'SnapshotName'    => [ 'shape' => 'SnapshotName', ],
			],
		],
		'DescribeApplicationSnapshotResponse'                   => [
			'type'     => 'structure',
			'required' => [ 'SnapshotDetails', ],
			'members'  => [ 'SnapshotDetails' => [ 'shape' => 'SnapshotDetails', ], ],
		],
		'DestinationSchema'                                     => [
			'type'     => 'structure',
			'required' => [ 'RecordFormatType', ],
			'members'  => [ 'RecordFormatType' => [ 'shape' => 'RecordFormatType', ], ],
		],
		'DiscoverInputSchemaRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'ServiceExecutionRole', ],
			'members'  => [
				'ResourceARN'                        => [ 'shape' => 'ResourceARN', ],
				'ServiceExecutionRole'               => [ 'shape' => 'RoleARN', ],
				'InputStartingPositionConfiguration' => [ 'shape' => 'InputStartingPositionConfiguration', ],
				'S3Configuration'                    => [ 'shape' => 'S3Configuration', ],
				'InputProcessingConfiguration'       => [ 'shape' => 'InputProcessingConfiguration', ],
			],
		],
		'DiscoverInputSchemaResponse'                           => [
			'type'    => 'structure',
			'members' => [
				'InputSchema'           => [ 'shape' => 'SourceSchema', ],
				'ParsedInputRecords'    => [ 'shape' => 'ParsedInputRecords', ],
				'ProcessedInputRecords' => [ 'shape' => 'ProcessedInputRecords', ],
				'RawInputRecords'       => [ 'shape' => 'RawInputRecords', ],
			],
		],
		'EnvironmentProperties'                                 => [
			'type'     => 'structure',
			'required' => [ 'PropertyGroups', ],
			'members'  => [ 'PropertyGroups' => [ 'shape' => 'PropertyGroups', ], ],
		],
		'EnvironmentPropertyDescriptions'                       => [
			'type'    => 'structure',
			'members' => [ 'PropertyGroupDescriptions' => [ 'shape' => 'PropertyGroups', ], ],
		],
		'EnvironmentPropertyUpdates'                            => [
			'type'     => 'structure',
			'required' => [ 'PropertyGroups', ],
			'members'  => [ 'PropertyGroups' => [ 'shape' => 'PropertyGroups', ], ],
		],
		'ErrorMessage'                                          => [ 'type' => 'string', ],
		'FileKey'                                               => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ],
		'FlinkApplicationConfiguration'                         => [
			'type'    => 'structure',
			'members' => [
				'CheckpointConfiguration'  => [ 'shape' => 'CheckpointConfiguration', ],
				'MonitoringConfiguration'  => [ 'shape' => 'MonitoringConfiguration', ],
				'ParallelismConfiguration' => [ 'shape' => 'ParallelismConfiguration', ],
			],
		],
		'FlinkApplicationConfigurationDescription'              => [
			'type'    => 'structure',
			'members' => [
				'CheckpointConfigurationDescription'  => [ 'shape' => 'CheckpointConfigurationDescription', ],
				'MonitoringConfigurationDescription'  => [ 'shape' => 'MonitoringConfigurationDescription', ],
				'ParallelismConfigurationDescription' => [ 'shape' => 'ParallelismConfigurationDescription', ],
				'JobPlanDescription'                  => [ 'shape' => 'JobPlanDescription', ],
			],
		],
		'FlinkApplicationConfigurationUpdate'                   => [
			'type'    => 'structure',
			'members' => [
				'CheckpointConfigurationUpdate'  => [ 'shape' => 'CheckpointConfigurationUpdate', ],
				'MonitoringConfigurationUpdate'  => [ 'shape' => 'MonitoringConfigurationUpdate', ],
				'ParallelismConfigurationUpdate' => [ 'shape' => 'ParallelismConfigurationUpdate', ],
			],
		],
		'Id'                                                    => [
			'type'    => 'string',
			'max'     => 50,
			'min'     => 1,
			'pattern' => '[a-zA-Z0-9_.-]+',
		],
		'InAppStreamName'                                       => [ 'type' => 'string', 'max' => 32, 'min' => 1, ],
		'InAppStreamNames'                                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'InAppStreamName', ],
		],
		'InAppTableName'                                        => [ 'type' => 'string', 'max' => 32, 'min' => 1, ],
		'Input'                                                 => [
			'type'     => 'structure',
			'required' => [ 'NamePrefix', 'InputSchema', ],
			'members'  => [
				'NamePrefix'                   => [ 'shape' => 'InAppStreamName', ],
				'InputProcessingConfiguration' => [ 'shape' => 'InputProcessingConfiguration', ],
				'KinesisStreamsInput'          => [ 'shape' => 'KinesisStreamsInput', ],
				'KinesisFirehoseInput'         => [ 'shape' => 'KinesisFirehoseInput', ],
				'InputParallelism'             => [ 'shape' => 'InputParallelism', ],
				'InputSchema'                  => [ 'shape' => 'SourceSchema', ],
			],
		],
		'InputDescription'                                      => [
			'type'    => 'structure',
			'members' => [
				'InputId'                                 => [ 'shape' => 'Id', ],
				'NamePrefix'                              => [ 'shape' => 'InAppStreamName', ],
				'InAppStreamNames'                        => [ 'shape' => 'InAppStreamNames', ],
				'InputProcessingConfigurationDescription' => [ 'shape' => 'InputProcessingConfigurationDescription', ],
				'KinesisStreamsInputDescription'          => [ 'shape' => 'KinesisStreamsInputDescription', ],
				'KinesisFirehoseInputDescription'         => [ 'shape' => 'KinesisFirehoseInputDescription', ],
				'InputSchema'                             => [ 'shape' => 'SourceSchema', ],
				'InputParallelism'                        => [ 'shape' => 'InputParallelism', ],
				'InputStartingPositionConfiguration'      => [ 'shape' => 'InputStartingPositionConfiguration', ],
			],
		],
		'InputDescriptions'                                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'InputDescription', ],
		],
		'InputLambdaProcessor'                                  => [
			'type'     => 'structure',
			'required' => [ 'ResourceARN', ],
			'members'  => [ 'ResourceARN' => [ 'shape' => 'ResourceARN', ], ],
		],
		'InputLambdaProcessorDescription'                       => [
			'type'     => 'structure',
			'required' => [ 'ResourceARN', ],
			'members'  => [
				'ResourceARN' => [ 'shape' => 'ResourceARN', ],
				'RoleARN'     => [ 'shape' => 'RoleARN', ],
			],
		],
		'InputLambdaProcessorUpdate'                            => [
			'type'     => 'structure',
			'required' => [ 'ResourceARNUpdate', ],
			'members'  => [ 'ResourceARNUpdate' => [ 'shape' => 'ResourceARN', ], ],
		],
		'InputParallelism'                                      => [
			'type'    => 'structure',
			'members' => [ 'Count' => [ 'shape' => 'InputParallelismCount', ], ],
		],
		'InputParallelismCount'                                 => [ 'type' => 'integer', 'max' => 64, 'min' => 1, ],
		'InputParallelismUpdate'                                => [
			'type'     => 'structure',
			'required' => [ 'CountUpdate', ],
			'members'  => [ 'CountUpdate' => [ 'shape' => 'InputParallelismCount', ], ],
		],
		'InputProcessingConfiguration'                          => [
			'type'     => 'structure',
			'required' => [ 'InputLambdaProcessor', ],
			'members'  => [ 'InputLambdaProcessor' => [ 'shape' => 'InputLambdaProcessor', ], ],
		],
		'InputProcessingConfigurationDescription'               => [
			'type'    => 'structure',
			'members' => [ 'InputLambdaProcessorDescription' => [ 'shape' => 'InputLambdaProcessorDescription', ], ],
		],
		'InputProcessingConfigurationUpdate'                    => [
			'type'     => 'structure',
			'required' => [ 'InputLambdaProcessorUpdate', ],
			'members'  => [ 'InputLambdaProcessorUpdate' => [ 'shape' => 'InputLambdaProcessorUpdate', ], ],
		],
		'InputSchemaUpdate'                                     => [
			'type'    => 'structure',
			'members' => [
				'RecordFormatUpdate'   => [ 'shape' => 'RecordFormat', ],
				'RecordEncodingUpdate' => [ 'shape' => 'RecordEncoding', ],
				'RecordColumnUpdates'  => [ 'shape' => 'RecordColumns', ],
			],
		],
		'InputStartingPosition'                                 => [
			'type' => 'string',
			'enum' => [
				'NOW',
				'TRIM_HORIZON',
				'LAST_STOPPED_POINT',
			],
		],
		'InputStartingPositionConfiguration'                    => [
			'type'    => 'structure',
			'members' => [ 'InputStartingPosition' => [ 'shape' => 'InputStartingPosition', ], ],
		],
		'InputUpdate'                                           => [
			'type'     => 'structure',
			'required' => [ 'InputId', ],
			'members'  => [
				'InputId'                            => [ 'shape' => 'Id', ],
				'NamePrefixUpdate'                   => [ 'shape' => 'InAppStreamName', ],
				'InputProcessingConfigurationUpdate' => [ 'shape' => 'InputProcessingConfigurationUpdate', ],
				'KinesisStreamsInputUpdate'          => [ 'shape' => 'KinesisStreamsInputUpdate', ],
				'KinesisFirehoseInputUpdate'         => [ 'shape' => 'KinesisFirehoseInputUpdate', ],
				'InputSchemaUpdate'                  => [ 'shape' => 'InputSchemaUpdate', ],
				'InputParallelismUpdate'             => [ 'shape' => 'InputParallelismUpdate', ],
			],
		],
		'InputUpdates'                                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'InputUpdate', ],
		],
		'Inputs'                                                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Input', ],
		],
		'InvalidApplicationConfigurationException'              => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'InvalidArgumentException'                              => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'InvalidRequestException'                               => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'JSONMappingParameters'                                 => [
			'type'     => 'structure',
			'required' => [ 'RecordRowPath', ],
			'members'  => [ 'RecordRowPath' => [ 'shape' => 'RecordRowPath', ], ],
		],
		'JobPlanDescription'                                    => [ 'type' => 'string', ],
		'KinesisAnalyticsARN'                                   => [
			'type'    => 'string',
			'max'     => 2048,
			'min'     => 1,
			'pattern' => 'arn:aws:kinesisanalytics:[a-z]{2}-[a-z]+-\\d{1}+:\\d{12}+:application/[a-zA-Z0-9_.-]{1,128}',
		],
		'KinesisFirehoseInput'                                  => [
			'type'     => 'structure',
			'required' => [ 'ResourceARN', ],
			'members'  => [ 'ResourceARN' => [ 'shape' => 'ResourceARN', ], ],
		],
		'KinesisFirehoseInputDescription'                       => [
			'type'     => 'structure',
			'required' => [ 'ResourceARN', ],
			'members'  => [
				'ResourceARN' => [ 'shape' => 'ResourceARN', ],
				'RoleARN'     => [ 'shape' => 'RoleARN', ],
			],
		],
		'KinesisFirehoseInputUpdate'                            => [
			'type'     => 'structure',
			'required' => [ 'ResourceARNUpdate', ],
			'members'  => [ 'ResourceARNUpdate' => [ 'shape' => 'ResourceARN', ], ],
		],
		'KinesisFirehoseOutput'                                 => [
			'type'     => 'structure',
			'required' => [ 'ResourceARN', ],
			'members'  => [ 'ResourceARN' => [ 'shape' => 'ResourceARN', ], ],
		],
		'KinesisFirehoseOutputDescription'                      => [
			'type'     => 'structure',
			'required' => [ 'ResourceARN', ],
			'members'  => [
				'ResourceARN' => [ 'shape' => 'ResourceARN', ],
				'RoleARN'     => [ 'shape' => 'RoleARN', ],
			],
		],
		'KinesisFirehoseOutputUpdate'                           => [
			'type'     => 'structure',
			'required' => [ 'ResourceARNUpdate', ],
			'members'  => [ 'ResourceARNUpdate' => [ 'shape' => 'ResourceARN', ], ],
		],
		'KinesisStreamsInput'                                   => [
			'type'     => 'structure',
			'required' => [ 'ResourceARN', ],
			'members'  => [ 'ResourceARN' => [ 'shape' => 'ResourceARN', ], ],
		],
		'KinesisStreamsInputDescription'                        => [
			'type'     => 'structure',
			'required' => [ 'ResourceARN', ],
			'members'  => [
				'ResourceARN' => [ 'shape' => 'ResourceARN', ],
				'RoleARN'     => [ 'shape' => 'RoleARN', ],
			],
		],
		'KinesisStreamsInputUpdate'                             => [
			'type'     => 'structure',
			'required' => [ 'ResourceARNUpdate', ],
			'members'  => [ 'ResourceARNUpdate' => [ 'shape' => 'ResourceARN', ], ],
		],
		'KinesisStreamsOutput'                                  => [
			'type'     => 'structure',
			'required' => [ 'ResourceARN', ],
			'members'  => [ 'ResourceARN' => [ 'shape' => 'ResourceARN', ], ],
		],
		'KinesisStreamsOutputDescription'                       => [
			'type'     => 'structure',
			'required' => [ 'ResourceARN', ],
			'members'  => [
				'ResourceARN' => [ 'shape' => 'ResourceARN', ],
				'RoleARN'     => [ 'shape' => 'RoleARN', ],
			],
		],
		'KinesisStreamsOutputUpdate'                            => [
			'type'     => 'structure',
			'required' => [ 'ResourceARNUpdate', ],
			'members'  => [ 'ResourceARNUpdate' => [ 'shape' => 'ResourceARN', ], ],
		],
		'LambdaOutput'                                          => [
			'type'     => 'structure',
			'required' => [ 'ResourceARN', ],
			'members'  => [ 'ResourceARN' => [ 'shape' => 'ResourceARN', ], ],
		],
		'LambdaOutputDescription'                               => [
			'type'     => 'structure',
			'required' => [ 'ResourceARN', ],
			'members'  => [
				'ResourceARN' => [ 'shape' => 'ResourceARN', ],
				'RoleARN'     => [ 'shape' => 'RoleARN', ],
			],
		],
		'LambdaOutputUpdate'                                    => [
			'type'     => 'structure',
			'required' => [ 'ResourceARNUpdate', ],
			'members'  => [ 'ResourceARNUpdate' => [ 'shape' => 'ResourceARN', ], ],
		],
		'LimitExceededException'                                => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'ListApplicationSnapshotsRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'ApplicationName', ],
			'members'  => [
				'ApplicationName' => [ 'shape' => 'ApplicationName', ],
				'Limit'           => [ 'shape' => 'ListSnapshotsInputLimit', ],
				'NextToken'       => [ 'shape' => 'NextToken', ],
			],
		],
		'ListApplicationSnapshotsResponse'                      => [
			'type'    => 'structure',
			'members' => [
				'SnapshotSummaries' => [ 'shape' => 'SnapshotSummaries', ],
				'NextToken'         => [ 'shape' => 'NextToken', ],
			],
		],
		'ListApplicationsInputLimit'                            => [ 'type' => 'integer', 'max' => 50, 'min' => 1, ],
		'ListApplicationsRequest'                               => [
			'type'    => 'structure',
			'members' => [
				'Limit'     => [ 'shape' => 'ListApplicationsInputLimit', ],
				'NextToken' => [ 'shape' => 'ApplicationName', ],
			],
		],
		'ListApplicationsResponse'                              => [
			'type'     => 'structure',
			'required' => [ 'ApplicationSummaries', ],
			'members'  => [
				'ApplicationSummaries' => [ 'shape' => 'ApplicationSummaries', ],
				'NextToken'            => [ 'shape' => 'ApplicationName', ],
			],
		],
		'ListSnapshotsInputLimit'                               => [ 'type' => 'integer', 'max' => 50, 'min' => 1, ],
		'ListTagsForResourceRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'ResourceARN', ],
			'members'  => [ 'ResourceARN' => [ 'shape' => 'KinesisAnalyticsARN', ], ],
		],
		'ListTagsForResourceResponse'                           => [
			'type'    => 'structure',
			'members' => [ 'Tags' => [ 'shape' => 'Tags', ], ],
		],
		'LogLevel'                                              => [
			'type' => 'string',
			'enum' => [ 'INFO', 'WARN', 'ERROR', 'DEBUG', ],
		],
		'LogStreamARN'                                          => [
			'type'    => 'string',
			'max'     => 2048,
			'min'     => 1,
			'pattern' => 'arn:.*',
		],
		'MappingParameters'                                     => [
			'type'    => 'structure',
			'members' => [
				'JSONMappingParameters' => [ 'shape' => 'JSONMappingParameters', ],
				'CSVMappingParameters'  => [ 'shape' => 'CSVMappingParameters', ],
			],
		],
		'MetricsLevel'                                          => [
			'type' => 'string',
			'enum' => [
				'APPLICATION',
				'TASK',
				'OPERATOR',
				'PARALLELISM',
			],
		],
		'MinPauseBetweenCheckpoints'                            => [ 'type' => 'long', 'min' => 0, ],
		'MonitoringConfiguration'                               => [
			'type'     => 'structure',
			'required' => [ 'ConfigurationType', ],
			'members'  => [
				'ConfigurationType' => [ 'shape' => 'ConfigurationType', ],
				'MetricsLevel'      => [ 'shape' => 'MetricsLevel', ],
				'LogLevel'          => [ 'shape' => 'LogLevel', ],
			],
		],
		'MonitoringConfigurationDescription'                    => [
			'type'    => 'structure',
			'members' => [
				'ConfigurationType' => [ 'shape' => 'ConfigurationType', ],
				'MetricsLevel'      => [ 'shape' => 'MetricsLevel', ],
				'LogLevel'          => [ 'shape' => 'LogLevel', ],
			],
		],
		'MonitoringConfigurationUpdate'                         => [
			'type'    => 'structure',
			'members' => [
				'ConfigurationTypeUpdate' => [ 'shape' => 'ConfigurationType', ],
				'MetricsLevelUpdate'      => [ 'shape' => 'MetricsLevel', ],
				'LogLevelUpdate'          => [ 'shape' => 'LogLevel', ],
			],
		],
		'NextToken'                                             => [ 'type' => 'string', 'max' => 512, 'min' => 1, ],
		'ObjectVersion'                                         => [ 'type' => 'string', ],
		'Output'                                                => [
			'type'     => 'structure',
			'required' => [ 'Name', 'DestinationSchema', ],
			'members'  => [
				'Name'                  => [ 'shape' => 'InAppStreamName', ],
				'KinesisStreamsOutput'  => [ 'shape' => 'KinesisStreamsOutput', ],
				'KinesisFirehoseOutput' => [ 'shape' => 'KinesisFirehoseOutput', ],
				'LambdaOutput'          => [ 'shape' => 'LambdaOutput', ],
				'DestinationSchema'     => [ 'shape' => 'DestinationSchema', ],
			],
		],
		'OutputDescription'                                     => [
			'type'    => 'structure',
			'members' => [
				'OutputId'                         => [ 'shape' => 'Id', ],
				'Name'                             => [ 'shape' => 'InAppStreamName', ],
				'KinesisStreamsOutputDescription'  => [ 'shape' => 'KinesisStreamsOutputDescription', ],
				'KinesisFirehoseOutputDescription' => [ 'shape' => 'KinesisFirehoseOutputDescription', ],
				'LambdaOutputDescription'          => [ 'shape' => 'LambdaOutputDescription', ],
				'DestinationSchema'                => [ 'shape' => 'DestinationSchema', ],
			],
		],
		'OutputDescriptions'                                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'OutputDescription', ],
		],
		'OutputUpdate'                                          => [
			'type'     => 'structure',
			'required' => [ 'OutputId', ],
			'members'  => [
				'OutputId'                    => [ 'shape' => 'Id', ],
				'NameUpdate'                  => [ 'shape' => 'InAppStreamName', ],
				'KinesisStreamsOutputUpdate'  => [ 'shape' => 'KinesisStreamsOutputUpdate', ],
				'KinesisFirehoseOutputUpdate' => [ 'shape' => 'KinesisFirehoseOutputUpdate', ],
				'LambdaOutputUpdate'          => [ 'shape' => 'LambdaOutputUpdate', ],
				'DestinationSchemaUpdate'     => [ 'shape' => 'DestinationSchema', ],
			],
		],
		'OutputUpdates'                                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'OutputUpdate', ],
		],
		'Outputs'                                               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Output', ],
		],
		'Parallelism'                                           => [ 'type' => 'integer', 'min' => 1, ],
		'ParallelismConfiguration'                              => [
			'type'     => 'structure',
			'required' => [ 'ConfigurationType', ],
			'members'  => [
				'ConfigurationType'  => [ 'shape' => 'ConfigurationType', ],
				'Parallelism'        => [ 'shape' => 'Parallelism', ],
				'ParallelismPerKPU'  => [ 'shape' => 'ParallelismPerKPU', ],
				'AutoScalingEnabled' => [ 'shape' => 'BooleanObject', ],
			],
		],
		'ParallelismConfigurationDescription'                   => [
			'type'    => 'structure',
			'members' => [
				'ConfigurationType'  => [ 'shape' => 'ConfigurationType', ],
				'Parallelism'        => [ 'shape' => 'Parallelism', ],
				'ParallelismPerKPU'  => [ 'shape' => 'ParallelismPerKPU', ],
				'CurrentParallelism' => [ 'shape' => 'Parallelism', ],
				'AutoScalingEnabled' => [ 'shape' => 'BooleanObject', ],
			],
		],
		'ParallelismConfigurationUpdate'                        => [
			'type'    => 'structure',
			'members' => [
				'ConfigurationTypeUpdate'  => [ 'shape' => 'ConfigurationType', ],
				'ParallelismUpdate'        => [ 'shape' => 'Parallelism', ],
				'ParallelismPerKPUUpdate'  => [ 'shape' => 'ParallelismPerKPU', ],
				'AutoScalingEnabledUpdate' => [ 'shape' => 'BooleanObject', ],
			],
		],
		'ParallelismPerKPU'                                     => [ 'type' => 'integer', 'min' => 1, ],
		'ParsedInputRecord'                                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ParsedInputRecordField', ],
		],
		'ParsedInputRecordField'                                => [ 'type' => 'string', ],
		'ParsedInputRecords'                                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ParsedInputRecord', ],
		],
		'ProcessedInputRecord'                                  => [ 'type' => 'string', ],
		'ProcessedInputRecords'                                 => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ProcessedInputRecord', ],
		],
		'PropertyGroup'                                         => [
			'type'     => 'structure',
			'required' => [
				'PropertyGroupId',
				'PropertyMap',
			],
			'members'  => [
				'PropertyGroupId' => [ 'shape' => 'Id', ],
				'PropertyMap'     => [ 'shape' => 'PropertyMap', ],
			],
		],
		'PropertyGroups'                                        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'PropertyGroup', ],
			'max'    => 50,
		],
		'PropertyKey'                                           => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ],
		'PropertyMap'                                           => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'PropertyKey', ],
			'value' => [ 'shape' => 'PropertyValue', ],
			'max'   => 50,
			'min'   => 1,
		],
		'PropertyValue'                                         => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ],
		'RawInputRecord'                                        => [ 'type' => 'string', ],
		'RawInputRecords'                                       => [
			'type'   => 'list',
			'member' => [ 'shape' => 'RawInputRecord', ],
		],
		'RecordColumn'                                          => [
			'type'     => 'structure',
			'required' => [ 'Name', 'SqlType', ],
			'members'  => [
				'Name'    => [ 'shape' => 'RecordColumnName', ],
				'Mapping' => [ 'shape' => 'RecordColumnMapping', ],
				'SqlType' => [ 'shape' => 'RecordColumnSqlType', ],
			],
		],
		'RecordColumnDelimiter'                                 => [ 'type' => 'string', 'min' => 1, ],
		'RecordColumnMapping'                                   => [ 'type' => 'string', ],
		'RecordColumnName'                                      => [ 'type' => 'string', ],
		'RecordColumnSqlType'                                   => [ 'type' => 'string', 'min' => 1, ],
		'RecordColumns'                                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'RecordColumn', ],
			'max'    => 1000,
			'min'    => 1,
		],
		'RecordEncoding'                                        => [ 'type' => 'string', 'pattern' => 'UTF-8', ],
		'RecordFormat'                                          => [
			'type'     => 'structure',
			'required' => [ 'RecordFormatType', ],
			'members'  => [
				'RecordFormatType'  => [ 'shape' => 'RecordFormatType', ],
				'MappingParameters' => [ 'shape' => 'MappingParameters', ],
			],
		],
		'RecordFormatType'                                      => [
			'type' => 'string',
			'enum' => [ 'JSON', 'CSV', ],
		],
		'RecordRowDelimiter'                                    => [ 'type' => 'string', 'min' => 1, ],
		'RecordRowPath'                                         => [ 'type' => 'string', 'min' => 1, ],
		'ReferenceDataSource'                                   => [
			'type'     => 'structure',
			'required' => [ 'TableName', 'ReferenceSchema', ],
			'members'  => [
				'TableName'             => [ 'shape' => 'InAppTableName', ],
				'S3ReferenceDataSource' => [ 'shape' => 'S3ReferenceDataSource', ],
				'ReferenceSchema'       => [ 'shape' => 'SourceSchema', ],
			],
		],
		'ReferenceDataSourceDescription'                        => [
			'type'     => 'structure',
			'required' => [
				'ReferenceId',
				'TableName',
				'S3ReferenceDataSourceDescription',
			],
			'members'  => [
				'ReferenceId'                      => [ 'shape' => 'Id', ],
				'TableName'                        => [ 'shape' => 'InAppTableName', ],
				'S3ReferenceDataSourceDescription' => [ 'shape' => 'S3ReferenceDataSourceDescription', ],
				'ReferenceSchema'                  => [ 'shape' => 'SourceSchema', ],
			],
		],
		'ReferenceDataSourceDescriptions'                       => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ReferenceDataSourceDescription', ],
		],
		'ReferenceDataSourceUpdate'                             => [
			'type'     => 'structure',
			'required' => [ 'ReferenceId', ],
			'members'  => [
				'ReferenceId'                 => [ 'shape' => 'Id', ],
				'TableNameUpdate'             => [ 'shape' => 'InAppTableName', ],
				'S3ReferenceDataSourceUpdate' => [ 'shape' => 'S3ReferenceDataSourceUpdate', ],
				'ReferenceSchemaUpdate'       => [ 'shape' => 'SourceSchema', ],
			],
		],
		'ReferenceDataSourceUpdates'                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ReferenceDataSourceUpdate', ],
		],
		'ReferenceDataSources'                                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ReferenceDataSource', ],
		],
		'ResourceARN'                                           => [
			'type'    => 'string',
			'max'     => 2048,
			'min'     => 1,
			'pattern' => 'arn:.*',
		],
		'ResourceInUseException'                                => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'ResourceNotFoundException'                             => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'ResourceProvisionedThroughputExceededException'        => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'RoleARN'                                               => [
			'type'    => 'string',
			'max'     => 2048,
			'min'     => 1,
			'pattern' => 'arn:aws:iam::\\d{12}:role/?[a-zA-Z_0-9+=,.@\\-_/]+',
		],
		'RunConfiguration'                                      => [
			'type'    => 'structure',
			'members' => [
				'SqlRunConfigurations'            => [ 'shape' => 'SqlRunConfigurations', ],
				'ApplicationRestoreConfiguration' => [ 'shape' => 'ApplicationRestoreConfiguration', ],
			],
		],
		'RunConfigurationDescription'                           => [
			'type'    => 'structure',
			'members' => [ 'ApplicationRestoreConfigurationDescription' => [ 'shape' => 'ApplicationRestoreConfiguration', ], ],
		],
		'RunConfigurationUpdate'                                => [
			'type'    => 'structure',
			'members' => [ 'ApplicationRestoreConfiguration' => [ 'shape' => 'ApplicationRestoreConfiguration', ], ],
		],
		'RuntimeEnvironment'                                    => [
			'type' => 'string',
			'enum' => [ 'SQL-1_0', 'FLINK-1_6', ],
		],
		'S3ApplicationCodeLocationDescription'                  => [
			'type'     => 'structure',
			'required' => [ 'BucketARN', 'FileKey', ],
			'members'  => [
				'BucketARN'     => [ 'shape' => 'BucketARN', ],
				'FileKey'       => [ 'shape' => 'FileKey', ],
				'ObjectVersion' => [ 'shape' => 'ObjectVersion', ],
			],
		],
		'S3Configuration'                                       => [
			'type'     => 'structure',
			'required' => [ 'BucketARN', 'FileKey', ],
			'members'  => [
				'BucketARN' => [ 'shape' => 'BucketARN', ],
				'FileKey'   => [ 'shape' => 'FileKey', ],
			],
		],
		'S3ContentLocation'                                     => [
			'type'     => 'structure',
			'required' => [ 'BucketARN', 'FileKey', ],
			'members'  => [
				'BucketARN'     => [ 'shape' => 'BucketARN', ],
				'FileKey'       => [ 'shape' => 'FileKey', ],
				'ObjectVersion' => [ 'shape' => 'ObjectVersion', ],
			],
		],
		'S3ContentLocationUpdate'                               => [
			'type'    => 'structure',
			'members' => [
				'BucketARNUpdate'     => [ 'shape' => 'BucketARN', ],
				'FileKeyUpdate'       => [ 'shape' => 'FileKey', ],
				'ObjectVersionUpdate' => [ 'shape' => 'ObjectVersion', ],
			],
		],
		'S3ReferenceDataSource'                                 => [
			'type'    => 'structure',
			'members' => [
				'BucketARN' => [ 'shape' => 'BucketARN', ],
				'FileKey'   => [ 'shape' => 'FileKey', ],
			],
		],
		'S3ReferenceDataSourceDescription'                      => [
			'type'     => 'structure',
			'required' => [ 'BucketARN', 'FileKey', ],
			'members'  => [
				'BucketARN'        => [ 'shape' => 'BucketARN', ],
				'FileKey'          => [ 'shape' => 'FileKey', ],
				'ReferenceRoleARN' => [ 'shape' => 'RoleARN', ],
			],
		],
		'S3ReferenceDataSourceUpdate'                           => [
			'type'    => 'structure',
			'members' => [
				'BucketARNUpdate' => [ 'shape' => 'BucketARN', ],
				'FileKeyUpdate'   => [ 'shape' => 'FileKey', ],
			],
		],
		'ServiceUnavailableException'                           => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
			'fault'     => true,
		],
		'SnapshotDetails'                                       => [
			'type'     => 'structure',
			'required' => [
				'SnapshotName',
				'SnapshotStatus',
				'ApplicationVersionId',
			],
			'members'  => [
				'SnapshotName'              => [ 'shape' => 'SnapshotName', ],
				'SnapshotStatus'            => [ 'shape' => 'SnapshotStatus', ],
				'ApplicationVersionId'      => [ 'shape' => 'ApplicationVersionId', ],
				'SnapshotCreationTimestamp' => [ 'shape' => 'Timestamp', ],
			],
		],
		'SnapshotName'                                          => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[a-zA-Z0-9_.-]+',
		],
		'SnapshotStatus'                                        => [
			'type' => 'string',
			'enum' => [
				'CREATING',
				'READY',
				'DELETING',
				'FAILED',
			],
		],
		'SnapshotSummaries'                                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'SnapshotDetails', ],
		],
		'SourceSchema'                                          => [
			'type'     => 'structure',
			'required' => [ 'RecordFormat', 'RecordColumns', ],
			'members'  => [
				'RecordFormat'   => [ 'shape' => 'RecordFormat', ],
				'RecordEncoding' => [ 'shape' => 'RecordEncoding', ],
				'RecordColumns'  => [ 'shape' => 'RecordColumns', ],
			],
		],
		'SqlApplicationConfiguration'                           => [
			'type'    => 'structure',
			'members' => [
				'Inputs'               => [ 'shape' => 'Inputs', ],
				'Outputs'              => [ 'shape' => 'Outputs', ],
				'ReferenceDataSources' => [ 'shape' => 'ReferenceDataSources', ],
			],
		],
		'SqlApplicationConfigurationDescription'                => [
			'type'    => 'structure',
			'members' => [
				'InputDescriptions'               => [ 'shape' => 'InputDescriptions', ],
				'OutputDescriptions'              => [ 'shape' => 'OutputDescriptions', ],
				'ReferenceDataSourceDescriptions' => [ 'shape' => 'ReferenceDataSourceDescriptions', ],
			],
		],
		'SqlApplicationConfigurationUpdate'                     => [
			'type'    => 'structure',
			'members' => [
				'InputUpdates'               => [ 'shape' => 'InputUpdates', ],
				'OutputUpdates'              => [ 'shape' => 'OutputUpdates', ],
				'ReferenceDataSourceUpdates' => [ 'shape' => 'ReferenceDataSourceUpdates', ],
			],
		],
		'SqlRunConfiguration'                                   => [
			'type'     => 'structure',
			'required' => [
				'InputId',
				'InputStartingPositionConfiguration',
			],
			'members'  => [
				'InputId'                            => [ 'shape' => 'Id', ],
				'InputStartingPositionConfiguration' => [ 'shape' => 'InputStartingPositionConfiguration', ],
			],
		],
		'SqlRunConfigurations'                                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'SqlRunConfiguration', ],
		],
		'StartApplicationRequest'                               => [
			'type'     => 'structure',
			'required' => [
				'ApplicationName',
				'RunConfiguration',
			],
			'members'  => [
				'ApplicationName'  => [ 'shape' => 'ApplicationName', ],
				'RunConfiguration' => [ 'shape' => 'RunConfiguration', ],
			],
		],
		'StartApplicationResponse'                              => [ 'type' => 'structure', 'members' => [], ],
		'StopApplicationRequest'                                => [
			'type'     => 'structure',
			'required' => [ 'ApplicationName', ],
			'members'  => [ 'ApplicationName' => [ 'shape' => 'ApplicationName', ], ],
		],
		'StopApplicationResponse'                               => [ 'type' => 'structure', 'members' => [], ],
		'Tag'                                                   => [
			'type'     => 'structure',
			'required' => [ 'Key', ],
			'members'  => [
				'Key'   => [ 'shape' => 'TagKey', ],
				'Value' => [ 'shape' => 'TagValue', ],
			],
		],
		'TagKey'                                                => [ 'type' => 'string', 'max' => 128, 'min' => 1, ],
		'TagKeys'                                               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'TagKey', ],
			'max'    => 200,
			'min'    => 1,
		],
		'TagResourceRequest'                                    => [
			'type'     => 'structure',
			'required' => [ 'ResourceARN', 'Tags', ],
			'members'  => [
				'ResourceARN' => [ 'shape' => 'KinesisAnalyticsARN', ],
				'Tags'        => [ 'shape' => 'Tags', ],
			],
		],
		'TagResourceResponse'                                   => [ 'type' => 'structure', 'members' => [], ],
		'TagValue'                                              => [ 'type' => 'string', 'max' => 256, 'min' => 0, ],
		'Tags'                                                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Tag', ],
			'max'    => 200,
			'min'    => 1,
		],
		'TextContent'                                           => [ 'type' => 'string', 'max' => 102400, 'min' => 0, ],
		'Timestamp'                                             => [ 'type' => 'timestamp', ],
		'TooManyTagsException'                                  => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'UnableToDetectSchemaException'                         => [
			'type'      => 'structure',
			'members'   => [
				'Message'               => [ 'shape' => 'ErrorMessage', ],
				'RawInputRecords'       => [ 'shape' => 'RawInputRecords', ],
				'ProcessedInputRecords' => [ 'shape' => 'ProcessedInputRecords', ],
			],
			'exception' => true,
		],
		'UnsupportedOperationException'                         => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'UntagResourceRequest'                                  => [
			'type'     => 'structure',
			'required' => [ 'ResourceARN', 'TagKeys', ],
			'members'  => [
				'ResourceARN' => [ 'shape' => 'KinesisAnalyticsARN', ],
				'TagKeys'     => [ 'shape' => 'TagKeys', ],
			],
		],
		'UntagResourceResponse'                                 => [ 'type' => 'structure', 'members' => [], ],
		'UpdateApplicationRequest'                              => [
			'type'     => 'structure',
			'required' => [
				'ApplicationName',
				'CurrentApplicationVersionId',
			],
			'members'  => [
				'ApplicationName'                => [ 'shape' => 'ApplicationName', ],
				'CurrentApplicationVersionId'    => [ 'shape' => 'ApplicationVersionId', ],
				'ApplicationConfigurationUpdate' => [ 'shape' => 'ApplicationConfigurationUpdate', ],
				'ServiceExecutionRoleUpdate'     => [ 'shape' => 'RoleARN', ],
				'RunConfigurationUpdate'         => [ 'shape' => 'RunConfigurationUpdate', ],
				'CloudWatchLoggingOptionUpdates' => [ 'shape' => 'CloudWatchLoggingOptionUpdates', ],
			],
		],
		'UpdateApplicationResponse'                             => [
			'type'     => 'structure',
			'required' => [ 'ApplicationDetail', ],
			'members'  => [ 'ApplicationDetail' => [ 'shape' => 'ApplicationDetail', ], ],
		],
		'ZipFileContent'                                        => [ 'type' => 'blob', 'max' => 52428800, 'min' => 0, ],
	],
];
