<?php
// This file was auto-generated from sdk-root/src/data/kinesisanalytics/2015-08-14/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'          => '2015-08-14',
		'endpointPrefix'      => 'kinesisanalytics',
		'jsonVersion'         => '1.1',
		'protocol'            => 'json',
		'serviceAbbreviation' => 'Kinesis Analytics',
		'serviceFullName'     => 'Amazon Kinesis Analytics',
		'serviceId'           => 'Kinesis Analytics',
		'signatureVersion'    => 'v4',
		'targetPrefix'        => 'KinesisAnalytics_20150814',
		'uid'                 => 'kinesisanalytics-2015-08-14',
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
				[ 'shape' => 'UnsupportedOperationException', ],
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
				[ 'shape' => 'UnsupportedOperationException', ],
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
				[ 'shape' => 'UnsupportedOperationException', ],
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
				[ 'shape' => 'UnsupportedOperationException', ],
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
				[ 'shape' => 'UnsupportedOperationException', ],
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
				[ 'shape' => 'TooManyTagsException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
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
				[ 'shape' => 'UnsupportedOperationException', ],
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
				[ 'shape' => 'UnsupportedOperationException', ],
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
				[ 'shape' => 'UnsupportedOperationException', ],
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
				[ 'shape' => 'UnsupportedOperationException', ],
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
				[ 'shape' => 'UnsupportedOperationException', ],
			],
		],
		'DescribeApplication'                           => [
			'name'   => 'DescribeApplication',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeApplicationRequest', ],
			'output' => [ 'shape' => 'DescribeApplicationResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
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
			],
		],
		'ListApplications'                              => [
			'name'   => 'ListApplications',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListApplicationsRequest', ],
			'output' => [ 'shape' => 'ListApplicationsResponse', ],
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
				[ 'shape' => 'UnsupportedOperationException', ],
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
				[ 'shape' => 'UnsupportedOperationException', ],
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
				[ 'shape' => 'UnsupportedOperationException', ],
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
		'AddApplicationCloudWatchLoggingOptionResponse'         => [ 'type' => 'structure', 'members' => [], ],
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
		'AddApplicationInputProcessingConfigurationResponse'    => [ 'type' => 'structure', 'members' => [], ],
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
		'AddApplicationInputResponse'                           => [ 'type' => 'structure', 'members' => [], ],
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
		'AddApplicationOutputResponse'                          => [ 'type' => 'structure', 'members' => [], ],
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
		'AddApplicationReferenceDataSourceResponse'             => [ 'type' => 'structure', 'members' => [], ],
		'ApplicationCode'                                       => [ 'type' => 'string', 'max' => 102400, 'min' => 0, ],
		'ApplicationDescription'                                => [ 'type' => 'string', 'max' => 1024, 'min' => 0, ],
		'ApplicationDetail'                                     => [
			'type'     => 'structure',
			'required' => [
				'ApplicationName',
				'ApplicationARN',
				'ApplicationStatus',
				'ApplicationVersionId',
			],
			'members'  => [
				'ApplicationName'                     => [ 'shape' => 'ApplicationName', ],
				'ApplicationDescription'              => [ 'shape' => 'ApplicationDescription', ],
				'ApplicationARN'                      => [ 'shape' => 'ResourceARN', ],
				'ApplicationStatus'                   => [ 'shape' => 'ApplicationStatus', ],
				'CreateTimestamp'                     => [ 'shape' => 'Timestamp', ],
				'LastUpdateTimestamp'                 => [ 'shape' => 'Timestamp', ],
				'InputDescriptions'                   => [ 'shape' => 'InputDescriptions', ],
				'OutputDescriptions'                  => [ 'shape' => 'OutputDescriptions', ],
				'ReferenceDataSourceDescriptions'     => [ 'shape' => 'ReferenceDataSourceDescriptions', ],
				'CloudWatchLoggingOptionDescriptions' => [ 'shape' => 'CloudWatchLoggingOptionDescriptions', ],
				'ApplicationCode'                     => [ 'shape' => 'ApplicationCode', ],
				'ApplicationVersionId'                => [ 'shape' => 'ApplicationVersionId', ],
			],
		],
		'ApplicationName'                                       => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '[a-zA-Z0-9_.-]+',
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
			],
			'members'  => [
				'ApplicationName'   => [ 'shape' => 'ApplicationName', ],
				'ApplicationARN'    => [ 'shape' => 'ResourceARN', ],
				'ApplicationStatus' => [ 'shape' => 'ApplicationStatus', ],
			],
		],
		'ApplicationUpdate'                                     => [
			'type'    => 'structure',
			'members' => [
				'InputUpdates'                   => [ 'shape' => 'InputUpdates', ],
				'ApplicationCodeUpdate'          => [ 'shape' => 'ApplicationCode', ],
				'OutputUpdates'                  => [ 'shape' => 'OutputUpdates', ],
				'ReferenceDataSourceUpdates'     => [ 'shape' => 'ReferenceDataSourceUpdates', ],
				'CloudWatchLoggingOptionUpdates' => [ 'shape' => 'CloudWatchLoggingOptionUpdates', ],
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
		'CloudWatchLoggingOption'                               => [
			'type'     => 'structure',
			'required' => [ 'LogStreamARN', 'RoleARN', ],
			'members'  => [
				'LogStreamARN' => [ 'shape' => 'LogStreamARN', ],
				'RoleARN'      => [ 'shape' => 'RoleARN', ],
			],
		],
		'CloudWatchLoggingOptionDescription'                    => [
			'type'     => 'structure',
			'required' => [ 'LogStreamARN', 'RoleARN', ],
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
				'RoleARNUpdate'             => [ 'shape' => 'RoleARN', ],
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
		'CodeValidationException'                               => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'ConcurrentModificationException'                       => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'CreateApplicationRequest'                              => [
			'type'     => 'structure',
			'required' => [ 'ApplicationName', ],
			'members'  => [
				'ApplicationName'          => [ 'shape' => 'ApplicationName', ],
				'ApplicationDescription'   => [ 'shape' => 'ApplicationDescription', ],
				'Inputs'                   => [ 'shape' => 'Inputs', ],
				'Outputs'                  => [ 'shape' => 'Outputs', ],
				'CloudWatchLoggingOptions' => [ 'shape' => 'CloudWatchLoggingOptions', ],
				'ApplicationCode'          => [ 'shape' => 'ApplicationCode', ],
				'Tags'                     => [ 'shape' => 'Tags', ],
			],
		],
		'CreateApplicationResponse'                             => [
			'type'     => 'structure',
			'required' => [ 'ApplicationSummary', ],
			'members'  => [ 'ApplicationSummary' => [ 'shape' => 'ApplicationSummary', ], ],
		],
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
		'DeleteApplicationCloudWatchLoggingOptionResponse'      => [ 'type' => 'structure', 'members' => [], ],
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
		'DeleteApplicationInputProcessingConfigurationResponse' => [ 'type' => 'structure', 'members' => [], ],
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
		'DeleteApplicationOutputResponse'                       => [ 'type' => 'structure', 'members' => [], ],
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
		'DeleteApplicationReferenceDataSourceResponse'          => [ 'type' => 'structure', 'members' => [], ],
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
		'DescribeApplicationRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'ApplicationName', ],
			'members'  => [ 'ApplicationName' => [ 'shape' => 'ApplicationName', ], ],
		],
		'DescribeApplicationResponse'                           => [
			'type'     => 'structure',
			'required' => [ 'ApplicationDetail', ],
			'members'  => [ 'ApplicationDetail' => [ 'shape' => 'ApplicationDetail', ], ],
		],
		'DestinationSchema'                                     => [
			'type'     => 'structure',
			'required' => [ 'RecordFormatType', ],
			'members'  => [ 'RecordFormatType' => [ 'shape' => 'RecordFormatType', ], ],
		],
		'DiscoverInputSchemaRequest'                            => [
			'type'    => 'structure',
			'members' => [
				'ResourceARN'                        => [ 'shape' => 'ResourceARN', ],
				'RoleARN'                            => [ 'shape' => 'RoleARN', ],
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
		'ErrorMessage'                                          => [ 'type' => 'string', ],
		'FileKey'                                               => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ],
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
		'InputConfiguration'                                    => [
			'type'     => 'structure',
			'required' => [
				'Id',
				'InputStartingPositionConfiguration',
			],
			'members'  => [
				'Id'                                 => [ 'shape' => 'Id', ],
				'InputStartingPositionConfiguration' => [ 'shape' => 'InputStartingPositionConfiguration', ],
			],
		],
		'InputConfigurations'                                   => [
			'type'   => 'list',
			'member' => [ 'shape' => 'InputConfiguration', ],
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
			'required' => [ 'ResourceARN', 'RoleARN', ],
			'members'  => [
				'ResourceARN' => [ 'shape' => 'ResourceARN', ],
				'RoleARN'     => [ 'shape' => 'RoleARN', ],
			],
		],
		'InputLambdaProcessorDescription'                       => [
			'type'    => 'structure',
			'members' => [
				'ResourceARN' => [ 'shape' => 'ResourceARN', ],
				'RoleARN'     => [ 'shape' => 'RoleARN', ],
			],
		],
		'InputLambdaProcessorUpdate'                            => [
			'type'    => 'structure',
			'members' => [
				'ResourceARNUpdate' => [ 'shape' => 'ResourceARN', ],
				'RoleARNUpdate'     => [ 'shape' => 'RoleARN', ],
			],
		],
		'InputParallelism'                                      => [
			'type'    => 'structure',
			'members' => [ 'Count' => [ 'shape' => 'InputParallelismCount', ], ],
		],
		'InputParallelismCount'                                 => [ 'type' => 'integer', 'max' => 64, 'min' => 1, ],
		'InputParallelismUpdate'                                => [
			'type'    => 'structure',
			'members' => [ 'CountUpdate' => [ 'shape' => 'InputParallelismCount', ], ],
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
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'InvalidArgumentException'                              => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'JSONMappingParameters'                                 => [
			'type'     => 'structure',
			'required' => [ 'RecordRowPath', ],
			'members'  => [ 'RecordRowPath' => [ 'shape' => 'RecordRowPath', ], ],
		],
		'KinesisAnalyticsARN'                                   => [
			'type'    => 'string',
			'max'     => 2048,
			'min'     => 1,
			'pattern' => 'arn:aws:kinesisanalytics:[a-z]{2}-[a-z]+-\\d{1}+:\\d{12}+:application/[a-zA-Z0-9_.-]{1,128}',
		],
		'KinesisFirehoseInput'                                  => [
			'type'     => 'structure',
			'required' => [ 'ResourceARN', 'RoleARN', ],
			'members'  => [
				'ResourceARN' => [ 'shape' => 'ResourceARN', ],
				'RoleARN'     => [ 'shape' => 'RoleARN', ],
			],
		],
		'KinesisFirehoseInputDescription'                       => [
			'type'    => 'structure',
			'members' => [
				'ResourceARN' => [ 'shape' => 'ResourceARN', ],
				'RoleARN'     => [ 'shape' => 'RoleARN', ],
			],
		],
		'KinesisFirehoseInputUpdate'                            => [
			'type'    => 'structure',
			'members' => [
				'ResourceARNUpdate' => [ 'shape' => 'ResourceARN', ],
				'RoleARNUpdate'     => [ 'shape' => 'RoleARN', ],
			],
		],
		'KinesisFirehoseOutput'                                 => [
			'type'     => 'structure',
			'required' => [ 'ResourceARN', 'RoleARN', ],
			'members'  => [
				'ResourceARN' => [ 'shape' => 'ResourceARN', ],
				'RoleARN'     => [ 'shape' => 'RoleARN', ],
			],
		],
		'KinesisFirehoseOutputDescription'                      => [
			'type'    => 'structure',
			'members' => [
				'ResourceARN' => [ 'shape' => 'ResourceARN', ],
				'RoleARN'     => [ 'shape' => 'RoleARN', ],
			],
		],
		'KinesisFirehoseOutputUpdate'                           => [
			'type'    => 'structure',
			'members' => [
				'ResourceARNUpdate' => [ 'shape' => 'ResourceARN', ],
				'RoleARNUpdate'     => [ 'shape' => 'RoleARN', ],
			],
		],
		'KinesisStreamsInput'                                   => [
			'type'     => 'structure',
			'required' => [ 'ResourceARN', 'RoleARN', ],
			'members'  => [
				'ResourceARN' => [ 'shape' => 'ResourceARN', ],
				'RoleARN'     => [ 'shape' => 'RoleARN', ],
			],
		],
		'KinesisStreamsInputDescription'                        => [
			'type'    => 'structure',
			'members' => [
				'ResourceARN' => [ 'shape' => 'ResourceARN', ],
				'RoleARN'     => [ 'shape' => 'RoleARN', ],
			],
		],
		'KinesisStreamsInputUpdate'                             => [
			'type'    => 'structure',
			'members' => [
				'ResourceARNUpdate' => [ 'shape' => 'ResourceARN', ],
				'RoleARNUpdate'     => [ 'shape' => 'RoleARN', ],
			],
		],
		'KinesisStreamsOutput'                                  => [
			'type'     => 'structure',
			'required' => [ 'ResourceARN', 'RoleARN', ],
			'members'  => [
				'ResourceARN' => [ 'shape' => 'ResourceARN', ],
				'RoleARN'     => [ 'shape' => 'RoleARN', ],
			],
		],
		'KinesisStreamsOutputDescription'                       => [
			'type'    => 'structure',
			'members' => [
				'ResourceARN' => [ 'shape' => 'ResourceARN', ],
				'RoleARN'     => [ 'shape' => 'RoleARN', ],
			],
		],
		'KinesisStreamsOutputUpdate'                            => [
			'type'    => 'structure',
			'members' => [
				'ResourceARNUpdate' => [ 'shape' => 'ResourceARN', ],
				'RoleARNUpdate'     => [ 'shape' => 'RoleARN', ],
			],
		],
		'LambdaOutput'                                          => [
			'type'     => 'structure',
			'required' => [ 'ResourceARN', 'RoleARN', ],
			'members'  => [
				'ResourceARN' => [ 'shape' => 'ResourceARN', ],
				'RoleARN'     => [ 'shape' => 'RoleARN', ],
			],
		],
		'LambdaOutputDescription'                               => [
			'type'    => 'structure',
			'members' => [
				'ResourceARN' => [ 'shape' => 'ResourceARN', ],
				'RoleARN'     => [ 'shape' => 'RoleARN', ],
			],
		],
		'LambdaOutputUpdate'                                    => [
			'type'    => 'structure',
			'members' => [
				'ResourceARNUpdate' => [ 'shape' => 'ResourceARN', ],
				'RoleARNUpdate'     => [ 'shape' => 'RoleARN', ],
			],
		],
		'LimitExceededException'                                => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'ListApplicationsInputLimit'                            => [ 'type' => 'integer', 'max' => 50, 'min' => 1, ],
		'ListApplicationsRequest'                               => [
			'type'    => 'structure',
			'members' => [
				'Limit'                         => [ 'shape' => 'ListApplicationsInputLimit', ],
				'ExclusiveStartApplicationName' => [ 'shape' => 'ApplicationName', ],
			],
		],
		'ListApplicationsResponse'                              => [
			'type'     => 'structure',
			'required' => [
				'ApplicationSummaries',
				'HasMoreApplications',
			],
			'members'  => [
				'ApplicationSummaries' => [ 'shape' => 'ApplicationSummaries', ],
				'HasMoreApplications'  => [ 'shape' => 'BooleanObject', ],
			],
		],
		'ListTagsForResourceRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'ResourceARN', ],
			'members'  => [ 'ResourceARN' => [ 'shape' => 'KinesisAnalyticsARN', ], ],
		],
		'ListTagsForResourceResponse'                           => [
			'type'    => 'structure',
			'members' => [ 'Tags' => [ 'shape' => 'Tags', ], ],
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
		'ResourceARN'                                           => [
			'type'    => 'string',
			'max'     => 2048,
			'min'     => 1,
			'pattern' => 'arn:.*',
		],
		'ResourceInUseException'                                => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'ResourceNotFoundException'                             => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'ResourceProvisionedThroughputExceededException'        => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'RoleARN'                                               => [
			'type'    => 'string',
			'max'     => 2048,
			'min'     => 1,
			'pattern' => 'arn:aws:iam::\\d{12}:role/?[a-zA-Z_0-9+=,.@\\-_/]+',
		],
		'S3Configuration'                                       => [
			'type'     => 'structure',
			'required' => [
				'RoleARN',
				'BucketARN',
				'FileKey',
			],
			'members'  => [
				'RoleARN'   => [ 'shape' => 'RoleARN', ],
				'BucketARN' => [ 'shape' => 'BucketARN', ],
				'FileKey'   => [ 'shape' => 'FileKey', ],
			],
		],
		'S3ReferenceDataSource'                                 => [
			'type'     => 'structure',
			'required' => [
				'BucketARN',
				'FileKey',
				'ReferenceRoleARN',
			],
			'members'  => [
				'BucketARN'        => [ 'shape' => 'BucketARN', ],
				'FileKey'          => [ 'shape' => 'FileKey', ],
				'ReferenceRoleARN' => [ 'shape' => 'RoleARN', ],
			],
		],
		'S3ReferenceDataSourceDescription'                      => [
			'type'     => 'structure',
			'required' => [
				'BucketARN',
				'FileKey',
				'ReferenceRoleARN',
			],
			'members'  => [
				'BucketARN'        => [ 'shape' => 'BucketARN', ],
				'FileKey'          => [ 'shape' => 'FileKey', ],
				'ReferenceRoleARN' => [ 'shape' => 'RoleARN', ],
			],
		],
		'S3ReferenceDataSourceUpdate'                           => [
			'type'    => 'structure',
			'members' => [
				'BucketARNUpdate'        => [ 'shape' => 'BucketARN', ],
				'FileKeyUpdate'          => [ 'shape' => 'FileKey', ],
				'ReferenceRoleARNUpdate' => [ 'shape' => 'RoleARN', ],
			],
		],
		'ServiceUnavailableException'                           => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
			'fault'     => true,
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
		'StartApplicationRequest'                               => [
			'type'     => 'structure',
			'required' => [
				'ApplicationName',
				'InputConfigurations',
			],
			'members'  => [
				'ApplicationName'     => [ 'shape' => 'ApplicationName', ],
				'InputConfigurations' => [ 'shape' => 'InputConfigurations', ],
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
		'Timestamp'                                             => [ 'type' => 'timestamp', ],
		'TooManyTagsException'                                  => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'UnableToDetectSchemaException'                         => [
			'type'      => 'structure',
			'members'   => [
				'message'               => [ 'shape' => 'ErrorMessage', ],
				'RawInputRecords'       => [ 'shape' => 'RawInputRecords', ],
				'ProcessedInputRecords' => [ 'shape' => 'ProcessedInputRecords', ],
			],
			'exception' => true,
		],
		'UnsupportedOperationException'                         => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
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
				'ApplicationUpdate',
			],
			'members'  => [
				'ApplicationName'             => [ 'shape' => 'ApplicationName', ],
				'CurrentApplicationVersionId' => [ 'shape' => 'ApplicationVersionId', ],
				'ApplicationUpdate'           => [ 'shape' => 'ApplicationUpdate', ],
			],
		],
		'UpdateApplicationResponse'                             => [ 'type' => 'structure', 'members' => [], ],
	],
];
