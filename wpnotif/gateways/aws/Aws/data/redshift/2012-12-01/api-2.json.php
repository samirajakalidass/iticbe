<?php
// This file was auto-generated from sdk-root/src/data/redshift/2012-12-01/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'       => '2012-12-01',
		'endpointPrefix'   => 'redshift',
		'protocol'         => 'query',
		'serviceFullName'  => 'Amazon Redshift',
		'serviceId'        => 'Redshift',
		'signatureVersion' => 'v4',
		'uid'              => 'redshift-2012-12-01',
		'xmlNamespace'     => 'http://redshift.amazonaws.com/doc/2012-12-01/',
	],
	'operations' => [
		'AcceptReservedNodeExchange'           => [
			'name'   => 'AcceptReservedNodeExchange',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AcceptReservedNodeExchangeInputMessage', ],
			'output' => [
				'shape'         => 'AcceptReservedNodeExchangeOutputMessage',
				'resultWrapper' => 'AcceptReservedNodeExchangeResult',
			],
			'errors' => [
				[ 'shape' => 'ReservedNodeNotFoundFault', ],
				[ 'shape' => 'InvalidReservedNodeStateFault', ],
				[ 'shape' => 'ReservedNodeAlreadyMigratedFault', ],
				[ 'shape' => 'ReservedNodeOfferingNotFoundFault', ],
				[ 'shape' => 'UnsupportedOperationFault', ],
				[ 'shape' => 'DependentServiceUnavailableFault', ],
				[ 'shape' => 'ReservedNodeAlreadyExistsFault', ],
			],
		],
		'AuthorizeClusterSecurityGroupIngress' => [
			'name'   => 'AuthorizeClusterSecurityGroupIngress',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AuthorizeClusterSecurityGroupIngressMessage', ],
			'output' => [
				'shape'         => 'AuthorizeClusterSecurityGroupIngressResult',
				'resultWrapper' => 'AuthorizeClusterSecurityGroupIngressResult',
			],
			'errors' => [
				[ 'shape' => 'ClusterSecurityGroupNotFoundFault', ],
				[ 'shape' => 'InvalidClusterSecurityGroupStateFault', ],
				[ 'shape' => 'AuthorizationAlreadyExistsFault', ],
				[ 'shape' => 'AuthorizationQuotaExceededFault', ],
			],
		],
		'AuthorizeSnapshotAccess'              => [
			'name'   => 'AuthorizeSnapshotAccess',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AuthorizeSnapshotAccessMessage', ],
			'output' => [
				'shape'         => 'AuthorizeSnapshotAccessResult',
				'resultWrapper' => 'AuthorizeSnapshotAccessResult',
			],
			'errors' => [
				[ 'shape' => 'ClusterSnapshotNotFoundFault', ],
				[ 'shape' => 'AuthorizationAlreadyExistsFault', ],
				[ 'shape' => 'AuthorizationQuotaExceededFault', ],
				[ 'shape' => 'DependentServiceRequestThrottlingFault', ],
				[ 'shape' => 'InvalidClusterSnapshotStateFault', ],
				[ 'shape' => 'LimitExceededFault', ],
			],
		],
		'BatchDeleteClusterSnapshots'          => [
			'name'   => 'BatchDeleteClusterSnapshots',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'BatchDeleteClusterSnapshotsRequest', ],
			'output' => [
				'shape'         => 'BatchDeleteClusterSnapshotsResult',
				'resultWrapper' => 'BatchDeleteClusterSnapshotsResult',
			],
			'errors' => [ [ 'shape' => 'BatchDeleteRequestSizeExceededFault', ], ],
		],
		'BatchModifyClusterSnapshots'          => [
			'name'   => 'BatchModifyClusterSnapshots',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'BatchModifyClusterSnapshotsMessage', ],
			'output' => [
				'shape'         => 'BatchModifyClusterSnapshotsOutputMessage',
				'resultWrapper' => 'BatchModifyClusterSnapshotsResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidRetentionPeriodFault', ],
				[ 'shape' => 'BatchModifyClusterSnapshotsLimitExceededFault', ],
			],
		],
		'CancelResize'                         => [
			'name'   => 'CancelResize',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CancelResizeMessage', ],
			'output' => [
				'shape'         => 'ResizeProgressMessage',
				'resultWrapper' => 'CancelResizeResult',
			],
			'errors' => [
				[ 'shape' => 'ClusterNotFoundFault', ],
				[ 'shape' => 'ResizeNotFoundFault', ],
				[ 'shape' => 'InvalidClusterStateFault', ],
				[ 'shape' => 'UnsupportedOperationFault', ],
			],
		],
		'CopyClusterSnapshot'                  => [
			'name'   => 'CopyClusterSnapshot',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CopyClusterSnapshotMessage', ],
			'output' => [
				'shape'         => 'CopyClusterSnapshotResult',
				'resultWrapper' => 'CopyClusterSnapshotResult',
			],
			'errors' => [
				[ 'shape' => 'ClusterSnapshotAlreadyExistsFault', ],
				[ 'shape' => 'ClusterSnapshotNotFoundFault', ],
				[ 'shape' => 'InvalidClusterSnapshotStateFault', ],
				[ 'shape' => 'ClusterSnapshotQuotaExceededFault', ],
				[ 'shape' => 'InvalidRetentionPeriodFault', ],
			],
		],
		'CreateCluster'                        => [
			'name'   => 'CreateCluster',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateClusterMessage', ],
			'output' => [ 'shape' => 'CreateClusterResult', 'resultWrapper' => 'CreateClusterResult', ],
			'errors' => [
				[ 'shape' => 'ClusterAlreadyExistsFault', ],
				[ 'shape' => 'InsufficientClusterCapacityFault', ],
				[ 'shape' => 'ClusterParameterGroupNotFoundFault', ],
				[ 'shape' => 'ClusterSecurityGroupNotFoundFault', ],
				[ 'shape' => 'ClusterQuotaExceededFault', ],
				[ 'shape' => 'NumberOfNodesQuotaExceededFault', ],
				[ 'shape' => 'NumberOfNodesPerClusterLimitExceededFault', ],
				[ 'shape' => 'ClusterSubnetGroupNotFoundFault', ],
				[ 'shape' => 'InvalidVPCNetworkStateFault', ],
				[ 'shape' => 'InvalidClusterSubnetGroupStateFault', ],
				[ 'shape' => 'InvalidSubnet', ],
				[ 'shape' => 'UnauthorizedOperation', ],
				[ 'shape' => 'HsmClientCertificateNotFoundFault', ],
				[ 'shape' => 'HsmConfigurationNotFoundFault', ],
				[ 'shape' => 'InvalidElasticIpFault', ],
				[ 'shape' => 'TagLimitExceededFault', ],
				[ 'shape' => 'InvalidTagFault', ],
				[ 'shape' => 'LimitExceededFault', ],
				[ 'shape' => 'DependentServiceRequestThrottlingFault', ],
				[ 'shape' => 'InvalidClusterTrackFault', ],
				[ 'shape' => 'SnapshotScheduleNotFoundFault', ],
				[ 'shape' => 'InvalidRetentionPeriodFault', ],
			],
		],
		'CreateClusterParameterGroup'          => [
			'name'   => 'CreateClusterParameterGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateClusterParameterGroupMessage', ],
			'output' => [
				'shape'         => 'CreateClusterParameterGroupResult',
				'resultWrapper' => 'CreateClusterParameterGroupResult',
			],
			'errors' => [
				[ 'shape' => 'ClusterParameterGroupQuotaExceededFault', ],
				[ 'shape' => 'ClusterParameterGroupAlreadyExistsFault', ],
				[ 'shape' => 'TagLimitExceededFault', ],
				[ 'shape' => 'InvalidTagFault', ],
			],
		],
		'CreateClusterSecurityGroup'           => [
			'name'   => 'CreateClusterSecurityGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateClusterSecurityGroupMessage', ],
			'output' => [
				'shape'         => 'CreateClusterSecurityGroupResult',
				'resultWrapper' => 'CreateClusterSecurityGroupResult',
			],
			'errors' => [
				[ 'shape' => 'ClusterSecurityGroupAlreadyExistsFault', ],
				[ 'shape' => 'ClusterSecurityGroupQuotaExceededFault', ],
				[ 'shape' => 'TagLimitExceededFault', ],
				[ 'shape' => 'InvalidTagFault', ],
			],
		],
		'CreateClusterSnapshot'                => [
			'name'   => 'CreateClusterSnapshot',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateClusterSnapshotMessage', ],
			'output' => [
				'shape'         => 'CreateClusterSnapshotResult',
				'resultWrapper' => 'CreateClusterSnapshotResult',
			],
			'errors' => [
				[ 'shape' => 'ClusterSnapshotAlreadyExistsFault', ],
				[ 'shape' => 'InvalidClusterStateFault', ],
				[ 'shape' => 'ClusterNotFoundFault', ],
				[ 'shape' => 'ClusterSnapshotQuotaExceededFault', ],
				[ 'shape' => 'TagLimitExceededFault', ],
				[ 'shape' => 'InvalidTagFault', ],
				[ 'shape' => 'InvalidRetentionPeriodFault', ],
			],
		],
		'CreateClusterSubnetGroup'             => [
			'name'   => 'CreateClusterSubnetGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateClusterSubnetGroupMessage', ],
			'output' => [
				'shape'         => 'CreateClusterSubnetGroupResult',
				'resultWrapper' => 'CreateClusterSubnetGroupResult',
			],
			'errors' => [
				[ 'shape' => 'ClusterSubnetGroupAlreadyExistsFault', ],
				[ 'shape' => 'ClusterSubnetGroupQuotaExceededFault', ],
				[ 'shape' => 'ClusterSubnetQuotaExceededFault', ],
				[ 'shape' => 'InvalidSubnet', ],
				[ 'shape' => 'UnauthorizedOperation', ],
				[ 'shape' => 'TagLimitExceededFault', ],
				[ 'shape' => 'InvalidTagFault', ],
				[ 'shape' => 'DependentServiceRequestThrottlingFault', ],
			],
		],
		'CreateEventSubscription'              => [
			'name'   => 'CreateEventSubscription',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateEventSubscriptionMessage', ],
			'output' => [
				'shape'         => 'CreateEventSubscriptionResult',
				'resultWrapper' => 'CreateEventSubscriptionResult',
			],
			'errors' => [
				[ 'shape' => 'EventSubscriptionQuotaExceededFault', ],
				[ 'shape' => 'SubscriptionAlreadyExistFault', ],
				[ 'shape' => 'SNSInvalidTopicFault', ],
				[ 'shape' => 'SNSNoAuthorizationFault', ],
				[ 'shape' => 'SNSTopicArnNotFoundFault', ],
				[ 'shape' => 'SubscriptionEventIdNotFoundFault', ],
				[ 'shape' => 'SubscriptionCategoryNotFoundFault', ],
				[ 'shape' => 'SubscriptionSeverityNotFoundFault', ],
				[ 'shape' => 'SourceNotFoundFault', ],
				[ 'shape' => 'TagLimitExceededFault', ],
				[ 'shape' => 'InvalidTagFault', ],
			],
		],
		'CreateHsmClientCertificate'           => [
			'name'   => 'CreateHsmClientCertificate',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateHsmClientCertificateMessage', ],
			'output' => [
				'shape'         => 'CreateHsmClientCertificateResult',
				'resultWrapper' => 'CreateHsmClientCertificateResult',
			],
			'errors' => [
				[ 'shape' => 'HsmClientCertificateAlreadyExistsFault', ],
				[ 'shape' => 'HsmClientCertificateQuotaExceededFault', ],
				[ 'shape' => 'TagLimitExceededFault', ],
				[ 'shape' => 'InvalidTagFault', ],
			],
		],
		'CreateHsmConfiguration'               => [
			'name'   => 'CreateHsmConfiguration',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateHsmConfigurationMessage', ],
			'output' => [
				'shape'         => 'CreateHsmConfigurationResult',
				'resultWrapper' => 'CreateHsmConfigurationResult',
			],
			'errors' => [
				[ 'shape' => 'HsmConfigurationAlreadyExistsFault', ],
				[ 'shape' => 'HsmConfigurationQuotaExceededFault', ],
				[ 'shape' => 'TagLimitExceededFault', ],
				[ 'shape' => 'InvalidTagFault', ],
			],
		],
		'CreateSnapshotCopyGrant'              => [
			'name'   => 'CreateSnapshotCopyGrant',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateSnapshotCopyGrantMessage', ],
			'output' => [
				'shape'         => 'CreateSnapshotCopyGrantResult',
				'resultWrapper' => 'CreateSnapshotCopyGrantResult',
			],
			'errors' => [
				[ 'shape' => 'SnapshotCopyGrantAlreadyExistsFault', ],
				[ 'shape' => 'SnapshotCopyGrantQuotaExceededFault', ],
				[ 'shape' => 'LimitExceededFault', ],
				[ 'shape' => 'TagLimitExceededFault', ],
				[ 'shape' => 'InvalidTagFault', ],
				[ 'shape' => 'DependentServiceRequestThrottlingFault', ],
			],
		],
		'CreateSnapshotSchedule'               => [
			'name'   => 'CreateSnapshotSchedule',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateSnapshotScheduleMessage', ],
			'output' => [
				'shape'         => 'SnapshotSchedule',
				'resultWrapper' => 'CreateSnapshotScheduleResult',
			],
			'errors' => [
				[ 'shape' => 'SnapshotScheduleAlreadyExistsFault', ],
				[ 'shape' => 'InvalidScheduleFault', ],
				[ 'shape' => 'SnapshotScheduleQuotaExceededFault', ],
				[ 'shape' => 'TagLimitExceededFault', ],
				[ 'shape' => 'ScheduleDefinitionTypeUnsupportedFault', ],
			],
		],
		'CreateTags'                           => [
			'name'   => 'CreateTags',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateTagsMessage', ],
			'errors' => [
				[ 'shape' => 'TagLimitExceededFault', ],
				[ 'shape' => 'ResourceNotFoundFault', ],
				[ 'shape' => 'InvalidTagFault', ],
			],
		],
		'DeleteCluster'                        => [
			'name'   => 'DeleteCluster',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteClusterMessage', ],
			'output' => [
				'shape'         => 'DeleteClusterResult',
				'resultWrapper' => 'DeleteClusterResult',
			],
			'errors' => [
				[ 'shape' => 'ClusterNotFoundFault', ],
				[ 'shape' => 'InvalidClusterStateFault', ],
				[ 'shape' => 'ClusterSnapshotAlreadyExistsFault', ],
				[ 'shape' => 'ClusterSnapshotQuotaExceededFault', ],
				[ 'shape' => 'InvalidRetentionPeriodFault', ],
			],
		],
		'DeleteClusterParameterGroup'          => [
			'name'   => 'DeleteClusterParameterGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteClusterParameterGroupMessage', ],
			'errors' => [
				[ 'shape' => 'InvalidClusterParameterGroupStateFault', ],
				[ 'shape' => 'ClusterParameterGroupNotFoundFault', ],
			],
		],
		'DeleteClusterSecurityGroup'           => [
			'name'   => 'DeleteClusterSecurityGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteClusterSecurityGroupMessage', ],
			'errors' => [
				[ 'shape' => 'InvalidClusterSecurityGroupStateFault', ],
				[ 'shape' => 'ClusterSecurityGroupNotFoundFault', ],
			],
		],
		'DeleteClusterSnapshot'                => [
			'name'   => 'DeleteClusterSnapshot',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteClusterSnapshotMessage', ],
			'output' => [
				'shape'         => 'DeleteClusterSnapshotResult',
				'resultWrapper' => 'DeleteClusterSnapshotResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidClusterSnapshotStateFault', ],
				[ 'shape' => 'ClusterSnapshotNotFoundFault', ],
			],
		],
		'DeleteClusterSubnetGroup'             => [
			'name'   => 'DeleteClusterSubnetGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteClusterSubnetGroupMessage', ],
			'errors' => [
				[ 'shape' => 'InvalidClusterSubnetGroupStateFault', ],
				[ 'shape' => 'InvalidClusterSubnetStateFault', ],
				[ 'shape' => 'ClusterSubnetGroupNotFoundFault', ],
			],
		],
		'DeleteEventSubscription'              => [
			'name'   => 'DeleteEventSubscription',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteEventSubscriptionMessage', ],
			'errors' => [
				[ 'shape' => 'SubscriptionNotFoundFault', ],
				[ 'shape' => 'InvalidSubscriptionStateFault', ],
			],
		],
		'DeleteHsmClientCertificate'           => [
			'name'   => 'DeleteHsmClientCertificate',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteHsmClientCertificateMessage', ],
			'errors' => [
				[ 'shape' => 'InvalidHsmClientCertificateStateFault', ],
				[ 'shape' => 'HsmClientCertificateNotFoundFault', ],
			],
		],
		'DeleteHsmConfiguration'               => [
			'name'   => 'DeleteHsmConfiguration',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteHsmConfigurationMessage', ],
			'errors' => [
				[ 'shape' => 'InvalidHsmConfigurationStateFault', ],
				[ 'shape' => 'HsmConfigurationNotFoundFault', ],
			],
		],
		'DeleteSnapshotCopyGrant'              => [
			'name'   => 'DeleteSnapshotCopyGrant',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteSnapshotCopyGrantMessage', ],
			'errors' => [
				[ 'shape' => 'InvalidSnapshotCopyGrantStateFault', ],
				[ 'shape' => 'SnapshotCopyGrantNotFoundFault', ],
			],
		],
		'DeleteSnapshotSchedule'               => [
			'name'   => 'DeleteSnapshotSchedule',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteSnapshotScheduleMessage', ],
			'errors' => [
				[ 'shape' => 'InvalidClusterSnapshotScheduleStateFault', ],
				[ 'shape' => 'SnapshotScheduleNotFoundFault', ],
			],
		],
		'DeleteTags'                           => [
			'name'   => 'DeleteTags',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteTagsMessage', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundFault', ],
				[ 'shape' => 'InvalidTagFault', ],
			],
		],
		'DescribeAccountAttributes'            => [
			'name'   => 'DescribeAccountAttributes',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeAccountAttributesMessage', ],
			'output' => [
				'shape'         => 'AccountAttributeList',
				'resultWrapper' => 'DescribeAccountAttributesResult',
			],
		],
		'DescribeClusterDbRevisions'           => [
			'name'   => 'DescribeClusterDbRevisions',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeClusterDbRevisionsMessage', ],
			'output' => [
				'shape'         => 'ClusterDbRevisionsMessage',
				'resultWrapper' => 'DescribeClusterDbRevisionsResult',
			],
			'errors' => [
				[ 'shape' => 'ClusterNotFoundFault', ],
				[ 'shape' => 'InvalidClusterStateFault', ],
			],
		],
		'DescribeClusterParameterGroups'       => [
			'name'   => 'DescribeClusterParameterGroups',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeClusterParameterGroupsMessage', ],
			'output' => [
				'shape'         => 'ClusterParameterGroupsMessage',
				'resultWrapper' => 'DescribeClusterParameterGroupsResult',
			],
			'errors' => [
				[ 'shape' => 'ClusterParameterGroupNotFoundFault', ],
				[ 'shape' => 'InvalidTagFault', ],
			],
		],
		'DescribeClusterParameters'            => [
			'name'   => 'DescribeClusterParameters',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeClusterParametersMessage', ],
			'output' => [
				'shape'         => 'ClusterParameterGroupDetails',
				'resultWrapper' => 'DescribeClusterParametersResult',
			],
			'errors' => [ [ 'shape' => 'ClusterParameterGroupNotFoundFault', ], ],
		],
		'DescribeClusterSecurityGroups'        => [
			'name'   => 'DescribeClusterSecurityGroups',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeClusterSecurityGroupsMessage', ],
			'output' => [
				'shape'         => 'ClusterSecurityGroupMessage',
				'resultWrapper' => 'DescribeClusterSecurityGroupsResult',
			],
			'errors' => [
				[ 'shape' => 'ClusterSecurityGroupNotFoundFault', ],
				[ 'shape' => 'InvalidTagFault', ],
			],
		],
		'DescribeClusterSnapshots'             => [
			'name'   => 'DescribeClusterSnapshots',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeClusterSnapshotsMessage', ],
			'output' => [
				'shape'         => 'SnapshotMessage',
				'resultWrapper' => 'DescribeClusterSnapshotsResult',
			],
			'errors' => [
				[ 'shape' => 'ClusterNotFoundFault', ],
				[ 'shape' => 'ClusterSnapshotNotFoundFault', ],
				[ 'shape' => 'InvalidTagFault', ],
			],
		],
		'DescribeClusterSubnetGroups'          => [
			'name'   => 'DescribeClusterSubnetGroups',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeClusterSubnetGroupsMessage', ],
			'output' => [
				'shape'         => 'ClusterSubnetGroupMessage',
				'resultWrapper' => 'DescribeClusterSubnetGroupsResult',
			],
			'errors' => [
				[ 'shape' => 'ClusterSubnetGroupNotFoundFault', ],
				[ 'shape' => 'InvalidTagFault', ],
			],
		],
		'DescribeClusterTracks'                => [
			'name'   => 'DescribeClusterTracks',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeClusterTracksMessage', ],
			'output' => [
				'shape'         => 'TrackListMessage',
				'resultWrapper' => 'DescribeClusterTracksResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidClusterTrackFault', ],
				[ 'shape' => 'UnauthorizedOperation', ],
			],
		],
		'DescribeClusterVersions'              => [
			'name'   => 'DescribeClusterVersions',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeClusterVersionsMessage', ],
			'output' => [
				'shape'         => 'ClusterVersionsMessage',
				'resultWrapper' => 'DescribeClusterVersionsResult',
			],
		],
		'DescribeClusters'                     => [
			'name'   => 'DescribeClusters',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeClustersMessage', ],
			'output' => [
				'shape'         => 'ClustersMessage',
				'resultWrapper' => 'DescribeClustersResult',
			],
			'errors' => [
				[ 'shape' => 'ClusterNotFoundFault', ],
				[ 'shape' => 'InvalidTagFault', ],
			],
		],
		'DescribeDefaultClusterParameters'     => [
			'name'   => 'DescribeDefaultClusterParameters',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeDefaultClusterParametersMessage', ],
			'output' => [
				'shape'         => 'DescribeDefaultClusterParametersResult',
				'resultWrapper' => 'DescribeDefaultClusterParametersResult',
			],
		],
		'DescribeEventCategories'              => [
			'name'   => 'DescribeEventCategories',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeEventCategoriesMessage', ],
			'output' => [
				'shape'         => 'EventCategoriesMessage',
				'resultWrapper' => 'DescribeEventCategoriesResult',
			],
		],
		'DescribeEventSubscriptions'           => [
			'name'   => 'DescribeEventSubscriptions',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeEventSubscriptionsMessage', ],
			'output' => [
				'shape'         => 'EventSubscriptionsMessage',
				'resultWrapper' => 'DescribeEventSubscriptionsResult',
			],
			'errors' => [
				[ 'shape' => 'SubscriptionNotFoundFault', ],
				[ 'shape' => 'InvalidTagFault', ],
			],
		],
		'DescribeEvents'                       => [
			'name'   => 'DescribeEvents',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeEventsMessage', ],
			'output' => [
				'shape'         => 'EventsMessage',
				'resultWrapper' => 'DescribeEventsResult',
			],
		],
		'DescribeHsmClientCertificates'        => [
			'name'   => 'DescribeHsmClientCertificates',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeHsmClientCertificatesMessage', ],
			'output' => [
				'shape'         => 'HsmClientCertificateMessage',
				'resultWrapper' => 'DescribeHsmClientCertificatesResult',
			],
			'errors' => [
				[ 'shape' => 'HsmClientCertificateNotFoundFault', ],
				[ 'shape' => 'InvalidTagFault', ],
			],
		],
		'DescribeHsmConfigurations'            => [
			'name'   => 'DescribeHsmConfigurations',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeHsmConfigurationsMessage', ],
			'output' => [
				'shape'         => 'HsmConfigurationMessage',
				'resultWrapper' => 'DescribeHsmConfigurationsResult',
			],
			'errors' => [
				[ 'shape' => 'HsmConfigurationNotFoundFault', ],
				[ 'shape' => 'InvalidTagFault', ],
			],
		],
		'DescribeLoggingStatus'                => [
			'name'   => 'DescribeLoggingStatus',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeLoggingStatusMessage', ],
			'output' => [
				'shape'         => 'LoggingStatus',
				'resultWrapper' => 'DescribeLoggingStatusResult',
			],
			'errors' => [ [ 'shape' => 'ClusterNotFoundFault', ], ],
		],
		'DescribeOrderableClusterOptions'      => [
			'name'   => 'DescribeOrderableClusterOptions',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeOrderableClusterOptionsMessage', ],
			'output' => [
				'shape'         => 'OrderableClusterOptionsMessage',
				'resultWrapper' => 'DescribeOrderableClusterOptionsResult',
			],
		],
		'DescribeReservedNodeOfferings'        => [
			'name'   => 'DescribeReservedNodeOfferings',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeReservedNodeOfferingsMessage', ],
			'output' => [
				'shape'         => 'ReservedNodeOfferingsMessage',
				'resultWrapper' => 'DescribeReservedNodeOfferingsResult',
			],
			'errors' => [
				[ 'shape' => 'ReservedNodeOfferingNotFoundFault', ],
				[ 'shape' => 'UnsupportedOperationFault', ],
				[ 'shape' => 'DependentServiceUnavailableFault', ],
			],
		],
		'DescribeReservedNodes'                => [
			'name'   => 'DescribeReservedNodes',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeReservedNodesMessage', ],
			'output' => [
				'shape'         => 'ReservedNodesMessage',
				'resultWrapper' => 'DescribeReservedNodesResult',
			],
			'errors' => [
				[ 'shape' => 'ReservedNodeNotFoundFault', ],
				[ 'shape' => 'DependentServiceUnavailableFault', ],
			],
		],
		'DescribeResize'                       => [
			'name'   => 'DescribeResize',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeResizeMessage', ],
			'output' => [
				'shape'         => 'ResizeProgressMessage',
				'resultWrapper' => 'DescribeResizeResult',
			],
			'errors' => [
				[ 'shape' => 'ClusterNotFoundFault', ],
				[ 'shape' => 'ResizeNotFoundFault', ],
			],
		],
		'DescribeSnapshotCopyGrants'           => [
			'name'   => 'DescribeSnapshotCopyGrants',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeSnapshotCopyGrantsMessage', ],
			'output' => [
				'shape'         => 'SnapshotCopyGrantMessage',
				'resultWrapper' => 'DescribeSnapshotCopyGrantsResult',
			],
			'errors' => [
				[ 'shape' => 'SnapshotCopyGrantNotFoundFault', ],
				[ 'shape' => 'InvalidTagFault', ],
			],
		],
		'DescribeSnapshotSchedules'            => [
			'name'   => 'DescribeSnapshotSchedules',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeSnapshotSchedulesMessage', ],
			'output' => [
				'shape'         => 'DescribeSnapshotSchedulesOutputMessage',
				'resultWrapper' => 'DescribeSnapshotSchedulesResult',
			],
		],
		'DescribeStorage'                      => [
			'name'   => 'DescribeStorage',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'output' => [
				'shape'         => 'CustomerStorageMessage',
				'resultWrapper' => 'DescribeStorageResult',
			],
		],
		'DescribeTableRestoreStatus'           => [
			'name'   => 'DescribeTableRestoreStatus',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeTableRestoreStatusMessage', ],
			'output' => [
				'shape'         => 'TableRestoreStatusMessage',
				'resultWrapper' => 'DescribeTableRestoreStatusResult',
			],
			'errors' => [
				[ 'shape' => 'TableRestoreNotFoundFault', ],
				[ 'shape' => 'ClusterNotFoundFault', ],
			],
		],
		'DescribeTags'                         => [
			'name'   => 'DescribeTags',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeTagsMessage', ],
			'output' => [
				'shape'         => 'TaggedResourceListMessage',
				'resultWrapper' => 'DescribeTagsResult',
			],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundFault', ],
				[ 'shape' => 'InvalidTagFault', ],
			],
		],
		'DisableLogging'                       => [
			'name'   => 'DisableLogging',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DisableLoggingMessage', ],
			'output' => [
				'shape'         => 'LoggingStatus',
				'resultWrapper' => 'DisableLoggingResult',
			],
			'errors' => [ [ 'shape' => 'ClusterNotFoundFault', ], ],
		],
		'DisableSnapshotCopy'                  => [
			'name'   => 'DisableSnapshotCopy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DisableSnapshotCopyMessage', ],
			'output' => [
				'shape'         => 'DisableSnapshotCopyResult',
				'resultWrapper' => 'DisableSnapshotCopyResult',
			],
			'errors' => [
				[ 'shape' => 'ClusterNotFoundFault', ],
				[ 'shape' => 'SnapshotCopyAlreadyDisabledFault', ],
				[ 'shape' => 'InvalidClusterStateFault', ],
				[ 'shape' => 'UnauthorizedOperation', ],
			],
		],
		'EnableLogging'                        => [
			'name'   => 'EnableLogging',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'EnableLoggingMessage', ],
			'output' => [
				'shape'         => 'LoggingStatus',
				'resultWrapper' => 'EnableLoggingResult',
			],
			'errors' => [
				[ 'shape' => 'ClusterNotFoundFault', ],
				[ 'shape' => 'BucketNotFoundFault', ],
				[ 'shape' => 'InsufficientS3BucketPolicyFault', ],
				[ 'shape' => 'InvalidS3KeyPrefixFault', ],
				[ 'shape' => 'InvalidS3BucketNameFault', ],
			],
		],
		'EnableSnapshotCopy'                   => [
			'name'   => 'EnableSnapshotCopy',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'EnableSnapshotCopyMessage', ],
			'output' => [
				'shape'         => 'EnableSnapshotCopyResult',
				'resultWrapper' => 'EnableSnapshotCopyResult',
			],
			'errors' => [
				[ 'shape' => 'IncompatibleOrderableOptions', ],
				[ 'shape' => 'InvalidClusterStateFault', ],
				[ 'shape' => 'ClusterNotFoundFault', ],
				[ 'shape' => 'CopyToRegionDisabledFault', ],
				[ 'shape' => 'SnapshotCopyAlreadyEnabledFault', ],
				[ 'shape' => 'UnknownSnapshotCopyRegionFault', ],
				[ 'shape' => 'UnauthorizedOperation', ],
				[ 'shape' => 'SnapshotCopyGrantNotFoundFault', ],
				[ 'shape' => 'LimitExceededFault', ],
				[ 'shape' => 'DependentServiceRequestThrottlingFault', ],
				[ 'shape' => 'InvalidRetentionPeriodFault', ],
			],
		],
		'GetClusterCredentials'                => [
			'name'   => 'GetClusterCredentials',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetClusterCredentialsMessage', ],
			'output' => [
				'shape'         => 'ClusterCredentials',
				'resultWrapper' => 'GetClusterCredentialsResult',
			],
			'errors' => [
				[ 'shape' => 'ClusterNotFoundFault', ],
				[ 'shape' => 'UnsupportedOperationFault', ],
			],
		],
		'GetReservedNodeExchangeOfferings'     => [
			'name'   => 'GetReservedNodeExchangeOfferings',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetReservedNodeExchangeOfferingsInputMessage', ],
			'output' => [
				'shape'         => 'GetReservedNodeExchangeOfferingsOutputMessage',
				'resultWrapper' => 'GetReservedNodeExchangeOfferingsResult',
			],
			'errors' => [
				[ 'shape' => 'ReservedNodeNotFoundFault', ],
				[ 'shape' => 'InvalidReservedNodeStateFault', ],
				[ 'shape' => 'ReservedNodeAlreadyMigratedFault', ],
				[ 'shape' => 'ReservedNodeOfferingNotFoundFault', ],
				[ 'shape' => 'UnsupportedOperationFault', ],
				[ 'shape' => 'DependentServiceUnavailableFault', ],
			],
		],
		'ModifyCluster'                        => [
			'name'   => 'ModifyCluster',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyClusterMessage', ],
			'output' => [ 'shape' => 'ModifyClusterResult', 'resultWrapper' => 'ModifyClusterResult', ],
			'errors' => [
				[ 'shape' => 'InvalidClusterStateFault', ],
				[ 'shape' => 'InvalidClusterSecurityGroupStateFault', ],
				[ 'shape' => 'ClusterNotFoundFault', ],
				[ 'shape' => 'NumberOfNodesQuotaExceededFault', ],
				[ 'shape' => 'NumberOfNodesPerClusterLimitExceededFault', ],
				[ 'shape' => 'ClusterSecurityGroupNotFoundFault', ],
				[ 'shape' => 'ClusterParameterGroupNotFoundFault', ],
				[ 'shape' => 'InsufficientClusterCapacityFault', ],
				[ 'shape' => 'UnsupportedOptionFault', ],
				[ 'shape' => 'UnauthorizedOperation', ],
				[ 'shape' => 'HsmClientCertificateNotFoundFault', ],
				[ 'shape' => 'HsmConfigurationNotFoundFault', ],
				[ 'shape' => 'ClusterAlreadyExistsFault', ],
				[ 'shape' => 'LimitExceededFault', ],
				[ 'shape' => 'DependentServiceRequestThrottlingFault', ],
				[ 'shape' => 'InvalidElasticIpFault', ],
				[ 'shape' => 'TableLimitExceededFault', ],
				[ 'shape' => 'InvalidClusterTrackFault', ],
				[ 'shape' => 'InvalidRetentionPeriodFault', ],
			],
		],
		'ModifyClusterDbRevision'              => [
			'name'   => 'ModifyClusterDbRevision',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyClusterDbRevisionMessage', ],
			'output' => [
				'shape'         => 'ModifyClusterDbRevisionResult',
				'resultWrapper' => 'ModifyClusterDbRevisionResult',
			],
			'errors' => [
				[ 'shape' => 'ClusterNotFoundFault', ],
				[ 'shape' => 'ClusterOnLatestRevisionFault', ],
				[ 'shape' => 'InvalidClusterStateFault', ],
			],
		],
		'ModifyClusterIamRoles'                => [
			'name'   => 'ModifyClusterIamRoles',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyClusterIamRolesMessage', ],
			'output' => [
				'shape'         => 'ModifyClusterIamRolesResult',
				'resultWrapper' => 'ModifyClusterIamRolesResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidClusterStateFault', ],
				[ 'shape' => 'ClusterNotFoundFault', ],
			],
		],
		'ModifyClusterMaintenance'             => [
			'name'   => 'ModifyClusterMaintenance',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyClusterMaintenanceMessage', ],
			'output' => [
				'shape'         => 'ModifyClusterMaintenanceResult',
				'resultWrapper' => 'ModifyClusterMaintenanceResult',
			],
			'errors' => [ [ 'shape' => 'ClusterNotFoundFault', ], ],
		],
		'ModifyClusterParameterGroup'          => [
			'name'   => 'ModifyClusterParameterGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyClusterParameterGroupMessage', ],
			'output' => [
				'shape'         => 'ClusterParameterGroupNameMessage',
				'resultWrapper' => 'ModifyClusterParameterGroupResult',
			],
			'errors' => [
				[ 'shape' => 'ClusterParameterGroupNotFoundFault', ],
				[ 'shape' => 'InvalidClusterParameterGroupStateFault', ],
			],
		],
		'ModifyClusterSnapshot'                => [
			'name'   => 'ModifyClusterSnapshot',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyClusterSnapshotMessage', ],
			'output' => [
				'shape'         => 'ModifyClusterSnapshotResult',
				'resultWrapper' => 'ModifyClusterSnapshotResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidClusterSnapshotStateFault', ],
				[ 'shape' => 'ClusterSnapshotNotFoundFault', ],
				[ 'shape' => 'InvalidRetentionPeriodFault', ],
			],
		],
		'ModifyClusterSnapshotSchedule'        => [
			'name'   => 'ModifyClusterSnapshotSchedule',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyClusterSnapshotScheduleMessage', ],
			'errors' => [
				[ 'shape' => 'ClusterNotFoundFault', ],
				[ 'shape' => 'SnapshotScheduleNotFoundFault', ],
				[ 'shape' => 'InvalidClusterSnapshotScheduleStateFault', ],
			],
		],
		'ModifyClusterSubnetGroup'             => [
			'name'   => 'ModifyClusterSubnetGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyClusterSubnetGroupMessage', ],
			'output' => [
				'shape'         => 'ModifyClusterSubnetGroupResult',
				'resultWrapper' => 'ModifyClusterSubnetGroupResult',
			],
			'errors' => [
				[ 'shape' => 'ClusterSubnetGroupNotFoundFault', ],
				[ 'shape' => 'ClusterSubnetQuotaExceededFault', ],
				[ 'shape' => 'SubnetAlreadyInUse', ],
				[ 'shape' => 'InvalidSubnet', ],
				[ 'shape' => 'UnauthorizedOperation', ],
				[ 'shape' => 'DependentServiceRequestThrottlingFault', ],
			],
		],
		'ModifyEventSubscription'              => [
			'name'   => 'ModifyEventSubscription',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyEventSubscriptionMessage', ],
			'output' => [
				'shape'         => 'ModifyEventSubscriptionResult',
				'resultWrapper' => 'ModifyEventSubscriptionResult',
			],
			'errors' => [
				[ 'shape' => 'SubscriptionNotFoundFault', ],
				[ 'shape' => 'SNSInvalidTopicFault', ],
				[ 'shape' => 'SNSNoAuthorizationFault', ],
				[ 'shape' => 'SNSTopicArnNotFoundFault', ],
				[ 'shape' => 'SubscriptionEventIdNotFoundFault', ],
				[ 'shape' => 'SubscriptionCategoryNotFoundFault', ],
				[ 'shape' => 'SubscriptionSeverityNotFoundFault', ],
				[ 'shape' => 'SourceNotFoundFault', ],
				[ 'shape' => 'InvalidSubscriptionStateFault', ],
			],
		],
		'ModifySnapshotCopyRetentionPeriod'    => [
			'name'   => 'ModifySnapshotCopyRetentionPeriod',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifySnapshotCopyRetentionPeriodMessage', ],
			'output' => [
				'shape'         => 'ModifySnapshotCopyRetentionPeriodResult',
				'resultWrapper' => 'ModifySnapshotCopyRetentionPeriodResult',
			],
			'errors' => [
				[ 'shape' => 'ClusterNotFoundFault', ],
				[ 'shape' => 'SnapshotCopyDisabledFault', ],
				[ 'shape' => 'UnauthorizedOperation', ],
				[ 'shape' => 'InvalidClusterStateFault', ],
				[ 'shape' => 'InvalidRetentionPeriodFault', ],
			],
		],
		'ModifySnapshotSchedule'               => [
			'name'   => 'ModifySnapshotSchedule',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifySnapshotScheduleMessage', ],
			'output' => [
				'shape'         => 'SnapshotSchedule',
				'resultWrapper' => 'ModifySnapshotScheduleResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidScheduleFault', ],
				[ 'shape' => 'SnapshotScheduleNotFoundFault', ],
				[ 'shape' => 'SnapshotScheduleUpdateInProgressFault', ],
			],
		],
		'PurchaseReservedNodeOffering'         => [
			'name'   => 'PurchaseReservedNodeOffering',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PurchaseReservedNodeOfferingMessage', ],
			'output' => [
				'shape'         => 'PurchaseReservedNodeOfferingResult',
				'resultWrapper' => 'PurchaseReservedNodeOfferingResult',
			],
			'errors' => [
				[ 'shape' => 'ReservedNodeOfferingNotFoundFault', ],
				[ 'shape' => 'ReservedNodeAlreadyExistsFault', ],
				[ 'shape' => 'ReservedNodeQuotaExceededFault', ],
				[ 'shape' => 'UnsupportedOperationFault', ],
			],
		],
		'RebootCluster'                        => [
			'name'   => 'RebootCluster',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RebootClusterMessage', ],
			'output' => [
				'shape'         => 'RebootClusterResult',
				'resultWrapper' => 'RebootClusterResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidClusterStateFault', ],
				[ 'shape' => 'ClusterNotFoundFault', ],
			],
		],
		'ResetClusterParameterGroup'           => [
			'name'   => 'ResetClusterParameterGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ResetClusterParameterGroupMessage', ],
			'output' => [
				'shape'         => 'ClusterParameterGroupNameMessage',
				'resultWrapper' => 'ResetClusterParameterGroupResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidClusterParameterGroupStateFault', ],
				[ 'shape' => 'ClusterParameterGroupNotFoundFault', ],
			],
		],
		'ResizeCluster'                        => [
			'name'   => 'ResizeCluster',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ResizeClusterMessage', ],
			'output' => [
				'shape'         => 'ResizeClusterResult',
				'resultWrapper' => 'ResizeClusterResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidClusterStateFault', ],
				[ 'shape' => 'ClusterNotFoundFault', ],
				[ 'shape' => 'NumberOfNodesQuotaExceededFault', ],
				[ 'shape' => 'NumberOfNodesPerClusterLimitExceededFault', ],
				[ 'shape' => 'InsufficientClusterCapacityFault', ],
				[ 'shape' => 'UnsupportedOptionFault', ],
				[ 'shape' => 'UnsupportedOperationFault', ],
				[ 'shape' => 'UnauthorizedOperation', ],
				[ 'shape' => 'LimitExceededFault', ],
			],
		],
		'RestoreFromClusterSnapshot'           => [
			'name'   => 'RestoreFromClusterSnapshot',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RestoreFromClusterSnapshotMessage', ],
			'output' => [
				'shape'         => 'RestoreFromClusterSnapshotResult',
				'resultWrapper' => 'RestoreFromClusterSnapshotResult',
			],
			'errors' => [
				[ 'shape' => 'AccessToSnapshotDeniedFault', ],
				[ 'shape' => 'ClusterAlreadyExistsFault', ],
				[ 'shape' => 'ClusterSnapshotNotFoundFault', ],
				[ 'shape' => 'ClusterQuotaExceededFault', ],
				[ 'shape' => 'InsufficientClusterCapacityFault', ],
				[ 'shape' => 'InvalidClusterSnapshotStateFault', ],
				[ 'shape' => 'InvalidRestoreFault', ],
				[ 'shape' => 'NumberOfNodesQuotaExceededFault', ],
				[ 'shape' => 'NumberOfNodesPerClusterLimitExceededFault', ],
				[ 'shape' => 'InvalidVPCNetworkStateFault', ],
				[ 'shape' => 'InvalidClusterSubnetGroupStateFault', ],
				[ 'shape' => 'InvalidSubnet', ],
				[ 'shape' => 'ClusterSubnetGroupNotFoundFault', ],
				[ 'shape' => 'UnauthorizedOperation', ],
				[ 'shape' => 'HsmClientCertificateNotFoundFault', ],
				[ 'shape' => 'HsmConfigurationNotFoundFault', ],
				[ 'shape' => 'InvalidElasticIpFault', ],
				[ 'shape' => 'ClusterParameterGroupNotFoundFault', ],
				[ 'shape' => 'ClusterSecurityGroupNotFoundFault', ],
				[ 'shape' => 'LimitExceededFault', ],
				[ 'shape' => 'DependentServiceRequestThrottlingFault', ],
				[ 'shape' => 'InvalidClusterTrackFault', ],
				[ 'shape' => 'SnapshotScheduleNotFoundFault', ],
				[ 'shape' => 'TagLimitExceededFault', ],
				[ 'shape' => 'InvalidTagFault', ],
			],
		],
		'RestoreTableFromClusterSnapshot'      => [
			'name'   => 'RestoreTableFromClusterSnapshot',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RestoreTableFromClusterSnapshotMessage', ],
			'output' => [
				'shape'         => 'RestoreTableFromClusterSnapshotResult',
				'resultWrapper' => 'RestoreTableFromClusterSnapshotResult',
			],
			'errors' => [
				[ 'shape' => 'ClusterSnapshotNotFoundFault', ],
				[ 'shape' => 'InProgressTableRestoreQuotaExceededFault', ],
				[ 'shape' => 'InvalidClusterSnapshotStateFault', ],
				[ 'shape' => 'InvalidTableRestoreArgumentFault', ],
				[ 'shape' => 'ClusterNotFoundFault', ],
				[ 'shape' => 'InvalidClusterStateFault', ],
				[ 'shape' => 'UnsupportedOperationFault', ],
			],
		],
		'RevokeClusterSecurityGroupIngress'    => [
			'name'   => 'RevokeClusterSecurityGroupIngress',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RevokeClusterSecurityGroupIngressMessage', ],
			'output' => [
				'shape'         => 'RevokeClusterSecurityGroupIngressResult',
				'resultWrapper' => 'RevokeClusterSecurityGroupIngressResult',
			],
			'errors' => [
				[ 'shape' => 'ClusterSecurityGroupNotFoundFault', ],
				[ 'shape' => 'AuthorizationNotFoundFault', ],
				[ 'shape' => 'InvalidClusterSecurityGroupStateFault', ],
			],
		],
		'RevokeSnapshotAccess'                 => [
			'name'   => 'RevokeSnapshotAccess',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RevokeSnapshotAccessMessage', ],
			'output' => [
				'shape'         => 'RevokeSnapshotAccessResult',
				'resultWrapper' => 'RevokeSnapshotAccessResult',
			],
			'errors' => [
				[ 'shape' => 'AccessToSnapshotDeniedFault', ],
				[ 'shape' => 'AuthorizationNotFoundFault', ],
				[ 'shape' => 'ClusterSnapshotNotFoundFault', ],
			],
		],
		'RotateEncryptionKey'                  => [
			'name'   => 'RotateEncryptionKey',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RotateEncryptionKeyMessage', ],
			'output' => [
				'shape'         => 'RotateEncryptionKeyResult',
				'resultWrapper' => 'RotateEncryptionKeyResult',
			],
			'errors' => [
				[ 'shape' => 'ClusterNotFoundFault', ],
				[ 'shape' => 'InvalidClusterStateFault', ],
				[ 'shape' => 'DependentServiceRequestThrottlingFault', ],
			],
		],
	],
	'shapes'     => [
		'AcceptReservedNodeExchangeInputMessage'        => [
			'type'     => 'structure',
			'required' => [
				'ReservedNodeId',
				'TargetReservedNodeOfferingId',
			],
			'members'  => [
				'ReservedNodeId'               => [ 'shape' => 'String', ],
				'TargetReservedNodeOfferingId' => [ 'shape' => 'String', ],
			],
		],
		'AcceptReservedNodeExchangeOutputMessage'       => [
			'type'    => 'structure',
			'members' => [ 'ExchangedReservedNode' => [ 'shape' => 'ReservedNode', ], ],
		],
		'AccessToSnapshotDeniedFault'                   => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'AccessToSnapshotDenied',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'AccountAttribute'                              => [
			'type'    => 'structure',
			'members' => [
				'AttributeName'   => [ 'shape' => 'String', ],
				'AttributeValues' => [ 'shape' => 'AttributeValueList', ],
			],
		],
		'AccountAttributeList'                          => [
			'type'    => 'structure',
			'members' => [ 'AccountAttributes' => [ 'shape' => 'AttributeList', ], ],
		],
		'AccountWithRestoreAccess'                      => [
			'type'    => 'structure',
			'members' => [
				'AccountId'    => [ 'shape' => 'String', ],
				'AccountAlias' => [ 'shape' => 'String', ],
			],
		],
		'AccountsWithRestoreAccessList'                 => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'AccountWithRestoreAccess',
				'locationName' => 'AccountWithRestoreAccess',
			],
		],
		'AssociatedClusterList'                         => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ClusterAssociatedToSchedule',
				'locationName' => 'ClusterAssociatedToSchedule',
			],
		],
		'AttributeList'                                 => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'AccountAttribute',
				'locationName' => 'AccountAttribute',
			],
		],
		'AttributeNameList'                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'AttributeName',
			],
		],
		'AttributeValueList'                            => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'AttributeValueTarget',
				'locationName' => 'AttributeValueTarget',
			],
		],
		'AttributeValueTarget'                          => [
			'type'    => 'structure',
			'members' => [ 'AttributeValue' => [ 'shape' => 'String', ], ],
		],
		'AuthorizationAlreadyExistsFault'               => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'AuthorizationAlreadyExists',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'AuthorizationNotFoundFault'                    => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'AuthorizationNotFound',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'AuthorizationQuotaExceededFault'               => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'AuthorizationQuotaExceeded',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'AuthorizeClusterSecurityGroupIngressMessage'   => [
			'type'     => 'structure',
			'required' => [ 'ClusterSecurityGroupName', ],
			'members'  => [
				'ClusterSecurityGroupName' => [ 'shape' => 'String', ],
				'CIDRIP'                   => [ 'shape' => 'String', ],
				'EC2SecurityGroupName'     => [ 'shape' => 'String', ],
				'EC2SecurityGroupOwnerId'  => [ 'shape' => 'String', ],
			],
		],
		'AuthorizeClusterSecurityGroupIngressResult'    => [
			'type'    => 'structure',
			'members' => [ 'ClusterSecurityGroup' => [ 'shape' => 'ClusterSecurityGroup', ], ],
		],
		'AuthorizeSnapshotAccessMessage'                => [
			'type'     => 'structure',
			'required' => [
				'SnapshotIdentifier',
				'AccountWithRestoreAccess',
			],
			'members'  => [
				'SnapshotIdentifier'        => [ 'shape' => 'String', ],
				'SnapshotClusterIdentifier' => [ 'shape' => 'String', ],
				'AccountWithRestoreAccess'  => [ 'shape' => 'String', ],
			],
		],
		'AuthorizeSnapshotAccessResult'                 => [
			'type'    => 'structure',
			'members' => [ 'Snapshot' => [ 'shape' => 'Snapshot', ], ],
		],
		'AvailabilityZone'                              => [
			'type'    => 'structure',
			'members' => [
				'Name'               => [ 'shape' => 'String', ],
				'SupportedPlatforms' => [ 'shape' => 'SupportedPlatformsList', ],
			],
			'wrapper' => true,
		],
		'AvailabilityZoneList'                          => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'AvailabilityZone',
				'locationName' => 'AvailabilityZone',
			],
		],
		'BatchDeleteClusterSnapshotsRequest'            => [
			'type'     => 'structure',
			'required' => [ 'Identifiers', ],
			'members'  => [ 'Identifiers' => [ 'shape' => 'DeleteClusterSnapshotMessageList', ], ],
		],
		'BatchDeleteClusterSnapshotsResult'             => [
			'type'    => 'structure',
			'members' => [
				'Resources' => [ 'shape' => 'SnapshotIdentifierList', ],
				'Errors'    => [ 'shape' => 'BatchSnapshotOperationErrorList', ],
			],
		],
		'BatchDeleteRequestSizeExceededFault'           => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'BatchDeleteRequestSizeExceeded',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'BatchModifyClusterSnapshotsLimitExceededFault' => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'BatchModifyClusterSnapshotsLimitExceededFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'BatchModifyClusterSnapshotsMessage'            => [
			'type'     => 'structure',
			'required' => [ 'SnapshotIdentifierList', ],
			'members'  => [
				'SnapshotIdentifierList'        => [ 'shape' => 'SnapshotIdentifierList', ],
				'ManualSnapshotRetentionPeriod' => [ 'shape' => 'IntegerOptional', ],
				'Force'                         => [ 'shape' => 'Boolean', ],
			],
		],
		'BatchModifyClusterSnapshotsOutputMessage'      => [
			'type'    => 'structure',
			'members' => [
				'Resources' => [ 'shape' => 'SnapshotIdentifierList', ],
				'Errors'    => [ 'shape' => 'BatchSnapshotOperationErrors', ],
			],
		],
		'BatchSnapshotOperationErrorList'               => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'SnapshotErrorMessage',
				'locationName' => 'SnapshotErrorMessage',
			],
		],
		'BatchSnapshotOperationErrors'                  => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'SnapshotErrorMessage',
				'locationName' => 'SnapshotErrorMessage',
			],
		],
		'Boolean'                                       => [ 'type' => 'boolean', ],
		'BooleanOptional'                               => [ 'type' => 'boolean', ],
		'BucketNotFoundFault'                           => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'BucketNotFoundFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'CancelResizeMessage'                           => [
			'type'     => 'structure',
			'required' => [ 'ClusterIdentifier', ],
			'members'  => [ 'ClusterIdentifier' => [ 'shape' => 'String', ], ],
		],
		'Cluster'                                       => [
			'type'    => 'structure',
			'members' => [
				'ClusterIdentifier'                => [ 'shape' => 'String', ],
				'NodeType'                         => [ 'shape' => 'String', ],
				'ClusterStatus'                    => [ 'shape' => 'String', ],
				'ClusterAvailabilityStatus'        => [ 'shape' => 'String', ],
				'ModifyStatus'                     => [ 'shape' => 'String', ],
				'MasterUsername'                   => [ 'shape' => 'String', ],
				'DBName'                           => [ 'shape' => 'String', ],
				'Endpoint'                         => [ 'shape' => 'Endpoint', ],
				'ClusterCreateTime'                => [ 'shape' => 'TStamp', ],
				'AutomatedSnapshotRetentionPeriod' => [ 'shape' => 'Integer', ],
				'ManualSnapshotRetentionPeriod'    => [ 'shape' => 'Integer', ],
				'ClusterSecurityGroups'            => [ 'shape' => 'ClusterSecurityGroupMembershipList', ],
				'VpcSecurityGroups'                => [ 'shape' => 'VpcSecurityGroupMembershipList', ],
				'ClusterParameterGroups'           => [ 'shape' => 'ClusterParameterGroupStatusList', ],
				'ClusterSubnetGroupName'           => [ 'shape' => 'String', ],
				'VpcId'                            => [ 'shape' => 'String', ],
				'AvailabilityZone'                 => [ 'shape' => 'String', ],
				'PreferredMaintenanceWindow'       => [ 'shape' => 'String', ],
				'PendingModifiedValues'            => [ 'shape' => 'PendingModifiedValues', ],
				'ClusterVersion'                   => [ 'shape' => 'String', ],
				'AllowVersionUpgrade'              => [ 'shape' => 'Boolean', ],
				'NumberOfNodes'                    => [ 'shape' => 'Integer', ],
				'PubliclyAccessible'               => [ 'shape' => 'Boolean', ],
				'Encrypted'                        => [ 'shape' => 'Boolean', ],
				'RestoreStatus'                    => [ 'shape' => 'RestoreStatus', ],
				'DataTransferProgress'             => [ 'shape' => 'DataTransferProgress', ],
				'HsmStatus'                        => [ 'shape' => 'HsmStatus', ],
				'ClusterSnapshotCopyStatus'        => [ 'shape' => 'ClusterSnapshotCopyStatus', ],
				'ClusterPublicKey'                 => [ 'shape' => 'String', ],
				'ClusterNodes'                     => [ 'shape' => 'ClusterNodesList', ],
				'ElasticIpStatus'                  => [ 'shape' => 'ElasticIpStatus', ],
				'ClusterRevisionNumber'            => [ 'shape' => 'String', ],
				'Tags'                             => [ 'shape' => 'TagList', ],
				'KmsKeyId'                         => [ 'shape' => 'String', ],
				'EnhancedVpcRouting'               => [ 'shape' => 'Boolean', ],
				'IamRoles'                         => [ 'shape' => 'ClusterIamRoleList', ],
				'PendingActions'                   => [ 'shape' => 'PendingActionsList', ],
				'MaintenanceTrackName'             => [ 'shape' => 'String', ],
				'ElasticResizeNumberOfNodeOptions' => [ 'shape' => 'String', ],
				'DeferredMaintenanceWindows'       => [ 'shape' => 'DeferredMaintenanceWindowsList', ],
				'SnapshotScheduleIdentifier'       => [ 'shape' => 'String', ],
				'SnapshotScheduleState'            => [ 'shape' => 'ScheduleState', ],
				'ResizeInfo'                       => [ 'shape' => 'ResizeInfo', ],
			],
			'wrapper' => true,
		],
		'ClusterAlreadyExistsFault'                     => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ClusterAlreadyExists',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ClusterAssociatedToSchedule'                   => [
			'type'    => 'structure',
			'members' => [
				'ClusterIdentifier'        => [ 'shape' => 'String', ],
				'ScheduleAssociationState' => [ 'shape' => 'ScheduleState', ],
			],
		],
		'ClusterCredentials'                            => [
			'type'    => 'structure',
			'members' => [
				'DbUser'     => [ 'shape' => 'String', ],
				'DbPassword' => [ 'shape' => 'SensitiveString', ],
				'Expiration' => [ 'shape' => 'TStamp', ],
			],
		],
		'ClusterDbRevision'                             => [
			'type'    => 'structure',
			'members' => [
				'ClusterIdentifier'           => [ 'shape' => 'String', ],
				'CurrentDatabaseRevision'     => [ 'shape' => 'String', ],
				'DatabaseRevisionReleaseDate' => [ 'shape' => 'TStamp', ],
				'RevisionTargets'             => [ 'shape' => 'RevisionTargetsList', ],
			],
		],
		'ClusterDbRevisionsList'                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ClusterDbRevision',
				'locationName' => 'ClusterDbRevision',
			],
		],
		'ClusterDbRevisionsMessage'                     => [
			'type'    => 'structure',
			'members' => [
				'Marker'             => [ 'shape' => 'String', ],
				'ClusterDbRevisions' => [ 'shape' => 'ClusterDbRevisionsList', ],
			],
		],
		'ClusterIamRole'                                => [
			'type'    => 'structure',
			'members' => [
				'IamRoleArn'  => [ 'shape' => 'String', ],
				'ApplyStatus' => [ 'shape' => 'String', ],
			],
		],
		'ClusterIamRoleList'                            => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ClusterIamRole',
				'locationName' => 'ClusterIamRole',
			],
		],
		'ClusterList'                                   => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Cluster',
				'locationName' => 'Cluster',
			],
		],
		'ClusterNode'                                   => [
			'type'    => 'structure',
			'members' => [
				'NodeRole'         => [ 'shape' => 'String', ],
				'PrivateIPAddress' => [ 'shape' => 'String', ],
				'PublicIPAddress'  => [ 'shape' => 'String', ],
			],
		],
		'ClusterNodesList'                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ClusterNode', ],
		],
		'ClusterNotFoundFault'                          => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ClusterNotFound',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ClusterOnLatestRevisionFault'                  => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ClusterOnLatestRevision',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ClusterParameterGroup'                         => [
			'type'    => 'structure',
			'members' => [
				'ParameterGroupName'   => [ 'shape' => 'String', ],
				'ParameterGroupFamily' => [ 'shape' => 'String', ],
				'Description'          => [ 'shape' => 'String', ],
				'Tags'                 => [ 'shape' => 'TagList', ],
			],
			'wrapper' => true,
		],
		'ClusterParameterGroupAlreadyExistsFault'       => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ClusterParameterGroupAlreadyExists',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ClusterParameterGroupDetails'                  => [
			'type'    => 'structure',
			'members' => [
				'Parameters' => [ 'shape' => 'ParametersList', ],
				'Marker'     => [ 'shape' => 'String', ],
			],
		],
		'ClusterParameterGroupNameMessage'              => [
			'type'    => 'structure',
			'members' => [
				'ParameterGroupName'   => [ 'shape' => 'String', ],
				'ParameterGroupStatus' => [ 'shape' => 'String', ],
			],
		],
		'ClusterParameterGroupNotFoundFault'            => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ClusterParameterGroupNotFound',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ClusterParameterGroupQuotaExceededFault'       => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ClusterParameterGroupQuotaExceeded',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ClusterParameterGroupStatus'                   => [
			'type'    => 'structure',
			'members' => [
				'ParameterGroupName'         => [ 'shape' => 'String', ],
				'ParameterApplyStatus'       => [ 'shape' => 'String', ],
				'ClusterParameterStatusList' => [ 'shape' => 'ClusterParameterStatusList', ],
			],
		],
		'ClusterParameterGroupStatusList'               => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ClusterParameterGroupStatus',
				'locationName' => 'ClusterParameterGroup',
			],
		],
		'ClusterParameterGroupsMessage'                 => [
			'type'    => 'structure',
			'members' => [
				'Marker'          => [ 'shape' => 'String', ],
				'ParameterGroups' => [ 'shape' => 'ParameterGroupList', ],
			],
		],
		'ClusterParameterStatus'                        => [
			'type'    => 'structure',
			'members' => [
				'ParameterName'                  => [ 'shape' => 'String', ],
				'ParameterApplyStatus'           => [ 'shape' => 'String', ],
				'ParameterApplyErrorDescription' => [ 'shape' => 'String', ],
			],
		],
		'ClusterParameterStatusList'                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ClusterParameterStatus', ],
		],
		'ClusterQuotaExceededFault'                     => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ClusterQuotaExceeded',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ClusterSecurityGroup'                          => [
			'type'    => 'structure',
			'members' => [
				'ClusterSecurityGroupName' => [ 'shape' => 'String', ],
				'Description'              => [ 'shape' => 'String', ],
				'EC2SecurityGroups'        => [ 'shape' => 'EC2SecurityGroupList', ],
				'IPRanges'                 => [ 'shape' => 'IPRangeList', ],
				'Tags'                     => [ 'shape' => 'TagList', ],
			],
			'wrapper' => true,
		],
		'ClusterSecurityGroupAlreadyExistsFault'        => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ClusterSecurityGroupAlreadyExists',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ClusterSecurityGroupMembership'                => [
			'type'    => 'structure',
			'members' => [
				'ClusterSecurityGroupName' => [ 'shape' => 'String', ],
				'Status'                   => [ 'shape' => 'String', ],
			],
		],
		'ClusterSecurityGroupMembershipList'            => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ClusterSecurityGroupMembership',
				'locationName' => 'ClusterSecurityGroup',
			],
		],
		'ClusterSecurityGroupMessage'                   => [
			'type'    => 'structure',
			'members' => [
				'Marker'                => [ 'shape' => 'String', ],
				'ClusterSecurityGroups' => [ 'shape' => 'ClusterSecurityGroups', ],
			],
		],
		'ClusterSecurityGroupNameList'                  => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'ClusterSecurityGroupName',
			],
		],
		'ClusterSecurityGroupNotFoundFault'             => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ClusterSecurityGroupNotFound',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ClusterSecurityGroupQuotaExceededFault'        => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'QuotaExceeded.ClusterSecurityGroup',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ClusterSecurityGroups'                         => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ClusterSecurityGroup',
				'locationName' => 'ClusterSecurityGroup',
			],
		],
		'ClusterSnapshotAlreadyExistsFault'             => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ClusterSnapshotAlreadyExists',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ClusterSnapshotCopyStatus'                     => [
			'type'    => 'structure',
			'members' => [
				'DestinationRegion'             => [ 'shape' => 'String', ],
				'RetentionPeriod'               => [ 'shape' => 'Long', ],
				'ManualSnapshotRetentionPeriod' => [ 'shape' => 'Integer', ],
				'SnapshotCopyGrantName'         => [ 'shape' => 'String', ],
			],
		],
		'ClusterSnapshotNotFoundFault'                  => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ClusterSnapshotNotFound',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ClusterSnapshotQuotaExceededFault'             => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ClusterSnapshotQuotaExceeded',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ClusterSubnetGroup'                            => [
			'type'    => 'structure',
			'members' => [
				'ClusterSubnetGroupName' => [ 'shape' => 'String', ],
				'Description'            => [ 'shape' => 'String', ],
				'VpcId'                  => [ 'shape' => 'String', ],
				'SubnetGroupStatus'      => [ 'shape' => 'String', ],
				'Subnets'                => [ 'shape' => 'SubnetList', ],
				'Tags'                   => [ 'shape' => 'TagList', ],
			],
			'wrapper' => true,
		],
		'ClusterSubnetGroupAlreadyExistsFault'          => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ClusterSubnetGroupAlreadyExists',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ClusterSubnetGroupMessage'                     => [
			'type'    => 'structure',
			'members' => [
				'Marker'              => [ 'shape' => 'String', ],
				'ClusterSubnetGroups' => [ 'shape' => 'ClusterSubnetGroups', ],
			],
		],
		'ClusterSubnetGroupNotFoundFault'               => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ClusterSubnetGroupNotFoundFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ClusterSubnetGroupQuotaExceededFault'          => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ClusterSubnetGroupQuotaExceeded',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ClusterSubnetGroups'                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ClusterSubnetGroup',
				'locationName' => 'ClusterSubnetGroup',
			],
		],
		'ClusterSubnetQuotaExceededFault'               => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ClusterSubnetQuotaExceededFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ClusterVersion'                                => [
			'type'    => 'structure',
			'members' => [
				'ClusterVersion'              => [ 'shape' => 'String', ],
				'ClusterParameterGroupFamily' => [ 'shape' => 'String', ],
				'Description'                 => [ 'shape' => 'String', ],
			],
		],
		'ClusterVersionList'                            => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ClusterVersion',
				'locationName' => 'ClusterVersion',
			],
		],
		'ClusterVersionsMessage'                        => [
			'type'    => 'structure',
			'members' => [
				'Marker'          => [ 'shape' => 'String', ],
				'ClusterVersions' => [ 'shape' => 'ClusterVersionList', ],
			],
		],
		'ClustersMessage'                               => [
			'type'    => 'structure',
			'members' => [
				'Marker'   => [ 'shape' => 'String', ],
				'Clusters' => [ 'shape' => 'ClusterList', ],
			],
		],
		'CopyClusterSnapshotMessage'                    => [
			'type'     => 'structure',
			'required' => [
				'SourceSnapshotIdentifier',
				'TargetSnapshotIdentifier',
			],
			'members'  => [
				'SourceSnapshotIdentifier'        => [ 'shape' => 'String', ],
				'SourceSnapshotClusterIdentifier' => [ 'shape' => 'String', ],
				'TargetSnapshotIdentifier'        => [ 'shape' => 'String', ],
				'ManualSnapshotRetentionPeriod'   => [ 'shape' => 'IntegerOptional', ],
			],
		],
		'CopyClusterSnapshotResult'                     => [
			'type'    => 'structure',
			'members' => [ 'Snapshot' => [ 'shape' => 'Snapshot', ], ],
		],
		'CopyToRegionDisabledFault'                     => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'CopyToRegionDisabledFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'CreateClusterMessage'                          => [
			'type'     => 'structure',
			'required' => [ 'ClusterIdentifier', 'NodeType', 'MasterUsername', 'MasterUserPassword', ],
			'members'  => [
				'DBName'                           => [ 'shape' => 'String', ],
				'ClusterIdentifier'                => [ 'shape' => 'String', ],
				'ClusterType'                      => [ 'shape' => 'String', ],
				'NodeType'                         => [ 'shape' => 'String', ],
				'MasterUsername'                   => [ 'shape' => 'String', ],
				'MasterUserPassword'               => [ 'shape' => 'String', ],
				'ClusterSecurityGroups'            => [ 'shape' => 'ClusterSecurityGroupNameList', ],
				'VpcSecurityGroupIds'              => [ 'shape' => 'VpcSecurityGroupIdList', ],
				'ClusterSubnetGroupName'           => [ 'shape' => 'String', ],
				'AvailabilityZone'                 => [ 'shape' => 'String', ],
				'PreferredMaintenanceWindow'       => [ 'shape' => 'String', ],
				'ClusterParameterGroupName'        => [ 'shape' => 'String', ],
				'AutomatedSnapshotRetentionPeriod' => [ 'shape' => 'IntegerOptional', ],
				'ManualSnapshotRetentionPeriod'    => [ 'shape' => 'IntegerOptional', ],
				'Port'                             => [ 'shape' => 'IntegerOptional', ],
				'ClusterVersion'                   => [ 'shape' => 'String', ],
				'AllowVersionUpgrade'              => [ 'shape' => 'BooleanOptional', ],
				'NumberOfNodes'                    => [ 'shape' => 'IntegerOptional', ],
				'PubliclyAccessible'               => [ 'shape' => 'BooleanOptional', ],
				'Encrypted'                        => [ 'shape' => 'BooleanOptional', ],
				'HsmClientCertificateIdentifier'   => [ 'shape' => 'String', ],
				'HsmConfigurationIdentifier'       => [ 'shape' => 'String', ],
				'ElasticIp'                        => [ 'shape' => 'String', ],
				'Tags'                             => [ 'shape' => 'TagList', ],
				'KmsKeyId'                         => [ 'shape' => 'String', ],
				'EnhancedVpcRouting'               => [ 'shape' => 'BooleanOptional', ],
				'AdditionalInfo'                   => [ 'shape' => 'String', ],
				'IamRoles'                         => [ 'shape' => 'IamRoleArnList', ],
				'MaintenanceTrackName'             => [ 'shape' => 'String', ],
				'SnapshotScheduleIdentifier'       => [ 'shape' => 'String', ],
			],
		],
		'CreateClusterParameterGroupMessage'            => [
			'type'     => 'structure',
			'required' => [
				'ParameterGroupName',
				'ParameterGroupFamily',
				'Description',
			],
			'members'  => [
				'ParameterGroupName'   => [ 'shape' => 'String', ],
				'ParameterGroupFamily' => [ 'shape' => 'String', ],
				'Description'          => [ 'shape' => 'String', ],
				'Tags'                 => [ 'shape' => 'TagList', ],
			],
		],
		'CreateClusterParameterGroupResult'             => [
			'type'    => 'structure',
			'members' => [ 'ClusterParameterGroup' => [ 'shape' => 'ClusterParameterGroup', ], ],
		],
		'CreateClusterResult'                           => [
			'type'    => 'structure',
			'members' => [ 'Cluster' => [ 'shape' => 'Cluster', ], ],
		],
		'CreateClusterSecurityGroupMessage'             => [
			'type'     => 'structure',
			'required' => [
				'ClusterSecurityGroupName',
				'Description',
			],
			'members'  => [
				'ClusterSecurityGroupName' => [ 'shape' => 'String', ],
				'Description'              => [ 'shape' => 'String', ],
				'Tags'                     => [ 'shape' => 'TagList', ],
			],
		],
		'CreateClusterSecurityGroupResult'              => [
			'type'    => 'structure',
			'members' => [ 'ClusterSecurityGroup' => [ 'shape' => 'ClusterSecurityGroup', ], ],
		],
		'CreateClusterSnapshotMessage'                  => [
			'type'     => 'structure',
			'required' => [
				'SnapshotIdentifier',
				'ClusterIdentifier',
			],
			'members'  => [
				'SnapshotIdentifier'            => [ 'shape' => 'String', ],
				'ClusterIdentifier'             => [ 'shape' => 'String', ],
				'ManualSnapshotRetentionPeriod' => [ 'shape' => 'IntegerOptional', ],
				'Tags'                          => [ 'shape' => 'TagList', ],
			],
		],
		'CreateClusterSnapshotResult'                   => [
			'type'    => 'structure',
			'members' => [ 'Snapshot' => [ 'shape' => 'Snapshot', ], ],
		],
		'CreateClusterSubnetGroupMessage'               => [
			'type'     => 'structure',
			'required' => [
				'ClusterSubnetGroupName',
				'Description',
				'SubnetIds',
			],
			'members'  => [
				'ClusterSubnetGroupName' => [ 'shape' => 'String', ],
				'Description'            => [ 'shape' => 'String', ],
				'SubnetIds'              => [ 'shape' => 'SubnetIdentifierList', ],
				'Tags'                   => [ 'shape' => 'TagList', ],
			],
		],
		'CreateClusterSubnetGroupResult'                => [
			'type'    => 'structure',
			'members' => [ 'ClusterSubnetGroup' => [ 'shape' => 'ClusterSubnetGroup', ], ],
		],
		'CreateEventSubscriptionMessage'                => [
			'type'     => 'structure',
			'required' => [ 'SubscriptionName', 'SnsTopicArn', ],
			'members'  => [
				'SubscriptionName' => [ 'shape' => 'String', ],
				'SnsTopicArn'      => [ 'shape' => 'String', ],
				'SourceType'       => [ 'shape' => 'String', ],
				'SourceIds'        => [ 'shape' => 'SourceIdsList', ],
				'EventCategories'  => [ 'shape' => 'EventCategoriesList', ],
				'Severity'         => [ 'shape' => 'String', ],
				'Enabled'          => [ 'shape' => 'BooleanOptional', ],
				'Tags'             => [ 'shape' => 'TagList', ],
			],
		],
		'CreateEventSubscriptionResult'                 => [
			'type'    => 'structure',
			'members' => [ 'EventSubscription' => [ 'shape' => 'EventSubscription', ], ],
		],
		'CreateHsmClientCertificateMessage'             => [
			'type'     => 'structure',
			'required' => [ 'HsmClientCertificateIdentifier', ],
			'members'  => [
				'HsmClientCertificateIdentifier' => [ 'shape' => 'String', ],
				'Tags'                           => [ 'shape' => 'TagList', ],
			],
		],
		'CreateHsmClientCertificateResult'              => [
			'type'    => 'structure',
			'members' => [ 'HsmClientCertificate' => [ 'shape' => 'HsmClientCertificate', ], ],
		],
		'CreateHsmConfigurationMessage'                 => [
			'type'     => 'structure',
			'required' => [
				'HsmConfigurationIdentifier',
				'Description',
				'HsmIpAddress',
				'HsmPartitionName',
				'HsmPartitionPassword',
				'HsmServerPublicCertificate',
			],
			'members'  => [
				'HsmConfigurationIdentifier' => [ 'shape' => 'String', ],
				'Description'                => [ 'shape' => 'String', ],
				'HsmIpAddress'               => [ 'shape' => 'String', ],
				'HsmPartitionName'           => [ 'shape' => 'String', ],
				'HsmPartitionPassword'       => [ 'shape' => 'String', ],
				'HsmServerPublicCertificate' => [ 'shape' => 'String', ],
				'Tags'                       => [ 'shape' => 'TagList', ],
			],
		],
		'CreateHsmConfigurationResult'                  => [
			'type'    => 'structure',
			'members' => [ 'HsmConfiguration' => [ 'shape' => 'HsmConfiguration', ], ],
		],
		'CreateSnapshotCopyGrantMessage'                => [
			'type'     => 'structure',
			'required' => [ 'SnapshotCopyGrantName', ],
			'members'  => [
				'SnapshotCopyGrantName' => [ 'shape' => 'String', ],
				'KmsKeyId'              => [ 'shape' => 'String', ],
				'Tags'                  => [ 'shape' => 'TagList', ],
			],
		],
		'CreateSnapshotCopyGrantResult'                 => [
			'type'    => 'structure',
			'members' => [ 'SnapshotCopyGrant' => [ 'shape' => 'SnapshotCopyGrant', ], ],
		],
		'CreateSnapshotScheduleMessage'                 => [
			'type'    => 'structure',
			'members' => [
				'ScheduleDefinitions' => [ 'shape' => 'ScheduleDefinitionList', ],
				'ScheduleIdentifier'  => [ 'shape' => 'String', ],
				'ScheduleDescription' => [ 'shape' => 'String', ],
				'Tags'                => [ 'shape' => 'TagList', ],
				'DryRun'              => [ 'shape' => 'BooleanOptional', ],
				'NextInvocations'     => [ 'shape' => 'IntegerOptional', ],
			],
		],
		'CreateTagsMessage'                             => [
			'type'     => 'structure',
			'required' => [ 'ResourceName', 'Tags', ],
			'members'  => [
				'ResourceName' => [ 'shape' => 'String', ],
				'Tags'         => [ 'shape' => 'TagList', ],
			],
		],
		'CustomerStorageMessage'                        => [
			'type'    => 'structure',
			'members' => [
				'TotalBackupSizeInMegaBytes'         => [ 'shape' => 'Double', ],
				'TotalProvisionedStorageInMegaBytes' => [ 'shape' => 'Double', ],
			],
		],
		'DataTransferProgress'                          => [
			'type'    => 'structure',
			'members' => [
				'Status'                             => [ 'shape' => 'String', ],
				'CurrentRateInMegaBytesPerSecond'    => [ 'shape' => 'DoubleOptional', ],
				'TotalDataInMegaBytes'               => [ 'shape' => 'Long', ],
				'DataTransferredInMegaBytes'         => [ 'shape' => 'Long', ],
				'EstimatedTimeToCompletionInSeconds' => [ 'shape' => 'LongOptional', ],
				'ElapsedTimeInSeconds'               => [ 'shape' => 'LongOptional', ],
			],
		],
		'DbGroupList'                                   => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'DbGroup',
			],
		],
		'DefaultClusterParameters'                      => [
			'type'    => 'structure',
			'members' => [
				'ParameterGroupFamily' => [ 'shape' => 'String', ],
				'Marker'               => [ 'shape' => 'String', ],
				'Parameters'           => [ 'shape' => 'ParametersList', ],
			],
			'wrapper' => true,
		],
		'DeferredMaintenanceWindow'                     => [
			'type'    => 'structure',
			'members' => [
				'DeferMaintenanceIdentifier' => [ 'shape' => 'String', ],
				'DeferMaintenanceStartTime'  => [ 'shape' => 'TStamp', ],
				'DeferMaintenanceEndTime'    => [ 'shape' => 'TStamp', ],
			],
		],
		'DeferredMaintenanceWindowsList'                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'DeferredMaintenanceWindow',
				'locationName' => 'DeferredMaintenanceWindow',
			],
		],
		'DeleteClusterMessage'                          => [
			'type'     => 'structure',
			'required' => [ 'ClusterIdentifier', ],
			'members'  => [
				'ClusterIdentifier'                   => [ 'shape' => 'String', ],
				'SkipFinalClusterSnapshot'            => [ 'shape' => 'Boolean', ],
				'FinalClusterSnapshotIdentifier'      => [ 'shape' => 'String', ],
				'FinalClusterSnapshotRetentionPeriod' => [ 'shape' => 'IntegerOptional', ],
			],
		],
		'DeleteClusterParameterGroupMessage'            => [
			'type'     => 'structure',
			'required' => [ 'ParameterGroupName', ],
			'members'  => [ 'ParameterGroupName' => [ 'shape' => 'String', ], ],
		],
		'DeleteClusterResult'                           => [
			'type'    => 'structure',
			'members' => [ 'Cluster' => [ 'shape' => 'Cluster', ], ],
		],
		'DeleteClusterSecurityGroupMessage'             => [
			'type'     => 'structure',
			'required' => [ 'ClusterSecurityGroupName', ],
			'members'  => [ 'ClusterSecurityGroupName' => [ 'shape' => 'String', ], ],
		],
		'DeleteClusterSnapshotMessage'                  => [
			'type'     => 'structure',
			'required' => [ 'SnapshotIdentifier', ],
			'members'  => [
				'SnapshotIdentifier'        => [ 'shape' => 'String', ],
				'SnapshotClusterIdentifier' => [ 'shape' => 'String', ],
			],
		],
		'DeleteClusterSnapshotMessageList'              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'DeleteClusterSnapshotMessage',
				'locationName' => 'DeleteClusterSnapshotMessage',
			],
		],
		'DeleteClusterSnapshotResult'                   => [
			'type'    => 'structure',
			'members' => [ 'Snapshot' => [ 'shape' => 'Snapshot', ], ],
		],
		'DeleteClusterSubnetGroupMessage'               => [
			'type'     => 'structure',
			'required' => [ 'ClusterSubnetGroupName', ],
			'members'  => [ 'ClusterSubnetGroupName' => [ 'shape' => 'String', ], ],
		],
		'DeleteEventSubscriptionMessage'                => [
			'type'     => 'structure',
			'required' => [ 'SubscriptionName', ],
			'members'  => [ 'SubscriptionName' => [ 'shape' => 'String', ], ],
		],
		'DeleteHsmClientCertificateMessage'             => [
			'type'     => 'structure',
			'required' => [ 'HsmClientCertificateIdentifier', ],
			'members'  => [ 'HsmClientCertificateIdentifier' => [ 'shape' => 'String', ], ],
		],
		'DeleteHsmConfigurationMessage'                 => [
			'type'     => 'structure',
			'required' => [ 'HsmConfigurationIdentifier', ],
			'members'  => [ 'HsmConfigurationIdentifier' => [ 'shape' => 'String', ], ],
		],
		'DeleteSnapshotCopyGrantMessage'                => [
			'type'     => 'structure',
			'required' => [ 'SnapshotCopyGrantName', ],
			'members'  => [ 'SnapshotCopyGrantName' => [ 'shape' => 'String', ], ],
		],
		'DeleteSnapshotScheduleMessage'                 => [
			'type'     => 'structure',
			'required' => [ 'ScheduleIdentifier', ],
			'members'  => [ 'ScheduleIdentifier' => [ 'shape' => 'String', ], ],
		],
		'DeleteTagsMessage'                             => [
			'type'     => 'structure',
			'required' => [ 'ResourceName', 'TagKeys', ],
			'members'  => [
				'ResourceName' => [ 'shape' => 'String', ],
				'TagKeys'      => [ 'shape' => 'TagKeyList', ],
			],
		],
		'DependentServiceRequestThrottlingFault'        => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'DependentServiceRequestThrottlingFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'DependentServiceUnavailableFault'              => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'DependentServiceUnavailableFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'DescribeAccountAttributesMessage'              => [
			'type'    => 'structure',
			'members' => [ 'AttributeNames' => [ 'shape' => 'AttributeNameList', ], ],
		],
		'DescribeClusterDbRevisionsMessage'             => [
			'type'    => 'structure',
			'members' => [
				'ClusterIdentifier' => [ 'shape' => 'String', ],
				'MaxRecords'        => [ 'shape' => 'IntegerOptional', ],
				'Marker'            => [ 'shape' => 'String', ],
			],
		],
		'DescribeClusterParameterGroupsMessage'         => [
			'type'    => 'structure',
			'members' => [
				'ParameterGroupName' => [ 'shape' => 'String', ],
				'MaxRecords'         => [ 'shape' => 'IntegerOptional', ],
				'Marker'             => [ 'shape' => 'String', ],
				'TagKeys'            => [ 'shape' => 'TagKeyList', ],
				'TagValues'          => [ 'shape' => 'TagValueList', ],
			],
		],
		'DescribeClusterParametersMessage'              => [
			'type'     => 'structure',
			'required' => [ 'ParameterGroupName', ],
			'members'  => [
				'ParameterGroupName' => [ 'shape' => 'String', ],
				'Source'             => [ 'shape' => 'String', ],
				'MaxRecords'         => [ 'shape' => 'IntegerOptional', ],
				'Marker'             => [ 'shape' => 'String', ],
			],
		],
		'DescribeClusterSecurityGroupsMessage'          => [
			'type'    => 'structure',
			'members' => [
				'ClusterSecurityGroupName' => [ 'shape' => 'String', ],
				'MaxRecords'               => [ 'shape' => 'IntegerOptional', ],
				'Marker'                   => [ 'shape' => 'String', ],
				'TagKeys'                  => [ 'shape' => 'TagKeyList', ],
				'TagValues'                => [ 'shape' => 'TagValueList', ],
			],
		],
		'DescribeClusterSnapshotsMessage'               => [
			'type'    => 'structure',
			'members' => [
				'ClusterIdentifier'  => [ 'shape' => 'String', ],
				'SnapshotIdentifier' => [ 'shape' => 'String', ],
				'SnapshotType'       => [ 'shape' => 'String', ],
				'StartTime'          => [ 'shape' => 'TStamp', ],
				'EndTime'            => [ 'shape' => 'TStamp', ],
				'MaxRecords'         => [ 'shape' => 'IntegerOptional', ],
				'Marker'             => [ 'shape' => 'String', ],
				'OwnerAccount'       => [ 'shape' => 'String', ],
				'TagKeys'            => [ 'shape' => 'TagKeyList', ],
				'TagValues'          => [ 'shape' => 'TagValueList', ],
				'ClusterExists'      => [ 'shape' => 'BooleanOptional', ],
				'SortingEntities'    => [ 'shape' => 'SnapshotSortingEntityList', ],
			],
		],
		'DescribeClusterSubnetGroupsMessage'            => [
			'type'    => 'structure',
			'members' => [
				'ClusterSubnetGroupName' => [ 'shape' => 'String', ],
				'MaxRecords'             => [ 'shape' => 'IntegerOptional', ],
				'Marker'                 => [ 'shape' => 'String', ],
				'TagKeys'                => [ 'shape' => 'TagKeyList', ],
				'TagValues'              => [ 'shape' => 'TagValueList', ],
			],
		],
		'DescribeClusterTracksMessage'                  => [
			'type'    => 'structure',
			'members' => [
				'MaintenanceTrackName' => [ 'shape' => 'String', ],
				'MaxRecords'           => [ 'shape' => 'IntegerOptional', ],
				'Marker'               => [ 'shape' => 'String', ],
			],
		],
		'DescribeClusterVersionsMessage'                => [
			'type'    => 'structure',
			'members' => [
				'ClusterVersion'              => [ 'shape' => 'String', ],
				'ClusterParameterGroupFamily' => [ 'shape' => 'String', ],
				'MaxRecords'                  => [ 'shape' => 'IntegerOptional', ],
				'Marker'                      => [ 'shape' => 'String', ],
			],
		],
		'DescribeClustersMessage'                       => [
			'type'    => 'structure',
			'members' => [
				'ClusterIdentifier' => [ 'shape' => 'String', ],
				'MaxRecords'        => [ 'shape' => 'IntegerOptional', ],
				'Marker'            => [ 'shape' => 'String', ],
				'TagKeys'           => [ 'shape' => 'TagKeyList', ],
				'TagValues'         => [ 'shape' => 'TagValueList', ],
			],
		],
		'DescribeDefaultClusterParametersMessage'       => [
			'type'     => 'structure',
			'required' => [ 'ParameterGroupFamily', ],
			'members'  => [
				'ParameterGroupFamily' => [ 'shape' => 'String', ],
				'MaxRecords'           => [ 'shape' => 'IntegerOptional', ],
				'Marker'               => [ 'shape' => 'String', ],
			],
		],
		'DescribeDefaultClusterParametersResult'        => [
			'type'    => 'structure',
			'members' => [ 'DefaultClusterParameters' => [ 'shape' => 'DefaultClusterParameters', ], ],
		],
		'DescribeEventCategoriesMessage'                => [
			'type'    => 'structure',
			'members' => [ 'SourceType' => [ 'shape' => 'String', ], ],
		],
		'DescribeEventSubscriptionsMessage'             => [
			'type'    => 'structure',
			'members' => [
				'SubscriptionName' => [ 'shape' => 'String', ],
				'MaxRecords'       => [ 'shape' => 'IntegerOptional', ],
				'Marker'           => [ 'shape' => 'String', ],
				'TagKeys'          => [ 'shape' => 'TagKeyList', ],
				'TagValues'        => [ 'shape' => 'TagValueList', ],
			],
		],
		'DescribeEventsMessage'                         => [
			'type'    => 'structure',
			'members' => [
				'SourceIdentifier' => [ 'shape' => 'String', ],
				'SourceType'       => [ 'shape' => 'SourceType', ],
				'StartTime'        => [ 'shape' => 'TStamp', ],
				'EndTime'          => [ 'shape' => 'TStamp', ],
				'Duration'         => [ 'shape' => 'IntegerOptional', ],
				'MaxRecords'       => [ 'shape' => 'IntegerOptional', ],
				'Marker'           => [ 'shape' => 'String', ],
			],
		],
		'DescribeHsmClientCertificatesMessage'          => [
			'type'    => 'structure',
			'members' => [
				'HsmClientCertificateIdentifier' => [ 'shape' => 'String', ],
				'MaxRecords'                     => [ 'shape' => 'IntegerOptional', ],
				'Marker'                         => [ 'shape' => 'String', ],
				'TagKeys'                        => [ 'shape' => 'TagKeyList', ],
				'TagValues'                      => [ 'shape' => 'TagValueList', ],
			],
		],
		'DescribeHsmConfigurationsMessage'              => [
			'type'    => 'structure',
			'members' => [
				'HsmConfigurationIdentifier' => [ 'shape' => 'String', ],
				'MaxRecords'                 => [ 'shape' => 'IntegerOptional', ],
				'Marker'                     => [ 'shape' => 'String', ],
				'TagKeys'                    => [ 'shape' => 'TagKeyList', ],
				'TagValues'                  => [ 'shape' => 'TagValueList', ],
			],
		],
		'DescribeLoggingStatusMessage'                  => [
			'type'     => 'structure',
			'required' => [ 'ClusterIdentifier', ],
			'members'  => [ 'ClusterIdentifier' => [ 'shape' => 'String', ], ],
		],
		'DescribeOrderableClusterOptionsMessage'        => [
			'type'    => 'structure',
			'members' => [
				'ClusterVersion' => [ 'shape' => 'String', ],
				'NodeType'       => [ 'shape' => 'String', ],
				'MaxRecords'     => [ 'shape' => 'IntegerOptional', ],
				'Marker'         => [ 'shape' => 'String', ],
			],
		],
		'DescribeReservedNodeOfferingsMessage'          => [
			'type'    => 'structure',
			'members' => [
				'ReservedNodeOfferingId' => [ 'shape' => 'String', ],
				'MaxRecords'             => [ 'shape' => 'IntegerOptional', ],
				'Marker'                 => [ 'shape' => 'String', ],
			],
		],
		'DescribeReservedNodesMessage'                  => [
			'type'    => 'structure',
			'members' => [
				'ReservedNodeId' => [ 'shape' => 'String', ],
				'MaxRecords'     => [ 'shape' => 'IntegerOptional', ],
				'Marker'         => [ 'shape' => 'String', ],
			],
		],
		'DescribeResizeMessage'                         => [
			'type'     => 'structure',
			'required' => [ 'ClusterIdentifier', ],
			'members'  => [ 'ClusterIdentifier' => [ 'shape' => 'String', ], ],
		],
		'DescribeSnapshotCopyGrantsMessage'             => [
			'type'    => 'structure',
			'members' => [
				'SnapshotCopyGrantName' => [ 'shape' => 'String', ],
				'MaxRecords'            => [ 'shape' => 'IntegerOptional', ],
				'Marker'                => [ 'shape' => 'String', ],
				'TagKeys'               => [ 'shape' => 'TagKeyList', ],
				'TagValues'             => [ 'shape' => 'TagValueList', ],
			],
		],
		'DescribeSnapshotSchedulesMessage'              => [
			'type'    => 'structure',
			'members' => [
				'ClusterIdentifier'  => [ 'shape' => 'String', ],
				'ScheduleIdentifier' => [ 'shape' => 'String', ],
				'TagKeys'            => [ 'shape' => 'TagKeyList', ],
				'TagValues'          => [ 'shape' => 'TagValueList', ],
				'Marker'             => [ 'shape' => 'String', ],
				'MaxRecords'         => [ 'shape' => 'IntegerOptional', ],
			],
		],
		'DescribeSnapshotSchedulesOutputMessage'        => [
			'type'    => 'structure',
			'members' => [
				'SnapshotSchedules' => [ 'shape' => 'SnapshotScheduleList', ],
				'Marker'            => [ 'shape' => 'String', ],
			],
		],
		'DescribeTableRestoreStatusMessage'             => [
			'type'    => 'structure',
			'members' => [
				'ClusterIdentifier'     => [ 'shape' => 'String', ],
				'TableRestoreRequestId' => [ 'shape' => 'String', ],
				'MaxRecords'            => [ 'shape' => 'IntegerOptional', ],
				'Marker'                => [ 'shape' => 'String', ],
			],
		],
		'DescribeTagsMessage'                           => [
			'type'    => 'structure',
			'members' => [
				'ResourceName' => [ 'shape' => 'String', ],
				'ResourceType' => [ 'shape' => 'String', ],
				'MaxRecords'   => [ 'shape' => 'IntegerOptional', ],
				'Marker'       => [ 'shape' => 'String', ],
				'TagKeys'      => [ 'shape' => 'TagKeyList', ],
				'TagValues'    => [ 'shape' => 'TagValueList', ],
			],
		],
		'DisableLoggingMessage'                         => [
			'type'     => 'structure',
			'required' => [ 'ClusterIdentifier', ],
			'members'  => [ 'ClusterIdentifier' => [ 'shape' => 'String', ], ],
		],
		'DisableSnapshotCopyMessage'                    => [
			'type'     => 'structure',
			'required' => [ 'ClusterIdentifier', ],
			'members'  => [ 'ClusterIdentifier' => [ 'shape' => 'String', ], ],
		],
		'DisableSnapshotCopyResult'                     => [
			'type'    => 'structure',
			'members' => [ 'Cluster' => [ 'shape' => 'Cluster', ], ],
		],
		'Double'                                        => [ 'type' => 'double', ],
		'DoubleOptional'                                => [ 'type' => 'double', ],
		'EC2SecurityGroup'                              => [
			'type'    => 'structure',
			'members' => [
				'Status'                  => [ 'shape' => 'String', ],
				'EC2SecurityGroupName'    => [ 'shape' => 'String', ],
				'EC2SecurityGroupOwnerId' => [ 'shape' => 'String', ],
				'Tags'                    => [ 'shape' => 'TagList', ],
			],
		],
		'EC2SecurityGroupList'                          => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'EC2SecurityGroup',
				'locationName' => 'EC2SecurityGroup',
			],
		],
		'ElasticIpStatus'                               => [
			'type'    => 'structure',
			'members' => [
				'ElasticIp' => [ 'shape' => 'String', ],
				'Status'    => [ 'shape' => 'String', ],
			],
		],
		'EligibleTracksToUpdateList'                    => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'UpdateTarget',
				'locationName' => 'UpdateTarget',
			],
		],
		'EnableLoggingMessage'                          => [
			'type'     => 'structure',
			'required' => [ 'ClusterIdentifier', 'BucketName', ],
			'members'  => [
				'ClusterIdentifier' => [ 'shape' => 'String', ],
				'BucketName'        => [ 'shape' => 'String', ],
				'S3KeyPrefix'       => [ 'shape' => 'String', ],
			],
		],
		'EnableSnapshotCopyMessage'                     => [
			'type'     => 'structure',
			'required' => [
				'ClusterIdentifier',
				'DestinationRegion',
			],
			'members'  => [
				'ClusterIdentifier'             => [ 'shape' => 'String', ],
				'DestinationRegion'             => [ 'shape' => 'String', ],
				'RetentionPeriod'               => [ 'shape' => 'IntegerOptional', ],
				'SnapshotCopyGrantName'         => [ 'shape' => 'String', ],
				'ManualSnapshotRetentionPeriod' => [ 'shape' => 'IntegerOptional', ],
			],
		],
		'EnableSnapshotCopyResult'                      => [
			'type'    => 'structure',
			'members' => [ 'Cluster' => [ 'shape' => 'Cluster', ], ],
		],
		'Endpoint'                                      => [
			'type'    => 'structure',
			'members' => [
				'Address' => [ 'shape' => 'String', ],
				'Port'    => [ 'shape' => 'Integer', ],
			],
		],
		'Event'                                         => [
			'type'    => 'structure',
			'members' => [
				'SourceIdentifier' => [ 'shape' => 'String', ],
				'SourceType'       => [ 'shape' => 'SourceType', ],
				'Message'          => [ 'shape' => 'String', ],
				'EventCategories'  => [ 'shape' => 'EventCategoriesList', ],
				'Severity'         => [ 'shape' => 'String', ],
				'Date'             => [ 'shape' => 'TStamp', ],
				'EventId'          => [ 'shape' => 'String', ],
			],
		],
		'EventCategoriesList'                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'EventCategory',
			],
		],
		'EventCategoriesMap'                            => [
			'type'    => 'structure',
			'members' => [
				'SourceType' => [ 'shape' => 'String', ],
				'Events'     => [ 'shape' => 'EventInfoMapList', ],
			],
			'wrapper' => true,
		],
		'EventCategoriesMapList'                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'EventCategoriesMap',
				'locationName' => 'EventCategoriesMap',
			],
		],
		'EventCategoriesMessage'                        => [
			'type'    => 'structure',
			'members' => [ 'EventCategoriesMapList' => [ 'shape' => 'EventCategoriesMapList', ], ],
		],
		'EventInfoMap'                                  => [
			'type'    => 'structure',
			'members' => [
				'EventId'          => [ 'shape' => 'String', ],
				'EventCategories'  => [ 'shape' => 'EventCategoriesList', ],
				'EventDescription' => [ 'shape' => 'String', ],
				'Severity'         => [ 'shape' => 'String', ],
			],
			'wrapper' => true,
		],
		'EventInfoMapList'                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'EventInfoMap',
				'locationName' => 'EventInfoMap',
			],
		],
		'EventList'                                     => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Event',
				'locationName' => 'Event',
			],
		],
		'EventSubscription'                             => [
			'type'    => 'structure',
			'members' => [
				'CustomerAwsId'            => [ 'shape' => 'String', ],
				'CustSubscriptionId'       => [ 'shape' => 'String', ],
				'SnsTopicArn'              => [ 'shape' => 'String', ],
				'Status'                   => [ 'shape' => 'String', ],
				'SubscriptionCreationTime' => [ 'shape' => 'TStamp', ],
				'SourceType'               => [ 'shape' => 'String', ],
				'SourceIdsList'            => [ 'shape' => 'SourceIdsList', ],
				'EventCategoriesList'      => [ 'shape' => 'EventCategoriesList', ],
				'Severity'                 => [ 'shape' => 'String', ],
				'Enabled'                  => [ 'shape' => 'Boolean', ],
				'Tags'                     => [ 'shape' => 'TagList', ],
			],
			'wrapper' => true,
		],
		'EventSubscriptionQuotaExceededFault'           => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'EventSubscriptionQuotaExceeded',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'EventSubscriptionsList'                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'EventSubscription',
				'locationName' => 'EventSubscription',
			],
		],
		'EventSubscriptionsMessage'                     => [
			'type'    => 'structure',
			'members' => [
				'Marker'                 => [ 'shape' => 'String', ],
				'EventSubscriptionsList' => [ 'shape' => 'EventSubscriptionsList', ],
			],
		],
		'EventsMessage'                                 => [
			'type'    => 'structure',
			'members' => [
				'Marker' => [ 'shape' => 'String', ],
				'Events' => [ 'shape' => 'EventList', ],
			],
		],
		'GetClusterCredentialsMessage'                  => [
			'type'     => 'structure',
			'required' => [ 'DbUser', 'ClusterIdentifier', ],
			'members'  => [
				'DbUser'            => [ 'shape' => 'String', ],
				'DbName'            => [ 'shape' => 'String', ],
				'ClusterIdentifier' => [ 'shape' => 'String', ],
				'DurationSeconds'   => [ 'shape' => 'IntegerOptional', ],
				'AutoCreate'        => [ 'shape' => 'BooleanOptional', ],
				'DbGroups'          => [ 'shape' => 'DbGroupList', ],
			],
		],
		'GetReservedNodeExchangeOfferingsInputMessage'  => [
			'type'     => 'structure',
			'required' => [ 'ReservedNodeId', ],
			'members'  => [
				'ReservedNodeId' => [ 'shape' => 'String', ],
				'MaxRecords'     => [ 'shape' => 'IntegerOptional', ],
				'Marker'         => [ 'shape' => 'String', ],
			],
		],
		'GetReservedNodeExchangeOfferingsOutputMessage' => [
			'type'    => 'structure',
			'members' => [
				'Marker'                => [ 'shape' => 'String', ],
				'ReservedNodeOfferings' => [ 'shape' => 'ReservedNodeOfferingList', ],
			],
		],
		'HsmClientCertificate'                          => [
			'type'    => 'structure',
			'members' => [
				'HsmClientCertificateIdentifier' => [ 'shape' => 'String', ],
				'HsmClientCertificatePublicKey'  => [ 'shape' => 'String', ],
				'Tags'                           => [ 'shape' => 'TagList', ],
			],
			'wrapper' => true,
		],
		'HsmClientCertificateAlreadyExistsFault'        => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'HsmClientCertificateAlreadyExistsFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'HsmClientCertificateList'                      => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'HsmClientCertificate',
				'locationName' => 'HsmClientCertificate',
			],
		],
		'HsmClientCertificateMessage'                   => [
			'type'    => 'structure',
			'members' => [
				'Marker'                => [ 'shape' => 'String', ],
				'HsmClientCertificates' => [ 'shape' => 'HsmClientCertificateList', ],
			],
		],
		'HsmClientCertificateNotFoundFault'             => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'HsmClientCertificateNotFoundFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'HsmClientCertificateQuotaExceededFault'        => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'HsmClientCertificateQuotaExceededFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'HsmConfiguration'                              => [
			'type'    => 'structure',
			'members' => [
				'HsmConfigurationIdentifier' => [ 'shape' => 'String', ],
				'Description'                => [ 'shape' => 'String', ],
				'HsmIpAddress'               => [ 'shape' => 'String', ],
				'HsmPartitionName'           => [ 'shape' => 'String', ],
				'Tags'                       => [ 'shape' => 'TagList', ],
			],
			'wrapper' => true,
		],
		'HsmConfigurationAlreadyExistsFault'            => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'HsmConfigurationAlreadyExistsFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'HsmConfigurationList'                          => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'HsmConfiguration',
				'locationName' => 'HsmConfiguration',
			],
		],
		'HsmConfigurationMessage'                       => [
			'type'    => 'structure',
			'members' => [
				'Marker'            => [ 'shape' => 'String', ],
				'HsmConfigurations' => [ 'shape' => 'HsmConfigurationList', ],
			],
		],
		'HsmConfigurationNotFoundFault'                 => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'HsmConfigurationNotFoundFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'HsmConfigurationQuotaExceededFault'            => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'HsmConfigurationQuotaExceededFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'HsmStatus'                                     => [
			'type'    => 'structure',
			'members' => [
				'HsmClientCertificateIdentifier' => [ 'shape' => 'String', ],
				'HsmConfigurationIdentifier'     => [ 'shape' => 'String', ],
				'Status'                         => [ 'shape' => 'String', ],
			],
		],
		'IPRange'                                       => [
			'type'    => 'structure',
			'members' => [
				'Status' => [ 'shape' => 'String', ],
				'CIDRIP' => [ 'shape' => 'String', ],
				'Tags'   => [ 'shape' => 'TagList', ],
			],
		],
		'IPRangeList'                                   => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'IPRange',
				'locationName' => 'IPRange',
			],
		],
		'IamRoleArnList'                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'IamRoleArn',
			],
		],
		'ImportTablesCompleted'                         => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ],
		'ImportTablesInProgress'                        => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ],
		'ImportTablesNotStarted'                        => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ],
		'InProgressTableRestoreQuotaExceededFault'      => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InProgressTableRestoreQuotaExceededFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'IncompatibleOrderableOptions'                  => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'IncompatibleOrderableOptions',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InsufficientClusterCapacityFault'              => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InsufficientClusterCapacity',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InsufficientS3BucketPolicyFault'               => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InsufficientS3BucketPolicyFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'Integer'                                       => [ 'type' => 'integer', ],
		'IntegerOptional'                               => [ 'type' => 'integer', ],
		'InvalidClusterParameterGroupStateFault'        => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidClusterParameterGroupState',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidClusterSecurityGroupStateFault'         => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidClusterSecurityGroupState',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidClusterSnapshotScheduleStateFault'      => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidClusterSnapshotScheduleState',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidClusterSnapshotStateFault'              => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidClusterSnapshotState',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidClusterStateFault'                      => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidClusterState',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidClusterSubnetGroupStateFault'           => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidClusterSubnetGroupStateFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidClusterSubnetStateFault'                => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidClusterSubnetStateFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidClusterTrackFault'                      => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidClusterTrack',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidElasticIpFault'                         => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidElasticIpFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidHsmClientCertificateStateFault'         => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidHsmClientCertificateStateFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidHsmConfigurationStateFault'             => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidHsmConfigurationStateFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidReservedNodeStateFault'                 => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidReservedNodeState',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidRestoreFault'                           => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidRestore',
				'httpStatusCode' => 406,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidRetentionPeriodFault'                   => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidRetentionPeriodFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidS3BucketNameFault'                      => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidS3BucketNameFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidS3KeyPrefixFault'                       => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidS3KeyPrefixFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidScheduleFault'                          => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidSchedule',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidSnapshotCopyGrantStateFault'            => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidSnapshotCopyGrantStateFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidSubnet'                                 => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidSubnet',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidSubscriptionStateFault'                 => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidSubscriptionStateFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidTableRestoreArgumentFault'              => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidTableRestoreArgument',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidTagFault'                               => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidTagFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidVPCNetworkStateFault'                   => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidVPCNetworkStateFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'LimitExceededFault'                            => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'LimitExceededFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'LoggingStatus'                                 => [
			'type'    => 'structure',
			'members' => [
				'LoggingEnabled'             => [ 'shape' => 'Boolean', ],
				'BucketName'                 => [ 'shape' => 'String', ],
				'S3KeyPrefix'                => [ 'shape' => 'String', ],
				'LastSuccessfulDeliveryTime' => [ 'shape' => 'TStamp', ],
				'LastFailureTime'            => [ 'shape' => 'TStamp', ],
				'LastFailureMessage'         => [ 'shape' => 'String', ],
			],
		],
		'Long'                                          => [ 'type' => 'long', ],
		'LongOptional'                                  => [ 'type' => 'long', ],
		'MaintenanceTrack'                              => [
			'type'    => 'structure',
			'members' => [
				'MaintenanceTrackName' => [ 'shape' => 'String', ],
				'DatabaseVersion'      => [ 'shape' => 'String', ],
				'UpdateTargets'        => [ 'shape' => 'EligibleTracksToUpdateList', ],
			],
		],
		'ModifyClusterDbRevisionMessage'                => [
			'type'     => 'structure',
			'required' => [ 'ClusterIdentifier', 'RevisionTarget', ],
			'members'  => [
				'ClusterIdentifier' => [ 'shape' => 'String', ],
				'RevisionTarget'    => [ 'shape' => 'String', ],
			],
		],
		'ModifyClusterDbRevisionResult'                 => [
			'type'    => 'structure',
			'members' => [ 'Cluster' => [ 'shape' => 'Cluster', ], ],
		],
		'ModifyClusterIamRolesMessage'                  => [
			'type'     => 'structure',
			'required' => [ 'ClusterIdentifier', ],
			'members'  => [
				'ClusterIdentifier' => [ 'shape' => 'String', ],
				'AddIamRoles'       => [ 'shape' => 'IamRoleArnList', ],
				'RemoveIamRoles'    => [ 'shape' => 'IamRoleArnList', ],
			],
		],
		'ModifyClusterIamRolesResult'                   => [
			'type'    => 'structure',
			'members' => [ 'Cluster' => [ 'shape' => 'Cluster', ], ],
		],
		'ModifyClusterMaintenanceMessage'               => [
			'type'     => 'structure',
			'required' => [ 'ClusterIdentifier', ],
			'members'  => [
				'ClusterIdentifier'          => [ 'shape' => 'String', ],
				'DeferMaintenance'           => [ 'shape' => 'BooleanOptional', ],
				'DeferMaintenanceIdentifier' => [ 'shape' => 'String', ],
				'DeferMaintenanceStartTime'  => [ 'shape' => 'TStamp', ],
				'DeferMaintenanceEndTime'    => [ 'shape' => 'TStamp', ],
				'DeferMaintenanceDuration'   => [ 'shape' => 'IntegerOptional', ],
			],
		],
		'ModifyClusterMaintenanceResult'                => [
			'type'    => 'structure',
			'members' => [ 'Cluster' => [ 'shape' => 'Cluster', ], ],
		],
		'ModifyClusterMessage'                          => [
			'type'     => 'structure',
			'required' => [ 'ClusterIdentifier', ],
			'members'  => [
				'ClusterIdentifier'                => [ 'shape' => 'String', ],
				'ClusterType'                      => [ 'shape' => 'String', ],
				'NodeType'                         => [ 'shape' => 'String', ],
				'NumberOfNodes'                    => [ 'shape' => 'IntegerOptional', ],
				'ClusterSecurityGroups'            => [ 'shape' => 'ClusterSecurityGroupNameList', ],
				'VpcSecurityGroupIds'              => [ 'shape' => 'VpcSecurityGroupIdList', ],
				'MasterUserPassword'               => [ 'shape' => 'String', ],
				'ClusterParameterGroupName'        => [ 'shape' => 'String', ],
				'AutomatedSnapshotRetentionPeriod' => [ 'shape' => 'IntegerOptional', ],
				'ManualSnapshotRetentionPeriod'    => [ 'shape' => 'IntegerOptional', ],
				'PreferredMaintenanceWindow'       => [ 'shape' => 'String', ],
				'ClusterVersion'                   => [ 'shape' => 'String', ],
				'AllowVersionUpgrade'              => [ 'shape' => 'BooleanOptional', ],
				'HsmClientCertificateIdentifier'   => [ 'shape' => 'String', ],
				'HsmConfigurationIdentifier'       => [ 'shape' => 'String', ],
				'NewClusterIdentifier'             => [ 'shape' => 'String', ],
				'PubliclyAccessible'               => [ 'shape' => 'BooleanOptional', ],
				'ElasticIp'                        => [ 'shape' => 'String', ],
				'EnhancedVpcRouting'               => [ 'shape' => 'BooleanOptional', ],
				'MaintenanceTrackName'             => [ 'shape' => 'String', ],
				'Encrypted'                        => [ 'shape' => 'BooleanOptional', ],
				'KmsKeyId'                         => [ 'shape' => 'String', ],
			],
		],
		'ModifyClusterParameterGroupMessage'            => [
			'type'     => 'structure',
			'required' => [ 'ParameterGroupName', 'Parameters', ],
			'members'  => [
				'ParameterGroupName' => [ 'shape' => 'String', ],
				'Parameters'         => [ 'shape' => 'ParametersList', ],
			],
		],
		'ModifyClusterResult'                           => [
			'type'    => 'structure',
			'members' => [ 'Cluster' => [ 'shape' => 'Cluster', ], ],
		],
		'ModifyClusterSnapshotMessage'                  => [
			'type'     => 'structure',
			'required' => [ 'SnapshotIdentifier', ],
			'members'  => [
				'SnapshotIdentifier'            => [ 'shape' => 'String', ],
				'ManualSnapshotRetentionPeriod' => [ 'shape' => 'IntegerOptional', ],
				'Force'                         => [ 'shape' => 'Boolean', ],
			],
		],
		'ModifyClusterSnapshotResult'                   => [
			'type'    => 'structure',
			'members' => [ 'Snapshot' => [ 'shape' => 'Snapshot', ], ],
		],
		'ModifyClusterSnapshotScheduleMessage'          => [
			'type'     => 'structure',
			'required' => [ 'ClusterIdentifier', ],
			'members'  => [
				'ClusterIdentifier'    => [ 'shape' => 'String', ],
				'ScheduleIdentifier'   => [ 'shape' => 'String', ],
				'DisassociateSchedule' => [ 'shape' => 'BooleanOptional', ],
			],
		],
		'ModifyClusterSubnetGroupMessage'               => [
			'type'     => 'structure',
			'required' => [ 'ClusterSubnetGroupName', 'SubnetIds', ],
			'members'  => [
				'ClusterSubnetGroupName' => [ 'shape' => 'String', ],
				'Description'            => [ 'shape' => 'String', ],
				'SubnetIds'              => [ 'shape' => 'SubnetIdentifierList', ],
			],
		],
		'ModifyClusterSubnetGroupResult'                => [
			'type'    => 'structure',
			'members' => [ 'ClusterSubnetGroup' => [ 'shape' => 'ClusterSubnetGroup', ], ],
		],
		'ModifyEventSubscriptionMessage'                => [
			'type'     => 'structure',
			'required' => [ 'SubscriptionName', ],
			'members'  => [
				'SubscriptionName' => [ 'shape' => 'String', ],
				'SnsTopicArn'      => [ 'shape' => 'String', ],
				'SourceType'       => [ 'shape' => 'String', ],
				'SourceIds'        => [ 'shape' => 'SourceIdsList', ],
				'EventCategories'  => [ 'shape' => 'EventCategoriesList', ],
				'Severity'         => [ 'shape' => 'String', ],
				'Enabled'          => [ 'shape' => 'BooleanOptional', ],
			],
		],
		'ModifyEventSubscriptionResult'                 => [
			'type'    => 'structure',
			'members' => [ 'EventSubscription' => [ 'shape' => 'EventSubscription', ], ],
		],
		'ModifySnapshotCopyRetentionPeriodMessage'      => [
			'type'     => 'structure',
			'required' => [ 'ClusterIdentifier', 'RetentionPeriod', ],
			'members'  => [
				'ClusterIdentifier' => [ 'shape' => 'String', ],
				'RetentionPeriod'   => [ 'shape' => 'Integer', ],
				'Manual'            => [ 'shape' => 'Boolean', ],
			],
		],
		'ModifySnapshotCopyRetentionPeriodResult'       => [
			'type'    => 'structure',
			'members' => [ 'Cluster' => [ 'shape' => 'Cluster', ], ],
		],
		'ModifySnapshotScheduleMessage'                 => [
			'type'     => 'structure',
			'required' => [
				'ScheduleIdentifier',
				'ScheduleDefinitions',
			],
			'members'  => [
				'ScheduleIdentifier'  => [ 'shape' => 'String', ],
				'ScheduleDefinitions' => [ 'shape' => 'ScheduleDefinitionList', ],
			],
		],
		'NumberOfNodesPerClusterLimitExceededFault'     => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'NumberOfNodesPerClusterLimitExceeded',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'NumberOfNodesQuotaExceededFault'               => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'NumberOfNodesQuotaExceeded',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'OrderableClusterOption'                        => [
			'type'    => 'structure',
			'members' => [
				'ClusterVersion'    => [ 'shape' => 'String', ],
				'ClusterType'       => [ 'shape' => 'String', ],
				'NodeType'          => [ 'shape' => 'String', ],
				'AvailabilityZones' => [ 'shape' => 'AvailabilityZoneList', ],
			],
			'wrapper' => true,
		],
		'OrderableClusterOptionsList'                   => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'OrderableClusterOption',
				'locationName' => 'OrderableClusterOption',
			],
		],
		'OrderableClusterOptionsMessage'                => [
			'type'    => 'structure',
			'members' => [
				'OrderableClusterOptions' => [ 'shape' => 'OrderableClusterOptionsList', ],
				'Marker'                  => [ 'shape' => 'String', ],
			],
		],
		'Parameter'                                     => [
			'type'    => 'structure',
			'members' => [
				'ParameterName'        => [ 'shape' => 'String', ],
				'ParameterValue'       => [ 'shape' => 'String', ],
				'Description'          => [ 'shape' => 'String', ],
				'Source'               => [ 'shape' => 'String', ],
				'DataType'             => [ 'shape' => 'String', ],
				'AllowedValues'        => [ 'shape' => 'String', ],
				'ApplyType'            => [ 'shape' => 'ParameterApplyType', ],
				'IsModifiable'         => [ 'shape' => 'Boolean', ],
				'MinimumEngineVersion' => [ 'shape' => 'String', ],
			],
		],
		'ParameterApplyType'                            => [ 'type' => 'string', 'enum' => [ 'static', 'dynamic', ], ],
		'ParameterGroupList'                            => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ClusterParameterGroup',
				'locationName' => 'ClusterParameterGroup',
			],
		],
		'ParametersList'                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Parameter',
				'locationName' => 'Parameter',
			],
		],
		'PendingActionsList'                            => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ],
		'PendingModifiedValues'                         => [
			'type'    => 'structure',
			'members' => [
				'MasterUserPassword'               => [ 'shape' => 'String', ],
				'NodeType'                         => [ 'shape' => 'String', ],
				'NumberOfNodes'                    => [ 'shape' => 'IntegerOptional', ],
				'ClusterType'                      => [ 'shape' => 'String', ],
				'ClusterVersion'                   => [ 'shape' => 'String', ],
				'AutomatedSnapshotRetentionPeriod' => [ 'shape' => 'IntegerOptional', ],
				'ClusterIdentifier'                => [ 'shape' => 'String', ],
				'PubliclyAccessible'               => [ 'shape' => 'BooleanOptional', ],
				'EnhancedVpcRouting'               => [ 'shape' => 'BooleanOptional', ],
				'MaintenanceTrackName'             => [ 'shape' => 'String', ],
				'EncryptionType'                   => [ 'shape' => 'String', ],
			],
		],
		'PurchaseReservedNodeOfferingMessage'           => [
			'type'     => 'structure',
			'required' => [ 'ReservedNodeOfferingId', ],
			'members'  => [
				'ReservedNodeOfferingId' => [ 'shape' => 'String', ],
				'NodeCount'              => [ 'shape' => 'IntegerOptional', ],
			],
		],
		'PurchaseReservedNodeOfferingResult'            => [
			'type'    => 'structure',
			'members' => [ 'ReservedNode' => [ 'shape' => 'ReservedNode', ], ],
		],
		'RebootClusterMessage'                          => [
			'type'     => 'structure',
			'required' => [ 'ClusterIdentifier', ],
			'members'  => [ 'ClusterIdentifier' => [ 'shape' => 'String', ], ],
		],
		'RebootClusterResult'                           => [
			'type'    => 'structure',
			'members' => [ 'Cluster' => [ 'shape' => 'Cluster', ], ],
		],
		'RecurringCharge'                               => [
			'type'    => 'structure',
			'members' => [
				'RecurringChargeAmount'    => [ 'shape' => 'Double', ],
				'RecurringChargeFrequency' => [ 'shape' => 'String', ],
			],
			'wrapper' => true,
		],
		'RecurringChargeList'                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'RecurringCharge',
				'locationName' => 'RecurringCharge',
			],
		],
		'ReservedNode'                                  => [
			'type'    => 'structure',
			'members' => [
				'ReservedNodeId'           => [ 'shape' => 'String', ],
				'ReservedNodeOfferingId'   => [ 'shape' => 'String', ],
				'NodeType'                 => [ 'shape' => 'String', ],
				'StartTime'                => [ 'shape' => 'TStamp', ],
				'Duration'                 => [ 'shape' => 'Integer', ],
				'FixedPrice'               => [ 'shape' => 'Double', ],
				'UsagePrice'               => [ 'shape' => 'Double', ],
				'CurrencyCode'             => [ 'shape' => 'String', ],
				'NodeCount'                => [ 'shape' => 'Integer', ],
				'State'                    => [ 'shape' => 'String', ],
				'OfferingType'             => [ 'shape' => 'String', ],
				'RecurringCharges'         => [ 'shape' => 'RecurringChargeList', ],
				'ReservedNodeOfferingType' => [ 'shape' => 'ReservedNodeOfferingType', ],
			],
			'wrapper' => true,
		],
		'ReservedNodeAlreadyExistsFault'                => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ReservedNodeAlreadyExists',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ReservedNodeAlreadyMigratedFault'              => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ReservedNodeAlreadyMigrated',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ReservedNodeList'                              => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ReservedNode',
				'locationName' => 'ReservedNode',
			],
		],
		'ReservedNodeNotFoundFault'                     => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ReservedNodeNotFound',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ReservedNodeOffering'                          => [
			'type'    => 'structure',
			'members' => [
				'ReservedNodeOfferingId'   => [ 'shape' => 'String', ],
				'NodeType'                 => [ 'shape' => 'String', ],
				'Duration'                 => [ 'shape' => 'Integer', ],
				'FixedPrice'               => [ 'shape' => 'Double', ],
				'UsagePrice'               => [ 'shape' => 'Double', ],
				'CurrencyCode'             => [ 'shape' => 'String', ],
				'OfferingType'             => [ 'shape' => 'String', ],
				'RecurringCharges'         => [ 'shape' => 'RecurringChargeList', ],
				'ReservedNodeOfferingType' => [ 'shape' => 'ReservedNodeOfferingType', ],
			],
			'wrapper' => true,
		],
		'ReservedNodeOfferingList'                      => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ReservedNodeOffering',
				'locationName' => 'ReservedNodeOffering',
			],
		],
		'ReservedNodeOfferingNotFoundFault'             => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ReservedNodeOfferingNotFound',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ReservedNodeOfferingType'                      => [
			'type' => 'string',
			'enum' => [ 'Regular', 'Upgradable', ],
		],
		'ReservedNodeOfferingsMessage'                  => [
			'type'    => 'structure',
			'members' => [
				'Marker'                => [ 'shape' => 'String', ],
				'ReservedNodeOfferings' => [ 'shape' => 'ReservedNodeOfferingList', ],
			],
		],
		'ReservedNodeQuotaExceededFault'                => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ReservedNodeQuotaExceeded',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ReservedNodesMessage'                          => [
			'type'    => 'structure',
			'members' => [
				'Marker'        => [ 'shape' => 'String', ],
				'ReservedNodes' => [ 'shape' => 'ReservedNodeList', ],
			],
		],
		'ResetClusterParameterGroupMessage'             => [
			'type'     => 'structure',
			'required' => [ 'ParameterGroupName', ],
			'members'  => [
				'ParameterGroupName' => [ 'shape' => 'String', ],
				'ResetAllParameters' => [ 'shape' => 'Boolean', ],
				'Parameters'         => [ 'shape' => 'ParametersList', ],
			],
		],
		'ResizeClusterMessage'                          => [
			'type'     => 'structure',
			'required' => [ 'ClusterIdentifier', 'NumberOfNodes', ],
			'members'  => [
				'ClusterIdentifier' => [ 'shape' => 'String', ],
				'ClusterType'       => [ 'shape' => 'String', ],
				'NodeType'          => [ 'shape' => 'String', ],
				'NumberOfNodes'     => [ 'shape' => 'Integer', ],
				'Classic'           => [ 'shape' => 'BooleanOptional', ],
			],
		],
		'ResizeClusterResult'                           => [
			'type'    => 'structure',
			'members' => [ 'Cluster' => [ 'shape' => 'Cluster', ], ],
		],
		'ResizeInfo'                                    => [
			'type'    => 'structure',
			'members' => [
				'ResizeType'        => [ 'shape' => 'String', ],
				'AllowCancelResize' => [ 'shape' => 'Boolean', ],
			],
		],
		'ResizeNotFoundFault'                           => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ResizeNotFound',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ResizeProgressMessage'                         => [
			'type'    => 'structure',
			'members' => [
				'TargetNodeType'                     => [ 'shape' => 'String', ],
				'TargetNumberOfNodes'                => [ 'shape' => 'IntegerOptional', ],
				'TargetClusterType'                  => [ 'shape' => 'String', ],
				'Status'                             => [ 'shape' => 'String', ],
				'ImportTablesCompleted'              => [ 'shape' => 'ImportTablesCompleted', ],
				'ImportTablesInProgress'             => [ 'shape' => 'ImportTablesInProgress', ],
				'ImportTablesNotStarted'             => [ 'shape' => 'ImportTablesNotStarted', ],
				'AvgResizeRateInMegaBytesPerSecond'  => [ 'shape' => 'DoubleOptional', ],
				'TotalResizeDataInMegaBytes'         => [ 'shape' => 'LongOptional', ],
				'ProgressInMegaBytes'                => [ 'shape' => 'LongOptional', ],
				'ElapsedTimeInSeconds'               => [ 'shape' => 'LongOptional', ],
				'EstimatedTimeToCompletionInSeconds' => [ 'shape' => 'LongOptional', ],
				'ResizeType'                         => [ 'shape' => 'String', ],
				'Message'                            => [ 'shape' => 'String', ],
				'TargetEncryptionType'               => [ 'shape' => 'String', ],
				'DataTransferProgressPercent'        => [ 'shape' => 'DoubleOptional', ],
			],
		],
		'ResourceNotFoundFault'                         => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ResourceNotFoundFault',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'RestorableNodeTypeList'                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'NodeType',
			],
		],
		'RestoreFromClusterSnapshotMessage'             => [
			'type'     => 'structure',
			'required' => [ 'ClusterIdentifier', 'SnapshotIdentifier', ],
			'members'  => [
				'ClusterIdentifier'                => [ 'shape' => 'String', ],
				'SnapshotIdentifier'               => [ 'shape' => 'String', ],
				'SnapshotClusterIdentifier'        => [ 'shape' => 'String', ],
				'Port'                             => [ 'shape' => 'IntegerOptional', ],
				'AvailabilityZone'                 => [ 'shape' => 'String', ],
				'AllowVersionUpgrade'              => [ 'shape' => 'BooleanOptional', ],
				'ClusterSubnetGroupName'           => [ 'shape' => 'String', ],
				'PubliclyAccessible'               => [ 'shape' => 'BooleanOptional', ],
				'OwnerAccount'                     => [ 'shape' => 'String', ],
				'HsmClientCertificateIdentifier'   => [ 'shape' => 'String', ],
				'HsmConfigurationIdentifier'       => [ 'shape' => 'String', ],
				'ElasticIp'                        => [ 'shape' => 'String', ],
				'ClusterParameterGroupName'        => [ 'shape' => 'String', ],
				'ClusterSecurityGroups'            => [ 'shape' => 'ClusterSecurityGroupNameList', ],
				'VpcSecurityGroupIds'              => [ 'shape' => 'VpcSecurityGroupIdList', ],
				'PreferredMaintenanceWindow'       => [ 'shape' => 'String', ],
				'AutomatedSnapshotRetentionPeriod' => [ 'shape' => 'IntegerOptional', ],
				'ManualSnapshotRetentionPeriod'    => [ 'shape' => 'IntegerOptional', ],
				'KmsKeyId'                         => [ 'shape' => 'String', ],
				'NodeType'                         => [ 'shape' => 'String', ],
				'EnhancedVpcRouting'               => [ 'shape' => 'BooleanOptional', ],
				'AdditionalInfo'                   => [ 'shape' => 'String', ],
				'IamRoles'                         => [ 'shape' => 'IamRoleArnList', ],
				'MaintenanceTrackName'             => [ 'shape' => 'String', ],
				'SnapshotScheduleIdentifier'       => [ 'shape' => 'String', ],
			],
		],
		'RestoreFromClusterSnapshotResult'              => [
			'type'    => 'structure',
			'members' => [ 'Cluster' => [ 'shape' => 'Cluster', ], ],
		],
		'RestoreStatus'                                 => [
			'type'    => 'structure',
			'members' => [
				'Status'                                 => [ 'shape' => 'String', ],
				'CurrentRestoreRateInMegaBytesPerSecond' => [ 'shape' => 'Double', ],
				'SnapshotSizeInMegaBytes'                => [ 'shape' => 'Long', ],
				'ProgressInMegaBytes'                    => [ 'shape' => 'Long', ],
				'ElapsedTimeInSeconds'                   => [ 'shape' => 'Long', ],
				'EstimatedTimeToCompletionInSeconds'     => [ 'shape' => 'Long', ],
			],
		],
		'RestoreTableFromClusterSnapshotMessage'        => [
			'type'     => 'structure',
			'required' => [
				'ClusterIdentifier',
				'SnapshotIdentifier',
				'SourceDatabaseName',
				'SourceTableName',
				'NewTableName',
			],
			'members'  => [
				'ClusterIdentifier'  => [ 'shape' => 'String', ],
				'SnapshotIdentifier' => [ 'shape' => 'String', ],
				'SourceDatabaseName' => [ 'shape' => 'String', ],
				'SourceSchemaName'   => [ 'shape' => 'String', ],
				'SourceTableName'    => [ 'shape' => 'String', ],
				'TargetDatabaseName' => [ 'shape' => 'String', ],
				'TargetSchemaName'   => [ 'shape' => 'String', ],
				'NewTableName'       => [ 'shape' => 'String', ],
			],
		],
		'RestoreTableFromClusterSnapshotResult'         => [
			'type'    => 'structure',
			'members' => [ 'TableRestoreStatus' => [ 'shape' => 'TableRestoreStatus', ], ],
		],
		'RevisionTarget'                                => [
			'type'    => 'structure',
			'members' => [
				'DatabaseRevision'            => [ 'shape' => 'String', ],
				'Description'                 => [ 'shape' => 'String', ],
				'DatabaseRevisionReleaseDate' => [ 'shape' => 'TStamp', ],
			],
		],
		'RevisionTargetsList'                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'RevisionTarget',
				'locationName' => 'RevisionTarget',
			],
		],
		'RevokeClusterSecurityGroupIngressMessage'      => [
			'type'     => 'structure',
			'required' => [ 'ClusterSecurityGroupName', ],
			'members'  => [
				'ClusterSecurityGroupName' => [ 'shape' => 'String', ],
				'CIDRIP'                   => [ 'shape' => 'String', ],
				'EC2SecurityGroupName'     => [ 'shape' => 'String', ],
				'EC2SecurityGroupOwnerId'  => [ 'shape' => 'String', ],
			],
		],
		'RevokeClusterSecurityGroupIngressResult'       => [
			'type'    => 'structure',
			'members' => [ 'ClusterSecurityGroup' => [ 'shape' => 'ClusterSecurityGroup', ], ],
		],
		'RevokeSnapshotAccessMessage'                   => [
			'type'     => 'structure',
			'required' => [
				'SnapshotIdentifier',
				'AccountWithRestoreAccess',
			],
			'members'  => [
				'SnapshotIdentifier'        => [ 'shape' => 'String', ],
				'SnapshotClusterIdentifier' => [ 'shape' => 'String', ],
				'AccountWithRestoreAccess'  => [ 'shape' => 'String', ],
			],
		],
		'RevokeSnapshotAccessResult'                    => [
			'type'    => 'structure',
			'members' => [ 'Snapshot' => [ 'shape' => 'Snapshot', ], ],
		],
		'RotateEncryptionKeyMessage'                    => [
			'type'     => 'structure',
			'required' => [ 'ClusterIdentifier', ],
			'members'  => [ 'ClusterIdentifier' => [ 'shape' => 'String', ], ],
		],
		'RotateEncryptionKeyResult'                     => [
			'type'    => 'structure',
			'members' => [ 'Cluster' => [ 'shape' => 'Cluster', ], ],
		],
		'SNSInvalidTopicFault'                          => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'SNSInvalidTopic',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'SNSNoAuthorizationFault'                       => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'SNSNoAuthorization',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'SNSTopicArnNotFoundFault'                      => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'SNSTopicArnNotFound',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ScheduleDefinitionList'                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'ScheduleDefinition',
			],
		],
		'ScheduleDefinitionTypeUnsupportedFault'        => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'ScheduleDefinitionTypeUnsupported',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'ScheduleState'                                 => [
			'type' => 'string',
			'enum' => [ 'MODIFYING', 'ACTIVE', 'FAILED', ],
		],
		'ScheduledSnapshotTimeList'                     => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TStamp',
				'locationName' => 'SnapshotTime',
			],
		],
		'SensitiveString'                               => [ 'type' => 'string', 'sensitive' => true, ],
		'Snapshot'                                      => [
			'type'    => 'structure',
			'members' => [
				'SnapshotIdentifier'                     => [ 'shape' => 'String', ],
				'ClusterIdentifier'                      => [ 'shape' => 'String', ],
				'SnapshotCreateTime'                     => [ 'shape' => 'TStamp', ],
				'Status'                                 => [ 'shape' => 'String', ],
				'Port'                                   => [ 'shape' => 'Integer', ],
				'AvailabilityZone'                       => [ 'shape' => 'String', ],
				'ClusterCreateTime'                      => [ 'shape' => 'TStamp', ],
				'MasterUsername'                         => [ 'shape' => 'String', ],
				'ClusterVersion'                         => [ 'shape' => 'String', ],
				'SnapshotType'                           => [ 'shape' => 'String', ],
				'NodeType'                               => [ 'shape' => 'String', ],
				'NumberOfNodes'                          => [ 'shape' => 'Integer', ],
				'DBName'                                 => [ 'shape' => 'String', ],
				'VpcId'                                  => [ 'shape' => 'String', ],
				'Encrypted'                              => [ 'shape' => 'Boolean', ],
				'KmsKeyId'                               => [ 'shape' => 'String', ],
				'EncryptedWithHSM'                       => [ 'shape' => 'Boolean', ],
				'AccountsWithRestoreAccess'              => [ 'shape' => 'AccountsWithRestoreAccessList', ],
				'OwnerAccount'                           => [ 'shape' => 'String', ],
				'TotalBackupSizeInMegaBytes'             => [ 'shape' => 'Double', ],
				'ActualIncrementalBackupSizeInMegaBytes' => [ 'shape' => 'Double', ],
				'BackupProgressInMegaBytes'              => [ 'shape' => 'Double', ],
				'CurrentBackupRateInMegaBytesPerSecond'  => [ 'shape' => 'Double', ],
				'EstimatedSecondsToCompletion'           => [ 'shape' => 'Long', ],
				'ElapsedTimeInSeconds'                   => [ 'shape' => 'Long', ],
				'SourceRegion'                           => [ 'shape' => 'String', ],
				'Tags'                                   => [ 'shape' => 'TagList', ],
				'RestorableNodeTypes'                    => [ 'shape' => 'RestorableNodeTypeList', ],
				'EnhancedVpcRouting'                     => [ 'shape' => 'Boolean', ],
				'MaintenanceTrackName'                   => [ 'shape' => 'String', ],
				'ManualSnapshotRetentionPeriod'          => [ 'shape' => 'IntegerOptional', ],
				'ManualSnapshotRemainingDays'            => [ 'shape' => 'IntegerOptional', ],
				'SnapshotRetentionStartTime'             => [ 'shape' => 'TStamp', ],
			],
			'wrapper' => true,
		],
		'SnapshotAttributeToSortBy'                     => [
			'type' => 'string',
			'enum' => [ 'SOURCE_TYPE', 'TOTAL_SIZE', 'CREATE_TIME', ],
		],
		'SnapshotCopyAlreadyDisabledFault'              => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'SnapshotCopyAlreadyDisabledFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'SnapshotCopyAlreadyEnabledFault'               => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'SnapshotCopyAlreadyEnabledFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'SnapshotCopyDisabledFault'                     => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'SnapshotCopyDisabledFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'SnapshotCopyGrant'                             => [
			'type'    => 'structure',
			'members' => [
				'SnapshotCopyGrantName' => [ 'shape' => 'String', ],
				'KmsKeyId'              => [ 'shape' => 'String', ],
				'Tags'                  => [ 'shape' => 'TagList', ],
			],
			'wrapper' => true,
		],
		'SnapshotCopyGrantAlreadyExistsFault'           => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'SnapshotCopyGrantAlreadyExistsFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'SnapshotCopyGrantList'                         => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'SnapshotCopyGrant',
				'locationName' => 'SnapshotCopyGrant',
			],
		],
		'SnapshotCopyGrantMessage'                      => [
			'type'    => 'structure',
			'members' => [
				'Marker'             => [ 'shape' => 'String', ],
				'SnapshotCopyGrants' => [ 'shape' => 'SnapshotCopyGrantList', ],
			],
		],
		'SnapshotCopyGrantNotFoundFault'                => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'SnapshotCopyGrantNotFoundFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'SnapshotCopyGrantQuotaExceededFault'           => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'SnapshotCopyGrantQuotaExceededFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'SnapshotErrorMessage'                          => [
			'type'    => 'structure',
			'members' => [
				'SnapshotIdentifier'        => [ 'shape' => 'String', ],
				'SnapshotClusterIdentifier' => [ 'shape' => 'String', ],
				'FailureCode'               => [ 'shape' => 'String', ],
				'FailureReason'             => [ 'shape' => 'String', ],
			],
		],
		'SnapshotIdentifierList'                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'String',
			],
		],
		'SnapshotList'                                  => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Snapshot',
				'locationName' => 'Snapshot',
			],
		],
		'SnapshotMessage'                               => [
			'type'    => 'structure',
			'members' => [
				'Marker'    => [ 'shape' => 'String', ],
				'Snapshots' => [ 'shape' => 'SnapshotList', ],
			],
		],
		'SnapshotSchedule'                              => [
			'type'    => 'structure',
			'members' => [
				'ScheduleDefinitions'    => [ 'shape' => 'ScheduleDefinitionList', ],
				'ScheduleIdentifier'     => [ 'shape' => 'String', ],
				'ScheduleDescription'    => [ 'shape' => 'String', ],
				'Tags'                   => [ 'shape' => 'TagList', ],
				'NextInvocations'        => [ 'shape' => 'ScheduledSnapshotTimeList', ],
				'AssociatedClusterCount' => [ 'shape' => 'IntegerOptional', ],
				'AssociatedClusters'     => [ 'shape' => 'AssociatedClusterList', ],
			],
		],
		'SnapshotScheduleAlreadyExistsFault'            => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'SnapshotScheduleAlreadyExists',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'SnapshotScheduleList'                          => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'SnapshotSchedule',
				'locationName' => 'SnapshotSchedule',
			],
		],
		'SnapshotScheduleNotFoundFault'                 => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'SnapshotScheduleNotFound',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'SnapshotScheduleQuotaExceededFault'            => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'SnapshotScheduleQuotaExceeded',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'SnapshotScheduleUpdateInProgressFault'         => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'SnapshotScheduleUpdateInProgress',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'SnapshotSortingEntity'                         => [
			'type'     => 'structure',
			'required' => [ 'Attribute', ],
			'members'  => [
				'Attribute' => [ 'shape' => 'SnapshotAttributeToSortBy', ],
				'SortOrder' => [ 'shape' => 'SortByOrder', ],
			],
		],
		'SnapshotSortingEntityList'                     => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'SnapshotSortingEntity',
				'locationName' => 'SnapshotSortingEntity',
			],
		],
		'SortByOrder'                                   => [ 'type' => 'string', 'enum' => [ 'ASC', 'DESC', ], ],
		'SourceIdsList'                                 => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'SourceId',
			],
		],
		'SourceNotFoundFault'                           => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'SourceNotFound',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'SourceType'                                    => [
			'type' => 'string',
			'enum' => [
				'cluster',
				'cluster-parameter-group',
				'cluster-security-group',
				'cluster-snapshot',
			],
		],
		'String'                                        => [ 'type' => 'string', ],
		'Subnet'                                        => [
			'type'    => 'structure',
			'members' => [
				'SubnetIdentifier'       => [ 'shape' => 'String', ],
				'SubnetAvailabilityZone' => [ 'shape' => 'AvailabilityZone', ],
				'SubnetStatus'           => [ 'shape' => 'String', ],
			],
		],
		'SubnetAlreadyInUse'                            => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'SubnetAlreadyInUse',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'SubnetIdentifierList'                          => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'SubnetIdentifier',
			],
		],
		'SubnetList'                                    => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Subnet',
				'locationName' => 'Subnet',
			],
		],
		'SubscriptionAlreadyExistFault'                 => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'SubscriptionAlreadyExist',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'SubscriptionCategoryNotFoundFault'             => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'SubscriptionCategoryNotFound',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'SubscriptionEventIdNotFoundFault'              => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'SubscriptionEventIdNotFound',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'SubscriptionNotFoundFault'                     => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'SubscriptionNotFound',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'SubscriptionSeverityNotFoundFault'             => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'SubscriptionSeverityNotFound',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'SupportedOperation'                            => [
			'type'    => 'structure',
			'members' => [ 'OperationName' => [ 'shape' => 'String', ], ],
		],
		'SupportedOperationList'                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'SupportedOperation',
				'locationName' => 'SupportedOperation',
			],
		],
		'SupportedPlatform'                             => [
			'type'    => 'structure',
			'members' => [ 'Name' => [ 'shape' => 'String', ], ],
			'wrapper' => true,
		],
		'SupportedPlatformsList'                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'SupportedPlatform',
				'locationName' => 'SupportedPlatform',
			],
		],
		'TStamp'                                        => [ 'type' => 'timestamp', ],
		'TableLimitExceededFault'                       => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'TableLimitExceeded',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'TableRestoreNotFoundFault'                     => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'TableRestoreNotFoundFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'TableRestoreStatus'                            => [
			'type'    => 'structure',
			'members' => [
				'TableRestoreRequestId' => [ 'shape' => 'String', ],
				'Status'                => [ 'shape' => 'TableRestoreStatusType', ],
				'Message'               => [ 'shape' => 'String', ],
				'RequestTime'           => [ 'shape' => 'TStamp', ],
				'ProgressInMegaBytes'   => [ 'shape' => 'LongOptional', ],
				'TotalDataInMegaBytes'  => [ 'shape' => 'LongOptional', ],
				'ClusterIdentifier'     => [ 'shape' => 'String', ],
				'SnapshotIdentifier'    => [ 'shape' => 'String', ],
				'SourceDatabaseName'    => [ 'shape' => 'String', ],
				'SourceSchemaName'      => [ 'shape' => 'String', ],
				'SourceTableName'       => [ 'shape' => 'String', ],
				'TargetDatabaseName'    => [ 'shape' => 'String', ],
				'TargetSchemaName'      => [ 'shape' => 'String', ],
				'NewTableName'          => [ 'shape' => 'String', ],
			],
			'wrapper' => true,
		],
		'TableRestoreStatusList'                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TableRestoreStatus',
				'locationName' => 'TableRestoreStatus',
			],
		],
		'TableRestoreStatusMessage'                     => [
			'type'    => 'structure',
			'members' => [
				'TableRestoreStatusDetails' => [ 'shape' => 'TableRestoreStatusList', ],
				'Marker'                    => [ 'shape' => 'String', ],
			],
		],
		'TableRestoreStatusType'                        => [
			'type' => 'string',
			'enum' => [
				'PENDING',
				'IN_PROGRESS',
				'SUCCEEDED',
				'FAILED',
				'CANCELED',
			],
		],
		'Tag'                                           => [
			'type'    => 'structure',
			'members' => [
				'Key'   => [ 'shape' => 'String', ],
				'Value' => [ 'shape' => 'String', ],
			],
		],
		'TagKeyList'                                    => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'TagKey',
			],
		],
		'TagLimitExceededFault'                         => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'TagLimitExceededFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'TagList'                                       => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Tag', 'locationName' => 'Tag', ],
		],
		'TagValueList'                                  => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'TagValue',
			],
		],
		'TaggedResource'                                => [
			'type'    => 'structure',
			'members' => [
				'Tag'          => [ 'shape' => 'Tag', ],
				'ResourceName' => [ 'shape' => 'String', ],
				'ResourceType' => [ 'shape' => 'String', ],
			],
		],
		'TaggedResourceList'                            => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'TaggedResource',
				'locationName' => 'TaggedResource',
			],
		],
		'TaggedResourceListMessage'                     => [
			'type'    => 'structure',
			'members' => [
				'TaggedResources' => [ 'shape' => 'TaggedResourceList', ],
				'Marker'          => [ 'shape' => 'String', ],
			],
		],
		'TrackList'                                     => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'MaintenanceTrack',
				'locationName' => 'MaintenanceTrack',
			],
		],
		'TrackListMessage'                              => [
			'type'    => 'structure',
			'members' => [
				'MaintenanceTracks' => [ 'shape' => 'TrackList', ],
				'Marker'            => [ 'shape' => 'String', ],
			],
		],
		'UnauthorizedOperation'                         => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'UnauthorizedOperation',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'UnknownSnapshotCopyRegionFault'                => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'UnknownSnapshotCopyRegionFault',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'UnsupportedOperationFault'                     => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'UnsupportedOperation',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'UnsupportedOptionFault'                        => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'UnsupportedOptionFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'UpdateTarget'                                  => [
			'type'    => 'structure',
			'members' => [
				'MaintenanceTrackName' => [ 'shape' => 'String', ],
				'DatabaseVersion'      => [ 'shape' => 'String', ],
				'SupportedOperations'  => [ 'shape' => 'SupportedOperationList', ],
			],
		],
		'VpcSecurityGroupIdList'                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'VpcSecurityGroupId',
			],
		],
		'VpcSecurityGroupMembership'                    => [
			'type'    => 'structure',
			'members' => [
				'VpcSecurityGroupId' => [ 'shape' => 'String', ],
				'Status'             => [ 'shape' => 'String', ],
			],
		],
		'VpcSecurityGroupMembershipList'                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'VpcSecurityGroupMembership',
				'locationName' => 'VpcSecurityGroup',
			],
		],
	],
];
