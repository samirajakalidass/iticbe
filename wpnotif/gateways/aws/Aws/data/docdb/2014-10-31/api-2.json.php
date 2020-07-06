<?php
// This file was auto-generated from sdk-root/src/data/docdb/2014-10-31/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'          => '2014-10-31',
		'endpointPrefix'      => 'rds',
		'protocol'            => 'query',
		'serviceAbbreviation' => 'Amazon DocDB',
		'serviceFullName'     => 'Amazon DocumentDB with MongoDB compatibility',
		'serviceId'           => 'DocDB',
		'signatureVersion'    => 'v4',
		'signingName'         => 'rds',
		'uid'                 => 'docdb-2014-10-31',
		'xmlNamespace'        => 'http://rds.amazonaws.com/doc/2014-10-31/',
	],
	'operations' => [
		'AddTagsToResource'                      => [
			'name'   => 'AddTagsToResource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'AddTagsToResourceMessage', ],
			'errors' => [
				[ 'shape' => 'DBInstanceNotFoundFault', ],
				[ 'shape' => 'DBSnapshotNotFoundFault', ],
				[ 'shape' => 'DBClusterNotFoundFault', ],
			],
		],
		'ApplyPendingMaintenanceAction'          => [
			'name'   => 'ApplyPendingMaintenanceAction',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ApplyPendingMaintenanceActionMessage', ],
			'output' => [
				'shape'         => 'ApplyPendingMaintenanceActionResult',
				'resultWrapper' => 'ApplyPendingMaintenanceActionResult',
			],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundFault', ],
				[ 'shape' => 'InvalidDBClusterStateFault', ],
				[ 'shape' => 'InvalidDBInstanceStateFault', ],
			],
		],
		'CopyDBClusterParameterGroup'            => [
			'name'   => 'CopyDBClusterParameterGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CopyDBClusterParameterGroupMessage', ],
			'output' => [
				'shape'         => 'CopyDBClusterParameterGroupResult',
				'resultWrapper' => 'CopyDBClusterParameterGroupResult',
			],
			'errors' => [
				[ 'shape' => 'DBParameterGroupNotFoundFault', ],
				[ 'shape' => 'DBParameterGroupQuotaExceededFault', ],
				[ 'shape' => 'DBParameterGroupAlreadyExistsFault', ],
			],
		],
		'CopyDBClusterSnapshot'                  => [
			'name'   => 'CopyDBClusterSnapshot',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CopyDBClusterSnapshotMessage', ],
			'output' => [
				'shape'         => 'CopyDBClusterSnapshotResult',
				'resultWrapper' => 'CopyDBClusterSnapshotResult',
			],
			'errors' => [
				[ 'shape' => 'DBClusterSnapshotAlreadyExistsFault', ],
				[ 'shape' => 'DBClusterSnapshotNotFoundFault', ],
				[ 'shape' => 'InvalidDBClusterStateFault', ],
				[ 'shape' => 'InvalidDBClusterSnapshotStateFault', ],
				[ 'shape' => 'SnapshotQuotaExceededFault', ],
				[ 'shape' => 'KMSKeyNotAccessibleFault', ],
			],
		],
		'CreateDBCluster'                        => [
			'name'   => 'CreateDBCluster',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateDBClusterMessage', ],
			'output' => [
				'shape'         => 'CreateDBClusterResult',
				'resultWrapper' => 'CreateDBClusterResult',
			],
			'errors' => [
				[ 'shape' => 'DBClusterAlreadyExistsFault', ],
				[ 'shape' => 'InsufficientStorageClusterCapacityFault', ],
				[ 'shape' => 'DBClusterQuotaExceededFault', ],
				[ 'shape' => 'StorageQuotaExceededFault', ],
				[ 'shape' => 'DBSubnetGroupNotFoundFault', ],
				[ 'shape' => 'InvalidVPCNetworkStateFault', ],
				[ 'shape' => 'InvalidDBClusterStateFault', ],
				[ 'shape' => 'InvalidDBSubnetGroupStateFault', ],
				[ 'shape' => 'InvalidSubnet', ],
				[ 'shape' => 'InvalidDBInstanceStateFault', ],
				[ 'shape' => 'DBClusterParameterGroupNotFoundFault', ],
				[ 'shape' => 'KMSKeyNotAccessibleFault', ],
				[ 'shape' => 'DBClusterNotFoundFault', ],
				[ 'shape' => 'DBInstanceNotFoundFault', ],
				[ 'shape' => 'DBSubnetGroupDoesNotCoverEnoughAZs', ],
			],
		],
		'CreateDBClusterParameterGroup'          => [
			'name'   => 'CreateDBClusterParameterGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateDBClusterParameterGroupMessage', ],
			'output' => [
				'shape'         => 'CreateDBClusterParameterGroupResult',
				'resultWrapper' => 'CreateDBClusterParameterGroupResult',
			],
			'errors' => [
				[ 'shape' => 'DBParameterGroupQuotaExceededFault', ],
				[ 'shape' => 'DBParameterGroupAlreadyExistsFault', ],
			],
		],
		'CreateDBClusterSnapshot'                => [
			'name'   => 'CreateDBClusterSnapshot',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateDBClusterSnapshotMessage', ],
			'output' => [
				'shape'         => 'CreateDBClusterSnapshotResult',
				'resultWrapper' => 'CreateDBClusterSnapshotResult',
			],
			'errors' => [
				[ 'shape' => 'DBClusterSnapshotAlreadyExistsFault', ],
				[ 'shape' => 'InvalidDBClusterStateFault', ],
				[ 'shape' => 'DBClusterNotFoundFault', ],
				[ 'shape' => 'SnapshotQuotaExceededFault', ],
				[ 'shape' => 'InvalidDBClusterSnapshotStateFault', ],
			],
		],
		'CreateDBInstance'                       => [
			'name'   => 'CreateDBInstance',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateDBInstanceMessage', ],
			'output' => [
				'shape'         => 'CreateDBInstanceResult',
				'resultWrapper' => 'CreateDBInstanceResult',
			],
			'errors' => [
				[ 'shape' => 'DBInstanceAlreadyExistsFault', ],
				[ 'shape' => 'InsufficientDBInstanceCapacityFault', ],
				[ 'shape' => 'DBParameterGroupNotFoundFault', ],
				[ 'shape' => 'DBSecurityGroupNotFoundFault', ],
				[ 'shape' => 'InstanceQuotaExceededFault', ],
				[ 'shape' => 'StorageQuotaExceededFault', ],
				[ 'shape' => 'DBSubnetGroupNotFoundFault', ],
				[ 'shape' => 'DBSubnetGroupDoesNotCoverEnoughAZs', ],
				[ 'shape' => 'InvalidDBClusterStateFault', ],
				[ 'shape' => 'InvalidSubnet', ],
				[ 'shape' => 'InvalidVPCNetworkStateFault', ],
				[ 'shape' => 'DBClusterNotFoundFault', ],
				[ 'shape' => 'StorageTypeNotSupportedFault', ],
				[ 'shape' => 'AuthorizationNotFoundFault', ],
				[ 'shape' => 'KMSKeyNotAccessibleFault', ],
			],
		],
		'CreateDBSubnetGroup'                    => [
			'name'   => 'CreateDBSubnetGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateDBSubnetGroupMessage', ],
			'output' => [
				'shape'         => 'CreateDBSubnetGroupResult',
				'resultWrapper' => 'CreateDBSubnetGroupResult',
			],
			'errors' => [
				[ 'shape' => 'DBSubnetGroupAlreadyExistsFault', ],
				[ 'shape' => 'DBSubnetGroupQuotaExceededFault', ],
				[ 'shape' => 'DBSubnetQuotaExceededFault', ],
				[ 'shape' => 'DBSubnetGroupDoesNotCoverEnoughAZs', ],
				[ 'shape' => 'InvalidSubnet', ],
			],
		],
		'DeleteDBCluster'                        => [
			'name'   => 'DeleteDBCluster',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteDBClusterMessage', ],
			'output' => [
				'shape'         => 'DeleteDBClusterResult',
				'resultWrapper' => 'DeleteDBClusterResult',
			],
			'errors' => [
				[ 'shape' => 'DBClusterNotFoundFault', ],
				[ 'shape' => 'InvalidDBClusterStateFault', ],
				[ 'shape' => 'DBClusterSnapshotAlreadyExistsFault', ],
				[ 'shape' => 'SnapshotQuotaExceededFault', ],
				[ 'shape' => 'InvalidDBClusterSnapshotStateFault', ],
			],
		],
		'DeleteDBClusterParameterGroup'          => [
			'name'   => 'DeleteDBClusterParameterGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteDBClusterParameterGroupMessage', ],
			'errors' => [
				[ 'shape' => 'InvalidDBParameterGroupStateFault', ],
				[ 'shape' => 'DBParameterGroupNotFoundFault', ],
			],
		],
		'DeleteDBClusterSnapshot'                => [
			'name'   => 'DeleteDBClusterSnapshot',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteDBClusterSnapshotMessage', ],
			'output' => [
				'shape'         => 'DeleteDBClusterSnapshotResult',
				'resultWrapper' => 'DeleteDBClusterSnapshotResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidDBClusterSnapshotStateFault', ],
				[ 'shape' => 'DBClusterSnapshotNotFoundFault', ],
			],
		],
		'DeleteDBInstance'                       => [
			'name'   => 'DeleteDBInstance',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteDBInstanceMessage', ],
			'output' => [
				'shape'         => 'DeleteDBInstanceResult',
				'resultWrapper' => 'DeleteDBInstanceResult',
			],
			'errors' => [
				[ 'shape' => 'DBInstanceNotFoundFault', ],
				[ 'shape' => 'InvalidDBInstanceStateFault', ],
				[ 'shape' => 'DBSnapshotAlreadyExistsFault', ],
				[ 'shape' => 'SnapshotQuotaExceededFault', ],
				[ 'shape' => 'InvalidDBClusterStateFault', ],
			],
		],
		'DeleteDBSubnetGroup'                    => [
			'name'   => 'DeleteDBSubnetGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteDBSubnetGroupMessage', ],
			'errors' => [
				[ 'shape' => 'InvalidDBSubnetGroupStateFault', ],
				[ 'shape' => 'InvalidDBSubnetStateFault', ],
				[ 'shape' => 'DBSubnetGroupNotFoundFault', ],
			],
		],
		'DescribeDBClusterParameterGroups'       => [
			'name'   => 'DescribeDBClusterParameterGroups',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeDBClusterParameterGroupsMessage', ],
			'output' => [
				'shape'         => 'DBClusterParameterGroupsMessage',
				'resultWrapper' => 'DescribeDBClusterParameterGroupsResult',
			],
			'errors' => [ [ 'shape' => 'DBParameterGroupNotFoundFault', ], ],
		],
		'DescribeDBClusterParameters'            => [
			'name'   => 'DescribeDBClusterParameters',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeDBClusterParametersMessage', ],
			'output' => [
				'shape'         => 'DBClusterParameterGroupDetails',
				'resultWrapper' => 'DescribeDBClusterParametersResult',
			],
			'errors' => [ [ 'shape' => 'DBParameterGroupNotFoundFault', ], ],
		],
		'DescribeDBClusterSnapshotAttributes'    => [
			'name'   => 'DescribeDBClusterSnapshotAttributes',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeDBClusterSnapshotAttributesMessage', ],
			'output' => [
				'shape'         => 'DescribeDBClusterSnapshotAttributesResult',
				'resultWrapper' => 'DescribeDBClusterSnapshotAttributesResult',
			],
			'errors' => [ [ 'shape' => 'DBClusterSnapshotNotFoundFault', ], ],
		],
		'DescribeDBClusterSnapshots'             => [
			'name'   => 'DescribeDBClusterSnapshots',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeDBClusterSnapshotsMessage', ],
			'output' => [
				'shape'         => 'DBClusterSnapshotMessage',
				'resultWrapper' => 'DescribeDBClusterSnapshotsResult',
			],
			'errors' => [ [ 'shape' => 'DBClusterSnapshotNotFoundFault', ], ],
		],
		'DescribeDBClusters'                     => [
			'name'   => 'DescribeDBClusters',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeDBClustersMessage', ],
			'output' => [
				'shape'         => 'DBClusterMessage',
				'resultWrapper' => 'DescribeDBClustersResult',
			],
			'errors' => [ [ 'shape' => 'DBClusterNotFoundFault', ], ],
		],
		'DescribeDBEngineVersions'               => [
			'name'   => 'DescribeDBEngineVersions',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeDBEngineVersionsMessage', ],
			'output' => [
				'shape'         => 'DBEngineVersionMessage',
				'resultWrapper' => 'DescribeDBEngineVersionsResult',
			],
		],
		'DescribeDBInstances'                    => [
			'name'   => 'DescribeDBInstances',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeDBInstancesMessage', ],
			'output' => [
				'shape'         => 'DBInstanceMessage',
				'resultWrapper' => 'DescribeDBInstancesResult',
			],
			'errors' => [ [ 'shape' => 'DBInstanceNotFoundFault', ], ],
		],
		'DescribeDBSubnetGroups'                 => [
			'name'   => 'DescribeDBSubnetGroups',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeDBSubnetGroupsMessage', ],
			'output' => [
				'shape'         => 'DBSubnetGroupMessage',
				'resultWrapper' => 'DescribeDBSubnetGroupsResult',
			],
			'errors' => [ [ 'shape' => 'DBSubnetGroupNotFoundFault', ], ],
		],
		'DescribeEngineDefaultClusterParameters' => [
			'name'   => 'DescribeEngineDefaultClusterParameters',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeEngineDefaultClusterParametersMessage', ],
			'output' => [
				'shape'         => 'DescribeEngineDefaultClusterParametersResult',
				'resultWrapper' => 'DescribeEngineDefaultClusterParametersResult',
			],
		],
		'DescribeEventCategories'                => [
			'name'   => 'DescribeEventCategories',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeEventCategoriesMessage', ],
			'output' => [
				'shape'         => 'EventCategoriesMessage',
				'resultWrapper' => 'DescribeEventCategoriesResult',
			],
		],
		'DescribeEvents'                         => [
			'name'   => 'DescribeEvents',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeEventsMessage', ],
			'output' => [
				'shape'         => 'EventsMessage',
				'resultWrapper' => 'DescribeEventsResult',
			],
		],
		'DescribeOrderableDBInstanceOptions'     => [
			'name'   => 'DescribeOrderableDBInstanceOptions',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeOrderableDBInstanceOptionsMessage', ],
			'output' => [
				'shape'         => 'OrderableDBInstanceOptionsMessage',
				'resultWrapper' => 'DescribeOrderableDBInstanceOptionsResult',
			],
		],
		'DescribePendingMaintenanceActions'      => [
			'name'   => 'DescribePendingMaintenanceActions',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribePendingMaintenanceActionsMessage', ],
			'output' => [
				'shape'         => 'PendingMaintenanceActionsMessage',
				'resultWrapper' => 'DescribePendingMaintenanceActionsResult',
			],
			'errors' => [ [ 'shape' => 'ResourceNotFoundFault', ], ],
		],
		'FailoverDBCluster'                      => [
			'name'   => 'FailoverDBCluster',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'FailoverDBClusterMessage', ],
			'output' => [
				'shape'         => 'FailoverDBClusterResult',
				'resultWrapper' => 'FailoverDBClusterResult',
			],
			'errors' => [
				[ 'shape' => 'DBClusterNotFoundFault', ],
				[ 'shape' => 'InvalidDBClusterStateFault', ],
				[ 'shape' => 'InvalidDBInstanceStateFault', ],
			],
		],
		'ListTagsForResource'                    => [
			'name'   => 'ListTagsForResource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListTagsForResourceMessage', ],
			'output' => [
				'shape'         => 'TagListMessage',
				'resultWrapper' => 'ListTagsForResourceResult',
			],
			'errors' => [
				[ 'shape' => 'DBInstanceNotFoundFault', ],
				[ 'shape' => 'DBSnapshotNotFoundFault', ],
				[ 'shape' => 'DBClusterNotFoundFault', ],
			],
		],
		'ModifyDBCluster'                        => [
			'name'   => 'ModifyDBCluster',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyDBClusterMessage', ],
			'output' => [
				'shape'         => 'ModifyDBClusterResult',
				'resultWrapper' => 'ModifyDBClusterResult',
			],
			'errors' => [
				[ 'shape' => 'DBClusterNotFoundFault', ],
				[ 'shape' => 'InvalidDBClusterStateFault', ],
				[ 'shape' => 'StorageQuotaExceededFault', ],
				[ 'shape' => 'DBSubnetGroupNotFoundFault', ],
				[ 'shape' => 'InvalidVPCNetworkStateFault', ],
				[ 'shape' => 'InvalidDBSubnetGroupStateFault', ],
				[ 'shape' => 'InvalidSubnet', ],
				[ 'shape' => 'DBClusterParameterGroupNotFoundFault', ],
				[ 'shape' => 'InvalidDBSecurityGroupStateFault', ],
				[ 'shape' => 'InvalidDBInstanceStateFault', ],
				[ 'shape' => 'DBClusterAlreadyExistsFault', ],
			],
		],
		'ModifyDBClusterParameterGroup'          => [
			'name'   => 'ModifyDBClusterParameterGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyDBClusterParameterGroupMessage', ],
			'output' => [
				'shape'         => 'DBClusterParameterGroupNameMessage',
				'resultWrapper' => 'ModifyDBClusterParameterGroupResult',
			],
			'errors' => [
				[ 'shape' => 'DBParameterGroupNotFoundFault', ],
				[ 'shape' => 'InvalidDBParameterGroupStateFault', ],
			],
		],
		'ModifyDBClusterSnapshotAttribute'       => [
			'name'   => 'ModifyDBClusterSnapshotAttribute',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyDBClusterSnapshotAttributeMessage', ],
			'output' => [
				'shape'         => 'ModifyDBClusterSnapshotAttributeResult',
				'resultWrapper' => 'ModifyDBClusterSnapshotAttributeResult',
			],
			'errors' => [
				[ 'shape' => 'DBClusterSnapshotNotFoundFault', ],
				[ 'shape' => 'InvalidDBClusterSnapshotStateFault', ],
				[ 'shape' => 'SharedSnapshotQuotaExceededFault', ],
			],
		],
		'ModifyDBInstance'                       => [
			'name'   => 'ModifyDBInstance',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyDBInstanceMessage', ],
			'output' => [
				'shape'         => 'ModifyDBInstanceResult',
				'resultWrapper' => 'ModifyDBInstanceResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidDBInstanceStateFault', ],
				[ 'shape' => 'InvalidDBSecurityGroupStateFault', ],
				[ 'shape' => 'DBInstanceAlreadyExistsFault', ],
				[ 'shape' => 'DBInstanceNotFoundFault', ],
				[ 'shape' => 'DBSecurityGroupNotFoundFault', ],
				[ 'shape' => 'DBParameterGroupNotFoundFault', ],
				[ 'shape' => 'InsufficientDBInstanceCapacityFault', ],
				[ 'shape' => 'StorageQuotaExceededFault', ],
				[ 'shape' => 'InvalidVPCNetworkStateFault', ],
				[ 'shape' => 'DBUpgradeDependencyFailureFault', ],
				[ 'shape' => 'StorageTypeNotSupportedFault', ],
				[ 'shape' => 'AuthorizationNotFoundFault', ],
				[ 'shape' => 'CertificateNotFoundFault', ],
			],
		],
		'ModifyDBSubnetGroup'                    => [
			'name'   => 'ModifyDBSubnetGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ModifyDBSubnetGroupMessage', ],
			'output' => [
				'shape'         => 'ModifyDBSubnetGroupResult',
				'resultWrapper' => 'ModifyDBSubnetGroupResult',
			],
			'errors' => [
				[ 'shape' => 'DBSubnetGroupNotFoundFault', ],
				[ 'shape' => 'DBSubnetQuotaExceededFault', ],
				[ 'shape' => 'SubnetAlreadyInUse', ],
				[ 'shape' => 'DBSubnetGroupDoesNotCoverEnoughAZs', ],
				[ 'shape' => 'InvalidSubnet', ],
			],
		],
		'RebootDBInstance'                       => [
			'name'   => 'RebootDBInstance',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RebootDBInstanceMessage', ],
			'output' => [
				'shape'         => 'RebootDBInstanceResult',
				'resultWrapper' => 'RebootDBInstanceResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidDBInstanceStateFault', ],
				[ 'shape' => 'DBInstanceNotFoundFault', ],
			],
		],
		'RemoveTagsFromResource'                 => [
			'name'   => 'RemoveTagsFromResource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RemoveTagsFromResourceMessage', ],
			'errors' => [
				[ 'shape' => 'DBInstanceNotFoundFault', ],
				[ 'shape' => 'DBSnapshotNotFoundFault', ],
				[ 'shape' => 'DBClusterNotFoundFault', ],
			],
		],
		'ResetDBClusterParameterGroup'           => [
			'name'   => 'ResetDBClusterParameterGroup',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ResetDBClusterParameterGroupMessage', ],
			'output' => [
				'shape'         => 'DBClusterParameterGroupNameMessage',
				'resultWrapper' => 'ResetDBClusterParameterGroupResult',
			],
			'errors' => [
				[ 'shape' => 'InvalidDBParameterGroupStateFault', ],
				[ 'shape' => 'DBParameterGroupNotFoundFault', ],
			],
		],
		'RestoreDBClusterFromSnapshot'           => [
			'name'   => 'RestoreDBClusterFromSnapshot',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RestoreDBClusterFromSnapshotMessage', ],
			'output' => [
				'shape'         => 'RestoreDBClusterFromSnapshotResult',
				'resultWrapper' => 'RestoreDBClusterFromSnapshotResult',
			],
			'errors' => [
				[ 'shape' => 'DBClusterAlreadyExistsFault', ],
				[ 'shape' => 'DBClusterQuotaExceededFault', ],
				[ 'shape' => 'StorageQuotaExceededFault', ],
				[ 'shape' => 'DBSubnetGroupNotFoundFault', ],
				[ 'shape' => 'DBSnapshotNotFoundFault', ],
				[ 'shape' => 'DBClusterSnapshotNotFoundFault', ],
				[ 'shape' => 'InsufficientDBClusterCapacityFault', ],
				[ 'shape' => 'InsufficientStorageClusterCapacityFault', ],
				[ 'shape' => 'InvalidDBSnapshotStateFault', ],
				[ 'shape' => 'InvalidDBClusterSnapshotStateFault', ],
				[ 'shape' => 'StorageQuotaExceededFault', ],
				[ 'shape' => 'InvalidVPCNetworkStateFault', ],
				[ 'shape' => 'InvalidRestoreFault', ],
				[ 'shape' => 'DBSubnetGroupNotFoundFault', ],
				[ 'shape' => 'InvalidSubnet', ],
				[ 'shape' => 'KMSKeyNotAccessibleFault', ],
			],
		],
		'RestoreDBClusterToPointInTime'          => [
			'name'   => 'RestoreDBClusterToPointInTime',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'RestoreDBClusterToPointInTimeMessage', ],
			'output' => [
				'shape'         => 'RestoreDBClusterToPointInTimeResult',
				'resultWrapper' => 'RestoreDBClusterToPointInTimeResult',
			],
			'errors' => [
				[ 'shape' => 'DBClusterAlreadyExistsFault', ],
				[ 'shape' => 'DBClusterNotFoundFault', ],
				[ 'shape' => 'DBClusterQuotaExceededFault', ],
				[ 'shape' => 'DBClusterSnapshotNotFoundFault', ],
				[ 'shape' => 'DBSubnetGroupNotFoundFault', ],
				[ 'shape' => 'InsufficientDBClusterCapacityFault', ],
				[ 'shape' => 'InsufficientStorageClusterCapacityFault', ],
				[ 'shape' => 'InvalidDBClusterSnapshotStateFault', ],
				[ 'shape' => 'InvalidDBClusterStateFault', ],
				[ 'shape' => 'InvalidDBSnapshotStateFault', ],
				[ 'shape' => 'InvalidRestoreFault', ],
				[ 'shape' => 'InvalidSubnet', ],
				[ 'shape' => 'InvalidVPCNetworkStateFault', ],
				[ 'shape' => 'KMSKeyNotAccessibleFault', ],
				[ 'shape' => 'StorageQuotaExceededFault', ],
			],
		],
		'StartDBCluster'                         => [
			'name'   => 'StartDBCluster',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'StartDBClusterMessage', ],
			'output' => [
				'shape'         => 'StartDBClusterResult',
				'resultWrapper' => 'StartDBClusterResult',
			],
			'errors' => [
				[ 'shape' => 'DBClusterNotFoundFault', ],
				[ 'shape' => 'InvalidDBClusterStateFault', ],
				[ 'shape' => 'InvalidDBInstanceStateFault', ],
			],
		],
		'StopDBCluster'                          => [
			'name'   => 'StopDBCluster',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'StopDBClusterMessage', ],
			'output' => [
				'shape'         => 'StopDBClusterResult',
				'resultWrapper' => 'StopDBClusterResult',
			],
			'errors' => [
				[ 'shape' => 'DBClusterNotFoundFault', ],
				[ 'shape' => 'InvalidDBClusterStateFault', ],
				[ 'shape' => 'InvalidDBInstanceStateFault', ],
			],
		],
	],
	'shapes'     => [
		'AddTagsToResourceMessage'                      => [
			'type'     => 'structure',
			'required' => [ 'ResourceName', 'Tags', ],
			'members'  => [
				'ResourceName' => [ 'shape' => 'String', ],
				'Tags'         => [ 'shape' => 'TagList', ],
			],
		],
		'ApplyMethod'                                   => [
			'type' => 'string',
			'enum' => [ 'immediate', 'pending-reboot', ],
		],
		'ApplyPendingMaintenanceActionMessage'          => [
			'type'     => 'structure',
			'required' => [ 'ResourceIdentifier', 'ApplyAction', 'OptInType', ],
			'members'  => [
				'ResourceIdentifier' => [ 'shape' => 'String', ],
				'ApplyAction'        => [ 'shape' => 'String', ],
				'OptInType'          => [ 'shape' => 'String', ],
			],
		],
		'ApplyPendingMaintenanceActionResult'           => [
			'type'    => 'structure',
			'members' => [ 'ResourcePendingMaintenanceActions' => [ 'shape' => 'ResourcePendingMaintenanceActions', ], ],
		],
		'AttributeValueList'                            => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'AttributeValue',
			],
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
		'AvailabilityZone'                              => [
			'type'    => 'structure',
			'members' => [ 'Name' => [ 'shape' => 'String', ], ],
			'wrapper' => true,
		],
		'AvailabilityZoneList'                          => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'AvailabilityZone',
				'locationName' => 'AvailabilityZone',
			],
		],
		'AvailabilityZones'                             => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'AvailabilityZone',
			],
		],
		'Boolean'                                       => [ 'type' => 'boolean', ],
		'BooleanOptional'                               => [ 'type' => 'boolean', ],
		'CertificateNotFoundFault'                      => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'CertificateNotFound',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'CloudwatchLogsExportConfiguration'             => [
			'type'    => 'structure',
			'members' => [
				'EnableLogTypes'  => [ 'shape' => 'LogTypeList', ],
				'DisableLogTypes' => [ 'shape' => 'LogTypeList', ],
			],
		],
		'CopyDBClusterParameterGroupMessage'            => [
			'type'     => 'structure',
			'required' => [
				'SourceDBClusterParameterGroupIdentifier',
				'TargetDBClusterParameterGroupIdentifier',
				'TargetDBClusterParameterGroupDescription',
			],
			'members'  => [
				'SourceDBClusterParameterGroupIdentifier'  => [ 'shape' => 'String', ],
				'TargetDBClusterParameterGroupIdentifier'  => [ 'shape' => 'String', ],
				'TargetDBClusterParameterGroupDescription' => [ 'shape' => 'String', ],
				'Tags'                                     => [ 'shape' => 'TagList', ],
			],
		],
		'CopyDBClusterParameterGroupResult'             => [
			'type'    => 'structure',
			'members' => [ 'DBClusterParameterGroup' => [ 'shape' => 'DBClusterParameterGroup', ], ],
		],
		'CopyDBClusterSnapshotMessage'                  => [
			'type'     => 'structure',
			'required' => [
				'SourceDBClusterSnapshotIdentifier',
				'TargetDBClusterSnapshotIdentifier',
			],
			'members'  => [
				'SourceDBClusterSnapshotIdentifier' => [ 'shape' => 'String', ],
				'TargetDBClusterSnapshotIdentifier' => [ 'shape' => 'String', ],
				'KmsKeyId'                          => [ 'shape' => 'String', ],
				'PreSignedUrl'                      => [ 'shape' => 'String', ],
				'CopyTags'                          => [ 'shape' => 'BooleanOptional', ],
				'Tags'                              => [ 'shape' => 'TagList', ],
			],
		],
		'CopyDBClusterSnapshotResult'                   => [
			'type'    => 'structure',
			'members' => [ 'DBClusterSnapshot' => [ 'shape' => 'DBClusterSnapshot', ], ],
		],
		'CreateDBClusterMessage'                        => [
			'type'     => 'structure',
			'required' => [ 'DBClusterIdentifier', 'Engine', 'MasterUsername', 'MasterUserPassword', ],
			'members'  => [
				'AvailabilityZones'           => [ 'shape' => 'AvailabilityZones', ],
				'BackupRetentionPeriod'       => [ 'shape' => 'IntegerOptional', ],
				'DBClusterIdentifier'         => [ 'shape' => 'String', ],
				'DBClusterParameterGroupName' => [ 'shape' => 'String', ],
				'VpcSecurityGroupIds'         => [ 'shape' => 'VpcSecurityGroupIdList', ],
				'DBSubnetGroupName'           => [ 'shape' => 'String', ],
				'Engine'                      => [ 'shape' => 'String', ],
				'EngineVersion'               => [ 'shape' => 'String', ],
				'Port'                        => [ 'shape' => 'IntegerOptional', ],
				'MasterUsername'              => [ 'shape' => 'String', ],
				'MasterUserPassword'          => [ 'shape' => 'String', ],
				'PreferredBackupWindow'       => [ 'shape' => 'String', ],
				'PreferredMaintenanceWindow'  => [ 'shape' => 'String', ],
				'Tags'                        => [ 'shape' => 'TagList', ],
				'StorageEncrypted'            => [ 'shape' => 'BooleanOptional', ],
				'KmsKeyId'                    => [ 'shape' => 'String', ],
				'EnableCloudwatchLogsExports' => [ 'shape' => 'LogTypeList', ],
				'DeletionProtection'          => [ 'shape' => 'BooleanOptional', ],
			],
		],
		'CreateDBClusterParameterGroupMessage'          => [
			'type'     => 'structure',
			'required' => [
				'DBClusterParameterGroupName',
				'DBParameterGroupFamily',
				'Description',
			],
			'members'  => [
				'DBClusterParameterGroupName' => [ 'shape' => 'String', ],
				'DBParameterGroupFamily'      => [ 'shape' => 'String', ],
				'Description'                 => [ 'shape' => 'String', ],
				'Tags'                        => [ 'shape' => 'TagList', ],
			],
		],
		'CreateDBClusterParameterGroupResult'           => [
			'type'    => 'structure',
			'members' => [ 'DBClusterParameterGroup' => [ 'shape' => 'DBClusterParameterGroup', ], ],
		],
		'CreateDBClusterResult'                         => [
			'type'    => 'structure',
			'members' => [ 'DBCluster' => [ 'shape' => 'DBCluster', ], ],
		],
		'CreateDBClusterSnapshotMessage'                => [
			'type'     => 'structure',
			'required' => [
				'DBClusterSnapshotIdentifier',
				'DBClusterIdentifier',
			],
			'members'  => [
				'DBClusterSnapshotIdentifier' => [ 'shape' => 'String', ],
				'DBClusterIdentifier'         => [ 'shape' => 'String', ],
				'Tags'                        => [ 'shape' => 'TagList', ],
			],
		],
		'CreateDBClusterSnapshotResult'                 => [
			'type'    => 'structure',
			'members' => [ 'DBClusterSnapshot' => [ 'shape' => 'DBClusterSnapshot', ], ],
		],
		'CreateDBInstanceMessage'                       => [
			'type'     => 'structure',
			'required' => [
				'DBInstanceIdentifier',
				'DBInstanceClass',
				'Engine',
				'DBClusterIdentifier',
			],
			'members'  => [
				'DBInstanceIdentifier'       => [ 'shape' => 'String', ],
				'DBInstanceClass'            => [ 'shape' => 'String', ],
				'Engine'                     => [ 'shape' => 'String', ],
				'AvailabilityZone'           => [ 'shape' => 'String', ],
				'PreferredMaintenanceWindow' => [ 'shape' => 'String', ],
				'AutoMinorVersionUpgrade'    => [ 'shape' => 'BooleanOptional', ],
				'Tags'                       => [ 'shape' => 'TagList', ],
				'DBClusterIdentifier'        => [ 'shape' => 'String', ],
				'PromotionTier'              => [ 'shape' => 'IntegerOptional', ],
			],
		],
		'CreateDBInstanceResult'                        => [
			'type'    => 'structure',
			'members' => [ 'DBInstance' => [ 'shape' => 'DBInstance', ], ],
		],
		'CreateDBSubnetGroupMessage'                    => [
			'type'     => 'structure',
			'required' => [
				'DBSubnetGroupName',
				'DBSubnetGroupDescription',
				'SubnetIds',
			],
			'members'  => [
				'DBSubnetGroupName'        => [ 'shape' => 'String', ],
				'DBSubnetGroupDescription' => [ 'shape' => 'String', ],
				'SubnetIds'                => [ 'shape' => 'SubnetIdentifierList', ],
				'Tags'                     => [ 'shape' => 'TagList', ],
			],
		],
		'CreateDBSubnetGroupResult'                     => [
			'type'    => 'structure',
			'members' => [ 'DBSubnetGroup' => [ 'shape' => 'DBSubnetGroup', ], ],
		],
		'DBCluster'                                     => [
			'type'    => 'structure',
			'members' => [
				'AvailabilityZones'            => [ 'shape' => 'AvailabilityZones', ],
				'BackupRetentionPeriod'        => [ 'shape' => 'IntegerOptional', ],
				'DBClusterIdentifier'          => [ 'shape' => 'String', ],
				'DBClusterParameterGroup'      => [ 'shape' => 'String', ],
				'DBSubnetGroup'                => [ 'shape' => 'String', ],
				'Status'                       => [ 'shape' => 'String', ],
				'PercentProgress'              => [ 'shape' => 'String', ],
				'EarliestRestorableTime'       => [ 'shape' => 'TStamp', ],
				'Endpoint'                     => [ 'shape' => 'String', ],
				'ReaderEndpoint'               => [ 'shape' => 'String', ],
				'MultiAZ'                      => [ 'shape' => 'Boolean', ],
				'Engine'                       => [ 'shape' => 'String', ],
				'EngineVersion'                => [ 'shape' => 'String', ],
				'LatestRestorableTime'         => [ 'shape' => 'TStamp', ],
				'Port'                         => [ 'shape' => 'IntegerOptional', ],
				'MasterUsername'               => [ 'shape' => 'String', ],
				'PreferredBackupWindow'        => [ 'shape' => 'String', ],
				'PreferredMaintenanceWindow'   => [ 'shape' => 'String', ],
				'DBClusterMembers'             => [ 'shape' => 'DBClusterMemberList', ],
				'VpcSecurityGroups'            => [ 'shape' => 'VpcSecurityGroupMembershipList', ],
				'HostedZoneId'                 => [ 'shape' => 'String', ],
				'StorageEncrypted'             => [ 'shape' => 'Boolean', ],
				'KmsKeyId'                     => [ 'shape' => 'String', ],
				'DbClusterResourceId'          => [ 'shape' => 'String', ],
				'DBClusterArn'                 => [ 'shape' => 'String', ],
				'AssociatedRoles'              => [ 'shape' => 'DBClusterRoles', ],
				'ClusterCreateTime'            => [ 'shape' => 'TStamp', ],
				'EnabledCloudwatchLogsExports' => [ 'shape' => 'LogTypeList', ],
				'DeletionProtection'           => [ 'shape' => 'Boolean', ],
			],
			'wrapper' => true,
		],
		'DBClusterAlreadyExistsFault'                   => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'DBClusterAlreadyExistsFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'DBClusterList'                                 => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'DBCluster',
				'locationName' => 'DBCluster',
			],
		],
		'DBClusterMember'                               => [
			'type'    => 'structure',
			'members' => [
				'DBInstanceIdentifier'          => [ 'shape' => 'String', ],
				'IsClusterWriter'               => [ 'shape' => 'Boolean', ],
				'DBClusterParameterGroupStatus' => [ 'shape' => 'String', ],
				'PromotionTier'                 => [ 'shape' => 'IntegerOptional', ],
			],
			'wrapper' => true,
		],
		'DBClusterMemberList'                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'DBClusterMember',
				'locationName' => 'DBClusterMember',
			],
		],
		'DBClusterMessage'                              => [
			'type'    => 'structure',
			'members' => [
				'Marker'     => [ 'shape' => 'String', ],
				'DBClusters' => [ 'shape' => 'DBClusterList', ],
			],
		],
		'DBClusterNotFoundFault'                        => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'DBClusterNotFoundFault',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'DBClusterParameterGroup'                       => [
			'type'    => 'structure',
			'members' => [
				'DBClusterParameterGroupName' => [ 'shape' => 'String', ],
				'DBParameterGroupFamily'      => [ 'shape' => 'String', ],
				'Description'                 => [ 'shape' => 'String', ],
				'DBClusterParameterGroupArn'  => [ 'shape' => 'String', ],
			],
			'wrapper' => true,
		],
		'DBClusterParameterGroupDetails'                => [
			'type'    => 'structure',
			'members' => [
				'Parameters' => [ 'shape' => 'ParametersList', ],
				'Marker'     => [ 'shape' => 'String', ],
			],
		],
		'DBClusterParameterGroupList'                   => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'DBClusterParameterGroup',
				'locationName' => 'DBClusterParameterGroup',
			],
		],
		'DBClusterParameterGroupNameMessage'            => [
			'type'    => 'structure',
			'members' => [ 'DBClusterParameterGroupName' => [ 'shape' => 'String', ], ],
		],
		'DBClusterParameterGroupNotFoundFault'          => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'DBClusterParameterGroupNotFound',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'DBClusterParameterGroupsMessage'               => [
			'type'    => 'structure',
			'members' => [
				'Marker'                   => [ 'shape' => 'String', ],
				'DBClusterParameterGroups' => [ 'shape' => 'DBClusterParameterGroupList', ],
			],
		],
		'DBClusterQuotaExceededFault'                   => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'DBClusterQuotaExceededFault',
				'httpStatusCode' => 403,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'DBClusterRole'                                 => [
			'type'    => 'structure',
			'members' => [
				'RoleArn' => [ 'shape' => 'String', ],
				'Status'  => [ 'shape' => 'String', ],
			],
		],
		'DBClusterRoles'                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'DBClusterRole',
				'locationName' => 'DBClusterRole',
			],
		],
		'DBClusterSnapshot'                             => [
			'type'    => 'structure',
			'members' => [
				'AvailabilityZones'           => [ 'shape' => 'AvailabilityZones', ],
				'DBClusterSnapshotIdentifier' => [ 'shape' => 'String', ],
				'DBClusterIdentifier'         => [ 'shape' => 'String', ],
				'SnapshotCreateTime'          => [ 'shape' => 'TStamp', ],
				'Engine'                      => [ 'shape' => 'String', ],
				'Status'                      => [ 'shape' => 'String', ],
				'Port'                        => [ 'shape' => 'Integer', ],
				'VpcId'                       => [ 'shape' => 'String', ],
				'ClusterCreateTime'           => [ 'shape' => 'TStamp', ],
				'MasterUsername'              => [ 'shape' => 'String', ],
				'EngineVersion'               => [ 'shape' => 'String', ],
				'SnapshotType'                => [ 'shape' => 'String', ],
				'PercentProgress'             => [ 'shape' => 'Integer', ],
				'StorageEncrypted'            => [ 'shape' => 'Boolean', ],
				'KmsKeyId'                    => [ 'shape' => 'String', ],
				'DBClusterSnapshotArn'        => [ 'shape' => 'String', ],
				'SourceDBClusterSnapshotArn'  => [ 'shape' => 'String', ],
			],
			'wrapper' => true,
		],
		'DBClusterSnapshotAlreadyExistsFault'           => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'DBClusterSnapshotAlreadyExistsFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'DBClusterSnapshotAttribute'                    => [
			'type'    => 'structure',
			'members' => [
				'AttributeName'   => [ 'shape' => 'String', ],
				'AttributeValues' => [ 'shape' => 'AttributeValueList', ],
			],
		],
		'DBClusterSnapshotAttributeList'                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'DBClusterSnapshotAttribute',
				'locationName' => 'DBClusterSnapshotAttribute',
			],
		],
		'DBClusterSnapshotAttributesResult'             => [
			'type'    => 'structure',
			'members' => [
				'DBClusterSnapshotIdentifier' => [ 'shape' => 'String', ],
				'DBClusterSnapshotAttributes' => [ 'shape' => 'DBClusterSnapshotAttributeList', ],
			],
			'wrapper' => true,
		],
		'DBClusterSnapshotList'                         => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'DBClusterSnapshot',
				'locationName' => 'DBClusterSnapshot',
			],
		],
		'DBClusterSnapshotMessage'                      => [
			'type'    => 'structure',
			'members' => [
				'Marker'             => [ 'shape' => 'String', ],
				'DBClusterSnapshots' => [ 'shape' => 'DBClusterSnapshotList', ],
			],
		],
		'DBClusterSnapshotNotFoundFault'                => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'DBClusterSnapshotNotFoundFault',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'DBEngineVersion'                               => [
			'type'    => 'structure',
			'members' => [
				'Engine'                             => [ 'shape' => 'String', ],
				'EngineVersion'                      => [ 'shape' => 'String', ],
				'DBParameterGroupFamily'             => [ 'shape' => 'String', ],
				'DBEngineDescription'                => [ 'shape' => 'String', ],
				'DBEngineVersionDescription'         => [ 'shape' => 'String', ],
				'ValidUpgradeTarget'                 => [ 'shape' => 'ValidUpgradeTargetList', ],
				'ExportableLogTypes'                 => [ 'shape' => 'LogTypeList', ],
				'SupportsLogExportsToCloudwatchLogs' => [ 'shape' => 'Boolean', ],
			],
		],
		'DBEngineVersionList'                           => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'DBEngineVersion',
				'locationName' => 'DBEngineVersion',
			],
		],
		'DBEngineVersionMessage'                        => [
			'type'    => 'structure',
			'members' => [
				'Marker'           => [ 'shape' => 'String', ],
				'DBEngineVersions' => [ 'shape' => 'DBEngineVersionList', ],
			],
		],
		'DBInstance'                                    => [
			'type'    => 'structure',
			'members' => [
				'DBInstanceIdentifier'         => [ 'shape' => 'String', ],
				'DBInstanceClass'              => [ 'shape' => 'String', ],
				'Engine'                       => [ 'shape' => 'String', ],
				'DBInstanceStatus'             => [ 'shape' => 'String', ],
				'Endpoint'                     => [ 'shape' => 'Endpoint', ],
				'InstanceCreateTime'           => [ 'shape' => 'TStamp', ],
				'PreferredBackupWindow'        => [ 'shape' => 'String', ],
				'BackupRetentionPeriod'        => [ 'shape' => 'Integer', ],
				'VpcSecurityGroups'            => [ 'shape' => 'VpcSecurityGroupMembershipList', ],
				'AvailabilityZone'             => [ 'shape' => 'String', ],
				'DBSubnetGroup'                => [ 'shape' => 'DBSubnetGroup', ],
				'PreferredMaintenanceWindow'   => [ 'shape' => 'String', ],
				'PendingModifiedValues'        => [ 'shape' => 'PendingModifiedValues', ],
				'LatestRestorableTime'         => [ 'shape' => 'TStamp', ],
				'EngineVersion'                => [ 'shape' => 'String', ],
				'AutoMinorVersionUpgrade'      => [ 'shape' => 'Boolean', ],
				'PubliclyAccessible'           => [ 'shape' => 'Boolean', ],
				'StatusInfos'                  => [ 'shape' => 'DBInstanceStatusInfoList', ],
				'DBClusterIdentifier'          => [ 'shape' => 'String', ],
				'StorageEncrypted'             => [ 'shape' => 'Boolean', ],
				'KmsKeyId'                     => [ 'shape' => 'String', ],
				'DbiResourceId'                => [ 'shape' => 'String', ],
				'PromotionTier'                => [ 'shape' => 'IntegerOptional', ],
				'DBInstanceArn'                => [ 'shape' => 'String', ],
				'EnabledCloudwatchLogsExports' => [ 'shape' => 'LogTypeList', ],
			],
			'wrapper' => true,
		],
		'DBInstanceAlreadyExistsFault'                  => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'DBInstanceAlreadyExists',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'DBInstanceList'                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'DBInstance',
				'locationName' => 'DBInstance',
			],
		],
		'DBInstanceMessage'                             => [
			'type'    => 'structure',
			'members' => [
				'Marker'      => [ 'shape' => 'String', ],
				'DBInstances' => [ 'shape' => 'DBInstanceList', ],
			],
		],
		'DBInstanceNotFoundFault'                       => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'DBInstanceNotFound',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'DBInstanceStatusInfo'                          => [
			'type'    => 'structure',
			'members' => [
				'StatusType' => [ 'shape' => 'String', ],
				'Normal'     => [ 'shape' => 'Boolean', ],
				'Status'     => [ 'shape' => 'String', ],
				'Message'    => [ 'shape' => 'String', ],
			],
		],
		'DBInstanceStatusInfoList'                      => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'DBInstanceStatusInfo',
				'locationName' => 'DBInstanceStatusInfo',
			],
		],
		'DBParameterGroupAlreadyExistsFault'            => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'DBParameterGroupAlreadyExists',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'DBParameterGroupNotFoundFault'                 => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'DBParameterGroupNotFound',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'DBParameterGroupQuotaExceededFault'            => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'DBParameterGroupQuotaExceeded',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'DBSecurityGroupNotFoundFault'                  => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'DBSecurityGroupNotFound',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'DBSnapshotAlreadyExistsFault'                  => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'DBSnapshotAlreadyExists',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'DBSnapshotNotFoundFault'                       => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'DBSnapshotNotFound',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'DBSubnetGroup'                                 => [
			'type'    => 'structure',
			'members' => [
				'DBSubnetGroupName'        => [ 'shape' => 'String', ],
				'DBSubnetGroupDescription' => [ 'shape' => 'String', ],
				'VpcId'                    => [ 'shape' => 'String', ],
				'SubnetGroupStatus'        => [ 'shape' => 'String', ],
				'Subnets'                  => [ 'shape' => 'SubnetList', ],
				'DBSubnetGroupArn'         => [ 'shape' => 'String', ],
			],
			'wrapper' => true,
		],
		'DBSubnetGroupAlreadyExistsFault'               => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'DBSubnetGroupAlreadyExists',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'DBSubnetGroupDoesNotCoverEnoughAZs'            => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'DBSubnetGroupDoesNotCoverEnoughAZs',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'DBSubnetGroupMessage'                          => [
			'type'    => 'structure',
			'members' => [
				'Marker'         => [ 'shape' => 'String', ],
				'DBSubnetGroups' => [ 'shape' => 'DBSubnetGroups', ],
			],
		],
		'DBSubnetGroupNotFoundFault'                    => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'DBSubnetGroupNotFoundFault',
				'httpStatusCode' => 404,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'DBSubnetGroupQuotaExceededFault'               => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'DBSubnetGroupQuotaExceeded',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'DBSubnetGroups'                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'DBSubnetGroup',
				'locationName' => 'DBSubnetGroup',
			],
		],
		'DBSubnetQuotaExceededFault'                    => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'DBSubnetQuotaExceededFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'DBUpgradeDependencyFailureFault'               => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'DBUpgradeDependencyFailure',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'DeleteDBClusterMessage'                        => [
			'type'     => 'structure',
			'required' => [ 'DBClusterIdentifier', ],
			'members'  => [
				'DBClusterIdentifier'       => [ 'shape' => 'String', ],
				'SkipFinalSnapshot'         => [ 'shape' => 'Boolean', ],
				'FinalDBSnapshotIdentifier' => [ 'shape' => 'String', ],
			],
		],
		'DeleteDBClusterParameterGroupMessage'          => [
			'type'     => 'structure',
			'required' => [ 'DBClusterParameterGroupName', ],
			'members'  => [ 'DBClusterParameterGroupName' => [ 'shape' => 'String', ], ],
		],
		'DeleteDBClusterResult'                         => [
			'type'    => 'structure',
			'members' => [ 'DBCluster' => [ 'shape' => 'DBCluster', ], ],
		],
		'DeleteDBClusterSnapshotMessage'                => [
			'type'     => 'structure',
			'required' => [ 'DBClusterSnapshotIdentifier', ],
			'members'  => [ 'DBClusterSnapshotIdentifier' => [ 'shape' => 'String', ], ],
		],
		'DeleteDBClusterSnapshotResult'                 => [
			'type'    => 'structure',
			'members' => [ 'DBClusterSnapshot' => [ 'shape' => 'DBClusterSnapshot', ], ],
		],
		'DeleteDBInstanceMessage'                       => [
			'type'     => 'structure',
			'required' => [ 'DBInstanceIdentifier', ],
			'members'  => [ 'DBInstanceIdentifier' => [ 'shape' => 'String', ], ],
		],
		'DeleteDBInstanceResult'                        => [
			'type'    => 'structure',
			'members' => [ 'DBInstance' => [ 'shape' => 'DBInstance', ], ],
		],
		'DeleteDBSubnetGroupMessage'                    => [
			'type'     => 'structure',
			'required' => [ 'DBSubnetGroupName', ],
			'members'  => [ 'DBSubnetGroupName' => [ 'shape' => 'String', ], ],
		],
		'DescribeDBClusterParameterGroupsMessage'       => [
			'type'    => 'structure',
			'members' => [
				'DBClusterParameterGroupName' => [ 'shape' => 'String', ],
				'Filters'                     => [ 'shape' => 'FilterList', ],
				'MaxRecords'                  => [ 'shape' => 'IntegerOptional', ],
				'Marker'                      => [ 'shape' => 'String', ],
			],
		],
		'DescribeDBClusterParametersMessage'            => [
			'type'     => 'structure',
			'required' => [ 'DBClusterParameterGroupName', ],
			'members'  => [
				'DBClusterParameterGroupName' => [ 'shape' => 'String', ],
				'Source'                      => [ 'shape' => 'String', ],
				'Filters'                     => [ 'shape' => 'FilterList', ],
				'MaxRecords'                  => [ 'shape' => 'IntegerOptional', ],
				'Marker'                      => [ 'shape' => 'String', ],
			],
		],
		'DescribeDBClusterSnapshotAttributesMessage'    => [
			'type'     => 'structure',
			'required' => [ 'DBClusterSnapshotIdentifier', ],
			'members'  => [ 'DBClusterSnapshotIdentifier' => [ 'shape' => 'String', ], ],
		],
		'DescribeDBClusterSnapshotAttributesResult'     => [
			'type'    => 'structure',
			'members' => [ 'DBClusterSnapshotAttributesResult' => [ 'shape' => 'DBClusterSnapshotAttributesResult', ], ],
		],
		'DescribeDBClusterSnapshotsMessage'             => [
			'type'    => 'structure',
			'members' => [
				'DBClusterIdentifier'         => [ 'shape' => 'String', ],
				'DBClusterSnapshotIdentifier' => [ 'shape' => 'String', ],
				'SnapshotType'                => [ 'shape' => 'String', ],
				'Filters'                     => [ 'shape' => 'FilterList', ],
				'MaxRecords'                  => [ 'shape' => 'IntegerOptional', ],
				'Marker'                      => [ 'shape' => 'String', ],
				'IncludeShared'               => [ 'shape' => 'Boolean', ],
				'IncludePublic'               => [ 'shape' => 'Boolean', ],
			],
		],
		'DescribeDBClustersMessage'                     => [
			'type'    => 'structure',
			'members' => [
				'DBClusterIdentifier' => [ 'shape' => 'String', ],
				'Filters'             => [ 'shape' => 'FilterList', ],
				'MaxRecords'          => [ 'shape' => 'IntegerOptional', ],
				'Marker'              => [ 'shape' => 'String', ],
			],
		],
		'DescribeDBEngineVersionsMessage'               => [
			'type'    => 'structure',
			'members' => [
				'Engine'                     => [ 'shape' => 'String', ],
				'EngineVersion'              => [ 'shape' => 'String', ],
				'DBParameterGroupFamily'     => [ 'shape' => 'String', ],
				'Filters'                    => [ 'shape' => 'FilterList', ],
				'MaxRecords'                 => [ 'shape' => 'IntegerOptional', ],
				'Marker'                     => [ 'shape' => 'String', ],
				'DefaultOnly'                => [ 'shape' => 'Boolean', ],
				'ListSupportedCharacterSets' => [ 'shape' => 'BooleanOptional', ],
				'ListSupportedTimezones'     => [ 'shape' => 'BooleanOptional', ],
			],
		],
		'DescribeDBInstancesMessage'                    => [
			'type'    => 'structure',
			'members' => [
				'DBInstanceIdentifier' => [ 'shape' => 'String', ],
				'Filters'              => [ 'shape' => 'FilterList', ],
				'MaxRecords'           => [ 'shape' => 'IntegerOptional', ],
				'Marker'               => [ 'shape' => 'String', ],
			],
		],
		'DescribeDBSubnetGroupsMessage'                 => [
			'type'    => 'structure',
			'members' => [
				'DBSubnetGroupName' => [ 'shape' => 'String', ],
				'Filters'           => [ 'shape' => 'FilterList', ],
				'MaxRecords'        => [ 'shape' => 'IntegerOptional', ],
				'Marker'            => [ 'shape' => 'String', ],
			],
		],
		'DescribeEngineDefaultClusterParametersMessage' => [
			'type'     => 'structure',
			'required' => [ 'DBParameterGroupFamily', ],
			'members'  => [
				'DBParameterGroupFamily' => [ 'shape' => 'String', ],
				'Filters'                => [ 'shape' => 'FilterList', ],
				'MaxRecords'             => [ 'shape' => 'IntegerOptional', ],
				'Marker'                 => [ 'shape' => 'String', ],
			],
		],
		'DescribeEngineDefaultClusterParametersResult'  => [
			'type'    => 'structure',
			'members' => [ 'EngineDefaults' => [ 'shape' => 'EngineDefaults', ], ],
		],
		'DescribeEventCategoriesMessage'                => [
			'type'    => 'structure',
			'members' => [
				'SourceType' => [ 'shape' => 'String', ],
				'Filters'    => [ 'shape' => 'FilterList', ],
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
				'EventCategories'  => [ 'shape' => 'EventCategoriesList', ],
				'Filters'          => [ 'shape' => 'FilterList', ],
				'MaxRecords'       => [ 'shape' => 'IntegerOptional', ],
				'Marker'           => [ 'shape' => 'String', ],
			],
		],
		'DescribeOrderableDBInstanceOptionsMessage'     => [
			'type'     => 'structure',
			'required' => [ 'Engine', ],
			'members'  => [
				'Engine'          => [ 'shape' => 'String', ],
				'EngineVersion'   => [ 'shape' => 'String', ],
				'DBInstanceClass' => [ 'shape' => 'String', ],
				'LicenseModel'    => [ 'shape' => 'String', ],
				'Vpc'             => [ 'shape' => 'BooleanOptional', ],
				'Filters'         => [ 'shape' => 'FilterList', ],
				'MaxRecords'      => [ 'shape' => 'IntegerOptional', ],
				'Marker'          => [ 'shape' => 'String', ],
			],
		],
		'DescribePendingMaintenanceActionsMessage'      => [
			'type'    => 'structure',
			'members' => [
				'ResourceIdentifier' => [ 'shape' => 'String', ],
				'Filters'            => [ 'shape' => 'FilterList', ],
				'Marker'             => [ 'shape' => 'String', ],
				'MaxRecords'         => [ 'shape' => 'IntegerOptional', ],
			],
		],
		'Endpoint'                                      => [
			'type'    => 'structure',
			'members' => [
				'Address'      => [ 'shape' => 'String', ],
				'Port'         => [ 'shape' => 'Integer', ],
				'HostedZoneId' => [ 'shape' => 'String', ],
			],
		],
		'EngineDefaults'                                => [
			'type'    => 'structure',
			'members' => [
				'DBParameterGroupFamily' => [ 'shape' => 'String', ],
				'Marker'                 => [ 'shape' => 'String', ],
				'Parameters'             => [ 'shape' => 'ParametersList', ],
			],
			'wrapper' => true,
		],
		'Event'                                         => [
			'type'    => 'structure',
			'members' => [
				'SourceIdentifier' => [ 'shape' => 'String', ],
				'SourceType'       => [ 'shape' => 'SourceType', ],
				'Message'          => [ 'shape' => 'String', ],
				'EventCategories'  => [ 'shape' => 'EventCategoriesList', ],
				'Date'             => [ 'shape' => 'TStamp', ],
				'SourceArn'        => [ 'shape' => 'String', ],
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
				'SourceType'      => [ 'shape' => 'String', ],
				'EventCategories' => [ 'shape' => 'EventCategoriesList', ],
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
		'EventList'                                     => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Event',
				'locationName' => 'Event',
			],
		],
		'EventsMessage'                                 => [
			'type'    => 'structure',
			'members' => [
				'Marker' => [ 'shape' => 'String', ],
				'Events' => [ 'shape' => 'EventList', ],
			],
		],
		'FailoverDBClusterMessage'                      => [
			'type'    => 'structure',
			'members' => [
				'DBClusterIdentifier'        => [ 'shape' => 'String', ],
				'TargetDBInstanceIdentifier' => [ 'shape' => 'String', ],
			],
		],
		'FailoverDBClusterResult'                       => [
			'type'    => 'structure',
			'members' => [ 'DBCluster' => [ 'shape' => 'DBCluster', ], ],
		],
		'Filter'                                        => [
			'type'     => 'structure',
			'required' => [ 'Name', 'Values', ],
			'members'  => [
				'Name'   => [ 'shape' => 'String', ],
				'Values' => [ 'shape' => 'FilterValueList', ],
			],
		],
		'FilterList'                                    => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Filter',
				'locationName' => 'Filter',
			],
		],
		'FilterValueList'                               => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'String',
				'locationName' => 'Value',
			],
		],
		'InstanceQuotaExceededFault'                    => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InstanceQuotaExceeded',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InsufficientDBClusterCapacityFault'            => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InsufficientDBClusterCapacityFault',
				'httpStatusCode' => 403,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InsufficientDBInstanceCapacityFault'           => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InsufficientDBInstanceCapacity',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InsufficientStorageClusterCapacityFault'       => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InsufficientStorageClusterCapacity',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'Integer'                                       => [ 'type' => 'integer', ],
		'IntegerOptional'                               => [ 'type' => 'integer', ],
		'InvalidDBClusterSnapshotStateFault'            => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidDBClusterSnapshotStateFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidDBClusterStateFault'                    => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidDBClusterStateFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidDBInstanceStateFault'                   => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidDBInstanceState',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidDBParameterGroupStateFault'             => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidDBParameterGroupState',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidDBSecurityGroupStateFault'              => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidDBSecurityGroupState',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidDBSnapshotStateFault'                   => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidDBSnapshotState',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidDBSubnetGroupStateFault'                => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidDBSubnetGroupStateFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidDBSubnetStateFault'                     => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidDBSubnetStateFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'InvalidRestoreFault'                           => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'InvalidRestoreFault',
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
		'KMSKeyNotAccessibleFault'                      => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'KMSKeyNotAccessibleFault',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'KeyList'                                       => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ],
		'ListTagsForResourceMessage'                    => [
			'type'     => 'structure',
			'required' => [ 'ResourceName', ],
			'members'  => [
				'ResourceName' => [ 'shape' => 'String', ],
				'Filters'      => [ 'shape' => 'FilterList', ],
			],
		],
		'LogTypeList'                                   => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ],
		'ModifyDBClusterMessage'                        => [
			'type'     => 'structure',
			'required' => [ 'DBClusterIdentifier', ],
			'members'  => [
				'DBClusterIdentifier'               => [ 'shape' => 'String', ],
				'NewDBClusterIdentifier'            => [ 'shape' => 'String', ],
				'ApplyImmediately'                  => [ 'shape' => 'Boolean', ],
				'BackupRetentionPeriod'             => [ 'shape' => 'IntegerOptional', ],
				'DBClusterParameterGroupName'       => [ 'shape' => 'String', ],
				'VpcSecurityGroupIds'               => [ 'shape' => 'VpcSecurityGroupIdList', ],
				'Port'                              => [ 'shape' => 'IntegerOptional', ],
				'MasterUserPassword'                => [ 'shape' => 'String', ],
				'PreferredBackupWindow'             => [ 'shape' => 'String', ],
				'PreferredMaintenanceWindow'        => [ 'shape' => 'String', ],
				'CloudwatchLogsExportConfiguration' => [ 'shape' => 'CloudwatchLogsExportConfiguration', ],
				'EngineVersion'                     => [ 'shape' => 'String', ],
				'DeletionProtection'                => [ 'shape' => 'BooleanOptional', ],
			],
		],
		'ModifyDBClusterParameterGroupMessage'          => [
			'type'     => 'structure',
			'required' => [
				'DBClusterParameterGroupName',
				'Parameters',
			],
			'members'  => [
				'DBClusterParameterGroupName' => [ 'shape' => 'String', ],
				'Parameters'                  => [ 'shape' => 'ParametersList', ],
			],
		],
		'ModifyDBClusterResult'                         => [
			'type'    => 'structure',
			'members' => [ 'DBCluster' => [ 'shape' => 'DBCluster', ], ],
		],
		'ModifyDBClusterSnapshotAttributeMessage'       => [
			'type'     => 'structure',
			'required' => [
				'DBClusterSnapshotIdentifier',
				'AttributeName',
			],
			'members'  => [
				'DBClusterSnapshotIdentifier' => [ 'shape' => 'String', ],
				'AttributeName'               => [ 'shape' => 'String', ],
				'ValuesToAdd'                 => [ 'shape' => 'AttributeValueList', ],
				'ValuesToRemove'              => [ 'shape' => 'AttributeValueList', ],
			],
		],
		'ModifyDBClusterSnapshotAttributeResult'        => [
			'type'    => 'structure',
			'members' => [ 'DBClusterSnapshotAttributesResult' => [ 'shape' => 'DBClusterSnapshotAttributesResult', ], ],
		],
		'ModifyDBInstanceMessage'                       => [
			'type'     => 'structure',
			'required' => [ 'DBInstanceIdentifier', ],
			'members'  => [
				'DBInstanceIdentifier'       => [ 'shape' => 'String', ],
				'DBInstanceClass'            => [ 'shape' => 'String', ],
				'ApplyImmediately'           => [ 'shape' => 'Boolean', ],
				'PreferredMaintenanceWindow' => [ 'shape' => 'String', ],
				'AutoMinorVersionUpgrade'    => [ 'shape' => 'BooleanOptional', ],
				'NewDBInstanceIdentifier'    => [ 'shape' => 'String', ],
				'PromotionTier'              => [ 'shape' => 'IntegerOptional', ],
			],
		],
		'ModifyDBInstanceResult'                        => [
			'type'    => 'structure',
			'members' => [ 'DBInstance' => [ 'shape' => 'DBInstance', ], ],
		],
		'ModifyDBSubnetGroupMessage'                    => [
			'type'     => 'structure',
			'required' => [ 'DBSubnetGroupName', 'SubnetIds', ],
			'members'  => [
				'DBSubnetGroupName'        => [ 'shape' => 'String', ],
				'DBSubnetGroupDescription' => [ 'shape' => 'String', ],
				'SubnetIds'                => [ 'shape' => 'SubnetIdentifierList', ],
			],
		],
		'ModifyDBSubnetGroupResult'                     => [
			'type'    => 'structure',
			'members' => [ 'DBSubnetGroup' => [ 'shape' => 'DBSubnetGroup', ], ],
		],
		'OrderableDBInstanceOption'                     => [
			'type'    => 'structure',
			'members' => [
				'Engine'            => [ 'shape' => 'String', ],
				'EngineVersion'     => [ 'shape' => 'String', ],
				'DBInstanceClass'   => [ 'shape' => 'String', ],
				'LicenseModel'      => [ 'shape' => 'String', ],
				'AvailabilityZones' => [ 'shape' => 'AvailabilityZoneList', ],
				'Vpc'               => [ 'shape' => 'Boolean', ],
			],
			'wrapper' => true,
		],
		'OrderableDBInstanceOptionsList'                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'OrderableDBInstanceOption',
				'locationName' => 'OrderableDBInstanceOption',
			],
		],
		'OrderableDBInstanceOptionsMessage'             => [
			'type'    => 'structure',
			'members' => [
				'OrderableDBInstanceOptions' => [ 'shape' => 'OrderableDBInstanceOptionsList', ],
				'Marker'                     => [ 'shape' => 'String', ],
			],
		],
		'Parameter'                                     => [
			'type'    => 'structure',
			'members' => [
				'ParameterName'        => [ 'shape' => 'String', ],
				'ParameterValue'       => [ 'shape' => 'String', ],
				'Description'          => [ 'shape' => 'String', ],
				'Source'               => [ 'shape' => 'String', ],
				'ApplyType'            => [ 'shape' => 'String', ],
				'DataType'             => [ 'shape' => 'String', ],
				'AllowedValues'        => [ 'shape' => 'String', ],
				'IsModifiable'         => [ 'shape' => 'Boolean', ],
				'MinimumEngineVersion' => [ 'shape' => 'String', ],
				'ApplyMethod'          => [ 'shape' => 'ApplyMethod', ],
			],
		],
		'ParametersList'                                => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'Parameter',
				'locationName' => 'Parameter',
			],
		],
		'PendingCloudwatchLogsExports'                  => [
			'type'    => 'structure',
			'members' => [
				'LogTypesToEnable'  => [ 'shape' => 'LogTypeList', ],
				'LogTypesToDisable' => [ 'shape' => 'LogTypeList', ],
			],
		],
		'PendingMaintenanceAction'                      => [
			'type'    => 'structure',
			'members' => [
				'Action'               => [ 'shape' => 'String', ],
				'AutoAppliedAfterDate' => [ 'shape' => 'TStamp', ],
				'ForcedApplyDate'      => [ 'shape' => 'TStamp', ],
				'OptInStatus'          => [ 'shape' => 'String', ],
				'CurrentApplyDate'     => [ 'shape' => 'TStamp', ],
				'Description'          => [ 'shape' => 'String', ],
			],
		],
		'PendingMaintenanceActionDetails'               => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'PendingMaintenanceAction',
				'locationName' => 'PendingMaintenanceAction',
			],
		],
		'PendingMaintenanceActions'                     => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'ResourcePendingMaintenanceActions',
				'locationName' => 'ResourcePendingMaintenanceActions',
			],
		],
		'PendingMaintenanceActionsMessage'              => [
			'type'    => 'structure',
			'members' => [
				'PendingMaintenanceActions' => [ 'shape' => 'PendingMaintenanceActions', ],
				'Marker'                    => [ 'shape' => 'String', ],
			],
		],
		'PendingModifiedValues'                         => [
			'type'    => 'structure',
			'members' => [
				'DBInstanceClass'              => [ 'shape' => 'String', ],
				'AllocatedStorage'             => [ 'shape' => 'IntegerOptional', ],
				'MasterUserPassword'           => [ 'shape' => 'String', ],
				'Port'                         => [ 'shape' => 'IntegerOptional', ],
				'BackupRetentionPeriod'        => [ 'shape' => 'IntegerOptional', ],
				'MultiAZ'                      => [ 'shape' => 'BooleanOptional', ],
				'EngineVersion'                => [ 'shape' => 'String', ],
				'LicenseModel'                 => [ 'shape' => 'String', ],
				'Iops'                         => [ 'shape' => 'IntegerOptional', ],
				'DBInstanceIdentifier'         => [ 'shape' => 'String', ],
				'StorageType'                  => [ 'shape' => 'String', ],
				'CACertificateIdentifier'      => [ 'shape' => 'String', ],
				'DBSubnetGroupName'            => [ 'shape' => 'String', ],
				'PendingCloudwatchLogsExports' => [ 'shape' => 'PendingCloudwatchLogsExports', ],
			],
		],
		'RebootDBInstanceMessage'                       => [
			'type'     => 'structure',
			'required' => [ 'DBInstanceIdentifier', ],
			'members'  => [
				'DBInstanceIdentifier' => [ 'shape' => 'String', ],
				'ForceFailover'        => [ 'shape' => 'BooleanOptional', ],
			],
		],
		'RebootDBInstanceResult'                        => [
			'type'    => 'structure',
			'members' => [ 'DBInstance' => [ 'shape' => 'DBInstance', ], ],
		],
		'RemoveTagsFromResourceMessage'                 => [
			'type'     => 'structure',
			'required' => [ 'ResourceName', 'TagKeys', ],
			'members'  => [
				'ResourceName' => [ 'shape' => 'String', ],
				'TagKeys'      => [ 'shape' => 'KeyList', ],
			],
		],
		'ResetDBClusterParameterGroupMessage'           => [
			'type'     => 'structure',
			'required' => [ 'DBClusterParameterGroupName', ],
			'members'  => [
				'DBClusterParameterGroupName' => [ 'shape' => 'String', ],
				'ResetAllParameters'          => [ 'shape' => 'Boolean', ],
				'Parameters'                  => [ 'shape' => 'ParametersList', ],
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
		'ResourcePendingMaintenanceActions'             => [
			'type'    => 'structure',
			'members' => [
				'ResourceIdentifier'              => [ 'shape' => 'String', ],
				'PendingMaintenanceActionDetails' => [ 'shape' => 'PendingMaintenanceActionDetails', ],
			],
			'wrapper' => true,
		],
		'RestoreDBClusterFromSnapshotMessage'           => [
			'type'     => 'structure',
			'required' => [
				'DBClusterIdentifier',
				'SnapshotIdentifier',
				'Engine',
			],
			'members'  => [
				'AvailabilityZones'           => [ 'shape' => 'AvailabilityZones', ],
				'DBClusterIdentifier'         => [ 'shape' => 'String', ],
				'SnapshotIdentifier'          => [ 'shape' => 'String', ],
				'Engine'                      => [ 'shape' => 'String', ],
				'EngineVersion'               => [ 'shape' => 'String', ],
				'Port'                        => [ 'shape' => 'IntegerOptional', ],
				'DBSubnetGroupName'           => [ 'shape' => 'String', ],
				'VpcSecurityGroupIds'         => [ 'shape' => 'VpcSecurityGroupIdList', ],
				'Tags'                        => [ 'shape' => 'TagList', ],
				'KmsKeyId'                    => [ 'shape' => 'String', ],
				'EnableCloudwatchLogsExports' => [ 'shape' => 'LogTypeList', ],
				'DeletionProtection'          => [ 'shape' => 'BooleanOptional', ],
			],
		],
		'RestoreDBClusterFromSnapshotResult'            => [
			'type'    => 'structure',
			'members' => [ 'DBCluster' => [ 'shape' => 'DBCluster', ], ],
		],
		'RestoreDBClusterToPointInTimeMessage'          => [
			'type'     => 'structure',
			'required' => [
				'DBClusterIdentifier',
				'SourceDBClusterIdentifier',
			],
			'members'  => [
				'DBClusterIdentifier'         => [ 'shape' => 'String', ],
				'SourceDBClusterIdentifier'   => [ 'shape' => 'String', ],
				'RestoreToTime'               => [ 'shape' => 'TStamp', ],
				'UseLatestRestorableTime'     => [ 'shape' => 'Boolean', ],
				'Port'                        => [ 'shape' => 'IntegerOptional', ],
				'DBSubnetGroupName'           => [ 'shape' => 'String', ],
				'VpcSecurityGroupIds'         => [ 'shape' => 'VpcSecurityGroupIdList', ],
				'Tags'                        => [ 'shape' => 'TagList', ],
				'KmsKeyId'                    => [ 'shape' => 'String', ],
				'EnableCloudwatchLogsExports' => [ 'shape' => 'LogTypeList', ],
				'DeletionProtection'          => [ 'shape' => 'BooleanOptional', ],
			],
		],
		'RestoreDBClusterToPointInTimeResult'           => [
			'type'    => 'structure',
			'members' => [ 'DBCluster' => [ 'shape' => 'DBCluster', ], ],
		],
		'SharedSnapshotQuotaExceededFault'              => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'SharedSnapshotQuotaExceeded',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'SnapshotQuotaExceededFault'                    => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'SnapshotQuotaExceeded',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'SourceType'                                    => [
			'type' => 'string',
			'enum' => [
				'db-instance',
				'db-parameter-group',
				'db-security-group',
				'db-snapshot',
				'db-cluster',
				'db-cluster-snapshot',
			],
		],
		'StartDBClusterMessage'                         => [
			'type'     => 'structure',
			'required' => [ 'DBClusterIdentifier', ],
			'members'  => [ 'DBClusterIdentifier' => [ 'shape' => 'String', ], ],
		],
		'StartDBClusterResult'                          => [
			'type'    => 'structure',
			'members' => [ 'DBCluster' => [ 'shape' => 'DBCluster', ], ],
		],
		'StopDBClusterMessage'                          => [
			'type'     => 'structure',
			'required' => [ 'DBClusterIdentifier', ],
			'members'  => [ 'DBClusterIdentifier' => [ 'shape' => 'String', ], ],
		],
		'StopDBClusterResult'                           => [
			'type'    => 'structure',
			'members' => [ 'DBCluster' => [ 'shape' => 'DBCluster', ], ],
		],
		'StorageQuotaExceededFault'                     => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'StorageQuotaExceeded',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
		],
		'StorageTypeNotSupportedFault'                  => [
			'type'      => 'structure',
			'members'   => [],
			'error'     => [
				'code'           => 'StorageTypeNotSupported',
				'httpStatusCode' => 400,
				'senderFault'    => true,
			],
			'exception' => true,
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
		'TStamp'                                        => [ 'type' => 'timestamp', ],
		'Tag'                                           => [
			'type'    => 'structure',
			'members' => [
				'Key'   => [ 'shape' => 'String', ],
				'Value' => [ 'shape' => 'String', ],
			],
		],
		'TagList'                                       => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Tag', 'locationName' => 'Tag', ],
		],
		'TagListMessage'                                => [
			'type'    => 'structure',
			'members' => [ 'TagList' => [ 'shape' => 'TagList', ], ],
		],
		'UpgradeTarget'                                 => [
			'type'    => 'structure',
			'members' => [
				'Engine'                => [ 'shape' => 'String', ],
				'EngineVersion'         => [ 'shape' => 'String', ],
				'Description'           => [ 'shape' => 'String', ],
				'AutoUpgrade'           => [ 'shape' => 'Boolean', ],
				'IsMajorVersionUpgrade' => [ 'shape' => 'Boolean', ],
			],
		],
		'ValidUpgradeTargetList'                        => [
			'type'   => 'list',
			'member' => [
				'shape'        => 'UpgradeTarget',
				'locationName' => 'UpgradeTarget',
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
				'locationName' => 'VpcSecurityGroupMembership',
			],
		],
	],
];
