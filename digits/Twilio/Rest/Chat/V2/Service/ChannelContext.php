<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Chat\V2\Service;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Rest\Chat\V2\Service\Channel\InviteContext;
use Twilio\Rest\Chat\V2\Service\Channel\InviteList;
use Twilio\Rest\Chat\V2\Service\Channel\MemberContext;
use Twilio\Rest\Chat\V2\Service\Channel\MemberList;
use Twilio\Rest\Chat\V2\Service\Channel\MessageContext;
use Twilio\Rest\Chat\V2\Service\Channel\MessageList;
use Twilio\Rest\Chat\V2\Service\Channel\WebhookContext;
use Twilio\Rest\Chat\V2\Service\Channel\WebhookList;
use Twilio\Serialize;
use Twilio\Values;
use Twilio\Version;

/**
 * @property MemberList members
 * @property MessageList messages
 * @property InviteList invites
 * @property WebhookList webhooks
 * @method MemberContext members(string $sid)
 * @method MessageContext messages(string $sid)
 * @method InviteContext invites(string $sid)
 * @method WebhookContext webhooks(string $sid)
 */
class ChannelContext extends InstanceContext {
    protected $_members = null;
    protected $_messages = null;
    protected $_invites = null;
    protected $_webhooks = null;

    /**
     * Initialize the ChannelContext
     * 
     * @param Version $version Version that contains the resource
     * @param string $serviceSid Sid of the Service this channel belongs to.
     * @param string $sid Key that uniquely defines the channel to fetch.
     * @return ChannelContext
     */
    public function __construct(Version $version, $serviceSid, $sid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('serviceSid' => $serviceSid, 'sid' => $sid, );

        $this->uri = '/Services/' . rawurlencode($serviceSid) . '/Channels/' . rawurlencode($sid) . '';
    }

    /**
     * Fetch a ChannelInstance
     * 
     * @return ChannelInstance Fetched ChannelInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() {
        $params = Values::of(array());

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new ChannelInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['sid']
        );
    }

    /**
     * Deletes the ChannelInstance
     * 
     * @return boolean True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() {
        return $this->version->delete('delete', $this->uri);
    }

    /**
     * Update the ChannelInstance
     * 
     * @param array|Options $options Optional Arguments
     * @return ChannelInstance Updated ChannelInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update($options = array()) {
        $options = new Values($options);

        $data = Values::of(array(
            'FriendlyName' => $options['friendlyName'],
            'UniqueName' => $options['uniqueName'],
            'Attributes' => $options['attributes'],
            'DateCreated' => Serialize::iso8601DateTime($options['dateCreated']),
            'DateUpdated' => Serialize::iso8601DateTime($options['dateUpdated']),
            'CreatedBy' => $options['createdBy'],
        ));

        $payload = $this->version->update(
            'POST',
            $this->uri,
            array(),
            $data
        );

        return new ChannelInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['sid']
        );
    }

    /**
     * Magic getter to lazy load subresources
     *
     * @param string $name Subresource to return
     *
     * @return ListResource The requested subresource
     * @throws TwilioException For unknown subresources
     */
    public function __get($name) {
        if (property_exists($this, '_' . $name)) {
            $method = 'get' . ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown subresource ' . $name);
    }

    /**
     * Magic caller to get resource contexts
     *
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     *
     * @return InstanceContext The requested resource context
     * @throws TwilioException For unknown resource
     */
    public function __call($name, $arguments) {
        $property = $this->$name;
        if (method_exists($property, 'getContext')) {
            return call_user_func_array(array($property, 'getContext'), $arguments);
        }

        throw new TwilioException('Resource does not have a context');
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Chat.V2.ChannelContext ' . implode(' ', $context) . ']';
    }

    /**
     * Access the members
     *
     * @return MemberList
     */
    protected function getMembers() {
        if (!$this->_members) {
            $this->_members = new MemberList(
                $this->version,
                $this->solution['serviceSid'],
                $this->solution['sid']
            );
        }

        return $this->_members;
    }

    /**
     * Access the messages
     *
     * @return MessageList
     */
    protected function getMessages() {
        if (!$this->_messages) {
            $this->_messages = new MessageList(
                $this->version,
                $this->solution['serviceSid'],
                $this->solution['sid']
            );
        }

        return $this->_messages;
    }

    /**
     * Access the invites
     *
     * @return InviteList
     */
    protected function getInvites() {
        if (!$this->_invites) {
            $this->_invites = new InviteList(
                $this->version,
                $this->solution['serviceSid'],
                $this->solution['sid']
            );
        }

        return $this->_invites;
    }

    /**
     * Access the webhooks
     *
     * @return WebhookList
     */
    protected function getWebhooks() {
        if (!$this->_webhooks) {
            $this->_webhooks = new WebhookList(
                $this->version,
                $this->solution['serviceSid'],
                $this->solution['sid']
            );
        }

        return $this->_webhooks;
    }
}