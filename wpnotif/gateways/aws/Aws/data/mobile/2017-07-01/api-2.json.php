<?php
// This file was auto-generated from sdk-root/src/data/mobile/2017-07-01/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'       => '2017-07-01',
		'endpointPrefix'   => 'mobile',
		'jsonVersion'      => '1.1',
		'protocol'         => 'rest-json',
		'serviceFullName'  => 'AWS Mobile',
		'signatureVersion' => 'v4',
		'signingName'      => 'AWSMobileHubService',
		'uid'              => 'mobile-2017-07-01',
	],
	'operations' => [
		'CreateProject'   => [
			'name'   => 'CreateProject',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/projects', ],
			'input'  => [ 'shape' => 'CreateProjectRequest', ],
			'output' => [ 'shape' => 'CreateProjectResult', ],
			'errors' => [
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'LimitExceededException', ],
			],
		],
		'DeleteProject'   => [
			'name'   => 'DeleteProject',
			'http'   => [ 'method' => 'DELETE', 'requestUri' => '/projects/{projectId}', ],
			'input'  => [ 'shape' => 'DeleteProjectRequest', ],
			'output' => [ 'shape' => 'DeleteProjectResult', ],
			'errors' => [
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'NotFoundException', ],
			],
		],
		'DescribeBundle'  => [
			'name'   => 'DescribeBundle',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/bundles/{bundleId}', ],
			'input'  => [ 'shape' => 'DescribeBundleRequest', ],
			'output' => [ 'shape' => 'DescribeBundleResult', ],
			'errors' => [
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
			],
		],
		'DescribeProject' => [
			'name'   => 'DescribeProject',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/project', ],
			'input'  => [ 'shape' => 'DescribeProjectRequest', ],
			'output' => [ 'shape' => 'DescribeProjectResult', ],
			'errors' => [
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
			],
		],
		'ExportBundle'    => [
			'name'   => 'ExportBundle',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/bundles/{bundleId}', ],
			'input'  => [ 'shape' => 'ExportBundleRequest', ],
			'output' => [ 'shape' => 'ExportBundleResult', ],
			'errors' => [
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
			],
		],
		'ExportProject'   => [
			'name'   => 'ExportProject',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/exports/{projectId}', ],
			'input'  => [ 'shape' => 'ExportProjectRequest', ],
			'output' => [ 'shape' => 'ExportProjectResult', ],
			'errors' => [
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
			],
		],
		'ListBundles'     => [
			'name'   => 'ListBundles',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/bundles', ],
			'input'  => [ 'shape' => 'ListBundlesRequest', ],
			'output' => [ 'shape' => 'ListBundlesResult', ],
			'errors' => [
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'ListProjects'    => [
			'name'   => 'ListProjects',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/projects', ],
			'input'  => [ 'shape' => 'ListProjectsRequest', ],
			'output' => [ 'shape' => 'ListProjectsResult', ],
			'errors' => [
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
			],
		],
		'UpdateProject'   => [
			'name'   => 'UpdateProject',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/update', ],
			'input'  => [ 'shape' => 'UpdateProjectRequest', ],
			'output' => [ 'shape' => 'UpdateProjectResult', ],
			'errors' => [
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'AccountActionRequiredException', ],
				[ 'shape' => 'LimitExceededException', ],
			],
		],
	],
	'shapes'     => [
		'AccountActionRequiredException' => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 403, ],
			'exception' => true,
		],
		'AttributeKey'                   => [ 'type' => 'string', ],
		'AttributeValue'                 => [ 'type' => 'string', ],
		'Attributes'                     => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'AttributeKey', ],
			'value' => [ 'shape' => 'AttributeValue', ],
		],
		'BadRequestException'            => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'Boolean'                        => [ 'type' => 'boolean', ],
		'BundleDescription'              => [ 'type' => 'string', ],
		'BundleDetails'                  => [
			'type'    => 'structure',
			'members' => [
				'bundleId'           => [ 'shape' => 'BundleId', ],
				'title'              => [ 'shape' => 'BundleTitle', ],
				'version'            => [ 'shape' => 'BundleVersion', ],
				'description'        => [ 'shape' => 'BundleDescription', ],
				'iconUrl'            => [ 'shape' => 'IconUrl', ],
				'availablePlatforms' => [ 'shape' => 'Platforms', ],
			],
		],
		'BundleId'                       => [ 'type' => 'string', ],
		'BundleList'                     => [ 'type' => 'list', 'member' => [ 'shape' => 'BundleDetails', ], ],
		'BundleTitle'                    => [ 'type' => 'string', ],
		'BundleVersion'                  => [ 'type' => 'string', ],
		'ConsoleUrl'                     => [ 'type' => 'string', ],
		'Contents'                       => [ 'type' => 'blob', ],
		'CreateProjectRequest'           => [
			'type'    => 'structure',
			'members' => [
				'name'       => [
					'shape'        => 'ProjectName',
					'location'     => 'querystring',
					'locationName' => 'name',
				],
				'region'     => [
					'shape'        => 'ProjectRegion',
					'location'     => 'querystring',
					'locationName' => 'region',
				],
				'contents'   => [ 'shape' => 'Contents', ],
				'snapshotId' => [
					'shape'        => 'SnapshotId',
					'location'     => 'querystring',
					'locationName' => 'snapshotId',
				],
			],
			'payload' => 'contents',
		],
		'CreateProjectResult'            => [
			'type'    => 'structure',
			'members' => [ 'details' => [ 'shape' => 'ProjectDetails', ], ],
		],
		'Date'                           => [ 'type' => 'timestamp', ],
		'DeleteProjectRequest'           => [
			'type'     => 'structure',
			'required' => [ 'projectId', ],
			'members'  => [
				'projectId' => [
					'shape'        => 'ProjectId',
					'location'     => 'uri',
					'locationName' => 'projectId',
				],
			],
		],
		'DeleteProjectResult'            => [
			'type'    => 'structure',
			'members' => [
				'deletedResources'  => [ 'shape' => 'Resources', ],
				'orphanedResources' => [ 'shape' => 'Resources', ],
			],
		],
		'DescribeBundleRequest'          => [
			'type'     => 'structure',
			'required' => [ 'bundleId', ],
			'members'  => [
				'bundleId' => [
					'shape'        => 'BundleId',
					'location'     => 'uri',
					'locationName' => 'bundleId',
				],
			],
		],
		'DescribeBundleResult'           => [
			'type'    => 'structure',
			'members' => [ 'details' => [ 'shape' => 'BundleDetails', ], ],
		],
		'DescribeProjectRequest'         => [
			'type'     => 'structure',
			'required' => [ 'projectId', ],
			'members'  => [
				'projectId'         => [
					'shape'        => 'ProjectId',
					'location'     => 'querystring',
					'locationName' => 'projectId',
				],
				'syncFromResources' => [
					'shape'        => 'Boolean',
					'location'     => 'querystring',
					'locationName' => 'syncFromResources',
				],
			],
		],
		'DescribeProjectResult'          => [
			'type'    => 'structure',
			'members' => [ 'details' => [ 'shape' => 'ProjectDetails', ], ],
		],
		'DownloadUrl'                    => [ 'type' => 'string', ],
		'ErrorMessage'                   => [ 'type' => 'string', ],
		'ExportBundleRequest'            => [
			'type'     => 'structure',
			'required' => [ 'bundleId', ],
			'members'  => [
				'bundleId'  => [
					'shape'        => 'BundleId',
					'location'     => 'uri',
					'locationName' => 'bundleId',
				],
				'projectId' => [
					'shape'        => 'ProjectId',
					'location'     => 'querystring',
					'locationName' => 'projectId',
				],
				'platform'  => [
					'shape'        => 'Platform',
					'location'     => 'querystring',
					'locationName' => 'platform',
				],
			],
		],
		'ExportBundleResult'             => [
			'type'    => 'structure',
			'members' => [ 'downloadUrl' => [ 'shape' => 'DownloadUrl', ], ],
		],
		'ExportProjectRequest'           => [
			'type'     => 'structure',
			'required' => [ 'projectId', ],
			'members'  => [
				'projectId' => [
					'shape'        => 'ProjectId',
					'location'     => 'uri',
					'locationName' => 'projectId',
				],
			],
		],
		'ExportProjectResult'            => [
			'type'    => 'structure',
			'members' => [
				'downloadUrl' => [ 'shape' => 'DownloadUrl', ],
				'shareUrl'    => [ 'shape' => 'ShareUrl', ],
				'snapshotId'  => [ 'shape' => 'SnapshotId', ],
			],
		],
		'Feature'                        => [ 'type' => 'string', ],
		'IconUrl'                        => [ 'type' => 'string', ],
		'InternalFailureException'       => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 500, ],
			'exception' => true,
			'fault'     => true,
		],
		'LimitExceededException'         => [
			'type'      => 'structure',
			'members'   => [
				'retryAfterSeconds' => [
					'shape'        => 'ErrorMessage',
					'location'     => 'header',
					'locationName' => 'Retry-After',
				],
				'message'           => [ 'shape' => 'ErrorMessage', ],
			],
			'error'     => [ 'httpStatusCode' => 429, ],
			'exception' => true,
		],
		'ListBundlesRequest'             => [
			'type'    => 'structure',
			'members' => [
				'maxResults' => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'nextToken'  => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListBundlesResult'              => [
			'type'    => 'structure',
			'members' => [
				'bundleList' => [ 'shape' => 'BundleList', ],
				'nextToken'  => [ 'shape' => 'NextToken', ],
			],
		],
		'ListProjectsRequest'            => [
			'type'    => 'structure',
			'members' => [
				'maxResults' => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
				'nextToken'  => [
					'shape'        => 'NextToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListProjectsResult'             => [
			'type'    => 'structure',
			'members' => [
				'projects'  => [ 'shape' => 'ProjectSummaries', ],
				'nextToken' => [ 'shape' => 'NextToken', ],
			],
		],
		'MaxResults'                     => [ 'type' => 'integer', ],
		'NextToken'                      => [ 'type' => 'string', ],
		'NotFoundException'              => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'Platform'                       => [
			'type' => 'string',
			'enum' => [
				'OSX',
				'WINDOWS',
				'LINUX',
				'OBJC',
				'SWIFT',
				'ANDROID',
				'JAVASCRIPT',
			],
		],
		'Platforms'                      => [ 'type' => 'list', 'member' => [ 'shape' => 'Platform', ], ],
		'ProjectDetails'                 => [
			'type'    => 'structure',
			'members' => [
				'name'            => [ 'shape' => 'ProjectName', ],
				'projectId'       => [ 'shape' => 'ProjectId', ],
				'region'          => [ 'shape' => 'ProjectRegion', ],
				'state'           => [ 'shape' => 'ProjectState', ],
				'createdDate'     => [ 'shape' => 'Date', ],
				'lastUpdatedDate' => [ 'shape' => 'Date', ],
				'consoleUrl'      => [ 'shape' => 'ConsoleUrl', ],
				'resources'       => [ 'shape' => 'Resources', ],
			],
		],
		'ProjectId'                      => [ 'type' => 'string', ],
		'ProjectName'                    => [ 'type' => 'string', ],
		'ProjectRegion'                  => [ 'type' => 'string', ],
		'ProjectState'                   => [ 'type' => 'string', 'enum' => [ 'NORMAL', 'SYNCING', 'IMPORTING', ], ],
		'ProjectSummaries'               => [ 'type' => 'list', 'member' => [ 'shape' => 'ProjectSummary', ], ],
		'ProjectSummary'                 => [
			'type'    => 'structure',
			'members' => [
				'name'      => [ 'shape' => 'ProjectName', ],
				'projectId' => [ 'shape' => 'ProjectId', ],
			],
		],
		'Resource'                       => [
			'type'    => 'structure',
			'members' => [
				'type'       => [ 'shape' => 'ResourceType', ],
				'name'       => [ 'shape' => 'ResourceName', ],
				'arn'        => [ 'shape' => 'ResourceArn', ],
				'feature'    => [ 'shape' => 'Feature', ],
				'attributes' => [ 'shape' => 'Attributes', ],
			],
		],
		'ResourceArn'                    => [ 'type' => 'string', ],
		'ResourceName'                   => [ 'type' => 'string', ],
		'ResourceType'                   => [ 'type' => 'string', ],
		'Resources'                      => [ 'type' => 'list', 'member' => [ 'shape' => 'Resource', ], ],
		'ServiceUnavailableException'    => [
			'type'      => 'structure',
			'members'   => [
				'retryAfterSeconds' => [
					'shape'        => 'ErrorMessage',
					'location'     => 'header',
					'locationName' => 'Retry-After',
				],
				'message'           => [ 'shape' => 'ErrorMessage', ],
			],
			'error'     => [ 'httpStatusCode' => 503, ],
			'exception' => true,
			'fault'     => true,
		],
		'ShareUrl'                       => [ 'type' => 'string', ],
		'SnapshotId'                     => [ 'type' => 'string', ],
		'TooManyRequestsException'       => [
			'type'      => 'structure',
			'members'   => [
				'retryAfterSeconds' => [
					'shape'        => 'ErrorMessage',
					'location'     => 'header',
					'locationName' => 'Retry-After',
				],
				'message'           => [ 'shape' => 'ErrorMessage', ],
			],
			'error'     => [ 'httpStatusCode' => 429, ],
			'exception' => true,
		],
		'UnauthorizedException'          => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 401, ],
			'exception' => true,
		],
		'UpdateProjectRequest'           => [
			'type'     => 'structure',
			'required' => [ 'projectId', ],
			'members'  => [
				'contents'  => [ 'shape' => 'Contents', ],
				'projectId' => [
					'shape'        => 'ProjectId',
					'location'     => 'querystring',
					'locationName' => 'projectId',
				],
			],
			'payload'  => 'contents',
		],
		'UpdateProjectResult'            => [
			'type'    => 'structure',
			'members' => [ 'details' => [ 'shape' => 'ProjectDetails', ], ],
		],
	],
];
