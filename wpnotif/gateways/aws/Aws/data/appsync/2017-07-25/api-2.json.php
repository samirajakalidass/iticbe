<?php
// This file was auto-generated from sdk-root/src/data/appsync/2017-07-25/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'          => '2017-07-25',
		'endpointPrefix'      => 'appsync',
		'jsonVersion'         => '1.1',
		'protocol'            => 'rest-json',
		'serviceAbbreviation' => 'AWSAppSync',
		'serviceFullName'     => 'AWS AppSync',
		'serviceId'           => 'AppSync',
		'signatureVersion'    => 'v4',
		'signingName'         => 'appsync',
		'uid'                 => 'appsync-2017-07-25',
	],
	'operations' => [
		'CreateApiKey'            => [
			'name'   => 'CreateApiKey',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/v1/apis/{apiId}/apikeys', ],
			'input'  => [ 'shape' => 'CreateApiKeyRequest', ],
			'output' => [ 'shape' => 'CreateApiKeyResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ApiKeyLimitExceededException', ],
				[ 'shape' => 'ApiKeyValidityOutOfBoundsException', ],
			],
		],
		'CreateDataSource'        => [
			'name'   => 'CreateDataSource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/v1/apis/{apiId}/datasources', ],
			'input'  => [ 'shape' => 'CreateDataSourceRequest', ],
			'output' => [ 'shape' => 'CreateDataSourceResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'CreateFunction'          => [
			'name'   => 'CreateFunction',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/v1/apis/{apiId}/functions', ],
			'input'  => [ 'shape' => 'CreateFunctionRequest', ],
			'output' => [ 'shape' => 'CreateFunctionResponse', ],
			'errors' => [
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'CreateGraphqlApi'        => [
			'name'   => 'CreateGraphqlApi',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/v1/apis', ],
			'input'  => [ 'shape' => 'CreateGraphqlApiRequest', ],
			'output' => [ 'shape' => 'CreateGraphqlApiResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ApiLimitExceededException', ],
			],
		],
		'CreateResolver'          => [
			'name'   => 'CreateResolver',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/v1/apis/{apiId}/types/{typeName}/resolvers',
			],
			'input'  => [ 'shape' => 'CreateResolverRequest', ],
			'output' => [ 'shape' => 'CreateResolverResponse', ],
			'errors' => [
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'CreateType'              => [
			'name'   => 'CreateType',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/v1/apis/{apiId}/types', ],
			'input'  => [ 'shape' => 'CreateTypeRequest', ],
			'output' => [ 'shape' => 'CreateTypeResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'DeleteApiKey'            => [
			'name'   => 'DeleteApiKey',
			'http'   => [ 'method' => 'DELETE', 'requestUri' => '/v1/apis/{apiId}/apikeys/{id}', ],
			'input'  => [ 'shape' => 'DeleteApiKeyRequest', ],
			'output' => [ 'shape' => 'DeleteApiKeyResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'DeleteDataSource'        => [
			'name'   => 'DeleteDataSource',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/v1/apis/{apiId}/datasources/{name}',
			],
			'input'  => [ 'shape' => 'DeleteDataSourceRequest', ],
			'output' => [ 'shape' => 'DeleteDataSourceResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'DeleteFunction'          => [
			'name'   => 'DeleteFunction',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/v1/apis/{apiId}/functions/{functionId}',
			],
			'input'  => [ 'shape' => 'DeleteFunctionRequest', ],
			'output' => [ 'shape' => 'DeleteFunctionResponse', ],
			'errors' => [
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'DeleteGraphqlApi'        => [
			'name'   => 'DeleteGraphqlApi',
			'http'   => [ 'method' => 'DELETE', 'requestUri' => '/v1/apis/{apiId}', ],
			'input'  => [ 'shape' => 'DeleteGraphqlApiRequest', ],
			'output' => [ 'shape' => 'DeleteGraphqlApiResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'AccessDeniedException', ],
			],
		],
		'DeleteResolver'          => [
			'name'   => 'DeleteResolver',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/v1/apis/{apiId}/types/{typeName}/resolvers/{fieldName}',
			],
			'input'  => [ 'shape' => 'DeleteResolverRequest', ],
			'output' => [ 'shape' => 'DeleteResolverResponse', ],
			'errors' => [
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'DeleteType'              => [
			'name'   => 'DeleteType',
			'http'   => [
				'method'     => 'DELETE',
				'requestUri' => '/v1/apis/{apiId}/types/{typeName}',
			],
			'input'  => [ 'shape' => 'DeleteTypeRequest', ],
			'output' => [ 'shape' => 'DeleteTypeResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'GetDataSource'           => [
			'name'   => 'GetDataSource',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/v1/apis/{apiId}/datasources/{name}',
			],
			'input'  => [ 'shape' => 'GetDataSourceRequest', ],
			'output' => [ 'shape' => 'GetDataSourceResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'GetFunction'             => [
			'name'   => 'GetFunction',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/v1/apis/{apiId}/functions/{functionId}',
			],
			'input'  => [ 'shape' => 'GetFunctionRequest', ],
			'output' => [ 'shape' => 'GetFunctionResponse', ],
			'errors' => [
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
			],
		],
		'GetGraphqlApi'           => [
			'name'   => 'GetGraphqlApi',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/v1/apis/{apiId}', ],
			'input'  => [ 'shape' => 'GetGraphqlApiRequest', ],
			'output' => [ 'shape' => 'GetGraphqlApiResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'AccessDeniedException', ],
			],
		],
		'GetIntrospectionSchema'  => [
			'name'   => 'GetIntrospectionSchema',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/v1/apis/{apiId}/schema', ],
			'input'  => [ 'shape' => 'GetIntrospectionSchemaRequest', ],
			'output' => [ 'shape' => 'GetIntrospectionSchemaResponse', ],
			'errors' => [
				[ 'shape' => 'GraphQLSchemaException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'GetResolver'             => [
			'name'   => 'GetResolver',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/v1/apis/{apiId}/types/{typeName}/resolvers/{fieldName}',
			],
			'input'  => [ 'shape' => 'GetResolverRequest', ],
			'output' => [ 'shape' => 'GetResolverResponse', ],
			'errors' => [
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
			],
		],
		'GetSchemaCreationStatus' => [
			'name'   => 'GetSchemaCreationStatus',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/v1/apis/{apiId}/schemacreation',
			],
			'input'  => [ 'shape' => 'GetSchemaCreationStatusRequest', ],
			'output' => [ 'shape' => 'GetSchemaCreationStatusResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'GetType'                 => [
			'name'   => 'GetType',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/v1/apis/{apiId}/types/{typeName}',
			],
			'input'  => [ 'shape' => 'GetTypeRequest', ],
			'output' => [ 'shape' => 'GetTypeResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'ListApiKeys'             => [
			'name'   => 'ListApiKeys',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/v1/apis/{apiId}/apikeys', ],
			'input'  => [ 'shape' => 'ListApiKeysRequest', ],
			'output' => [ 'shape' => 'ListApiKeysResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'ListDataSources'         => [
			'name'   => 'ListDataSources',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/v1/apis/{apiId}/datasources',
			],
			'input'  => [ 'shape' => 'ListDataSourcesRequest', ],
			'output' => [ 'shape' => 'ListDataSourcesResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'ListFunctions'           => [
			'name'   => 'ListFunctions',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/v1/apis/{apiId}/functions', ],
			'input'  => [ 'shape' => 'ListFunctionsRequest', ],
			'output' => [ 'shape' => 'ListFunctionsResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'ListGraphqlApis'         => [
			'name'   => 'ListGraphqlApis',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/v1/apis', ],
			'input'  => [ 'shape' => 'ListGraphqlApisRequest', ],
			'output' => [ 'shape' => 'ListGraphqlApisResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'ListResolvers'           => [
			'name'   => 'ListResolvers',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/v1/apis/{apiId}/types/{typeName}/resolvers',
			],
			'input'  => [ 'shape' => 'ListResolversRequest', ],
			'output' => [ 'shape' => 'ListResolversResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'ListResolversByFunction' => [
			'name'   => 'ListResolversByFunction',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/v1/apis/{apiId}/functions/{functionId}/resolvers',
			],
			'input'  => [ 'shape' => 'ListResolversByFunctionRequest', ],
			'output' => [ 'shape' => 'ListResolversByFunctionResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'ListTagsForResource'     => [
			'name'   => 'ListTagsForResource',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/v1/tags/{resourceArn}', ],
			'input'  => [ 'shape' => 'ListTagsForResourceRequest', ],
			'output' => [ 'shape' => 'ListTagsForResourceResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'AccessDeniedException', ],
			],
		],
		'ListTypes'               => [
			'name'   => 'ListTypes',
			'http'   => [ 'method' => 'GET', 'requestUri' => '/v1/apis/{apiId}/types', ],
			'input'  => [ 'shape' => 'ListTypesRequest', ],
			'output' => [ 'shape' => 'ListTypesResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'StartSchemaCreation'     => [
			'name'   => 'StartSchemaCreation',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/v1/apis/{apiId}/schemacreation',
			],
			'input'  => [ 'shape' => 'StartSchemaCreationRequest', ],
			'output' => [ 'shape' => 'StartSchemaCreationResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'TagResource'             => [
			'name'   => 'TagResource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/v1/tags/{resourceArn}', ],
			'input'  => [ 'shape' => 'TagResourceRequest', ],
			'output' => [ 'shape' => 'TagResourceResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'AccessDeniedException', ],
			],
		],
		'UntagResource'           => [
			'name'   => 'UntagResource',
			'http'   => [ 'method' => 'DELETE', 'requestUri' => '/v1/tags/{resourceArn}', ],
			'input'  => [ 'shape' => 'UntagResourceRequest', ],
			'output' => [ 'shape' => 'UntagResourceResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'AccessDeniedException', ],
			],
		],
		'UpdateApiKey'            => [
			'name'   => 'UpdateApiKey',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/v1/apis/{apiId}/apikeys/{id}',
			],
			'input'  => [ 'shape' => 'UpdateApiKeyRequest', ],
			'output' => [ 'shape' => 'UpdateApiKeyResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'ApiKeyValidityOutOfBoundsException', ],
			],
		],
		'UpdateDataSource'        => [
			'name'   => 'UpdateDataSource',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/v1/apis/{apiId}/datasources/{name}',
			],
			'input'  => [ 'shape' => 'UpdateDataSourceRequest', ],
			'output' => [ 'shape' => 'UpdateDataSourceResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'UpdateFunction'          => [
			'name'   => 'UpdateFunction',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/v1/apis/{apiId}/functions/{functionId}',
			],
			'input'  => [ 'shape' => 'UpdateFunctionRequest', ],
			'output' => [ 'shape' => 'UpdateFunctionResponse', ],
			'errors' => [
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'UpdateGraphqlApi'        => [
			'name'   => 'UpdateGraphqlApi',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/v1/apis/{apiId}', ],
			'input'  => [ 'shape' => 'UpdateGraphqlApiRequest', ],
			'output' => [ 'shape' => 'UpdateGraphqlApiResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
				[ 'shape' => 'AccessDeniedException', ],
			],
		],
		'UpdateResolver'          => [
			'name'   => 'UpdateResolver',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/v1/apis/{apiId}/types/{typeName}/resolvers/{fieldName}',
			],
			'input'  => [ 'shape' => 'UpdateResolverRequest', ],
			'output' => [ 'shape' => 'UpdateResolverResponse', ],
			'errors' => [
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
		'UpdateType'              => [
			'name'   => 'UpdateType',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/v1/apis/{apiId}/types/{typeName}',
			],
			'input'  => [ 'shape' => 'UpdateTypeRequest', ],
			'output' => [ 'shape' => 'UpdateTypeResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'UnauthorizedException', ],
				[ 'shape' => 'InternalFailureException', ],
			],
		],
	],
	'shapes'     => [
		'AccessDeniedException'              => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'String', ], ],
			'error'     => [ 'httpStatusCode' => 403, ],
			'exception' => true,
		],
		'AdditionalAuthenticationProvider'   => [
			'type'    => 'structure',
			'members' => [
				'authenticationType'  => [ 'shape' => 'AuthenticationType', ],
				'openIDConnectConfig' => [ 'shape' => 'OpenIDConnectConfig', ],
				'userPoolConfig'      => [ 'shape' => 'CognitoUserPoolConfig', ],
			],
		],
		'AdditionalAuthenticationProviders'  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AdditionalAuthenticationProvider', ],
		],
		'ApiKey'                             => [
			'type'    => 'structure',
			'members' => [
				'id'          => [ 'shape' => 'String', ],
				'description' => [ 'shape' => 'String', ],
				'expires'     => [ 'shape' => 'Long', ],
			],
		],
		'ApiKeyLimitExceededException'       => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'String', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'ApiKeyValidityOutOfBoundsException' => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'String', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'ApiKeys'                            => [ 'type' => 'list', 'member' => [ 'shape' => 'ApiKey', ], ],
		'ApiLimitExceededException'          => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'String', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'AuthenticationType'                 => [
			'type' => 'string',
			'enum' => [
				'API_KEY',
				'AWS_IAM',
				'AMAZON_COGNITO_USER_POOLS',
				'OPENID_CONNECT',
			],
		],
		'AuthorizationConfig'                => [
			'type'     => 'structure',
			'required' => [ 'authorizationType', ],
			'members'  => [
				'authorizationType' => [ 'shape' => 'AuthorizationType', ],
				'awsIamConfig'      => [ 'shape' => 'AwsIamConfig', ],
			],
		],
		'AuthorizationType'                  => [ 'type' => 'string', 'enum' => [ 'AWS_IAM', ], ],
		'AwsIamConfig'                       => [
			'type'    => 'structure',
			'members' => [
				'signingRegion'      => [ 'shape' => 'String', ],
				'signingServiceName' => [ 'shape' => 'String', ],
			],
		],
		'BadRequestException'                => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'Blob'                               => [ 'type' => 'blob', ],
		'Boolean'                            => [ 'type' => 'boolean', ],
		'BooleanValue'                       => [ 'type' => 'boolean', ],
		'CognitoUserPoolConfig'              => [
			'type'     => 'structure',
			'required' => [ 'userPoolId', 'awsRegion', ],
			'members'  => [
				'userPoolId'       => [ 'shape' => 'String', ],
				'awsRegion'        => [ 'shape' => 'String', ],
				'appIdClientRegex' => [ 'shape' => 'String', ],
			],
		],
		'ConcurrentModificationException'    => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 409, ],
			'exception' => true,
		],
		'CreateApiKeyRequest'                => [
			'type'     => 'structure',
			'required' => [ 'apiId', ],
			'members'  => [
				'apiId'       => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
				'description' => [ 'shape' => 'String', ],
				'expires'     => [ 'shape' => 'Long', ],
			],
		],
		'CreateApiKeyResponse'               => [
			'type'    => 'structure',
			'members' => [ 'apiKey' => [ 'shape' => 'ApiKey', ], ],
		],
		'CreateDataSourceRequest'            => [
			'type'     => 'structure',
			'required' => [ 'apiId', 'name', 'type', ],
			'members'  => [
				'apiId'                    => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
				'name'                     => [ 'shape' => 'ResourceName', ],
				'description'              => [ 'shape' => 'String', ],
				'type'                     => [ 'shape' => 'DataSourceType', ],
				'serviceRoleArn'           => [ 'shape' => 'String', ],
				'dynamodbConfig'           => [ 'shape' => 'DynamodbDataSourceConfig', ],
				'lambdaConfig'             => [ 'shape' => 'LambdaDataSourceConfig', ],
				'elasticsearchConfig'      => [ 'shape' => 'ElasticsearchDataSourceConfig', ],
				'httpConfig'               => [ 'shape' => 'HttpDataSourceConfig', ],
				'relationalDatabaseConfig' => [ 'shape' => 'RelationalDatabaseDataSourceConfig', ],
			],
		],
		'CreateDataSourceResponse'           => [
			'type'    => 'structure',
			'members' => [ 'dataSource' => [ 'shape' => 'DataSource', ], ],
		],
		'CreateFunctionRequest'              => [
			'type'     => 'structure',
			'required' => [
				'apiId',
				'name',
				'dataSourceName',
				'requestMappingTemplate',
				'functionVersion',
			],
			'members'  => [
				'apiId'                   => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
				'name'                    => [ 'shape' => 'ResourceName', ],
				'description'             => [ 'shape' => 'String', ],
				'dataSourceName'          => [ 'shape' => 'ResourceName', ],
				'requestMappingTemplate'  => [ 'shape' => 'MappingTemplate', ],
				'responseMappingTemplate' => [ 'shape' => 'MappingTemplate', ],
				'functionVersion'         => [ 'shape' => 'String', ],
			],
		],
		'CreateFunctionResponse'             => [
			'type'    => 'structure',
			'members' => [ 'functionConfiguration' => [ 'shape' => 'FunctionConfiguration', ], ],
		],
		'CreateGraphqlApiRequest'            => [
			'type'     => 'structure',
			'required' => [ 'name', 'authenticationType', ],
			'members'  => [
				'name'                              => [ 'shape' => 'String', ],
				'logConfig'                         => [ 'shape' => 'LogConfig', ],
				'authenticationType'                => [ 'shape' => 'AuthenticationType', ],
				'userPoolConfig'                    => [ 'shape' => 'UserPoolConfig', ],
				'openIDConnectConfig'               => [ 'shape' => 'OpenIDConnectConfig', ],
				'tags'                              => [ 'shape' => 'TagMap', ],
				'additionalAuthenticationProviders' => [ 'shape' => 'AdditionalAuthenticationProviders', ],
			],
		],
		'CreateGraphqlApiResponse'           => [
			'type'    => 'structure',
			'members' => [ 'graphqlApi' => [ 'shape' => 'GraphqlApi', ], ],
		],
		'CreateResolverRequest'              => [
			'type'     => 'structure',
			'required' => [
				'apiId',
				'typeName',
				'fieldName',
				'requestMappingTemplate',
			],
			'members'  => [
				'apiId'                   => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
				'typeName'                => [
					'shape'        => 'ResourceName',
					'location'     => 'uri',
					'locationName' => 'typeName',
				],
				'fieldName'               => [ 'shape' => 'ResourceName', ],
				'dataSourceName'          => [ 'shape' => 'ResourceName', ],
				'requestMappingTemplate'  => [ 'shape' => 'MappingTemplate', ],
				'responseMappingTemplate' => [ 'shape' => 'MappingTemplate', ],
				'kind'                    => [ 'shape' => 'ResolverKind', ],
				'pipelineConfig'          => [ 'shape' => 'PipelineConfig', ],
			],
		],
		'CreateResolverResponse'             => [
			'type'    => 'structure',
			'members' => [ 'resolver' => [ 'shape' => 'Resolver', ], ],
		],
		'CreateTypeRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'apiId', 'definition', 'format', ],
			'members'  => [
				'apiId'      => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
				'definition' => [ 'shape' => 'String', ],
				'format'     => [ 'shape' => 'TypeDefinitionFormat', ],
			],
		],
		'CreateTypeResponse'                 => [
			'type'    => 'structure',
			'members' => [ 'type' => [ 'shape' => 'Type', ], ],
		],
		'DataSource'                         => [
			'type'    => 'structure',
			'members' => [
				'dataSourceArn'            => [ 'shape' => 'String', ],
				'name'                     => [ 'shape' => 'ResourceName', ],
				'description'              => [ 'shape' => 'String', ],
				'type'                     => [ 'shape' => 'DataSourceType', ],
				'serviceRoleArn'           => [ 'shape' => 'String', ],
				'dynamodbConfig'           => [ 'shape' => 'DynamodbDataSourceConfig', ],
				'lambdaConfig'             => [ 'shape' => 'LambdaDataSourceConfig', ],
				'elasticsearchConfig'      => [ 'shape' => 'ElasticsearchDataSourceConfig', ],
				'httpConfig'               => [ 'shape' => 'HttpDataSourceConfig', ],
				'relationalDatabaseConfig' => [ 'shape' => 'RelationalDatabaseDataSourceConfig', ],
			],
		],
		'DataSourceType'                     => [
			'type' => 'string',
			'enum' => [
				'AWS_LAMBDA',
				'AMAZON_DYNAMODB',
				'AMAZON_ELASTICSEARCH',
				'NONE',
				'HTTP',
				'RELATIONAL_DATABASE',
			],
		],
		'DataSources'                        => [ 'type' => 'list', 'member' => [ 'shape' => 'DataSource', ], ],
		'DefaultAction'                      => [ 'type' => 'string', 'enum' => [ 'ALLOW', 'DENY', ], ],
		'DeleteApiKeyRequest'                => [
			'type'     => 'structure',
			'required' => [ 'apiId', 'id', ],
			'members'  => [
				'apiId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
				'id'    => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'id',
				],
			],
		],
		'DeleteApiKeyResponse'               => [ 'type' => 'structure', 'members' => [], ],
		'DeleteDataSourceRequest'            => [
			'type'     => 'structure',
			'required' => [ 'apiId', 'name', ],
			'members'  => [
				'apiId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
				'name'  => [
					'shape'        => 'ResourceName',
					'location'     => 'uri',
					'locationName' => 'name',
				],
			],
		],
		'DeleteDataSourceResponse'           => [ 'type' => 'structure', 'members' => [], ],
		'DeleteFunctionRequest'              => [
			'type'     => 'structure',
			'required' => [ 'apiId', 'functionId', ],
			'members'  => [
				'apiId'      => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
				'functionId' => [
					'shape'        => 'ResourceName',
					'location'     => 'uri',
					'locationName' => 'functionId',
				],
			],
		],
		'DeleteFunctionResponse'             => [ 'type' => 'structure', 'members' => [], ],
		'DeleteGraphqlApiRequest'            => [
			'type'     => 'structure',
			'required' => [ 'apiId', ],
			'members'  => [
				'apiId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
			],
		],
		'DeleteGraphqlApiResponse'           => [ 'type' => 'structure', 'members' => [], ],
		'DeleteResolverRequest'              => [
			'type'     => 'structure',
			'required' => [ 'apiId', 'typeName', 'fieldName', ],
			'members'  => [
				'apiId'     => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
				'typeName'  => [
					'shape'        => 'ResourceName',
					'location'     => 'uri',
					'locationName' => 'typeName',
				],
				'fieldName' => [
					'shape'        => 'ResourceName',
					'location'     => 'uri',
					'locationName' => 'fieldName',
				],
			],
		],
		'DeleteResolverResponse'             => [ 'type' => 'structure', 'members' => [], ],
		'DeleteTypeRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'apiId', 'typeName', ],
			'members'  => [
				'apiId'    => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
				'typeName' => [
					'shape'        => 'ResourceName',
					'location'     => 'uri',
					'locationName' => 'typeName',
				],
			],
		],
		'DeleteTypeResponse'                 => [ 'type' => 'structure', 'members' => [], ],
		'DynamodbDataSourceConfig'           => [
			'type'     => 'structure',
			'required' => [ 'tableName', 'awsRegion', ],
			'members'  => [
				'tableName'            => [ 'shape' => 'String', ],
				'awsRegion'            => [ 'shape' => 'String', ],
				'useCallerCredentials' => [ 'shape' => 'Boolean', ],
			],
		],
		'ElasticsearchDataSourceConfig'      => [
			'type'     => 'structure',
			'required' => [ 'endpoint', 'awsRegion', ],
			'members'  => [
				'endpoint'  => [ 'shape' => 'String', ],
				'awsRegion' => [ 'shape' => 'String', ],
			],
		],
		'ErrorMessage'                       => [ 'type' => 'string', ],
		'FieldLogLevel'                      => [ 'type' => 'string', 'enum' => [ 'NONE', 'ERROR', 'ALL', ], ],
		'FunctionConfiguration'              => [
			'type'    => 'structure',
			'members' => [
				'functionId'              => [ 'shape' => 'String', ],
				'functionArn'             => [ 'shape' => 'String', ],
				'name'                    => [ 'shape' => 'ResourceName', ],
				'description'             => [ 'shape' => 'String', ],
				'dataSourceName'          => [ 'shape' => 'ResourceName', ],
				'requestMappingTemplate'  => [ 'shape' => 'MappingTemplate', ],
				'responseMappingTemplate' => [ 'shape' => 'MappingTemplate', ],
				'functionVersion'         => [ 'shape' => 'String', ],
			],
		],
		'Functions'                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'FunctionConfiguration', ],
		],
		'FunctionsIds'                       => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ],
		'GetDataSourceRequest'               => [
			'type'     => 'structure',
			'required' => [ 'apiId', 'name', ],
			'members'  => [
				'apiId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
				'name'  => [
					'shape'        => 'ResourceName',
					'location'     => 'uri',
					'locationName' => 'name',
				],
			],
		],
		'GetDataSourceResponse'              => [
			'type'    => 'structure',
			'members' => [ 'dataSource' => [ 'shape' => 'DataSource', ], ],
		],
		'GetFunctionRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'apiId', 'functionId', ],
			'members'  => [
				'apiId'      => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
				'functionId' => [
					'shape'        => 'ResourceName',
					'location'     => 'uri',
					'locationName' => 'functionId',
				],
			],
		],
		'GetFunctionResponse'                => [
			'type'    => 'structure',
			'members' => [ 'functionConfiguration' => [ 'shape' => 'FunctionConfiguration', ], ],
		],
		'GetGraphqlApiRequest'               => [
			'type'     => 'structure',
			'required' => [ 'apiId', ],
			'members'  => [
				'apiId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
			],
		],
		'GetGraphqlApiResponse'              => [
			'type'    => 'structure',
			'members' => [ 'graphqlApi' => [ 'shape' => 'GraphqlApi', ], ],
		],
		'GetIntrospectionSchemaRequest'      => [
			'type'     => 'structure',
			'required' => [ 'apiId', 'format', ],
			'members'  => [
				'apiId'             => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
				'format'            => [
					'shape'        => 'OutputType',
					'location'     => 'querystring',
					'locationName' => 'format',
				],
				'includeDirectives' => [
					'shape'        => 'BooleanValue',
					'location'     => 'querystring',
					'locationName' => 'includeDirectives',
				],
			],
		],
		'GetIntrospectionSchemaResponse'     => [
			'type'    => 'structure',
			'members' => [ 'schema' => [ 'shape' => 'Blob', ], ],
			'payload' => 'schema',
		],
		'GetResolverRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'apiId', 'typeName', 'fieldName', ],
			'members'  => [
				'apiId'     => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
				'typeName'  => [
					'shape'        => 'ResourceName',
					'location'     => 'uri',
					'locationName' => 'typeName',
				],
				'fieldName' => [
					'shape'        => 'ResourceName',
					'location'     => 'uri',
					'locationName' => 'fieldName',
				],
			],
		],
		'GetResolverResponse'                => [
			'type'    => 'structure',
			'members' => [ 'resolver' => [ 'shape' => 'Resolver', ], ],
		],
		'GetSchemaCreationStatusRequest'     => [
			'type'     => 'structure',
			'required' => [ 'apiId', ],
			'members'  => [
				'apiId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
			],
		],
		'GetSchemaCreationStatusResponse'    => [
			'type'    => 'structure',
			'members' => [
				'status'  => [ 'shape' => 'SchemaStatus', ],
				'details' => [ 'shape' => 'String', ],
			],
		],
		'GetTypeRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'apiId', 'typeName', 'format', ],
			'members'  => [
				'apiId'    => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
				'typeName' => [
					'shape'        => 'ResourceName',
					'location'     => 'uri',
					'locationName' => 'typeName',
				],
				'format'   => [
					'shape'        => 'TypeDefinitionFormat',
					'location'     => 'querystring',
					'locationName' => 'format',
				],
			],
		],
		'GetTypeResponse'                    => [
			'type'    => 'structure',
			'members' => [ 'type' => [ 'shape' => 'Type', ], ],
		],
		'GraphQLSchemaException'             => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'GraphqlApi'                         => [
			'type'    => 'structure',
			'members' => [
				'name'                              => [ 'shape' => 'ResourceName', ],
				'apiId'                             => [ 'shape' => 'String', ],
				'authenticationType'                => [ 'shape' => 'AuthenticationType', ],
				'logConfig'                         => [ 'shape' => 'LogConfig', ],
				'userPoolConfig'                    => [ 'shape' => 'UserPoolConfig', ],
				'openIDConnectConfig'               => [ 'shape' => 'OpenIDConnectConfig', ],
				'arn'                               => [ 'shape' => 'String', ],
				'uris'                              => [ 'shape' => 'MapOfStringToString', ],
				'tags'                              => [ 'shape' => 'TagMap', ],
				'additionalAuthenticationProviders' => [ 'shape' => 'AdditionalAuthenticationProviders', ],
			],
		],
		'GraphqlApis'                        => [ 'type' => 'list', 'member' => [ 'shape' => 'GraphqlApi', ], ],
		'HttpDataSourceConfig'               => [
			'type'    => 'structure',
			'members' => [
				'endpoint'            => [ 'shape' => 'String', ],
				'authorizationConfig' => [ 'shape' => 'AuthorizationConfig', ],
			],
		],
		'InternalFailureException'           => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'String', ], ],
			'error'     => [ 'httpStatusCode' => 500, ],
			'exception' => true,
			'fault'     => true,
		],
		'LambdaDataSourceConfig'             => [
			'type'     => 'structure',
			'required' => [ 'lambdaFunctionArn', ],
			'members'  => [ 'lambdaFunctionArn' => [ 'shape' => 'String', ], ],
		],
		'LimitExceededException'             => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'String', ], ],
			'error'     => [ 'httpStatusCode' => 429, ],
			'exception' => true,
		],
		'ListApiKeysRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'apiId', ],
			'members'  => [
				'apiId'      => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
				'nextToken'  => [
					'shape'        => 'PaginationToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'maxResults' => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
			],
		],
		'ListApiKeysResponse'                => [
			'type'    => 'structure',
			'members' => [
				'apiKeys'   => [ 'shape' => 'ApiKeys', ],
				'nextToken' => [ 'shape' => 'PaginationToken', ],
			],
		],
		'ListDataSourcesRequest'             => [
			'type'     => 'structure',
			'required' => [ 'apiId', ],
			'members'  => [
				'apiId'      => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
				'nextToken'  => [
					'shape'        => 'PaginationToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'maxResults' => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
			],
		],
		'ListDataSourcesResponse'            => [
			'type'    => 'structure',
			'members' => [
				'dataSources' => [ 'shape' => 'DataSources', ],
				'nextToken'   => [ 'shape' => 'PaginationToken', ],
			],
		],
		'ListFunctionsRequest'               => [
			'type'     => 'structure',
			'required' => [ 'apiId', ],
			'members'  => [
				'apiId'      => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
				'nextToken'  => [
					'shape'        => 'PaginationToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'maxResults' => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
			],
		],
		'ListFunctionsResponse'              => [
			'type'    => 'structure',
			'members' => [
				'functions' => [ 'shape' => 'Functions', ],
				'nextToken' => [ 'shape' => 'PaginationToken', ],
			],
		],
		'ListGraphqlApisRequest'             => [
			'type'    => 'structure',
			'members' => [
				'nextToken'  => [
					'shape'        => 'PaginationToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'maxResults' => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
			],
		],
		'ListGraphqlApisResponse'            => [
			'type'    => 'structure',
			'members' => [
				'graphqlApis' => [ 'shape' => 'GraphqlApis', ],
				'nextToken'   => [ 'shape' => 'PaginationToken', ],
			],
		],
		'ListResolversByFunctionRequest'     => [
			'type'     => 'structure',
			'required' => [ 'apiId', 'functionId', ],
			'members'  => [
				'apiId'      => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
				'functionId' => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'functionId',
				],
				'nextToken'  => [
					'shape'        => 'PaginationToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'maxResults' => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
			],
		],
		'ListResolversByFunctionResponse'    => [
			'type'    => 'structure',
			'members' => [
				'resolvers' => [ 'shape' => 'Resolvers', ],
				'nextToken' => [ 'shape' => 'PaginationToken', ],
			],
		],
		'ListResolversRequest'               => [
			'type'     => 'structure',
			'required' => [ 'apiId', 'typeName', ],
			'members'  => [
				'apiId'      => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
				'typeName'   => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'typeName',
				],
				'nextToken'  => [
					'shape'        => 'PaginationToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'maxResults' => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
			],
		],
		'ListResolversResponse'              => [
			'type'    => 'structure',
			'members' => [
				'resolvers' => [ 'shape' => 'Resolvers', ],
				'nextToken' => [ 'shape' => 'PaginationToken', ],
			],
		],
		'ListTagsForResourceRequest'         => [
			'type'     => 'structure',
			'required' => [ 'resourceArn', ],
			'members'  => [
				'resourceArn' => [
					'shape'        => 'ResourceArn',
					'location'     => 'uri',
					'locationName' => 'resourceArn',
				],
			],
		],
		'ListTagsForResourceResponse'        => [
			'type'    => 'structure',
			'members' => [ 'tags' => [ 'shape' => 'TagMap', ], ],
		],
		'ListTypesRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'apiId', 'format', ],
			'members'  => [
				'apiId'      => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
				'format'     => [
					'shape'        => 'TypeDefinitionFormat',
					'location'     => 'querystring',
					'locationName' => 'format',
				],
				'nextToken'  => [
					'shape'        => 'PaginationToken',
					'location'     => 'querystring',
					'locationName' => 'nextToken',
				],
				'maxResults' => [
					'shape'        => 'MaxResults',
					'location'     => 'querystring',
					'locationName' => 'maxResults',
				],
			],
		],
		'ListTypesResponse'                  => [
			'type'    => 'structure',
			'members' => [
				'types'     => [ 'shape' => 'TypeList', ],
				'nextToken' => [ 'shape' => 'PaginationToken', ],
			],
		],
		'LogConfig'                          => [
			'type'     => 'structure',
			'required' => [ 'fieldLogLevel', 'cloudWatchLogsRoleArn', ],
			'members'  => [
				'fieldLogLevel'         => [ 'shape' => 'FieldLogLevel', ],
				'cloudWatchLogsRoleArn' => [ 'shape' => 'String', ],
			],
		],
		'Long'                               => [ 'type' => 'long', ],
		'MapOfStringToString'                => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'String', ],
			'value' => [ 'shape' => 'String', ],
		],
		'MappingTemplate'                    => [ 'type' => 'string', 'max' => 65536, 'min' => 1, ],
		'MaxResults'                         => [ 'type' => 'integer', 'max' => 25, 'min' => 0, ],
		'NotFoundException'                  => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'String', ], ],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'OpenIDConnectConfig'                => [
			'type'     => 'structure',
			'required' => [ 'issuer', ],
			'members'  => [
				'issuer'   => [ 'shape' => 'String', ],
				'clientId' => [ 'shape' => 'String', ],
				'iatTTL'   => [ 'shape' => 'Long', ],
				'authTTL'  => [ 'shape' => 'Long', ],
			],
		],
		'OutputType'                         => [ 'type' => 'string', 'enum' => [ 'SDL', 'JSON', ], ],
		'PaginationToken'                    => [ 'type' => 'string', 'pattern' => '[\\\\S]+', ],
		'PipelineConfig'                     => [
			'type'    => 'structure',
			'members' => [ 'functions' => [ 'shape' => 'FunctionsIds', ], ],
		],
		'RdsHttpEndpointConfig'              => [
			'type'    => 'structure',
			'members' => [
				'awsRegion'           => [ 'shape' => 'String', ],
				'dbClusterIdentifier' => [ 'shape' => 'String', ],
				'databaseName'        => [ 'shape' => 'String', ],
				'schema'              => [ 'shape' => 'String', ],
				'awsSecretStoreArn'   => [ 'shape' => 'String', ],
			],
		],
		'RelationalDatabaseDataSourceConfig' => [
			'type'    => 'structure',
			'members' => [
				'relationalDatabaseSourceType' => [ 'shape' => 'RelationalDatabaseSourceType', ],
				'rdsHttpEndpointConfig'        => [ 'shape' => 'RdsHttpEndpointConfig', ],
			],
		],
		'RelationalDatabaseSourceType'       => [ 'type' => 'string', 'enum' => [ 'RDS_HTTP_ENDPOINT', ], ],
		'Resolver'                           => [
			'type'    => 'structure',
			'members' => [
				'typeName'                => [ 'shape' => 'ResourceName', ],
				'fieldName'               => [ 'shape' => 'ResourceName', ],
				'dataSourceName'          => [ 'shape' => 'ResourceName', ],
				'resolverArn'             => [ 'shape' => 'String', ],
				'requestMappingTemplate'  => [ 'shape' => 'MappingTemplate', ],
				'responseMappingTemplate' => [ 'shape' => 'MappingTemplate', ],
				'kind'                    => [ 'shape' => 'ResolverKind', ],
				'pipelineConfig'          => [ 'shape' => 'PipelineConfig', ],
			],
		],
		'ResolverKind'                       => [ 'type' => 'string', 'enum' => [ 'UNIT', 'PIPELINE', ], ],
		'Resolvers'                          => [ 'type' => 'list', 'member' => [ 'shape' => 'Resolver', ], ],
		'ResourceArn'                        => [
			'type'    => 'string',
			'max'     => 75,
			'min'     => 70,
			'pattern' => '^arn:aws:appsync:[A-Za-z0-9_/.-]{0,63}:\\d{12}:apis/[0-9A-Za-z_-]{26}$',
		],
		'ResourceName'                       => [ 'type' => 'string', 'pattern' => '[_A-Za-z][_0-9A-Za-z]*', ],
		'SchemaStatus'                       => [
			'type' => 'string',
			'enum' => [
				'PROCESSING',
				'ACTIVE',
				'DELETING',
				'FAILED',
				'SUCCESS',
				'NOT_APPLICABLE',
			],
		],
		'StartSchemaCreationRequest'         => [
			'type'     => 'structure',
			'required' => [ 'apiId', 'definition', ],
			'members'  => [
				'apiId'      => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
				'definition' => [ 'shape' => 'Blob', ],
			],
		],
		'StartSchemaCreationResponse'        => [
			'type'    => 'structure',
			'members' => [ 'status' => [ 'shape' => 'SchemaStatus', ], ],
		],
		'String'                             => [ 'type' => 'string', ],
		'TagKey'                             => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '^(?!aws:)[a-zA-Z+-=._:/]+$',
		],
		'TagKeyList'                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'TagKey', ],
			'max'    => 50,
			'min'    => 1,
		],
		'TagMap'                             => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'TagKey', ],
			'value' => [ 'shape' => 'TagValue', ],
			'max'   => 50,
			'min'   => 1,
		],
		'TagResourceRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'resourceArn', 'tags', ],
			'members'  => [
				'resourceArn' => [
					'shape'        => 'ResourceArn',
					'location'     => 'uri',
					'locationName' => 'resourceArn',
				],
				'tags'        => [ 'shape' => 'TagMap', ],
			],
		],
		'TagResourceResponse'                => [ 'type' => 'structure', 'members' => [], ],
		'TagValue'                           => [ 'type' => 'string', 'max' => 256, ],
		'Type'                               => [
			'type'    => 'structure',
			'members' => [
				'name'        => [ 'shape' => 'ResourceName', ],
				'description' => [ 'shape' => 'String', ],
				'arn'         => [ 'shape' => 'String', ],
				'definition'  => [ 'shape' => 'String', ],
				'format'      => [ 'shape' => 'TypeDefinitionFormat', ],
			],
		],
		'TypeDefinitionFormat'               => [ 'type' => 'string', 'enum' => [ 'SDL', 'JSON', ], ],
		'TypeList'                           => [ 'type' => 'list', 'member' => [ 'shape' => 'Type', ], ],
		'UnauthorizedException'              => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'String', ], ],
			'error'     => [ 'httpStatusCode' => 401, ],
			'exception' => true,
		],
		'UntagResourceRequest'               => [
			'type'     => 'structure',
			'required' => [ 'resourceArn', 'tagKeys', ],
			'members'  => [
				'resourceArn' => [
					'shape'        => 'ResourceArn',
					'location'     => 'uri',
					'locationName' => 'resourceArn',
				],
				'tagKeys'     => [
					'shape'        => 'TagKeyList',
					'location'     => 'querystring',
					'locationName' => 'tagKeys',
				],
			],
		],
		'UntagResourceResponse'              => [ 'type' => 'structure', 'members' => [], ],
		'UpdateApiKeyRequest'                => [
			'type'     => 'structure',
			'required' => [ 'apiId', 'id', ],
			'members'  => [
				'apiId'       => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
				'id'          => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'id',
				],
				'description' => [ 'shape' => 'String', ],
				'expires'     => [ 'shape' => 'Long', ],
			],
		],
		'UpdateApiKeyResponse'               => [
			'type'    => 'structure',
			'members' => [ 'apiKey' => [ 'shape' => 'ApiKey', ], ],
		],
		'UpdateDataSourceRequest'            => [
			'type'     => 'structure',
			'required' => [ 'apiId', 'name', 'type', ],
			'members'  => [
				'apiId'                    => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
				'name'                     => [
					'shape'        => 'ResourceName',
					'location'     => 'uri',
					'locationName' => 'name',
				],
				'description'              => [ 'shape' => 'String', ],
				'type'                     => [ 'shape' => 'DataSourceType', ],
				'serviceRoleArn'           => [ 'shape' => 'String', ],
				'dynamodbConfig'           => [ 'shape' => 'DynamodbDataSourceConfig', ],
				'lambdaConfig'             => [ 'shape' => 'LambdaDataSourceConfig', ],
				'elasticsearchConfig'      => [ 'shape' => 'ElasticsearchDataSourceConfig', ],
				'httpConfig'               => [ 'shape' => 'HttpDataSourceConfig', ],
				'relationalDatabaseConfig' => [ 'shape' => 'RelationalDatabaseDataSourceConfig', ],
			],
		],
		'UpdateDataSourceResponse'           => [
			'type'    => 'structure',
			'members' => [ 'dataSource' => [ 'shape' => 'DataSource', ], ],
		],
		'UpdateFunctionRequest'              => [
			'type'     => 'structure',
			'required' => [
				'apiId',
				'name',
				'functionId',
				'dataSourceName',
				'requestMappingTemplate',
				'functionVersion',
			],
			'members'  => [
				'apiId'                   => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
				'name'                    => [ 'shape' => 'ResourceName', ],
				'description'             => [ 'shape' => 'String', ],
				'functionId'              => [
					'shape'        => 'ResourceName',
					'location'     => 'uri',
					'locationName' => 'functionId',
				],
				'dataSourceName'          => [ 'shape' => 'ResourceName', ],
				'requestMappingTemplate'  => [ 'shape' => 'MappingTemplate', ],
				'responseMappingTemplate' => [ 'shape' => 'MappingTemplate', ],
				'functionVersion'         => [ 'shape' => 'String', ],
			],
		],
		'UpdateFunctionResponse'             => [
			'type'    => 'structure',
			'members' => [ 'functionConfiguration' => [ 'shape' => 'FunctionConfiguration', ], ],
		],
		'UpdateGraphqlApiRequest'            => [
			'type'     => 'structure',
			'required' => [ 'apiId', 'name', ],
			'members'  => [
				'apiId'                             => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
				'name'                              => [ 'shape' => 'String', ],
				'logConfig'                         => [ 'shape' => 'LogConfig', ],
				'authenticationType'                => [ 'shape' => 'AuthenticationType', ],
				'userPoolConfig'                    => [ 'shape' => 'UserPoolConfig', ],
				'openIDConnectConfig'               => [ 'shape' => 'OpenIDConnectConfig', ],
				'additionalAuthenticationProviders' => [ 'shape' => 'AdditionalAuthenticationProviders', ],
			],
		],
		'UpdateGraphqlApiResponse'           => [
			'type'    => 'structure',
			'members' => [ 'graphqlApi' => [ 'shape' => 'GraphqlApi', ], ],
		],
		'UpdateResolverRequest'              => [
			'type'     => 'structure',
			'required' => [
				'apiId',
				'typeName',
				'fieldName',
				'requestMappingTemplate',
			],
			'members'  => [
				'apiId'                   => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
				'typeName'                => [
					'shape'        => 'ResourceName',
					'location'     => 'uri',
					'locationName' => 'typeName',
				],
				'fieldName'               => [
					'shape'        => 'ResourceName',
					'location'     => 'uri',
					'locationName' => 'fieldName',
				],
				'dataSourceName'          => [ 'shape' => 'ResourceName', ],
				'requestMappingTemplate'  => [ 'shape' => 'MappingTemplate', ],
				'responseMappingTemplate' => [ 'shape' => 'MappingTemplate', ],
				'kind'                    => [ 'shape' => 'ResolverKind', ],
				'pipelineConfig'          => [ 'shape' => 'PipelineConfig', ],
			],
		],
		'UpdateResolverResponse'             => [
			'type'    => 'structure',
			'members' => [ 'resolver' => [ 'shape' => 'Resolver', ], ],
		],
		'UpdateTypeRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'apiId', 'typeName', 'format', ],
			'members'  => [
				'apiId'      => [
					'shape'        => 'String',
					'location'     => 'uri',
					'locationName' => 'apiId',
				],
				'typeName'   => [
					'shape'        => 'ResourceName',
					'location'     => 'uri',
					'locationName' => 'typeName',
				],
				'definition' => [ 'shape' => 'String', ],
				'format'     => [ 'shape' => 'TypeDefinitionFormat', ],
			],
		],
		'UpdateTypeResponse'                 => [
			'type'    => 'structure',
			'members' => [ 'type' => [ 'shape' => 'Type', ], ],
		],
		'UserPoolConfig'                     => [
			'type'     => 'structure',
			'required' => [ 'userPoolId', 'awsRegion', 'defaultAction', ],
			'members'  => [
				'userPoolId'       => [ 'shape' => 'String', ],
				'awsRegion'        => [ 'shape' => 'String', ],
				'defaultAction'    => [ 'shape' => 'DefaultAction', ],
				'appIdClientRegex' => [ 'shape' => 'String', ],
			],
		],
	],
];
