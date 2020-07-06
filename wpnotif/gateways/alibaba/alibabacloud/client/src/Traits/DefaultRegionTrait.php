<?php

namespace AlibabaCloud\Client\Traits;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Filter\ClientFilter;

/**
 * Trait DefaultRegionTrait
 *
 * @package   AlibabaCloud\Client\Traits
 *
 * @mixin     AlibabaCloud
 */
trait DefaultRegionTrait {
	/**
	 * @var string|null Default RegionId
	 */
	protected static $defaultRegionId;

	/**
	 * @param string $regionId
	 *
	 * @throws ClientException
	 * @deprecated
	 * @codeCoverageIgnore
	 *
	 */
	public static function setGlobalRegionId( $regionId ) {
		self::setDefaultRegionId( $regionId );
	}

	/**
	 * @return string|null
	 * @deprecated
	 * @codeCoverageIgnore
	 *
	 */
	public static function getGlobalRegionId() {
		return self::getDefaultRegionId();
	}

	/**
	 * Get the default RegionId.
	 *
	 * @return string|null
	 */
	public static function getDefaultRegionId() {
		return self::$defaultRegionId;
	}

	/**
	 * Set the default RegionId.
	 *
	 * @param string $regionId
	 *
	 * @throws ClientException
	 */
	public static function setDefaultRegionId( $regionId ) {
		ClientFilter::regionId( $regionId );

		self::$defaultRegionId = $regionId;
	}
}
