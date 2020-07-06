<?php

namespace Aws\CloudSearch;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon CloudSearch** service.
 *
 * @method \Aws\Result buildSuggesters( array $args = [] )
 * @method \GuzzleHttp\Promise\Promise buildSuggestersAsync( array $args = [] )
 * @method \Aws\Result createDomain( array $args = [] )
 * @method \GuzzleHttp\Promise\Promise createDomainAsync( array $args = [] )
 * @method \Aws\Result defineAnalysisScheme( array $args = [] )
 * @method \GuzzleHttp\Promise\Promise defineAnalysisSchemeAsync( array $args = [] )
 * @method \Aws\Result defineExpression( array $args = [] )
 * @method \GuzzleHttp\Promise\Promise defineExpressionAsync( array $args = [] )
 * @method \Aws\Result defineIndexField( array $args = [] )
 * @method \GuzzleHttp\Promise\Promise defineIndexFieldAsync( array $args = [] )
 * @method \Aws\Result defineSuggester( array $args = [] )
 * @method \GuzzleHttp\Promise\Promise defineSuggesterAsync( array $args = [] )
 * @method \Aws\Result deleteAnalysisScheme( array $args = [] )
 * @method \GuzzleHttp\Promise\Promise deleteAnalysisSchemeAsync( array $args = [] )
 * @method \Aws\Result deleteDomain( array $args = [] )
 * @method \GuzzleHttp\Promise\Promise deleteDomainAsync( array $args = [] )
 * @method \Aws\Result deleteExpression( array $args = [] )
 * @method \GuzzleHttp\Promise\Promise deleteExpressionAsync( array $args = [] )
 * @method \Aws\Result deleteIndexField( array $args = [] )
 * @method \GuzzleHttp\Promise\Promise deleteIndexFieldAsync( array $args = [] )
 * @method \Aws\Result deleteSuggester( array $args = [] )
 * @method \GuzzleHttp\Promise\Promise deleteSuggesterAsync( array $args = [] )
 * @method \Aws\Result describeAnalysisSchemes( array $args = [] )
 * @method \GuzzleHttp\Promise\Promise describeAnalysisSchemesAsync( array $args = [] )
 * @method \Aws\Result describeAvailabilityOptions( array $args = [] )
 * @method \GuzzleHttp\Promise\Promise describeAvailabilityOptionsAsync( array $args = [] )
 * @method \Aws\Result describeDomains( array $args = [] )
 * @method \GuzzleHttp\Promise\Promise describeDomainsAsync( array $args = [] )
 * @method \Aws\Result describeExpressions( array $args = [] )
 * @method \GuzzleHttp\Promise\Promise describeExpressionsAsync( array $args = [] )
 * @method \Aws\Result describeIndexFields( array $args = [] )
 * @method \GuzzleHttp\Promise\Promise describeIndexFieldsAsync( array $args = [] )
 * @method \Aws\Result describeScalingParameters( array $args = [] )
 * @method \GuzzleHttp\Promise\Promise describeScalingParametersAsync( array $args = [] )
 * @method \Aws\Result describeServiceAccessPolicies( array $args = [] )
 * @method \GuzzleHttp\Promise\Promise describeServiceAccessPoliciesAsync( array $args = [] )
 * @method \Aws\Result describeSuggesters( array $args = [] )
 * @method \GuzzleHttp\Promise\Promise describeSuggestersAsync( array $args = [] )
 * @method \Aws\Result indexDocuments( array $args = [] )
 * @method \GuzzleHttp\Promise\Promise indexDocumentsAsync( array $args = [] )
 * @method \Aws\Result listDomainNames( array $args = [] )
 * @method \GuzzleHttp\Promise\Promise listDomainNamesAsync( array $args = [] )
 * @method \Aws\Result updateAvailabilityOptions( array $args = [] )
 * @method \GuzzleHttp\Promise\Promise updateAvailabilityOptionsAsync( array $args = [] )
 * @method \Aws\Result updateScalingParameters( array $args = [] )
 * @method \GuzzleHttp\Promise\Promise updateScalingParametersAsync( array $args = [] )
 * @method \Aws\Result updateServiceAccessPolicies( array $args = [] )
 * @method \GuzzleHttp\Promise\Promise updateServiceAccessPoliciesAsync( array $args = [] )
 */
class CloudSearchClient extends AwsClient {
}
