<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Wireless\V1\Sim;

use Twilio\Options;
use Twilio\Values;

abstract class DataSessionOptions {
	/**
	 * @param \DateTime $end The end
	 * @param \DateTime $start The start
	 *
	 * @return ReadDataSessionOptions Options builder
	 */
	public static function read( $end = Values::NONE, $start = Values::NONE ) {
		return new ReadDataSessionOptions( $end, $start );
	}
}

class ReadDataSessionOptions extends Options {
	/**
	 * @param \DateTime $end The end
	 * @param \DateTime $start The start
	 */
	public function __construct( $end = Values::NONE, $start = Values::NONE ) {
		$this->options['end']   = $end;
		$this->options['start'] = $start;
	}

	/**
	 * The end
	 *
	 * @param \DateTime $end The end
	 *
	 * @return $this Fluent Builder
	 */
	public function setEnd( $end ) {
		$this->options['end'] = $end;

		return $this;
	}

	/**
	 * The start
	 *
	 * @param \DateTime $start The start
	 *
	 * @return $this Fluent Builder
	 */
	public function setStart( $start ) {
		$this->options['start'] = $start;

		return $this;
	}

	/**
	 * Provide a friendly representation
	 *
	 * @return string Machine friendly representation
	 */
	public function __toString() {
		$options = array();
		foreach ( $this->options as $key => $value ) {
			if ( $value != Values::NONE ) {
				$options[] = "$key=$value";
			}
		}

		return '[Twilio.Wireless.V1.ReadDataSessionOptions ' . implode( ' ', $options ) . ']';
	}
}