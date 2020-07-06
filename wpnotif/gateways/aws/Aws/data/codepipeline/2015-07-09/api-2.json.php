<?php
// This file was auto-generated from sdk-root/src/data/codepipeline/2015-07-09/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'          => '2015-07-09',
		'endpointPrefix'      => 'codepipeline',
		'jsonVersion'         => '1.1',
		'protocol'            => 'json',
		'serviceAbbreviation' => 'CodePipeline',
		'serviceFullName'     => 'AWS CodePipeline',
		'serviceId'           => 'CodePipeline',
		'signatureVersion'    => 'v4',
		'targetPrefix'        => 'CodePipeline_20150709',
		'uid'                 => 'codepipeline-2015-07-09',
	],
	'operations' => [
		'AcknowledgeJob'                  => [
			'name'   => 'AcknowledgeJob',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AcknowledgeJobInput', ],
			'output' => [ 'shape' => 'AcknowledgeJobOutput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'InvalidNonceException', ],
				[ 'shape' => 'JobNotFoundException', ],
			],
		],
		'AcknowledgeThirdPartyJob'        => [
			'name'   => 'AcknowledgeThirdPartyJob',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AcknowledgeThirdPartyJobInput', ],
			'output' => [ 'shape' => 'AcknowledgeThirdPartyJobOutput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'InvalidNonceException', ],
				[ 'shape' => 'JobNotFoundException', ],
				[ 'shape' => 'InvalidClientTokenException', ],
			],
		],
		'CreateCustomActionType'          => [
			'name'   => 'CreateCustomActionType',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateCustomActionTypeInput', ],
			'output' => [ 'shape' => 'CreateCustomActionTypeOutput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'TooManyTagsException', ],
				[ 'shape' => 'InvalidTagsException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
			],
		],
		'CreatePipeline'                  => [
			'name'   => 'CreatePipeline',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreatePipelineInput', ],
			'output' => [ 'shape' => 'CreatePipelineOutput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'PipelineNameInUseException', ],
				[ 'shape' => 'InvalidStageDeclarationException', ],
				[ 'shape' => 'InvalidActionDeclarationException', ],
				[ 'shape' => 'InvalidBlockerDeclarationException', ],
				[ 'shape' => 'InvalidStructureException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'TooManyTagsException', ],
				[ 'shape' => 'InvalidTagsException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
			],
		],
		'DeleteCustomActionType'          => [
			'name'   => 'DeleteCustomActionType',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteCustomActionTypeInput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
			],
		],
		'DeletePipeline'                  => [
			'name'   => 'DeletePipeline',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeletePipelineInput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
			],
		],
		'DeleteWebhook'                   => [
			'name'   => 'DeleteWebhook',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteWebhookInput', ],
			'output' => [ 'shape' => 'DeleteWebhookOutput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
			],
		],
		'DeregisterWebhookWithThirdParty' => [
			'name'   => 'DeregisterWebhookWithThirdParty',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeregisterWebhookWithThirdPartyInput', ],
			'output' => [ 'shape' => 'DeregisterWebhookWithThirdPartyOutput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'WebhookNotFoundException', ],
			],
		],
		'DisableStageTransition'          => [
			'name'   => 'DisableStageTransition',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DisableStageTransitionInput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'PipelineNotFoundException', ],
				[ 'shape' => 'StageNotFoundException', ],
			],
		],
		'EnableStageTransition'           => [
			'name'   => 'EnableStageTransition',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'EnableStageTransitionInput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'PipelineNotFoundException', ],
				[ 'shape' => 'StageNotFoundException', ],
			],
		],
		'GetJobDetails'                   => [
			'name'   => 'GetJobDetails',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetJobDetailsInput', ],
			'output' => [ 'shape' => 'GetJobDetailsOutput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'JobNotFoundException', ],
			],
		],
		'GetPipeline'                     => [
			'name'   => 'GetPipeline',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetPipelineInput', ],
			'output' => [ 'shape' => 'GetPipelineOutput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'PipelineNotFoundException', ],
				[ 'shape' => 'PipelineVersionNotFoundException', ],
			],
		],
		'GetPipelineExecution'            => [
			'name'   => 'GetPipelineExecution',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetPipelineExecutionInput', ],
			'output' => [ 'shape' => 'GetPipelineExecutionOutput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'PipelineNotFoundException', ],
				[ 'shape' => 'PipelineExecutionNotFoundException', ],
			],
		],
		'GetPipelineState'                => [
			'name'   => 'GetPipelineState',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetPipelineStateInput', ],
			'output' => [ 'shape' => 'GetPipelineStateOutput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'PipelineNotFoundException', ],
			],
		],
		'GetThirdPartyJobDetails'         => [
			'name'   => 'GetThirdPartyJobDetails',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetThirdPartyJobDetailsInput', ],
			'output' => [ 'shape' => 'GetThirdPartyJobDetailsOutput', ],
			'errors' => [
				[ 'shape' => 'JobNotFoundException', ],
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'InvalidClientTokenException', ],
				[ 'shape' => 'InvalidJobException', ],
			],
		],
		'ListActionExecutions'            => [
			'name'   => 'ListActionExecutions',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListActionExecutionsInput', ],
			'output' => [ 'shape' => 'ListActionExecutionsOutput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'PipelineNotFoundException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
				[ 'shape' => 'PipelineExecutionNotFoundException', ],
			],
		],
		'ListActionTypes'                 => [
			'name'   => 'ListActionTypes',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListActionTypesInput', ],
			'output' => [ 'shape' => 'ListActionTypesOutput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
			],
		],
		'ListPipelineExecutions'          => [
			'name'   => 'ListPipelineExecutions',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListPipelineExecutionsInput', ],
			'output' => [ 'shape' => 'ListPipelineExecutionsOutput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'PipelineNotFoundException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
			],
		],
		'ListPipelines'                   => [
			'name'   => 'ListPipelines',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListPipelinesInput', ],
			'output' => [ 'shape' => 'ListPipelinesOutput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
			],
		],
		'ListTagsForResource'             => [
			'name'   => 'ListTagsForResource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListTagsForResourceInput', ],
			'output' => [ 'shape' => 'ListTagsForResourceOutput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
				[ 'shape' => 'InvalidArnException', ],
			],
		],
		'ListWebhooks'                    => [
			'name'   => 'ListWebhooks',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListWebhooksInput', ],
			'output' => [ 'shape' => 'ListWebhooksOutput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
			],
		],
		'PollForJobs'                     => [
			'name'   => 'PollForJobs',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PollForJobsInput', ],
			'output' => [ 'shape' => 'PollForJobsOutput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'ActionTypeNotFoundException', ],
			],
		],
		'PollForThirdPartyJobs'           => [
			'name'   => 'PollForThirdPartyJobs',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PollForThirdPartyJobsInput', ],
			'output' => [ 'shape' => 'PollForThirdPartyJobsOutput', ],
			'errors' => [
				[ 'shape' => 'ActionTypeNotFoundException', ],
				[ 'shape' => 'ValidationException', ],
			],
		],
		'PutActionRevision'               => [
			'name'   => 'PutActionRevision',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PutActionRevisionInput', ],
			'output' => [ 'shape' => 'PutActionRevisionOutput', ],
			'errors' => [
				[ 'shape' => 'PipelineNotFoundException', ],
				[ 'shape' => 'StageNotFoundException', ],
				[ 'shape' => 'ActionNotFoundException', ],
				[ 'shape' => 'ValidationException', ],
			],
		],
		'PutApprovalResult'               => [
			'name'   => 'PutApprovalResult',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PutApprovalResultInput', ],
			'output' => [ 'shape' => 'PutApprovalResultOutput', ],
			'errors' => [
				[ 'shape' => 'InvalidApprovalTokenException', ],
				[ 'shape' => 'ApprovalAlreadyCompletedException', ],
				[ 'shape' => 'PipelineNotFoundException', ],
				[ 'shape' => 'StageNotFoundException', ],
				[ 'shape' => 'ActionNotFoundException', ],
				[ 'shape' => 'ValidationException', ],
			],
		],
		'PutJobFailureResult'             => [
			'name'   => 'PutJobFailureResult',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PutJobFailureResultInput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'JobNotFoundException', ],
				[ 'shape' => 'InvalidJobStateException', ],
			],
		],
		'PutJobSuccessResult'             => [
			'name'   => 'PutJobSuccessResult',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PutJobSuccessResultInput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'JobNotFoundException', ],
				[ 'shape' => 'InvalidJobStateException', ],
			],
		],
		'PutThirdPartyJobFailureResult'   => [
			'name'   => 'PutThirdPartyJobFailureResult',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PutThirdPartyJobFailureResultInput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'JobNotFoundException', ],
				[ 'shape' => 'InvalidJobStateException', ],
				[ 'shape' => 'InvalidClientTokenException', ],
			],
		],
		'PutThirdPartyJobSuccessResult'   => [
			'name'   => 'PutThirdPartyJobSuccessResult',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PutThirdPartyJobSuccessResultInput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'JobNotFoundException', ],
				[ 'shape' => 'InvalidJobStateException', ],
				[ 'shape' => 'InvalidClientTokenException', ],
			],
		],
		'PutWebhook'                      => [
			'name'   => 'PutWebhook',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PutWebhookInput', ],
			'output' => [ 'shape' => 'PutWebhookOutput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'InvalidWebhookFilterPatternException', ],
				[ 'shape' => 'InvalidWebhookAuthenticationParametersException', ],
				[ 'shape' => 'PipelineNotFoundException', ],
				[ 'shape' => 'TooManyTagsException', ],
				[ 'shape' => 'InvalidTagsException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
			],
		],
		'RegisterWebhookWithThirdParty'   => [
			'name'   => 'RegisterWebhookWithThirdParty',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RegisterWebhookWithThirdPartyInput', ],
			'output' => [ 'shape' => 'RegisterWebhookWithThirdPartyOutput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'WebhookNotFoundException', ],
			],
		],
		'RetryStageExecution'             => [
			'name'   => 'RetryStageExecution',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RetryStageExecutionInput', ],
			'output' => [ 'shape' => 'RetryStageExecutionOutput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'PipelineNotFoundException', ],
				[ 'shape' => 'StageNotFoundException', ],
				[ 'shape' => 'StageNotRetryableException', ],
				[ 'shape' => 'NotLatestPipelineExecutionException', ],
			],
		],
		'StartPipelineExecution'          => [
			'name'   => 'StartPipelineExecution',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'StartPipelineExecutionInput', ],
			'output' => [ 'shape' => 'StartPipelineExecutionOutput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'PipelineNotFoundException', ],
			],
		],
		'TagResource'                     => [
			'name'   => 'TagResource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'TagResourceInput', ],
			'output' => [ 'shape' => 'TagResourceOutput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidArnException', ],
				[ 'shape' => 'TooManyTagsException', ],
				[ 'shape' => 'InvalidTagsException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
			],
		],
		'UntagResource'                   => [
			'name'   => 'UntagResource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UntagResourceInput', ],
			'output' => [ 'shape' => 'UntagResourceOutput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidArnException', ],
				[ 'shape' => 'InvalidTagsException', ],
				[ 'shape' => 'ConcurrentModificationException', ],
			],
		],
		'UpdatePipeline'                  => [
			'name'   => 'UpdatePipeline',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdatePipelineInput', ],
			'output' => [ 'shape' => 'UpdatePipelineOutput', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'InvalidStageDeclarationException', ],
				[ 'shape' => 'InvalidActionDeclarationException', ],
				[ 'shape' => 'InvalidBlockerDeclarationException', ],
				[ 'shape' => 'InvalidStructureException', ],
				[ 'shape' => 'LimitExceededException', ],
			],
		],
	],
	'shapes'     => [
		'AWSRegionName'                                   => [ 'type' => 'string', 'max' => 30, 'min' => 4, ],
		'AWSSessionCredentials'                           => [
			'type'      => 'structure',
			'required'  => [ 'accessKeyId', 'secretAccessKey', 'sessionToken', ],
			'members'   => [
				'accessKeyId'     => [ 'shape' => 'AccessKeyId', ],
				'secretAccessKey' => [ 'shape' => 'SecretAccessKey', ],
				'sessionToken'    => [ 'shape' => 'SessionToken', ],
			],
			'sensitive' => true,
		],
		'AccessKeyId'                                     => [ 'type' => 'string', ],
		'AccountId'                                       => [ 'type' => 'string', 'pattern' => '[0-9]{12}', ],
		'AcknowledgeJobInput'                             => [
			'type'     => 'structure',
			'required' => [ 'jobId', 'nonce', ],
			'members'  => [
				'jobId' => [ 'shape' => 'JobId', ],
				'nonce' => [ 'shape' => 'Nonce', ],
			],
		],
		'AcknowledgeJobOutput'                            => [
			'type'    => 'structure',
			'members' => [ 'status' => [ 'shape' => 'JobStatus', ], ],
		],
		'AcknowledgeThirdPartyJobInput'                   => [
			'type'     => 'structure',
			'required' => [ 'jobId', 'nonce', 'clientToken', ],
			'members'  => [
				'jobId'       => [ 'shape' => 'ThirdPartyJobId', ],
				'nonce'       => [ 'shape' => 'Nonce', ],
				'clientToken' => [ 'shape' => 'ClientToken', ],
			],
		],
		'AcknowledgeThirdPartyJobOutput'                  => [
			'type'    => 'structure',
			'members' => [ 'status' => [ 'shape' => 'JobStatus', ], ],
		],
		'ActionCategory'                                  => [
			'type' => 'string',
			'enum' => [ 'Source', 'Build', 'Deploy', 'Test', 'Invoke', 'Approval', ],
		],
		'ActionConfiguration'                             => [
			'type'    => 'structure',
			'members' => [ 'configuration' => [ 'shape' => 'ActionConfigurationMap', ], ],
		],
		'ActionConfigurationKey'                          => [ 'type' => 'string', 'max' => 50, 'min' => 1, ],
		'ActionConfigurationMap'                          => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'ActionConfigurationKey', ],
			'value' => [ 'shape' => 'ActionConfigurationValue', ],
		],
		'ActionConfigurationProperty'                     => [
			'type'     => 'structure',
			'required' => [ 'name', 'required', 'key', 'secret', ],
			'members'  => [
				'name'        => [ 'shape' => 'ActionConfigurationKey', ],
				'required'    => [ 'shape' => 'Boolean', ],
				'key'         => [ 'shape' => 'Boolean', ],
				'secret'      => [ 'shape' => 'Boolean', ],
				'queryable'   => [ 'shape' => 'Boolean', ],
				'description' => [ 'shape' => 'Description', ],
				'type'        => [ 'shape' => 'ActionConfigurationPropertyType', ],
			],
		],
		'ActionConfigurationPropertyList'                 => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ActionConfigurationProperty', ],
			'max'    => 10,
		],
		'ActionConfigurationPropertyType'                 => [
			'type' => 'string',
			'enum' => [ 'String', 'Number', 'Boolean', ],
		],
		'ActionConfigurationQueryableValue'               => [
			'type'    => 'string',
			'max'     => 50,
			'min'     => 1,
			'pattern' => '[a-zA-Z0-9_-]+',
		],
		'ActionConfigurationValue'                        => [ 'type' => 'string', 'max' => 1000, 'min' => 1, ],
		'ActionContext'                                   => [
			'type'    => 'structure',
			'members' => [
				'name'              => [ 'shape' => 'ActionName', ],
				'actionExecutionId' => [ 'shape' => 'ActionExecutionId', ],
			],
		],
		'ActionDeclaration'                               => [
			'type'     => 'structure',
			'required' => [ 'name', 'actionTypeId', ],
			'members'  => [
				'name'            => [ 'shape' => 'ActionName', ],
				'actionTypeId'    => [ 'shape' => 'ActionTypeId', ],
				'runOrder'        => [ 'shape' => 'ActionRunOrder', ],
				'configuration'   => [ 'shape' => 'ActionConfigurationMap', ],
				'outputArtifacts' => [ 'shape' => 'OutputArtifactList', ],
				'inputArtifacts'  => [ 'shape' => 'InputArtifactList', ],
				'roleArn'         => [ 'shape' => 'RoleArn', ],
				'region'          => [ 'shape' => 'AWSRegionName', ],
			],
		],
		'ActionExecution'                                 => [
			'type'    => 'structure',
			'members' => [
				'status'               => [ 'shape' => 'ActionExecutionStatus', ],
				'summary'              => [ 'shape' => 'ExecutionSummary', ],
				'lastStatusChange'     => [ 'shape' => 'Timestamp', ],
				'token'                => [ 'shape' => 'ActionExecutionToken', ],
				'lastUpdatedBy'        => [ 'shape' => 'LastUpdatedBy', ],
				'externalExecutionId'  => [ 'shape' => 'ExecutionId', ],
				'externalExecutionUrl' => [ 'shape' => 'Url', ],
				'percentComplete'      => [ 'shape' => 'Percentage', ],
				'errorDetails'         => [ 'shape' => 'ErrorDetails', ],
			],
		],
		'ActionExecutionDetail'                           => [
			'type'    => 'structure',
			'members' => [
				'pipelineExecutionId' => [ 'shape' => 'PipelineExecutionId', ],
				'actionExecutionId'   => [ 'shape' => 'ActionExecutionId', ],
				'pipelineVersion'     => [ 'shape' => 'PipelineVersion', ],
				'stageName'           => [ 'shape' => 'StageName', ],
				'actionName'          => [ 'shape' => 'ActionName', ],
				'startTime'           => [ 'shape' => 'Timestamp', ],
				'lastUpdateTime'      => [ 'shape' => 'Timestamp', ],
				'status'              => [ 'shape' => 'ActionExecutionStatus', ],
				'input'               => [ 'shape' => 'ActionExecutionInput', ],
				'output'              => [ 'shape' => 'ActionExecutionOutput', ],
			],
		],
		'ActionExecutionDetailList'                       => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ActionExecutionDetail', ],
		],
		'ActionExecutionFilter'                           => [
			'type'    => 'structure',
			'members' => [ 'pipelineExecutionId' => [ 'shape' => 'PipelineExecutionId', ], ],
		],
		'ActionExecutionId'                               => [ 'type' => 'string', ],
		'ActionExecutionInput'                            => [
			'type'    => 'structure',
			'members' => [
				'actionTypeId'   => [ 'shape' => 'ActionTypeId', ],
				'configuration'  => [ 'shape' => 'ActionConfigurationMap', ],
				'roleArn'        => [ 'shape' => 'RoleArn', ],
				'region'         => [ 'shape' => 'AWSRegionName', ],
				'inputArtifacts' => [ 'shape' => 'ArtifactDetailList', ],
			],
		],
		'ActionExecutionOutput'                           => [
			'type'    => 'structure',
			'members' => [
				'outputArtifacts' => [ 'shape' => 'ArtifactDetailList', ],
				'executionResult' => [ 'shape' => 'ActionExecutionResult', ],
			],
		],
		'ActionExecutionResult'                           => [
			'type'    => 'structure',
			'members' => [
				'externalExecutionId'      => [ 'shape' => 'ExternalExecutionId', ],
				'externalExecutionSummary' => [ 'shape' => 'ExternalExecutionSummary', ],
				'externalExecutionUrl'     => [ 'shape' => 'Url', ],
			],
		],
		'ActionExecutionStatus'                           => [
			'type' => 'string',
			'enum' => [ 'InProgress', 'Succeeded', 'Failed', ],
		],
		'ActionExecutionToken'                            => [ 'type' => 'string', ],
		'ActionName'                                      => [
			'type'    => 'string',
			'max'     => 100,
			'min'     => 1,
			'pattern' => '[A-Za-z0-9.@\\-_]+',
		],
		'ActionNotFoundException'                         => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'ActionOwner'                                     => [
			'type' => 'string',
			'enum' => [ 'AWS', 'ThirdParty', 'Custom', ],
		],
		'ActionProvider'                                  => [
			'type'    => 'string',
			'max'     => 25,
			'min'     => 1,
			'pattern' => '[0-9A-Za-z_-]+',
		],
		'ActionRevision'                                  => [
			'type'     => 'structure',
			'required' => [ 'revisionId', 'revisionChangeId', 'created', ],
			'members'  => [
				'revisionId'       => [ 'shape' => 'Revision', ],
				'revisionChangeId' => [ 'shape' => 'RevisionChangeIdentifier', ],
				'created'          => [ 'shape' => 'Timestamp', ],
			],
		],
		'ActionRunOrder'                                  => [ 'type' => 'integer', 'max' => 999, 'min' => 1, ],
		'ActionState'                                     => [
			'type'    => 'structure',
			'members' => [
				'actionName'      => [ 'shape' => 'ActionName', ],
				'currentRevision' => [ 'shape' => 'ActionRevision', ],
				'latestExecution' => [ 'shape' => 'ActionExecution', ],
				'entityUrl'       => [ 'shape' => 'Url', ],
				'revisionUrl'     => [ 'shape' => 'Url', ],
			],
		],
		'ActionStateList'                                 => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ActionState', ],
		],
		'ActionType'                                      => [
			'type'     => 'structure',
			'required' => [
				'id',
				'inputArtifactDetails',
				'outputArtifactDetails',
			],
			'members'  => [
				'id'                            => [ 'shape' => 'ActionTypeId', ],
				'settings'                      => [ 'shape' => 'ActionTypeSettings', ],
				'actionConfigurationProperties' => [ 'shape' => 'ActionConfigurationPropertyList', ],
				'inputArtifactDetails'          => [ 'shape' => 'ArtifactDetails', ],
				'outputArtifactDetails'         => [ 'shape' => 'ArtifactDetails', ],
			],
		],
		'ActionTypeId'                                    => [
			'type'     => 'structure',
			'required' => [ 'category', 'owner', 'provider', 'version', ],
			'members'  => [
				'category' => [ 'shape' => 'ActionCategory', ],
				'owner'    => [ 'shape' => 'ActionOwner', ],
				'provider' => [ 'shape' => 'ActionProvider', ],
				'version'  => [ 'shape' => 'Version', ],
			],
		],
		'ActionTypeList'                                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ActionType', ],
		],
		'ActionTypeNotFoundException'                     => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'ActionTypeSettings'                              => [
			'type'    => 'structure',
			'members' => [
				'thirdPartyConfigurationUrl' => [ 'shape' => 'Url', ],
				'entityUrlTemplate'          => [ 'shape' => 'UrlTemplate', ],
				'executionUrlTemplate'       => [ 'shape' => 'UrlTemplate', ],
				'revisionUrlTemplate'        => [ 'shape' => 'UrlTemplate', ],
			],
		],
		'ApprovalAlreadyCompletedException'               => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'ApprovalResult'                                  => [
			'type'     => 'structure',
			'required' => [ 'summary', 'status', ],
			'members'  => [
				'summary' => [ 'shape' => 'ApprovalSummary', ],
				'status'  => [ 'shape' => 'ApprovalStatus', ],
			],
		],
		'ApprovalStatus'                                  => [
			'type' => 'string',
			'enum' => [ 'Approved', 'Rejected', ],
		],
		'ApprovalSummary'                                 => [ 'type' => 'string', 'max' => 512, 'min' => 0, ],
		'ApprovalToken'                                   => [
			'type'    => 'string',
			'pattern' => '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}',
		],
		'Artifact'                                        => [
			'type'    => 'structure',
			'members' => [
				'name'     => [ 'shape' => 'ArtifactName', ],
				'revision' => [ 'shape' => 'Revision', ],
				'location' => [ 'shape' => 'ArtifactLocation', ],
			],
		],
		'ArtifactDetail'                                  => [
			'type'    => 'structure',
			'members' => [
				'name'       => [ 'shape' => 'ArtifactName', ],
				's3location' => [ 'shape' => 'S3Location', ],
			],
		],
		'ArtifactDetailList'                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ArtifactDetail', ],
		],
		'ArtifactDetails'                                 => [
			'type'     => 'structure',
			'required' => [ 'minimumCount', 'maximumCount', ],
			'members'  => [
				'minimumCount' => [ 'shape' => 'MinimumArtifactCount', ],
				'maximumCount' => [ 'shape' => 'MaximumArtifactCount', ],
			],
		],
		'ArtifactList'                                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Artifact', ],
		],
		'ArtifactLocation'                                => [
			'type'    => 'structure',
			'members' => [
				'type'       => [ 'shape' => 'ArtifactLocationType', ],
				's3Location' => [ 'shape' => 'S3ArtifactLocation', ],
			],
		],
		'ArtifactLocationType'                            => [ 'type' => 'string', 'enum' => [ 'S3', ], ],
		'ArtifactName'                                    => [
			'type'    => 'string',
			'max'     => 100,
			'min'     => 1,
			'pattern' => '[a-zA-Z0-9_\\-]+',
		],
		'ArtifactRevision'                                => [
			'type'    => 'structure',
			'members' => [
				'name'                     => [ 'shape' => 'ArtifactName', ],
				'revisionId'               => [ 'shape' => 'Revision', ],
				'revisionChangeIdentifier' => [ 'shape' => 'RevisionChangeIdentifier', ],
				'revisionSummary'          => [ 'shape' => 'RevisionSummary', ],
				'created'                  => [ 'shape' => 'Timestamp', ],
				'revisionUrl'              => [ 'shape' => 'Url', ],
			],
		],
		'ArtifactRevisionList'                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ArtifactRevision', ],
		],
		'ArtifactStore'                                   => [
			'type'     => 'structure',
			'required' => [ 'type', 'location', ],
			'members'  => [
				'type'          => [ 'shape' => 'ArtifactStoreType', ],
				'location'      => [ 'shape' => 'ArtifactStoreLocation', ],
				'encryptionKey' => [ 'shape' => 'EncryptionKey', ],
			],
		],
		'ArtifactStoreLocation'                           => [
			'type'    => 'string',
			'max'     => 63,
			'min'     => 3,
			'pattern' => '[a-zA-Z0-9\\-\\.]+',
		],
		'ArtifactStoreMap'                                => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'AWSRegionName', ],
			'value' => [ 'shape' => 'ArtifactStore', ],
		],
		'ArtifactStoreType'                               => [ 'type' => 'string', 'enum' => [ 'S3', ], ],
		'BlockerDeclaration'                              => [
			'type'     => 'structure',
			'required' => [ 'name', 'type', ],
			'members'  => [
				'name' => [ 'shape' => 'BlockerName', ],
				'type' => [ 'shape' => 'BlockerType', ],
			],
		],
		'BlockerName'                                     => [ 'type' => 'string', 'max' => 100, 'min' => 1, ],
		'BlockerType'                                     => [ 'type' => 'string', 'enum' => [ 'Schedule', ], ],
		'Boolean'                                         => [ 'type' => 'boolean', ],
		'ClientId'                                        => [
			'type'    => 'string',
			'pattern' => '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}',
		],
		'ClientRequestToken'                              => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '^[a-zA-Z0-9-]+$',
		],
		'ClientToken'                                     => [ 'type' => 'string', 'max' => 256, 'min' => 1, ],
		'Code'                                            => [ 'type' => 'string', ],
		'ConcurrentModificationException'                 => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'Message', ], ],
			'exception' => true,
		],
		'ContinuationToken'                               => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ],
		'CreateCustomActionTypeInput'                     => [
			'type'     => 'structure',
			'required' => [
				'category',
				'provider',
				'version',
				'inputArtifactDetails',
				'outputArtifactDetails',
			],
			'members'  => [
				'category'                => [ 'shape' => 'ActionCategory', ],
				'provider'                => [ 'shape' => 'ActionProvider', ],
				'version'                 => [ 'shape' => 'Version', ],
				'settings'                => [ 'shape' => 'ActionTypeSettings', ],
				'configurationProperties' => [ 'shape' => 'ActionConfigurationPropertyList', ],
				'inputArtifactDetails'    => [ 'shape' => 'ArtifactDetails', ],
				'outputArtifactDetails'   => [ 'shape' => 'ArtifactDetails', ],
				'tags'                    => [ 'shape' => 'TagList', ],
			],
		],
		'CreateCustomActionTypeOutput'                    => [
			'type'     => 'structure',
			'required' => [ 'actionType', ],
			'members'  => [
				'actionType' => [ 'shape' => 'ActionType', ],
				'tags'       => [ 'shape' => 'TagList', ],
			],
		],
		'CreatePipelineInput'                             => [
			'type'     => 'structure',
			'required' => [ 'pipeline', ],
			'members'  => [
				'pipeline' => [ 'shape' => 'PipelineDeclaration', ],
				'tags'     => [ 'shape' => 'TagList', ],
			],
		],
		'CreatePipelineOutput'                            => [
			'type'    => 'structure',
			'members' => [
				'pipeline' => [ 'shape' => 'PipelineDeclaration', ],
				'tags'     => [ 'shape' => 'TagList', ],
			],
		],
		'CurrentRevision'                                 => [
			'type'     => 'structure',
			'required' => [ 'revision', 'changeIdentifier', ],
			'members'  => [
				'revision'         => [ 'shape' => 'Revision', ],
				'changeIdentifier' => [ 'shape' => 'RevisionChangeIdentifier', ],
				'created'          => [ 'shape' => 'Time', ],
				'revisionSummary'  => [ 'shape' => 'RevisionSummary', ],
			],
		],
		'DeleteCustomActionTypeInput'                     => [
			'type'     => 'structure',
			'required' => [ 'category', 'provider', 'version', ],
			'members'  => [
				'category' => [ 'shape' => 'ActionCategory', ],
				'provider' => [ 'shape' => 'ActionProvider', ],
				'version'  => [ 'shape' => 'Version', ],
			],
		],
		'DeletePipelineInput'                             => [
			'type'     => 'structure',
			'required' => [ 'name', ],
			'members'  => [ 'name' => [ 'shape' => 'PipelineName', ], ],
		],
		'DeleteWebhookInput'                              => [
			'type'     => 'structure',
			'required' => [ 'name', ],
			'members'  => [ 'name' => [ 'shape' => 'WebhookName', ], ],
		],
		'DeleteWebhookOutput'                             => [ 'type' => 'structure', 'members' => [], ],
		'DeregisterWebhookWithThirdPartyInput'            => [
			'type'    => 'structure',
			'members' => [ 'webhookName' => [ 'shape' => 'WebhookName', ], ],
		],
		'DeregisterWebhookWithThirdPartyOutput'           => [ 'type' => 'structure', 'members' => [], ],
		'Description'                                     => [ 'type' => 'string', 'max' => 160, 'min' => 1, ],
		'DisableStageTransitionInput'                     => [
			'type'     => 'structure',
			'required' => [
				'pipelineName',
				'stageName',
				'transitionType',
				'reason',
			],
			'members'  => [
				'pipelineName'   => [ 'shape' => 'PipelineName', ],
				'stageName'      => [ 'shape' => 'StageName', ],
				'transitionType' => [ 'shape' => 'StageTransitionType', ],
				'reason'         => [ 'shape' => 'DisabledReason', ],
			],
		],
		'DisabledReason'                                  => [
			'type'    => 'string',
			'max'     => 300,
			'min'     => 1,
			'pattern' => '[a-zA-Z0-9!@ \\(\\)\\.\\*\\?\\-]+',
		],
		'EnableStageTransitionInput'                      => [
			'type'     => 'structure',
			'required' => [ 'pipelineName', 'stageName', 'transitionType', ],
			'members'  => [
				'pipelineName'   => [ 'shape' => 'PipelineName', ],
				'stageName'      => [ 'shape' => 'StageName', ],
				'transitionType' => [ 'shape' => 'StageTransitionType', ],
			],
		],
		'Enabled'                                         => [ 'type' => 'boolean', ],
		'EncryptionKey'                                   => [
			'type'     => 'structure',
			'required' => [ 'id', 'type', ],
			'members'  => [
				'id'   => [ 'shape' => 'EncryptionKeyId', ],
				'type' => [ 'shape' => 'EncryptionKeyType', ],
			],
		],
		'EncryptionKeyId'                                 => [ 'type' => 'string', 'max' => 100, 'min' => 1, ],
		'EncryptionKeyType'                               => [ 'type' => 'string', 'enum' => [ 'KMS', ], ],
		'ErrorDetails'                                    => [
			'type'    => 'structure',
			'members' => [
				'code'    => [ 'shape' => 'Code', ],
				'message' => [ 'shape' => 'Message', ],
			],
		],
		'ExecutionDetails'                                => [
			'type'    => 'structure',
			'members' => [
				'summary'             => [ 'shape' => 'ExecutionSummary', ],
				'externalExecutionId' => [ 'shape' => 'ExecutionId', ],
				'percentComplete'     => [ 'shape' => 'Percentage', ],
			],
		],
		'ExecutionId'                                     => [ 'type' => 'string', 'max' => 1500, 'min' => 1, ],
		'ExecutionSummary'                                => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ],
		'ExternalExecutionId'                             => [ 'type' => 'string', ],
		'ExternalExecutionSummary'                        => [ 'type' => 'string', ],
		'FailureDetails'                                  => [
			'type'     => 'structure',
			'required' => [ 'type', 'message', ],
			'members'  => [
				'type'                => [ 'shape' => 'FailureType', ],
				'message'             => [ 'shape' => 'Message', ],
				'externalExecutionId' => [ 'shape' => 'ExecutionId', ],
			],
		],
		'FailureType'                                     => [
			'type' => 'string',
			'enum' => [
				'JobFailed',
				'ConfigurationError',
				'PermissionError',
				'RevisionOutOfSync',
				'RevisionUnavailable',
				'SystemUnavailable',
			],
		],
		'GetJobDetailsInput'                              => [
			'type'     => 'structure',
			'required' => [ 'jobId', ],
			'members'  => [ 'jobId' => [ 'shape' => 'JobId', ], ],
		],
		'GetJobDetailsOutput'                             => [
			'type'    => 'structure',
			'members' => [ 'jobDetails' => [ 'shape' => 'JobDetails', ], ],
		],
		'GetPipelineExecutionInput'                       => [
			'type'     => 'structure',
			'required' => [ 'pipelineName', 'pipelineExecutionId', ],
			'members'  => [
				'pipelineName'        => [ 'shape' => 'PipelineName', ],
				'pipelineExecutionId' => [ 'shape' => 'PipelineExecutionId', ],
			],
		],
		'GetPipelineExecutionOutput'                      => [
			'type'    => 'structure',
			'members' => [ 'pipelineExecution' => [ 'shape' => 'PipelineExecution', ], ],
		],
		'GetPipelineInput'                                => [
			'type'     => 'structure',
			'required' => [ 'name', ],
			'members'  => [
				'name'    => [ 'shape' => 'PipelineName', ],
				'version' => [ 'shape' => 'PipelineVersion', ],
			],
		],
		'GetPipelineOutput'                               => [
			'type'    => 'structure',
			'members' => [
				'pipeline' => [ 'shape' => 'PipelineDeclaration', ],
				'metadata' => [ 'shape' => 'PipelineMetadata', ],
			],
		],
		'GetPipelineStateInput'                           => [
			'type'     => 'structure',
			'required' => [ 'name', ],
			'members'  => [ 'name' => [ 'shape' => 'PipelineName', ], ],
		],
		'GetPipelineStateOutput'                          => [
			'type'    => 'structure',
			'members' => [
				'pipelineName'    => [ 'shape' => 'PipelineName', ],
				'pipelineVersion' => [ 'shape' => 'PipelineVersion', ],
				'stageStates'     => [ 'shape' => 'StageStateList', ],
				'created'         => [ 'shape' => 'Timestamp', ],
				'updated'         => [ 'shape' => 'Timestamp', ],
			],
		],
		'GetThirdPartyJobDetailsInput'                    => [
			'type'     => 'structure',
			'required' => [ 'jobId', 'clientToken', ],
			'members'  => [
				'jobId'       => [ 'shape' => 'ThirdPartyJobId', ],
				'clientToken' => [ 'shape' => 'ClientToken', ],
			],
		],
		'GetThirdPartyJobDetailsOutput'                   => [
			'type'    => 'structure',
			'members' => [ 'jobDetails' => [ 'shape' => 'ThirdPartyJobDetails', ], ],
		],
		'InputArtifact'                                   => [
			'type'     => 'structure',
			'required' => [ 'name', ],
			'members'  => [ 'name' => [ 'shape' => 'ArtifactName', ], ],
		],
		'InputArtifactList'                               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'InputArtifact', ],
		],
		'InvalidActionDeclarationException'               => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'InvalidApprovalTokenException'                   => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'InvalidArnException'                             => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'Message', ], ],
			'exception' => true,
		],
		'InvalidBlockerDeclarationException'              => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'InvalidClientTokenException'                     => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'InvalidJobException'                             => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'InvalidJobStateException'                        => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'InvalidNextTokenException'                       => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'InvalidNonceException'                           => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'InvalidStageDeclarationException'                => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'InvalidStructureException'                       => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'InvalidTagsException'                            => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'Message', ], ],
			'exception' => true,
		],
		'InvalidWebhookAuthenticationParametersException' => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'InvalidWebhookFilterPatternException'            => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'Job'                                             => [
			'type'    => 'structure',
			'members' => [
				'id'        => [ 'shape' => 'JobId', ],
				'data'      => [ 'shape' => 'JobData', ],
				'nonce'     => [ 'shape' => 'Nonce', ],
				'accountId' => [ 'shape' => 'AccountId', ],
			],
		],
		'JobData'                                         => [
			'type'    => 'structure',
			'members' => [
				'actionTypeId'        => [ 'shape' => 'ActionTypeId', ],
				'actionConfiguration' => [ 'shape' => 'ActionConfiguration', ],
				'pipelineContext'     => [ 'shape' => 'PipelineContext', ],
				'inputArtifacts'      => [ 'shape' => 'ArtifactList', ],
				'outputArtifacts'     => [ 'shape' => 'ArtifactList', ],
				'artifactCredentials' => [ 'shape' => 'AWSSessionCredentials', ],
				'continuationToken'   => [ 'shape' => 'ContinuationToken', ],
				'encryptionKey'       => [ 'shape' => 'EncryptionKey', ],
			],
		],
		'JobDetails'                                      => [
			'type'    => 'structure',
			'members' => [
				'id'        => [ 'shape' => 'JobId', ],
				'data'      => [ 'shape' => 'JobData', ],
				'accountId' => [ 'shape' => 'AccountId', ],
			],
		],
		'JobId'                                           => [
			'type'    => 'string',
			'pattern' => '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}',
		],
		'JobList'                                         => [ 'type' => 'list', 'member' => [ 'shape' => 'Job', ], ],
		'JobNotFoundException'                            => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'JobStatus'                                       => [
			'type' => 'string',
			'enum' => [
				'Created',
				'Queued',
				'Dispatched',
				'InProgress',
				'TimedOut',
				'Succeeded',
				'Failed',
			],
		],
		'JsonPath'                                        => [ 'type' => 'string', 'max' => 150, 'min' => 1, ],
		'LastChangedAt'                                   => [ 'type' => 'timestamp', ],
		'LastChangedBy'                                   => [ 'type' => 'string', ],
		'LastUpdatedBy'                                   => [ 'type' => 'string', ],
		'LimitExceededException'                          => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'ListActionExecutionsInput'                       => [
			'type'     => 'structure',
			'required' => [ 'pipelineName', ],
			'members'  => [
				'pipelineName' => [ 'shape' => 'PipelineName', ],
				'filter'       => [ 'shape' => 'ActionExecutionFilter', ],
				'maxResults'   => [ 'shape' => 'MaxResults', ],
				'nextToken'    => [ 'shape' => 'NextToken', ],
			],
		],
		'ListActionExecutionsOutput'                      => [
			'type'    => 'structure',
			'members' => [
				'actionExecutionDetails' => [ 'shape' => 'ActionExecutionDetailList', ],
				'nextToken'              => [ 'shape' => 'NextToken', ],
			],
		],
		'ListActionTypesInput'                            => [
			'type'    => 'structure',
			'members' => [
				'actionOwnerFilter' => [ 'shape' => 'ActionOwner', ],
				'nextToken'         => [ 'shape' => 'NextToken', ],
			],
		],
		'ListActionTypesOutput'                           => [
			'type'     => 'structure',
			'required' => [ 'actionTypes', ],
			'members'  => [
				'actionTypes' => [ 'shape' => 'ActionTypeList', ],
				'nextToken'   => [ 'shape' => 'NextToken', ],
			],
		],
		'ListPipelineExecutionsInput'                     => [
			'type'     => 'structure',
			'required' => [ 'pipelineName', ],
			'members'  => [
				'pipelineName' => [ 'shape' => 'PipelineName', ],
				'maxResults'   => [ 'shape' => 'MaxResults', ],
				'nextToken'    => [ 'shape' => 'NextToken', ],
			],
		],
		'ListPipelineExecutionsOutput'                    => [
			'type'    => 'structure',
			'members' => [
				'pipelineExecutionSummaries' => [ 'shape' => 'PipelineExecutionSummaryList', ],
				'nextToken'                  => [ 'shape' => 'NextToken', ],
			],
		],
		'ListPipelinesInput'                              => [
			'type'    => 'structure',
			'members' => [ 'nextToken' => [ 'shape' => 'NextToken', ], ],
		],
		'ListPipelinesOutput'                             => [
			'type'    => 'structure',
			'members' => [
				'pipelines' => [ 'shape' => 'PipelineList', ],
				'nextToken' => [ 'shape' => 'NextToken', ],
			],
		],
		'ListTagsForResourceInput'                        => [
			'type'     => 'structure',
			'required' => [ 'resourceArn', ],
			'members'  => [
				'resourceArn' => [ 'shape' => 'ResourceArn', ],
				'nextToken'   => [ 'shape' => 'NextToken', ],
				'maxResults'  => [ 'shape' => 'MaxResults', ],
			],
		],
		'ListTagsForResourceOutput'                       => [
			'type'    => 'structure',
			'members' => [
				'tags'      => [ 'shape' => 'TagList', ],
				'nextToken' => [ 'shape' => 'NextToken', ],
			],
		],
		'ListWebhookItem'                                 => [
			'type'     => 'structure',
			'required' => [ 'definition', 'url', ],
			'members'  => [
				'definition'    => [ 'shape' => 'WebhookDefinition', ],
				'url'           => [ 'shape' => 'WebhookUrl', ],
				'errorMessage'  => [ 'shape' => 'WebhookErrorMessage', ],
				'errorCode'     => [ 'shape' => 'WebhookErrorCode', ],
				'lastTriggered' => [ 'shape' => 'WebhookLastTriggered', ],
				'arn'           => [ 'shape' => 'WebhookArn', ],
				'tags'          => [ 'shape' => 'TagList', ],
			],
		],
		'ListWebhooksInput'                               => [
			'type'    => 'structure',
			'members' => [
				'NextToken'  => [ 'shape' => 'NextToken', ],
				'MaxResults' => [ 'shape' => 'MaxResults', ],
			],
		],
		'ListWebhooksOutput'                              => [
			'type'    => 'structure',
			'members' => [
				'webhooks'  => [ 'shape' => 'WebhookList', ],
				'NextToken' => [ 'shape' => 'NextToken', ],
			],
		],
		'MatchEquals'                                     => [ 'type' => 'string', 'max' => 150, 'min' => 1, ],
		'MaxBatchSize'                                    => [ 'type' => 'integer', 'min' => 1, ],
		'MaxResults'                                      => [ 'type' => 'integer', 'max' => 100, 'min' => 1, ],
		'MaximumArtifactCount'                            => [ 'type' => 'integer', 'max' => 5, 'min' => 0, ],
		'Message'                                         => [ 'type' => 'string', 'max' => 5000, 'min' => 1, ],
		'MinimumArtifactCount'                            => [ 'type' => 'integer', 'max' => 5, 'min' => 0, ],
		'NextToken'                                       => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ],
		'Nonce'                                           => [ 'type' => 'string', 'max' => 50, 'min' => 1, ],
		'NotLatestPipelineExecutionException'             => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'OutputArtifact'                                  => [
			'type'     => 'structure',
			'required' => [ 'name', ],
			'members'  => [ 'name' => [ 'shape' => 'ArtifactName', ], ],
		],
		'OutputArtifactList'                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'OutputArtifact', ],
		],
		'Percentage'                                      => [ 'type' => 'integer', 'max' => 100, 'min' => 0, ],
		'PipelineArn'                                     => [
			'type'    => 'string',
			'pattern' => 'arn:aws(-[\\w]+)*:codepipeline:.+:[0-9]{12}:.+',
		],
		'PipelineContext'                                 => [
			'type'    => 'structure',
			'members' => [
				'pipelineName'        => [ 'shape' => 'PipelineName', ],
				'stage'               => [ 'shape' => 'StageContext', ],
				'action'              => [ 'shape' => 'ActionContext', ],
				'pipelineArn'         => [ 'shape' => 'PipelineArn', ],
				'pipelineExecutionId' => [ 'shape' => 'PipelineExecutionId', ],
			],
		],
		'PipelineDeclaration'                             => [
			'type'     => 'structure',
			'required' => [ 'name', 'roleArn', 'stages', ],
			'members'  => [
				'name'           => [ 'shape' => 'PipelineName', ],
				'roleArn'        => [ 'shape' => 'RoleArn', ],
				'artifactStore'  => [ 'shape' => 'ArtifactStore', ],
				'artifactStores' => [ 'shape' => 'ArtifactStoreMap', ],
				'stages'         => [ 'shape' => 'PipelineStageDeclarationList', ],
				'version'        => [ 'shape' => 'PipelineVersion', ],
			],
		],
		'PipelineExecution'                               => [
			'type'    => 'structure',
			'members' => [
				'pipelineName'        => [ 'shape' => 'PipelineName', ],
				'pipelineVersion'     => [ 'shape' => 'PipelineVersion', ],
				'pipelineExecutionId' => [ 'shape' => 'PipelineExecutionId', ],
				'status'              => [ 'shape' => 'PipelineExecutionStatus', ],
				'artifactRevisions'   => [ 'shape' => 'ArtifactRevisionList', ],
			],
		],
		'PipelineExecutionId'                             => [
			'type'    => 'string',
			'pattern' => '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}',
		],
		'PipelineExecutionNotFoundException'              => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'PipelineExecutionStatus'                         => [
			'type' => 'string',
			'enum' => [
				'InProgress',
				'Succeeded',
				'Superseded',
				'Failed',
			],
		],
		'PipelineExecutionSummary'                        => [
			'type'    => 'structure',
			'members' => [
				'pipelineExecutionId' => [ 'shape' => 'PipelineExecutionId', ],
				'status'              => [ 'shape' => 'PipelineExecutionStatus', ],
				'startTime'           => [ 'shape' => 'Timestamp', ],
				'lastUpdateTime'      => [ 'shape' => 'Timestamp', ],
				'sourceRevisions'     => [ 'shape' => 'SourceRevisionList', ],
			],
		],
		'PipelineExecutionSummaryList'                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'PipelineExecutionSummary', ],
		],
		'PipelineList'                                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'PipelineSummary', ],
		],
		'PipelineMetadata'                                => [
			'type'    => 'structure',
			'members' => [
				'pipelineArn' => [ 'shape' => 'PipelineArn', ],
				'created'     => [ 'shape' => 'Timestamp', ],
				'updated'     => [ 'shape' => 'Timestamp', ],
			],
		],
		'PipelineName'                                    => [
			'type'    => 'string',
			'max'     => 100,
			'min'     => 1,
			'pattern' => '[A-Za-z0-9.@\\-_]+',
		],
		'PipelineNameInUseException'                      => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'PipelineNotFoundException'                       => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'PipelineStageDeclarationList'                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'StageDeclaration', ],
		],
		'PipelineSummary'                                 => [
			'type'    => 'structure',
			'members' => [
				'name'    => [ 'shape' => 'PipelineName', ],
				'version' => [ 'shape' => 'PipelineVersion', ],
				'created' => [ 'shape' => 'Timestamp', ],
				'updated' => [ 'shape' => 'Timestamp', ],
			],
		],
		'PipelineVersion'                                 => [ 'type' => 'integer', 'min' => 1, ],
		'PipelineVersionNotFoundException'                => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'PollForJobsInput'                                => [
			'type'     => 'structure',
			'required' => [ 'actionTypeId', ],
			'members'  => [
				'actionTypeId' => [ 'shape' => 'ActionTypeId', ],
				'maxBatchSize' => [ 'shape' => 'MaxBatchSize', ],
				'queryParam'   => [ 'shape' => 'QueryParamMap', ],
			],
		],
		'PollForJobsOutput'                               => [
			'type'    => 'structure',
			'members' => [ 'jobs' => [ 'shape' => 'JobList', ], ],
		],
		'PollForThirdPartyJobsInput'                      => [
			'type'     => 'structure',
			'required' => [ 'actionTypeId', ],
			'members'  => [
				'actionTypeId' => [ 'shape' => 'ActionTypeId', ],
				'maxBatchSize' => [ 'shape' => 'MaxBatchSize', ],
			],
		],
		'PollForThirdPartyJobsOutput'                     => [
			'type'    => 'structure',
			'members' => [ 'jobs' => [ 'shape' => 'ThirdPartyJobList', ], ],
		],
		'PutActionRevisionInput'                          => [
			'type'     => 'structure',
			'required' => [
				'pipelineName',
				'stageName',
				'actionName',
				'actionRevision',
			],
			'members'  => [
				'pipelineName'   => [ 'shape' => 'PipelineName', ],
				'stageName'      => [ 'shape' => 'StageName', ],
				'actionName'     => [ 'shape' => 'ActionName', ],
				'actionRevision' => [ 'shape' => 'ActionRevision', ],
			],
		],
		'PutActionRevisionOutput'                         => [
			'type'    => 'structure',
			'members' => [
				'newRevision'         => [ 'shape' => 'Boolean', ],
				'pipelineExecutionId' => [ 'shape' => 'PipelineExecutionId', ],
			],
		],
		'PutApprovalResultInput'                          => [
			'type'     => 'structure',
			'required' => [
				'pipelineName',
				'stageName',
				'actionName',
				'result',
				'token',
			],
			'members'  => [
				'pipelineName' => [ 'shape' => 'PipelineName', ],
				'stageName'    => [ 'shape' => 'StageName', ],
				'actionName'   => [ 'shape' => 'ActionName', ],
				'result'       => [ 'shape' => 'ApprovalResult', ],
				'token'        => [ 'shape' => 'ApprovalToken', ],
			],
		],
		'PutApprovalResultOutput'                         => [
			'type'    => 'structure',
			'members' => [ 'approvedAt' => [ 'shape' => 'Timestamp', ], ],
		],
		'PutJobFailureResultInput'                        => [
			'type'     => 'structure',
			'required' => [ 'jobId', 'failureDetails', ],
			'members'  => [
				'jobId'          => [ 'shape' => 'JobId', ],
				'failureDetails' => [ 'shape' => 'FailureDetails', ],
			],
		],
		'PutJobSuccessResultInput'                        => [
			'type'     => 'structure',
			'required' => [ 'jobId', ],
			'members'  => [
				'jobId'             => [ 'shape' => 'JobId', ],
				'currentRevision'   => [ 'shape' => 'CurrentRevision', ],
				'continuationToken' => [ 'shape' => 'ContinuationToken', ],
				'executionDetails'  => [ 'shape' => 'ExecutionDetails', ],
			],
		],
		'PutThirdPartyJobFailureResultInput'              => [
			'type'     => 'structure',
			'required' => [
				'jobId',
				'clientToken',
				'failureDetails',
			],
			'members'  => [
				'jobId'          => [ 'shape' => 'ThirdPartyJobId', ],
				'clientToken'    => [ 'shape' => 'ClientToken', ],
				'failureDetails' => [ 'shape' => 'FailureDetails', ],
			],
		],
		'PutThirdPartyJobSuccessResultInput'              => [
			'type'     => 'structure',
			'required' => [ 'jobId', 'clientToken', ],
			'members'  => [
				'jobId'             => [ 'shape' => 'ThirdPartyJobId', ],
				'clientToken'       => [ 'shape' => 'ClientToken', ],
				'currentRevision'   => [ 'shape' => 'CurrentRevision', ],
				'continuationToken' => [ 'shape' => 'ContinuationToken', ],
				'executionDetails'  => [ 'shape' => 'ExecutionDetails', ],
			],
		],
		'PutWebhookInput'                                 => [
			'type'     => 'structure',
			'required' => [ 'webhook', ],
			'members'  => [
				'webhook' => [ 'shape' => 'WebhookDefinition', ],
				'tags'    => [ 'shape' => 'TagList', ],
			],
		],
		'PutWebhookOutput'                                => [
			'type'    => 'structure',
			'members' => [ 'webhook' => [ 'shape' => 'ListWebhookItem', ], ],
		],
		'QueryParamMap'                                   => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'ActionConfigurationKey', ],
			'value' => [ 'shape' => 'ActionConfigurationQueryableValue', ],
			'max'   => 1,
			'min'   => 0,
		],
		'RegisterWebhookWithThirdPartyInput'              => [
			'type'    => 'structure',
			'members' => [ 'webhookName' => [ 'shape' => 'WebhookName', ], ],
		],
		'RegisterWebhookWithThirdPartyOutput'             => [ 'type' => 'structure', 'members' => [], ],
		'ResourceArn'                                     => [
			'type'    => 'string',
			'pattern' => 'arn:aws(-[\\w]+)*:codepipeline:.+:[0-9]{12}:.+',
		],
		'ResourceNotFoundException'                       => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'RetryStageExecutionInput'                        => [
			'type'     => 'structure',
			'required' => [
				'pipelineName',
				'stageName',
				'pipelineExecutionId',
				'retryMode',
			],
			'members'  => [
				'pipelineName'        => [ 'shape' => 'PipelineName', ],
				'stageName'           => [ 'shape' => 'StageName', ],
				'pipelineExecutionId' => [ 'shape' => 'PipelineExecutionId', ],
				'retryMode'           => [ 'shape' => 'StageRetryMode', ],
			],
		],
		'RetryStageExecutionOutput'                       => [
			'type'    => 'structure',
			'members' => [ 'pipelineExecutionId' => [ 'shape' => 'PipelineExecutionId', ], ],
		],
		'Revision'                                        => [ 'type' => 'string', 'max' => 1500, 'min' => 1, ],
		'RevisionChangeIdentifier'                        => [ 'type' => 'string', 'max' => 100, 'min' => 1, ],
		'RevisionSummary'                                 => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ],
		'RoleArn'                                         => [
			'type'    => 'string',
			'max'     => 1024,
			'pattern' => 'arn:aws(-[\\w]+)*:iam::[0-9]{12}:role/.*',
		],
		'S3ArtifactLocation'                              => [
			'type'     => 'structure',
			'required' => [ 'bucketName', 'objectKey', ],
			'members'  => [
				'bucketName' => [ 'shape' => 'S3BucketName', ],
				'objectKey'  => [ 'shape' => 'S3ObjectKey', ],
			],
		],
		'S3Bucket'                                        => [ 'type' => 'string', 'max' => 63, 'min' => 3, ],
		'S3BucketName'                                    => [ 'type' => 'string', ],
		'S3Key'                                           => [ 'type' => 'string', 'max' => 100, 'min' => 1, ],
		'S3Location'                                      => [
			'type'    => 'structure',
			'members' => [
				'bucket' => [ 'shape' => 'S3Bucket', ],
				'key'    => [ 'shape' => 'S3Key', ],
			],
		],
		'S3ObjectKey'                                     => [ 'type' => 'string', ],
		'SecretAccessKey'                                 => [ 'type' => 'string', ],
		'SessionToken'                                    => [ 'type' => 'string', ],
		'SourceRevision'                                  => [
			'type'     => 'structure',
			'required' => [ 'actionName', ],
			'members'  => [
				'actionName'      => [ 'shape' => 'ActionName', ],
				'revisionId'      => [ 'shape' => 'Revision', ],
				'revisionSummary' => [ 'shape' => 'RevisionSummary', ],
				'revisionUrl'     => [ 'shape' => 'Url', ],
			],
		],
		'SourceRevisionList'                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'SourceRevision', ],
		],
		'StageActionDeclarationList'                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ActionDeclaration', ],
		],
		'StageBlockerDeclarationList'                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'BlockerDeclaration', ],
		],
		'StageContext'                                    => [
			'type'    => 'structure',
			'members' => [ 'name' => [ 'shape' => 'StageName', ], ],
		],
		'StageDeclaration'                                => [
			'type'     => 'structure',
			'required' => [ 'name', 'actions', ],
			'members'  => [
				'name'     => [ 'shape' => 'StageName', ],
				'blockers' => [ 'shape' => 'StageBlockerDeclarationList', ],
				'actions'  => [ 'shape' => 'StageActionDeclarationList', ],
			],
		],
		'StageExecution'                                  => [
			'type'     => 'structure',
			'required' => [ 'pipelineExecutionId', 'status', ],
			'members'  => [
				'pipelineExecutionId' => [ 'shape' => 'PipelineExecutionId', ],
				'status'              => [ 'shape' => 'StageExecutionStatus', ],
			],
		],
		'StageExecutionStatus'                            => [
			'type' => 'string',
			'enum' => [ 'InProgress', 'Failed', 'Succeeded', ],
		],
		'StageName'                                       => [
			'type'    => 'string',
			'max'     => 100,
			'min'     => 1,
			'pattern' => '[A-Za-z0-9.@\\-_]+',
		],
		'StageNotFoundException'                          => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'StageNotRetryableException'                      => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'StageRetryMode'                                  => [ 'type' => 'string', 'enum' => [ 'FAILED_ACTIONS', ], ],
		'StageState'                                      => [
			'type'    => 'structure',
			'members' => [
				'stageName'              => [ 'shape' => 'StageName', ],
				'inboundTransitionState' => [ 'shape' => 'TransitionState', ],
				'actionStates'           => [ 'shape' => 'ActionStateList', ],
				'latestExecution'        => [ 'shape' => 'StageExecution', ],
			],
		],
		'StageStateList'                                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'StageState', ],
		],
		'StageTransitionType'                             => [
			'type' => 'string',
			'enum' => [ 'Inbound', 'Outbound', ],
		],
		'StartPipelineExecutionInput'                     => [
			'type'     => 'structure',
			'required' => [ 'name', ],
			'members'  => [
				'name'               => [ 'shape' => 'PipelineName', ],
				'clientRequestToken' => [
					'shape'            => 'ClientRequestToken',
					'idempotencyToken' => true,
				],
			],
		],
		'StartPipelineExecutionOutput'                    => [
			'type'    => 'structure',
			'members' => [ 'pipelineExecutionId' => [ 'shape' => 'PipelineExecutionId', ], ],
		],
		'Tag'                                             => [
			'type'     => 'structure',
			'required' => [ 'key', 'value', ],
			'members'  => [
				'key'   => [ 'shape' => 'TagKey', ],
				'value' => [ 'shape' => 'TagValue', ],
			],
		],
		'TagKey'                                          => [ 'type' => 'string', 'max' => 128, 'min' => 1, ],
		'TagKeyList'                                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'TagKey', ],
		],
		'TagList'                                         => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ],
		'TagResourceInput'                                => [
			'type'     => 'structure',
			'required' => [ 'resourceArn', 'tags', ],
			'members'  => [
				'resourceArn' => [ 'shape' => 'ResourceArn', ],
				'tags'        => [ 'shape' => 'TagList', ],
			],
		],
		'TagResourceOutput'                               => [ 'type' => 'structure', 'members' => [], ],
		'TagValue'                                        => [ 'type' => 'string', 'max' => 256, 'min' => 0, ],
		'ThirdPartyJob'                                   => [
			'type'    => 'structure',
			'members' => [
				'clientId' => [ 'shape' => 'ClientId', ],
				'jobId'    => [ 'shape' => 'JobId', ],
			],
		],
		'ThirdPartyJobData'                               => [
			'type'    => 'structure',
			'members' => [
				'actionTypeId'        => [ 'shape' => 'ActionTypeId', ],
				'actionConfiguration' => [ 'shape' => 'ActionConfiguration', ],
				'pipelineContext'     => [ 'shape' => 'PipelineContext', ],
				'inputArtifacts'      => [ 'shape' => 'ArtifactList', ],
				'outputArtifacts'     => [ 'shape' => 'ArtifactList', ],
				'artifactCredentials' => [ 'shape' => 'AWSSessionCredentials', ],
				'continuationToken'   => [ 'shape' => 'ContinuationToken', ],
				'encryptionKey'       => [ 'shape' => 'EncryptionKey', ],
			],
		],
		'ThirdPartyJobDetails'                            => [
			'type'    => 'structure',
			'members' => [
				'id'    => [ 'shape' => 'ThirdPartyJobId', ],
				'data'  => [ 'shape' => 'ThirdPartyJobData', ],
				'nonce' => [ 'shape' => 'Nonce', ],
			],
		],
		'ThirdPartyJobId'                                 => [ 'type' => 'string', 'max' => 512, 'min' => 1, ],
		'ThirdPartyJobList'                               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ThirdPartyJob', ],
		],
		'Time'                                            => [ 'type' => 'timestamp', ],
		'Timestamp'                                       => [ 'type' => 'timestamp', ],
		'TooManyTagsException'                            => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'Message', ], ],
			'exception' => true,
		],
		'TransitionState'                                 => [
			'type'    => 'structure',
			'members' => [
				'enabled'        => [ 'shape' => 'Enabled', ],
				'lastChangedBy'  => [ 'shape' => 'LastChangedBy', ],
				'lastChangedAt'  => [ 'shape' => 'LastChangedAt', ],
				'disabledReason' => [ 'shape' => 'DisabledReason', ],
			],
		],
		'UntagResourceInput'                              => [
			'type'     => 'structure',
			'required' => [ 'resourceArn', 'tagKeys', ],
			'members'  => [
				'resourceArn' => [ 'shape' => 'ResourceArn', ],
				'tagKeys'     => [ 'shape' => 'TagKeyList', ],
			],
		],
		'UntagResourceOutput'                             => [ 'type' => 'structure', 'members' => [], ],
		'UpdatePipelineInput'                             => [
			'type'     => 'structure',
			'required' => [ 'pipeline', ],
			'members'  => [ 'pipeline' => [ 'shape' => 'PipelineDeclaration', ], ],
		],
		'UpdatePipelineOutput'                            => [
			'type'    => 'structure',
			'members' => [ 'pipeline' => [ 'shape' => 'PipelineDeclaration', ], ],
		],
		'Url'                                             => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ],
		'UrlTemplate'                                     => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ],
		'ValidationException'                             => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'Version'                                         => [
			'type'    => 'string',
			'max'     => 9,
			'min'     => 1,
			'pattern' => '[0-9A-Za-z_-]+',
		],
		'WebhookArn'                                      => [ 'type' => 'string', ],
		'WebhookAuthConfiguration'                        => [
			'type'    => 'structure',
			'members' => [
				'AllowedIPRange' => [ 'shape' => 'WebhookAuthConfigurationAllowedIPRange', ],
				'SecretToken'    => [ 'shape' => 'WebhookAuthConfigurationSecretToken', ],
			],
		],
		'WebhookAuthConfigurationAllowedIPRange'          => [ 'type' => 'string', 'max' => 100, 'min' => 1, ],
		'WebhookAuthConfigurationSecretToken'             => [ 'type' => 'string', 'max' => 100, 'min' => 1, ],
		'WebhookAuthenticationType'                       => [
			'type' => 'string',
			'enum' => [ 'GITHUB_HMAC', 'IP', 'UNAUTHENTICATED', ],
		],
		'WebhookDefinition'                               => [
			'type'     => 'structure',
			'required' => [
				'name',
				'targetPipeline',
				'targetAction',
				'filters',
				'authentication',
				'authenticationConfiguration',
			],
			'members'  => [
				'name'                        => [ 'shape' => 'WebhookName', ],
				'targetPipeline'              => [ 'shape' => 'PipelineName', ],
				'targetAction'                => [ 'shape' => 'ActionName', ],
				'filters'                     => [ 'shape' => 'WebhookFilters', ],
				'authentication'              => [ 'shape' => 'WebhookAuthenticationType', ],
				'authenticationConfiguration' => [ 'shape' => 'WebhookAuthConfiguration', ],
			],
		],
		'WebhookErrorCode'                                => [ 'type' => 'string', ],
		'WebhookErrorMessage'                             => [ 'type' => 'string', ],
		'WebhookFilterRule'                               => [
			'type'     => 'structure',
			'required' => [ 'jsonPath', ],
			'members'  => [
				'jsonPath'    => [ 'shape' => 'JsonPath', ],
				'matchEquals' => [ 'shape' => 'MatchEquals', ],
			],
		],
		'WebhookFilters'                                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'WebhookFilterRule', ],
			'max'    => 5,
		],
		'WebhookLastTriggered'                            => [ 'type' => 'timestamp', ],
		'WebhookList'                                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ListWebhookItem', ],
		],
		'WebhookName'                                     => [
			'type'    => 'string',
			'max'     => 100,
			'min'     => 1,
			'pattern' => '[A-Za-z0-9.@\\-_]+',
		],
		'WebhookNotFoundException'                        => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'WebhookUrl'                                      => [ 'type' => 'string', 'max' => 1000, 'min' => 1, ],
	],
];
