<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Autopilot\V1;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
abstract class AssistantOptions {
	/**
	 * @param string $friendlyName A text description for the Assistant. It is
	 *                             non-unique and can be up to 255 characters long.
	 * @param boolean $logQueries A boolean that specifies whether queries should
	 *                            be logged for 30 days past training. If `false`,
	 *                            no queries will be stored. If `true`, queries
	 *                            will be stored for 30 days and deleted
	 *                            thereafter. Defaults to `true` if no value is
	 *                            provided.
	 * @param string $uniqueName A user-provided string that uniquely identifies
	 *                           this resource as an alternative to the sid. Unique
	 *                           up to 64 characters long.
	 * @param string $callbackUrl The callback_url
	 * @param string $callbackEvents A space-separated list of callback events that
	 *                               will trigger callbacks
	 * @param array $styleSheet A JSON object that defines the assistant [style
	 *                          sheet](https://www.twilio.com/docs/autopilot/api/assistant/stylesheet)
	 * @param array $defaults A JSON object that defines the assistant's [default
	 *                        tasks](https://www.twilio.com/docs/autopilot/api/assistant/defaults) for various scenarios
	 *
	 * @return CreateAssistantOptions Options builder
	 */
	public static function create( $friendlyName = Values::NONE, $logQueries = Values::NONE, $uniqueName = Values::NONE, $callbackUrl = Values::NONE, $callbackEvents = Values::NONE, $styleSheet = Values::NONE, $defaults = Values::NONE ) {
		return new CreateAssistantOptions( $friendlyName, $logQueries, $uniqueName, $callbackUrl, $callbackEvents, $styleSheet, $defaults );
	}

	/**
	 * @param string $friendlyName A text description for the Assistant. It is
	 *                             non-unique and can be up to 255 characters long.
	 * @param boolean $logQueries A boolean that specifies whether queries should
	 *                            be logged for 30 days past training. If `false`,
	 *                            no queries will be stored. If `true`, queries
	 *                            will be stored for 30 days and deleted
	 *                            thereafter. Defaults to `true` if no value is
	 *                            provided.
	 * @param string $uniqueName A user-provided string that uniquely identifies
	 *                           this resource as an alternative to the sid. Unique
	 *                           up to 64 characters long.
	 * @param string $callbackUrl The callback_url
	 * @param string $callbackEvents A space-separated list of callback events that
	 *                               will trigger callbacks
	 * @param array $styleSheet A JSON object that defines the assistant [style
	 *                          sheet](https://www.twilio.com/docs/autopilot/api/assistant/stylesheet)
	 * @param array $defaults A JSON object that defines the assistant's [default
	 *                        tasks](https://www.twilio.com/docs/autopilot/api/assistant/defaults) for various scenarios
	 *
	 * @return UpdateAssistantOptions Options builder
	 */
	public static function update( $friendlyName = Values::NONE, $logQueries = Values::NONE, $uniqueName = Values::NONE, $callbackUrl = Values::NONE, $callbackEvents = Values::NONE, $styleSheet = Values::NONE, $defaults = Values::NONE ) {
		return new UpdateAssistantOptions( $friendlyName, $logQueries, $uniqueName, $callbackUrl, $callbackEvents, $styleSheet, $defaults );
	}
}

class CreateAssistantOptions extends Options {
	/**
	 * @param string $friendlyName A text description for the Assistant. It is
	 *                             non-unique and can be up to 255 characters long.
	 * @param boolean $logQueries A boolean that specifies whether queries should
	 *                            be logged for 30 days past training. If `false`,
	 *                            no queries will be stored. If `true`, queries
	 *                            will be stored for 30 days and deleted
	 *                            thereafter. Defaults to `true` if no value is
	 *                            provided.
	 * @param string $uniqueName A user-provided string that uniquely identifies
	 *                           this resource as an alternative to the sid. Unique
	 *                           up to 64 characters long.
	 * @param string $callbackUrl The callback_url
	 * @param string $callbackEvents A space-separated list of callback events that
	 *                               will trigger callbacks
	 * @param array $styleSheet A JSON object that defines the assistant [style
	 *                          sheet](https://www.twilio.com/docs/autopilot/api/assistant/stylesheet)
	 * @param array $defaults A JSON object that defines the assistant's [default
	 *                        tasks](https://www.twilio.com/docs/autopilot/api/assistant/defaults) for various scenarios
	 */
	public function __construct( $friendlyName = Values::NONE, $logQueries = Values::NONE, $uniqueName = Values::NONE, $callbackUrl = Values::NONE, $callbackEvents = Values::NONE, $styleSheet = Values::NONE, $defaults = Values::NONE ) {
		$this->options['friendlyName']   = $friendlyName;
		$this->options['logQueries']     = $logQueries;
		$this->options['uniqueName']     = $uniqueName;
		$this->options['callbackUrl']    = $callbackUrl;
		$this->options['callbackEvents'] = $callbackEvents;
		$this->options['styleSheet']     = $styleSheet;
		$this->options['defaults']       = $defaults;
	}

	/**
	 * A text description for the Assistant. It is non-unique and can be up to 255 characters long.
	 *
	 * @param string $friendlyName A text description for the Assistant. It is
	 *                             non-unique and can be up to 255 characters long.
	 *
	 * @return $this Fluent Builder
	 */
	public function setFriendlyName( $friendlyName ) {
		$this->options['friendlyName'] = $friendlyName;

		return $this;
	}

	/**
	 * A boolean that specifies whether queries should be logged for 30 days past training. If `false`, no queries will be stored. If `true`, queries will be stored for 30 days and deleted thereafter. Defaults to `true` if no value is provided.
	 *
	 * @param boolean $logQueries A boolean that specifies whether queries should
	 *                            be logged for 30 days past training. If `false`,
	 *                            no queries will be stored. If `true`, queries
	 *                            will be stored for 30 days and deleted
	 *                            thereafter. Defaults to `true` if no value is
	 *                            provided.
	 *
	 * @return $this Fluent Builder
	 */
	public function setLogQueries( $logQueries ) {
		$this->options['logQueries'] = $logQueries;

		return $this;
	}

	/**
	 * A user-provided string that uniquely identifies this resource as an alternative to the sid. You can use the unique name in the URL path when addressing this resource. Unique up to 64 characters long.
	 *
	 * @param string $uniqueName A user-provided string that uniquely identifies
	 *                           this resource as an alternative to the sid. Unique
	 *                           up to 64 characters long.
	 *
	 * @return $this Fluent Builder
	 */
	public function setUniqueName( $uniqueName ) {
		$this->options['uniqueName'] = $uniqueName;

		return $this;
	}

	/**
	 * The callback_url
	 *
	 * @param string $callbackUrl The callback_url
	 *
	 * @return $this Fluent Builder
	 */
	public function setCallbackUrl( $callbackUrl ) {
		$this->options['callbackUrl'] = $callbackUrl;

		return $this;
	}

	/**
	 * A space-separated list of callback events that will trigger callbacks
	 *
	 * @param string $callbackEvents A space-separated list of callback events that
	 *                               will trigger callbacks
	 *
	 * @return $this Fluent Builder
	 */
	public function setCallbackEvents( $callbackEvents ) {
		$this->options['callbackEvents'] = $callbackEvents;

		return $this;
	}

	/**
	 * A JSON object that defines the assistant [style sheet](https://www.twilio.com/docs/autopilot/api/assistant/stylesheet)
	 *
	 * @param array $styleSheet A JSON object that defines the assistant [style
	 *                          sheet](https://www.twilio.com/docs/autopilot/api/assistant/stylesheet)
	 *
	 * @return $this Fluent Builder
	 */
	public function setStyleSheet( $styleSheet ) {
		$this->options['styleSheet'] = $styleSheet;

		return $this;
	}

	/**
	 * A JSON object that defines the assistant's [default tasks](https://www.twilio.com/docs/autopilot/api/assistant/defaults) for various scenarios, including initation actions and fallback tasks.
	 *
	 * @param array $defaults A JSON object that defines the assistant's [default
	 *                        tasks](https://www.twilio.com/docs/autopilot/api/assistant/defaults) for various scenarios
	 *
	 * @return $this Fluent Builder
	 */
	public function setDefaults( $defaults ) {
		$this->options['defaults'] = $defaults;

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

		return '[Twilio.Autopilot.V1.CreateAssistantOptions ' . implode( ' ', $options ) . ']';
	}
}

class UpdateAssistantOptions extends Options {
	/**
	 * @param string $friendlyName A text description for the Assistant. It is
	 *                             non-unique and can be up to 255 characters long.
	 * @param boolean $logQueries A boolean that specifies whether queries should
	 *                            be logged for 30 days past training. If `false`,
	 *                            no queries will be stored. If `true`, queries
	 *                            will be stored for 30 days and deleted
	 *                            thereafter. Defaults to `true` if no value is
	 *                            provided.
	 * @param string $uniqueName A user-provided string that uniquely identifies
	 *                           this resource as an alternative to the sid. Unique
	 *                           up to 64 characters long.
	 * @param string $callbackUrl The callback_url
	 * @param string $callbackEvents A space-separated list of callback events that
	 *                               will trigger callbacks
	 * @param array $styleSheet A JSON object that defines the assistant [style
	 *                          sheet](https://www.twilio.com/docs/autopilot/api/assistant/stylesheet)
	 * @param array $defaults A JSON object that defines the assistant's [default
	 *                        tasks](https://www.twilio.com/docs/autopilot/api/assistant/defaults) for various scenarios
	 */
	public function __construct( $friendlyName = Values::NONE, $logQueries = Values::NONE, $uniqueName = Values::NONE, $callbackUrl = Values::NONE, $callbackEvents = Values::NONE, $styleSheet = Values::NONE, $defaults = Values::NONE ) {
		$this->options['friendlyName']   = $friendlyName;
		$this->options['logQueries']     = $logQueries;
		$this->options['uniqueName']     = $uniqueName;
		$this->options['callbackUrl']    = $callbackUrl;
		$this->options['callbackEvents'] = $callbackEvents;
		$this->options['styleSheet']     = $styleSheet;
		$this->options['defaults']       = $defaults;
	}

	/**
	 * A text description for the Assistant. It is non-unique and can be up to 255 characters long.
	 *
	 * @param string $friendlyName A text description for the Assistant. It is
	 *                             non-unique and can be up to 255 characters long.
	 *
	 * @return $this Fluent Builder
	 */
	public function setFriendlyName( $friendlyName ) {
		$this->options['friendlyName'] = $friendlyName;

		return $this;
	}

	/**
	 * A boolean that specifies whether queries should be logged for 30 days past training. If `false`, no queries will be stored. If `true`, queries will be stored for 30 days and deleted thereafter. Defaults to `true` if no value is provided.
	 *
	 * @param boolean $logQueries A boolean that specifies whether queries should
	 *                            be logged for 30 days past training. If `false`,
	 *                            no queries will be stored. If `true`, queries
	 *                            will be stored for 30 days and deleted
	 *                            thereafter. Defaults to `true` if no value is
	 *                            provided.
	 *
	 * @return $this Fluent Builder
	 */
	public function setLogQueries( $logQueries ) {
		$this->options['logQueries'] = $logQueries;

		return $this;
	}

	/**
	 * A user-provided string that uniquely identifies this resource as an alternative to the sid. You can use the unique name in the URL path when addressing this resource. Unique up to 64 characters long.
	 *
	 * @param string $uniqueName A user-provided string that uniquely identifies
	 *                           this resource as an alternative to the sid. Unique
	 *                           up to 64 characters long.
	 *
	 * @return $this Fluent Builder
	 */
	public function setUniqueName( $uniqueName ) {
		$this->options['uniqueName'] = $uniqueName;

		return $this;
	}

	/**
	 * The callback_url
	 *
	 * @param string $callbackUrl The callback_url
	 *
	 * @return $this Fluent Builder
	 */
	public function setCallbackUrl( $callbackUrl ) {
		$this->options['callbackUrl'] = $callbackUrl;

		return $this;
	}

	/**
	 * A space-separated list of callback events that will trigger callbacks
	 *
	 * @param string $callbackEvents A space-separated list of callback events that
	 *                               will trigger callbacks
	 *
	 * @return $this Fluent Builder
	 */
	public function setCallbackEvents( $callbackEvents ) {
		$this->options['callbackEvents'] = $callbackEvents;

		return $this;
	}

	/**
	 * A JSON object that defines the assistant [style sheet](https://www.twilio.com/docs/autopilot/api/assistant/stylesheet)
	 *
	 * @param array $styleSheet A JSON object that defines the assistant [style
	 *                          sheet](https://www.twilio.com/docs/autopilot/api/assistant/stylesheet)
	 *
	 * @return $this Fluent Builder
	 */
	public function setStyleSheet( $styleSheet ) {
		$this->options['styleSheet'] = $styleSheet;

		return $this;
	}

	/**
	 * A JSON object that defines the assistant's [default tasks](https://www.twilio.com/docs/autopilot/api/assistant/defaults) for various scenarios, including initation actions and fallback tasks.
	 *
	 * @param array $defaults A JSON object that defines the assistant's [default
	 *                        tasks](https://www.twilio.com/docs/autopilot/api/assistant/defaults) for various scenarios
	 *
	 * @return $this Fluent Builder
	 */
	public function setDefaults( $defaults ) {
		$this->options['defaults'] = $defaults;

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

		return '[Twilio.Autopilot.V1.UpdateAssistantOptions ' . implode( ' ', $options ) . ']';
	}
}