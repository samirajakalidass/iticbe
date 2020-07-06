<?php
// This file was auto-generated from sdk-root/src/data/acm-pca/2017-08-22/waiters-2.json
return [
	'version' => 2,
	'waiters' => [
		'CertificateAuthorityCSRCreated' => [
			'description' => 'Wait until a Certificate Authority CSR is created',
			'operation'   => 'GetCertificateAuthorityCsr',
			'delay'       => 3,
			'maxAttempts' => 60,
			'acceptors'   => [
				[
					'state'    => 'success',
					'matcher'  => 'status',
					'expected' => 200,
				],
				[
					'state'    => 'retry',
					'matcher'  => 'error',
					'expected' => 'RequestInProgressException',
				],
			],
		],
		'CertificateIssued'              => [
			'description' => 'Wait until a certificate is issued',
			'operation'   => 'GetCertificate',
			'delay'       => 3,
			'maxAttempts' => 60,
			'acceptors'   => [
				[
					'state'    => 'success',
					'matcher'  => 'status',
					'expected' => 200,
				],
				[
					'state'    => 'retry',
					'matcher'  => 'error',
					'expected' => 'RequestInProgressException',
				],
			],
		],
		'AuditReportCreated'             => [
			'description' => 'Wait until a Audit Report is created',
			'operation'   => 'DescribeCertificateAuthorityAuditReport',
			'delay'       => 3,
			'maxAttempts' => 60,
			'acceptors'   => [
				[
					'state'    => 'success',
					'matcher'  => 'path',
					'argument' => 'AuditReportStatus',
					'expected' => 'SUCCESS',
				],
				[
					'state'    => 'failure',
					'matcher'  => 'path',
					'argument' => 'AuditReportStatus',
					'expected' => 'FAILED',
				],
			],
		],
	],
];
