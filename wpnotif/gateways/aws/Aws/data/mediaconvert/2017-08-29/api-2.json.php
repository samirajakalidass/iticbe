<?php
// This file was auto-generated from sdk-root/src/data/mediaconvert/2017-08-29/api-2.json
return [
	'metadata'   => [
		'apiVersion'          => '2017-08-29',
		'endpointPrefix'      => 'mediaconvert',
		'signingName'         => 'mediaconvert',
		'serviceFullName'     => 'AWS Elemental MediaConvert',
		'serviceId'           => 'MediaConvert',
		'protocol'            => 'rest-json',
		'jsonVersion'         => '1.1',
		'uid'                 => 'mediaconvert-2017-08-29',
		'signatureVersion'    => 'v4',
		'serviceAbbreviation' => 'MediaConvert',
	],
	'operations' => [
		'AssociateCertificate'    => [
			'name'   => 'AssociateCertificate',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2017-08-29/certificates',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'AssociateCertificateRequest', ],
			'output' => [ 'shape' => 'AssociateCertificateResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'CancelJob'               => [
			'name'   => 'CancelJob',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/2017-08-29/jobs/{id}',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'CancelJobRequest', ],
			'output' => [ 'shape' => 'CancelJobResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'CreateJob'               => [
			'name'   => 'CreateJob',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2017-08-29/jobs',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateJobRequest', ],
			'output' => [ 'shape' => 'CreateJobResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'CreateJobTemplate'       => [
			'name'   => 'CreateJobTemplate',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2017-08-29/jobTemplates',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateJobTemplateRequest', ],
			'output' => [ 'shape' => 'CreateJobTemplateResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'CreatePreset'            => [
			'name'   => 'CreatePreset',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2017-08-29/presets',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreatePresetRequest', ],
			'output' => [ 'shape' => 'CreatePresetResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'CreateQueue'             => [
			'name'   => 'CreateQueue',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2017-08-29/queues',
				'responseCode' => 201,
			],
			'input'  => [ 'shape' => 'CreateQueueRequest', ],
			'output' => [ 'shape' => 'CreateQueueResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'DeleteJobTemplate'       => [
			'name'   => 'DeleteJobTemplate',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/2017-08-29/jobTemplates/{name}',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'DeleteJobTemplateRequest', ],
			'output' => [ 'shape' => 'DeleteJobTemplateResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'DeletePreset'            => [
			'name'   => 'DeletePreset',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/2017-08-29/presets/{name}',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'DeletePresetRequest', ],
			'output' => [ 'shape' => 'DeletePresetResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'DeleteQueue'             => [
			'name'   => 'DeleteQueue',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/2017-08-29/queues/{name}',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'DeleteQueueRequest', ],
			'output' => [ 'shape' => 'DeleteQueueResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'DescribeEndpoints'       => [
			'name'   => 'DescribeEndpoints',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2017-08-29/endpoints',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'DescribeEndpointsRequest', ],
			'output' => [ 'shape' => 'DescribeEndpointsResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'DisassociateCertificate' => [
			'name'   => 'DisassociateCertificate',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/2017-08-29/certificates/{arn}',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'DisassociateCertificateRequest', ],
			'output' => [ 'shape' => 'DisassociateCertificateResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'GetJob'                  => [
			'name'   => 'GetJob',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/2017-08-29/jobs/{id}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetJobRequest', ],
			'output' => [ 'shape' => 'GetJobResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'GetJobTemplate'          => [
			'name'   => 'GetJobTemplate',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/2017-08-29/jobTemplates/{name}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetJobTemplateRequest', ],
			'output' => [ 'shape' => 'GetJobTemplateResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'GetPreset'               => [
			'name'   => 'GetPreset',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/2017-08-29/presets/{name}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetPresetRequest', ],
			'output' => [ 'shape' => 'GetPresetResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'GetQueue'                => [
			'name'   => 'GetQueue',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/2017-08-29/queues/{name}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'GetQueueRequest', ],
			'output' => [ 'shape' => 'GetQueueResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'ListJobTemplates'        => [
			'name'   => 'ListJobTemplates',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/2017-08-29/jobTemplates',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListJobTemplatesRequest', ],
			'output' => [ 'shape' => 'ListJobTemplatesResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'ListJobs'                => [
			'name'   => 'ListJobs',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/2017-08-29/jobs',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListJobsRequest', ],
			'output' => [ 'shape' => 'ListJobsResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'ListPresets'             => [
			'name'   => 'ListPresets',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/2017-08-29/presets',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListPresetsRequest', ],
			'output' => [ 'shape' => 'ListPresetsResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'ListQueues'              => [
			'name'   => 'ListQueues',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/2017-08-29/queues',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListQueuesRequest', ],
			'output' => [ 'shape' => 'ListQueuesResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'ListTagsForResource'     => [
			'name'   => 'ListTagsForResource',
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/2017-08-29/tags/{arn}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListTagsForResourceRequest', ],
			'output' => [ 'shape' => 'ListTagsForResourceResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'TagResource'             => [
			'name'   => 'TagResource',
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/2017-08-29/tags',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'TagResourceRequest', ],
			'output' => [ 'shape' => 'TagResourceResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'UntagResource'           => [
			'name'   => 'UntagResource',
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/2017-08-29/tags/{arn}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'UntagResourceRequest', ],
			'output' => [ 'shape' => 'UntagResourceResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'UpdateJobTemplate'       => [
			'name'   => 'UpdateJobTemplate',
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/2017-08-29/jobTemplates/{name}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'UpdateJobTemplateRequest', ],
			'output' => [ 'shape' => 'UpdateJobTemplateResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'UpdatePreset'            => [
			'name'   => 'UpdatePreset',
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/2017-08-29/presets/{name}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'UpdatePresetRequest', ],
			'output' => [ 'shape' => 'UpdatePresetResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
		'UpdateQueue'             => [
			'name'   => 'UpdateQueue',
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/2017-08-29/queues/{name}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'UpdateQueueRequest', ],
			'output' => [ 'shape' => 'UpdateQueueResponse', ],
			'errors' => [
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'TooManyRequestsException', ],
				[ 'shape' => 'ConflictException', ],
			],
		],
	],
	'shapes'     => [
		'AacAudioDescriptionBroadcasterMix'                                                                                                                                                                                                                                                                            => [
			'type' => 'string',
			'enum' => [ 'BROADCASTER_MIXED_AD', 'NORMAL', ],
		],
		'AacCodecProfile'                                                                                                                                                                                                                                                                                              => [
			'type' => 'string',
			'enum' => [ 'LC', 'HEV1', 'HEV2', ],
		],
		'AacCodingMode'                                                                                                                                                                                                                                                                                                => [
			'type' => 'string',
			'enum' => [
				'AD_RECEIVER_MIX',
				'CODING_MODE_1_0',
				'CODING_MODE_1_1',
				'CODING_MODE_2_0',
				'CODING_MODE_5_1',
			],
		],
		'AacRateControlMode'                                                                                                                                                                                                                                                                                           => [
			'type' => 'string',
			'enum' => [ 'CBR', 'VBR', ],
		],
		'AacRawFormat'                                                                                                                                                                                                                                                                                                 => [
			'type' => 'string',
			'enum' => [ 'LATM_LOAS', 'NONE', ],
		],
		'AacSettings'                                                                                                                                                                                                                                                                                                  => [
			'type'    => 'structure',
			'members' => [
				'AudioDescriptionBroadcasterMix' => [
					'shape'        => 'AacAudioDescriptionBroadcasterMix',
					'locationName' => 'audioDescriptionBroadcasterMix',
				],
				'Bitrate'                        => [
					'shape'        => '__integerMin6000Max1024000',
					'locationName' => 'bitrate',
				],
				'CodecProfile'                   => [
					'shape'        => 'AacCodecProfile',
					'locationName' => 'codecProfile',
				],
				'CodingMode'                     => [
					'shape'        => 'AacCodingMode',
					'locationName' => 'codingMode',
				],
				'RateControlMode'                => [
					'shape'        => 'AacRateControlMode',
					'locationName' => 'rateControlMode',
				],
				'RawFormat'                      => [
					'shape'        => 'AacRawFormat',
					'locationName' => 'rawFormat',
				],
				'SampleRate'                     => [
					'shape'        => '__integerMin8000Max96000',
					'locationName' => 'sampleRate',
				],
				'Specification'                  => [
					'shape'        => 'AacSpecification',
					'locationName' => 'specification',
				],
				'VbrQuality'                     => [
					'shape'        => 'AacVbrQuality',
					'locationName' => 'vbrQuality',
				],
			],
		],
		'AacSpecification'                                                                                                                                                                                                                                                                                             => [
			'type' => 'string',
			'enum' => [ 'MPEG2', 'MPEG4', ],
		],
		'AacVbrQuality'                                                                                                                                                                                                                                                                                                => [
			'type' => 'string',
			'enum' => [ 'LOW', 'MEDIUM_LOW', 'MEDIUM_HIGH', 'HIGH', ],
		],
		'Ac3BitstreamMode'                                                                                                                                                                                                                                                                                             => [
			'type' => 'string',
			'enum' => [
				'COMPLETE_MAIN',
				'COMMENTARY',
				'DIALOGUE',
				'EMERGENCY',
				'HEARING_IMPAIRED',
				'MUSIC_AND_EFFECTS',
				'VISUALLY_IMPAIRED',
				'VOICE_OVER',
			],
		],
		'Ac3CodingMode'                                                                                                                                                                                                                                                                                                => [
			'type' => 'string',
			'enum' => [
				'CODING_MODE_1_0',
				'CODING_MODE_1_1',
				'CODING_MODE_2_0',
				'CODING_MODE_3_2_LFE',
			],
		],
		'Ac3DynamicRangeCompressionProfile'                                                                                                                                                                                                                                                                            => [
			'type' => 'string',
			'enum' => [ 'FILM_STANDARD', 'NONE', ],
		],
		'Ac3LfeFilter'                                                                                                                                                                                                                                                                                                 => [
			'type' => 'string',
			'enum' => [ 'ENABLED', 'DISABLED', ],
		],
		'Ac3MetadataControl'                                                                                                                                                                                                                                                                                           => [
			'type' => 'string',
			'enum' => [ 'FOLLOW_INPUT', 'USE_CONFIGURED', ],
		],
		'Ac3Settings'                                                                                                                                                                                                                                                                                                  => [
			'type'    => 'structure',
			'members' => [
				'Bitrate'                        => [
					'shape'        => '__integerMin64000Max640000',
					'locationName' => 'bitrate',
				],
				'BitstreamMode'                  => [
					'shape'        => 'Ac3BitstreamMode',
					'locationName' => 'bitstreamMode',
				],
				'CodingMode'                     => [
					'shape'        => 'Ac3CodingMode',
					'locationName' => 'codingMode',
				],
				'Dialnorm'                       => [
					'shape'        => '__integerMin1Max31',
					'locationName' => 'dialnorm',
				],
				'DynamicRangeCompressionProfile' => [
					'shape'        => 'Ac3DynamicRangeCompressionProfile',
					'locationName' => 'dynamicRangeCompressionProfile',
				],
				'LfeFilter'                      => [
					'shape'        => 'Ac3LfeFilter',
					'locationName' => 'lfeFilter',
				],
				'MetadataControl'                => [
					'shape'        => 'Ac3MetadataControl',
					'locationName' => 'metadataControl',
				],
				'SampleRate'                     => [
					'shape'        => '__integerMin48000Max48000',
					'locationName' => 'sampleRate',
				],
			],
		],
		'AccelerationMode'                                                                                                                                                                                                                                                                                             => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'AccelerationSettings'                                                                                                                                                                                                                                                                                         => [
			'type'     => 'structure',
			'members'  => [
				'Mode' => [
					'shape'        => 'AccelerationMode',
					'locationName' => 'mode',
				],
			],
			'required' => [ 'Mode', ],
		],
		'AfdSignaling'                                                                                                                                                                                                                                                                                                 => [
			'type' => 'string',
			'enum' => [ 'NONE', 'AUTO', 'FIXED', ],
		],
		'AiffSettings'                                                                                                                                                                                                                                                                                                 => [
			'type'    => 'structure',
			'members' => [
				'BitDepth'   => [
					'shape'        => '__integerMin16Max24',
					'locationName' => 'bitDepth',
				],
				'Channels'   => [
					'shape'        => '__integerMin1Max2',
					'locationName' => 'channels',
				],
				'SampleRate' => [
					'shape'        => '__integerMin8000Max192000',
					'locationName' => 'sampleRate',
				],
			],
		],
		'AncillarySourceSettings'                                                                                                                                                                                                                                                                                      => [
			'type'    => 'structure',
			'members' => [
				'SourceAncillaryChannelNumber' => [
					'shape'        => '__integerMin1Max4',
					'locationName' => 'sourceAncillaryChannelNumber',
				],
			],
		],
		'AntiAlias'                                                                                                                                                                                                                                                                                                    => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'AssociateCertificateRequest'                                                                                                                                                                                                                                                                                  => [
			'type'     => 'structure',
			'members'  => [
				'Arn' => [
					'shape'        => '__string',
					'locationName' => 'arn',
				],
			],
			'required' => [ 'Arn', ],
		],
		'AssociateCertificateResponse'                                                                                                                                                                                                                                                                                 => [
			'type'    => 'structure',
			'members' => [],
		],
		'AudioCodec'                                                                                                                                                                                                                                                                                                   => [
			'type' => 'string',
			'enum' => [
				'AAC',
				'MP2',
				'WAV',
				'AIFF',
				'AC3',
				'EAC3',
				'PASSTHROUGH',
			],
		],
		'AudioCodecSettings'                                                                                                                                                                                                                                                                                           => [
			'type'    => 'structure',
			'members' => [
				'AacSettings'  => [
					'shape'        => 'AacSettings',
					'locationName' => 'aacSettings',
				],
				'Ac3Settings'  => [
					'shape'        => 'Ac3Settings',
					'locationName' => 'ac3Settings',
				],
				'AiffSettings' => [
					'shape'        => 'AiffSettings',
					'locationName' => 'aiffSettings',
				],
				'Codec'        => [
					'shape'        => 'AudioCodec',
					'locationName' => 'codec',
				],
				'Eac3Settings' => [
					'shape'        => 'Eac3Settings',
					'locationName' => 'eac3Settings',
				],
				'Mp2Settings'  => [
					'shape'        => 'Mp2Settings',
					'locationName' => 'mp2Settings',
				],
				'WavSettings'  => [
					'shape'        => 'WavSettings',
					'locationName' => 'wavSettings',
				],
			],
		],
		'AudioDefaultSelection'                                                                                                                                                                                                                                                                                        => [
			'type' => 'string',
			'enum' => [ 'DEFAULT', 'NOT_DEFAULT', ],
		],
		'AudioDescription'                                                                                                                                                                                                                                                                                             => [
			'type'    => 'structure',
			'members' => [
				'AudioNormalizationSettings' => [
					'shape'        => 'AudioNormalizationSettings',
					'locationName' => 'audioNormalizationSettings',
				],
				'AudioSourceName'            => [
					'shape'        => '__string',
					'locationName' => 'audioSourceName',
				],
				'AudioType'                  => [
					'shape'        => '__integerMin0Max255',
					'locationName' => 'audioType',
				],
				'AudioTypeControl'           => [
					'shape'        => 'AudioTypeControl',
					'locationName' => 'audioTypeControl',
				],
				'CodecSettings'              => [
					'shape'        => 'AudioCodecSettings',
					'locationName' => 'codecSettings',
				],
				'CustomLanguageCode'         => [
					'shape'        => '__stringMin3Max3PatternAZaZ3',
					'locationName' => 'customLanguageCode',
				],
				'LanguageCode'               => [
					'shape'        => 'LanguageCode',
					'locationName' => 'languageCode',
				],
				'LanguageCodeControl'        => [
					'shape'        => 'AudioLanguageCodeControl',
					'locationName' => 'languageCodeControl',
				],
				'RemixSettings'              => [
					'shape'        => 'RemixSettings',
					'locationName' => 'remixSettings',
				],
				'StreamName'                 => [
					'shape'        => '__stringPatternWS',
					'locationName' => 'streamName',
				],
			],
		],
		'AudioLanguageCodeControl'                                                                                                                                                                                                                                                                                     => [
			'type' => 'string',
			'enum' => [ 'FOLLOW_INPUT', 'USE_CONFIGURED', ],
		],
		'AudioNormalizationAlgorithm'                                                                                                                                                                                                                                                                                  => [
			'type' => 'string',
			'enum' => [ 'ITU_BS_1770_1', 'ITU_BS_1770_2', ],
		],
		'AudioNormalizationAlgorithmControl'                                                                                                                                                                                                                                                                           => [
			'type' => 'string',
			'enum' => [ 'CORRECT_AUDIO', 'MEASURE_ONLY', ],
		],
		'AudioNormalizationLoudnessLogging'                                                                                                                                                                                                                                                                            => [
			'type' => 'string',
			'enum' => [ 'LOG', 'DONT_LOG', ],
		],
		'AudioNormalizationPeakCalculation'                                                                                                                                                                                                                                                                            => [
			'type' => 'string',
			'enum' => [ 'TRUE_PEAK', 'NONE', ],
		],
		'AudioNormalizationSettings'                                                                                                                                                                                                                                                                                   => [
			'type'    => 'structure',
			'members' => [
				'Algorithm'           => [
					'shape'        => 'AudioNormalizationAlgorithm',
					'locationName' => 'algorithm',
				],
				'AlgorithmControl'    => [
					'shape'        => 'AudioNormalizationAlgorithmControl',
					'locationName' => 'algorithmControl',
				],
				'CorrectionGateLevel' => [
					'shape'        => '__integerMinNegative70Max0',
					'locationName' => 'correctionGateLevel',
				],
				'LoudnessLogging'     => [
					'shape'        => 'AudioNormalizationLoudnessLogging',
					'locationName' => 'loudnessLogging',
				],
				'PeakCalculation'     => [
					'shape'        => 'AudioNormalizationPeakCalculation',
					'locationName' => 'peakCalculation',
				],
				'TargetLkfs'          => [
					'shape'        => '__doubleMinNegative59Max0',
					'locationName' => 'targetLkfs',
				],
			],
		],
		'AudioSelector'                                                                                                                                                                                                                                                                                                => [
			'type'    => 'structure',
			'members' => [
				'CustomLanguageCode'     => [
					'shape'        => '__stringMin3Max3PatternAZaZ3',
					'locationName' => 'customLanguageCode',
				],
				'DefaultSelection'       => [
					'shape'        => 'AudioDefaultSelection',
					'locationName' => 'defaultSelection',
				],
				'ExternalAudioFileInput' => [
					'shape'        => '__stringPatternS3MM2VVMMPPEEGGAAVVIIMMPP4FFLLVVMMPPTTMMPPGGMM4VVTTRRPPFF4VVMM2TTSSTTSS264HH264MMKKVVMMOOVVMMTTSSMM2TTWWMMVVAASSFFVVOOBB3GGPP3GGPPPPMMXXFFDDIIVVXXXXVVIIDDRRAAWWDDVVGGXXFFMM1VV3GG2VVMMFFMM3UU8LLCCHHGGXXFFMMPPEEGG2MMXXFFMMPPEEGG2MMXXFFHHDDWWAAVVYY4MMAAAACCAAIIFFFFMMPP2AACC3EECC3DDTTSSEE',
					'locationName' => 'externalAudioFileInput',
				],
				'LanguageCode'           => [ 'shape' => 'LanguageCode', 'locationName' => 'languageCode', ],
				'Offset'                 => [
					'shape'        => '__integerMinNegative2147483648Max2147483647',
					'locationName' => 'offset',
				],
				'Pids'                   => [
					'shape'        => '__listOf__integerMin1Max2147483647',
					'locationName' => 'pids',
				],
				'ProgramSelection'       => [ 'shape' => '__integerMin0Max8', 'locationName' => 'programSelection', ],
				'RemixSettings'          => [ 'shape' => 'RemixSettings', 'locationName' => 'remixSettings', ],
				'SelectorType'           => [ 'shape' => 'AudioSelectorType', 'locationName' => 'selectorType', ],
				'Tracks'                 => [
					'shape'        => '__listOf__integerMin1Max2147483647',
					'locationName' => 'tracks',
				],
			],
		],
		'AudioSelectorGroup'                                                                                                                                                                                                                                                                                           => [
			'type'    => 'structure',
			'members' => [
				'AudioSelectorNames' => [
					'shape'        => '__listOf__stringMin1',
					'locationName' => 'audioSelectorNames',
				],
			],
		],
		'AudioSelectorType'                                                                                                                                                                                                                                                                                            => [
			'type' => 'string',
			'enum' => [ 'PID', 'TRACK', 'LANGUAGE_CODE', ],
		],
		'AudioTypeControl'                                                                                                                                                                                                                                                                                             => [
			'type' => 'string',
			'enum' => [ 'FOLLOW_INPUT', 'USE_CONFIGURED', ],
		],
		'AvailBlanking'                                                                                                                                                                                                                                                                                                => [
			'type'    => 'structure',
			'members' => [
				'AvailBlankingImage' => [
					'shape'        => '__stringMin14PatternS3BmpBMPPngPNG',
					'locationName' => 'availBlankingImage',
				],
			],
		],
		'BadRequestException'                                                                                                                                                                                                                                                                                          => [
			'type'      => 'structure',
			'members'   => [
				'Message' => [
					'shape'        => '__string',
					'locationName' => 'message',
				],
			],
			'exception' => true,
			'error'     => [ 'httpStatusCode' => 400, ],
		],
		'BillingTagsSource'                                                                                                                                                                                                                                                                                            => [
			'type' => 'string',
			'enum' => [ 'QUEUE', 'PRESET', 'JOB_TEMPLATE', ],
		],
		'BurninDestinationSettings'                                                                                                                                                                                                                                                                                    => [
			'type'    => 'structure',
			'members' => [
				'Alignment'         => [ 'shape' => 'BurninSubtitleAlignment', 'locationName' => 'alignment', ],
				'BackgroundColor'   => [
					'shape'        => 'BurninSubtitleBackgroundColor',
					'locationName' => 'backgroundColor',
				],
				'BackgroundOpacity' => [ 'shape' => '__integerMin0Max255', 'locationName' => 'backgroundOpacity', ],
				'FontColor'         => [ 'shape' => 'BurninSubtitleFontColor', 'locationName' => 'fontColor', ],
				'FontOpacity'       => [ 'shape' => '__integerMin0Max255', 'locationName' => 'fontOpacity', ],
				'FontResolution'    => [ 'shape' => '__integerMin96Max600', 'locationName' => 'fontResolution', ],
				'FontScript'        => [ 'shape' => 'FontScript', 'locationName' => 'fontScript', ],
				'FontSize'          => [ 'shape' => '__integerMin0Max96', 'locationName' => 'fontSize', ],
				'OutlineColor'      => [ 'shape' => 'BurninSubtitleOutlineColor', 'locationName' => 'outlineColor', ],
				'OutlineSize'       => [ 'shape' => '__integerMin0Max10', 'locationName' => 'outlineSize', ],
				'ShadowColor'       => [ 'shape' => 'BurninSubtitleShadowColor', 'locationName' => 'shadowColor', ],
				'ShadowOpacity'     => [ 'shape' => '__integerMin0Max255', 'locationName' => 'shadowOpacity', ],
				'ShadowXOffset'     => [
					'shape'        => '__integerMinNegative2147483648Max2147483647',
					'locationName' => 'shadowXOffset',
				],
				'ShadowYOffset'     => [
					'shape'        => '__integerMinNegative2147483648Max2147483647',
					'locationName' => 'shadowYOffset',
				],
				'TeletextSpacing'   => [
					'shape'        => 'BurninSubtitleTeletextSpacing',
					'locationName' => 'teletextSpacing',
				],
				'XPosition'         => [ 'shape' => '__integerMin0Max2147483647', 'locationName' => 'xPosition', ],
				'YPosition'         => [ 'shape' => '__integerMin0Max2147483647', 'locationName' => 'yPosition', ],
			],
		],
		'BurninSubtitleAlignment'                                                                                                                                                                                                                                                                                      => [
			'type' => 'string',
			'enum' => [ 'CENTERED', 'LEFT', ],
		],
		'BurninSubtitleBackgroundColor'                                                                                                                                                                                                                                                                                => [
			'type' => 'string',
			'enum' => [ 'NONE', 'BLACK', 'WHITE', ],
		],
		'BurninSubtitleFontColor'                                                                                                                                                                                                                                                                                      => [
			'type' => 'string',
			'enum' => [ 'WHITE', 'BLACK', 'YELLOW', 'RED', 'GREEN', 'BLUE', ],
		],
		'BurninSubtitleOutlineColor'                                                                                                                                                                                                                                                                                   => [
			'type' => 'string',
			'enum' => [ 'BLACK', 'WHITE', 'YELLOW', 'RED', 'GREEN', 'BLUE', ],
		],
		'BurninSubtitleShadowColor'                                                                                                                                                                                                                                                                                    => [
			'type' => 'string',
			'enum' => [ 'NONE', 'BLACK', 'WHITE', ],
		],
		'BurninSubtitleTeletextSpacing'                                                                                                                                                                                                                                                                                => [
			'type' => 'string',
			'enum' => [ 'FIXED_GRID', 'PROPORTIONAL', ],
		],
		'CancelJobRequest'                                                                                                                                                                                                                                                                                             => [
			'type'     => 'structure',
			'members'  => [
				'Id' => [
					'shape'        => '__string',
					'locationName' => 'id',
					'location'     => 'uri',
				],
			],
			'required' => [ 'Id', ],
		],
		'CancelJobResponse'                                                                                                                                                                                                                                                                                            => [
			'type'    => 'structure',
			'members' => [],
		],
		'CaptionDescription'                                                                                                                                                                                                                                                                                           => [
			'type'    => 'structure',
			'members' => [
				'CaptionSelectorName' => [
					'shape'        => '__stringMin1',
					'locationName' => 'captionSelectorName',
				],
				'CustomLanguageCode'  => [
					'shape'        => '__stringMin3Max3PatternAZaZ3',
					'locationName' => 'customLanguageCode',
				],
				'DestinationSettings' => [
					'shape'        => 'CaptionDestinationSettings',
					'locationName' => 'destinationSettings',
				],
				'LanguageCode'        => [
					'shape'        => 'LanguageCode',
					'locationName' => 'languageCode',
				],
				'LanguageDescription' => [
					'shape'        => '__string',
					'locationName' => 'languageDescription',
				],
			],
		],
		'CaptionDescriptionPreset'                                                                                                                                                                                                                                                                                     => [
			'type'    => 'structure',
			'members' => [
				'CustomLanguageCode'  => [
					'shape'        => '__stringMin3Max3PatternAZaZ3',
					'locationName' => 'customLanguageCode',
				],
				'DestinationSettings' => [
					'shape'        => 'CaptionDestinationSettings',
					'locationName' => 'destinationSettings',
				],
				'LanguageCode'        => [
					'shape'        => 'LanguageCode',
					'locationName' => 'languageCode',
				],
				'LanguageDescription' => [
					'shape'        => '__string',
					'locationName' => 'languageDescription',
				],
			],
		],
		'CaptionDestinationSettings'                                                                                                                                                                                                                                                                                   => [
			'type'    => 'structure',
			'members' => [
				'BurninDestinationSettings'   => [
					'shape'        => 'BurninDestinationSettings',
					'locationName' => 'burninDestinationSettings',
				],
				'DestinationType'             => [
					'shape'        => 'CaptionDestinationType',
					'locationName' => 'destinationType',
				],
				'DvbSubDestinationSettings'   => [
					'shape'        => 'DvbSubDestinationSettings',
					'locationName' => 'dvbSubDestinationSettings',
				],
				'EmbeddedDestinationSettings' => [
					'shape'        => 'EmbeddedDestinationSettings',
					'locationName' => 'embeddedDestinationSettings',
				],
				'SccDestinationSettings'      => [
					'shape'        => 'SccDestinationSettings',
					'locationName' => 'sccDestinationSettings',
				],
				'TeletextDestinationSettings' => [
					'shape'        => 'TeletextDestinationSettings',
					'locationName' => 'teletextDestinationSettings',
				],
				'TtmlDestinationSettings'     => [
					'shape'        => 'TtmlDestinationSettings',
					'locationName' => 'ttmlDestinationSettings',
				],
			],
		],
		'CaptionDestinationType'                                                                                                                                                                                                                                                                                       => [
			'type' => 'string',
			'enum' => [
				'BURN_IN',
				'DVB_SUB',
				'EMBEDDED',
				'EMBEDDED_PLUS_SCTE20',
				'SCTE20_PLUS_EMBEDDED',
				'SCC',
				'SRT',
				'SMI',
				'TELETEXT',
				'TTML',
				'WEBVTT',
			],
		],
		'CaptionSelector'                                                                                                                                                                                                                                                                                              => [
			'type'    => 'structure',
			'members' => [
				'CustomLanguageCode' => [
					'shape'        => '__stringMin3Max3PatternAZaZ3',
					'locationName' => 'customLanguageCode',
				],
				'LanguageCode'       => [
					'shape'        => 'LanguageCode',
					'locationName' => 'languageCode',
				],
				'SourceSettings'     => [
					'shape'        => 'CaptionSourceSettings',
					'locationName' => 'sourceSettings',
				],
			],
		],
		'CaptionSourceSettings'                                                                                                                                                                                                                                                                                        => [
			'type'    => 'structure',
			'members' => [
				'AncillarySourceSettings' => [
					'shape'        => 'AncillarySourceSettings',
					'locationName' => 'ancillarySourceSettings',
				],
				'DvbSubSourceSettings'    => [
					'shape'        => 'DvbSubSourceSettings',
					'locationName' => 'dvbSubSourceSettings',
				],
				'EmbeddedSourceSettings'  => [
					'shape'        => 'EmbeddedSourceSettings',
					'locationName' => 'embeddedSourceSettings',
				],
				'FileSourceSettings'      => [
					'shape'        => 'FileSourceSettings',
					'locationName' => 'fileSourceSettings',
				],
				'SourceType'              => [
					'shape'        => 'CaptionSourceType',
					'locationName' => 'sourceType',
				],
				'TeletextSourceSettings'  => [
					'shape'        => 'TeletextSourceSettings',
					'locationName' => 'teletextSourceSettings',
				],
				'TrackSourceSettings'     => [
					'shape'        => 'TrackSourceSettings',
					'locationName' => 'trackSourceSettings',
				],
			],
		],
		'CaptionSourceType'                                                                                                                                                                                                                                                                                            => [
			'type' => 'string',
			'enum' => [
				'ANCILLARY',
				'DVB_SUB',
				'EMBEDDED',
				'SCTE20',
				'SCC',
				'TTML',
				'STL',
				'SRT',
				'SMI',
				'TELETEXT',
				'NULL_SOURCE',
				'IMSC',
			],
		],
		'ChannelMapping'                                                                                                                                                                                                                                                                                               => [
			'type'    => 'structure',
			'members' => [
				'OutputChannels' => [
					'shape'        => '__listOfOutputChannelMapping',
					'locationName' => 'outputChannels',
				],
			],
		],
		'CmafClientCache'                                                                                                                                                                                                                                                                                              => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'CmafCodecSpecification'                                                                                                                                                                                                                                                                                       => [
			'type' => 'string',
			'enum' => [ 'RFC_6381', 'RFC_4281', ],
		],
		'CmafEncryptionSettings'                                                                                                                                                                                                                                                                                       => [
			'type'    => 'structure',
			'members' => [
				'ConstantInitializationVector'   => [
					'shape'        => '__stringMin32Max32Pattern09aFAF32',
					'locationName' => 'constantInitializationVector',
				],
				'EncryptionMethod'               => [
					'shape'        => 'CmafEncryptionType',
					'locationName' => 'encryptionMethod',
				],
				'InitializationVectorInManifest' => [
					'shape'        => 'CmafInitializationVectorInManifest',
					'locationName' => 'initializationVectorInManifest',
				],
				'StaticKeyProvider'              => [
					'shape'        => 'StaticKeyProvider',
					'locationName' => 'staticKeyProvider',
				],
				'Type'                           => [
					'shape'        => 'CmafKeyProviderType',
					'locationName' => 'type',
				],
			],
		],
		'CmafEncryptionType'                                                                                                                                                                                                                                                                                           => [
			'type' => 'string',
			'enum' => [ 'SAMPLE_AES', ],
		],
		'CmafGroupSettings'                                                                                                                                                                                                                                                                                            => [
			'type'    => 'structure',
			'members' => [
				'BaseUrl'                => [ 'shape' => '__string', 'locationName' => 'baseUrl', ],
				'ClientCache'            => [ 'shape' => 'CmafClientCache', 'locationName' => 'clientCache', ],
				'CodecSpecification'     => [
					'shape'        => 'CmafCodecSpecification',
					'locationName' => 'codecSpecification',
				],
				'Destination'            => [ 'shape' => '__stringPatternS3', 'locationName' => 'destination', ],
				'DestinationSettings'    => [
					'shape'        => 'DestinationSettings',
					'locationName' => 'destinationSettings',
				],
				'Encryption'             => [ 'shape' => 'CmafEncryptionSettings', 'locationName' => 'encryption', ],
				'FragmentLength'         => [
					'shape'        => '__integerMin1Max2147483647',
					'locationName' => 'fragmentLength',
				],
				'ManifestCompression'    => [
					'shape'        => 'CmafManifestCompression',
					'locationName' => 'manifestCompression',
				],
				'ManifestDurationFormat' => [
					'shape'        => 'CmafManifestDurationFormat',
					'locationName' => 'manifestDurationFormat',
				],
				'MinBufferTime'          => [
					'shape'        => '__integerMin0Max2147483647',
					'locationName' => 'minBufferTime',
				],
				'MinFinalSegmentLength'  => [
					'shape'        => '__doubleMin0Max2147483647',
					'locationName' => 'minFinalSegmentLength',
				],
				'SegmentControl'         => [ 'shape' => 'CmafSegmentControl', 'locationName' => 'segmentControl', ],
				'SegmentLength'          => [
					'shape'        => '__integerMin1Max2147483647',
					'locationName' => 'segmentLength',
				],
				'StreamInfResolution'    => [
					'shape'        => 'CmafStreamInfResolution',
					'locationName' => 'streamInfResolution',
				],
				'WriteDashManifest'      => [
					'shape'        => 'CmafWriteDASHManifest',
					'locationName' => 'writeDashManifest',
				],
				'WriteHlsManifest'       => [
					'shape'        => 'CmafWriteHLSManifest',
					'locationName' => 'writeHlsManifest',
				],
			],
		],
		'CmafInitializationVectorInManifest'                                                                                                                                                                                                                                                                           => [
			'type' => 'string',
			'enum' => [ 'INCLUDE', 'EXCLUDE', ],
		],
		'CmafKeyProviderType'                                                                                                                                                                                                                                                                                          => [
			'type' => 'string',
			'enum' => [ 'STATIC_KEY', ],
		],
		'CmafManifestCompression'                                                                                                                                                                                                                                                                                      => [
			'type' => 'string',
			'enum' => [ 'GZIP', 'NONE', ],
		],
		'CmafManifestDurationFormat'                                                                                                                                                                                                                                                                                   => [
			'type' => 'string',
			'enum' => [ 'FLOATING_POINT', 'INTEGER', ],
		],
		'CmafSegmentControl'                                                                                                                                                                                                                                                                                           => [
			'type' => 'string',
			'enum' => [ 'SINGLE_FILE', 'SEGMENTED_FILES', ],
		],
		'CmafStreamInfResolution'                                                                                                                                                                                                                                                                                      => [
			'type' => 'string',
			'enum' => [ 'INCLUDE', 'EXCLUDE', ],
		],
		'CmafWriteDASHManifest'                                                                                                                                                                                                                                                                                        => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'CmafWriteHLSManifest'                                                                                                                                                                                                                                                                                         => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'ColorCorrector'                                                                                                                                                                                                                                                                                               => [
			'type'    => 'structure',
			'members' => [
				'Brightness'           => [
					'shape'        => '__integerMin1Max100',
					'locationName' => 'brightness',
				],
				'ColorSpaceConversion' => [
					'shape'        => 'ColorSpaceConversion',
					'locationName' => 'colorSpaceConversion',
				],
				'Contrast'             => [
					'shape'        => '__integerMin1Max100',
					'locationName' => 'contrast',
				],
				'Hdr10Metadata'        => [
					'shape'        => 'Hdr10Metadata',
					'locationName' => 'hdr10Metadata',
				],
				'Hue'                  => [
					'shape'        => '__integerMinNegative180Max180',
					'locationName' => 'hue',
				],
				'Saturation'           => [
					'shape'        => '__integerMin1Max100',
					'locationName' => 'saturation',
				],
			],
		],
		'ColorMetadata'                                                                                                                                                                                                                                                                                                => [
			'type' => 'string',
			'enum' => [ 'IGNORE', 'INSERT', ],
		],
		'ColorSpace'                                                                                                                                                                                                                                                                                                   => [
			'type' => 'string',
			'enum' => [ 'FOLLOW', 'REC_601', 'REC_709', 'HDR10', 'HLG_2020', ],
		],
		'ColorSpaceConversion'                                                                                                                                                                                                                                                                                         => [
			'type' => 'string',
			'enum' => [
				'NONE',
				'FORCE_601',
				'FORCE_709',
				'FORCE_HDR10',
				'FORCE_HLG_2020',
			],
		],
		'ColorSpaceUsage'                                                                                                                                                                                                                                                                                              => [
			'type' => 'string',
			'enum' => [ 'FORCE', 'FALLBACK', ],
		],
		'Commitment'                                                                                                                                                                                                                                                                                                   => [
			'type' => 'string',
			'enum' => [ 'ONE_YEAR', ],
		],
		'ConflictException'                                                                                                                                                                                                                                                                                            => [
			'type'      => 'structure',
			'members'   => [
				'Message' => [
					'shape'        => '__string',
					'locationName' => 'message',
				],
			],
			'exception' => true,
			'error'     => [ 'httpStatusCode' => 409, ],
		],
		'ContainerSettings'                                                                                                                                                                                                                                                                                            => [
			'type'    => 'structure',
			'members' => [
				'Container'    => [
					'shape'        => 'ContainerType',
					'locationName' => 'container',
				],
				'F4vSettings'  => [
					'shape'        => 'F4vSettings',
					'locationName' => 'f4vSettings',
				],
				'M2tsSettings' => [
					'shape'        => 'M2tsSettings',
					'locationName' => 'm2tsSettings',
				],
				'M3u8Settings' => [
					'shape'        => 'M3u8Settings',
					'locationName' => 'm3u8Settings',
				],
				'MovSettings'  => [
					'shape'        => 'MovSettings',
					'locationName' => 'movSettings',
				],
				'Mp4Settings'  => [
					'shape'        => 'Mp4Settings',
					'locationName' => 'mp4Settings',
				],
			],
		],
		'ContainerType'                                                                                                                                                                                                                                                                                                => [
			'type' => 'string',
			'enum' => [
				'F4V',
				'ISMV',
				'M2TS',
				'M3U8',
				'CMFC',
				'MOV',
				'MP4',
				'MPD',
				'MXF',
				'RAW',
			],
		],
		'CreateJobRequest'                                                                                                                                                                                                                                                                                             => [
			'type'     => 'structure',
			'members'  => [
				'AccelerationSettings' => [
					'shape'        => 'AccelerationSettings',
					'locationName' => 'accelerationSettings',
				],
				'BillingTagsSource'    => [
					'shape'        => 'BillingTagsSource',
					'locationName' => 'billingTagsSource',
				],
				'ClientRequestToken'   => [
					'shape'            => '__string',
					'locationName'     => 'clientRequestToken',
					'idempotencyToken' => true,
				],
				'JobTemplate'          => [
					'shape'        => '__string',
					'locationName' => 'jobTemplate',
				],
				'Queue'                => [
					'shape'        => '__string',
					'locationName' => 'queue',
				],
				'Role'                 => [
					'shape'        => '__string',
					'locationName' => 'role',
				],
				'Settings'             => [
					'shape'        => 'JobSettings',
					'locationName' => 'settings',
				],
				'StatusUpdateInterval' => [
					'shape'        => 'StatusUpdateInterval',
					'locationName' => 'statusUpdateInterval',
				],
				'UserMetadata'         => [
					'shape'        => '__mapOf__string',
					'locationName' => 'userMetadata',
				],
			],
			'required' => [ 'Role', 'Settings', ],
		],
		'CreateJobResponse'                                                                                                                                                                                                                                                                                            => [
			'type'    => 'structure',
			'members' => [
				'Job' => [
					'shape'        => 'Job',
					'locationName' => 'job',
				],
			],
		],
		'CreateJobTemplateRequest'                                                                                                                                                                                                                                                                                     => [
			'type'     => 'structure',
			'members'  => [
				'AccelerationSettings' => [
					'shape'        => 'AccelerationSettings',
					'locationName' => 'accelerationSettings',
				],
				'Category'             => [
					'shape'        => '__string',
					'locationName' => 'category',
				],
				'Description'          => [
					'shape'        => '__string',
					'locationName' => 'description',
				],
				'Name'                 => [
					'shape'        => '__string',
					'locationName' => 'name',
				],
				'Queue'                => [
					'shape'        => '__string',
					'locationName' => 'queue',
				],
				'Settings'             => [
					'shape'        => 'JobTemplateSettings',
					'locationName' => 'settings',
				],
				'StatusUpdateInterval' => [
					'shape'        => 'StatusUpdateInterval',
					'locationName' => 'statusUpdateInterval',
				],
				'Tags'                 => [
					'shape'        => '__mapOf__string',
					'locationName' => 'tags',
				],
			],
			'required' => [ 'Settings', 'Name', ],
		],
		'CreateJobTemplateResponse'                                                                                                                                                                                                                                                                                    => [
			'type'    => 'structure',
			'members' => [
				'JobTemplate' => [
					'shape'        => 'JobTemplate',
					'locationName' => 'jobTemplate',
				],
			],
		],
		'CreatePresetRequest'                                                                                                                                                                                                                                                                                          => [
			'type'     => 'structure',
			'members'  => [
				'Category'    => [
					'shape'        => '__string',
					'locationName' => 'category',
				],
				'Description' => [
					'shape'        => '__string',
					'locationName' => 'description',
				],
				'Name'        => [
					'shape'        => '__string',
					'locationName' => 'name',
				],
				'Settings'    => [
					'shape'        => 'PresetSettings',
					'locationName' => 'settings',
				],
				'Tags'        => [
					'shape'        => '__mapOf__string',
					'locationName' => 'tags',
				],
			],
			'required' => [ 'Settings', 'Name', ],
		],
		'CreatePresetResponse'                                                                                                                                                                                                                                                                                         => [
			'type'    => 'structure',
			'members' => [
				'Preset' => [
					'shape'        => 'Preset',
					'locationName' => 'preset',
				],
			],
		],
		'CreateQueueRequest'                                                                                                                                                                                                                                                                                           => [
			'type'     => 'structure',
			'members'  => [
				'Description'             => [
					'shape'        => '__string',
					'locationName' => 'description',
				],
				'Name'                    => [
					'shape'        => '__string',
					'locationName' => 'name',
				],
				'PricingPlan'             => [
					'shape'        => 'PricingPlan',
					'locationName' => 'pricingPlan',
				],
				'ReservationPlanSettings' => [
					'shape'        => 'ReservationPlanSettings',
					'locationName' => 'reservationPlanSettings',
				],
				'Tags'                    => [
					'shape'        => '__mapOf__string',
					'locationName' => 'tags',
				],
			],
			'required' => [ 'Name', ],
		],
		'CreateQueueResponse'                                                                                                                                                                                                                                                                                          => [
			'type'    => 'structure',
			'members' => [
				'Queue' => [
					'shape'        => 'Queue',
					'locationName' => 'queue',
				],
			],
		],
		'DashIsoEncryptionSettings'                                                                                                                                                                                                                                                                                    => [
			'type'    => 'structure',
			'members' => [
				'PlaybackDeviceCompatibility' => [
					'shape'        => 'DashIsoPlaybackDeviceCompatibility',
					'locationName' => 'playbackDeviceCompatibility',
				],
				'SpekeKeyProvider'            => [
					'shape'        => 'SpekeKeyProvider',
					'locationName' => 'spekeKeyProvider',
				],
			],
		],
		'DashIsoGroupSettings'                                                                                                                                                                                                                                                                                         => [
			'type'    => 'structure',
			'members' => [
				'BaseUrl'                              => [ 'shape' => '__string', 'locationName' => 'baseUrl', ],
				'Destination'                          => [
					'shape'        => '__stringPatternS3',
					'locationName' => 'destination',
				],
				'DestinationSettings'                  => [
					'shape'        => 'DestinationSettings',
					'locationName' => 'destinationSettings',
				],
				'Encryption'                           => [
					'shape'        => 'DashIsoEncryptionSettings',
					'locationName' => 'encryption',
				],
				'FragmentLength'                       => [
					'shape'        => '__integerMin1Max2147483647',
					'locationName' => 'fragmentLength',
				],
				'HbbtvCompliance'                      => [
					'shape'        => 'DashIsoHbbtvCompliance',
					'locationName' => 'hbbtvCompliance',
				],
				'MinBufferTime'                        => [
					'shape'        => '__integerMin0Max2147483647',
					'locationName' => 'minBufferTime',
				],
				'SegmentControl'                       => [
					'shape'        => 'DashIsoSegmentControl',
					'locationName' => 'segmentControl',
				],
				'SegmentLength'                        => [
					'shape'        => '__integerMin1Max2147483647',
					'locationName' => 'segmentLength',
				],
				'WriteSegmentTimelineInRepresentation' => [
					'shape'        => 'DashIsoWriteSegmentTimelineInRepresentation',
					'locationName' => 'writeSegmentTimelineInRepresentation',
				],
			],
		],
		'DashIsoHbbtvCompliance'                                                                                                                                                                                                                                                                                       => [
			'type' => 'string',
			'enum' => [ 'HBBTV_1_5', 'NONE', ],
		],
		'DashIsoPlaybackDeviceCompatibility'                                                                                                                                                                                                                                                                           => [
			'type' => 'string',
			'enum' => [ 'CENC_V1', 'UNENCRYPTED_SEI', ],
		],
		'DashIsoSegmentControl'                                                                                                                                                                                                                                                                                        => [
			'type' => 'string',
			'enum' => [ 'SINGLE_FILE', 'SEGMENTED_FILES', ],
		],
		'DashIsoWriteSegmentTimelineInRepresentation'                                                                                                                                                                                                                                                                  => [
			'type' => 'string',
			'enum' => [ 'ENABLED', 'DISABLED', ],
		],
		'DecryptionMode'                                                                                                                                                                                                                                                                                               => [
			'type' => 'string',
			'enum' => [ 'AES_CTR', 'AES_CBC', 'AES_GCM', ],
		],
		'DeinterlaceAlgorithm'                                                                                                                                                                                                                                                                                         => [
			'type' => 'string',
			'enum' => [
				'INTERPOLATE',
				'INTERPOLATE_TICKER',
				'BLEND',
				'BLEND_TICKER',
			],
		],
		'Deinterlacer'                                                                                                                                                                                                                                                                                                 => [
			'type'    => 'structure',
			'members' => [
				'Algorithm' => [
					'shape'        => 'DeinterlaceAlgorithm',
					'locationName' => 'algorithm',
				],
				'Control'   => [
					'shape'        => 'DeinterlacerControl',
					'locationName' => 'control',
				],
				'Mode'      => [
					'shape'        => 'DeinterlacerMode',
					'locationName' => 'mode',
				],
			],
		],
		'DeinterlacerControl'                                                                                                                                                                                                                                                                                          => [
			'type' => 'string',
			'enum' => [ 'FORCE_ALL_FRAMES', 'NORMAL', ],
		],
		'DeinterlacerMode'                                                                                                                                                                                                                                                                                             => [
			'type' => 'string',
			'enum' => [ 'DEINTERLACE', 'INVERSE_TELECINE', 'ADAPTIVE', ],
		],
		'DeleteJobTemplateRequest'                                                                                                                                                                                                                                                                                     => [
			'type'     => 'structure',
			'members'  => [
				'Name' => [
					'shape'        => '__string',
					'locationName' => 'name',
					'location'     => 'uri',
				],
			],
			'required' => [ 'Name', ],
		],
		'DeleteJobTemplateResponse'                                                                                                                                                                                                                                                                                    => [
			'type'    => 'structure',
			'members' => [],
		],
		'DeletePresetRequest'                                                                                                                                                                                                                                                                                          => [
			'type'     => 'structure',
			'members'  => [
				'Name' => [
					'shape'        => '__string',
					'locationName' => 'name',
					'location'     => 'uri',
				],
			],
			'required' => [ 'Name', ],
		],
		'DeletePresetResponse'                                                                                                                                                                                                                                                                                         => [
			'type'    => 'structure',
			'members' => [],
		],
		'DeleteQueueRequest'                                                                                                                                                                                                                                                                                           => [
			'type'     => 'structure',
			'members'  => [
				'Name' => [
					'shape'        => '__string',
					'locationName' => 'name',
					'location'     => 'uri',
				],
			],
			'required' => [ 'Name', ],
		],
		'DeleteQueueResponse'                                                                                                                                                                                                                                                                                          => [
			'type'    => 'structure',
			'members' => [],
		],
		'DescribeEndpointsMode'                                                                                                                                                                                                                                                                                        => [
			'type' => 'string',
			'enum' => [ 'DEFAULT', 'GET_ONLY', ],
		],
		'DescribeEndpointsRequest'                                                                                                                                                                                                                                                                                     => [
			'type'    => 'structure',
			'members' => [
				'MaxResults' => [
					'shape'        => '__integer',
					'locationName' => 'maxResults',
				],
				'Mode'       => [
					'shape'        => 'DescribeEndpointsMode',
					'locationName' => 'mode',
				],
				'NextToken'  => [
					'shape'        => '__string',
					'locationName' => 'nextToken',
				],
			],
		],
		'DescribeEndpointsResponse'                                                                                                                                                                                                                                                                                    => [
			'type'    => 'structure',
			'members' => [
				'Endpoints' => [
					'shape'        => '__listOfEndpoint',
					'locationName' => 'endpoints',
				],
				'NextToken' => [
					'shape'        => '__string',
					'locationName' => 'nextToken',
				],
			],
		],
		'DestinationSettings'                                                                                                                                                                                                                                                                                          => [
			'type'    => 'structure',
			'members' => [
				'S3Settings' => [
					'shape'        => 'S3DestinationSettings',
					'locationName' => 's3Settings',
				],
			],
		],
		'DisassociateCertificateRequest'                                                                                                                                                                                                                                                                               => [
			'type'     => 'structure',
			'members'  => [
				'Arn' => [
					'shape'        => '__string',
					'locationName' => 'arn',
					'location'     => 'uri',
				],
			],
			'required' => [ 'Arn', ],
		],
		'DisassociateCertificateResponse'                                                                                                                                                                                                                                                                              => [
			'type'    => 'structure',
			'members' => [],
		],
		'DropFrameTimecode'                                                                                                                                                                                                                                                                                            => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'DvbNitSettings'                                                                                                                                                                                                                                                                                               => [
			'type'    => 'structure',
			'members' => [
				'NetworkId'   => [
					'shape'        => '__integerMin0Max65535',
					'locationName' => 'networkId',
				],
				'NetworkName' => [
					'shape'        => '__stringMin1Max256',
					'locationName' => 'networkName',
				],
				'NitInterval' => [
					'shape'        => '__integerMin25Max10000',
					'locationName' => 'nitInterval',
				],
			],
		],
		'DvbSdtSettings'                                                                                                                                                                                                                                                                                               => [
			'type'    => 'structure',
			'members' => [
				'OutputSdt'           => [
					'shape'        => 'OutputSdt',
					'locationName' => 'outputSdt',
				],
				'SdtInterval'         => [
					'shape'        => '__integerMin25Max2000',
					'locationName' => 'sdtInterval',
				],
				'ServiceName'         => [
					'shape'        => '__stringMin1Max256',
					'locationName' => 'serviceName',
				],
				'ServiceProviderName' => [
					'shape'        => '__stringMin1Max256',
					'locationName' => 'serviceProviderName',
				],
			],
		],
		'DvbSubDestinationSettings'                                                                                                                                                                                                                                                                                    => [
			'type'    => 'structure',
			'members' => [
				'Alignment'         => [ 'shape' => 'DvbSubtitleAlignment', 'locationName' => 'alignment', ],
				'BackgroundColor'   => [
					'shape'        => 'DvbSubtitleBackgroundColor',
					'locationName' => 'backgroundColor',
				],
				'BackgroundOpacity' => [ 'shape' => '__integerMin0Max255', 'locationName' => 'backgroundOpacity', ],
				'FontColor'         => [ 'shape' => 'DvbSubtitleFontColor', 'locationName' => 'fontColor', ],
				'FontOpacity'       => [ 'shape' => '__integerMin0Max255', 'locationName' => 'fontOpacity', ],
				'FontResolution'    => [ 'shape' => '__integerMin96Max600', 'locationName' => 'fontResolution', ],
				'FontScript'        => [ 'shape' => 'FontScript', 'locationName' => 'fontScript', ],
				'FontSize'          => [ 'shape' => '__integerMin0Max96', 'locationName' => 'fontSize', ],
				'OutlineColor'      => [ 'shape' => 'DvbSubtitleOutlineColor', 'locationName' => 'outlineColor', ],
				'OutlineSize'       => [ 'shape' => '__integerMin0Max10', 'locationName' => 'outlineSize', ],
				'ShadowColor'       => [ 'shape' => 'DvbSubtitleShadowColor', 'locationName' => 'shadowColor', ],
				'ShadowOpacity'     => [ 'shape' => '__integerMin0Max255', 'locationName' => 'shadowOpacity', ],
				'ShadowXOffset'     => [
					'shape'        => '__integerMinNegative2147483648Max2147483647',
					'locationName' => 'shadowXOffset',
				],
				'ShadowYOffset'     => [
					'shape'        => '__integerMinNegative2147483648Max2147483647',
					'locationName' => 'shadowYOffset',
				],
				'TeletextSpacing'   => [
					'shape'        => 'DvbSubtitleTeletextSpacing',
					'locationName' => 'teletextSpacing',
				],
				'XPosition'         => [ 'shape' => '__integerMin0Max2147483647', 'locationName' => 'xPosition', ],
				'YPosition'         => [ 'shape' => '__integerMin0Max2147483647', 'locationName' => 'yPosition', ],
			],
		],
		'DvbSubSourceSettings'                                                                                                                                                                                                                                                                                         => [
			'type'    => 'structure',
			'members' => [
				'Pid' => [
					'shape'        => '__integerMin1Max2147483647',
					'locationName' => 'pid',
				],
			],
		],
		'DvbSubtitleAlignment'                                                                                                                                                                                                                                                                                         => [
			'type' => 'string',
			'enum' => [ 'CENTERED', 'LEFT', ],
		],
		'DvbSubtitleBackgroundColor'                                                                                                                                                                                                                                                                                   => [
			'type' => 'string',
			'enum' => [ 'NONE', 'BLACK', 'WHITE', ],
		],
		'DvbSubtitleFontColor'                                                                                                                                                                                                                                                                                         => [
			'type' => 'string',
			'enum' => [
				'WHITE',
				'BLACK',
				'YELLOW',
				'RED',
				'GREEN',
				'BLUE',
			],
		],
		'DvbSubtitleOutlineColor'                                                                                                                                                                                                                                                                                      => [
			'type' => 'string',
			'enum' => [
				'BLACK',
				'WHITE',
				'YELLOW',
				'RED',
				'GREEN',
				'BLUE',
			],
		],
		'DvbSubtitleShadowColor'                                                                                                                                                                                                                                                                                       => [
			'type' => 'string',
			'enum' => [ 'NONE', 'BLACK', 'WHITE', ],
		],
		'DvbSubtitleTeletextSpacing'                                                                                                                                                                                                                                                                                   => [
			'type' => 'string',
			'enum' => [ 'FIXED_GRID', 'PROPORTIONAL', ],
		],
		'DvbTdtSettings'                                                                                                                                                                                                                                                                                               => [
			'type'    => 'structure',
			'members' => [
				'TdtInterval' => [
					'shape'        => '__integerMin1000Max30000',
					'locationName' => 'tdtInterval',
				],
			],
		],
		'Eac3AttenuationControl'                                                                                                                                                                                                                                                                                       => [
			'type' => 'string',
			'enum' => [ 'ATTENUATE_3_DB', 'NONE', ],
		],
		'Eac3BitstreamMode'                                                                                                                                                                                                                                                                                            => [
			'type' => 'string',
			'enum' => [
				'COMPLETE_MAIN',
				'COMMENTARY',
				'EMERGENCY',
				'HEARING_IMPAIRED',
				'VISUALLY_IMPAIRED',
			],
		],
		'Eac3CodingMode'                                                                                                                                                                                                                                                                                               => [
			'type' => 'string',
			'enum' => [
				'CODING_MODE_1_0',
				'CODING_MODE_2_0',
				'CODING_MODE_3_2',
			],
		],
		'Eac3DcFilter'                                                                                                                                                                                                                                                                                                 => [
			'type' => 'string',
			'enum' => [ 'ENABLED', 'DISABLED', ],
		],
		'Eac3DynamicRangeCompressionLine'                                                                                                                                                                                                                                                                              => [
			'type' => 'string',
			'enum' => [
				'NONE',
				'FILM_STANDARD',
				'FILM_LIGHT',
				'MUSIC_STANDARD',
				'MUSIC_LIGHT',
				'SPEECH',
			],
		],
		'Eac3DynamicRangeCompressionRf'                                                                                                                                                                                                                                                                                => [
			'type' => 'string',
			'enum' => [
				'NONE',
				'FILM_STANDARD',
				'FILM_LIGHT',
				'MUSIC_STANDARD',
				'MUSIC_LIGHT',
				'SPEECH',
			],
		],
		'Eac3LfeControl'                                                                                                                                                                                                                                                                                               => [
			'type' => 'string',
			'enum' => [ 'LFE', 'NO_LFE', ],
		],
		'Eac3LfeFilter'                                                                                                                                                                                                                                                                                                => [
			'type' => 'string',
			'enum' => [ 'ENABLED', 'DISABLED', ],
		],
		'Eac3MetadataControl'                                                                                                                                                                                                                                                                                          => [
			'type' => 'string',
			'enum' => [ 'FOLLOW_INPUT', 'USE_CONFIGURED', ],
		],
		'Eac3PassthroughControl'                                                                                                                                                                                                                                                                                       => [
			'type' => 'string',
			'enum' => [ 'WHEN_POSSIBLE', 'NO_PASSTHROUGH', ],
		],
		'Eac3PhaseControl'                                                                                                                                                                                                                                                                                             => [
			'type' => 'string',
			'enum' => [ 'SHIFT_90_DEGREES', 'NO_SHIFT', ],
		],
		'Eac3Settings'                                                                                                                                                                                                                                                                                                 => [
			'type'    => 'structure',
			'members' => [
				'AttenuationControl'          => [
					'shape'        => 'Eac3AttenuationControl',
					'locationName' => 'attenuationControl',
				],
				'Bitrate'                     => [
					'shape'        => '__integerMin64000Max640000',
					'locationName' => 'bitrate',
				],
				'BitstreamMode'               => [ 'shape' => 'Eac3BitstreamMode', 'locationName' => 'bitstreamMode', ],
				'CodingMode'                  => [ 'shape' => 'Eac3CodingMode', 'locationName' => 'codingMode', ],
				'DcFilter'                    => [ 'shape' => 'Eac3DcFilter', 'locationName' => 'dcFilter', ],
				'Dialnorm'                    => [ 'shape' => '__integerMin1Max31', 'locationName' => 'dialnorm', ],
				'DynamicRangeCompressionLine' => [
					'shape'        => 'Eac3DynamicRangeCompressionLine',
					'locationName' => 'dynamicRangeCompressionLine',
				],
				'DynamicRangeCompressionRf'   => [
					'shape'        => 'Eac3DynamicRangeCompressionRf',
					'locationName' => 'dynamicRangeCompressionRf',
				],
				'LfeControl'                  => [ 'shape' => 'Eac3LfeControl', 'locationName' => 'lfeControl', ],
				'LfeFilter'                   => [ 'shape' => 'Eac3LfeFilter', 'locationName' => 'lfeFilter', ],
				'LoRoCenterMixLevel'          => [
					'shape'        => '__doubleMinNegative60Max3',
					'locationName' => 'loRoCenterMixLevel',
				],
				'LoRoSurroundMixLevel'        => [
					'shape'        => '__doubleMinNegative60MaxNegative1',
					'locationName' => 'loRoSurroundMixLevel',
				],
				'LtRtCenterMixLevel'          => [
					'shape'        => '__doubleMinNegative60Max3',
					'locationName' => 'ltRtCenterMixLevel',
				],
				'LtRtSurroundMixLevel'        => [
					'shape'        => '__doubleMinNegative60MaxNegative1',
					'locationName' => 'ltRtSurroundMixLevel',
				],
				'MetadataControl'             => [
					'shape'        => 'Eac3MetadataControl',
					'locationName' => 'metadataControl',
				],
				'PassthroughControl'          => [
					'shape'        => 'Eac3PassthroughControl',
					'locationName' => 'passthroughControl',
				],
				'PhaseControl'                => [ 'shape' => 'Eac3PhaseControl', 'locationName' => 'phaseControl', ],
				'SampleRate'                  => [
					'shape'        => '__integerMin48000Max48000',
					'locationName' => 'sampleRate',
				],
				'StereoDownmix'               => [ 'shape' => 'Eac3StereoDownmix', 'locationName' => 'stereoDownmix', ],
				'SurroundExMode'              => [
					'shape'        => 'Eac3SurroundExMode',
					'locationName' => 'surroundExMode',
				],
				'SurroundMode'                => [ 'shape' => 'Eac3SurroundMode', 'locationName' => 'surroundMode', ],
			],
		],
		'Eac3StereoDownmix'                                                                                                                                                                                                                                                                                            => [
			'type' => 'string',
			'enum' => [ 'NOT_INDICATED', 'LO_RO', 'LT_RT', 'DPL2', ],
		],
		'Eac3SurroundExMode'                                                                                                                                                                                                                                                                                           => [
			'type' => 'string',
			'enum' => [ 'NOT_INDICATED', 'ENABLED', 'DISABLED', ],
		],
		'Eac3SurroundMode'                                                                                                                                                                                                                                                                                             => [
			'type' => 'string',
			'enum' => [ 'NOT_INDICATED', 'ENABLED', 'DISABLED', ],
		],
		'EmbeddedConvert608To708'                                                                                                                                                                                                                                                                                      => [
			'type' => 'string',
			'enum' => [ 'UPCONVERT', 'DISABLED', ],
		],
		'EmbeddedDestinationSettings'                                                                                                                                                                                                                                                                                  => [
			'type'    => 'structure',
			'members' => [
				'Destination608ChannelNumber' => [
					'shape'        => '__integerMin1Max4',
					'locationName' => 'destination608ChannelNumber',
				],
			],
		],
		'EmbeddedSourceSettings'                                                                                                                                                                                                                                                                                       => [
			'type'    => 'structure',
			'members' => [
				'Convert608To708'        => [
					'shape'        => 'EmbeddedConvert608To708',
					'locationName' => 'convert608To708',
				],
				'Source608ChannelNumber' => [
					'shape'        => '__integerMin1Max4',
					'locationName' => 'source608ChannelNumber',
				],
				'Source608TrackNumber'   => [
					'shape'        => '__integerMin1Max1',
					'locationName' => 'source608TrackNumber',
				],
			],
		],
		'Endpoint'                                                                                                                                                                                                                                                                                                     => [
			'type'    => 'structure',
			'members' => [
				'Url' => [
					'shape'        => '__string',
					'locationName' => 'url',
				],
			],
		],
		'EsamManifestConfirmConditionNotification'                                                                                                                                                                                                                                                                     => [
			'type'    => 'structure',
			'members' => [
				'MccXml' => [
					'shape'        => '__stringPatternSNManifestConfirmConditionNotificationNS',
					'locationName' => 'mccXml',
				],
			],
		],
		'EsamSettings'                                                                                                                                                                                                                                                                                                 => [
			'type'    => 'structure',
			'members' => [
				'ManifestConfirmConditionNotification' => [
					'shape'        => 'EsamManifestConfirmConditionNotification',
					'locationName' => 'manifestConfirmConditionNotification',
				],
				'ResponseSignalPreroll'                => [
					'shape'        => '__integerMin0Max30000',
					'locationName' => 'responseSignalPreroll',
				],
				'SignalProcessingNotification'         => [
					'shape'        => 'EsamSignalProcessingNotification',
					'locationName' => 'signalProcessingNotification',
				],
			],
		],
		'EsamSignalProcessingNotification'                                                                                                                                                                                                                                                                             => [
			'type'    => 'structure',
			'members' => [
				'SccXml' => [
					'shape'        => '__stringPatternSNSignalProcessingNotificationNS',
					'locationName' => 'sccXml',
				],
			],
		],
		'ExceptionBody'                                                                                                                                                                                                                                                                                                => [
			'type'    => 'structure',
			'members' => [
				'Message' => [
					'shape'        => '__string',
					'locationName' => 'message',
				],
			],
		],
		'F4vMoovPlacement'                                                                                                                                                                                                                                                                                             => [
			'type' => 'string',
			'enum' => [ 'PROGRESSIVE_DOWNLOAD', 'NORMAL', ],
		],
		'F4vSettings'                                                                                                                                                                                                                                                                                                  => [
			'type'    => 'structure',
			'members' => [
				'MoovPlacement' => [
					'shape'        => 'F4vMoovPlacement',
					'locationName' => 'moovPlacement',
				],
			],
		],
		'FileGroupSettings'                                                                                                                                                                                                                                                                                            => [
			'type'    => 'structure',
			'members' => [
				'Destination'         => [
					'shape'        => '__stringPatternS3',
					'locationName' => 'destination',
				],
				'DestinationSettings' => [
					'shape'        => 'DestinationSettings',
					'locationName' => 'destinationSettings',
				],
			],
		],
		'FileSourceConvert608To708'                                                                                                                                                                                                                                                                                    => [
			'type' => 'string',
			'enum' => [ 'UPCONVERT', 'DISABLED', ],
		],
		'FileSourceSettings'                                                                                                                                                                                                                                                                                           => [
			'type'    => 'structure',
			'members' => [
				'Convert608To708' => [
					'shape'        => 'FileSourceConvert608To708',
					'locationName' => 'convert608To708',
				],
				'SourceFile'      => [
					'shape'        => '__stringMin14PatternS3SccSCCTtmlTTMLDfxpDFXPStlSTLSrtSRTSmiSMI',
					'locationName' => 'sourceFile',
				],
				'TimeDelta'       => [
					'shape'        => '__integerMinNegative2147483648Max2147483647',
					'locationName' => 'timeDelta',
				],
			],
		],
		'FontScript'                                                                                                                                                                                                                                                                                                   => [
			'type' => 'string',
			'enum' => [ 'AUTOMATIC', 'HANS', 'HANT', ],
		],
		'ForbiddenException'                                                                                                                                                                                                                                                                                           => [
			'type'      => 'structure',
			'members'   => [
				'Message' => [
					'shape'        => '__string',
					'locationName' => 'message',
				],
			],
			'exception' => true,
			'error'     => [ 'httpStatusCode' => 403, ],
		],
		'FrameCaptureSettings'                                                                                                                                                                                                                                                                                         => [
			'type'    => 'structure',
			'members' => [
				'FramerateDenominator' => [
					'shape'        => '__integerMin1Max2147483647',
					'locationName' => 'framerateDenominator',
				],
				'FramerateNumerator'   => [
					'shape'        => '__integerMin1Max2147483647',
					'locationName' => 'framerateNumerator',
				],
				'MaxCaptures'          => [
					'shape'        => '__integerMin1Max10000000',
					'locationName' => 'maxCaptures',
				],
				'Quality'              => [
					'shape'        => '__integerMin1Max100',
					'locationName' => 'quality',
				],
			],
		],
		'GetJobRequest'                                                                                                                                                                                                                                                                                                => [
			'type'     => 'structure',
			'members'  => [
				'Id' => [
					'shape'        => '__string',
					'locationName' => 'id',
					'location'     => 'uri',
				],
			],
			'required' => [ 'Id', ],
		],
		'GetJobResponse'                                                                                                                                                                                                                                                                                               => [
			'type'    => 'structure',
			'members' => [
				'Job' => [
					'shape'        => 'Job',
					'locationName' => 'job',
				],
			],
		],
		'GetJobTemplateRequest'                                                                                                                                                                                                                                                                                        => [
			'type'     => 'structure',
			'members'  => [
				'Name' => [
					'shape'        => '__string',
					'locationName' => 'name',
					'location'     => 'uri',
				],
			],
			'required' => [ 'Name', ],
		],
		'GetJobTemplateResponse'                                                                                                                                                                                                                                                                                       => [
			'type'    => 'structure',
			'members' => [
				'JobTemplate' => [
					'shape'        => 'JobTemplate',
					'locationName' => 'jobTemplate',
				],
			],
		],
		'GetPresetRequest'                                                                                                                                                                                                                                                                                             => [
			'type'     => 'structure',
			'members'  => [
				'Name' => [
					'shape'        => '__string',
					'locationName' => 'name',
					'location'     => 'uri',
				],
			],
			'required' => [ 'Name', ],
		],
		'GetPresetResponse'                                                                                                                                                                                                                                                                                            => [
			'type'    => 'structure',
			'members' => [
				'Preset' => [
					'shape'        => 'Preset',
					'locationName' => 'preset',
				],
			],
		],
		'GetQueueRequest'                                                                                                                                                                                                                                                                                              => [
			'type'     => 'structure',
			'members'  => [
				'Name' => [
					'shape'        => '__string',
					'locationName' => 'name',
					'location'     => 'uri',
				],
			],
			'required' => [ 'Name', ],
		],
		'GetQueueResponse'                                                                                                                                                                                                                                                                                             => [
			'type'    => 'structure',
			'members' => [
				'Queue' => [
					'shape'        => 'Queue',
					'locationName' => 'queue',
				],
			],
		],
		'H264AdaptiveQuantization'                                                                                                                                                                                                                                                                                     => [
			'type' => 'string',
			'enum' => [
				'OFF',
				'LOW',
				'MEDIUM',
				'HIGH',
				'HIGHER',
				'MAX',
			],
		],
		'H264CodecLevel'                                                                                                                                                                                                                                                                                               => [
			'type' => 'string',
			'enum' => [
				'AUTO',
				'LEVEL_1',
				'LEVEL_1_1',
				'LEVEL_1_2',
				'LEVEL_1_3',
				'LEVEL_2',
				'LEVEL_2_1',
				'LEVEL_2_2',
				'LEVEL_3',
				'LEVEL_3_1',
				'LEVEL_3_2',
				'LEVEL_4',
				'LEVEL_4_1',
				'LEVEL_4_2',
				'LEVEL_5',
				'LEVEL_5_1',
				'LEVEL_5_2',
			],
		],
		'H264CodecProfile'                                                                                                                                                                                                                                                                                             => [
			'type' => 'string',
			'enum' => [
				'BASELINE',
				'HIGH',
				'HIGH_10BIT',
				'HIGH_422',
				'HIGH_422_10BIT',
				'MAIN',
			],
		],
		'H264DynamicSubGop'                                                                                                                                                                                                                                                                                            => [
			'type' => 'string',
			'enum' => [ 'ADAPTIVE', 'STATIC', ],
		],
		'H264EntropyEncoding'                                                                                                                                                                                                                                                                                          => [
			'type' => 'string',
			'enum' => [ 'CABAC', 'CAVLC', ],
		],
		'H264FieldEncoding'                                                                                                                                                                                                                                                                                            => [
			'type' => 'string',
			'enum' => [ 'PAFF', 'FORCE_FIELD', ],
		],
		'H264FlickerAdaptiveQuantization'                                                                                                                                                                                                                                                                              => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'H264FramerateControl'                                                                                                                                                                                                                                                                                         => [
			'type' => 'string',
			'enum' => [ 'INITIALIZE_FROM_SOURCE', 'SPECIFIED', ],
		],
		'H264FramerateConversionAlgorithm'                                                                                                                                                                                                                                                                             => [
			'type' => 'string',
			'enum' => [ 'DUPLICATE_DROP', 'INTERPOLATE', ],
		],
		'H264GopBReference'                                                                                                                                                                                                                                                                                            => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'H264GopSizeUnits'                                                                                                                                                                                                                                                                                             => [
			'type' => 'string',
			'enum' => [ 'FRAMES', 'SECONDS', ],
		],
		'H264InterlaceMode'                                                                                                                                                                                                                                                                                            => [
			'type' => 'string',
			'enum' => [
				'PROGRESSIVE',
				'TOP_FIELD',
				'BOTTOM_FIELD',
				'FOLLOW_TOP_FIELD',
				'FOLLOW_BOTTOM_FIELD',
			],
		],
		'H264ParControl'                                                                                                                                                                                                                                                                                               => [
			'type' => 'string',
			'enum' => [ 'INITIALIZE_FROM_SOURCE', 'SPECIFIED', ],
		],
		'H264QualityTuningLevel'                                                                                                                                                                                                                                                                                       => [
			'type' => 'string',
			'enum' => [
				'SINGLE_PASS',
				'SINGLE_PASS_HQ',
				'MULTI_PASS_HQ',
			],
		],
		'H264QvbrSettings'                                                                                                                                                                                                                                                                                             => [
			'type'    => 'structure',
			'members' => [
				'MaxAverageBitrate' => [
					'shape'        => '__integerMin1000Max1152000000',
					'locationName' => 'maxAverageBitrate',
				],
				'QvbrQualityLevel'  => [
					'shape'        => '__integerMin1Max10',
					'locationName' => 'qvbrQualityLevel',
				],
			],
		],
		'H264RateControlMode'                                                                                                                                                                                                                                                                                          => [
			'type' => 'string',
			'enum' => [ 'VBR', 'CBR', 'QVBR', ],
		],
		'H264RepeatPps'                                                                                                                                                                                                                                                                                                => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'H264SceneChangeDetect'                                                                                                                                                                                                                                                                                        => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'H264Settings'                                                                                                                                                                                                                                                                                                 => [
			'type'    => 'structure',
			'members' => [
				'AdaptiveQuantization'                => [
					'shape'        => 'H264AdaptiveQuantization',
					'locationName' => 'adaptiveQuantization',
				],
				'Bitrate'                             => [
					'shape'        => '__integerMin1000Max1152000000',
					'locationName' => 'bitrate',
				],
				'CodecLevel'                          => [
					'shape'        => 'H264CodecLevel',
					'locationName' => 'codecLevel',
				],
				'CodecProfile'                        => [
					'shape'        => 'H264CodecProfile',
					'locationName' => 'codecProfile',
				],
				'DynamicSubGop'                       => [
					'shape'        => 'H264DynamicSubGop',
					'locationName' => 'dynamicSubGop',
				],
				'EntropyEncoding'                     => [
					'shape'        => 'H264EntropyEncoding',
					'locationName' => 'entropyEncoding',
				],
				'FieldEncoding'                       => [
					'shape'        => 'H264FieldEncoding',
					'locationName' => 'fieldEncoding',
				],
				'FlickerAdaptiveQuantization'         => [
					'shape'        => 'H264FlickerAdaptiveQuantization',
					'locationName' => 'flickerAdaptiveQuantization',
				],
				'FramerateControl'                    => [
					'shape'        => 'H264FramerateControl',
					'locationName' => 'framerateControl',
				],
				'FramerateConversionAlgorithm'        => [
					'shape'        => 'H264FramerateConversionAlgorithm',
					'locationName' => 'framerateConversionAlgorithm',
				],
				'FramerateDenominator'                => [
					'shape'        => '__integerMin1Max2147483647',
					'locationName' => 'framerateDenominator',
				],
				'FramerateNumerator'                  => [
					'shape'        => '__integerMin1Max2147483647',
					'locationName' => 'framerateNumerator',
				],
				'GopBReference'                       => [
					'shape'        => 'H264GopBReference',
					'locationName' => 'gopBReference',
				],
				'GopClosedCadence'                    => [
					'shape'        => '__integerMin0Max2147483647',
					'locationName' => 'gopClosedCadence',
				],
				'GopSize'                             => [ 'shape' => '__doubleMin0', 'locationName' => 'gopSize', ],
				'GopSizeUnits'                        => [
					'shape'        => 'H264GopSizeUnits',
					'locationName' => 'gopSizeUnits',
				],
				'HrdBufferInitialFillPercentage'      => [
					'shape'        => '__integerMin0Max100',
					'locationName' => 'hrdBufferInitialFillPercentage',
				],
				'HrdBufferSize'                       => [
					'shape'        => '__integerMin0Max1152000000',
					'locationName' => 'hrdBufferSize',
				],
				'InterlaceMode'                       => [
					'shape'        => 'H264InterlaceMode',
					'locationName' => 'interlaceMode',
				],
				'MaxBitrate'                          => [
					'shape'        => '__integerMin1000Max1152000000',
					'locationName' => 'maxBitrate',
				],
				'MinIInterval'                        => [
					'shape'        => '__integerMin0Max30',
					'locationName' => 'minIInterval',
				],
				'NumberBFramesBetweenReferenceFrames' => [
					'shape'        => '__integerMin0Max7',
					'locationName' => 'numberBFramesBetweenReferenceFrames',
				],
				'NumberReferenceFrames'               => [
					'shape'        => '__integerMin1Max6',
					'locationName' => 'numberReferenceFrames',
				],
				'ParControl'                          => [
					'shape'        => 'H264ParControl',
					'locationName' => 'parControl',
				],
				'ParDenominator'                      => [
					'shape'        => '__integerMin1Max2147483647',
					'locationName' => 'parDenominator',
				],
				'ParNumerator'                        => [
					'shape'        => '__integerMin1Max2147483647',
					'locationName' => 'parNumerator',
				],
				'QualityTuningLevel'                  => [
					'shape'        => 'H264QualityTuningLevel',
					'locationName' => 'qualityTuningLevel',
				],
				'QvbrSettings'                        => [
					'shape'        => 'H264QvbrSettings',
					'locationName' => 'qvbrSettings',
				],
				'RateControlMode'                     => [
					'shape'        => 'H264RateControlMode',
					'locationName' => 'rateControlMode',
				],
				'RepeatPps'                           => [ 'shape' => 'H264RepeatPps', 'locationName' => 'repeatPps', ],
				'SceneChangeDetect'                   => [
					'shape'        => 'H264SceneChangeDetect',
					'locationName' => 'sceneChangeDetect',
				],
				'Slices'                              => [
					'shape'        => '__integerMin1Max32',
					'locationName' => 'slices',
				],
				'SlowPal'                             => [ 'shape' => 'H264SlowPal', 'locationName' => 'slowPal', ],
				'Softness'                            => [
					'shape'        => '__integerMin0Max128',
					'locationName' => 'softness',
				],
				'SpatialAdaptiveQuantization'         => [
					'shape'        => 'H264SpatialAdaptiveQuantization',
					'locationName' => 'spatialAdaptiveQuantization',
				],
				'Syntax'                              => [ 'shape' => 'H264Syntax', 'locationName' => 'syntax', ],
				'Telecine'                            => [ 'shape' => 'H264Telecine', 'locationName' => 'telecine', ],
				'TemporalAdaptiveQuantization'        => [
					'shape'        => 'H264TemporalAdaptiveQuantization',
					'locationName' => 'temporalAdaptiveQuantization',
				],
				'UnregisteredSeiTimecode'             => [
					'shape'        => 'H264UnregisteredSeiTimecode',
					'locationName' => 'unregisteredSeiTimecode',
				],
			],
		],
		'H264SlowPal'                                                                                                                                                                                                                                                                                                  => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'H264SpatialAdaptiveQuantization'                                                                                                                                                                                                                                                                              => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'H264Syntax'                                                                                                                                                                                                                                                                                                   => [
			'type' => 'string',
			'enum' => [ 'DEFAULT', 'RP2027', ],
		],
		'H264Telecine'                                                                                                                                                                                                                                                                                                 => [
			'type' => 'string',
			'enum' => [ 'NONE', 'SOFT', 'HARD', ],
		],
		'H264TemporalAdaptiveQuantization'                                                                                                                                                                                                                                                                             => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'H264UnregisteredSeiTimecode'                                                                                                                                                                                                                                                                                  => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'H265AdaptiveQuantization'                                                                                                                                                                                                                                                                                     => [
			'type' => 'string',
			'enum' => [
				'OFF',
				'LOW',
				'MEDIUM',
				'HIGH',
				'HIGHER',
				'MAX',
			],
		],
		'H265AlternateTransferFunctionSei'                                                                                                                                                                                                                                                                             => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'H265CodecLevel'                                                                                                                                                                                                                                                                                               => [
			'type' => 'string',
			'enum' => [
				'AUTO',
				'LEVEL_1',
				'LEVEL_2',
				'LEVEL_2_1',
				'LEVEL_3',
				'LEVEL_3_1',
				'LEVEL_4',
				'LEVEL_4_1',
				'LEVEL_5',
				'LEVEL_5_1',
				'LEVEL_5_2',
				'LEVEL_6',
				'LEVEL_6_1',
				'LEVEL_6_2',
			],
		],
		'H265CodecProfile'                                                                                                                                                                                                                                                                                             => [
			'type' => 'string',
			'enum' => [
				'MAIN_MAIN',
				'MAIN_HIGH',
				'MAIN10_MAIN',
				'MAIN10_HIGH',
				'MAIN_422_8BIT_MAIN',
				'MAIN_422_8BIT_HIGH',
				'MAIN_422_10BIT_MAIN',
				'MAIN_422_10BIT_HIGH',
			],
		],
		'H265DynamicSubGop'                                                                                                                                                                                                                                                                                            => [
			'type' => 'string',
			'enum' => [ 'ADAPTIVE', 'STATIC', ],
		],
		'H265FlickerAdaptiveQuantization'                                                                                                                                                                                                                                                                              => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'H265FramerateControl'                                                                                                                                                                                                                                                                                         => [
			'type' => 'string',
			'enum' => [ 'INITIALIZE_FROM_SOURCE', 'SPECIFIED', ],
		],
		'H265FramerateConversionAlgorithm'                                                                                                                                                                                                                                                                             => [
			'type' => 'string',
			'enum' => [ 'DUPLICATE_DROP', 'INTERPOLATE', ],
		],
		'H265GopBReference'                                                                                                                                                                                                                                                                                            => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'H265GopSizeUnits'                                                                                                                                                                                                                                                                                             => [
			'type' => 'string',
			'enum' => [ 'FRAMES', 'SECONDS', ],
		],
		'H265InterlaceMode'                                                                                                                                                                                                                                                                                            => [
			'type' => 'string',
			'enum' => [
				'PROGRESSIVE',
				'TOP_FIELD',
				'BOTTOM_FIELD',
				'FOLLOW_TOP_FIELD',
				'FOLLOW_BOTTOM_FIELD',
			],
		],
		'H265ParControl'                                                                                                                                                                                                                                                                                               => [
			'type' => 'string',
			'enum' => [ 'INITIALIZE_FROM_SOURCE', 'SPECIFIED', ],
		],
		'H265QualityTuningLevel'                                                                                                                                                                                                                                                                                       => [
			'type' => 'string',
			'enum' => [
				'SINGLE_PASS',
				'SINGLE_PASS_HQ',
				'MULTI_PASS_HQ',
			],
		],
		'H265QvbrSettings'                                                                                                                                                                                                                                                                                             => [
			'type'    => 'structure',
			'members' => [
				'MaxAverageBitrate' => [
					'shape'        => '__integerMin1000Max1466400000',
					'locationName' => 'maxAverageBitrate',
				],
				'QvbrQualityLevel'  => [
					'shape'        => '__integerMin1Max10',
					'locationName' => 'qvbrQualityLevel',
				],
			],
		],
		'H265RateControlMode'                                                                                                                                                                                                                                                                                          => [
			'type' => 'string',
			'enum' => [ 'VBR', 'CBR', 'QVBR', ],
		],
		'H265SampleAdaptiveOffsetFilterMode'                                                                                                                                                                                                                                                                           => [
			'type' => 'string',
			'enum' => [ 'DEFAULT', 'ADAPTIVE', 'OFF', ],
		],
		'H265SceneChangeDetect'                                                                                                                                                                                                                                                                                        => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'H265Settings'                                                                                                                                                                                                                                                                                                 => [
			'type'    => 'structure',
			'members' => [
				'AdaptiveQuantization'                => [
					'shape'        => 'H265AdaptiveQuantization',
					'locationName' => 'adaptiveQuantization',
				],
				'AlternateTransferFunctionSei'        => [
					'shape'        => 'H265AlternateTransferFunctionSei',
					'locationName' => 'alternateTransferFunctionSei',
				],
				'Bitrate'                             => [
					'shape'        => '__integerMin1000Max1466400000',
					'locationName' => 'bitrate',
				],
				'CodecLevel'                          => [
					'shape'        => 'H265CodecLevel',
					'locationName' => 'codecLevel',
				],
				'CodecProfile'                        => [
					'shape'        => 'H265CodecProfile',
					'locationName' => 'codecProfile',
				],
				'DynamicSubGop'                       => [
					'shape'        => 'H265DynamicSubGop',
					'locationName' => 'dynamicSubGop',
				],
				'FlickerAdaptiveQuantization'         => [
					'shape'        => 'H265FlickerAdaptiveQuantization',
					'locationName' => 'flickerAdaptiveQuantization',
				],
				'FramerateControl'                    => [
					'shape'        => 'H265FramerateControl',
					'locationName' => 'framerateControl',
				],
				'FramerateConversionAlgorithm'        => [
					'shape'        => 'H265FramerateConversionAlgorithm',
					'locationName' => 'framerateConversionAlgorithm',
				],
				'FramerateDenominator'                => [
					'shape'        => '__integerMin1Max2147483647',
					'locationName' => 'framerateDenominator',
				],
				'FramerateNumerator'                  => [
					'shape'        => '__integerMin1Max2147483647',
					'locationName' => 'framerateNumerator',
				],
				'GopBReference'                       => [
					'shape'        => 'H265GopBReference',
					'locationName' => 'gopBReference',
				],
				'GopClosedCadence'                    => [
					'shape'        => '__integerMin0Max2147483647',
					'locationName' => 'gopClosedCadence',
				],
				'GopSize'                             => [ 'shape' => '__doubleMin0', 'locationName' => 'gopSize', ],
				'GopSizeUnits'                        => [
					'shape'        => 'H265GopSizeUnits',
					'locationName' => 'gopSizeUnits',
				],
				'HrdBufferInitialFillPercentage'      => [
					'shape'        => '__integerMin0Max100',
					'locationName' => 'hrdBufferInitialFillPercentage',
				],
				'HrdBufferSize'                       => [
					'shape'        => '__integerMin0Max1466400000',
					'locationName' => 'hrdBufferSize',
				],
				'InterlaceMode'                       => [
					'shape'        => 'H265InterlaceMode',
					'locationName' => 'interlaceMode',
				],
				'MaxBitrate'                          => [
					'shape'        => '__integerMin1000Max1466400000',
					'locationName' => 'maxBitrate',
				],
				'MinIInterval'                        => [
					'shape'        => '__integerMin0Max30',
					'locationName' => 'minIInterval',
				],
				'NumberBFramesBetweenReferenceFrames' => [
					'shape'        => '__integerMin0Max7',
					'locationName' => 'numberBFramesBetweenReferenceFrames',
				],
				'NumberReferenceFrames'               => [
					'shape'        => '__integerMin1Max6',
					'locationName' => 'numberReferenceFrames',
				],
				'ParControl'                          => [
					'shape'        => 'H265ParControl',
					'locationName' => 'parControl',
				],
				'ParDenominator'                      => [
					'shape'        => '__integerMin1Max2147483647',
					'locationName' => 'parDenominator',
				],
				'ParNumerator'                        => [
					'shape'        => '__integerMin1Max2147483647',
					'locationName' => 'parNumerator',
				],
				'QualityTuningLevel'                  => [
					'shape'        => 'H265QualityTuningLevel',
					'locationName' => 'qualityTuningLevel',
				],
				'QvbrSettings'                        => [
					'shape'        => 'H265QvbrSettings',
					'locationName' => 'qvbrSettings',
				],
				'RateControlMode'                     => [
					'shape'        => 'H265RateControlMode',
					'locationName' => 'rateControlMode',
				],
				'SampleAdaptiveOffsetFilterMode'      => [
					'shape'        => 'H265SampleAdaptiveOffsetFilterMode',
					'locationName' => 'sampleAdaptiveOffsetFilterMode',
				],
				'SceneChangeDetect'                   => [
					'shape'        => 'H265SceneChangeDetect',
					'locationName' => 'sceneChangeDetect',
				],
				'Slices'                              => [
					'shape'        => '__integerMin1Max32',
					'locationName' => 'slices',
				],
				'SlowPal'                             => [ 'shape' => 'H265SlowPal', 'locationName' => 'slowPal', ],
				'SpatialAdaptiveQuantization'         => [
					'shape'        => 'H265SpatialAdaptiveQuantization',
					'locationName' => 'spatialAdaptiveQuantization',
				],
				'Telecine'                            => [ 'shape' => 'H265Telecine', 'locationName' => 'telecine', ],
				'TemporalAdaptiveQuantization'        => [
					'shape'        => 'H265TemporalAdaptiveQuantization',
					'locationName' => 'temporalAdaptiveQuantization',
				],
				'TemporalIds'                         => [
					'shape'        => 'H265TemporalIds',
					'locationName' => 'temporalIds',
				],
				'Tiles'                               => [ 'shape' => 'H265Tiles', 'locationName' => 'tiles', ],
				'UnregisteredSeiTimecode'             => [
					'shape'        => 'H265UnregisteredSeiTimecode',
					'locationName' => 'unregisteredSeiTimecode',
				],
				'WriteMp4PackagingType'               => [
					'shape'        => 'H265WriteMp4PackagingType',
					'locationName' => 'writeMp4PackagingType',
				],
			],
		],
		'H265SlowPal'                                                                                                                                                                                                                                                                                                  => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'H265SpatialAdaptiveQuantization'                                                                                                                                                                                                                                                                              => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'H265Telecine'                                                                                                                                                                                                                                                                                                 => [
			'type' => 'string',
			'enum' => [ 'NONE', 'SOFT', 'HARD', ],
		],
		'H265TemporalAdaptiveQuantization'                                                                                                                                                                                                                                                                             => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'H265TemporalIds'                                                                                                                                                                                                                                                                                              => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'H265Tiles'                                                                                                                                                                                                                                                                                                    => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'H265UnregisteredSeiTimecode'                                                                                                                                                                                                                                                                                  => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'H265WriteMp4PackagingType'                                                                                                                                                                                                                                                                                    => [
			'type' => 'string',
			'enum' => [ 'HVC1', 'HEV1', ],
		],
		'Hdr10Metadata'                                                                                                                                                                                                                                                                                                => [
			'type'    => 'structure',
			'members' => [
				'BluePrimaryX'              => [
					'shape'        => '__integerMin0Max50000',
					'locationName' => 'bluePrimaryX',
				],
				'BluePrimaryY'              => [
					'shape'        => '__integerMin0Max50000',
					'locationName' => 'bluePrimaryY',
				],
				'GreenPrimaryX'             => [
					'shape'        => '__integerMin0Max50000',
					'locationName' => 'greenPrimaryX',
				],
				'GreenPrimaryY'             => [
					'shape'        => '__integerMin0Max50000',
					'locationName' => 'greenPrimaryY',
				],
				'MaxContentLightLevel'      => [
					'shape'        => '__integerMin0Max65535',
					'locationName' => 'maxContentLightLevel',
				],
				'MaxFrameAverageLightLevel' => [
					'shape'        => '__integerMin0Max65535',
					'locationName' => 'maxFrameAverageLightLevel',
				],
				'MaxLuminance'              => [
					'shape'        => '__integerMin0Max2147483647',
					'locationName' => 'maxLuminance',
				],
				'MinLuminance'              => [
					'shape'        => '__integerMin0Max2147483647',
					'locationName' => 'minLuminance',
				],
				'RedPrimaryX'               => [ 'shape' => '__integerMin0Max50000', 'locationName' => 'redPrimaryX', ],
				'RedPrimaryY'               => [ 'shape' => '__integerMin0Max50000', 'locationName' => 'redPrimaryY', ],
				'WhitePointX'               => [ 'shape' => '__integerMin0Max50000', 'locationName' => 'whitePointX', ],
				'WhitePointY'               => [ 'shape' => '__integerMin0Max50000', 'locationName' => 'whitePointY', ],
			],
		],
		'HlsAdMarkers'                                                                                                                                                                                                                                                                                                 => [
			'type' => 'string',
			'enum' => [ 'ELEMENTAL', 'ELEMENTAL_SCTE35', ],
		],
		'HlsAudioTrackType'                                                                                                                                                                                                                                                                                            => [
			'type' => 'string',
			'enum' => [
				'ALTERNATE_AUDIO_AUTO_SELECT_DEFAULT',
				'ALTERNATE_AUDIO_AUTO_SELECT',
				'ALTERNATE_AUDIO_NOT_AUTO_SELECT',
				'AUDIO_ONLY_VARIANT_STREAM',
			],
		],
		'HlsCaptionLanguageMapping'                                                                                                                                                                                                                                                                                    => [
			'type'    => 'structure',
			'members' => [
				'CaptionChannel'      => [
					'shape'        => '__integerMinNegative2147483648Max2147483647',
					'locationName' => 'captionChannel',
				],
				'CustomLanguageCode'  => [
					'shape'        => '__stringMin3Max3PatternAZaZ3',
					'locationName' => 'customLanguageCode',
				],
				'LanguageCode'        => [
					'shape'        => 'LanguageCode',
					'locationName' => 'languageCode',
				],
				'LanguageDescription' => [
					'shape'        => '__string',
					'locationName' => 'languageDescription',
				],
			],
		],
		'HlsCaptionLanguageSetting'                                                                                                                                                                                                                                                                                    => [
			'type' => 'string',
			'enum' => [ 'INSERT', 'OMIT', 'NONE', ],
		],
		'HlsClientCache'                                                                                                                                                                                                                                                                                               => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'HlsCodecSpecification'                                                                                                                                                                                                                                                                                        => [
			'type' => 'string',
			'enum' => [ 'RFC_6381', 'RFC_4281', ],
		],
		'HlsDirectoryStructure'                                                                                                                                                                                                                                                                                        => [
			'type' => 'string',
			'enum' => [ 'SINGLE_DIRECTORY', 'SUBDIRECTORY_PER_STREAM', ],
		],
		'HlsEncryptionSettings'                                                                                                                                                                                                                                                                                        => [
			'type'    => 'structure',
			'members' => [
				'ConstantInitializationVector'   => [
					'shape'        => '__stringMin32Max32Pattern09aFAF32',
					'locationName' => 'constantInitializationVector',
				],
				'EncryptionMethod'               => [
					'shape'        => 'HlsEncryptionType',
					'locationName' => 'encryptionMethod',
				],
				'InitializationVectorInManifest' => [
					'shape'        => 'HlsInitializationVectorInManifest',
					'locationName' => 'initializationVectorInManifest',
				],
				'OfflineEncrypted'               => [
					'shape'        => 'HlsOfflineEncrypted',
					'locationName' => 'offlineEncrypted',
				],
				'SpekeKeyProvider'               => [
					'shape'        => 'SpekeKeyProvider',
					'locationName' => 'spekeKeyProvider',
				],
				'StaticKeyProvider'              => [
					'shape'        => 'StaticKeyProvider',
					'locationName' => 'staticKeyProvider',
				],
				'Type'                           => [
					'shape'        => 'HlsKeyProviderType',
					'locationName' => 'type',
				],
			],
		],
		'HlsEncryptionType'                                                                                                                                                                                                                                                                                            => [
			'type' => 'string',
			'enum' => [ 'AES128', 'SAMPLE_AES', ],
		],
		'HlsGroupSettings'                                                                                                                                                                                                                                                                                             => [
			'type'    => 'structure',
			'members' => [
				'AdMarkers'                  => [ 'shape' => '__listOfHlsAdMarkers', 'locationName' => 'adMarkers', ],
				'BaseUrl'                    => [ 'shape' => '__string', 'locationName' => 'baseUrl', ],
				'CaptionLanguageMappings'    => [
					'shape'        => '__listOfHlsCaptionLanguageMapping',
					'locationName' => 'captionLanguageMappings',
				],
				'CaptionLanguageSetting'     => [
					'shape'        => 'HlsCaptionLanguageSetting',
					'locationName' => 'captionLanguageSetting',
				],
				'ClientCache'                => [ 'shape' => 'HlsClientCache', 'locationName' => 'clientCache', ],
				'CodecSpecification'         => [
					'shape'        => 'HlsCodecSpecification',
					'locationName' => 'codecSpecification',
				],
				'Destination'                => [ 'shape' => '__stringPatternS3', 'locationName' => 'destination', ],
				'DestinationSettings'        => [
					'shape'        => 'DestinationSettings',
					'locationName' => 'destinationSettings',
				],
				'DirectoryStructure'         => [
					'shape'        => 'HlsDirectoryStructure',
					'locationName' => 'directoryStructure',
				],
				'Encryption'                 => [ 'shape' => 'HlsEncryptionSettings', 'locationName' => 'encryption', ],
				'ManifestCompression'        => [
					'shape'        => 'HlsManifestCompression',
					'locationName' => 'manifestCompression',
				],
				'ManifestDurationFormat'     => [
					'shape'        => 'HlsManifestDurationFormat',
					'locationName' => 'manifestDurationFormat',
				],
				'MinFinalSegmentLength'      => [
					'shape'        => '__doubleMin0Max2147483647',
					'locationName' => 'minFinalSegmentLength',
				],
				'MinSegmentLength'           => [
					'shape'        => '__integerMin0Max2147483647',
					'locationName' => 'minSegmentLength',
				],
				'OutputSelection'            => [
					'shape'        => 'HlsOutputSelection',
					'locationName' => 'outputSelection',
				],
				'ProgramDateTime'            => [
					'shape'        => 'HlsProgramDateTime',
					'locationName' => 'programDateTime',
				],
				'ProgramDateTimePeriod'      => [
					'shape'        => '__integerMin0Max3600',
					'locationName' => 'programDateTimePeriod',
				],
				'SegmentControl'             => [ 'shape' => 'HlsSegmentControl', 'locationName' => 'segmentControl', ],
				'SegmentLength'              => [
					'shape'        => '__integerMin1Max2147483647',
					'locationName' => 'segmentLength',
				],
				'SegmentsPerSubdirectory'    => [
					'shape'        => '__integerMin1Max2147483647',
					'locationName' => 'segmentsPerSubdirectory',
				],
				'StreamInfResolution'        => [
					'shape'        => 'HlsStreamInfResolution',
					'locationName' => 'streamInfResolution',
				],
				'TimedMetadataId3Frame'      => [
					'shape'        => 'HlsTimedMetadataId3Frame',
					'locationName' => 'timedMetadataId3Frame',
				],
				'TimedMetadataId3Period'     => [
					'shape'        => '__integerMinNegative2147483648Max2147483647',
					'locationName' => 'timedMetadataId3Period',
				],
				'TimestampDeltaMilliseconds' => [
					'shape'        => '__integerMinNegative2147483648Max2147483647',
					'locationName' => 'timestampDeltaMilliseconds',
				],
			],
		],
		'HlsIFrameOnlyManifest'                                                                                                                                                                                                                                                                                        => [
			'type' => 'string',
			'enum' => [ 'INCLUDE', 'EXCLUDE', ],
		],
		'HlsInitializationVectorInManifest'                                                                                                                                                                                                                                                                            => [
			'type' => 'string',
			'enum' => [ 'INCLUDE', 'EXCLUDE', ],
		],
		'HlsKeyProviderType'                                                                                                                                                                                                                                                                                           => [
			'type' => 'string',
			'enum' => [ 'SPEKE', 'STATIC_KEY', ],
		],
		'HlsManifestCompression'                                                                                                                                                                                                                                                                                       => [
			'type' => 'string',
			'enum' => [ 'GZIP', 'NONE', ],
		],
		'HlsManifestDurationFormat'                                                                                                                                                                                                                                                                                    => [
			'type' => 'string',
			'enum' => [ 'FLOATING_POINT', 'INTEGER', ],
		],
		'HlsOfflineEncrypted'                                                                                                                                                                                                                                                                                          => [
			'type' => 'string',
			'enum' => [ 'ENABLED', 'DISABLED', ],
		],
		'HlsOutputSelection'                                                                                                                                                                                                                                                                                           => [
			'type' => 'string',
			'enum' => [ 'MANIFESTS_AND_SEGMENTS', 'SEGMENTS_ONLY', ],
		],
		'HlsProgramDateTime'                                                                                                                                                                                                                                                                                           => [
			'type' => 'string',
			'enum' => [ 'INCLUDE', 'EXCLUDE', ],
		],
		'HlsSegmentControl'                                                                                                                                                                                                                                                                                            => [
			'type' => 'string',
			'enum' => [ 'SINGLE_FILE', 'SEGMENTED_FILES', ],
		],
		'HlsSettings'                                                                                                                                                                                                                                                                                                  => [
			'type'    => 'structure',
			'members' => [
				'AudioGroupId'       => [
					'shape'        => '__string',
					'locationName' => 'audioGroupId',
				],
				'AudioRenditionSets' => [
					'shape'        => '__string',
					'locationName' => 'audioRenditionSets',
				],
				'AudioTrackType'     => [
					'shape'        => 'HlsAudioTrackType',
					'locationName' => 'audioTrackType',
				],
				'IFrameOnlyManifest' => [
					'shape'        => 'HlsIFrameOnlyManifest',
					'locationName' => 'iFrameOnlyManifest',
				],
				'SegmentModifier'    => [
					'shape'        => '__string',
					'locationName' => 'segmentModifier',
				],
			],
		],
		'HlsStreamInfResolution'                                                                                                                                                                                                                                                                                       => [
			'type' => 'string',
			'enum' => [ 'INCLUDE', 'EXCLUDE', ],
		],
		'HlsTimedMetadataId3Frame'                                                                                                                                                                                                                                                                                     => [
			'type' => 'string',
			'enum' => [ 'NONE', 'PRIV', 'TDRL', ],
		],
		'Id3Insertion'                                                                                                                                                                                                                                                                                                 => [
			'type'    => 'structure',
			'members' => [
				'Id3'      => [
					'shape'        => '__stringPatternAZaZ0902',
					'locationName' => 'id3',
				],
				'Timecode' => [
					'shape'        => '__stringPattern010920405090509092',
					'locationName' => 'timecode',
				],
			],
		],
		'ImageInserter'                                                                                                                                                                                                                                                                                                => [
			'type'    => 'structure',
			'members' => [
				'InsertableImages' => [
					'shape'        => '__listOfInsertableImage',
					'locationName' => 'insertableImages',
				],
			],
		],
		'Input'                                                                                                                                                                                                                                                                                                        => [
			'type'    => 'structure',
			'members' => [
				'AudioSelectorGroups' => [
					'shape'        => '__mapOfAudioSelectorGroup',
					'locationName' => 'audioSelectorGroups',
				],
				'AudioSelectors'      => [ 'shape' => '__mapOfAudioSelector', 'locationName' => 'audioSelectors', ],
				'CaptionSelectors'    => [ 'shape' => '__mapOfCaptionSelector', 'locationName' => 'captionSelectors', ],
				'DeblockFilter'       => [ 'shape' => 'InputDeblockFilter', 'locationName' => 'deblockFilter', ],
				'DecryptionSettings'  => [
					'shape'        => 'InputDecryptionSettings',
					'locationName' => 'decryptionSettings',
				],
				'DenoiseFilter'       => [ 'shape' => 'InputDenoiseFilter', 'locationName' => 'denoiseFilter', ],
				'FileInput'           => [
					'shape'        => '__stringPatternS3MM2VVMMPPEEGGAAVVIIMMPP4FFLLVVMMPPTTMMPPGGMM4VVTTRRPPFF4VVMM2TTSSTTSS264HH264MMKKVVMMOOVVMMTTSSMM2TTWWMMVVAASSFFVVOOBB3GGPP3GGPPPPMMXXFFDDIIVVXXXXVVIIDDRRAAWWDDVVGGXXFFMM1VV3GG2VVMMFFMM3UU8LLCCHHGGXXFFMMPPEEGG2MMXXFFMMPPEEGG2MMXXFFHHDDWWAAVVYY4MMXXMMLL',
					'locationName' => 'fileInput',
				],
				'FilterEnable'        => [ 'shape' => 'InputFilterEnable', 'locationName' => 'filterEnable', ],
				'FilterStrength'      => [
					'shape'        => '__integerMinNegative5Max5',
					'locationName' => 'filterStrength',
				],
				'ImageInserter'       => [ 'shape' => 'ImageInserter', 'locationName' => 'imageInserter', ],
				'InputClippings'      => [ 'shape' => '__listOfInputClipping', 'locationName' => 'inputClippings', ],
				'ProgramNumber'       => [
					'shape'        => '__integerMin1Max2147483647',
					'locationName' => 'programNumber',
				],
				'PsiControl'          => [ 'shape' => 'InputPsiControl', 'locationName' => 'psiControl', ],
				'SupplementalImps'    => [
					'shape'        => '__listOf__stringPatternS3ASSETMAPXml',
					'locationName' => 'supplementalImps',
				],
				'TimecodeSource'      => [ 'shape' => 'InputTimecodeSource', 'locationName' => 'timecodeSource', ],
				'VideoSelector'       => [ 'shape' => 'VideoSelector', 'locationName' => 'videoSelector', ],
			],
		],
		'InputClipping'                                                                                                                                                                                                                                                                                                => [
			'type'    => 'structure',
			'members' => [
				'EndTimecode'   => [
					'shape'        => '__stringPattern010920405090509092',
					'locationName' => 'endTimecode',
				],
				'StartTimecode' => [
					'shape'        => '__stringPattern010920405090509092',
					'locationName' => 'startTimecode',
				],
			],
		],
		'InputDeblockFilter'                                                                                                                                                                                                                                                                                           => [
			'type' => 'string',
			'enum' => [ 'ENABLED', 'DISABLED', ],
		],
		'InputDecryptionSettings'                                                                                                                                                                                                                                                                                      => [
			'type'    => 'structure',
			'members' => [
				'DecryptionMode'         => [
					'shape'        => 'DecryptionMode',
					'locationName' => 'decryptionMode',
				],
				'EncryptedDecryptionKey' => [
					'shape'        => '__stringMin24Max512PatternAZaZ0902',
					'locationName' => 'encryptedDecryptionKey',
				],
				'InitializationVector'   => [
					'shape'        => '__stringMin16Max24PatternAZaZ0922AZaZ0916',
					'locationName' => 'initializationVector',
				],
				'KmsKeyRegion'           => [
					'shape'        => '__stringMin9Max19PatternAZ26EastWestCentralNorthSouthEastWest1912',
					'locationName' => 'kmsKeyRegion',
				],
			],
		],
		'InputDenoiseFilter'                                                                                                                                                                                                                                                                                           => [
			'type' => 'string',
			'enum' => [ 'ENABLED', 'DISABLED', ],
		],
		'InputFilterEnable'                                                                                                                                                                                                                                                                                            => [
			'type' => 'string',
			'enum' => [ 'AUTO', 'DISABLE', 'FORCE', ],
		],
		'InputPsiControl'                                                                                                                                                                                                                                                                                              => [
			'type' => 'string',
			'enum' => [ 'IGNORE_PSI', 'USE_PSI', ],
		],
		'InputRotate'                                                                                                                                                                                                                                                                                                  => [
			'type' => 'string',
			'enum' => [
				'DEGREE_0',
				'DEGREES_90',
				'DEGREES_180',
				'DEGREES_270',
				'AUTO',
			],
		],
		'InputTemplate'                                                                                                                                                                                                                                                                                                => [
			'type'    => 'structure',
			'members' => [
				'AudioSelectorGroups' => [
					'shape'        => '__mapOfAudioSelectorGroup',
					'locationName' => 'audioSelectorGroups',
				],
				'AudioSelectors'      => [ 'shape' => '__mapOfAudioSelector', 'locationName' => 'audioSelectors', ],
				'CaptionSelectors'    => [ 'shape' => '__mapOfCaptionSelector', 'locationName' => 'captionSelectors', ],
				'DeblockFilter'       => [ 'shape' => 'InputDeblockFilter', 'locationName' => 'deblockFilter', ],
				'DenoiseFilter'       => [ 'shape' => 'InputDenoiseFilter', 'locationName' => 'denoiseFilter', ],
				'FilterEnable'        => [ 'shape' => 'InputFilterEnable', 'locationName' => 'filterEnable', ],
				'FilterStrength'      => [
					'shape'        => '__integerMinNegative5Max5',
					'locationName' => 'filterStrength',
				],
				'ImageInserter'       => [ 'shape' => 'ImageInserter', 'locationName' => 'imageInserter', ],
				'InputClippings'      => [ 'shape' => '__listOfInputClipping', 'locationName' => 'inputClippings', ],
				'ProgramNumber'       => [
					'shape'        => '__integerMin1Max2147483647',
					'locationName' => 'programNumber',
				],
				'PsiControl'          => [ 'shape' => 'InputPsiControl', 'locationName' => 'psiControl', ],
				'TimecodeSource'      => [ 'shape' => 'InputTimecodeSource', 'locationName' => 'timecodeSource', ],
				'VideoSelector'       => [ 'shape' => 'VideoSelector', 'locationName' => 'videoSelector', ],
			],
		],
		'InputTimecodeSource'                                                                                                                                                                                                                                                                                          => [
			'type' => 'string',
			'enum' => [ 'EMBEDDED', 'ZEROBASED', 'SPECIFIEDSTART', ],
		],
		'InsertableImage'                                                                                                                                                                                                                                                                                              => [
			'type'    => 'structure',
			'members' => [
				'Duration'           => [
					'shape'        => '__integerMin0Max2147483647',
					'locationName' => 'duration',
				],
				'FadeIn'             => [
					'shape'        => '__integerMin0Max2147483647',
					'locationName' => 'fadeIn',
				],
				'FadeOut'            => [
					'shape'        => '__integerMin0Max2147483647',
					'locationName' => 'fadeOut',
				],
				'Height'             => [
					'shape'        => '__integerMin0Max2147483647',
					'locationName' => 'height',
				],
				'ImageInserterInput' => [
					'shape'        => '__stringMin14PatternS3BmpBMPPngPNGTgaTGA',
					'locationName' => 'imageInserterInput',
				],
				'ImageX'             => [
					'shape'        => '__integerMin0Max2147483647',
					'locationName' => 'imageX',
				],
				'ImageY'             => [
					'shape'        => '__integerMin0Max2147483647',
					'locationName' => 'imageY',
				],
				'Layer'              => [ 'shape' => '__integerMin0Max99', 'locationName' => 'layer', ],
				'Opacity'            => [ 'shape' => '__integerMin0Max100', 'locationName' => 'opacity', ],
				'StartTime'          => [
					'shape'        => '__stringPattern01D20305D205D',
					'locationName' => 'startTime',
				],
				'Width'              => [
					'shape'        => '__integerMin0Max2147483647',
					'locationName' => 'width',
				],
			],
		],
		'InternalServerErrorException'                                                                                                                                                                                                                                                                                 => [
			'type'      => 'structure',
			'members'   => [
				'Message' => [
					'shape'        => '__string',
					'locationName' => 'message',
				],
			],
			'exception' => true,
			'error'     => [ 'httpStatusCode' => 500, ],
		],
		'Job'                                                                                                                                                                                                                                                                                                          => [
			'type'     => 'structure',
			'members'  => [
				'AccelerationSettings' => [
					'shape'        => 'AccelerationSettings',
					'locationName' => 'accelerationSettings',
				],
				'Arn'                  => [ 'shape' => '__string', 'locationName' => 'arn', ],
				'BillingTagsSource'    => [ 'shape' => 'BillingTagsSource', 'locationName' => 'billingTagsSource', ],
				'CreatedAt'            => [ 'shape' => '__timestampUnix', 'locationName' => 'createdAt', ],
				'CurrentPhase'         => [ 'shape' => 'JobPhase', 'locationName' => 'currentPhase', ],
				'ErrorCode'            => [ 'shape' => '__integer', 'locationName' => 'errorCode', ],
				'ErrorMessage'         => [ 'shape' => '__string', 'locationName' => 'errorMessage', ],
				'Id'                   => [ 'shape' => '__string', 'locationName' => 'id', ],
				'JobPercentComplete'   => [ 'shape' => '__integer', 'locationName' => 'jobPercentComplete', ],
				'JobTemplate'          => [ 'shape' => '__string', 'locationName' => 'jobTemplate', ],
				'OutputGroupDetails'   => [
					'shape'        => '__listOfOutputGroupDetail',
					'locationName' => 'outputGroupDetails',
				],
				'Queue'                => [ 'shape' => '__string', 'locationName' => 'queue', ],
				'RetryCount'           => [ 'shape' => '__integer', 'locationName' => 'retryCount', ],
				'Role'                 => [ 'shape' => '__string', 'locationName' => 'role', ],
				'Settings'             => [ 'shape' => 'JobSettings', 'locationName' => 'settings', ],
				'Status'               => [ 'shape' => 'JobStatus', 'locationName' => 'status', ],
				'StatusUpdateInterval' => [
					'shape'        => 'StatusUpdateInterval',
					'locationName' => 'statusUpdateInterval',
				],
				'Timing'               => [ 'shape' => 'Timing', 'locationName' => 'timing', ],
				'UserMetadata'         => [ 'shape' => '__mapOf__string', 'locationName' => 'userMetadata', ],
			],
			'required' => [ 'Role', 'Settings', ],
		],
		'JobPhase'                                                                                                                                                                                                                                                                                                     => [
			'type' => 'string',
			'enum' => [ 'PROBING', 'TRANSCODING', 'UPLOADING', ],
		],
		'JobSettings'                                                                                                                                                                                                                                                                                                  => [
			'type'    => 'structure',
			'members' => [
				'AdAvailOffset'          => [
					'shape'        => '__integerMinNegative1000Max1000',
					'locationName' => 'adAvailOffset',
				],
				'AvailBlanking'          => [
					'shape'        => 'AvailBlanking',
					'locationName' => 'availBlanking',
				],
				'Esam'                   => [
					'shape'        => 'EsamSettings',
					'locationName' => 'esam',
				],
				'Inputs'                 => [
					'shape'        => '__listOfInput',
					'locationName' => 'inputs',
				],
				'MotionImageInserter'    => [
					'shape'        => 'MotionImageInserter',
					'locationName' => 'motionImageInserter',
				],
				'NielsenConfiguration'   => [
					'shape'        => 'NielsenConfiguration',
					'locationName' => 'nielsenConfiguration',
				],
				'OutputGroups'           => [
					'shape'        => '__listOfOutputGroup',
					'locationName' => 'outputGroups',
				],
				'TimecodeConfig'         => [
					'shape'        => 'TimecodeConfig',
					'locationName' => 'timecodeConfig',
				],
				'TimedMetadataInsertion' => [
					'shape'        => 'TimedMetadataInsertion',
					'locationName' => 'timedMetadataInsertion',
				],
			],
		],
		'JobStatus'                                                                                                                                                                                                                                                                                                    => [
			'type' => 'string',
			'enum' => [
				'SUBMITTED',
				'PROGRESSING',
				'COMPLETE',
				'CANCELED',
				'ERROR',
			],
		],
		'JobTemplate'                                                                                                                                                                                                                                                                                                  => [
			'type'     => 'structure',
			'members'  => [
				'AccelerationSettings' => [
					'shape'        => 'AccelerationSettings',
					'locationName' => 'accelerationSettings',
				],
				'Arn'                  => [
					'shape'        => '__string',
					'locationName' => 'arn',
				],
				'Category'             => [
					'shape'        => '__string',
					'locationName' => 'category',
				],
				'CreatedAt'            => [
					'shape'        => '__timestampUnix',
					'locationName' => 'createdAt',
				],
				'Description'          => [
					'shape'        => '__string',
					'locationName' => 'description',
				],
				'LastUpdated'          => [
					'shape'        => '__timestampUnix',
					'locationName' => 'lastUpdated',
				],
				'Name'                 => [
					'shape'        => '__string',
					'locationName' => 'name',
				],
				'Queue'                => [
					'shape'        => '__string',
					'locationName' => 'queue',
				],
				'Settings'             => [
					'shape'        => 'JobTemplateSettings',
					'locationName' => 'settings',
				],
				'StatusUpdateInterval' => [
					'shape'        => 'StatusUpdateInterval',
					'locationName' => 'statusUpdateInterval',
				],
				'Type'                 => [
					'shape'        => 'Type',
					'locationName' => 'type',
				],
			],
			'required' => [ 'Settings', 'Name', ],
		],
		'JobTemplateListBy'                                                                                                                                                                                                                                                                                            => [
			'type' => 'string',
			'enum' => [ 'NAME', 'CREATION_DATE', 'SYSTEM', ],
		],
		'JobTemplateSettings'                                                                                                                                                                                                                                                                                          => [
			'type'    => 'structure',
			'members' => [
				'AdAvailOffset'          => [
					'shape'        => '__integerMinNegative1000Max1000',
					'locationName' => 'adAvailOffset',
				],
				'AvailBlanking'          => [
					'shape'        => 'AvailBlanking',
					'locationName' => 'availBlanking',
				],
				'Esam'                   => [
					'shape'        => 'EsamSettings',
					'locationName' => 'esam',
				],
				'Inputs'                 => [
					'shape'        => '__listOfInputTemplate',
					'locationName' => 'inputs',
				],
				'MotionImageInserter'    => [
					'shape'        => 'MotionImageInserter',
					'locationName' => 'motionImageInserter',
				],
				'NielsenConfiguration'   => [
					'shape'        => 'NielsenConfiguration',
					'locationName' => 'nielsenConfiguration',
				],
				'OutputGroups'           => [
					'shape'        => '__listOfOutputGroup',
					'locationName' => 'outputGroups',
				],
				'TimecodeConfig'         => [
					'shape'        => 'TimecodeConfig',
					'locationName' => 'timecodeConfig',
				],
				'TimedMetadataInsertion' => [
					'shape'        => 'TimedMetadataInsertion',
					'locationName' => 'timedMetadataInsertion',
				],
			],
		],
		'LanguageCode'                                                                                                                                                                                                                                                                                                 => [
			'type' => 'string',
			'enum' => [
				'ENG',
				'SPA',
				'FRA',
				'DEU',
				'GER',
				'ZHO',
				'ARA',
				'HIN',
				'JPN',
				'RUS',
				'POR',
				'ITA',
				'URD',
				'VIE',
				'KOR',
				'PAN',
				'ABK',
				'AAR',
				'AFR',
				'AKA',
				'SQI',
				'AMH',
				'ARG',
				'HYE',
				'ASM',
				'AVA',
				'AVE',
				'AYM',
				'AZE',
				'BAM',
				'BAK',
				'EUS',
				'BEL',
				'BEN',
				'BIH',
				'BIS',
				'BOS',
				'BRE',
				'BUL',
				'MYA',
				'CAT',
				'KHM',
				'CHA',
				'CHE',
				'NYA',
				'CHU',
				'CHV',
				'COR',
				'COS',
				'CRE',
				'HRV',
				'CES',
				'DAN',
				'DIV',
				'NLD',
				'DZO',
				'ENM',
				'EPO',
				'EST',
				'EWE',
				'FAO',
				'FIJ',
				'FIN',
				'FRM',
				'FUL',
				'GLA',
				'GLG',
				'LUG',
				'KAT',
				'ELL',
				'GRN',
				'GUJ',
				'HAT',
				'HAU',
				'HEB',
				'HER',
				'HMO',
				'HUN',
				'ISL',
				'IDO',
				'IBO',
				'IND',
				'INA',
				'ILE',
				'IKU',
				'IPK',
				'GLE',
				'JAV',
				'KAL',
				'KAN',
				'KAU',
				'KAS',
				'KAZ',
				'KIK',
				'KIN',
				'KIR',
				'KOM',
				'KON',
				'KUA',
				'KUR',
				'LAO',
				'LAT',
				'LAV',
				'LIM',
				'LIN',
				'LIT',
				'LUB',
				'LTZ',
				'MKD',
				'MLG',
				'MSA',
				'MAL',
				'MLT',
				'GLV',
				'MRI',
				'MAR',
				'MAH',
				'MON',
				'NAU',
				'NAV',
				'NDE',
				'NBL',
				'NDO',
				'NEP',
				'SME',
				'NOR',
				'NOB',
				'NNO',
				'OCI',
				'OJI',
				'ORI',
				'ORM',
				'OSS',
				'PLI',
				'FAS',
				'POL',
				'PUS',
				'QUE',
				'QAA',
				'RON',
				'ROH',
				'RUN',
				'SMO',
				'SAG',
				'SAN',
				'SRD',
				'SRB',
				'SNA',
				'III',
				'SND',
				'SIN',
				'SLK',
				'SLV',
				'SOM',
				'SOT',
				'SUN',
				'SWA',
				'SSW',
				'SWE',
				'TGL',
				'TAH',
				'TGK',
				'TAM',
				'TAT',
				'TEL',
				'THA',
				'BOD',
				'TIR',
				'TON',
				'TSO',
				'TSN',
				'TUR',
				'TUK',
				'TWI',
				'UIG',
				'UKR',
				'UZB',
				'VEN',
				'VOL',
				'WLN',
				'CYM',
				'FRY',
				'WOL',
				'XHO',
				'YID',
				'YOR',
				'ZHA',
				'ZUL',
				'ORJ',
				'QPC',
				'TNG',
			],
		],
		'ListJobTemplatesRequest'                                                                                                                                                                                                                                                                                      => [
			'type'    => 'structure',
			'members' => [
				'Category'   => [
					'shape'        => '__string',
					'locationName' => 'category',
					'location'     => 'querystring',
				],
				'ListBy'     => [
					'shape'        => 'JobTemplateListBy',
					'locationName' => 'listBy',
					'location'     => 'querystring',
				],
				'MaxResults' => [
					'shape'        => '__integerMin1Max20',
					'locationName' => 'maxResults',
					'location'     => 'querystring',
				],
				'NextToken'  => [
					'shape'        => '__string',
					'locationName' => 'nextToken',
					'location'     => 'querystring',
				],
				'Order'      => [
					'shape'        => 'Order',
					'locationName' => 'order',
					'location'     => 'querystring',
				],
			],
		],
		'ListJobTemplatesResponse'                                                                                                                                                                                                                                                                                     => [
			'type'    => 'structure',
			'members' => [
				'JobTemplates' => [
					'shape'        => '__listOfJobTemplate',
					'locationName' => 'jobTemplates',
				],
				'NextToken'    => [
					'shape'        => '__string',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListJobsRequest'                                                                                                                                                                                                                                                                                              => [
			'type'    => 'structure',
			'members' => [
				'MaxResults' => [
					'shape'        => '__integerMin1Max20',
					'locationName' => 'maxResults',
					'location'     => 'querystring',
				],
				'NextToken'  => [
					'shape'        => '__string',
					'locationName' => 'nextToken',
					'location'     => 'querystring',
				],
				'Order'      => [
					'shape'        => 'Order',
					'locationName' => 'order',
					'location'     => 'querystring',
				],
				'Queue'      => [
					'shape'        => '__string',
					'locationName' => 'queue',
					'location'     => 'querystring',
				],
				'Status'     => [
					'shape'        => 'JobStatus',
					'locationName' => 'status',
					'location'     => 'querystring',
				],
			],
		],
		'ListJobsResponse'                                                                                                                                                                                                                                                                                             => [
			'type'    => 'structure',
			'members' => [
				'Jobs'      => [
					'shape'        => '__listOfJob',
					'locationName' => 'jobs',
				],
				'NextToken' => [
					'shape'        => '__string',
					'locationName' => 'nextToken',
				],
			],
		],
		'ListPresetsRequest'                                                                                                                                                                                                                                                                                           => [
			'type'    => 'structure',
			'members' => [
				'Category'   => [
					'shape'        => '__string',
					'locationName' => 'category',
					'location'     => 'querystring',
				],
				'ListBy'     => [
					'shape'        => 'PresetListBy',
					'locationName' => 'listBy',
					'location'     => 'querystring',
				],
				'MaxResults' => [
					'shape'        => '__integerMin1Max20',
					'locationName' => 'maxResults',
					'location'     => 'querystring',
				],
				'NextToken'  => [
					'shape'        => '__string',
					'locationName' => 'nextToken',
					'location'     => 'querystring',
				],
				'Order'      => [
					'shape'        => 'Order',
					'locationName' => 'order',
					'location'     => 'querystring',
				],
			],
		],
		'ListPresetsResponse'                                                                                                                                                                                                                                                                                          => [
			'type'    => 'structure',
			'members' => [
				'NextToken' => [
					'shape'        => '__string',
					'locationName' => 'nextToken',
				],
				'Presets'   => [
					'shape'        => '__listOfPreset',
					'locationName' => 'presets',
				],
			],
		],
		'ListQueuesRequest'                                                                                                                                                                                                                                                                                            => [
			'type'    => 'structure',
			'members' => [
				'ListBy'     => [
					'shape'        => 'QueueListBy',
					'locationName' => 'listBy',
					'location'     => 'querystring',
				],
				'MaxResults' => [
					'shape'        => '__integerMin1Max20',
					'locationName' => 'maxResults',
					'location'     => 'querystring',
				],
				'NextToken'  => [
					'shape'        => '__string',
					'locationName' => 'nextToken',
					'location'     => 'querystring',
				],
				'Order'      => [
					'shape'        => 'Order',
					'locationName' => 'order',
					'location'     => 'querystring',
				],
			],
		],
		'ListQueuesResponse'                                                                                                                                                                                                                                                                                           => [
			'type'    => 'structure',
			'members' => [
				'NextToken' => [
					'shape'        => '__string',
					'locationName' => 'nextToken',
				],
				'Queues'    => [
					'shape'        => '__listOfQueue',
					'locationName' => 'queues',
				],
			],
		],
		'ListTagsForResourceRequest'                                                                                                                                                                                                                                                                                   => [
			'type'     => 'structure',
			'members'  => [
				'Arn' => [
					'shape'        => '__string',
					'locationName' => 'arn',
					'location'     => 'uri',
				],
			],
			'required' => [ 'Arn', ],
		],
		'ListTagsForResourceResponse'                                                                                                                                                                                                                                                                                  => [
			'type'    => 'structure',
			'members' => [
				'ResourceTags' => [
					'shape'        => 'ResourceTags',
					'locationName' => 'resourceTags',
				],
			],
		],
		'M2tsAudioBufferModel'                                                                                                                                                                                                                                                                                         => [
			'type' => 'string',
			'enum' => [ 'DVB', 'ATSC', ],
		],
		'M2tsBufferModel'                                                                                                                                                                                                                                                                                              => [
			'type' => 'string',
			'enum' => [ 'MULTIPLEX', 'NONE', ],
		],
		'M2tsEbpAudioInterval'                                                                                                                                                                                                                                                                                         => [
			'type' => 'string',
			'enum' => [ 'VIDEO_AND_FIXED_INTERVALS', 'VIDEO_INTERVAL', ],
		],
		'M2tsEbpPlacement'                                                                                                                                                                                                                                                                                             => [
			'type' => 'string',
			'enum' => [ 'VIDEO_AND_AUDIO_PIDS', 'VIDEO_PID', ],
		],
		'M2tsEsRateInPes'                                                                                                                                                                                                                                                                                              => [
			'type' => 'string',
			'enum' => [ 'INCLUDE', 'EXCLUDE', ],
		],
		'M2tsForceTsVideoEbpOrder'                                                                                                                                                                                                                                                                                     => [
			'type' => 'string',
			'enum' => [ 'FORCE', 'DEFAULT', ],
		],
		'M2tsNielsenId3'                                                                                                                                                                                                                                                                                               => [
			'type' => 'string',
			'enum' => [ 'INSERT', 'NONE', ],
		],
		'M2tsPcrControl'                                                                                                                                                                                                                                                                                               => [
			'type' => 'string',
			'enum' => [
				'PCR_EVERY_PES_PACKET',
				'CONFIGURED_PCR_PERIOD',
			],
		],
		'M2tsRateMode'                                                                                                                                                                                                                                                                                                 => [
			'type' => 'string',
			'enum' => [ 'VBR', 'CBR', ],
		],
		'M2tsScte35Esam'                                                                                                                                                                                                                                                                                               => [
			'type'    => 'structure',
			'members' => [
				'Scte35EsamPid' => [
					'shape'        => '__integerMin32Max8182',
					'locationName' => 'scte35EsamPid',
				],
			],
		],
		'M2tsScte35Source'                                                                                                                                                                                                                                                                                             => [
			'type' => 'string',
			'enum' => [ 'PASSTHROUGH', 'NONE', ],
		],
		'M2tsSegmentationMarkers'                                                                                                                                                                                                                                                                                      => [
			'type' => 'string',
			'enum' => [
				'NONE',
				'RAI_SEGSTART',
				'RAI_ADAPT',
				'PSI_SEGSTART',
				'EBP',
				'EBP_LEGACY',
			],
		],
		'M2tsSegmentationStyle'                                                                                                                                                                                                                                                                                        => [
			'type' => 'string',
			'enum' => [ 'MAINTAIN_CADENCE', 'RESET_CADENCE', ],
		],
		'M2tsSettings'                                                                                                                                                                                                                                                                                                 => [
			'type'    => 'structure',
			'members' => [
				'AudioBufferModel'     => [ 'shape' => 'M2tsAudioBufferModel', 'locationName' => 'audioBufferModel', ],
				'AudioFramesPerPes'    => [
					'shape'        => '__integerMin0Max2147483647',
					'locationName' => 'audioFramesPerPes',
				],
				'AudioPids'            => [
					'shape'        => '__listOf__integerMin32Max8182',
					'locationName' => 'audioPids',
				],
				'Bitrate'              => [ 'shape' => '__integerMin0Max2147483647', 'locationName' => 'bitrate', ],
				'BufferModel'          => [ 'shape' => 'M2tsBufferModel', 'locationName' => 'bufferModel', ],
				'DvbNitSettings'       => [ 'shape' => 'DvbNitSettings', 'locationName' => 'dvbNitSettings', ],
				'DvbSdtSettings'       => [ 'shape' => 'DvbSdtSettings', 'locationName' => 'dvbSdtSettings', ],
				'DvbSubPids'           => [
					'shape'        => '__listOf__integerMin32Max8182',
					'locationName' => 'dvbSubPids',
				],
				'DvbTdtSettings'       => [ 'shape' => 'DvbTdtSettings', 'locationName' => 'dvbTdtSettings', ],
				'DvbTeletextPid'       => [ 'shape' => '__integerMin32Max8182', 'locationName' => 'dvbTeletextPid', ],
				'EbpAudioInterval'     => [ 'shape' => 'M2tsEbpAudioInterval', 'locationName' => 'ebpAudioInterval', ],
				'EbpPlacement'         => [ 'shape' => 'M2tsEbpPlacement', 'locationName' => 'ebpPlacement', ],
				'EsRateInPes'          => [ 'shape' => 'M2tsEsRateInPes', 'locationName' => 'esRateInPes', ],
				'ForceTsVideoEbpOrder' => [
					'shape'        => 'M2tsForceTsVideoEbpOrder',
					'locationName' => 'forceTsVideoEbpOrder',
				],
				'FragmentTime'         => [ 'shape' => '__doubleMin0', 'locationName' => 'fragmentTime', ],
				'MaxPcrInterval'       => [ 'shape' => '__integerMin0Max500', 'locationName' => 'maxPcrInterval', ],
				'MinEbpInterval'       => [ 'shape' => '__integerMin0Max10000', 'locationName' => 'minEbpInterval', ],
				'NielsenId3'           => [ 'shape' => 'M2tsNielsenId3', 'locationName' => 'nielsenId3', ],
				'NullPacketBitrate'    => [ 'shape' => '__doubleMin0', 'locationName' => 'nullPacketBitrate', ],
				'PatInterval'          => [ 'shape' => '__integerMin0Max1000', 'locationName' => 'patInterval', ],
				'PcrControl'           => [ 'shape' => 'M2tsPcrControl', 'locationName' => 'pcrControl', ],
				'PcrPid'               => [ 'shape' => '__integerMin32Max8182', 'locationName' => 'pcrPid', ],
				'PmtInterval'          => [ 'shape' => '__integerMin0Max1000', 'locationName' => 'pmtInterval', ],
				'PmtPid'               => [ 'shape' => '__integerMin32Max8182', 'locationName' => 'pmtPid', ],
				'PrivateMetadataPid'   => [
					'shape'        => '__integerMin32Max8182',
					'locationName' => 'privateMetadataPid',
				],
				'ProgramNumber'        => [ 'shape' => '__integerMin0Max65535', 'locationName' => 'programNumber', ],
				'RateMode'             => [ 'shape' => 'M2tsRateMode', 'locationName' => 'rateMode', ],
				'Scte35Esam'           => [ 'shape' => 'M2tsScte35Esam', 'locationName' => 'scte35Esam', ],
				'Scte35Pid'            => [ 'shape' => '__integerMin32Max8182', 'locationName' => 'scte35Pid', ],
				'Scte35Source'         => [ 'shape' => 'M2tsScte35Source', 'locationName' => 'scte35Source', ],
				'SegmentationMarkers'  => [
					'shape'        => 'M2tsSegmentationMarkers',
					'locationName' => 'segmentationMarkers',
				],
				'SegmentationStyle'    => [
					'shape'        => 'M2tsSegmentationStyle',
					'locationName' => 'segmentationStyle',
				],
				'SegmentationTime'     => [ 'shape' => '__doubleMin0', 'locationName' => 'segmentationTime', ],
				'TimedMetadataPid'     => [ 'shape' => '__integerMin32Max8182', 'locationName' => 'timedMetadataPid', ],
				'TransportStreamId'    => [
					'shape'        => '__integerMin0Max65535',
					'locationName' => 'transportStreamId',
				],
				'VideoPid'             => [ 'shape' => '__integerMin32Max8182', 'locationName' => 'videoPid', ],
			],
		],
		'M3u8NielsenId3'                                                                                                                                                                                                                                                                                               => [
			'type' => 'string',
			'enum' => [ 'INSERT', 'NONE', ],
		],
		'M3u8PcrControl'                                                                                                                                                                                                                                                                                               => [
			'type' => 'string',
			'enum' => [
				'PCR_EVERY_PES_PACKET',
				'CONFIGURED_PCR_PERIOD',
			],
		],
		'M3u8Scte35Source'                                                                                                                                                                                                                                                                                             => [
			'type' => 'string',
			'enum' => [ 'PASSTHROUGH', 'NONE', ],
		],
		'M3u8Settings'                                                                                                                                                                                                                                                                                                 => [
			'type'    => 'structure',
			'members' => [
				'AudioFramesPerPes'  => [
					'shape'        => '__integerMin0Max2147483647',
					'locationName' => 'audioFramesPerPes',
				],
				'AudioPids'          => [ 'shape' => '__listOf__integerMin32Max8182', 'locationName' => 'audioPids', ],
				'NielsenId3'         => [ 'shape' => 'M3u8NielsenId3', 'locationName' => 'nielsenId3', ],
				'PatInterval'        => [ 'shape' => '__integerMin0Max1000', 'locationName' => 'patInterval', ],
				'PcrControl'         => [ 'shape' => 'M3u8PcrControl', 'locationName' => 'pcrControl', ],
				'PcrPid'             => [ 'shape' => '__integerMin32Max8182', 'locationName' => 'pcrPid', ],
				'PmtInterval'        => [ 'shape' => '__integerMin0Max1000', 'locationName' => 'pmtInterval', ],
				'PmtPid'             => [ 'shape' => '__integerMin32Max8182', 'locationName' => 'pmtPid', ],
				'PrivateMetadataPid' => [ 'shape' => '__integerMin32Max8182', 'locationName' => 'privateMetadataPid', ],
				'ProgramNumber'      => [ 'shape' => '__integerMin0Max65535', 'locationName' => 'programNumber', ],
				'Scte35Pid'          => [ 'shape' => '__integerMin32Max8182', 'locationName' => 'scte35Pid', ],
				'Scte35Source'       => [ 'shape' => 'M3u8Scte35Source', 'locationName' => 'scte35Source', ],
				'TimedMetadata'      => [ 'shape' => 'TimedMetadata', 'locationName' => 'timedMetadata', ],
				'TimedMetadataPid'   => [ 'shape' => '__integerMin32Max8182', 'locationName' => 'timedMetadataPid', ],
				'TransportStreamId'  => [ 'shape' => '__integerMin0Max65535', 'locationName' => 'transportStreamId', ],
				'VideoPid'           => [ 'shape' => '__integerMin32Max8182', 'locationName' => 'videoPid', ],
			],
		],
		'MotionImageInserter'                                                                                                                                                                                                                                                                                          => [
			'type'    => 'structure',
			'members' => [
				'Framerate'     => [
					'shape'        => 'MotionImageInsertionFramerate',
					'locationName' => 'framerate',
				],
				'Input'         => [
					'shape'        => '__stringMin14Max1285PatternS3Mov09Png',
					'locationName' => 'input',
				],
				'InsertionMode' => [
					'shape'        => 'MotionImageInsertionMode',
					'locationName' => 'insertionMode',
				],
				'Offset'        => [
					'shape'        => 'MotionImageInsertionOffset',
					'locationName' => 'offset',
				],
				'Playback'      => [
					'shape'        => 'MotionImagePlayback',
					'locationName' => 'playback',
				],
				'StartTime'     => [
					'shape'        => '__stringMin11Max11Pattern01D20305D205D',
					'locationName' => 'startTime',
				],
			],
		],
		'MotionImageInsertionFramerate'                                                                                                                                                                                                                                                                                => [
			'type'    => 'structure',
			'members' => [
				'FramerateDenominator' => [
					'shape'        => '__integerMin1Max17895697',
					'locationName' => 'framerateDenominator',
				],
				'FramerateNumerator'   => [
					'shape'        => '__integerMin1Max2147483640',
					'locationName' => 'framerateNumerator',
				],
			],
		],
		'MotionImageInsertionMode'                                                                                                                                                                                                                                                                                     => [
			'type' => 'string',
			'enum' => [ 'MOV', 'PNG', ],
		],
		'MotionImageInsertionOffset'                                                                                                                                                                                                                                                                                   => [
			'type'    => 'structure',
			'members' => [
				'ImageX' => [
					'shape'        => '__integerMin0Max2147483647',
					'locationName' => 'imageX',
				],
				'ImageY' => [
					'shape'        => '__integerMin0Max2147483647',
					'locationName' => 'imageY',
				],
			],
		],
		'MotionImagePlayback'                                                                                                                                                                                                                                                                                          => [
			'type' => 'string',
			'enum' => [ 'ONCE', 'REPEAT', ],
		],
		'MovClapAtom'                                                                                                                                                                                                                                                                                                  => [
			'type' => 'string',
			'enum' => [ 'INCLUDE', 'EXCLUDE', ],
		],
		'MovCslgAtom'                                                                                                                                                                                                                                                                                                  => [
			'type' => 'string',
			'enum' => [ 'INCLUDE', 'EXCLUDE', ],
		],
		'MovMpeg2FourCCControl'                                                                                                                                                                                                                                                                                        => [
			'type' => 'string',
			'enum' => [ 'XDCAM', 'MPEG', ],
		],
		'MovPaddingControl'                                                                                                                                                                                                                                                                                            => [
			'type' => 'string',
			'enum' => [ 'OMNEON', 'NONE', ],
		],
		'MovReference'                                                                                                                                                                                                                                                                                                 => [
			'type' => 'string',
			'enum' => [ 'SELF_CONTAINED', 'EXTERNAL', ],
		],
		'MovSettings'                                                                                                                                                                                                                                                                                                  => [
			'type'    => 'structure',
			'members' => [
				'ClapAtom'           => [
					'shape'        => 'MovClapAtom',
					'locationName' => 'clapAtom',
				],
				'CslgAtom'           => [
					'shape'        => 'MovCslgAtom',
					'locationName' => 'cslgAtom',
				],
				'Mpeg2FourCCControl' => [
					'shape'        => 'MovMpeg2FourCCControl',
					'locationName' => 'mpeg2FourCCControl',
				],
				'PaddingControl'     => [
					'shape'        => 'MovPaddingControl',
					'locationName' => 'paddingControl',
				],
				'Reference'          => [
					'shape'        => 'MovReference',
					'locationName' => 'reference',
				],
			],
		],
		'Mp2Settings'                                                                                                                                                                                                                                                                                                  => [
			'type'    => 'structure',
			'members' => [
				'Bitrate'    => [
					'shape'        => '__integerMin32000Max384000',
					'locationName' => 'bitrate',
				],
				'Channels'   => [
					'shape'        => '__integerMin1Max2',
					'locationName' => 'channels',
				],
				'SampleRate' => [
					'shape'        => '__integerMin32000Max48000',
					'locationName' => 'sampleRate',
				],
			],
		],
		'Mp4CslgAtom'                                                                                                                                                                                                                                                                                                  => [
			'type' => 'string',
			'enum' => [ 'INCLUDE', 'EXCLUDE', ],
		],
		'Mp4FreeSpaceBox'                                                                                                                                                                                                                                                                                              => [
			'type' => 'string',
			'enum' => [ 'INCLUDE', 'EXCLUDE', ],
		],
		'Mp4MoovPlacement'                                                                                                                                                                                                                                                                                             => [
			'type' => 'string',
			'enum' => [ 'PROGRESSIVE_DOWNLOAD', 'NORMAL', ],
		],
		'Mp4Settings'                                                                                                                                                                                                                                                                                                  => [
			'type'    => 'structure',
			'members' => [
				'CslgAtom'      => [
					'shape'        => 'Mp4CslgAtom',
					'locationName' => 'cslgAtom',
				],
				'FreeSpaceBox'  => [
					'shape'        => 'Mp4FreeSpaceBox',
					'locationName' => 'freeSpaceBox',
				],
				'MoovPlacement' => [
					'shape'        => 'Mp4MoovPlacement',
					'locationName' => 'moovPlacement',
				],
				'Mp4MajorBrand' => [
					'shape'        => '__string',
					'locationName' => 'mp4MajorBrand',
				],
			],
		],
		'Mpeg2AdaptiveQuantization'                                                                                                                                                                                                                                                                                    => [
			'type' => 'string',
			'enum' => [ 'OFF', 'LOW', 'MEDIUM', 'HIGH', ],
		],
		'Mpeg2CodecLevel'                                                                                                                                                                                                                                                                                              => [
			'type' => 'string',
			'enum' => [ 'AUTO', 'LOW', 'MAIN', 'HIGH1440', 'HIGH', ],
		],
		'Mpeg2CodecProfile'                                                                                                                                                                                                                                                                                            => [
			'type' => 'string',
			'enum' => [ 'MAIN', 'PROFILE_422', ],
		],
		'Mpeg2DynamicSubGop'                                                                                                                                                                                                                                                                                           => [
			'type' => 'string',
			'enum' => [ 'ADAPTIVE', 'STATIC', ],
		],
		'Mpeg2FramerateControl'                                                                                                                                                                                                                                                                                        => [
			'type' => 'string',
			'enum' => [ 'INITIALIZE_FROM_SOURCE', 'SPECIFIED', ],
		],
		'Mpeg2FramerateConversionAlgorithm'                                                                                                                                                                                                                                                                            => [
			'type' => 'string',
			'enum' => [ 'DUPLICATE_DROP', 'INTERPOLATE', ],
		],
		'Mpeg2GopSizeUnits'                                                                                                                                                                                                                                                                                            => [
			'type' => 'string',
			'enum' => [ 'FRAMES', 'SECONDS', ],
		],
		'Mpeg2InterlaceMode'                                                                                                                                                                                                                                                                                           => [
			'type' => 'string',
			'enum' => [
				'PROGRESSIVE',
				'TOP_FIELD',
				'BOTTOM_FIELD',
				'FOLLOW_TOP_FIELD',
				'FOLLOW_BOTTOM_FIELD',
			],
		],
		'Mpeg2IntraDcPrecision'                                                                                                                                                                                                                                                                                        => [
			'type' => 'string',
			'enum' => [
				'AUTO',
				'INTRA_DC_PRECISION_8',
				'INTRA_DC_PRECISION_9',
				'INTRA_DC_PRECISION_10',
				'INTRA_DC_PRECISION_11',
			],
		],
		'Mpeg2ParControl'                                                                                                                                                                                                                                                                                              => [
			'type' => 'string',
			'enum' => [ 'INITIALIZE_FROM_SOURCE', 'SPECIFIED', ],
		],
		'Mpeg2QualityTuningLevel'                                                                                                                                                                                                                                                                                      => [
			'type' => 'string',
			'enum' => [ 'SINGLE_PASS', 'MULTI_PASS', ],
		],
		'Mpeg2RateControlMode'                                                                                                                                                                                                                                                                                         => [
			'type' => 'string',
			'enum' => [ 'VBR', 'CBR', ],
		],
		'Mpeg2SceneChangeDetect'                                                                                                                                                                                                                                                                                       => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'Mpeg2Settings'                                                                                                                                                                                                                                                                                                => [
			'type'    => 'structure',
			'members' => [
				'AdaptiveQuantization'                => [
					'shape'        => 'Mpeg2AdaptiveQuantization',
					'locationName' => 'adaptiveQuantization',
				],
				'Bitrate'                             => [
					'shape'        => '__integerMin1000Max288000000',
					'locationName' => 'bitrate',
				],
				'CodecLevel'                          => [
					'shape'        => 'Mpeg2CodecLevel',
					'locationName' => 'codecLevel',
				],
				'CodecProfile'                        => [
					'shape'        => 'Mpeg2CodecProfile',
					'locationName' => 'codecProfile',
				],
				'DynamicSubGop'                       => [
					'shape'        => 'Mpeg2DynamicSubGop',
					'locationName' => 'dynamicSubGop',
				],
				'FramerateControl'                    => [
					'shape'        => 'Mpeg2FramerateControl',
					'locationName' => 'framerateControl',
				],
				'FramerateConversionAlgorithm'        => [
					'shape'        => 'Mpeg2FramerateConversionAlgorithm',
					'locationName' => 'framerateConversionAlgorithm',
				],
				'FramerateDenominator'                => [
					'shape'        => '__integerMin1Max1001',
					'locationName' => 'framerateDenominator',
				],
				'FramerateNumerator'                  => [
					'shape'        => '__integerMin24Max60000',
					'locationName' => 'framerateNumerator',
				],
				'GopClosedCadence'                    => [
					'shape'        => '__integerMin0Max2147483647',
					'locationName' => 'gopClosedCadence',
				],
				'GopSize'                             => [ 'shape' => '__doubleMin0', 'locationName' => 'gopSize', ],
				'GopSizeUnits'                        => [
					'shape'        => 'Mpeg2GopSizeUnits',
					'locationName' => 'gopSizeUnits',
				],
				'HrdBufferInitialFillPercentage'      => [
					'shape'        => '__integerMin0Max100',
					'locationName' => 'hrdBufferInitialFillPercentage',
				],
				'HrdBufferSize'                       => [
					'shape'        => '__integerMin0Max47185920',
					'locationName' => 'hrdBufferSize',
				],
				'InterlaceMode'                       => [
					'shape'        => 'Mpeg2InterlaceMode',
					'locationName' => 'interlaceMode',
				],
				'IntraDcPrecision'                    => [
					'shape'        => 'Mpeg2IntraDcPrecision',
					'locationName' => 'intraDcPrecision',
				],
				'MaxBitrate'                          => [
					'shape'        => '__integerMin1000Max300000000',
					'locationName' => 'maxBitrate',
				],
				'MinIInterval'                        => [
					'shape'        => '__integerMin0Max30',
					'locationName' => 'minIInterval',
				],
				'NumberBFramesBetweenReferenceFrames' => [
					'shape'        => '__integerMin0Max7',
					'locationName' => 'numberBFramesBetweenReferenceFrames',
				],
				'ParControl'                          => [
					'shape'        => 'Mpeg2ParControl',
					'locationName' => 'parControl',
				],
				'ParDenominator'                      => [
					'shape'        => '__integerMin1Max2147483647',
					'locationName' => 'parDenominator',
				],
				'ParNumerator'                        => [
					'shape'        => '__integerMin1Max2147483647',
					'locationName' => 'parNumerator',
				],
				'QualityTuningLevel'                  => [
					'shape'        => 'Mpeg2QualityTuningLevel',
					'locationName' => 'qualityTuningLevel',
				],
				'RateControlMode'                     => [
					'shape'        => 'Mpeg2RateControlMode',
					'locationName' => 'rateControlMode',
				],
				'SceneChangeDetect'                   => [
					'shape'        => 'Mpeg2SceneChangeDetect',
					'locationName' => 'sceneChangeDetect',
				],
				'SlowPal'                             => [ 'shape' => 'Mpeg2SlowPal', 'locationName' => 'slowPal', ],
				'Softness'                            => [
					'shape'        => '__integerMin0Max128',
					'locationName' => 'softness',
				],
				'SpatialAdaptiveQuantization'         => [
					'shape'        => 'Mpeg2SpatialAdaptiveQuantization',
					'locationName' => 'spatialAdaptiveQuantization',
				],
				'Syntax'                              => [ 'shape' => 'Mpeg2Syntax', 'locationName' => 'syntax', ],
				'Telecine'                            => [ 'shape' => 'Mpeg2Telecine', 'locationName' => 'telecine', ],
				'TemporalAdaptiveQuantization'        => [
					'shape'        => 'Mpeg2TemporalAdaptiveQuantization',
					'locationName' => 'temporalAdaptiveQuantization',
				],
			],
		],
		'Mpeg2SlowPal'                                                                                                                                                                                                                                                                                                 => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'Mpeg2SpatialAdaptiveQuantization'                                                                                                                                                                                                                                                                             => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'Mpeg2Syntax'                                                                                                                                                                                                                                                                                                  => [
			'type' => 'string',
			'enum' => [ 'DEFAULT', 'D_10', ],
		],
		'Mpeg2Telecine'                                                                                                                                                                                                                                                                                                => [
			'type' => 'string',
			'enum' => [ 'NONE', 'SOFT', 'HARD', ],
		],
		'Mpeg2TemporalAdaptiveQuantization'                                                                                                                                                                                                                                                                            => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'MsSmoothAudioDeduplication'                                                                                                                                                                                                                                                                                   => [
			'type' => 'string',
			'enum' => [ 'COMBINE_DUPLICATE_STREAMS', 'NONE', ],
		],
		'MsSmoothEncryptionSettings'                                                                                                                                                                                                                                                                                   => [
			'type'    => 'structure',
			'members' => [
				'SpekeKeyProvider' => [
					'shape'        => 'SpekeKeyProvider',
					'locationName' => 'spekeKeyProvider',
				],
			],
		],
		'MsSmoothGroupSettings'                                                                                                                                                                                                                                                                                        => [
			'type'    => 'structure',
			'members' => [
				'AudioDeduplication'  => [
					'shape'        => 'MsSmoothAudioDeduplication',
					'locationName' => 'audioDeduplication',
				],
				'Destination'         => [
					'shape'        => '__stringPatternS3',
					'locationName' => 'destination',
				],
				'DestinationSettings' => [
					'shape'        => 'DestinationSettings',
					'locationName' => 'destinationSettings',
				],
				'Encryption'          => [
					'shape'        => 'MsSmoothEncryptionSettings',
					'locationName' => 'encryption',
				],
				'FragmentLength'      => [
					'shape'        => '__integerMin1Max2147483647',
					'locationName' => 'fragmentLength',
				],
				'ManifestEncoding'    => [
					'shape'        => 'MsSmoothManifestEncoding',
					'locationName' => 'manifestEncoding',
				],
			],
		],
		'MsSmoothManifestEncoding'                                                                                                                                                                                                                                                                                     => [
			'type' => 'string',
			'enum' => [ 'UTF8', 'UTF16', ],
		],
		'NielsenConfiguration'                                                                                                                                                                                                                                                                                         => [
			'type'    => 'structure',
			'members' => [
				'BreakoutCode'  => [
					'shape'        => '__integerMin0Max9',
					'locationName' => 'breakoutCode',
				],
				'DistributorId' => [
					'shape'        => '__string',
					'locationName' => 'distributorId',
				],
			],
		],
		'NoiseReducer'                                                                                                                                                                                                                                                                                                 => [
			'type'    => 'structure',
			'members' => [
				'Filter'                => [
					'shape'        => 'NoiseReducerFilter',
					'locationName' => 'filter',
				],
				'FilterSettings'        => [
					'shape'        => 'NoiseReducerFilterSettings',
					'locationName' => 'filterSettings',
				],
				'SpatialFilterSettings' => [
					'shape'        => 'NoiseReducerSpatialFilterSettings',
					'locationName' => 'spatialFilterSettings',
				],
			],
		],
		'NoiseReducerFilter'                                                                                                                                                                                                                                                                                           => [
			'type' => 'string',
			'enum' => [
				'BILATERAL',
				'MEAN',
				'GAUSSIAN',
				'LANCZOS',
				'SHARPEN',
				'CONSERVE',
				'SPATIAL',
			],
		],
		'NoiseReducerFilterSettings'                                                                                                                                                                                                                                                                                   => [
			'type'    => 'structure',
			'members' => [
				'Strength' => [
					'shape'        => '__integerMin0Max3',
					'locationName' => 'strength',
				],
			],
		],
		'NoiseReducerSpatialFilterSettings'                                                                                                                                                                                                                                                                            => [
			'type'    => 'structure',
			'members' => [
				'PostFilterSharpenStrength' => [
					'shape'        => '__integerMin0Max3',
					'locationName' => 'postFilterSharpenStrength',
				],
				'Speed'                     => [
					'shape'        => '__integerMinNegative2Max3',
					'locationName' => 'speed',
				],
				'Strength'                  => [
					'shape'        => '__integerMin0Max16',
					'locationName' => 'strength',
				],
			],
		],
		'NotFoundException'                                                                                                                                                                                                                                                                                            => [
			'type'      => 'structure',
			'members'   => [
				'Message' => [
					'shape'        => '__string',
					'locationName' => 'message',
				],
			],
			'exception' => true,
			'error'     => [ 'httpStatusCode' => 404, ],
		],
		'Order'                                                                                                                                                                                                                                                                                                        => [
			'type' => 'string',
			'enum' => [ 'ASCENDING', 'DESCENDING', ],
		],
		'Output'                                                                                                                                                                                                                                                                                                       => [
			'type'    => 'structure',
			'members' => [
				'AudioDescriptions'   => [
					'shape'        => '__listOfAudioDescription',
					'locationName' => 'audioDescriptions',
				],
				'CaptionDescriptions' => [
					'shape'        => '__listOfCaptionDescription',
					'locationName' => 'captionDescriptions',
				],
				'ContainerSettings'   => [
					'shape'        => 'ContainerSettings',
					'locationName' => 'containerSettings',
				],
				'Extension'           => [
					'shape'        => '__string',
					'locationName' => 'extension',
				],
				'NameModifier'        => [
					'shape'        => '__stringMin1',
					'locationName' => 'nameModifier',
				],
				'OutputSettings'      => [
					'shape'        => 'OutputSettings',
					'locationName' => 'outputSettings',
				],
				'Preset'              => [
					'shape'        => '__stringMin0',
					'locationName' => 'preset',
				],
				'VideoDescription'    => [
					'shape'        => 'VideoDescription',
					'locationName' => 'videoDescription',
				],
			],
		],
		'OutputChannelMapping'                                                                                                                                                                                                                                                                                         => [
			'type'    => 'structure',
			'members' => [
				'InputChannels' => [
					'shape'        => '__listOf__integerMinNegative60Max6',
					'locationName' => 'inputChannels',
				],
			],
		],
		'OutputDetail'                                                                                                                                                                                                                                                                                                 => [
			'type'    => 'structure',
			'members' => [
				'DurationInMs' => [
					'shape'        => '__integer',
					'locationName' => 'durationInMs',
				],
				'VideoDetails' => [
					'shape'        => 'VideoDetail',
					'locationName' => 'videoDetails',
				],
			],
		],
		'OutputGroup'                                                                                                                                                                                                                                                                                                  => [
			'type'    => 'structure',
			'members' => [
				'CustomName'          => [
					'shape'        => '__string',
					'locationName' => 'customName',
				],
				'Name'                => [
					'shape'        => '__string',
					'locationName' => 'name',
				],
				'OutputGroupSettings' => [
					'shape'        => 'OutputGroupSettings',
					'locationName' => 'outputGroupSettings',
				],
				'Outputs'             => [
					'shape'        => '__listOfOutput',
					'locationName' => 'outputs',
				],
			],
		],
		'OutputGroupDetail'                                                                                                                                                                                                                                                                                            => [
			'type'    => 'structure',
			'members' => [
				'OutputDetails' => [
					'shape'        => '__listOfOutputDetail',
					'locationName' => 'outputDetails',
				],
			],
		],
		'OutputGroupSettings'                                                                                                                                                                                                                                                                                          => [
			'type'    => 'structure',
			'members' => [
				'CmafGroupSettings'     => [
					'shape'        => 'CmafGroupSettings',
					'locationName' => 'cmafGroupSettings',
				],
				'DashIsoGroupSettings'  => [
					'shape'        => 'DashIsoGroupSettings',
					'locationName' => 'dashIsoGroupSettings',
				],
				'FileGroupSettings'     => [
					'shape'        => 'FileGroupSettings',
					'locationName' => 'fileGroupSettings',
				],
				'HlsGroupSettings'      => [
					'shape'        => 'HlsGroupSettings',
					'locationName' => 'hlsGroupSettings',
				],
				'MsSmoothGroupSettings' => [
					'shape'        => 'MsSmoothGroupSettings',
					'locationName' => 'msSmoothGroupSettings',
				],
				'Type'                  => [
					'shape'        => 'OutputGroupType',
					'locationName' => 'type',
				],
			],
		],
		'OutputGroupType'                                                                                                                                                                                                                                                                                              => [
			'type' => 'string',
			'enum' => [
				'HLS_GROUP_SETTINGS',
				'DASH_ISO_GROUP_SETTINGS',
				'FILE_GROUP_SETTINGS',
				'MS_SMOOTH_GROUP_SETTINGS',
				'CMAF_GROUP_SETTINGS',
			],
		],
		'OutputSdt'                                                                                                                                                                                                                                                                                                    => [
			'type' => 'string',
			'enum' => [
				'SDT_FOLLOW',
				'SDT_FOLLOW_IF_PRESENT',
				'SDT_MANUAL',
				'SDT_NONE',
			],
		],
		'OutputSettings'                                                                                                                                                                                                                                                                                               => [
			'type'    => 'structure',
			'members' => [
				'HlsSettings' => [
					'shape'        => 'HlsSettings',
					'locationName' => 'hlsSettings',
				],
			],
		],
		'Preset'                                                                                                                                                                                                                                                                                                       => [
			'type'     => 'structure',
			'members'  => [
				'Arn'         => [
					'shape'        => '__string',
					'locationName' => 'arn',
				],
				'Category'    => [
					'shape'        => '__string',
					'locationName' => 'category',
				],
				'CreatedAt'   => [
					'shape'        => '__timestampUnix',
					'locationName' => 'createdAt',
				],
				'Description' => [
					'shape'        => '__string',
					'locationName' => 'description',
				],
				'LastUpdated' => [
					'shape'        => '__timestampUnix',
					'locationName' => 'lastUpdated',
				],
				'Name'        => [
					'shape'        => '__string',
					'locationName' => 'name',
				],
				'Settings'    => [
					'shape'        => 'PresetSettings',
					'locationName' => 'settings',
				],
				'Type'        => [
					'shape'        => 'Type',
					'locationName' => 'type',
				],
			],
			'required' => [ 'Settings', 'Name', ],
		],
		'PresetListBy'                                                                                                                                                                                                                                                                                                 => [
			'type' => 'string',
			'enum' => [ 'NAME', 'CREATION_DATE', 'SYSTEM', ],
		],
		'PresetSettings'                                                                                                                                                                                                                                                                                               => [
			'type'    => 'structure',
			'members' => [
				'AudioDescriptions'   => [
					'shape'        => '__listOfAudioDescription',
					'locationName' => 'audioDescriptions',
				],
				'CaptionDescriptions' => [
					'shape'        => '__listOfCaptionDescriptionPreset',
					'locationName' => 'captionDescriptions',
				],
				'ContainerSettings'   => [
					'shape'        => 'ContainerSettings',
					'locationName' => 'containerSettings',
				],
				'VideoDescription'    => [
					'shape'        => 'VideoDescription',
					'locationName' => 'videoDescription',
				],
			],
		],
		'PricingPlan'                                                                                                                                                                                                                                                                                                  => [
			'type' => 'string',
			'enum' => [ 'ON_DEMAND', 'RESERVED', ],
		],
		'ProresCodecProfile'                                                                                                                                                                                                                                                                                           => [
			'type' => 'string',
			'enum' => [
				'APPLE_PRORES_422',
				'APPLE_PRORES_422_HQ',
				'APPLE_PRORES_422_LT',
				'APPLE_PRORES_422_PROXY',
			],
		],
		'ProresFramerateControl'                                                                                                                                                                                                                                                                                       => [
			'type' => 'string',
			'enum' => [ 'INITIALIZE_FROM_SOURCE', 'SPECIFIED', ],
		],
		'ProresFramerateConversionAlgorithm'                                                                                                                                                                                                                                                                           => [
			'type' => 'string',
			'enum' => [ 'DUPLICATE_DROP', 'INTERPOLATE', ],
		],
		'ProresInterlaceMode'                                                                                                                                                                                                                                                                                          => [
			'type' => 'string',
			'enum' => [
				'PROGRESSIVE',
				'TOP_FIELD',
				'BOTTOM_FIELD',
				'FOLLOW_TOP_FIELD',
				'FOLLOW_BOTTOM_FIELD',
			],
		],
		'ProresParControl'                                                                                                                                                                                                                                                                                             => [
			'type' => 'string',
			'enum' => [ 'INITIALIZE_FROM_SOURCE', 'SPECIFIED', ],
		],
		'ProresSettings'                                                                                                                                                                                                                                                                                               => [
			'type'    => 'structure',
			'members' => [
				'CodecProfile'                 => [
					'shape'        => 'ProresCodecProfile',
					'locationName' => 'codecProfile',
				],
				'FramerateControl'             => [
					'shape'        => 'ProresFramerateControl',
					'locationName' => 'framerateControl',
				],
				'FramerateConversionAlgorithm' => [
					'shape'        => 'ProresFramerateConversionAlgorithm',
					'locationName' => 'framerateConversionAlgorithm',
				],
				'FramerateDenominator'         => [
					'shape'        => '__integerMin1Max2147483647',
					'locationName' => 'framerateDenominator',
				],
				'FramerateNumerator'           => [
					'shape'        => '__integerMin1Max2147483647',
					'locationName' => 'framerateNumerator',
				],
				'InterlaceMode'                => [
					'shape'        => 'ProresInterlaceMode',
					'locationName' => 'interlaceMode',
				],
				'ParControl'                   => [ 'shape' => 'ProresParControl', 'locationName' => 'parControl', ],
				'ParDenominator'               => [
					'shape'        => '__integerMin1Max2147483647',
					'locationName' => 'parDenominator',
				],
				'ParNumerator'                 => [
					'shape'        => '__integerMin1Max2147483647',
					'locationName' => 'parNumerator',
				],
				'SlowPal'                      => [ 'shape' => 'ProresSlowPal', 'locationName' => 'slowPal', ],
				'Telecine'                     => [ 'shape' => 'ProresTelecine', 'locationName' => 'telecine', ],
			],
		],
		'ProresSlowPal'                                                                                                                                                                                                                                                                                                => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'ENABLED', ],
		],
		'ProresTelecine'                                                                                                                                                                                                                                                                                               => [
			'type' => 'string',
			'enum' => [ 'NONE', 'HARD', ],
		],
		'Queue'                                                                                                                                                                                                                                                                                                        => [
			'type'     => 'structure',
			'members'  => [
				'Arn'                  => [
					'shape'        => '__string',
					'locationName' => 'arn',
				],
				'CreatedAt'            => [
					'shape'        => '__timestampUnix',
					'locationName' => 'createdAt',
				],
				'Description'          => [
					'shape'        => '__string',
					'locationName' => 'description',
				],
				'LastUpdated'          => [
					'shape'        => '__timestampUnix',
					'locationName' => 'lastUpdated',
				],
				'Name'                 => [
					'shape'        => '__string',
					'locationName' => 'name',
				],
				'PricingPlan'          => [
					'shape'        => 'PricingPlan',
					'locationName' => 'pricingPlan',
				],
				'ProgressingJobsCount' => [
					'shape'        => '__integer',
					'locationName' => 'progressingJobsCount',
				],
				'ReservationPlan'      => [
					'shape'        => 'ReservationPlan',
					'locationName' => 'reservationPlan',
				],
				'Status'               => [
					'shape'        => 'QueueStatus',
					'locationName' => 'status',
				],
				'SubmittedJobsCount'   => [
					'shape'        => '__integer',
					'locationName' => 'submittedJobsCount',
				],
				'Type'                 => [
					'shape'        => 'Type',
					'locationName' => 'type',
				],
			],
			'required' => [ 'Name', ],
		],
		'QueueListBy'                                                                                                                                                                                                                                                                                                  => [
			'type' => 'string',
			'enum' => [ 'NAME', 'CREATION_DATE', ],
		],
		'QueueStatus'                                                                                                                                                                                                                                                                                                  => [
			'type' => 'string',
			'enum' => [ 'ACTIVE', 'PAUSED', ],
		],
		'Rectangle'                                                                                                                                                                                                                                                                                                    => [
			'type'    => 'structure',
			'members' => [
				'Height' => [
					'shape'        => '__integerMin2Max2147483647',
					'locationName' => 'height',
				],
				'Width'  => [
					'shape'        => '__integerMin2Max2147483647',
					'locationName' => 'width',
				],
				'X'      => [
					'shape'        => '__integerMin0Max2147483647',
					'locationName' => 'x',
				],
				'Y'      => [
					'shape'        => '__integerMin0Max2147483647',
					'locationName' => 'y',
				],
			],
		],
		'RemixSettings'                                                                                                                                                                                                                                                                                                => [
			'type'    => 'structure',
			'members' => [
				'ChannelMapping' => [
					'shape'        => 'ChannelMapping',
					'locationName' => 'channelMapping',
				],
				'ChannelsIn'     => [
					'shape'        => '__integerMin1Max16',
					'locationName' => 'channelsIn',
				],
				'ChannelsOut'    => [
					'shape'        => '__integerMin1Max8',
					'locationName' => 'channelsOut',
				],
			],
		],
		'RenewalType'                                                                                                                                                                                                                                                                                                  => [
			'type' => 'string',
			'enum' => [ 'AUTO_RENEW', 'EXPIRE', ],
		],
		'ReservationPlan'                                                                                                                                                                                                                                                                                              => [
			'type'    => 'structure',
			'members' => [
				'Commitment'    => [
					'shape'        => 'Commitment',
					'locationName' => 'commitment',
				],
				'ExpiresAt'     => [
					'shape'        => '__timestampUnix',
					'locationName' => 'expiresAt',
				],
				'PurchasedAt'   => [
					'shape'        => '__timestampUnix',
					'locationName' => 'purchasedAt',
				],
				'RenewalType'   => [
					'shape'        => 'RenewalType',
					'locationName' => 'renewalType',
				],
				'ReservedSlots' => [
					'shape'        => '__integer',
					'locationName' => 'reservedSlots',
				],
				'Status'        => [
					'shape'        => 'ReservationPlanStatus',
					'locationName' => 'status',
				],
			],
		],
		'ReservationPlanSettings'                                                                                                                                                                                                                                                                                      => [
			'type'     => 'structure',
			'members'  => [
				'Commitment'    => [
					'shape'        => 'Commitment',
					'locationName' => 'commitment',
				],
				'RenewalType'   => [
					'shape'        => 'RenewalType',
					'locationName' => 'renewalType',
				],
				'ReservedSlots' => [
					'shape'        => '__integer',
					'locationName' => 'reservedSlots',
				],
			],
			'required' => [
				'Commitment',
				'ReservedSlots',
				'RenewalType',
			],
		],
		'ReservationPlanStatus'                                                                                                                                                                                                                                                                                        => [
			'type' => 'string',
			'enum' => [ 'ACTIVE', 'EXPIRED', ],
		],
		'ResourceTags'                                                                                                                                                                                                                                                                                                 => [
			'type'    => 'structure',
			'members' => [
				'Arn'  => [
					'shape'        => '__string',
					'locationName' => 'arn',
				],
				'Tags' => [
					'shape'        => '__mapOf__string',
					'locationName' => 'tags',
				],
			],
		],
		'RespondToAfd'                                                                                                                                                                                                                                                                                                 => [
			'type' => 'string',
			'enum' => [ 'NONE', 'RESPOND', 'PASSTHROUGH', ],
		],
		'S3DestinationSettings'                                                                                                                                                                                                                                                                                        => [
			'type'    => 'structure',
			'members' => [
				'Encryption' => [
					'shape'        => 'S3EncryptionSettings',
					'locationName' => 'encryption',
				],
			],
		],
		'S3EncryptionSettings'                                                                                                                                                                                                                                                                                         => [
			'type'    => 'structure',
			'members' => [
				'EncryptionType' => [
					'shape'        => 'S3ServerSideEncryptionType',
					'locationName' => 'encryptionType',
				],
				'KmsKeyArn'      => [
					'shape'        => '__stringPatternArnAwsUsGovKmsAZ26EastWestCentralNorthSouthEastWest1912D12KeyAFAF098AFAF094AFAF094AFAF094AFAF0912',
					'locationName' => 'kmsKeyArn',
				],
			],
		],
		'S3ServerSideEncryptionType'                                                                                                                                                                                                                                                                                   => [
			'type' => 'string',
			'enum' => [
				'SERVER_SIDE_ENCRYPTION_S3',
				'SERVER_SIDE_ENCRYPTION_KMS',
			],
		],
		'ScalingBehavior'                                                                                                                                                                                                                                                                                              => [
			'type' => 'string',
			'enum' => [ 'DEFAULT', 'STRETCH_TO_OUTPUT', ],
		],
		'SccDestinationFramerate'                                                                                                                                                                                                                                                                                      => [
			'type' => 'string',
			'enum' => [
				'FRAMERATE_23_97',
				'FRAMERATE_24',
				'FRAMERATE_29_97_DROPFRAME',
				'FRAMERATE_29_97_NON_DROPFRAME',
			],
		],
		'SccDestinationSettings'                                                                                                                                                                                                                                                                                       => [
			'type'    => 'structure',
			'members' => [
				'Framerate' => [
					'shape'        => 'SccDestinationFramerate',
					'locationName' => 'framerate',
				],
			],
		],
		'SpekeKeyProvider'                                                                                                                                                                                                                                                                                             => [
			'type'    => 'structure',
			'members' => [
				'CertificateArn' => [
					'shape'        => '__stringPatternArnAwsUsGovAcm',
					'locationName' => 'certificateArn',
				],
				'ResourceId'     => [
					'shape'        => '__string',
					'locationName' => 'resourceId',
				],
				'SystemIds'      => [
					'shape'        => '__listOf__stringPattern09aFAF809aFAF409aFAF409aFAF409aFAF12',
					'locationName' => 'systemIds',
				],
				'Url'            => [
					'shape'        => '__stringPatternHttps',
					'locationName' => 'url',
				],
			],
		],
		'StaticKeyProvider'                                                                                                                                                                                                                                                                                            => [
			'type'    => 'structure',
			'members' => [
				'KeyFormat'         => [
					'shape'        => '__stringPatternIdentityAZaZ26AZaZ09163',
					'locationName' => 'keyFormat',
				],
				'KeyFormatVersions' => [
					'shape'        => '__stringPatternDD',
					'locationName' => 'keyFormatVersions',
				],
				'StaticKeyValue'    => [
					'shape'        => '__stringPatternAZaZ0932',
					'locationName' => 'staticKeyValue',
				],
				'Url'               => [
					'shape'        => '__string',
					'locationName' => 'url',
				],
			],
		],
		'StatusUpdateInterval'                                                                                                                                                                                                                                                                                         => [
			'type' => 'string',
			'enum' => [
				'SECONDS_10',
				'SECONDS_12',
				'SECONDS_15',
				'SECONDS_20',
				'SECONDS_30',
				'SECONDS_60',
				'SECONDS_120',
				'SECONDS_180',
				'SECONDS_240',
				'SECONDS_300',
				'SECONDS_360',
				'SECONDS_420',
				'SECONDS_480',
				'SECONDS_540',
				'SECONDS_600',
			],
		],
		'TagResourceRequest'                                                                                                                                                                                                                                                                                           => [
			'type'     => 'structure',
			'members'  => [
				'Arn'  => [
					'shape'        => '__string',
					'locationName' => 'arn',
				],
				'Tags' => [
					'shape'        => '__mapOf__string',
					'locationName' => 'tags',
				],
			],
			'required' => [ 'Arn', 'Tags', ],
		],
		'TagResourceResponse'                                                                                                                                                                                                                                                                                          => [
			'type'    => 'structure',
			'members' => [],
		],
		'TeletextDestinationSettings'                                                                                                                                                                                                                                                                                  => [
			'type'    => 'structure',
			'members' => [
				'PageNumber' => [
					'shape'        => '__stringMin3Max3Pattern1809aFAF09aEAE',
					'locationName' => 'pageNumber',
				],
			],
		],
		'TeletextSourceSettings'                                                                                                                                                                                                                                                                                       => [
			'type'    => 'structure',
			'members' => [
				'PageNumber' => [
					'shape'        => '__stringMin3Max3Pattern1809aFAF09aEAE',
					'locationName' => 'pageNumber',
				],
			],
		],
		'TimecodeBurnin'                                                                                                                                                                                                                                                                                               => [
			'type'    => 'structure',
			'members' => [
				'FontSize' => [
					'shape'        => '__integerMin10Max48',
					'locationName' => 'fontSize',
				],
				'Position' => [
					'shape'        => 'TimecodeBurninPosition',
					'locationName' => 'position',
				],
				'Prefix'   => [
					'shape'        => '__stringPattern',
					'locationName' => 'prefix',
				],
			],
		],
		'TimecodeBurninPosition'                                                                                                                                                                                                                                                                                       => [
			'type' => 'string',
			'enum' => [
				'TOP_CENTER',
				'TOP_LEFT',
				'TOP_RIGHT',
				'MIDDLE_LEFT',
				'MIDDLE_CENTER',
				'MIDDLE_RIGHT',
				'BOTTOM_LEFT',
				'BOTTOM_CENTER',
				'BOTTOM_RIGHT',
			],
		],
		'TimecodeConfig'                                                                                                                                                                                                                                                                                               => [
			'type'    => 'structure',
			'members' => [
				'Anchor'          => [
					'shape'        => '__stringPattern010920405090509092',
					'locationName' => 'anchor',
				],
				'Source'          => [
					'shape'        => 'TimecodeSource',
					'locationName' => 'source',
				],
				'Start'           => [
					'shape'        => '__stringPattern010920405090509092',
					'locationName' => 'start',
				],
				'TimestampOffset' => [
					'shape'        => '__stringPattern0940191020191209301',
					'locationName' => 'timestampOffset',
				],
			],
		],
		'TimecodeSource'                                                                                                                                                                                                                                                                                               => [
			'type' => 'string',
			'enum' => [ 'EMBEDDED', 'ZEROBASED', 'SPECIFIEDSTART', ],
		],
		'TimedMetadata'                                                                                                                                                                                                                                                                                                => [
			'type' => 'string',
			'enum' => [ 'PASSTHROUGH', 'NONE', ],
		],
		'TimedMetadataInsertion'                                                                                                                                                                                                                                                                                       => [
			'type'    => 'structure',
			'members' => [
				'Id3Insertions' => [
					'shape'        => '__listOfId3Insertion',
					'locationName' => 'id3Insertions',
				],
			],
		],
		'Timing'                                                                                                                                                                                                                                                                                                       => [
			'type'    => 'structure',
			'members' => [
				'FinishTime' => [
					'shape'        => '__timestampUnix',
					'locationName' => 'finishTime',
				],
				'StartTime'  => [
					'shape'        => '__timestampUnix',
					'locationName' => 'startTime',
				],
				'SubmitTime' => [
					'shape'        => '__timestampUnix',
					'locationName' => 'submitTime',
				],
			],
		],
		'TooManyRequestsException'                                                                                                                                                                                                                                                                                     => [
			'type'      => 'structure',
			'members'   => [
				'Message' => [
					'shape'        => '__string',
					'locationName' => 'message',
				],
			],
			'exception' => true,
			'error'     => [ 'httpStatusCode' => 429, ],
		],
		'TrackSourceSettings'                                                                                                                                                                                                                                                                                          => [
			'type'    => 'structure',
			'members' => [
				'TrackNumber' => [
					'shape'        => '__integerMin1Max2147483647',
					'locationName' => 'trackNumber',
				],
			],
		],
		'TtmlDestinationSettings'                                                                                                                                                                                                                                                                                      => [
			'type'    => 'structure',
			'members' => [
				'StylePassthrough' => [
					'shape'        => 'TtmlStylePassthrough',
					'locationName' => 'stylePassthrough',
				],
			],
		],
		'TtmlStylePassthrough'                                                                                                                                                                                                                                                                                         => [
			'type' => 'string',
			'enum' => [ 'ENABLED', 'DISABLED', ],
		],
		'Type'                                                                                                                                                                                                                                                                                                         => [
			'type' => 'string',
			'enum' => [ 'SYSTEM', 'CUSTOM', ],
		],
		'UntagResourceRequest'                                                                                                                                                                                                                                                                                         => [
			'type'     => 'structure',
			'members'  => [
				'Arn'     => [
					'shape'        => '__string',
					'locationName' => 'arn',
					'location'     => 'uri',
				],
				'TagKeys' => [
					'shape'        => '__listOf__string',
					'locationName' => 'tagKeys',
				],
			],
			'required' => [ 'Arn', ],
		],
		'UntagResourceResponse'                                                                                                                                                                                                                                                                                        => [
			'type'    => 'structure',
			'members' => [],
		],
		'UpdateJobTemplateRequest'                                                                                                                                                                                                                                                                                     => [
			'type'     => 'structure',
			'members'  => [
				'AccelerationSettings' => [
					'shape'        => 'AccelerationSettings',
					'locationName' => 'accelerationSettings',
				],
				'Category'             => [
					'shape'        => '__string',
					'locationName' => 'category',
				],
				'Description'          => [
					'shape'        => '__string',
					'locationName' => 'description',
				],
				'Name'                 => [
					'shape'        => '__string',
					'locationName' => 'name',
					'location'     => 'uri',
				],
				'Queue'                => [
					'shape'        => '__string',
					'locationName' => 'queue',
				],
				'Settings'             => [
					'shape'        => 'JobTemplateSettings',
					'locationName' => 'settings',
				],
				'StatusUpdateInterval' => [
					'shape'        => 'StatusUpdateInterval',
					'locationName' => 'statusUpdateInterval',
				],
			],
			'required' => [ 'Name', ],
		],
		'UpdateJobTemplateResponse'                                                                                                                                                                                                                                                                                    => [
			'type'    => 'structure',
			'members' => [
				'JobTemplate' => [
					'shape'        => 'JobTemplate',
					'locationName' => 'jobTemplate',
				],
			],
		],
		'UpdatePresetRequest'                                                                                                                                                                                                                                                                                          => [
			'type'     => 'structure',
			'members'  => [
				'Category'    => [
					'shape'        => '__string',
					'locationName' => 'category',
				],
				'Description' => [
					'shape'        => '__string',
					'locationName' => 'description',
				],
				'Name'        => [
					'shape'        => '__string',
					'locationName' => 'name',
					'location'     => 'uri',
				],
				'Settings'    => [
					'shape'        => 'PresetSettings',
					'locationName' => 'settings',
				],
			],
			'required' => [ 'Name', ],
		],
		'UpdatePresetResponse'                                                                                                                                                                                                                                                                                         => [
			'type'    => 'structure',
			'members' => [
				'Preset' => [
					'shape'        => 'Preset',
					'locationName' => 'preset',
				],
			],
		],
		'UpdateQueueRequest'                                                                                                                                                                                                                                                                                           => [
			'type'     => 'structure',
			'members'  => [
				'Description'             => [
					'shape'        => '__string',
					'locationName' => 'description',
				],
				'Name'                    => [
					'shape'        => '__string',
					'locationName' => 'name',
					'location'     => 'uri',
				],
				'ReservationPlanSettings' => [
					'shape'        => 'ReservationPlanSettings',
					'locationName' => 'reservationPlanSettings',
				],
				'Status'                  => [
					'shape'        => 'QueueStatus',
					'locationName' => 'status',
				],
			],
			'required' => [ 'Name', ],
		],
		'UpdateQueueResponse'                                                                                                                                                                                                                                                                                          => [
			'type'    => 'structure',
			'members' => [
				'Queue' => [
					'shape'        => 'Queue',
					'locationName' => 'queue',
				],
			],
		],
		'VideoCodec'                                                                                                                                                                                                                                                                                                   => [
			'type' => 'string',
			'enum' => [
				'FRAME_CAPTURE',
				'H_264',
				'H_265',
				'MPEG2',
				'PRORES',
			],
		],
		'VideoCodecSettings'                                                                                                                                                                                                                                                                                           => [
			'type'    => 'structure',
			'members' => [
				'Codec'                => [
					'shape'        => 'VideoCodec',
					'locationName' => 'codec',
				],
				'FrameCaptureSettings' => [
					'shape'        => 'FrameCaptureSettings',
					'locationName' => 'frameCaptureSettings',
				],
				'H264Settings'         => [
					'shape'        => 'H264Settings',
					'locationName' => 'h264Settings',
				],
				'H265Settings'         => [
					'shape'        => 'H265Settings',
					'locationName' => 'h265Settings',
				],
				'Mpeg2Settings'        => [
					'shape'        => 'Mpeg2Settings',
					'locationName' => 'mpeg2Settings',
				],
				'ProresSettings'       => [
					'shape'        => 'ProresSettings',
					'locationName' => 'proresSettings',
				],
			],
		],
		'VideoDescription'                                                                                                                                                                                                                                                                                             => [
			'type'    => 'structure',
			'members' => [
				'AfdSignaling'       => [ 'shape' => 'AfdSignaling', 'locationName' => 'afdSignaling', ],
				'AntiAlias'          => [ 'shape' => 'AntiAlias', 'locationName' => 'antiAlias', ],
				'CodecSettings'      => [ 'shape' => 'VideoCodecSettings', 'locationName' => 'codecSettings', ],
				'ColorMetadata'      => [ 'shape' => 'ColorMetadata', 'locationName' => 'colorMetadata', ],
				'Crop'               => [ 'shape' => 'Rectangle', 'locationName' => 'crop', ],
				'DropFrameTimecode'  => [ 'shape' => 'DropFrameTimecode', 'locationName' => 'dropFrameTimecode', ],
				'FixedAfd'           => [ 'shape' => '__integerMin0Max15', 'locationName' => 'fixedAfd', ],
				'Height'             => [ 'shape' => '__integerMin32Max2160', 'locationName' => 'height', ],
				'Position'           => [ 'shape' => 'Rectangle', 'locationName' => 'position', ],
				'RespondToAfd'       => [ 'shape' => 'RespondToAfd', 'locationName' => 'respondToAfd', ],
				'ScalingBehavior'    => [ 'shape' => 'ScalingBehavior', 'locationName' => 'scalingBehavior', ],
				'Sharpness'          => [ 'shape' => '__integerMin0Max100', 'locationName' => 'sharpness', ],
				'TimecodeInsertion'  => [ 'shape' => 'VideoTimecodeInsertion', 'locationName' => 'timecodeInsertion', ],
				'VideoPreprocessors' => [ 'shape' => 'VideoPreprocessor', 'locationName' => 'videoPreprocessors', ],
				'Width'              => [ 'shape' => '__integerMin32Max4096', 'locationName' => 'width', ],
			],
		],
		'VideoDetail'                                                                                                                                                                                                                                                                                                  => [
			'type'    => 'structure',
			'members' => [
				'HeightInPx' => [
					'shape'        => '__integer',
					'locationName' => 'heightInPx',
				],
				'WidthInPx'  => [
					'shape'        => '__integer',
					'locationName' => 'widthInPx',
				],
			],
		],
		'VideoPreprocessor'                                                                                                                                                                                                                                                                                            => [
			'type'    => 'structure',
			'members' => [
				'ColorCorrector' => [
					'shape'        => 'ColorCorrector',
					'locationName' => 'colorCorrector',
				],
				'Deinterlacer'   => [
					'shape'        => 'Deinterlacer',
					'locationName' => 'deinterlacer',
				],
				'ImageInserter'  => [
					'shape'        => 'ImageInserter',
					'locationName' => 'imageInserter',
				],
				'NoiseReducer'   => [
					'shape'        => 'NoiseReducer',
					'locationName' => 'noiseReducer',
				],
				'TimecodeBurnin' => [
					'shape'        => 'TimecodeBurnin',
					'locationName' => 'timecodeBurnin',
				],
			],
		],
		'VideoSelector'                                                                                                                                                                                                                                                                                                => [
			'type'    => 'structure',
			'members' => [
				'ColorSpace'      => [
					'shape'        => 'ColorSpace',
					'locationName' => 'colorSpace',
				],
				'ColorSpaceUsage' => [
					'shape'        => 'ColorSpaceUsage',
					'locationName' => 'colorSpaceUsage',
				],
				'Hdr10Metadata'   => [
					'shape'        => 'Hdr10Metadata',
					'locationName' => 'hdr10Metadata',
				],
				'Pid'             => [
					'shape'        => '__integerMin1Max2147483647',
					'locationName' => 'pid',
				],
				'ProgramNumber'   => [
					'shape'        => '__integerMinNegative2147483648Max2147483647',
					'locationName' => 'programNumber',
				],
				'Rotate'          => [
					'shape'        => 'InputRotate',
					'locationName' => 'rotate',
				],
			],
		],
		'VideoTimecodeInsertion'                                                                                                                                                                                                                                                                                       => [
			'type' => 'string',
			'enum' => [ 'DISABLED', 'PIC_TIMING_SEI', ],
		],
		'WavFormat'                                                                                                                                                                                                                                                                                                    => [
			'type' => 'string',
			'enum' => [ 'RIFF', 'RF64', ],
		],
		'WavSettings'                                                                                                                                                                                                                                                                                                  => [
			'type'    => 'structure',
			'members' => [
				'BitDepth'   => [
					'shape'        => '__integerMin16Max24',
					'locationName' => 'bitDepth',
				],
				'Channels'   => [
					'shape'        => '__integerMin1Max8',
					'locationName' => 'channels',
				],
				'Format'     => [
					'shape'        => 'WavFormat',
					'locationName' => 'format',
				],
				'SampleRate' => [
					'shape'        => '__integerMin8000Max192000',
					'locationName' => 'sampleRate',
				],
			],
		],
		'__boolean'                                                                                                                                                                                                                                                                                                    => [ 'type' => 'boolean', ],
		'__double'                                                                                                                                                                                                                                                                                                     => [ 'type' => 'double', ],
		'__doubleMin0'                                                                                                                                                                                                                                                                                                 => [ 'type' => 'double', ],
		'__doubleMin0Max2147483647'                                                                                                                                                                                                                                                                                    => [ 'type' => 'double', ],
		'__doubleMinNegative59Max0'                                                                                                                                                                                                                                                                                    => [ 'type' => 'double', ],
		'__doubleMinNegative60Max3'                                                                                                                                                                                                                                                                                    => [ 'type' => 'double', ],
		'__doubleMinNegative60MaxNegative1'                                                                                                                                                                                                                                                                            => [ 'type' => 'double', ],
		'__integer'                                                                                                                                                                                                                                                                                                    => [ 'type' => 'integer', ],
		'__integerMin0Max10'                                                                                                                                                                                                                                                                                           => [
			'type' => 'integer',
			'min'  => 0,
			'max'  => 10,
		],
		'__integerMin0Max100'                                                                                                                                                                                                                                                                                          => [
			'type' => 'integer',
			'min'  => 0,
			'max'  => 100,
		],
		'__integerMin0Max1000'                                                                                                                                                                                                                                                                                         => [
			'type' => 'integer',
			'min'  => 0,
			'max'  => 1000,
		],
		'__integerMin0Max10000'                                                                                                                                                                                                                                                                                        => [
			'type' => 'integer',
			'min'  => 0,
			'max'  => 10000,
		],
		'__integerMin0Max1152000000'                                                                                                                                                                                                                                                                                   => [
			'type' => 'integer',
			'min'  => 0,
			'max'  => 1152000000,
		],
		'__integerMin0Max128'                                                                                                                                                                                                                                                                                          => [
			'type' => 'integer',
			'min'  => 0,
			'max'  => 128,
		],
		'__integerMin0Max1466400000'                                                                                                                                                                                                                                                                                   => [
			'type' => 'integer',
			'min'  => 0,
			'max'  => 1466400000,
		],
		'__integerMin0Max15'                                                                                                                                                                                                                                                                                           => [
			'type' => 'integer',
			'min'  => 0,
			'max'  => 15,
		],
		'__integerMin0Max16'                                                                                                                                                                                                                                                                                           => [
			'type' => 'integer',
			'min'  => 0,
			'max'  => 16,
		],
		'__integerMin0Max2147483647'                                                                                                                                                                                                                                                                                   => [
			'type' => 'integer',
			'min'  => 0,
			'max'  => 2147483647,
		],
		'__integerMin0Max255'                                                                                                                                                                                                                                                                                          => [
			'type' => 'integer',
			'min'  => 0,
			'max'  => 255,
		],
		'__integerMin0Max3'                                                                                                                                                                                                                                                                                            => [
			'type' => 'integer',
			'min'  => 0,
			'max'  => 3,
		],
		'__integerMin0Max30'                                                                                                                                                                                                                                                                                           => [
			'type' => 'integer',
			'min'  => 0,
			'max'  => 30,
		],
		'__integerMin0Max30000'                                                                                                                                                                                                                                                                                        => [
			'type' => 'integer',
			'min'  => 0,
			'max'  => 30000,
		],
		'__integerMin0Max3600'                                                                                                                                                                                                                                                                                         => [
			'type' => 'integer',
			'min'  => 0,
			'max'  => 3600,
		],
		'__integerMin0Max47185920'                                                                                                                                                                                                                                                                                     => [
			'type' => 'integer',
			'min'  => 0,
			'max'  => 47185920,
		],
		'__integerMin0Max500'                                                                                                                                                                                                                                                                                          => [
			'type' => 'integer',
			'min'  => 0,
			'max'  => 500,
		],
		'__integerMin0Max50000'                                                                                                                                                                                                                                                                                        => [
			'type' => 'integer',
			'min'  => 0,
			'max'  => 50000,
		],
		'__integerMin0Max65535'                                                                                                                                                                                                                                                                                        => [
			'type' => 'integer',
			'min'  => 0,
			'max'  => 65535,
		],
		'__integerMin0Max7'                                                                                                                                                                                                                                                                                            => [
			'type' => 'integer',
			'min'  => 0,
			'max'  => 7,
		],
		'__integerMin0Max8'                                                                                                                                                                                                                                                                                            => [
			'type' => 'integer',
			'min'  => 0,
			'max'  => 8,
		],
		'__integerMin0Max9'                                                                                                                                                                                                                                                                                            => [
			'type' => 'integer',
			'min'  => 0,
			'max'  => 9,
		],
		'__integerMin0Max96'                                                                                                                                                                                                                                                                                           => [
			'type' => 'integer',
			'min'  => 0,
			'max'  => 96,
		],
		'__integerMin0Max99'                                                                                                                                                                                                                                                                                           => [
			'type' => 'integer',
			'min'  => 0,
			'max'  => 99,
		],
		'__integerMin1000Max1152000000'                                                                                                                                                                                                                                                                                => [
			'type' => 'integer',
			'min'  => 1000,
			'max'  => 1152000000,
		],
		'__integerMin1000Max1466400000'                                                                                                                                                                                                                                                                                => [
			'type' => 'integer',
			'min'  => 1000,
			'max'  => 1466400000,
		],
		'__integerMin1000Max288000000'                                                                                                                                                                                                                                                                                 => [
			'type' => 'integer',
			'min'  => 1000,
			'max'  => 288000000,
		],
		'__integerMin1000Max30000'                                                                                                                                                                                                                                                                                     => [
			'type' => 'integer',
			'min'  => 1000,
			'max'  => 30000,
		],
		'__integerMin1000Max300000000'                                                                                                                                                                                                                                                                                 => [
			'type' => 'integer',
			'min'  => 1000,
			'max'  => 300000000,
		],
		'__integerMin10Max48'                                                                                                                                                                                                                                                                                          => [
			'type' => 'integer',
			'min'  => 10,
			'max'  => 48,
		],
		'__integerMin16Max24'                                                                                                                                                                                                                                                                                          => [
			'type' => 'integer',
			'min'  => 16,
			'max'  => 24,
		],
		'__integerMin1Max1'                                                                                                                                                                                                                                                                                            => [
			'type' => 'integer',
			'min'  => 1,
			'max'  => 1,
		],
		'__integerMin1Max10'                                                                                                                                                                                                                                                                                           => [
			'type' => 'integer',
			'min'  => 1,
			'max'  => 10,
		],
		'__integerMin1Max100'                                                                                                                                                                                                                                                                                          => [
			'type' => 'integer',
			'min'  => 1,
			'max'  => 100,
		],
		'__integerMin1Max10000000'                                                                                                                                                                                                                                                                                     => [
			'type' => 'integer',
			'min'  => 1,
			'max'  => 10000000,
		],
		'__integerMin1Max1001'                                                                                                                                                                                                                                                                                         => [
			'type' => 'integer',
			'min'  => 1,
			'max'  => 1001,
		],
		'__integerMin1Max16'                                                                                                                                                                                                                                                                                           => [
			'type' => 'integer',
			'min'  => 1,
			'max'  => 16,
		],
		'__integerMin1Max17895697'                                                                                                                                                                                                                                                                                     => [
			'type' => 'integer',
			'min'  => 1,
			'max'  => 17895697,
		],
		'__integerMin1Max2'                                                                                                                                                                                                                                                                                            => [
			'type' => 'integer',
			'min'  => 1,
			'max'  => 2,
		],
		'__integerMin1Max20'                                                                                                                                                                                                                                                                                           => [
			'type' => 'integer',
			'min'  => 1,
			'max'  => 20,
		],
		'__integerMin1Max2147483640'                                                                                                                                                                                                                                                                                   => [
			'type' => 'integer',
			'min'  => 1,
			'max'  => 2147483640,
		],
		'__integerMin1Max2147483647'                                                                                                                                                                                                                                                                                   => [
			'type' => 'integer',
			'min'  => 1,
			'max'  => 2147483647,
		],
		'__integerMin1Max31'                                                                                                                                                                                                                                                                                           => [
			'type' => 'integer',
			'min'  => 1,
			'max'  => 31,
		],
		'__integerMin1Max32'                                                                                                                                                                                                                                                                                           => [
			'type' => 'integer',
			'min'  => 1,
			'max'  => 32,
		],
		'__integerMin1Max4'                                                                                                                                                                                                                                                                                            => [
			'type' => 'integer',
			'min'  => 1,
			'max'  => 4,
		],
		'__integerMin1Max6'                                                                                                                                                                                                                                                                                            => [
			'type' => 'integer',
			'min'  => 1,
			'max'  => 6,
		],
		'__integerMin1Max8'                                                                                                                                                                                                                                                                                            => [
			'type' => 'integer',
			'min'  => 1,
			'max'  => 8,
		],
		'__integerMin24Max60000'                                                                                                                                                                                                                                                                                       => [
			'type' => 'integer',
			'min'  => 24,
			'max'  => 60000,
		],
		'__integerMin25Max10000'                                                                                                                                                                                                                                                                                       => [
			'type' => 'integer',
			'min'  => 25,
			'max'  => 10000,
		],
		'__integerMin25Max2000'                                                                                                                                                                                                                                                                                        => [
			'type' => 'integer',
			'min'  => 25,
			'max'  => 2000,
		],
		'__integerMin2Max2147483647'                                                                                                                                                                                                                                                                                   => [
			'type' => 'integer',
			'min'  => 2,
			'max'  => 2147483647,
		],
		'__integerMin32000Max384000'                                                                                                                                                                                                                                                                                   => [
			'type' => 'integer',
			'min'  => 32000,
			'max'  => 384000,
		],
		'__integerMin32000Max48000'                                                                                                                                                                                                                                                                                    => [
			'type' => 'integer',
			'min'  => 32000,
			'max'  => 48000,
		],
		'__integerMin32Max2160'                                                                                                                                                                                                                                                                                        => [
			'type' => 'integer',
			'min'  => 32,
			'max'  => 2160,
		],
		'__integerMin32Max4096'                                                                                                                                                                                                                                                                                        => [
			'type' => 'integer',
			'min'  => 32,
			'max'  => 4096,
		],
		'__integerMin32Max8182'                                                                                                                                                                                                                                                                                        => [
			'type' => 'integer',
			'min'  => 32,
			'max'  => 8182,
		],
		'__integerMin48000Max48000'                                                                                                                                                                                                                                                                                    => [
			'type' => 'integer',
			'min'  => 48000,
			'max'  => 48000,
		],
		'__integerMin6000Max1024000'                                                                                                                                                                                                                                                                                   => [
			'type' => 'integer',
			'min'  => 6000,
			'max'  => 1024000,
		],
		'__integerMin64000Max640000'                                                                                                                                                                                                                                                                                   => [
			'type' => 'integer',
			'min'  => 64000,
			'max'  => 640000,
		],
		'__integerMin8000Max192000'                                                                                                                                                                                                                                                                                    => [
			'type' => 'integer',
			'min'  => 8000,
			'max'  => 192000,
		],
		'__integerMin8000Max96000'                                                                                                                                                                                                                                                                                     => [
			'type' => 'integer',
			'min'  => 8000,
			'max'  => 96000,
		],
		'__integerMin96Max600'                                                                                                                                                                                                                                                                                         => [
			'type' => 'integer',
			'min'  => 96,
			'max'  => 600,
		],
		'__integerMinNegative1000Max1000'                                                                                                                                                                                                                                                                              => [
			'type' => 'integer',
			'min'  => - 1000,
			'max'  => 1000,
		],
		'__integerMinNegative180Max180'                                                                                                                                                                                                                                                                                => [
			'type' => 'integer',
			'min'  => - 180,
			'max'  => 180,
		],
		'__integerMinNegative2147483648Max2147483647'                                                                                                                                                                                                                                                                  => [
			'type' => 'integer',
			'min'  => - 2147483648,
			'max'  => 2147483647,
		],
		'__integerMinNegative2Max3'                                                                                                                                                                                                                                                                                    => [
			'type' => 'integer',
			'min'  => - 2,
			'max'  => 3,
		],
		'__integerMinNegative5Max5'                                                                                                                                                                                                                                                                                    => [
			'type' => 'integer',
			'min'  => - 5,
			'max'  => 5,
		],
		'__integerMinNegative60Max6'                                                                                                                                                                                                                                                                                   => [
			'type' => 'integer',
			'min'  => - 60,
			'max'  => 6,
		],
		'__integerMinNegative70Max0'                                                                                                                                                                                                                                                                                   => [
			'type' => 'integer',
			'min'  => - 70,
			'max'  => 0,
		],
		'__listOfAudioDescription'                                                                                                                                                                                                                                                                                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AudioDescription', ],
		],
		'__listOfCaptionDescription'                                                                                                                                                                                                                                                                                   => [
			'type'   => 'list',
			'member' => [ 'shape' => 'CaptionDescription', ],
		],
		'__listOfCaptionDescriptionPreset'                                                                                                                                                                                                                                                                             => [
			'type'   => 'list',
			'member' => [ 'shape' => 'CaptionDescriptionPreset', ],
		],
		'__listOfEndpoint'                                                                                                                                                                                                                                                                                             => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Endpoint', ],
		],
		'__listOfHlsAdMarkers'                                                                                                                                                                                                                                                                                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'HlsAdMarkers', ],
		],
		'__listOfHlsCaptionLanguageMapping'                                                                                                                                                                                                                                                                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'HlsCaptionLanguageMapping', ],
		],
		'__listOfId3Insertion'                                                                                                                                                                                                                                                                                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Id3Insertion', ],
		],
		'__listOfInput'                                                                                                                                                                                                                                                                                                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Input', ],
		],
		'__listOfInputClipping'                                                                                                                                                                                                                                                                                        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'InputClipping', ],
		],
		'__listOfInputTemplate'                                                                                                                                                                                                                                                                                        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'InputTemplate', ],
		],
		'__listOfInsertableImage'                                                                                                                                                                                                                                                                                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'InsertableImage', ],
		],
		'__listOfJob'                                                                                                                                                                                                                                                                                                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Job', ],
		],
		'__listOfJobTemplate'                                                                                                                                                                                                                                                                                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'JobTemplate', ],
		],
		'__listOfOutput'                                                                                                                                                                                                                                                                                               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Output', ],
		],
		'__listOfOutputChannelMapping'                                                                                                                                                                                                                                                                                 => [
			'type'   => 'list',
			'member' => [ 'shape' => 'OutputChannelMapping', ],
		],
		'__listOfOutputDetail'                                                                                                                                                                                                                                                                                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'OutputDetail', ],
		],
		'__listOfOutputGroup'                                                                                                                                                                                                                                                                                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'OutputGroup', ],
		],
		'__listOfOutputGroupDetail'                                                                                                                                                                                                                                                                                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'OutputGroupDetail', ],
		],
		'__listOfPreset'                                                                                                                                                                                                                                                                                               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Preset', ],
		],
		'__listOfQueue'                                                                                                                                                                                                                                                                                                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Queue', ],
		],
		'__listOf__integerMin1Max2147483647'                                                                                                                                                                                                                                                                           => [
			'type'   => 'list',
			'member' => [ 'shape' => '__integerMin1Max2147483647', ],
		],
		'__listOf__integerMin32Max8182'                                                                                                                                                                                                                                                                                => [
			'type'   => 'list',
			'member' => [ 'shape' => '__integerMin32Max8182', ],
		],
		'__listOf__integerMinNegative60Max6'                                                                                                                                                                                                                                                                           => [
			'type'   => 'list',
			'member' => [ 'shape' => '__integerMinNegative60Max6', ],
		],
		'__listOf__string'                                                                                                                                                                                                                                                                                             => [
			'type'   => 'list',
			'member' => [ 'shape' => '__string', ],
		],
		'__listOf__stringMin1'                                                                                                                                                                                                                                                                                         => [
			'type'   => 'list',
			'member' => [ 'shape' => '__stringMin1', ],
		],
		'__listOf__stringPattern09aFAF809aFAF409aFAF409aFAF409aFAF12'                                                                                                                                                                                                                                                  => [
			'type'   => 'list',
			'member' => [ 'shape' => '__stringPattern09aFAF809aFAF409aFAF409aFAF409aFAF12', ],
		],
		'__listOf__stringPatternS3ASSETMAPXml'                                                                                                                                                                                                                                                                         => [
			'type'   => 'list',
			'member' => [ 'shape' => '__stringPatternS3ASSETMAPXml', ],
		],
		'__long'                                                                                                                                                                                                                                                                                                       => [ 'type' => 'long', ],
		'__mapOfAudioSelector'                                                                                                                                                                                                                                                                                         => [
			'type'  => 'map',
			'key'   => [ 'shape' => '__string', ],
			'value' => [ 'shape' => 'AudioSelector', ],
		],
		'__mapOfAudioSelectorGroup'                                                                                                                                                                                                                                                                                    => [
			'type'  => 'map',
			'key'   => [ 'shape' => '__string', ],
			'value' => [ 'shape' => 'AudioSelectorGroup', ],
		],
		'__mapOfCaptionSelector'                                                                                                                                                                                                                                                                                       => [
			'type'  => 'map',
			'key'   => [ 'shape' => '__string', ],
			'value' => [ 'shape' => 'CaptionSelector', ],
		],
		'__mapOf__string'                                                                                                                                                                                                                                                                                              => [
			'type'  => 'map',
			'key'   => [ 'shape' => '__string', ],
			'value' => [ 'shape' => '__string', ],
		],
		'__string'                                                                                                                                                                                                                                                                                                     => [ 'type' => 'string', ],
		'__stringMin0'                                                                                                                                                                                                                                                                                                 => [
			'type' => 'string',
			'min'  => 0,
		],
		'__stringMin1'                                                                                                                                                                                                                                                                                                 => [
			'type' => 'string',
			'min'  => 1,
		],
		'__stringMin11Max11Pattern01D20305D205D'                                                                                                                                                                                                                                                                       => [
			'type'    => 'string',
			'min'     => 11,
			'max'     => 11,
			'pattern' => '^((([0-1]\\d)|(2[0-3]))(:[0-5]\\d){2}([:;][0-5]\\d))$',
		],
		'__stringMin14Max1285PatternS3Mov09Png'                                                                                                                                                                                                                                                                        => [
			'type'    => 'string',
			'min'     => 14,
			'max'     => 1285,
			'pattern' => '^(s3:\\/\\/)(.*)(\\.mov|[0-9]+\\.png)$',
		],
		'__stringMin14PatternS3BmpBMPPngPNG'                                                                                                                                                                                                                                                                           => [
			'type'    => 'string',
			'min'     => 14,
			'pattern' => '^(s3:\\/\\/)(.*?)\\.(bmp|BMP|png|PNG)$',
		],
		'__stringMin14PatternS3BmpBMPPngPNGTgaTGA'                                                                                                                                                                                                                                                                     => [
			'type'    => 'string',
			'min'     => 14,
			'pattern' => '^(s3:\\/\\/)(.*?)\\.(bmp|BMP|png|PNG|tga|TGA)$',
		],
		'__stringMin14PatternS3SccSCCTtmlTTMLDfxpDFXPStlSTLSrtSRTSmiSMI'                                                                                                                                                                                                                                               => [
			'type'    => 'string',
			'min'     => 14,
			'pattern' => '^(s3:\\/\\/)(.*?)\\.(scc|SCC|ttml|TTML|dfxp|DFXP|stl|STL|srt|SRT|smi|SMI)$',
		],
		'__stringMin16Max24PatternAZaZ0922AZaZ0916'                                                                                                                                                                                                                                                                    => [
			'type'    => 'string',
			'min'     => 16,
			'max'     => 24,
			'pattern' => '^[A-Za-z0-9+\\/]{22}==$|^[A-Za-z0-9+\\/]{16}$',
		],
		'__stringMin1Max256'                                                                                                                                                                                                                                                                                           => [
			'type' => 'string',
			'min'  => 1,
			'max'  => 256,
		],
		'__stringMin24Max512PatternAZaZ0902'                                                                                                                                                                                                                                                                           => [
			'type'    => 'string',
			'min'     => 24,
			'max'     => 512,
			'pattern' => '^[A-Za-z0-9+\\/]+={0,2}$',
		],
		'__stringMin32Max32Pattern09aFAF32'                                                                                                                                                                                                                                                                            => [
			'type'    => 'string',
			'min'     => 32,
			'max'     => 32,
			'pattern' => '^[0-9a-fA-F]{32}$',
		],
		'__stringMin3Max3Pattern1809aFAF09aEAE'                                                                                                                                                                                                                                                                        => [
			'type'    => 'string',
			'min'     => 3,
			'max'     => 3,
			'pattern' => '^[1-8][0-9a-fA-F][0-9a-eA-E]$',
		],
		'__stringMin3Max3PatternAZaZ3'                                                                                                                                                                                                                                                                                 => [
			'type'    => 'string',
			'min'     => 3,
			'max'     => 3,
			'pattern' => '^[A-Za-z]{3}$',
		],
		'__stringMin9Max19PatternAZ26EastWestCentralNorthSouthEastWest1912'                                                                                                                                                                                                                                            => [
			'type'    => 'string',
			'min'     => 9,
			'max'     => 19,
			'pattern' => '^[a-z-]{2,6}-(east|west|central|((north|south)(east|west)?))-[1-9]{1,2}$',
		],
		'__stringPattern'                                                                                                                                                                                                                                                                                              => [
			'type'    => 'string',
			'pattern' => '^[ -~]+$',
		],
		'__stringPattern010920405090509092'                                                                                                                                                                                                                                                                            => [
			'type'    => 'string',
			'pattern' => '^([01][0-9]|2[0-4]):[0-5][0-9]:[0-5][0-9][:;][0-9]{2}$',
		],
		'__stringPattern01D20305D205D'                                                                                                                                                                                                                                                                                 => [
			'type'    => 'string',
			'pattern' => '^((([0-1]\\d)|(2[0-3]))(:[0-5]\\d){2}([:;][0-5]\\d))$',
		],
		'__stringPattern0940191020191209301'                                                                                                                                                                                                                                                                           => [
			'type'    => 'string',
			'pattern' => '^([0-9]{4})-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])$',
		],
		'__stringPattern09aFAF809aFAF409aFAF409aFAF409aFAF12'                                                                                                                                                                                                                                                          => [
			'type'    => 'string',
			'pattern' => '^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$',
		],
		'__stringPatternAZaZ0902'                                                                                                                                                                                                                                                                                      => [
			'type'    => 'string',
			'pattern' => '^[A-Za-z0-9+\\/]+={0,2}$',
		],
		'__stringPatternAZaZ0932'                                                                                                                                                                                                                                                                                      => [
			'type'    => 'string',
			'pattern' => '^[A-Za-z0-9]{32}$',
		],
		'__stringPatternArnAwsUsGovAcm'                                                                                                                                                                                                                                                                                => [
			'type'    => 'string',
			'pattern' => '^arn:aws(-us-gov)?:acm:',
		],
		'__stringPatternArnAwsUsGovKmsAZ26EastWestCentralNorthSouthEastWest1912D12KeyAFAF098AFAF094AFAF094AFAF094AFAF0912'                                                                                                                                                                                             => [
			'type'    => 'string',
			'pattern' => '^arn:aws(-us-gov)?:kms:[a-z-]{2,6}-(east|west|central|((north|south)(east|west)?))-[1-9]{1,2}:\\d{12}:key/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$',
		],
		'__stringPatternDD'                                                                                                                                                                                                                                                                                            => [
			'type'    => 'string',
			'pattern' => '^(\\d+(\\/\\d+)*)$',
		],
		'__stringPatternHttps'                                                                                                                                                                                                                                                                                         => [
			'type'    => 'string',
			'pattern' => '^https:\\/\\/',
		],
		'__stringPatternIdentityAZaZ26AZaZ09163'                                                                                                                                                                                                                                                                       => [
			'type'    => 'string',
			'pattern' => '^(identity|[A-Za-z]{2,6}(\\.[A-Za-z0-9-]{1,63})+)$',
		],
		'__stringPatternS3'                                                                                                                                                                                                                                                                                            => [
			'type'    => 'string',
			'pattern' => '^s3:\\/\\/',
		],
		'__stringPatternS3ASSETMAPXml'                                                                                                                                                                                                                                                                                 => [
			'type'    => 'string',
			'pattern' => '^s3:\\/\\/.*\\/(ASSETMAP.xml)?$',
		],
		'__stringPatternS3MM2VVMMPPEEGGAAVVIIMMPP4FFLLVVMMPPTTMMPPGGMM4VVTTRRPPFF4VVMM2TTSSTTSS264HH264MMKKVVMMOOVVMMTTSSMM2TTWWMMVVAASSFFVVOOBB3GGPP3GGPPPPMMXXFFDDIIVVXXXXVVIIDDRRAAWWDDVVGGXXFFMM1VV3GG2VVMMFFMM3UU8LLCCHHGGXXFFMMPPEEGG2MMXXFFMMPPEEGG2MMXXFFHHDDWWAAVVYY4MMAAAACCAAIIFFFFMMPP2AACC3EECC3DDTTSSEE' => [
			'type'    => 'string',
			'pattern' => '^(s3:\\/\\/)([^\\/]+\\/)+([^\\/\\.]+|(([^\\/]*)\\.([mM]2[vV]|[mM][pP][eE][gG]|[aA][vV][iI]|[mM][pP]4|[fF][lL][vV]|[mM][pP][tT]|[mM][pP][gG]|[mM]4[vV]|[tT][rR][pP]|[fF]4[vV]|[mM]2[tT][sS]|[tT][sS]|264|[hH]264|[mM][kK][vV]|[mM][oO][vV]|[mM][tT][sS]|[mM]2[tT]|[wW][mM][vV]|[aA][sS][fF]|[vV][oO][bB]|3[gG][pP]|3[gG][pP][pP]|[mM][xX][fF]|[dD][iI][vV][xX]|[xX][vV][iI][dD]|[rR][aA][wW]|[dD][vV]|[gG][xX][fF]|[mM]1[vV]|3[gG]2|[vV][mM][fF]|[mM]3[uU]8|[lL][cC][hH]|[gG][xX][fF]_[mM][pP][eE][gG]2|[mM][xX][fF]_[mM][pP][eE][gG]2|[mM][xX][fF][hH][dD]|[wW][aA][vV]|[yY]4[mM]|[aA][aA][cC]|[aA][iI][fF][fF]|[mM][pP]2|[aA][cC]3|[eE][cC]3|[dD][tT][sS][eE])))$',
		],
		'__stringPatternS3MM2VVMMPPEEGGAAVVIIMMPP4FFLLVVMMPPTTMMPPGGMM4VVTTRRPPFF4VVMM2TTSSTTSS264HH264MMKKVVMMOOVVMMTTSSMM2TTWWMMVVAASSFFVVOOBB3GGPP3GGPPPPMMXXFFDDIIVVXXXXVVIIDDRRAAWWDDVVGGXXFFMM1VV3GG2VVMMFFMM3UU8LLCCHHGGXXFFMMPPEEGG2MMXXFFMMPPEEGG2MMXXFFHHDDWWAAVVYY4MMXXMMLL'                                => [
			'type'    => 'string',
			'pattern' => '^(s3:\\/\\/)([^\\/]+\\/)+([^\\/\\.]+|(([^\\/]*)\\.([mM]2[vV]|[mM][pP][eE][gG]|[aA][vV][iI]|[mM][pP]4|[fF][lL][vV]|[mM][pP][tT]|[mM][pP][gG]|[mM]4[vV]|[tT][rR][pP]|[fF]4[vV]|[mM]2[tT][sS]|[tT][sS]|264|[hH]264|[mM][kK][vV]|[mM][oO][vV]|[mM][tT][sS]|[mM]2[tT]|[wW][mM][vV]|[aA][sS][fF]|[vV][oO][bB]|3[gG][pP]|3[gG][pP][pP]|[mM][xX][fF]|[dD][iI][vV][xX]|[xX][vV][iI][dD]|[rR][aA][wW]|[dD][vV]|[gG][xX][fF]|[mM]1[vV]|3[gG]2|[vV][mM][fF]|[mM]3[uU]8|[lL][cC][hH]|[gG][xX][fF]_[mM][pP][eE][gG]2|[mM][xX][fF]_[mM][pP][eE][gG]2|[mM][xX][fF][hH][dD]|[wW][aA][vV]|[yY]4[mM]|[xX][mM][lL])))$',
		],
		'__stringPatternSNManifestConfirmConditionNotificationNS'                                                                                                                                                                                                                                                      => [
			'type'    => 'string',
			'pattern' => '^\\s*<(.|\\n)*ManifestConfirmConditionNotification(.|\\n)*>\\s*$',
		],
		'__stringPatternSNSignalProcessingNotificationNS'                                                                                                                                                                                                                                                              => [
			'type'    => 'string',
			'pattern' => '^\\s*<(.|\\n)*SignalProcessingNotification(.|\\n)*>\\s*$',
		],
		'__stringPatternWS'                                                                                                                                                                                                                                                                                            => [
			'type'    => 'string',
			'pattern' => '^[\\w\\s]*$',
		],
		'__timestampIso8601'                                                                                                                                                                                                                                                                                           => [
			'type'            => 'timestamp',
			'timestampFormat' => 'iso8601',
		],
		'__timestampUnix'                                                                                                                                                                                                                                                                                              => [
			'type'            => 'timestamp',
			'timestampFormat' => 'unixTimestamp',
		],
	],
];
