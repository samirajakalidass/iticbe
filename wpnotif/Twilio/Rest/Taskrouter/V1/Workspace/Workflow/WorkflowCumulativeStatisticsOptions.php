<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Taskrouter\V1\Workspace\Workflow;

use Twilio\Options;
use Twilio\Values;

abstract class WorkflowCumulativeStatisticsOptions {
	/**
	 * @param \DateTime $endDate Filter cumulative statistics by an end date.
	 * @param integer $minutes Filter cumulative statistics by up to 'x' minutes in
	 *                         the past.
	 * @param \DateTime $startDate Filter cumulative statistics by a start date.
	 * @param string $taskChannel Filter real-time and cumulative statistics by
	 *                            TaskChannel.
	 * @param string $splitByWaitTime A comma separated values for viewing splits
	 *                                of tasks canceled and accepted above the
	 *                                given threshold in seconds.
	 *
	 * @return FetchWorkflowCumulativeStatisticsOptions Options builder
	 */
	public static function fetch( $endDate = Values::NONE, $minutes = Values::NONE, $startDate = Values::NONE, $taskChannel = Values::NONE, $splitByWaitTime = Values::NONE ) {
		return new FetchWorkflowCumulativeStatisticsOptions( $endDate, $minutes, $startDate, $taskChannel, $splitByWaitTime );
	}
}

class FetchWorkflowCumulativeStatisticsOptions extends Options {
	/**
	 * @param \DateTime $endDate Filter cumulative statistics by an end date.
	 * @param integer $minutes Filter cumulative statistics by up to 'x' minutes in
	 *                         the past.
	 * @param \DateTime $startDate Filter cumulative statistics by a start date.
	 * @param string $taskChannel Filter real-time and cumulative statistics by
	 *                            TaskChannel.
	 * @param string $splitByWaitTime A comma separated values for viewing splits
	 *                                of tasks canceled and accepted above the
	 *                                given threshold in seconds.
	 */
	public function __construct( $endDate = Values::NONE, $minutes = Values::NONE, $startDate = Values::NONE, $taskChannel = Values::NONE, $splitByWaitTime = Values::NONE ) {
		$this->options['endDate']         = $endDate;
		$this->options['minutes']         = $minutes;
		$this->options['startDate']       = $startDate;
		$this->options['taskChannel']     = $taskChannel;
		$this->options['splitByWaitTime'] = $splitByWaitTime;
	}

	/**
	 * Filter cumulative statistics by an end date. This is helpful for defining a range of statistics to capture. Input is a GMT ISO 8601 Timestamp
	 *
	 * @param \DateTime $endDate Filter cumulative statistics by an end date.
	 *
	 * @return $this Fluent Builder
	 */
	public function setEndDate( $endDate ) {
		$this->options['endDate'] = $endDate;

		return $this;
	}

	/**
	 * Filter cumulative statistics by up to 'x' minutes in the past. This is helpful for statistics for the last 15 minutes, 240 minutes (4 hours), and 480 minutes (8 hours) to see trends. Defaults to 15 minutes.
	 *
	 * @param integer $minutes Filter cumulative statistics by up to 'x' minutes in
	 *                         the past.
	 *
	 * @return $this Fluent Builder
	 */
	public function setMinutes( $minutes ) {
		$this->options['minutes'] = $minutes;

		return $this;
	}

	/**
	 * Filter cumulative statistics by a start date. This is helpful for defining a range of statistics to capture. Input is a GMT ISO 8601 Timestamp
	 *
	 * @param \DateTime $startDate Filter cumulative statistics by a start date.
	 *
	 * @return $this Fluent Builder
	 */
	public function setStartDate( $startDate ) {
		$this->options['startDate'] = $startDate;

		return $this;
	}

	/**
	 * Filter real-time and cumulative statistics by TaskChannel. Takes in a Unique Name ("voice", "sms", "default", etc.) or a TaskChannelSid.
	 *
	 * @param string $taskChannel Filter real-time and cumulative statistics by
	 *                            TaskChannel.
	 *
	 * @return $this Fluent Builder
	 */
	public function setTaskChannel( $taskChannel ) {
		$this->options['taskChannel'] = $taskChannel;

		return $this;
	}

	/**
	 * A comma separated values for viewing splits of tasks canceled and accepted above the given threshold in seconds. Ex: "5,30" would show splits of tasks that were canceled or accepted before or after 5 seconds and respectively, 30 seconds. This is great for showing short abandoned tasks or tasks that failed to meet your SLA.
	 *
	 * @param string $splitByWaitTime A comma separated values for viewing splits
	 *                                of tasks canceled and accepted above the
	 *                                given threshold in seconds.
	 *
	 * @return $this Fluent Builder
	 */
	public function setSplitByWaitTime( $splitByWaitTime ) {
		$this->options['splitByWaitTime'] = $splitByWaitTime;

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

		return '[Twilio.Taskrouter.V1.FetchWorkflowCumulativeStatisticsOptions ' . implode( ' ', $options ) . ']';
	}
}