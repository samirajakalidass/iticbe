<?php
// This file was auto-generated from sdk-root/src/data/s3/2006-03-01/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'          => '2006-03-01',
		'checksumFormat'      => 'md5',
		'endpointPrefix'      => 's3',
		'globalEndpoint'      => 's3.amazonaws.com',
		'protocol'            => 'rest-xml',
		'serviceAbbreviation' => 'Amazon S3',
		'serviceFullName'     => 'Amazon Simple Storage Service',
		'serviceId'           => 'S3',
		'signatureVersion'    => 's3',
		'uid'                 => 's3-2006-03-01',
	],
	'operations' => [
		'AbortMultipartUpload'               => [
			'name'             => 'AbortMultipartUpload',
			'http'             => [
				'method'       => 'DELETE',
				'requestUri'   => '/{Bucket}/{Key+}',
				'responseCode' => 204,
			],
			'input'            => [ 'shape' => 'AbortMultipartUploadRequest', ],
			'output'           => [ 'shape' => 'AbortMultipartUploadOutput', ],
			'errors'           => [ [ 'shape' => 'NoSuchUpload', ], ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/mpUploadAbort.html',
		],
		'CompleteMultipartUpload'            => [
			'name'             => 'CompleteMultipartUpload',
			'http'             => [
				'method'     => 'POST',
				'requestUri' => '/{Bucket}/{Key+}',
			],
			'input'            => [ 'shape' => 'CompleteMultipartUploadRequest', ],
			'output'           => [ 'shape' => 'CompleteMultipartUploadOutput', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/mpUploadComplete.html',
		],
		'CopyObject'                         => [
			'name'             => 'CopyObject',
			'http'             => [ 'method' => 'PUT', 'requestUri' => '/{Bucket}/{Key+}', ],
			'input'            => [ 'shape' => 'CopyObjectRequest', ],
			'output'           => [ 'shape' => 'CopyObjectOutput', ],
			'errors'           => [ [ 'shape' => 'ObjectNotInActiveTierError', ], ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTObjectCOPY.html',
			'alias'            => 'PutObjectCopy',
		],
		'CreateBucket'                       => [
			'name'             => 'CreateBucket',
			'http'             => [ 'method' => 'PUT', 'requestUri' => '/{Bucket}', ],
			'input'            => [ 'shape' => 'CreateBucketRequest', ],
			'output'           => [ 'shape' => 'CreateBucketOutput', ],
			'errors'           => [
				[ 'shape' => 'BucketAlreadyExists', ],
				[ 'shape' => 'BucketAlreadyOwnedByYou', ],
			],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketPUT.html',
			'alias'            => 'PutBucket',
		],
		'CreateMultipartUpload'              => [
			'name'             => 'CreateMultipartUpload',
			'http'             => [
				'method'     => 'POST',
				'requestUri' => '/{Bucket}/{Key+}?uploads',
			],
			'input'            => [ 'shape' => 'CreateMultipartUploadRequest', ],
			'output'           => [ 'shape' => 'CreateMultipartUploadOutput', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/mpUploadInitiate.html',
			'alias'            => 'InitiateMultipartUpload',
		],
		'DeleteBucket'                       => [
			'name'             => 'DeleteBucket',
			'http'             => [
				'method'       => 'DELETE',
				'requestUri'   => '/{Bucket}',
				'responseCode' => 204,
			],
			'input'            => [ 'shape' => 'DeleteBucketRequest', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketDELETE.html',
		],
		'DeleteBucketAnalyticsConfiguration' => [
			'name'  => 'DeleteBucketAnalyticsConfiguration',
			'http'  => [
				'method'       => 'DELETE',
				'requestUri'   => '/{Bucket}?analytics',
				'responseCode' => 204,
			],
			'input' => [ 'shape' => 'DeleteBucketAnalyticsConfigurationRequest', ],
		],
		'DeleteBucketCors'                   => [
			'name'             => 'DeleteBucketCors',
			'http'             => [
				'method'       => 'DELETE',
				'requestUri'   => '/{Bucket}?cors',
				'responseCode' => 204,
			],
			'input'            => [ 'shape' => 'DeleteBucketCorsRequest', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketDELETEcors.html',
		],
		'DeleteBucketEncryption'             => [
			'name'  => 'DeleteBucketEncryption',
			'http'  => [
				'method'       => 'DELETE',
				'requestUri'   => '/{Bucket}?encryption',
				'responseCode' => 204,
			],
			'input' => [ 'shape' => 'DeleteBucketEncryptionRequest', ],
		],
		'DeleteBucketInventoryConfiguration' => [
			'name'  => 'DeleteBucketInventoryConfiguration',
			'http'  => [
				'method'       => 'DELETE',
				'requestUri'   => '/{Bucket}?inventory',
				'responseCode' => 204,
			],
			'input' => [ 'shape' => 'DeleteBucketInventoryConfigurationRequest', ],
		],
		'DeleteBucketLifecycle'              => [
			'name'             => 'DeleteBucketLifecycle',
			'http'             => [
				'method'       => 'DELETE',
				'requestUri'   => '/{Bucket}?lifecycle',
				'responseCode' => 204,
			],
			'input'            => [ 'shape' => 'DeleteBucketLifecycleRequest', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketDELETElifecycle.html',
		],
		'DeleteBucketMetricsConfiguration'   => [
			'name'  => 'DeleteBucketMetricsConfiguration',
			'http'  => [
				'method'       => 'DELETE',
				'requestUri'   => '/{Bucket}?metrics',
				'responseCode' => 204,
			],
			'input' => [ 'shape' => 'DeleteBucketMetricsConfigurationRequest', ],
		],
		'DeleteBucketPolicy'                 => [
			'name'             => 'DeleteBucketPolicy',
			'http'             => [
				'method'       => 'DELETE',
				'requestUri'   => '/{Bucket}?policy',
				'responseCode' => 204,
			],
			'input'            => [ 'shape' => 'DeleteBucketPolicyRequest', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketDELETEpolicy.html',
		],
		'DeleteBucketReplication'            => [
			'name'  => 'DeleteBucketReplication',
			'http'  => [
				'method'       => 'DELETE',
				'requestUri'   => '/{Bucket}?replication',
				'responseCode' => 204,
			],
			'input' => [ 'shape' => 'DeleteBucketReplicationRequest', ],
		],
		'DeleteBucketTagging'                => [
			'name'             => 'DeleteBucketTagging',
			'http'             => [
				'method'       => 'DELETE',
				'requestUri'   => '/{Bucket}?tagging',
				'responseCode' => 204,
			],
			'input'            => [ 'shape' => 'DeleteBucketTaggingRequest', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketDELETEtagging.html',
		],
		'DeleteBucketWebsite'                => [
			'name'             => 'DeleteBucketWebsite',
			'http'             => [
				'method'       => 'DELETE',
				'requestUri'   => '/{Bucket}?website',
				'responseCode' => 204,
			],
			'input'            => [ 'shape' => 'DeleteBucketWebsiteRequest', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketDELETEwebsite.html',
		],
		'DeleteObject'                       => [
			'name'             => 'DeleteObject',
			'http'             => [
				'method'       => 'DELETE',
				'requestUri'   => '/{Bucket}/{Key+}',
				'responseCode' => 204,
			],
			'input'            => [ 'shape' => 'DeleteObjectRequest', ],
			'output'           => [ 'shape' => 'DeleteObjectOutput', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTObjectDELETE.html',
		],
		'DeleteObjectTagging'                => [
			'name'   => 'DeleteObjectTagging',
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/{Bucket}/{Key+}?tagging',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'DeleteObjectTaggingRequest', ],
			'output' => [ 'shape' => 'DeleteObjectTaggingOutput', ],
		],
		'DeleteObjects'                      => [
			'name'             => 'DeleteObjects',
			'http'             => [
				'method'     => 'POST',
				'requestUri' => '/{Bucket}?delete',
			],
			'input'            => [ 'shape' => 'DeleteObjectsRequest', ],
			'output'           => [ 'shape' => 'DeleteObjectsOutput', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/multiobjectdeleteapi.html',
			'alias'            => 'DeleteMultipleObjects',
		],
		'DeletePublicAccessBlock'            => [
			'name'  => 'DeletePublicAccessBlock',
			'http'  => [
				'method'       => 'DELETE',
				'requestUri'   => '/{Bucket}?publicAccessBlock',
				'responseCode' => 204,
			],
			'input' => [ 'shape' => 'DeletePublicAccessBlockRequest', ],
		],
		'GetBucketAccelerateConfiguration'   => [
			'name'   => 'GetBucketAccelerateConfiguration',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}?accelerate',
			],
			'input'  => [ 'shape' => 'GetBucketAccelerateConfigurationRequest', ],
			'output' => [ 'shape' => 'GetBucketAccelerateConfigurationOutput', ],
		],
		'GetBucketAcl'                       => [
			'name'             => 'GetBucketAcl',
			'http'             => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}?acl',
			],
			'input'            => [ 'shape' => 'GetBucketAclRequest', ],
			'output'           => [ 'shape' => 'GetBucketAclOutput', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketGETacl.html',
		],
		'GetBucketAnalyticsConfiguration'    => [
			'name'   => 'GetBucketAnalyticsConfiguration',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}?analytics',
			],
			'input'  => [ 'shape' => 'GetBucketAnalyticsConfigurationRequest', ],
			'output' => [ 'shape' => 'GetBucketAnalyticsConfigurationOutput', ],
		],
		'GetBucketCors'                      => [
			'name'             => 'GetBucketCors',
			'http'             => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}?cors',
			],
			'input'            => [ 'shape' => 'GetBucketCorsRequest', ],
			'output'           => [ 'shape' => 'GetBucketCorsOutput', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketGETcors.html',
		],
		'GetBucketEncryption'                => [
			'name'   => 'GetBucketEncryption',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}?encryption',
			],
			'input'  => [ 'shape' => 'GetBucketEncryptionRequest', ],
			'output' => [ 'shape' => 'GetBucketEncryptionOutput', ],
		],
		'GetBucketInventoryConfiguration'    => [
			'name'   => 'GetBucketInventoryConfiguration',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}?inventory',
			],
			'input'  => [ 'shape' => 'GetBucketInventoryConfigurationRequest', ],
			'output' => [ 'shape' => 'GetBucketInventoryConfigurationOutput', ],
		],
		'GetBucketLifecycle'                 => [
			'name'             => 'GetBucketLifecycle',
			'http'             => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}?lifecycle',
			],
			'input'            => [ 'shape' => 'GetBucketLifecycleRequest', ],
			'output'           => [ 'shape' => 'GetBucketLifecycleOutput', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketGETlifecycle.html',
			'deprecated'       => true,
		],
		'GetBucketLifecycleConfiguration'    => [
			'name'   => 'GetBucketLifecycleConfiguration',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}?lifecycle',
			],
			'input'  => [ 'shape' => 'GetBucketLifecycleConfigurationRequest', ],
			'output' => [ 'shape' => 'GetBucketLifecycleConfigurationOutput', ],
		],
		'GetBucketLocation'                  => [
			'name'             => 'GetBucketLocation',
			'http'             => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}?location',
			],
			'input'            => [ 'shape' => 'GetBucketLocationRequest', ],
			'output'           => [ 'shape' => 'GetBucketLocationOutput', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketGETlocation.html',
		],
		'GetBucketLogging'                   => [
			'name'             => 'GetBucketLogging',
			'http'             => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}?logging',
			],
			'input'            => [ 'shape' => 'GetBucketLoggingRequest', ],
			'output'           => [ 'shape' => 'GetBucketLoggingOutput', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketGETlogging.html',
		],
		'GetBucketMetricsConfiguration'      => [
			'name'   => 'GetBucketMetricsConfiguration',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}?metrics',
			],
			'input'  => [ 'shape' => 'GetBucketMetricsConfigurationRequest', ],
			'output' => [ 'shape' => 'GetBucketMetricsConfigurationOutput', ],
		],
		'GetBucketNotification'              => [
			'name'             => 'GetBucketNotification',
			'http'             => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}?notification',
			],
			'input'            => [ 'shape' => 'GetBucketNotificationConfigurationRequest', ],
			'output'           => [ 'shape' => 'NotificationConfigurationDeprecated', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketGETnotification.html',
			'deprecated'       => true,
		],
		'GetBucketNotificationConfiguration' => [
			'name'   => 'GetBucketNotificationConfiguration',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}?notification',
			],
			'input'  => [ 'shape' => 'GetBucketNotificationConfigurationRequest', ],
			'output' => [ 'shape' => 'NotificationConfiguration', ],
		],
		'GetBucketPolicy'                    => [
			'name'             => 'GetBucketPolicy',
			'http'             => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}?policy',
			],
			'input'            => [ 'shape' => 'GetBucketPolicyRequest', ],
			'output'           => [ 'shape' => 'GetBucketPolicyOutput', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketGETpolicy.html',
		],
		'GetBucketPolicyStatus'              => [
			'name'   => 'GetBucketPolicyStatus',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}?policyStatus',
			],
			'input'  => [ 'shape' => 'GetBucketPolicyStatusRequest', ],
			'output' => [ 'shape' => 'GetBucketPolicyStatusOutput', ],
		],
		'GetBucketReplication'               => [
			'name'   => 'GetBucketReplication',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}?replication',
			],
			'input'  => [ 'shape' => 'GetBucketReplicationRequest', ],
			'output' => [ 'shape' => 'GetBucketReplicationOutput', ],
		],
		'GetBucketRequestPayment'            => [
			'name'             => 'GetBucketRequestPayment',
			'http'             => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}?requestPayment',
			],
			'input'            => [ 'shape' => 'GetBucketRequestPaymentRequest', ],
			'output'           => [ 'shape' => 'GetBucketRequestPaymentOutput', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTrequestPaymentGET.html',
		],
		'GetBucketTagging'                   => [
			'name'             => 'GetBucketTagging',
			'http'             => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}?tagging',
			],
			'input'            => [ 'shape' => 'GetBucketTaggingRequest', ],
			'output'           => [ 'shape' => 'GetBucketTaggingOutput', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketGETtagging.html',
		],
		'GetBucketVersioning'                => [
			'name'             => 'GetBucketVersioning',
			'http'             => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}?versioning',
			],
			'input'            => [ 'shape' => 'GetBucketVersioningRequest', ],
			'output'           => [ 'shape' => 'GetBucketVersioningOutput', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketGETversioningStatus.html',
		],
		'GetBucketWebsite'                   => [
			'name'             => 'GetBucketWebsite',
			'http'             => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}?website',
			],
			'input'            => [ 'shape' => 'GetBucketWebsiteRequest', ],
			'output'           => [ 'shape' => 'GetBucketWebsiteOutput', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketGETwebsite.html',
		],
		'GetObject'                          => [
			'name'             => 'GetObject',
			'http'             => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}/{Key+}',
			],
			'input'            => [ 'shape' => 'GetObjectRequest', ],
			'output'           => [ 'shape' => 'GetObjectOutput', ],
			'errors'           => [ [ 'shape' => 'NoSuchKey', ], ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTObjectGET.html',
		],
		'GetObjectAcl'                       => [
			'name'             => 'GetObjectAcl',
			'http'             => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}/{Key+}?acl',
			],
			'input'            => [ 'shape' => 'GetObjectAclRequest', ],
			'output'           => [ 'shape' => 'GetObjectAclOutput', ],
			'errors'           => [ [ 'shape' => 'NoSuchKey', ], ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTObjectGETacl.html',
		],
		'GetObjectLegalHold'                 => [
			'name'   => 'GetObjectLegalHold',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}/{Key+}?legal-hold',
			],
			'input'  => [ 'shape' => 'GetObjectLegalHoldRequest', ],
			'output' => [ 'shape' => 'GetObjectLegalHoldOutput', ],
		],
		'GetObjectLockConfiguration'         => [
			'name'   => 'GetObjectLockConfiguration',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}?object-lock',
			],
			'input'  => [ 'shape' => 'GetObjectLockConfigurationRequest', ],
			'output' => [ 'shape' => 'GetObjectLockConfigurationOutput', ],
		],
		'GetObjectRetention'                 => [
			'name'   => 'GetObjectRetention',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}/{Key+}?retention',
			],
			'input'  => [ 'shape' => 'GetObjectRetentionRequest', ],
			'output' => [ 'shape' => 'GetObjectRetentionOutput', ],
		],
		'GetObjectTagging'                   => [
			'name'   => 'GetObjectTagging',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}/{Key+}?tagging',
			],
			'input'  => [ 'shape' => 'GetObjectTaggingRequest', ],
			'output' => [ 'shape' => 'GetObjectTaggingOutput', ],
		],
		'GetObjectTorrent'                   => [
			'name'             => 'GetObjectTorrent',
			'http'             => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}/{Key+}?torrent',
			],
			'input'            => [ 'shape' => 'GetObjectTorrentRequest', ],
			'output'           => [ 'shape' => 'GetObjectTorrentOutput', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTObjectGETtorrent.html',
		],
		'GetPublicAccessBlock'               => [
			'name'   => 'GetPublicAccessBlock',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}?publicAccessBlock',
			],
			'input'  => [ 'shape' => 'GetPublicAccessBlockRequest', ],
			'output' => [ 'shape' => 'GetPublicAccessBlockOutput', ],
		],
		'HeadBucket'                         => [
			'name'             => 'HeadBucket',
			'http'             => [
				'method'     => 'HEAD',
				'requestUri' => '/{Bucket}',
			],
			'input'            => [ 'shape' => 'HeadBucketRequest', ],
			'errors'           => [ [ 'shape' => 'NoSuchBucket', ], ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketHEAD.html',
		],
		'HeadObject'                         => [
			'name'             => 'HeadObject',
			'http'             => [
				'method'     => 'HEAD',
				'requestUri' => '/{Bucket}/{Key+}',
			],
			'input'            => [ 'shape' => 'HeadObjectRequest', ],
			'output'           => [ 'shape' => 'HeadObjectOutput', ],
			'errors'           => [ [ 'shape' => 'NoSuchKey', ], ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTObjectHEAD.html',
		],
		'ListBucketAnalyticsConfigurations'  => [
			'name'   => 'ListBucketAnalyticsConfigurations',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}?analytics',
			],
			'input'  => [ 'shape' => 'ListBucketAnalyticsConfigurationsRequest', ],
			'output' => [ 'shape' => 'ListBucketAnalyticsConfigurationsOutput', ],
		],
		'ListBucketInventoryConfigurations'  => [
			'name'   => 'ListBucketInventoryConfigurations',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}?inventory',
			],
			'input'  => [ 'shape' => 'ListBucketInventoryConfigurationsRequest', ],
			'output' => [ 'shape' => 'ListBucketInventoryConfigurationsOutput', ],
		],
		'ListBucketMetricsConfigurations'    => [
			'name'   => 'ListBucketMetricsConfigurations',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}?metrics',
			],
			'input'  => [ 'shape' => 'ListBucketMetricsConfigurationsRequest', ],
			'output' => [ 'shape' => 'ListBucketMetricsConfigurationsOutput', ],
		],
		'ListBuckets'                        => [
			'name'             => 'ListBuckets',
			'http'             => [ 'method' => 'GET', 'requestUri' => '/', ],
			'output'           => [ 'shape' => 'ListBucketsOutput', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTServiceGET.html',
			'alias'            => 'GetService',
		],
		'ListMultipartUploads'               => [
			'name'             => 'ListMultipartUploads',
			'http'             => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}?uploads',
			],
			'input'            => [ 'shape' => 'ListMultipartUploadsRequest', ],
			'output'           => [ 'shape' => 'ListMultipartUploadsOutput', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/mpUploadListMPUpload.html',
		],
		'ListObjectVersions'                 => [
			'name'             => 'ListObjectVersions',
			'http'             => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}?versions',
			],
			'input'            => [ 'shape' => 'ListObjectVersionsRequest', ],
			'output'           => [ 'shape' => 'ListObjectVersionsOutput', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketGETVersion.html',
			'alias'            => 'GetBucketObjectVersions',
		],
		'ListObjects'                        => [
			'name'             => 'ListObjects',
			'http'             => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}',
			],
			'input'            => [ 'shape' => 'ListObjectsRequest', ],
			'output'           => [ 'shape' => 'ListObjectsOutput', ],
			'errors'           => [ [ 'shape' => 'NoSuchBucket', ], ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketGET.html',
			'alias'            => 'GetBucket',
		],
		'ListObjectsV2'                      => [
			'name'   => 'ListObjectsV2',
			'http'   => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}?list-type=2',
			],
			'input'  => [ 'shape' => 'ListObjectsV2Request', ],
			'output' => [ 'shape' => 'ListObjectsV2Output', ],
			'errors' => [ [ 'shape' => 'NoSuchBucket', ], ],
		],
		'ListParts'                          => [
			'name'             => 'ListParts',
			'http'             => [
				'method'     => 'GET',
				'requestUri' => '/{Bucket}/{Key+}',
			],
			'input'            => [ 'shape' => 'ListPartsRequest', ],
			'output'           => [ 'shape' => 'ListPartsOutput', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/mpUploadListParts.html',
		],
		'PutBucketAccelerateConfiguration'   => [
			'name'  => 'PutBucketAccelerateConfiguration',
			'http'  => [
				'method'     => 'PUT',
				'requestUri' => '/{Bucket}?accelerate',
			],
			'input' => [ 'shape' => 'PutBucketAccelerateConfigurationRequest', ],
		],
		'PutBucketAcl'                       => [
			'name'             => 'PutBucketAcl',
			'http'             => [
				'method'     => 'PUT',
				'requestUri' => '/{Bucket}?acl',
			],
			'input'            => [ 'shape' => 'PutBucketAclRequest', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketPUTacl.html',
		],
		'PutBucketAnalyticsConfiguration'    => [
			'name'  => 'PutBucketAnalyticsConfiguration',
			'http'  => [
				'method'     => 'PUT',
				'requestUri' => '/{Bucket}?analytics',
			],
			'input' => [ 'shape' => 'PutBucketAnalyticsConfigurationRequest', ],
		],
		'PutBucketCors'                      => [
			'name'             => 'PutBucketCors',
			'http'             => [
				'method'     => 'PUT',
				'requestUri' => '/{Bucket}?cors',
			],
			'input'            => [ 'shape' => 'PutBucketCorsRequest', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketPUTcors.html',
		],
		'PutBucketEncryption'                => [
			'name'  => 'PutBucketEncryption',
			'http'  => [
				'method'     => 'PUT',
				'requestUri' => '/{Bucket}?encryption',
			],
			'input' => [ 'shape' => 'PutBucketEncryptionRequest', ],
		],
		'PutBucketInventoryConfiguration'    => [
			'name'  => 'PutBucketInventoryConfiguration',
			'http'  => [
				'method'     => 'PUT',
				'requestUri' => '/{Bucket}?inventory',
			],
			'input' => [ 'shape' => 'PutBucketInventoryConfigurationRequest', ],
		],
		'PutBucketLifecycle'                 => [
			'name'             => 'PutBucketLifecycle',
			'http'             => [
				'method'     => 'PUT',
				'requestUri' => '/{Bucket}?lifecycle',
			],
			'input'            => [ 'shape' => 'PutBucketLifecycleRequest', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketPUTlifecycle.html',
			'deprecated'       => true,
		],
		'PutBucketLifecycleConfiguration'    => [
			'name'  => 'PutBucketLifecycleConfiguration',
			'http'  => [
				'method'     => 'PUT',
				'requestUri' => '/{Bucket}?lifecycle',
			],
			'input' => [ 'shape' => 'PutBucketLifecycleConfigurationRequest', ],
		],
		'PutBucketLogging'                   => [
			'name'             => 'PutBucketLogging',
			'http'             => [
				'method'     => 'PUT',
				'requestUri' => '/{Bucket}?logging',
			],
			'input'            => [ 'shape' => 'PutBucketLoggingRequest', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketPUTlogging.html',
		],
		'PutBucketMetricsConfiguration'      => [
			'name'  => 'PutBucketMetricsConfiguration',
			'http'  => [
				'method'     => 'PUT',
				'requestUri' => '/{Bucket}?metrics',
			],
			'input' => [ 'shape' => 'PutBucketMetricsConfigurationRequest', ],
		],
		'PutBucketNotification'              => [
			'name'             => 'PutBucketNotification',
			'http'             => [
				'method'     => 'PUT',
				'requestUri' => '/{Bucket}?notification',
			],
			'input'            => [ 'shape' => 'PutBucketNotificationRequest', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketPUTnotification.html',
			'deprecated'       => true,
		],
		'PutBucketNotificationConfiguration' => [
			'name'  => 'PutBucketNotificationConfiguration',
			'http'  => [
				'method'     => 'PUT',
				'requestUri' => '/{Bucket}?notification',
			],
			'input' => [ 'shape' => 'PutBucketNotificationConfigurationRequest', ],
		],
		'PutBucketPolicy'                    => [
			'name'             => 'PutBucketPolicy',
			'http'             => [
				'method'     => 'PUT',
				'requestUri' => '/{Bucket}?policy',
			],
			'input'            => [ 'shape' => 'PutBucketPolicyRequest', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketPUTpolicy.html',
		],
		'PutBucketReplication'               => [
			'name'  => 'PutBucketReplication',
			'http'  => [
				'method'     => 'PUT',
				'requestUri' => '/{Bucket}?replication',
			],
			'input' => [ 'shape' => 'PutBucketReplicationRequest', ],
		],
		'PutBucketRequestPayment'            => [
			'name'             => 'PutBucketRequestPayment',
			'http'             => [
				'method'     => 'PUT',
				'requestUri' => '/{Bucket}?requestPayment',
			],
			'input'            => [ 'shape' => 'PutBucketRequestPaymentRequest', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTrequestPaymentPUT.html',
		],
		'PutBucketTagging'                   => [
			'name'             => 'PutBucketTagging',
			'http'             => [
				'method'     => 'PUT',
				'requestUri' => '/{Bucket}?tagging',
			],
			'input'            => [ 'shape' => 'PutBucketTaggingRequest', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketPUTtagging.html',
		],
		'PutBucketVersioning'                => [
			'name'             => 'PutBucketVersioning',
			'http'             => [
				'method'     => 'PUT',
				'requestUri' => '/{Bucket}?versioning',
			],
			'input'            => [ 'shape' => 'PutBucketVersioningRequest', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketPUTVersioningStatus.html',
		],
		'PutBucketWebsite'                   => [
			'name'             => 'PutBucketWebsite',
			'http'             => [
				'method'     => 'PUT',
				'requestUri' => '/{Bucket}?website',
			],
			'input'            => [ 'shape' => 'PutBucketWebsiteRequest', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTBucketPUTwebsite.html',
		],
		'PutObject'                          => [
			'name'             => 'PutObject',
			'http'             => [
				'method'     => 'PUT',
				'requestUri' => '/{Bucket}/{Key+}',
			],
			'input'            => [ 'shape' => 'PutObjectRequest', ],
			'output'           => [ 'shape' => 'PutObjectOutput', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTObjectPUT.html',
		],
		'PutObjectAcl'                       => [
			'name'             => 'PutObjectAcl',
			'http'             => [
				'method'     => 'PUT',
				'requestUri' => '/{Bucket}/{Key+}?acl',
			],
			'input'            => [ 'shape' => 'PutObjectAclRequest', ],
			'output'           => [ 'shape' => 'PutObjectAclOutput', ],
			'errors'           => [ [ 'shape' => 'NoSuchKey', ], ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTObjectPUTacl.html',
		],
		'PutObjectLegalHold'                 => [
			'name'   => 'PutObjectLegalHold',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/{Bucket}/{Key+}?legal-hold',
			],
			'input'  => [ 'shape' => 'PutObjectLegalHoldRequest', ],
			'output' => [ 'shape' => 'PutObjectLegalHoldOutput', ],
		],
		'PutObjectLockConfiguration'         => [
			'name'   => 'PutObjectLockConfiguration',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/{Bucket}?object-lock',
			],
			'input'  => [ 'shape' => 'PutObjectLockConfigurationRequest', ],
			'output' => [ 'shape' => 'PutObjectLockConfigurationOutput', ],
		],
		'PutObjectRetention'                 => [
			'name'   => 'PutObjectRetention',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/{Bucket}/{Key+}?retention',
			],
			'input'  => [ 'shape' => 'PutObjectRetentionRequest', ],
			'output' => [ 'shape' => 'PutObjectRetentionOutput', ],
		],
		'PutObjectTagging'                   => [
			'name'   => 'PutObjectTagging',
			'http'   => [
				'method'     => 'PUT',
				'requestUri' => '/{Bucket}/{Key+}?tagging',
			],
			'input'  => [ 'shape' => 'PutObjectTaggingRequest', ],
			'output' => [ 'shape' => 'PutObjectTaggingOutput', ],
		],
		'PutPublicAccessBlock'               => [
			'name'  => 'PutPublicAccessBlock',
			'http'  => [
				'method'     => 'PUT',
				'requestUri' => '/{Bucket}?publicAccessBlock',
			],
			'input' => [ 'shape' => 'PutPublicAccessBlockRequest', ],
		],
		'RestoreObject'                      => [
			'name'             => 'RestoreObject',
			'http'             => [
				'method'     => 'POST',
				'requestUri' => '/{Bucket}/{Key+}?restore',
			],
			'input'            => [ 'shape' => 'RestoreObjectRequest', ],
			'output'           => [ 'shape' => 'RestoreObjectOutput', ],
			'errors'           => [ [ 'shape' => 'ObjectAlreadyInActiveTierError', ], ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/RESTObjectRestore.html',
			'alias'            => 'PostObjectRestore',
		],
		'SelectObjectContent'                => [
			'name'   => 'SelectObjectContent',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/{Bucket}/{Key+}?select&select-type=2',
			],
			'input'  => [
				'shape'        => 'SelectObjectContentRequest',
				'locationName' => 'SelectObjectContentRequest',
				'xmlNamespace' => [ 'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/', ],
			],
			'output' => [ 'shape' => 'SelectObjectContentOutput', ],
		],
		'UploadPart'                         => [
			'name'             => 'UploadPart',
			'http'             => [
				'method'     => 'PUT',
				'requestUri' => '/{Bucket}/{Key+}',
			],
			'input'            => [ 'shape' => 'UploadPartRequest', ],
			'output'           => [ 'shape' => 'UploadPartOutput', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/mpUploadUploadPart.html',
		],
		'UploadPartCopy'                     => [
			'name'             => 'UploadPartCopy',
			'http'             => [
				'method'     => 'PUT',
				'requestUri' => '/{Bucket}/{Key+}',
			],
			'input'            => [ 'shape' => 'UploadPartCopyRequest', ],
			'output'           => [ 'shape' => 'UploadPartCopyOutput', ],
			'documentationUrl' => 'http://docs.amazonwebservices.com/AmazonS3/latest/API/mpUploadUploadPartCopy.html',
		],
	],
	'shapes'     => [
		'AbortDate'                                 => [ 'type' => 'timestamp', ],
		'AbortIncompleteMultipartUpload'            => [
			'type'    => 'structure',
			'members' => [ 'DaysAfterInitiation' => [ 'shape' => 'DaysAfterInitiation', ], ],
		],
		'AbortMultipartUploadOutput'                => [
			'type'    => 'structure',
			'members' => [
				'RequestCharged' => [
					'shape'        => 'RequestCharged',
					'location'     => 'header',
					'locationName' => 'x-amz-request-charged',
				],
			],
		],
		'AbortMultipartUploadRequest'               => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Key', 'UploadId', ],
			'members'  => [
				'Bucket'       => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'Key'          => [
					'shape'        => 'ObjectKey',
					'location'     => 'uri',
					'locationName' => 'Key',
				],
				'UploadId'     => [
					'shape'        => 'MultipartUploadId',
					'location'     => 'querystring',
					'locationName' => 'uploadId',
				],
				'RequestPayer' => [
					'shape'        => 'RequestPayer',
					'location'     => 'header',
					'locationName' => 'x-amz-request-payer',
				],
			],
		],
		'AbortRuleId'                               => [ 'type' => 'string', ],
		'AccelerateConfiguration'                   => [
			'type'    => 'structure',
			'members' => [ 'Status' => [ 'shape' => 'BucketAccelerateStatus', ], ],
		],
		'AcceptRanges'                              => [ 'type' => 'string', ],
		'AccessControlPolicy'                       => [
			'type'    => 'structure',
			'members' => [
				'Grants' => [
					'shape'        => 'Grants',
					'locationName' => 'AccessControlList',
				],
				'Owner'  => [ 'shape' => 'Owner', ],
			],
		],
		'AccessControlTranslation'                  => [
			'type'     => 'structure',
			'required' => [ 'Owner', ],
			'members'  => [ 'Owner' => [ 'shape' => 'OwnerOverride', ], ],
		],
		'AccountId'                                 => [ 'type' => 'string', ],
		'AllowQuotedRecordDelimiter'                => [ 'type' => 'boolean', ],
		'AllowedHeader'                             => [ 'type' => 'string', ],
		'AllowedHeaders'                            => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'AllowedHeader', ],
			'flattened' => true,
		],
		'AllowedMethod'                             => [ 'type' => 'string', ],
		'AllowedMethods'                            => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'AllowedMethod', ],
			'flattened' => true,
		],
		'AllowedOrigin'                             => [ 'type' => 'string', ],
		'AllowedOrigins'                            => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'AllowedOrigin', ],
			'flattened' => true,
		],
		'AnalyticsAndOperator'                      => [
			'type'    => 'structure',
			'members' => [
				'Prefix' => [ 'shape' => 'Prefix', ],
				'Tags'   => [
					'shape'        => 'TagSet',
					'flattened'    => true,
					'locationName' => 'Tag',
				],
			],
		],
		'AnalyticsConfiguration'                    => [
			'type'     => 'structure',
			'required' => [ 'Id', 'StorageClassAnalysis', ],
			'members'  => [
				'Id'                   => [ 'shape' => 'AnalyticsId', ],
				'Filter'               => [ 'shape' => 'AnalyticsFilter', ],
				'StorageClassAnalysis' => [ 'shape' => 'StorageClassAnalysis', ],
			],
		],
		'AnalyticsConfigurationList'                => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'AnalyticsConfiguration', ],
			'flattened' => true,
		],
		'AnalyticsExportDestination'                => [
			'type'     => 'structure',
			'required' => [ 'S3BucketDestination', ],
			'members'  => [ 'S3BucketDestination' => [ 'shape' => 'AnalyticsS3BucketDestination', ], ],
		],
		'AnalyticsFilter'                           => [
			'type'    => 'structure',
			'members' => [
				'Prefix' => [ 'shape' => 'Prefix', ],
				'Tag'    => [ 'shape' => 'Tag', ],
				'And'    => [ 'shape' => 'AnalyticsAndOperator', ],
			],
		],
		'AnalyticsId'                               => [ 'type' => 'string', ],
		'AnalyticsS3BucketDestination'              => [
			'type'     => 'structure',
			'required' => [ 'Format', 'Bucket', ],
			'members'  => [
				'Format'          => [ 'shape' => 'AnalyticsS3ExportFileFormat', ],
				'BucketAccountId' => [ 'shape' => 'AccountId', ],
				'Bucket'          => [ 'shape' => 'BucketName', ],
				'Prefix'          => [ 'shape' => 'Prefix', ],
			],
		],
		'AnalyticsS3ExportFileFormat'               => [ 'type' => 'string', 'enum' => [ 'CSV', ], ],
		'Body'                                      => [ 'type' => 'blob', ],
		'Bucket'                                    => [
			'type'    => 'structure',
			'members' => [
				'Name'         => [ 'shape' => 'BucketName', ],
				'CreationDate' => [ 'shape' => 'CreationDate', ],
			],
		],
		'BucketAccelerateStatus'                    => [ 'type' => 'string', 'enum' => [ 'Enabled', 'Suspended', ], ],
		'BucketAlreadyExists'                       => [ 'type' => 'structure', 'members' => [], 'exception' => true, ],
		'BucketAlreadyOwnedByYou'                   => [ 'type' => 'structure', 'members' => [], 'exception' => true, ],
		'BucketCannedACL'                           => [
			'type' => 'string',
			'enum' => [
				'private',
				'public-read',
				'public-read-write',
				'authenticated-read',
			],
		],
		'BucketLifecycleConfiguration'              => [
			'type'     => 'structure',
			'required' => [ 'Rules', ],
			'members'  => [
				'Rules' => [
					'shape'        => 'LifecycleRules',
					'locationName' => 'Rule',
				],
			],
		],
		'BucketLocationConstraint'                  => [
			'type' => 'string',
			'enum' => [
				'EU',
				'eu-west-1',
				'us-west-1',
				'us-west-2',
				'ap-south-1',
				'ap-southeast-1',
				'ap-southeast-2',
				'ap-northeast-1',
				'sa-east-1',
				'cn-north-1',
				'eu-central-1',
			],
		],
		'BucketLoggingStatus'                       => [
			'type'    => 'structure',
			'members' => [ 'LoggingEnabled' => [ 'shape' => 'LoggingEnabled', ], ],
		],
		'BucketLogsPermission'                      => [
			'type' => 'string',
			'enum' => [ 'FULL_CONTROL', 'READ', 'WRITE', ],
		],
		'BucketName'                                => [ 'type' => 'string', ],
		'BucketVersioningStatus'                    => [ 'type' => 'string', 'enum' => [ 'Enabled', 'Suspended', ], ],
		'Buckets'                                   => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Bucket', 'locationName' => 'Bucket', ],
		],
		'BypassGovernanceRetention'                 => [ 'type' => 'boolean', ],
		'BytesProcessed'                            => [ 'type' => 'long', ],
		'BytesReturned'                             => [ 'type' => 'long', ],
		'BytesScanned'                              => [ 'type' => 'long', ],
		'CORSConfiguration'                         => [
			'type'     => 'structure',
			'required' => [ 'CORSRules', ],
			'members'  => [
				'CORSRules' => [
					'shape'        => 'CORSRules',
					'locationName' => 'CORSRule',
				],
			],
		],
		'CORSRule'                                  => [
			'type'     => 'structure',
			'required' => [ 'AllowedMethods', 'AllowedOrigins', ],
			'members'  => [
				'AllowedHeaders' => [
					'shape'        => 'AllowedHeaders',
					'locationName' => 'AllowedHeader',
				],
				'AllowedMethods' => [
					'shape'        => 'AllowedMethods',
					'locationName' => 'AllowedMethod',
				],
				'AllowedOrigins' => [
					'shape'        => 'AllowedOrigins',
					'locationName' => 'AllowedOrigin',
				],
				'ExposeHeaders'  => [
					'shape'        => 'ExposeHeaders',
					'locationName' => 'ExposeHeader',
				],
				'MaxAgeSeconds'  => [ 'shape' => 'MaxAgeSeconds', ],
			],
		],
		'CORSRules'                                 => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'CORSRule', ],
			'flattened' => true,
		],
		'CSVInput'                                  => [
			'type'    => 'structure',
			'members' => [
				'FileHeaderInfo'             => [ 'shape' => 'FileHeaderInfo', ],
				'Comments'                   => [ 'shape' => 'Comments', ],
				'QuoteEscapeCharacter'       => [ 'shape' => 'QuoteEscapeCharacter', ],
				'RecordDelimiter'            => [ 'shape' => 'RecordDelimiter', ],
				'FieldDelimiter'             => [ 'shape' => 'FieldDelimiter', ],
				'QuoteCharacter'             => [ 'shape' => 'QuoteCharacter', ],
				'AllowQuotedRecordDelimiter' => [ 'shape' => 'AllowQuotedRecordDelimiter', ],
			],
		],
		'CSVOutput'                                 => [
			'type'    => 'structure',
			'members' => [
				'QuoteFields'          => [ 'shape' => 'QuoteFields', ],
				'QuoteEscapeCharacter' => [ 'shape' => 'QuoteEscapeCharacter', ],
				'RecordDelimiter'      => [ 'shape' => 'RecordDelimiter', ],
				'FieldDelimiter'       => [ 'shape' => 'FieldDelimiter', ],
				'QuoteCharacter'       => [ 'shape' => 'QuoteCharacter', ],
			],
		],
		'CacheControl'                              => [ 'type' => 'string', ],
		'CloudFunction'                             => [ 'type' => 'string', ],
		'CloudFunctionConfiguration'                => [
			'type'    => 'structure',
			'members' => [
				'Id'             => [ 'shape' => 'NotificationId', ],
				'Event'          => [
					'shape'      => 'Event',
					'deprecated' => true,
				],
				'Events'         => [
					'shape'        => 'EventList',
					'locationName' => 'Event',
				],
				'CloudFunction'  => [ 'shape' => 'CloudFunction', ],
				'InvocationRole' => [ 'shape' => 'CloudFunctionInvocationRole', ],
			],
		],
		'CloudFunctionInvocationRole'               => [ 'type' => 'string', ],
		'Code'                                      => [ 'type' => 'string', ],
		'Comments'                                  => [ 'type' => 'string', ],
		'CommonPrefix'                              => [
			'type'    => 'structure',
			'members' => [ 'Prefix' => [ 'shape' => 'Prefix', ], ],
		],
		'CommonPrefixList'                          => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'CommonPrefix', ],
			'flattened' => true,
		],
		'CompleteMultipartUploadOutput'             => [
			'type'    => 'structure',
			'members' => [
				'Location'             => [ 'shape' => 'Location', ],
				'Bucket'               => [ 'shape' => 'BucketName', ],
				'Key'                  => [ 'shape' => 'ObjectKey', ],
				'Expiration'           => [
					'shape'        => 'Expiration',
					'location'     => 'header',
					'locationName' => 'x-amz-expiration',
				],
				'ETag'                 => [ 'shape' => 'ETag', ],
				'ServerSideEncryption' => [
					'shape'        => 'ServerSideEncryption',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption',
				],
				'VersionId'            => [
					'shape'        => 'ObjectVersionId',
					'location'     => 'header',
					'locationName' => 'x-amz-version-id',
				],
				'SSEKMSKeyId'          => [
					'shape'        => 'SSEKMSKeyId',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-aws-kms-key-id',
				],
				'RequestCharged'       => [
					'shape'        => 'RequestCharged',
					'location'     => 'header',
					'locationName' => 'x-amz-request-charged',
				],
			],
		],
		'CompleteMultipartUploadRequest'            => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Key', 'UploadId', ],
			'members'  => [
				'Bucket'          => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'Key'             => [
					'shape'        => 'ObjectKey',
					'location'     => 'uri',
					'locationName' => 'Key',
				],
				'MultipartUpload' => [
					'shape'        => 'CompletedMultipartUpload',
					'locationName' => 'CompleteMultipartUpload',
					'xmlNamespace' => [ 'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/', ],
				],
				'UploadId'        => [
					'shape'        => 'MultipartUploadId',
					'location'     => 'querystring',
					'locationName' => 'uploadId',
				],
				'RequestPayer'    => [
					'shape'        => 'RequestPayer',
					'location'     => 'header',
					'locationName' => 'x-amz-request-payer',
				],
			],
			'payload'  => 'MultipartUpload',
		],
		'CompletedMultipartUpload'                  => [
			'type'    => 'structure',
			'members' => [
				'Parts' => [
					'shape'        => 'CompletedPartList',
					'locationName' => 'Part',
				],
			],
		],
		'CompletedPart'                             => [
			'type'    => 'structure',
			'members' => [
				'ETag'       => [ 'shape' => 'ETag', ],
				'PartNumber' => [ 'shape' => 'PartNumber', ],
			],
		],
		'CompletedPartList'                         => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'CompletedPart', ],
			'flattened' => true,
		],
		'CompressionType'                           => [ 'type' => 'string', 'enum' => [ 'NONE', 'GZIP', 'BZIP2', ], ],
		'Condition'                                 => [
			'type'    => 'structure',
			'members' => [
				'HttpErrorCodeReturnedEquals' => [ 'shape' => 'HttpErrorCodeReturnedEquals', ],
				'KeyPrefixEquals'             => [ 'shape' => 'KeyPrefixEquals', ],
			],
		],
		'ConfirmRemoveSelfBucketAccess'             => [ 'type' => 'boolean', ],
		'ContentDisposition'                        => [ 'type' => 'string', ],
		'ContentEncoding'                           => [ 'type' => 'string', ],
		'ContentLanguage'                           => [ 'type' => 'string', ],
		'ContentLength'                             => [ 'type' => 'long', ],
		'ContentMD5'                                => [ 'type' => 'string', ],
		'ContentRange'                              => [ 'type' => 'string', ],
		'ContentType'                               => [ 'type' => 'string', ],
		'ContinuationEvent'                         => [ 'type' => 'structure', 'members' => [], 'event' => true, ],
		'CopyObjectOutput'                          => [
			'type'    => 'structure',
			'members' => [
				'CopyObjectResult'        => [ 'shape' => 'CopyObjectResult', ],
				'Expiration'              => [
					'shape'        => 'Expiration',
					'location'     => 'header',
					'locationName' => 'x-amz-expiration',
				],
				'CopySourceVersionId'     => [
					'shape'        => 'CopySourceVersionId',
					'location'     => 'header',
					'locationName' => 'x-amz-copy-source-version-id',
				],
				'VersionId'               => [
					'shape'        => 'ObjectVersionId',
					'location'     => 'header',
					'locationName' => 'x-amz-version-id',
				],
				'ServerSideEncryption'    => [
					'shape'        => 'ServerSideEncryption',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption',
				],
				'SSECustomerAlgorithm'    => [
					'shape'        => 'SSECustomerAlgorithm',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-algorithm',
				],
				'SSECustomerKeyMD5'       => [
					'shape'        => 'SSECustomerKeyMD5',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-key-MD5',
				],
				'SSEKMSKeyId'             => [
					'shape'        => 'SSEKMSKeyId',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-aws-kms-key-id',
				],
				'SSEKMSEncryptionContext' => [
					'shape'        => 'SSEKMSEncryptionContext',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-context',
				],
				'RequestCharged'          => [
					'shape'        => 'RequestCharged',
					'location'     => 'header',
					'locationName' => 'x-amz-request-charged',
				],
			],
			'payload' => 'CopyObjectResult',
		],
		'CopyObjectRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'CopySource', 'Key', ],
			'members'  => [
				'ACL'                            => [
					'shape'        => 'ObjectCannedACL',
					'location'     => 'header',
					'locationName' => 'x-amz-acl',
				],
				'Bucket'                         => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'CacheControl'                   => [
					'shape'        => 'CacheControl',
					'location'     => 'header',
					'locationName' => 'Cache-Control',
				],
				'ContentDisposition'             => [
					'shape'        => 'ContentDisposition',
					'location'     => 'header',
					'locationName' => 'Content-Disposition',
				],
				'ContentEncoding'                => [
					'shape'        => 'ContentEncoding',
					'location'     => 'header',
					'locationName' => 'Content-Encoding',
				],
				'ContentLanguage'                => [
					'shape'        => 'ContentLanguage',
					'location'     => 'header',
					'locationName' => 'Content-Language',
				],
				'ContentType'                    => [
					'shape'        => 'ContentType',
					'location'     => 'header',
					'locationName' => 'Content-Type',
				],
				'CopySource'                     => [
					'shape'        => 'CopySource',
					'location'     => 'header',
					'locationName' => 'x-amz-copy-source',
				],
				'CopySourceIfMatch'              => [
					'shape'        => 'CopySourceIfMatch',
					'location'     => 'header',
					'locationName' => 'x-amz-copy-source-if-match',
				],
				'CopySourceIfModifiedSince'      => [
					'shape'        => 'CopySourceIfModifiedSince',
					'location'     => 'header',
					'locationName' => 'x-amz-copy-source-if-modified-since',
				],
				'CopySourceIfNoneMatch'          => [
					'shape'        => 'CopySourceIfNoneMatch',
					'location'     => 'header',
					'locationName' => 'x-amz-copy-source-if-none-match',
				],
				'CopySourceIfUnmodifiedSince'    => [
					'shape'        => 'CopySourceIfUnmodifiedSince',
					'location'     => 'header',
					'locationName' => 'x-amz-copy-source-if-unmodified-since',
				],
				'Expires'                        => [
					'shape'        => 'Expires',
					'location'     => 'header',
					'locationName' => 'Expires',
				],
				'GrantFullControl'               => [
					'shape'        => 'GrantFullControl',
					'location'     => 'header',
					'locationName' => 'x-amz-grant-full-control',
				],
				'GrantRead'                      => [
					'shape'        => 'GrantRead',
					'location'     => 'header',
					'locationName' => 'x-amz-grant-read',
				],
				'GrantReadACP'                   => [
					'shape'        => 'GrantReadACP',
					'location'     => 'header',
					'locationName' => 'x-amz-grant-read-acp',
				],
				'GrantWriteACP'                  => [
					'shape'        => 'GrantWriteACP',
					'location'     => 'header',
					'locationName' => 'x-amz-grant-write-acp',
				],
				'Key'                            => [
					'shape'        => 'ObjectKey',
					'location'     => 'uri',
					'locationName' => 'Key',
				],
				'Metadata'                       => [
					'shape'        => 'Metadata',
					'location'     => 'headers',
					'locationName' => 'x-amz-meta-',
				],
				'MetadataDirective'              => [
					'shape'        => 'MetadataDirective',
					'location'     => 'header',
					'locationName' => 'x-amz-metadata-directive',
				],
				'TaggingDirective'               => [
					'shape'        => 'TaggingDirective',
					'location'     => 'header',
					'locationName' => 'x-amz-tagging-directive',
				],
				'ServerSideEncryption'           => [
					'shape'        => 'ServerSideEncryption',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption',
				],
				'StorageClass'                   => [
					'shape'        => 'StorageClass',
					'location'     => 'header',
					'locationName' => 'x-amz-storage-class',
				],
				'WebsiteRedirectLocation'        => [
					'shape'        => 'WebsiteRedirectLocation',
					'location'     => 'header',
					'locationName' => 'x-amz-website-redirect-location',
				],
				'SSECustomerAlgorithm'           => [
					'shape'        => 'SSECustomerAlgorithm',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-algorithm',
				],
				'SSECustomerKey'                 => [
					'shape'        => 'SSECustomerKey',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-key',
				],
				'SSECustomerKeyMD5'              => [
					'shape'        => 'SSECustomerKeyMD5',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-key-MD5',
				],
				'SSEKMSKeyId'                    => [
					'shape'        => 'SSEKMSKeyId',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-aws-kms-key-id',
				],
				'SSEKMSEncryptionContext'        => [
					'shape'        => 'SSEKMSEncryptionContext',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-context',
				],
				'CopySourceSSECustomerAlgorithm' => [
					'shape'        => 'CopySourceSSECustomerAlgorithm',
					'location'     => 'header',
					'locationName' => 'x-amz-copy-source-server-side-encryption-customer-algorithm',
				],
				'CopySourceSSECustomerKey'       => [
					'shape'        => 'CopySourceSSECustomerKey',
					'location'     => 'header',
					'locationName' => 'x-amz-copy-source-server-side-encryption-customer-key',
				],
				'CopySourceSSECustomerKeyMD5'    => [
					'shape'        => 'CopySourceSSECustomerKeyMD5',
					'location'     => 'header',
					'locationName' => 'x-amz-copy-source-server-side-encryption-customer-key-MD5',
				],
				'RequestPayer'                   => [
					'shape'        => 'RequestPayer',
					'location'     => 'header',
					'locationName' => 'x-amz-request-payer',
				],
				'Tagging'                        => [
					'shape'        => 'TaggingHeader',
					'location'     => 'header',
					'locationName' => 'x-amz-tagging',
				],
				'ObjectLockMode'                 => [
					'shape'        => 'ObjectLockMode',
					'location'     => 'header',
					'locationName' => 'x-amz-object-lock-mode',
				],
				'ObjectLockRetainUntilDate'      => [
					'shape'        => 'ObjectLockRetainUntilDate',
					'location'     => 'header',
					'locationName' => 'x-amz-object-lock-retain-until-date',
				],
				'ObjectLockLegalHoldStatus'      => [
					'shape'        => 'ObjectLockLegalHoldStatus',
					'location'     => 'header',
					'locationName' => 'x-amz-object-lock-legal-hold',
				],
			],
		],
		'CopyObjectResult'                          => [
			'type'    => 'structure',
			'members' => [
				'ETag'         => [ 'shape' => 'ETag', ],
				'LastModified' => [ 'shape' => 'LastModified', ],
			],
		],
		'CopyPartResult'                            => [
			'type'    => 'structure',
			'members' => [
				'ETag'         => [ 'shape' => 'ETag', ],
				'LastModified' => [ 'shape' => 'LastModified', ],
			],
		],
		'CopySource'                                => [ 'type' => 'string', 'pattern' => '\\/.+\\/.+', ],
		'CopySourceIfMatch'                         => [ 'type' => 'string', ],
		'CopySourceIfModifiedSince'                 => [ 'type' => 'timestamp', ],
		'CopySourceIfNoneMatch'                     => [ 'type' => 'string', ],
		'CopySourceIfUnmodifiedSince'               => [ 'type' => 'timestamp', ],
		'CopySourceRange'                           => [ 'type' => 'string', ],
		'CopySourceSSECustomerAlgorithm'            => [ 'type' => 'string', ],
		'CopySourceSSECustomerKey'                  => [ 'type' => 'string', 'sensitive' => true, ],
		'CopySourceSSECustomerKeyMD5'               => [ 'type' => 'string', ],
		'CopySourceVersionId'                       => [ 'type' => 'string', ],
		'CreateBucketConfiguration'                 => [
			'type'    => 'structure',
			'members' => [ 'LocationConstraint' => [ 'shape' => 'BucketLocationConstraint', ], ],
		],
		'CreateBucketOutput'                        => [
			'type'    => 'structure',
			'members' => [
				'Location' => [
					'shape'        => 'Location',
					'location'     => 'header',
					'locationName' => 'Location',
				],
			],
		],
		'CreateBucketRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'ACL'                        => [
					'shape'        => 'BucketCannedACL',
					'location'     => 'header',
					'locationName' => 'x-amz-acl',
				],
				'Bucket'                     => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'CreateBucketConfiguration'  => [
					'shape'        => 'CreateBucketConfiguration',
					'locationName' => 'CreateBucketConfiguration',
					'xmlNamespace' => [ 'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/', ],
				],
				'GrantFullControl'           => [
					'shape'        => 'GrantFullControl',
					'location'     => 'header',
					'locationName' => 'x-amz-grant-full-control',
				],
				'GrantRead'                  => [
					'shape'        => 'GrantRead',
					'location'     => 'header',
					'locationName' => 'x-amz-grant-read',
				],
				'GrantReadACP'               => [
					'shape'        => 'GrantReadACP',
					'location'     => 'header',
					'locationName' => 'x-amz-grant-read-acp',
				],
				'GrantWrite'                 => [
					'shape'        => 'GrantWrite',
					'location'     => 'header',
					'locationName' => 'x-amz-grant-write',
				],
				'GrantWriteACP'              => [
					'shape'        => 'GrantWriteACP',
					'location'     => 'header',
					'locationName' => 'x-amz-grant-write-acp',
				],
				'ObjectLockEnabledForBucket' => [
					'shape'        => 'ObjectLockEnabledForBucket',
					'location'     => 'header',
					'locationName' => 'x-amz-bucket-object-lock-enabled',
				],
			],
			'payload'  => 'CreateBucketConfiguration',
		],
		'CreateMultipartUploadOutput'               => [
			'type'    => 'structure',
			'members' => [
				'AbortDate'               => [
					'shape'        => 'AbortDate',
					'location'     => 'header',
					'locationName' => 'x-amz-abort-date',
				],
				'AbortRuleId'             => [
					'shape'        => 'AbortRuleId',
					'location'     => 'header',
					'locationName' => 'x-amz-abort-rule-id',
				],
				'Bucket'                  => [ 'shape' => 'BucketName', 'locationName' => 'Bucket', ],
				'Key'                     => [ 'shape' => 'ObjectKey', ],
				'UploadId'                => [ 'shape' => 'MultipartUploadId', ],
				'ServerSideEncryption'    => [
					'shape'        => 'ServerSideEncryption',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption',
				],
				'SSECustomerAlgorithm'    => [
					'shape'        => 'SSECustomerAlgorithm',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-algorithm',
				],
				'SSECustomerKeyMD5'       => [
					'shape'        => 'SSECustomerKeyMD5',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-key-MD5',
				],
				'SSEKMSKeyId'             => [
					'shape'        => 'SSEKMSKeyId',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-aws-kms-key-id',
				],
				'SSEKMSEncryptionContext' => [
					'shape'        => 'SSEKMSEncryptionContext',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-context',
				],
				'RequestCharged'          => [
					'shape'        => 'RequestCharged',
					'location'     => 'header',
					'locationName' => 'x-amz-request-charged',
				],
			],
		],
		'CreateMultipartUploadRequest'              => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Key', ],
			'members'  => [
				'ACL'                       => [
					'shape'        => 'ObjectCannedACL',
					'location'     => 'header',
					'locationName' => 'x-amz-acl',
				],
				'Bucket'                    => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'CacheControl'              => [
					'shape'        => 'CacheControl',
					'location'     => 'header',
					'locationName' => 'Cache-Control',
				],
				'ContentDisposition'        => [
					'shape'        => 'ContentDisposition',
					'location'     => 'header',
					'locationName' => 'Content-Disposition',
				],
				'ContentEncoding'           => [
					'shape'        => 'ContentEncoding',
					'location'     => 'header',
					'locationName' => 'Content-Encoding',
				],
				'ContentLanguage'           => [
					'shape'        => 'ContentLanguage',
					'location'     => 'header',
					'locationName' => 'Content-Language',
				],
				'ContentType'               => [
					'shape'        => 'ContentType',
					'location'     => 'header',
					'locationName' => 'Content-Type',
				],
				'Expires'                   => [
					'shape'        => 'Expires',
					'location'     => 'header',
					'locationName' => 'Expires',
				],
				'GrantFullControl'          => [
					'shape'        => 'GrantFullControl',
					'location'     => 'header',
					'locationName' => 'x-amz-grant-full-control',
				],
				'GrantRead'                 => [
					'shape'        => 'GrantRead',
					'location'     => 'header',
					'locationName' => 'x-amz-grant-read',
				],
				'GrantReadACP'              => [
					'shape'        => 'GrantReadACP',
					'location'     => 'header',
					'locationName' => 'x-amz-grant-read-acp',
				],
				'GrantWriteACP'             => [
					'shape'        => 'GrantWriteACP',
					'location'     => 'header',
					'locationName' => 'x-amz-grant-write-acp',
				],
				'Key'                       => [
					'shape'        => 'ObjectKey',
					'location'     => 'uri',
					'locationName' => 'Key',
				],
				'Metadata'                  => [
					'shape'        => 'Metadata',
					'location'     => 'headers',
					'locationName' => 'x-amz-meta-',
				],
				'ServerSideEncryption'      => [
					'shape'        => 'ServerSideEncryption',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption',
				],
				'StorageClass'              => [
					'shape'        => 'StorageClass',
					'location'     => 'header',
					'locationName' => 'x-amz-storage-class',
				],
				'WebsiteRedirectLocation'   => [
					'shape'        => 'WebsiteRedirectLocation',
					'location'     => 'header',
					'locationName' => 'x-amz-website-redirect-location',
				],
				'SSECustomerAlgorithm'      => [
					'shape'        => 'SSECustomerAlgorithm',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-algorithm',
				],
				'SSECustomerKey'            => [
					'shape'        => 'SSECustomerKey',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-key',
				],
				'SSECustomerKeyMD5'         => [
					'shape'        => 'SSECustomerKeyMD5',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-key-MD5',
				],
				'SSEKMSKeyId'               => [
					'shape'        => 'SSEKMSKeyId',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-aws-kms-key-id',
				],
				'SSEKMSEncryptionContext'   => [
					'shape'        => 'SSEKMSEncryptionContext',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-context',
				],
				'RequestPayer'              => [
					'shape'        => 'RequestPayer',
					'location'     => 'header',
					'locationName' => 'x-amz-request-payer',
				],
				'Tagging'                   => [
					'shape'        => 'TaggingHeader',
					'location'     => 'header',
					'locationName' => 'x-amz-tagging',
				],
				'ObjectLockMode'            => [
					'shape'        => 'ObjectLockMode',
					'location'     => 'header',
					'locationName' => 'x-amz-object-lock-mode',
				],
				'ObjectLockRetainUntilDate' => [
					'shape'        => 'ObjectLockRetainUntilDate',
					'location'     => 'header',
					'locationName' => 'x-amz-object-lock-retain-until-date',
				],
				'ObjectLockLegalHoldStatus' => [
					'shape'        => 'ObjectLockLegalHoldStatus',
					'location'     => 'header',
					'locationName' => 'x-amz-object-lock-legal-hold',
				],
			],
		],
		'CreationDate'                              => [ 'type' => 'timestamp', ],
		'Date'                                      => [ 'type' => 'timestamp', 'timestampFormat' => 'iso8601', ],
		'Days'                                      => [ 'type' => 'integer', ],
		'DaysAfterInitiation'                       => [ 'type' => 'integer', ],
		'DefaultRetention'                          => [
			'type'    => 'structure',
			'members' => [
				'Mode'  => [ 'shape' => 'ObjectLockRetentionMode', ],
				'Days'  => [ 'shape' => 'Days', ],
				'Years' => [ 'shape' => 'Years', ],
			],
		],
		'Delete'                                    => [
			'type'     => 'structure',
			'required' => [ 'Objects', ],
			'members'  => [
				'Objects' => [
					'shape'        => 'ObjectIdentifierList',
					'locationName' => 'Object',
				],
				'Quiet'   => [ 'shape' => 'Quiet', ],
			],
		],
		'DeleteBucketAnalyticsConfigurationRequest' => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Id', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'Id'     => [
					'shape'        => 'AnalyticsId',
					'location'     => 'querystring',
					'locationName' => 'id',
				],
			],
		],
		'DeleteBucketCorsRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
			],
		],
		'DeleteBucketEncryptionRequest'             => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
			],
		],
		'DeleteBucketInventoryConfigurationRequest' => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Id', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'Id'     => [
					'shape'        => 'InventoryId',
					'location'     => 'querystring',
					'locationName' => 'id',
				],
			],
		],
		'DeleteBucketLifecycleRequest'              => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
			],
		],
		'DeleteBucketMetricsConfigurationRequest'   => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Id', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'Id'     => [
					'shape'        => 'MetricsId',
					'location'     => 'querystring',
					'locationName' => 'id',
				],
			],
		],
		'DeleteBucketPolicyRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
			],
		],
		'DeleteBucketReplicationRequest'            => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
			],
		],
		'DeleteBucketRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
			],
		],
		'DeleteBucketTaggingRequest'                => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
			],
		],
		'DeleteBucketWebsiteRequest'                => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
			],
		],
		'DeleteMarker'                              => [ 'type' => 'boolean', ],
		'DeleteMarkerEntry'                         => [
			'type'    => 'structure',
			'members' => [
				'Owner'        => [ 'shape' => 'Owner', ],
				'Key'          => [ 'shape' => 'ObjectKey', ],
				'VersionId'    => [ 'shape' => 'ObjectVersionId', ],
				'IsLatest'     => [ 'shape' => 'IsLatest', ],
				'LastModified' => [ 'shape' => 'LastModified', ],
			],
		],
		'DeleteMarkerReplication'                   => [
			'type'    => 'structure',
			'members' => [ 'Status' => [ 'shape' => 'DeleteMarkerReplicationStatus', ], ],
		],
		'DeleteMarkerReplicationStatus'             => [ 'type' => 'string', 'enum' => [ 'Enabled', 'Disabled', ], ],
		'DeleteMarkerVersionId'                     => [ 'type' => 'string', ],
		'DeleteMarkers'                             => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'DeleteMarkerEntry', ],
			'flattened' => true,
		],
		'DeleteObjectOutput'                        => [
			'type'    => 'structure',
			'members' => [
				'DeleteMarker'   => [
					'shape'        => 'DeleteMarker',
					'location'     => 'header',
					'locationName' => 'x-amz-delete-marker',
				],
				'VersionId'      => [
					'shape'        => 'ObjectVersionId',
					'location'     => 'header',
					'locationName' => 'x-amz-version-id',
				],
				'RequestCharged' => [
					'shape'        => 'RequestCharged',
					'location'     => 'header',
					'locationName' => 'x-amz-request-charged',
				],
			],
		],
		'DeleteObjectRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Key', ],
			'members'  => [
				'Bucket'                    => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'Key'                       => [
					'shape'        => 'ObjectKey',
					'location'     => 'uri',
					'locationName' => 'Key',
				],
				'MFA'                       => [
					'shape'        => 'MFA',
					'location'     => 'header',
					'locationName' => 'x-amz-mfa',
				],
				'VersionId'                 => [
					'shape'        => 'ObjectVersionId',
					'location'     => 'querystring',
					'locationName' => 'versionId',
				],
				'RequestPayer'              => [
					'shape'        => 'RequestPayer',
					'location'     => 'header',
					'locationName' => 'x-amz-request-payer',
				],
				'BypassGovernanceRetention' => [
					'shape'        => 'BypassGovernanceRetention',
					'location'     => 'header',
					'locationName' => 'x-amz-bypass-governance-retention',
				],
			],
		],
		'DeleteObjectTaggingOutput'                 => [
			'type'    => 'structure',
			'members' => [
				'VersionId' => [
					'shape'        => 'ObjectVersionId',
					'location'     => 'header',
					'locationName' => 'x-amz-version-id',
				],
			],
		],
		'DeleteObjectTaggingRequest'                => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Key', ],
			'members'  => [
				'Bucket'    => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'Key'       => [
					'shape'        => 'ObjectKey',
					'location'     => 'uri',
					'locationName' => 'Key',
				],
				'VersionId' => [
					'shape'        => 'ObjectVersionId',
					'location'     => 'querystring',
					'locationName' => 'versionId',
				],
			],
		],
		'DeleteObjectsOutput'                       => [
			'type'    => 'structure',
			'members' => [
				'Deleted'        => [ 'shape' => 'DeletedObjects', ],
				'RequestCharged' => [
					'shape'        => 'RequestCharged',
					'location'     => 'header',
					'locationName' => 'x-amz-request-charged',
				],
				'Errors'         => [
					'shape'        => 'Errors',
					'locationName' => 'Error',
				],
			],
		],
		'DeleteObjectsRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Delete', ],
			'members'  => [
				'Bucket'                    => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'Delete'                    => [
					'shape'        => 'Delete',
					'locationName' => 'Delete',
					'xmlNamespace' => [ 'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/', ],
				],
				'MFA'                       => [
					'shape'        => 'MFA',
					'location'     => 'header',
					'locationName' => 'x-amz-mfa',
				],
				'RequestPayer'              => [
					'shape'        => 'RequestPayer',
					'location'     => 'header',
					'locationName' => 'x-amz-request-payer',
				],
				'BypassGovernanceRetention' => [
					'shape'        => 'BypassGovernanceRetention',
					'location'     => 'header',
					'locationName' => 'x-amz-bypass-governance-retention',
				],
			],
			'payload'  => 'Delete',
		],
		'DeletePublicAccessBlockRequest'            => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
			],
		],
		'DeletedObject'                             => [
			'type'    => 'structure',
			'members' => [
				'Key'                   => [ 'shape' => 'ObjectKey', ],
				'VersionId'             => [ 'shape' => 'ObjectVersionId', ],
				'DeleteMarker'          => [ 'shape' => 'DeleteMarker', ],
				'DeleteMarkerVersionId' => [ 'shape' => 'DeleteMarkerVersionId', ],
			],
		],
		'DeletedObjects'                            => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'DeletedObject', ],
			'flattened' => true,
		],
		'Delimiter'                                 => [ 'type' => 'string', ],
		'Description'                               => [ 'type' => 'string', ],
		'Destination'                               => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket'                   => [ 'shape' => 'BucketName', ],
				'Account'                  => [ 'shape' => 'AccountId', ],
				'StorageClass'             => [ 'shape' => 'StorageClass', ],
				'AccessControlTranslation' => [ 'shape' => 'AccessControlTranslation', ],
				'EncryptionConfiguration'  => [ 'shape' => 'EncryptionConfiguration', ],
			],
		],
		'DisplayName'                               => [ 'type' => 'string', ],
		'ETag'                                      => [ 'type' => 'string', ],
		'EmailAddress'                              => [ 'type' => 'string', ],
		'EnableRequestProgress'                     => [ 'type' => 'boolean', ],
		'EncodingType'                              => [ 'type' => 'string', 'enum' => [ 'url', ], ],
		'Encryption'                                => [
			'type'     => 'structure',
			'required' => [ 'EncryptionType', ],
			'members'  => [
				'EncryptionType' => [ 'shape' => 'ServerSideEncryption', ],
				'KMSKeyId'       => [ 'shape' => 'SSEKMSKeyId', ],
				'KMSContext'     => [ 'shape' => 'KMSContext', ],
			],
		],
		'EncryptionConfiguration'                   => [
			'type'    => 'structure',
			'members' => [ 'ReplicaKmsKeyID' => [ 'shape' => 'ReplicaKmsKeyID', ], ],
		],
		'EndEvent'                                  => [ 'type' => 'structure', 'members' => [], 'event' => true, ],
		'Error'                                     => [
			'type'    => 'structure',
			'members' => [
				'Key'       => [ 'shape' => 'ObjectKey', ],
				'VersionId' => [ 'shape' => 'ObjectVersionId', ],
				'Code'      => [ 'shape' => 'Code', ],
				'Message'   => [ 'shape' => 'Message', ],
			],
		],
		'ErrorDocument'                             => [
			'type'     => 'structure',
			'required' => [ 'Key', ],
			'members'  => [ 'Key' => [ 'shape' => 'ObjectKey', ], ],
		],
		'Errors'                                    => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'Error', ],
			'flattened' => true,
		],
		'Event'                                     => [
			'type' => 'string',
			'enum' => [
				's3:ReducedRedundancyLostObject',
				's3:ObjectCreated:*',
				's3:ObjectCreated:Put',
				's3:ObjectCreated:Post',
				's3:ObjectCreated:Copy',
				's3:ObjectCreated:CompleteMultipartUpload',
				's3:ObjectRemoved:*',
				's3:ObjectRemoved:Delete',
				's3:ObjectRemoved:DeleteMarkerCreated',
				's3:ObjectRestore:Post',
				's3:ObjectRestore:Completed',
			],
		],
		'EventList'                                 => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'Event', ],
			'flattened' => true,
		],
		'Expiration'                                => [ 'type' => 'string', ],
		'ExpirationStatus'                          => [ 'type' => 'string', 'enum' => [ 'Enabled', 'Disabled', ], ],
		'ExpiredObjectDeleteMarker'                 => [ 'type' => 'boolean', ],
		'Expires'                                   => [ 'type' => 'timestamp', ],
		'ExposeHeader'                              => [ 'type' => 'string', ],
		'ExposeHeaders'                             => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'ExposeHeader', ],
			'flattened' => true,
		],
		'Expression'                                => [ 'type' => 'string', ],
		'ExpressionType'                            => [ 'type' => 'string', 'enum' => [ 'SQL', ], ],
		'FetchOwner'                                => [ 'type' => 'boolean', ],
		'FieldDelimiter'                            => [ 'type' => 'string', ],
		'FileHeaderInfo'                            => [ 'type' => 'string', 'enum' => [ 'USE', 'IGNORE', 'NONE', ], ],
		'FilterRule'                                => [
			'type'    => 'structure',
			'members' => [
				'Name'  => [ 'shape' => 'FilterRuleName', ],
				'Value' => [ 'shape' => 'FilterRuleValue', ],
			],
		],
		'FilterRuleList'                            => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'FilterRule', ],
			'flattened' => true,
		],
		'FilterRuleName'                            => [ 'type' => 'string', 'enum' => [ 'prefix', 'suffix', ], ],
		'FilterRuleValue'                           => [ 'type' => 'string', ],
		'GetBucketAccelerateConfigurationOutput'    => [
			'type'    => 'structure',
			'members' => [ 'Status' => [ 'shape' => 'BucketAccelerateStatus', ], ],
		],
		'GetBucketAccelerateConfigurationRequest'   => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
			],
		],
		'GetBucketAclOutput'                        => [
			'type'    => 'structure',
			'members' => [
				'Owner'  => [ 'shape' => 'Owner', ],
				'Grants' => [
					'shape'        => 'Grants',
					'locationName' => 'AccessControlList',
				],
			],
		],
		'GetBucketAclRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
			],
		],
		'GetBucketAnalyticsConfigurationOutput'     => [
			'type'    => 'structure',
			'members' => [ 'AnalyticsConfiguration' => [ 'shape' => 'AnalyticsConfiguration', ], ],
			'payload' => 'AnalyticsConfiguration',
		],
		'GetBucketAnalyticsConfigurationRequest'    => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Id', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'Id'     => [
					'shape'        => 'AnalyticsId',
					'location'     => 'querystring',
					'locationName' => 'id',
				],
			],
		],
		'GetBucketCorsOutput'                       => [
			'type'    => 'structure',
			'members' => [
				'CORSRules' => [
					'shape'        => 'CORSRules',
					'locationName' => 'CORSRule',
				],
			],
		],
		'GetBucketCorsRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
			],
		],
		'GetBucketEncryptionOutput'                 => [
			'type'    => 'structure',
			'members' => [ 'ServerSideEncryptionConfiguration' => [ 'shape' => 'ServerSideEncryptionConfiguration', ], ],
			'payload' => 'ServerSideEncryptionConfiguration',
		],
		'GetBucketEncryptionRequest'                => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
			],
		],
		'GetBucketInventoryConfigurationOutput'     => [
			'type'    => 'structure',
			'members' => [ 'InventoryConfiguration' => [ 'shape' => 'InventoryConfiguration', ], ],
			'payload' => 'InventoryConfiguration',
		],
		'GetBucketInventoryConfigurationRequest'    => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Id', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'Id'     => [
					'shape'        => 'InventoryId',
					'location'     => 'querystring',
					'locationName' => 'id',
				],
			],
		],
		'GetBucketLifecycleConfigurationOutput'     => [
			'type'    => 'structure',
			'members' => [
				'Rules' => [
					'shape'        => 'LifecycleRules',
					'locationName' => 'Rule',
				],
			],
		],
		'GetBucketLifecycleConfigurationRequest'    => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
			],
		],
		'GetBucketLifecycleOutput'                  => [
			'type'    => 'structure',
			'members' => [
				'Rules' => [
					'shape'        => 'Rules',
					'locationName' => 'Rule',
				],
			],
		],
		'GetBucketLifecycleRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
			],
		],
		'GetBucketLocationOutput'                   => [
			'type'    => 'structure',
			'members' => [ 'LocationConstraint' => [ 'shape' => 'BucketLocationConstraint', ], ],
		],
		'GetBucketLocationRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
			],
		],
		'GetBucketLoggingOutput'                    => [
			'type'    => 'structure',
			'members' => [ 'LoggingEnabled' => [ 'shape' => 'LoggingEnabled', ], ],
		],
		'GetBucketLoggingRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
			],
		],
		'GetBucketMetricsConfigurationOutput'       => [
			'type'    => 'structure',
			'members' => [ 'MetricsConfiguration' => [ 'shape' => 'MetricsConfiguration', ], ],
			'payload' => 'MetricsConfiguration',
		],
		'GetBucketMetricsConfigurationRequest'      => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Id', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'Id'     => [
					'shape'        => 'MetricsId',
					'location'     => 'querystring',
					'locationName' => 'id',
				],
			],
		],
		'GetBucketNotificationConfigurationRequest' => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
			],
		],
		'GetBucketPolicyOutput'                     => [
			'type'    => 'structure',
			'members' => [ 'Policy' => [ 'shape' => 'Policy', ], ],
			'payload' => 'Policy',
		],
		'GetBucketPolicyRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
			],
		],
		'GetBucketPolicyStatusOutput'               => [
			'type'    => 'structure',
			'members' => [ 'PolicyStatus' => [ 'shape' => 'PolicyStatus', ], ],
			'payload' => 'PolicyStatus',
		],
		'GetBucketPolicyStatusRequest'              => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
			],
		],
		'GetBucketReplicationOutput'                => [
			'type'    => 'structure',
			'members' => [ 'ReplicationConfiguration' => [ 'shape' => 'ReplicationConfiguration', ], ],
			'payload' => 'ReplicationConfiguration',
		],
		'GetBucketReplicationRequest'               => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
			],
		],
		'GetBucketRequestPaymentOutput'             => [
			'type'    => 'structure',
			'members' => [ 'Payer' => [ 'shape' => 'Payer', ], ],
		],
		'GetBucketRequestPaymentRequest'            => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
			],
		],
		'GetBucketTaggingOutput'                    => [
			'type'     => 'structure',
			'required' => [ 'TagSet', ],
			'members'  => [ 'TagSet' => [ 'shape' => 'TagSet', ], ],
		],
		'GetBucketTaggingRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
			],
		],
		'GetBucketVersioningOutput'                 => [
			'type'    => 'structure',
			'members' => [
				'Status'    => [ 'shape' => 'BucketVersioningStatus', ],
				'MFADelete' => [
					'shape'        => 'MFADeleteStatus',
					'locationName' => 'MfaDelete',
				],
			],
		],
		'GetBucketVersioningRequest'                => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
			],
		],
		'GetBucketWebsiteOutput'                    => [
			'type'    => 'structure',
			'members' => [
				'RedirectAllRequestsTo' => [ 'shape' => 'RedirectAllRequestsTo', ],
				'IndexDocument'         => [ 'shape' => 'IndexDocument', ],
				'ErrorDocument'         => [ 'shape' => 'ErrorDocument', ],
				'RoutingRules'          => [ 'shape' => 'RoutingRules', ],
			],
		],
		'GetBucketWebsiteRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
			],
		],
		'GetObjectAclOutput'                        => [
			'type'    => 'structure',
			'members' => [
				'Owner'          => [ 'shape' => 'Owner', ],
				'Grants'         => [
					'shape'        => 'Grants',
					'locationName' => 'AccessControlList',
				],
				'RequestCharged' => [
					'shape'        => 'RequestCharged',
					'location'     => 'header',
					'locationName' => 'x-amz-request-charged',
				],
			],
		],
		'GetObjectAclRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Key', ],
			'members'  => [
				'Bucket'       => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'Key'          => [
					'shape'        => 'ObjectKey',
					'location'     => 'uri',
					'locationName' => 'Key',
				],
				'VersionId'    => [
					'shape'        => 'ObjectVersionId',
					'location'     => 'querystring',
					'locationName' => 'versionId',
				],
				'RequestPayer' => [
					'shape'        => 'RequestPayer',
					'location'     => 'header',
					'locationName' => 'x-amz-request-payer',
				],
			],
		],
		'GetObjectLegalHoldOutput'                  => [
			'type'    => 'structure',
			'members' => [ 'LegalHold' => [ 'shape' => 'ObjectLockLegalHold', ], ],
			'payload' => 'LegalHold',
		],
		'GetObjectLegalHoldRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Key', ],
			'members'  => [
				'Bucket'       => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'Key'          => [
					'shape'        => 'ObjectKey',
					'location'     => 'uri',
					'locationName' => 'Key',
				],
				'VersionId'    => [
					'shape'        => 'ObjectVersionId',
					'location'     => 'querystring',
					'locationName' => 'versionId',
				],
				'RequestPayer' => [
					'shape'        => 'RequestPayer',
					'location'     => 'header',
					'locationName' => 'x-amz-request-payer',
				],
			],
		],
		'GetObjectLockConfigurationOutput'          => [
			'type'    => 'structure',
			'members' => [ 'ObjectLockConfiguration' => [ 'shape' => 'ObjectLockConfiguration', ], ],
			'payload' => 'ObjectLockConfiguration',
		],
		'GetObjectLockConfigurationRequest'         => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
			],
		],
		'GetObjectOutput'                           => [
			'type'    => 'structure',
			'members' => [
				'Body'                      => [ 'shape' => 'Body', 'streaming' => true, ],
				'DeleteMarker'              => [
					'shape'        => 'DeleteMarker',
					'location'     => 'header',
					'locationName' => 'x-amz-delete-marker',
				],
				'AcceptRanges'              => [
					'shape'        => 'AcceptRanges',
					'location'     => 'header',
					'locationName' => 'accept-ranges',
				],
				'Expiration'                => [
					'shape'        => 'Expiration',
					'location'     => 'header',
					'locationName' => 'x-amz-expiration',
				],
				'Restore'                   => [
					'shape'        => 'Restore',
					'location'     => 'header',
					'locationName' => 'x-amz-restore',
				],
				'LastModified'              => [
					'shape'        => 'LastModified',
					'location'     => 'header',
					'locationName' => 'Last-Modified',
				],
				'ContentLength'             => [
					'shape'        => 'ContentLength',
					'location'     => 'header',
					'locationName' => 'Content-Length',
				],
				'ETag'                      => [ 'shape' => 'ETag', 'location' => 'header', 'locationName' => 'ETag', ],
				'MissingMeta'               => [
					'shape'        => 'MissingMeta',
					'location'     => 'header',
					'locationName' => 'x-amz-missing-meta',
				],
				'VersionId'                 => [
					'shape'        => 'ObjectVersionId',
					'location'     => 'header',
					'locationName' => 'x-amz-version-id',
				],
				'CacheControl'              => [
					'shape'        => 'CacheControl',
					'location'     => 'header',
					'locationName' => 'Cache-Control',
				],
				'ContentDisposition'        => [
					'shape'        => 'ContentDisposition',
					'location'     => 'header',
					'locationName' => 'Content-Disposition',
				],
				'ContentEncoding'           => [
					'shape'        => 'ContentEncoding',
					'location'     => 'header',
					'locationName' => 'Content-Encoding',
				],
				'ContentLanguage'           => [
					'shape'        => 'ContentLanguage',
					'location'     => 'header',
					'locationName' => 'Content-Language',
				],
				'ContentRange'              => [
					'shape'        => 'ContentRange',
					'location'     => 'header',
					'locationName' => 'Content-Range',
				],
				'ContentType'               => [
					'shape'        => 'ContentType',
					'location'     => 'header',
					'locationName' => 'Content-Type',
				],
				'Expires'                   => [
					'shape'        => 'Expires',
					'location'     => 'header',
					'locationName' => 'Expires',
				],
				'WebsiteRedirectLocation'   => [
					'shape'        => 'WebsiteRedirectLocation',
					'location'     => 'header',
					'locationName' => 'x-amz-website-redirect-location',
				],
				'ServerSideEncryption'      => [
					'shape'        => 'ServerSideEncryption',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption',
				],
				'Metadata'                  => [
					'shape'        => 'Metadata',
					'location'     => 'headers',
					'locationName' => 'x-amz-meta-',
				],
				'SSECustomerAlgorithm'      => [
					'shape'        => 'SSECustomerAlgorithm',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-algorithm',
				],
				'SSECustomerKeyMD5'         => [
					'shape'        => 'SSECustomerKeyMD5',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-key-MD5',
				],
				'SSEKMSKeyId'               => [
					'shape'        => 'SSEKMSKeyId',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-aws-kms-key-id',
				],
				'StorageClass'              => [
					'shape'        => 'StorageClass',
					'location'     => 'header',
					'locationName' => 'x-amz-storage-class',
				],
				'RequestCharged'            => [
					'shape'        => 'RequestCharged',
					'location'     => 'header',
					'locationName' => 'x-amz-request-charged',
				],
				'ReplicationStatus'         => [
					'shape'        => 'ReplicationStatus',
					'location'     => 'header',
					'locationName' => 'x-amz-replication-status',
				],
				'PartsCount'                => [
					'shape'        => 'PartsCount',
					'location'     => 'header',
					'locationName' => 'x-amz-mp-parts-count',
				],
				'TagCount'                  => [
					'shape'        => 'TagCount',
					'location'     => 'header',
					'locationName' => 'x-amz-tagging-count',
				],
				'ObjectLockMode'            => [
					'shape'        => 'ObjectLockMode',
					'location'     => 'header',
					'locationName' => 'x-amz-object-lock-mode',
				],
				'ObjectLockRetainUntilDate' => [
					'shape'        => 'ObjectLockRetainUntilDate',
					'location'     => 'header',
					'locationName' => 'x-amz-object-lock-retain-until-date',
				],
				'ObjectLockLegalHoldStatus' => [
					'shape'        => 'ObjectLockLegalHoldStatus',
					'location'     => 'header',
					'locationName' => 'x-amz-object-lock-legal-hold',
				],
			],
			'payload' => 'Body',
		],
		'GetObjectRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Key', ],
			'members'  => [
				'Bucket'                     => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'IfMatch'                    => [
					'shape'        => 'IfMatch',
					'location'     => 'header',
					'locationName' => 'If-Match',
				],
				'IfModifiedSince'            => [
					'shape'        => 'IfModifiedSince',
					'location'     => 'header',
					'locationName' => 'If-Modified-Since',
				],
				'IfNoneMatch'                => [
					'shape'        => 'IfNoneMatch',
					'location'     => 'header',
					'locationName' => 'If-None-Match',
				],
				'IfUnmodifiedSince'          => [
					'shape'        => 'IfUnmodifiedSince',
					'location'     => 'header',
					'locationName' => 'If-Unmodified-Since',
				],
				'Key'                        => [
					'shape'        => 'ObjectKey',
					'location'     => 'uri',
					'locationName' => 'Key',
				],
				'Range'                      => [
					'shape'        => 'Range',
					'location'     => 'header',
					'locationName' => 'Range',
				],
				'ResponseCacheControl'       => [
					'shape'        => 'ResponseCacheControl',
					'location'     => 'querystring',
					'locationName' => 'response-cache-control',
				],
				'ResponseContentDisposition' => [
					'shape'        => 'ResponseContentDisposition',
					'location'     => 'querystring',
					'locationName' => 'response-content-disposition',
				],
				'ResponseContentEncoding'    => [
					'shape'        => 'ResponseContentEncoding',
					'location'     => 'querystring',
					'locationName' => 'response-content-encoding',
				],
				'ResponseContentLanguage'    => [
					'shape'        => 'ResponseContentLanguage',
					'location'     => 'querystring',
					'locationName' => 'response-content-language',
				],
				'ResponseContentType'        => [
					'shape'        => 'ResponseContentType',
					'location'     => 'querystring',
					'locationName' => 'response-content-type',
				],
				'ResponseExpires'            => [
					'shape'        => 'ResponseExpires',
					'location'     => 'querystring',
					'locationName' => 'response-expires',
				],
				'VersionId'                  => [
					'shape'        => 'ObjectVersionId',
					'location'     => 'querystring',
					'locationName' => 'versionId',
				],
				'SSECustomerAlgorithm'       => [
					'shape'        => 'SSECustomerAlgorithm',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-algorithm',
				],
				'SSECustomerKey'             => [
					'shape'        => 'SSECustomerKey',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-key',
				],
				'SSECustomerKeyMD5'          => [
					'shape'        => 'SSECustomerKeyMD5',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-key-MD5',
				],
				'RequestPayer'               => [
					'shape'        => 'RequestPayer',
					'location'     => 'header',
					'locationName' => 'x-amz-request-payer',
				],
				'PartNumber'                 => [
					'shape'        => 'PartNumber',
					'location'     => 'querystring',
					'locationName' => 'partNumber',
				],
			],
		],
		'GetObjectRetentionOutput'                  => [
			'type'    => 'structure',
			'members' => [ 'Retention' => [ 'shape' => 'ObjectLockRetention', ], ],
			'payload' => 'Retention',
		],
		'GetObjectRetentionRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Key', ],
			'members'  => [
				'Bucket'       => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'Key'          => [
					'shape'        => 'ObjectKey',
					'location'     => 'uri',
					'locationName' => 'Key',
				],
				'VersionId'    => [
					'shape'        => 'ObjectVersionId',
					'location'     => 'querystring',
					'locationName' => 'versionId',
				],
				'RequestPayer' => [
					'shape'        => 'RequestPayer',
					'location'     => 'header',
					'locationName' => 'x-amz-request-payer',
				],
			],
		],
		'GetObjectTaggingOutput'                    => [
			'type'     => 'structure',
			'required' => [ 'TagSet', ],
			'members'  => [
				'VersionId' => [
					'shape'        => 'ObjectVersionId',
					'location'     => 'header',
					'locationName' => 'x-amz-version-id',
				],
				'TagSet'    => [ 'shape' => 'TagSet', ],
			],
		],
		'GetObjectTaggingRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Key', ],
			'members'  => [
				'Bucket'    => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'Key'       => [
					'shape'        => 'ObjectKey',
					'location'     => 'uri',
					'locationName' => 'Key',
				],
				'VersionId' => [
					'shape'        => 'ObjectVersionId',
					'location'     => 'querystring',
					'locationName' => 'versionId',
				],
			],
		],
		'GetObjectTorrentOutput'                    => [
			'type'    => 'structure',
			'members' => [
				'Body'           => [
					'shape'     => 'Body',
					'streaming' => true,
				],
				'RequestCharged' => [
					'shape'        => 'RequestCharged',
					'location'     => 'header',
					'locationName' => 'x-amz-request-charged',
				],
			],
			'payload' => 'Body',
		],
		'GetObjectTorrentRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Key', ],
			'members'  => [
				'Bucket'       => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'Key'          => [
					'shape'        => 'ObjectKey',
					'location'     => 'uri',
					'locationName' => 'Key',
				],
				'RequestPayer' => [
					'shape'        => 'RequestPayer',
					'location'     => 'header',
					'locationName' => 'x-amz-request-payer',
				],
			],
		],
		'GetPublicAccessBlockOutput'                => [
			'type'    => 'structure',
			'members' => [ 'PublicAccessBlockConfiguration' => [ 'shape' => 'PublicAccessBlockConfiguration', ], ],
			'payload' => 'PublicAccessBlockConfiguration',
		],
		'GetPublicAccessBlockRequest'               => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
			],
		],
		'GlacierJobParameters'                      => [
			'type'     => 'structure',
			'required' => [ 'Tier', ],
			'members'  => [ 'Tier' => [ 'shape' => 'Tier', ], ],
		],
		'Grant'                                     => [
			'type'    => 'structure',
			'members' => [
				'Grantee'    => [ 'shape' => 'Grantee', ],
				'Permission' => [ 'shape' => 'Permission', ],
			],
		],
		'GrantFullControl'                          => [ 'type' => 'string', ],
		'GrantRead'                                 => [ 'type' => 'string', ],
		'GrantReadACP'                              => [ 'type' => 'string', ],
		'GrantWrite'                                => [ 'type' => 'string', ],
		'GrantWriteACP'                             => [ 'type' => 'string', ],
		'Grantee'                                   => [
			'type'         => 'structure',
			'required'     => [ 'Type', ],
			'members'      => [
				'DisplayName'  => [ 'shape' => 'DisplayName', ],
				'EmailAddress' => [ 'shape' => 'EmailAddress', ],
				'ID'           => [ 'shape' => 'ID', ],
				'Type'         => [
					'shape'        => 'Type',
					'locationName' => 'xsi:type',
					'xmlAttribute' => true,
				],
				'URI'          => [ 'shape' => 'URI', ],
			],
			'xmlNamespace' => [
				'prefix' => 'xsi',
				'uri'    => 'http://www.w3.org/2001/XMLSchema-instance',
			],
		],
		'Grants'                                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Grant', 'locationName' => 'Grant', ],
		],
		'HeadBucketRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket' => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
			],
		],
		'HeadObjectOutput'                          => [
			'type'    => 'structure',
			'members' => [
				'DeleteMarker'              => [
					'shape'        => 'DeleteMarker',
					'location'     => 'header',
					'locationName' => 'x-amz-delete-marker',
				],
				'AcceptRanges'              => [
					'shape'        => 'AcceptRanges',
					'location'     => 'header',
					'locationName' => 'accept-ranges',
				],
				'Expiration'                => [
					'shape'        => 'Expiration',
					'location'     => 'header',
					'locationName' => 'x-amz-expiration',
				],
				'Restore'                   => [
					'shape'        => 'Restore',
					'location'     => 'header',
					'locationName' => 'x-amz-restore',
				],
				'LastModified'              => [
					'shape'        => 'LastModified',
					'location'     => 'header',
					'locationName' => 'Last-Modified',
				],
				'ContentLength'             => [
					'shape'        => 'ContentLength',
					'location'     => 'header',
					'locationName' => 'Content-Length',
				],
				'ETag'                      => [ 'shape' => 'ETag', 'location' => 'header', 'locationName' => 'ETag', ],
				'MissingMeta'               => [
					'shape'        => 'MissingMeta',
					'location'     => 'header',
					'locationName' => 'x-amz-missing-meta',
				],
				'VersionId'                 => [
					'shape'        => 'ObjectVersionId',
					'location'     => 'header',
					'locationName' => 'x-amz-version-id',
				],
				'CacheControl'              => [
					'shape'        => 'CacheControl',
					'location'     => 'header',
					'locationName' => 'Cache-Control',
				],
				'ContentDisposition'        => [
					'shape'        => 'ContentDisposition',
					'location'     => 'header',
					'locationName' => 'Content-Disposition',
				],
				'ContentEncoding'           => [
					'shape'        => 'ContentEncoding',
					'location'     => 'header',
					'locationName' => 'Content-Encoding',
				],
				'ContentLanguage'           => [
					'shape'        => 'ContentLanguage',
					'location'     => 'header',
					'locationName' => 'Content-Language',
				],
				'ContentType'               => [
					'shape'        => 'ContentType',
					'location'     => 'header',
					'locationName' => 'Content-Type',
				],
				'Expires'                   => [
					'shape'        => 'Expires',
					'location'     => 'header',
					'locationName' => 'Expires',
				],
				'WebsiteRedirectLocation'   => [
					'shape'        => 'WebsiteRedirectLocation',
					'location'     => 'header',
					'locationName' => 'x-amz-website-redirect-location',
				],
				'ServerSideEncryption'      => [
					'shape'        => 'ServerSideEncryption',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption',
				],
				'Metadata'                  => [
					'shape'        => 'Metadata',
					'location'     => 'headers',
					'locationName' => 'x-amz-meta-',
				],
				'SSECustomerAlgorithm'      => [
					'shape'        => 'SSECustomerAlgorithm',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-algorithm',
				],
				'SSECustomerKeyMD5'         => [
					'shape'        => 'SSECustomerKeyMD5',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-key-MD5',
				],
				'SSEKMSKeyId'               => [
					'shape'        => 'SSEKMSKeyId',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-aws-kms-key-id',
				],
				'StorageClass'              => [
					'shape'        => 'StorageClass',
					'location'     => 'header',
					'locationName' => 'x-amz-storage-class',
				],
				'RequestCharged'            => [
					'shape'        => 'RequestCharged',
					'location'     => 'header',
					'locationName' => 'x-amz-request-charged',
				],
				'ReplicationStatus'         => [
					'shape'        => 'ReplicationStatus',
					'location'     => 'header',
					'locationName' => 'x-amz-replication-status',
				],
				'PartsCount'                => [
					'shape'        => 'PartsCount',
					'location'     => 'header',
					'locationName' => 'x-amz-mp-parts-count',
				],
				'ObjectLockMode'            => [
					'shape'        => 'ObjectLockMode',
					'location'     => 'header',
					'locationName' => 'x-amz-object-lock-mode',
				],
				'ObjectLockRetainUntilDate' => [
					'shape'        => 'ObjectLockRetainUntilDate',
					'location'     => 'header',
					'locationName' => 'x-amz-object-lock-retain-until-date',
				],
				'ObjectLockLegalHoldStatus' => [
					'shape'        => 'ObjectLockLegalHoldStatus',
					'location'     => 'header',
					'locationName' => 'x-amz-object-lock-legal-hold',
				],
			],
		],
		'HeadObjectRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Key', ],
			'members'  => [
				'Bucket'               => [ 'shape' => 'BucketName', 'location' => 'uri', 'locationName' => 'Bucket', ],
				'IfMatch'              => [
					'shape'        => 'IfMatch',
					'location'     => 'header',
					'locationName' => 'If-Match',
				],
				'IfModifiedSince'      => [
					'shape'        => 'IfModifiedSince',
					'location'     => 'header',
					'locationName' => 'If-Modified-Since',
				],
				'IfNoneMatch'          => [
					'shape'        => 'IfNoneMatch',
					'location'     => 'header',
					'locationName' => 'If-None-Match',
				],
				'IfUnmodifiedSince'    => [
					'shape'        => 'IfUnmodifiedSince',
					'location'     => 'header',
					'locationName' => 'If-Unmodified-Since',
				],
				'Key'                  => [ 'shape' => 'ObjectKey', 'location' => 'uri', 'locationName' => 'Key', ],
				'Range'                => [ 'shape' => 'Range', 'location' => 'header', 'locationName' => 'Range', ],
				'VersionId'            => [
					'shape'        => 'ObjectVersionId',
					'location'     => 'querystring',
					'locationName' => 'versionId',
				],
				'SSECustomerAlgorithm' => [
					'shape'        => 'SSECustomerAlgorithm',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-algorithm',
				],
				'SSECustomerKey'       => [
					'shape'        => 'SSECustomerKey',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-key',
				],
				'SSECustomerKeyMD5'    => [
					'shape'        => 'SSECustomerKeyMD5',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-key-MD5',
				],
				'RequestPayer'         => [
					'shape'        => 'RequestPayer',
					'location'     => 'header',
					'locationName' => 'x-amz-request-payer',
				],
				'PartNumber'           => [
					'shape'        => 'PartNumber',
					'location'     => 'querystring',
					'locationName' => 'partNumber',
				],
			],
		],
		'HostName'                                  => [ 'type' => 'string', ],
		'HttpErrorCodeReturnedEquals'               => [ 'type' => 'string', ],
		'HttpRedirectCode'                          => [ 'type' => 'string', ],
		'ID'                                        => [ 'type' => 'string', ],
		'IfMatch'                                   => [ 'type' => 'string', ],
		'IfModifiedSince'                           => [ 'type' => 'timestamp', ],
		'IfNoneMatch'                               => [ 'type' => 'string', ],
		'IfUnmodifiedSince'                         => [ 'type' => 'timestamp', ],
		'IndexDocument'                             => [
			'type'     => 'structure',
			'required' => [ 'Suffix', ],
			'members'  => [ 'Suffix' => [ 'shape' => 'Suffix', ], ],
		],
		'Initiated'                                 => [ 'type' => 'timestamp', ],
		'Initiator'                                 => [
			'type'    => 'structure',
			'members' => [
				'ID'          => [ 'shape' => 'ID', ],
				'DisplayName' => [ 'shape' => 'DisplayName', ],
			],
		],
		'InputSerialization'                        => [
			'type'    => 'structure',
			'members' => [
				'CSV'             => [ 'shape' => 'CSVInput', ],
				'CompressionType' => [ 'shape' => 'CompressionType', ],
				'JSON'            => [ 'shape' => 'JSONInput', ],
				'Parquet'         => [ 'shape' => 'ParquetInput', ],
			],
		],
		'InventoryConfiguration'                    => [
			'type'     => 'structure',
			'required' => [
				'Destination',
				'IsEnabled',
				'Id',
				'IncludedObjectVersions',
				'Schedule',
			],
			'members'  => [
				'Destination'            => [ 'shape' => 'InventoryDestination', ],
				'IsEnabled'              => [ 'shape' => 'IsEnabled', ],
				'Filter'                 => [ 'shape' => 'InventoryFilter', ],
				'Id'                     => [ 'shape' => 'InventoryId', ],
				'IncludedObjectVersions' => [ 'shape' => 'InventoryIncludedObjectVersions', ],
				'OptionalFields'         => [ 'shape' => 'InventoryOptionalFields', ],
				'Schedule'               => [ 'shape' => 'InventorySchedule', ],
			],
		],
		'InventoryConfigurationList'                => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'InventoryConfiguration', ],
			'flattened' => true,
		],
		'InventoryDestination'                      => [
			'type'     => 'structure',
			'required' => [ 'S3BucketDestination', ],
			'members'  => [ 'S3BucketDestination' => [ 'shape' => 'InventoryS3BucketDestination', ], ],
		],
		'InventoryEncryption'                       => [
			'type'    => 'structure',
			'members' => [
				'SSES3'  => [
					'shape'        => 'SSES3',
					'locationName' => 'SSE-S3',
				],
				'SSEKMS' => [
					'shape'        => 'SSEKMS',
					'locationName' => 'SSE-KMS',
				],
			],
		],
		'InventoryFilter'                           => [
			'type'     => 'structure',
			'required' => [ 'Prefix', ],
			'members'  => [ 'Prefix' => [ 'shape' => 'Prefix', ], ],
		],
		'InventoryFormat'                           => [ 'type' => 'string', 'enum' => [ 'CSV', 'ORC', 'Parquet', ], ],
		'InventoryFrequency'                        => [ 'type' => 'string', 'enum' => [ 'Daily', 'Weekly', ], ],
		'InventoryId'                               => [ 'type' => 'string', ],
		'InventoryIncludedObjectVersions'           => [ 'type' => 'string', 'enum' => [ 'All', 'Current', ], ],
		'InventoryOptionalField'                    => [
			'type' => 'string',
			'enum' => [
				'Size',
				'LastModifiedDate',
				'StorageClass',
				'ETag',
				'IsMultipartUploaded',
				'ReplicationStatus',
				'EncryptionStatus',
				'ObjectLockRetainUntilDate',
				'ObjectLockMode',
				'ObjectLockLegalHoldStatus',
			],
		],
		'InventoryOptionalFields'                   => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'InventoryOptionalField',
				'locationName' => 'Field',
			],
		],
		'InventoryS3BucketDestination'              => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Format', ],
			'members'  => [
				'AccountId'  => [ 'shape' => 'AccountId', ],
				'Bucket'     => [ 'shape' => 'BucketName', ],
				'Format'     => [ 'shape' => 'InventoryFormat', ],
				'Prefix'     => [ 'shape' => 'Prefix', ],
				'Encryption' => [ 'shape' => 'InventoryEncryption', ],
			],
		],
		'InventorySchedule'                         => [
			'type'     => 'structure',
			'required' => [ 'Frequency', ],
			'members'  => [ 'Frequency' => [ 'shape' => 'InventoryFrequency', ], ],
		],
		'IsEnabled'                                 => [ 'type' => 'boolean', ],
		'IsLatest'                                  => [ 'type' => 'boolean', ],
		'IsPublic'                                  => [ 'type' => 'boolean', ],
		'IsTruncated'                               => [ 'type' => 'boolean', ],
		'JSONInput'                                 => [
			'type'    => 'structure',
			'members' => [ 'Type' => [ 'shape' => 'JSONType', ], ],
		],
		'JSONOutput'                                => [
			'type'    => 'structure',
			'members' => [ 'RecordDelimiter' => [ 'shape' => 'RecordDelimiter', ], ],
		],
		'JSONType'                                  => [ 'type' => 'string', 'enum' => [ 'DOCUMENT', 'LINES', ], ],
		'KMSContext'                                => [ 'type' => 'string', ],
		'KeyCount'                                  => [ 'type' => 'integer', ],
		'KeyMarker'                                 => [ 'type' => 'string', ],
		'KeyPrefixEquals'                           => [ 'type' => 'string', ],
		'LambdaFunctionArn'                         => [ 'type' => 'string', ],
		'LambdaFunctionConfiguration'               => [
			'type'     => 'structure',
			'required' => [ 'LambdaFunctionArn', 'Events', ],
			'members'  => [
				'Id'                => [ 'shape' => 'NotificationId', ],
				'LambdaFunctionArn' => [
					'shape'        => 'LambdaFunctionArn',
					'locationName' => 'CloudFunction',
				],
				'Events'            => [
					'shape'        => 'EventList',
					'locationName' => 'Event',
				],
				'Filter'            => [ 'shape' => 'NotificationConfigurationFilter', ],
			],
		],
		'LambdaFunctionConfigurationList'           => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'LambdaFunctionConfiguration', ],
			'flattened' => true,
		],
		'LastModified'                              => [ 'type' => 'timestamp', ],
		'LifecycleConfiguration'                    => [
			'type'     => 'structure',
			'required' => [ 'Rules', ],
			'members'  => [
				'Rules' => [
					'shape'        => 'Rules',
					'locationName' => 'Rule',
				],
			],
		],
		'LifecycleExpiration'                       => [
			'type'    => 'structure',
			'members' => [
				'Date'                      => [ 'shape' => 'Date', ],
				'Days'                      => [ 'shape' => 'Days', ],
				'ExpiredObjectDeleteMarker' => [ 'shape' => 'ExpiredObjectDeleteMarker', ],
			],
		],
		'LifecycleRule'                             => [
			'type'     => 'structure',
			'required' => [ 'Status', ],
			'members'  => [
				'Expiration'                     => [ 'shape' => 'LifecycleExpiration', ],
				'ID'                             => [ 'shape' => 'ID', ],
				'Prefix'                         => [
					'shape'      => 'Prefix',
					'deprecated' => true,
				],
				'Filter'                         => [ 'shape' => 'LifecycleRuleFilter', ],
				'Status'                         => [ 'shape' => 'ExpirationStatus', ],
				'Transitions'                    => [
					'shape'        => 'TransitionList',
					'locationName' => 'Transition',
				],
				'NoncurrentVersionTransitions'   => [
					'shape'        => 'NoncurrentVersionTransitionList',
					'locationName' => 'NoncurrentVersionTransition',
				],
				'NoncurrentVersionExpiration'    => [ 'shape' => 'NoncurrentVersionExpiration', ],
				'AbortIncompleteMultipartUpload' => [ 'shape' => 'AbortIncompleteMultipartUpload', ],
			],
		],
		'LifecycleRuleAndOperator'                  => [
			'type'    => 'structure',
			'members' => [
				'Prefix' => [ 'shape' => 'Prefix', ],
				'Tags'   => [
					'shape'        => 'TagSet',
					'flattened'    => true,
					'locationName' => 'Tag',
				],
			],
		],
		'LifecycleRuleFilter'                       => [
			'type'    => 'structure',
			'members' => [
				'Prefix' => [ 'shape' => 'Prefix', ],
				'Tag'    => [ 'shape' => 'Tag', ],
				'And'    => [ 'shape' => 'LifecycleRuleAndOperator', ],
			],
		],
		'LifecycleRules'                            => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'LifecycleRule', ],
			'flattened' => true,
		],
		'ListBucketAnalyticsConfigurationsOutput'   => [
			'type'    => 'structure',
			'members' => [
				'IsTruncated'                => [ 'shape' => 'IsTruncated', ],
				'ContinuationToken'          => [ 'shape' => 'Token', ],
				'NextContinuationToken'      => [ 'shape' => 'NextToken', ],
				'AnalyticsConfigurationList' => [
					'shape'        => 'AnalyticsConfigurationList',
					'locationName' => 'AnalyticsConfiguration',
				],
			],
		],
		'ListBucketAnalyticsConfigurationsRequest'  => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket'            => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'ContinuationToken' => [
					'shape'        => 'Token',
					'location'     => 'querystring',
					'locationName' => 'continuation-token',
				],
			],
		],
		'ListBucketInventoryConfigurationsOutput'   => [
			'type'    => 'structure',
			'members' => [
				'ContinuationToken'          => [ 'shape' => 'Token', ],
				'InventoryConfigurationList' => [
					'shape'        => 'InventoryConfigurationList',
					'locationName' => 'InventoryConfiguration',
				],
				'IsTruncated'                => [ 'shape' => 'IsTruncated', ],
				'NextContinuationToken'      => [ 'shape' => 'NextToken', ],
			],
		],
		'ListBucketInventoryConfigurationsRequest'  => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket'            => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'ContinuationToken' => [
					'shape'        => 'Token',
					'location'     => 'querystring',
					'locationName' => 'continuation-token',
				],
			],
		],
		'ListBucketMetricsConfigurationsOutput'     => [
			'type'    => 'structure',
			'members' => [
				'IsTruncated'              => [ 'shape' => 'IsTruncated', ],
				'ContinuationToken'        => [ 'shape' => 'Token', ],
				'NextContinuationToken'    => [ 'shape' => 'NextToken', ],
				'MetricsConfigurationList' => [
					'shape'        => 'MetricsConfigurationList',
					'locationName' => 'MetricsConfiguration',
				],
			],
		],
		'ListBucketMetricsConfigurationsRequest'    => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket'            => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'ContinuationToken' => [
					'shape'        => 'Token',
					'location'     => 'querystring',
					'locationName' => 'continuation-token',
				],
			],
		],
		'ListBucketsOutput'                         => [
			'type'    => 'structure',
			'members' => [
				'Buckets' => [ 'shape' => 'Buckets', ],
				'Owner'   => [ 'shape' => 'Owner', ],
			],
		],
		'ListMultipartUploadsOutput'                => [
			'type'    => 'structure',
			'members' => [
				'Bucket'             => [ 'shape' => 'BucketName', ],
				'KeyMarker'          => [ 'shape' => 'KeyMarker', ],
				'UploadIdMarker'     => [ 'shape' => 'UploadIdMarker', ],
				'NextKeyMarker'      => [ 'shape' => 'NextKeyMarker', ],
				'Prefix'             => [ 'shape' => 'Prefix', ],
				'Delimiter'          => [ 'shape' => 'Delimiter', ],
				'NextUploadIdMarker' => [ 'shape' => 'NextUploadIdMarker', ],
				'MaxUploads'         => [ 'shape' => 'MaxUploads', ],
				'IsTruncated'        => [ 'shape' => 'IsTruncated', ],
				'Uploads'            => [
					'shape'        => 'MultipartUploadList',
					'locationName' => 'Upload',
				],
				'CommonPrefixes'     => [ 'shape' => 'CommonPrefixList', ],
				'EncodingType'       => [ 'shape' => 'EncodingType', ],
			],
		],
		'ListMultipartUploadsRequest'               => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket'         => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'Delimiter'      => [
					'shape'        => 'Delimiter',
					'location'     => 'querystring',
					'locationName' => 'delimiter',
				],
				'EncodingType'   => [
					'shape'        => 'EncodingType',
					'location'     => 'querystring',
					'locationName' => 'encoding-type',
				],
				'KeyMarker'      => [
					'shape'        => 'KeyMarker',
					'location'     => 'querystring',
					'locationName' => 'key-marker',
				],
				'MaxUploads'     => [
					'shape'        => 'MaxUploads',
					'location'     => 'querystring',
					'locationName' => 'max-uploads',
				],
				'Prefix'         => [
					'shape'        => 'Prefix',
					'location'     => 'querystring',
					'locationName' => 'prefix',
				],
				'UploadIdMarker' => [
					'shape'        => 'UploadIdMarker',
					'location'     => 'querystring',
					'locationName' => 'upload-id-marker',
				],
			],
		],
		'ListObjectVersionsOutput'                  => [
			'type'    => 'structure',
			'members' => [
				'IsTruncated'         => [ 'shape' => 'IsTruncated', ],
				'KeyMarker'           => [ 'shape' => 'KeyMarker', ],
				'VersionIdMarker'     => [ 'shape' => 'VersionIdMarker', ],
				'NextKeyMarker'       => [ 'shape' => 'NextKeyMarker', ],
				'NextVersionIdMarker' => [ 'shape' => 'NextVersionIdMarker', ],
				'Versions'            => [
					'shape'        => 'ObjectVersionList',
					'locationName' => 'Version',
				],
				'DeleteMarkers'       => [
					'shape'        => 'DeleteMarkers',
					'locationName' => 'DeleteMarker',
				],
				'Name'                => [ 'shape' => 'BucketName', ],
				'Prefix'              => [ 'shape' => 'Prefix', ],
				'Delimiter'           => [ 'shape' => 'Delimiter', ],
				'MaxKeys'             => [ 'shape' => 'MaxKeys', ],
				'CommonPrefixes'      => [ 'shape' => 'CommonPrefixList', ],
				'EncodingType'        => [ 'shape' => 'EncodingType', ],
			],
		],
		'ListObjectVersionsRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket'          => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'Delimiter'       => [
					'shape'        => 'Delimiter',
					'location'     => 'querystring',
					'locationName' => 'delimiter',
				],
				'EncodingType'    => [
					'shape'        => 'EncodingType',
					'location'     => 'querystring',
					'locationName' => 'encoding-type',
				],
				'KeyMarker'       => [
					'shape'        => 'KeyMarker',
					'location'     => 'querystring',
					'locationName' => 'key-marker',
				],
				'MaxKeys'         => [
					'shape'        => 'MaxKeys',
					'location'     => 'querystring',
					'locationName' => 'max-keys',
				],
				'Prefix'          => [
					'shape'        => 'Prefix',
					'location'     => 'querystring',
					'locationName' => 'prefix',
				],
				'VersionIdMarker' => [
					'shape'        => 'VersionIdMarker',
					'location'     => 'querystring',
					'locationName' => 'version-id-marker',
				],
			],
		],
		'ListObjectsOutput'                         => [
			'type'    => 'structure',
			'members' => [
				'IsTruncated'    => [ 'shape' => 'IsTruncated', ],
				'Marker'         => [ 'shape' => 'Marker', ],
				'NextMarker'     => [ 'shape' => 'NextMarker', ],
				'Contents'       => [ 'shape' => 'ObjectList', ],
				'Name'           => [ 'shape' => 'BucketName', ],
				'Prefix'         => [ 'shape' => 'Prefix', ],
				'Delimiter'      => [ 'shape' => 'Delimiter', ],
				'MaxKeys'        => [ 'shape' => 'MaxKeys', ],
				'CommonPrefixes' => [ 'shape' => 'CommonPrefixList', ],
				'EncodingType'   => [ 'shape' => 'EncodingType', ],
			],
		],
		'ListObjectsRequest'                        => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket'       => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'Delimiter'    => [
					'shape'        => 'Delimiter',
					'location'     => 'querystring',
					'locationName' => 'delimiter',
				],
				'EncodingType' => [
					'shape'        => 'EncodingType',
					'location'     => 'querystring',
					'locationName' => 'encoding-type',
				],
				'Marker'       => [
					'shape'        => 'Marker',
					'location'     => 'querystring',
					'locationName' => 'marker',
				],
				'MaxKeys'      => [
					'shape'        => 'MaxKeys',
					'location'     => 'querystring',
					'locationName' => 'max-keys',
				],
				'Prefix'       => [
					'shape'        => 'Prefix',
					'location'     => 'querystring',
					'locationName' => 'prefix',
				],
				'RequestPayer' => [
					'shape'        => 'RequestPayer',
					'location'     => 'header',
					'locationName' => 'x-amz-request-payer',
				],
			],
		],
		'ListObjectsV2Output'                       => [
			'type'    => 'structure',
			'members' => [
				'IsTruncated'           => [ 'shape' => 'IsTruncated', ],
				'Contents'              => [ 'shape' => 'ObjectList', ],
				'Name'                  => [ 'shape' => 'BucketName', ],
				'Prefix'                => [ 'shape' => 'Prefix', ],
				'Delimiter'             => [ 'shape' => 'Delimiter', ],
				'MaxKeys'               => [ 'shape' => 'MaxKeys', ],
				'CommonPrefixes'        => [ 'shape' => 'CommonPrefixList', ],
				'EncodingType'          => [ 'shape' => 'EncodingType', ],
				'KeyCount'              => [ 'shape' => 'KeyCount', ],
				'ContinuationToken'     => [ 'shape' => 'Token', ],
				'NextContinuationToken' => [ 'shape' => 'NextToken', ],
				'StartAfter'            => [ 'shape' => 'StartAfter', ],
			],
		],
		'ListObjectsV2Request'                      => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket'            => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'Delimiter'         => [
					'shape'        => 'Delimiter',
					'location'     => 'querystring',
					'locationName' => 'delimiter',
				],
				'EncodingType'      => [
					'shape'        => 'EncodingType',
					'location'     => 'querystring',
					'locationName' => 'encoding-type',
				],
				'MaxKeys'           => [
					'shape'        => 'MaxKeys',
					'location'     => 'querystring',
					'locationName' => 'max-keys',
				],
				'Prefix'            => [
					'shape'        => 'Prefix',
					'location'     => 'querystring',
					'locationName' => 'prefix',
				],
				'ContinuationToken' => [
					'shape'        => 'Token',
					'location'     => 'querystring',
					'locationName' => 'continuation-token',
				],
				'FetchOwner'        => [
					'shape'        => 'FetchOwner',
					'location'     => 'querystring',
					'locationName' => 'fetch-owner',
				],
				'StartAfter'        => [
					'shape'        => 'StartAfter',
					'location'     => 'querystring',
					'locationName' => 'start-after',
				],
				'RequestPayer'      => [
					'shape'        => 'RequestPayer',
					'location'     => 'header',
					'locationName' => 'x-amz-request-payer',
				],
			],
		],
		'ListPartsOutput'                           => [
			'type'    => 'structure',
			'members' => [
				'AbortDate'            => [
					'shape'        => 'AbortDate',
					'location'     => 'header',
					'locationName' => 'x-amz-abort-date',
				],
				'AbortRuleId'          => [
					'shape'        => 'AbortRuleId',
					'location'     => 'header',
					'locationName' => 'x-amz-abort-rule-id',
				],
				'Bucket'               => [ 'shape' => 'BucketName', ],
				'Key'                  => [ 'shape' => 'ObjectKey', ],
				'UploadId'             => [ 'shape' => 'MultipartUploadId', ],
				'PartNumberMarker'     => [ 'shape' => 'PartNumberMarker', ],
				'NextPartNumberMarker' => [ 'shape' => 'NextPartNumberMarker', ],
				'MaxParts'             => [ 'shape' => 'MaxParts', ],
				'IsTruncated'          => [ 'shape' => 'IsTruncated', ],
				'Parts'                => [
					'shape'        => 'Parts',
					'locationName' => 'Part',
				],
				'Initiator'            => [ 'shape' => 'Initiator', ],
				'Owner'                => [ 'shape' => 'Owner', ],
				'StorageClass'         => [ 'shape' => 'StorageClass', ],
				'RequestCharged'       => [
					'shape'        => 'RequestCharged',
					'location'     => 'header',
					'locationName' => 'x-amz-request-charged',
				],
			],
		],
		'ListPartsRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Key', 'UploadId', ],
			'members'  => [
				'Bucket'           => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'Key'              => [
					'shape'        => 'ObjectKey',
					'location'     => 'uri',
					'locationName' => 'Key',
				],
				'MaxParts'         => [
					'shape'        => 'MaxParts',
					'location'     => 'querystring',
					'locationName' => 'max-parts',
				],
				'PartNumberMarker' => [
					'shape'        => 'PartNumberMarker',
					'location'     => 'querystring',
					'locationName' => 'part-number-marker',
				],
				'UploadId'         => [
					'shape'        => 'MultipartUploadId',
					'location'     => 'querystring',
					'locationName' => 'uploadId',
				],
				'RequestPayer'     => [
					'shape'        => 'RequestPayer',
					'location'     => 'header',
					'locationName' => 'x-amz-request-payer',
				],
			],
		],
		'Location'                                  => [ 'type' => 'string', ],
		'LocationPrefix'                            => [ 'type' => 'string', ],
		'LoggingEnabled'                            => [
			'type'     => 'structure',
			'required' => [ 'TargetBucket', 'TargetPrefix', ],
			'members'  => [
				'TargetBucket' => [ 'shape' => 'TargetBucket', ],
				'TargetGrants' => [ 'shape' => 'TargetGrants', ],
				'TargetPrefix' => [ 'shape' => 'TargetPrefix', ],
			],
		],
		'MFA'                                       => [ 'type' => 'string', ],
		'MFADelete'                                 => [ 'type' => 'string', 'enum' => [ 'Enabled', 'Disabled', ], ],
		'MFADeleteStatus'                           => [ 'type' => 'string', 'enum' => [ 'Enabled', 'Disabled', ], ],
		'Marker'                                    => [ 'type' => 'string', ],
		'MaxAgeSeconds'                             => [ 'type' => 'integer', ],
		'MaxKeys'                                   => [ 'type' => 'integer', ],
		'MaxParts'                                  => [ 'type' => 'integer', ],
		'MaxUploads'                                => [ 'type' => 'integer', ],
		'Message'                                   => [ 'type' => 'string', ],
		'Metadata'                                  => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'MetadataKey', ],
			'value' => [ 'shape' => 'MetadataValue', ],
		],
		'MetadataDirective'                         => [ 'type' => 'string', 'enum' => [ 'COPY', 'REPLACE', ], ],
		'MetadataEntry'                             => [
			'type'    => 'structure',
			'members' => [
				'Name'  => [ 'shape' => 'MetadataKey', ],
				'Value' => [ 'shape' => 'MetadataValue', ],
			],
		],
		'MetadataKey'                               => [ 'type' => 'string', ],
		'MetadataValue'                             => [ 'type' => 'string', ],
		'MetricsAndOperator'                        => [
			'type'    => 'structure',
			'members' => [
				'Prefix' => [ 'shape' => 'Prefix', ],
				'Tags'   => [
					'shape'        => 'TagSet',
					'flattened'    => true,
					'locationName' => 'Tag',
				],
			],
		],
		'MetricsConfiguration'                      => [
			'type'     => 'structure',
			'required' => [ 'Id', ],
			'members'  => [
				'Id'     => [ 'shape' => 'MetricsId', ],
				'Filter' => [ 'shape' => 'MetricsFilter', ],
			],
		],
		'MetricsConfigurationList'                  => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'MetricsConfiguration', ],
			'flattened' => true,
		],
		'MetricsFilter'                             => [
			'type'    => 'structure',
			'members' => [
				'Prefix' => [ 'shape' => 'Prefix', ],
				'Tag'    => [ 'shape' => 'Tag', ],
				'And'    => [ 'shape' => 'MetricsAndOperator', ],
			],
		],
		'MetricsId'                                 => [ 'type' => 'string', ],
		'MissingMeta'                               => [ 'type' => 'integer', ],
		'MultipartUpload'                           => [
			'type'    => 'structure',
			'members' => [
				'UploadId'     => [ 'shape' => 'MultipartUploadId', ],
				'Key'          => [ 'shape' => 'ObjectKey', ],
				'Initiated'    => [ 'shape' => 'Initiated', ],
				'StorageClass' => [ 'shape' => 'StorageClass', ],
				'Owner'        => [ 'shape' => 'Owner', ],
				'Initiator'    => [ 'shape' => 'Initiator', ],
			],
		],
		'MultipartUploadId'                         => [ 'type' => 'string', ],
		'MultipartUploadList'                       => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'MultipartUpload', ],
			'flattened' => true,
		],
		'NextKeyMarker'                             => [ 'type' => 'string', ],
		'NextMarker'                                => [ 'type' => 'string', ],
		'NextPartNumberMarker'                      => [ 'type' => 'integer', ],
		'NextToken'                                 => [ 'type' => 'string', ],
		'NextUploadIdMarker'                        => [ 'type' => 'string', ],
		'NextVersionIdMarker'                       => [ 'type' => 'string', ],
		'NoSuchBucket'                              => [ 'type' => 'structure', 'members' => [], 'exception' => true, ],
		'NoSuchKey'                                 => [ 'type' => 'structure', 'members' => [], 'exception' => true, ],
		'NoSuchUpload'                              => [ 'type' => 'structure', 'members' => [], 'exception' => true, ],
		'NoncurrentVersionExpiration'               => [
			'type'    => 'structure',
			'members' => [ 'NoncurrentDays' => [ 'shape' => 'Days', ], ],
		],
		'NoncurrentVersionTransition'               => [
			'type'    => 'structure',
			'members' => [
				'NoncurrentDays' => [ 'shape' => 'Days', ],
				'StorageClass'   => [ 'shape' => 'TransitionStorageClass', ],
			],
		],
		'NoncurrentVersionTransitionList'           => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'NoncurrentVersionTransition', ],
			'flattened' => true,
		],
		'NotificationConfiguration'                 => [
			'type'    => 'structure',
			'members' => [
				'TopicConfigurations'          => [
					'shape'        => 'TopicConfigurationList',
					'locationName' => 'TopicConfiguration',
				],
				'QueueConfigurations'          => [
					'shape'        => 'QueueConfigurationList',
					'locationName' => 'QueueConfiguration',
				],
				'LambdaFunctionConfigurations' => [
					'shape'        => 'LambdaFunctionConfigurationList',
					'locationName' => 'CloudFunctionConfiguration',
				],
			],
		],
		'NotificationConfigurationDeprecated'       => [
			'type'    => 'structure',
			'members' => [
				'TopicConfiguration'         => [ 'shape' => 'TopicConfigurationDeprecated', ],
				'QueueConfiguration'         => [ 'shape' => 'QueueConfigurationDeprecated', ],
				'CloudFunctionConfiguration' => [ 'shape' => 'CloudFunctionConfiguration', ],
			],
		],
		'NotificationConfigurationFilter'           => [
			'type'    => 'structure',
			'members' => [
				'Key' => [
					'shape'        => 'S3KeyFilter',
					'locationName' => 'S3Key',
				],
			],
		],
		'NotificationId'                            => [ 'type' => 'string', ],
		'Object'                                    => [
			'type'    => 'structure',
			'members' => [
				'Key'          => [ 'shape' => 'ObjectKey', ],
				'LastModified' => [ 'shape' => 'LastModified', ],
				'ETag'         => [ 'shape' => 'ETag', ],
				'Size'         => [ 'shape' => 'Size', ],
				'StorageClass' => [ 'shape' => 'ObjectStorageClass', ],
				'Owner'        => [ 'shape' => 'Owner', ],
			],
		],
		'ObjectAlreadyInActiveTierError'            => [ 'type' => 'structure', 'members' => [], 'exception' => true, ],
		'ObjectCannedACL'                           => [
			'type' => 'string',
			'enum' => [
				'private',
				'public-read',
				'public-read-write',
				'authenticated-read',
				'aws-exec-read',
				'bucket-owner-read',
				'bucket-owner-full-control',
			],
		],
		'ObjectIdentifier'                          => [
			'type'     => 'structure',
			'required' => [ 'Key', ],
			'members'  => [
				'Key'       => [ 'shape' => 'ObjectKey', ],
				'VersionId' => [ 'shape' => 'ObjectVersionId', ],
			],
		],
		'ObjectIdentifierList'                      => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'ObjectIdentifier', ],
			'flattened' => true,
		],
		'ObjectKey'                                 => [ 'type' => 'string', 'min' => 1, ],
		'ObjectList'                                => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'Object', ],
			'flattened' => true,
		],
		'ObjectLockConfiguration'                   => [
			'type'    => 'structure',
			'members' => [
				'ObjectLockEnabled' => [ 'shape' => 'ObjectLockEnabled', ],
				'Rule'              => [ 'shape' => 'ObjectLockRule', ],
			],
		],
		'ObjectLockEnabled'                         => [ 'type' => 'string', 'enum' => [ 'Enabled', ], ],
		'ObjectLockEnabledForBucket'                => [ 'type' => 'boolean', ],
		'ObjectLockLegalHold'                       => [
			'type'    => 'structure',
			'members' => [ 'Status' => [ 'shape' => 'ObjectLockLegalHoldStatus', ], ],
		],
		'ObjectLockLegalHoldStatus'                 => [ 'type' => 'string', 'enum' => [ 'ON', 'OFF', ], ],
		'ObjectLockMode'                            => [
			'type' => 'string',
			'enum' => [ 'GOVERNANCE', 'COMPLIANCE', ],
		],
		'ObjectLockRetainUntilDate'                 => [ 'type' => 'timestamp', 'timestampFormat' => 'iso8601', ],
		'ObjectLockRetention'                       => [
			'type'    => 'structure',
			'members' => [
				'Mode'            => [ 'shape' => 'ObjectLockRetentionMode', ],
				'RetainUntilDate' => [ 'shape' => 'Date', ],
			],
		],
		'ObjectLockRetentionMode'                   => [
			'type' => 'string',
			'enum' => [ 'GOVERNANCE', 'COMPLIANCE', ],
		],
		'ObjectLockRule'                            => [
			'type'    => 'structure',
			'members' => [ 'DefaultRetention' => [ 'shape' => 'DefaultRetention', ], ],
		],
		'ObjectLockToken'                           => [ 'type' => 'string', ],
		'ObjectNotInActiveTierError'                => [ 'type' => 'structure', 'members' => [], 'exception' => true, ],
		'ObjectStorageClass'                        => [
			'type' => 'string',
			'enum' => [
				'STANDARD',
				'REDUCED_REDUNDANCY',
				'GLACIER',
				'STANDARD_IA',
				'ONEZONE_IA',
				'INTELLIGENT_TIERING',
				'DEEP_ARCHIVE',
			],
		],
		'ObjectVersion'                             => [
			'type'    => 'structure',
			'members' => [
				'ETag'         => [ 'shape' => 'ETag', ],
				'Size'         => [ 'shape' => 'Size', ],
				'StorageClass' => [ 'shape' => 'ObjectVersionStorageClass', ],
				'Key'          => [ 'shape' => 'ObjectKey', ],
				'VersionId'    => [ 'shape' => 'ObjectVersionId', ],
				'IsLatest'     => [ 'shape' => 'IsLatest', ],
				'LastModified' => [ 'shape' => 'LastModified', ],
				'Owner'        => [ 'shape' => 'Owner', ],
			],
		],
		'ObjectVersionId'                           => [ 'type' => 'string', ],
		'ObjectVersionList'                         => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'ObjectVersion', ],
			'flattened' => true,
		],
		'ObjectVersionStorageClass'                 => [ 'type' => 'string', 'enum' => [ 'STANDARD', ], ],
		'OutputLocation'                            => [
			'type'    => 'structure',
			'members' => [ 'S3' => [ 'shape' => 'S3Location', ], ],
		],
		'OutputSerialization'                       => [
			'type'    => 'structure',
			'members' => [
				'CSV'  => [ 'shape' => 'CSVOutput', ],
				'JSON' => [ 'shape' => 'JSONOutput', ],
			],
		],
		'Owner'                                     => [
			'type'    => 'structure',
			'members' => [
				'DisplayName' => [ 'shape' => 'DisplayName', ],
				'ID'          => [ 'shape' => 'ID', ],
			],
		],
		'OwnerOverride'                             => [ 'type' => 'string', 'enum' => [ 'Destination', ], ],
		'ParquetInput'                              => [ 'type' => 'structure', 'members' => [], ],
		'Part'                                      => [
			'type'    => 'structure',
			'members' => [
				'PartNumber'   => [ 'shape' => 'PartNumber', ],
				'LastModified' => [ 'shape' => 'LastModified', ],
				'ETag'         => [ 'shape' => 'ETag', ],
				'Size'         => [ 'shape' => 'Size', ],
			],
		],
		'PartNumber'                                => [ 'type' => 'integer', ],
		'PartNumberMarker'                          => [ 'type' => 'integer', ],
		'Parts'                                     => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'Part', ],
			'flattened' => true,
		],
		'PartsCount'                                => [ 'type' => 'integer', ],
		'Payer'                                     => [
			'type' => 'string',
			'enum' => [ 'Requester', 'BucketOwner', ],
		],
		'Permission'                                => [
			'type' => 'string',
			'enum' => [
				'FULL_CONTROL',
				'WRITE',
				'WRITE_ACP',
				'READ',
				'READ_ACP',
			],
		],
		'Policy'                                    => [ 'type' => 'string', ],
		'PolicyStatus'                              => [
			'type'    => 'structure',
			'members' => [
				'IsPublic' => [
					'shape'        => 'IsPublic',
					'locationName' => 'IsPublic',
				],
			],
		],
		'Prefix'                                    => [ 'type' => 'string', ],
		'Priority'                                  => [ 'type' => 'integer', ],
		'Progress'                                  => [
			'type'    => 'structure',
			'members' => [
				'BytesScanned'   => [ 'shape' => 'BytesScanned', ],
				'BytesProcessed' => [ 'shape' => 'BytesProcessed', ],
				'BytesReturned'  => [ 'shape' => 'BytesReturned', ],
			],
		],
		'ProgressEvent'                             => [
			'type'    => 'structure',
			'members' => [
				'Details' => [
					'shape'        => 'Progress',
					'eventpayload' => true,
				],
			],
			'event'   => true,
		],
		'Protocol'                                  => [ 'type' => 'string', 'enum' => [ 'http', 'https', ], ],
		'PublicAccessBlockConfiguration'            => [
			'type'    => 'structure',
			'members' => [
				'BlockPublicAcls'       => [
					'shape'        => 'Setting',
					'locationName' => 'BlockPublicAcls',
				],
				'IgnorePublicAcls'      => [
					'shape'        => 'Setting',
					'locationName' => 'IgnorePublicAcls',
				],
				'BlockPublicPolicy'     => [
					'shape'        => 'Setting',
					'locationName' => 'BlockPublicPolicy',
				],
				'RestrictPublicBuckets' => [
					'shape'        => 'Setting',
					'locationName' => 'RestrictPublicBuckets',
				],
			],
		],
		'PutBucketAccelerateConfigurationRequest'   => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'AccelerateConfiguration', ],
			'members'  => [
				'Bucket'                  => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'AccelerateConfiguration' => [
					'shape'        => 'AccelerateConfiguration',
					'locationName' => 'AccelerateConfiguration',
					'xmlNamespace' => [ 'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/', ],
				],
			],
			'payload'  => 'AccelerateConfiguration',
		],
		'PutBucketAclRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'ACL'                 => [
					'shape'        => 'BucketCannedACL',
					'location'     => 'header',
					'locationName' => 'x-amz-acl',
				],
				'AccessControlPolicy' => [
					'shape'        => 'AccessControlPolicy',
					'locationName' => 'AccessControlPolicy',
					'xmlNamespace' => [ 'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/', ],
				],
				'Bucket'              => [ 'shape' => 'BucketName', 'location' => 'uri', 'locationName' => 'Bucket', ],
				'ContentMD5'          => [
					'shape'        => 'ContentMD5',
					'location'     => 'header',
					'locationName' => 'Content-MD5',
				],
				'GrantFullControl'    => [
					'shape'        => 'GrantFullControl',
					'location'     => 'header',
					'locationName' => 'x-amz-grant-full-control',
				],
				'GrantRead'           => [
					'shape'        => 'GrantRead',
					'location'     => 'header',
					'locationName' => 'x-amz-grant-read',
				],
				'GrantReadACP'        => [
					'shape'        => 'GrantReadACP',
					'location'     => 'header',
					'locationName' => 'x-amz-grant-read-acp',
				],
				'GrantWrite'          => [
					'shape'        => 'GrantWrite',
					'location'     => 'header',
					'locationName' => 'x-amz-grant-write',
				],
				'GrantWriteACP'       => [
					'shape'        => 'GrantWriteACP',
					'location'     => 'header',
					'locationName' => 'x-amz-grant-write-acp',
				],
			],
			'payload'  => 'AccessControlPolicy',
		],
		'PutBucketAnalyticsConfigurationRequest'    => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Id', 'AnalyticsConfiguration', ],
			'members'  => [
				'Bucket'                 => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'Id'                     => [
					'shape'        => 'AnalyticsId',
					'location'     => 'querystring',
					'locationName' => 'id',
				],
				'AnalyticsConfiguration' => [
					'shape'        => 'AnalyticsConfiguration',
					'locationName' => 'AnalyticsConfiguration',
					'xmlNamespace' => [ 'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/', ],
				],
			],
			'payload'  => 'AnalyticsConfiguration',
		],
		'PutBucketCorsRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'CORSConfiguration', ],
			'members'  => [
				'Bucket'            => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'CORSConfiguration' => [
					'shape'        => 'CORSConfiguration',
					'locationName' => 'CORSConfiguration',
					'xmlNamespace' => [ 'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/', ],
				],
				'ContentMD5'        => [
					'shape'        => 'ContentMD5',
					'location'     => 'header',
					'locationName' => 'Content-MD5',
				],
			],
			'payload'  => 'CORSConfiguration',
		],
		'PutBucketEncryptionRequest'                => [
			'type'     => 'structure',
			'required' => [
				'Bucket',
				'ServerSideEncryptionConfiguration',
			],
			'members'  => [
				'Bucket'                            => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'ContentMD5'                        => [
					'shape'        => 'ContentMD5',
					'location'     => 'header',
					'locationName' => 'Content-MD5',
				],
				'ServerSideEncryptionConfiguration' => [
					'shape'        => 'ServerSideEncryptionConfiguration',
					'locationName' => 'ServerSideEncryptionConfiguration',
					'xmlNamespace' => [ 'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/', ],
				],
			],
			'payload'  => 'ServerSideEncryptionConfiguration',
		],
		'PutBucketInventoryConfigurationRequest'    => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Id', 'InventoryConfiguration', ],
			'members'  => [
				'Bucket'                 => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'Id'                     => [
					'shape'        => 'InventoryId',
					'location'     => 'querystring',
					'locationName' => 'id',
				],
				'InventoryConfiguration' => [
					'shape'        => 'InventoryConfiguration',
					'locationName' => 'InventoryConfiguration',
					'xmlNamespace' => [ 'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/', ],
				],
			],
			'payload'  => 'InventoryConfiguration',
		],
		'PutBucketLifecycleConfigurationRequest'    => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket'                 => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'LifecycleConfiguration' => [
					'shape'        => 'BucketLifecycleConfiguration',
					'locationName' => 'LifecycleConfiguration',
					'xmlNamespace' => [ 'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/', ],
				],
			],
			'payload'  => 'LifecycleConfiguration',
		],
		'PutBucketLifecycleRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket'                 => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'ContentMD5'             => [
					'shape'        => 'ContentMD5',
					'location'     => 'header',
					'locationName' => 'Content-MD5',
				],
				'LifecycleConfiguration' => [
					'shape'        => 'LifecycleConfiguration',
					'locationName' => 'LifecycleConfiguration',
					'xmlNamespace' => [ 'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/', ],
				],
			],
			'payload'  => 'LifecycleConfiguration',
		],
		'PutBucketLoggingRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'BucketLoggingStatus', ],
			'members'  => [
				'Bucket'              => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'BucketLoggingStatus' => [
					'shape'        => 'BucketLoggingStatus',
					'locationName' => 'BucketLoggingStatus',
					'xmlNamespace' => [ 'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/', ],
				],
				'ContentMD5'          => [
					'shape'        => 'ContentMD5',
					'location'     => 'header',
					'locationName' => 'Content-MD5',
				],
			],
			'payload'  => 'BucketLoggingStatus',
		],
		'PutBucketMetricsConfigurationRequest'      => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Id', 'MetricsConfiguration', ],
			'members'  => [
				'Bucket'               => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'Id'                   => [
					'shape'        => 'MetricsId',
					'location'     => 'querystring',
					'locationName' => 'id',
				],
				'MetricsConfiguration' => [
					'shape'        => 'MetricsConfiguration',
					'locationName' => 'MetricsConfiguration',
					'xmlNamespace' => [ 'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/', ],
				],
			],
			'payload'  => 'MetricsConfiguration',
		],
		'PutBucketNotificationConfigurationRequest' => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'NotificationConfiguration', ],
			'members'  => [
				'Bucket'                    => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'NotificationConfiguration' => [
					'shape'        => 'NotificationConfiguration',
					'locationName' => 'NotificationConfiguration',
					'xmlNamespace' => [ 'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/', ],
				],
			],
			'payload'  => 'NotificationConfiguration',
		],
		'PutBucketNotificationRequest'              => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'NotificationConfiguration', ],
			'members'  => [
				'Bucket'                    => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'ContentMD5'                => [
					'shape'        => 'ContentMD5',
					'location'     => 'header',
					'locationName' => 'Content-MD5',
				],
				'NotificationConfiguration' => [
					'shape'        => 'NotificationConfigurationDeprecated',
					'locationName' => 'NotificationConfiguration',
					'xmlNamespace' => [ 'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/', ],
				],
			],
			'payload'  => 'NotificationConfiguration',
		],
		'PutBucketPolicyRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Policy', ],
			'members'  => [
				'Bucket'                        => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'ContentMD5'                    => [
					'shape'        => 'ContentMD5',
					'location'     => 'header',
					'locationName' => 'Content-MD5',
				],
				'ConfirmRemoveSelfBucketAccess' => [
					'shape'        => 'ConfirmRemoveSelfBucketAccess',
					'location'     => 'header',
					'locationName' => 'x-amz-confirm-remove-self-bucket-access',
				],
				'Policy'                        => [ 'shape' => 'Policy', ],
			],
			'payload'  => 'Policy',
		],
		'PutBucketReplicationRequest'               => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'ReplicationConfiguration', ],
			'members'  => [
				'Bucket'                   => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'ContentMD5'               => [
					'shape'        => 'ContentMD5',
					'location'     => 'header',
					'locationName' => 'Content-MD5',
				],
				'ReplicationConfiguration' => [
					'shape'        => 'ReplicationConfiguration',
					'locationName' => 'ReplicationConfiguration',
					'xmlNamespace' => [ 'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/', ],
				],
				'Token'                    => [
					'shape'        => 'ObjectLockToken',
					'location'     => 'header',
					'locationName' => 'x-amz-bucket-object-lock-token',
				],
			],
			'payload'  => 'ReplicationConfiguration',
		],
		'PutBucketRequestPaymentRequest'            => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'RequestPaymentConfiguration', ],
			'members'  => [
				'Bucket'                      => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'ContentMD5'                  => [
					'shape'        => 'ContentMD5',
					'location'     => 'header',
					'locationName' => 'Content-MD5',
				],
				'RequestPaymentConfiguration' => [
					'shape'        => 'RequestPaymentConfiguration',
					'locationName' => 'RequestPaymentConfiguration',
					'xmlNamespace' => [ 'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/', ],
				],
			],
			'payload'  => 'RequestPaymentConfiguration',
		],
		'PutBucketTaggingRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Tagging', ],
			'members'  => [
				'Bucket'     => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'ContentMD5' => [
					'shape'        => 'ContentMD5',
					'location'     => 'header',
					'locationName' => 'Content-MD5',
				],
				'Tagging'    => [
					'shape'        => 'Tagging',
					'locationName' => 'Tagging',
					'xmlNamespace' => [ 'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/', ],
				],
			],
			'payload'  => 'Tagging',
		],
		'PutBucketVersioningRequest'                => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'VersioningConfiguration', ],
			'members'  => [
				'Bucket'                  => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'ContentMD5'              => [
					'shape'        => 'ContentMD5',
					'location'     => 'header',
					'locationName' => 'Content-MD5',
				],
				'MFA'                     => [
					'shape'        => 'MFA',
					'location'     => 'header',
					'locationName' => 'x-amz-mfa',
				],
				'VersioningConfiguration' => [
					'shape'        => 'VersioningConfiguration',
					'locationName' => 'VersioningConfiguration',
					'xmlNamespace' => [ 'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/', ],
				],
			],
			'payload'  => 'VersioningConfiguration',
		],
		'PutBucketWebsiteRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'WebsiteConfiguration', ],
			'members'  => [
				'Bucket'               => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'ContentMD5'           => [
					'shape'        => 'ContentMD5',
					'location'     => 'header',
					'locationName' => 'Content-MD5',
				],
				'WebsiteConfiguration' => [
					'shape'        => 'WebsiteConfiguration',
					'locationName' => 'WebsiteConfiguration',
					'xmlNamespace' => [ 'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/', ],
				],
			],
			'payload'  => 'WebsiteConfiguration',
		],
		'PutObjectAclOutput'                        => [
			'type'    => 'structure',
			'members' => [
				'RequestCharged' => [
					'shape'        => 'RequestCharged',
					'location'     => 'header',
					'locationName' => 'x-amz-request-charged',
				],
			],
		],
		'PutObjectAclRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Key', ],
			'members'  => [
				'ACL'                 => [
					'shape'        => 'ObjectCannedACL',
					'location'     => 'header',
					'locationName' => 'x-amz-acl',
				],
				'AccessControlPolicy' => [
					'shape'        => 'AccessControlPolicy',
					'locationName' => 'AccessControlPolicy',
					'xmlNamespace' => [ 'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/', ],
				],
				'Bucket'              => [ 'shape' => 'BucketName', 'location' => 'uri', 'locationName' => 'Bucket', ],
				'ContentMD5'          => [
					'shape'        => 'ContentMD5',
					'location'     => 'header',
					'locationName' => 'Content-MD5',
				],
				'GrantFullControl'    => [
					'shape'        => 'GrantFullControl',
					'location'     => 'header',
					'locationName' => 'x-amz-grant-full-control',
				],
				'GrantRead'           => [
					'shape'        => 'GrantRead',
					'location'     => 'header',
					'locationName' => 'x-amz-grant-read',
				],
				'GrantReadACP'        => [
					'shape'        => 'GrantReadACP',
					'location'     => 'header',
					'locationName' => 'x-amz-grant-read-acp',
				],
				'GrantWrite'          => [
					'shape'        => 'GrantWrite',
					'location'     => 'header',
					'locationName' => 'x-amz-grant-write',
				],
				'GrantWriteACP'       => [
					'shape'        => 'GrantWriteACP',
					'location'     => 'header',
					'locationName' => 'x-amz-grant-write-acp',
				],
				'Key'                 => [ 'shape' => 'ObjectKey', 'location' => 'uri', 'locationName' => 'Key', ],
				'RequestPayer'        => [
					'shape'        => 'RequestPayer',
					'location'     => 'header',
					'locationName' => 'x-amz-request-payer',
				],
				'VersionId'           => [
					'shape'        => 'ObjectVersionId',
					'location'     => 'querystring',
					'locationName' => 'versionId',
				],
			],
			'payload'  => 'AccessControlPolicy',
		],
		'PutObjectLegalHoldOutput'                  => [
			'type'    => 'structure',
			'members' => [
				'RequestCharged' => [
					'shape'        => 'RequestCharged',
					'location'     => 'header',
					'locationName' => 'x-amz-request-charged',
				],
			],
		],
		'PutObjectLegalHoldRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Key', ],
			'members'  => [
				'Bucket'       => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'Key'          => [
					'shape'        => 'ObjectKey',
					'location'     => 'uri',
					'locationName' => 'Key',
				],
				'LegalHold'    => [
					'shape'        => 'ObjectLockLegalHold',
					'locationName' => 'LegalHold',
					'xmlNamespace' => [ 'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/', ],
				],
				'RequestPayer' => [
					'shape'        => 'RequestPayer',
					'location'     => 'header',
					'locationName' => 'x-amz-request-payer',
				],
				'VersionId'    => [
					'shape'        => 'ObjectVersionId',
					'location'     => 'querystring',
					'locationName' => 'versionId',
				],
				'ContentMD5'   => [
					'shape'        => 'ContentMD5',
					'location'     => 'header',
					'locationName' => 'Content-MD5',
				],
			],
			'payload'  => 'LegalHold',
		],
		'PutObjectLockConfigurationOutput'          => [
			'type'    => 'structure',
			'members' => [
				'RequestCharged' => [
					'shape'        => 'RequestCharged',
					'location'     => 'header',
					'locationName' => 'x-amz-request-charged',
				],
			],
		],
		'PutObjectLockConfigurationRequest'         => [
			'type'     => 'structure',
			'required' => [ 'Bucket', ],
			'members'  => [
				'Bucket'                  => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'ObjectLockConfiguration' => [
					'shape'        => 'ObjectLockConfiguration',
					'locationName' => 'ObjectLockConfiguration',
					'xmlNamespace' => [ 'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/', ],
				],
				'RequestPayer'            => [
					'shape'        => 'RequestPayer',
					'location'     => 'header',
					'locationName' => 'x-amz-request-payer',
				],
				'Token'                   => [
					'shape'        => 'ObjectLockToken',
					'location'     => 'header',
					'locationName' => 'x-amz-bucket-object-lock-token',
				],
				'ContentMD5'              => [
					'shape'        => 'ContentMD5',
					'location'     => 'header',
					'locationName' => 'Content-MD5',
				],
			],
			'payload'  => 'ObjectLockConfiguration',
		],
		'PutObjectOutput'                           => [
			'type'    => 'structure',
			'members' => [
				'Expiration'              => [
					'shape'        => 'Expiration',
					'location'     => 'header',
					'locationName' => 'x-amz-expiration',
				],
				'ETag'                    => [ 'shape' => 'ETag', 'location' => 'header', 'locationName' => 'ETag', ],
				'ServerSideEncryption'    => [
					'shape'        => 'ServerSideEncryption',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption',
				],
				'VersionId'               => [
					'shape'        => 'ObjectVersionId',
					'location'     => 'header',
					'locationName' => 'x-amz-version-id',
				],
				'SSECustomerAlgorithm'    => [
					'shape'        => 'SSECustomerAlgorithm',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-algorithm',
				],
				'SSECustomerKeyMD5'       => [
					'shape'        => 'SSECustomerKeyMD5',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-key-MD5',
				],
				'SSEKMSKeyId'             => [
					'shape'        => 'SSEKMSKeyId',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-aws-kms-key-id',
				],
				'SSEKMSEncryptionContext' => [
					'shape'        => 'SSEKMSEncryptionContext',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-context',
				],
				'RequestCharged'          => [
					'shape'        => 'RequestCharged',
					'location'     => 'header',
					'locationName' => 'x-amz-request-charged',
				],
			],
		],
		'PutObjectRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Key', ],
			'members'  => [
				'ACL'                       => [
					'shape'        => 'ObjectCannedACL',
					'location'     => 'header',
					'locationName' => 'x-amz-acl',
				],
				'Body'                      => [ 'shape' => 'Body', 'streaming' => true, ],
				'Bucket'                    => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'CacheControl'              => [
					'shape'        => 'CacheControl',
					'location'     => 'header',
					'locationName' => 'Cache-Control',
				],
				'ContentDisposition'        => [
					'shape'        => 'ContentDisposition',
					'location'     => 'header',
					'locationName' => 'Content-Disposition',
				],
				'ContentEncoding'           => [
					'shape'        => 'ContentEncoding',
					'location'     => 'header',
					'locationName' => 'Content-Encoding',
				],
				'ContentLanguage'           => [
					'shape'        => 'ContentLanguage',
					'location'     => 'header',
					'locationName' => 'Content-Language',
				],
				'ContentLength'             => [
					'shape'        => 'ContentLength',
					'location'     => 'header',
					'locationName' => 'Content-Length',
				],
				'ContentMD5'                => [
					'shape'        => 'ContentMD5',
					'location'     => 'header',
					'locationName' => 'Content-MD5',
				],
				'ContentType'               => [
					'shape'        => 'ContentType',
					'location'     => 'header',
					'locationName' => 'Content-Type',
				],
				'Expires'                   => [
					'shape'        => 'Expires',
					'location'     => 'header',
					'locationName' => 'Expires',
				],
				'GrantFullControl'          => [
					'shape'        => 'GrantFullControl',
					'location'     => 'header',
					'locationName' => 'x-amz-grant-full-control',
				],
				'GrantRead'                 => [
					'shape'        => 'GrantRead',
					'location'     => 'header',
					'locationName' => 'x-amz-grant-read',
				],
				'GrantReadACP'              => [
					'shape'        => 'GrantReadACP',
					'location'     => 'header',
					'locationName' => 'x-amz-grant-read-acp',
				],
				'GrantWriteACP'             => [
					'shape'        => 'GrantWriteACP',
					'location'     => 'header',
					'locationName' => 'x-amz-grant-write-acp',
				],
				'Key'                       => [
					'shape'        => 'ObjectKey',
					'location'     => 'uri',
					'locationName' => 'Key',
				],
				'Metadata'                  => [
					'shape'        => 'Metadata',
					'location'     => 'headers',
					'locationName' => 'x-amz-meta-',
				],
				'ServerSideEncryption'      => [
					'shape'        => 'ServerSideEncryption',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption',
				],
				'StorageClass'              => [
					'shape'        => 'StorageClass',
					'location'     => 'header',
					'locationName' => 'x-amz-storage-class',
				],
				'WebsiteRedirectLocation'   => [
					'shape'        => 'WebsiteRedirectLocation',
					'location'     => 'header',
					'locationName' => 'x-amz-website-redirect-location',
				],
				'SSECustomerAlgorithm'      => [
					'shape'        => 'SSECustomerAlgorithm',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-algorithm',
				],
				'SSECustomerKey'            => [
					'shape'        => 'SSECustomerKey',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-key',
				],
				'SSECustomerKeyMD5'         => [
					'shape'        => 'SSECustomerKeyMD5',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-key-MD5',
				],
				'SSEKMSKeyId'               => [
					'shape'        => 'SSEKMSKeyId',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-aws-kms-key-id',
				],
				'SSEKMSEncryptionContext'   => [
					'shape'        => 'SSEKMSEncryptionContext',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-context',
				],
				'RequestPayer'              => [
					'shape'        => 'RequestPayer',
					'location'     => 'header',
					'locationName' => 'x-amz-request-payer',
				],
				'Tagging'                   => [
					'shape'        => 'TaggingHeader',
					'location'     => 'header',
					'locationName' => 'x-amz-tagging',
				],
				'ObjectLockMode'            => [
					'shape'        => 'ObjectLockMode',
					'location'     => 'header',
					'locationName' => 'x-amz-object-lock-mode',
				],
				'ObjectLockRetainUntilDate' => [
					'shape'        => 'ObjectLockRetainUntilDate',
					'location'     => 'header',
					'locationName' => 'x-amz-object-lock-retain-until-date',
				],
				'ObjectLockLegalHoldStatus' => [
					'shape'        => 'ObjectLockLegalHoldStatus',
					'location'     => 'header',
					'locationName' => 'x-amz-object-lock-legal-hold',
				],
			],
			'payload'  => 'Body',
		],
		'PutObjectRetentionOutput'                  => [
			'type'    => 'structure',
			'members' => [
				'RequestCharged' => [
					'shape'        => 'RequestCharged',
					'location'     => 'header',
					'locationName' => 'x-amz-request-charged',
				],
			],
		],
		'PutObjectRetentionRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Key', ],
			'members'  => [
				'Bucket'                    => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'Key'                       => [
					'shape'        => 'ObjectKey',
					'location'     => 'uri',
					'locationName' => 'Key',
				],
				'Retention'                 => [
					'shape'        => 'ObjectLockRetention',
					'locationName' => 'Retention',
					'xmlNamespace' => [ 'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/', ],
				],
				'RequestPayer'              => [
					'shape'        => 'RequestPayer',
					'location'     => 'header',
					'locationName' => 'x-amz-request-payer',
				],
				'VersionId'                 => [
					'shape'        => 'ObjectVersionId',
					'location'     => 'querystring',
					'locationName' => 'versionId',
				],
				'BypassGovernanceRetention' => [
					'shape'        => 'BypassGovernanceRetention',
					'location'     => 'header',
					'locationName' => 'x-amz-bypass-governance-retention',
				],
				'ContentMD5'                => [
					'shape'        => 'ContentMD5',
					'location'     => 'header',
					'locationName' => 'Content-MD5',
				],
			],
			'payload'  => 'Retention',
		],
		'PutObjectTaggingOutput'                    => [
			'type'    => 'structure',
			'members' => [
				'VersionId' => [
					'shape'        => 'ObjectVersionId',
					'location'     => 'header',
					'locationName' => 'x-amz-version-id',
				],
			],
		],
		'PutObjectTaggingRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Key', 'Tagging', ],
			'members'  => [
				'Bucket'     => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'Key'        => [
					'shape'        => 'ObjectKey',
					'location'     => 'uri',
					'locationName' => 'Key',
				],
				'VersionId'  => [
					'shape'        => 'ObjectVersionId',
					'location'     => 'querystring',
					'locationName' => 'versionId',
				],
				'ContentMD5' => [
					'shape'        => 'ContentMD5',
					'location'     => 'header',
					'locationName' => 'Content-MD5',
				],
				'Tagging'    => [
					'shape'        => 'Tagging',
					'locationName' => 'Tagging',
					'xmlNamespace' => [ 'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/', ],
				],
			],
			'payload'  => 'Tagging',
		],
		'PutPublicAccessBlockRequest'               => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'PublicAccessBlockConfiguration', ],
			'members'  => [
				'Bucket'                         => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'ContentMD5'                     => [
					'shape'        => 'ContentMD5',
					'location'     => 'header',
					'locationName' => 'Content-MD5',
				],
				'PublicAccessBlockConfiguration' => [
					'shape'        => 'PublicAccessBlockConfiguration',
					'locationName' => 'PublicAccessBlockConfiguration',
					'xmlNamespace' => [ 'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/', ],
				],
			],
			'payload'  => 'PublicAccessBlockConfiguration',
		],
		'QueueArn'                                  => [ 'type' => 'string', ],
		'QueueConfiguration'                        => [
			'type'     => 'structure',
			'required' => [ 'QueueArn', 'Events', ],
			'members'  => [
				'Id'       => [ 'shape' => 'NotificationId', ],
				'QueueArn' => [
					'shape'        => 'QueueArn',
					'locationName' => 'Queue',
				],
				'Events'   => [
					'shape'        => 'EventList',
					'locationName' => 'Event',
				],
				'Filter'   => [ 'shape' => 'NotificationConfigurationFilter', ],
			],
		],
		'QueueConfigurationDeprecated'              => [
			'type'    => 'structure',
			'members' => [
				'Id'     => [ 'shape' => 'NotificationId', ],
				'Event'  => [
					'shape'      => 'Event',
					'deprecated' => true,
				],
				'Events' => [
					'shape'        => 'EventList',
					'locationName' => 'Event',
				],
				'Queue'  => [ 'shape' => 'QueueArn', ],
			],
		],
		'QueueConfigurationList'                    => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'QueueConfiguration', ],
			'flattened' => true,
		],
		'Quiet'                                     => [ 'type' => 'boolean', ],
		'QuoteCharacter'                            => [ 'type' => 'string', ],
		'QuoteEscapeCharacter'                      => [ 'type' => 'string', ],
		'QuoteFields'                               => [ 'type' => 'string', 'enum' => [ 'ALWAYS', 'ASNEEDED', ], ],
		'Range'                                     => [ 'type' => 'string', ],
		'RecordDelimiter'                           => [ 'type' => 'string', ],
		'RecordsEvent'                              => [
			'type'    => 'structure',
			'members' => [
				'Payload' => [
					'shape'        => 'Body',
					'eventpayload' => true,
				],
			],
			'event'   => true,
		],
		'Redirect'                                  => [
			'type'    => 'structure',
			'members' => [
				'HostName'             => [ 'shape' => 'HostName', ],
				'HttpRedirectCode'     => [ 'shape' => 'HttpRedirectCode', ],
				'Protocol'             => [ 'shape' => 'Protocol', ],
				'ReplaceKeyPrefixWith' => [ 'shape' => 'ReplaceKeyPrefixWith', ],
				'ReplaceKeyWith'       => [ 'shape' => 'ReplaceKeyWith', ],
			],
		],
		'RedirectAllRequestsTo'                     => [
			'type'     => 'structure',
			'required' => [ 'HostName', ],
			'members'  => [
				'HostName' => [ 'shape' => 'HostName', ],
				'Protocol' => [ 'shape' => 'Protocol', ],
			],
		],
		'ReplaceKeyPrefixWith'                      => [ 'type' => 'string', ],
		'ReplaceKeyWith'                            => [ 'type' => 'string', ],
		'ReplicaKmsKeyID'                           => [ 'type' => 'string', ],
		'ReplicationConfiguration'                  => [
			'type'     => 'structure',
			'required' => [ 'Role', 'Rules', ],
			'members'  => [
				'Role'  => [ 'shape' => 'Role', ],
				'Rules' => [
					'shape'        => 'ReplicationRules',
					'locationName' => 'Rule',
				],
			],
		],
		'ReplicationRule'                           => [
			'type'     => 'structure',
			'required' => [ 'Status', 'Destination', ],
			'members'  => [
				'ID'                      => [ 'shape' => 'ID', ],
				'Priority'                => [ 'shape' => 'Priority', ],
				'Prefix'                  => [
					'shape'      => 'Prefix',
					'deprecated' => true,
				],
				'Filter'                  => [ 'shape' => 'ReplicationRuleFilter', ],
				'Status'                  => [ 'shape' => 'ReplicationRuleStatus', ],
				'SourceSelectionCriteria' => [ 'shape' => 'SourceSelectionCriteria', ],
				'Destination'             => [ 'shape' => 'Destination', ],
				'DeleteMarkerReplication' => [ 'shape' => 'DeleteMarkerReplication', ],
			],
		],
		'ReplicationRuleAndOperator'                => [
			'type'    => 'structure',
			'members' => [
				'Prefix' => [ 'shape' => 'Prefix', ],
				'Tags'   => [
					'shape'        => 'TagSet',
					'flattened'    => true,
					'locationName' => 'Tag',
				],
			],
		],
		'ReplicationRuleFilter'                     => [
			'type'    => 'structure',
			'members' => [
				'Prefix' => [ 'shape' => 'Prefix', ],
				'Tag'    => [ 'shape' => 'Tag', ],
				'And'    => [ 'shape' => 'ReplicationRuleAndOperator', ],
			],
		],
		'ReplicationRuleStatus'                     => [ 'type' => 'string', 'enum' => [ 'Enabled', 'Disabled', ], ],
		'ReplicationRules'                          => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'ReplicationRule', ],
			'flattened' => true,
		],
		'ReplicationStatus'                         => [
			'type' => 'string',
			'enum' => [ 'COMPLETE', 'PENDING', 'FAILED', 'REPLICA', ],
		],
		'RequestCharged'                            => [ 'type' => 'string', 'enum' => [ 'requester', ], ],
		'RequestPayer'                              => [ 'type' => 'string', 'enum' => [ 'requester', ], ],
		'RequestPaymentConfiguration'               => [
			'type'     => 'structure',
			'required' => [ 'Payer', ],
			'members'  => [ 'Payer' => [ 'shape' => 'Payer', ], ],
		],
		'RequestProgress'                           => [
			'type'    => 'structure',
			'members' => [ 'Enabled' => [ 'shape' => 'EnableRequestProgress', ], ],
		],
		'ResponseCacheControl'                      => [ 'type' => 'string', ],
		'ResponseContentDisposition'                => [ 'type' => 'string', ],
		'ResponseContentEncoding'                   => [ 'type' => 'string', ],
		'ResponseContentLanguage'                   => [ 'type' => 'string', ],
		'ResponseContentType'                       => [ 'type' => 'string', ],
		'ResponseExpires'                           => [ 'type' => 'timestamp', ],
		'Restore'                                   => [ 'type' => 'string', ],
		'RestoreObjectOutput'                       => [
			'type'    => 'structure',
			'members' => [
				'RequestCharged'    => [
					'shape'        => 'RequestCharged',
					'location'     => 'header',
					'locationName' => 'x-amz-request-charged',
				],
				'RestoreOutputPath' => [
					'shape'        => 'RestoreOutputPath',
					'location'     => 'header',
					'locationName' => 'x-amz-restore-output-path',
				],
			],
		],
		'RestoreObjectRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Key', ],
			'members'  => [
				'Bucket'         => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'Key'            => [
					'shape'        => 'ObjectKey',
					'location'     => 'uri',
					'locationName' => 'Key',
				],
				'VersionId'      => [
					'shape'        => 'ObjectVersionId',
					'location'     => 'querystring',
					'locationName' => 'versionId',
				],
				'RestoreRequest' => [
					'shape'        => 'RestoreRequest',
					'locationName' => 'RestoreRequest',
					'xmlNamespace' => [ 'uri' => 'http://s3.amazonaws.com/doc/2006-03-01/', ],
				],
				'RequestPayer'   => [
					'shape'        => 'RequestPayer',
					'location'     => 'header',
					'locationName' => 'x-amz-request-payer',
				],
			],
			'payload'  => 'RestoreRequest',
		],
		'RestoreOutputPath'                         => [ 'type' => 'string', ],
		'RestoreRequest'                            => [
			'type'    => 'structure',
			'members' => [
				'Days'                 => [ 'shape' => 'Days', ],
				'GlacierJobParameters' => [ 'shape' => 'GlacierJobParameters', ],
				'Type'                 => [ 'shape' => 'RestoreRequestType', ],
				'Tier'                 => [ 'shape' => 'Tier', ],
				'Description'          => [ 'shape' => 'Description', ],
				'SelectParameters'     => [ 'shape' => 'SelectParameters', ],
				'OutputLocation'       => [ 'shape' => 'OutputLocation', ],
			],
		],
		'RestoreRequestType'                        => [ 'type' => 'string', 'enum' => [ 'SELECT', ], ],
		'Role'                                      => [ 'type' => 'string', ],
		'RoutingRule'                               => [
			'type'     => 'structure',
			'required' => [ 'Redirect', ],
			'members'  => [
				'Condition' => [ 'shape' => 'Condition', ],
				'Redirect'  => [ 'shape' => 'Redirect', ],
			],
		],
		'RoutingRules'                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'RoutingRule',
				'locationName' => 'RoutingRule',
			],
		],
		'Rule'                                      => [
			'type'     => 'structure',
			'required' => [ 'Prefix', 'Status', ],
			'members'  => [
				'Expiration'                     => [ 'shape' => 'LifecycleExpiration', ],
				'ID'                             => [ 'shape' => 'ID', ],
				'Prefix'                         => [ 'shape' => 'Prefix', ],
				'Status'                         => [ 'shape' => 'ExpirationStatus', ],
				'Transition'                     => [ 'shape' => 'Transition', ],
				'NoncurrentVersionTransition'    => [ 'shape' => 'NoncurrentVersionTransition', ],
				'NoncurrentVersionExpiration'    => [ 'shape' => 'NoncurrentVersionExpiration', ],
				'AbortIncompleteMultipartUpload' => [ 'shape' => 'AbortIncompleteMultipartUpload', ],
			],
		],
		'Rules'                                     => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'Rule', ],
			'flattened' => true,
		],
		'S3KeyFilter'                               => [
			'type'    => 'structure',
			'members' => [
				'FilterRules' => [
					'shape'        => 'FilterRuleList',
					'locationName' => 'FilterRule',
				],
			],
		],
		'S3Location'                                => [
			'type'     => 'structure',
			'required' => [ 'BucketName', 'Prefix', ],
			'members'  => [
				'BucketName'        => [ 'shape' => 'BucketName', ],
				'Prefix'            => [ 'shape' => 'LocationPrefix', ],
				'Encryption'        => [ 'shape' => 'Encryption', ],
				'CannedACL'         => [ 'shape' => 'ObjectCannedACL', ],
				'AccessControlList' => [ 'shape' => 'Grants', ],
				'Tagging'           => [ 'shape' => 'Tagging', ],
				'UserMetadata'      => [ 'shape' => 'UserMetadata', ],
				'StorageClass'      => [ 'shape' => 'StorageClass', ],
			],
		],
		'SSECustomerAlgorithm'                      => [ 'type' => 'string', ],
		'SSECustomerKey'                            => [ 'type' => 'string', 'sensitive' => true, ],
		'SSECustomerKeyMD5'                         => [ 'type' => 'string', ],
		'SSEKMS'                                    => [
			'type'         => 'structure',
			'required'     => [ 'KeyId', ],
			'members'      => [ 'KeyId' => [ 'shape' => 'SSEKMSKeyId', ], ],
			'locationName' => 'SSE-KMS',
		],
		'SSEKMSEncryptionContext'                   => [ 'type' => 'string', 'sensitive' => true, ],
		'SSEKMSKeyId'                               => [ 'type' => 'string', 'sensitive' => true, ],
		'SSES3'                                     => [
			'type'         => 'structure',
			'members'      => [],
			'locationName' => 'SSE-S3',
		],
		'SelectObjectContentEventStream'            => [
			'type'        => 'structure',
			'members'     => [
				'Records'  => [ 'shape' => 'RecordsEvent', ],
				'Stats'    => [ 'shape' => 'StatsEvent', ],
				'Progress' => [ 'shape' => 'ProgressEvent', ],
				'Cont'     => [ 'shape' => 'ContinuationEvent', ],
				'End'      => [ 'shape' => 'EndEvent', ],
			],
			'eventstream' => true,
		],
		'SelectObjectContentOutput'                 => [
			'type'    => 'structure',
			'members' => [ 'Payload' => [ 'shape' => 'SelectObjectContentEventStream', ], ],
			'payload' => 'Payload',
		],
		'SelectObjectContentRequest'                => [
			'type'     => 'structure',
			'required' => [
				'Bucket',
				'Key',
				'Expression',
				'ExpressionType',
				'InputSerialization',
				'OutputSerialization',
			],
			'members'  => [
				'Bucket'               => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'Key'                  => [
					'shape'        => 'ObjectKey',
					'location'     => 'uri',
					'locationName' => 'Key',
				],
				'SSECustomerAlgorithm' => [
					'shape'        => 'SSECustomerAlgorithm',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-algorithm',
				],
				'SSECustomerKey'       => [
					'shape'        => 'SSECustomerKey',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-key',
				],
				'SSECustomerKeyMD5'    => [
					'shape'        => 'SSECustomerKeyMD5',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-key-MD5',
				],
				'Expression'           => [ 'shape' => 'Expression', ],
				'ExpressionType'       => [ 'shape' => 'ExpressionType', ],
				'RequestProgress'      => [ 'shape' => 'RequestProgress', ],
				'InputSerialization'   => [ 'shape' => 'InputSerialization', ],
				'OutputSerialization'  => [ 'shape' => 'OutputSerialization', ],
			],
		],
		'SelectParameters'                          => [
			'type'     => 'structure',
			'required' => [
				'InputSerialization',
				'ExpressionType',
				'Expression',
				'OutputSerialization',
			],
			'members'  => [
				'InputSerialization'  => [ 'shape' => 'InputSerialization', ],
				'ExpressionType'      => [ 'shape' => 'ExpressionType', ],
				'Expression'          => [ 'shape' => 'Expression', ],
				'OutputSerialization' => [ 'shape' => 'OutputSerialization', ],
			],
		],
		'ServerSideEncryption'                      => [ 'type' => 'string', 'enum' => [ 'AES256', 'aws:kms', ], ],
		'ServerSideEncryptionByDefault'             => [
			'type'     => 'structure',
			'required' => [ 'SSEAlgorithm', ],
			'members'  => [
				'SSEAlgorithm'   => [ 'shape' => 'ServerSideEncryption', ],
				'KMSMasterKeyID' => [ 'shape' => 'SSEKMSKeyId', ],
			],
		],
		'ServerSideEncryptionConfiguration'         => [
			'type'     => 'structure',
			'required' => [ 'Rules', ],
			'members'  => [
				'Rules' => [
					'shape'        => 'ServerSideEncryptionRules',
					'locationName' => 'Rule',
				],
			],
		],
		'ServerSideEncryptionRule'                  => [
			'type'    => 'structure',
			'members' => [ 'ApplyServerSideEncryptionByDefault' => [ 'shape' => 'ServerSideEncryptionByDefault', ], ],
		],
		'ServerSideEncryptionRules'                 => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'ServerSideEncryptionRule', ],
			'flattened' => true,
		],
		'Setting'                                   => [ 'type' => 'boolean', ],
		'Size'                                      => [ 'type' => 'long', ],
		'SourceSelectionCriteria'                   => [
			'type'    => 'structure',
			'members' => [ 'SseKmsEncryptedObjects' => [ 'shape' => 'SseKmsEncryptedObjects', ], ],
		],
		'SseKmsEncryptedObjects'                    => [
			'type'     => 'structure',
			'required' => [ 'Status', ],
			'members'  => [ 'Status' => [ 'shape' => 'SseKmsEncryptedObjectsStatus', ], ],
		],
		'SseKmsEncryptedObjectsStatus'              => [ 'type' => 'string', 'enum' => [ 'Enabled', 'Disabled', ], ],
		'StartAfter'                                => [ 'type' => 'string', ],
		'Stats'                                     => [
			'type'    => 'structure',
			'members' => [
				'BytesScanned'   => [ 'shape' => 'BytesScanned', ],
				'BytesProcessed' => [ 'shape' => 'BytesProcessed', ],
				'BytesReturned'  => [ 'shape' => 'BytesReturned', ],
			],
		],
		'StatsEvent'                                => [
			'type'    => 'structure',
			'members' => [
				'Details' => [
					'shape'        => 'Stats',
					'eventpayload' => true,
				],
			],
			'event'   => true,
		],
		'StorageClass'                              => [
			'type' => 'string',
			'enum' => [
				'STANDARD',
				'REDUCED_REDUNDANCY',
				'STANDARD_IA',
				'ONEZONE_IA',
				'INTELLIGENT_TIERING',
				'GLACIER',
				'DEEP_ARCHIVE',
			],
		],
		'StorageClassAnalysis'                      => [
			'type'    => 'structure',
			'members' => [ 'DataExport' => [ 'shape' => 'StorageClassAnalysisDataExport', ], ],
		],
		'StorageClassAnalysisDataExport'            => [
			'type'     => 'structure',
			'required' => [ 'OutputSchemaVersion', 'Destination', ],
			'members'  => [
				'OutputSchemaVersion' => [ 'shape' => 'StorageClassAnalysisSchemaVersion', ],
				'Destination'         => [ 'shape' => 'AnalyticsExportDestination', ],
			],
		],
		'StorageClassAnalysisSchemaVersion'         => [ 'type' => 'string', 'enum' => [ 'V_1', ], ],
		'Suffix'                                    => [ 'type' => 'string', ],
		'Tag'                                       => [
			'type'     => 'structure',
			'required' => [ 'Key', 'Value', ],
			'members'  => [
				'Key'   => [ 'shape' => 'ObjectKey', ],
				'Value' => [ 'shape' => 'Value', ],
			],
		],
		'TagCount'                                  => [ 'type' => 'integer', ],
		'TagSet'                                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Tag', 'locationName' => 'Tag', ],
		],
		'Tagging'                                   => [
			'type'     => 'structure',
			'required' => [ 'TagSet', ],
			'members'  => [ 'TagSet' => [ 'shape' => 'TagSet', ], ],
		],
		'TaggingDirective'                          => [ 'type' => 'string', 'enum' => [ 'COPY', 'REPLACE', ], ],
		'TaggingHeader'                             => [ 'type' => 'string', ],
		'TargetBucket'                              => [ 'type' => 'string', ],
		'TargetGrant'                               => [
			'type'    => 'structure',
			'members' => [
				'Grantee'    => [ 'shape' => 'Grantee', ],
				'Permission' => [ 'shape' => 'BucketLogsPermission', ],
			],
		],
		'TargetGrants'                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TargetGrant',
				'locationName' => 'Grant',
			],
		],
		'TargetPrefix'                              => [ 'type' => 'string', ],
		'Tier'                                      => [
			'type' => 'string',
			'enum' => [ 'Standard', 'Bulk', 'Expedited', ],
		],
		'Token'                                     => [ 'type' => 'string', ],
		'TopicArn'                                  => [ 'type' => 'string', ],
		'TopicConfiguration'                        => [
			'type'     => 'structure',
			'required' => [ 'TopicArn', 'Events', ],
			'members'  => [
				'Id'       => [ 'shape' => 'NotificationId', ],
				'TopicArn' => [
					'shape'        => 'TopicArn',
					'locationName' => 'Topic',
				],
				'Events'   => [
					'shape'        => 'EventList',
					'locationName' => 'Event',
				],
				'Filter'   => [ 'shape' => 'NotificationConfigurationFilter', ],
			],
		],
		'TopicConfigurationDeprecated'              => [
			'type'    => 'structure',
			'members' => [
				'Id'     => [ 'shape' => 'NotificationId', ],
				'Events' => [
					'shape'        => 'EventList',
					'locationName' => 'Event',
				],
				'Event'  => [
					'shape'      => 'Event',
					'deprecated' => true,
				],
				'Topic'  => [ 'shape' => 'TopicArn', ],
			],
		],
		'TopicConfigurationList'                    => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'TopicConfiguration', ],
			'flattened' => true,
		],
		'Transition'                                => [
			'type'    => 'structure',
			'members' => [
				'Date'         => [ 'shape' => 'Date', ],
				'Days'         => [ 'shape' => 'Days', ],
				'StorageClass' => [ 'shape' => 'TransitionStorageClass', ],
			],
		],
		'TransitionList'                            => [
			'type'      => 'list',
			'member'    => [ 'shape' => 'Transition', ],
			'flattened' => true,
		],
		'TransitionStorageClass'                    => [
			'type' => 'string',
			'enum' => [
				'GLACIER',
				'STANDARD_IA',
				'ONEZONE_IA',
				'INTELLIGENT_TIERING',
				'DEEP_ARCHIVE',
			],
		],
		'Type'                                      => [
			'type' => 'string',
			'enum' => [
				'CanonicalUser',
				'AmazonCustomerByEmail',
				'Group',
			],
		],
		'URI'                                       => [ 'type' => 'string', ],
		'UploadIdMarker'                            => [ 'type' => 'string', ],
		'UploadPartCopyOutput'                      => [
			'type'    => 'structure',
			'members' => [
				'CopySourceVersionId'  => [
					'shape'        => 'CopySourceVersionId',
					'location'     => 'header',
					'locationName' => 'x-amz-copy-source-version-id',
				],
				'CopyPartResult'       => [ 'shape' => 'CopyPartResult', ],
				'ServerSideEncryption' => [
					'shape'        => 'ServerSideEncryption',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption',
				],
				'SSECustomerAlgorithm' => [
					'shape'        => 'SSECustomerAlgorithm',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-algorithm',
				],
				'SSECustomerKeyMD5'    => [
					'shape'        => 'SSECustomerKeyMD5',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-key-MD5',
				],
				'SSEKMSKeyId'          => [
					'shape'        => 'SSEKMSKeyId',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-aws-kms-key-id',
				],
				'RequestCharged'       => [
					'shape'        => 'RequestCharged',
					'location'     => 'header',
					'locationName' => 'x-amz-request-charged',
				],
			],
			'payload' => 'CopyPartResult',
		],
		'UploadPartCopyRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'CopySource', 'Key', 'PartNumber', 'UploadId', ],
			'members'  => [
				'Bucket'                         => [
					'shape'        => 'BucketName',
					'location'     => 'uri',
					'locationName' => 'Bucket',
				],
				'CopySource'                     => [
					'shape'        => 'CopySource',
					'location'     => 'header',
					'locationName' => 'x-amz-copy-source',
				],
				'CopySourceIfMatch'              => [
					'shape'        => 'CopySourceIfMatch',
					'location'     => 'header',
					'locationName' => 'x-amz-copy-source-if-match',
				],
				'CopySourceIfModifiedSince'      => [
					'shape'        => 'CopySourceIfModifiedSince',
					'location'     => 'header',
					'locationName' => 'x-amz-copy-source-if-modified-since',
				],
				'CopySourceIfNoneMatch'          => [
					'shape'        => 'CopySourceIfNoneMatch',
					'location'     => 'header',
					'locationName' => 'x-amz-copy-source-if-none-match',
				],
				'CopySourceIfUnmodifiedSince'    => [
					'shape'        => 'CopySourceIfUnmodifiedSince',
					'location'     => 'header',
					'locationName' => 'x-amz-copy-source-if-unmodified-since',
				],
				'CopySourceRange'                => [
					'shape'        => 'CopySourceRange',
					'location'     => 'header',
					'locationName' => 'x-amz-copy-source-range',
				],
				'Key'                            => [
					'shape'        => 'ObjectKey',
					'location'     => 'uri',
					'locationName' => 'Key',
				],
				'PartNumber'                     => [
					'shape'        => 'PartNumber',
					'location'     => 'querystring',
					'locationName' => 'partNumber',
				],
				'UploadId'                       => [
					'shape'        => 'MultipartUploadId',
					'location'     => 'querystring',
					'locationName' => 'uploadId',
				],
				'SSECustomerAlgorithm'           => [
					'shape'        => 'SSECustomerAlgorithm',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-algorithm',
				],
				'SSECustomerKey'                 => [
					'shape'        => 'SSECustomerKey',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-key',
				],
				'SSECustomerKeyMD5'              => [
					'shape'        => 'SSECustomerKeyMD5',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-key-MD5',
				],
				'CopySourceSSECustomerAlgorithm' => [
					'shape'        => 'CopySourceSSECustomerAlgorithm',
					'location'     => 'header',
					'locationName' => 'x-amz-copy-source-server-side-encryption-customer-algorithm',
				],
				'CopySourceSSECustomerKey'       => [
					'shape'        => 'CopySourceSSECustomerKey',
					'location'     => 'header',
					'locationName' => 'x-amz-copy-source-server-side-encryption-customer-key',
				],
				'CopySourceSSECustomerKeyMD5'    => [
					'shape'        => 'CopySourceSSECustomerKeyMD5',
					'location'     => 'header',
					'locationName' => 'x-amz-copy-source-server-side-encryption-customer-key-MD5',
				],
				'RequestPayer'                   => [
					'shape'        => 'RequestPayer',
					'location'     => 'header',
					'locationName' => 'x-amz-request-payer',
				],
			],
		],
		'UploadPartOutput'                          => [
			'type'    => 'structure',
			'members' => [
				'ServerSideEncryption' => [
					'shape'        => 'ServerSideEncryption',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption',
				],
				'ETag'                 => [
					'shape'        => 'ETag',
					'location'     => 'header',
					'locationName' => 'ETag',
				],
				'SSECustomerAlgorithm' => [
					'shape'        => 'SSECustomerAlgorithm',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-algorithm',
				],
				'SSECustomerKeyMD5'    => [
					'shape'        => 'SSECustomerKeyMD5',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-key-MD5',
				],
				'SSEKMSKeyId'          => [
					'shape'        => 'SSEKMSKeyId',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-aws-kms-key-id',
				],
				'RequestCharged'       => [
					'shape'        => 'RequestCharged',
					'location'     => 'header',
					'locationName' => 'x-amz-request-charged',
				],
			],
		],
		'UploadPartRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'Bucket', 'Key', 'PartNumber', 'UploadId', ],
			'members'  => [
				'Body'                 => [ 'shape' => 'Body', 'streaming' => true, ],
				'Bucket'               => [ 'shape' => 'BucketName', 'location' => 'uri', 'locationName' => 'Bucket', ],
				'ContentLength'        => [
					'shape'        => 'ContentLength',
					'location'     => 'header',
					'locationName' => 'Content-Length',
				],
				'ContentMD5'           => [
					'shape'        => 'ContentMD5',
					'location'     => 'header',
					'locationName' => 'Content-MD5',
				],
				'Key'                  => [ 'shape' => 'ObjectKey', 'location' => 'uri', 'locationName' => 'Key', ],
				'PartNumber'           => [
					'shape'        => 'PartNumber',
					'location'     => 'querystring',
					'locationName' => 'partNumber',
				],
				'UploadId'             => [
					'shape'        => 'MultipartUploadId',
					'location'     => 'querystring',
					'locationName' => 'uploadId',
				],
				'SSECustomerAlgorithm' => [
					'shape'        => 'SSECustomerAlgorithm',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-algorithm',
				],
				'SSECustomerKey'       => [
					'shape'        => 'SSECustomerKey',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-key',
				],
				'SSECustomerKeyMD5'    => [
					'shape'        => 'SSECustomerKeyMD5',
					'location'     => 'header',
					'locationName' => 'x-amz-server-side-encryption-customer-key-MD5',
				],
				'RequestPayer'         => [
					'shape'        => 'RequestPayer',
					'location'     => 'header',
					'locationName' => 'x-amz-request-payer',
				],
			],
			'payload'  => 'Body',
		],
		'UserMetadata'                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'MetadataEntry',
				'locationName' => 'MetadataEntry',
			],
		],
		'Value'                                     => [ 'type' => 'string', ],
		'VersionIdMarker'                           => [ 'type' => 'string', ],
		'VersioningConfiguration'                   => [
			'type'    => 'structure',
			'members' => [
				'MFADelete' => [
					'shape'        => 'MFADelete',
					'locationName' => 'MfaDelete',
				],
				'Status'    => [ 'shape' => 'BucketVersioningStatus', ],
			],
		],
		'WebsiteConfiguration'                      => [
			'type'    => 'structure',
			'members' => [
				'ErrorDocument'         => [ 'shape' => 'ErrorDocument', ],
				'IndexDocument'         => [ 'shape' => 'IndexDocument', ],
				'RedirectAllRequestsTo' => [ 'shape' => 'RedirectAllRequestsTo', ],
				'RoutingRules'          => [ 'shape' => 'RoutingRules', ],
			],
		],
		'WebsiteRedirectLocation'                   => [ 'type' => 'string', ],
		'Years'                                     => [ 'type' => 'integer', ],
	],
];
